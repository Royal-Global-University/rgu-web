@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* BODY */

        body {
            font-family: 'Times New Roman', Times, serif;
            background: #f4f7fb;
            margin: 0;
            padding: 0;
        }


        /* HERO SECTION */

        .rgu-rp-hero {
            position: relative;
            background: url("five-days-conference/hero-img.jpg") center/cover no-repeat;
            height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .rgu-rp-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.684);
        }

        .rgu-rp-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
        }

        .rgu-rp-hero-title {
            font-size: 50px;
            font-weight: 700;
            color: #93bcff;
            margin-bottom: 10px;
        }

        .rgu-rp-hero-subtitle {
            font-size: 26px;
            opacity: .9;
        }


        /* MAIN SECTION */

        .rgu-rp-wrapper {
            padding: 60px 20px;
        }

        .rgu-rp-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }


        /* PROJECT BOX */

        .rgu-rp-project {
            background: #f1f6ff;
            border-left: 5px solid #24477f;
            padding: 20px;
            border-radius: 6px;
            margin: 25px 0;
        }


        /* SECTION TITLE */

        .rgu-rp-section-title {
            font-size: 24px;
            font-weight: 600;
            color: #24477f;
            margin-bottom: 25px;
        }


        /* JOB CARD */

        .rgu-rp-job-card {
            border: 1px solid #e6e6e6;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            transition: all .25s ease;
            background: #F1F6FF;
        }

        .rgu-rp-job-card h5 {
            font-weight: 800;
        }


        .rgu-rp-job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        }


        /* LABEL */

        .rgu-rp-label {
            font-weight: 600;
            color: #24477f;
        }


        /* FIELD WORK */

        .rgu-rp-field-box {
            background: #fafafa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }


        /* PROJECT DIRECTOR */

        .rgu-rp-director {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e6e6e6;
        }


        /* RESPONSIVE */

        @media(max-width:768px) {

            .rgu-rp-hero {
                height: 300px;
                padding: 20px;
            }

            .rgu-rp-hero-title {
                font-size: 28px;
            }

            .rgu-rp-hero-subtitle {
                font-size: 15px;
            }

            .rgu-rp-card {
                padding: 25px;
            }

        }
    </style>

    <!-- HERO SECTION -->
    <section class="rgu-rp-hero text-dark">

        <div class="rgu-rp-hero-overlay"></div>

        <div class="container rgu-rp-hero-content">

            <h1 class="rgu-rp-hero-title">
                FIVE-DAY INTERNATIONAL WORKSHOP
                <br>
                ON
            </h1>

            <p class="rgu-rp-hero-subtitle">
                DEVELOPING EMOTIONAL INTELLIGENCE,
                ACADEMIC RESEARCH AND TEACHING

            </p>

        </div>

    </section>

    <!-- MAIN CONTENT -->
    <section class="rgu-rp-wrapper text-dark">

        <div class="container">

            <div class="rgu-rp-card">
                <p>
                    Applications are invited to participate in the Five-Day International Workshop on
                    <strong>“Developing Emotional Intelligence, Academic Research and Teaching”</strong>.
                </p>

                <div class="rgu-rp-project">

                    <strong>Workshop Title:</strong><br><br>

                    “Developing Emotional Intelligence, Academic Research and Teaching”

                    <br><br>

                    <strong>Date:</strong> 16- 20 March 2026<br>
                    <strong>Time:</strong> 6.00 p.m to 8.30 p.m (IST)<br>
                    <strong>Mode:</strong> Online

                </div>


                <h3 class="rgu-rp-section-title">
                    Jointly Organized by
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        DEPARTMENT OF GEOGRAPHY AND GEOINFORMATICS
                    </p>

                    <p>
                        INTERNAL QUALITY ASSURANCE CELL (IQAC)
                    </p>

                    <p>
                        THE ASSAM ROYAL GLOBAL UNIVERSITY
                    </p>

                    <p>
                        LAVENDER LITERARY CLUB, INDIA
                    </p>

                    <p>
                        MALAYSIAN INDUSTRIAL RELATIONS & HUMAN RESOURCE ASSOCIATION (MIRHA), MALAYSIA
                    </p>

                </div>


                <h3 class="rgu-rp-section-title">
                    ABOUT THE UNIVERSITY
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        The Assam Royal Global University (RGU), one of the premium universities in India, has continuously
                        acted as
                        a leadership platform that aligns interests of industries, entrepreneurs, and the youth since its
                        establishment in 2017.
                    </p>

                    <p>
                        Aimed at creating and sustaining an environment wherein employment and entrepreneurship can flourish
                        with
                        collaborative efforts amongst an extensive network of influential corporates, individual members,
                        and
                        academic institutes, Royal Global University has been able to provide necessary resources,
                        knowledge, and
                        support to create effective employment and entrepreneurship opportunities.
                    </p>

                </div>


                <h3 class="rgu-rp-section-title">
                    ABOUT THE DEPARTMENT OF GEOGRAPHY & GEOINFORMATICS,
                    THE ASSAM ROYAL GLOBAL UNIVERSITY
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        The Department of Geography & Geoinformatics at The Assam Royal Global University located
                        in Guwahati is renowned for its comprehensive integration of physical and human geography,
                        providing a diverse curriculum for undergraduate and postgraduate students. The Department runs
                        various programmes such B.A/B.Sc Geography, M.A/M.Sc Geography, M.Sc Geoinformatics and
                        PhD programmes. The courses include geomorphology, climatology, biogeography, urban
                        geography, regional planning, and Remote Sensing and GIS. The syllabus includes field-based
                        learning and visit to institutions of prominence for exposure visits to the students of the
                        department. Moreover, the Department of Geography frequently organizes outreach programs for
                        the students to embed community involvement strategies into geographical pursuits and to nurture
                        ethical values and empathy among students. The faculties of the department are specialized to
                        guide students through inter-disciplinary courses and a balanced education that emphasizes
                        fieldbased
                        learning and the use of advanced GIS and remote sensing technologies. Key focus areas
                        such as Physical Geography, Environmental Geography, Tourism Geography, Agricultural
                        Geography and Migration Studies enable the department to understand the pressing issues of
                        man-environment relationship and sustainability. Graduates and post graduates are well equipped
                        with critical thinking, spatial analysis through GIS and Remote sensing, field based empirical
                        research making them well-suited for careers in urban and regional planning, environmental
                        management, transportation planning, public policy and geospatial technology with str academic
                        studies, including PhDs.

                    </p>

                </div>

                <h3 class="rgu-rp-section-title">
                    MALAYSIAN INDUSTRIAL RELATION & HUMAN RESOURCE
                    ASSOCIATION (MIRHA)
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        The general purpose of Malaysian Industrial Relation & Human Resource Association (MIRHA)
                        is to promote the study of labour, human resource, industrial and employment relations in
                        Malaysia. The aim of the MIRRA is of purely scientific character, without regard to political,
                        philosophical or religious considerations.
                    </p>

                </div>

                <h3 class="rgu-rp-section-title">
                    ACADEMIC RELEVANCE
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        The International Workshop on "Developing Emotional Intelligence, Academic Research
                        and Teaching" aims to provide a comprehensive platform for enhancing key competencies
                        essential for success in contemporary higher education. The workshop focuses on
                        integrating emotional intelligence, research capability, and effective teaching practices to
                        support the academic and professional development of participants. In today's rapidly
                        evolving educational landscape, educators, researchers, and students must develop not only
                        strong subject knowledge but also emotional awareness, interpersonal skills, and research
                        proficiency. Emotional intelligence plays a crucial role in improving communication,
                        leadership, stress management, collaboration, and the creation of positive and inclusive
                        learning environments within educational institutions. The workshop will therefore explore
                        how emotional intelligence can contribute to effective teaching, student engagement, and
                        overall academic productivity. Alongside this, the programme will introduce participants to
                        fundamental aspects of academic Research including identifying research problems,
                        Conducting literature reviews, selecting appropriate research methodologies, maintaining
                        research ethics improving academic writing, analyzing data and understanding strategies
                        for publishing in reputed journals. The workshop will also highlight innovative and learnercentred
                        teaching
                        approaches that enhance classroom engagement and improve learning
                        outcomes through interactive pedagogy, technology-supported instruction, inclusive
                        teaching strategies, and effective assessment practices. Designed for senior college
                        students, research scholars, teachers, and academic staff, the workshop will create
                        opportunities for knowledge sharing, interdisciplinary dialogue, and collaborative learning.
                        Overall, the programme seeks to foster excellence and innovation in education by
                        equipping participants with practical skills and contemporary perspectives that can
                        strengthen emotional intelligence, research competence, and effective classroom teaching
                        within modem educational programmes.
                    </p>


                </div>


                <h3 class="rgu-rp-section-title">
                    OBJECTIVES
                </h3>

                <div class="rgu-rp-job-card">

                    <p>1.To introduce the concept and importance of emotional intelligence in education.</p>
                    <p>2.To strengthen interpersonal, communication, and leadership skills.</p>
                    <p>3.To provide an overview of key stages of academic research.</p>
                    <p>4.To develop skills in academic writing and research publication.</p>
                    <p>5.To promote innovative and technology-supported teaching practices.</p>

                </div>


                <h3 class="rgu-rp-section-title">
                    OUTCOMES OF THE WORKSHOP
                </h3>

                <div class="rgu-rp-job-card">

                    <p>1.Develop understanding of emotional intelligence and its role in academic and professional settings.
                    </p>
                    <p>2.Enhance communication, leadership, collaboration, and stress management skills.</p>
                    <p>3.Gain basic knowledge of research design, literature review, and research ethics.</p>
                    <p>4.Improve academic writing, data analysis, and publication skills.</p>
                    <p>5.Learn innovative and learner-centred teaching methods for effective classroom engagement.</p>

                </div>


                <h3 class="rgu-rp-section-title">
                    WHO SHOULD ATTEND
                </h3>

                <div class="rgu-rp-job-card">

                    <p>1.Senior college students</p>
                    <p>2.Research scholars</p>
                    <p>3.College and University teachers</p>
                    <p>4.Academic staff and early-career researchers</p>

                </div>


                <h3 class="rgu-rp-section-title">
                    CERTIFICATION
                </h3>

                <div class="rgu-rp-job-card">

                    <p>
                        Participants who attend all sessions of the workshop will be awarded a Certificate of Participation.
                    </p>

                </div>


                <div class="rgu-rp-field-box">

                    <h5 class="rgu-rp-label">
                        Course Registration Fee
                    </h5>

                    <p>
                        Indian: 500 INR<br>
                        Foreign: 15 USD
                    </p>

                    <h5 class="rgu-rp-label">
                        Meeting Platform
                    </h5>

                    <p>
                        Google Meet
                    </p>

                    <p>
                        FOR PAYMENT SCAN THE QR CODE GIVEN BELOW OR CLICK HERE
                    </p>

                    <p>
                        <img src="five-days-conference/qr.png" alt="">
                    </p>

                    <p>
                        After the payment fill the google form using the following link
                    </p>

                    <p>
                        <a target="_blank"
                            href="https://forms.gle/RrubFDnn5vrwLHkg8">https://forms.gle/RrubFDnn5vrwLHkg8</a>
                    </p>

                </div>

                <h3 class="rgu-rp-section-title pt-5">
                    Communication Details
                </h3>

                <div class="rgu-rp-field-box">

                    <div class="row g-4">

                        <div class="col-md-6">
                            <div class="rgu-rp-job-card">

                                <p>
                                    <strong>Dr. Annesha Borah</strong>
                                </p>

                                <p>
                                    +91 9401369825
                                </p>

                                <p>
                                    <a href="mailto:aborah1@rgu.ac">aborah1@rgu.ac</a>
                                </p>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="rgu-rp-job-card">

                                <p>
                                    <strong>Dr. Pritha Roychowdhury</strong>
                                </p>

                                <p>
                                    +91 8527569056
                                </p>

                                <p>
                                    <a href="mailto:proychowdhury@rgu.ac">proychowdhury@rgu.ac</a>
                                </p>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="rgu-rp-job-card">

                                <p>
                                    <strong>Dr. Md. Hibjur Rahaman</strong>
                                </p>

                                <p>
                                    +91 7005302487
                                </p>

                                <p>
                                    <a href="mailto:hrahaman@rgu.ac">hrahaman@rgu.ac</a>
                                </p>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="rgu-rp-job-card">

                                <p>
                                    <strong>Dr. Arghadeep Bose</strong>
                                </p>

                                <p>
                                    +91 8145280647
                                </p>

                                <p>
                                    <a href="mailto:abose@rgu.ac">abose@rgu.ac</a>
                                </p>

                            </div>
                        </div>

                    </div>

                </div>

                <h3 class="rgu-rp-section-title pt-5">
                    ORGANIZING COMMITTEE
                </h3>

                <div class="rgu-rp-job-card">

                    <p><strong>Patrons</strong></p>

                    <p>
                        Prof. Alak Kumar Buragohain, Vice Chancellor, The Assam Royal Global University
                    </p>

                    <p>
                        Prof. Diganta Munshi, Registrar Administration & Director IQAC, The Assam Royal Global University
                    </p>

                    <p>
                        Prof. D.N. Singh, Registrar Academics, The Assam Royal Global University
                    </p>

                    <p>
                        Prof. Nandana Dutta, Dean Academics, The Assam Royal Global University
                    </p>

                    <p>
                        Prof. Debendra Kumar Nayak, Dean, Royal School of Environmental & Earth Sciences, The Assam Royal
                        Global
                        University
                    </p>

                    <p>
                        Prof. George A.P., Dean, Royal School of Business and Royal School of Commerce, The Assam Royal
                        Global
                        University
                    </p>

                </div>


                <div class="rgu-rp-job-card">

                    <p><strong>Convenor</strong></p>

                    <p>
                        Dr. Annesha Borah, Assistant Professor & Head/Coordinator, Department of Geography and
                        Geoinformatics, The
                        Assam Royal Global University
                    </p>

                </div>


                <div class="rgu-rp-job-card">

                    <p><strong>Organising Secretaries</strong></p>

                    <p>
                        Dr. Pritha Roychowdhury, Assistant Professor, Department of Geography and Geoinformatics, The Assam
                        Royal
                        Global University
                    </p>

                    <p>
                        Dr. Arghadeep Bose, Assistant Professor, Department of Geography and Geoinformatics, The Assam Royal
                        Global
                        University
                    </p>

                </div>


                <div class="rgu-rp-job-card">

                    <p><strong>Technical Coordinator</strong></p>

                    <p>
                        Dr. Md. Hibjur Rahaman, Assistant Professor, Department of Geography and Geoinformatics, The Assam
                        Royal
                        Global University
                    </p>

                </div>


                <div class="rgu-rp-job-card">

                    <p><strong>Session Facilitators</strong></p>

                    <p>
                        Dr. Tushar Sarkar, Assistant Professor, Department of Geography and Geoinformatics, The Assam Royal
                        Global
                        University
                    </p>

                    <p>
                        Dr. Trishna Changkakati, Assistant Professor, Department of Geography and Geoinformatics, The Assam
                        Royal
                        Global University
                    </p>

                    <p>
                        Dr. Parimita Saikia, Assistant Professor, Department of Geography and Geoinformatics, The Assam
                        Royal Global
                        University
                    </p>

                    <p>
                        Dr. Palme Borthakur, Assistant Professor, Department of Geography and Geoinformatics, The Assam
                        Royal Global
                        University
                    </p>

                    <p>
                        Dr. Shobhit Pipil, Assistant Professor, Department of Geography and Geoinformatics, The Assam Royal
                        Global
                        University
                    </p>

                </div>


                <h3 class="rgu-rp-section-title">
                    External Members
                </h3>

                <div class="rgu-rp-job-card">

                    <p>1. Dr. C.I Rajesh, Chief Advisor Lavender Literary Club, India</p>

                    <p>2. Prof. Madya Dr. Dzulkifli bin Mukhtar, Faculty of Entrepreneurship and Business, Universiti
                        Malaysia
                        Kelantan</p>

                    <p>3. Assoc. Prof. Dr. Nadarajan Thambu, Sultan Idris Education University, Malaysia</p>

                    <p>4. Dr. Jayaraj Vijaya Kumaran, Faculty of Earth Science, Universiti Malaysia Kelantan, Malaysia</p>

                    <p>5. Dr. Aryana Satrya, Senior Lecturer, Faculty of Economics, University of Indonesia, Jakarta,
                        Indonesia
                    </p>

                    <p>6. Dr. Franklin Thambi Jose, Senior Lecturer, Sultan Idris Education University Malaysia Dr. Mariah
                        Bt.
                        Kamaruddin, Head of Department, Department of Educational Studies, Institute of Teacher Education,
                        Ipoh
                        Campus, Malaysia</p>

                    <p>7. Dr. Sriraj Durailimgam, Lecturer, Institute of Teacher Education, Ipoh Campus, Malaysia</p>

                    <p>8. Dr. Shubhra Jamwal, Assistant Professor of English, Government College of Education, Jammu, Jammu
                        &
                        Kashmir, India</p>

                    <p>9. Mr. Kanaisan Kanapathy, Senior Lecturer, Institute of Teacher Education, Ipoh Campus, Malaysia</p>

                    <p>10. Dr. S. Veeramani, Assistant Professor and Head, Department of English, Government Arts and
                        Science
                        College, Lalgudi, Trichy, Tamilnadu, India</p>

                    <p>11. Dr. S. Vijayakumar, Associate Professor of English, B.S. Abdur Rahman Crescent Institute of
                        Science
                        and Technology (Deemed University), Chennai, India</p>

                    <p>12. Dr. Aloysius Albert, Assistant Professor of English and Dean of Students, St. Xavier's College
                        Palayamkottai, Tamil Nadu, India</p>

                    <p>13. Dr. Narasimha Murthy SV, Professor of English, School of Advance Studies, S- VASA University,
                        Bangalore, India</p>

                    <p>14. Dr. Jehoson Jiresh, Assistant Professor, Department of English and Cultural Studies, Christ
                        Deemed to
                        be University, Bengaluru, India</p>

                    <p>15. Dr. B. Seetharamulu, Assistant Professor of Computer Science and Engineering, IFHE, Hyderabad,
                        India
                    </p>

                </div>


            </div>


        </div>

    </section>

    <script>
        /* Hover enhancement */

        function rguRpCardEffect() {

            let cards = document.querySelectorAll('.rgu-rp-job-card');

            cards.forEach(function(card) {

                card.addEventListener('mouseenter', function() {

                    this.style.borderColor = "#24477f";

                });

                card.addEventListener('mouseleave', function() {

                    this.style.borderColor = "#e6e6e6";

                });

            });

        }

        document.addEventListener("DOMContentLoaded", rguRpCardEffect);
    </script>
@endsection
