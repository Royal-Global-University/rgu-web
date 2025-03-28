@extends('frontend.master')

@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/officers/bg.svg); background-size: cover; position: relative; padding-top: 80px;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-2"
                style="color: #27467A; font-weight: 900;">
                Officers</h2>

            <div style="padding: 40px 20px;">

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-vicechancellor"><img src="mobile-assets/officers/1.png" alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-chairperson-academics"> <img src="mobile-assets/officers/2.png" alt="">
                        </a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="officers-register-admin"><img src="mobile-assets/officers/3.png" alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-registrar"><img src="mobile-assets/officers/4.png" alt=""></a>
                    </div>

                </div>

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Registrar Office </h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/5.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/6.png" alt="">
                    </div>

                </div>

                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Royal Centre of Corporate Relations </h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/7.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/8.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/9.png" alt="">
                    </div>

                </div>
            </div>
        </section>
    </div>


    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <section style="background-image: url(mobile-assets/officers/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Officers </h2>

            <div style="padding: 40px 80px;">

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-vicechancellor"><img src="mobile-assets/officers/1.png" alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-chairperson-academics"> <img src="mobile-assets/officers/2.png" alt="">
                        </a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="officers-register-admin"><img src="mobile-assets/officers/3.png" alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-registrar"><img src="mobile-assets/officers/4.png" alt=""></a>
                    </div>




                </div>

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Registrar Office </h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/5.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/6.png" alt="">
                    </div>

                </div>

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Royal Centre of Corporate Relations </h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/7.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/8.png" alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="mobile-assets/officers/9.png" alt="">
                    </div>


                </div>


            </div>

        </section>

    </div>

@endsection
