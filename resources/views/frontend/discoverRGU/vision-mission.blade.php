@extends('frontend.master')
@section('title', 'Vision Mission : The Assam Royal Global University')
@section('meta_description', 'To achieve academic excellence through innovatively designed, research intensive, industry-oriented education')
@section('meta_keywords', 'Vision Mission')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="position: relative; padding-top: 80px;" src="http://69.62.79.67/media/vision-mission/mobile-vision-mission.png" alt="">
    </div>

    <div class="website">
        @include('frontend/components/aheader')
       <img src="http://69.62.79.67/media/vision-mission/web-vision-mission.png" alt="">

    </div>

@endsection
