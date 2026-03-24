@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px;">
            <img src="home-banner/nirf-mob.png"/>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="home-banner/nirf-web.png"/>

    </div>

    <div class="container mb-5">
        <div class="row text-center">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 p-2">
                <a href="/mobile-assets/pdf/NIRF 2025.pdf" class="rounded"
                    style="
     padding: 60px 60px;
     font-size: 40px;
     font-weight: 700;
     background-color: #f3e4d3;
     color: #264678;
     text-decoration: none;
     display: inline-block;
   ">
                    NIRF 2025
                </a>
            </div>
            <div class="col-lg-4 p-2">
                <a href="nirf-2026" class="rounded"
                    style="
     padding: 60px 60px;
     font-size: 40px;
     font-weight: 700;
     background-color: #f3e4d3;
     color: #264678;
     text-decoration: none;
     display: inline-block;
   ">
                    NIRF 2026
                </a>
            </div>
        </div>
    </div>
@endsection
