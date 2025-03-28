@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/messages-all/mob-pro.png" alt="">
        </div>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <img src="mobile-assets/messages-all/web-pro.png" alt="">
    </div>
@endsection
