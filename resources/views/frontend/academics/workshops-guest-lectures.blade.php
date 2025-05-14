@extends('frontend.master')
@section('title', 'Guest Lecture : The Assam Royal Global University')
@section('meta_description', 'Experience insightful perspectives and enrich your learning journey with Royal Global University guest lecture series.')
@section('meta_keywords', 'Guest Lecture')
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
