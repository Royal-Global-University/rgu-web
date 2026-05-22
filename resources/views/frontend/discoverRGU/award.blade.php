@extends('frontend/new-master')
@section('title', 'Awards : The Assam Royal Global University')
@section('meta_description',
    'Discover excellence recognized at Royal Global University through our prestigious awards
    program.')
@section('meta_keywords', 'Awards')
@section('content')

    <style>
        /* =========================================================
        ===================== AWARDS SECTION =====================
        ========================================================= */

        .awards-wrap {
            background: #EBF1FC;
            padding: 90px 20px 100px;
            overflow: hidden;
        }

        .awards-container {
            max-width: 1320px;
            margin: auto;
        }



        /* ================= GRID ================= */

        .awards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        /* ================= CARD ================= */

        .awards-card {
            background: #fff;
            border-radius: 26px;
            overflow: hidden;
            /* padding: 14px; */
            box-shadow: 0 18px 45px rgba(17, 45, 95, 0.08);
            transition: .45s ease;
            animation: awardsFadeUp 1s ease;
        }

        .awards-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 28px 60px rgba(17, 45, 95, 0.14);
        }

        .awards-img {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            aspect-ratio: 2 / 3;
        }

        .awards-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s ease;
        }

        .awards-card:hover img {
            transform: scale(1.05);
        }

        /* ================= ANIMATION ================= */

        @keyframes awardsFadeUp {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:991px) {

            .awards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:640px) {

            .awards-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .awards-wrap {
                padding: 70px 16px 80px;
            }

            .awards-top-text {
                margin-bottom: 40px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-awards/hero-img.png');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Awards & Honours</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Excellence & Collaboration / Awards & Honours
            </div>
        </div>

    </section>

    <section class="awards-wrap">

        <div class="awards-container">
            <!-- AWARDS GRID -->

            <div class="awards-grid">

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/1.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/2.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/3.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/4.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/5.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/6.png" alt="">
                    </div>
                </div>

                <div class="awards-card">
                    <div class="awards-img">
                        <img src="/new-web/assets/img/discover-rgu-awards/7.png" alt="">
                    </div>
                </div>


            </div>

        </div>

    </section>

    <script>
        /* =========================================================
            ===================== LOCATION SLIDER =====================
            ========================================================= */

        const rguLocThumbs = document.querySelectorAll(".rgu-loc-thumb");
        const rguLocSlides = document.querySelectorAll(".rgu-loc-main-slide");

        rguLocThumbs.forEach((thumb, index) => {

            thumb.addEventListener("click", () => {

                rguLocThumbs.forEach(item => item.classList.remove("active"));
                rguLocSlides.forEach(item => item.classList.remove("active"));

                thumb.classList.add("active");
                rguLocSlides[index].classList.add("active");

            });

        });
    </script>

@endsection
