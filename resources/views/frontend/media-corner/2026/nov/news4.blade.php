@extends('frontend.master')
@section('title', '45th Session of NEIHA begins on 18 November at Royal Global University')
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
                45th Session of NEIHA begins on 18 November at Royal Global University
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-9">
                    <img class=" rounded" src="/mobile-assets/rgu-blog/blog2.jpeg"
                        style=" border: 3px solid black; height: 450px; width: 100%;" alt="">
                </div>

            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, November 10, 2026: </span>
                The Assam Royal Global University is organising the forty-fifth session of the North East India History
                Association (NEIHA) this year on 18th, 19th and 20th of November 2026. It will be a three-day international
                event featuring intellectual discourses in the field of history.
                <br><br>
                The President elect, Prof. Satyadeo Poddar (Vice-Chancellor, YBN University, Jharkhand) will preside over
                the 45th Session. Renowned historian Prof. Suranjan Das, a specialist in South Asian history and former
                Vice-Chancellor of both Jadavpur University and the University of Calcutta, currently serving as the
                Vice-Chancellor of Adamas University, will deliver the inaugural address, while Prof. Peter Birkelund
                Andersen, Professor Emeritus in the Department of Cross-Cultural and Regional Studies (ToRS) at the
                University of Copenhagen, Denmark, will chair the plenary session.
                <br><br>
                Prof. Sajal Nag, Distinguished Professor in the Department of History at Royal Global University, will
                deliver the H. K. Barpujari Endowment Lectures 2026 during the forthcoming NEIHA session. The conference is
                expected to be attended by a large number of delegates from the Northeast and from the rest of the country
                and abroad including Bangladesh and the United States.
                <br><br>
                NEIHA, founded in 1979, is one of the premier organisations in Northeast India dedicated to historical
                research. The conference aims to enhance awareness of our past with a view to promoting and studying our
                traditional history, ancient knowledge systems, and current developments while encouraging sustainable
                industry–academia collaboration.
                <br><br>
            </p>
        </div>

    </section>
@endsection
