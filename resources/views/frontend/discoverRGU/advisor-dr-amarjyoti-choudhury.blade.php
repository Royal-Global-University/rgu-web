@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/new/new-advisory/mob-sri-amarjyoti.png"/>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/new/new-advisory/web-sri-amarjyoti.png"/>
    </div>
@endsection
