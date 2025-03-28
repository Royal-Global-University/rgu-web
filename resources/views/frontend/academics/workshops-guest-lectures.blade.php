@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/guest-lecture/mobile-guest-lecture.png" />
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <!--Start Section-->
        <div>
            <img src="mobile-assets/guest-lecture/web-guest-lecture.png" />
        </div>
        <!--End Section-->
    </div>
@endsection
