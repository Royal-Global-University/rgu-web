@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative; width: 100%;" src="mobile-assets/updated-faculty-img/mob-sri-prasanta-jyoti.png"/>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="mobile-assets/updated-faculty-img/web-sri-prasanta-jyoti.png"/>
    </div>
@endsection
