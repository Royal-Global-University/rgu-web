@extends('frontend/new-master')
@section('title', 'Royal Centre for Human Resource Development (RCHRD) : The Assam Royal Global University')
@section('meta_description', 'The Royal Centre for Human Resource Development (RCHRD) at Royal Global University offers
    cutting-edge training, research, and development programs to enhance HR practices and empower professionals in the
    field.')
@section('meta_keywords', 'Royal Centre for Human Resource Development (RCHRD)')
@section('content')
    <style>
        .rgu-rchrd-section {
            background: #EBF1FC;
            padding: 7rem 0;
            overflow: hidden;
        }

        .rgu-rchrd-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            align-items: center;
            margin-bottom: 3rem;
        }

        .rgu-rchrd-image-wrap {
            border-radius: 2.4rem;
            overflow: hidden;
            height: 100%;
        }

        .rgu-rchrd-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .rgu-rchrd-content {
            padding-right: 2rem;
        }

        .rgu-rchrd-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.4rem;
            line-height: 1.1;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 2rem;
        }

        .rgu-rchrd-text {
            font-size: 1.55rem;
            line-height: 1.9;
            color: #555;
            margin-bottom: 2.5rem;
        }

        .rgu-rchrd-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #d5672d;
            color: #fff;
            text-decoration: none;
            padding: 1.2rem 2.4rem;
            border-radius: .8rem;
            font-size: 1.4rem;
            font-weight: 600;
            transition: all .3s ease;
        }

        .rgu-rchrd-btn:hover {
            background: #b95320;
            color: #fff;
            transform: translateY(-2px);
        }

        .rgu-rchrd-bottom {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 1.8rem;
            overflow: hidden;
        }

        .rgu-rchrd-box {
            padding: 3.5rem 3.8rem;
        }

        .rgu-rchrd-vision {
            background: #dbe8fb;
        }

        .rgu-rchrd-mission {
            background: #f3f4f6;
        }

        .rgu-rchrd-box h4 {
            color: #d5672d;
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
        }

        .rgu-rchrd-box p {
            font-size: 1.8rem;
            line-height: 1.9;
            color: #555;
            margin: 0;
        }

        @media (max-width: 991px) {

            .rgu-rchrd-top,
            .rgu-rchrd-bottom {
                grid-template-columns: 1fr;
            }

            .rgu-rchrd-title {
                font-size: 3.5rem;
            }

            .rgu-rchrd-content {
                padding-right: 0;
            }
        }

        @media (max-width: 767px) {

            .rgu-rchrd-section {
                padding: 5rem 0;
            }

            .rgu-rchrd-top {
                gap: 2.5rem;
            }

            .rgu-rchrd-title {
                font-size: 2.8rem;
            }

            .rgu-rchrd-text,
            .rgu-rchrd-box p {
                font-size: 1.4rem;
            }

            .rgu-rchrd-box {
                padding: 2.8rem 2.4rem;
            }
        }
    </style>

    <style>
        .rgu-rchrd-obj-section {
            background: #fff;
            padding: 0 0 7rem;
        }

        .rgu-rchrd-obj-wrapper {
            background: #fff;
            border-radius: 4rem;
            padding: 5rem 6rem;
        }

        .rgu-rchrd-obj-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 4rem;
        }

        .rgu-rchrd-obj-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 4rem 3.5rem;
        }

        .rgu-rchrd-obj-item {
            display: flex;
            align-items: flex-start;
            gap: 1.2rem;
        }

        .rgu-rchrd-obj-dot {
            width: .8rem;
            height: .8rem;
            min-width: .8rem;
            border-radius: 50%;
            background: #d5672d;
            margin-top: .7rem;
        }

        .rgu-rchrd-obj-item p {
            margin: 0;
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
        }

        @media (max-width: 1199px) {
            .rgu-rchrd-obj-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 991px) {

            .rgu-rchrd-obj-wrapper {
                padding: 4rem;
                border-radius: 3rem;
            }

            .rgu-rchrd-obj-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 3rem;
            }

            .rgu-rchrd-obj-title {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 767px) {

            .rgu-rchrd-obj-section {
                padding-bottom: 5rem;
            }

            .rgu-rchrd-obj-wrapper {
                padding: 3rem 2.4rem;
                border-radius: 2.4rem;
            }

            .rgu-rchrd-obj-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .rgu-rchrd-obj-title {
                font-size: 2.8rem;
                margin-bottom: 3rem;
            }

            .rgu-rchrd-obj-item p {
                font-size: 1.38rem;
                line-height: 1.9;
            }
        }
    </style>

    <style>
        .rgu-rchrd-ec-section {
            background: #EBF1FC;
            padding: 0 0 8rem;
        }

        .rgu-rchrd-ec-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 700;
            padding-top: 5rem;
            color: #29467a;
            margin-bottom: 3.5rem;
        }

        .rgu-rchrd-ec-list {
            display: flex;
            flex-direction: column;
            gap: 2.4rem;
        }

        .rgu-rchrd-ec-item {
            display: flex;
            align-items: flex-start;
            gap: 1.3rem;
        }

        .rgu-rchrd-ec-dot {
            width: .8rem;
            height: .8rem;
            min-width: .8rem;
            border-radius: 50%;
            background: #d5672d;
            margin-top: .8rem;
        }

        .rgu-rchrd-ec-item p {
            margin: 0;
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
        }

        .rgu-rchrd-ec-divider {
            width: 100%;
            height: 1px;
            background: #bfc7d6;
            margin: 5rem 0;
        }

        .rgu-rchrd-committee-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .rgu-rchrd-member-card {
            background: #f7f7f7;
            border-radius: 1.2rem;
            padding: 2.4rem;
            transition: all .3s ease;
        }

        .rgu-rchrd-member-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 1rem 2.5rem rgba(0, 0, 0, 0.06);
        }

        .rgu-rchrd-member-card h4 {
            font-size: 1.8rem;
            line-height: 1.8;
            font-weight: 700;
            color: #d5672d;
            margin-bottom: .8rem;
        }

        .rgu-rchrd-member-card span {
            display: block;
            font-size: 1.8rem;
            color: #666;
        }

        @media (max-width: 991px) {

            .rgu-rchrd-ec-title {
                font-size: 3.5rem;
            }

            .rgu-rchrd-committee-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {

            .rgu-rchrd-ec-section {
                padding-bottom: 5rem;
            }

            .rgu-rchrd-ec-title {
                font-size: 2.8rem;
                margin-bottom: 2.5rem;
            }

            .rgu-rchrd-ec-item p {
                font-size: 1.38rem;
                line-height: 1.9;
            }

            .rgu-rchrd-committee-grid {
                grid-template-columns: 1fr;
            }

            .rgu-rchrd-member-card {
                padding: 2rem;
            }
        }
    </style>

    <style>
        .rgu-rchrd-fn-section {
            background: #fff;
            padding: 0 0 8rem;
        }

        .rgu-rchrd-fn-wrapper {
            background: #fff;
            border-radius: 4rem;
            padding: 5rem 6rem;
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .rgu-rchrd-fn-image {
            border-radius: 1.8rem;
            overflow: hidden;
        }

        .rgu-rchrd-fn-image img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .rgu-rchrd-fn-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 3rem;
        }

        .rgu-rchrd-fn-list {
            display: flex;
            flex-direction: column;
            gap: 2.4rem;
        }

        .rgu-rchrd-fn-item {
            display: flex;
            align-items: flex-start;
            gap: 1.3rem;
        }

        .rgu-rchrd-fn-dot {
            width: .8rem;
            height: .8rem;
            min-width: .8rem;
            border-radius: 50%;
            background: #d5672d;
            margin-top: .75rem;
        }

        .rgu-rchrd-fn-item p {
            margin: 0;
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
        }

        @media (max-width: 991px) {

            .rgu-rchrd-fn-wrapper {
                grid-template-columns: 1fr;
                padding: 4rem;
                gap: 3rem;
            }

            .rgu-rchrd-fn-title {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 767px) {

            .rgu-rchrd-fn-section {
                padding-bottom: 5rem;
            }

            .rgu-rchrd-fn-wrapper {
                padding: 3rem 2.4rem;
                border-radius: 2.5rem;
            }

            .rgu-rchrd-fn-title {
                font-size: 2.8rem;
                margin-bottom: 2.5rem;
            }

            .rgu-rchrd-fn-item p {
                font-size: 1.38rem;
                line-height: 1.9;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Royal Centre for Human Resource Development (RCHRD)</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Student Support & Development / Royal Centre for Human Resource Development (RCHRD)
                (RCHRD)
            </div>
        </div>

    </section>

    <!-- RCHRD Intro Section -->
    <section class="rgu-rchrd-section">
        <div class="container">

            <div class="rgu-rchrd-top">

                <!-- Left Image -->
                <div class="rgu-rchrd-image-wrap">
                    <img src="/new-web/assets/img/Academics - Royal Centre for Human Resource Development/headimg.png"
                        alt="RCHRD Meeting">
                </div>

                <!-- Right Content -->
                <div class="rgu-rchrd-content">
                    <h2 class="rgu-rchrd-title">
                        Royal Centre For Human Resource Development (RCHRD)
                    </h2>

                    <p class="rgu-rchrd-text">
                        In accordance with the guidelines of the University Grants Commission (UGC) and the Malaviya
                        Mission Teacher Training Centre (erstwhile Human Resource Development Centre), the Royal Global
                        University has set up the Royal Centre for Human Resource Development for developing the
                        capacity of its human resources through trainings, workshops, etc. The Centre aims to transform
                        higher education by integrating Indian values and ethos into teaching, research, publications,
                        patents, and institutional development.
                    </p>

                    <a href="https://rgu.ac/mobile-assets/hrdc/HRDC_Annual%20Report.pdf" class="rgu-rchrd-btn">
                        HRDC Annual Report
                    </a>
                </div>

            </div>

            <!-- Vision Mission -->
            <div class="rgu-rchrd-bottom">

                <div class="rgu-rchrd-box rgu-rchrd-vision">
                    <h4>Our Vision</h4>

                    <p>
                        To build competencies of faculty and staff for improved teaching, learning, research, academic
                        leadership and administration by aligning them with the values and goals of the university and
                        updating their knowledge and skills according to the needs of society.
                    </p>
                </div>

                <div class="rgu-rchrd-box rgu-rchrd-mission">
                    <h4>Our Mission</h4>

                    <p>
                        Enable faculty and staff to acquire specific competencies that help improve their work
                        performance, student learning outcomes coupled with excellence in research and administration.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- RCHRD Objectives Section -->
    <section class="rgu-rchrd-obj-section">

        <div class="container">

            <div class="rgu-rchrd-obj-wrapper">

                <h2 class="rgu-rchrd-obj-title">Objective</h2>

                <div class="rgu-rchrd-obj-grid">

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Improving the quality of education by providing training and development opportunities for
                            teachers and other academic staff.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Promoting multiculturalism by facilitating collaboration between different departments and
                            faculties.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Training teachers by providing the latest pedagogical methods and techniques.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Encouraging the development of innovative pedagogy for skilled-based education.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Developing teachers as mentors for helping the students to meet life's challenges.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Organizing in-service training programs for teachers and administrative staff.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            Facilitating reforms in each school by modifying management systems and practices.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            To ensure holistic development of teachers, staff, and students with the inculcation of
                            ethics and human values as enshrined in Indian culture and familiarizing them with the
                            Indian Knowledge System (Bharatiya Gyan Parampara).
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            To ensure the role of faculty and staff as active participants in institution and nation
                            building.
                        </p>
                    </div>

                    <div class="rgu-rchrd-obj-item">
                        <span class="rgu-rchrd-obj-dot"></span>
                        <p>
                            To empower faculty members and staff as lifelong learners through continuous professional
                            development.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- RCHRD Outcomes & Committee Section -->
    <section class="rgu-rchrd-ec-section">

        <div class="container">

            <!-- Expected Outcomes -->
            <div class="rgu-rchrd-ec-top">

                <h2 class="rgu-rchrd-ec-title">Expected Outcomes</h2>

                <div class="rgu-rchrd-ec-list">

                    <div class="rgu-rchrd-ec-item">
                        <span class="rgu-rchrd-ec-dot"></span>
                        <p>
                            The faculty members will get sensitized and oriented on NEP 2020 by imparting holistic
                            education, imbibing the ideals of Bhartiya-centric ethics and human values.
                        </p>
                    </div>

                    <div class="rgu-rchrd-ec-item">
                        <span class="rgu-rchrd-ec-dot"></span>
                        <p>
                            Faculty, staff, and students will acquire the concept of the Indian Knowledge Systems
                            (Bharatiya Gyan Parampara), integrate it into the curriculum, and apply it in real life for
                            the advancement and creation of knowledge.
                        </p>
                    </div>

                    <div class="rgu-rchrd-ec-item">
                        <span class="rgu-rchrd-ec-dot"></span>
                        <p>
                            The faculty, staff, and students will develop 21st-century skills and become reflective
                            practitioners to innovatively generate and apply ideas respecting biodiversity and
                            sustainability.
                        </p>
                    </div>

                    <div class="rgu-rchrd-ec-item">
                        <span class="rgu-rchrd-ec-dot"></span>
                        <p>
                            The faculty and students will conduct quality research to solve contemporary problems
                            through innovation and entrepreneurship.
                        </p>
                    </div>

                    <div class="rgu-rchrd-ec-item">
                        <span class="rgu-rchrd-ec-dot"></span>
                        <p>
                            The faculty and students will develop the capacity to integrate ICT tools into the learning
                            process and become lifelong self-motivated learners.
                        </p>
                    </div>

                </div>

            </div>

            <div class="rgu-rchrd-ec-divider"></div>

            <!-- Committee -->
            <div class="rgu-rchrd-committee">

                <h2 class="rgu-rchrd-ec-title">RCHRD Committee:</h2>

                <div class="rgu-rchrd-committee-grid">

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. Dr. George A.P. (Dean, RSB &amp; RSC)</h4>
                        <span>Chairman</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. L.K. Nath (Dean, RSP)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. (Dr.) Ladu Singh (Prof. Emeritus)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. D.N. Singh (Registrar-Academics)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. (Dr.) Diganta Munshi, Dean RSIT &amp; RSET</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. Surajit Mukhopadhyay (Dean, RSHS)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Dr. Sankar Burman (Coordinator, IIC-RGU)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. Samip Baruah (Prof. RSB)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Dr. Indrajit Dutta (Asst. Professor, RSTTM)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Ms. Baishali Pathak (Asst. Professor, RSC)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Dr. Hirak Jyoti Hazarika (HOD-RSLISC)</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Ms. Bristy Srivastava, Head RCCR</h4>
                        <span>Member</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Prof. Nikhil K Chrungoo (Dean, RSLS)</h4>
                        <span>Special Invitee</span>
                    </div>

                    <div class="rgu-rchrd-member-card">
                        <h4>Dr. Suman Agarwal (Asst Prof, RSB)</h4>
                        <span>MDP Coordinator</span>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- RCHRD Functions Section -->
    <section class="rgu-rchrd-fn-section">

        <div class="container">

            <div class="rgu-rchrd-fn-wrapper">

                <!-- Left Image -->
                <div class="rgu-rchrd-fn-image">
                    <img src="/new-web/assets/img/Academics - Royal Centre for Human Resource Development/2nd-img.png"
                        alt="RCHRD Functions">
                </div>

                <!-- Right Content -->
                <div class="rgu-rchrd-fn-content">

                    <h2 class="rgu-rchrd-fn-title">Functions</h2>

                    <div class="rgu-rchrd-fn-list">

                        <div class="rgu-rchrd-fn-item">
                            <span class="rgu-rchrd-fn-dot"></span>
                            <p>
                                Organise induction programmes for newly appointed faculty members.
                            </p>
                        </div>

                        <div class="rgu-rchrd-fn-item">
                            <span class="rgu-rchrd-fn-dot"></span>
                            <p>
                                Organize FDP/refresher/orientation courses for the faculty.
                            </p>
                        </div>

                        <div class="rgu-rchrd-fn-item">
                            <span class="rgu-rchrd-fn-dot"></span>
                            <p>
                                Conduct training programmes for staff on various administrative procedures including ICT
                                in governance, financial management and interpersonal relations.
                            </p>
                        </div>

                        <div class="rgu-rchrd-fn-item">
                            <span class="rgu-rchrd-fn-dot"></span>
                            <p>
                                Assist in conducting Student Induction Programme.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
