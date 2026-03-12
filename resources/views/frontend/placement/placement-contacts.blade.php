@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-color: #fff8f0; padding: 130px 10px 20px 10px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">Placement <span
                                style="color: #FF9A1E; font-weight: 500;">Contacts</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 2px solid #27467A; height: 400px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/placements-contact/headimg.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="pt-3">
                            <p>
                                <span class="para1 fw-bold text-dark" style="font-size: 23px;">Royal Centre for
                                    Corporate Relations
                                    (RCCR)</span> <br>
                                <span class="para1 text-dark">Ph- +91-7086751583/ +91-7086751573 </span> <br>
                                <span class="para1 text-dark">Email- rccr.placement@rgu.ac</span>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <!--head image Section-->
        <section
            style="background-image: url(mobile-assets/placements-contact/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/placements-contact/headimg.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700">Placement
                            <span style="color: #FF9A1E; font-weight: 500;">Contacts</span>
                        </h2>

                        <div>
                            <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc" data-splitting>

                                <p>
                                    <span class="para1 fw-bold" style="font-size: 23px;">Royal Centre for Corporate
                                        Relations
                                        (RCCR)</span> <br>
                                    <span class="para1">Ph- +91-7086751583/ +91-7086751573 </span> <br>
                                    <span class="para1">Email- rccr.placement@rgu.ac</span>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--head image Section-->

    </div>
@endsection
