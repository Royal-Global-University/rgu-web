@extends('frontend/new-master')
@section('title', 'Vision Mission : The Assam Royal Global University')
@section('meta_description', 'To achieve academic excellence through innovatively designed, research intensive, industry-oriented education')
@section('meta_keywords', 'Vision Mission')
@section('content')
        <style>
        /* ================= VISION & MISSION FULL WIDTH IMAGE ================= */

        .vision-mission-banner {
            width: 100%;
            position: relative;
        }

        .vision-mission-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .vision-mission-mobile {
            display: none;
        }

        @media (max-width:767.98px) {

            .vision-mission-desktop {
                display: none;
            }

            .vision-mission-mobile {
                display: block;
            }

        }
    </style>

       <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/vision-mission/cover-img.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Vision and Mission</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / About the University / Vision and Mission
            </div>
        </div>

    </section>


    <section class="vision-mission-banner">

        <!-- Desktop -->
        <img src="new-web/assets/img/vision-mission/vision_mission-web.png" alt="Vision & Mission"
            class="vision-mission-img vision-mission-desktop">

        <!-- Mobile -->
        <img src="new-web/assets/img/vision-mission/vision-mission-mob.png" alt="Vision & Mission"
            class="vision-mission-img vision-mission-mobile">

    </section>


@endsection
