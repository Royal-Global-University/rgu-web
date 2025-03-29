@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
                <img style="padding-top: 90px; position: relative;" src="mobile-assets/facilities-museum/mob.png" alt="">
            </div>

            <div class="website">

            <!--Start Header-->
            @include('frontend/components/aheader')
    <!--End Header-->

    <img src="mobile-assets/facilities-museum/web-museum.png" alt="">

            </div>
@endsection
