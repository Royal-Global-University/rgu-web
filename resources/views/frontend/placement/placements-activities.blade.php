@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div>
        <img src="assets/img/activities/banner.svg" alt="">
    </div>

    <div class="container-fluid" style="padding: 20px 80px;">
        <div class="para1 text-dark pb-2 text-justify">Royal Centre for Corporate Relations (RCCR) envisages enhancing the
            placement prospects of RGU students through various activities during the academic session.
        </div>

        <div style="display: flex; justify-content: center;" class="pb-4 pt-2">
            <div class="row">
                <div class="col-6">
                    <img class="rounded" src="assets/img/activities/pic1.jpeg" alt="Image 1"
                        style="width: 700px; height: auto;">
                </div>
                <div class="col-6">
                    <img class="rounded" src="assets/img/activities/pic2.jpeg" alt="Image 2"
                        style="width: 700px; height: auto;">
                </div>
            </div>
        </div>

        <div class="headd3 fw-bold text-dark pb-2 text-justify">Our University Placement Services Includes:
        </div>
        <ul class="para1 text-dark">
            <li>• Strong Industry Interface where potential employers in industry are contacted at regular intervals and
                recruitment processes are conducted on or off campus as per recruiter’s choice.
            </li>
            <li>• Internship opportunities in Government, Semi- Government and Private sector Industry/ Undertakings as per
                student’s choice. Further, to enhance the placement prospects for the students, the Royal Centre for
                Corporate Relations (RCCR) arranges industrial visits, field trips and interactive sessions with corporates
                on regular intervals.
            </li>
            <li>• Trainings on soft skills, Personality Development and Grooming sessions which involves a wide variety of
                trainingson leadership, teamwork, empathy, time management etc. The university provides such trainings to
                students for personality development so that they can be placement ready.
            </li>
            <li>• RCCR conducts regular mock group discussions (GD), Personal Interviews (PI) and online test practices.
            </li>
            <li>• Career Counselling session for students
            </li>
            <li>• RCCR arranges interactive sessions of students with RGU alumni so that the current students are inspired
                by the experiences of their seniors and also receive all necessary support from them in their professional
                journey ahead.
            </li>
            <li>• To ensure satisfactory induction, members from RCCR visit the worksites of the students to know how the
                students are performing in their job and thus gather corporate feedback on the students’ performance.
            </li>
        </ul>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
