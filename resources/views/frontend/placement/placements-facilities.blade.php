@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 120px; position: relative; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Facilities <span style="color: #FF9A1E; font-weight: 500;">
                                Available</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/placement-all/placements-facilities/headimg.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-3">

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            The Assam Royal Global University is equipped with all necessary state-of-the art facilities for
                            conducting recruitment events. Some of the facilities include :
                        </p>
                        <h2 class="mobile-headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            The Center <span style="color: #FF9A1E; font-weight: 500;">
                                Comprises of:</span> </h2>

                        <ol class="mobile-para1" style="color: #264273; text-align: left;">
                            <li>Air-conditioned conference rooms for pre-placement talks.</li>
                            <li>Audio-visual equipment.</li>
                            <li>Computer labs to enable organizations to conduct entire recruitment process in an effective
                                manner.</li>
                            <li>Room for group discussions, interviews, and video conferencing.</li>
                            <li>Student volunteers for prompt assistance.</li>
                            <li>Pick up and dropping facilities from airport.</li>
                            <li>Guest house with all modern amenities.</li>
                        </ol>

                    </div>
                </div>
                <img src="mobile-assets/placement-all/placements-facilities/mob-gallery.png" alt="">
            </div>
        </section>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container pb-4">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/placement-all/placements-facilities/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Facilities <span style="color: #FF9A1E; font-weight: 500;">
                                Available</span> </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The Assam Royal Global University is equipped with all necessary state-of-the art facilities for
                            conducting recruitment events. Some of the facilities include :
                        </p>

                        <h2 class="headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            The Centre <span style="color: #FF9A1E; font-weight: 500;">
                                Comprises of:</span> </h2>

                        <ol class="para1" style="color: #264273; text-align: left;">
                            <li>Air-conditioned conference rooms for pre-placement talks.</li>
                            <li>Audio-visual equipment.</li>
                            <li>Computer labs to enable organizations to conduct entire recruitment process in an effective
                                manner.</li>
                            <li>Room for group discussions, interviews, and video conferencing.</li>
                            <li>Student volunteers for prompt assistance.</li>
                            <li>Pick up and dropping facilities from airport.</li>
                            <li>Guest house with all modern amenities.</li>
                        </ol>
                    </div>
                </div>
            </div>

        </section>

        <div style="background-image: url(mobile-assets/placement-all/bg.svg); background-size: cover; padding: 30px 0px;">
            <div class="container">


                <img src="mobile-assets/placement-all/placements-facilities/web-gallery.png" alt="">
            </div>
        </div>

    </div>
@endsection
