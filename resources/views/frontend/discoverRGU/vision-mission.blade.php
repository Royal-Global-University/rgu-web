@extends('frontend.master')

@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="position: relative; padding-top: 80px;" src="mobile-assets/vision-mission/mobile-vision-mission.png" alt="">
    </div>

    <div class="website">
        @include('frontend/components/aheader')
       <img src="mobile-assets/vision-mission/web-vision-mission.png" alt="">

    </div>

@endsection
