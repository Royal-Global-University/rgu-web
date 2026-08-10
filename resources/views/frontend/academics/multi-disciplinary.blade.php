@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/inter-multi-disc/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Multidisciplinary/ Interdisciplinary Courses</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Multidisciplinary/ Interdisciplinary Courses
            </div>
        </div>

    </section>


    <!-- =========================
         MULTIDISCIPLINARY COURSES
    ========================= -->

    <section class="multi-course-sec">

        <div class="multi-course-container">

            <div class="multi-course-top">

                <!-- Left Image -->

                <div class="multi-course-image">

                    <img src="new-web/assets/img/inter-multi-disc/headimg.png" alt="RGU Multidisciplinary Courses">

                </div>

                <!-- Right Content -->

                <div class="multi-course-content">

                    <h1>
                        RGU Multidisciplinary/
                        <br>
                        Interdisciplinary Courses
                    </h1>

                    <h3>
                        Encouraging Holistic Education
                    </h3>

                    <p>
                        The underpinning philosophy of education at RGU is premised on the spirit of Liberal Arts
                        education – an education that liberates the mind fostering sensitivity and critical thinking
                        and promoting civic responsibility.
                    </p>

                </div>

            </div>

            <!-- Overview Section -->

            <div class="multi-course-overview">

                <div class="multi-course-overview-inner">

                    <h2>
                        Overview
                    </h2>

                    <p>
                        The Assam Royal Global University (RGU), one of the premier universities in India, has
                        continuously acted as a leadership platform that aligns interests of industries,
                        entrepreneurs with its academic mandates and the aspiration of the youth since its
                        establishment in 2017. Aimed at creating and sustaining an environment wherein
                        employment and entrepreneurship can flourish with collaborative efforts amongst an
                        extensive network of influential corporates, individual members and academic institutions,
                        RGU has been able to provide necessary resources, knowledge and support to create
                        effective employment and entrepreneurship opportunities.
                    </p>

                    <p>
                        RGU offers a wide range of multidisciplinary courses that blend knowledge from different
                        fields, giving students a well-rounded learning experience. Since our establishment, we
                        have introduced these courses to encourage critical thinking, creativity and problem-solving
                        by combining ideas from various academic spheres.
                    </p>

                    <p>
                        Our multidisciplinary courses go beyond traditional subject boundaries, allowing students
                        to explore concepts, theories and methods from multiple fields. These programmes connect
                        subjects including Science, Technology, Engineering, Humanities, Social Sciences and Fine
                        Arts to help students tackle real-world challenges. Unlike standard courses that focus on a
                        single subject, multidisciplinary programmes at RGU promote collaboration across disciplines,
                        enabling students to gain a deeper understanding of complex topics.
                    </p>

                    <p>
                        At The Assam Royal Global University, we are committed to embracing the transformative
                        vision of the National Education Policy (NEP) 2020 and its goal of transforming education
                        by introducing flexible academic structures and multidisciplinary courses that encourage
                        holistic learning.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================================
       MULTIDISCIPLINARY / INTERDISCIPLINARY PAGE
    ========================================== */

        .multi-course-sec {
            background: #eef3fb;
            padding: 80px 0;
        }

        .multi-course-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        /* ==========================
       TOP SECTION
    ========================== */

        .multi-course-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            margin-bottom: 70px;
        }

        .multi-course-image {
            border-radius: 12px;
            overflow: hidden;
        }

        .multi-course-image img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
            transition: .4s ease;
        }

        .multi-course-image:hover img {
            transform: scale(1.05);
        }

        .multi-course-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.1;
            color: #29467B;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .multi-course-content h3 {
            color: #E26932;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .multi-course-content p {
            color: #5b6780;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        /* ==========================
       OVERVIEW
    ========================== */

        .multi-course-overview {
            background: linear-gradient(180deg,
                    #29467B 0%,
                    #03225E 100%);
            border-radius: 60px 60px 0 0;
            overflow: hidden;
        }

        .multi-course-overview-inner {
            padding: 70px;
        }

        .multi-course-overview h2 {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            margin-bottom: 35px;
            font-weight: 700;
        }

        .multi-course-overview p {
            color: rgba(255, 255, 255, .9);
            font-size: 15px;
            line-height: 2;
            margin-bottom: 25px;
        }

        .multi-course-overview p:last-child {
            margin-bottom: 0;
        }

        /* ==========================
       ANIMATION CLASSES
    ========================== */

        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: .8s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==========================
       RESPONSIVE
    ========================== */

        @media(max-width:1200px) {

            .multi-course-content h1 {
                font-size: 48px;
            }

        }

        @media(max-width:991px) {

            .multi-course-top {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .multi-course-content h1 {
                font-size: 42px;
            }

            .multi-course-overview-inner {
                padding: 50px 35px;
            }

        }

        @media(max-width:768px) {

            .multi-course-sec {
                padding: 50px 0;
            }

            .multi-course-content h1 {
                font-size: 34px;
            }

            .multi-course-content h3 {
                font-size: 22px;
            }

            .multi-course-image img {
                height: 240px;
            }

            .multi-course-overview {
                border-radius: 35px 35px 0 0;
            }

            .multi-course-overview h2 {
                font-size: 32px;
            }

            .multi-course-overview-inner {
                padding: 35px 20px;
            }

        }
    </style>

    <section class="nep-structure-sec">

        <div class="nep-structure-container">

            <div class="nep-top-section">

                <!-- Left Content -->

                <div class="nep-left">

                    <h2>
                        Curricular Structure
                        <br>
                        based on NEP 2020 @RGU
                    </h2>

                    <ul class="nep-feature-list">

                        <li>Fostering unique capabilities</li>
                        <li>Identifying learning trajectories</li>
                        <li>Multidisciplinary and holistic education</li>
                        <li>Emphasis on conceptual understanding</li>
                        <li>Flexible curricular structure</li>
                        <li>Extensive use of technology in teaching and learning</li>
                        <li>Respect for diversity and respect for the local context</li>
                        <li>Access to High-quality education and a supportive learning environment for all</li>
                        <li>Fostering experiential learning</li>

                    </ul>

                </div>

                <!-- Right Image -->

                <div class="nep-right">

                    <img src="new-web/assets/img/inter-multi-disc/img2.png">

                </div>

            </div>

            <!-- Tabs -->

            <div class="nep-tabs">

                <button class="nep-tab active" data-tab="tab1">

                    <span>01</span>

                    <h4>
                        Holistic Education
                        <br>
                        @RGU
                    </h4>

                </button>

                <button class="nep-tab" data-tab="tab2">

                    <span>02</span>

                    <h4>
                        Top 6 benefits of Holistic
                        Education @ RGU
                    </h4>

                </button>

                <button class="nep-tab" data-tab="tab3">

                    <span>03</span>

                    <h4>
                        Course Classification @RGU -
                        Based On NEP 2020
                    </h4>

                </button>

            </div>

            <!-- Content -->

            <div class="nep-content-area">

                <div class="nep-content active" id="tab1">

                    <div class="course-accordion-content">

                        <p class="holistic-intro">
                            Holistic education at the university level focuses on growing students' minds while also
                            supporting their emotions, social skills, values, and physical health. It helps students
                            becoming well-rounded people, global citizens, and lifelong learners. Creating a holistic
                            education environment requires a complete, well-planned strategy and approach.
                        </p>

                        <div class="holistic-section">

                            <h3>
                                Curriculum Design <span>and Integration</span>
                            </h3>

                            <div class="holistic-subsection">

                                <h4>A. Multidisciplinary Learning</h4>

                                <ul>
                                    <li>Multiple disciplines work on a common problem independently.</li>
                                    <li>Microbiology, Mass Communication, Computer Science are some examples of
                                        multidisciplinary courses.</li>
                                </ul>

                            </div>

                            <div class="holistic-subsection">

                                <h4>B. Interdisciplinary Learning</h4>

                                <ul>
                                    <li>Different disciplines collaborate by sharing methods, theories, and perspectives
                                        to address a common problem.</li>
                                    <li>Offer minors and interdisciplinary elective courses from various fields, like
                                        Natural and Physical Sciences, Media Sciences, Mathematics and Computer Science,
                                        Commerce and Management etc.</li>
                                </ul>

                            </div>

                            <div class="holistic-subsection">

                                <h4>C. Value-Based Education</h4>

                                <ul>
                                    <li>Includes common courses or modules on ethics, community engagement and
                                        responsibility, leadership, and sustainable development.</li>
                                </ul>

                            </div>

                            <div class="holistic-subsection">

                                <h4>D. Skill-Based and Experiential Learning</h4>

                                <ul>
                                    <li>Embed critical thinking, communication skill, problem-solving, and digital skill
                                        in the curriculum.</li>
                                    <li>Provide real world experiences such as internships, capstone projects, and field
                                        studies.</li>
                                </ul>

                            </div>

                        </div>

                        <div class="holistic-section">

                            <h3>
                                Supportive Teaching and <span>Learning Practices</span>
                            </h3>

                            <ul>
                                <li>Encourage active learning through flipped classrooms, project-based learning, and
                                    collaborative work.</li>
                                <li>Adopt teaching methods to accommodate diverse learning styles and needs.</li>
                                <li>Create strong mentorship programs where faculty members guide students in academics,
                                    help to inculcate emotional intelligence and counsel along career goals.</li>
                            </ul>

                        </div>

                        <div class="holistic-section">

                            <h3>
                                Co-Curricular and <span>Extra-Curricular Activities</span>
                            </h3>

                            <ul>
                                <li>Support student clubs for arts, debates, environmental issues, business ideas, and
                                    cultural events.</li>
                                <li>Encourage leadership and teamwork through organizing events and competitions.</li>
                                <li>Devote in sports, yoga, mindfulness sessions, and physical fitness programs.</li>
                                <li>Organise workshops/invited talks on mental health, nutrition, and stress management.
                                </li>
                            </ul>

                        </div>

                        <div class="holistic-section">

                            <h3>
                                Campus Environment <span>and Infrastructure</span>
                            </h3>

                            <ul>
                                <li>Recreational spaces of the University encourage openness, introspection, dialogue,
                                    and inclusivity.</li>
                                <li>Provide support centres for health and wellbeing, counselling, and conflict
                                    resolution.</li>
                                <li>Implement eco-friendly practices like waste segregation, zero single use plastic
                                    campus.</li>
                                <li>Offer experiential learning through sustainability projects.</li>
                            </ul>

                        </div>

                        <div class="holistic-section">

                            <h3>
                                Community Engagement <span>and Global Exposure</span>
                            </h3>

                            <ul>
                                <li>Integrate community service opportunities into degree programs.</li>
                                <li>Collaborate with NGOs and adopted villages for outreach programs.</li>
                                <li>Foster respect and appreciation for different cultures through events.</li>
                            </ul>

                        </div>

                        <div class="holistic-section">

                            <h3>
                                Assessment and <span>Feedback Mechanisms</span>
                            </h3>

                            <ul>
                                <li>Evaluate student's emotional growth, leadership skills, and community involvement.
                                </li>
                                <li>Gather feedback from students, teachers, and other stakeholders to keep improving
                                    the holistic education approach.</li>
                            </ul>

                        </div>

                    </div>

                    <style>
                        .holistic-intro {
                            color: #29467B;
                            line-height: 2;
                            margin-bottom: 35px;
                        }

                        .holistic-section {
                            margin-bottom: 45px;
                        }

                        .holistic-section:last-child {
                            margin-bottom: 0;
                        }

                        .holistic-section h3 {
                            font-family: 'Playfair Display', serif;
                            font-size: 42px;
                            color: #29467B;
                            margin-bottom: 25px;
                            font-weight: 700;
                        }

                        .holistic-section h3 span {
                            color: #E26932;
                        }

                        .holistic-subsection {
                            margin-bottom: 30px;
                        }

                        .holistic-subsection h4 {
                            color: #2f2f2f;
                            font-size: 24px;
                            font-weight: 700;
                            margin-bottom: 15px;
                        }

                        .holistic-section ul {
                            margin: 0;
                            padding: 0;
                            list-style: none;
                        }

                        .holistic-section ul li {
                            position: relative;
                            padding-left: 28px;
                            margin-bottom: 16px;
                            color: #29467B;
                            line-height: 1.9;
                        }

                        .holistic-section ul li::before {
                            content: "•";
                            color: #29467B;
                            position: absolute;
                            left: 0;
                            top: 0;
                            font-size: 24px;
                            line-height: 1;
                        }

                        @media(max-width:768px) {

                            .holistic-section h3 {
                                font-size: 28px;
                            }

                            .holistic-subsection h4 {
                                font-size: 18px;
                            }

                        }
                    </style>

                </div>

                <div class="nep-content" id="tab2">

                    <div class="course-accordion-content">

                        <div class="benefits-list">

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Supports students' growth in academics, attitudes, ethics,
                                    social skills, and physical well-being.
                                </p>
                            </div>

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Helps students independent thinking, problem-solving,
                                    and developing independent worldview.
                                </p>
                            </div>

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Teaches students to manage stress, build resilience,
                                    and develop healthy interpersonal relationships.
                                </p>
                            </div>

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Prepares students to be self-directed life long learners.
                                </p>
                            </div>

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Inspires students to make ethical choices and act
                                    responsibly in society.
                                </p>
                            </div>

                            <div class="benefit-item">
                                <span class="benefit-arrow"></span>
                                <p>
                                    Connects different subjects to real-world challenges
                                    for practical understanding.
                                </p>
                            </div>

                        </div>

                        <div class="benefits-image-section">

                            <img src="/mobile-assets/multi-disciplinary/creative3.png"
                                alt="Multidisciplinary Interdisciplinary Transdisciplinary">

                        </div>

                    </div>

                    <style>
                        .benefits-list {
                            margin-bottom: 60px;
                        }

                        .benefit-item {
                            display: flex;
                            align-items: center;
                            gap: 20px;
                            background: #edf7ff;
                            border: 1px solid #d7e3ee;
                            padding: 22px 25px;
                            margin-bottom: 14px;
                        }

                        .benefit-item:last-child {
                            margin-bottom: 0;
                        }

                        .benefit-arrow {
                            width: 0;
                            height: 0;
                            border-top: 18px solid transparent;
                            border-bottom: 18px solid transparent;
                            border-left: 18px solid #f7941d;
                            flex-shrink: 0;
                        }

                        .benefit-item p {
                            margin: 0;
                            color: #29467B;
                            font-size: 28px;
                            line-height: 1.5;
                            font-style: italic;
                            font-weight: 600;
                        }

                        .benefits-image-section {
                            text-align: center;
                        }

                        .benefits-image-section img {
                            max-width: 100%;
                            height: auto;
                            display: inline-block;
                        }

                        /* Tablet */

                        @media(max-width:991px) {

                            .benefit-item p {
                                font-size: 22px;
                            }

                        }

                        /* Mobile */

                        @media(max-width:768px) {

                            .benefit-item {
                                padding: 18px;
                                gap: 15px;
                            }

                            .benefit-arrow {
                                border-top: 14px solid transparent;
                                border-bottom: 14px solid transparent;
                                border-left: 14px solid #f7941d;
                            }

                            .benefit-item p {
                                font-size: 16px;
                            }

                        }
                    </style>

                </div>

                <div class="nep-content" id="tab3">

                    <div class="course-accordion-content">

                        <div class="classification-intro">

                            <p>
                                The Assam Royal Global University introduced the Four-Year Undergraduate (FYUG)
                                Programmes from the Academic Year 2023-24 in alignment with the National Education
                                Policy (NEP) 2020. These programs focus on providing students with a flexible,
                                choice-based credit system and a multidisciplinary approach to education.
                                At RGU, all undergraduate programs (except those regulated by specific
                                professional councils) are structured with a combination of compulsory
                                and elective courses to ensure a well-rounded education and fulfill degree requirements.
                            </p>

                        </div>

                        <!-- TABLE 1 -->

                        <div class="table-responsive classification-table-wrap">

                            <table class="classification-table">

                                <thead>

                                    <tr>
                                        <th>Courses</th>
                                        <th colspan="2">Minimum Credit Requirements</th>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <th>3 Years Degree Course</th>
                                        <th>4 Years Degree Course</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>Major (Core)</td>
                                        <td>60</td>
                                        <td>80</td>
                                    </tr>

                                    <tr>
                                        <td>Minor</td>
                                        <td>24</td>
                                        <td>32</td>
                                    </tr>

                                    <tr>
                                        <td>Interdisciplinary</td>
                                        <td>09</td>
                                        <td>09</td>
                                    </tr>

                                    <tr>
                                        <td>Ability Enhancement Courses (AEC)</td>
                                        <td>08</td>
                                        <td>08</td>
                                    </tr>

                                    <tr>
                                        <td>Skill Enhancement Courses (SEC)</td>
                                        <td>09</td>
                                        <td>09</td>
                                    </tr>

                                    <tr>
                                        <td>Value Added Courses (VAC)</td>
                                        <td>06</td>
                                        <td>06</td>
                                    </tr>

                                    <tr>
                                        <td>Internship</td>
                                        <td>04</td>
                                        <td>04</td>
                                    </tr>

                                    <tr>
                                        <td>Research Project/Dissertation</td>
                                        <td>NA</td>
                                        <td>12</td>
                                    </tr>

                                    <tr class="highlight-row">
                                        <td>Total Credits</td>
                                        <td>120</td>
                                        <td>160</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="table-note">
                            One Course per semester to be studied through swayam up to 6th semester.
                        </p>

                        <!-- TABLE 2 -->

                        <div class="award-heading">

                            <h3>
                                Award of Degree and <span>@ Credit Structure</span>
                            </h3>

                        </div>

                        <div class="table-responsive classification-table-wrap">

                            <table class="classification-table">

                                <thead>

                                    <tr>
                                        <th>Courses</th>
                                        <th>Year</th>
                                        <th>Credits to Earn</th>
                                        <th>Additional Credits</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>UG Certificate</td>
                                        <td>After 1st Year</td>
                                        <td>40</td>
                                        <td>4</td>
                                    </tr>

                                    <tr>
                                        <td>UG Diploma</td>
                                        <td>After 2nd Year</td>
                                        <td>80</td>
                                        <td>4</td>
                                    </tr>

                                    <tr>
                                        <td>UG Degree</td>
                                        <td>After 3rd Year</td>
                                        <td>120</td>
                                        <td>X</td>
                                    </tr>

                                    <tr>
                                        <td>4 Years UG Degree (Honours)</td>
                                        <td>After 4th Year</td>
                                        <td>160</td>
                                        <td>X</td>
                                    </tr>

                                    <tr>
                                        <td>4 Years UG Degree (Honours with Research)</td>
                                        <td>After 4th Year</td>
                                        <td>160</td>
                                        <td>Students who secure cumulative 75% marks and above in the first six
                                            semesters</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <div class="semester-credit-section">

                            <div class="semester-credit-heading">

                                <h2>
                                    Semester - Wise
                                    <span>Credit Distribution For FYUGP</span>
                                </h2>

                                <h4>
                                    In Conformity With The National Credit Frame Work
                                </h4>

                            </div>

                            <div class="table-responsive">

                                <table class="fyugp-table">

                                    <thead>

                                        <tr class="credit-title-row">
                                            <th colspan="10">Course Credits</th>
                                        </tr>

                                        <tr class="table-header-row">
                                            <th>Semesters</th>
                                            <th>Major</th>
                                            <th>Minor</th>
                                            <th>IKS/IDC</th>
                                            <th>AEC</th>
                                            <th>SEC</th>
                                            <th>VAC</th>
                                            <th>SI</th>
                                            <th>Research Project/ Dissertations</th>
                                            <th>Total</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>I</td>
                                            <td>6</td>
                                            <td>3</td>
                                            <td>IKS-I-3</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>II</td>
                                            <td>6</td>
                                            <td>3</td>
                                            <td>IKS-II-3</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>III</td>
                                            <td>8</td>
                                            <td>4</td>
                                            <td>IDC-3</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>IV</td>
                                            <td>12</td>
                                            <td>6</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>V</td>
                                            <td>12</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>VI</td>
                                            <td>16</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>VII</td>
                                            <td>16</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>VIII</td>
                                            <td>4</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>12</td>
                                            <td>20</td>
                                        </tr>

                                        <tr class="total-row">
                                            <td>Total</td>
                                            <td>80</td>
                                            <td>32</td>
                                            <td>9</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>6</td>
                                            <td>4</td>
                                            <td>12</td>
                                            <td>160</td>
                                        </tr>

                                        <tr class="total-row">
                                            <td>Courses</td>
                                            <td>17</td>
                                            <td>8</td>
                                            <td>3</td>
                                            <td>8</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <style>
                        .classification-intro p {
                            color: #29467B;
                            line-height: 2;
                            margin-bottom: 30px;
                        }

                        .classification-table-wrap {
                            margin-bottom: 30px;
                        }

                        .classification-table {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        .classification-table thead tr:first-child {
                            background: #f58220;
                        }

                        .classification-table thead tr:first-child th {
                            color: #fff;
                            font-weight: 700;
                        }

                        .classification-table thead tr:nth-child(2) {
                            background: #f5eadc;
                        }

                        .classification-table th,
                        .classification-table td {
                            border: 1px solid #ece2d5;
                            padding: 12px 15px;
                        }

                        .classification-table td {
                            background: #f9efe4;
                        }

                        .classification-table td:first-child {
                            text-align: left;
                        }

                        .classification-table td:not(:first-child),
                        .classification-table th:not(:first-child) {
                            text-align: center;
                        }

                        .highlight-row td {
                            font-weight: 700;
                        }

                        .table-note {
                            text-align: center;
                            color: #29467B;
                            font-size: 22px;
                            margin: 30px 0 50px;
                            font-family: 'Playfair Display', serif;
                        }

                        .award-heading {
                            text-align: center;
                            margin-bottom: 30px;
                        }

                        .award-heading h3 {
                            font-family: 'Playfair Display', serif;
                            color: #29467B;
                            font-size: 48px;
                        }

                        .award-heading span {
                            color: #f58220;
                        }

                        .classification-image {
                            margin-top: 40px;
                            text-align: center;
                        }

                        .classification-image img {
                            max-width: 100%;
                            height: auto;
                            display: inline-block;
                        }

                        @media(max-width:768px) {

                            .award-heading h3 {
                                font-size: 28px;
                            }

                            .table-note {
                                font-size: 18px;
                            }

                        }
                    </style>

                    <style>
                        .semester-credit-section {
                            margin-top: 60px;
                        }

                        .semester-credit-heading {
                            margin-bottom: 30px;
                        }

                        .semester-credit-heading h2 {
                            font-family: 'Playfair Display', serif;
                            color: #29467B;
                            font-size: 56px;
                            line-height: 1.1;
                            margin-bottom: 15px;
                        }

                        .semester-credit-heading h2 span {
                            display: block;
                            color: #f58220;
                        }

                        .semester-credit-heading h4 {
                            color: #29467B;
                            font-size: 28px;
                            font-weight: 700;
                        }

                        .fyugp-table {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        .credit-title-row th {
                            background: #f58220;
                            color: #fff;
                            text-align: center;
                            font-size: 24px;
                            padding: 18px;
                        }

                        .table-header-row th {
                            background: #0d4168;
                            color: #fff;
                            padding: 16px;
                            text-align: center;
                        }

                        .fyugp-table td {
                            background: #f3e7da;
                            border: 1px solid #fff;
                            text-align: center;
                            padding: 12px;
                            color: #1d3557;
                        }

                        .total-row td {
                            font-weight: 700;
                        }

                        @media(max-width:768px) {

                            .semester-credit-heading h2 {
                                font-size: 34px;
                            }

                            .semester-credit-heading h4 {
                                font-size: 18px;
                            }

                            .fyugp-table {
                                min-width: 1100px;
                            }

                        }
                    </style>


                </div>

            </div>

        </div>

    </section>

    <style>
        .nep-structure-sec {
            background: #eef3fb;
            padding: 80px 0;
        }

        .nep-structure-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        .nep-top-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 60px;
        }

        .nep-left h2 {
            font-family: 'Playfair Display', serif;
            color: #29467B;
            font-size: 40px;
            line-height: 1.1;
            margin-bottom: 35px;
        }

        .nep-feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nep-feature-list li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 20px;
            color: #5a6170;
            line-height: 1.7;
        }

        .nep-feature-list li::before {
            content: '';
            width: 8px;
            height: 8px;
            background: #E26932;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 10px;
        }

        .nep-right {
            border-radius: 22px;
            overflow: hidden;
        }

        .nep-right img {
            width: 100%;
            height: 430px;
            object-fit: cover;
            display: block;
        }

        .nep-tabs {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 35px;
        }

        .nep-tab {
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 0;
        }

        .nep-tab span {
            min-width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dbe7f8;
            color: #29467B;
            border-radius: 8px;
            font-weight: 700;
        }

        .nep-tab.active span {
            background: #E26932;
            color: #fff;
        }

        .nep-tab h4 {
            font-size: 28px;
            color: #4b5565;
            margin: 0;
            line-height: 1.3;
            font-family: 'Playfair Display', serif;
        }

        .nep-tab.active h4 {
            color: #E26932;
        }

        .nep-content-area {
            border-top: 1px solid #d3d9e4;
            padding-top: 35px;
        }

        .nep-content {
            display: none;
        }

        .nep-content.active {
            display: block;
        }

        .nep-content p {
            color: #5a6170;
            line-height: 2;
            margin: 0;
        }

        /* Responsive */

        @media(max-width:991px) {

            .nep-top-section {
                grid-template-columns: 1fr;
            }

            .nep-left h2 {
                font-size: 42px;
            }

            .nep-tabs {
                grid-template-columns: 1fr;
                gap: 25px;
            }

        }

        @media(max-width:768px) {

            .nep-left h2 {
                font-size: 34px;
            }

            .nep-right img {
                height: 280px;
            }

            .nep-tab h4 {
                font-size: 22px;
            }

        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const tabs = document.querySelectorAll('.nep-tab');
            const contents = document.querySelectorAll('.nep-content');

            tabs.forEach(tab => {

                tab.addEventListener('click', function() {

                    const target = this.getAttribute('data-tab');

                    tabs.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    contents.forEach(content => {
                        content.classList.remove('active');
                    });

                    this.classList.add('active');

                    document
                        .getElementById(target)
                        .classList.add('active');

                });

            });

        });
    </script>

    <section class="curriculum-design-sec">


        <div class="curriculum-design-container">
            <hr>

            <!-- SECTION 1 -->

            <div class="curriculum-block">

                <h2>
                    Curriculum Design and Integration
                </h2>

                <div class="curriculum-item">

                    <h3>
                        A. Multidisciplinary Learning
                    </h3>

                    <ul>
                        <li>Multiple disciplines work on a common problem independently.</li>
                        <li>Microbiology, Mass Communication, Computer Science are some examples of multidisciplinary
                            courses.</li>
                    </ul>

                </div>

                <div class="curriculum-item">

                    <h3>
                        B. Interdisciplinary Learning
                    </h3>

                    <ul>
                        <li>Different disciplines collaborate by sharing methods, theories and perspectives to address a
                            common problem.</li>
                        <li>Offer minors and interdisciplinary elective courses from various fields, like Natural and
                            Physical Sciences, Media Sciences, Mathematics and Computer Science, Commerce and Management
                            etc.</li>
                    </ul>

                </div>

                <div class="curriculum-item">

                    <h3>
                        C. Value-Based Education
                    </h3>

                    <ul>
                        <li>Includes common courses or modules on ethics, community engagement and responsibility,
                            leadership, and sustainable development.</li>
                    </ul>

                </div>

                <div class="curriculum-item">

                    <h3>
                        D. Skill-Based and Experiential Learning
                    </h3>

                    <ul>
                        <li>Embed critical thinking, communication skill, problem-solving, and digital skill in the
                            curriculum.</li>
                        <li>Provide real world experiences such as internships, capstone projects, and field studies.
                        </li>
                    </ul>

                </div>

            </div>


            <!-- SECTION 2 -->

            <div class="curriculum-block">

                <h2>
                    Supportive Teaching and Learning Practices
                </h2>

                <ul class="curriculum-list">

                    <li>
                        Encourage active learning through flipped classrooms,
                        project-based learning, and collaborative work.
                    </li>

                    <li>
                        Adopt teaching methods to accommodate diverse learning
                        styles and needs.
                    </li>

                    <li>
                        Create strong mentorship programs where faculty members
                        guide students in academics, help to inculcate emotional
                        intelligence and counsel along career goals.
                    </li>

                </ul>

            </div>


            <!-- SECTION 3 -->

            <div class="curriculum-block">

                <h2>
                    Co-Curricular and Extra-Curricular Activities
                </h2>

                <ul class="curriculum-list">

                    <li>
                        Support student clubs for arts, debates,
                        environmental issues, business ideas, and cultural events.
                    </li>

                    <li>
                        Encourage leadership and teamwork through organizing
                        events and competitions.
                    </li>

                    <li>
                        Devote in sports, yoga, mindfulness sessions,
                        and physical fitness programs.
                    </li>

                    <li>
                        Organise workshops/invited talks on mental health,
                        nutrition, and stress management.
                    </li>

                </ul>

            </div>

            <!-- SECTION 4 -->

            <div class="curriculum-block">

                <h2>
                    Campus Environment and Infrastructure
                </h2>

                <ul class="curriculum-list">

                    <li>
                        Recreational spaces of the University encourage openness,
                        introspection, dialogue, and inclusivity.
                    </li>

                    <li>
                        Provide support centres for health and wellbeing,
                        counselling, and conflict resolution.
                    </li>

                    <li>
                        Implement eco-friendly practices like waste segregation,
                        zero single use plastic campus.
                    </li>

                    <li>
                        Offer experiential learning through sustainability projects.
                    </li>

                </ul>

            </div>


            <!-- SECTION 5 -->

            <div class="curriculum-block">

                <h2>
                    Community Engagement and Global Exposure
                </h2>

                <ul class="curriculum-list">

                    <li>
                        Integrate community service opportunities into degree programs.
                    </li>

                    <li>
                        Collaborate with NGOs and adopted villages for outreach programs.
                    </li>

                    <li>
                        Foster respect and appreciation for different cultures through events.
                    </li>

                </ul>

            </div>


            <!-- SECTION 6 -->

            <div class="curriculum-block">

                <h2>
                    Assessment and Feedback Mechanisms
                </h2>

                <ul class="curriculum-list">

                    <li>
                        Evaluate student's emotional growth, leadership skills,
                        and community involvement.
                    </li>

                    <li>
                        Gather feedback from students, teachers, and other stakeholders
                        to keep improving the holistic education approach.
                    </li>

                </ul>

            </div>

        </div>

    </section>

    <style>
        /* ==========================================
       CURRICULUM DESIGN SECTION
    ========================================== */

        .curriculum-design-sec {
            background: #eef3fb;
            padding: 20px 0 80px;
        }

        .curriculum-design-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        .curriculum-block {
            margin-bottom: 70px;
        }

        .curriculum-block:last-child {
            margin-bottom: 0;
        }

        /* Main Blue Heading */

        .curriculum-block h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #29467B;
            line-height: 1.15;
            margin-bottom: 35px;
            font-weight: 700;
        }

        /* Orange Sub Headings */

        .curriculum-item {
            margin-bottom: 40px;
        }

        .curriculum-item:last-child {
            margin-bottom: 0;
        }

        .curriculum-item h3 {
            color: #E26932;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Lists */

        .curriculum-item ul,
        .curriculum-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .curriculum-item ul li,
        .curriculum-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 22px;
            color: #5c6472;
            font-size: 15px;
            line-height: 1.9;
        }

        .curriculum-item ul li:last-child,
        .curriculum-list li:last-child {
            margin-bottom: 0;
        }

        .curriculum-item ul li::before,
        .curriculum-list li::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #E26932;
            position: absolute;
            left: 0;
            top: 10px;
        }

        /* Smooth Appearance */

        .curriculum-block {
            opacity: 0;
            transform: translateY(40px);
            transition: .8s ease;
        }

        .curriculum-block.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==========================================
       RESPONSIVE
    ========================================== */

        @media(max-width:1200px) {

            .curriculum-block h2 {
                font-size: 44px;
            }

        }

        @media(max-width:991px) {

            .curriculum-block {
                margin-bottom: 50px;
            }

            .curriculum-block h2 {
                font-size: 36px;
            }

        }

        @media(max-width:768px) {

            .curriculum-design-sec {
                padding: 10px 0 50px;
            }

            .curriculum-block h2 {
                font-size: 30px;
                margin-bottom: 25px;
            }

            .curriculum-item h3 {
                font-size: 18px;
            }

            .curriculum-item ul li,
            .curriculum-list li {
                font-size: 14px;
                line-height: 1.8;
            }

        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const curriculumBlocks =
                document.querySelectorAll('.curriculum-block');

            const observer = new IntersectionObserver(

                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add('show');

                        }

                    });

                },

                {
                    threshold: 0.15
                }

            );

            curriculumBlocks.forEach(block => {

                observer.observe(block);

            });

        });
    </script>


    <section class="common-courses-sec">

        <div class="common-courses-container">

            <div class="common-courses-header">

                <h2>
                    Common Courses
                </h2>

                <p>
                    To ensure a well-rounded education, The Assam Royal Global University includes
                    Common Courses in its curriculum. These courses are designed to enhance students'
                    foundational skills and prepare them for academic, professional, and social success.
                </p>

            </div>

            <div class="common-courses-accordion">

                <!-- Item 1 -->

                <div class="course-accordion-item active">

                    <button class="course-accordion-header">

                        <span>
                            Ability Enhancement Courses (AEC)
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="aec-intro">

                                <h2>Ability Enhancement Courses (AEC)</h2>

                                <p>
                                    The Ability Enhancement Courses (AEC) focus on developing essential skills
                                    that are crucial for academic and professional growth. AEC consists of two
                                    key courses:
                                </p>

                            </div>

                            <div class="aec-course-grid">

                                <div class="aec-course-card">

                                    <h3>
                                        <span>01.</span>
                                        Communicative English
                                    </h3>

                                    <p>
                                        This course helps students develop strong language skills,
                                        including critical reading, effective writing, and business
                                        communication. The course emphasizes language as a tool for
                                        knowledge and identity, ensuring that students can communicate
                                        effectively in diverse environments.
                                    </p>

                                </div>

                                <div class="aec-course-card">

                                    <h3>
                                        <span>02.</span>
                                        Behavioural Science
                                    </h3>

                                    <p>
                                        This course focuses on understanding human behaviour and
                                        attitudes in different situations, particularly in modern
                                        organizations. It helps students improve their decision-making,
                                        emotional intelligence, and interpersonal skills, preparing
                                        them to navigate social and professional challenges effectively.
                                    </p>

                                </div>

                            </div>

                            <div class="table-responsive">

                                <table class="aec-table">

                                    <thead>

                                        <tr>
                                            <th>Semesters</th>
                                            <th>Name of the Courses (Papers)</th>
                                            <th>Credits</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td rowspan="2">I</td>
                                            <td>Communicative English – I: Introduction to Effective Communication</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td>Behavioural Sciences - I</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">II</td>
                                            <td>Communicative English – II: Approaches to Verbal and Non-Verbal
                                                Communication</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td>Behavioural Sciences - II</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">III</td>
                                            <td>Communicative English – III: Fundamentals of Business Communication</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td>Behavioural Sciences - III</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">IV</td>
                                            <td>Communicative English – IV: Employability and Communication</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td>Behavioural Sciences - IV</td>
                                            <td>1</td>
                                        </tr>

                                        <tr class="aec-total-row">
                                            <td colspan="2">
                                                <strong>8 Courses (Papers)</strong>
                                            </td>
                                            <td>
                                                <strong>8</strong>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <style>
                            .aec-intro {
                                margin-bottom: 40px;
                            }

                            .aec-intro h2 {
                                font-family: 'Playfair Display', serif;
                                color: #29467B;
                                font-size: 30px;
                                margin-bottom: 15px;
                            }

                            .aec-intro p {
                                color: #29467B;
                                line-height: 1.9;
                                font-size: 18px;
                            }

                            .aec-course-grid {
                                display: grid;
                                grid-template-columns: repeat(2, 1fr);
                                gap: 50px;
                                margin-bottom: 50px;
                            }

                            .aec-course-card h3 {
                                font-family: 'Playfair Display', serif;
                                font-size: 32px;
                                color: #29467B;
                                margin-bottom: 20px;
                                line-height: 1.2;
                            }

                            .aec-course-card h3 span {
                                color: #f58220;
                            }

                            .aec-course-card p {
                                color: #29467B;
                                line-height: 2;
                                font-size: 17px;
                            }

                            .aec-table {
                                width: 100%;
                                border-collapse: collapse;
                            }

                            .aec-table th {
                                background: #f58220;
                                color: #fff;
                                padding: 16px;
                                font-size: 18px;
                                text-align: center;
                            }

                            .aec-table td {
                                background: #f4e7da;
                                border: 1px solid #fff;
                                padding: 12px 16px;
                                color: #1f3556;
                            }

                            .aec-table td:first-child,
                            .aec-table td:last-child {
                                text-align: center;
                                width: 120px;
                            }

                            .aec-total-row td {
                                font-size: 20px;
                                text-align: center;
                            }

                            @media(max-width:991px) {

                                .aec-course-grid {
                                    grid-template-columns: 1fr;
                                    gap: 30px;
                                }

                                .aec-course-card h3 {
                                    font-size: 30px;
                                }

                                .aec-intro h2 {
                                    font-size: 34px;
                                }

                            }

                            @media(max-width:768px) {

                                .aec-table {
                                    min-width: 900px;
                                }

                            }
                        </style>

                    </div>

                </div>

                <!-- Item 2 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            Indian Knowledge System
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="course-accordion-content">

                                <div class="iks-banner">

                                    <img src="/mobile-assets/multi-disciplinary/img2.png" alt="Indian Knowledge System">

                                </div>

                                <div class="iks-content">

                                    <h2>Indian Knowledge System</h2>

                                    <p>
                                        As part of the Four-Year Undergraduate Programmes (FYUGP),
                                        students are encouraged to take courses in the Indian Knowledge
                                        System (IKS) to ensure a well-rounded understanding of India's
                                        rich intellectual traditions. The total credits earned from IKS
                                        courses should amount to at least 5% of the total mandated credits:
                                    </p>

                                    <div class="iks-credit-box">

                                        <p>8 credits for a 4-year UG programme</p>

                                        <p>6 credits for a 3-year UG programme</p>

                                    </div>

                                    <h3>
                                        Under the NEP 2020 Course Structure, All Students Will be Required to Enroll in
                                    </h3>

                                    <ul class="iks-list">

                                        <li>
                                            Introduction to Indian Knowledge System - I
                                            (3 Credits) (Semester I)
                                        </li>

                                        <li>
                                            Introduction to Indian Knowledge System - II
                                            (3 Credits) (Semester II)
                                        </li>

                                    </ul>

                                    <p>
                                        These courses introduce students to India's diverse intellectual
                                        heritage, covering areas such as philosophy, science, arts,
                                        literature, and traditional knowledge systems. By integrating IKS
                                        into the curriculum, RGU ensures that students gain a deeper
                                        appreciation of India's contributions to global knowledge and
                                        innovation while also fostering a multidisciplinary approach to education.
                                    </p>

                                </div>

                                <div class="iks-gallery">

                                    <div class="iks-gallery-item">
                                        <img src="/mobile-assets/multi-disciplinary/img3.png" alt="Ancient Manuscript">
                                    </div>

                                </div>

                            </div>

                            <style>
                                /* ===========================
       IKS ACCORDION
    =========================== */

                                .iks-banner {
                                    margin-bottom: 50px;
                                }

                                .iks-banner img {
                                    width: 100%;
                                    border-radius: 6px;
                                    display: block;
                                }

                                .iks-content h2 {
                                    font-family: 'Playfair Display', serif;
                                    color: #29467B;
                                    font-size: 46px;
                                    margin-bottom: 20px;
                                }

                                .iks-content p {
                                    color: #29467B;
                                    line-height: 2;
                                    margin-bottom: 20px;
                                }

                                .iks-credit-box {
                                    margin: 25px 0;
                                }

                                .iks-credit-box p {
                                    font-size: 32px;
                                    font-weight: 700;
                                    color: #29467B;
                                    margin-bottom: 10px;
                                    line-height: 1.4;
                                }

                                .iks-content h3 {
                                    font-family: 'Playfair Display', serif;
                                    color: #29467B;
                                    font-size: 42px;
                                    margin: 35px 0 25px;
                                    line-height: 1.4;
                                }

                                .iks-list {
                                    margin: 0 0 30px;
                                    padding-left: 25px;
                                }

                                .iks-list li {
                                    color: #29467B;
                                    font-size: 22px;
                                    margin-bottom: 15px;
                                    line-height: 1.8;
                                }

                                .iks-gallery {
                                    display: grid;
                                    grid-template-columns: 1fr;
                                    gap: 30px;
                                    margin-top: 40px;
                                }

                                .iks-gallery-item img {
                                    width: 100%;
                                    height: 350px;
                                    object-fit: cover;
                                    display: block;
                                    border-radius: 6px;
                                }

                                /* Mobile */

                                @media(max-width:991px) {

                                    .iks-content h2 {
                                        font-size: 34px;
                                    }

                                    .iks-content h3 {
                                        font-size: 28px;
                                    }

                                    .iks-credit-box p {
                                        font-size: 24px;
                                    }

                                    .iks-list li {
                                        font-size: 18px;
                                    }

                                }

                                @media(max-width:768px) {

                                    .iks-gallery {
                                        grid-template-columns: 1fr;
                                    }

                                    .iks-gallery-item img {
                                        height: auto;
                                    }

                                }
                            </style>

                        </div>

                    </div>

                </div>

                <!-- Item 3 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            Elective Courses
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="elective-content">

                                <h2>Elective Courses</h2>

                                <p>
                                    To provide students with greater academic flexibility and practical skills,
                                    The Assam Royal Global University offers Elective Courses, which include
                                    Minor Courses and Skill Enhancement Courses (SEC).
                                </p>

                                <div class="elective-section">

                                    <h3>
                                        <span>01.</span>
                                        Minor Courses: (Disciplinary/ Interdisciplinary)
                                    </h3>

                                    <h4>
                                        There are two kinds of Minor courses available
                                    </h4>

                                    <p>
                                        <strong class="highlight-orange">Disciplinary Minors:</strong>
                                        Disciplinary minor courses focus on a single academic field,
                                        providing in-depth knowledge within that area. These courses
                                        offer a detailed understanding of the chosen subject area.
                                        For example, students of B. Com will study minors from the
                                        track “Commerce and Management” which includes Business Economics,
                                        Strategic Business Leader, Digital Marketing, Rural Development,
                                        Portfolio Management etc.
                                    </p>

                                    <p>
                                        <strong class="highlight-orange">Interdisciplinary Minors:</strong>
                                        Interdisciplinary minor courses, on the other hand, combine
                                        knowledge and perspectives from multiple disciplines to address
                                        complex issues, offering a broader understanding.
                                    </p>

                                    <h4>
                                        Key Features of <span class="highlight-orange">Minor Courses:</span>
                                    </h4>

                                    <ul class="elective-list">

                                        <li>
                                            Optional, but beneficial for academic and professional development.
                                        </li>

                                        <li>
                                            Usually pursued alongside the main degree program.
                                        </li>

                                        <li>
                                            Enhances career opportunities by adding diversity to a student's skill set.
                                        </li>

                                        <li>
                                            Encourages interdisciplinary learning.
                                        </li>

                                        <li>
                                            There are 36 different tracks available under Minor Courses like
                                            Communication and Media, Management, Psychology, Information Technology,
                                            English Literature, History, Economics, Biotechnology, Physiotherapy etc.
                                            All departments of RGU offer at least one minor track for students from
                                            other disciplines.
                                        </li>

                                    </ul>

                                    <p>
                                        Students have the flexibility to choose Minor Courses from different
                                        disciplines or interdisciplinary fields alongside their major. These
                                        courses allow students to gain additional expertise in a subject area
                                        beyond their primary field of study. A student qualifies for a minor by
                                        completing the required number of courses in a particular discipline or
                                        interdisciplinary area. Students can explore various options before
                                        declaring their minor at the beginning of the first semester. This
                                        structure enables a broader learning experience, fostering
                                        multidisciplinary knowledge and diverse career opportunities.
                                    </p>

                                </div>

                                <div class="elective-section">

                                    <h3>
                                        <span>02.</span>
                                        Skill Enhancement Courses
                                    </h3>

                                    <p>
                                        All departments design these courses as per the students'
                                        needs and available institutional resources.
                                    </p>

                                    <h4>
                                        Key Features of
                                        <span class="highlight-orange">
                                            Skill Enhancement Courses:
                                        </span>
                                    </h4>

                                    <ul class="elective-list">

                                        <li>Focus on practical and employable skills.</li>

                                        <li>Involve hands-on training, projects, and assessments.</li>

                                        <li>
                                            Bridge the gap between academic knowledge and industry requirements.
                                        </li>

                                        <li>
                                            Improve students' confidence and competence in specific areas of required
                                            skill.
                                        </li>

                                    </ul>

                                    <h4>
                                        Types of
                                        <span class="highlight-orange">
                                            Skill Enhancement Courses:
                                        </span>
                                    </h4>

                                    <ul class="elective-list">

                                        <li>
                                            <strong>Professional/Technical Skills:</strong>
                                            Python, JavaScript, Web Development, Microsoft Excel,
                                            Machine Learning, Cybersecurity, Networking, Tally etc.
                                        </li>

                                        <li>
                                            <strong>Creative Skills:</strong>
                                            Photoshop, Illustrator, Video Editing, Photography etc.
                                        </li>

                                        <li>
                                            <strong>Soft Skills & Communication:</strong>
                                            Public Speaking, Leadership & Team Management,
                                            Negotiation & Conflict Resolution, Emotional Intelligence,
                                            Time Management & Productivity.
                                        </li>

                                        <li>
                                            <strong>Language & Communication:</strong>
                                            Technical Writing, Creative Writing, Blogging etc.
                                        </li>

                                        <li>
                                            <strong>Entrepreneurship & Business:</strong>
                                            Business Strategy, Startup Fundamentals, E-commerce,
                                            Digital Marketing etc.
                                        </li>

                                        <li>
                                            <strong>Personal Development:</strong>
                                            Stress Management, Decision Making & Critical Thinking,
                                            Personal Finance.
                                        </li>

                                    </ul>

                                    <p>
                                        Skill Enhancement Courses (SEC) focus on practical skills,
                                        hands-on training, and soft skills to enhance students'
                                        employability and industry readiness. These courses are aligned
                                        with the student's major discipline until Semester III to bridge
                                        the gap between theoretical knowledge and practical application,
                                        equipping students with essential competencies for professional
                                        success. For example, students majoring in English may choose
                                        from SEC courses such as Public Speaking, Creative Writing,
                                        Text Editing, Translation & Editing and Content Writing.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <style>
                            /* ===========================
       ELECTIVE COURSES
    =========================== */

                            .elective-content h2 {
                                font-family: 'Playfair Display', serif;
                                font-size: 30px;
                                color: #29467B;
                                margin-bottom: 20px;
                                font-weight: 700;
                            }

                            .elective-content p {
                                color: #29467B;
                                line-height: 2;
                                margin-bottom: 22px;
                            }

                            .elective-section {
                                margin-top: 40px;
                            }

                            .elective-section h3 {
                                font-family: 'Playfair Display', serif;
                                font-size: 22px;
                                color: #29467B;
                                margin-bottom: 25px;
                                line-height: 1.5;
                            }

                            .elective-section h3 span {
                                color: #f58220;
                                font-size: 32px;
                                margin-right: 10px;
                            }

                            .elective-section h4 {
                                font-size: 18px;
                                color: #29467B;
                                font-weight: 700;
                                margin-bottom: 20px;
                                line-height: 1.6;
                            }

                            .highlight-orange {
                                color: #f58220;
                            }

                            .elective-list {
                                margin: 0 0 25px;
                                padding-left: 25px;
                            }

                            .elective-list li {
                                color: #29467B;
                                line-height: 1.9;
                                margin-bottom: 12px;
                            }

                            .elective-list li::marker {
                                color: #29467B;
                            }

                            @media(max-width:768px) {

                                .elective-content h2 {
                                    font-size: 26px;
                                }

                                .elective-section h3 {
                                    font-size: 20px;
                                }

                                .elective-section h3 span {
                                    font-size: 28px;
                                }

                            }
                        </style>

                    </div>

                </div>

                <!-- Item 4 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            Value Added Courses
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="vac-content">

                                <h2>Value Added Courses</h2>

                                <p>
                                    Value Added Courses (VAC) are designed to broaden students'
                                    perspectives and enhance their knowledge beyond their core subjects.
                                    These courses focus on key areas that contribute to holistic education,
                                    personal development, and employability. The VAC curriculum is
                                    categorized into four major areas:
                                </p>

                                <!-- AREA 1 + AREA 2 -->

                                <div class="vac-grid">

                                    <div class="vac-card">

                                        <h3>
                                            Area-I
                                            <span>Understanding India</span>
                                        </h3>

                                        <p>
                                            These courses help students develop a deep understanding of
                                            contemporary India, emphasizing its historical foundations,
                                            national development policies, constitutional values, and
                                            fundamental rights and duties. The objective is to instill
                                            civic awareness and responsibility, ensuring that students
                                            appreciate the country's diverse socio-political and cultural framework.
                                        </p>

                                    </div>

                                    <div class="vac-card">

                                        <h3>
                                            Area-II
                                            <span>Environment Science & Education</span>
                                        </h3>

                                        <p>
                                            This category focuses on environmental awareness and
                                            sustainability. Students will learn how to apply knowledge,
                                            skills, and values to address environmental challenges and
                                            take responsible actions to mitigate environmental degradation.
                                            The goal is to prepare students to contribute to a more
                                            sustainable and ecologically balanced future.
                                        </p>

                                    </div>

                                </div>

                                <!-- AREA 3 + IMAGE -->

                                <div class="vac-grid align-center">

                                    <div class="vac-card">

                                        <h3>
                                            Area-III
                                            <span>Digital And Technological Solutions</span>
                                        </h3>

                                        <p>
                                            This course introduces students to modern technologies like
                                            Artificial Intelligence (AI), 3-D machining, big data analysis,
                                            machine learning, drone technologies, and deep learning.
                                            These technologies are becoming increasingly important in fields
                                            like healthcare, environmental protection, and sustainable living.
                                        </p>

                                        <p>
                                            By learning these skills, students can improve their
                                            problem-solving abilities, increase their career opportunities,
                                            and stay prepared for future technological advancements.
                                            The goal is to make students comfortable with using technology
                                            in real-life applications, making them more employable and
                                            adaptable in the digital world.
                                        </p>

                                    </div>

                                    <!-- IMAGE PLACEHOLDER -->

                                    <div class="vac-image-block">

                                        <img src="/mobile-assets/multi-disciplinary/img4.png" alt="Technology Education">

                                    </div>

                                </div>

                                <!-- BOTTOM IMAGE + AREA 4 -->

                                <div class="vac-grid align-center reverse-mobile">

                                    <!-- IMAGE PLACEHOLDER -->

                                    <div class="vac-image-block">

                                        <img src="/mobile-assets/multi-disciplinary/img5a.png" alt="Health Wellness">

                                    </div>

                                    <div class="vac-card">

                                        <h3>
                                            Area-IV
                                            <span>
                                                Health & Wellness,
                                                Yoga Education,
                                                Sports, and Fitness
                                            </span>
                                        </h3>

                                        <p>
                                            This course focuses on helping students maintain a healthy
                                            lifestyle through activities like sports, yoga, and fitness
                                            training. Students will learn how to take care of their bodies
                                            and minds, manage stress, and develop self-discipline.
                                        </p>

                                        <p>
                                            Sports and fitness activities will be conducted outside
                                            regular class hours to encourage students to stay active.
                                            Yoga education will help students build mental strength,
                                            self-control, and inner peace, making them better prepared
                                            to handle life's challenges.
                                        </p>

                                        <p>
                                            The aim is to ensure that students lead a balanced life,
                                            staying fit both physically and mentally while also learning
                                            the importance of teamwork, leadership, and self-care.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <style>
                            /* ===========================
       VALUE ADDED COURSES
    =========================== */

                            .vac-content h2 {
                                font-family: 'Playfair Display', serif;
                                font-size: 30px;
                                color: #29467B;
                                margin-bottom: 20px;
                                font-weight: 700;
                            }

                            .vac-content>p {
                                color: #29467B;
                                line-height: 2;
                                margin-bottom: 40px;
                            }

                            .vac-grid {
                                display: grid;
                                grid-template-columns: 1fr 1fr;
                                gap: 50px;
                                margin-bottom: 60px;
                            }

                            .align-center {
                                align-items: center;
                            }

                            .vac-card h3 {
                                font-family: 'Playfair Display', serif;
                                color: #29467B;
                                margin-bottom: 20px;
                                font-size: 22px;
                                line-height: 1.3;
                            }

                            .vac-card h3 span {
                                display: block;
                                color: #f58220;
                                font-size: 48px;
                                margin-top: 5px;
                                line-height: 1.15;
                            }

                            .vac-card p {
                                color: #29467B;
                                line-height: 2;
                                margin-bottom: 15px;
                            }

                            .vac-image-block {
                                text-align: center;
                            }

                            .vac-image-block img {
                                width: 100%;
                                max-width: 550px;
                                border-radius: 4px;
                                display: block;
                                margin: auto;
                            }

                            /* Mobile */

                            @media(max-width:991px) {

                                .vac-grid {
                                    grid-template-columns: 1fr;
                                    gap: 35px;
                                }

                                .vac-card h3 span {
                                    font-size: 34px;
                                }

                            }

                            @media(max-width:768px) {

                                .vac-content h2 {
                                    font-size: 26px;
                                }

                                .vac-card h3 span {
                                    font-size: 28px;
                                }

                                .reverse-mobile {
                                    display: flex;
                                    flex-direction: column-reverse;
                                }

                            }
                        </style>

                    </div>

                </div>

                <!-- Item 5 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            Multidisciplinary / Interdisciplinary Courses
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="mid-content">

                                <p>
                                    Interdisciplinary and multidisciplinary courses are designed to offer
                                    a broader and more holistic education at the undergraduate level.
                                    These courses allow students to connect their major area of study
                                    with other disciplines, enriching their learning experience and
                                    enhancing their knowledge across multiple fields.
                                </p>

                                <p>
                                    Under the National Education Policy (NEP) 2020, undergraduate
                                    education encourages a blend of humanities, arts, and STEM
                                    (Science, Technology, Engineering, and Mathematics) to promote
                                    critical thinking, creativity, problem-solving, teamwork,
                                    communication skills, and social awareness.
                                </p>

                                <p>
                                    This approach leads to better learning outcomes, innovation,
                                    and a deeper understanding of various subjects. As part of the
                                    curriculum, students enrolled under the NEP 2020 framework
                                    (Batch 2023 onwards) must complete at least one interdisciplinary
                                    or multidisciplinary course of their choice.
                                </p>

                                <p>
                                    Each department at RGU has developed multidisciplinary/
                                    interdisciplinary courses, offering students an opportunity
                                    to explore subjects beyond their major discipline.
                                    However, students cannot choose or repeat courses that they
                                    have already studied in their major or minor stream under
                                    this category.
                                </p>

                                <p>
                                    These courses are a part of liberal arts and science education,
                                    ensuring that students develop a well-rounded perspective and
                                    are equipped with cross-disciplinary knowledge that will benefit
                                    them in their careers and lifelong learning.
                                </p>

                                <div class="mid-heading">

                                    <h2>
                                        <span class="orange-text">Areas of</span>

                                        Interdisciplinary/

                                        <br>

                                        Multidisciplinary

                                        <span class="orange-text">
                                            Courses @RGU
                                        </span>
                                    </h2>

                                </div>

                                <!-- Landscape Image -->

                                <div class="mid-banner-image">

                                    <img src="/mobile-assets/multi-disciplinary/creative4.png"
                                        alt="Areas of Interdisciplinary Multidisciplinary Courses">

                                </div>

                            </div>

                        </div>

                        <style>
                            /* ===========================
       MULTIDISCIPLINARY COURSES
    =========================== */

                            .mid-content p {
                                color: #29467B;
                                line-height: 2;
                                margin-bottom: 20px;
                            }

                            .mid-heading {
                                text-align: center;
                                margin: 70px 0 50px;
                            }

                            .mid-heading h2 {
                                font-family: 'Playfair Display', serif;
                                font-size: 30px;
                                line-height: 1.2;
                                color: #29467B;
                                font-weight: 700;
                            }

                            .orange-text {
                                color: #f58220;
                            }

                            .mid-banner-image {
                                margin-top: 20px;
                            }

                            .mid-banner-image img {
                                width: 100%;
                                display: block;
                                border-radius: 6px;
                            }

                            /* Tablet */

                            @media(max-width:991px) {

                                .mid-heading h2 {
                                    font-size: 48px;
                                }

                            }

                            /* Mobile */

                            @media(max-width:768px) {

                                .mid-heading {
                                    margin: 50px 0 30px;
                                }

                                .mid-heading h2 {
                                    font-size: 30px;
                                    line-height: 1.4;
                                }

                            }
                        </style>

                    </div>

                </div>

                <!-- Item 6 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            Integrated Programme With Civil Service Coaching
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="course-accordion-content">

                                <div class="cse-content">

                                    <p>
                                        Integrating courses for Civil Services Examination (CSE) within the
                                        undergraduate (UG) curriculum represents a strategic and inclusive
                                        approach to higher education and career preparation. With the increasing
                                        aspiration among students to join the Indian civil services, offering
                                        formal, credit-bearing courses focused on UPSC preparation can make civil
                                        service coaching more accessible, structured, and academically rigorous.
                                    </p>

                                    <p>
                                        The Assam Royal Global University has initiated this integrated programme
                                        along with Regular BA/B.Sc. Programmes (like- Geography, History,
                                        Sociology, Economics, Political Science, Public Administration,
                                        Social Work, Chemistry, Physics, Mathematics etc).
                                    </p>

                                    <h2>Advantages:</h2>

                                    <div class="cse-benefits">

                                        <div class="cse-benefit-item">

                                            <span class="cse-arrow"></span>

                                            <p>
                                                <strong>Academic Legitimacy:</strong>
                                                By creditising civil services courses, institutions can bring
                                                them under the formal academic framework, ensuring quality
                                                control, defined outcomes, and recognition within degree programs.
                                            </p>

                                        </div>

                                        <div class="cse-benefit-item">

                                            <span class="cse-arrow"></span>

                                            <p>
                                                <strong>Multidisciplinary Relevance:</strong>
                                                The CSE syllabus spans a wide range of disciplines —
                                                including political science, history, economics, geography,
                                                ethics, and current affairs — which align well with existing
                                                UG Programme offerings. Credited modules can build upon these
                                                foundations in a systematic way.
                                            </p>

                                        </div>

                                        <div class="cse-benefit-item">

                                            <span class="cse-arrow"></span>

                                            <p>
                                                <strong>Progressive Skill Development:</strong>
                                                CSE Courses will be spread across semesters, allowing students
                                                to gradually develop analytical writing, comprehension, and
                                                reasoning skills essential for CSE.
                                            </p>

                                        </div>

                                        <div class="cse-benefit-item">

                                            <span class="cse-arrow"></span>

                                            <p>
                                                <strong>Equitable Access:</strong>
                                                Embedding these courses within the University programmes
                                                reduces dependence on costly coaching, thus levelling the
                                                playing field for students.
                                            </p>

                                        </div>

                                        <div class="cse-benefit-item">

                                            <span class="cse-arrow"></span>

                                            <p>
                                                <strong>Flexible Curriculum Design:</strong>
                                                The University offer these courses as electives or minor
                                                specializations under the Choice Based Credit System (CBCS),
                                                in line with the National Education Policy (NEP) 2020.
                                            </p>

                                        </div>

                                    </div>

                                    <p class="cse-conclusion">
                                        Introducing this integrated CSE courses at the UG level not only
                                        enhances employability and career preparedness but also strengthens
                                        the academic ecosystem by aligning it with national service goals.
                                        It promotes holistic development and encourages a wider, more inclusive
                                        pool of candidates to enter the civil services with a strong academic
                                        and ethical grounding.
                                    </p>

                                </div>

                            </div>

                            <style>
                                /* ===========================
       CIVIL SERVICE COACHING
    =========================== */

                                .cse-content p {
                                    color: #29467B;
                                    line-height: 2;
                                    margin-bottom: 25px;
                                }

                                .cse-content h2 {
                                    font-family: 'Playfair Display', serif;
                                    font-size: 30px;
                                    color: #29467B;
                                    margin: 40px 0 30px;
                                    font-weight: 700;
                                }

                                .cse-benefits {
                                    margin-bottom: 40px;
                                }

                                .cse-benefit-item {
                                    display: flex;
                                    align-items: flex-start;
                                    gap: 20px;
                                    background: #edf7ff;
                                    border: 1px solid #d8e3ec;
                                    padding: 22px 25px;
                                    margin-bottom: 12px;
                                }

                                .cse-arrow {
                                    width: 0;
                                    height: 0;
                                    border-top: 18px solid transparent;
                                    border-bottom: 18px solid transparent;
                                    border-left: 18px solid #f7941d;
                                    margin-top: 5px;
                                    flex-shrink: 0;
                                }

                                .cse-benefit-item p {
                                    margin: 0;
                                    color: #29467B;
                                    line-height: 1.6;
                                    font-weight: 600;
                                }

                                .cse-benefit-item strong {
                                    color: #f7941d;
                                    font-weight: 700;
                                }

                                .cse-conclusion {
                                    margin-top: 35px;
                                    color: #29467B;
                                    line-height: 2;
                                }

                                /* Mobile */

                                @media(max-width:768px) {

                                    .cse-content h2 {
                                        font-size: 26px;
                                    }

                                    .cse-benefit-item {
                                        padding: 18px;
                                        gap: 15px;
                                    }

                                    .cse-arrow {
                                        border-top: 14px solid transparent;
                                        border-bottom: 14px solid transparent;
                                        border-left: 14px solid #f7941d;
                                    }

                                }
                            </style>

                        </div>

                    </div>

                </div>

                <!-- Item 7 -->

                <div class="course-accordion-item">

                    <button class="course-accordion-header">

                        <span>
                            NET/SET/GATE Coaching At The University
                        </span>

                        <span class="accordion-icon">
                            +
                        </span>

                    </button>

                    <div class="course-accordion-body">

                        <div class="course-accordion-content">

                            <div class="course-accordion-content">

                                <div class="netgate-content">

                                    <p>
                                        The university’s coaching program for NET, SET, and GATE is tailored
                                        to assist students and research scholars in preparing for the National
                                        Eligibility Test (NET), State Eligibility Test (SET), and Graduate
                                        Aptitude Test in Engineering (GATE). These exams are pivotal for
                                        pursuing careers in academia, research, and engineering.
                                    </p>

                                    <h2>Benefits:</h2>

                                    <div class="netgate-benefits">

                                        <div class="netgate-benefit-item">

                                            <span class="netgate-arrow"></span>

                                            <p>
                                                <strong>Enhanced Exam Success:</strong>
                                                The program fosters a strong grasp of subjects and sharpens
                                                problem-solving abilities.
                                            </p>

                                        </div>

                                        <div class="netgate-benefit-item">

                                            <span class="netgate-arrow"></span>

                                            <p>
                                                <strong>Career Advancement:</strong>
                                                Clearing NET/SET/GATE unlocks pathways to rewarding careers
                                                in research, teaching, and engineering, both in India and abroad.
                                            </p>

                                        </div>

                                        <div class="netgate-benefit-item">

                                            <span class="netgate-arrow"></span>

                                            <p>
                                                <strong>Increased Confidence:</strong>
                                                The structured coaching boosts students’ self-assurance and
                                                drive, helping them excel in these competitive exams.
                                            </p>

                                        </div>

                                        <div class="netgate-benefit-item">

                                            <span class="netgate-arrow"></span>

                                            <p>
                                                <strong>Progressive Skill Development:</strong>
                                                CSE Courses will be spread across semesters, allowing students
                                                to gradually develop analytical writing, comprehension, and
                                                reasoning skills essential for CSE.
                                            </p>

                                        </div>

                                        <div class="netgate-benefit-item">

                                            <span class="netgate-arrow"></span>

                                            <p>
                                                <strong>Implementation:</strong>
                                                Coaching of NET/SET is introduced as a credit course during
                                                3rd and 4th semesters of all PG Programmes as applicable and
                                                GATE during 7th and 8th semesters of all B.Tech Programmes.
                                            </p>

                                        </div>

                                    </div>

                                    <h2>Who can benefit:</h2>

                                    <ul class="netgate-list">

                                        <li>Research Scholars</li>

                                        <li>Postgraduate Students</li>

                                        <li>Engineering Students</li>

                                    </ul>

                                    <p class="netgate-conclusion">
                                        The university’s NET/SET/GATE coaching program is an essential resource
                                        for students and scholars striving to succeed in these competitive
                                        exams and advance their professional aspirations.
                                    </p>

                                </div>

                            </div>

                            <style>
                                /* ===========================
       NET SET GATE
    =========================== */

                                .netgate-content p {
                                    color: #29467B;
                                    line-height: 2;
                                    margin-bottom: 25px;
                                }

                                .netgate-content h2 {
                                    font-family: 'Playfair Display', serif;
                                    font-size: 30px;
                                    color: #29467B;
                                    margin: 40px 0 25px;
                                    font-weight: 700;
                                }

                                .netgate-benefits {
                                    margin-bottom: 40px;
                                }

                                .netgate-benefit-item {
                                    display: flex;
                                    align-items: flex-start;
                                    gap: 20px;
                                    background: #edf7ff;
                                    border: 1px solid #d8e3ec;
                                    padding: 22px 25px;
                                    margin-bottom: 12px;
                                }

                                .netgate-arrow {
                                    width: 0;
                                    height: 0;
                                    border-top: 18px solid transparent;
                                    border-bottom: 18px solid transparent;
                                    border-left: 18px solid #f7941d;
                                    margin-top: 5px;
                                    flex-shrink: 0;
                                }

                                .netgate-benefit-item p {
                                    margin: 0;
                                    color: #29467B;
                                    line-height: 1.6;
                                    font-weight: 600;
                                }

                                .netgate-benefit-item strong {
                                    color: #f7941d;
                                }

                                .netgate-list {
                                    padding-left: 30px;
                                    margin: 0 0 30px;
                                }

                                .netgate-list li {
                                    color: #29467B;
                                    font-size: 20px;
                                    font-weight: 600;
                                    margin-bottom: 18px;
                                }

                                .netgate-conclusion {
                                    margin-top: 20px;
                                }

                                /* Mobile */

                                @media(max-width:768px) {

                                    .netgate-content h2 {
                                        font-size: 26px;
                                    }

                                    .netgate-list li {
                                        font-size: 18px;
                                    }

                                }
                            </style>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        .common-courses-sec {
            background: #eef3fb;
            padding: 40px 0 100px;
        }

        .common-courses-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        .common-courses-header {
            border-top: 1px solid #d7dde8;
            padding-top: 35px;
            margin-bottom: 35px;
        }

        .common-courses-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #29467B;
            margin-bottom: 20px;
        }

        .common-courses-header p {
            color: #5b6472;
            max-width: 900px;
            line-height: 1.9;
        }

        .common-courses-accordion {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .course-accordion-item {
            background: #dbe7f8;
            border-radius: 6px;
            overflow: hidden;
        }

        .course-accordion-header {
            width: 100%;
            border: none;
            background: none;
            padding: 18px 22px;
            cursor: pointer;

            display: flex;
            justify-content: space-between;
            align-items: center;

            font-size: 15px;
            font-weight: 600;
            color: #3f4d64;
        }

        .accordion-icon {
            font-size: 22px;
            color: #3f4d64;
            transition: .3s ease;
        }

        .course-accordion-item.active .accordion-icon {
            transform: rotate(45deg);
        }

        .course-accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease;
            background: #f7fbff;
        }

        .course-accordion-content {
            padding: 25px;
        }

        .course-accordion-content p {
            margin: 0;
            color: #5b6472;
            line-height: 1.9;
        }

        /* Open State */



        /* Responsive */

        @media(max-width:768px) {

            .common-courses-header h2 {
                font-size: 34px;
            }

            .course-accordion-header {
                font-size: 14px;
                padding: 15px;
            }

        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const accordionItems =
                document.querySelectorAll('.course-accordion-item');

            accordionItems.forEach(item => {

                const header =
                    item.querySelector('.course-accordion-header');

                const body =
                    item.querySelector('.course-accordion-body');

                header.addEventListener('click', function() {

                    const isActive =
                        item.classList.contains('active');

                    accordionItems.forEach(acc => {

                        acc.classList.remove('active');

                        const accBody =
                            acc.querySelector('.course-accordion-body');

                        accBody.style.maxHeight = null;

                    });

                    if (!isActive) {

                        item.classList.add('active');

                        body.style.maxHeight =
                            body.scrollHeight + 'px';

                    }

                });

            });

        });
    </script>


    <section class="process-flow-sec">

        <div class="process-flow-container">

            <!-- Top Heading Row -->

            <div class="process-flow-header">

                <div class="process-heading-left">
                    Process Flow of Implementing Interdisciplinary @ RGU
                </div>

                <div class="process-heading-right">
                    Basket of Multidisciplinary / Interdisciplinary Courses
                </div>

            </div>

            <!-- Process Table -->

            <div class="process-flow-table">

                <div class="process-row">

                    <div class="process-date">
                        April/October
                    </div>

                    <div class="process-content">
                        Mapping Of Courses
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        May/November
                    </div>

                    <div class="process-content">
                        Timetable Finalization
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        June/December
                    </div>

                    <div class="process-content">
                        Uploading To Various RGU Portal For Student Access
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        First Week Of July/Mid-December
                    </div>

                    <div class="process-content">
                        Uploading To Various RGU Portal For Student Access
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        First Week Of July/Mid-December
                    </div>

                    <div class="process-content">
                        Bidding Rounds For Enrolment In Elective Courses
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        Mid-July/January
                    </div>

                    <div class="process-content">
                        Commencement Of The Semester As Per RGU
                    </div>

                </div>

                <div class="process-row">

                    <div class="process-date">
                        Last Week Of July/ First Week Of January
                    </div>

                    <div class="process-content">
                        Pick And Drop Opportunity For Students To Finalise Their Electives
                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        .process-flow-sec {
            background: #eef3fb;
            padding: 20px 0 100px;
        }

        .process-flow-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        .process-flow-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 18px;
        }

        .process-heading-left {
            background: #E26932;
            color: #fff;
            padding: 18px 22px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 18px;
        }

        .process-heading-right {
            background: #dbe7f8;
            color: #4f5e74;
            padding: 18px 22px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 18px;
        }

        .process-flow-table {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .process-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .process-date {
            background: #29467B;
            color: #fff;
            padding: 22px;
            font-weight: 600;
            border-radius: 4px 0 0 4px;
        }

        .process-content {
            background: #f4f7fc;
            color: #29467B;
            padding: 22px;
            font-weight: 600;
            border-left: 2px solid #d9e1ef;
            border-radius: 0 4px 4px 0;
        }

        .process-row:hover .process-date {
            background: #203a67;
        }

        .process-row:hover .process-content {
            background: #ffffff;
        }

        .process-date,
        .process-content {
            transition: .3s ease;
        }

        /* Responsive */

        @media(max-width:768px) {

            .process-flow-header {
                grid-template-columns: 1fr;
            }

            .process-row {
                grid-template-columns: 1fr;
            }

            .process-date {
                border-radius: 6px 6px 0 0;
            }

            .process-content {
                border-left: none;
                border-top: 1px solid #d9e1ef;
                border-radius: 0 0 6px 6px;
            }

            .process-heading-left,
            .process-heading-right {
                font-size: 15px;
            }

        }
    </style>
@endsection
