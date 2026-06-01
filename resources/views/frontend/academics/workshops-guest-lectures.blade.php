@extends('frontend/new-master')
@section('title', 'Guest Lecture : The Assam Royal Global University')
@section('meta_description', 'Experience insightful perspectives and enrich your learning journey with Royal Global
    University guest lecture series.')
@section('meta_keywords', 'Guest Lecture')
@section('content')
    <style>
        /* ===================================
       GUEST LECTURERS
    =================================== */

        .guest-lecturers-section {
            background: #edf0f6;
            padding: 80px 0;
        }

        /* ===========================
       COMMON CARD
    =========================== */

        .guest-lecturers-card {
            display: grid;
            grid-template-columns: 340px 1fr 400px;
            gap: 30px;
            align-items: start;
            margin-bottom: 70px;
        }

        .guest-lecturers-left img,
        .guest-lecturers-right img {
            width: 100%;
            display: block;
            border-radius: 12px;
        }

        .guest-lecturers-caption {
            margin-top: 14px;
            font-size: 16px;
            color: #1f3568;
            line-height: 1.6;
            font-weight: 500;
        }

        .guest-lecturers-content h2 {
            font-size: 28px;
            line-height: 1.25;
            color: #234276;
            font-weight: 700;
            margin-bottom: 18px;
            font-family: 'Times New Roman', Times, serif;
        }

        .guest-lecturers-content p {
            text-align: justify;
            font-size: 16px;
            color: #666;
            line-height: 1.9;
            margin-bottom: 15px;
        }

        .guest-lecturers-right p {
            text-align: center;
            margin-top: 12px;
            color: #1f3568;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.6;
        }

        /* ===========================
       FEATURED SECTION
    =========================== */

        .guest-lecturers-featured {
            background: #0f2f66;
            border-radius: 40px;
            padding: 40px;
            margin: 80px 0;
            display: grid;
            grid-template-columns: 370px 1fr 360px;
            gap: 35px;
            align-items: start;
        }

        .guest-lecturers-featured-left img,
        .guest-lecturers-featured-right img {
            width: 100%;
            border-radius: 12px;
            display: block;
        }

        .guest-lecturers-featured-left p {
            color: #fff;
            margin-top: 18px;
            font-size: 16px;
            line-height: 1.8;
        }

        .guest-lecturers-featured-content h2 {
            color: #fff;
            font-size: 28px;
            line-height: 1.3;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .guest-lecturers-featured-content p {
            color: rgba(255, 255, 255, .85);
            line-height: 1.9;
            font-size: 16px;
        }

        .guest-lecturers-speaker {
            margin-top: 18px;
        }

        .guest-lecturers-speaker strong {
            display: block;
            color: #fff;
            font-size: 16px;
            margin-bottom: 6px;
        }

        .guest-lecturers-speaker span {
            color: rgba(255, 255, 255, .8);
            font-size: 16px;
            line-height: 1.7;
            display: block;
        }

        /* ===========================
       HOVER EFFECTS
    =========================== */

        .guest-lecturers-left img,
        .guest-lecturers-right img,
        .guest-lecturers-featured img {
            transition: .45s ease;
        }

        .guest-lecturers-left:hover img,
        .guest-lecturers-right:hover img,
        .guest-lecturers-featured-left:hover img,
        .guest-lecturers-featured-right:hover img {
            transform: scale(1.04);
        }

        /* ===========================
       RESPONSIVE
    =========================== */

        @media(max-width:1199px) {

            .guest-lecturers-card {
                grid-template-columns: 220px 1fr 220px;
            }

            .guest-lecturers-featured {
                grid-template-columns: 220px 1fr 220px;
            }

            .guest-lecturers-content h2 {
                font-size: 24px;
            }

            .guest-lecturers-featured-content h2 {
                font-size: 28px;
            }
        }

        @media(max-width:991px) {

            .guest-lecturers-card {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .guest-lecturers-featured {
                grid-template-columns: 1fr;
                padding: 30px;
            }

            .guest-lecturers-right {
                max-width: 350px;
            }

            .guest-lecturers-left,
            .guest-lecturers-right {
                margin: auto;
            }
        }

        @media(max-width:767px) {

            .guest-lecturers-section {
                padding: 50px 0;
            }

            .guest-lecturers-card {
                margin-bottom: 50px;
            }

            .guest-lecturers-content h2 {
                font-size: 22px;
            }

            .guest-lecturers-featured-content h2 {
                font-size: 24px;
            }

            .guest-lecturers-featured {
                border-radius: 25px;
                padding: 25px;
                margin: 50px 0;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Guest Lectures/ Workshops</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Student Support & Development / Guest Lectures/ Workshops
            </div>
        </div>

    </section>

    <section class="guest-lecturers-section">

        <div class="container">

            <!-- Card 01 -->
            <div class="guest-lecturers-card">

                <div class="guest-lecturers-left">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img1.png" alt="">
                    <p class="guest-lecturers-caption">
                        A Report On The Talk Given By
                        <strong>Dr. Sreyashi Mukherjee</strong><br>
                        On 14th Sept 2023
                    </p>
                </div>

                <div class="guest-lecturers-content">
                    <h2>
                        Topic : Utterly Amul: Recasting
                        Hybridizations Of Nation And
                        Womanhood
                    </h2>

                    <p>
                        Sreyashi Mukherjee in her talk entitled "Utterly Amul: Recasting Hybridizations of Nation and
                        Womanhood"
                        presented research carried out by her at Drexel University, Philadelphia, USA. She began by
                        portraying the
                        rise of Amul in 1946 through the efforts of Dr. Verghese Kurien and Prime Minister Jawaharlal
                        Nehru. She
                        argued that the Amul product caught the attention of the nation when in 1966 it began its
                        advertising
                        campaign with the ungrammatical but fun tagline, "Utterly Butterly Amul".

                    </p>

                    <p>
                        Dr. Mukherjee's research showed how a young nation was presented through the advertising
                        campaign
                        and how the trajectory of the nation was reflected through the years by Amul, touching upon key
                        issues of
                        politics, gender and identity. Apparently fun, tongue in cheek media comments are politically
                        and
                        sociologically significant, was how Dr. Mukherjee concluded the session.
                    </p>

                </div>

                <div class="guest-lecturers-right">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img2.png" alt="">
                    <p>
                        Organized By: Department Of Political Science, RSHSS
                    </p>
                </div>

            </div>

            <!-- Featured Blue Card -->
            <div class="guest-lecturers-featured">

                <div class="guest-lecturers-featured-left">

                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img3.png" alt="">

                    <p style="text-align: justify;">
                        The talk was attended by The Chancellor, ViceChancellor, Deans of the University, and other
                        faculty members and a good number of students. Prof. Jagadishwar Prasad Chaturvedi spoke about
                        the importance of learning an Indian language to understand the rich cultural heritage of India
                        and exhorted the Chancellor and Vice Chancellor to open up the School of Languages to many more
                        local languages of the North East. His talk was much appreciated for the insights that he
                        provided on Ancient Indian text and writing.
                    </p>

                </div>

                <div class="guest-lecturers-featured-content">

                    <h2>
                        The RSHSS organised a talk on
                        "Understanding Indian Knowledge
                        System: Literary Criticism in Hindi
                        and other Indian Languages" as a
                        first of a series on Indian Knowledge
                        System (IKS).
                    </h2>

                    <p>
                        an analysis of Shankar Dev in understanding manner in which Assam has adapted and contributed to
                        the rich heritage of India. Prof. Mahanta's talk was highly analytical and informative and both
                        the speakers left an indelible Prof. Mahanta delt with similar issues and added mark on the
                        audience.
                    </p>

                </div>

                <div class="guest-lecturers-featured-right">

                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img4.png" alt="">

                    <div class="guest-lecturers-speaker">
                        <strong>Prof. Jawaharlal Prasad Chaturvedi</strong>
                        <span>
                            Professor (Retd.) Of Hindi, University Of Calcutta
                        </span>
                    </div>

                    <div class="guest-lecturers-speaker">
                        <strong>Prof. Pradip Jyoti Mahanta</strong>
                        <span>
                            VC Royal School Of Communication &
                            Media Profession, Dept. Of English
                        </span>
                    </div>

                </div>

            </div>

            <!-- Card 03 -->
            <div class="guest-lecturers-card">

                <div class="guest-lecturers-left">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img5.png" alt="">
                </div>

                <div class="guest-lecturers-content">
                    <h2>
                        5-Days Workshop On Research,
                        Academic Writing And Latex
                    </h2>

                    <p>
                        While learning and studying for exams undoubtedly expands student's knowledge, it involves
                        learning only few skills. Project work and workshops
                        redresses this balance, by fostering a wide range of skills and enhancing capabilities to
                        synthesize, articulate, define problems, formulate
                        hypotheses, experiment, analyze, interpret, plan and execute the results of an experiment or
                        investigation and draw conclusions from data. Project work and workshops allow students to
                        learn 'actively' and take responsibility for
                        and ownership of their ideas.
                    </p>

                    <p>
                        The best curriculum strikes a perfect balance
                        between knowledge and skills and helps students
                        develop their understanding of both themselves and
                        the world around them.
                    </p>
                </div>

                <div class="guest-lecturers-right">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-guest-lectures/img6.png" alt="">
                </div>

            </div>

        </div>

    </section>

    <script>
        /* ===================================
       GUEST LECTURERS
    =================================== */

        document.addEventListener("DOMContentLoaded", function() {

            const guestLecturerCards = document.querySelectorAll(
                ".guest-lecturers-card, .guest-lecturers-featured"
            );

            guestLecturerCards.forEach(card => {

                card.addEventListener("mouseenter", () => {
                    card.style.transform = "translateY(-4px)";
                    card.style.transition = ".35s ease";
                });

                card.addEventListener("mouseleave", () => {
                    card.style.transform = "translateY(0)";
                });

            });

        });
    </script>
@endsection
