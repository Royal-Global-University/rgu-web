@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/mob-Prof.-Prabuddha-Ganguli-new.png" alt="">
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/web-Prof-Prabuddha-Ganguli-v2.png" alt="">
    </div>
@endsection
