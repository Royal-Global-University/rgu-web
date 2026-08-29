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

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/placement-job-fair/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Job Fair</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Job Fair
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
                    Mega Placement <span>Day 2026</span>
                </h3>

                <div class="row item-center">
                    <div class="col-lg-6 mb-4 item-center">
                        <a href="/new-web/assets/placement-job-fair/2026/events.png" class="rccr-gallery-item">
                            <img src="/mobile-assets/ads/job-fair.png" height="800px" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4 item-center">
                        <div class="m-4">
                            <h1 class="mb-5">For More Details</h1>
                            <h1 class="text-danger mb-3">Phone Number: 9910044299 / 8472048425</h1>
                            <h1 class="text-danger">Email id: rccr.placement@rgu.ac</h1>
                        </div>
                    </div>

                    <p>
                        <strong>Guwahati, March 17, 2026:</strong>
                        The Assam Royal Global University successfully organized a Mega Placement Day 2026 at its campus on
                        17th March 2026, witnessing the participation of 64 leading companies and more than 132 industry
                        professionals from diverse sectors. The event provided a major recruitment platform for over 850
                        registered final-year students from various schools of the University.
                    </p>

                    <p>
                        Among the prominent recruiters participating in the drive were TOPCEM Cement, Star Cement, Artson
                        Limited (A Tata Enterprise), Gargya Toyota, Mahindra Industrial & Farm Equipment, Motilal Oswal,
                        Sapient Finserv, Marico Ltd., Emami Ltd., Sun Pharma, Eicher Motors, Mayfair Spring Valley Resort,
                        Marriott Shillong, Radisson Blu, Centre Point Hotel/Ri-Kynjai Resort, Apollo International Hospital,
                        Marwari Hospital, Lenskart, Prag News, Pratidin Times, DY365, and JK Services (Canon), along with
                        several other reputed organizations.
                    </p>

                    <p>
                        Students from multiple undergraduate and postgraduate programs including B.Tech, MBA, BBA, B.Com,
                        M.Com, B.Pharm, M.Pharm, Nursing, Allied Health Sciences, Hospitality and Tourism Management,
                        Architecture, and Mass Communication actively participated in the recruitment process.
                    </p>

                    <p>
                        The event served as a significant platform for students to engage directly with industry leaders,
                        showcase their professional skills, and explore diverse career pathways. The strong industry
                        participation highlights Royal Global University’s commitment to fostering industry-academia
                        collaboration and enhancing career opportunities for its graduates.
                    </p>

                </div>

                <div class="row">

                    <div class="col-lg-12 mb-4">

                        <a href="/new-web/assets/placement-job-fair/2026/events.png" class="rccr-gallery-item">

                            <img src="/new-web/assets/placement-job-fair/2026/events.png" alt="">

                        </a>

                    </div>


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
                            Job <span>Fair 2023</span>
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

                        <a href="/new-web/assets/placement-job-fair/2023/1.png" class="job-gallery-item">
                            <img src="/new-web/assets/placement-job-fair/2023/1.png" alt="">
                        </a>

                        <a href="/new-web/assets/placement-job-fair/2023/2.png" class="job-gallery-item">
                            <img src="/new-web/assets/placement-job-fair/2023/2.png" alt="">
                        </a>

                        <a href="/new-web/assets/placement-job-fair/2023/3.png" class="job-gallery-item">
                            <img src="/new-web/assets/placement-job-fair/2023/3.png" alt="">
                        </a>

                        <a href="/new-web/assets/placement-job-fair/2023/4.png" class="job-gallery-item">
                            <img src="/new-web/assets/placement-job-fair/2023/4.png" alt="">
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
