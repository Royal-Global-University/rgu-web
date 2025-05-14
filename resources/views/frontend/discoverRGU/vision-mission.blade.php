@extends('frontend.master')
@section('title', 'Vision Mission : The Assam Royal Global University')
@section('meta_description', 'To achieve academic excellence through innovatively designed, research intensive, industry-oriented education')
@section('meta_keywords', 'Vision Mission')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="position: relative; padding-top: 80px;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/vision-mission/mobile-vision-mission.png" alt="">
    </div>

    <div class="website">
        @include('frontend/components/aheader')
       <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/vision-mission/web-vision-mission.png" alt="">

    </div>

@endsection
