@extends('frontend/new-master')
@section('content')
    <style>
        /* =====================================================
           RGU STUDENT AFFAIRS
        ===================================================== */

        .rgu-std-affairs-section {
            background: #dfe4ef;
            padding: 80px 0;
            overflow: hidden;
        }

        /* =====================================================
           INTRO SECTION
        ===================================================== */

        .rgu-std-affairs-intro {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 50px;
        }

        .rgu-std-affairs-image {
            width: 42%;
            flex-shrink: 0;
        }

        .rgu-std-affairs-image img {
            width: 100%;
            display: block;
            border-radius: 12px;
            object-fit: cover;
        }

        .rgu-std-affairs-content {
            flex: 1;
        }

        .rgu-std-affairs-content h2 {
            color: #27467A;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            font-family: "Playfair Display", serif;
        }

        .rgu-std-affairs-content p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 12px;
        }

        /* =====================================================
           DOCUMENTS
        ===================================================== */

        .rgu-std-affairs-doc-heading {
            color: #27467A;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: "Playfair Display", serif;
        }

        .rgu-std-affairs-doc-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
            margin-bottom: 55px;
        }

        .rgu-std-affairs-doc-card {
            background: #f3f3f3;
            border: 1px solid #d6d6d6;
            border-radius: 6px;
            min-height: 86px;
            padding: 16px 18px;
            text-decoration: none;
            transition: .3s ease;
        }

        .rgu-std-affairs-doc-card:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .08);
        }

        .rgu-std-affairs-doc-icon {
            color: #f15a24;
            font-size: 14px;
            display: block;
            margin-bottom: 10px;
        }

        .rgu-std-affairs-doc-title {
            color: #1f3f77;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            margin: 0;
        }

        /* =====================================================
           FUNCTIONS SECTION
        ===================================================== */

        .rgu-std-affairs-functions {
            background: #27467A;
            border-radius: 32px;
            padding: 45px 25px;
        }

        .rgu-std-affairs-functions-title {
            text-align: center;
            color: #fff;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            font-family: "Playfair Display", serif;
        }

        .rgu-std-affairs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .rgu-std-affairs-card {
            background: #fff;
            padding: 18px;
            min-height: 180px;
            border: 1px solid #e5e5e5;
            border-radius: 5px;
        }

        .rgu-std-affairs-card h4 {
            color: #27467A;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .rgu-std-affairs-card ul {
            padding-left: 16px;
            margin: 0;
        }

        .rgu-std-affairs-card ul li {
            color: #555;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 6px;
        }

        .rgu-std-affairs-note {
            text-align: center;
            color: #d8e2ff;
            font-size: 18px;
            margin-top: 20px;
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width:991px) {

            .rgu-std-affairs-intro {
                flex-direction: column;
            }

            .rgu-std-affairs-image {
                width: 100%;
            }

            .rgu-std-affairs-doc-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .rgu-std-affairs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:767px) {

            .rgu-std-affairs-section {
                padding: 60px 0;
            }

            .rgu-std-affairs-content h2 {
                font-size: 28px;
            }

            .rgu-std-affairs-doc-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .rgu-std-affairs-grid {
                grid-template-columns: 1fr;
            }

            .rgu-std-affairs-functions {
                padding: 30px 15px;
                border-radius: 20px;
            }

            .rgu-std-affairs-functions-title {
                font-size: 26px;
            }

        }

        @media(max-width:575px) {

            .rgu-std-affairs-doc-grid {
                grid-template-columns: 1fr;
            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/campus-student-affairs/cover-img.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Student Affairs</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Student Life & Engagement / Student Affairs
            </div>
        </div>

    </section>

    <section class="rgu-std-affairs-section">
        <div class="container">

            <!-- INTRO -->

            <div class="rgu-std-affairs-intro">

                <div class="rgu-std-affairs-content">
                    <h2>Student Affairs</h2>

                    <p>
                        Student Affairs at The Assam Royal Global University is dedicated
                        to creating a vibrant, inclusive and enriching campus environment.
                        The department supports students through academic engagement,
                        leadership development, extracurricular participation and
                        holistic well-being initiatives.
                    </p>

                    <p>
                        Through a variety of student-centric programmes, activities and
                        support services, Student Affairs ensures that every learner has
                        opportunities to grow personally, socially and professionally
                        throughout their university journey.
                    </p>
                </div>

            </div>

            <!-- DOCUMENTS -->

            <h3 class="rgu-std-affairs-doc-heading">
                Related Documents & SOPs
            </h3>

            <div class="rgu-std-affairs-doc-grid">


                <a target="_blank" href="/mobile-assets/student-affairs/Student_Council_SOP.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Students Council SOP</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/StudentCouncil202223.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Students Council 2022 - 2023</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/Club-Activities-Report-2022-2023.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Activity Report 2022 - 2023</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/Club-Activities-Report-2023-2024.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Activity Report 2023 - 2024</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/Report-of-Cultural-Activities.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Reports on Cultural Festivals</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/Report-of-Sports-Competitions.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Reports on Sports Festivals</p>
                    </div>
                </a>

                <a target="_blank" href="/mobile-assets/student-affairs/Reports-of-Technical-Fests.pdf"
                    class="rgu-std-affairs-doc-card">
                    <div class="rgu-std-affairs-doc-content">
                        <i class="fa fa-file-pdf-o rgu-std-affairs-doc-icon"></i>
                        <p class="rgu-std-affairs-doc-title">Reports on Technical Fest</p>
                    </div>
                </a>

            </div>

            <!-- FUNCTIONS -->

            <div class="rgu-std-affairs-functions">

                <h2 class="rgu-std-affairs-functions-title">
                    Key Functions & Responsibilities
                </h2>

                <div class="rgu-std-affairs-grid">

                    <div class="rgu-std-affairs-card">
                        <h4>Student Support</h4>
                        <ul>
                            <li><strong>Counselling:</strong> Providing mental health support, counselling, and therapy.
                            </li>
                            <li><strong>Health Services:</strong> Offering medical care, health education, and wellness
                                programmes.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Residential Life</h4>
                        <ul>
                            <li><strong>Housing:</strong> Managing on-campus housing and assisting with off-campus
                                housing resources.</li>
                            <li><strong>Residential Programmes:</strong> Organizing activities and programs to build
                                community among residents.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Student Activities & Organizations</h4>
                        <ul>
                            <li><strong>Clubs:</strong> Supporting various student clubs and interest groups.</li>
                            <li><strong>Leadership Development:</strong> Offering leadership training and development
                                opportunities through departments and Student Council.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Career Guidance</h4>
                        <ul>
                            <li><strong>Career Counselling:</strong> Assisting students with career planning and job
                                search strategies through Royal Centre for Corporate Relations.</li>
                            <li><strong>Internships:</strong> Connecting students with internship and employment
                                opportunities.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Student Support</h4>
                        <ul>
                            <li><strong>Cultural Programmes:</strong> Promoting diversity and inclusion through events,
                                fests, and programmes.</li>
                            <li><strong>Scholarship Support:</strong> Providing resources and support for
                                underrepresented student groups through different scholarships.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Academic Support</h4>
                        <ul>
                            <li><strong>Tutorial and Remedial Support:</strong> Offering academic assistance through
                                remedial and tutorial classes.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Student Conduct & Discipline</h4>
                        <ul>
                            <li><strong>Code of Conduct:</strong> Enforcing the university's code of conduct and
                                handling disciplinary matters.</li>
                            <li><strong>Conflict Resolution:</strong> Mediating conflicts and providing support for
                                dispute resolution.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Campus Safety & Security</h4>
                        <ul>
                            <li><strong>Safety Protocols:</strong> Implementing safety protocols and emergency response
                                plans.</li>
                            <li><strong>Security Services:</strong> Ensuring the physical security of the campus with
                                24×7 campus security in the form of digital and manual surveillance.</li>
                        </ul>
                    </div>

                    <div class="rgu-std-affairs-card">
                        <h4>Extra-curricular Activity</h4>
                        <ul>
                            <li><strong>Sports:</strong> Offering sports facilities, fitness programs, and intramural
                                sports.</li>
                            <li><strong>Outdoor Activities:</strong> Organizing outdoor recreational activities, field
                                trips and extension activities.</li>
                            <li><strong>Club Services:</strong> The 33 Clubs of the University function under the aegis
                                of Student Affairs and cater to different co-curricular and extra-curricular aspects of
                                the University.</li>
                        </ul>
                    </div>

                </div>

                <div class="rgu-std-affairs-note">
                    Student Affairs plays a pivotal role in shaping the holistic educational experience by fostering
                    leadership, personal growth, community engagement, student well-being, academic success, and campus
                    inclusivity.
                </div>

            </div>

        </div>
    </section>
@endsection
