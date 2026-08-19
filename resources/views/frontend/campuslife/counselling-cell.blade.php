@extends('frontend/new-master')
@section('title', 'Counselling cell : The Assam Royal Global University')
@section('meta_description',
    'Royal Global University empowers students through its Counselling Cell, promoting
    emotional resilience, self-awareness, and balanced personal growth.')
@section('meta_keywords', 'Counselling cell')
@section('content')
    <style>
        /*==================================================
                    COUNSELLING INTRO
            ==================================================*/

        .rgcc-intro {

            padding: 90px 0;

            background: #eef3fb;

        }

        .rgcc-image {

            overflow: hidden;

            border-radius: 34px;

            box-shadow:
                0 22px 55px rgba(18, 40, 84, .12);

        }

        .rgcc-image img {

            width: 100%;

            display: block;

            transition: .45s;

        }

        .rgcc-image:hover img {

            transform: scale(1.05);

        }

        .rgcc-content {

            padding-left: 18px;

        }

        .rgcc-tag {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 18px;

        }

        .rgcc-content h2 {

            font-family: "Playfair Display", serif;

            font-size: 40px;

            color: #23457b;

            margin-bottom: 28px;

            line-height: 1.1;

        }

        .rgcc-content p {

            color: #5f6a78;

            line-height: 2;

            font-size: 17px;

            margin-bottom: 22px;

        }

        .rgcc-location {

            display: flex;

            gap: 14px;

            align-items: flex-start;

            margin: 35px 0;

            color: #394b63;

            font-size: 17px;

            font-weight: 600;

        }

        .rgcc-location i {

            color: #d96b34;

            font-size: 22px;

            margin-top: 2px;

        }

        .rgcc-btn {

            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding: 18px 34px;

            border-radius: 12px;

            background: #de6a2d;

            color: #fff;

            text-decoration: none;

            font-weight: 600;

            transition: .35s;

        }

        .rgcc-btn:hover {

            background: #23457b;

            color: #fff;

            transform: translateY(-4px);

            box-shadow:
                0 18px 35px rgba(35, 69, 123, .25);

        }

        /*========================*/

        @media(max-width:991px) {

            .rgcc-intro {

                padding: 70px 0;

            }

            .rgcc-content {

                padding-left: 0;

            }

            .rgcc-content h2 {

                font-size: 44px;

            }

        }

        @media(max-width:767px) {

            .rgcc-intro {

                padding: 55px 0;

            }

            .rgcc-image {

                border-radius: 20px;

            }

            .rgcc-content h2 {

                font-size: 34px;

            }

            .rgcc-content p {

                font-size: 15px;

                line-height: 1.9;

            }

            .rgcc-location {

                font-size: 15px;

            }

            .rgcc-btn {

                width: 100%;

                justify-content: center;

                text-align: center;

                font-size: 15px;

                padding: 16px;

            }

        }
    </style>

    <style>
        /*==================================================
                    COUNSELLING CONTENT
            ==================================================*/

        .rgcc-info {

            background: linear-gradient(180deg, #2d4d86 0%, #0f2550 100%);

            border-radius: 70px 70px 0 0;

            padding: 90px 0;

            position: relative;

            overflow: hidden;

        }

        .rgcc-info::before {

            content: "";

            position: absolute;

            width: 700px;

            height: 700px;

            right: -250px;

            top: -250px;

            border-radius: 50%;

            background: radial-gradient(rgba(255, 255, 255, .05), transparent 70%);

        }

        .rgcc-content-area {

            position: relative;

            z-index: 2;

        }

        .rgcc-content-area p {

            color: rgba(255, 255, 255, .90);

            font-size: 17px;

            line-height: 2.05;

            margin-bottom: 34px;

        }

        .rgcc-content-area p:last-child {

            margin-bottom: 0;

        }

        .rgcc-content-area strong {

            color: #fff;

            font-weight: 700;

        }

        .rgcc-content-area a {

            color: #d8b15c;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;

        }

        .rgcc-content-area a:hover {

            color: #fff;

        }

        .rgcc-content-area p::first-letter {

            font-size: 115%;

        }

        /*===========================*/

        @media(max-width:991px) {

            .rgcc-info {

                padding: 70px 0;

                border-radius: 50px 50px 0 0;

            }

            .rgcc-content-area p {

                font-size: 16px;

            }

        }

        @media(max-width:767px) {

            .rgcc-info {

                padding: 55px 0;

                border-radius: 30px 30px 0 0;

            }

            .rgcc-content-area p {

                font-size: 15px;

                line-height: 1.95;

                margin-bottom: 24px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Counselling Cell</h1>
            <div class="pg-hero-breadcrumb">
                Counselling Cell
            </div>
        </div>

    </section>

    <div class="container my-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="/mobile-assets/counciling-cell/new/1.jpg" class="img-fluid w-100 rounded" alt="Counselling Cell Image 1" />
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="/mobile-assets/counciling-cell/new/2.png" class="img-fluid w-100 rounded" alt="Counselling Cell Image 2" />
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="/mobile-assets/counciling-cell/new/3.jpg" class="img-fluid w-100 rounded" alt="Counselling Cell Image 3" />
            </div>
        </div>
    </div>


    <section class="rgcc-intro">

        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="rgcc-image">

                        <img src="/mobile-assets/new-counselling-cell/headimg.png" alt="Counselling Cell">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="rgcc-content">

                        <span class="rgcc-tag">
                            Student Wellness
                        </span>

                        <h2>
                            Counselling Cell
                        </h2>

                        <p>
                            Mental health as a concept is gaining prominence in the Indian
                            context rapidly. Till the past decade this was an area of
                            prejudice and stigma, but open dialogue, conversations and
                            narratives on the holistic domains of health have taken over
                            the discourse.
                        </p>

                        <p>

                            This is reflected in several fields ranging from academic
                            curriculum to popular culture portrayals such as movies,
                            novels, documentaries and digital media.

                        </p>

                        <div class="rgcc-location">

                            <i class="bi bi-geo-alt-fill"></i>

                            The Counselling Cell is located in
                            Block-A, First Floor,
                            The Assam Royal Global University.

                        </div>

                        <a href="mailto:counselling@rgu.ac" class="rgcc-btn">

                            <i class="bi bi-envelope-fill"></i>

                            Get Help Today :
                            counselling@rgu.ac

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="rgcc-info">

        <div class="container">

            <div class="rgcc-content-area">

                <p>
                    Mental health as a concept is gaining prominence in the Indian context rapidly.
                    Till the past decade this was an area of prejudice and stigma, but open dialogue,
                    conversations, and narratives on the holistic domains of health (of which mental
                    health is a major part) have taken over the discursive space. This is reflected in
                    several fields ranging from academic curriculum to popular culture portrayals
                    (movies, novels, web series, documentaries, and the likes).
                </p>

                <p>
                    In the context of university settings, students are caught up in multiple pressures
                    from academic progression, career uncertainty, peer, parental and societal
                    expectations and so on. All of these have a profound effect on their mental,
                    physical, and emotional health. Over and above these, the COVID-19 pandemic has
                    brought in its wake many changes which eventually affect the students' performance
                    and overall well-being.
                </p>

                <p>
                    Against this background and considering the advice of the Hon'ble Chancellor,
                    an institutional mechanism was operationalized to address these critical issues
                    affecting the students through the formation of the
                    <strong>Royal Centre for Wellbeing (RCFW)</strong>.
                </p>

                <p>
                    RCI certified and licensed consultant professionals are available in the cell.
                    The Clinical Psychologist provides face-to-face individual sessions with students
                    seeking help. This unit is exclusively for RGU students and can also be accessed
                    by faculty members if needed.
                </p>

                <p>
                    The Clinical Psychologist is professionally qualified and competent to handle
                    general issues such as anxiety, stress, depression, body image concerns,
                    eating disorders, social isolation, anger management, sexuality, career,
                    identity, self-esteem, and specific mental health conditions.
                </p>

                <p>
                    In addition to external professionals, in-house counselling is also provided by
                    faculty members from the Department of Psychology with a commitment to helping
                    students prioritize their mental health and develop resilience, confidence,
                    and personal growth.
                </p>

                <p>
                    The sessions are scheduled upon receiving requests through faculty mentors
                    or directly from students. Students may also write to
                    <a href="mailto:counselling@rgu.ac">
                        counselling@rgu.ac
                    </a>
                    for appointments. All counselling sessions are conducted confidentially and
                    only after students voluntarily seek support.
                </p>

            </div>

        </div>

    </section>

@endsection
