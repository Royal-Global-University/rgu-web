@extends('frontend.master')
@section('title', 'Lachit Divas observed by Mahabahu Club under the aegis of IKS Cell at RGU')
@section('meta_keywords', 'Blog')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 30px;">
                Lachit Divas observed by Mahabahu Club under the aegis of IKS Cell at RGU
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="/mobile-assets/media-corner/news75/1.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="/mobile-assets/media-corner/news75/2.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, November 27, 2025: </span>The Mahabahu Club in collaboration with the
                Indian Knowledge Systems (IKS) Cell, The Assam Royal Global University successfully organized an enriching
                Lachit Divas Commemoration Programme to honour the indomitable courage and leadership of Bir Lachit
                Borphukan, the legendary Ahom commander who led Assam to victory in the historic Battle of Saraighat.
                <br><br>
                The event commenced on 24th November with a solemn Banti Prajjwalan and floral tribute near the statue of Lachit Borphukan. The gathering was addressed by Professor Amar Jyoti Chowdhury, Emeritus Prof. and Chair of Dr Bhupen Hazarika Centre for Creativity, The Assam Royal Global University who highlighted Lachit Borphukan’s unwavering dedication, moral courage, and the profound leadership that shaped the history of Assam. 
                <br><br>
                The commemorative session continued at Jyoti Mancha where Dr. Saswati Bordoloi, Co-Coordinator, IKS Cell, delivered an insightful speech on the significance of Lachit Divas. The programme featured a powerful recitation of “Lachitor Ahban”, adding an emotional and patriotic dimension to the event. 
                <br><br>
                A special highlight of the programme was the presence of Shri Sadananda Gogoi, renowned filmmaker, who interacted with the students and shared insights into his film “Lachit Borphukan”. His perspectives on historical representation in cinema enriched the understanding of the audience. Shri Deepak Dutta from Jyoti Chitraban also participated on the meaningful occasion.
                <br><br>
            </p>
        </div>

    </section>
@endsection
