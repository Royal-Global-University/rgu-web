@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>



        <div class="container pt-5 pb-4">
            <img src="mobile-assets/media-corner/news7/world environment day.jpg" alt="">
        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold" style="color: #27467A;">
                World Environment Day observed at RGU
            </h2>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, June 5, 2025: </span>
                On the occasion of the World Environment Day 2025, the Guwahati Municipal Corporation under the joint
                initiative of Swachh Bharat Mission 2.0 and the National Clean Air Programme, and in association with The
                Assam Royal Global University organized a day-long event at the university campus today.
            </p>

            <p class="para1 text-dark pt-2">
                As part of the celebration, a series of competitions –including poster making, debate and quiz
                competitions-were held bringing together talented students from different schools of the city to showcase
                their knowledge and creativity on pressing environmental issues.
            </p>

            <p class="para1 text-dark pt-2">
                A panel discussion on Sustainable Urban solution was also held with participation of experts, civic leaders,
                and youth leaders. On the same occasion, a hackathon titled “The Guwahati Sustainability Challenge” was
                launched promoting innovative ideas for waste recycling.
            </p>

        </div>


    </section>
@endsection
