@extends('frontend.master')
@section('title', 'Royal Global University Proceeds with FYUGP')
@section('meta_keywords', 'Blog')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container mt-5" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 30px;">
                Royal Global University Proceeds with FYUGP
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-9">
                    <img class=" rounded" src="/mobile-assets/rgu-blog/blog2.jpeg"
                        style=" border: 3px solid black; height: 400px; width: 100%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, May 30, 2026: </span>
                The Assam Royal Global University (RGU), the premiere higher education institution in the North-east India
                is all set for full implementation of the NEP 2020 with students joining the final year programme under the
                Four-Year Undergraduate Programme (FYUGP).
                <br><br>
                Elaborating the preparedness for effective implementation of this important aspect of NEP 2020, the
                university authorities stated that RGU has brought into force the necessary statutory provisions through
                appropriate amendments. RGU is offering the FYUGP in 37 programs which are over and above 14 other four-year
                professional programmes being offered by the university.
                <br><br>
                Expressing his happiness with the development for the effective implementation of the FYUGP, Prof. Alak
                Kumar Buragohain, the Vice Chancellor reiterated RGU’s commitment to research and stated that specific plans
                are being worked out by the different departments of the university for meaningful graduate research based
                on the aptitude of the students and through proper training by the experienced faculty members.
                <br><br>
                As the modalities for admission to the fourth year are currently in progress, the university has developed
                all the necessary additional infrastructural requirements for the additional classes in terms of classrooms,
                laboratories, seminar halls, and libraries.
                <br><br>
                With respect to the academic strategies for the four-year degree with Honours and with Honours cum Research.
                The academic council of the university has also granted due approvals to the necessary syllabi.
                <br><br>
            </p>
        </div>

    </section>
@endsection
