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
                Renowned Actor Ravi Sharma Interacts with Freshers at Royal Global University
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news29/3.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news29/2.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, August 5, 2025: </span> As part of Deeksharambh 2025—the 21-day long Student Induction Programme at Royal Global University (RGU), celebrated
                Assamese film actor Ravi Sharma delivered an inspiring and candid session for the newly inducted students today.
                <br><br>
                The event, held on the university campus, saw enthusiastic participation from freshers as well as faculty members.
                Sharma, known for his versatile performances and deep connection with the youth, struck a chord with the students as he
                spoke about making meaningful choices during student life.
                <br><br>
                “We are all actors on the stage of life. I don't believe in the superstar concept—I prefer to be called an actor,” he
                said, encouraging students to stay grounded and true to themselves. “Achieving fame is not a big deal, maintaining it
                with dignity is the real challenge,” he added.
            </p>
            <p class="para1 text-dark">
                Urging students to refrain from harmful addictions such as drugs, gutkha, cigarettes, alcohol, and even the overuse of
                social media and reels, Sharma advised, “Use your student days in creative, constructive ways. Take care of your
                health—without it, everything else is meaningless.”
                <br><br>
                The interactive session turned lively as many students shared their aspirations and engaged the actor with thoughtful
                questions. In a memorable conclusion, Ravi Sharma delighted the audience by singing a song, leaving the gathering
                inspired and energized.
                <br><br>
                The Deeksharambh programme, which began on July 30, 2025, continues to offer enriching experiences aimed at easing the
                academic and cultural transition of students into university life.
                <br><br>
            </p>
        </div>

    </section>
@endsection
