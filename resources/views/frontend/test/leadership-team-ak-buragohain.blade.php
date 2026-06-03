@extends('frontend/new-master')
@section('content')
    <style>
        /* RESET */
        body {
            margin: 0;
            padding: 0;
        }

        /* SECTION */
        .rgu-team-leadership-section {
            width: 100%;
        }

        /* ITEM */
        .rgu-team-leadership-item {
            width: 100%;
            line-height: 0;
        }

        /* IMAGE DEFAULT (DESKTOP/TABLET/MOBILE) */
        .rgu-team-leadership-img {
            width: 100%;
            height: auto;
            display: block;
            /* IMPORTANT: prevents cutting/bottom spacing */
        }

        /* LARGE SCREEN CONTROL */
        @media (min-width: 992px) {
            .rgu-team-leadership-img {
                width: 100%;
                height: auto;
                /* Removed max-height and object-fit to allow the image to fill the screen width entirely */
            }
        }

        /* MOBILE FIX */
        @media (max-width: 768px) {
            .rgu-team-leadership-img {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Leadership Team</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / About the University / Leadership Team
            </div>
        </div>

    </section>

    <section class="rgu-team-leadership-section">

        <!-- 1 -->
        <div class="rgu-team-leadership-item">

            <picture>
                <source media="(max-width: 768px)"
                    srcset="/new-web/assets/img/discover-rgu-leadership-team/leadership-team-message/mob/sri-anil-kr-modi-message-mob.png">

                <img class="rgu-team-leadership-img"
                    src="/new-web/assets/img/discover-rgu-leadership-team/leadership-team-message/web/sri-anil-kumar-modi-message.png"
                    alt="Dr. Ashok Kr Pansari">
            </picture>

        </div>

    </section>
@endsection
