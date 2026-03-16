@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Travel and Tourism</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The Travel and Tourism sector is a significant, diverse and ever-expanding industry that
                            encompasses a wide range of activities, services and businesses related to travel, leisure
                            and hospitality. Pursuing a Ph.D. Programme in this field can be rewarding and
                            intellectually stimulating journey, allowing you to conduct research, contribute to the
                            knowledge based on the industry and potentially pursue a career in academia or advanced
                            research within the travel, tourism and hospitality sector.
                        </p>

                    </div>

                </div>
            </div>
        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold " style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">in Travel and
                                Tourism</span>
                        </h2>

                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            The Travel and Tourism sector is a significant, diverse and ever-expanding industry that
                            encompasses a wide range of activities, services and businesses related to travel, leisure
                            and hospitality. Pursuing a Ph.D. Programme in this field can be rewarding and
                            intellectually
                            stimulating journey, allowing you to conduct research, contribute to the knowledge based on
                            the industry and potentially pursue a career in academia or advanced research within the
                            travel, tourism and hospitality sector.
                        </p>


                    </div>
                </div>
            </div>

        </section>

    </div>

@endsection
