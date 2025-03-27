@extends('frontend.master')
@section('content')
     <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/facilities-boutique/mob.png" alt="">
        </div>
        </div>

        <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/facilities-boutique/web.png" alt="">

        </div>
@endsection
