@extends('frontend.master')
@section('title', 'Diversity and inclusion : The Assam Royal Global University')
@section('meta_description', 'More than 7000 people call RGU their home. One would find a vast diversity of students at Royal Global University. Students from different parts of the country come to study at Royal Global University.')
@section('meta_keywords', 'Diversity and inclusion')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/diversity-inclusion/mob-diversity-inclusion.png" />
        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
            <div>
                <img src="mobile-assets/diversity-inclusion/web.jpg" />
            </div>
        </div>
    </div>
@endsection
