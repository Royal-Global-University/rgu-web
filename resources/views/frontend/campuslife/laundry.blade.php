@extends('frontend.master')
@section('title', 'Laundry Service : The Assam Royal Global University')
@section('meta_description', 'Royal Global University provides a well-managed laundry facility on campus, making student life easier with quick, quality, and cost-effective garment care.')
@section('meta_keywords', 'Laundry Service')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/laundry/mobile-laundry.png" alt="">
        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/laundry/weblaundry1.png" alt="">

        <img src="mobile-assets/laundry/weblaundry2.png" alt="">

    </div>
@endsection
