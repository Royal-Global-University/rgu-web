@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/achievements/mobile-achievement.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/achievements/web-achievement.png" alt="">
    </div>
@endsection
