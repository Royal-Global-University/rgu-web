@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative; width: 100%;" src="mobile-assets/advisory/mob.png" />
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="mobile-assets/advisory/web.png" />
    </div>
@endsection
