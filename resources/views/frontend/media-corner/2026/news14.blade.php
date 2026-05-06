@extends('frontend.master')
@section('title', 'RGU Student wins Silver at State Arm Wrestling Championship, Qualifies for Nationals')
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
                RGU Student wins Silver at State Arm Wrestling Championship, Qualifies for Nationals
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/may/new/Abhay Chaudhary.jpg"
                        style=" border: 3px solid black; height: 450px; width: 100%;" alt="">
                </div>
                <div class="col-lg-2"></div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, May 6, 2026: </span>
                Abhay Chaudhary, a B.Tech. Computer Science & Engineering (CSE) 2nd semester student, at The Assam Royal Global University (RGU) has brought laurels to the university through his outstanding performance in arm wrestling.
                <br><br>
                Abhay secured the Silver Medal in the 80+ kg Junior (Right Hand) category at the prestigious 3rd Assam State Arm Wrestling Championship, showcasing exceptional strength, determination, and competitive spirit. His commendable performance at the state level has also earned him selection for the national championship, marking a significant milestone in his sporting journey. The university fraternity has extended heartfelt congratulations to Abhay for his dedication and success.
                <br><br>
            </p>
        </div>

    </section>
@endsection
