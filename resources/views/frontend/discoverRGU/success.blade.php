@extends('frontend.master')
@section('title', 'Sucess Stories : The Assam Royal Global University')
@section('meta_description', 'Explore inspiring success stories from Royal Global University, where students, alumni, and faculty share their journeys of achievement, innovation, and personal growth.')
@section('meta_keywords', 'Sucess Stories')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/success/wholeimg.png" alt="">
        </div>
    </div>

    <div class="website">


    <!--Start Header-->
    @include('frontend/components/aheader')
    <!--End Header-->

    <img style="height: auto !important" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/success/wholeimg.png" alt="">
    </div>
@endsection
