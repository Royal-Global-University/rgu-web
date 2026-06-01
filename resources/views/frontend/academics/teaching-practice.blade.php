@extends('frontend/new-master')
@section('title', 'Teaching Practices : The Assam Royal Global University')
@section('meta_description', 'The Assam Royal Global University is upgrading its undergraduate programmes in the line of
    NEP, 2020. ')
@section('meta_keywords', 'Teaching Practices')
@section('content')

    <style>
        /* ==========================
       TEACHING PRACTICE SECTION
    ========================== */

        .teaching-practice-section {
            padding: 80px 0 40px;
            background: #EBF1FC;
        }

        .teaching-practice-top {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .teaching-practice-image {
            flex: 0 0 48%;
        }

        .teaching-practice-image img {
            width: 100%;
            border-radius: 14px;
            display: block;
            transition: 0.4s ease;
        }

        .teaching-practice-image img:hover {
            transform: scale(1.02);
        }

        .teaching-practice-content {
            flex: 1;
        }

        .teaching-practice-content h2 {
            color: #29437d;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: "Georgia", serif;
        }

        .teaching-practice-content p {
            color: #555;
            font-size: 1.6rem;
            text-align: justify;
            line-height: 1.9;
            margin-bottom: 14px;
        }

        /* ==========================
       FULL WIDTH BLUE SECTION
    ========================== */

        .teaching-practice-learning-wrap {
            width: 100%;
            background: #153a78;
            margin-top: 40px;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            padding: 70px 0;
            overflow: hidden;
        }

        .teaching-practice-learning {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .teaching-practice-learning-content {
            flex: 1;
            color: #fff;
        }

        .teaching-practice-learning-content h2 {
            color: #fff;
            font-size: 3rem;
            line-height: 1.25;
            margin-bottom: 30px;
            font-family: "Georgia", serif;
            font-weight: 700;
            max-width: 650px;
        }

        .teaching-practice-learning-content h2 span {
            color: #f07d33;
        }

        .teaching-practice-learning-content ol {
            padding-left: 20px;
            margin: 0;
        }

        .teaching-practice-learning-content li {
            color: rgba(255, 255, 255, 0.92);
            font-size: 1.5rem;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .teaching-practice-learning-image {
            flex: 0 0 42%;
        }

        .teaching-practice-learning-image img {
            width: 100%;
            border-radius: 14px;
            display: block;
            transition: 0.4s ease;
        }

        .teaching-practice-learning-image img:hover {
            transform: scale(1.03);
        }

        /* ==========================
       RESPONSIVE
    ========================== */

        @media (max-width: 1199px) {

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 36px;
            }
        }

        @media (max-width: 991px) {

            .teaching-practice-top,
            .teaching-practice-learning {
                flex-direction: column;
            }

            .teaching-practice-image,
            .teaching-practice-learning-image {
                flex: 0 0 100%;
                width: 100%;
            }

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 32px;
            }

            .teaching-practice-learning-wrap {
                padding: 60px 0;
                border-top-left-radius: 40px;
                border-top-right-radius: 40px;
            }
        }

        @media (max-width: 767px) {

            .teaching-practice-section {
                padding: 50px 0 20px;
            }

            .teaching-practice-top {
                gap: 30px;
            }

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 26px;
                line-height: 1.35;
            }

            .teaching-practice-content p,
            .teaching-practice-learning-content li {
                font-size: 14px;
            }

            .teaching-practice-learning-wrap {
                margin-top: 20px;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Academics-Student-Support-&-Development-Teaching-Practices/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Teaching Practices</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Student Support & Development / Teaching Practices
            </div>
        </div>

    </section>


    <section class="teaching-practice-section">
        <div class="container">

            <!-- Top Section -->
            <div class="teaching-practice-top">

                <div class="teaching-practice-image">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-Teaching-Practices/img2.jpg"
                        alt="Teaching Practices">
                </div>

                <div class="teaching-practice-content">
                    <h2>Teaching Practices</h2>

                    <p>
                        The Assam Royal Global University is upgrading its undergraduate
                        programmes in line with NEP 2020. Higher education plays an
                        extremely important role in promoting human and social well-being,
                        and sustaining national development. The National Education Policy
                        (NEP) 2020 addresses these challenges and aims to transform the
                        higher educational system through curricular, pedagogical,
                        institutional and academic reforms.
                    </p>

                    <p>
                        A holistic and multidisciplinary education would aim to develop all
                        capacities of human beings — intellectual, aesthetic, social,
                        physical, emotional, and moral in an integrated manner. As India
                        moves towards becoming a knowledge economy and society, more and
                        more young Indians are likely to develop highly specialised skills
                        in many areas.
                    </p>

                    <p>
                        NEP 2020 envisions undergraduate education to become more flexible,
                        multidisciplinary and holistic.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- Full Width Blue Section -->
    <section class="teaching-practice-learning-wrap">

        <div class="container">

            <div class="teaching-practice-learning">

                <div class="teaching-practice-learning-content">

                    <h2>
                        Teaching And <span>Learning</span> Process
                        Involves Classroom Lectures As Well As Tutorials.
                        It Includes:
                    </h2>

                    <ol>
                        <li>
                            Tutorials to have a closer interaction between the students and
                            the teacher such that each student gets individual attention.
                        </li>

                        <li>
                            Written assignments and projects submitted by students for
                            projects-based learning.
                        </li>

                        <li>
                            Students to be motivated to discover the relevant concepts to
                            take part in discussions and ask questions.
                        </li>

                        <li>
                            Homework assignments to make their concepts clear.
                        </li>

                        <li>Quizzes and class tests.</li>

                        <li>PPT presentations, seminars and interactive sessions.</li>

                        <li>Co-curricular activity etc.</li>

                        <li>Industrial tours or field visits etc.</li>
                    </ol>

                </div>

                <div class="teaching-practice-learning-image">
                    <img src="/new-web/assets/img/Academics-Student-Support-&-Development-Teaching-Practices/headimg.jpg"
                        alt="Learning Process">
                </div>

            </div>

        </div>

    </section>

    <script>
        // Teaching Practice JS
        document.addEventListener("DOMContentLoaded", () => {

            const teachingPracticeImages = document.querySelectorAll(
                ".teaching-practice-image img, .teaching-practice-learning-image img"
            );

            teachingPracticeImages.forEach((img) => {
                img.addEventListener("mouseenter", () => {
                    img.style.transform = "scale(1.03)";
                });

                img.addEventListener("mouseleave", () => {
                    img.style.transform = "scale(1)";
                });
            });

        });
    </script>

@endsection
