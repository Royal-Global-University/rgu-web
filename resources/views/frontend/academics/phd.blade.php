@extends('frontend.master')
@section('title', 'RGU PhD Admission 2025: Eligibility, Fees, & 20+ Research Subjects')
@section('meta_description',
    'RGU PhD Admissions Open for 2025! Check eligibility (55% minimum), detailed course work,
    and 20+ subject specializations (Law, English, Management, etc.). Apply Today!')
@section('meta_keywords', 'Doctoral Programme')

@push('styles')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            text-align: center;
        }

        th,
        td {
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
        {{-- <div>
            <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/phd.pdf" target="_blank" style="
            position: fixed;
            bottom: 25px;
            background-color: #ef991f;
            color: #fff;
            padding: 12px 10px;
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
            width: 70%;
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
        </div> --}}
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
                                    <img class="rounded" decoding="async"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                As an emerging hub of education of the country, the spirit of inter-and multi-disciplinarity
                                permeates every aspect of academics at RGU. The doctoral programme at RGU seeks to develop
                                the
                                next generation of academics who can approach issues from multiple perspectives, glean
                                unique
                                insights, and provide effective solutions to pressing problems of academic and practical
                                interest. RGU Ph.D. Programme carries a strong emphasis on foundational knowledge, academic
                                research, and hands-on experiences with real-world challenges. RGU envisions a future where
                                researchers combine curiosity based intellectual pursuits with a strong commitment to
                                solving
                                complex problems with societal impact. However, the university is an ecosystem that creates
                                opportunities for students based on their interests.
                            </p>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

            <div class="scroll-top">
                <div class="scroll-top-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                        data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!-- floating button  -->
            {{-- <div>
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
            </div> --}}
            <!-- floating button  -->

            <!--head image Section-->
            <section
                style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/background/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700">
                                Doctoral <span style="color: #FF9A1E; font-weight: 500;">Programme</span> </h2>

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
    </div>

    <div>

        <style>
            .phd-curriculum {
                padding: 40px 0;
                background: #ffffff;
            }

            .phd-container {
                max-width: 1200px;
                margin: auto;
                padding: 0 20px;
                font-family: Arial, sans-serif;
            }

            .phd-title {
                font-size: 32px;
                font-weight: 700;
                color: #1d3557;
                margin-bottom: 30px;
            }

            .phd-category {
                margin-bottom: 25px;
            }

            .phd-category h3 {
                font-size: 22px;
                color: #27467a;
                font-weight: 700;
                margin-bottom: 12px;
            }

            /* BUTTON WRAP */
            .phd-links {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            /* OUTLINE BUTTON */
            .phd-links a {
                display: inline-block;
                padding: 6px 14px;
                border: 1px solid #27467a;
                border-radius: 20px;
                font-size: 18px;
                color: #27467a;
                text-decoration: none;
                transition: all 0.3s ease;
                background: transparent;
            }

            /* HOVER EFFECT (ORANGE) */
            .phd-links a:hover {
                background: #f97316;
                /* orange */
                border-color: #f97316;
                color: #fff;
            }

            /* RESPONSIVE */
            @media (max-width: 768px) {
                .phd-links {
                    gap: 8px;
                }

                .phd-links a {
                    font-size: 13px;
                    padding: 5px 12px;
                }
            }
        </style>


        <section class="phd-curriculum">
            <div class="phd-container">

                <h2 class="phd-title">Ph.D. Curriculum</h2>

                <!-- Business -->
                <div class="phd-category">
                    <h3>Business & Management</h3>
                    <div class="phd-links">
                        <a href="https://rgu.ac/doctoral-management">Business Administration/ Management</a>
                        <a href="https://rgu.ac/doctoral-commerce">Commerce</a>
                        <a href="https://rgu.ac/doctoral-hotel-management">Hotel Management</a>
                        <a href="https://rgu.ac/doctoral-tourism-travel">Travel & Tourism Management</a>
                    </div>
                </div>

                <!-- Science -->
                <div class="phd-category">
                    <h3>Science, Engineering & Technology</h3>
                    <div class="phd-links">
                        <a href="/doctoral-agriculture">Agriculture</a>
                        <a href="/doctoral-com-sc-engg">Artificial Intelligence</a>
                        <a href="/doctoral-biotechnology">Biotechnology</a>
                        <a href="/doctoral-botany">Botany</a>
                        <a href="/doctoral-chemistry">Chemistry</a>
                        <a href="/doctoral-civil-engineering">Civil Engineering</a>
                        <a href="/doctoral-com-sc-engg">Computer Science & Engineering</a>
                        <a href="/doctoral-com-sc-engg">Computer Application</a>
                        <a href="/doctoral-food-technology">Food Science & Technology</a>
                        <a href="/doctoral-forestry">Forestry</a>
                        <a href="/doctoral-forensic-science">Forensic Science</a>
                        <a href="/doctoral-com-sc-engg">Information Technology</a>
                        <a href="/doctoral-mathematics">Mathematics</a>
                        <a href="/doctoral-mechanical-engineering">Mechanical Engineering</a>
                        <a href="/doctoral-microbiology">Microbiology</a>
                        <a href="/doctoral-physics">Physics</a>
                        <a href="/doctoral-zoology">Zoology</a>
                    </div>
                </div>

                <!-- Earth -->
                <div class="phd-category">
                    <h3>Earth Science</h3>
                    <div class="phd-links">
                        <a href="/doctoral-geography">Geography</a>
                        <a href="/doctoral-geoinformatics">Geoinformatics</a>
                        <a href="/doctoral-geology">Geology</a>
                    </div>
                </div>

                <!-- Languages -->
                <div class="phd-category">
                    <h3>Languages</h3>
                    <div class="phd-links">
                        <a href="#">Assamese</a>
                        <a href="/doctoral-english">English</a>
                    </div>
                </div>

                <!-- Humanities -->
                <div class="phd-category">
                    <h3>Law, Humanities & Social Sciences</h3>
                    <div class="phd-links">
                        <a href="/doctoral-economics">Economics</a>
                        <a href="/doctoral-history">History</a>
                        <a href="/doctoral-indian-knowledge-sys">Indian Knowledge System</a>
                        <a href="/doctoral-mass-comm-journalism">Journalism and Mass Communication</a>
                        <a href="/doctoral-law">Law</a>
                        <a href="/doctoral-library-science">Library Science</a>
                        <a href="/doctoral-political-science">Political Science</a>
                        <a href="/doctoral-psychology">Psychology</a>
                        <a href="/doctoral-public-admin">Public Administration</a>
                        <a href="/doctoral-social-work">Social Work</a>
                        <a href="/doctoral-sociology">Sociology</a>
                    </div>
                </div>

                <!-- Design -->
                <div class="phd-category">
                    <h3>Architecture, Design & Fine Arts</h3>
                    <div class="phd-links">
                        <a href="/doctoral-architecture">Architecture</a>
                        <a href="/doctoral-communication-design">Communication Design</a>
                        <a href="/doctoral-fine-arts">Fine Arts</a>
                        <a href="/doctoral-rsft">Fashion Design</a>
                        <a href="/doctoral-graphic-design">Graphic Design</a>
                        <a href="/doctoral-product-design">Product Design</a>
                    </div>
                </div>

                <!-- Health -->
                <div class="phd-category">
                    <h3>Allied Health Sciences</h3>
                    <div class="phd-links">
                        <a href="/doctoral-medical-laboratory-technology">Medical Laboratory Technology</a>
                        <a href="/doctoral-nutrition&dietetics">Nutrition And Dietetics</a>
                        <a href="/doctoral-pharmacy">Pharmacy</a>
                        <a href="/doctoral-physiotherapy">Physiotherapy</a>
                        <a href="/doctoral-radiology-and-imaging-technology">Radiology and Imaging Technology</a>
                    </div>
                </div>

                <!-- Sports -->
                <div class="phd-category">
                    <h3>Physical Education and Sports</h3>
                    <div class="phd-links">
                        <a href="/doctoral-physical-education-and-sports">Physical Education and Sports</a>
                    </div>
                </div>

            </div>
        </section>



        <div class="p-4">
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
            <p class="para1 text-dark " style="text-align: justify;">
                The structure of the Ph.D. programme includes a mandatory coursework and candidates are encouraged to take
                up
                a wide variety of courses to cultivate a cross-disciplinary outlook. The topic of research is expected to be
                inter-disciplinary with emphasis on practical impact that is inspired by real world problems or sponsored by
                industry. The output is expected to address a gap or add something new to the existing corpus of literature.
                A Ph.D. scholar is not only preparing to be a researcher but also a teacher as teaching is integral to
                effective learning.
            </p>
            <p class="para1 text-dark ">
                With the spirit of liberal inquiry governing every aspect of academic life, accomplished faculty, emphasis
                on work-life balance, a close and supportive environment, and access to world-class facilities, being a
                research scholar at RGU will be an enriching, and productive experience.
            </p>
        </div>

        <div class="container-fluid p-5">
            <div class="row" style="text-align: justify;">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                Ph.D. Cell
                            </button>
                        </h2>
                        <div id="collapseZero" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="/phd-cell" class="bg-danger p-2 rounded text-white fw-bold">Click to View</a>
                            </div>
                        </div>
                    </div>
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
                                    <table class="table table-bordered table-striped align-middle">

                                        <thead>
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
                                                <th class="topic">TOPIC OF RESEARCH</th>
                                            </tr>
                                        </thead>

                                        <tbody>

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
                                                <td>POSITIONING OF BRICK AND MORTAR RETAILERS WITH REFERENCE TO APPARELS: A
                                                    STUDY OF SELECT RETAILERS IN KAMRUP (METRO).</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>2017-18</td>
                                                <td>RSCOM</td>
                                                <td>JOURNALISM & MASS COMMUNICATION</td>
                                                <td>ANKITA AGARWAL</td>
                                                <td>1170704</td>
                                                <td>DR. N. ROHIN KANTA SINGH</td>
                                                <td>DR. RUPARANI SONOWAL</td>
                                                <td>31-08-2023</td>
                                                <td>USAGE PATTERN OF WHATSAPP AMONG THE STUDENTS OF SELECTED UNIVERSITIES OF
                                                    ASSAM.</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>2018-19</td>
                                                <td>RSCOM</td>
                                                <td>JOURNALISM & MASS COMMUNICATION</td>
                                                <td>FARHA YASHMIN ROHMAN</td>
                                                <td>1181179</td>
                                                <td>DR. N. ROHIN KANTA SINGH</td>
                                                <td>DR. RUPARANI SONOWAL</td>
                                                <td>31-08-2023</td>
                                                <td>PORTRAYAL OF IDENTITY ON FACEBOOK WITH REFERENCE TO STUDENT LEADERS IN
                                                    ASSAM.</td>
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
                                                <td>CORPORATE GOVERNANCE PRACTICES UNDER THE COMPANIES ACT, 2013: A STUDY ON
                                                    SELECT BSE LISTED COMPANIES.</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>2018-19</td>
                                                <td>RSET</td>
                                                <td>COMPUTER SCIENCE & ENGINEERING</td>
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
                                                    SOCIO ECONOMIC CONDITION IN UNDIVIDED BARPETA DISTRICT OF ASSAM.</td>
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
                                                <td>A STUDY ON INTERNATIONAL AND NATIONAL LEGAL FRAME WORK ON SURROGACY AND
                                                    ITS CONFORMITY WITH RULE OF LAW.</td>
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
                                                <td>PARDONING POWER AND JUDICIAL REVIEW: A COMPARATIVE STUDY (WITH SPECIAL
                                                    REFERENCE TO THE CONSTITUTION OF INDIA).</td>
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
                                                <td>A STUDY ON RURAL TOURISM IN RI-BHOI DISTRICT OF MEGHALAYA: PROSPECTS AND
                                                    CHALLENGES.</td>
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
                                                <td>SEA LEVEL RISE DUE TO CLIMATE CHANGE AND ITS IMPACT ALONG THE COAST OF
                                                    MUMBAI.</td>
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
                                                <td>WOUND HEALING AND ANTIMICROBIAL PROPERTIES OF KAEMPFERIA GALANGA L. AND
                                                    FORMULATION OF TOPICAL APPLICATIONS.</td>
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
                                                <td>BEHAVIOURAL STUDY OF VISCO ELASTIC FLUID FLOW CHARACTERIZED BY WALTERS
                                                    LIQUID (MODEL B-).</td>
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
                                                <td>INDIAN ABSTRACT ART OF POST INDEPENDENCE ERA: A PHILOSOPHICAL ANALYSIS.
                                                </td>
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
                                                <td>SOME ASPECTS OF FLUID FLOW PROBLEMS WITH EMPHASIS ON VISCO-ELASTICITY.
                                                </td>
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
                                                <td>FOLKSONGS OF THE ANGAMI NAGAS: TRANSMISSION AND PRESERVATION OF CULTURE
                                                    AND TRADITION.</td>
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
                                                <td>LEGAL ASPECTS OF EUTHANASIA AND RIGHT TO DIE WITH DIGNITY: A COMPARATIVE
                                                    STUDY.</td>
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
                                                <td>MILIEU, MEMORY, MYSTICISM: A COMPARATIVE STUDY OF NATURALISM AND DEEP
                                                    ECOLOGY IN THE SELECTED NOVELS OF JOHN STEINBECK AND EASTERINE KIRE.
                                                </td>
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
                                                <td>MATHEMATICAL MODELLING AND INTEGRATED MANAGEMENT OF ECO-EPIDEMIOLOGICAL
                                                    SYSTEM UNDER THE APPLICATION OF PESTICIDES.</td>
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
                                                <td>INFLUENCE OF TALK SHOWS WITH CELEBRITIES OF HINDI CINEMA ON UNIVERSITY
                                                    STUDENTS IN ASSAM.</td>
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
                                                    SATISFACTION AND LOYALTY - A STUDY ON RETAIL CUSTOMERS OF SELECT BANKS.
                                                </td>
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
                                                <td>SIMULATIONS OF SOLITON TRANSMISSION IN OPTICAL FIBRE FOR LONG DISTANCE
                                                    OPTICAL COMMUNICATION.</td>
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
                                                <td>THE EFFECTS OF FACEBOOK ON MARRIED COUPLES IN THE CONTEXT OF RELATIONAL
                                                    DIALECTICS WITH SPECIAL REFERENCE TO GUWAHATI, ASSAM.</td>
                                            </tr>

                                            <tr>
                                                <td>29</td>
                                                <td>2019-20</td>
                                                <td>RSEES</td>
                                                <td>GEOGRAPHY</td>
                                                <td>PARIMITA SAIKIA</td>
                                                <td>1191460</td>
                                                <td>PROF. (DR.) B. S. MIPUN</td>
                                                <td>DR. SHUKLA ACHARJEE</td>
                                                <td>22-11-2024</td>
                                                <td>GEOSPATIAL APPROACH FOR GROUNDWATER RESOURCE AND PROSPECT ZONE MAPPING
                                                    OF KAMRUP METROPOLITAN DISTRICT, ASSAM.</td>
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
                                                    CINEMATIC INNOVATIONS.</td>
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
                                                    COMMUNICATION MEDIUM BY SIMULATION.</td>
                                            </tr>

                                            <tr>
                                                <td>32</td>
                                                <td>2018-19</td>
                                                <td>RSB</td>
                                                <td>MANAGEMENT</td>
                                                <td>SUDIP BANIK</td>
                                                <td>1181170</td>
                                                <td>PROF. (DR.) S. P. SINGH</td>
                                                <td>DR. ASHUTOSH MURTI</td>
                                                <td>26-11-2024</td>
                                                <td>SOCIO-TECHNICAL SYSTEM: A STUDY OF TRIADIC ASPECT AMONG INDIVIDUAL, TEAM
                                                    AND LOCI.</td>
                                            </tr>

                                            <tr>
                                                <td>33</td>
                                                <td>2019-20</td>
                                                <td>RSB</td>
                                                <td>MANAGEMENT</td>
                                                <td>SANTOSH KUMAR ANAND</td>
                                                <td>1190009</td>
                                                <td>PROF. (DR.) S. P. SINGH</td>
                                                <td>PROF. (DR.) VIVEKANAND PANDEY</td>
                                                <td>26-11-2024</td>
                                                <td>PUBLIC AND PRIVATE FUNDING OF HIGHER EDUCATION IN INDIA: A STUDY OF ITS
                                                    EFFECT ON QUALITY OF SELECT UNIVERSITIES IN ASSAM.</td>
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
                                                <td>IN-SILICO MARKER COMPOUND(S) ANALYSIS AND EVALUATION OF PHYTOSOME LOADED
                                                    NOVEL DRUG DELIVERY SYSTEM OF PSIDIUM GUAJAVA (L) TARGETING ALZHEIMER'S
                                                    DISEASE.</td>
                                            </tr>

                                            <tr>
                                                <td>36</td>
                                                <td>2019-20</td>
                                                <td>RSET</td>
                                                <td>COMPUTER SCIENCE & ENGINEERING</td>
                                                <td>ANTARA MALAKAR</td>
                                                <td>1191454</td>
                                                <td>PROF. (DR.) ANKUR GANGULY</td>
                                                <td>DR. SWARNENDU KUMAR</td>
                                                <td>30-04-2025</td>
                                                <td>DESIGN AND DEVELOPMENT OF DEEP LEARNING BASED MODEL FOR PREDICTION OF
                                                    EYE DISEASES IN NORTH EASTERN STATES OF INDIA.</td>
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
                                                <td>DEVELOPMENT AND EVALUATION OF POLYHERBAL FORMULATIONS BASED ON POTENTIAL
                                                    ETHNO MEDICINAL PLANTS OF NORTHEAST INDIA AS ANTI-DIABETIC
                                                    PHYTOTHERAPEUTICS.</td>
                                            </tr>

                                            <tr>
                                                <td>38</td>
                                                <td>2020-21</td>
                                                <td>RSB</td>
                                                <td>MANAGEMENT</td>
                                                <td>ANANYA DEKA</td>
                                                <td>1200010</td>
                                                <td>PROF. (DR.) S. P. SINGH</td>
                                                <td>DR. ASHUTOSH MURTI</td>
                                                <td>15-05-2025</td>
                                                <td>EFFECT OF DIGITAL MARKETING ON CONSUMER BUYING BEHAVIOUR IN ASSAM.</td>
                                            </tr>

                                            <tr>
                                                <td>39</td>
                                                <td>2019-20</td>
                                                <td>RSEES</td>
                                                <td>ENVIRONMENTAL SCIENCE</td>
                                                <td>RITUPARNA DAS</td>
                                                <td>1191462</td>
                                                <td>PROF. (DR.) B. S. MIPUN</td>
                                                <td>DR. SHUKLA ACHARJEE</td>
                                                <td>20-05-2025</td>
                                                <td>ASSESSMENT OF WATER QUALITY AND ITS IMPACT ON HUMAN HEALTH IN URBAN
                                                    AREAS.</td>
                                            </tr>

                                            <tr>
                                                <td>40</td>
                                                <td>2020-21</td>
                                                <td>RSAPS</td>
                                                <td>PHYSICS</td>
                                                <td>DEEPJYOTI SAIKIA</td>
                                                <td>1200005</td>
                                                <td>DR. DEVIKA PHUKAN</td>
                                                <td>DR. ANURUP GOHAIN BARUA</td>
                                                <td>25-05-2025</td>
                                                <td>STUDY OF NANOPARTICLE INTERACTIONS IN MODERN MATERIAL SCIENCE.</td>
                                            </tr>

                                            <tr>
                                                <td>41</td>
                                                <td>2020-21</td>
                                                <td>RSCOM</td>
                                                <td>JOURNALISM & MASS COMMUNICATION</td>
                                                <td>MONALISA BORAH</td>
                                                <td>1200012</td>
                                                <td>DR. RASHMI SARMAH</td>
                                                <td>DR. RAHUL CHANDA</td>
                                                <td>28-05-2025</td>
                                                <td>ROLE OF SOCIAL MEDIA IN SHAPING PUBLIC OPINION AMONG YOUTH.</td>
                                            </tr>

                                            <tr>
                                                <td>42</td>
                                                <td>2019-20</td>
                                                <td>RSLA</td>
                                                <td>LAW & ADMINISTRATION</td>
                                                <td>RAHUL SHARMA</td>
                                                <td>1191465</td>
                                                <td>PROF. (DR.) H. C. NATH</td>
                                                <td>DR. SMITA SARMAH</td>
                                                <td>30-05-2025</td>
                                                <td>LEGAL FRAMEWORK OF CYBER SECURITY IN INDIA: CHALLENGES AND PROSPECTS.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>43</td>
                                                <td>2020-21</td>
                                                <td>RSP</td>
                                                <td>PHARMACY</td>
                                                <td>ANUPAM DAS</td>
                                                <td>1201550</td>
                                                <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                                                <td>PROF. (DR.) MANODIP CHAKRABORTY</td>
                                                <td>02-06-2025</td>
                                                <td>FORMULATION AND EVALUATION OF HERBAL DRUG DELIVERY SYSTEMS.</td>
                                            </tr>

                                            <tr>
                                                <td>44</td>
                                                <td>2019-20</td>
                                                <td>RSAPS</td>
                                                <td>MATHEMATICS</td>
                                                <td>PRITAM KALITA</td>
                                                <td>1191458</td>
                                                <td>PROF. (DR.) ANURADHA DEVI</td>
                                                <td>DR. NAVALAKHI HAZARIKA</td>
                                                <td>05-06-2025</td>
                                                <td>ADVANCED STUDY OF DIFFERENTIAL EQUATIONS IN ENGINEERING APPLICATIONS.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>45</td>
                                                <td>2020-21</td>
                                                <td>RSBSC</td>
                                                <td>BIO-TECHNOLOGY</td>
                                                <td>PRIYANKA DAS</td>
                                                <td>1201560</td>
                                                <td>DR. DEBAJIT BORAH</td>
                                                <td>DR. BIDISHA SHARMA</td>
                                                <td>10-06-2025</td>
                                                <td>APPLICATION OF BIOTECHNOLOGY IN AGRICULTURAL IMPROVEMENT.</td>
                                            </tr>

                                            <tr>
                                                <td>46</td>
                                                <td>2019-20</td>
                                                <td>RSL</td>
                                                <td>ENGLISH</td>
                                                <td>RUPAM BORAH</td>
                                                <td>1190020</td>
                                                <td>PROF. (DR.) KRISHNA BARUA</td>
                                                <td>PROF. (DR.) RAKHEE KALITA MORAL</td>
                                                <td>15-06-2025</td>
                                                <td>LITERARY ANALYSIS OF POSTCOLONIAL TEXTS IN NORTH EAST INDIA.</td>
                                            </tr>

                                            <tr>
                                                <td>47</td>
                                                <td>2020-21</td>
                                                <td>RSFA</td>
                                                <td>FINE ARTS</td>
                                                <td>JYOTI SHARMA</td>
                                                <td>1200025</td>
                                                <td>DR. MOUSUMI DEKA</td>
                                                <td>DR. DEBASISH CHAKRABORTY</td>
                                                <td>20-06-2025</td>
                                                <td>MODERN ARTISTIC EXPRESSIONS IN CONTEMPORARY INDIAN ART.</td>
                                            </tr>

                                            <tr>
                                                <td>48</td>
                                                <td>2019-20</td>
                                                <td>RSAPS</td>
                                                <td>PHYSICS</td>
                                                <td>RAKESH DEKA</td>
                                                <td>1190006</td>
                                                <td>DR. DEVIKA PHUKAN</td>
                                                <td>PROF. (DR.) SUBRATA HAZARIKA</td>
                                                <td>25-06-2025</td>
                                                <td>OPTICAL FIBRE COMMUNICATION SYSTEMS AND SIGNAL ANALYSIS.</td>
                                            </tr>

                                            <tr>
                                                <td>49</td>
                                                <td>2020-21</td>
                                                <td>RSB</td>
                                                <td>MANAGEMENT</td>
                                                <td>MANASH DAS</td>
                                                <td>1200015</td>
                                                <td>PROF. (DR.) S. P. SINGH</td>
                                                <td>PROF. (DR.) VIVEKANAND PANDEY</td>
                                                <td>30-06-2025</td>
                                                <td>IMPACT OF ORGANIZATIONAL CULTURE ON EMPLOYEE PERFORMANCE.</td>
                                            </tr>

                                            <tr>
                                                <td>50</td>
                                                <td>2019-20</td>
                                                <td>RSEES</td>
                                                <td>GEOGRAPHY</td>
                                                <td>ANKUR SAIKIA</td>
                                                <td>1191463</td>
                                                <td>PROF. (DR.) B. S. MIPUN</td>
                                                <td>DR. SHUKLA ACHARJEE</td>
                                                <td>05-07-2025</td>
                                                <td>SPATIAL ANALYSIS OF URBAN GROWTH USING GIS TECHNIQUES.</td>
                                            </tr>

                                            <tr>
                                                <td>51</td>
                                                <td>2020-21</td>
                                                <td>RSCOM</td>
                                                <td>JOURNALISM & MASS COMMUNICATION</td>
                                                <td>RINA DAS</td>
                                                <td>1200018</td>
                                                <td>DR. ESHA CHAKRABORTY</td>
                                                <td>DR. RAHUL CHANDA</td>
                                                <td>10-07-2025</td>
                                                <td>MEDIA ETHICS AND RESPONSIBILITY IN DIGITAL JOURNALISM.</td>
                                            </tr>

                                            <tr>
                                                <td>52</td>
                                                <td>2019-20</td>
                                                <td>RSLA</td>
                                                <td>LAW & ADMINISTRATION</td>
                                                <td>AMIT KUMAR</td>
                                                <td>1191466</td>
                                                <td>PROF. (DR.) H. C. NATH</td>
                                                <td>PROF. (DR.) NALINI KANTA DUTTA</td>
                                                <td>15-07-2025</td>
                                                <td>COMPARATIVE STUDY OF HUMAN RIGHTS LAW IN INDIA AND INTERNATIONAL
                                                    CONTEXT.</td>
                                            </tr>

                                            <tr>
                                                <td>53</td>
                                                <td>2020-21</td>
                                                <td>RSP</td>
                                                <td>PHARMACY</td>
                                                <td>RAJIB BORAH</td>
                                                <td>1201555</td>
                                                <td>PROF. (DR.) BIPUL NATH</td>
                                                <td>PROF. (DR.) DIPANKAR SAHA</td>
                                                <td>20-07-2025</td>
                                                <td>DRUG DELIVERY SYSTEMS USING NATURAL COMPOUNDS FOR CHRONIC DISEASES.</td>
                                            </tr>

                                            <tr>
                                                <td>54</td>
                                                <td>2019-20</td>
                                                <td>RSAPS</td>
                                                <td>MATHEMATICS</td>
                                                <td>DEEPAK SHARMA</td>
                                                <td>1191459</td>
                                                <td>PROF. (DR.) KAMAL DEBNATH</td>
                                                <td>DR. NARAYAN NAYAK</td>
                                                <td>25-07-2025</td>
                                                <td>APPLICATION OF FUZZY LOGIC IN MATHEMATICAL MODELLING.</td>
                                            </tr>

                                            <tr>
                                                <td>55</td>
                                                <td>2020-21</td>
                                                <td>RSBSC</td>
                                                <td>BIO-TECHNOLOGY</td>
                                                <td>ANJALI DAS</td>
                                                <td>1201565</td>
                                                <td>DR. DEBAJIT BORAH</td>
                                                <td>DR. BIDISHA SHARMA</td>
                                                <td>30-07-2025</td>
                                                <td>GENETIC ENGINEERING APPROACHES FOR CROP IMPROVEMENT.</td>
                                            </tr>

                                            <tr>
                                                <td>56</td>
                                                <td>2019-20</td>
                                                <td>RSL</td>
                                                <td>ENGLISH</td>
                                                <td>PRIYA BORAH</td>
                                                <td>1190022</td>
                                                <td>PROF. (DR.) PRADIP JYOTI MAHANTA</td>
                                                <td></td>
                                                <td>05-08-2025</td>
                                                <td>STUDY OF FOLK LITERATURE AND ITS CULTURAL SIGNIFICANCE IN ASSAM.</td>
                                            </tr>

                                            <tr>
                                                <td>57</td>
                                                <td>2020-21</td>
                                                <td>RSFA</td>
                                                <td>FINE ARTS</td>
                                                <td>RITU DAS</td>
                                                <td>1200028</td>
                                                <td>DR. MOUSUMI DEKA</td>
                                                <td>DR. DEBASISH CHAKRABORTY</td>
                                                <td>10-08-2025</td>
                                                <td>CONTEMPORARY ART PRACTICES IN NORTHEAST INDIA.</td>
                                            </tr>

                                            <tr>
                                                <td>58</td>
                                                <td>2019-20</td>
                                                <td>RSAPS</td>
                                                <td>PHYSICS</td>
                                                <td>SUNITA DEKA</td>
                                                <td>1190008</td>
                                                <td>DR. DEVIKA PHUKAN</td>
                                                <td>DR. ANURUP GOHAIN BARUA</td>
                                                <td>15-08-2025</td>
                                                <td>STUDY OF QUANTUM MECHANICS IN ADVANCED PHYSICAL SYSTEMS.</td>
                                            </tr>

                                            <tr>
                                                <td>59</td>
                                                <td>2020-21</td>
                                                <td>RSB</td>
                                                <td>MANAGEMENT</td>
                                                <td>RAHUL DAS</td>
                                                <td>1200020</td>
                                                <td>PROF. (DR.) S. P. SINGH</td>
                                                <td>DR. ASHUTOSH MURTI</td>
                                                <td>20-08-2025</td>
                                                <td>STRATEGIC MANAGEMENT PRACTICES IN INDIAN CORPORATE SECTOR.</td>
                                            </tr>

                                            <tr>
                                                <td>60</td>
                                                <td>2019-20</td>
                                                <td>RSEES</td>
                                                <td>ENVIRONMENTAL SCIENCE</td>
                                                <td>DEEPA DAS</td>
                                                <td>1191467</td>
                                                <td>PROF. (DR.) B. S. MIPUN</td>
                                                <td>DR. SHUKLA ACHARJEE</td>
                                                <td>25-08-2025</td>
                                                <td>ENVIRONMENTAL IMPACT ASSESSMENT OF INDUSTRIAL ACTIVITIES.</td>
                                            </tr>

                                            <tr>
                                                <td>61</td>
                                                <td>2020-21</td>
                                                <td>RSCOM</td>
                                                <td>JOURNALISM & MASS COMMUNICATION</td>
                                                <td>PRIYANKA BORAH</td>
                                                <td>1200022</td>
                                                <td>DR. RASHMI SARMAH</td>
                                                <td>DR. RAHUL CHANDA</td>
                                                <td>30-08-2025</td>
                                                <td>IMPACT OF DIGITAL MEDIA ON POLITICAL COMMUNICATION.</td>
                                            </tr>

                                            <tr>
                                                <td>62</td>
                                                <td>2019-20</td>
                                                <td>RSLA</td>
                                                <td>LAW & ADMINISTRATION</td>
                                                <td>ARJUN SHARMA</td>
                                                <td>1191468</td>
                                                <td>PROF. (DR.) H. C. NATH</td>
                                                <td>DR. SMITA SARMAH</td>
                                                <td>05-09-2025</td>
                                                <td>LEGAL CHALLENGES IN CYBER CRIME AND DATA PROTECTION.</td>
                                            </tr>

                                            <tr>
                                                <td>63</td>
                                                <td>2020-21</td>
                                                <td>RSP</td>
                                                <td>PHARMACY</td>
                                                <td>AMIT DAS</td>
                                                <td>1201568</td>
                                                <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                                                <td>PROF. (DR.) MANODIP CHAKRABORTY</td>
                                                <td>10-09-2025</td>
                                                <td>HERBAL MEDICINE DEVELOPMENT FOR CHRONIC DISEASE TREATMENT.</td>
                                            </tr>

                                            <tr>
                                                <td>64</td>
                                                <td>2019-20</td>
                                                <td>RSAPS</td>
                                                <td>MATHEMATICS</td>
                                                <td>SANJAY KALITA</td>
                                                <td>1191460</td>
                                                <td>PROF. (DR.) ANURADHA DEVI</td>
                                                <td>DR. NAVALAKHI HAZARIKA</td>
                                                <td>15-09-2025</td>
                                                <td>ADVANCED ALGEBRAIC STRUCTURES AND THEIR APPLICATIONS.</td>
                                            </tr>

                                            <tr>
                                                <td>65</td>
                                                <td>2020-21</td>
                                                <td>RSBSC</td>
                                                <td>BIO-TECHNOLOGY</td>
                                                <td>RIMA DAS</td>
                                                <td>1201570</td>
                                                <td>DR. DEBAJIT BORAH</td>
                                                <td>DR. BIDISHA SHARMA</td>
                                                <td>20-09-2025</td>
                                                <td>STUDY OF MICROBIAL INTERACTIONS IN AGRICULTURAL SOIL.</td>
                                            </tr>

                                            <tr>
                                                <td>66</td>
                                                <td>2019-20</td>
                                                <td>RSL</td>
                                                <td>ENGLISH</td>
                                                <td>ANITA BORAH</td>
                                                <td>1190025</td>
                                                <td>PROF. (DR.) KRISHNA BARUA</td>
                                                <td></td>
                                                <td>25-09-2025</td>
                                                <td>LITERARY REPRESENTATION OF IDENTITY IN CONTEMPORARY FICTION.</td>
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

@endsection

@push('scripts')
    <script>
        const data = [{
                sl: 1,
                session: "2024-25",
                school: "RSA",
                branch: "ARCHITECTURE",
                name: "DIKSHA DUTTA",
                guide: "PROF. (DR.) HARI PRASAD AGARWAL"
            },
            {
                sl: 2,
                session: "2024-25",
                school: "RSA",
                branch: "ARCHITECTURE",
                name: "KASTURI BORAH",
                guide: "PROF. (DR.) HARI PRASAD AGARWAL"
            },
            {
                sl: 3,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "BISHWAPRIYA CHUTIA",
                guide: "DR. BHASKARJYOTI GOGOI"
            },
            {
                sl: 4,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "DEBALEENA KASHYAP",
                guide: "DR. BHASKARJYOTI GOGOI"
            },
            {
                sl: 5,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SAHIBA KHAN",
                guide: "DR. DEBAJIT BORAH"
            },
            {
                sl: 6,
                session: "2022-23",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SAAHANA SYED JUHI",
                guide: "PROF. (DR.) RANJAN DUTTA KALITA"
            },
            {
                sl: 7,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "IXORA WAIKHOM",
                guide: "DR. SIDDHARTHA NARAYAN BORAH"
            },
            {
                sl: 8,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "ANMOL KAUR",
                guide: "DR. RUPSIKHA PATOWARY"
            },
            {
                sl: 9,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "PANCHAMI BORPUJARI",
                guide: "DR. DEBAJIT BORAH"
            },
            {
                sl: 10,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "AMARTYA DAS",
                guide: "PROF. (DR.) RANJAN DUTTA KALITA"
            },
            {
                sl: 11,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "DEBOSMITA DUTTA",
                guide: "DR. MOUSUMI DAS GOSWAMI"
            },
            {
                sl: 12,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "ANINDITA DUTTA",
                guide: "DR. RUPESH KUMAR"
            },
            {
                sl: 13,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SHIKHA RANI BARO",
                guide: "DR. RUPESH KUMAR"
            },
            {
                sl: 14,
                session: "2019-20",
                school: "RSLSC",
                branch: "BOTANY",
                name: "NAMITA DEKA",
                guide: "PROF.(DR.) SARANGA RANJAN PATGIRI"
            },
            {
                sl: 15,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JASMIN SULTANA",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 16,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "RINGPHAMCHUNG KHATRU MOYON",
                guide: "PROF. (DR.) MINARAM NATH"
            },
            {
                sl: 17,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "NARGIS ZAMAN",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 18,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "SABNAM SULTANA",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 19,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "MITALI BARUAH",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 20,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "RICA LANGSTANG",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 21,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "HIMAKSHI KALITA",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 22,
                session: "2022-23",
                school: "RSLSC",
                branch: "BOTANY",
                name: "HAFIUZ ZAMAN AHMED",
                guide: "DR. MANALEE PAUL"
            },
            {
                sl: 23,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "DAIMULU BORO",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 24,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JIREE BASUMATARY",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 25,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "CHETANA HASNU",
                guide: "DR. PRATIKSHYA BORAH"
            },
            {
                sl: 26,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JONEY LALNUNPUII PACHUAU",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 27,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "GITANJALI KALITA",
                guide: "DR. MANALEE PAUL"
            },
            {
                sl: 28,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "P SUCHITRA SINGHA",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 29,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "DEEPRAJ KUNDU",
                guide: "DR. UPASHNA CHETTRI"
            },
            {
                sl: 30,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "BIJIT NATH",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 31,
                session: "2018-19",
                school: "RSET",
                branch: "CE",
                name: "KHAGEN CHANDRA NATH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 32,
                session: "2019-20",
                school: "RSET",
                branch: "CE",
                name: "CHANDRA UPADHYAYA",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 33,
                session: "2019-20",
                school: "RSET",
                branch: "CE",
                name: "RANU GOWAL SARMAH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 34,
                session: "2023-24",
                school: "RSET",
                branch: "CE",
                name: "ARJUN BARUAH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 35,
                session: "2024-25",
                school: "RSET",
                branch: "CE",
                name: "Yudhajit Dey",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 36,
                session: "2024-25",
                school: "RSET",
                branch: "CE",
                name: "Arnold Dipak Das",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 37,
                session: "2023-24",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "NEEKITA DUTTA",
                guide: "DR. BISWAJIT SARMA"
            },
            {
                sl: 38,
                session: "2023-24",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "TANZINA FIRDOUSHI BORBHUYAN",
                guide: "DR. DEBOJEET SAHU"
            },
            {
                sl: 39,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "RT STARTHRING",
                guide: "DR. ANUP MALAKAR"
            },
            {
                sl: 40,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "TONMOY DOLEY",
                guide: "DR. PUBALEE SARMAH"
            },
            {
                sl: 41,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "Joydeep Chakravorty",
                guide: "DR. BINOYARGHA DAM"
            },
            {
                sl: 42,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "LAKHMINANDAN GOSWAMI",
                guide: "DR. PUBALEE SARMAH"
            },
            {
                sl: 43,
                session: "2021-22",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIKSHYA SAIKIA",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 44,
                session: "2021-22",
                school: "RSC",
                branch: "COMMERCE",
                name: "VASUNDHARA JALAN",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 45,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "ADITI BARUAH",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 46,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SAISANGPUII SAILO",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 47,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SAMARESH NANDY",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 48,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "DARSHANA DEVI",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 49,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SANSKRITA BARMAN",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 50,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "MOHIT CHOUDHARY",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 51,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIPAK JAIN",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 52,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIPAK JAIN",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 53,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "JIMPY SAUD",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 54,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "MOIRANGTHEM JINA CHANU",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 55,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "ANANYA BANIK",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 56,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "BEENA RONGPIPI",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 57,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "ANUPRIYA TALUKDAR",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 58,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "UZMA SADAF",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 59,
                session: "2024-25",
                school: "RSET",
                branch: "CSE",
                name: "DHARITRI TALUKDAR",
                guide: "PROF. (DR.) RASHEL SARKAR"
            },
            {
                sl: 60,
                session: "2020-21",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SHWETA SINGH",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 61,
                session: "2020-21",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "WAHIDA RAHMAN",
                guide: "PROF. (DR.) SWABERA ISLAM"
            },
            {
                sl: 62,
                session: "2021-22",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SANGHAMITRA DUWARAH",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 63,
                session: "2021-22",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ASHA YENGKHOM",
                guide: "PROF. (DR.) SWABERA ISLAM"
            },
            {
                sl: 64,
                session: "2022-23",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "TRISHA SAHA",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 65,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "AJANTA DAS",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 66,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "HIMANGGI BORAH",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 67,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ALORIKA DEB",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 68,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "CHANCHI R MARAK",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 69,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "DEEPSHIKHA KALITA",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 70,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "NABADEEPA KALITA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 71,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "MANABENDRA BARMAN",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 72,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SRIJANI HAZARIKA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 73,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "PREETY SHAH ZIYA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 74,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "VANLALREMRUATI KHIANGTE",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 75,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "K LENANGH ANGH",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 76,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ANURADHA DEVI",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 77,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SUPRIYA KONWAR",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 78,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "Nirupam Das",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 79,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "AKALI CHISHI",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 80,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "Mwikwm Narzary",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 81,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "RITUPARNA BORGOHAIN",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 82,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "KARENG RONGHANGPI",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 83,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHIBENI MERRY",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 84,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "BANANI DAS",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 85,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "FAHMIDA AKHTAR",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 86,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "GITIMA DEKA",
                guide: "PROF. (DR.) PRADIP JYOTI MAHANTA"
            },
            {
                sl: 87,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "IFTIKAR ALI AHMED",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 88,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHANDAM CHANU NGANTHOIHANBI",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 89,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHINMOYEE DEKA",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 90,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "LAISHRAM PINKY",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 91,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "SERAM RAJESHWARAN SINGH",
                guide: "PROF. (DR.) PRADIP JYOTI MAHANTA"
            },
            {
                sl: 92,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMASHRI KUMAR",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 93,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "DIMPY BANIA",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 94,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "RASHMIREKHA BARMAN",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 95,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "GOURISHIKHA BORGOHAIN",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 96,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "MIRANDA NGANGOM",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 97,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "DEIFY BAKORDOR SUTING",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 98,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "HEMANTA BORA",
                guide: "PROF. (DR.) BORNALI BHUYAN"
            },
            {
                sl: 99,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "KASTURI BORGOHAIN",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 100,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "PAYEL DAS",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 101,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "JUBIN NAHAR",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 102,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "NIVEDITA DUTTA",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 103,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "SINJINI SAIKIA",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 104,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "TAJUNGMENLA JAMIR",
                guide: "PROF. (DR.) BORNALI BHUYAN"
            },
            {
                sl: 105,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "TUHISHA GHOSH",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 106,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "ABAMEDA GIRI KHARMALKI",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 107,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "ADITI GHOSH",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 108,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "PUJA KUMARI",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 109,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "RUMA DEBNATH",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 110,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "SATAVISHA HAZARIKA",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 111,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "NANCY PANGEIJAM",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 112,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "MAHFUZ AHMED",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 113,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "RT SHANGWARHRING",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 114,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "BHASKAR KOUSHIK DAS",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 115,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "T.LALAWMPUII",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 116,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "C.LALNUNPUII",
                guide: "DR. JYOTI MISHRA"
            },
            {
                sl: 117,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "PRANITA KALITA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 118,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "ARTIBIRTH CH MARAK",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 119,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "JENIFAR SABNAM",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 120,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMTRINA RABHA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 121,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMADRI BORAH",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 122,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "BHASWATI CHETIA",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 123,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "NIJWM BASUMATARY",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 124,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "PINAZ MIRZA",
                guide: "DR. PRABUDDHA GHOSH"
            },
            {
                sl: 125,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HEMEN JYOTI DAS",
                guide: "DR. PRABUDDHA GHOSH"
            },
            {
                sl: 126,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "ANGELINA THANGJAM",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 127,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "DIVYAJYOTI DAS",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 128,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "JIMLI DEKA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 129,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "ROBERT LYNDOH",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 130,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "R LALRINNGHETI",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 131,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "NAPHIBANIARLIN KSFIAR",
                guide: "DR. PALLABI BORAH"
            },
            {
                sl: 132,
                session: "2019-20",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "KISHAN BAGDI",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 133,
                session: "2022-23",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "GAURAV MORAL",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 134,
                session: "2022-23",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "LALREMRUATA VARTE",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 135,
                session: "2023-24",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "ANKUR HAZARIKA",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 136,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "SYEDA JADIDA AKHTAR",
                guide: "DR. SHAGUFTA RIZWANA"
            },
            {
                sl: 137,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "DIPANJALI DAS",
                guide: "DR. PREETISAGAR TALUKDAR"
            },
            {
                sl: 138,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "RAHUL BORDOLOI",
                guide: "PROF. (DR.) PRANATI DAS"
            },
            {
                sl: 139,
                session: "2024-25",
                school: "RSLSC",
                branch: "FORESTRY",
                name: "SATYAMJIT NEOG",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 140,
                session: "2024-25",
                school: "RSLSC",
                branch: "FORESTRY",
                name: "CHICHAKHA DEV BARMA",
                guide: "DR. PAUL LALREMSANG"
            },
            {
                "sl": 141,
                "session": "2021-22",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "HASNE TOUFIKI",
                "guide": "PROF.(DR.) B S MIPUN"
            },
            {
                "sl": 142,
                "session": "2022-23",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "DIPSHIKHA KALITA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 143,
                "session": "2023-24",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "EILEEN BETSY MYLLIEMNGAP",
                "guide": "PROF.(DR.) B S MIPUN"
            },
            {
                "sl": 144,
                "session": "2023-24",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "SONIA SAMJETSABAM",
                "guide": "DR. TRISHNA CHANGKAKATI"
            },
            {
                "sl": 145,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "BIPLAB SARKAR",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 146,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "GITALI. HAZARIKA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 147,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "MRIDULA KALITA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 148,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "KAKALI MEDHI",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 149,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "GANESH CHANDRA DAS",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 150,
                "session": "2019-20",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JORDAN THAPA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 151,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "POOJA BHATTACHARJEE",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 152,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PHOWLTHA SELTUN",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 153,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PUSPA DEORI",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 154,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "FREDDIE KHAWLHRING",
                "guide": "DR. MITALI KALITA"
            },
            {
                "sl": 155,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "TANZIM MASUD",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 156,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "RASHMIREKHA HAZARIKA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 157,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "CHIDORA R MARAK",
                "guide": "DR. MITALI KALITA"
            },
            {
                "sl": 158,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PHURAILATPAM AARTI DEVI",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 159,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "AKANGSHA KALITA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 160,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "ALEXANDER D SANGMA",
                "guide": "DR. SUSHMITA BANERJEE"
            },
            {
                "sl": 161,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "BANTI TALUKDAR",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 162,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "BIKASHITA SAIKIA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 163,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "HIMANGSHU SHEKHAR BORA",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 164,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JUDITH LALNIVAR INTOVATE",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 165,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JURI DEKA",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 166,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "ROTHANGLIANA",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 167,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JINI RANI BORO",
                "guide": "DR. SUSHMITA BANERJEE"
            },
            {
                "sl": 168,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "NH HINGNAMYI BLESSING NEWME",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 169,
                "session": "2020-21",
                "school": "RSIT",
                "branch": "I.T.",
                "name": "ASHOK KUMAR SARKAR",
                "guide": "DR. ANUPAM DAS"
            },
            {
                "sl": 170,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RASHMIREKHA BORAH",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 171,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "ANKITA SARMA",
                "guide": "PROF. (DR.) D.N. SINGH"
            },
            {
                "sl": 172,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RUMI TALUKDAR",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 173,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "KANGKANA TALUKDAR",
                "guide": "DR. SYEDA ANJUM AFREEN"
            },
            {
                "sl": 174,
                "session": "2024-25",
                "school": "RSMAS",
                "branch": "PHYSIOTHERAPY",
                "name": "SOMYATA CHITARANJAN SATPATHY SARMA",
                "guide": "PROF. (DR.) ABHIJIT DUTTA"
            },
            {
                "sl": 175,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "MAYURI OJAH",
                "guide": "DR. MADHUSMITA KOCH"
            },
            {
                "sl": 176,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RUCHI BHARDWAJ",
                "guide": "DR. SHRADDHA BASU"
            },
            {
                "sl": 177,
                "session": "2018-19",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "PREETILATA KUMARI",
                "guide": "DR. HAOGINLEN. CHONGLOI"
            },
            {
                "sl": 178,
                "session": "2022-23",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "UPEN BORA",
                "guide": "DR. RASHMI SARMAH"
            },
            {
                "sl": 179,
                "session": "2023-24",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "BRISTI GOGOI",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 180,
                "session": "2023-24",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "ZAKIR HUSSAIN",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 181,
                "session": "2024-25",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "SAMUEL LALBELSANG",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 182,
                "session": "2024-25",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "AMIT BARUAH",
                "guide": "DR. RASHMI SARMAH"
            },
            {
                "sl": 183,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BINU HAZARIKA KASHYAP",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 184,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RASHMI REKHA PHUKAN",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 185,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MAILINDA LYNSHING",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 186,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ABIDA SULTANA LASKAR",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 187,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DILIP KUMAR BORA",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 188,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DR RATHINDRA BHUYAN",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 189,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRONAB KR NATH",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 190,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KRISHNA DAS",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 191,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "POMPI DEKA",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 192,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BONNIE SARMA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 193,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NARGIS CHOUDHURY",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 194,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHAHNAJ SULTANA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 195,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SONI TEP",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 196,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BEATIFY LUNGDOH",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 197,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISH KUMAR DAS",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 198,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BHASWATI BORAH",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 199,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ANUPAL DUTTA PATHAK",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 200,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BONANI MAHANTA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 201,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JAYSHREE SHARMA",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 202,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NEHA VERMA",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 203,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BEAUTY NEOG",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 204,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BRANDON MESHAN PAJAT",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 205,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "LALSOLOMON DARNEI",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 206,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRITY GUPTA",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 207,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RAJASHRI HAZARIKA",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 208,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SATAVISA BORA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 209,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHRUTI HAZARIKA BORPUJARI",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 210,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SRISTI AGARWAL",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 211,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "UPASHANA GOSWAMI",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 212,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BAMERI DONDOR KHARSOHTUN",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 213,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BICKEY PRASAD",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 214,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JHARNA AKRAM",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 215,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NITA RIJIJU",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 216,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PANKHI DEVI",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 217,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "POOJA DEVI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 218,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BENZIR ZAMAN",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 219,
                "session": "2024-25",
                "school": "RSL",
                "branch": "LAW & ADMINISTRATION",
                "name": "ASIF ALI ANSARI",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 220,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KENEISENUO RUTSA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 221,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DIANA TRICIA TLANG",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 222,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISHA DEKA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 223,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NIMISHA SHARMA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 224,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ANISHA HAQUE",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 225,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BIRENDRA KUMAR BARMAN",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 226,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NAPHISABET KHARKONGOR",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 227,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RANI CHYRMANG",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 228,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "OINAM MITRABATI DEVI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 229,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "HIMANI RABHA",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 230,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "CARLOS NONGSIEJ",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 231,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BIMAN NATH",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 232,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRIYANGSHU GOSWAMI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 233,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DIPSHIKHA ROY CHOWDHURY",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 234,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JOYEETA RAJKHOWA",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 235,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SARMISTHA CHAKRABARTY",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 236,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISHA BORTHAKUR",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 237,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RASHMI REKHA SAIKIA",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 238,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHRISTI TODI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 239,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PURBA GOSWAMI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 240,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KANKANA CHOUDHURY",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 241,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SUMITRA DEVI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 242,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "KONGKINA NATH",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 243,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "PRASANNA KUMAR KONCH",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 244,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "MERINA AHMED",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 245,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "BIKRAMADITYA BARMAN",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 246,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "NIHARIKA SAIKIA",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 247,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "BHAGABATI NARZARY",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 248,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "Basera K. Sangma",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 249,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "MANJUSHREE DEVI",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 250,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "KISHUR NATH",
                "guide": "DR. NILANJANA PURKAYASTHA"
            },
            {
                "sl": 251,
                "session": "2017-18",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "ROSHINI SAIKIA",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 252,
                "session": "2019-20",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MAHENDRA PRASAD",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 253,
                "session": "2019-20",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "KALYANI GOHAIN",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 254,
                "session": "2020-21",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "ASHIM KUMAR SARMAH",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 255,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "AISHWARYA GOSWAMI",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 256,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "DHRUBAJYOTI THAKURIA",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 257,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NEHA TIWARI",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 258,
                "session": "2022-23",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MONALISA KONWAR",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 259,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NILIMOY NATH",
                "guide": "DR. DARSHANA BHAGOBATI"
            },
            {
                "sl": 260,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "SHARIF AHMED",
                "guide": "DR. DARSHANA BHAGOBATI"
            },
            {
                "sl": 261,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "INDIRA DEV ROY",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 262,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "BRISTY SRIVASTAVA",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 263,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "SUSHMITA KONJENGBAM",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 264,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "RIMA DAS",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 265,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NAZVI NASEEM",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 266,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "UTTAM BORAH",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 267,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "KUHELI DUTTA",
                "guide": "DR. SUMAN AGARWAL"
            },
            {
                "sl": 268,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MITHINGA MUSHAHARY",
                "guide": "DR. SUMAN AGARWAL"
            },
            {
                "sl": 269,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NEELU SWAMI",
                "guide": "PROF. (DR.) D.N. SINGH"
            },
            {
                "sl": 270,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NASREEN FIRDAUS CHOWDHURY",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 271,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MOHINA AKHTARA",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 272,
                "session": "2020-21",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "SINAM RAJKISHORE SINGHA",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 273,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "MARDOR WANRI SYNREM",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 274,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "MUSTAK EUCHUF",
                "guide": "PROF. (DR.) ANURADHA DEVI"
            },
            {
                "sl": 275,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "PUNAM DAS",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 276,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "H IMO MANI SINGHA",
                "guide": "PROF. (DR.) ANURADHA DEVI"
            },
            {
                "sl": 277,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "FLORENCE DAIMARI",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 278,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "KARISMITA MEDHI",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 279,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "KHRUNIELU LOHE",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 280,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "POMPI DAS",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 281,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "ANANYA SHILPI",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 282,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "Nandita Saikia",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 283,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "OINDRILA ROY CHOWDHURY",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 284,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "AKASH PAWAR",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 285,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "ANUPAMA MOIRANGTHEM",
                "guide": "DR. BIRSON INGTI"
            },
            {
                "sl": 286,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "SYED HADI ABDUL ROUF",
                "guide": "DR. NIRAJ SINGH"
            },
            {
                "sl": 287,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "KOWSALYA",
                "guide": "DR. SUSHMITA PAUL"
            },
            {
                "sl": 288,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "RAMKRISHNA ROY",
                "guide": "DR. BIRSON INGTI"
            },
            {
                "sl": 289,
                "session": "2024-25",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "NONGMAITHEM BISHWANATH SINGH",
                "guide": "PROF. (DR.) AMLAN DAS"
            },
            {
                "sl": 290,
                "session": "2024-25",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "AFRID AHMED",
                "guide": "DR. PANKAJ LOSAN SHARMA"
            },
            {
                "sl": 291,
                "session": "2023-24",
                "school": "RSMAS",
                "branch": "NUTRITION & DIETETICS",
                "name": "JEBIN SULTANA",
                "guide": "PROF. (DR.) PRANATI DAS"
            },
            {
                "sl": 292,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "GUJJALA SAI SRI HARSHA",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 293,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "RUNA CHAKRAVORTY",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 294,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "KAMAL DEKA",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 295,
                "session": "2021-22",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARUP CHAKRABORTY",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 296,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "MUKINUR HUSSAIN",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 297,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "HADIUZ ZAMAN",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 298,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "HIMANTA BISWA SAIKIA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 299,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PAYAL DASGUPTA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 300,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "DR. SHAHINUR ISLAM",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 301,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "BHASKAR JYOTI PATHAK",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 302,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "MUZAMMAL HOQUE MALLAH",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 303,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "NILUTPAL HAZARIKA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 304,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "LOBSANG TENZING KOMU",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 305,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SADHANA SHARMA",
                "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY"
            },
            {
                "sl": 306,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SUMI BARMAN",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 307,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PRIYANKA DAS",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 308,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "NEELAKSHI SHARMA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 309,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARPAN SEN",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 310,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SABNAM NARGIS",
                "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY"
            },
            {
                "sl": 311,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "DR. RAKIBUR RAHMAN",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 312,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "Paramjyoti Adhikary",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 313,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PALLAB KUMAR NATH",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 314,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARGHYA SAHA CHOWDHURY",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 315,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "ARUP SAIKIA",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 316,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "BIDISH BORAH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 317,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "PARTHA PRATIM BORAH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 318,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "AIDASHISHA BAREH",
                "guide": "DR. BORNALI CHETIA"
            },
            {
                "sl": 319,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "VIOLINA DAS",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 320,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "LONGKHRAW KHONGLANG",
                "guide": "DR. SUJATA DEB"
            },
            {
                "sl": 321,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "SNARMON LATO",
                "guide": "DR. SUJATA DEB"
            },
            {
                "sl": 322,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "RAHUL DEY",
                "guide": "DR. SANCHITA ROY"
            },
            {
                "sl": 323,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "GOURANGA MEDHI",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 324,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "MANAS JYOTI NATH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 325,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "USHA RANI SWARGIARY",
                "guide": "DR. GITANJAL DEKA"
            },
            {
                "sl": 326,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "MADHU RAM RABIDAS",
                "guide": "DR. BORNALI CHETIA"
            },
            {
                "sl": 327,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "TAPAS SEN",
                "guide": "DR. SANCHITA ROY"
            },
            {
                "sl": 328,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "PRABHAT SHARMA",
                "guide": "DR. MAIDUL ISLAM"
            },
            {
                "sl": 329,
                "session": "2020-21",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SHELZA JALAN",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 330,
                "session": "2021-22",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "LIONG M PHOM",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 331,
                "session": "2021-22",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MUSTAFA SYED IHTIMUM ALAM",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 332,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "NAGENDRA NATH GOGOI",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 333,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "TANJEELA MEHBOOB",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 334,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "PRAJOYEETA KASHYAP",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 335,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SUBHASH BARO",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 336,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MONISHA BORDOLOI",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 337,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SHANGKY KHONGWAR",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 338,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ROZY RANI SARMAH",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 339,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "TH TREESHALI DEVI",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 340,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ELCHIRA R MARAK",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 341,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ANJUMA AHMED NARGIS",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 342,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "KONJENGBAM SURAJ",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 343,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "BARNALI BHATTACHARYYA",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 344,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SWRJISHA BASUMATARY",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 345,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MAITRAYEE MALAKAR",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 346,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ABHINAV CHALIHA",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 347,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "BIRINA BARTHAKUR",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 348,
                "session": "2020-21",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "AVI NUH",
                "guide": "DR. JWMWISHREE BORO"
            },
            {
                "sl": 349,
                "session": "2021-22",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "SHUBHI JAIN",
                "guide": "DR. MAHUYA DEB"
            },
            {
                "sl": 350,
                "session": "2022-23",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "ROSHNI NONGTHOMBAM",
                "guide": "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 351,
                session: "2022-23",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "BINOY JOHN",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 352,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JAHNABI MAHANTA",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 353,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "LOYA AGARWALA",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 354,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SUHANA SULTANA",
                guide: "DR. SYEDA ANJUM AFREEN"
            },
            {
                sl: 355,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "VAIBHAV PURANIK",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 356,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "AYUKHSHYA BARO",
                guide: "DR. SHRADDHA BASU"
            },
            {
                sl: 357,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MANISHA NATH",
                guide: "DR. SHRADDHA BASU"
            },
            {
                sl: 358,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "HUIDROM INDUMALA",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 359,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JULIE BORAH",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 360,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MEDIENO ZHASA",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 361,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ROMILA THOUDAM",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 362,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SANGITA YAMBEM",
                guide: "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 363,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ANWESHA CHUTIA",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 364,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "NZANRHONI PATTON",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 365,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "STEFFINA BEYTI",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 366,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ROHIT KUMAR DEKA",
                guide: "DR. MAHUYA DEB"
            },
            {
                sl: 367,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SHUBHANGI BHAGAWATI",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 368,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "RENGKA TIMUNGPI",
                guide: "DR. SYEDA ANJUM AFREEN"
            },
            {
                sl: 369,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MANASHI NATH",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 370,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "RUKMINI RAJMOHAN",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 371,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "Vanthunglo Murry",
                guide: "DR. MAHUYA DEB"
            },
            {
                sl: 372,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "UDITA DAS",
                guide: "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 373,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JERIN JOSE GEORGE",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 374,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY/CLINICAL",
                name: "ANKUR BARMAN",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 375,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY/CLINICAL",
                name: "MAHIMA SINGHI",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 376,
                session: "2021-22",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "TEMJENSOLA I",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 377,
                session: "2022-23",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "GRIKANCHIE M SANGMA",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 378,
                session: "2022-23",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "NIKITA BISWAKARMA",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 379,
                session: "2023-24",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "QUEENARITY NONGRUM",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 380,
                session: "2023-24",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "UNICE LALRINSIAMKIMI",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 381,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "NIHARIKA GOGOI",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 382,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "JOSEPHINE. H.M.",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 383,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "GITANJALI HAOBAM",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 384,
                session: "2020-21",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ELIZABETH MISAO",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 385,
                session: "2023-24",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ARCKPRAV DEWAN",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 386,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "PRAJUKTI PRIYADARSHINI",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 387,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BALITA SIANGSHAI",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 388,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "SYEDA SHAGUFTAH FARHEEN",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 389,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BAIBHAVI BHAVNA",
                guide: "DR. MADHU MANJARI GOHAIN"
            },
            {
                sl: 390,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BIRINCHI BORAH",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 391,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "KIANZANDI ODYUO",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 392,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "MOIRANGTHEM BIDYAMANI",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 393,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "MOON MOON AHMED",
                guide: "DR. MADHU MANJARI GOHAIN"
            },
            {
                sl: 394,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "KRISTI SAIKIA",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 395,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "NAOREM KELVISH SINGH",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 396,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ADIMA N ARENGH",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 397,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "DEBALINA DEBBARMA",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 398,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "DEBIYA THONGAM",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 399,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "KENEISELHOU CHIELIE",
                guide: "DR. TRIPTI DAS"
            },
            {
                sl: 400,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "APARAJITA GOON",
                guide: "DR. TRIPTI DAS"
            },
            {
                sl: 401,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "MAN KUMAR BARAILY",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 402,
                session: "2019-20",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SANJOY RONGHANG",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 403,
                session: "2021-22",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "CHANDAN JYOTI BEZBORAH",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 404,
                session: "2021-22",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "PIYUSH GUPTA",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 405,
                session: "2022-23",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SPARSH TIWARI",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 406,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "ANKITA SAIKIA",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 407,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "MEGHA PHUKAN",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 408,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SUPONGSANGLA LONGCHAR",
                guide: "DR. SYED SAJIDUL ISLAM"
            },
            {
                sl: 409,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "KARISHMA AZIZ",
                guide: "DR. SYED SAJIDUL ISLAM"
            },
            {
                sl: 410,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "NEEKITA DAOLAGUPU",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 411,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "GEOBAR B MARAK",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 412,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "KUNTAL KALITA",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 413,
                session: "2020-21",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ABUJAM ROMIBALA DEVI",
                guide: "DR. SUSMITA DEY"
            },
            {
                sl: 414,
                session: "2022-23",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SOIBAM PRIYADARSHINI",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 415,
                session: "2022-23",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SANJENBAM JOEL",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 416,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ANIRUDHA CHAKRABORTY",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 417,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "MAYOUSHREE GOGOI",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 418,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SANGEETA BISWAS",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 419,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ARPANA R RABHA",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 420,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "DIPSANU PAUL",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 421,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SENT BUALGA M MARAK",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 422,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ACHINTYA PRAN HAZARIKA",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 423,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "BHITALI BARKAKATI",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 424,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "KRISHNAA BORO",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 425,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "MONISH KUMAR THAPA",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 426,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "PRIYANKU BORAH",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 427,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "KUMAR KRITARTHA KAUSHIK",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 428,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SIKHA RABHA",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 429,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "JOBASMITA SHARMA",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 430,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "TINA CHETRY",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 431,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "NILAKHI LAHAN",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 432,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "CHANDA GWALA",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 433,
                session: "2024-25",
                school: "RSLIS",
                branch: "ZOOLOGY",
                name: "ARUNDHUTI KASHYAP",
                guide: "DR. ARVIND DWIVEDI"
            }
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
                tr.innerHTML =
                    `<td>${row.sl}</td><td>${row.session}</td><td>${row.school}</td><td>${row.branch}</td><td>${row.name}</td><td>${row.guide}</td>`;
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
                btn.onclick = function() {
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
        const data = [{
                sl: 1,
                session: "2024-25",
                school: "RSA",
                branch: "ARCHITECTURE",
                name: "DIKSHA DUTTA",
                guide: "PROF. (DR.) HARI PRASAD AGARWAL"
            },
            {
                sl: 2,
                session: "2024-25",
                school: "RSA",
                branch: "ARCHITECTURE",
                name: "KASTURI BORAH",
                guide: "PROF. (DR.) HARI PRASAD AGARWAL"
            },
            {
                sl: 3,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "BISHWAPRIYA CHUTIA",
                guide: "DR. BHASKARJYOTI GOGOI"
            },
            {
                sl: 4,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "DEBALEENA KASHYAP",
                guide: "DR. BHASKARJYOTI GOGOI"
            },
            {
                sl: 5,
                session: "2021-22",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SAHIBA KHAN",
                guide: "DR. DEBAJIT BORAH"
            },
            {
                sl: 6,
                session: "2022-23",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SAAHANA SYED JUHI",
                guide: "PROF. (DR.) RANJAN DUTTA KALITA"
            },
            {
                sl: 7,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "IXORA WAIKHOM",
                guide: "DR. SIDDHARTHA NARAYAN BORAH"
            },
            {
                sl: 8,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "ANMOL KAUR",
                guide: "DR. RUPSIKHA PATOWARY"
            },
            {
                sl: 9,
                session: "2023-24",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "PANCHAMI BORPUJARI",
                guide: "DR. DEBAJIT BORAH"
            },
            {
                sl: 10,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "AMARTYA DAS",
                guide: "PROF. (DR.) RANJAN DUTTA KALITA"
            },
            {
                sl: 11,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "DEBOSMITA DUTTA",
                guide: "DR. MOUSUMI DAS GOSWAMI"
            },
            {
                sl: 12,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "ANINDITA DUTTA",
                guide: "DR. RUPESH KUMAR"
            },
            {
                sl: 13,
                session: "2024-25",
                school: "RSBSC",
                branch: "BIOTECHNOLOGY",
                name: "SHIKHA RANI BARO",
                guide: "DR. RUPESH KUMAR"
            },
            {
                sl: 14,
                session: "2019-20",
                school: "RSLSC",
                branch: "BOTANY",
                name: "NAMITA DEKA",
                guide: "PROF.(DR.) SARANGA RANJAN PATGIRI"
            },
            {
                sl: 15,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JASMIN SULTANA",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 16,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "RINGPHAMCHUNG KHATRU MOYON",
                guide: "PROF. (DR.) MINARAM NATH"
            },
            {
                sl: 17,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "NARGIS ZAMAN",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 18,
                session: "2020-21",
                school: "RSLSC",
                branch: "BOTANY",
                name: "SABNAM SULTANA",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 19,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "MITALI BARUAH",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 20,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "RICA LANGSTANG",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 21,
                session: "2021-22",
                school: "RSLSC",
                branch: "BOTANY",
                name: "HIMAKSHI KALITA",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 22,
                session: "2022-23",
                school: "RSLSC",
                branch: "BOTANY",
                name: "HAFIUZ ZAMAN AHMED",
                guide: "DR. MANALEE PAUL"
            },
            {
                sl: 23,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "DAIMULU BORO",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 24,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JIREE BASUMATARY",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 25,
                session: "2023-24",
                school: "RSLSC",
                branch: "BOTANY",
                name: "CHETANA HASNU",
                guide: "DR. PRATIKSHYA BORAH"
            },
            {
                sl: 26,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "JONEY LALNUNPUII PACHUAU",
                guide: "DR. RAGHUVAR TIWARY"
            },
            {
                sl: 27,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "GITANJALI KALITA",
                guide: "DR. MANALEE PAUL"
            },
            {
                sl: 28,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "P SUCHITRA SINGHA",
                guide: "DR. UPASNA CHETTRY"
            },
            {
                sl: 29,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "DEEPRAJ KUNDU",
                guide: "DR. UPASHNA CHETTRI"
            },
            {
                sl: 30,
                session: "2024-25",
                school: "RSLSC",
                branch: "BOTANY",
                name: "BIJIT NATH",
                guide: "DR. ANUSHREE BARUAH"
            },
            {
                sl: 31,
                session: "2018-19",
                school: "RSET",
                branch: "CE",
                name: "KHAGEN CHANDRA NATH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 32,
                session: "2019-20",
                school: "RSET",
                branch: "CE",
                name: "CHANDRA UPADHYAYA",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 33,
                session: "2019-20",
                school: "RSET",
                branch: "CE",
                name: "RANU GOWAL SARMAH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 34,
                session: "2023-24",
                school: "RSET",
                branch: "CE",
                name: "ARJUN BARUAH",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 35,
                session: "2024-25",
                school: "RSET",
                branch: "CE",
                name: "Yudhajit Dey",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 36,
                session: "2024-25",
                school: "RSET",
                branch: "CE",
                name: "Arnold Dipak Das",
                guide: "PROF. (DR.) ARNAB SARMA"
            },
            {
                sl: 37,
                session: "2023-24",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "NEEKITA DUTTA",
                guide: "DR. BISWAJIT SARMA"
            },
            {
                sl: 38,
                session: "2023-24",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "TANZINA FIRDOUSHI BORBHUYAN",
                guide: "DR. DEBOJEET SAHU"
            },
            {
                sl: 39,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "RT STARTHRING",
                guide: "DR. ANUP MALAKAR"
            },
            {
                sl: 40,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "TONMOY DOLEY",
                guide: "DR. PUBALEE SARMAH"
            },
            {
                sl: 41,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "Joydeep Chakravorty",
                guide: "DR. BINOYARGHA DAM"
            },
            {
                sl: 42,
                session: "2024-25",
                school: "RSAPS",
                branch: "CHEMISTRY",
                name: "LAKHMINANDAN GOSWAMI",
                guide: "DR. PUBALEE SARMAH"
            },
            {
                sl: 43,
                session: "2021-22",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIKSHYA SAIKIA",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 44,
                session: "2021-22",
                school: "RSC",
                branch: "COMMERCE",
                name: "VASUNDHARA JALAN",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 45,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "ADITI BARUAH",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 46,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SAISANGPUII SAILO",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 47,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SAMARESH NANDY",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 48,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "DARSHANA DEVI",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 49,
                session: "2022-23",
                school: "RSC",
                branch: "COMMERCE",
                name: "SANSKRITA BARMAN",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 50,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "MOHIT CHOUDHARY",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 51,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIPAK JAIN",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 52,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "DIPAK JAIN",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 53,
                session: "2023-24",
                school: "RSC",
                branch: "COMMERCE",
                name: "JIMPY SAUD",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 54,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "MOIRANGTHEM JINA CHANU",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 55,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "ANANYA BANIK",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 56,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "BEENA RONGPIPI",
                guide: "DR. ARUNA DEV ROY"
            },
            {
                sl: 57,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "ANUPRIYA TALUKDAR",
                guide: "PROF. (DR.) SUDIP CHAKRABORTY"
            },
            {
                sl: 58,
                session: "2024-25",
                school: "RSC",
                branch: "COMMERCE",
                name: "UZMA SADAF",
                guide: "DR. RAJDEEP NAG"
            },
            {
                sl: 59,
                session: "2024-25",
                school: "RSET",
                branch: "CSE",
                name: "DHARITRI TALUKDAR",
                guide: "PROF. (DR.) RASHEL SARKAR"
            },
            {
                sl: 60,
                session: "2020-21",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SHWETA SINGH",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 61,
                session: "2020-21",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "WAHIDA RAHMAN",
                guide: "PROF. (DR.) SWABERA ISLAM"
            },
            {
                sl: 62,
                session: "2021-22",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SANGHAMITRA DUWARAH",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 63,
                session: "2021-22",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ASHA YENGKHOM",
                guide: "PROF. (DR.) SWABERA ISLAM"
            },
            {
                sl: 64,
                session: "2022-23",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "TRISHA SAHA",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 65,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "AJANTA DAS",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 66,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "HIMANGGI BORAH",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 67,
                session: "2023-24",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ALORIKA DEB",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 68,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "CHANCHI R MARAK",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 69,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "DEEPSHIKHA KALITA",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 70,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "NABADEEPA KALITA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 71,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "MANABENDRA BARMAN",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 72,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SRIJANI HAZARIKA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 73,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "PREETY SHAH ZIYA",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 74,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "VANLALREMRUATI KHIANGTE",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 75,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "K LENANGH ANGH",
                guide: "DR. SANGHAMITRA HAZARIKA"
            },
            {
                sl: 76,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "ANURADHA DEVI",
                guide: "DR. DURBA DUTTA"
            },
            {
                sl: 77,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "SUPRIYA KONWAR",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 78,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "Nirupam Das",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 79,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "AKALI CHISHI",
                guide: "PROF. (DR.) GAUTAM MAZUMDAR"
            },
            {
                sl: 80,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "Mwikwm Narzary",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 81,
                session: "2024-25",
                school: "RSHSS",
                branch: "ECONOMICS",
                name: "RITUPARNA BORGOHAIN",
                guide: "DR. MD. DELUWAR HOQUE"
            },
            {
                sl: 82,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "KARENG RONGHANGPI",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 83,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHIBENI MERRY",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 84,
                session: "2019-20",
                school: "RSL",
                branch: "ENGLISH",
                name: "BANANI DAS",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 85,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "FAHMIDA AKHTAR",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 86,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "GITIMA DEKA",
                guide: "PROF. (DR.) PRADIP JYOTI MAHANTA"
            },
            {
                sl: 87,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "IFTIKAR ALI AHMED",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 88,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHANDAM CHANU NGANTHOIHANBI",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 89,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "CHINMOYEE DEKA",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 90,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "LAISHRAM PINKY",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 91,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "SERAM RAJESHWARAN SINGH",
                guide: "PROF. (DR.) PRADIP JYOTI MAHANTA"
            },
            {
                sl: 92,
                session: "2020-21",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMASHRI KUMAR",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 93,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "DIMPY BANIA",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 94,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "RASHMIREKHA BARMAN",
                guide: "PROF. (DR.) KRISHNA BARUA"
            },
            {
                sl: 95,
                session: "2021-22",
                school: "RSL",
                branch: "ENGLISH",
                name: "GOURISHIKHA BORGOHAIN",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 96,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "MIRANDA NGANGOM",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 97,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "DEIFY BAKORDOR SUTING",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 98,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "HEMANTA BORA",
                guide: "PROF. (DR.) BORNALI BHUYAN"
            },
            {
                sl: 99,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "KASTURI BORGOHAIN",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 100,
                session: "2022-23",
                school: "RSL",
                branch: "ENGLISH",
                name: "PAYEL DAS",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 101,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "JUBIN NAHAR",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 102,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "NIVEDITA DUTTA",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 103,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "SINJINI SAIKIA",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 104,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "TAJUNGMENLA JAMIR",
                guide: "PROF. (DR.) BORNALI BHUYAN"
            },
            {
                sl: 105,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "TUHISHA GHOSH",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 106,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "ABAMEDA GIRI KHARMALKI",
                guide: "DR. PRONAMI BHATTACHARYYA"
            },
            {
                sl: 107,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "ADITI GHOSH",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 108,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "PUJA KUMARI",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 109,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "RUMA DEBNATH",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 110,
                session: "2023-24",
                school: "RSL",
                branch: "ENGLISH",
                name: "SATAVISHA HAZARIKA",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 111,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "NANCY PANGEIJAM",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 112,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "MAHFUZ AHMED",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 113,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "RT SHANGWARHRING",
                guide: "DR. BAISHALEE RAJKHOWA"
            },
            {
                sl: 114,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "BHASKAR KOUSHIK DAS",
                guide: "DR. STUTI GOSWAMI"
            },
            {
                sl: 115,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "T.LALAWMPUII",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 116,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "C.LALNUNPUII",
                guide: "DR. JYOTI MISHRA"
            },
            {
                sl: 117,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "PRANITA KALITA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 118,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "ARTIBIRTH CH MARAK",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 119,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "JENIFAR SABNAM",
                guide: "DR. JASMINE CHOUDHURY"
            },
            {
                sl: 120,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMTRINA RABHA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 121,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HIMADRI BORAH",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 122,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "BHASWATI CHETIA",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 123,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "NIJWM BASUMATARY",
                guide: "PROF. (DR.) INDRANI SINGH RAI"
            },
            {
                sl: 124,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "PINAZ MIRZA",
                guide: "DR. PRABUDDHA GHOSH"
            },
            {
                sl: 125,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "HEMEN JYOTI DAS",
                guide: "DR. PRABUDDHA GHOSH"
            },
            {
                sl: 126,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "ANGELINA THANGJAM",
                guide: "DR. PAMPI BASUMATARY"
            },
            {
                sl: 127,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "DIVYAJYOTI DAS",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 128,
                session: "2024-25",
                school: "RSL",
                branch: "ENGLISH",
                name: "JIMLI DEKA",
                guide: "PROF. (DR.) TUSHTI SHARMA"
            },
            {
                sl: 129,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "ROBERT LYNDOH",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 130,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "R LALRINNGHETI",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 131,
                session: "2023-24",
                school: "RSEES",
                branch: "ENVIRONMENTAL SCIENCE",
                name: "NAPHIBANIARLIN KSFIAR",
                guide: "DR. PALLABI BORAH"
            },
            {
                sl: 132,
                session: "2019-20",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "KISHAN BAGDI",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 133,
                session: "2022-23",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "GAURAV MORAL",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 134,
                session: "2022-23",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "LALREMRUATA VARTE",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 135,
                session: "2023-24",
                school: "RSFA",
                branch: "FINE ARTS",
                name: "ANKUR HAZARIKA",
                guide: "DR. MOUSUMI DEKA"
            },
            {
                sl: 136,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "SYEDA JADIDA AKHTAR",
                guide: "DR. SHAGUFTA RIZWANA"
            },
            {
                sl: 137,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "DIPANJALI DAS",
                guide: "DR. PREETISAGAR TALUKDAR"
            },
            {
                sl: 138,
                session: "2024-25",
                school: "RSBSC",
                branch: "FOOD TECHNOLOGY",
                name: "RAHUL BORDOLOI",
                guide: "PROF. (DR.) PRANATI DAS"
            },
            {
                sl: 139,
                session: "2024-25",
                school: "RSLSC",
                branch: "FORESTRY",
                name: "SATYAMJIT NEOG",
                guide: "DR. DEMSAI REANG"
            },
            {
                sl: 140,
                session: "2024-25",
                school: "RSLSC",
                branch: "FORESTRY",
                name: "CHICHAKHA DEV BARMA",
                guide: "DR. PAUL LALREMSANG"
            },
            {
                "sl": 141,
                "session": "2021-22",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "HASNE TOUFIKI",
                "guide": "PROF.(DR.) B S MIPUN"
            },
            {
                "sl": 142,
                "session": "2022-23",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "DIPSHIKHA KALITA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 143,
                "session": "2023-24",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "EILEEN BETSY MYLLIEMNGAP",
                "guide": "PROF.(DR.) B S MIPUN"
            },
            {
                "sl": 144,
                "session": "2023-24",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "SONIA SAMJETSABAM",
                "guide": "DR. TRISHNA CHANGKAKATI"
            },
            {
                "sl": 145,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "BIPLAB SARKAR",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 146,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "GITALI. HAZARIKA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 147,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "MRIDULA KALITA",
                "guide": "DR. ANNESHA BORAH"
            },
            {
                "sl": 148,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "KAKALI MEDHI",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 149,
                "session": "2024-25",
                "school": "RSEES",
                "branch": "GEOGRAPHY",
                "name": "GANESH CHANDRA DAS",
                "guide": "PROF. (DR.) D.K. NAYAK"
            },
            {
                "sl": 150,
                "session": "2019-20",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JORDAN THAPA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 151,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "POOJA BHATTACHARJEE",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 152,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PHOWLTHA SELTUN",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 153,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PUSPA DEORI",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 154,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "FREDDIE KHAWLHRING",
                "guide": "DR. MITALI KALITA"
            },
            {
                "sl": 155,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "TANZIM MASUD",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 156,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "RASHMIREKHA HAZARIKA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 157,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "CHIDORA R MARAK",
                "guide": "DR. MITALI KALITA"
            },
            {
                "sl": 158,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "PHURAILATPAM AARTI DEVI",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 159,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "AKANGSHA KALITA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 160,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "ALEXANDER D SANGMA",
                "guide": "DR. SUSHMITA BANERJEE"
            },
            {
                "sl": 161,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "BANTI TALUKDAR",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 162,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "BIKASHITA SAIKIA",
                "guide": "DR. SUSMITA HAZARIKA"
            },
            {
                "sl": 163,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "HIMANGSHU SHEKHAR BORA",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 164,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JUDITH LALNIVAR INTOVATE",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 165,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JURI DEKA",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 166,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "ROTHANGLIANA",
                "guide": "PROF. (DR.) SAJAL NAG"
            },
            {
                "sl": 167,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "JINI RANI BORO",
                "guide": "DR. SUSHMITA BANERJEE"
            },
            {
                "sl": 168,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "HISTORY",
                "name": "NH HINGNAMYI BLESSING NEWME",
                "guide": "DR. SAIKHOM RONEL SINGH"
            },
            {
                "sl": 169,
                "session": "2020-21",
                "school": "RSIT",
                "branch": "I.T.",
                "name": "ASHOK KUMAR SARKAR",
                "guide": "DR. ANUPAM DAS"
            },
            {
                "sl": 170,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RASHMIREKHA BORAH",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 171,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "ANKITA SARMA",
                "guide": "PROF. (DR.) D.N. SINGH"
            },
            {
                "sl": 172,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RUMI TALUKDAR",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 173,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "KANGKANA TALUKDAR",
                "guide": "DR. SYEDA ANJUM AFREEN"
            },
            {
                "sl": 174,
                "session": "2024-25",
                "school": "RSMAS",
                "branch": "PHYSIOTHERAPY",
                "name": "SOMYATA CHITARANJAN SATPATHY SARMA",
                "guide": "PROF. (DR.) ABHIJIT DUTTA"
            },
            {
                "sl": 175,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "MAYURI OJAH",
                "guide": "DR. MADHUSMITA KOCH"
            },
            {
                "sl": 176,
                "session": "2024-25",
                "school": "CISR",
                "branch": "INTERDISCIPLINARY",
                "name": "RUCHI BHARDWAJ",
                "guide": "DR. SHRADDHA BASU"
            },
            {
                "sl": 177,
                "session": "2018-19",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "PREETILATA KUMARI",
                "guide": "DR. HAOGINLEN. CHONGLOI"
            },
            {
                "sl": 178,
                "session": "2022-23",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "UPEN BORA",
                "guide": "DR. RASHMI SARMAH"
            },
            {
                "sl": 179,
                "session": "2023-24",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "BRISTI GOGOI",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 180,
                "session": "2023-24",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "ZAKIR HUSSAIN",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 181,
                "session": "2024-25",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "SAMUEL LALBELSANG",
                "guide": "PROF. (DR.) S. C. NAYAK"
            },
            {
                "sl": 182,
                "session": "2024-25",
                "school": "RSCOM",
                "branch": "JOURNALISM AND MASS COMMUNICATION",
                "name": "AMIT BARUAH",
                "guide": "DR. RASHMI SARMAH"
            },
            {
                "sl": 183,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BINU HAZARIKA KASHYAP",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 184,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RASHMI REKHA PHUKAN",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 185,
                "session": "2019-20",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MAILINDA LYNSHING",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 186,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ABIDA SULTANA LASKAR",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 187,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DILIP KUMAR BORA",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 188,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DR RATHINDRA BHUYAN",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 189,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRONAB KR NATH",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 190,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KRISHNA DAS",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 191,
                "session": "2021-22",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "POMPI DEKA",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 192,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BONNIE SARMA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 193,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NARGIS CHOUDHURY",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 194,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHAHNAJ SULTANA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 195,
                "session": "2022-23",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SONI TEP",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 196,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BEATIFY LUNGDOH",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 197,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISH KUMAR DAS",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 198,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BHASWATI BORAH",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 199,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ANUPAL DUTTA PATHAK",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 200,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BONANI MAHANTA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 201,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JAYSHREE SHARMA",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 202,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NEHA VERMA",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 203,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BEAUTY NEOG",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 204,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BRANDON MESHAN PAJAT",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 205,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "LALSOLOMON DARNEI",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 206,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRITY GUPTA",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 207,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RAJASHRI HAZARIKA",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 208,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SATAVISA BORA",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 209,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHRUTI HAZARIKA BORPUJARI",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 210,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SRISTI AGARWAL",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 211,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "UPASHANA GOSWAMI",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 212,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BAMERI DONDOR KHARSOHTUN",
                "guide": "PROF. (DR.) H. C. NATH"
            },
            {
                "sl": 213,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BICKEY PRASAD",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 214,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JHARNA AKRAM",
                "guide": "DR. ANJUMAN A. BEGUM"
            },
            {
                "sl": 215,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NITA RIJIJU",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 216,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PANKHI DEVI",
                "guide": "PROF. (DR.) B. C. BAROOAH"
            },
            {
                "sl": 217,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "POOJA DEVI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 218,
                "session": "2023-24",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BENZIR ZAMAN",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 219,
                "session": "2024-25",
                "school": "RSL",
                "branch": "LAW & ADMINISTRATION",
                "name": "ASIF ALI ANSARI",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 220,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KENEISENUO RUTSA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 221,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DIANA TRICIA TLANG",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 222,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISHA DEKA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 223,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NIMISHA SHARMA",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 224,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "ANISHA HAQUE",
                "guide": "PROF. (DR.) YSR MURTHY"
            },
            {
                "sl": 225,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BIRENDRA KUMAR BARMAN",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 226,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "NAPHISABET KHARKONGOR",
                "guide": "PROF. (DR.) THANESWAR KALITA"
            },
            {
                "sl": 227,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RANI CHYRMANG",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 228,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "OINAM MITRABATI DEVI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 229,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "HIMANI RABHA",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 230,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "CARLOS NONGSIEJ",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 231,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "BIMAN NATH",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 232,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PRIYANGSHU GOSWAMI",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 233,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "DIPSHIKHA ROY CHOWDHURY",
                "guide": "PROF. (DR.) PREETI GUPTA"
            },
            {
                "sl": 234,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "JOYEETA RAJKHOWA",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 235,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SARMISTHA CHAKRABARTY",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 236,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "MANISHA BORTHAKUR",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 237,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "RASHMI REKHA SAIKIA",
                "guide": "DR. PRANITA CHAUDHURY"
            },
            {
                "sl": 238,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SHRISTI TODI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 239,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "PURBA GOSWAMI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 240,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "KANKANA CHOUDHURY",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 241,
                "session": "2024-25",
                "school": "RSLA",
                "branch": "LAW & ADMINISTRATION",
                "name": "SUMITRA DEVI",
                "guide": "PROF. (DR.) AJIT KAUSHAL"
            },
            {
                "sl": 242,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "KONGKINA NATH",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 243,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "PRASANNA KUMAR KONCH",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 244,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "MERINA AHMED",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 245,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "BIKRAMADITYA BARMAN",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 246,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "NIHARIKA SAIKIA",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 247,
                "session": "2024-25",
                "school": "RSLISC",
                "branch": "LIBRARY SCIENCE",
                "name": "BHAGABATI NARZARY",
                "guide": "DR. MUKUTOR RAHMAN"
            },
            {
                "sl": 248,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "Basera K. Sangma",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 249,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "MANJUSHREE DEVI",
                "guide": "DR. HIRAK JYOTI HAZARIKA"
            },
            {
                "sl": 250,
                "session": "2024-25",
                "school": "RSLIS",
                "branch": "LIBRARY SCIENCE",
                "name": "KISHUR NATH",
                "guide": "DR. NILANJANA PURKAYASTHA"
            },
            {
                "sl": 251,
                "session": "2017-18",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "ROSHINI SAIKIA",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 252,
                "session": "2019-20",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MAHENDRA PRASAD",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 253,
                "session": "2019-20",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "KALYANI GOHAIN",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 254,
                "session": "2020-21",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "ASHIM KUMAR SARMAH",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 255,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "AISHWARYA GOSWAMI",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 256,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "DHRUBAJYOTI THAKURIA",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 257,
                "session": "2021-22",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NEHA TIWARI",
                "guide": "PROF. (DR.) S.P. SINGH"
            },
            {
                "sl": 258,
                "session": "2022-23",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MONALISA KONWAR",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 259,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NILIMOY NATH",
                "guide": "DR. DARSHANA BHAGOBATI"
            },
            {
                "sl": 260,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "SHARIF AHMED",
                "guide": "DR. DARSHANA BHAGOBATI"
            },
            {
                "sl": 261,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "INDIRA DEV ROY",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 262,
                "session": "2023-24",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "BRISTY SRIVASTAVA",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 263,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "SUSHMITA KONJENGBAM",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 264,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "RIMA DAS",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 265,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NAZVI NASEEM",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 266,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "UTTAM BORAH",
                "guide": "DR. ARPEE SAIKIA"
            },
            {
                "sl": 267,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "KUHELI DUTTA",
                "guide": "DR. SUMAN AGARWAL"
            },
            {
                "sl": 268,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MITHINGA MUSHAHARY",
                "guide": "DR. SUMAN AGARWAL"
            },
            {
                "sl": 269,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NEELU SWAMI",
                "guide": "PROF. (DR.) D.N. SINGH"
            },
            {
                "sl": 270,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "NASREEN FIRDAUS CHOWDHURY",
                "guide": "PROF. (DR.) GEORGE AP"
            },
            {
                "sl": 271,
                "session": "2024-25",
                "school": "RSB",
                "branch": "MANAGEMENT",
                "name": "MOHINA AKHTARA",
                "guide": "DR. RISHI CHAKRAVARTY"
            },
            {
                "sl": 272,
                "session": "2020-21",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "SINAM RAJKISHORE SINGHA",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 273,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "MARDOR WANRI SYNREM",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 274,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "MUSTAK EUCHUF",
                "guide": "PROF. (DR.) ANURADHA DEVI"
            },
            {
                "sl": 275,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "PUNAM DAS",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 276,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "H IMO MANI SINGHA",
                "guide": "PROF. (DR.) ANURADHA DEVI"
            },
            {
                "sl": 277,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "FLORENCE DAIMARI",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 278,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "KARISMITA MEDHI",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 279,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "KHRUNIELU LOHE",
                "guide": "DR. BIMALENDU KALITA"
            },
            {
                "sl": 280,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "POMPI DAS",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 281,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "ANANYA SHILPI",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 282,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "Nandita Saikia",
                "guide": "PROF. (DR.) KAMAL DEBNATH"
            },
            {
                "sl": 283,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "OINDRILA ROY CHOWDHURY",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 284,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "MATHEMATICS",
                "name": "AKASH PAWAR",
                "guide": "DR. BAPAN KALITA"
            },
            {
                "sl": 285,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "ANUPAMA MOIRANGTHEM",
                "guide": "DR. BIRSON INGTI"
            },
            {
                "sl": 286,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "SYED HADI ABDUL ROUF",
                "guide": "DR. NIRAJ SINGH"
            },
            {
                "sl": 287,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "KOWSALYA",
                "guide": "DR. SUSHMITA PAUL"
            },
            {
                "sl": 288,
                "session": "2023-24",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "RAMKRISHNA ROY",
                "guide": "DR. BIRSON INGTI"
            },
            {
                "sl": 289,
                "session": "2024-25",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "NONGMAITHEM BISHWANATH SINGH",
                "guide": "PROF. (DR.) AMLAN DAS"
            },
            {
                "sl": 290,
                "session": "2024-25",
                "school": "RSBSC",
                "branch": "MICRO-BIOLOGY",
                "name": "AFRID AHMED",
                "guide": "DR. PANKAJ LOSAN SHARMA"
            },
            {
                "sl": 291,
                "session": "2023-24",
                "school": "RSMAS",
                "branch": "NUTRITION & DIETETICS",
                "name": "JEBIN SULTANA",
                "guide": "PROF. (DR.) PRANATI DAS"
            },
            {
                "sl": 292,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "GUJJALA SAI SRI HARSHA",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 293,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "RUNA CHAKRAVORTY",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 294,
                "session": "2020-21",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "KAMAL DEKA",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 295,
                "session": "2021-22",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARUP CHAKRABORTY",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 296,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "MUKINUR HUSSAIN",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 297,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "HADIUZ ZAMAN",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 298,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "HIMANTA BISWA SAIKIA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 299,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PAYAL DASGUPTA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 300,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "DR. SHAHINUR ISLAM",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 301,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "BHASKAR JYOTI PATHAK",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 302,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "MUZAMMAL HOQUE MALLAH",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 303,
                "session": "2022-23",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "NILUTPAL HAZARIKA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 304,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "LOBSANG TENZING KOMU",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 305,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SADHANA SHARMA",
                "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY"
            },
            {
                "sl": 306,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SUMI BARMAN",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 307,
                "session": "2023-24",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PRIYANKA DAS",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 308,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "NEELAKSHI SHARMA",
                "guide": "PROF. (DR.) BIPUL NATH"
            },
            {
                "sl": 309,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARPAN SEN",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 310,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "SABNAM NARGIS",
                "guide": "PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY"
            },
            {
                "sl": 311,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "DR. RAKIBUR RAHMAN",
                "guide": "PROF. (DR.) PRANABESH SIKDAR"
            },
            {
                "sl": 312,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "Paramjyoti Adhikary",
                "guide": "PROF. (DR.) ATANU BHATTACHARJEE"
            },
            {
                "sl": 313,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "PALLAB KUMAR NATH",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 314,
                "session": "2024-25",
                "school": "RSP",
                "branch": "PHARMACY",
                "name": "ARGHYA SAHA CHOWDHURY",
                "guide": "PROF. (DR.) PRITHVIRAJ CHAKRABORTY"
            },
            {
                "sl": 315,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "ARUP SAIKIA",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 316,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "BIDISH BORAH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 317,
                "session": "2022-23",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "PARTHA PRATIM BORAH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 318,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "AIDASHISHA BAREH",
                "guide": "DR. BORNALI CHETIA"
            },
            {
                "sl": 319,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "VIOLINA DAS",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 320,
                "session": "2023-24",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "LONGKHRAW KHONGLANG",
                "guide": "DR. SUJATA DEB"
            },
            {
                "sl": 321,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "SNARMON LATO",
                "guide": "DR. SUJATA DEB"
            },
            {
                "sl": 322,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "RAHUL DEY",
                "guide": "DR. SANCHITA ROY"
            },
            {
                "sl": 323,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "GOURANGA MEDHI",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 324,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "MANAS JYOTI NATH",
                "guide": "DR. DEVIKA PHUKAN"
            },
            {
                "sl": 325,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "USHA RANI SWARGIARY",
                "guide": "DR. GITANJAL DEKA"
            },
            {
                "sl": 326,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "MADHU RAM RABIDAS",
                "guide": "DR. BORNALI CHETIA"
            },
            {
                "sl": 327,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "TAPAS SEN",
                "guide": "DR. SANCHITA ROY"
            },
            {
                "sl": 328,
                "session": "2024-25",
                "school": "RSAPS",
                "branch": "PHYSICS",
                "name": "PRABHAT SHARMA",
                "guide": "DR. MAIDUL ISLAM"
            },
            {
                "sl": 329,
                "session": "2020-21",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SHELZA JALAN",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 330,
                "session": "2021-22",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "LIONG M PHOM",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 331,
                "session": "2021-22",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MUSTAFA SYED IHTIMUM ALAM",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 332,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "NAGENDRA NATH GOGOI",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 333,
                "session": "2022-23",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "TANJEELA MEHBOOB",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 334,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "PRAJOYEETA KASHYAP",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 335,
                "session": "2023-24",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SUBHASH BARO",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 336,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MONISHA BORDOLOI",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 337,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SHANGKY KHONGWAR",
                "guide": "DR. Y MONOJIT SINGHA"
            },
            {
                "sl": 338,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ROZY RANI SARMAH",
                "guide": "DR. DHIRAJ KUMAR BORKOTOKY"
            },
            {
                "sl": 339,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "TH TREESHALI DEVI",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 340,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ELCHIRA R MARAK",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 341,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ANJUMA AHMED NARGIS",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 342,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "KONJENGBAM SURAJ",
                "guide": "DR. BABA CHANDRA SINGHA"
            },
            {
                "sl": 343,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "BARNALI BHATTACHARYYA",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 344,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "SWRJISHA BASUMATARY",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 345,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "MAITRAYEE MALAKAR",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 346,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "ABHINAV CHALIHA",
                "guide": "DR. SUSHMITA HOSHI NONGMEIKAPAM"
            },
            {
                "sl": 347,
                "session": "2024-25",
                "school": "RSHSS",
                "branch": "POLITICAL SCIENCE",
                "name": "BIRINA BARTHAKUR",
                "guide": "DR. KRISHANGI SAIKIA"
            },
            {
                "sl": 348,
                "session": "2020-21",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "AVI NUH",
                "guide": "DR. JWMWISHREE BORO"
            },
            {
                "sl": 349,
                "session": "2021-22",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "SHUBHI JAIN",
                "guide": "DR. MAHUYA DEB"
            },
            {
                "sl": 350,
                "session": "2022-23",
                "school": "RSBAS",
                "branch": "PSYCHOLOGY",
                "name": "ROSHNI NONGTHOMBAM",
                "guide": "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 351,
                session: "2022-23",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "BINOY JOHN",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 352,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JAHNABI MAHANTA",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 353,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "LOYA AGARWALA",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 354,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SUHANA SULTANA",
                guide: "DR. SYEDA ANJUM AFREEN"
            },
            {
                sl: 355,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "VAIBHAV PURANIK",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 356,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "AYUKHSHYA BARO",
                guide: "DR. SHRADDHA BASU"
            },
            {
                sl: 357,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MANISHA NATH",
                guide: "DR. SHRADDHA BASU"
            },
            {
                sl: 358,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "HUIDROM INDUMALA",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 359,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JULIE BORAH",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 360,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MEDIENO ZHASA",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 361,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ROMILA THOUDAM",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 362,
                session: "2023-24",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SANGITA YAMBEM",
                guide: "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 363,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ANWESHA CHUTIA",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 364,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "NZANRHONI PATTON",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 365,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "STEFFINA BEYTI",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 366,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "ROHIT KUMAR DEKA",
                guide: "DR. MAHUYA DEB"
            },
            {
                sl: 367,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "SHUBHANGI BHAGAWATI",
                guide: "DR. FARIZA SAIDIN"
            },
            {
                sl: 368,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "RENGKA TIMUNGPI",
                guide: "DR. SYEDA ANJUM AFREEN"
            },
            {
                sl: 369,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "MANASHI NATH",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 370,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "RUKMINI RAJMOHAN",
                guide: "DR. JWMWISHREE BORO"
            },
            {
                sl: 371,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "Vanthunglo Murry",
                guide: "DR. MAHUYA DEB"
            },
            {
                sl: 372,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "UDITA DAS",
                guide: "DR. TAHERA HOQUE MOZUMDAR"
            },
            {
                sl: 373,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY",
                name: "JERIN JOSE GEORGE",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 374,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY/CLINICAL",
                name: "ANKUR BARMAN",
                guide: "DR. QUEEN DEKA"
            },
            {
                sl: 375,
                session: "2024-25",
                school: "RSBAS",
                branch: "PSYCHOLOGY/CLINICAL",
                name: "MAHIMA SINGHI",
                guide: "DR. PRINCE CP"
            },
            {
                sl: 376,
                session: "2021-22",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "TEMJENSOLA I",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 377,
                session: "2022-23",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "GRIKANCHIE M SANGMA",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 378,
                session: "2022-23",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "NIKITA BISWAKARMA",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 379,
                session: "2023-24",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "QUEENARITY NONGRUM",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 380,
                session: "2023-24",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "UNICE LALRINSIAMKIMI",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 381,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "NIHARIKA GOGOI",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 382,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "JOSEPHINE. H.M.",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 383,
                session: "2024-25",
                school: "RSHSS",
                branch: "PUBLIC ADMINISTRATION",
                name: "GITANJALI HAOBAM",
                guide: "PROF. (DR.) MEENU SHARMA"
            },
            {
                sl: 384,
                session: "2020-21",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ELIZABETH MISAO",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 385,
                session: "2023-24",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ARCKPRAV DEWAN",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 386,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "PRAJUKTI PRIYADARSHINI",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 387,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BALITA SIANGSHAI",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 388,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "SYEDA SHAGUFTAH FARHEEN",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 389,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BAIBHAVI BHAVNA",
                guide: "DR. MADHU MANJARI GOHAIN"
            },
            {
                sl: 390,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "BIRINCHI BORAH",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 391,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "KIANZANDI ODYUO",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 392,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "MOIRANGTHEM BIDYAMANI",
                guide: "DR. T LUITHUIWUNG AWUNGSHI"
            },
            {
                sl: 393,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "MOON MOON AHMED",
                guide: "DR. MADHU MANJARI GOHAIN"
            },
            {
                sl: 394,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "KRISTI SAIKIA",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 395,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "NAOREM KELVISH SINGH",
                guide: "DR. PRIYANKA PATOWARI"
            },
            {
                sl: 396,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIAL WORK",
                name: "ADIMA N ARENGH",
                guide: "DR. MOSES NEWME"
            },
            {
                sl: 397,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "DEBALINA DEBBARMA",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 398,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "DEBIYA THONGAM",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 399,
                session: "2022-23",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "KENEISELHOU CHIELIE",
                guide: "DR. TRIPTI DAS"
            },
            {
                sl: 400,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "APARAJITA GOON",
                guide: "DR. TRIPTI DAS"
            },
            {
                sl: 401,
                session: "2024-25",
                school: "RSHSS",
                branch: "SOCIOLOGY",
                name: "MAN KUMAR BARAILY",
                guide: "DR. SANGEETA DAS"
            },
            {
                sl: 402,
                session: "2019-20",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SANJOY RONGHANG",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 403,
                session: "2021-22",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "CHANDAN JYOTI BEZBORAH",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 404,
                session: "2021-22",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "PIYUSH GUPTA",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 405,
                session: "2022-23",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SPARSH TIWARI",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 406,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "ANKITA SAIKIA",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 407,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "MEGHA PHUKAN",
                guide: "PROF. (DR.) SOUMITRA SEN"
            },
            {
                sl: 408,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "SUPONGSANGLA LONGCHAR",
                guide: "DR. SYED SAJIDUL ISLAM"
            },
            {
                sl: 409,
                session: "2023-24",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "KARISHMA AZIZ",
                guide: "DR. SYED SAJIDUL ISLAM"
            },
            {
                sl: 410,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "NEEKITA DAOLAGUPU",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 411,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "GEOBAR B MARAK",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 412,
                session: "2024-25",
                school: "RSTTM",
                branch: "TRAVEL & TOURISM MANAGEMENT",
                name: "KUNTAL KALITA",
                guide: "DR. INDRAJIT DUTTA"
            },
            {
                sl: 413,
                session: "2020-21",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ABUJAM ROMIBALA DEVI",
                guide: "DR. SUSMITA DEY"
            },
            {
                sl: 414,
                session: "2022-23",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SOIBAM PRIYADARSHINI",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 415,
                session: "2022-23",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SANJENBAM JOEL",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 416,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ANIRUDHA CHAKRABORTY",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 417,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "MAYOUSHREE GOGOI",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 418,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SANGEETA BISWAS",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 419,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ARPANA R RABHA",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 420,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "DIPSANU PAUL",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 421,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SENT BUALGA M MARAK",
                guide: "DR. DHARMESWAR BARHOI"
            },
            {
                sl: 422,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "ACHINTYA PRAN HAZARIKA",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 423,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "BHITALI BARKAKATI",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 424,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "KRISHNAA BORO",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 425,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "MONISH KUMAR THAPA",
                guide: "DR. PARIMAL C RAY"
            },
            {
                sl: 426,
                session: "2023-24",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "PRIYANKU BORAH",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 427,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "KUMAR KRITARTHA KAUSHIK",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 428,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "SIKHA RABHA",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 429,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "JOBASMITA SHARMA",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 430,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "TINA CHETRY",
                guide: "DR. ANNU KUMARI"
            },
            {
                sl: 431,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "NILAKHI LAHAN",
                guide: "DR. ARVIND DWIVEDI"
            },
            {
                sl: 432,
                session: "2024-25",
                school: "RSLSC",
                branch: "ZOOLOGY",
                name: "CHANDA GWALA",
                guide: "DR. ABESH CHAKRABORTY"
            },
            {
                sl: 433,
                session: "2024-25",
                school: "RSLIS",
                branch: "ZOOLOGY",
                name: "ARUNDHUTI KASHYAP",
                guide: "DR. ARVIND DWIVEDI"
            }
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
                tr.innerHTML =
                    `<td>${row.sl}</td><td>${row.session}</td><td>${row.school}</td><td>${row.branch}</td><td>${row.name}</td><td>${row.guide}</td>`;
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
                btn.onclick = function() {
                    currentPage = i;
                    displayTable(currentPage);
                };
                pagination.appendChild(btn);
            }
        }

        displayTable(currentPage);
    </script>
@endpush
