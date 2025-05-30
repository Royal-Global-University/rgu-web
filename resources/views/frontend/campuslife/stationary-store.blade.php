@extends('frontend.master')
@section('title', 'Stationary Store : The Assam Royal Global University')
@section('meta_description', 'Royal Global University features a well-stocked stationery store on campus, offering quality supplies at affordable prices for students and staff.')
@section('meta_keywords', 'Stationary Store')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/stationary/mob-stationary.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/stationary/web1.png" alt="">

        <img src="mobile-assets/stationary/web2.png" alt="">

    </div>

@endsection
