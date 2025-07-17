@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">

                        <h2 class="headd1 text-center pb-3" style="color: #264273; font-weight: 700; font-size: 32px;">
                            Audito<span style="color: #FF9A1E; font-weight: 500;">rium</span></h2>

                        <div class="txaa-slide-down-1">
                            <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/facilities-audi/headimg.png">
                            </div>
                        </div>

                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            Auditorium The Assam Royal Global University developed its latest auditorium with
                            state-of-the-art
                            technology as stipulated in the NEP 2020, designed with the special objective of generating
                            digital experience in the teaching learning process. Inaugurated by Honourable Chief
                            Minister of Meghalaya, Sri Conrad K. Sangma, it has a seating capacity of 400, and is
                            equipped with an Advanced Projection System that delivers high-resolution images captured
                            with stunning clarity. Complementing the visual excellence is a sophisticated surround sound
                            setup that envelops the audience in rich, multidimensional audio, creating a truly immersive
                            viewing environment.
                        </p>

                    </div>
                </div>



            </div>


        </section>

        <img src="mobile-assets/facilities-audi/btmimg-mob.png" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
        <!--head image Section-->
        <section style="background-image: url(mobile-assets/hostel-life/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/facilities-audi/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1" style="color: #264273; font-weight: 700;">Audito<span
                                style="color: #FF9A1E; font-weight: 500;">rium</span></h2>
                        <p class="para1" style="color: #264273; font-size: 20px; text-align: justify;">
                            Auditorium The Assam Royal Global University developed its latest auditorium with
                            state-of-the-art
                            technology as stipulated in the NEP 2020, designed with the special objective of generating
                            digital experience in the teaching learning process. Inaugurated by Honourable Chief
                            Minister of Meghalaya, Sri Conrad K. Sangma, it has a seating capacity of 400, and is
                            equipped with an Advanced Projection System that delivers high-resolution images captured
                            with stunning clarity. Complementing the visual excellence is a sophisticated surround sound
                            setup that envelops the audience in rich, multidimensional audio, creating a truly immersive
                            viewing environment.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--head image Section-->

        <img src="mobile-assets/facilities-audi/btmimg.png" alt="">

        </div>

@endsection
