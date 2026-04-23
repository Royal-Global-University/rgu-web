@extends('frontend.master')
@section('title', 'Counselling cell : The Assam Royal Global University')
@section('meta_description', 'Royal Global University empowers students through its Counselling Cell, promoting
    emotional resilience, self-awareness, and balanced personal growth.')
@section('meta_keywords', 'Counselling cell')
@section('content')

    <style>
        :root {
            --rgu-counselling-primary: #27467A;
            --rgu-counselling-secondary: #F59E0B;
            --rgu-counselling-light: #F3F4F6;
            --rgu-counselling-dark: #1F2937;
            --rgu-counselling-text: #4B5563;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            background-color: #FFF8F0;
            color: var(--rgu-counselling-text);
            line-height: 1.6;
        }

        /* HERO SECTION (UPDATED) */
        .rgu-counselling-hero {
            background: linear-gradient(rgba(30, 59, 138, 0.467), rgba(30, 58, 138, 0.85)),
                url('mobile-assets/new-counselling-cell/headimg.png') center/cover no-repeat;
            min-height: 80vh;
            display: flex;
            align-items: center;
            padding: 60px 20px;
        }

        .rgu-counselling-hero-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            width: 100%;

        }


        .rgu-counselling-hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
            color: #fff;
        }

        .rgu-counselling-hero-desc {
            font-size: 1.2rem;
            margin-bottom: 25px;
            color: #fff;
        }

        .rgu-counselling-hero-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--rgu-counselling-secondary);
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .rgu-counselling-hero-btn:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .rgu-counselling-hero-wrapper {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .rgu-counselling-hero-left {
                display: none;
            }

            .rgu-counselling-hero-title {
                font-size: 2.5rem;
            }

            .rgu-counselling-hero-desc {
                margin: 0 auto 20px;
            }
        }

        /* CONTAINER */
        .rgu-counselling-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h2 {
            color: var(--rgu-counselling-primary);
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .rgu-counselling-section {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
            border-top: 4px solid var(--rgu-counselling-primary);
        }
    </style>

    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>


    <!-- HERO SECTION -->
    <header class="rgu-counselling-hero">
        <div class="rgu-counselling-hero-wrapper">

            <!-- RIGHT CONTENT -->
            <div>
                <h1 class="rgu-counselling-hero-title">Counselling Cell</h1>
                <p class="rgu-counselling-hero-desc">
                    Mental health as a concept is gaining prominence in the Indian context rapidly. Till the past decade
                    this was an area of prejudice and stigma, but open dialogue, conversations, and narratives on the
                    holistic domains of health (of which mental health is a major part) have taken over the discursive
                    space. This is reflected in several fields ranging from academic curriculum to popular culture
                    portrayals (movies, novels, web series, documentaries, and the likes).
                </p>

                <p class="rgu-counselling-hero-desc fw-bold">
                    The Counselling Cell is located in Block– A, first floor, The Assam Royal Global University
                </p>

                <a href="mailto:counselling@rgu.ac" class="rgu-counselling-hero-btn">
                    Get Help Today: counselling@rgu.ac
                </a>
            </div>

        </div>
    </header>

    <main class="rgu-counselling-container">

        <section class="rgu-counselling-section">
            <p>
                Mental health as a concept is gaining prominence in the Indian context rapidly. Till the past decade
                this was an area of prejudice and stigma, but open dialogue, conversations, and narratives on the
                holistic domains of health (of which mental health is a major part) have taken over the discursive
                space. This is reflected in several fields ranging from academic curriculum to popular culture
                portrayals (movies, novels, web series, documentaries, and the likes).
            </p>
            <p>
                In the context of university settings, students are caught up in multiple pressures from academic
                progression, career uncertainty, peer, parental and societal expectations and so on. All of these have a
                profound effect on their mental, physical, and emotional health. Over and above these, the COVID-19
                pandemic has brought in its wake many changes which eventually affect the students’ performance and
                overall well-being. Against this background and considering the advice of the Hon’ble Chancellor, an
                institutional mechanism is operationalized to address these critical issues affecting the students
                through the formation of the ‘Royal Centre for Wellbeing’ (RCFW).
            </p>

            <p>
                RCI certified and Licensedconsultant professionals are available in the cell. The Clinical Psychologist
                provides face to face individual sessions with the students seeking help. This unit is exclusively for
                RGU studentsand can also be accessed by faculty members if need be. The Clinical Psychologist is
                professionally qualified and competent to handle general issues (Ex- anxiety, stress, depression,
                body-image related, eating disorders, social isolation, anger-management, sexuality, career, identity,
                self-esteem based, and so on) as well as specific issues (mental health conditions that students would
                seek help for such as family, peer-group, or romantic relationships).
            </p>

            <p>
                In addition to the services of the external professional, in-house counseling is also provided by
                faculty members from the Department of Psychology with a commitment to helping students to prioritize
                their mental health, seek help when necessary, and begin on a path to greater resilience, growth, and
                fulfilment. The idea is to empower students by allowing them to reach their full academic and personal
                potential.
            </p>

            <p>
                The sessions are scheduled for students upon receiving a request from faculty mentors (through the
                mentor-mentee system in the university) from respective departments. Students may also write
                individually to counselling@rgu.ac for appointments. All the above are conducted once students
                voluntarily seek support/help regarding mental health.
            </p>
        </section>

    </main>

@endsection
