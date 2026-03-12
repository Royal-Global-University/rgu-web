@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 100px;"></div>
    </div>

    <div class="website">
        @include('frontend/components/aheader')

    </div>
    <img src="/mobile-assets/convo-slider/convo.gif"/>
    <img src="/mobile-assets/convo-slider/1st-convo.jpg"/>
    <img src="/mobile-assets/convo-slider/honoris-causa-1.jpg"/>
    <img src="/mobile-assets/convo-slider/last.jpg"/>
@endsection
