@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">

                <img src="mobile-assets/facilities-fashion/mob-fashion.png" alt="">
            </div>
        </div>

        <div class="website">
               <!--Start Header-->
       @include('frontend/components/aheader')
    <!--End Header-->

            <img src="mobile-assets/facilities-fashion/web-fashion.png" alt="">
        </div>
@endsection
