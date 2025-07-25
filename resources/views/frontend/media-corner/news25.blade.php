@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 32px;">
                RGU Signs MoU with Indira Gandhi National Centre for the Arts (IGNCA), an Autonomous Trust of Ministry of Culture, Govt.
                of India
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="mobile-assets/media-corner/news25/1.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <img class=" rounded" src="mobile-assets/media-corner/news25/2.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, July 24, 2025: </span> The objective of this MoU is to undertake activities focusing on the study of the various communities, tribal and ethnic
                groups, folklore, indigenous knowledge systems besides academic programs on culture with a holistic approach towards art
                - forms and lifestyles of Assam and neighboring states and disseminate the same in other parts of the country.
                <br><br>
            </p>
        </div>

    </section>
@endsection
