@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container pt-5 pb-4 text-center">
            <img src="mobile-assets/media-corner/news17/Suman Kumar.jpg" alt="">
        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold pb-3" style="color: #27467A;">
                RGU Faculty Awarded at ICPPS South Korea
            </h2>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, July 2, 2025: </span> Mr. Suman Kumar, Assistant Professor at The Assam Royal Global University, has been awarded the Best Oral Presentation
                Award at the prestigious International Conference on Pharmacy and Pharmaceutical Sciences (ICPPS-2025) held in Jeju
                Island, South Korea.
                <br><br>

                Out of 50+ participants from across the globe, Mr. Kumar proudly represented India, bringing immense pride and
                recognition to RGU on an international academic stage. In this regard, Mr Suman Kumar has received financial support
                from the Anusandhan National Research Foundation (ANRF), Government of India.
                <br><br>

            </p>
        </div>

    </section>
@endsection
