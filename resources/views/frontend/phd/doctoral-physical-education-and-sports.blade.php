@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

            <!-- till about dept  -->
            <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px; position: relative;">

                {{-- <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                </h1> --}}

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span> <br>
                    Physical Education and Sports (RSPES)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="home-banner/bpes.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The PhD in Physical Education and Sports Programme is designed to promote advanced research
                                and scholarly development in the field of physical education, sports science, and athletic
                                performance. The programme aims to equip scholars with in-depth knowledge of exercise
                                physiology, sports psychology, biomechanics, training methodology, and sports management.
                                Through systematic research and scientific investigation, scholars are encouraged to
                                contribute to the development of innovative practices that enhance physical fitness, sports
                                performance, and overall well-being. The programme also focuses on addressing contemporary
                                challenges in sports and physical education while promoting evidence-based approaches for
                                athlete development, health promotion, and sports participation at various levels of society
                            </p>

                        </div>
                    </div>
                </div>

            </section>
            <!-- till about dept  -->

        </div>

        <div class="website">

            <section>
                <!--Start Header-->
                @include('frontend/components/aheader')
                <!--End Header-->

                <section id="about">
                    <section style="background-color: #FFF8F0;">
                        <div class="p-5">
                            {{-- <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                            </h1> --}}

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span>
                                Physical Education and Sports (RSPES)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async" src="home-banner/bpes.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The PhD in Physical Education and Sports Programme is designed to promote advanced
                                        research and scholarly development in the field of physical education, sports
                                        science, and athletic performance. The programme aims to equip scholars with
                                        in-depth knowledge of exercise physiology, sports psychology, biomechanics, training
                                        methodology, and sports management. Through systematic research and scientific
                                        investigation, scholars are encouraged to contribute to the development of
                                        innovative practices that enhance physical fitness, sports performance, and overall
                                        well-being. The programme also focuses on addressing contemporary challenges in
                                        sports and physical education while promoting evidence-based approaches for athlete
                                        development, health promotion, and sports participation at various levels of society
                                    </p>

                                </div>

                            </div>
                        </div>

                    </section>
                </section>

            </section>

        </div>

        <div class="container">
            <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">A. Registration & Admission Fees</h3>

            <div class="table-responsive mb-3">
                <table class="table border table-responsive table-striped  vertical-scroll">

                    <thead class="text-light  para1" style="font-size: 14px;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold"></th>
                        <th class="text-light  font-weight-bold">AMOUNT (Rs)</th>
                    </thead>
                    <tbody class="para1">
                        <tr>
                            <td>A.</td>
                            <td>Prospectus & Form</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>B.</td>
                            <td>Registration</td>
                            <td>10000.00</td>
                        </tr>
                        <tr>
                            <td>C.</td>
                            <td>Caution Money (Common for all streams) - Refundable</td>
                            <td>10000.00</td>
                        </tr>
                        <tr>
                            <td>D.</td>
                            <td>Yearly Pay</td>
                            <td>125000.00</td>
                        </tr>
                        <tr>
                            <td>E.</td>
                            <td>Semester Pay</td>
                            <td>64500.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="https://admissions.rgu.ac/" class="text-white rounded fw-bold"
                style="background-color: #f39f21; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">Apply
                Now</a>
        </div>

        <div class="container">
            <p class="para1 text-dark pt-5" style="text-align: justify;">
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
                The structure of the Ph.D. programme includes a mandatory coursework and candidates are encouraged to take
                up
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Ph.D. Regulation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/Ph.%20D.%20regulations.pdf"
                                            class="fw-bold" style="font-size: 22px">Download Ph.D.
                                            Regulations<i style="padding-left: 20px; color: rgb(197, 8, 8);"
                                                class="fas fa-file-pdf"></i></a>
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
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/AY 2024-25 PhD Course Work Syllabus.pdf">Ph.D.
                                                Course Work Syllabus for the AY 2024-25</a></li>
                                    </ul>
                                    <strong class="text-primary">PAPER 1 & 2 -</strong>
                                    <ul>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Course Work Syllabus PAPER 1 & 2.pdf">Ph.D.
                                                Course Work Syllabus PAPER 1 & 2</a></li>
                                    </ul>
                                    <strong class="text-primary">PAPER 3 & 4 -</strong>
                                    <ul>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER 3 MANAGEMENT.docx">PAPER
                                                3 MANAGEMENT</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER 3 NUTRITION and DIETICS.docx">PAPER
                                                3 NUTRITION and DIETICS</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER 3 SYLLABUS SCIOLOGY.doc">PAPER
                                                3 SYLLABUS SCIOLOGY</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER 4 MANAGEMENT.docx">PAPER
                                                4 MANAGEMENT</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK COMMERCE.pdf">PAPER-3
                                                & 4 COURSE WORK COMMERCE</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PAPER-3 & 4 COURSE WORK PSYCHOLOGY.pdf">PAPER-3
                                                & 4 COURSE WORK PSYCHOLOGY</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS ENGLISH.docx">Ph.D
                                                COURSE WORK SYLLABUS ENGLISH</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/Ph.D COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION.docx">Ph.D
                                                COURSE WORK SYLLABUS OF PUBLIC ADMINISTARTION</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD COURSE WORK PAPER 3 RSFA.docx">Ph.D.
                                                COURSE WORK PAPER 3 RSFA</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/Phd COURSE WORK PAPER 4 RSFA.docx">Ph.D.
                                                COURSE WORK PAPER 4 RSFA</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD SYLLABUS PAPER 3 BIOTECHNOLOGY.docx">Ph.D.
                                                SYLLABUS PAPER 3 BIOTECHNOLOGY</a></li>
                                    </ul>
                                    <hr>
                                    <strong class="text-primary">2023-24 Ph.D. Syllabus PHYSICS-</strong>
                                    <ul>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/1. SYLLABUS_Nonlinear optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP.pdf">SYLLABUS_Nonlinear
                                                optics_ Pre-Ph.D. PHYSICS COURSE WORK_DP</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/2. SYLLABUS_Nanoscience and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD.pdf">SYLLABUS_Nanoscience
                                                and Nanotechnology_Pre-Ph.D. PHYSICS COURSE WORK_SD</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/3. SYLLABUS_Atmospheric and Space Sciences _Pre-Ph.D. PHYSICS COURSE WORK_BC.pdf">SYLLABUS_Atmospheric
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
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/1. Examination Form fill-up (Regular & Repeat) for PhD Coursework.pdf">Examination
                                                Form fill-up (Regular & Repeat) for Ph.D. Coursework</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/2. PhD Course Work Examination Timetable.pdf">Ph.D.
                                                Course Work Examination Timetable</a></li>
                                    </ul>
                                    <strong class="text-primary">Ph.D. Awareded Notification -</strong><br>
                                    <ul>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/Ph.D Notification_30-03-2024.pdf">Ph.D
                                                Notification_30-03-2024</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notifcation 01.07.2024.pdf">Ph.D.
                                                Notification 01.07.2024</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification (Neha Garg)[58701].pdf">Ph.D.
                                                Notification (Neha Garg)[58701]</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification (Rajdeep Nag)[58700].pdf">Ph.D.
                                                Notification (Rajdeep Nag)[58700]</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification 31.5.2024.pdf">Ph.D.
                                                Notification 31.5.2024</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification_19-10-2023.pdf">Ph.D.
                                                Notification_19-10-2023</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification_28-02-2024.pdf">Ph.D.
                                                Notification_28-02-2024</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification_30-11-2023.pdf">Ph.D.
                                                Notification_30-11-2023</a></li>
                                        <li><a
                                                href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/pdf/PhD Notification_31-08-2023.pdf">Ph.D.
                                                Notification_31-08-2023</a></li>

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
                                            <thead class="text-white para1" style="background-color: #27467A;">
                                                <tr>
                                                    <th>SL NO.</th>
                                                    <th>SESSION</th>
                                                    <th>SCHOOL</th>
                                                    <th>BRANCH</th>
                                                    <th>NAME</th>
                                                    <th>REGISTRATION NO.</th>
                                                    <th>GUIDE</th>
                                                    <th>CO-GUIDE</th>
                                                    <th>DATE</th>
                                                    <th>TOPIC OF RESEARCH</th>
                                                </tr>
                                            </thead>
                                            <tbody class="para1" style="text-align: left !important;">
                                                <tr>
                                                    <td>1</td>
                                                    <td>2017-18</td>
                                                    <td>RSC</td>
                                                    <td>COMMERCE</td>
                                                    <td>RAJDEEP NAG</td>
                                                    <td>1170717</td>
                                                    <td>DR. SUDIP CHAKRABORTY</td>
                                                    <td>PROF. N. B. DEY</td>
                                                    <td>31-07-2023</td>
                                                    <td>INVESTORS PERCEPTION TOWARDS MUTUAL FUNDS : AN EMPIRICAL STUDY IN
                                                        GWAHATI CITY OF ASSAM, INDIA.</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>2018-19</td>
                                                    <td>RSC</td>
                                                    <td>COMMERCE</td>
                                                    <td>NEHA GARG</td>
                                                    <td>1181173</td>
                                                    <td>DR. TANIMA TARAFDAR</td>
                                                    <td>DR. HARI PRASAD GOENKA</td>
                                                    <td>31-07-2023</td>
                                                    <td>POSITIONING OF BRICK AND MORTAR RETAILERS WITH REFERENCE TO
                                                        APPARELS: A STUDY OF SELECT RETAILERS IN KAMRUP (METRO).</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>2017-18</td>
                                                    <td>RSCOM</td>
                                                    <td>J&amp;MC</td>
                                                    <td>ANKITA AGARWAL</td>
                                                    <td>1170704</td>
                                                    <td>DR. N. ROHIN KANTA SINGH</td>
                                                    <td>DR. RUPARANI SONOWAL</td>
                                                    <td>31-08-2023</td>
                                                    <td>USAGE PATTERN OF WHATSAPP AMONG THE STUDENTS OF SELECTED
                                                        UNIVERSITIES OF ASSAM.</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>2018-19</td>
                                                    <td>RSCOM</td>
                                                    <td>J&amp;MC</td>
                                                    <td>FARHA YASHMIN ROHMAN</td>
                                                    <td>1181179</td>
                                                    <td>DR. N. ROHIN KANTA SINGH</td>
                                                    <td>DR. RUPARANI SONOWAL</td>
                                                    <td>31-08-2023</td>
                                                    <td>PORTRAYAL OF IDENTITY ON FACEBOOK WITH REFERENCE TO STUDENT LEADERS
                                                        IN ASSAM.</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>2018-19</td>
                                                    <td>RSC</td>
                                                    <td>COMMERCE</td>
                                                    <td>SWATI TEJAWAT</td>
                                                    <td>1181174</td>
                                                    <td>DR. SUDIP CHAKRABORTY</td>
                                                    <td>PROF. N. B. DEY</td>
                                                    <td>31-08-2023</td>
                                                    <td>CORPORATE GOVERNANCE PRACTICES UNDER THE COMPANIES ACT, 2013: A
                                                        STUDY ON SELECT BSE LISTED COMPANIES.</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>2018-19</td>
                                                    <td>RSET</td>
                                                    <td>COMPUTER SCIENCE ENGINEERING</td>
                                                    <td>MAYURI SHARMA</td>
                                                    <td>1170703</td>
                                                    <td>PROF. (DR.) ANKUR GANGULY</td>
                                                    <td>DR. ANIRUDDHA DEKA, DR. CHANDAN JYOTI KUMAR</td>
                                                    <td>16-10-2023</td>
                                                    <td>DESIGN AND DEVELOPMENT OF MACHINE LEARNING BASED FRAMEWORK FOR
                                                        DIAGNOSING DISEASE AND DEFICIENCY IN RICE PLANTS.</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-19</td>
                                                    <td>RSHSS</td>
                                                    <td>ECONOMICS</td>
                                                    <td>ALAKESH KALITA</td>
                                                    <td>1181181</td>
                                                    <td>PROF. (DR.) SWABERA ISLAM</td>
                                                    <td>PROF. (DR.) GAUTAM MAZUMDER</td>
                                                    <td>16-10-2023</td>
                                                    <td>MICROFINANCE AS THE DRIVER OF INCOME AND EMPLOYMENT: AN ANALYSIS OF
                                                        SOCIO ECONOMIC CONDITION IN UNDIVIDED BARPETA DISTRICT OF ASSAM.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>2018-19</td>
                                                    <td>RSHSS</td>
                                                    <td>ECONOMICS</td>
                                                    <td>DURBA DUTA</td>
                                                    <td>1170722</td>
                                                    <td>DR. MOHAMMED DELUWAR HOQUE</td>
                                                    <td>DR. RABIN JYOTI KHATANIAR</td>
                                                    <td>16-10-2023</td>
                                                    <td>AN ASSESSMENT OF URBAN POVERTY AND ITS DETERMINANTS: WITH SPECIAL
                                                        REFERENCE TO THE KAMRUP METRO.</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>2017-18</td>
                                                    <td>RSLA</td>
                                                    <td>LAW & ADMINISTRATION</td>
                                                    <td>MEGHNA BORA</td>
                                                    <td>1170709</td>
                                                    <td>PROF. (DR.) H. C. NATH</td>
                                                    <td>DR. ANUP HAZARIKA</td>
                                                    <td>30-11-2023</td>
                                                    <td>A STUDY ON INTERNATIONAL AND NATIONAL LEGAL FRAME WORK ON SURROGACY
                                                        AND ITS CONFORMITY WITH RULE OF LAW.</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>2019-20</td>
                                                    <td>RSLA</td>
                                                    <td>LAW & ADMINISTRATION</td>
                                                    <td>PARVEEN ISLAM</td>
                                                    <td>1181196</td>
                                                    <td>PROF. (DR.) H. C. NATH</td>
                                                    <td>DR. SMITA SARMAH</td>
                                                    <td>30-11-2023</td>
                                                    <td>RIGHT TO EDUCATION OF TRANSGENDER PERSONS IN INDIA WITH SPECIFIC
                                                        REFERENCE TO THE STATE OF ASSAM: A LEGAL ANALYSIS.</td>
                                                </tr>

                                                <tr>
                                                    <td>11</td>
                                                    <td>2020-21</td>
                                                    <td>RSBSC</td>
                                                    <td>BIO-TECHNOLOGY</td>
                                                    <td>INDUKALPA DAS</td>
                                                    <td>1191459</td>
                                                    <td>DR. DEBAJIT BORAH</td>
                                                    <td>DR. BIDISHA SHARMA</td>
                                                    <td>28-02-2024</td>
                                                    <td>BIOSURFACTANT MEDIATED GREEN SYNTHESIS OF METAL NANO PARTICLES FOR
                                                        ENHANCING SEED GERMINATION AND ANTIMICROBIAL APPLICATIONS.</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>2018-19</td>
                                                    <td>RSLA</td>
                                                    <td>LAW & ADMINISTRATION</td>
                                                    <td>SANDEEP MISHRA</td>
                                                    <td>1170720</td>
                                                    <td>PROF. (DR.) H. C. NATH</td>
                                                    <td>PROF. (DR.) NALINI KANTA DUTTA</td>
                                                    <td>28-02-2024</td>
                                                    <td>PARDONING POWER AND JUDICIAL REVIEW: A COMPARATIVE STUDY (WITH
                                                        SPECIAL REFERENCE TO THE CONSTITUTION OF INDIA).</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>2019-20</td>
                                                    <td>RSTTM</td>
                                                    <td>TRAVEL & TOURISM MANAGEMENT</td>
                                                    <td>INDRAJIT DUTTA</td>
                                                    <td>1190018</td>
                                                    <td>PROF. (DR.) SOUMITRA SEN</td>
                                                    <td>DR. DHARMA RAM DEKA</td>
                                                    <td>28-02-2024</td>
                                                    <td>A STUDY ON RURAL TOURISM IN RI-BHOI DISTRICT OF MEGHALAYA: PROSPECTS
                                                        AND CHALLENGES.</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>2019-20</td>
                                                    <td>RSET</td>
                                                    <td>CIVIL ENGINEERING</td>
                                                    <td>SUDIPTA CHAKRABORTY</td>
                                                    <td>1190004</td>
                                                    <td>PROF. (DR.) ARNAB SARMA</td>
                                                    <td>DR. A. R. KAMBEKAR</td>
                                                    <td>28-03-2024</td>
                                                    <td>SEA LEVEL RISE DUE TO CLIMATE CHANGE AND ITS IMPACT ALONG THE COAST
                                                        OF MUMBAI.</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>2019-20</td>
                                                    <td>RSBSC</td>
                                                    <td>BIO-TECHNOLOGY</td>
                                                    <td>VANSHIKA SHARMA</td>
                                                    <td>1181198</td>
                                                    <td>DR. RANJAN DUTTA KALITA</td>
                                                    <td>DR. AJANITA MAZUMDAR</td>
                                                    <td>31-05-2024</td>
                                                    <td>WOUND HEALING AND ANTIMICROBIAL PROPERTIES OF <i>KAEMPFERIA
                                                            GALANAGA</i> L. AND FORMULATION OF TOPICAL APPLICATIONS.</td>
                                                </tr>

                                                <tr>
                                                    <td>16</td>
                                                    <td>2018-19</td>
                                                    <td>RSAPS</td>
                                                    <td>MATHEMATICS</td>
                                                    <td>BIKASH KOLI SAHA</td>
                                                    <td>1181166</td>
                                                    <td>DR. KAMAL DEBNATH</td>
                                                    <td></td>
                                                    <td>31-05-2024</td>
                                                    <td>BEHAVIOURAL STUDY OF VISCO ELASTIC FLUID FLOW CHARACTERIZED BY
                                                        WALTERS LIQUID (MODEL B-).</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>2018-19</td>
                                                    <td>RSC</td>
                                                    <td>COMMERCE</td>
                                                    <td>KAMAL MOUR</td>
                                                    <td>1170716</td>
                                                    <td>DR. SUDIP CHAKRABORTY</td>
                                                    <td>PROF. N. B. DEY</td>
                                                    <td>28-06-2024</td>
                                                    <td>IMPACT OF INDIAN ACCOUNTING STANDARDS (IND AS) ON THE FINANCIAL
                                                        STATEMENTS OF SELECT INDIAN COMPANIES.</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>2019-20</td>
                                                    <td>RSFA</td>
                                                    <td>FINE ARTS</td>
                                                    <td>LAISHRAM SAMSON SINGH</td>
                                                    <td>1170663</td>
                                                    <td>DR. MOUSUMI DEKA</td>
                                                    <td>DR. DEBASISH CHAKRABORTY</td>
                                                    <td>28-06-2024</td>
                                                    <td>INDIAN ABSTRACT ART OF POST INDEPENDENCE ERA: A PHILOSOPHICAL
                                                        ANALYSIS.</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>2018-19</td>
                                                    <td>RSAPS</td>
                                                    <td>MATHEMATICS</td>
                                                    <td>SANKAR SINGHA</td>
                                                    <td>1181167</td>
                                                    <td>DR. KAMAL DEBNATH</td>
                                                    <td></td>
                                                    <td>28-06-2024</td>
                                                    <td>SOME ASPECTS OF FLUID FLOW PROBLEMS WITH EMPHASIS ON
                                                        VISCO-ELASTICITY.</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>2019-20</td>
                                                    <td>RSAPS</td>
                                                    <td>MATHEMATICS</td>
                                                    <td>MD NAZIR HUSSAIN</td>
                                                    <td>1191451</td>
                                                    <td>PROF. (DR.) ANURADHA DEVI</td>
                                                    <td>DR. NAVALAKHI HAZARIKA</td>
                                                    <td>28-06-2024</td>
                                                    <td>A STUDY OF DISTRIBUTIVE AND MULTIPLICATION N-GROUPS IN NEARRINGS AND
                                                        THEIR FUZZY ASPECTS.</td>
                                                </tr>

                                                <tr>
                                                    <td>21</td>
                                                    <td>2017-18</td>
                                                    <td>RSL</td>
                                                    <td>ENGLISH</td>
                                                    <td>NEIZOVO U</td>
                                                    <td>1170706</td>
                                                    <td>PROF. (DR.) PRADIP JYOTI MAHANTA</td>
                                                    <td></td>
                                                    <td>31-07-2024</td>
                                                    <td>FOLKSONGS OF THE ANGAMI NAGAS: TRANSMISSION AND PRESERVATION OF
                                                        CULTURE AND TRADITION</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>2018-19</td>
                                                    <td>RSLA</td>
                                                    <td>LAW & ADMINISTRATION</td>
                                                    <td>KASTURI SHARMA</td>
                                                    <td>1181180</td>
                                                    <td>PROF. (DR.) H. C. NATH</td>
                                                    <td>PROF. (DR.) NALINI KANTA DUTTA</td>
                                                    <td>31-07-2024</td>
                                                    <td>LEGAL ASPECTS OF EUTHANASIA AND RIGHT TO DIE WITH DIGNITY: A
                                                        COMPARATIVE STUDY</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>2019-20</td>
                                                    <td>RSL</td>
                                                    <td>ENGLISH</td>
                                                    <td>ASENLA YANGER</td>
                                                    <td>1190012</td>
                                                    <td>PROF. (DR.) KRISHNA BARUA</td>
                                                    <td>PROF. (DR.) RAKHEE KALITA MORAL</td>
                                                    <td>30-08-2024</td>
                                                    <td>MILIEU, MEMORY, MYSTICISM: A COMPARATIVE STUDY OF NATURALISM AND
                                                        DEEP ECOLOGY IN THE SELECTED NOVELS OF JOHN STEINBECK AND EASTERINE
                                                        KIRE</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>2019-20</td>
                                                    <td>RSAPS</td>
                                                    <td>MATHEMATICS</td>
                                                    <td>BALAJIED ME SYRTI</td>
                                                    <td>1190001</td>
                                                    <td>PROF. (DR.) ANURADHA DEVI</td>
                                                    <td>DR. ADITYA GHOSH</td>
                                                    <td>30-10-2024</td>
                                                    <td>MATHEMATICAL MODELLING AND INTEGRATED MANAGEMENT OF
                                                        ECO-EPIDEMIOLOGICAL SYSTEM UNDER THE APPLICATION OF PESTICIDES</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>2020-21</td>
                                                    <td>RSCOM</td>
                                                    <td>JOURNALISM & MASS COMMUNICATION</td>
                                                    <td>FLORENCE HANDIQUE RABHA</td>
                                                    <td>1200008</td>
                                                    <td>DR. RASHMI SARMAH</td>
                                                    <td>DR. RAHUL CHANDA</td>
                                                    <td>30-10-2024</td>
                                                    <td>INFLUENCE OF TALK SHOWS WITH CELEBRITIES OF HINDI CINEMA ON
                                                        UNIVERSITY STUDENTS IN ASSAM: A STUDY OF TWO HIGHLY POPULAR INDIAN
                                                        TALK SHOWS AMONG SELECTED POPULATION</td>
                                                </tr>

                                                <tr>
                                                    <td>26</td>
                                                    <td>2018-19</td>
                                                    <td>RSC</td>
                                                    <td>COMMERCE</td>
                                                    <td>KRITI AGARWAL</td>
                                                    <td>1181172</td>
                                                    <td>DR. ARUNA DEV RROY</td>
                                                    <td>PROF. (DR.) ANOOP PANDEY</td>
                                                    <td>05-11-2024</td>
                                                    <td>IMPACT OF CUSTOMER RELATIONSHIP MANAGEMENT PRACTICES ON CUSTOMER
                                                        SATISFACTION AND LOYALTY - A STUDY ON RETAIL CUSTOMERS OF SELECT
                                                        BANKS</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>2019-20</td>
                                                    <td>RSAPS</td>
                                                    <td>PHYSICS</td>
                                                    <td>PRANAMI SARMA</td>
                                                    <td>1190002</td>
                                                    <td>DR. DEVIKA PHUKAN</td>
                                                    <td>DR. ANURUP GOHAIN BARUA</td>
                                                    <td>20-11-2024</td>
                                                    <td>SIMULATIONS OF SOLITON TRANSMISSION IN OPTICAL FIBRE FOR LONG
                                                        DISTANCE OPTICAL COMMUNICATION</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>2020-21</td>
                                                    <td>RSCOM</td>
                                                    <td>JOURNALISM & MASS COMMUNICATION</td>
                                                    <td>ANINDITA DEY</td>
                                                    <td>1170666</td>
                                                    <td>DR. ESHA CHAKRABORTY</td>
                                                    <td>DR. RAHUL CHANDA</td>
                                                    <td>21-11-2024</td>
                                                    <td>THE EFFECTS OF FACEBOOK ON MARRIED COUPLES IN THE CONTEXT OF
                                                        RELATIONAL DIALECTICS WITH SPECIAL REFERENCE TO GUWAHATI, ASSAM</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>2019-20</td>
                                                    <td>RSEES</td>
                                                    <td>GEOGRAPHY</td>
                                                    <td>PARIMITA SAIKIA</td>
                                                    <td>1191460</td>
                                                    <td>PROF. (DR.) B.S.MIPUN</td>
                                                    <td>DR. SHUKLA ACHARJEE</td>
                                                    <td>22-11-2024</td>
                                                    <td>GEOSPATIAL APPROACH FOR GROUNDWATER RESOURCE AND PROSPECT ZONE
                                                        MAPPING OF KAMRUP METROPOLITAN DISTRICT, ASSAM</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>2017-18</td>
                                                    <td>RSCOM</td>
                                                    <td>JOURNALISM & MASS COMMUNICATION</td>
                                                    <td>ARNAB JAN DEKA</td>
                                                    <td>1170719</td>
                                                    <td>DR. RASHMI SARMAH</td>
                                                    <td>PROF. (DR.) NARENDRA NATH SHARMA</td>
                                                    <td>25-11-2024</td>
                                                    <td>THE HISTORICAL NARRATIVE OF INDIAN CINEMA: A STUDY OF THE PIONEERING
                                                        CINEMATIC INNOVATIONS OF HARISHCHANDRA SAKHARAM BHATAVADEKAR,
                                                        RAMCHANDRA GOPAL TORNEY AND JYOTIPRASAD AGARWALA</td>
                                                </tr>

                                                <tr>
                                                    <td>31</td>
                                                    <td>2020-21</td>
                                                    <td>RSAPS</td>
                                                    <td>PHYSICS</td>
                                                    <td>PRIYANKA TALUKDAR</td>
                                                    <td>1200002</td>
                                                    <td>DR. DEVIKA PHUKAN</td>
                                                    <td>PROF. (DR.) SUBRATA HAZARIKA</td>
                                                    <td>26-11-2024</td>
                                                    <td>STUDY OF THE VARIATION AND ANALYSIS OF OPTICAL PULSES IN OPTICAL
                                                        COMMUNICATION MEDIUM BY SIMULATION</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>2018-19</td>
                                                    <td>RSB</td>
                                                    <td>MANAGEMENT</td>
                                                    <td>SUDIP BANIK</td>
                                                    <td>1181170</td>
                                                    <td>PROF. (DR.) S.P. SINGH</td>
                                                    <td>DR. ASHUTOSH MURTI</td>
                                                    <td>26-11-2024</td>
                                                    <td>SOCIO-TECHNICAL SYSTEM: A STUDY OF TRIADIC ASPECT AMONG INDIVIDUAL,
                                                        TEAM AND LOCI</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>2019-20</td>
                                                    <td>RSB</td>
                                                    <td>MANAGEMENT</td>
                                                    <td>SANTOSH KUMAR ANAND</td>
                                                    <td>1190009</td>
                                                    <td>PROF. (DR.) S.P. SINGH</td>
                                                    <td>PROF. (DR.) VIVEKANAND PANDEY</td>
                                                    <td>26-11-2024</td>
                                                    <td>PUBLIC AND PRIVATE FUNDING OF HIGHER EDUCATION IN INDIA: A STUDY OF
                                                        ITS EFFECT ON QUALITY OF SELECT UNIVERSITIES IN ASSAM</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>2019-20</td>
                                                    <td>RSAPS</td>
                                                    <td>MATHEMATICS</td>
                                                    <td>RUHUL KUDDUS AHMED</td>
                                                    <td>1191453</td>
                                                    <td>PROF. (DR.) KAMAL DEBNATH</td>
                                                    <td>DR. NARAYAN NAYAK</td>
                                                    <td>28-02-2025</td>
                                                    <td>NON-NEWTON FLUID FLOWS OF SOME FRUIT AND VEGETABLE PRODUCTS IN FOOD
                                                        PROCESSING INDUSTRIES OBEYING POWER-LAW FLUID MODEL.</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>2020-21</td>
                                                    <td>RSP</td>
                                                    <td>PHARMACY</td>
                                                    <td>KUNAL BHATTACHARYA</td>
                                                    <td>1201546</td>
                                                    <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                                                    <td>PROF. (DR.) MANODIP CHAKRABORTY</td>
                                                    <td>28-03-2025</td>
                                                    <td>IN-SILICO MARKER COMPOUND(S) ANALYSIS AND EVALUATION OF PHYTOSOME
                                                        LOADED NOVEL DRUG DELIVERY SYSTEM OF PSIDIUM GUAJAVA (L) TARGETING
                                                        ALZHEIMER'S DISEASE.</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>2019-20</td>
                                                    <td>RSET</td>
                                                    <td>COMPUTER SCIENCE ENGINEERING</td>
                                                    <td>ANTARA MALAKAR</td>
                                                    <td>1191454</td>
                                                    <td>PROF. (DR.) ANKUR GANGULY</td>
                                                    <td>DR. SWARNENDU KUMAR</td>
                                                    <td>30-04-2025</td>
                                                    <td>DESIGN AND DEVELOPMENT OF DEEP LEARNING BASED MODEL FOR PREDICTION
                                                        OF EYE DISEASES IN NORTH EASTERN STATES OF INDIA</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>2020-21</td>
                                                    <td>RSP</td>
                                                    <td>PHARMACY</td>
                                                    <td>RAMEN KALITA</td>
                                                    <td>1201547</td>
                                                    <td>PROF. (DR.) BIPUL NATH</td>
                                                    <td>PROF. (DR.) DIPANKAR SAHA</td>
                                                    <td>30-04-2025</td>
                                                    <td>DEVELOPMENT AND EVALUATION OF POLYHERBAL FORMULATIONS BASED ON
                                                        POTENTIAL ETHNO MEDICINAL PLANTS OF NORTHEAST INDIA AS ANTI-DIABETIC
                                                        PHYTOTHERAPEUTICS</td>
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
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/1)-FORM-FOR-CONSENT-OF-PH.D.-GUIDE-&-PH.D.-STUDENT.pdf"
                                            target="_blank" style="font-family: 'Montserrat', sans-serif;"><i
                                                class="fa-solid fa-download"></i>
                                            Form for Consent of Ph.D. Guide & Ph.D. Student
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/2)-APPLICATION-FOR-SYNOPSIS-(PLAN-OF-RESEARCH)-PRESENTATION.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application For Synopsis (Plan Of Research) Presentation
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/3)-FORM-FOR-SYNOPSIS-(PLAN-OF-RESEARCH)-REPORT.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Synopsis (Plan Of Research)
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/4)-FORM-FOR-PH.D.-PROGRESS-REPORT.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Ph.D. Progress Report
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/5)-APPLICATION-FOR-PRE-SUBMISSION-SEMINAR.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application For Pre-Submission Seminar
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/6)-PH.D.-PRE-SUBMISSION-SEMINAR-FORM.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Ph.D. Pre-Submission Seminar Form
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/7)-PH.D.-ABSTRACT-SUBMISSION-FORM.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Ph.D. Abstract Submission Form
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/8)-PH.D.-THESIS-SUBMISSION-FORM.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Office Of The Controller Of Examination - Ph.D. Thesis Submission Form
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/9)-CHECKLIST-TO-BE-SUBMITTED-WITH-PH.D.-THESIS.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Checklist To Be Submitted With Ph.D. Thesis
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/10)-NO-DUES-CERTIFICATE-FOR-Ph.D.-THESIS-SUBMISSION.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            No Dues Certificate For Ph.D. Thesis Submission
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/11)-TOTAL-FEE-SUBMISSION-CERTIFICATE-FOR-PH.D.-THESIS-SUBMISSION.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Total Fee Submission Certificate For Ph.D. Thesis Submission
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/12)-FORM-FOR-SUBMITTING-THE-LIST-OF-PROPOSED-PH.D.-THESIS-EXAMINERS.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Form For Submitting The List Of Proposed Ph.D. Thesis Examiners
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/13)-REPORT-OF-ORAL-DEFENCE-EVALUATION-COMMITTEE.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Report Of Oral Defence Evaluation Committee
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/14)-APPLICATION-FORM-FOR-EXTENSION-OF-TIME-FOR-SUBMISSION-OF-PH.D.-THESIS.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application Form For Extension Of Time For Submission Of Ph.D. Thesis
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/15)-APPLICATION-FOR-CHANGE-OF-GUIDE_CO-GUIDE.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application For Change Of Guide/ Co-Guide
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/16)-APPLICATION-FORM-FOR-CHANGE-OF-CANDIDATURE.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application Form For Change Of Candidature
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/17)-APPLICATION-FORM-FOR-RE-REGISTRATION.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application Form For Re-Registration
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/18)-APPLICATION-FORM-FOR-RECOGNITION-AS-GUIDE_CO-GUIDE-FOR-PH.D.-PROGRAMME.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            Application Form For Recognition As Guide / Co-Guide For Ph.D. Programme
                                        </a></p>
                                    <p class="para1"><a
                                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/new-phd-pdf/19)-PH.D.-THESIS-TEMPLATE-RGU.pdf"
                                            target="_blank"><i class="fa-solid fa-download"></i>
                                            The Importance of Research in Academia Beyond Just a Degree
                                        </a></p>
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

                                                </tr>
                                            </thead>
                                            <tbody class="para1 text-dark">

                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. D. N. Singh</td>
                                                    <td>Registrar</td>
                                                    <td>Academic Head, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Prof. (Dr.) Sudip Chakraborty</td>
                                                    <td>Deputy Dean (i/c), Royal School of Commerce</td>
                                                    <td>Deputy Director, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Dr. Niraj Singh</td>
                                                    <td>Assistant Professor, Department of Microbiology, Royal School of
                                                        Biosciences</td>
                                                    <td>Coordinator, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                                    <td>Professor & Principal, Royal School of Pharmacy</td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Dr. Debajit Borah</td>
                                                    <td>Associate Professor and Head, Department of Biotechnology, Royal
                                                        School of
                                                        Biosciences
                                                    </td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Indrajit Dutta</td>
                                                    <td>Associate Professor and Head, Royal School of Travel and Tourism
                                                        Management</td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Rishi Chakravarty</td>
                                                    <td>Associate Professor, Royal School of Business</td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Dr. Hirak Jyoti Hazarika</td>
                                                    <td>Assistant Professor and Head, Royal School of Library Sciences</td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Dr. Pratikshya Borah</td>
                                                    <td>Assistant Professor, Department of Botany, Royal School of Life
                                                        Sciences</td>
                                                    <td>Member, Ph.D. Cell</td>

                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Mr. Ankur Sarkar</td>
                                                    <td>Senior Executive, Office of Ph.D. Cell</td>
                                                    <td>Non-teaching staff</td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    Ph.D. Awarded
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body mt-3 mb-3">
                                    <a href="/phd-awarded" class="rounded bg-danger text-white fw-bold"
                                        style="padding: 20px">Click to View</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
