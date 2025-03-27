@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/facilities-std-lounge/mob.png" alt="">
            </div>
            </div>

            <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
    <!--End Header-->

    <!--head image Section-->
    <section class="no-bg-mobile" style="background-image: url(mobile-assets/facilities-std-lounge/bgg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                        <img class="rounded" decoding="async"
                            src="mobile-assets/facilities-std-lounge/headimg.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                    Student <span style="color: #FF9A1E; font-weight: 500;">Lounge</span></h2>
                <p style="color: #27467A;" class="para1">
                    More than just a place to unwind, RGU's student lounge is a haven created to make life easier for students. The lounge provides a place to relax, get advice, and connect with friendly faces, bright lighting, and cosy corners. Your peace of mind matters at RGU, so come in and feel calm amid the bustle of campus life.
                </p>
            </div>
        </div>
    </div>
    </section>
    <!--head image Section-->

    <section style="background-color: #FFF8F0; padding: 50px 0px;">
        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-4" style="color: #27467A; font-weight: 900;">
            Glimpse of our <span style="color: #FF9A1E; font-weight: 500;">Student Lounge</span></h2>

            <div class="container">
                <img src="mobile-assets/facilities-std-lounge/gallery.png" alt="">
            </div>
    </section>
    </div>
@endsection
