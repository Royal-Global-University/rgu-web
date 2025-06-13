@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="https://media.rgu.ac/advisor-leadership/mob-Prof.-Prabuddha-Ganguli-new.png" alt="">
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="https://media.rgu.ac/advisor-leadership/web-Prof-Prabuddha-Ganguli.png" alt="">
    </div>
@endsection
