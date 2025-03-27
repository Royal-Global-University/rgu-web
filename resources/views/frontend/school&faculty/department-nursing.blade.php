@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-nursing/s2-bg-img-1.webp);">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-nursing/mobile-nursing.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-nursing/web-nursing.png" alt="">
        </div>
    </div>
@endsection
