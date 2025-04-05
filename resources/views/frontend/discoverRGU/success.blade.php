@extends('frontend.master')
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
