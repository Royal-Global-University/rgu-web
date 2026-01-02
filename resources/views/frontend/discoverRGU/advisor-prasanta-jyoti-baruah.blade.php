@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/advisory/p-mob.png"/>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="mobile-assets/advisory/p-web.png"/>
    </div>
@endsection
