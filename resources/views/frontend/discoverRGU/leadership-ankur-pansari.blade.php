@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img src="mobile-assets/messages-all/mob-evp.png" alt="">
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <img src="mobile-assets/messages-all/web-evp.png" alt="">
    </div>
@endsection
