@extends('frontend.master')
@section('title','Placement Felicitation held at Royal Global University')
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
                Placement Felicitation held at Royal Global University
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-8">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/Placed students felicitated.jpeg"
                        style=" border: 3px solid black; height: 500px; width: 100%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, May 20, 2026: </span>
                A Placement Felicitation Program was organised by The Assam Royal Global University (RGU) at its campus yesterday to celebrate the remarkable achievements of students who have successfully secured placements and career opportunities across various reputed organizations.
                <br><br>
                Faculty members, university officials, placement coordinators, industry representatives, and students came together to commemorate this significant milestone. The event served as a platform to recognize and honour the hard work, perseverance, and professional excellence demonstrated by students during the placement season for the academic year 2025–26.
                <br><br>
                This year witnessed an outstanding placement performance, with more than 70 companies participating in campus recruitment drives and hundreds of students receiving placement offers across diverse sectors and industries. The university expressed its appreciation to all recruiting organizations for their continued trust and collaboration in nurturing young talent and creating meaningful career opportunities for students.
                <br><br>
                The university authorities congratulated the placed students and encouraged them to continue striving for excellence as they embark on their professional journeys. The program also highlighted the institution’s commitment towards academic excellence, industry engagement, skill development, and holistic student growth.
                <br><br>
            </p>
        </div>

    </section>
@endsection
