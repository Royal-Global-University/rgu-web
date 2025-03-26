@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="background-color: #FFF8F0; padding-top: 90px; position: relative;">
            <img src="mobile-assets/salon/mob-salon.png" alt="">

            <div class="d-flex align-items-center rounded border mb-3"
                style="gap: 10px; padding: 20px; background-color: #dce2ff;">
                <span class="mobile-para1" style="font-weight: bold; color: #272d7a; font-size: 20px; line-height: 1.3;">More
                    about Kurls and Spykes!</span>
                <a href="mobile-assets/salon/salon.pdf" target="_blank" class="btn mobile-para1"
                    style="background-color: #3060cf; color: white; font-weight: bold; padding: 10px 16px; border-radius: 5px; text-decoration: none; line-height: 1.3;">
                    Download
                </a>
            </div>
        </div>
    </div>


        <div class="website">

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <a target="_blank" href="mobile-assets/salon/salon.pdf"><img src="mobile-assets/salon/web1.png" alt=""></a>

        </div>
@endsection
