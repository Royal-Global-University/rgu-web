@extends('frontend/new-master')
@section('title', 'Diverse Choices : The Assam Royal Global University')
@section('meta_description', 'RGU offers different professional courses like Engineering and Technology, Business, Commerce, Architecture, Fashion Designing, Fine Arts, Pure and Applied Sciences, Information Technology.')
@section('meta_keywords', 'Diverse Choices')
@section('content')
        <style>
        /*====================================
        DIVERSE CHOICES SECTION
====================================*/

        .diverse-choice-section {
            padding: 70px 0 40px;
            background: #edf3ff;
        }

        .diverse-choice-heading {
            max-width: 900px;
            margin: 0 auto 55px;
            text-align: center;
        }

        .diverse-choice-heading h2 {
            font-size: 4rem;
            font-weight: 700;
            color: #27467b;
            margin-bottom: 18px;
        }

        .diverse-choice-heading p {
            max-width: 820px;
            margin: auto;
            color: #667287;
            line-height: 1.8;
            font-size: 1.8rem;
        }

        .diverse-feature-row {
            align-items: center;
        }

        .diverse-content-box {

            background: #18335f;

            color: #fff;

            padding: 65px;

            border-radius: 0 80px 80px 0;

            height: 100%;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .diverse-content-box h3 {

            font-size: 3rem;

            font-weight: 700;

            margin-bottom: 30px;

            color: #fff;

        }

        .diverse-content-box p {

            color: rgba(255, 255, 255, .88);

            font-size: 1.5rem;

            line-height: 2;

            margin-bottom: 25px;

        }

        .diverse-content-box p:last-child {
            margin-bottom: 0;
        }

        .diverse-feature-image img {

            width: 100%;

            border-radius: 25px;

            display: block;

            object-fit: cover;

        }

        /*====================================
            CARD SECTION
====================================*/

        .diverse-card-section {

            background: #edf3ff;

            padding: 20px 0 80px;

        }

        .diverse-card {

            background: #fff;

            border-radius: 12px;

            overflow: hidden;

            height: 100%;

            transition: .35s;

            box-shadow: 0 8px 24px rgba(0, 0, 0, .06);

        }

        .diverse-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 20px 45px rgba(0, 0, 0, .12);

        }

        .diverse-card img {

            width: 100%;

            aspect-ratio: 16/10;

            object-fit: cover;

            display: block;

        }

        .diverse-card-body {

            padding: 22px;

        }

        .diverse-card-body h4 {

            color: #28467c;

            font-size: 2.5rem;

            font-weight: 700;

            margin-bottom: 18px;

        }

        .diverse-btn {

            display: inline-block;

            padding: 10px 22px;

            background: #f26722;

            color: #fff;

            border-radius: 4px;

            text-decoration: none;

            font-size: 1.2rem;

            font-weight: 600;

            transition: .3s;

        }

        .diverse-btn:hover {

            background: #d84e0a;

            color: #fff;

            text-decoration: none;

        }

        /*====================================
            RESPONSIVE
====================================*/

        @media(max-width:991px) {

            .diverse-choice-section {
                padding: 60px 0 30px;
            }

            .diverse-choice-heading h2 {
                font-size: 2.4rem;
            }

            .diverse-content-box {

                border-radius: 30px;

                padding: 45px;

                margin-bottom: 35px;

            }

            .diverse-content-box h3 {
                font-size: 2.5rem;
            }

        }

        @media(max-width:767px) {

            .diverse-choice-section {
                padding: 50px 0 20px;
            }

            .diverse-card-section {
                padding: 20px 0 50px;
            }

            .diverse-choice-heading {
                margin-bottom: 35px;
            }

            .diverse-choice-heading h2 {
                font-size: 2rem;
            }

            .diverse-choice-heading p {
                font-size: .95rem;
            }

            .diverse-content-box {

                padding: 30px 25px;

                border-radius: 20px;

            }

            .diverse-content-box h3 {

                font-size: 2rem;

                margin-bottom: 20px;

            }

            .diverse-content-box p {

                font-size: .95rem;

                line-height: 1.9;

            }

            .diverse-card-body h4 {

                font-size: 1.6rem;

            }

            .diverse-btn {

                width: 100%;

                text-align: center;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/diverse-choices/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Diverse Choices</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Campus and Student Life / Diverse Choices
            </div>
        </div>

    </section>

    <section class="diverse-choice-section">

        <div class="container">

            <div class="diverse-choice-heading">

                <h2>How RGU Promote Diversity</h2>

                <p>
                    Established in July 2009 as Royal Group of Institutions, which has now been merged into
                    The Assam Royal Global University, a state private University which started its first
                    academic session from July, 2017.
                </p>

            </div>

            <div class="row align-items-center diverse-feature-row">

                <div class="col-lg-7">

                    <div class="diverse-content-box">

                        <h3>Diverse Choices</h3>

                        <p>
                            RGU offers different professional courses like Engineering and Technology,
                            Business, Commerce, Architecture, Fashion Designing, Fine Arts,
                            Pure and Applied Sciences, Information Technology,
                            Communication and Media, Behavioural and Allied Sciences,
                            Languages, Performing Arts, Life Sciences, Bio-Science,
                            Environmental and Earth Science, Nursing, Humanities and
                            Social Sciences, Law and Administration, Hotel Management
                            and Catering Technology etc.
                        </p>

                        <p>
                            The Assam Royal Global University provides competitive,
                            dynamic, industry oriented and research driven curricula
                            guided by a panel of experts from related fields as members
                            of Board of Studies and Academic Council. The syllabi
                            reflect modern practices and hands-on-experience which
                            reflects the mix of various old & modern University syllabi.
                            Every course curriculum is complemented by value-based
                            education along with other co-curricular activities,
                            cultural events, sports, and yoga for 360° development
                            of the students.
                        </p>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="diverse-feature-image">

                        <img src="/new-web/assets/img/diverse-choices/img1.png" alt="Diverse Choices">

                    </div>

                </div>

            </div>

        </div>

    </section>
    
    <section class="diverse-card-section">

        <div class="container">

            <div class="row">

                <!-- Card 1 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c1.png" alt="Programme">

                        <div class="diverse-card-body">

                            <h4>Programme</h4>

                            <a href="https://rgu.ac/doctoral-programme" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c2.png" alt="Eligibility & Selection">

                        <div class="diverse-card-body">

                            <h4>Eligibility &amp; Selection</h4>

                            <a href="https://rgu.ac/programs" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c3.png" alt="High Tech Labs">

                        <div class="diverse-card-body">

                            <h4>High Tech Labs</h4>

                            <a href="https://rgu.ac/laboratories" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 4 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c4.png" alt="Innovation">

                        <div class="diverse-card-body">

                            <h4>Innovation</h4>

                            <a href="https://rgu.ac/innovation" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 5 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c5.png" alt="Location">

                        <div class="diverse-card-body">

                            <h4>Location</h4>

                            <a href="https://rgu.ac/strategic-location" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 6 -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="diverse-card">

                        <img src="/new-web/assets/img/diverse-choices/c6.png" alt="Award & Honors">

                        <div class="diverse-card-body">

                            <h4>Award &amp; Honors</h4>

                            <a href="https://rgu.ac/award" class="diverse-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
