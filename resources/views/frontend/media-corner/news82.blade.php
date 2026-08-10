@extends('frontend.master')
@section('title', '38th BCI Inter-University Moot Court Competition from 29th Jan at RGU')
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
                38th BCI Inter-University Moot Court Competition from 29th Jan at RGU
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-10">
                    <img class=" rounded" src="/mobile-assets/ads/1.png" style=" border: 3px solid black; height: 420px;"
                        alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, January 3, 2026: </span>The Assam Royal Global University (RGU) will host
                the 38th Bar Council of India National Inter-University Moot Court Competition, 2026, one of the most
                prestigious moot court events in the country.
                <br><br>
                The competition will be held from 29th January to 31st January 2026 and will witness participation of
                students from law universities and institutions across India. The event is being organized under the aegis
                of the Bar Council of India (BCI) and the Bar Council of India Trust – Pearl First.
                <br><br>
                In this context, Dr. Kuntala Roychoudhury, Assistant Professor, Royal School of Law and Administration
                stated, “In view of enthusiastic responses from participating institutions, the organizers have extended the
                registration deadline till 10th January 2026. For further details, participants may contact the organizing
                committee through the official contact numbers 9910120998 / 9706893987/ 9706861752.” Interested teams can
                register through the official registration link provided by the university, she added.
                <br><br>
                The competition aims to provide law students with a rigorous platform to hone their advocacy skills, legal
                research, drafting, and courtroom etiquette, while encouraging excellence in legal education.
                <br><br>
            </p>
        </div>

    </section>
@endsection
