@extends('frontend.master')
@section('title', 'RGU organizes workshop on Putala Nach – The Puppetry of Assam')
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
                RGU organizes workshop on Putala Nach – The Puppetry of Assam
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news83/1.jpeg"
                        style=" border: 3px solid black; height: 450px; width: 95%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news83/2.jpeg"
                        style=" border: 3px solid black; height: 450px; width: 95%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news83/3.jpeg"
                        style=" border: 3px solid black; height: 450px; width: 95%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, March 30, 2026: </span>On the occasion of World Theatre Day, a two-day
                workshop on Putala Nách – The Puppetry of Assam was organised by the Centre for Indian Knowledge Systems in
                association with the Royal School of Fine Arts and IQAC.
                <br><br>
                An insightful lecture was delivered by Dr. Moushumi Bhattacharjee, who highlighted the historical, cultural,
                and aesthetic dimensions of Assamese puppetry.
                <br><br>
                Veteran puppeteer Sri Abani Kanta Sarma (70 years), founder of Ruby Puppet Theatre (established in 1974),
                presented a captivating puppetry performance - Gouripuria Gabhoru. Renowned for his exceptional skill, he
                uniquely renders voices for both male and female characters himself. His theatre recently completed 50
                years, and he has been honoured with the Sangeet Natak Akademi (SNA) Award, along with several other
                recognitions.
                <br><br>
                Following his performance, students showcased what they had learned during the workshop through a lively
                presentation. The entire programme reflected the true spirit of the Indian Knowledge Systems, blending
                traditional wisdom with experiential learning.
                <br><br>
            </p>
        </div>

    </section>
@endsection
