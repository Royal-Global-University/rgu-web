@extends('frontend.master')
@section('title', 'Doctoral Programme : The Assam Royal Global University')
@section('meta_description', 'Explore the Doctoral Programme at Royal Global University, offering advanced research opportunities, expert faculty guidance, and a supportive academic environment to help you achieve your academic and professional goals.')
@section('meta_keywords', 'Doctoral Programme')
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
                                            <table class="table table-bordered border-top mb-3 shadow-sm text-wrap"
                                                style="text-align: left !important; background-color: #fff; font-size: 18px;">
                                                <thead class="text-white" style="background-color: #27467A;">
                                                    <tr>
                                                        <th scope="col">SL NO.</th>
                                                        <th scope="col">SESSION</th>
                                                        <th scope="col">SCHOOL</th>
                                                        <th scope="col">BRANCH</th>
                                                        <th scope="col">STUDENT NAME</th>
                                                        <th scope="col">REGISTRATION NO.</th>
                                                        <th scope="col">GUIDE</th>
                                                        <th scope="col">CO-GUIDE</th>
                                                        <th scope="col">TOPIC OF RESEARCH</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="mobile-para1 text-dark" style="font-size: 16px;">
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>2021-22</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Bishwapriya Chutia</td>
                                                        <td>1210011</td>
                                                        <td>Dr. Bhaskarjyoti Gogoi, assistant professor, biotechnology, RGU</td>
                                                        <td>Dr. Ajay Kumar Manhar, assistant professor, industrial microbiology,
                                                            Indira Gandhi Govt. PG College</td>
                                                        <td>Isolation and characterization of therapeutic assessment of
                                                            potential probiotic strains from traditionally used fermented foods
                                                            of North East India</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>2021-22</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Debaleena Kashyap</td>
                                                        <td>1210012</td>
                                                        <td>Dr. Bhaskarjyoti Gogoi, assistant professor, biotechnology, RGU</td>
                                                        <td>Dr. Ajanita Mazumdar, assistant professor, molecular biology and
                                                            biotechnology, Cotton University</td>
                                                        <td>Synthesis and characterization of a few metal nanoparticles and
                                                            assessment of their antimicrobial property against bacterial
                                                            pathogen</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>2021-22</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Sahiba Khan</td>
                                                        <td>1210013</td>
                                                        <td>Dr. Debajit Borah, associate professor, biotechnology, RGU</td>
                                                        <td>Dr. Debasish Borbora, assistant professor, biotechnology, Gauhati
                                                            University</td>
                                                        <td>Isolation and characterization of azo-dye degrading indigenous soil
                                                            microbes and exploring its bioremediation potential</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>2022-23</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Saahana Syed Juhi</td>
                                                        <td>1222259</td>
                                                        <td>Dr. Ranjan Dutta Kalita, associate professor, biotechnology, RGU
                                                        </td>
                                                        <td>Dr. Sushmita Paul, assistant professor, microbiology, RGU</td>
                                                        <td>Comparative evaluation of the endophytic fungi diversity in Costus
                                                            speciosus and C. pictus, two traditional medicinal plant species of
                                                            Assam and assessment of their therapeutic potential</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>2023-24</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Ixora Waikhom</td>
                                                        <td>A/F</td>
                                                        <td>Dr. Siddhartha Narayan Borah, assistant professor, bio-technology,
                                                            RGU</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>2023-24</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Anmol Kaur</td>
                                                        <td>A/F</td>
                                                        <td>Dr. Rupsikha Patowary, assistant professor, bio-technology, RGU</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td>2023-24</td>
                                                        <td>Rsbsc</td>
                                                        <td>Bio-technology</td>
                                                        <td>Panchami Borpujari</td>
                                                        <td>A/F</td>
                                                        <td>Dr. Debajit Borah, associate professor, biotechnology, RGU</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td>2019-20</td>
                                                        <td>RsLSC</td>
                                                        <td>Botany</td>
                                                        <td>Namita Deka</td>
                                                        <td>1190017</td>
                                                        <td>Dr. S. R. Patgiri, professor, botany, RGU</td>
                                                        <td>Dr. Bidisha Sharma, botany, Cotton University</td>
                                                        <td>Studies on some important endophytic microflora of Cissus
                                                            quadrangularis Linn in some districts of Assam</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td>2020-21</td>
                                                        <td>RsLSC</td>
                                                        <td>Botany</td>
                                                        <td>Jasmin Sultana</td>
                                                        <td>1200013</td>
                                                        <td>Dr. Anushree Borah, assistant professor, botany, RGU</td>
                                                        <td>Dr. Nirmali Bordoloi</td>
                                                        <td>To evaluate the impact of BNI's in rice agro-ecosystem of Assam</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">10</th>
                                                        <td>2020-21</td>
                                                        <td>RsLSC</td>
                                                        <td>Botany</td>
                                                        <td>Ringphamchung Khatru Moyon</td>
                                                        <td>1210014</td>
                                                        <td>Dr. Minaram Nath, professor, botany, RGU</td>
                                                        <td>Prof. Dr. Potsangbam Kumar Singh, Manipur University, Canchipur,
                                                            Imphal, Manipur</td>
                                                        <td>Ethnobotanical studies of the Moyon Naga tribe in Manipur, North
                                                            East India</td>
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

                                        <!-- First Row of Cards -->
                                        <div class="row p-2">

                                            <div class="col-lg-3 pb-4">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr.-Sudip-Chakraborty.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Sudip Chakraborty, Associate Professor, Deputy Dean(I/c),
                                                                RSC
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Deputy Director,
                                                            Ph.D. Cell
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pb-4">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr.-Niraj-Singh.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Niraj Singh,<br> Assistant Professor & Coordinator,
                                                                Microbiology, RSBSC
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Coordinator,
                                                            Ph.D. Cell
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pb-4">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr.-Debajit-Borah.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Debajit Borah,<br> Associate Professor, Biotechnology, RSBSC
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Member</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Second Row of Cards -->
                                        <div class="row p-2 pt-1">

                                            <div class="col-lg-3 pb-3">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr.-Sanchita-Roy.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Sanchita Roy,<br> Assistant Professor, Physics, RSAPS
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Member</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pb-3">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr-Fariza-Saidin.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Fariza Saidin,<br> Assistant Professor, RSBAS
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Member
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pb-3">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Dr-Durba-Dutta.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Dr. Durba Dutta,<br> Assistant Professor & Coordinator,
                                                                Economics, RSHSS
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Member
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pb-3">
                                                <div class="card" style="
                                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                                      0px 5px 4px rgba(3, 7, 18, 0.06),
                                      0px 12px 9px rgba(3, 7, 18, 0.05),
                                      0px 21px 15px rgba(3, 7, 18, 0.03),
                                      0px 33px 24px rgba(3, 7, 18, 0.02);
                                  ">
                                                    <a>
                                                        <img src="mobile-assets/doctoral-programmee/Mr.-Ankur-Sarkar.webp"
                                                            class="card-img-top p-2" style="border-radius: 10px"
                                                            alt="Card Image" />
                                                        <div class="card-body" style="min-height: 140px;">
                                                            <h5 class="card-title mobile-para1 text-dark"
                                                                style="text-align: left !important;">
                                                                Mr. Ankur Sarkar,<br> Admin Staff
                                                            </h5>
                                                            <p class="text-dark mobile-para1">
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div style="
                                      background-color: #e2edff;
                                      padding: 10px;
                                      border-radius: 10px;
                                    ">
                                                        <div class="mobile-para1 fw-bold text-center text-dark">Senior
                                                            Executive, Ph.D. Cell.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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
                                    <table style="text-align: left !important; background-color: #fff; font-size: 18px;" class="overflow-hidden table text-wrap table-bordered border-top mb-3 shadow-sm">
                                        <thead class="text-white" style="background-color: #27467A;">
                                            <tr>
                                                <th scope="col">SL NO.</th>
                                                <th scope="col">SESSION</th>
                                                <th scope="col">SCHOOL</th>
                                                <th scope="col">BRANCH</th>
                                                <th scope="col">STUDENT NAME</th>
                                                <th scope="col">REGISTRATION NO.</th>
                                                <th scope="col">GUIDE</th>
                                                <th scope="col">CO-GUIDE</th>
                                                <th scope="col">TOPIC OF RESEARCH</th>
                                            </tr>
                                        </thead>
                                        <tbody class="para1 text-dark" style="font-size: 16px;">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>2021-22</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Bishwapriya Chutia</td>
                                                <td>1210011</td>
                                                <td>Dr. Bhaskarjyoti Gogoi, assistant professor, biotechnology, RGU</td>
                                                <td>Dr. Ajay Kumar Manhar, assistant professor, industrial microbiology, Indira Gandhi Govt. PG College</td>
                                                <td>Isolation and characterization of therapeutic assessment of potential probiotic strains from traditionally used fermented foods of North East India</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>2021-22</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Debaleena Kashyap</td>
                                                <td>1210012</td>
                                                <td>Dr. Bhaskarjyoti Gogoi, assistant professor, biotechnology, RGU</td>
                                                <td>Dr. Ajanita Mazumdar, assistant professor, molecular biology and biotechnology, Cotton University</td>
                                                <td>Synthesis and characterization of a few metal nanoparticles and assessment of their antimicrobial property against bacterial pathogen</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>2021-22</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Sahiba Khan</td>
                                                <td>1210013</td>
                                                <td>Dr. Debajit Borah, associate professor, biotechnology, RGU</td>
                                                <td>Dr. Debasish Borbora, assistant professor, biotechnology, Gauhati University</td>
                                                <td>Isolation and characterization of azo-dye degrading indigenous soil microbes and exploring its bioremediation potential</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>2022-23</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Saahana Syed Juhi</td>
                                                <td>1222259</td>
                                                <td>Dr. Ranjan Dutta Kalita, associate professor, biotechnology, RGU</td>
                                                <td>Dr. Sushmita Paul, assistant professor, microbiology, RGU</td>
                                                <td>Comparative evaluation of the endophytic fungi diversity in Costus speciosus and C. pictus, two traditional medicinal plant species of Assam and assessment of their therapeutic potential</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>2023-24</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Ixora Waikhom</td>
                                                <td>A/F</td>
                                                <td>Dr. Siddhartha Narayan Borah, assistant professor, bio-technology, RGU</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>2023-24</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Anmol Kaur</td>
                                                <td>A/F</td>
                                                <td>Dr. Rupsikha Patowary, assistant professor, bio-technology, RGU</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>2023-24</td>
                                                <td>Rsbsc</td>
                                                <td>Bio-technology</td>
                                                <td>Panchami Borpujari</td>
                                                <td>A/F</td>
                                                <td>Dr. Debajit Borah, associate professor, biotechnology, RGU</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>2019-20</td>
                                                <td>RsLSC</td>
                                                <td>Botany</td>
                                                <td>Namita Deka</td>
                                                <td>1190017</td>
                                                <td>Dr. S. R. Patgiri, professor, botany, RGU</td>
                                                <td>Dr. Bidisha Sharma, botany, Cotton University</td>
                                                <td>Studies on some important endophytic microflora of Cissus quadrangularis Linn in some districts of Assam</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>2020-21</td>
                                                <td>RsLSC</td>
                                                <td>Botany</td>
                                                <td>Jasmin Sultana</td>
                                                <td>1200013</td>
                                                <td>Dr. Anushree Borah, assistant professor, botany, RGU</td>
                                                <td>Dr. Nirmali Bordoloi</td>
                                                <td>To evaluate the impact of BNI's in rice agro-ecosystem of Assam</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>2020-21</td>
                                                <td>RsLSC</td>
                                                <td>Botany</td>
                                                <td>Ringphamchung Khatru Moyon</td>
                                                <td>1210014</td>
                                                <td>Dr. Minaram Nath, professor, botany, RGU</td>
                                                <td>Prof. Dr. Potsangbam Kumar Singh, Manipur University, Canchipur, Imphal, Manipur</td>
                                                <td>Ethnobotanical studies of the Moyon Naga tribe in Manipur, North East India</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

                                    <!-- First Row of Cards -->
                                    <div class="row p-5">

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a >
                                                    <img src="mobile-assets/doctoral-programmee/ankur-ganguly.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Prof. (Dr.) Ankur Ganguly,<br> Dean Academics
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Head, Ph.D. Cell</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Dr.-Sudip-Chakraborty.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Sudip Chakraborty, Associate Professor, Deputy Dean(I/c), RSC
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Deputy Director, Ph.D. Cell
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Dr.-Niraj-Singh.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Niraj Singh,<br> Assistant Professor & Coordinator, Microbiology, RSBSC
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Coordinator, Ph.D. Cell
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Dr.-Debajit-Borah.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Debajit Borah,<br> Associate Professor, Biotechnology, RSBSC
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Second Row of Cards -->
                                    <div class="row p-5 pt-1">

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a >
                                                    <img src="mobile-assets/doctoral-programmee/Dr.-Sanchita-Roy.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Sanchita Roy,<br> Assistant Professor, Physics, RSAPS
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Dr-Fariza-Saidin.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Fariza Saidin,<br> Assistant Professor, RSBAS
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Member
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Dr-Durba-Dutta.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Dr. Durba Dutta,<br> Assistant Professor & Coordinator, Economics, RSHSS
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Member
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card" style="
                    box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08),
                      0px 5px 4px rgba(3, 7, 18, 0.06),
                      0px 12px 9px rgba(3, 7, 18, 0.05),
                      0px 21px 15px rgba(3, 7, 18, 0.03),
                      0px 33px 24px rgba(3, 7, 18, 0.02);
                  ">
                                                <a>
                                                    <img src="mobile-assets/doctoral-programmee/Mr.-Ankur-Sarkar.webp" class="card-img-top p-2" style="border-radius: 10px" alt="Card Image" />
                                                    <div class="card-body" style="min-height: 140px;">
                                                        <h5 class="card-title para1 text-dark" style="text-align: left !important;">
                                                            Mr. Ankur Sarkar,<br> Admin Staff
                                                        </h5>
                                                        <p class="text-dark para1">
                                                        </p>
                                                    </div>
                                                </a>
                                                <div style="
                      background-color: #e2edff;
                      padding: 10px;
                      border-radius: 10px;
                    ">
                                                    <div class="para1 fw-bold text-center text-dark">Senior Executive, Ph.D. Cell.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
