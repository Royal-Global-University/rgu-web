@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3" style="color: #27467A; font-weight: 900;">
                Departmental <span style="color: #FF9A1E; font-weight: 500;">Store</span></h2>

            <img src="mobile-assets/department-store/mobile.png" alt="">
        </div>
    </div>


    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/department-store/web-banner.png" alt="">

        <img src="mobile-assets/department-store/web-gallery.png" alt="">
    </div>
@endsection
