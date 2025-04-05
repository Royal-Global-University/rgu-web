@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/diversity-inclusion/mob-diversity-inclusion.png" />
        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
            <div>
                <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/diversity-inclusion/web.jpg" />
            </div>
        </div>
    </div>
@endsection
