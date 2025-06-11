@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="https://media.rgu.ac/csp/csp.png" alt="" />
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div>
            <img src="https://media.rgu.ac/csp/csp.png" alt=""/>
        </div>
    </div>
@endsection
