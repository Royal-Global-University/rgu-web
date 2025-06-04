@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/faculty-profile/Shwetambara%20Verma/mob-Dr-Shwetambara-Verma.png" alt=""/>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/faculty-profile/Shwetambara%20Verma/web-Dr-Shwetambara-Verma.png" alt="" />
    </div>
@endsection
