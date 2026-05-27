@extends('frontend/new-master')
@section('content')
    <style>
        .rgu-gde-section {
            background: #eef1f7;
            padding: 7rem 0;
        }

        .rgu-gde-top {
            text-align: center;
            margin-bottom: 6rem;
        }

        .rgu-gde-main-title {
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 3rem;
        }

        .rgu-gde-text {
            max-width: 120rem;
            margin: 0 auto 2rem;
            font-size: 1.8rem;
            line-height: 1.7;
            color: #555;
        }

        .rgu-gde-contact {
            margin-top: 4rem;
        }

        .rgu-gde-contact h4 {
            font-size: 2.5rem;
            color: #29467a;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .rgu-gde-contact p {
            font-size: 2rem;
            line-height: 1.7;
            margin-bottom: .5rem;
            color: #555;
        }

        .rgu-gde-course-wrap {
            background: #f5f6f8;
            border-radius: 4rem;
            padding: 5rem;
        }

        .rgu-gde-course-head {
            display: flex;
            justify-content: space-between;
            gap: 3rem;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .rgu-gde-course-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            line-height: 1.2;
            font-weight: 700;
            color: #29467a;
            max-width: 45rem;
        }

        .rgu-gde-tabs {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .rgu-gde-tab {
            border: 1px solid #d8dde8;
            background: #fff;
            color: #555;
            padding: 1.4rem 2rem;
            border-radius: .8rem;
            font-size: 1.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .3s ease;
        }

        .rgu-gde-tab.active {
            background: #d5672d;
            border-color: #d5672d;
            color: #fff;
        }

        .rgu-gde-note {
            font-size: 1.8rem;
            line-height: 1.9;
            color: #666;
            margin-bottom: 3rem;
        }

        .rgu-gde-content {
            display: none;
        }

        .rgu-gde-content.active {
            display: block;
        }

        .rgu-gde-table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 1rem;
        }

        .rgu-gde-table thead {
            background: #cfe0f8;
        }

        .rgu-gde-table th {
            padding: 1.8rem;
            text-align: left;
            font-size: 1.7rem;
            color: #29467a;
            font-weight: 700;
            border: 1px solid #d8dde8;
        }

        .rgu-gde-table td {
            padding: 1.8rem;
            font-size: 1.5rem;
            line-height: 1.8;
            color: #555;
            border: 1px solid #d8dde8;
            vertical-align: top;
            background: #fff;
        }

        .hidden-row {
            display: none;
        }

        .rgu-gde-load-wrap {
            text-align: center;
            margin-top: 2.5rem;
        }

        .rgu-gde-load-btn {
            background: #d5672d;
            color: #fff;
            border: none;
            padding: 1.2rem 2.6rem;
            border-radius: .6rem;
            font-size: 1.3rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .3s ease;
        }

        .rgu-gde-load-btn:hover {
            background: #bc5724;
        }

        @media (max-width: 991px) {

            .rgu-gde-main-title {
                font-size: 3.8rem;
            }

            .rgu-gde-course-wrap {
                padding: 4rem 3rem;
            }

            .rgu-gde-course-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .rgu-gde-course-title {
                font-size: 3.2rem;
                max-width: 100%;
            }
        }

        @media (max-width: 767px) {

            .rgu-gde-section {
                padding: 5rem 0;
            }

            .rgu-gde-main-title {
                font-size: 2.8rem;
            }

            .rgu-gde-course-wrap {
                padding: 3rem 2rem;
                border-radius: 2.5rem;
            }

            .rgu-gde-course-title {
                font-size: 2.6rem;
            }

            .rgu-gde-tabs {
                width: 100%;
            }

            .rgu-gde-tab {
                width: 100%;
            }

            .rgu-gde-table th,
            .rgu-gde-table td {
                min-width: 20rem;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">General Elective</h1>
            <div class="pg-hero-breadcrumb">
                Admission / Admission Overview / General Elective
            </div>
        </div>

    </section>

    <!-- Generic & Discipline Specific Electives Section -->
    <section class="rgu-gde-section">

        <div class="container">

            <!-- TOP CONTENT -->
            <div class="rgu-gde-top">

                <h2 class="rgu-gde-main-title">
                    Generic And Discipline Specific Electives
                </h2>

                <p class="rgu-gde-text">
                    Generic Electives (GE) are those subjects which are to be opted by students
                    of a department offered by other departments of the University. Generic
                    Electives are offered only to undergraduate students. A student has to opt
                    and study two GE courses from 1st to 4th Semester comprising a total of 24
                    credits.
                </p>

                <p class="rgu-gde-text">
                    For example, a student of B.A. Political Science (H) can choose one course
                    from Economics and another from Fine Arts. A basket of courses is available
                    to students from all the schools of the University. As specified in the CBCS
                    system and suggested by UGC, any student wishing to earn extra credits, over
                    and above the normal credits, can additionally opt for 2 GE courses in the
                    last 2 semesters and this will also be reflected in their transcripts.
                </p>

                <p class="rgu-gde-text">
                    Discipline Specific Electives (DSE) are elective courses related to a
                    programme opted by a student aimed to enhance student's in-depth subject
                    knowledge and can be chosen from a basket of many subjects offered by the
                    department. The DSE subjects for UG courses are offered in last two semesters
                    while PG students have to choose 1 to 3 courses in every semester depending
                    upon the courses offered in the program. For Example, B.Sc. (H) Chemistry
                    student can opt for subjects on Organic or Inorganic or Physical Chemistry or
                    any other subjects offered by the Department of Chemistry.
                </p>

                <!-- Contact -->
                <div class="rgu-gde-contact">

                    <h4>Contact Details:</h4>

                    <p>
                        <strong>Mr. Jugal Kishore Bhattacharyya</strong>
                    </p>

                    <p>
                        Assistant Professor, Department of Economics, Co-ordinator,
                        <br> AEDC/AECC/GE Courses, The Assam Royal Global University
                    </p>

                    <p>
                        <strong>Contact No:</strong> 69000-84669
                    </p>

                </div>

            </div>

            <!-- COURSE SECTION -->
            <div class="rgu-gde-course-wrap">

                <div class="rgu-gde-course-head">

                    <h2 class="rgu-gde-course-title">
                        List Of Generic Elective Course For All Courses
                    </h2>

                    <!-- Tabs -->
                    <div class="rgu-gde-tabs">

                        <button class="rgu-gde-tab active" data-tab="gde-tab-1">
                            Generic Elective - (List-1)
                        </button>

                        <button class="rgu-gde-tab" data-tab="gde-tab-2">
                            Generic Elective - (List-2)
                        </button>

                    </div>

                </div>

                <!-- TAB 1 -->
                <div class="rgu-gde-content active" id="gde-tab-1">

                    <p class="rgu-gde-note">
                        Students will choose a course from this list and continue the same course till 4th semester.
                        They are not allowed to change the course after any semester. These courses are not applicable
                        for RSA, RSC, RSFA, RSD, RSET, RSN and RSP
                    </p>

                    <div class="table-responsive">

                        <table class="rgu-gde-table">

                            <thead>
                                <tr>
                                    <th>Schools</th>
                                    <th>Departments</th>
                                    <th>Generic Elective Courses Offered</th>
                                    <th>Pre-requisite</th>
                                </tr>
                            </thead>

                            <tbody id="rgu-gde-table-body-1">

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Mathematics</td>
                                    <td>Mathematics – I (Sem-1)</td>
                                    <td>Open for UG students across all schools having Mathematics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Mathematics</td>
                                    <td>Mathematics – II (Sem-2)</td>
                                    <td>Open for UG students across all schools having Mathematics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Mathematics</td>
                                    <td>Mathematics – III (Sem-3)</td>
                                    <td>Open for UG students across all schools having Mathematics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Mathematics</td>
                                    <td>Mathematics – IV (Sem-4)</td>
                                    <td>Open for UG students across all schools having Mathematics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Chemistry</td>
                                    <td>Chemistry – I (Sem-1)</td>
                                    <td>Open for UG students across all schools having Chemistry at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Chemistry</td>
                                    <td>Chemistry – II (Sem-2)</td>
                                    <td>Open for UG students across all schools having Chemistry at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Chemistry</td>
                                    <td>Chemistry – III (Sem-3)</td>
                                    <td>Open for UG students across all schools having Chemistry at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Chemistry</td>
                                    <td>Chemistry – IV (Sem-4)</td>
                                    <td>Open for UG students across all schools having Chemistry at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Physics</td>
                                    <td>Mathematical Physics, Mechanics &amp; Properties of Matter &amp; Ultrasonic
                                        (Sem-1)</td>
                                    <td>Open for UG students across all schools having Physics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Physics</td>
                                    <td>Electricity and Magnetism (Sem-2)</td>
                                    <td>Open for UG students across all schools having Physics at 10+2 Level</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Physics</td>
                                    <td>Optics and Atomic Physics (Sem-3)</td>
                                    <td>Open for UG students across all schools having Physics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Applied and Pure Sciences (RSAPS)</td>
                                    <td>Physics</td>
                                    <td>Electronics and Nuclear Physics (Sem-4)</td>
                                    <td>Open for UG students across all schools having Physics at 10+2 Level</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Architecture (RSA)</td>
                                    <td>Interior Design</td>
                                    <td>Interior Design – I (Sem-I)</td>
                                    <td>Entrance Examination</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Architecture (RSA)</td>
                                    <td>Interior Design</td>
                                    <td>Interior Design – II (Sem-II)</td>
                                    <td>Entrance Examination</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Architecture (RSA)</td>
                                    <td>Interior Design</td>
                                    <td>Interior Design – III (Sem-III)</td>
                                    <td>Entrance Examination</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Architecture (RSA)</td>
                                    <td>Interior Design</td>
                                    <td>Interior Design – IV (Sem-IV)</td>
                                    <td>Entrance Examination</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Behavioral&amp; Allied Sciences (RSBAS)</td>
                                    <td>Psychology</td>
                                    <td>Introduction to Psychology – I (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Behavioral&amp; Allied Sciences (RSBAS)</td>
                                    <td>Psychology</td>
                                    <td>Introduction to Psychology – II (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Behavioral&amp; Allied Sciences (RSBAS)</td>
                                    <td>Psychology</td>
                                    <td>Organizational Behaviour – I (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Behavioral&amp; Allied Sciences (RSBAS)</td>
                                    <td>Psychology</td>
                                    <td>Organizational Behaviour– II (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Technology</td>
                                    <td>Bio-Technology and Human Welfare(sem-1)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Technology</td>
                                    <td>Bio-Ethics and Bio-Safety (sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Technology</td>
                                    <td>Developmental Biology (sem-3)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Technology</td>
                                    <td>Entrepreneurship Development (sem-4)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Proteins and Enzyme (sem-1)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Intermediary Metabolism (sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Fundamentals of Cell Biology and Immunology (sem-3)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Bio-Chemical Correlations in Diseases (sem-4)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Microbial Disease and its Diagnosis (sem-1)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Micro Biology</td>
                                    <td>Antibiotic Resistance and its diagnosis (Sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Micro Biology</td>
                                    <td>Plant Pathology and Plant Microbes Interaction (Sem-3)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Bio- Sciences (RSBSC)</td>
                                    <td>Micro Biology</td>
                                    <td>Automation in Microbiology (Sem-3)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Communications and Media (RSCOM)</td>
                                    <td>Communication &amp; Media</td>
                                    <td>Intro. To Communication &amp; Photography (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Communications and Media (RSCOM)</td>
                                    <td>Communication &amp; Media</td>
                                    <td>Sound &amp; Radio (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Communications and Media (RSCOM)</td>
                                    <td>Communication &amp; Media</td>
                                    <td>Videography (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Communications and Media (RSCOM)</td>
                                    <td>Communication &amp; Media</td>
                                    <td>Advertising and Public Relations (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fashion Design &amp; Technology (RSFT)</td>
                                    <td>Fashion Design and Concept</td>
                                    <td>Fashion Design and Concept (Sem-I)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fashion Design &amp; Technology (RSFT)</td>
                                    <td>Fashion Design and Concept</td>
                                    <td>Design Process (Sem-II)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fashion Design &amp; Technology (RSFT)</td>
                                    <td>Fashion Design and Concept</td>
                                    <td>Surface Ornamentations (Sem-III)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fashion Design &amp; Technology (RSFT)</td>
                                    <td>Fashion Design and Concept</td>
                                    <td>Fashion Image Styling (Sem-IV)</td>
                                    <td>No Pre-requisite</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fine Arts (RSFA)</td>
                                    <td>Fine Arts</td>
                                    <td>Drawing and Study (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fine Arts (RSFA)</td>
                                    <td>Fine Arts</td>
                                    <td>Painting (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fine Arts (RSFA)</td>
                                    <td>Fine Arts</td>
                                    <td>Design (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Fine Arts (RSFA)</td>
                                    <td>Fine Arts</td>
                                    <td>Art and Craft (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Economics</td>
                                    <td>Micro Economics (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Economics</td>
                                    <td>Macro Economics (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Economics</td>
                                    <td>Public Finance (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Economics</td>
                                    <td>Indian Economics (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Sociology</td>
                                    <td>Introduction to Sociology and Basic Concepts (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Sociology</td>
                                    <td>Sociology of India –I (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Sociology</td>
                                    <td>Sociological Thinkers (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Sociology</td>
                                    <td>Sociology of India –II (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Political Science</td>
                                    <td>Indian Political system (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Political Science</td>
                                    <td>Nature of Indian Political Processes (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Political Science</td>
                                    <td>Public Administration (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Political Science</td>
                                    <td>International Relations (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>History</td>
                                    <td>Mughal India 1526-1757 (Sem-)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>History</td>
                                    <td>Issues in Contemporary World (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>History</td>
                                    <td>Rise of Modern Nationalism (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>History</td>
                                    <td>History of China and Japan (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Social Work</td>
                                    <td>Social Work with Response to Health Care (Sem-I)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Social Work</td>
                                    <td>Palliative Care in Social Work (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Social Work</td>
                                    <td>Social Work with Children, Youth, Women and Older Persons (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Humanities and Social Sciences (RSHSS)</td>
                                    <td>Social Work</td>
                                    <td>International Social Work (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Information &amp; Technology</td>
                                    <td>Information and Technology</td>
                                    <td>Web Development in JAVA Script (Sem-I)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Information &amp; Technology</td>
                                    <td>Information and Technology</td>
                                    <td>Server Side Programming with Ruby and Rails (Sem-II)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Information &amp; Technology</td>
                                    <td>Information and Technology</td>
                                    <td>Front and Development with React &amp; Type script (Sem-III)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Information &amp; Technology</td>
                                    <td>Information and Technology</td>
                                    <td>Project (Sem-IV)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Languages (RSL)</td>
                                    <td>English</td>
                                    <td>English Literature: Rhetoric of Representation (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Languages (RSL)</td>
                                    <td>English</td>
                                    <td>English Literature: Voices, Rhythms, Syntax (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Languages (RSL)</td>
                                    <td>English</td>
                                    <td>English Literature: Genres, Sounds , Words (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Languages (RSL)</td>
                                    <td>English</td>
                                    <td>English Literature: Forms and Variations (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Law and Administration (RSLA)</td>
                                    <td>Law and Administration</td>
                                    <td>Elements of Indian Constitutions (Sem-1)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Law and Administration (RSLA)</td>
                                    <td>Law and Administration</td>
                                    <td>Fundamentals of Criminal Laws (Sem-2)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Law and Administration (RSLA)</td>
                                    <td>Law and Administration</td>
                                    <td>Principles of Environmental Laws (Sem-3)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Law and Administration (RSLA)</td>
                                    <td>Law and Administration</td>
                                    <td>Cyber Law and Cyber Crime (Sem-4)</td>
                                    <td>No Pre-requisite</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Botany</td>
                                    <td>Biodiversity in Plant (sem-1)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Botany</td>
                                    <td>Mushroom Cultivation (sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Botany</td>
                                    <td>Botany in Rural Communities (sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Botany</td>
                                    <td>Environmental Bio-Technology (sem-4)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Zoology</td>
                                    <td>Animal Diversity (sem-1)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Zoology</td>
                                    <td>Food, Nutrition and Health (sem-2)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Zoology</td>
                                    <td>Human Physiology (sem-3)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>Royal School of Life Sciences (RSLSC)</td>
                                    <td>Zoology</td>
                                    <td>Aquatic Biology (sem-4)</td>
                                    <td>Open for UG students across all schools with Science Back-ground</td>
                                </tr>


                            </tbody>

                        </table>

                    </div>



                </div>

                <!-- TAB 2 -->
                <div class="rgu-gde-content" id="gde-tab-2">

                    <p class="rgu-gde-note">
                        A student will get a basket of choice based courses every semester under this category of GE
                        courses. The students will choose a course from this list in Odd and Even Semesters as their
                        GE-2. These courses do not have any Pre-requisite and the courses are open for all UG students
                        across all Schools, other than RSN.
                    </p>

                    <div class="table-responsive">

                        <table class="rgu-gde-table">

                            <thead>
                                <tr>
                                    <th>Schools</th>
                                    <th>Departments</th>
                                    <th>Generic Elective Courses Offered</th>
                                    <th>Pre-requisite</th>
                                </tr>
                            </thead>

                            <tbody id="rgu-gde-table-body-1">

                                <tr class="rgu-gde-row">
                                    <td>RASMAS</td>
                                    <td>Pharmacy</td>
                                    <td>Public Health and Hygiene</td>
                                    <td>Ayurvedic Science of Food and Nutrition</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RASMAS</td>
                                    <td>Physiotherapy</td>
                                    <td>Basics of Physiotherapy</td>
                                    <td>Principles of Exercise Theory</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSA</td>
                                    <td>Architecture</td>
                                    <td>City and Art</td>
                                    <td>Computer Aided Design in Architecture</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSAPS</td>
                                    <td>Mathematics</td>
                                    <td>Fundamentals of Mathematics</td>
                                    <td>Aptitude and Quantitative Ability</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSAPS</td>
                                    <td>Chemistry</td>
                                    <td>Basic Analytical Chemistry</td>
                                    <td>Environment and Green Chemistry</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSAPS</td>
                                    <td>Physics</td>
                                    <td>Fundamentals of Physics</td>
                                    <td>Basics of Practical Physics</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSB</td>
                                    <td>Business Administration</td>
                                    <td>Innovation Management</td>
                                    <td></td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSBAS</td>
                                    <td>Psychology</td>
                                    <td>Understanding and Managing Mental Health</td>
                                    <td>Psychology for Health and Well-being</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSBSc</td>
                                    <td>Bio-Technology</td>
                                    <td>Bio-fertilizer</td>
                                    <td>Ecosystem Degradation and Intervention</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSBSc</td>
                                    <td>Bio-Chemistry</td>
                                    <td>Immunity and Health</td>
                                    <td>Bio-Technical Application in Forensic</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>RSBSc</td>
                                    <td>Micro Biology</td>
                                    <td>Introductory Virology</td>
                                    <td>Microbes in Sustainable Agriculture and Development</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSC</td>
                                    <td>Commerce</td>
                                    <td>Basics of Accountancy</td>
                                    <td>Basics of E-Commerce</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSCOM</td>
                                    <td>Mass Comm.</td>
                                    <td>Videography and Editing</td>
                                    <td>News Presentation and Radio Jockey</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSD</td>
                                    <td>Fashion design</td>
                                    <td>Fashion Styling</td>
                                    <td>Sustainable Product Development</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSEES</td>
                                    <td>Geology</td>
                                    <td>Physical Geography</td>
                                    <td>Earth Resources</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSEES</td>
                                    <td>Geography</td>
                                    <td>Soil Science</td>
                                    <td>Regional Development of North-East</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSET</td>
                                    <td>Mechanical</td>
                                    <td>Fundamentals of Automobile Engineering</td>
                                    <td>3D Modeling and Printing/Biomechanics</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSET</td>
                                    <td>Civil</td>
                                    <td>Civil Engineering and Sustainable Growth</td>
                                    <td>Rural Energy and Community Deployment</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSET</td>
                                    <td>Computer Science</td>
                                    <td>Social Media Studies</td>
                                    <td>Open Source Software</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSFA</td>
                                    <td>Fine Arts</td>
                                    <td>Basic Creative Drawing</td>
                                    <td>Basic Creative Painting</td>
                                </tr>
                                <tr class="rgu-gde-row">
                                    <td>RSHM</td>
                                    <td>Hotel Management</td>
                                    <td>Front Office Management</td>
                                    <td>Hospitality Operations</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSHSS</td>
                                    <td>Economics</td>
                                    <td>Banking Practices</td>
                                    <td>Fundamentals of Financial Economics</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSHSS</td>
                                    <td>Sociology</td>
                                    <td>Sociology of Gender</td>
                                    <td>Environmental Sociology</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSHSS</td>
                                    <td>Political Science</td>
                                    <td>Electoral system in India</td>
                                    <td>Peace and Conflict Management</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSHSS</td>
                                    <td>History</td>
                                    <td>History of North-east</td>
                                    <td>A General Introduction to Archaeology; An Insight into India’s Early and
                                        Medieval Past</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSHSS</td>
                                    <td>Social Work</td>
                                    <td>Social work and NGO Management</td>
                                    <td>Community Organization</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSIT</td>
                                    <td>IT</td>
                                    <td>Multimedia Tools and Applications</td>
                                    <td>Python Programming</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSL</td>
                                    <td>English</td>
                                    <td>Travel Writing</td>
                                    <td>Academic Writing and Composition</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSLA</td>
                                    <td>Law</td>
                                    <td>Legal Literacy</td>
                                    <td>Socio-Economic Offences</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSLSc</td>
                                    <td>Botany</td>
                                    <td>Nursery and Gardening</td>
                                    <td>Plant Ecology and Economic Botany</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSLSc</td>
                                    <td>Zoology</td>
                                    <td>Human Health and Diseases</td>
                                    <td>Basics of Aqua-Culture</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSN</td>
                                    <td>Nursing</td>
                                    <td>Preventive Health Science</td>
                                    <td>First Aid</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSPA</td>
                                    <td>Dance</td>
                                    <td>Principles of Kathak/Sattriya/Bharatnatyam- Basic Idea</td>
                                    <td>Basic Techniques of Dance</td>
                                </tr>

                                <tr class="rgu-gde-row">
                                    <td>RSTTM</td>
                                    <td>Travel and Tourism</td>
                                    <td>Business Tourism</td>
                                    <td>Basics of Tour Operation and Ticketing</td>
                                </tr>



                            </tbody>

                        </table>

                    </div>


                </div>


            </div>

        </div>

    </section>

    <script>
        // Tabs
        const rguGdeTabs = document.querySelectorAll('.rgu-gde-tab');
        const rguGdeContents = document.querySelectorAll('.rgu-gde-content');

        rguGdeTabs.forEach(tab => {

            tab.addEventListener('click', () => {

                const target = tab.getAttribute('data-tab');

                rguGdeTabs.forEach(btn => {
                    btn.classList.remove('active');
                });

                rguGdeContents.forEach(content => {
                    content.classList.remove('active');
                });

                tab.classList.add('active');

                document.getElementById(target).classList.add('active');

            });

        });

        // Load More
        const rguLoadBtn1 = document.getElementById('rguGdeLoadBtn1');

        if (rguLoadBtn1) {

            rguLoadBtn1.addEventListener('click', () => {

                const hiddenRows = document.querySelectorAll(
                    '#rgu-gde-table-body-1 .hidden-row'
                );

                hiddenRows.forEach(row => {
                    row.style.display = 'table-row';
                });

                rguLoadBtn1.style.display = 'none';

            });

        }
    </script>
@endsection
