@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/department-all/agriculture/mob-agri.png" alt=""/>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="mobile-assets/department-all/agriculture/web-agri.png" alt="" />
    </div>
@endsection
