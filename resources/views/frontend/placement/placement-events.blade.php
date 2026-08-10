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
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/introduction/cover.png'); filter: blur(2px);">
        </div>

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

    <section class="rccr-events-section">

        <div class="container">

            <div class="rccr-heading">

                <h2>
                    RCCR <span>Events</span>
                </h2>

            </div>

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

                    <a href="/mobile-assets/placement-all/placements-activity/l-img.png" class="rccr-gallery-item">

                        <img src="/mobile-assets/placement-all/placements-activity/l-img.png" alt="">

                    </a>

                </div>

                <div class="col-lg-6 mb-4">

                    <a href="/mobile-assets/placement-all/placements-activity/r-img.png" class="rccr-gallery-item">

                        <img src="/mobile-assets/placement-all/placements-activity/r-img.png" alt="">

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

                        <a href="new-web/assets/img/rccr-events/1.png" class="job-gallery-item">
                            <img src="new-web/assets/img/rccr-events/1.png" alt="">
                        </a>

                        <a href="new-web/assets/img/rccr-events/2.png" class="job-gallery-item">
                            <img src="new-web/assets/img/rccr-events/2.png" alt="">
                        </a>

                        <a href="new-web/assets/img/rccr-events/3.png" class="job-gallery-item">
                            <img src="new-web/assets/img/rccr-events/3.png" alt="">
                        </a>

                        <a href="new-web/assets/img/rccr-events/4.png" class="job-gallery-item">
                            <img src="new-web/assets/img/rccr-events/4.png" alt="">
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

                        <a href="new-web/assets/img/rccr-events/a.png" class="hr-gallery-item">

                            <img src="new-web/assets/img/rccr-events/a.png" alt="HR Conclave">

                        </a>

                        <a href="new-web/assets/img/rccr-events/b.png" class="hr-gallery-item">

                            <img src="new-web/assets/img/rccr-events/b.png" alt="HR Conclave">

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

                        <a href="new-web/assets/img/rccr-events/a1.png" class="recruitment-gallery-item">

                            <img src="new-web/assets/img/rccr-events/a1.png" alt="">

                        </a>

                        <a href="new-web/assets/img/rccr-events/a2.png" class="recruitment-gallery-item">

                            <img src="new-web/assets/img/rccr-events/a2.png" alt="">

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
