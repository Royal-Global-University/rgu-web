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

        /* IMAGE DEFAULT (DESKTOP/TABLET) */
        .rgu-team-leadership-img {
            width: 100%;
            height: auto;
            /* IMPORTANT: prevents cutting */
            display: block;
        }

        /* LARGE SCREEN CONTROL */
        @media (min-width: 992px) {
            .rgu-team-leadership-img {
                width: 100%;
                height: auto;
                max-height: 100vh;
                /* Prevents the image from being taller than the screen */
                object-fit: contain;
                /* Ensures the whole image stays visible without cropping */
            }
        }

        /* MOBILE FIX */
        @media (max-width: 768px) {
            .rgu-team-leadership-img {
                height: auto;
                /* use full image */
                object-fit: contain;
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
            <a target="_blank" href="">

                <picture>
                    <source media="(max-width: 768px)"
                        srcset="/new-web/assets/img/discover-rgu-leadership-team/mob/dr-ashok-kr-pansari-mob.png">

                    <img class="rgu-team-leadership-img"
                        src="/new-web/assets/img/discover-rgu-leadership-team/web/dr-ashok-kr-pansari.png"
                        alt="Dr. Ashok Kr Pansari">
                </picture>

            </a>
        </div>

        <!-- 2 -->
        <div class="rgu-team-leadership-item">
            <a target="_blank" href="">

                <picture>
                    <!-- Mobile -->
                    <source media="(max-width: 768px)"
                        srcset="/new-web/assets/img/discover-rgu-leadership-team/mob/sri-anil-kr-modi-mob.png">

                    <!-- Desktop -->
                    <img class="rgu-team-leadership-img"
                        src="/new-web/assets/img/discover-rgu-leadership-team/web/sri-anil-kr-modi.png" alt="Sri Anil Kr. Modi">
                </picture>

            </a>
        </div>

        <!-- 3 -->
        <div class="rgu-team-leadership-item">
            <a target="_blank" href="#">

                <picture>
                    <!-- Mobile -->
                    <source media="(max-width: 768px)"
                        srcset="/new-web/assets/img/discover-rgu-leadership-team/mob/dr-alak-kr-buragohain-mob.png">

                    <!-- Desktop -->
                    <img class="rgu-team-leadership-img"
                        src="/new-web/assets/img/discover-rgu-leadership-team/web/dr-alak-kr-buragohain.png"
                        alt="Dr. Alak Kr. Buragohain">
                </picture>

            </a>
        </div>

    </section>
@endsection
