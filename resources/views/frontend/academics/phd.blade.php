@extends('frontend.master')
@section('title', 'Doctoral Programme : The Assam Royal Global University')
@section('meta_description', 'Explore the Doctoral Programme at Royal Global University, offering advanced research opportunities, expert faculty guidance, and a supportive academic environment to help you achieve your academic and professional goals.')
@section('meta_keywords', 'Doctoral Programme')

@push('styles')
    <style>
     table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 10px;
      text-align: center;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #27467A;
    }

    .pagination {
      text-align: center;
      margin-top: 10px;
    }

    .pagination button {
      padding: 5px 10px;
      margin: 0 3px;
      border: 1px solid #007bff;
      background: white;
      color: #007bff;
      cursor: pointer;
    }

    .pagination button.active {
      background: #007bff;
      color: white;
    }

    .pagination button:disabled {
      background: #eee;
      color: #999;
      cursor: not-allowed;
    }
    </style>
@endpush
@section('content')

    <div class="mobile">
        @include('frontend/components/mobileheader')

        <!-- floating button  -->
        <div>
            <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/phd.pdf" target="_blank" style="
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
                Admission Open For Ph.D. 2025-2026
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
        <div style="padding-top: 90px; position: relative;">
            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">Doctoral <span
                                    style="color: #FF9A1E; font-weight: 500;">Programme</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/doctoral-programmee/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                As an emerging hub of education of the country, the spirit of inter-and multi-disciplinarity
                                permeates every aspect of academics at RGU. The doctoral programme at RGU seeks to develop the
                                next generation of academics who can approach issues from multiple perspectives, glean unique
                                insights, and provide effective solutions to pressing problems of academic and practical
                                interest. RGU Ph.D. Programme carries a strong emphasis on foundational knowledge, academic
                                research, and hands-on experiences with real-world challenges. RGU envisions a future where
                                researchers combine curiosity based intellectual pursuits with a strong commitment to solving
                                complex problems with societal impact. However, the university is an ecosystem that creates
                                opportunities for students based on their interests.
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container pt-4 pb-3" style="background-color: #f0f8ff;">
                <h2 class="mobile-headd2 text-dark">Ph.D. Curriculum</h2>

                @include('frontend/components/phddeptmob')
            </div>

            <div class="mobile-para1 text-dark pt-3 container" style="text-align: justify;">
                <p>In particular, RGU doctoral programme aims to train the researchers who extend the boundaries of current
                    knowledge and are also able to create new knowledge, are adept in the use of traditional methodologies and
                    latest tools and build on these to develop new techniques to answer questions that transcend disciplinary
                    boundaries, can communicate clearly and effectively to the expert and the public at large the insights
                    gleaned from the research, can apply the skills and knowledge in practical contexts.
                </p>
                <h2 class="mobile-headd2">RGU’s APPROACH
                </h2>
                <p>
                    RGU aspires to be recognized for the quality and impact of its research output on the current state of
                    knowledge. Towards this goal, it will strive to provide an environment where cutting-edge research is done
                    by a community of scholars where the focus is placed on conceptual clarity and the utilization and
                    development of new methodologies that are employed not only to illuminate the issue under study but also in
                    a wide range of contexts. Ph.D. scholars will work, through collaborations and joint projects, on real-world
                    issues in close association with outside organizations/industries and apply appropriate and innovative
                    methodologies to address their problems.
                </p>

                <p>
                    The structure of the Ph.D. programme includes a mandatory coursework and candidates are encouraged to take
                    up a wide variety of courses to cultivate a cross-disciplinary outlook. The topic of research is expected to
                    be inter-disciplinary with emphasis on practical impact that is inspired by real world problems or sponsored
                    by industry. The output is expected to address a gap or add something new to the existing corpus of
                    literature. A Ph.D. scholar is not only preparing to be a researcher but also a teacher as teaching is
                    integral to effective learning.
                </p>

                <p>
                    With the spirit of liberal inquiry governing every aspect of academic life, accomplished faculty, emphasis
                    on work-life balance, a close and supportive environment, and access to world-class facilities, being a
                    research scholar at RGU will be an enriching, and productive experience.
                </p>
            </div>

            <div class="container pt-3 text-dark">
                <div class="container-fluid">
                    <div class="row" style="text-align: justify;">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Ph.D. Regulation
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/Ph.%20D.%20regulations.pdf">Download Ph.D. Regulations</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Course work and Ph.D. Program details with Syllabus
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong class="text-primary">COURSE WORK:</strong> Ph.D. students are required to
                                        successfully complete a 12-credit
                                        course load during their first two semesters. This coursework includes two compulsory
                                        courses: one on Research Methodology and another on Research and Publication Ethics.
                                        Additionally, students must take a subject-specific course prescribed by their
                                        respective Student Research Committee (SRC) and Departmental Research Committee (DRC).
                                        To ensure continued eligibility in the Ph.D. program, students must achieve a minimum
                                        grade of 55% or its equivalent on a 10-point scale in each course. Beyond formal
                                        coursework, Ph.D. students are also expected to participate in various training programs
                                        organized by their department. These programs focus on essential skills such as
                                        pedagogy, research report writing, and paper writing. Furthermore, students may be
                                        assigned teaching responsibilities for specific periods, as determined by their guide
                                        and communicated to the DRC.<br><br>

                                        <strong class="text-primary">Ph.D. PROGRAM:</strong> At the end of each semester, the
                                        Departmental Research Committee
                                        (DRC) assesses the progress of a Ph.D. student's research work. If the work is
                                        satisfactory, the student is recommended to proceed to the next semester. If the
                                        progress is unsatisfactory for two consecutive semesters, the DRC suggests corrective
                                        measures. If the student fails to implement these measures, the DRC may recommend the
                                        cancellation of the student's registration to the University Research Committee (URC).
                                        Upon completing the research work, the DRC evaluates the entire progress and may
                                        recommend the student for Pre-Thesis Submission, where the student presents their
                                        research in a seminar before the DRC. The student must fulfil requirements such as
                                        publishing at least one research article in a peer-reviewed, SCOPUS indexed or UGC CARE
                                        listed journal and presenting their research at two national or international
                                        conferences/seminars. After meeting these requirements, the student submits an abstract
                                        of their research, approximately 1500 words, in eight copies in both hard and soft forms
                                        to the DRC within two months of the successful Pre-Thesis Submission Seminar. If the DRC
                                        approves the abstract, it is forwarded to the URC for approval. Before final submission,
                                        the draft thesis must undergo a plagiarism check at the university's central library,
                                        ensuring content similarity does not exceed 10%, in accordance with UGC regulations[The
                                        Section 8 (i-iv) of the UGC (Promotion of academic Integrity and Prevention of
                                        Plagiarism in higher education institutions) regulations, 2018, F.I-18/2010 (CPP-II,
                                        Dared 23rd July 2018)]. Any violations are reported to the University Academic Integrity
                                        Maintenance Committee. On the recommendation of the DRC, Ph.D. students are requiredto
                                        submit three printed copies (four if a Co-Guide is involved) initially in spiral-bound
                                        format, accompanied by a soft copy to the Controller of Examinations. Each thesis must
                                        undergo rigorous scrutiny for plagiarism, certified by university authorities. The Ph.D.
                                        Guide and any Co-Guide must attest to the originality of the work and confirm it has not
                                        been submitted elsewhere for another degree. Submission must occur within three months
                                        of DRC's approval of the thesis abstract. The thesis is to be written in the English
                                        language in accordance with the University Guidelines for writing a Ph.D. Thesis.
                                        Following submission, a panel of five external examiners, chosen by the Vice Chancellor,
                                        assesses the thesis. These examiners, appointed based on their expertise in relevant
                                        fields, are required to submit detailed reports within six weeks, with an option for
                                        extension in justified cases. Evaluation outcomes include acceptance for the Ph.D.
                                        degree, acceptance pending minor modifications, revision and resubmission, or outright
                                        rejection. Successful candidates proceed to an Oral Defence Examination, ideally
                                        scheduled within a month of examiner approval, where they present and defend their
                                        research before the Oral Defence
                                        Examination Committee (ODEC). Upon favourable recommendation by the ODEC, the Vice
                                        Chancellor oversees the final steps leading to the awarding of the Ph.D. degree, subject
                                        to ratification by the Academic Council and Board of Management.<br>
                                        <hr>
                                        <strong class="text-primary">Syllabus-</strong>
                                        <ul>
                                            <li><a target="_blank"
                                                    href="mobile-assets/doctoral-programmee/pdf/AY 2024-25 PhD Course Work Syllabus.pdf">Ph.D.
                                                    Course Work Syllabus for the AY 2024-25</a></li>
                                        </ul>
                                        <strong class="text-primary">PAPER 1 & 2 -</strong>
                                        <ul>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PhD Course Work Syllabus PAPER 1 & 2.pdf">Ph.D.
                                                    Course Work Syllabus PAPER 1 & 2</a></li>
                                        </ul>
                                        <strong class="text-primary">PAPER 3 & 4 -</strong>
                                        <ul>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 3 MANAGEMENT.docx">PAPER 3
                                                    MANAGEMENT</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PAPER 3 NUTRITION and DIETICS.docx">PAPER
                                                    3 NUTRITION and DIETICS</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 3 SYLLABUS SCIOLOGY.doc">PAPER
                                                    3 SYLLABUS SCIOLOGY</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 4 MANAGEMENT.docx">PAPER 4
                                                    MANAGEMENT</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK COMMERCE.pdf">PAPER-3
                                                    & 4 COURSE WORK COMMERCE</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK PSYCHOLOGY.pdf">PAPER-3
                                                    & 4 COURSE WORK PSYCHOLOGY</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS ENGLISH.docx">Ph.D
                                                    COURSE WORK SYLLABUS ENGLISH</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION.docx">Ph.D
                                                    COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PhD COURSE WORK PAPER 3 RSFA.docx">Ph.D.
                                                    COURSE WORK PAPER 3 RSFA</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/Phd COURSE WORK PAPER 4 RSFA.docx">Ph.D.
                                                    COURSE WORK PAPER 4 RSFA</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PhD SYLLABUS PAPER 3 BIOTECHNOLOGY.docx">Ph.D.
                                                    SYLLABUS PAPER 3 BIOTECHNOLOGY</a></li>
                                        </ul>
                                        <hr>
                                        <strong class="text-primary">2023-24 Ph.D. Syllabus PHYSICS-</strong>
                                        <ul>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/1. SYLLABUS_Nonlinear optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP.pdf">SYLLABUS_Nonlinear
                                                    optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/2. SYLLABUS_Nanoscience and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD.pdf">SYLLABUS_Nanoscience
                                                    and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/3. SYLLABUS_Atmospheric and Space Sciences _Pre-Ph.D. PHYSICS COURSE WORK_BC.pdf">SYLLABUS_Atmospheric
                                                    and Space Sciences _Pre-Ph.D. PHYSICS COURSE WORK_BC</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Exam Notification/ News/Events
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <strong class="text-primary">Exam Notification -</strong><br>
                                        <ul>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/1. Examination Form fill-up (Regular & Repeat) for PhD Coursework.pdf">Examination
                                                    Form fill-up (Regular & Repeat) for Ph.D. Coursework</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/2. PhD Course Work Examination Timetable.pdf">Ph.D.
                                                    Course Work Examination Timetable</a></li>
                                        </ul>
                                        <strong class="text-primary">Ph.D. Awareded Notification -</strong><br>
                                        <ul>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/Ph.D Notification_30-03-2024.pdf">Ph.D
                                                    Notification_30-03-2024</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notifcation 01.07.2024.pdf">Ph.D.
                                                    Notification 01.07.2024</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PhD Notification (Neha Garg)[58701].pdf">Ph.D.
                                                    Notification (Neha Garg)[58701]</a></li>
                                            <li><a
                                                    href="mobile-assets/doctoral-programmee/pdf/PhD Notification (Rajdeep Nag)[58700].pdf">Ph.D.
                                                    Notification (Rajdeep Nag)[58700]</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification 31.5.2024.pdf">Ph.D.
                                                    Notification 31.5.2024</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_19-10-2023.pdf">Ph.D.
                                                    Notification_19-10-2023</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_28-02-2024.pdf">Ph.D.
                                                    Notification_28-02-2024</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_30-11-2023.pdf">Ph.D.
                                                    Notification_30-11-2023</a></li>
                                            <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_31-08-2023.pdf">Ph.D.
                                                    Notification_31-08-2023</a></li>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Existing Students
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body mobile-para1">
                                        <!--Table Start-->
                                        <div class="table-responsive">
                                            <table id="dataTableMobile">
                                                <thead class="text-white" style="background-color: #27467A;">
                                                    <tr>
                                                        <th>SL NO.</th>
                                                        <th>SESSION</th>
                                                        <th>SCHOOL</th>
                                                        <th>BRANCH</th>
                                                        <th>NAME</th>
                                                        <th>GUIDES</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>

                                            <div class="pagination" id="paginationmob">
                                                </div>
                                        </div>
                                        <!--Table End-->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Alumni
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <!--Table Start-->
                                        <div class="table-responsive">
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                                <thead class="text-white" style="background-color: #27467A;">
                                                    <tr>
                                                        <th class="bg-blue text-white">S.NO.</th>
                                                        <th class="bg-blue text-white">SESSION</th>
                                                        <th class="bg-blue text-white">SCHOOL<br />/BRANCH</th>
                                                        <th class="bg-blue text-white">NAME</th>
                                                        <th class="bg-blue text-white">REGISTRATION NO.</th>
                                                        <th class="bg-blue text-white">SUPERVISOR</th>
                                                        <th class="bg-blue text-white">CO-SUPERVISOR</th>
                                                        <th class="bg-blue text-white">DATE</th>
                                                        <th class="bg-blue text-white">IMAGE</th>
                                                        <th class="bg-blue text-white">TOPIC OF RESEARCH</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="mobile-para1" style="text-align: left !important;">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2017-18</td>
                                                        <td>RSC<br />Commerce</td>
                                                        <td>Rajdeep Nag</td>
                                                        <td>1170717</td>
                                                        <td>Dr. Sudip Chakraborty</td>
                                                        <td>Prof. N. B. Dey</td>
                                                        <td>31-07-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/RAJDEEPNAG.jpeg" />
                                                        </td>
                                                        <td>Investors perception towards mutual funds: an empirical study in
                                                            Guwahati city of Assam, India.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>2018-19</td>
                                                        <td>RSC<br />Commerce</td>
                                                        <td>Neha Garg</td>
                                                        <td>1181173</td>
                                                        <td>Dr. Tanima Tarafdar</td>
                                                        <td>Dr. Hari Prasad Goenka</td>
                                                        <td>31-07-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/NEHAGARG.jpeg" />
                                                        </td>
                                                        <td>Positioning of brick and mortar retailers with reference to
                                                            apparels: a study of select retailers in Kamrup (Metro).</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>2018-19</td>
                                                        <td>RSC<br />Commerce</td>
                                                        <td>Swati Tejawat</td>
                                                        <td>1181174</td>
                                                        <td>Dr. Sudip Chakraborty</td>
                                                        <td>Prof. N. B. Dey</td>
                                                        <td>31-08-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/SWATITEJAWAT.jpeg" />
                                                        </td>
                                                        <td>Corporate governance practices under the companies act, 2013: a
                                                            study on select BSE listed companies.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>2017-18</td>
                                                        <td>RSCOM<br />J&amp;MC</td>
                                                        <td>Ankita Agarwal</td>
                                                        <td>1170704</td>
                                                        <td>Dr. N. Rohin Kanta Singh</td>
                                                        <td>Dr. Ruparani Sonowal</td>
                                                        <td>31-08-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/ANKITAAGARWAL.jpeg" />
                                                        </td>
                                                        <td>Usage pattern of WhatsApp among the students of selected
                                                            universities of Assam.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>2018-19</td>
                                                        <td>RSCOM<br />J&amp;MC</td>
                                                        <td>Farha Yashmin Rohman</td>
                                                        <td>1181179</td>
                                                        <td>Dr. N. Rohin Kanta Singh</td>
                                                        <td>Dr. Ruparani Sonowal</td>
                                                        <td>31-08-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/FARHAYASHMINROHMAN.jpeg" />
                                                        </td>
                                                        <td>Portrayal of identity on Facebook with reference to student leaders
                                                            in Assam.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>2018-19</td>
                                                        <td>RSET<br />Computer Science Engineering</td>
                                                        <td>Mayuri Sharma</td>
                                                        <td>1170703</td>
                                                        <td>Prof. (Dr.) Ankur Ganguly</td>
                                                        <td>Dr. Aniruddha Deka, Dr. Chandan Jyoti Kumar</td>
                                                        <td>16-10-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/MAYURISHARMA.png" />
                                                        </td>
                                                        <td>Design and development of machine learning based framework for
                                                            diagnosing disease and deficiency in rice plants.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>2018-19</td>
                                                        <td>RSHSS<br />Economics</td>
                                                        <td>Alakesh Kalita</td>
                                                        <td>1181181</td>
                                                        <td>Prof. (Dr.) Swabera Islam</td>
                                                        <td>Prof. (Dr.) Gautam Mazumder</td>
                                                        <td>16-10-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/ALAKESHKALITA.jpeg" />
                                                        </td>
                                                        <td>Microfinance as the driver of income and employment: an analysis of
                                                            socio-economic condition in undivided Barpeta district of Assam.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>2018-19</td>
                                                        <td>RSHSS<br />Economics</td>
                                                        <td>Durba Duta</td>
                                                        <td>1170722</td>
                                                        <td>Dr. Mohammed Deluwar Hoque</td>
                                                        <td>Dr. Rabin Jyoti Khataniar</td>
                                                        <td>16-10-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/DURBADUTA.jpeg" />
                                                        </td>
                                                        <td>An assessment of urban poverty and its determinants: with special
                                                            reference to the Kamrup Metro.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>2017-18</td>
                                                        <td>RSLA<br />Law &amp; Administration</td>
                                                        <td>Meghna Bora</td>
                                                        <td>1170709</td>
                                                        <td>Prof. (Dr.) H. C. Nath</td>
                                                        <td>Dr. Anup Hazarika</td>
                                                        <td>30-11-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/MEGHNABORA.png" />
                                                        </td>
                                                        <td>A study on international and national legal framework on surrogacy
                                                            and its conformity with rule of law.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>2019-20</td>
                                                        <td>RSLA<br />Law &amp; Administration</td>
                                                        <td>Parveen Islam</td>
                                                        <td>1181196</td>
                                                        <td>Prof. (Dr.) H. C. Nath</td>
                                                        <td>Dr. Smita Sarmah</td>
                                                        <td>30-11-2023</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/PARVEENISLAM.png" />
                                                        </td>
                                                        <td>Right to education of transgender persons in India with specific
                                                            reference to the state of Assam: a legal analysis.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>2020-21</td>
                                                        <td>RSBSC<br />Bio-Technology</td>
                                                        <td>Indukalpa Das</td>
                                                        <td>1191459</td>
                                                        <td>Dr. Debajit Borah</td>
                                                        <td>Dr. Bidisha Sharma</td>
                                                        <td>28-02-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/INDUKALPADAS.png" />
                                                        </td>
                                                        <td>Biosurfactant mediated green synthesis of metal nano particles for
                                                            enhancing seed germination and antimicrobial applications.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>2018-19</td>
                                                        <td>RSLA<br />Law &amp; Administration</td>
                                                        <td>Sandeep Mishra</td>
                                                        <td>1170720</td>
                                                        <td>Prof. (Dr.) H. C. Nath</td>
                                                        <td>Prof. (Dr.) Nalini Kanta Dutta</td>
                                                        <td>28-02-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/SANDEEPMISHRA.png" />
                                                        </td>
                                                        <td>Pardoning power and judicial review: a comparative study (with
                                                            special reference to the constitution of India).</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>2019-20</td>
                                                        <td>RSTTM<br />Travel &amp; Tourism Management</td>
                                                        <td>Indrajit Dutta</td>
                                                        <td>1190018</td>
                                                        <td>Prof. (Dr.) Soumitra Sen</td>
                                                        <td>Dr. Dharma Ram Deka</td>
                                                        <td>28-02-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/INDRAJITDUTTA.png" />
                                                        </td>
                                                        <td>A study on rural tourism in Ri-Bhoi district of Meghalaya: prospects
                                                            and challenges.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>2019-20</td>
                                                        <td>RSET<br />Civil Engineering</td>
                                                        <td>Sudipta Chakraborty</td>
                                                        <td>1190004</td>
                                                        <td>Prof. (Dr.) Arnab Sarma</td>
                                                        <td>Dr. A. R. Kambekar</td>
                                                        <td>28-03-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/SUDIPTACHAKRABORTY.png" />
                                                        </td>
                                                        <td>Sea level rise due to climate change and its impact along the coast
                                                            of Mumbai.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>2019-20</td>
                                                        <td>RSBSC<br />Bio-Technology</td>
                                                        <td>Vanshika Sharma</td>
                                                        <td>1181198</td>
                                                        <td>Dr. Ranjan Dutta Kalita</td>
                                                        <td>Dr. Ajanita Mazumdar</td>
                                                        <td>31-05-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/VANSHIKASHARMA.png" />
                                                        </td>
                                                        <td>Wound healing and antimicrobial properties of Kaempferia galanga L.
                                                            and formulation of topical applications.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>2018-19</td>
                                                        <td>RSAPS<br />Mathematics</td>
                                                        <td>Bikash Koli Saha</td>
                                                        <td>1181166</td>
                                                        <td>Dr. Kamal Debnath</td>
                                                        <td></td>
                                                        <td>31-05-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/BIKASHKOLISAHA.png" />
                                                        </td>
                                                        <td>Behavioural study of visco elastic fluid flow characterized by
                                                            Walters liquid (model B-).</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>2018-19</td>
                                                        <td>RSC<br />Commerce</td>
                                                        <td>Kamal Mour</td>
                                                        <td>1170716</td>
                                                        <td>Dr. Sudip Chakraborty</td>
                                                        <td>Prof. N. B. Dey</td>
                                                        <td>28-06-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/KAMALMOUR.jpeg" />
                                                        </td>
                                                        <td>Impact of Indian accounting standards (Ind AS) on the financial
                                                            statements of select Indian companies.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>2019-20</td>
                                                        <td>RSFA<br />Fine Arts</td>
                                                        <td>Laishram Samson Singh</td>
                                                        <td>1170663</td>
                                                        <td>Dr. Mousumi Deka</td>
                                                        <td>Dr. Debasish Chakraborty</td>
                                                        <td>28-06-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/LAISHRAMSAMSONSINGH.jpg" />
                                                        </td>
                                                        <td>Indian abstract art of post-independence era: a philosophical
                                                            analysis.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>2018-19</td>
                                                        <td>RSAPS<br />Mathematics</td>
                                                        <td>Sankar Singha</td>
                                                        <td>1181167</td>
                                                        <td>Dr. Kamal Debnath</td>
                                                        <td></td>
                                                        <td>28-06-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/SANKARSINGHA.png" />
                                                        </td>
                                                        <td>Some aspects of fluid flow problems with emphasis on
                                                            visco-elasticity.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>2019-20</td>
                                                        <td>RSAPS<br />Mathematics</td>
                                                        <td>Md Nazir Hussain</td>
                                                        <td>1191451</td>
                                                        <td>Prof. (Dr.) Anuradha Devi</td>
                                                        <td>Dr. Navalakhi Hazarika</td>
                                                        <td>28-06-2024</td>
                                                        <td class="text-center"><img
                                                                src="mobile-assets/doctoral-programmee/phd_alumni/MDNAZIRHUSSAIN.png" />
                                                        </td>
                                                        <td>A study of distributive and multiplication N-groups in nearrings and
                                                            their fuzzy aspects.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Table End-->

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Ph.D. Forms and Formats
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/1)FORM~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> FORM FOR CONSENT OF Ph.D.
                                                GUIDE & Ph.D.
                                                STUDENT</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/2)APPL~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR SYNOPSIS
                                                (PLAN OF RESEAR
                                                PRESENTATION)</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/3)FORM~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> FORM FOR SYNOPSIS (PLAN OF
                                                RESEARCH)
                                                REPORT</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/4) FORM FOR Ph.D. PROGRESS REPORT.pdf"
                                                target="_blank"><i class="fa-solid fa-download"></i> FORM FOR Ph.D. PROGRESS
                                                REPORT</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/5) APPLICATION FOR PRE-SUBMISSION SEMINAR.pdf"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR
                                                PRE-SUBMISSION SEMINAR</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/6) Ph.D. PRE-SUBMISSION SEMINAR FORM.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> Ph.D. PRE-SUBMISSION
                                                SEMINAR
                                                FORM</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/7) Ph.D. ABSTRACT SUBMISSION FORM.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> Ph.D. ABSTRACT SUBMISSION
                                                FORM</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/8) Ph.D. THESIS SUBMISSION FORM.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> Ph.D. THESIS SUBMISSION
                                                FORM</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/9)CHEC~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> CHECKLIST TO BE SUBMITTED
                                                WITH Ph.D. THESIS
                                            </a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/10)NOD~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> NO DUES CERTIFICATE FOR
                                                Ph.D. THE
                                                SUBMISSION</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/11)TOT~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> TOTAL FEE SUBMISSION
                                                CERTIFICATE FOR Ph.D.
                                                THE
                                                SUBMISSION</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/12)FOR~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> FORM FOR SUBMITTING THE
                                                LIST OF PROPOSED PH
                                                THESIS EXAMINERS</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/13)REP~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> REPORT OF ORAL DEFENCE
                                                EVALUATION
                                                COMMITTEE</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/14)APP~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR
                                                EXTENSION OF TIME
                                                SUBMISSION OF Ph.D. THESIS</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/15)APP~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR CHANGE OF
                                                GUIDE_CO-GUIDE</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/16)APP~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR CHANGE
                                                OF
                                                CANDIDATURE</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/17) APPLICATION FORM FOR RE-REGISTRATION.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR
                                                RE-REGISTRATION</a></p>
                                        <p class="mobile-para1"><a href="assets/img/all-phd/doctoral-programme/pdf/18)APP~1.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR
                                                RECOGNITION
                                                GUIDE_CO-GUIDE FOR Ph.D. PROGRAMME</a></p>
                                        <p class="mobile-para1"><a
                                                href="assets/img/all-phd/doctoral-programme/pdf/19) Ph.D. THESIS TEMPLATE RGU.PDF"
                                                target="_blank"><i class="fa-solid fa-download"></i> Ph.D. THESIS TEMPLATE
                                                RGU</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Members
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <div class="table-responsive">
                                            <table class="table border table-responsive table-striped fs-16 vertical-scroll">
                                                <thead class="text-light  para1" style="font-size: 14px;">
                                                    <tr class="text-white para1 text-dark" style="background-color: #005273;">
                                                        <th>Sl. No.</th>
                                                        <th>Name</th>
                                                        <th>Designation</th>
                                                        <th>Designation in the Ph.D. Cell</th>
                                                        <th>New nomination / Existing nomination</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="para1 text-dark">

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dr. D. N. Singh</td>
                                                        <td>Registrar</td>
                                                        <td>Academic Head, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Prof. (Dr.) Sudip Chakraborty</td>
                                                        <td>Deputy Dean (i/c), Royal School of Commerce</td>
                                                        <td>Deputy Director, Ph.D. Cell</td>
                                                        <td>Existing</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Dr. Niraj Singh</td>
                                                        <td>Assistant Professor, Department of Microbiology, Royal School of Biosciences</td>
                                                        <td>Coordinator, Ph.D. Cell</td>
                                                        <td>Existing</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                                        <td>Professor & Principal, Royal School of Pharmacy</td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Dr. Debajit Borah</td>
                                                        <td>Associate Professor and Head, Department of Biotechnology, Royal School of
                                                            Biosciences
                                                        </td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>Existing</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Dr. Indrajit Dutta</td>
                                                        <td>Associate Professor and Head, Royal School of Travel and Tourism Management</td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Dr. Rishi Chakravarty</td>
                                                        <td>Associate Professor, Royal School of Business</td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Dr. Hirak Jyoti Hazarika</td>
                                                        <td>Assistant Professor and Head, Royal School of Library Sciences</td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Dr. Pratikshya Borah</td>
                                                        <td>Assistant Professor, Department of Botany, Royal School of Life Sciences</td>
                                                        <td>Member, Ph.D. Cell</td>
                                                        <td>New</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Mr. Ankur Sarkar</td>
                                                        <td>Senior Executive, Office of Ph.D. Cell</td>
                                                        <td>Non-teaching staff</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>              </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <div class="website">
        <div id="page" class="site site_wrapper">

            <div class="scroll-top">
                <div class="scroll-top-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg" data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!-- floating button  -->
            <div>
                <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/phd.pdf" target="_blank" style="
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
                    Admission Open For Ph.D. 2025-2026
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

            <!--head image Section-->
            <section style="background-image: url(mobile-assets/background/bgg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                        <img class="rounded" decoding="async"
                            src="mobile-assets/doctoral-programmee/headimg.jpeg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700">Doctoral <span style="color: #FF9A1E; font-weight: 500;">Programme</span> </h2>

                <p style="color: #264273; text-align: justify;" class="para1">
                As an emerging hub of education of the country, the spirit
                        of inter-and multi-disciplinarity permeates every aspect of
                        academics at RGU. The doctoral programme at RGU seeks to develop
                        the next generation of academics who can approach issues from
                        multiple perspectives, glean unique insights, and provide effective
                        solutions to pressing problems of academic and practical interest.
                        RGU Ph.D. Programme carries a strong emphasis on foundational knowledge,
                        academic research, and hands-on experiences with real-world challenges.
                        RGU envisions a future where researchers combine curiosity based
                        intellectual pursuits with a strong commitment to solving complex
                        problems with societal impact. However, the university is an ecosystem
                        that creates opportunities for students based on their interests.

                </p>
            </div>
        </div>
    </div>
            </section>
            <!--head image Section-->

        </div>

        <div style="padding: 40px 60px;">

            <div class="headd2 fw-bold text-dark pt-4">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')


            <p class="para1 text-dark" style="text-align: justify;">
                In particular, RGU doctoral programme aims to train the researchers who extend the boundaries of current
                knowledge and are also able to create new knowledge, are adept in the use of traditional methodologies and
                latest tools and build on these to develop new techniques to answer questions that transcend disciplinary
                boundaries, can communicate clearly and effectively to the expert and the public at large the insights
                gleaned from the research, can apply the skills and knowledge in practical contexts.
            </p>

            <div class="headd3 fw-bold text-dark">RGU’s APPROACH</div>

            <p class="para1 text-dark" style="text-align: justify;">
                RGU aspires to be recognized for the quality and impact of its research output on the current state of
                knowledge. Towards this goal, it will strive to provide an environment where cutting-edge research is done
                by a community of scholars where the focus is placed on conceptual clarity and the utilization and
                development of new methodologies that are employed not only to illuminate the issue under study but also in
                a wide range of contexts. Ph.D. scholars will work, through collaborations and joint projects, on real-world
                issues in close association with outside organizations/industries and apply appropriate and innovative
                methodologies to address their problems.
            </p>
            <p class="para1 text-dark" style="text-align: justify;">
                The structure of the Ph.D. programme includes a mandatory coursework and candidates are encouraged to take up
                a wide variety of courses to cultivate a cross-disciplinary outlook. The topic of research is expected to be
                inter-disciplinary with emphasis on practical impact that is inspired by real world problems or sponsored by
                industry. The output is expected to address a gap or add something new to the existing corpus of literature.
                A Ph.D. scholar is not only preparing to be a researcher but also a teacher as teaching is integral to
                effective learning.
            </p>
            <p class="para1 text-dark">
                With the spirit of liberal inquiry governing every aspect of academic life, accomplished faculty, emphasis
                on work-life balance, a close and supportive environment, and access to world-class facilities, being a
                research scholar at RGU will be an enriching, and productive experience.
            </p>

            <hr>

            <div class="container-fluid">
                <div class="row" style="text-align: justify;">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Ph.D. Regulation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/Ph.%20D.%20regulations.pdf" class="fw-bold" style="font-size: 22px">Download Ph.D.
                                            Regulations<i style="padding-left: 20px; color: rgb(197, 8, 8);" class="fas fa-file-pdf"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Course work and Ph.D. Program details with Syllabus
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong class="text-primary">COURSE WORK:</strong> Ph.D. students are required to successfully complete a 12-credit
                                    course load during their first two semesters. This coursework includes two compulsory
                                    courses: one on Research Methodology and another on Research and Publication Ethics.
                                    Additionally, students must take a subject-specific course prescribed by their
                                    respective Student Research Committee (SRC) and Departmental Research Committee (DRC).
                                    To ensure continued eligibility in the Ph.D. program, students must achieve a minimum
                                    grade of 55% or its equivalent on a 10-point scale in each course. Beyond formal
                                    coursework, Ph.D. students are also expected to participate in various training programs
                                    organized by their department. These programs focus on essential skills such as
                                    pedagogy, research report writing, and paper writing. Furthermore, students may be
                                    assigned teaching responsibilities for specific periods, as determined by their guide
                                    and communicated to the DRC.<br><br>

                                    <strong class="text-primary">Ph.D. PROGRAM:</strong> At the end of each semester, the Departmental Research Committee
                                    (DRC) assesses the progress of a Ph.D. student's research work. If the work is
                                    satisfactory, the student is recommended to proceed to the next semester. If the
                                    progress is unsatisfactory for two consecutive semesters, the DRC suggests corrective
                                    measures. If the student fails to implement these measures, the DRC may recommend the
                                    cancellation of the student's registration to the University Research Committee (URC).
                                    Upon completing the research work, the DRC evaluates the entire progress and may
                                    recommend the student for Pre-Thesis Submission, where the student presents their
                                    research in a seminar before the DRC. The student must fulfil requirements such as
                                    publishing at least one research article in a peer-reviewed, SCOPUS indexed or UGC CARE
                                    listed journal and presenting their research at two national or international
                                    conferences/seminars. After meeting these requirements, the student submits an abstract
                                    of their research, approximately 1500 words, in eight copies in both hard and soft forms
                                    to the DRC within two months of the successful Pre-Thesis Submission Seminar. If the DRC
                                    approves the abstract, it is forwarded to the URC for approval. Before final submission,
                                    the draft thesis must undergo a plagiarism check at the university's central library,
                                    ensuring content similarity does not exceed 10%, in accordance with UGC regulations[The
                                    Section 8 (i-iv) of the UGC (Promotion of academic Integrity and Prevention of
                                    Plagiarism in higher education institutions) regulations, 2018, F.I-18/2010 (CPP-II,
                                    Dared 23rd July 2018)]. Any violations are reported to the University Academic Integrity
                                    Maintenance Committee. On the recommendation of the DRC, Ph.D. students are requiredto
                                    submit three printed copies (four if a Co-Guide is involved) initially in spiral-bound
                                    format, accompanied by a soft copy to the Controller of Examinations. Each thesis must
                                    undergo rigorous scrutiny for plagiarism, certified by university authorities. The Ph.D.
                                    Guide and any Co-Guide must attest to the originality of the work and confirm it has not
                                    been submitted elsewhere for another degree. Submission must occur within three months
                                    of DRC's approval of the thesis abstract. The thesis is to be written in the English
                                    language in accordance with the University Guidelines for writing a Ph.D. Thesis.
                                    Following submission, a panel of five external examiners, chosen by the Vice Chancellor,
                                    assesses the thesis. These examiners, appointed based on their expertise in relevant
                                    fields, are required to submit detailed reports within six weeks, with an option for
                                    extension in justified cases. Evaluation outcomes include acceptance for the Ph.D.
                                    degree, acceptance pending minor modifications, revision and resubmission, or outright
                                    rejection. Successful candidates proceed to an Oral Defence Examination, ideally
                                    scheduled within a month of examiner approval, where they present and defend their
                                    research before the Oral Defence
                                    Examination Committee (ODEC). Upon favourable recommendation by the ODEC, the Vice
                                    Chancellor oversees the final steps leading to the awarding of the Ph.D. degree, subject
                                    to ratification by the Academic Council and Board of Management.<br>
                                    <hr>
                                    <strong class="text-primary">Syllabus-</strong>
                                    <ul>
                                        <li><a  target="_blank" href="mobile-assets/doctoral-programmee/pdf/AY 2024-25 PhD Course Work Syllabus.pdf">Ph.D. Course Work Syllabus for the AY 2024-25</a></li>
                                    </ul>
                                    <strong class="text-primary">PAPER 1 & 2 -</strong>
                                    <ul>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Course Work Syllabus PAPER 1 & 2.pdf">Ph.D. Course Work Syllabus PAPER 1 & 2</a></li>
                                    </ul>
                                    <strong class="text-primary">PAPER 3 & 4 -</strong>
                                    <ul>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 3 MANAGEMENT.docx">PAPER 3 MANAGEMENT</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 3 NUTRITION and DIETICS.docx">PAPER 3 NUTRITION and DIETICS</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 3 SYLLABUS SCIOLOGY.doc">PAPER 3 SYLLABUS SCIOLOGY</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER 4 MANAGEMENT.docx">PAPER 4 MANAGEMENT</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK COMMERCE.pdf">PAPER-3 & 4 COURSE WORK COMMERCE</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK PSYCHOLOGY.pdf">PAPER-3 & 4 COURSE WORK PSYCHOLOGY</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS ENGLISH.docx">Ph.D COURSE WORK SYLLABUS ENGLISH</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION.docx">Ph.D COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD COURSE WORK PAPER 3 RSFA.docx">Ph.D. COURSE WORK PAPER 3 RSFA</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/Phd COURSE WORK PAPER 4 RSFA.docx">Ph.D. COURSE WORK PAPER 4 RSFA</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD SYLLABUS PAPER 3 BIOTECHNOLOGY.docx">Ph.D. SYLLABUS PAPER 3 BIOTECHNOLOGY</a></li>
                                    </ul>
                                    <hr>
                                    <strong class="text-primary">2023-24 Ph.D. Syllabus PHYSICS-</strong>
                                    <ul>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/1. SYLLABUS_Nonlinear optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP.pdf">SYLLABUS_Nonlinear optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/2. SYLLABUS_Nanoscience and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD.pdf">SYLLABUS_Nanoscience and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/3. SYLLABUS_Atmospheric and Space Sciences _Pre-Ph.D. PHYSICS COURSE WORK_BC.pdf">SYLLABUS_Atmospheric and Space Sciences _Pre-Ph.D. PHYSICS COURSE WORK_BC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Exam Notification/ News/Events
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <strong class="text-primary">Exam Notification -</strong><br>
                                    <ul>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/1. Examination Form fill-up (Regular & Repeat) for PhD Coursework.pdf">Examination Form fill-up (Regular & Repeat) for Ph.D. Coursework</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/2. PhD Course Work Examination Timetable.pdf">Ph.D. Course Work Examination Timetable</a></li>
                                    </ul>
                                    <strong class="text-primary">Ph.D. Awareded Notification -</strong><br>
                                    <ul>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/Ph.D Notification_30-03-2024.pdf">Ph.D Notification_30-03-2024</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notifcation 01.07.2024.pdf">Ph.D. Notification 01.07.2024</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification (Neha Garg)[58701].pdf">Ph.D. Notification (Neha Garg)[58701]</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification (Rajdeep Nag)[58700].pdf">Ph.D. Notification (Rajdeep Nag)[58700]</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification 31.5.2024.pdf">Ph.D. Notification 31.5.2024</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_19-10-2023.pdf">Ph.D. Notification_19-10-2023</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_28-02-2024.pdf">Ph.D. Notification_28-02-2024</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_30-11-2023.pdf">Ph.D. Notification_30-11-2023</a></li>
                                        <li><a href="mobile-assets/doctoral-programmee/pdf/PhD Notification_31-08-2023.pdf">Ph.D. Notification_31-08-2023</a></li>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Existing Students
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body para1">

                                    <!--Table Start-->
                                    <table id="dataTable">
                                        <thead class="text-white" style="background-color: #27467A;">
                                            <tr>
                                                <th class="text-center">SL NO.</th>
                                                <th class="text-center">SESSION</th>
                                                <th class="text-center">SCHOOL</th>
                                                <th class="text-center">BRANCH</th>
                                                <th class="text-center">NAME</th>
                                                <th class="text-center">GUIDES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center"></tbody>
                                    </table>

                                    <div class="pagination" id="pagination"></div>
                                    <!--Table End-->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    Alumni
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!--Table Start-->
                                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                        <thead class="text-white" style="background-color: #27467A;">
                                            <tr>
                                                <th class="bg-blue text-white">S.NO.</th>
                                                <th class="bg-blue text-white">SESSION</th>
                                                <th class="bg-blue text-white">SCHOOL<br />/BRANCH</th>
                                                <th class="bg-blue text-white">NAME</th>
                                                <th class="bg-blue text-white">REGISTRATION NO.</th>
                                                <th class="bg-blue text-white">SUPERVISOR</th>
                                                <th class="bg-blue text-white">CO-SUPERVISOR</th>
                                                <th class="bg-blue text-white">DATE</th>
                                                <th class="bg-blue text-white">IMAGE</th>
                                                <th class="bg-blue text-white">TOPIC OF RESEARCH</th>
                                            </tr>
                                        </thead>
                                        <tbody class="para1" style="text-align: left !important;">
                                            <tr>
                                                <td>1</td>
                                                <td>2017-18</td>
                                                <td>RSC<br />Commerce</td>
                                                <td>Rajdeep Nag</td>
                                                <td>1170717</td>
                                                <td>Dr. Sudip Chakraborty</td>
                                                <td>Prof. N. B. Dey</td>
                                                <td>31-07-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/RAJDEEPNAG.jpeg" /></td>
                                                <td>Investors perception towards mutual funds: an empirical study in Guwahati city of Assam, India.</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2018-19</td>
                                                <td>RSC<br />Commerce</td>
                                                <td>Neha Garg</td>
                                                <td>1181173</td>
                                                <td>Dr. Tanima Tarafdar</td>
                                                <td>Dr. Hari Prasad Goenka</td>
                                                <td>31-07-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/NEHAGARG.jpeg" /></td>
                                                <td>Positioning of brick and mortar retailers with reference to apparels: a study of select retailers in Kamrup (Metro).</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>2018-19</td>
                                                <td>RSC<br />Commerce</td>
                                                <td>Swati Tejawat</td>
                                                <td>1181174</td>
                                                <td>Dr. Sudip Chakraborty</td>
                                                <td>Prof. N. B. Dey</td>
                                                <td>31-08-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/SWATITEJAWAT.jpeg" /></td>
                                                <td>Corporate governance practices under the companies act, 2013: a study on select BSE listed companies.</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2017-18</td>
                                                <td>RSCOM<br />J&amp;MC</td>
                                                <td>Ankita Agarwal</td>
                                                <td>1170704</td>
                                                <td>Dr. N. Rohin Kanta Singh</td>
                                                <td>Dr. Ruparani Sonowal</td>
                                                <td>31-08-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/ANKITAAGARWAL.jpeg" /></td>
                                                <td>Usage pattern of WhatsApp among the students of selected universities of Assam.</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2018-19</td>
                                                <td>RSCOM<br />J&amp;MC</td>
                                                <td>Farha Yashmin Rohman</td>
                                                <td>1181179</td>
                                                <td>Dr. N. Rohin Kanta Singh</td>
                                                <td>Dr. Ruparani Sonowal</td>
                                                <td>31-08-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/FARHAYASHMINROHMAN.jpeg" /></td>
                                                <td>Portrayal of identity on Facebook with reference to student leaders in Assam.</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2018-19</td>
                                                <td>RSET<br />Computer Science Engineering</td>
                                                <td>Mayuri Sharma</td>
                                                <td>1170703</td>
                                                <td>Prof. (Dr.) Ankur Ganguly</td>
                                                <td>Dr. Aniruddha Deka, Dr. Chandan Jyoti Kumar</td>
                                                <td>16-10-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/MAYURISHARMA.png" /></td>
                                                <td>Design and development of machine learning based framework for diagnosing disease and deficiency in rice plants.</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2018-19</td>
                                                <td>RSHSS<br />Economics</td>
                                                <td>Alakesh Kalita</td>
                                                <td>1181181</td>
                                                <td>Prof. (Dr.) Swabera Islam</td>
                                                <td>Prof. (Dr.) Gautam Mazumder</td>
                                                <td>16-10-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/ALAKESHKALITA.jpeg" /></td>
                                                <td>Microfinance as the driver of income and employment: an analysis of socio-economic condition in undivided Barpeta district of Assam.</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>2018-19</td>
                                                <td>RSHSS<br />Economics</td>
                                                <td>Durba Duta</td>
                                                <td>1170722</td>
                                                <td>Dr. Mohammed Deluwar Hoque</td>
                                                <td>Dr. Rabin Jyoti Khataniar</td>
                                                <td>16-10-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/DURBADUTA.jpeg" /></td>
                                                <td>An assessment of urban poverty and its determinants: with special reference to the Kamrup Metro.</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>2017-18</td>
                                                <td>RSLA<br />Law &amp; Administration</td>
                                                <td>Meghna Bora</td>
                                                <td>1170709</td>
                                                <td>Prof. (Dr.) H. C. Nath</td>
                                                <td>Dr. Anup Hazarika</td>
                                                <td>30-11-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/MEGHNABORA.png" /></td>
                                                <td>A study on international and national legal framework on surrogacy and its conformity with rule of law.</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>2019-20</td>
                                                <td>RSLA<br />Law &amp; Administration</td>
                                                <td>Parveen Islam</td>
                                                <td>1181196</td>
                                                <td>Prof. (Dr.) H. C. Nath</td>
                                                <td>Dr. Smita Sarmah</td>
                                                <td>30-11-2023</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/PARVEENISLAM.png" /></td>
                                                <td>Right to education of transgender persons in India with specific reference to the state of Assam: a legal analysis.</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>2020-21</td>
                                                <td>RSBSC<br />Bio-Technology</td>
                                                <td>Indukalpa Das</td>
                                                <td>1191459</td>
                                                <td>Dr. Debajit Borah</td>
                                                <td>Dr. Bidisha Sharma</td>
                                                <td>28-02-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/INDUKALPADAS.png" /></td>
                                                <td>Biosurfactant mediated green synthesis of metal nano particles for enhancing seed germination and antimicrobial applications.</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>2018-19</td>
                                                <td>RSLA<br />Law &amp; Administration</td>
                                                <td>Sandeep Mishra</td>
                                                <td>1170720</td>
                                                <td>Prof. (Dr.) H. C. Nath</td>
                                                <td>Prof. (Dr.) Nalini Kanta Dutta</td>
                                                <td>28-02-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/SANDEEPMISHRA.png" /></td>
                                                <td>Pardoning power and judicial review: a comparative study (with special reference to the constitution of India).</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>2019-20</td>
                                                <td>RSTTM<br />Travel &amp; Tourism Management</td>
                                                <td>Indrajit Dutta</td>
                                                <td>1190018</td>
                                                <td>Prof. (Dr.) Soumitra Sen</td>
                                                <td>Dr. Dharma Ram Deka</td>
                                                <td>28-02-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/INDRAJITDUTTA.png" /></td>
                                                <td>A study on rural tourism in Ri-Bhoi district of Meghalaya: prospects and challenges.</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>2019-20</td>
                                                <td>RSET<br />Civil Engineering</td>
                                                <td>Sudipta Chakraborty</td>
                                                <td>1190004</td>
                                                <td>Prof. (Dr.) Arnab Sarma</td>
                                                <td>Dr. A. R. Kambekar</td>
                                                <td>28-03-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/SUDIPTACHAKRABORTY.png" /></td>
                                                <td>Sea level rise due to climate change and its impact along the coast of Mumbai.</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>2019-20</td>
                                                <td>RSBSC<br />Bio-Technology</td>
                                                <td>Vanshika Sharma</td>
                                                <td>1181198</td>
                                                <td>Dr. Ranjan Dutta Kalita</td>
                                                <td>Dr. Ajanita Mazumdar</td>
                                                <td>31-05-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/VANSHIKASHARMA.png" /></td>
                                                <td>Wound healing and antimicrobial properties of Kaempferia galanga L. and formulation of topical applications.</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>2018-19</td>
                                                <td>RSAPS<br />Mathematics</td>
                                                <td>Bikash Koli Saha</td>
                                                <td>1181166</td>
                                                <td>Dr. Kamal Debnath</td>
                                                <td></td>
                                                <td>31-05-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/BIKASHKOLISAHA.png" /></td>
                                                <td>Behavioural study of visco elastic fluid flow characterized by Walters liquid (model B-).</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>2018-19</td>
                                                <td>RSC<br />Commerce</td>
                                                <td>Kamal Mour</td>
                                                <td>1170716</td>
                                                <td>Dr. Sudip Chakraborty</td>
                                                <td>Prof. N. B. Dey</td>
                                                <td>28-06-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/KAMALMOUR.jpeg" /></td>
                                                <td>Impact of Indian accounting standards (Ind AS) on the financial statements of select Indian companies.</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>2019-20</td>
                                                <td>RSFA<br />Fine Arts</td>
                                                <td>Laishram Samson Singh</td>
                                                <td>1170663</td>
                                                <td>Dr. Mousumi Deka</td>
                                                <td>Dr. Debasish Chakraborty</td>
                                                <td>28-06-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/LAISHRAMSAMSONSINGH.jpg" /></td>
                                                <td>Indian abstract art of post-independence era: a philosophical analysis.</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>2018-19</td>
                                                <td>RSAPS<br />Mathematics</td>
                                                <td>Sankar Singha</td>
                                                <td>1181167</td>
                                                <td>Dr. Kamal Debnath</td>
                                                <td></td>
                                                <td>28-06-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/SANKARSINGHA.png" /></td>
                                                <td>Some aspects of fluid flow problems with emphasis on visco-elasticity.</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>2019-20</td>
                                                <td>RSAPS<br />Mathematics</td>
                                                <td>Md Nazir Hussain</td>
                                                <td>1191451</td>
                                                <td>Prof. (Dr.) Anuradha Devi</td>
                                                <td>Dr. Navalakhi Hazarika</td>
                                                <td>28-06-2024</td>
                                                <td class="text-center"><img src="mobile-assets/doctoral-programmee/phd_alumni/MDNAZIRHUSSAIN.png" /></td>
                                                <td>A study of distributive and multiplication N-groups in nearrings and their fuzzy aspects.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--Table End-->

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Ph.D. Forms and Formats
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/1)FORM~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> FORM FOR CONSENT OF Ph.D. GUIDE & Ph.D.
                                            STUDENT</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/2)APPL~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR SYNOPSIS (PLAN OF RESEAR
                                            PRESENTATION)</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/3)FORM~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> FORM FOR SYNOPSIS (PLAN OF RESEARCH)
                                            REPORT</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/4) FORM FOR Ph.D. PROGRESS REPORT.pdf" target="_blank"><i class="fa-solid fa-download"></i> FORM FOR Ph.D. PROGRESS
                                            REPORT</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/5) APPLICATION FOR PRE-SUBMISSION SEMINAR.pdf" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR
                                            PRE-SUBMISSION SEMINAR</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/6) Ph.D. PRE-SUBMISSION SEMINAR FORM.PDF" target="_blank"><i class="fa-solid fa-download"></i> Ph.D. PRE-SUBMISSION SEMINAR
                                            FORM</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/7) Ph.D. ABSTRACT SUBMISSION FORM.PDF" target="_blank"><i class="fa-solid fa-download"></i> Ph.D. ABSTRACT SUBMISSION
                                            FORM</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/8) Ph.D. THESIS SUBMISSION FORM.PDF" target="_blank"><i class="fa-solid fa-download"></i> Ph.D. THESIS SUBMISSION
                                            FORM</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/9)CHEC~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> CHECKLIST TO BE SUBMITTED WITH Ph.D. THESIS
                                            </a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/10)NOD~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> NO DUES CERTIFICATE FOR Ph.D. THE
                                            SUBMISSION</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/11)TOT~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> TOTAL FEE SUBMISSION CERTIFICATE FOR Ph.D.
                                            THE
                                            SUBMISSION</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/12)FOR~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> FORM FOR SUBMITTING THE LIST OF PROPOSED PH
                                            THESIS EXAMINERS</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/13)REP~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> REPORT OF ORAL DEFENCE EVALUATION
                                            COMMITTEE</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/14)APP~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR EXTENSION OF TIME
                                            SUBMISSION OF Ph.D. THESIS</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/15)APP~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FOR CHANGE OF
                                            GUIDE_CO-GUIDE</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/16)APP~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR CHANGE OF
                                            CANDIDATURE</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/17) APPLICATION FORM FOR RE-REGISTRATION.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR
                                            RE-REGISTRATION</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/18)APP~1.PDF" target="_blank"><i class="fa-solid fa-download"></i> APPLICATION FORM FOR RECOGNITION
                                            GUIDE_CO-GUIDE FOR Ph.D. PROGRAMME</a></p>
                                    <p class="para1"><a href="assets/img/all-phd/doctoral-programme/pdf/19) Ph.D. THESIS TEMPLATE RGU.PDF" target="_blank"><i class="fa-solid fa-download"></i> Ph.D. THESIS TEMPLATE
                                            RGU</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Members
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="table-responsive">
                                        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
                                            <thead class="text-light  para1" style="font-size: 14px;">
                                                <tr class="text-white para1 text-dark" style="background-color: #005273;">
                                                    <th>Sl. No.</th>
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Designation in the Ph.D. Cell</th>
                                                    <th>New nomination / Existing nomination</th>
                                                </tr>
                                            </thead>
                                            <tbody class="para1 text-dark">

                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. D. N. Singh</td>
                                                    <td>Registrar</td>
                                                    <td>Academic Head, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Prof. (Dr.) Sudip Chakraborty</td>
                                                    <td>Deputy Dean (i/c), Royal School of Commerce</td>
                                                    <td>Deputy Director, Ph.D. Cell</td>
                                                    <td>Existing</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Dr. Niraj Singh</td>
                                                    <td>Assistant Professor, Department of Microbiology, Royal School of Biosciences</td>
                                                    <td>Coordinator, Ph.D. Cell</td>
                                                    <td>Existing</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                                    <td>Professor & Principal, Royal School of Pharmacy</td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Dr. Debajit Borah</td>
                                                    <td>Associate Professor and Head, Department of Biotechnology, Royal School of
                                                        Biosciences
                                                    </td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>Existing</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Indrajit Dutta</td>
                                                    <td>Associate Professor and Head, Royal School of Travel and Tourism Management</td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Rishi Chakravarty</td>
                                                    <td>Associate Professor, Royal School of Business</td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Dr. Hirak Jyoti Hazarika</td>
                                                    <td>Assistant Professor and Head, Royal School of Library Sciences</td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Dr. Pratikshya Borah</td>
                                                    <td>Assistant Professor, Department of Botany, Royal School of Life Sciences</td>
                                                    <td>Member, Ph.D. Cell</td>
                                                    <td>New</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Mr. Ankur Sarkar</td>
                                                    <td>Senior Executive, Office of Ph.D. Cell</td>
                                                    <td>Non-teaching staff</td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>          </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection

@push('scripts')
        <script>
            const data = [
                { sl: 1, session: "2024-25", school: "RSA", branch: "ARCHITECTURE", name: "DIKSHA DUTTA", guide: "PROF. (DR.) HARI PRASAD AGARWAL" },
                { sl: 2, session: "2024-25", school: "RSA", branch: "ARCHITECTURE", name: "KASTURI BORAH", guide: "PROF. (DR.) HARI PRASAD AGARWAL" },
                { sl: 3, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "BISHWAPRIYA CHUTIA", guide: "DR. BHASKARJYOTI GOGOI" },
                { sl: 4, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "DEBALEENA KASHYAP", guide: "DR. BHASKARJYOTI GOGOI" },
                { sl: 5, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SAHIBA KHAN", guide: "DR. DEBAJIT BORAH" },
                { sl: 6, session: "2022-23", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SAAHANA SYED JUHI", guide: "PROF. (DR.) RANJAN DUTTA KALITA" },
                { sl: 7, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "IXORA WAIKHOM", guide: "DR. SIDDHARTHA NARAYAN BORAH" },
                { sl: 8, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "ANMOL KAUR", guide: "DR. RUPSIKHA PATOWARY" },
                { sl: 9, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "PANCHAMI BORPUJARI", guide: "DR. DEBAJIT BORAH" },
                { sl: 10, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "AMARTYA DAS", guide: "PROF. (DR.) RANJAN DUTTA KALITA" },
                { sl: 11, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "DEBOSMITA DUTTA", guide: "DR. MOUSUMI DAS GOSWAMI" },
                { sl: 12, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "ANINDITA DUTTA", guide: "DR. RUPESH KUMAR" },
                { sl: 13, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SHIKHA RANI BARO", guide: "DR. RUPESH KUMAR" },
                { sl: 14, session: "2019-20", school: "RSLSC", branch: "BOTANY", name: "NAMITA DEKA", guide: "PROF.(DR.) SARANGA RANJAN PATGIRI" },
                { sl: 15, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "JASMIN SULTANA", guide: "DR. ANUSHREE BARUAH" },
                { sl: 16, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "RINGPHAMCHUNG KHATRU MOYON", guide: "PROF. (DR.) MINARAM NATH" },
                { sl: 17, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "NARGIS ZAMAN", guide: "DR. ANUSHREE BARUAH" },
                { sl: 18, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "SABNAM SULTANA", guide: "DR. ANUSHREE BARUAH" },
                { sl: 19, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "MITALI BARUAH", guide: "DR. RAGHUVAR TIWARY" },
                { sl: 20, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "RICA LANGSTANG", guide: "DR. UPASNA CHETTRY" },
                { sl: 21, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "HIMAKSHI KALITA", guide: "DR. RAGHUVAR TIWARY" },
                { sl: 22, session: "2022-23", school: "RSLSC", branch: "BOTANY", name: "HAFIUZ ZAMAN AHMED", guide: "DR. MANALEE PAUL" },
                { sl: 23, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "DAIMULU BORO", guide: "DR. UPASNA CHETTRY" },
                { sl: 24, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "JIREE BASUMATARY", guide: "DR. RAGHUVAR TIWARY" },
                { sl: 25, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "CHETANA HASNU", guide: "DR. PRATIKSHYA BORAH" },
                { sl: 26, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "JONEY LALNUNPUII PACHUAU", guide: "DR. RAGHUVAR TIWARY" },
                { sl: 27, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "GITANJALI KALITA", guide: "DR. MANALEE PAUL" },
                { sl: 28, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "P SUCHITRA SINGHA", guide: "DR. UPASNA CHETTRY" },
                { sl: 29, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "DEEPRAJ KUNDU", guide: "DR. UPASHNA CHETTRI" },
                { sl: 30, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "BIJIT NATH", guide: "DR. ANUSHREE BARUAH" },
                { sl: 31, session: "2018-19", school: "RSET", branch: "CE", name: "KHAGEN CHANDRA NATH", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 32, session: "2019-20", school: "RSET", branch: "CE", name: "CHANDRA UPADHYAYA", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 33, session: "2019-20", school: "RSET", branch: "CE", name: "RANU GOWAL SARMAH", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 34, session: "2023-24", school: "RSET", branch: "CE", name: "ARJUN BARUAH", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 35, session: "2024-25", school: "RSET", branch: "CE", name: "Yudhajit Dey", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 36, session: "2024-25", school: "RSET", branch: "CE", name: "Arnold Dipak Das", guide: "PROF. (DR.) ARNAB SARMA" },
                { sl: 37, session: "2023-24", school: "RSAPS", branch: "CHEMISTRY", name: "NEEKITA DUTTA", guide: "DR. BISWAJIT SARMA" },
                { sl: 38, session: "2023-24", school: "RSAPS", branch: "CHEMISTRY", name: "TANZINA FIRDOUSHI BORBHUYAN", guide: "DR. DEBOJEET SAHU" },
                { sl: 39, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "RT STARTHRING", guide: "DR. ANUP MALAKAR" },
                { sl: 40, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "TONMOY DOLEY", guide: "DR. PUBALEE SARMAH" },
                { sl: 41, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "Joydeep Chakravorty", guide: "DR. BINOYARGHA DAM" },
                { sl: 42, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "LAKHMINANDAN GOSWAMI", guide: "DR. PUBALEE SARMAH" },
                { sl: 43, session: "2021-22", school: "RSC", branch: "COMMERCE", name: "DIKSHYA SAIKIA", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 44, session: "2021-22", school: "RSC", branch: "COMMERCE", name: "VASUNDHARA JALAN", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 45, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "ADITI BARUAH", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 46, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SAISANGPUII SAILO", guide: "DR. ARUNA DEV ROY" },
                { sl: 47, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SAMARESH NANDY", guide: "DR. ARUNA DEV ROY" },
                { sl: 48, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "DARSHANA DEVI", guide: "DR. ARUNA DEV ROY" },
                { sl: 49, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SANSKRITA BARMAN", guide: "DR. ARUNA DEV ROY" },
                { sl: 50, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "MOHIT CHOUDHARY", guide: "DR. RAJDEEP NAG" },
                { sl: 51, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "DIPAK JAIN", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 52, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "DIPAK JAIN", guide: "DR. RAJDEEP NAG" },
                { sl: 53, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "JIMPY SAUD", guide: "DR. ARUNA DEV ROY" },
                { sl: 54, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "MOIRANGTHEM JINA CHANU", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 55, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "ANANYA BANIK", guide: "DR. RAJDEEP NAG" },
                { sl: 56, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "BEENA RONGPIPI", guide: "DR. ARUNA DEV ROY" },
                { sl: 57, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "ANUPRIYA TALUKDAR", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
                { sl: 58, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "UZMA SADAF", guide: "DR. RAJDEEP NAG" },
                { sl: 59, session: "2024-25", school: "RSET", branch: "CSE", name: "DHARITRI TALUKDAR", guide: "PROF. (DR.) RASHEL SARKAR" },
                { sl: 60, session: "2020-21", school: "RSHSS", branch: "ECONOMICS", name: "SHWETA SINGH", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 61, session: "2020-21", school: "RSHSS", branch: "ECONOMICS", name: "WAHIDA RAHMAN", guide: "PROF. (DR.) SWABERA ISLAM" },
                { sl: 62, session: "2021-22", school: "RSHSS", branch: "ECONOMICS", name: "SANGHAMITRA DUWARAH", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 63, session: "2021-22", school: "RSHSS", branch: "ECONOMICS", name: "ASHA YENGKHOM", guide: "PROF. (DR.) SWABERA ISLAM" },
                { sl: 64, session: "2022-23", school: "RSHSS", branch: "ECONOMICS", name: "TRISHA SAHA", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 65, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "AJANTA DAS", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 66, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "HIMANGGI BORAH", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 67, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "ALORIKA DEB", guide: "DR. DURBA DUTTA" },
                { sl: 68, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "CHANCHI R MARAK", guide: "DR. SANGHAMITRA HAZARIKA" },
                { sl: 69, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "DEEPSHIKHA KALITA", guide: "DR. SANGHAMITRA HAZARIKA" },
                { sl: 70, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "NABADEEPA KALITA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 71, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "MANABENDRA BARMAN", guide: "DR. DURBA DUTTA" },
                { sl: 72, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "SRIJANI HAZARIKA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 73, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "PREETY SHAH ZIYA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 74, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "VANLALREMRUATI KHIANGTE", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 75, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "K LENANGH ANGH", guide: "DR. SANGHAMITRA HAZARIKA" },
                { sl: 76, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "ANURADHA DEVI", guide: "DR. DURBA DUTTA" },
                { sl: 77, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "SUPRIYA KONWAR", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 78, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "Nirupam Das", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 79, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "AKALI CHISHI", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
                { sl: 80, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "Mwikwm Narzary", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 81, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "RITUPARNA BORGOHAIN", guide: "DR. MD. DELUWAR HOQUE" },
                { sl: 82, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "KARENG RONGHANGPI", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 83, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "CHIBENI MERRY", guide: "DR. JASMINE CHOUDHURY" },
                { sl: 84, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "BANANI DAS", guide: "PROF. (DR.) INDRANI SINGH RAI" },
                { sl: 85, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "FAHMIDA AKHTAR", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 86, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "GITIMA DEKA", guide: "PROF. (DR.) PRADIP JYOTI MAHANTA" },
                { sl: 87, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "IFTIKAR ALI AHMED", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 88, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "CHANDAM CHANU NGANTHOIHANBI", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 89, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "CHINMOYEE DEKA", guide: "DR. JASMINE CHOUDHURY" },
                { sl: 90, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "LAISHRAM PINKY", guide: "PROF. (DR.) INDRANI SINGH RAI" },
                { sl: 91, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "SERAM RAJESHWARAN SINGH", guide: "PROF. (DR.) PRADIP JYOTI MAHANTA" },
                { sl: 92, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "HIMASHRI KUMAR", guide: "PROF. (DR.) KRISHNA BARUA" },
                { sl: 93, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "DIMPY BANIA", guide: "PROF. (DR.) KRISHNA BARUA" },
                { sl: 94, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "RASHMIREKHA BARMAN", guide: "PROF. (DR.) KRISHNA BARUA" },
                { sl: 95, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "GOURISHIKHA BORGOHAIN", guide: "DR. STUTI GOSWAMI" },
                { sl: 96, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "MIRANDA NGANGOM", guide: "DR. PRONAMI BHATTACHARYYA" },
                { sl: 97, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "DEIFY BAKORDOR SUTING", guide: "DR. PRONAMI BHATTACHARYYA" },
                { sl: 98, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "HEMANTA BORA", guide: "PROF. (DR.) BORNALI BHUYAN" },
                { sl: 99, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "KASTURI BORGOHAIN", guide: "DR. STUTI GOSWAMI" },
                { sl: 100, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "PAYEL DAS", guide: "DR. PRONAMI BHATTACHARYYA" },
                { sl: 101, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "JUBIN NAHAR", guide: "DR. PRONAMI BHATTACHARYYA" },
                { sl: 102, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "NIVEDITA DUTTA", guide: "DR. PAMPI BASUMATARY" },
                { sl: 103, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "SINJINI SAIKIA", guide: "DR. STUTI GOSWAMI" },
                { sl: 104, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "TAJUNGMENLA JAMIR", guide: "PROF. (DR.) BORNALI BHUYAN" },
                { sl: 105, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "TUHISHA GHOSH", guide: "DR. STUTI GOSWAMI" },
                { sl: 106, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "ABAMEDA GIRI KHARMALKI", guide: "DR. PRONAMI BHATTACHARYYA" },
                { sl: 107, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "ADITI GHOSH", guide: "DR. STUTI GOSWAMI" },
                { sl: 108, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "PUJA KUMARI", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 109, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "RUMA DEBNATH", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 110, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "SATAVISHA HAZARIKA", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 111, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "NANCY PANGEIJAM", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 112, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "MAHFUZ AHMED", guide: "DR. JASMINE CHOUDHURY" },
                { sl: 113, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "RT SHANGWARHRING", guide: "DR. BAISHALEE RAJKHOWA" },
                { sl: 114, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "BHASKAR KOUSHIK DAS", guide: "DR. STUTI GOSWAMI" },
                { sl: 115, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "T.LALAWMPUII", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 116, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "C.LALNUNPUII", guide: "DR. JYOTI MISHRA" },
                { sl: 117, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "PRANITA KALITA", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 118, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "ARTIBIRTH CH MARAK", guide: "DR. PAMPI BASUMATARY" },
                { sl: 119, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "JENIFAR SABNAM", guide: "DR. JASMINE CHOUDHURY" },
                { sl: 120, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HIMTRINA RABHA", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 121, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HIMADRI BORAH", guide: "DR. PAMPI BASUMATARY" },
                { sl: 122, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "BHASWATI CHETIA", guide: "PROF. (DR.) INDRANI SINGH RAI" },
                { sl: 123, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "NIJWM BASUMATARY", guide: "PROF. (DR.) INDRANI SINGH RAI" },
                { sl: 124, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "PINAZ MIRZA", guide: "DR. PRABUDDHA GHOSH" },
                { sl: 125, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HEMEN JYOTI DAS", guide: "DR. PRABUDDHA GHOSH" },
                { sl: 126, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "ANGELINA THANGJAM", guide: "DR. PAMPI BASUMATARY" },
                { sl: 127, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "DIVYAJYOTI DAS", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 128, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "JIMLI DEKA", guide: "PROF. (DR.) TUSHTI SHARMA" },
                { sl: 129, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "ROBERT LYNDOH", guide: "DR. DEMSAI REANG" },
                { sl: 130, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "R LALRINNGHETI", guide: "DR. DEMSAI REANG" },
                { sl: 131, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "NAPHIBANIARLIN KSFIAR", guide: "DR. PALLABI BORAH" },
                { sl: 132, session: "2019-20", school: "RSFA", branch: "FINE ARTS", name: "KISHAN BAGDI", guide: "DR. MOUSUMI DEKA" },
                { sl: 133, session: "2022-23", school: "RSFA", branch: "FINE ARTS", name: "GAURAV MORAL", guide: "DR. MOUSUMI DEKA" },
                { sl: 134, session: "2022-23", school: "RSFA", branch: "FINE ARTS", name: "LALREMRUATA VARTE", guide: "DR. MOUSUMI DEKA" },
                { sl: 135, session: "2023-24", school: "RSFA", branch: "FINE ARTS", name: "ANKUR HAZARIKA", guide: "DR. MOUSUMI DEKA" },
                { sl: 136, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "SYEDA JADIDA AKHTAR", guide: "DR. SHAGUFTA RIZWANA" },
                { sl: 137, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "DIPANJALI DAS", guide: "DR. PREETISAGAR TALUKDAR" },
                { sl: 138, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "RAHUL BORDOLOI", guide: "PROF. (DR.) PRANATI DAS" },
                { sl: 139, session: "2024-25", school: "RSLSC", branch: "FORESTRY", name: "SATYAMJIT NEOG", guide: "DR. DEMSAI REANG" },
                { sl: 140, session: "2024-25", school: "RSLSC", branch: "FORESTRY", name: "CHICHAKHA DEV BARMA", guide: "DR. PAUL LALREMSANG" },
                { "sl": 141, "session": "2021-22", "school": "RSEES", "branch": "GEOGRAPHY", "name": "HASNE TOUFIKI", "guide": "PROF.(DR.) B S MIPUN" },
                { "sl": 142, "session": "2022-23", "school": "RSEES", "branch": "GEOGRAPHY", "name": "DIPSHIKHA KALITA", "guide": "DR. ANNESHA BORAH" },
                { "sl": 143, "session": "2023-24", "school": "RSEES", "branch": "GEOGRAPHY", "name": "EILEEN BETSY MYLLIEMNGAP", "guide": "PROF.(DR.) B S MIPUN" },
                { "sl": 144, "session": "2023-24", "school": "RSEES", "branch": "GEOGRAPHY", "name": "SONIA SAMJETSABAM", "guide": "DR. TRISHNA CHANGKAKATI" },
                { "sl": 145, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "BIPLAB SARKAR", "guide": "PROF. (DR.) D.K. NAYAK" },
                { "sl": 146, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "GITALI. HAZARIKA", "guide": "DR. ANNESHA BORAH" },
                { "sl": 147, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "MRIDULA KALITA", "guide": "DR. ANNESHA BORAH" },
                { "sl": 148, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "KAKALI MEDHI", "guide": "PROF. (DR.) D.K. NAYAK" },
                { "sl": 149, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "GANESH CHANDRA DAS", "guide": "PROF. (DR.) D.K. NAYAK" },
                { "sl": 150, "session": "2019-20", "school": "RSHSS", "branch": "HISTORY", "name": "JORDAN THAPA", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 151, "session": "2022-23", "school": "RSHSS", "branch": "HISTORY", "name": "POOJA BHATTACHARJEE", "guide": "PROF. (DR.) SAJAL NAG" },
                { "sl": 152, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "PHOWLTHA SELTUN", "guide": "PROF. (DR.) SAJAL NAG" },
                { "sl": 153, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "PUSPA DEORI", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 154, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "FREDDIE KHAWLHRING", "guide": "DR. MITALI KALITA" },
                { "sl": 155, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "TANZIM MASUD", "guide": "PROF. (DR.) SAJAL NAG" },
                { "sl": 156, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "RASHMIREKHA HAZARIKA", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 157, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "CHIDORA R MARAK", "guide": "DR. MITALI KALITA" },
                { "sl": 158, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "PHURAILATPAM AARTI DEVI", "guide": "DR. SAIKHOM RONEL SINGH" },
                { "sl": 159, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "AKANGSHA KALITA", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 160, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "ALEXANDER D SANGMA", "guide": "DR. SUSHMITA BANERJEE" },
                { "sl": 161, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "BANTI TALUKDAR", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 162, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "BIKASHITA SAIKIA", "guide": "DR. SUSMITA HAZARIKA" },
                { "sl": 163, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "HIMANGSHU SHEKHAR BORA", "guide": "DR. SAIKHOM RONEL SINGH" },
                { "sl": 164, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JUDITH LALNIVAR INTOVATE", "guide": "PROF. (DR.) SAJAL NAG" },
                { "sl": 165, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JURI DEKA", "guide": "DR. SAIKHOM RONEL SINGH" },
                { "sl": 166, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "ROTHANGLIANA", "guide": "PROF. (DR.) SAJAL NAG" },
                { "sl": 167, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JINI RANI BORO", "guide": "DR. SUSHMITA BANERJEE" },
                { "sl": 168, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "NH HINGNAMYI BLESSING NEWME", "guide": "DR. SAIKHOM RONEL SINGH" },
                { "sl": 169, "session": "2020-21", "school": "RSIT", "branch": "I.T.", "name": "ASHOK KUMAR SARKAR", "guide": "DR. ANUPAM DAS" },
                { "sl": 170, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RASHMIREKHA BORAH", "guide": "DR. RISHI CHAKRAVARTY" },
                { "sl": 171, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "ANKITA SARMA", "guide": "PROF. (DR.) D.N. SINGH" },
                { "sl": 172, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RUMI TALUKDAR", "guide": "PROF. (DR.) GEORGE AP" },
                { "sl": 173, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "KANGKANA TALUKDAR", "guide": "DR. SYEDA ANJUM AFREEN" },
                { "sl": 174, "session": "2024-25", "school": "RSMAS", "branch": "PHYSIOTHERAPY", "name": "SOMYATA CHITARANJAN SATPATHY SARMA", "guide": "PROF. (DR.) ABHIJIT DUTTA" },
                { "sl": 175, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "MAYURI OJAH", "guide": "DR. MADHUSMITA KOCH" },
                { "sl": 176, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RUCHI BHARDWAJ", "guide": "DR. SHRADDHA BASU" },
                { "sl": 177, "session": "2018-19", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "PREETILATA KUMARI", "guide": "DR. HAOGINLEN. CHONGLOI" },
                { "sl": 178, "session": "2022-23", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "UPEN BORA", "guide": "DR. RASHMI SARMAH" },
                { "sl": 179, "session": "2023-24", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "BRISTI GOGOI", "guide": "PROF. (DR.) S. C. NAYAK" },
                { "sl": 180, "session": "2023-24", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "ZAKIR HUSSAIN", "guide": "PROF. (DR.) S. C. NAYAK" },
                { "sl": 181, "session": "2024-25", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "SAMUEL LALBELSANG", "guide": "PROF. (DR.) S. C. NAYAK" },
                { "sl": 182, "session": "2024-25", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "AMIT BARUAH", "guide": "DR. RASHMI SARMAH" },
                { "sl": 183, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BINU HAZARIKA KASHYAP", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 184, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RASHMI REKHA PHUKAN", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 185, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MAILINDA LYNSHING", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 186, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ABIDA SULTANA LASKAR", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 187, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DILIP KUMAR BORA", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 188, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DR RATHINDRA BHUYAN", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 189, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRONAB KR NATH", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 190, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KRISHNA DAS", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 191, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "POMPI DEKA", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 192, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BONNIE SARMA", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 193, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NARGIS CHOUDHURY", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 194, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHAHNAJ SULTANA", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 195, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SONI TEP", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 196, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BEATIFY LUNGDOH", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 197, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISH KUMAR DAS", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 198, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BHASWATI BORAH", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 199, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ANUPAL DUTTA PATHAK", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 200, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BONANI MAHANTA", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 201, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JAYSHREE SHARMA", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 202, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NEHA VERMA", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 203, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BEAUTY NEOG", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 204, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BRANDON MESHAN PAJAT", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 205, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "LALSOLOMON DARNEI", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 206, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRITY GUPTA", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 207, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RAJASHRI HAZARIKA", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 208, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SATAVISA BORA", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 209, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHRUTI HAZARIKA BORPUJARI", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 210, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SRISTI AGARWAL", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 211, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "UPASHANA GOSWAMI", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 212, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BAMERI DONDOR KHARSOHTUN", "guide": "PROF. (DR.) H. C. NATH" },
                { "sl": 213, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BICKEY PRASAD", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 214, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JHARNA AKRAM", "guide": "DR. ANJUMAN A. BEGUM" },
                { "sl": 215, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NITA RIJIJU", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 216, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PANKHI DEVI", "guide": "PROF. (DR.) B. C. BAROOAH" },
                { "sl": 217, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "POOJA DEVI", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 218, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BENZIR ZAMAN", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 219, "session": "2024-25", "school": "RSL", "branch": "LAW & ADMINISTRATION", "name": "ASIF ALI ANSARI", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 220, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KENEISENUO RUTSA", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 221, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DIANA TRICIA TLANG", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 222, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISHA DEKA", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 223, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NIMISHA SHARMA", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 224, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ANISHA HAQUE", "guide": "PROF. (DR.) YSR MURTHY" },
                { "sl": 225, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BIRENDRA KUMAR BARMAN", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 226, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NAPHISABET KHARKONGOR", "guide": "PROF. (DR.) THANESWAR KALITA" },
                { "sl": 227, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RANI CHYRMANG", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 228, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "OINAM MITRABATI DEVI", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 229, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "HIMANI RABHA", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 230, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "CARLOS NONGSIEJ", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 231, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BIMAN NATH", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 232, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRIYANGSHU GOSWAMI", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 233, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DIPSHIKHA ROY CHOWDHURY", "guide": "PROF. (DR.) PREETI GUPTA" },
                { "sl": 234, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JOYEETA RAJKHOWA", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 235, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SARMISTHA CHAKRABARTY", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 236, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISHA BORTHAKUR", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 237, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RASHMI REKHA SAIKIA", "guide": "DR. PRANITA CHAUDHURY" },
                { "sl": 238, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHRISTI TODI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 239, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PURBA GOSWAMI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 240, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KANKANA CHOUDHURY", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 241, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SUMITRA DEVI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
                { "sl": 242, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "KONGKINA NATH", "guide": "DR. MUKUTOR RAHMAN" },
                { "sl": 243, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "PRASANNA KUMAR KONCH", "guide": "DR. HIRAK JYOTI HAZARIKA" },
                { "sl": 244, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "MERINA AHMED", "guide": "DR. MUKUTOR RAHMAN" },
                { "sl": 245, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "BIKRAMADITYA BARMAN", "guide": "DR. MUKUTOR RAHMAN" },
                { "sl": 246, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "NIHARIKA SAIKIA", "guide": "DR. HIRAK JYOTI HAZARIKA" },
                { "sl": 247, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "BHAGABATI NARZARY", "guide": "DR. MUKUTOR RAHMAN" },
                { "sl": 248, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "Basera K. Sangma", "guide": "DR. HIRAK JYOTI HAZARIKA" },
                { "sl": 249, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "MANJUSHREE DEVI", "guide": "DR. HIRAK JYOTI HAZARIKA" },
                { "sl": 250, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "KISHUR NATH", "guide": "DR. NILANJANA PURKAYASTHA" },
                { "sl": 251, "session": "2017-18", "school": "RSB", "branch": "MANAGEMENT", "name": "ROSHINI SAIKIA", "guide": "PROF. (DR.) S.P. SINGH" },
                { "sl": 252, "session": "2019-20", "school": "RSB", "branch": "MANAGEMENT", "name": "MAHENDRA PRASAD", "guide": "PROF. (DR.) S.P. SINGH" },
                { "sl": 253, "session": "2019-20", "school": "RSB", "branch": "MANAGEMENT", "name": "KALYANI GOHAIN", "guide": "PROF. (DR.) S.P. SINGH" },
                { "sl": 254, "session": "2020-21", "school": "RSB", "branch": "MANAGEMENT", "name": "ASHIM KUMAR SARMAH", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 255, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "AISHWARYA GOSWAMI", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 256, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "DHRUBAJYOTI THAKURIA", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 257, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "NEHA TIWARI", "guide": "PROF. (DR.) S.P. SINGH" },
                { "sl": 258, "session": "2022-23", "school": "RSB", "branch": "MANAGEMENT", "name": "MONALISA KONWAR", "guide": "PROF. (DR.) GEORGE AP" },
                { "sl": 259, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "NILIMOY NATH", "guide": "DR. DARSHANA BHAGOBATI" },
                { "sl": 260, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "SHARIF AHMED", "guide": "DR. DARSHANA BHAGOBATI" },
                { "sl": 261, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "INDIRA DEV ROY", "guide": "PROF. (DR.) GEORGE AP" },
                { "sl": 262, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "BRISTY SRIVASTAVA", "guide": "PROF. (DR.) GEORGE AP" },
                { "sl": 263, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "SUSHMITA KONJENGBAM", "guide": "DR. RISHI CHAKRAVARTY" },
                { "sl": 264, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "RIMA DAS", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 265, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NAZVI NASEEM", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 266, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "UTTAM BORAH", "guide": "DR. ARPEE SAIKIA" },
                { "sl": 267, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "KUHELI DUTTA", "guide": "DR. SUMAN AGARWAL" },
                { "sl": 268, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "MITHINGA MUSHAHARY", "guide": "DR. SUMAN AGARWAL" },
                { "sl": 269, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NEELU SWAMI", "guide": "PROF. (DR.) D.N. SINGH" },
                { "sl": 270, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NASREEN FIRDAUS CHOWDHURY", "guide": "PROF. (DR.) GEORGE AP" },
                { "sl": 271, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "MOHINA AKHTARA", "guide": "DR. RISHI CHAKRAVARTY" },
                { "sl": 272, "session": "2020-21", "school": "RSAPS", "branch": "MATHEMATICS", "name": "SINAM RAJKISHORE SINGHA", "guide": "DR. BIMALENDU KALITA" },
                { "sl": 273, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "MARDOR WANRI SYNREM", "guide": "PROF. (DR.) KAMAL DEBNATH" },
                { "sl": 274, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "MUSTAK EUCHUF", "guide": "PROF. (DR.) ANURADHA DEVI" },
                { "sl": 275, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "PUNAM DAS", "guide": "PROF. (DR.) KAMAL DEBNATH" },
                { "sl": 276, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "H IMO MANI SINGHA", "guide": "PROF. (DR.) ANURADHA DEVI" },
                { "sl": 277, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "FLORENCE DAIMARI", "guide": "DR. BIMALENDU KALITA" },
                { "sl": 278, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "KARISMITA MEDHI", "guide": "PROF. (DR.) KAMAL DEBNATH" },
                { "sl": 279, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "KHRUNIELU LOHE", "guide": "DR. BIMALENDU KALITA" },
                { "sl": 280, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "POMPI DAS", "guide": "PROF. (DR.) KAMAL DEBNATH" },
                { "sl": 281, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "ANANYA SHILPI", "guide": "DR. BAPAN KALITA" },
                { "sl": 282, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "Nandita Saikia", "guide": "PROF. (DR.) KAMAL DEBNATH" },
                { "sl": 283, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "OINDRILA ROY CHOWDHURY", "guide": "DR. BAPAN KALITA" },
                { "sl": 284, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "AKASH PAWAR", "guide": "DR. BAPAN KALITA" },
                { "sl": 285, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "ANUPAMA MOIRANGTHEM", "guide": "DR. BIRSON INGTI" },
                { "sl": 286, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "SYED HADI ABDUL ROUF", "guide": "DR. NIRAJ SINGH" },
                { "sl": 287, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "KOWSALYA", "guide": "DR. SUSHMITA PAUL" },
                { "sl": 288, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "RAMKRISHNA ROY", "guide": "DR. BIRSON INGTI" },
                { "sl": 289, "session": "2024-25", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "NONGMAITHEM BISHWANATH SINGH", "guide": "PROF. (DR.) AMLAN DAS" },
                { "sl": 290, "session": "2024-25", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "AFRID AHMED", "guide": "DR. PANKAJ LOSAN SHARMA" },
                { "sl": 291, "session": "2023-24", "school": "RSMAS", "branch": "NUTRITION & DIETETICS", "name": "JEBIN SULTANA", "guide": "PROF. (DR.) PRANATI DAS" },
                { "sl": 292, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "GUJJALA SAI SRI HARSHA", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
                { "sl": 293, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "RUNA CHAKRAVORTY", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 294, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "KAMAL DEKA", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 295, "session": "2021-22", "school": "RSP", "branch": "PHARMACY", "name": "ARUP CHAKRABORTY", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
                { "sl": 296, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "MUKINUR HUSSAIN", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
                { "sl": 297, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "HADIUZ ZAMAN", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 298, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "HIMANTA BISWA SAIKIA", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 299, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "PAYAL DASGUPTA", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 300, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "DR. SHAHINUR ISLAM", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 301, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "BHASKAR JYOTI PATHAK", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 302, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "MUZAMMAL HOQUE MALLAH", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 303, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "NILUTPAL HAZARIKA", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 304, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "LOBSANG TENZING KOMU", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
                { "sl": 305, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "SADHANA SHARMA", "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY" },
                { "sl": 306, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "SUMI BARMAN", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 307, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "PRIYANKA DAS", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 308, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "NEELAKSHI SHARMA", "guide": "PROF. (DR.) BIPUL NATH" },
                { "sl": 309, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "ARPAN SEN", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
                { "sl": 310, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "SABNAM NARGIS", "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY" },
                { "sl": 311, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "DR. RAKIBUR RAHMAN", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
                { "sl": 312, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "Paramjyoti Adhikary", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
                { "sl": 313, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "PALLAB KUMAR NATH", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
                { "sl": 314, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "ARGHYA SAHA CHOWDHURY", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
                { "sl": 315, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "ARUP SAIKIA", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 316, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "BIDISH BORAH", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 317, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "PARTHA PRATIM BORAH", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 318, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "AIDASHISHA BAREH", "guide": "DR. BORNALI CHETIA" },
                { "sl": 319, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "VIOLINA DAS", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 320, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "LONGKHRAW KHONGLANG", "guide": "DR. SUJATA DEB" },
                { "sl": 321, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "SNARMON LATO", "guide": "DR. SUJATA DEB" },
                { "sl": 322, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "RAHUL DEY", "guide": "DR. SANCHITA ROY" },
                { "sl": 323, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "GOURANGA MEDHI", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 324, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "MANAS JYOTI NATH", "guide": "DR. DEVIKA PHUKAN" },
                { "sl": 325, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "USHA RANI SWARGIARY", "guide": "DR. GITANJAL DEKA" },
                { "sl": 326, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "MADHU RAM RABIDAS", "guide": "DR. BORNALI CHETIA" },
                { "sl": 327, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "TAPAS SEN", "guide": "DR. SANCHITA ROY" },
                { "sl": 328, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "PRABHAT SHARMA", "guide": "DR. MAIDUL ISLAM" },
                { "sl": 329, "session": "2020-21", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SHELZA JALAN", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 330, "session": "2021-22", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "LIONG M PHOM", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 331, "session": "2021-22", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MUSTAFA SYED IHTIMUM ALAM", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 332, "session": "2022-23", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "NAGENDRA NATH GOGOI", "guide": "DR. Y MONOJIT SINGHA" },
                { "sl": 333, "session": "2022-23", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "TANJEELA MEHBOOB", "guide": "DR. Y MONOJIT SINGHA" },
                { "sl": 334, "session": "2023-24", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "PRAJOYEETA KASHYAP", "guide": "DR. Y MONOJIT SINGHA" },
                { "sl": 335, "session": "2023-24", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SUBHASH BARO", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 336, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MONISHA BORDOLOI", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 337, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SHANGKY KHONGWAR", "guide": "DR. Y MONOJIT SINGHA" },
                { "sl": 338, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ROZY RANI SARMAH", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
                { "sl": 339, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "TH TREESHALI DEVI", "guide": "DR. BABA CHANDRA SINGHA" },
                { "sl": 340, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ELCHIRA R MARAK", "guide": "DR. BABA CHANDRA SINGHA" },
                { "sl": 341, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ANJUMA AHMED NARGIS", "guide": "DR. KRISHANGI SAIKIA" },
                { "sl": 342, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "KONJENGBAM SURAJ", "guide": "DR. BABA CHANDRA SINGHA" },
                { "sl": 343, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "BARNALI BHATTACHARYYA", "guide": "DR. KRISHANGI SAIKIA" },
                { "sl": 344, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SWRJISHA BASUMATARY", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
                { "sl": 345, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MAITRAYEE MALAKAR", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
                { "sl": 346, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ABHINAV CHALIHA", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
                { "sl": 347, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "BIRINA BARTHAKUR", "guide": "DR. KRISHANGI SAIKIA" },
                { "sl": 348, "session": "2020-21", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "AVI NUH", "guide": "DR. JWMWISHREE BORO" },
                { "sl": 349, "session": "2021-22", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "SHUBHI JAIN", "guide": "DR. MAHUYA DEB" },
                { "sl": 350, "session": "2022-23", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "ROSHNI NONGTHOMBAM", "guide": "DR. TAHERA HOQUE MOZUMDAR" },
                { sl: 351, session: "2022-23", school: "RSBAS", branch: "PSYCHOLOGY", name: "BINOY JOHN", guide: "DR. QUEEN DEKA" },
                { sl: 352, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "JAHNABI MAHANTA", guide: "DR. JWMWISHREE BORO" },
                { sl: 353, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "LOYA AGARWALA", guide: "DR. QUEEN DEKA" },
                { sl: 354, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "SUHANA SULTANA", guide: "DR. SYEDA ANJUM AFREEN" },
                { sl: 355, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "VAIBHAV PURANIK", guide: "DR. FARIZA SAIDIN" },
                { sl: 356, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "AYUKHSHYA BARO", guide: "DR. SHRADDHA BASU" },
                { sl: 357, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "MANISHA NATH", guide: "DR. SHRADDHA BASU" },
                { sl: 358, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "HUIDROM INDUMALA", guide: "DR. QUEEN DEKA" },
                { sl: 359, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "JULIE BORAH", guide: "DR. FARIZA SAIDIN" },
                { sl: 360, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "MEDIENO ZHASA", guide: "DR. PRINCE CP" },
                { sl: 361, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "ROMILA THOUDAM", guide: "DR. FARIZA SAIDIN" },
                { sl: 362, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "SANGITA YAMBEM", guide: "DR. TAHERA HOQUE MOZUMDAR" },
                { sl: 363, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "ANWESHA CHUTIA", guide: "DR. PRINCE CP" },
                { sl: 364, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "NZANRHONI PATTON", guide: "DR. JWMWISHREE BORO" },
                { sl: 365, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "STEFFINA BEYTI", guide: "DR. PRINCE CP" },
                { sl: 366, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "ROHIT KUMAR DEKA", guide: "DR. MAHUYA DEB" },
                { sl: 367, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "SHUBHANGI BHAGAWATI", guide: "DR. FARIZA SAIDIN" },
                { sl: 368, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "RENGKA TIMUNGPI", guide: "DR. SYEDA ANJUM AFREEN" },
                { sl: 369, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "MANASHI NATH", guide: "DR. PRINCE CP" },
                { sl: 370, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "RUKMINI RAJMOHAN", guide: "DR. JWMWISHREE BORO" },
                { sl: 371, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "Vanthunglo Murry", guide: "DR. MAHUYA DEB" },
                { sl: 372, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "UDITA DAS", guide: "DR. TAHERA HOQUE MOZUMDAR" },
                { sl: 373, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "JERIN JOSE GEORGE", guide: "DR. PRINCE CP" },
                { sl: 374, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY/CLINICAL", name: "ANKUR BARMAN", guide: "DR. QUEEN DEKA" },
                { sl: 375, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY/CLINICAL", name: "MAHIMA SINGHI", guide: "DR. PRINCE CP" },
                { sl: 376, session: "2021-22", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "TEMJENSOLA I", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 377, session: "2022-23", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "GRIKANCHIE M SANGMA", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 378, session: "2022-23", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "NIKITA BISWAKARMA", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 379, session: "2023-24", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "QUEENARITY NONGRUM", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 380, session: "2023-24", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "UNICE LALRINSIAMKIMI", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 381, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "NIHARIKA GOGOI", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 382, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "JOSEPHINE. H.M.", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 383, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "GITANJALI HAOBAM", guide: "PROF. (DR.) MEENU SHARMA" },
                { sl: 384, session: "2020-21", school: "RSHSS", branch: "SOCIAL WORK", name: "ELIZABETH MISAO", guide: "DR. PRIYANKA PATOWARI" },
                { sl: 385, session: "2023-24", school: "RSHSS", branch: "SOCIAL WORK", name: "ARCKPRAV DEWAN", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
                { sl: 386, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "PRAJUKTI PRIYADARSHINI", guide: "DR. MOSES NEWME" },
                { sl: 387, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BALITA SIANGSHAI", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
                { sl: 388, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "SYEDA SHAGUFTAH FARHEEN", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
                { sl: 389, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BAIBHAVI BHAVNA", guide: "DR. MADHU MANJARI GOHAIN" },
                { sl: 390, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BIRINCHI BORAH", guide: "DR. PRIYANKA PATOWARI" },
                { sl: 391, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "KIANZANDI ODYUO", guide: "DR. MOSES NEWME" },
                { sl: 392, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "MOIRANGTHEM BIDYAMANI", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
                { sl: 393, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "MOON MOON AHMED", guide: "DR. MADHU MANJARI GOHAIN" },
                { sl: 394, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "KRISTI SAIKIA", guide: "DR. PRIYANKA PATOWARI" },
                { sl: 395, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "NAOREM KELVISH SINGH", guide: "DR. PRIYANKA PATOWARI" },
                { sl: 396, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "ADIMA N ARENGH", guide: "DR. MOSES NEWME" },
                { sl: 397, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "DEBALINA DEBBARMA", guide: "DR. SANGEETA DAS" },
                { sl: 398, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "DEBIYA THONGAM", guide: "DR. SANGEETA DAS" },
                { sl: 399, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "KENEISELHOU CHIELIE", guide: "DR. TRIPTI DAS" },
                { sl: 400, session: "2024-25", school: "RSHSS", branch: "SOCIOLOGY", name: "APARAJITA GOON", guide: "DR. TRIPTI DAS" },
                { sl: 401, session: "2024-25", school: "RSHSS", branch: "SOCIOLOGY", name: "MAN KUMAR BARAILY", guide: "DR. SANGEETA DAS" },
                { sl: 402, session: "2019-20", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SANJOY RONGHANG", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 403, session: "2021-22", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "CHANDAN JYOTI BEZBORAH", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 404, session: "2021-22", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "PIYUSH GUPTA", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 405, session: "2022-23", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SPARSH TIWARI", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 406, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "ANKITA SAIKIA", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 407, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "MEGHA PHUKAN", guide: "PROF. (DR.) SOUMITRA SEN" },
                { sl: 408, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SUPONGSANGLA LONGCHAR", guide: "DR. SYED SAJIDUL ISLAM" },
                { sl: 409, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "KARISHMA AZIZ", guide: "DR. SYED SAJIDUL ISLAM" },
                { sl: 410, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "NEEKITA DAOLAGUPU", guide: "DR. INDRAJIT DUTTA" },
                { sl: 411, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "GEOBAR B MARAK", guide: "DR. INDRAJIT DUTTA" },
                { sl: 412, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "KUNTAL KALITA", guide: "DR. INDRAJIT DUTTA" },
                { sl: 413, session: "2020-21", school: "RSLSC", branch: "ZOOLOGY", name: "ABUJAM ROMIBALA DEVI", guide: "DR. SUSMITA DEY" },
                { sl: 414, session: "2022-23", school: "RSLSC", branch: "ZOOLOGY", name: "SOIBAM PRIYADARSHINI", guide: "DR. DHARMESWAR BARHOI" },
                { sl: 415, session: "2022-23", school: "RSLSC", branch: "ZOOLOGY", name: "SANJENBAM JOEL", guide: "DR. PARIMAL C RAY" },
                { sl: 416, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ANIRUDHA CHAKRABORTY", guide: "DR. PARIMAL C RAY" },
                { sl: 417, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "MAYOUSHREE GOGOI", guide: "DR. ABESH CHAKRABORTY" },
                { sl: 418, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "SANGEETA BISWAS", guide: "DR. PARIMAL C RAY" },
                { sl: 419, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ARPANA R RABHA", guide: "DR. DHARMESWAR BARHOI" },
                { sl: 420, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "DIPSANU PAUL", guide: "DR. DHARMESWAR BARHOI" },
                { sl: 421, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "SENT BUALGA M MARAK", guide: "DR. DHARMESWAR BARHOI" },
                { sl: 422, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ACHINTYA PRAN HAZARIKA", guide: "DR. ARVIND DWIVEDI" },
                { sl: 423, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "BHITALI BARKAKATI", guide: "DR. ABESH CHAKRABORTY" },
                { sl: 424, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "KRISHNAA BORO", guide: "DR. ABESH CHAKRABORTY" },
                { sl: 425, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "MONISH KUMAR THAPA", guide: "DR. PARIMAL C RAY" },
                { sl: 426, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "PRIYANKU BORAH", guide: "DR. ARVIND DWIVEDI" },
                { sl: 427, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "KUMAR KRITARTHA KAUSHIK", guide: "DR. ANNU KUMARI" },
                { sl: 428, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "SIKHA RABHA", guide: "DR. ANNU KUMARI" },
                { sl: 429, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "JOBASMITA SHARMA", guide: "DR. ANNU KUMARI" },
                { sl: 430, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "TINA CHETRY", guide: "DR. ANNU KUMARI" },
                { sl: 431, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "NILAKHI LAHAN", guide: "DR. ARVIND DWIVEDI" },
                { sl: 432, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "CHANDA GWALA", guide: "DR. ABESH CHAKRABORTY" },
                { sl: 433, session: "2024-25", school: "RSLIS", branch: "ZOOLOGY", name: "ARUNDHUTI KASHYAP", guide: "DR. ARVIND DWIVEDI" }
                // Add the rest of the data...
            ];

            const rowsPerPage = 20;
            let currentPage = 1;

            function displayTable(page) {
                const tbody = document.querySelector('#dataTable tbody');
                tbody.innerHTML = "";

                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                const paginatedItems = data.slice(start, end);

                for (const row of paginatedItems) {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `<td>${row.sl}</td><td>${row.session}</td><td>${row.school}</td><td>${row.branch}</td><td>${row.name}</td><td>${row.guide}</td>`;
                    tbody.appendChild(tr);
                }

                setupPagination();
            }

            function setupPagination() {
                const pagination = document.getElementById('pagination');
                pagination.innerHTML = "";
                const pageCount = Math.ceil(data.length / rowsPerPage);

                for (let i = 1; i <= pageCount; i++) {
                    const btn = document.createElement('button');
                    btn.textContent = i;
                    btn.className = (i === currentPage) ? 'active' : '';
                    btn.onclick = function () {
                        currentPage = i;
                        displayTable(currentPage);
                    };
                    pagination.appendChild(btn);
                }
            }

            displayTable(currentPage);
        </script>

    {{-- mobile Script --}}
    <script>
        const data = [
            { sl: 1, session: "2024-25", school: "RSA", branch: "ARCHITECTURE", name: "DIKSHA DUTTA", guide: "PROF. (DR.) HARI PRASAD AGARWAL" },
            { sl: 2, session: "2024-25", school: "RSA", branch: "ARCHITECTURE", name: "KASTURI BORAH", guide: "PROF. (DR.) HARI PRASAD AGARWAL" },
            { sl: 3, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "BISHWAPRIYA CHUTIA", guide: "DR. BHASKARJYOTI GOGOI" },
            { sl: 4, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "DEBALEENA KASHYAP", guide: "DR. BHASKARJYOTI GOGOI" },
            { sl: 5, session: "2021-22", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SAHIBA KHAN", guide: "DR. DEBAJIT BORAH" },
            { sl: 6, session: "2022-23", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SAAHANA SYED JUHI", guide: "PROF. (DR.) RANJAN DUTTA KALITA" },
            { sl: 7, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "IXORA WAIKHOM", guide: "DR. SIDDHARTHA NARAYAN BORAH" },
            { sl: 8, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "ANMOL KAUR", guide: "DR. RUPSIKHA PATOWARY" },
            { sl: 9, session: "2023-24", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "PANCHAMI BORPUJARI", guide: "DR. DEBAJIT BORAH" },
            { sl: 10, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "AMARTYA DAS", guide: "PROF. (DR.) RANJAN DUTTA KALITA" },
            { sl: 11, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "DEBOSMITA DUTTA", guide: "DR. MOUSUMI DAS GOSWAMI" },
            { sl: 12, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "ANINDITA DUTTA", guide: "DR. RUPESH KUMAR" },
            { sl: 13, session: "2024-25", school: "RSBSC", branch: "BIOTECHNOLOGY", name: "SHIKHA RANI BARO", guide: "DR. RUPESH KUMAR" },
            { sl: 14, session: "2019-20", school: "RSLSC", branch: "BOTANY", name: "NAMITA DEKA", guide: "PROF.(DR.) SARANGA RANJAN PATGIRI" },
            { sl: 15, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "JASMIN SULTANA", guide: "DR. ANUSHREE BARUAH" },
            { sl: 16, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "RINGPHAMCHUNG KHATRU MOYON", guide: "PROF. (DR.) MINARAM NATH" },
            { sl: 17, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "NARGIS ZAMAN", guide: "DR. ANUSHREE BARUAH" },
            { sl: 18, session: "2020-21", school: "RSLSC", branch: "BOTANY", name: "SABNAM SULTANA", guide: "DR. ANUSHREE BARUAH" },
            { sl: 19, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "MITALI BARUAH", guide: "DR. RAGHUVAR TIWARY" },
            { sl: 20, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "RICA LANGSTANG", guide: "DR. UPASNA CHETTRY" },
            { sl: 21, session: "2021-22", school: "RSLSC", branch: "BOTANY", name: "HIMAKSHI KALITA", guide: "DR. RAGHUVAR TIWARY" },
            { sl: 22, session: "2022-23", school: "RSLSC", branch: "BOTANY", name: "HAFIUZ ZAMAN AHMED", guide: "DR. MANALEE PAUL" },
            { sl: 23, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "DAIMULU BORO", guide: "DR. UPASNA CHETTRY" },
            { sl: 24, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "JIREE BASUMATARY", guide: "DR. RAGHUVAR TIWARY" },
            { sl: 25, session: "2023-24", school: "RSLSC", branch: "BOTANY", name: "CHETANA HASNU", guide: "DR. PRATIKSHYA BORAH" },
            { sl: 26, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "JONEY LALNUNPUII PACHUAU", guide: "DR. RAGHUVAR TIWARY" },
            { sl: 27, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "GITANJALI KALITA", guide: "DR. MANALEE PAUL" },
            { sl: 28, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "P SUCHITRA SINGHA", guide: "DR. UPASNA CHETTRY" },
            { sl: 29, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "DEEPRAJ KUNDU", guide: "DR. UPASHNA CHETTRI" },
            { sl: 30, session: "2024-25", school: "RSLSC", branch: "BOTANY", name: "BIJIT NATH", guide: "DR. ANUSHREE BARUAH" },
            { sl: 31, session: "2018-19", school: "RSET", branch: "CE", name: "KHAGEN CHANDRA NATH", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 32, session: "2019-20", school: "RSET", branch: "CE", name: "CHANDRA UPADHYAYA", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 33, session: "2019-20", school: "RSET", branch: "CE", name: "RANU GOWAL SARMAH", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 34, session: "2023-24", school: "RSET", branch: "CE", name: "ARJUN BARUAH", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 35, session: "2024-25", school: "RSET", branch: "CE", name: "Yudhajit Dey", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 36, session: "2024-25", school: "RSET", branch: "CE", name: "Arnold Dipak Das", guide: "PROF. (DR.) ARNAB SARMA" },
            { sl: 37, session: "2023-24", school: "RSAPS", branch: "CHEMISTRY", name: "NEEKITA DUTTA", guide: "DR. BISWAJIT SARMA" },
            { sl: 38, session: "2023-24", school: "RSAPS", branch: "CHEMISTRY", name: "TANZINA FIRDOUSHI BORBHUYAN", guide: "DR. DEBOJEET SAHU" },
            { sl: 39, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "RT STARTHRING", guide: "DR. ANUP MALAKAR" },
            { sl: 40, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "TONMOY DOLEY", guide: "DR. PUBALEE SARMAH" },
            { sl: 41, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "Joydeep Chakravorty", guide: "DR. BINOYARGHA DAM" },
            { sl: 42, session: "2024-25", school: "RSAPS", branch: "CHEMISTRY", name: "LAKHMINANDAN GOSWAMI", guide: "DR. PUBALEE SARMAH" },
            { sl: 43, session: "2021-22", school: "RSC", branch: "COMMERCE", name: "DIKSHYA SAIKIA", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 44, session: "2021-22", school: "RSC", branch: "COMMERCE", name: "VASUNDHARA JALAN", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 45, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "ADITI BARUAH", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 46, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SAISANGPUII SAILO", guide: "DR. ARUNA DEV ROY" },
            { sl: 47, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SAMARESH NANDY", guide: "DR. ARUNA DEV ROY" },
            { sl: 48, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "DARSHANA DEVI", guide: "DR. ARUNA DEV ROY" },
            { sl: 49, session: "2022-23", school: "RSC", branch: "COMMERCE", name: "SANSKRITA BARMAN", guide: "DR. ARUNA DEV ROY" },
            { sl: 50, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "MOHIT CHOUDHARY", guide: "DR. RAJDEEP NAG" },
            { sl: 51, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "DIPAK JAIN", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 52, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "DIPAK JAIN", guide: "DR. RAJDEEP NAG" },
            { sl: 53, session: "2023-24", school: "RSC", branch: "COMMERCE", name: "JIMPY SAUD", guide: "DR. ARUNA DEV ROY" },
            { sl: 54, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "MOIRANGTHEM JINA CHANU", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 55, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "ANANYA BANIK", guide: "DR. RAJDEEP NAG" },
            { sl: 56, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "BEENA RONGPIPI", guide: "DR. ARUNA DEV ROY" },
            { sl: 57, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "ANUPRIYA TALUKDAR", guide: "PROF. (DR.) SUDIP CHAKRABORTY" },
            { sl: 58, session: "2024-25", school: "RSC", branch: "COMMERCE", name: "UZMA SADAF", guide: "DR. RAJDEEP NAG" },
            { sl: 59, session: "2024-25", school: "RSET", branch: "CSE", name: "DHARITRI TALUKDAR", guide: "PROF. (DR.) RASHEL SARKAR" },
            { sl: 60, session: "2020-21", school: "RSHSS", branch: "ECONOMICS", name: "SHWETA SINGH", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 61, session: "2020-21", school: "RSHSS", branch: "ECONOMICS", name: "WAHIDA RAHMAN", guide: "PROF. (DR.) SWABERA ISLAM" },
            { sl: 62, session: "2021-22", school: "RSHSS", branch: "ECONOMICS", name: "SANGHAMITRA DUWARAH", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 63, session: "2021-22", school: "RSHSS", branch: "ECONOMICS", name: "ASHA YENGKHOM", guide: "PROF. (DR.) SWABERA ISLAM" },
            { sl: 64, session: "2022-23", school: "RSHSS", branch: "ECONOMICS", name: "TRISHA SAHA", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 65, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "AJANTA DAS", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 66, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "HIMANGGI BORAH", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 67, session: "2023-24", school: "RSHSS", branch: "ECONOMICS", name: "ALORIKA DEB", guide: "DR. DURBA DUTTA" },
            { sl: 68, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "CHANCHI R MARAK", guide: "DR. SANGHAMITRA HAZARIKA" },
            { sl: 69, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "DEEPSHIKHA KALITA", guide: "DR. SANGHAMITRA HAZARIKA" },
            { sl: 70, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "NABADEEPA KALITA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 71, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "MANABENDRA BARMAN", guide: "DR. DURBA DUTTA" },
            { sl: 72, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "SRIJANI HAZARIKA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 73, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "PREETY SHAH ZIYA", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 74, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "VANLALREMRUATI KHIANGTE", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 75, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "K LENANGH ANGH", guide: "DR. SANGHAMITRA HAZARIKA" },
            { sl: 76, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "ANURADHA DEVI", guide: "DR. DURBA DUTTA" },
            { sl: 77, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "SUPRIYA KONWAR", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 78, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "Nirupam Das", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 79, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "AKALI CHISHI", guide: "PROF. (DR.) GAUTAM MAZUMDAR" },
            { sl: 80, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "Mwikwm Narzary", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 81, session: "2024-25", school: "RSHSS", branch: "ECONOMICS", name: "RITUPARNA BORGOHAIN", guide: "DR. MD. DELUWAR HOQUE" },
            { sl: 82, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "KARENG RONGHANGPI", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 83, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "CHIBENI MERRY", guide: "DR. JASMINE CHOUDHURY" },
            { sl: 84, session: "2019-20", school: "RSL", branch: "ENGLISH", name: "BANANI DAS", guide: "PROF. (DR.) INDRANI SINGH RAI" },
            { sl: 85, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "FAHMIDA AKHTAR", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 86, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "GITIMA DEKA", guide: "PROF. (DR.) PRADIP JYOTI MAHANTA" },
            { sl: 87, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "IFTIKAR ALI AHMED", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 88, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "CHANDAM CHANU NGANTHOIHANBI", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 89, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "CHINMOYEE DEKA", guide: "DR. JASMINE CHOUDHURY" },
            { sl: 90, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "LAISHRAM PINKY", guide: "PROF. (DR.) INDRANI SINGH RAI" },
            { sl: 91, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "SERAM RAJESHWARAN SINGH", guide: "PROF. (DR.) PRADIP JYOTI MAHANTA" },
            { sl: 92, session: "2020-21", school: "RSL", branch: "ENGLISH", name: "HIMASHRI KUMAR", guide: "PROF. (DR.) KRISHNA BARUA" },
            { sl: 93, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "DIMPY BANIA", guide: "PROF. (DR.) KRISHNA BARUA" },
            { sl: 94, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "RASHMIREKHA BARMAN", guide: "PROF. (DR.) KRISHNA BARUA" },
            { sl: 95, session: "2021-22", school: "RSL", branch: "ENGLISH", name: "GOURISHIKHA BORGOHAIN", guide: "DR. STUTI GOSWAMI" },
            { sl: 96, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "MIRANDA NGANGOM", guide: "DR. PRONAMI BHATTACHARYYA" },
            { sl: 97, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "DEIFY BAKORDOR SUTING", guide: "DR. PRONAMI BHATTACHARYYA" },
            { sl: 98, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "HEMANTA BORA", guide: "PROF. (DR.) BORNALI BHUYAN" },
            { sl: 99, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "KASTURI BORGOHAIN", guide: "DR. STUTI GOSWAMI" },
            { sl: 100, session: "2022-23", school: "RSL", branch: "ENGLISH", name: "PAYEL DAS", guide: "DR. PRONAMI BHATTACHARYYA" },
            { sl: 101, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "JUBIN NAHAR", guide: "DR. PRONAMI BHATTACHARYYA" },
            { sl: 102, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "NIVEDITA DUTTA", guide: "DR. PAMPI BASUMATARY" },
            { sl: 103, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "SINJINI SAIKIA", guide: "DR. STUTI GOSWAMI" },
            { sl: 104, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "TAJUNGMENLA JAMIR", guide: "PROF. (DR.) BORNALI BHUYAN" },
            { sl: 105, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "TUHISHA GHOSH", guide: "DR. STUTI GOSWAMI" },
            { sl: 106, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "ABAMEDA GIRI KHARMALKI", guide: "DR. PRONAMI BHATTACHARYYA" },
            { sl: 107, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "ADITI GHOSH", guide: "DR. STUTI GOSWAMI" },
            { sl: 108, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "PUJA KUMARI", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 109, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "RUMA DEBNATH", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 110, session: "2023-24", school: "RSL", branch: "ENGLISH", name: "SATAVISHA HAZARIKA", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 111, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "NANCY PANGEIJAM", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 112, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "MAHFUZ AHMED", guide: "DR. JASMINE CHOUDHURY" },
            { sl: 113, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "RT SHANGWARHRING", guide: "DR. BAISHALEE RAJKHOWA" },
            { sl: 114, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "BHASKAR KOUSHIK DAS", guide: "DR. STUTI GOSWAMI" },
            { sl: 115, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "T.LALAWMPUII", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 116, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "C.LALNUNPUII", guide: "DR. JYOTI MISHRA" },
            { sl: 117, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "PRANITA KALITA", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 118, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "ARTIBIRTH CH MARAK", guide: "DR. PAMPI BASUMATARY" },
            { sl: 119, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "JENIFAR SABNAM", guide: "DR. JASMINE CHOUDHURY" },
            { sl: 120, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HIMTRINA RABHA", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 121, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HIMADRI BORAH", guide: "DR. PAMPI BASUMATARY" },
            { sl: 122, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "BHASWATI CHETIA", guide: "PROF. (DR.) INDRANI SINGH RAI" },
            { sl: 123, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "NIJWM BASUMATARY", guide: "PROF. (DR.) INDRANI SINGH RAI" },
            { sl: 124, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "PINAZ MIRZA", guide: "DR. PRABUDDHA GHOSH" },
            { sl: 125, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "HEMEN JYOTI DAS", guide: "DR. PRABUDDHA GHOSH" },
            { sl: 126, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "ANGELINA THANGJAM", guide: "DR. PAMPI BASUMATARY" },
            { sl: 127, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "DIVYAJYOTI DAS", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 128, session: "2024-25", school: "RSL", branch: "ENGLISH", name: "JIMLI DEKA", guide: "PROF. (DR.) TUSHTI SHARMA" },
            { sl: 129, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "ROBERT LYNDOH", guide: "DR. DEMSAI REANG" },
            { sl: 130, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "R LALRINNGHETI", guide: "DR. DEMSAI REANG" },
            { sl: 131, session: "2023-24", school: "RSEES", branch: "ENVIRONMENTAL SCIENCE", name: "NAPHIBANIARLIN KSFIAR", guide: "DR. PALLABI BORAH" },
            { sl: 132, session: "2019-20", school: "RSFA", branch: "FINE ARTS", name: "KISHAN BAGDI", guide: "DR. MOUSUMI DEKA" },
            { sl: 133, session: "2022-23", school: "RSFA", branch: "FINE ARTS", name: "GAURAV MORAL", guide: "DR. MOUSUMI DEKA" },
            { sl: 134, session: "2022-23", school: "RSFA", branch: "FINE ARTS", name: "LALREMRUATA VARTE", guide: "DR. MOUSUMI DEKA" },
            { sl: 135, session: "2023-24", school: "RSFA", branch: "FINE ARTS", name: "ANKUR HAZARIKA", guide: "DR. MOUSUMI DEKA" },
            { sl: 136, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "SYEDA JADIDA AKHTAR", guide: "DR. SHAGUFTA RIZWANA" },
            { sl: 137, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "DIPANJALI DAS", guide: "DR. PREETISAGAR TALUKDAR" },
            { sl: 138, session: "2024-25", school: "RSBSC", branch: "FOOD TECHNOLOGY", name: "RAHUL BORDOLOI", guide: "PROF. (DR.) PRANATI DAS" },
            { sl: 139, session: "2024-25", school: "RSLSC", branch: "FORESTRY", name: "SATYAMJIT NEOG", guide: "DR. DEMSAI REANG" },
            { sl: 140, session: "2024-25", school: "RSLSC", branch: "FORESTRY", name: "CHICHAKHA DEV BARMA", guide: "DR. PAUL LALREMSANG" },
            { "sl": 141, "session": "2021-22", "school": "RSEES", "branch": "GEOGRAPHY", "name": "HASNE TOUFIKI", "guide": "PROF.(DR.) B S MIPUN" },
            { "sl": 142, "session": "2022-23", "school": "RSEES", "branch": "GEOGRAPHY", "name": "DIPSHIKHA KALITA", "guide": "DR. ANNESHA BORAH" },
            { "sl": 143, "session": "2023-24", "school": "RSEES", "branch": "GEOGRAPHY", "name": "EILEEN BETSY MYLLIEMNGAP", "guide": "PROF.(DR.) B S MIPUN" },
            { "sl": 144, "session": "2023-24", "school": "RSEES", "branch": "GEOGRAPHY", "name": "SONIA SAMJETSABAM", "guide": "DR. TRISHNA CHANGKAKATI" },
            { "sl": 145, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "BIPLAB SARKAR", "guide": "PROF. (DR.) D.K. NAYAK" },
            { "sl": 146, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "GITALI. HAZARIKA", "guide": "DR. ANNESHA BORAH" },
            { "sl": 147, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "MRIDULA KALITA", "guide": "DR. ANNESHA BORAH" },
            { "sl": 148, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "KAKALI MEDHI", "guide": "PROF. (DR.) D.K. NAYAK" },
            { "sl": 149, "session": "2024-25", "school": "RSEES", "branch": "GEOGRAPHY", "name": "GANESH CHANDRA DAS", "guide": "PROF. (DR.) D.K. NAYAK" },
            { "sl": 150, "session": "2019-20", "school": "RSHSS", "branch": "HISTORY", "name": "JORDAN THAPA", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 151, "session": "2022-23", "school": "RSHSS", "branch": "HISTORY", "name": "POOJA BHATTACHARJEE", "guide": "PROF. (DR.) SAJAL NAG" },
            { "sl": 152, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "PHOWLTHA SELTUN", "guide": "PROF. (DR.) SAJAL NAG" },
            { "sl": 153, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "PUSPA DEORI", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 154, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "FREDDIE KHAWLHRING", "guide": "DR. MITALI KALITA" },
            { "sl": 155, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "TANZIM MASUD", "guide": "PROF. (DR.) SAJAL NAG" },
            { "sl": 156, "session": "2023-24", "school": "RSHSS", "branch": "HISTORY", "name": "RASHMIREKHA HAZARIKA", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 157, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "CHIDORA R MARAK", "guide": "DR. MITALI KALITA" },
            { "sl": 158, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "PHURAILATPAM AARTI DEVI", "guide": "DR. SAIKHOM RONEL SINGH" },
            { "sl": 159, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "AKANGSHA KALITA", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 160, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "ALEXANDER D SANGMA", "guide": "DR. SUSHMITA BANERJEE" },
            { "sl": 161, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "BANTI TALUKDAR", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 162, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "BIKASHITA SAIKIA", "guide": "DR. SUSMITA HAZARIKA" },
            { "sl": 163, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "HIMANGSHU SHEKHAR BORA", "guide": "DR. SAIKHOM RONEL SINGH" },
            { "sl": 164, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JUDITH LALNIVAR INTOVATE", "guide": "PROF. (DR.) SAJAL NAG" },
            { "sl": 165, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JURI DEKA", "guide": "DR. SAIKHOM RONEL SINGH" },
            { "sl": 166, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "ROTHANGLIANA", "guide": "PROF. (DR.) SAJAL NAG" },
            { "sl": 167, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "JINI RANI BORO", "guide": "DR. SUSHMITA BANERJEE" },
            { "sl": 168, "session": "2024-25", "school": "RSHSS", "branch": "HISTORY", "name": "NH HINGNAMYI BLESSING NEWME", "guide": "DR. SAIKHOM RONEL SINGH" },
            { "sl": 169, "session": "2020-21", "school": "RSIT", "branch": "I.T.", "name": "ASHOK KUMAR SARKAR", "guide": "DR. ANUPAM DAS" },
            { "sl": 170, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RASHMIREKHA BORAH", "guide": "DR. RISHI CHAKRAVARTY" },
            { "sl": 171, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "ANKITA SARMA", "guide": "PROF. (DR.) D.N. SINGH" },
            { "sl": 172, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RUMI TALUKDAR", "guide": "PROF. (DR.) GEORGE AP" },
            { "sl": 173, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "KANGKANA TALUKDAR", "guide": "DR. SYEDA ANJUM AFREEN" },
            { "sl": 174, "session": "2024-25", "school": "RSMAS", "branch": "PHYSIOTHERAPY", "name": "SOMYATA CHITARANJAN SATPATHY SARMA", "guide": "PROF. (DR.) ABHIJIT DUTTA" },
            { "sl": 175, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "MAYURI OJAH", "guide": "DR. MADHUSMITA KOCH" },
            { "sl": 176, "session": "2024-25", "school": "CISR", "branch": "INTERDISCIPLINARY", "name": "RUCHI BHARDWAJ", "guide": "DR. SHRADDHA BASU" },
            { "sl": 177, "session": "2018-19", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "PREETILATA KUMARI", "guide": "DR. HAOGINLEN. CHONGLOI" },
            { "sl": 178, "session": "2022-23", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "UPEN BORA", "guide": "DR. RASHMI SARMAH" },
            { "sl": 179, "session": "2023-24", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "BRISTI GOGOI", "guide": "PROF. (DR.) S. C. NAYAK" },
            { "sl": 180, "session": "2023-24", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "ZAKIR HUSSAIN", "guide": "PROF. (DR.) S. C. NAYAK" },
            { "sl": 181, "session": "2024-25", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "SAMUEL LALBELSANG", "guide": "PROF. (DR.) S. C. NAYAK" },
            { "sl": 182, "session": "2024-25", "school": "RSCOM", "branch": "JOURNALISM AND MASS COMMUNICATION", "name": "AMIT BARUAH", "guide": "DR. RASHMI SARMAH" },
            { "sl": 183, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BINU HAZARIKA KASHYAP", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 184, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RASHMI REKHA PHUKAN", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 185, "session": "2019-20", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MAILINDA LYNSHING", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 186, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ABIDA SULTANA LASKAR", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 187, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DILIP KUMAR BORA", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 188, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DR RATHINDRA BHUYAN", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 189, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRONAB KR NATH", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 190, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KRISHNA DAS", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 191, "session": "2021-22", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "POMPI DEKA", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 192, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BONNIE SARMA", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 193, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NARGIS CHOUDHURY", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 194, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHAHNAJ SULTANA", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 195, "session": "2022-23", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SONI TEP", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 196, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BEATIFY LUNGDOH", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 197, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISH KUMAR DAS", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 198, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BHASWATI BORAH", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 199, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ANUPAL DUTTA PATHAK", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 200, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BONANI MAHANTA", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 201, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JAYSHREE SHARMA", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 202, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NEHA VERMA", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 203, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BEAUTY NEOG", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 204, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BRANDON MESHAN PAJAT", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 205, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "LALSOLOMON DARNEI", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 206, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRITY GUPTA", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 207, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RAJASHRI HAZARIKA", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 208, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SATAVISA BORA", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 209, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHRUTI HAZARIKA BORPUJARI", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 210, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SRISTI AGARWAL", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 211, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "UPASHANA GOSWAMI", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 212, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BAMERI DONDOR KHARSOHTUN", "guide": "PROF. (DR.) H. C. NATH" },
            { "sl": 213, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BICKEY PRASAD", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 214, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JHARNA AKRAM", "guide": "DR. ANJUMAN A. BEGUM" },
            { "sl": 215, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NITA RIJIJU", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 216, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PANKHI DEVI", "guide": "PROF. (DR.) B. C. BAROOAH" },
            { "sl": 217, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "POOJA DEVI", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 218, "session": "2023-24", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BENZIR ZAMAN", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 219, "session": "2024-25", "school": "RSL", "branch": "LAW & ADMINISTRATION", "name": "ASIF ALI ANSARI", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 220, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KENEISENUO RUTSA", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 221, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DIANA TRICIA TLANG", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 222, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISHA DEKA", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 223, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NIMISHA SHARMA", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 224, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "ANISHA HAQUE", "guide": "PROF. (DR.) YSR MURTHY" },
            { "sl": 225, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BIRENDRA KUMAR BARMAN", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 226, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "NAPHISABET KHARKONGOR", "guide": "PROF. (DR.) THANESWAR KALITA" },
            { "sl": 227, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RANI CHYRMANG", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 228, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "OINAM MITRABATI DEVI", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 229, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "HIMANI RABHA", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 230, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "CARLOS NONGSIEJ", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 231, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "BIMAN NATH", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 232, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PRIYANGSHU GOSWAMI", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 233, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "DIPSHIKHA ROY CHOWDHURY", "guide": "PROF. (DR.) PREETI GUPTA" },
            { "sl": 234, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "JOYEETA RAJKHOWA", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 235, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SARMISTHA CHAKRABARTY", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 236, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "MANISHA BORTHAKUR", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 237, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "RASHMI REKHA SAIKIA", "guide": "DR. PRANITA CHAUDHURY" },
            { "sl": 238, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SHRISTI TODI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 239, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "PURBA GOSWAMI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 240, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "KANKANA CHOUDHURY", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 241, "session": "2024-25", "school": "RSLA", "branch": "LAW & ADMINISTRATION", "name": "SUMITRA DEVI", "guide": "PROF. (DR.) AJIT KAUSHAL" },
            { "sl": 242, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "KONGKINA NATH", "guide": "DR. MUKUTOR RAHMAN" },
            { "sl": 243, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "PRASANNA KUMAR KONCH", "guide": "DR. HIRAK JYOTI HAZARIKA" },
            { "sl": 244, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "MERINA AHMED", "guide": "DR. MUKUTOR RAHMAN" },
            { "sl": 245, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "BIKRAMADITYA BARMAN", "guide": "DR. MUKUTOR RAHMAN" },
            { "sl": 246, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "NIHARIKA SAIKIA", "guide": "DR. HIRAK JYOTI HAZARIKA" },
            { "sl": 247, "session": "2024-25", "school": "RSLISC", "branch": "LIBRARY SCIENCE", "name": "BHAGABATI NARZARY", "guide": "DR. MUKUTOR RAHMAN" },
            { "sl": 248, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "Basera K. Sangma", "guide": "DR. HIRAK JYOTI HAZARIKA" },
            { "sl": 249, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "MANJUSHREE DEVI", "guide": "DR. HIRAK JYOTI HAZARIKA" },
            { "sl": 250, "session": "2024-25", "school": "RSLIS", "branch": "LIBRARY SCIENCE", "name": "KISHUR NATH", "guide": "DR. NILANJANA PURKAYASTHA" },
            { "sl": 251, "session": "2017-18", "school": "RSB", "branch": "MANAGEMENT", "name": "ROSHINI SAIKIA", "guide": "PROF. (DR.) S.P. SINGH" },
            { "sl": 252, "session": "2019-20", "school": "RSB", "branch": "MANAGEMENT", "name": "MAHENDRA PRASAD", "guide": "PROF. (DR.) S.P. SINGH" },
            { "sl": 253, "session": "2019-20", "school": "RSB", "branch": "MANAGEMENT", "name": "KALYANI GOHAIN", "guide": "PROF. (DR.) S.P. SINGH" },
            { "sl": 254, "session": "2020-21", "school": "RSB", "branch": "MANAGEMENT", "name": "ASHIM KUMAR SARMAH", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 255, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "AISHWARYA GOSWAMI", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 256, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "DHRUBAJYOTI THAKURIA", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 257, "session": "2021-22", "school": "RSB", "branch": "MANAGEMENT", "name": "NEHA TIWARI", "guide": "PROF. (DR.) S.P. SINGH" },
            { "sl": 258, "session": "2022-23", "school": "RSB", "branch": "MANAGEMENT", "name": "MONALISA KONWAR", "guide": "PROF. (DR.) GEORGE AP" },
            { "sl": 259, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "NILIMOY NATH", "guide": "DR. DARSHANA BHAGOBATI" },
            { "sl": 260, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "SHARIF AHMED", "guide": "DR. DARSHANA BHAGOBATI" },
            { "sl": 261, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "INDIRA DEV ROY", "guide": "PROF. (DR.) GEORGE AP" },
            { "sl": 262, "session": "2023-24", "school": "RSB", "branch": "MANAGEMENT", "name": "BRISTY SRIVASTAVA", "guide": "PROF. (DR.) GEORGE AP" },
            { "sl": 263, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "SUSHMITA KONJENGBAM", "guide": "DR. RISHI CHAKRAVARTY" },
            { "sl": 264, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "RIMA DAS", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 265, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NAZVI NASEEM", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 266, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "UTTAM BORAH", "guide": "DR. ARPEE SAIKIA" },
            { "sl": 267, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "KUHELI DUTTA", "guide": "DR. SUMAN AGARWAL" },
            { "sl": 268, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "MITHINGA MUSHAHARY", "guide": "DR. SUMAN AGARWAL" },
            { "sl": 269, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NEELU SWAMI", "guide": "PROF. (DR.) D.N. SINGH" },
            { "sl": 270, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "NASREEN FIRDAUS CHOWDHURY", "guide": "PROF. (DR.) GEORGE AP" },
            { "sl": 271, "session": "2024-25", "school": "RSB", "branch": "MANAGEMENT", "name": "MOHINA AKHTARA", "guide": "DR. RISHI CHAKRAVARTY" },
            { "sl": 272, "session": "2020-21", "school": "RSAPS", "branch": "MATHEMATICS", "name": "SINAM RAJKISHORE SINGHA", "guide": "DR. BIMALENDU KALITA" },
            { "sl": 273, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "MARDOR WANRI SYNREM", "guide": "PROF. (DR.) KAMAL DEBNATH" },
            { "sl": 274, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "MUSTAK EUCHUF", "guide": "PROF. (DR.) ANURADHA DEVI" },
            { "sl": 275, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "PUNAM DAS", "guide": "PROF. (DR.) KAMAL DEBNATH" },
            { "sl": 276, "session": "2022-23", "school": "RSAPS", "branch": "MATHEMATICS", "name": "H IMO MANI SINGHA", "guide": "PROF. (DR.) ANURADHA DEVI" },
            { "sl": 277, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "FLORENCE DAIMARI", "guide": "DR. BIMALENDU KALITA" },
            { "sl": 278, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "KARISMITA MEDHI", "guide": "PROF. (DR.) KAMAL DEBNATH" },
            { "sl": 279, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "KHRUNIELU LOHE", "guide": "DR. BIMALENDU KALITA" },
            { "sl": 280, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "POMPI DAS", "guide": "PROF. (DR.) KAMAL DEBNATH" },
            { "sl": 281, "session": "2023-24", "school": "RSAPS", "branch": "MATHEMATICS", "name": "ANANYA SHILPI", "guide": "DR. BAPAN KALITA" },
            { "sl": 282, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "Nandita Saikia", "guide": "PROF. (DR.) KAMAL DEBNATH" },
            { "sl": 283, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "OINDRILA ROY CHOWDHURY", "guide": "DR. BAPAN KALITA" },
            { "sl": 284, "session": "2024-25", "school": "RSAPS", "branch": "MATHEMATICS", "name": "AKASH PAWAR", "guide": "DR. BAPAN KALITA" },
            { "sl": 285, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "ANUPAMA MOIRANGTHEM", "guide": "DR. BIRSON INGTI" },
            { "sl": 286, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "SYED HADI ABDUL ROUF", "guide": "DR. NIRAJ SINGH" },
            { "sl": 287, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "KOWSALYA", "guide": "DR. SUSHMITA PAUL" },
            { "sl": 288, "session": "2023-24", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "RAMKRISHNA ROY", "guide": "DR. BIRSON INGTI" },
            { "sl": 289, "session": "2024-25", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "NONGMAITHEM BISHWANATH SINGH", "guide": "PROF. (DR.) AMLAN DAS" },
            { "sl": 290, "session": "2024-25", "school": "RSBSC", "branch": "MICRO-BIOLOGY", "name": "AFRID AHMED", "guide": "DR. PANKAJ LOSAN SHARMA" },
            { "sl": 291, "session": "2023-24", "school": "RSMAS", "branch": "NUTRITION & DIETETICS", "name": "JEBIN SULTANA", "guide": "PROF. (DR.) PRANATI DAS" },
            { "sl": 292, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "GUJJALA SAI SRI HARSHA", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
            { "sl": 293, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "RUNA CHAKRAVORTY", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 294, "session": "2020-21", "school": "RSP", "branch": "PHARMACY", "name": "KAMAL DEKA", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 295, "session": "2021-22", "school": "RSP", "branch": "PHARMACY", "name": "ARUP CHAKRABORTY", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
            { "sl": 296, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "MUKINUR HUSSAIN", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
            { "sl": 297, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "HADIUZ ZAMAN", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 298, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "HIMANTA BISWA SAIKIA", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 299, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "PAYAL DASGUPTA", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 300, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "DR. SHAHINUR ISLAM", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 301, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "BHASKAR JYOTI PATHAK", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 302, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "MUZAMMAL HOQUE MALLAH", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 303, "session": "2022-23", "school": "RSP", "branch": "PHARMACY", "name": "NILUTPAL HAZARIKA", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 304, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "LOBSANG TENZING KOMU", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
            { "sl": 305, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "SADHANA SHARMA", "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY" },
            { "sl": 306, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "SUMI BARMAN", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 307, "session": "2023-24", "school": "RSP", "branch": "PHARMACY", "name": "PRIYANKA DAS", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 308, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "NEELAKSHI SHARMA", "guide": "PROF. (DR.) BIPUL NATH" },
            { "sl": 309, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "ARPAN SEN", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
            { "sl": 310, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "SABNAM NARGIS", "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY" },
            { "sl": 311, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "DR. RAKIBUR RAHMAN", "guide": "PROF. (DR.) PRANABESH SIKDAR" },
            { "sl": 312, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "Paramjyoti Adhikary", "guide": "PROF. (DR.) ATANU BHATTACHARJEE" },
            { "sl": 313, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "PALLAB KUMAR NATH", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
            { "sl": 314, "session": "2024-25", "school": "RSP", "branch": "PHARMACY", "name": "ARGHYA SAHA CHOWDHURY", "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY" },
            { "sl": 315, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "ARUP SAIKIA", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 316, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "BIDISH BORAH", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 317, "session": "2022-23", "school": "RSAPS", "branch": "PHYSICS", "name": "PARTHA PRATIM BORAH", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 318, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "AIDASHISHA BAREH", "guide": "DR. BORNALI CHETIA" },
            { "sl": 319, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "VIOLINA DAS", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 320, "session": "2023-24", "school": "RSAPS", "branch": "PHYSICS", "name": "LONGKHRAW KHONGLANG", "guide": "DR. SUJATA DEB" },
            { "sl": 321, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "SNARMON LATO", "guide": "DR. SUJATA DEB" },
            { "sl": 322, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "RAHUL DEY", "guide": "DR. SANCHITA ROY" },
            { "sl": 323, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "GOURANGA MEDHI", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 324, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "MANAS JYOTI NATH", "guide": "DR. DEVIKA PHUKAN" },
            { "sl": 325, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "USHA RANI SWARGIARY", "guide": "DR. GITANJAL DEKA" },
            { "sl": 326, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "MADHU RAM RABIDAS", "guide": "DR. BORNALI CHETIA" },
            { "sl": 327, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "TAPAS SEN", "guide": "DR. SANCHITA ROY" },
            { "sl": 328, "session": "2024-25", "school": "RSAPS", "branch": "PHYSICS", "name": "PRABHAT SHARMA", "guide": "DR. MAIDUL ISLAM" },
            { "sl": 329, "session": "2020-21", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SHELZA JALAN", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 330, "session": "2021-22", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "LIONG M PHOM", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 331, "session": "2021-22", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MUSTAFA SYED IHTIMUM ALAM", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 332, "session": "2022-23", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "NAGENDRA NATH GOGOI", "guide": "DR. Y MONOJIT SINGHA" },
            { "sl": 333, "session": "2022-23", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "TANJEELA MEHBOOB", "guide": "DR. Y MONOJIT SINGHA" },
            { "sl": 334, "session": "2023-24", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "PRAJOYEETA KASHYAP", "guide": "DR. Y MONOJIT SINGHA" },
            { "sl": 335, "session": "2023-24", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SUBHASH BARO", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 336, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MONISHA BORDOLOI", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 337, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SHANGKY KHONGWAR", "guide": "DR. Y MONOJIT SINGHA" },
            { "sl": 338, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ROZY RANI SARMAH", "guide": "DR. DHIRAJ KUMAR BORKOTOKY" },
            { "sl": 339, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "TH TREESHALI DEVI", "guide": "DR. BABA CHANDRA SINGHA" },
            { "sl": 340, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ELCHIRA R MARAK", "guide": "DR. BABA CHANDRA SINGHA" },
            { "sl": 341, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ANJUMA AHMED NARGIS", "guide": "DR. KRISHANGI SAIKIA" },
            { "sl": 342, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "KONJENGBAM SURAJ", "guide": "DR. BABA CHANDRA SINGHA" },
            { "sl": 343, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "BARNALI BHATTACHARYYA", "guide": "DR. KRISHANGI SAIKIA" },
            { "sl": 344, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "SWRJISHA BASUMATARY", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
            { "sl": 345, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "MAITRAYEE MALAKAR", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
            { "sl": 346, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "ABHINAV CHALIHA", "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM" },
            { "sl": 347, "session": "2024-25", "school": "RSHSS", "branch": "POLITICAL SCIENCE", "name": "BIRINA BARTHAKUR", "guide": "DR. KRISHANGI SAIKIA" },
            { "sl": 348, "session": "2020-21", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "AVI NUH", "guide": "DR. JWMWISHREE BORO" },
            { "sl": 349, "session": "2021-22", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "SHUBHI JAIN", "guide": "DR. MAHUYA DEB" },
            { "sl": 350, "session": "2022-23", "school": "RSBAS", "branch": "PSYCHOLOGY", "name": "ROSHNI NONGTHOMBAM", "guide": "DR. TAHERA HOQUE MOZUMDAR" },
            { sl: 351, session: "2022-23", school: "RSBAS", branch: "PSYCHOLOGY", name: "BINOY JOHN", guide: "DR. QUEEN DEKA" },
            { sl: 352, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "JAHNABI MAHANTA", guide: "DR. JWMWISHREE BORO" },
            { sl: 353, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "LOYA AGARWALA", guide: "DR. QUEEN DEKA" },
            { sl: 354, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "SUHANA SULTANA", guide: "DR. SYEDA ANJUM AFREEN" },
            { sl: 355, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "VAIBHAV PURANIK", guide: "DR. FARIZA SAIDIN" },
            { sl: 356, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "AYUKHSHYA BARO", guide: "DR. SHRADDHA BASU" },
            { sl: 357, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "MANISHA NATH", guide: "DR. SHRADDHA BASU" },
            { sl: 358, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "HUIDROM INDUMALA", guide: "DR. QUEEN DEKA" },
            { sl: 359, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "JULIE BORAH", guide: "DR. FARIZA SAIDIN" },
            { sl: 360, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "MEDIENO ZHASA", guide: "DR. PRINCE CP" },
            { sl: 361, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "ROMILA THOUDAM", guide: "DR. FARIZA SAIDIN" },
            { sl: 362, session: "2023-24", school: "RSBAS", branch: "PSYCHOLOGY", name: "SANGITA YAMBEM", guide: "DR. TAHERA HOQUE MOZUMDAR" },
            { sl: 363, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "ANWESHA CHUTIA", guide: "DR. PRINCE CP" },
            { sl: 364, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "NZANRHONI PATTON", guide: "DR. JWMWISHREE BORO" },
            { sl: 365, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "STEFFINA BEYTI", guide: "DR. PRINCE CP" },
            { sl: 366, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "ROHIT KUMAR DEKA", guide: "DR. MAHUYA DEB" },
            { sl: 367, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "SHUBHANGI BHAGAWATI", guide: "DR. FARIZA SAIDIN" },
            { sl: 368, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "RENGKA TIMUNGPI", guide: "DR. SYEDA ANJUM AFREEN" },
            { sl: 369, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "MANASHI NATH", guide: "DR. PRINCE CP" },
            { sl: 370, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "RUKMINI RAJMOHAN", guide: "DR. JWMWISHREE BORO" },
            { sl: 371, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "Vanthunglo Murry", guide: "DR. MAHUYA DEB" },
            { sl: 372, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "UDITA DAS", guide: "DR. TAHERA HOQUE MOZUMDAR" },
            { sl: 373, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY", name: "JERIN JOSE GEORGE", guide: "DR. PRINCE CP" },
            { sl: 374, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY/CLINICAL", name: "ANKUR BARMAN", guide: "DR. QUEEN DEKA" },
            { sl: 375, session: "2024-25", school: "RSBAS", branch: "PSYCHOLOGY/CLINICAL", name: "MAHIMA SINGHI", guide: "DR. PRINCE CP" },
            { sl: 376, session: "2021-22", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "TEMJENSOLA I", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 377, session: "2022-23", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "GRIKANCHIE M SANGMA", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 378, session: "2022-23", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "NIKITA BISWAKARMA", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 379, session: "2023-24", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "QUEENARITY NONGRUM", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 380, session: "2023-24", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "UNICE LALRINSIAMKIMI", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 381, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "NIHARIKA GOGOI", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 382, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "JOSEPHINE. H.M.", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 383, session: "2024-25", school: "RSHSS", branch: "PUBLIC ADMINISTRATION", name: "GITANJALI HAOBAM", guide: "PROF. (DR.) MEENU SHARMA" },
            { sl: 384, session: "2020-21", school: "RSHSS", branch: "SOCIAL WORK", name: "ELIZABETH MISAO", guide: "DR. PRIYANKA PATOWARI" },
            { sl: 385, session: "2023-24", school: "RSHSS", branch: "SOCIAL WORK", name: "ARCKPRAV DEWAN", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
            { sl: 386, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "PRAJUKTI PRIYADARSHINI", guide: "DR. MOSES NEWME" },
            { sl: 387, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BALITA SIANGSHAI", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
            { sl: 388, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "SYEDA SHAGUFTAH FARHEEN", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
            { sl: 389, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BAIBHAVI BHAVNA", guide: "DR. MADHU MANJARI GOHAIN" },
            { sl: 390, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "BIRINCHI BORAH", guide: "DR. PRIYANKA PATOWARI" },
            { sl: 391, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "KIANZANDI ODYUO", guide: "DR. MOSES NEWME" },
            { sl: 392, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "MOIRANGTHEM BIDYAMANI", guide: "DR. T LUITHUIWUNG AWUNGSHI" },
            { sl: 393, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "MOON MOON AHMED", guide: "DR. MADHU MANJARI GOHAIN" },
            { sl: 394, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "KRISTI SAIKIA", guide: "DR. PRIYANKA PATOWARI" },
            { sl: 395, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "NAOREM KELVISH SINGH", guide: "DR. PRIYANKA PATOWARI" },
            { sl: 396, session: "2024-25", school: "RSHSS", branch: "SOCIAL WORK", name: "ADIMA N ARENGH", guide: "DR. MOSES NEWME" },
            { sl: 397, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "DEBALINA DEBBARMA", guide: "DR. SANGEETA DAS" },
            { sl: 398, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "DEBIYA THONGAM", guide: "DR. SANGEETA DAS" },
            { sl: 399, session: "2022-23", school: "RSHSS", branch: "SOCIOLOGY", name: "KENEISELHOU CHIELIE", guide: "DR. TRIPTI DAS" },
            { sl: 400, session: "2024-25", school: "RSHSS", branch: "SOCIOLOGY", name: "APARAJITA GOON", guide: "DR. TRIPTI DAS" },
            { sl: 401, session: "2024-25", school: "RSHSS", branch: "SOCIOLOGY", name: "MAN KUMAR BARAILY", guide: "DR. SANGEETA DAS" },
            { sl: 402, session: "2019-20", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SANJOY RONGHANG", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 403, session: "2021-22", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "CHANDAN JYOTI BEZBORAH", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 404, session: "2021-22", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "PIYUSH GUPTA", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 405, session: "2022-23", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SPARSH TIWARI", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 406, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "ANKITA SAIKIA", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 407, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "MEGHA PHUKAN", guide: "PROF. (DR.) SOUMITRA SEN" },
            { sl: 408, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "SUPONGSANGLA LONGCHAR", guide: "DR. SYED SAJIDUL ISLAM" },
            { sl: 409, session: "2023-24", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "KARISHMA AZIZ", guide: "DR. SYED SAJIDUL ISLAM" },
            { sl: 410, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "NEEKITA DAOLAGUPU", guide: "DR. INDRAJIT DUTTA" },
            { sl: 411, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "GEOBAR B MARAK", guide: "DR. INDRAJIT DUTTA" },
            { sl: 412, session: "2024-25", school: "RSTTM", branch: "TRAVEL & TOURISM MANAGEMENT", name: "KUNTAL KALITA", guide: "DR. INDRAJIT DUTTA" },
            { sl: 413, session: "2020-21", school: "RSLSC", branch: "ZOOLOGY", name: "ABUJAM ROMIBALA DEVI", guide: "DR. SUSMITA DEY" },
            { sl: 414, session: "2022-23", school: "RSLSC", branch: "ZOOLOGY", name: "SOIBAM PRIYADARSHINI", guide: "DR. DHARMESWAR BARHOI" },
            { sl: 415, session: "2022-23", school: "RSLSC", branch: "ZOOLOGY", name: "SANJENBAM JOEL", guide: "DR. PARIMAL C RAY" },
            { sl: 416, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ANIRUDHA CHAKRABORTY", guide: "DR. PARIMAL C RAY" },
            { sl: 417, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "MAYOUSHREE GOGOI", guide: "DR. ABESH CHAKRABORTY" },
            { sl: 418, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "SANGEETA BISWAS", guide: "DR. PARIMAL C RAY" },
            { sl: 419, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ARPANA R RABHA", guide: "DR. DHARMESWAR BARHOI" },
            { sl: 420, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "DIPSANU PAUL", guide: "DR. DHARMESWAR BARHOI" },
            { sl: 421, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "SENT BUALGA M MARAK", guide: "DR. DHARMESWAR BARHOI" },
            { sl: 422, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "ACHINTYA PRAN HAZARIKA", guide: "DR. ARVIND DWIVEDI" },
            { sl: 423, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "BHITALI BARKAKATI", guide: "DR. ABESH CHAKRABORTY" },
            { sl: 424, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "KRISHNAA BORO", guide: "DR. ABESH CHAKRABORTY" },
            { sl: 425, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "MONISH KUMAR THAPA", guide: "DR. PARIMAL C RAY" },
            { sl: 426, session: "2023-24", school: "RSLSC", branch: "ZOOLOGY", name: "PRIYANKU BORAH", guide: "DR. ARVIND DWIVEDI" },
            { sl: 427, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "KUMAR KRITARTHA KAUSHIK", guide: "DR. ANNU KUMARI" },
            { sl: 428, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "SIKHA RABHA", guide: "DR. ANNU KUMARI" },
            { sl: 429, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "JOBASMITA SHARMA", guide: "DR. ANNU KUMARI" },
            { sl: 430, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "TINA CHETRY", guide: "DR. ANNU KUMARI" },
            { sl: 431, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "NILAKHI LAHAN", guide: "DR. ARVIND DWIVEDI" },
            { sl: 432, session: "2024-25", school: "RSLSC", branch: "ZOOLOGY", name: "CHANDA GWALA", guide: "DR. ABESH CHAKRABORTY" },
            { sl: 433, session: "2024-25", school: "RSLIS", branch: "ZOOLOGY", name: "ARUNDHUTI KASHYAP", guide: "DR. ARVIND DWIVEDI" }
            // Add the rest of the mobile data...
        ];

        const rowsPerPage = 20;
        let currentPage = 1;

        function displayTable(page) {
            const tbody = document.querySelector('#dataTableMobile tbody');
            tbody.innerHTML = "";

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = data.slice(start, end);

            for (const row of paginatedItems) {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td>${row.sl}</td><td>${row.session}</td><td>${row.school}</td><td>${row.branch}</td><td>${row.name}</td><td>${row.guide}</td>`;
                tbody.appendChild(tr);
            }

            setupPagination();
        }

        function setupPagination() {
            const pagination = document.getElementById('paginationmob');
            pagination.innerHTML = "";
            const pageCount = Math.ceil(data.length / rowsPerPage);

            for (let i = 1; i <= pageCount; i++) {
                const btn = document.createElement('button');
                btn.textContent = i;
                btn.className = (i === currentPage) ? 'active' : '';
                btn.onclick = function () {
                    currentPage = i;
                    displayTable(currentPage);
                };
                pagination.appendChild(btn);
            }
        }

        displayTable(currentPage);
    </script>
@endpush
