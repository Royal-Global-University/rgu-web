@extends('frontend/new-master')
@section('title', 'Admission Faqs : The Assam Royal Global University')
@section('meta_description', 'Get answers to all your admission queries at Royal Global University. Discover admission
    requirements, deadlines, scholarships, and more in our comprehensive FAQ section.')
@section('meta_keywords', 'Admission Faqs')
@section('content')
    <style>
        .rgu-faqx-section {
            background: #eef1f7;
            padding: 7rem 0;
        }

        .rgu-faqx-head {
            margin-bottom: 5rem;
        }

        .rgu-faqx-title {
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 2rem;
        }

        .rgu-faqx-subtitle {
            max-width: 70rem;
            margin: 0 auto;
            font-size: 1.8rem;
            line-height: 1.9;
            color: #666;
        }

        .rgu-faqx-wrapper {
            background: #f5f6f8;
            border-radius: 4rem;
            padding: 5rem;
        }

        .rgu-faqx-search-wrap {
            margin-bottom: 3rem;
        }

        .rgu-faqx-search {
            width: 100%;
            max-width: 35rem;
            height: 5.5rem;
            border: 1px solid #ccd3df;
            border-radius: .8rem;
            padding: 0 2rem;
            font-size: 1.6rem;
            color: #444;
            outline: none;
            background: #fff;
        }

        .rgu-faqx-search:focus {
            border-color: #29467a;
        }

        .rgu-faqx-list {
            display: flex;
            flex-direction: column;
            gap: 1.6rem;
        }

        .rgu-faqx-item {
            background: #cfe0f8;
            border-radius: .8rem;
            overflow: hidden;
        }

        .rgu-faqx-question {
            width: 100%;
            border: none;
            background: transparent;
            padding: 2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            cursor: pointer;
            text-align: left;
        }

        .rgu-faqx-question span {
            font-size: 1.8rem;
            line-height: 1.7;
            font-weight: 600;
            color: #29467a;
        }

        .rgu-faqx-question i {
            font-size: 1.4rem;
            color: #29467a;
            transition: transform .3s ease;
        }

        .rgu-faqx-answer {
            max-height: 0;
            overflow: hidden;
            transition: all .4s ease;
            background: #f5f6f8;
        }

        .rgu-faqx-answer p {
            padding: 0 2.5rem 2.5rem;
            margin: 0;
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
        }

        .rgu-faqx-item.active .rgu-faqx-answer {
            max-height: 50rem;
        }

        .rgu-faqx-item.active .rgu-faqx-question i {
            transform: rotate(180deg);
        }

        @media (max-width: 991px) {

            .rgu-faqx-title {
                font-size: 3.8rem;
            }

            .rgu-faqx-wrapper {
                padding: 4rem 3rem;
            }
        }

        @media (max-width: 767px) {

            .rgu-faqx-section {
                padding: 5rem 0;
            }

            .rgu-faqx-title {
                font-size: 2.8rem;
            }

            .rgu-faqx-subtitle {
                font-size: 1.7rem;
            }

            .rgu-faqx-wrapper {
                padding: 3rem 2rem;
                border-radius: 2.5rem;
            }

            .rgu-faqx-search {
                max-width: 100%;
            }

            .rgu-faqx-question {
                padding: 1.8rem;
            }

            .rgu-faqx-question span {
                font-size: 1.6rem;
            }

            .rgu-faqx-answer p {
                padding: 0 1.8rem 2rem;
                font-size: 1.8rem;
                line-height: 1.9;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Frequently Asked Questions</h1>
            <div class="pg-hero-breadcrumb">
                Admission / Admission Overview / Frequently Asked Questions
            </div>
        </div>

    </section>

    <!-- FAQ Section -->
    <section class="rgu-faqx-section">

        <div class="container">

            <!-- Heading -->
            <div class="rgu-faqx-head text-center">

                <p class="rgu-faqx-subtitle">
                    Everything you need to know about admissions, fees, eligibility,
                    career prospects, and life at <br> The Assam Royal Global University.
                </p>

            </div>

            <!-- FAQ Wrapper -->
            <div class="rgu-faqx-wrapper">

                <!-- Search -->
                <div class="rgu-faqx-search-wrap">

                    <input type="text" id="rguFaqSearch" class="rgu-faqx-search" placeholder="Search questions...">

                </div>

                <!-- FAQ LIST -->
                <div class="rgu-faqx-list"></div>

            </div>

        </div>

    </section>

    <script>
        // FAQ DATA ARRAY
        const rguFaqData = [

            {
                question: "What is the fee structure of M.Tech programme?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money (Common for all streams) - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 51,500/- Or Yearly Payment - Rs 1,00,000/-"
            },

            {
                question: "What is the selection criteria for B.Tech?",
                answer: "Candidates must obtain a valid score in JEE/CEE or R-JEE (Royal Joint Entrance Examinations) and will have to sit for a Personal Interview (PI)."
            },

            {
                question: "What are the career opportunities after completing B.Tech?",
                answer: "A B.Tech degree holder is highly sought-after by industries. Civil Engineers plan, design and manage construction projects. Mechanical Engineers design advanced materials, robots and automatic control systems. Computer Science Engineers design mobile applications, software and networks."
            },

            {
                question: "What are the career opportunities for BBA students?",
                answer: "BBA lays the foundation for management education and prepares students for managerial jobs in both government and private sectors. Graduates can work in banking, finance, sales, marketing, management, insurance, and service-based industries, or pursue higher studies such as MBA, MCA, CA, and ICWAI."
            },

            {
                question: "So what really is Management education all about?",
                answer: "Management education is a full-time or part-time course that provides exposure to Finance, Marketing, Operations, HR and other business subjects. It develops analytical, logical, teamwork, presentation and problem-solving skills through exams, case studies, projects and assignments."
            },

            {
                question: "What are the specializations under MBA Programme?",
                answer: "Finance, Marketing, HRM, Operations Management, Entrepreneurship & Small Business Management, and Business Analytics."
            },

            {
                question: "What are the career opportunities after completing a M.Com course?",
                answer: "M.Com graduates can work in banking, insurance, FMCG companies, public sector undertakings and private organizations as Probationary Officers, Financial Analysts, Credit Officers, Loan Officers and Customer Relationship Executives."
            },

            {
                question: "What is B.Com Finance with ACCA?",
                answer: "ACCA (Association of Chartered Certified Accountants) is a global body for professional accountants. The programme prepares students for international careers in accounting and business and supports professional growth through a worldwide network of offices and approved employers."
            },

            {
                question: "What is B.Com Finance with CMA?",
                answer: "B.Com with Certified Management Accountant (CMA) is an IMA accredited UG programme. IMA is a global association focused on advancing the management accounting profession and empowering accounting and finance professionals worldwide."
            },

            {
                question: "What is the Fee structure of B.Arch?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 86,500/- Or Yearly Payment - Rs 1,70,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Arch?",
                answer: "10+2 or equivalent with minimum 50% marks and Physics, Chemistry and Mathematics, or a 3-Year Diploma recognized by Central/State Government with minimum 50% marks along with Mathematics and English as compulsory subjects."
            },

            {
                question: "What is the selection criteria for B.Arch.?",
                answer: "Candidates must obtain a valid score in NATA or JEE (Mains) Paper II and will have to sit for a Personal Interview."
            },

            {
                question: "What are the career opportunities after B.Arch.?",
                answer: "Architecture offers opportunities in spatial design, safety management, aesthetics and material management. Graduates can work as architects, designers, entrepreneurs or enter fields such as film making, set designing and management."
            },

            {
                question: "What is the fee structure of BID?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for BID?",
                answer: "10+2 or 3-Year Diploma in any branch recognized by Central/State Government with minimum 50% marks or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BID?",
                answer: "Based on the candidate’s overall performance in the last examination followed by Personal Interview (PI)."
            },

            {
                question: "What is the fee structure of BID Lateral Entry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for BID Lateral Entry?",
                answer: "10+2 in any stream with one year Diploma in Interior Design/equivalent qualification or 3 years Diploma in Architecture/Interior Design with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BID Lateral Entry?",
                answer: "Selection is based on the overall performance in the last examination followed by Personal Interview."
            },

            {
                question: "What is the duration of B.Arch. course?",
                answer: "The course duration of B.Arch course is 5 years."
            },

            {
                question: "What is the duration of Bachelor in Interior Designing?",
                answer: "The course duration of Bachelor in Interior Designing is 4 years and 3 years for lateral entry."
            },

            {
                question: "What is the fee structure of B.Des (Fashion Design)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Des (Fashion Design)?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Des (Fashion Design)?",
                answer: "Selection is based on overall performance in last examination followed by Personal Interview."
            },

            {
                question: "How are students evaluated in regular programs?",
                answer: "Students are evaluated throughout the semester through assignments, projects, internships, presentations and juries comprising academicians and industry professionals."
            },

            {
                question: "What are the campus facilities available for students?",
                answer: "On-campus resources include central library, departmental libraries, hostel facilities, canteens, sports zone, campus doctor, high-speed internet access and transportation facilities."
            },

            {
                question: "Are there any seats reserved for SC/ST/OBC students?",
                answer: "Yes, 5% relaxation is given to SC/ST/OBC candidates - Non Creamy Layer."
            },

            {
                question: "In which bank can I apply for education loan?",
                answer: "Education loan is offered by Punjab National Bank. For more details kindly visit the university website."
            },

            {
                question: "What is the fee structure of B.Des (Communication Design)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Des (Communication Design)?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Des (Communication Design)?",
                answer: "Selection is based on overall performance in last examination followed by Personal Interview."
            },

            {
                question: "What is the fee structure of B.Des (Graphic Design)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Des (Graphic Design)?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Des (Graphic Design)?",
                answer: "Selection is based on the overall performance in last examination followed by Personal Interview."
            },

            {
                question: "What is the fee structure of B.Des (Product Design)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 56,500/- Or Yearly Payment - Rs 1,10,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Des (Product Design)?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Des (Product Design)?",
                answer: "Selection is based on the overall performance in last examination followed by Personal Interview."
            },

            {
                question: "What is the fee structure of BFA?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 36,500/- Or Yearly Payment - Rs 70,000/-"
            },

            {
                question: "What is the eligibility criteria for BFA?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BFA?",
                answer: "Selection is based on the overall performance in last examination followed by Personal Interview."
            },

            {
                question: "What is the duration of a Bachelor Degree of Fine Arts?",
                answer: "The duration of Bachelor of Fine Arts (BFA) degree is 4 years."
            },

            {
                question: "What are the career opportunities available for Fine Arts Graduates in India?",
                answer: "Fine Arts graduates can work as craft or fine artists, multimedia artists, actors, art directors, art teachers, writers and professionals in advertising companies, publishing houses, television, theater productions and product design companies."
            },

            {
                question: "What is the remuneration of a Fine Arts Graduate in India?",
                answer: "The remuneration depends on the field of work. Graduates in textile industries, advertising agencies and publishing houses may initially earn around Rs. 12,000 – Rs. 25,000, while professionals in production houses may earn around Rs. 8,000 – Rs. 20,000 monthly."
            },

            {
                question: "What is the fee structure of M.Sc Physics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Physics?",
                answer: "B.Sc.(H) from any recognized University/Institution or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for M.Sc Physics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview (PI)."
            },

            {
                question: "What are the career opportunities after doing M.Sc Physics?",
                answer: "Students can pursue research studies in organizations such as ISRO and DRDO or work in government and private sectors as Junior Research Fellows, Research Scientists, Medical Physicists, Radiation Physicists, Research Associates, Online Tutors, Subject Matter Experts and Assistant Professors."
            },

            {
                question: "What kind of learning facilities does the Physics Department provide?",
                answer: "The Physics Department provides state-of-the-art infrastructure and lab facilities with equipment such as Dual Trace Oscilloscopes, Hall Effect setup, Ultrasonic Interferometer, Curie Temperature determination setup, Function Generators, LCR-Q Meter and LCD projectors."
            },

            {
                question: "What are the career opportunities after completing B.Sc Physics?",
                answer: "B.Sc Physics graduates can seek career opportunities in research organizations and related fields. Pursuing higher education further increases the scope of obtaining high-profile jobs with rewarding compensation."
            },

            {
                question: "What is the fee structure of M.Sc Chemistry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Chemistry?",
                answer: "B.Sc.(H) from any recognized University/Institution or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc Chemistry?",
                answer: "Selection is based on the overall performance in the last examination followed by Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc. Mathematics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc. Mathematics?",
                answer: "B.Sc.(H) from any recognized University/Institution or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc. Mathematics?",
                answer: "Selection is based on the overall performance in the last examination followed by Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc. Physics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc. Physics?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Physics?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Chemistry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc - Chemistry?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Chemistry?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Mathematics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc. Mathematics?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Mathematics?",
                answer: "Selection is done based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BCA?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 60,000/- Semester Payment - Rs 51,500/- Or Yearly Payment - Rs 1,00,000/-"
            },

            {
                question: "What is the eligibility criteria for BCA?",
                answer: "10+2 or equivalent from a recognized Board/Council with Mathematics, Computer Science or Information Technology as one of the compulsory subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BCA?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MCA?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MCA?",
                answer: "B.Tech./BE (CS/IT) or BCA or B.Sc. (IT) with minimum 50% marks in aggregate, or a 3-Year Bachelor’s Degree with Mathematics as a mandatory subject either in 10+2 or Graduation Level and minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MCA?",
                answer: "Candidates must obtain a valid score in JMEE or RJMEE and will have to sit for a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc.(IT)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 46,500/- Or Yearly Payment - Rs 90,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc.(IT)?",
                answer: "10+2 or equivalent from a recognized Board/Council with Mathematics, Computer Science or Information Technology as one of the compulsory subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc.(IT)?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc (IT)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc (IT)?",
                answer: "B.Tech./BE (CS/IT) or BCA or B.Sc. (IT) with minimum 50% marks in aggregate, or a 3-Year Bachelor’s Degree with Mathematics as a mandatory subject either in 10+2 or Graduation Level and minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for M.Sc (IT)?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Botany?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Botany?",
                answer: "B.Sc. from any recognized University/Institution in relevant field or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc Botany?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Zoology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Zoology?",
                answer: "B.Sc.(H) from any recognized University/Institution in relevant field or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for M.Sc Zoology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Biotechnology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Biotechnology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Biotechnology?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Biotechnology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Biotechnology?",
                answer: "B.Sc.(H) from any recognized University/Institution in relevant field or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc Biotechnology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Microbiology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Microbiology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Microbiology?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Microbiology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Microbiology?",
                answer: "B.Sc.(H) from any recognized University/Institution in relevant field or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc Microbiology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Botany?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Botany?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Botany?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Environmental Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Environmental Science?",
                answer: "B.Sc.(H) from any recognized University/Institution in relevant field or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for M.Sc Environmental Science?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Environmental Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Environmental Science?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Environmental Science?",
                answer: "Selection is based on overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Psychology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Psychology?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Psychology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Psychology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Psychology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Psychology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA English?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA English?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BA English?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA English?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA English?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA English?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Economics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Economics?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Economics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Economics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Economics?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Economics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Sociology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Sociology?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Sociology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Sociology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Sociology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for MA Sociology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Political Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Political Science?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Political Science?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Political Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Political Science?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Political Science?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Public Administration?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Public Administration?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Public Administration?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Public Administration?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Public Administration?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Public Administration?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA History?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA History?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BA History?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA History?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA History?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA History?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Assamese?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Assamese?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Assamese?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Assamese?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Assamese?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Assamese?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Education?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Education?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Education?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Education?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Education?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for MA Education?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Geography?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Geography?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Geography?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Geography?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Geography?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Geography?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Mass Communication?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Mass Communication?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Mass Communication?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Mass Communication?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Mass Communication?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Mass Communication?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Journalism?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Journalism?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BA Journalism?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Journalism?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Journalism?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Journalism?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Social Work?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Social Work?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Social Work?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Social Work?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Social Work?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Social Work?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Anthropology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Anthropology?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Anthropology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Anthropology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Anthropology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for MA Anthropology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Archaeology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Archaeology?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Archaeology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Archaeology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Archaeology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Archaeology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Philosophy?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Philosophy?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Philosophy?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Philosophy?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Philosophy?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Philosophy?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Rural Development?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Rural Development?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BA Rural Development?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Rural Development?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Rural Development?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Rural Development?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Hindi?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Hindi?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Hindi?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Hindi?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Hindi?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Hindi?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Sanskrit?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Sanskrit?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Sanskrit?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Sanskrit?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Sanskrit?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for MA Sanskrit?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Linguistics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Linguistics?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Linguistics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Linguistics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Linguistics?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Linguistics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Performing Arts?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Performing Arts?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Performing Arts?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Performing Arts?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Performing Arts?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Performing Arts?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Music?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Music?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BA Music?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Music?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Music?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Music?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Dance?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Dance?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Dance?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Dance?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Dance?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Dance?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Theatre?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Theatre?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Theatre?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Theatre?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Theatre?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for MA Theatre?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BA Fine Arts?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BA Fine Arts?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BA Fine Arts?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MA Fine Arts?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MA Fine Arts?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MA Fine Arts?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BSW?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BSW?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BSW?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MSW?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MSW?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for MSW?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of Bachelor of Physical Education (B.P.Ed)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for Bachelor of Physical Education (B.P.Ed)?",
                answer: "Bachelor degree in any discipline from a recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for Bachelor of Physical Education (B.P.Ed)?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of Master of Physical Education (M.P.Ed)?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for Master of Physical Education (M.P.Ed)?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for Master of Physical Education (M.P.Ed)?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Lib.I.Sc?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Lib.I.Sc?",
                answer: "Bachelor degree in any discipline from a recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for B.Lib.I.Sc?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Lib.I.Sc?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Lib.I.Sc?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Lib.I.Sc?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BTTM?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BTTM?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BTTM?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MTTM?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MTTM?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for MTTM?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BHMCT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BHMCT?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BHMCT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MHMCT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MHMCT?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for MHMCT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Hospitality & Hotel Administration?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Hospitality & Hotel Administration?",
                answer: "10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Hospitality & Hotel Administration?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Hospitality Administration?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Hospitality Administration?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Hospitality Administration?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Nutrition & Dietetics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Nutrition & Dietetics?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Nutrition & Dietetics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Nutrition & Dietetics?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Nutrition & Dietetics?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Nutrition & Dietetics?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Food Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Food Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Food Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Food Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Food Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Food Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Agriculture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Agriculture?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Agriculture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Agriculture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Agriculture?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Agriculture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Forestry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Forestry?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Forestry?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Forestry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Forestry?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Forestry?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Horticulture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Horticulture?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Horticulture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Horticulture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Horticulture?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Horticulture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Fisheries Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Fisheries Science?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Fisheries Science?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Fisheries Science?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Fisheries Science?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Fisheries Science?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Sericulture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Sericulture?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Sericulture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Sericulture?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Sericulture?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Sericulture?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Tea Husbandry & Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Tea Husbandry & Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Tea Husbandry & Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Tea Husbandry & Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Tea Husbandry & Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Tea Husbandry & Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Food Science & Nutrition?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Food Science & Nutrition?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Food Science & Nutrition?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Food Science & Nutrition?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Food Science & Nutrition?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Food Science & Nutrition?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BPT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BPT?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for BPT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MPT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MPT?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for MPT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of BMLT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for BMLT?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for BMLT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of MMLT?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for MMLT?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for MMLT?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Radiography & Imaging Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Radiography & Imaging Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Radiography & Imaging Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Radiography & Imaging Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Radiography & Imaging Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Radiography & Imaging Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Optometry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Optometry?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Optometry?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Optometry?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Optometry?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Optometry?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Operation Theatre Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Operation Theatre Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Operation Theatre Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Operation Theatre Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Operation Theatre Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Operation Theatre Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Dialysis Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Dialysis Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Dialysis Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Dialysis Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Dialysis Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Dialysis Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Emergency & Critical Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Emergency & Critical Care Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Emergency & Critical Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Emergency & Critical Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Emergency & Critical Care Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Emergency & Critical Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Physician Assistant?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Physician Assistant?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Physician Assistant?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Physician Assistant?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Physician Assistant?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Physician Assistant?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Cardiac Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Cardiac Care Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Cardiac Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Cardiac Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Cardiac Care Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Cardiac Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Medical Imaging Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Medical Imaging Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Medical Imaging Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Medical Imaging Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Medical Imaging Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Medical Imaging Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Anaesthesia Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Anaesthesia Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Anaesthesia Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Anaesthesia Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Anaesthesia Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Anaesthesia Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Medical Laboratory Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Medical Laboratory Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Medical Laboratory Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Medical Laboratory Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Medical Laboratory Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Medical Laboratory Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Renal Dialysis Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Renal Dialysis Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Renal Dialysis Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Renal Dialysis Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Renal Dialysis Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Renal Dialysis Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Operation Theatre & Anaesthesia Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Emergency Medical Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Emergency Medical Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Emergency Medical Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Emergency Medical Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Emergency Medical Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Emergency Medical Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Respiratory Therapy?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Respiratory Therapy?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Respiratory Therapy?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Respiratory Therapy?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Respiratory Therapy?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Respiratory Therapy?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Critical Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Critical Care Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Critical Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Critical Care Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Critical Care Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Critical Care Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Cardiac Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Cardiac Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Cardiac Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Cardiac Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Cardiac Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Cardiac Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Neuroscience Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Neuroscience Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Neuroscience Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Neuroscience Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Neuroscience Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },
            {
                question: "What is the selection criteria for M.Sc Neuroscience Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Perfusion Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Perfusion Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Perfusion Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Perfusion Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Perfusion Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Perfusion Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Cathlab Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Cathlab Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Cathlab Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Cathlab Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Cathlab Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Cathlab Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Trauma Care Management?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Trauma Care Management?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },
            {
                question: "What is the selection criteria for B.Sc Trauma Care Management?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Trauma Care Management?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Trauma Care Management?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Trauma Care Management?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of B.Sc Neuro Electro Physiology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Neuro Electro Physiology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Neuro Electro Physiology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Neuro Electro Physiology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Neuro Electro Physiology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Neuro Electro Physiology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },
            {
                question: "What is the fee structure of B.Sc Medical Record Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Medical Record Technology?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Medical Record Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Medical Record Technology?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Medical Record Technology?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Medical Record Technology?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },
            {
                question: "What is the fee structure of B.Sc Hospital Management?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Hospital Management?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Hospital Management?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Hospital Management?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Hospital Management?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Hospital Management?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },
            {
                question: "What is the fee structure of B.Sc Public Health?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 40,000/- Caution Money - Refundable - Rs 5,000/- Admission Fee - Rs 10,000/- Semester Payment - Rs 39,000/- Or Yearly Payment - Rs 75,000/-"
            },

            {
                question: "What is the eligibility criteria for B.Sc Public Health?",
                answer: "10+2 in science stream or equivalent from a recognized Board/Council with minimum 50% marks in aggregate and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)."
            },

            {
                question: "What is the selection criteria for B.Sc Public Health?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },

            {
                question: "What is the fee structure of M.Sc Public Health?",
                answer: "Prospectus & Form Fee - Rs 1000/- Registration Fee - Rs 10,000/- Caution Money - Refundable - Rs 10,000/- Admission Fee - Rs 50,000/- Semester Payment - Rs 43,500/- Or Yearly Payment - Rs 85,000/-"
            },

            {
                question: "What is the eligibility criteria for M.Sc Public Health?",
                answer: "Bachelor degree in relevant discipline from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade."
            },

            {
                question: "What is the selection criteria for M.Sc Public Health?",
                answer: "Selection is based on the overall performance in the last examination followed by a Personal Interview."
            },


        ];

        // TARGET CONTAINER
        const rguFaqList = document.querySelector('.rgu-faqx-list');

        // GENERATE FAQ ITEMS
        rguFaqData.forEach((faq, index) => {

            const faqItem = document.createElement('div');

            faqItem.classList.add('rgu-faqx-item');

            if (index === 0) {
                faqItem.classList.add('active');
            }

            faqItem.innerHTML = `

            <button class="rgu-faqx-question">

                <span>${faq.question}</span>

                <i class="fa fa-chevron-down"></i>

            </button>

            <div class="rgu-faqx-answer">

                <p>${faq.answer}</p>

            </div>

        `;

            rguFaqList.appendChild(faqItem);

        });

        // ACCORDION
        const rguFaqItems = document.querySelectorAll('.rgu-faqx-item');

        rguFaqItems.forEach(item => {

            const question = item.querySelector('.rgu-faqx-question');

            question.addEventListener('click', () => {

                const isActive = item.classList.contains('active');

                rguFaqItems.forEach(faq => {
                    faq.classList.remove('active');
                });

                if (!isActive) {
                    item.classList.add('active');
                }

            });

        });

        // SEARCH FUNCTION
        const rguFaqSearch = document.getElementById('rguFaqSearch');

        rguFaqSearch.addEventListener('keyup', function() {

            const value = this.value.toLowerCase();

            rguFaqItems.forEach(item => {

                const questionText = item.querySelector(
                    '.rgu-faqx-question span'
                ).innerText.toLowerCase();

                if (questionText.includes(value)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }

            });

        });
    </script>
@endsection
