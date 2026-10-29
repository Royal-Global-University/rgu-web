@extends('frontend/new-master')
@section('content')
    <style>
        /*==================================
    RCCR EVENTS
    ==================================*/

        .rccr-events-section {

            background: #eef1f7;
            padding: 70px 0;

        }

        .rccr-heading {

            text-align: center;
            margin-bottom: 55px;

        }

        .rccr-heading h2 {

            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 700;
            color: #23467d;

        }

        .rccr-heading span {

            color: #e67b2d;

        }

        .rccr-event-block h3 {

            font-family: 'Playfair Display', serif;
            font-size: 36px;
            color: #23467d;
            margin-bottom: 25px;

        }

        .rccr-event-block h3 span {

            color: #e67b2d;

        }

        .rccr-event-block p {

            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #596273;
            line-height: 2;
            text-align: justify;
            margin-bottom: 18px;

        }

        .rccr-gallery-item {

            display: block;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);

        }

        .rccr-gallery-item img {

            width: 100%;
            display: block;
            transition: .45s;

        }

        .rccr-gallery-item:hover img {

            transform: scale(1.05);

        }

        @media(max-width:991px) {

            .rccr-heading h2 {

                font-size: 38px;

            }

            .rccr-event-block h3 {

                font-size: 30px;

            }

        }

        @media(max-width:767px) {

            .rccr-events-section {

                padding: 50px 0;

            }

            .rccr-heading h2 {

                font-size: 30px;

            }

            .rccr-event-block h3 {

                font-size: 26px;

            }

            .rccr-event-block p {

                font-size: 14px;
                line-height: 1.9;

            }

        }
    </style>

    <style>
        /*==================================
    JOB FAIR
    ==================================*/

        .job-fair-section {

            padding: 20px 0 80px;
            background: #eef1f7;

        }

        .job-fair-content h3 {

            font-family: 'Playfair Display', serif;
            font-size: 38px;
            color: #23467d;
            margin-bottom: 25px;
            font-weight: 700;

        }

        .job-fair-content span {

            color: #e67b2d;

        }

        .job-fair-content p {

            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #5b6575;
            line-height: 2;
            text-align: justify;
            margin-bottom: 18px;

        }

        .job-fair-gallery {

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;

        }

        .job-gallery-item {

            display: block;
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);

        }

        .job-gallery-item img {

            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: .45s;
            display: block;

        }

        .job-gallery-item:hover img {

            transform: scale(1.08);

        }

        @media(max-width:991px) {

            .job-fair-gallery {

                margin-top: 40px;

            }

        }

        @media(max-width:767px) {

            .job-fair-section {

                padding: 10px 0 60px;

            }

            .job-fair-content h3 {

                font-size: 28px;

            }

            .job-fair-content p {

                font-size: 14px;
                line-height: 1.9;

            }

            .job-gallery-item img {

                height: 180px;

            }

        }
    </style>

    <style>
        /*==================================
    HR CONCLAVE
    ==================================*/

        .hr-conclave-section {

            padding: 20px 0 80px;
            background: #eef1f7;

        }

        .hr-conclave-gallery {

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;

        }

        .hr-gallery-item {

            display: block;
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);

        }

        .hr-gallery-item img {

            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: .45s;

        }

        .hr-gallery-item:hover img {

            transform: scale(1.08);

        }

        .hr-conclave-content h3 {

            font-family: 'Playfair Display', serif;
            font-size: 38px;
            color: #23467d;
            margin-bottom: 25px;
            font-weight: 700;

        }

        .hr-conclave-content span {

            color: #e67b2d;

        }

        .hr-conclave-content p {

            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 2;
            text-align: justify;
            margin-bottom: 18px;

        }

        @media(max-width:991px) {

            .hr-conclave-gallery {

                margin-bottom: 40px;

            }

        }

        @media(max-width:767px) {

            .hr-conclave-section {

                padding: 10px 0 60px;

            }

            .hr-conclave-gallery {

                grid-template-columns: 1fr;
                gap: 15px;

            }

            .hr-gallery-item img {

                height: 220px;

            }

            .hr-conclave-content h3 {

                font-size: 28px;

            }

            .hr-conclave-content p {

                font-size: 14px;
                line-height: 1.9;

            }

        }
    </style>

    <style>
        /*==================================
    RECRUITMENT EVENTS
    ==================================*/

        .recruitment-events-section {

            background: #eef1f7;
            padding: 20px 0 90px;

        }

        .recruitment-content h3 {

            font-family: 'Playfair Display', serif;
            font-size: 38px;
            color: #23467d;
            margin-bottom: 25px;
            font-weight: 700;

        }

        .recruitment-content span {

            color: #e67b2d;

        }

        .recruitment-content p {

            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #5d6678;
            line-height: 2;
            text-align: justify;
            margin-bottom: 18px;

        }

        .recruitment-gallery {

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;

        }

        .recruitment-gallery-item {

            display: block;
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);

        }

        .recruitment-gallery-item img {

            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: .45s;

        }

        .recruitment-gallery-item:hover img {

            transform: scale(1.08);

        }

        @media(max-width:991px) {

            .recruitment-gallery {

                margin-top: 40px;

            }

        }

        @media(max-width:767px) {

            .recruitment-events-section {

                padding: 10px 0 60px;

            }

            .recruitment-content h3 {

                font-size: 28px;

            }

            .recruitment-content p {

                font-size: 14px;
                line-height: 1.9;

            }

            .recruitment-gallery {

                grid-template-columns: 1fr;
                gap: 15px;

            }

            .recruitment-gallery-item img {

                height: 240px;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/introduction/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">RCCR Events</h1>
            <div class="pg-hero-breadcrumb">
                Placement / RCCR Events
            </div>
        </div>

    </section>


     <!--====================================
    RCCR EVENTS
    =====================================-->

        <div class="container pt-5">

            <div class="m-4 pb-5">
                    <h1 class="text-danger">Call: 9910044299 / 8472048425,   <span class="text-danger">Email id: rccr.placement@rgu.ac</span></h1>
                </div>

            <div class="rccr-event-block text-center">

                <h3 style="color: #237d35;">
                    RCCR ACTIVITIES AND PLACEMENT DRIVES BY THE NEWLY APPOINTED TEAM OF 2026
                </h3>


            </div>

        </div>


    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    14 August 2026: Meeting with Faculty Placement Coordinators
                </h3>

                <h3>
                    AGENDA
                </h3>

                <p>
                <ol>
                    <li>Introduction to RCCR and its placement-related functions.</li>
                    <li>Roles of Faculty Placement Coordinators and Student Placement Coordinators.</li>
                    <li>Student data collection and career-category segregation.</li>
                    <li>Internship, offer-letter, and placement documentation.</li>
                    <li>Placement drives, internal training, and student grooming.</li>
                    <li>Alumni engagement, company database, placement rules, and calendar.</li>
                    <li>Coordination mechanisms, timelines, and other pertinent matters.</li>
                </ol>
                </p>

            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic12" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic12.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    Meeting with Student Placement Coordinators

                </h3>

                <h3>
                    AGENDA
                </h3>

                <p>
                    Introduction to RCCR and its members
                </p>


                <p>
                <ol>
                    <li>Role and responsibilities of Student Placement Coordinators.</li>
                    <li>Student database collection and three-way career segregation.</li>
                    <li>Responsibilities before, during, and after placement drives.</li>
                    <li>Management duties during placement drives and recruiter coordination.</li>
                    <li>Internship, offer-letter, and placement documentation.</li>
                    <li>Coordination beyond placement drives, including training, internships, alumni, and career
                        activities.</li>
                    <li>Feedback mechanism for students and recruiters.</li>
                    <li>Immediate actions and weekly coordination requirements.</li>
                </ol>
                </p>

                <p>
                    The presentation and discussion were conducted by Roselin Akhtar Faruque, Trainee,
                    RCCR. The meeting concluded with questions and suggestions from the Student
                    Placement Coordinators and was concluded by Dr. Arpee Saikia, Director, RCCR.
                </p>


            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic11" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic11.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    02 September 2026
                </h3>

                <h3>
                    OBJECTIVE / AGENDA
                </h3>

                <p>
                <ol>
                    <li>Preparation for the upcoming placement drive scheduled for 09 September 2026.</li>
                    <li>Guidance on company research, self-introduction, interview conduct, and communication.</li>
                    <li>Understanding possible interview rounds and common, relatable questions.</li>
                    <li>Guidance on salary expectations and self-assessment for freshers.</li>
                    <li>Briefing on the upcoming RCCR mock interview and group discussion activities.</li>
                </ol>
                </p>


            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic10" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic10.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    Mock Interview and CV Format Session
                </h3>

                <h3>
                    AGENDA
                </h3>

                <p>
                <ol>
                    <li>Guidance on preparing and presenting oneself effectively in an interview.</li>
                    <li>Discussion on answering interview questions with clarity and confidence.</li>
                    <li>Awareness of body language, eye contact, confidence, and professional conduct.</li>
                    <li>Introduction to an appropriate CV format and the importance of a well-structured CV.</li>
                    <li>Live mock-interview activity and peer feedback for participating candidates.</li>
                    <li>Motivation and final preparation for the placement drive scheduled for 09 September 2026.</li>
                </ol>
                </p>


            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic9" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic9.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    The Royal Centre for Corporate Relations (RCCR) at Assam Royal
                    Global University successfully conducted an <span>exclusive campus placement drive</span> for
                    internal students as part of the September placement cycle.
                </h3>

                <p>
                    On 9th September 2026, the Royal Centre for Corporate Relations (RCCR) at Assam Royal
                    Global University successfully conducted an exclusive campus placement drive for internal
                    students as part of the September placement cycle. The event was held on the 7th floor (GHI
                    Block, Student Lobby), where 11 reputed companies from sectors such as media, IT,
                    healthcare, hospitality, and corporate services participated. Over 200 students from diverse
                    programmes including MBA, BBA, B.Tech, Tourism Management, English, BCA, MCA,
                    Nursing, Mass Communication, and Animation registered and appeared for the recruitment
                    process.
                </p>

                <p>
                    A dedicated team of nearly 20 student volunteers supported the smooth execution of the
                    drive. Their responsibilities included student registration, company registration, and
                    managing entry details at the 7th floor venue. Registration commenced at 9:30 AM and
                    concluded at 5:00 PM. To ensure a comfortable experience for recruiters, RCCR served tea
                    and cookies around 11:00 AM, followed by lunch at approximately 1:00 PM, which was
                    delivered to all allotted interview rooms. Student volunteers continuously monitored the
                    recruiters' needs and provided on-ground assistance throughout the day.
                </p>

                <p>
                    For quality assurance and feedback, all participating students were required to fill and
                    submit a Student Feedback Form to RCCR at the end of the drive. Volunteers stationed
                    outside each company room maintained a Student Registration List, recording the names of
                    candidates who entered the interview rooms. These lists were later cross-checked with the
                    initial ground-floor registration data to ensure accuracy. Recruiters were provided with a
                    Score Card and a Feedback Form, which were collected by volunteers once the interview
                    process was completed.
                </p>


            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic8.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic8.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    Interaction and Career Opportunity <span>Meeting</span>
                </h3>

                <h3>PURPOSE / AGENDA</h3>

                <p>
                <ol>
                    <li>To facilitate a boardroom interaction between the Pumpkin Tales team and the Hotel Management
                        and Travel and Tourism departments.</li>
                    <li>To introduce Pumpkin Tales, its business expansion plans, work culture, and career
                        opportunities.</li>
                    <li>To explain the proposed training, evaluation, recruitment process, and salary structure for
                        interested freshers.</li>
                    <li>To inform students and faculty members about the upcoming open-house walk-in interview.</li>
                </ol>
                </p>


            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic7.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic7.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>


    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    The Royal Centre for Corporate Relations (RCCR) successfully
                    conducted its <span>third placement drive</span>
                </h3>

                <p>
                    On 23 September 2026, the Royal Centre for Corporate Relations (RCCR) successfully
                    conducted its third placement drive, reinforcing its role as a key facilitator of campus
                    recruitment and career opportunities for students. The drive featured participation from two
                    companies, APOLLO PHARMACY and GWC, representing recruitment opportunities for
                    students from the Pharmacy and Management streams. A total of 30 candidates participated
                    in the interview process, with 14 appearing for APOLLO PHARMACY and 16 appearing
                    for GWC.
                </p>

                <p>
                    The placement drive commenced with registration at 12:00 pm where student volunteers
                    managed on-ground coordination, including student check-in, directing candidates to
                    respective company rooms, and ensuring a smooth flow of participants throughout the day.
                    To maintain a professional and comfortable environment for recruiters, RCCR arranged tea
                    and cookies around 1:00 pm., followed by a lunch service at 2:30 p.m. Volunteers remained
                    attentive to the needs of the recruiters, offering logistical support and assistance as required.

                </p>

                <p>
                    The recruitment requirements were clearly aligned with specific academic profiles.
                    APOLLO PHARMACY required students from the Pharmacy Department, with B.Pharm
                    and D.Pharm students participating in the interview session along with some alumni. GWC
                    required students with an MBA background. This targeted approach helped ensure that
                    students appearing for interviews were aligned with the respective companies’ recruitment
                    requirements.
                </p>



            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic6.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic6.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    The Royal Centre for Corporate Relations (RCCR) successfully
                    conducted its <span>fourth placement drive</span>
                </h3>

                <p>
                    On 28 September 2026, the Royal Centre for Corporate Relations (RCCR) successfully
                    conducted its fourth placement drive, reinforcing its role as a key facilitator of campus
                    recruitment and career opportunities for students. The drive featured ESAF Small Finance
                    Bank, whose representatives travelled from Kolkata to Guwahati to conduct the recruitment
                    process.
                </p>

                <p>
                    ESAF Small Finance Bank conducted recruitment for the position of Business Development
                    Officer. The opportunity was open to students from all undergraduate programmes, while
                    among postgraduate programmes, only MBA students were eligible to participate. This
                    ensured that the recruitment process was aligned with the academic backgrounds and
                    eligibility requirements specified by the company.
                </p>

                <p>
                    To ensure the comfort and convenience of the visiting company representatives, the
                    University arranged accommodation from Sunday evening, 27th September 2026, one day
                    before the placement drive. Breakfast was provided at the guest house on the morning of the
                    recruitment drive, after which the representatives were escorted to GHI, RCCR, for the
                    interview round. The RCCR team coordinated the hospitality and logistical arrangements to
                    ensure the smooth conduct of the recruitment process. The interview started from 10 am after
                    the student registration was done.
                </p>



            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic5.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic5.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    ONLINE INTERACTIVE SESSION WITH THE STUDENTS WITH <span>IDFC FIRST BANK</span>

                </h3>

                <p>
                    The meeting started with a short introduction by Laboni Banerjee, the recruiting member from
                    IDFC Bank. She briefed the students with the role of the Associate Manager-Acquisition
                </p>

                <p>
                    The meeting ended with a final note from the host wherein she stated that the students need to
                    undergo a test online from their laptops, wherein they will be given questions of logical
                    reasoning, e-mail writing, psychometric tests etc. The date and the link for sitting in the
                    interview will be informed later through a separate communication.
                </p>



            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic4.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic4.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    THE SPECIAL SESSION: <span>CAMPUS TO CORPORATE</span>

                </h3>

                <p>
                    The primary objective of the session was to conduct an intensive grooming, communication, and
                    interview
                    readiness workshop for final-year students. Delivered by Dr. Arpee Saikia, the session aimed to
                    build
                    confidence, establish corporate presentation standards, and equip students with effective verbal and
                    nonverbal communication skills to clear upcoming campus placement drives.
                </p>

                <h3>DETAILED LECTURE TOPICS COVERED BY DR. ARPEE SAIKIA</h3>

                <h4 style="color: #000;">A. Professional Grooming & Personal Presentation</h4>

                <p>
                <ol>
                    <li>Standards of personal hygiene, neatness, and professional posture required in corporate
                        evaluation environments.</li>
                    <li>Developing poise, self-assurance, and overcoming pre-interview anxiety and nervousness.</li>
                    <li>Projecting a positive professional image during group discussions, panel interviews, and formal
                        networking.</li>
                </ol>
                </p>

                <h4 style="color: #000;">B. Corporate Dress Code & Business Etiquette</h4>

                <p>
                <ol>
                    <li>Formal corporate attire guidelines for male and female candidates during placement drives.</li>
                    <li>Appropriate footwear, accessories, grooming practices, and compliance with formal dress codes.
                    </li>
                    <li>Understanding interview entry and exit protocols, body language, facial expressions, eye
                        contact, and polite hand gestures.</li>
                </ol>
                </p>

                <h4 style="color: #000;">C. Professional Communication Skills</h4>

                <p>
                <ol>
                    <li>Verbal communication clarity: articulate speech, tone modulation, appropriate pace, and
                        elimination of filler words.</li>
                    <li>Active listening techniques: understanding interviewer questions thoroughly before responding.
                    </li>
                    <li>Structuring impact-driven answers using the STAR technique (Situation, Task, Action, Result) for
                        behavioral and situational interview questions.</li>
                </ol>
                </p>

                <h4 style="color: #000;">D. Practical Interview Readiness & Placement Strategy</h4>

                <p>
                <ol>
                    <li>Delivering clear, engaging, and structured self-introductions aligned with target job
                        descriptions.</li>
                    <li>Practical exposure to common HR and technical interview questions, salary expectation
                        discussions for freshers, and confidence building.</li>
                    <li>Overview of upcoming RCCR placement activities, mock interviews, group discussion (GD) practice
                        sessions, and mandatory resume verification drives.</li>
                </ol>
                </p>

            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic3.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic3.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    Arista visited Assam Royal Global University for its campus recruitment drive,
                    initiated and coordinated by the <span>RCCR team.</span>
                </h3>

                <p>
                    <strong>On 8th October,</strong> Arista visited Assam Royal Global University for its campus
                    recruitment drive,
                    initiated and coordinated by the RCCR team. The drive was organised to provide eligible
                    students with an opportunity to participate in the company’s selection process and explore
                    potential employment opportunities. Student registration commenced at 10:00 a.m. as per the
                    requirements communicated by the company. Students from the specified specialisations
                    Marketing, Sales, and Finance were asked to appear for the recruitment process. The company
                    recruiters arrived at the university at approximately 10:30 a.m. They were warmly welcomed and
                    felicitated by Mrs. Kaustavmoni Neog, Manager, RCCR. Following the welcome, the recruiters
                    were escorted to the designated interview room, where the recruitment process was to be
                    conducted. The selection process began with a Group Discussion (GD) round. Students were
                    called in groups of four to five members for the discussion. After the Group Discussion round,
                    the shortlisted students proceeded to the personal interview round. To ensure the comfort of the
                    recruiters and students throughout the process, coffee and cookies were served. Subsequently,
                    lunch was arranged at 1:30 p.m. for the visiting recruitment team. Throughout the day, the RCCR
                    team provided continuous mentoring, guidance, and assistance to the students. The team
                    coordinated the registration process, managed the schedule of GD and interview rounds,
                    facilitated communication between the students and recruiters, and ensured that all logistical
                    requirements were met. With the combined efforts of the RCCR team, faculty members,
                    supporting staff, and participating students, the recruitment drive was successfully concluded.
                </p>

            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic2.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic2.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    The Assam Royal Global
                    University, organised an interactive session on <span>“Grooming, Personal Hygiene, and Professional
                        Image Building”</span>
                </h3>

                <p>
                    <strong>13 October 2026:</strong>
                    The Royal Centre for Corporate Relation (RCCR), The Assam Royal Global
                    University, organised an interactive session on “Grooming, Personal Hygiene, and Professional Image
                    Building” on 13 October 2026. The resource person for the session was Dr. Chandana Goswami, Life
                    Coach and Former Management Professor at Tezpur University. The session focused on personal
                    presentation, everyday hygiene, and the role of grooming in developing a professional image.
                </p>

            </div>

            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="/new-web/assets/placement-event/pic1.png" class="rccr-gallery-item">

                        <img src="/new-web/assets/placement-event/pic1.png" alt="">

                    </a>

                </div>

            </div>


        </div>

    </section>

    <!--====================================
    RCCR EVENTS
    =====================================-->

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-event-block">

                <h3>
                    Leadership <span>Conclave 2025</span>
                </h3>

                <p>
                    <strong>Guwahati, September 11, 2025:</strong>
                    Royal Global University successfully hosted its flagship
                    Leadership Conclave 2025 organized by the Royal Centre for
                    Corporate Relations (RCCR) under the leadership of Ms. Bristy
                    Srivastava, Head of RCCR. The conclave brought together close to
                    100 senior professionals, industry leaders and distinguished
                    speakers for a day of insightful discussions on the theme
                    <strong>"Ethics and the Evolving Workforce."</strong>
                </p>

                <p>
                    The conclave addressed some of the most urgent questions facing today’s workplace, explored across
                    four thought-provoking panels: “Minimal Input, Maximum Outcome: Has Hustle Culture Rebranded
                    Laziness?”, “5% of Leadership, 50% of the Workforce: What’s Broken in the Climb for Women?”, “Beyond
                    the Algorithm: Reclaiming the Human in Human Resources,” and “Funding Over Fundamentals: Has Startup
                    Culture Outgrown Accountability?”
                </p>

            </div>

            <div class="row">

                <div class="col-lg-6 mb-4">

                    <a href="https://www.rgu.ac/mobile-assets/placement-all/placements-activity/l-img.png"
                        class="rccr-gallery-item">

                        <img src="https://www.rgu.ac/mobile-assets/placement-all/placements-activity/l-img.png" alt="">

                    </a>

                </div>

                <div class="col-lg-6 mb-4">

                    <a href="https://www.rgu.ac/mobile-assets/placement-all/placements-activity/r-img.png"
                        class="rccr-gallery-item">

                        <img src="https://www.rgu.ac/mobile-assets/placement-all/placements-activity/r-img.png" alt="">

                    </a>

                </div>

            </div>

            <div class="rccr-event-block mt-4">

                <p>
                    Notable speakers included Abhay Kapoor, HR Transformation Leader at UIL; Govindprasad Gaonkar,
                    Senior Executive Vice President & Head-HR at Kotak Mahindra Asset Management; Sailaja M, HR Leader
                    at Sephora with 18+ years of experience in retail and e-commerce; Nitin Jagdale, Head of Talent
                    Acquisition at NTT Data India; and Dr. Alaka Sarma, Co-founder of Akshar Foundation and Oxford
                    alumna, who has been instrumental in pioneering sustainable and socially impactful education models.
                    Their insights were complemented by other eminent leaders from organizations such as Amazon,
                    Reliance Jio, ICICI Bank, Kotak Mahindra Bank, Sephora, and many more.
                </p>

                <p>
                    The discussions examined how ethics can be positioned at the heart of leadership, ensuring that
                    technological innovation, diversity, and productivity are aligned with integrity and inclusivity.
                    Speakers reflected on reshaping leadership values, empowering women in the workforce, rehumanizing
                    HR in the age of algorithms, and steering startups towards accountability.
                </p>

                <p>
                    The conclave reinforced Royal Global University’s commitment to creating a platform that bridges
                    academia and industry, inspiring students and professionals alike to pursue leadership rooted in
                    ethics, responsibility, and innovation.
                </p>

            </div>

        </div>

    </section>

    <!--====================================
    JOB FAIR
    =====================================-->

    <section class="job-fair-section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="job-fair-content">

                        <h3>
                            Job <span>Fair</span>
                        </h3>

                        <p>
                            The Assam Royal Global University conducted one of the biggest job fairs of the Northeast
                            Region on 12th May, 2023. With over 125 participating companies from the national and
                            international forum, and more than 3000 registrations by job seekers, this event provided
                            livelihood opportunities to Graduates, Post Graduates, Freshers, and experienced candidates
                            who utilized this platform to showcase their talent, skill set and expertise.
                        </p>

                        <p>
                            Recruiters in the Job Fair included Wipro, HDFC Ergo, Novotel-Guwahati, L&T Finance, UpGrad,
                            Reliance Jio, Star Cement, WIPRO, Marico Limited, Aditya Birla Fashion And Retail, Austin
                            Ply, Radisson Blu, GD Pharma, Kotak Life, Marriott-Shillong, Hike Education, Zenus Group,
                            Bajaj Allianz, Dyna Roof, Prag News, Vantage Circle, Teamlease, Yokohama Off Highway Tyres,
                            Protech Group, Beacon Insurance, Audi Guwahati, Teleperformance, JDB Group, Lohia Group,
                            Dyna Roof, Bharati AXA Life Insurance Company Ltd, Reliance Nippon Life Insurance, Jumbo
                            Group, Star Cement, PayTM and others.
                        </p>


                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="job-fair-gallery">

                        <a href="assets/img/placement/rccr-events/1.png" class="job-gallery-item">
                            <img src="assets/img/placement/rccr-events/1.png" alt="">
                        </a>

                        <a href="assets/img/placement/rccr-events/2.png" class="job-gallery-item">
                            <img src="assets/img/placement/rccr-events/2.png" alt="">
                        </a>

                        <a href="assets/img/placement/rccr-events/3.png" class="job-gallery-item">
                            <img src="assets/img/placement/rccr-events/3.png" alt="">
                        </a>

                        <a href="assets/img/placement/rccr-events/4.png" class="job-gallery-item">
                            <img src="assets/img/placement/rccr-events/4.png" alt="">
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--====================================
    HR CONCLAVE
    =====================================-->

    <section class="hr-conclave-section">

        <div class="container">

            <div class="row align-items-center">

                <!-- Images -->

                <div class="col-lg-5">

                    <div class="hr-conclave-gallery">

                        <a href="assets/img/placement/rccr-events/a.png" class="hr-gallery-item">

                            <img src="assets/img/placement/rccr-events/a.png" alt="HR Conclave">

                        </a>

                        <a href="assets/img/placement/rccr-events/b.png" class="hr-gallery-item">

                            <img src="assets/img/placement/rccr-events/b.png" alt="HR Conclave">

                        </a>

                    </div>

                </div>

                <!-- Content -->

                <div class="col-lg-7">

                    <div class="hr-conclave-content">

                        <h3>
                            HR <span>Conclave</span>
                        </h3>

                        <p>
                            Royal Centre for Corporate Relations organized the
                            <strong>HR Conclave</strong> with the objective of
                            bridging the gap between academia and industry by
                            bringing together experienced Human Resource leaders,
                            corporate professionals and academic experts onto a
                            common platform.
                        </p>

                        <p>
                            The conclave featured insightful discussions on emerging
                            recruitment trends, workplace expectations, leadership,
                            talent acquisition, employee engagement and future-ready
                            skills. Students had the opportunity to directly interact
                            with HR professionals from reputed organizations and gain
                            practical insights into corporate hiring practices.
                        </p>

                        <p>
                            The event strengthened industry-academia collaboration
                            while equipping students with valuable knowledge and
                            professional perspectives that will help them confidently
                            enter today's competitive job market.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--====================================
    RECRUITMENT EVENTS
    =====================================-->

    <section class="recruitment-events-section">

        <div class="container">

            <div class="row align-items-center">

                <!-- Content -->

                <div class="col-lg-5">

                    <div class="recruitment-content">

                        <h3>
                            Recruitment <span>Events</span>
                        </h3>

                        <p>
                            Recruitment Events are organized by the Royal Centre for
                            Corporate Relations (RCCR) throughout the academic year,
                            both on-campus and virtually, in alignment with the
                            University's placement season. These events provide
                            students with direct interaction opportunities with
                            recruiters from leading organizations across multiple
                            sectors.
                        </p>

                        <p>
                            Through pre-placement talks, networking sessions,
                            assessment drives and campus interviews, students gain
                            valuable exposure to current hiring practices while
                            enhancing their confidence, communication skills and
                            professional readiness.
                        </p>

                        <p>
                            These initiatives strengthen the University's
                            industry-academia partnership and ensure students are
                            equipped with the skills and opportunities needed to
                            launch successful careers.
                        </p>

                    </div>

                </div>

                <!-- Gallery -->

                <div class="col-lg-7">

                    <div class="recruitment-gallery">

                        <a href="assets/img/placement/rccr-events/a1.png" class="recruitment-gallery-item">

                            <img src="assets/img/placement/rccr-events/a1.png" alt="">

                        </a>

                        <a href="assets/img/placement/rccr-events/a2.png" class="recruitment-gallery-item">

                            <img src="assets/img/placement/rccr-events/a2.png" alt="">

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Include all these  -->
@endsection
