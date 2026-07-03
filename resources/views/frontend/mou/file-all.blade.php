@extends('frontend/new-master')
@section('content')
    <style>
        /* ================= RGU APS HERO (UNIQUE) ================= */

        .rguapsh-hero {
            position: relative;
            height: 60rem;
            width: 100%;
            overflow: hidden;
        }

        /* dynamic background from inline style */
        .rguapsh-bg {
            position: absolute;
            inset: 0;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* overlay */
        .rguapsh-overlay {
            position: absolute;
            inset: 0;
            background: rgba(20, 40, 70, 0.24);
            z-index: 2;
        }

        /* content */
        .rguapsh-inner {
            position: relative;
            z-index: 3;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 0 2rem;
        }

        /* title */
        .rguapsh-title {
            font-family: "Playfair Display", serif;
            font-size: 5.5rem;
            font-weight: 600;

        }

        /* breadcrumb */
        .rguapsh-breadcrumb {
            font-size: 1.6rem;
            color: rgba(255, 255, 255, 0.9);
        }

        /* responsive */
        @media (max-width: 900px) {
            .rguapsh-hero {
                height: 40rem;
            }

            .rguapsh-title {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {

            .rguapsh-inner {
                align-items: flex-start;
                justify-content: flex-end;
                text-align: left;
                padding: 0 2rem 4rem 2rem;
            }

            .rguapsh-title {
                font-size: 2.8rem;
                margin-bottom: 0.8rem;
            }

            .rguapsh-breadcrumb {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .rguapsh-hero {
                height: 35rem;
            }

            .rguapsh-title {
                font-size: 2.6rem;
            }
        }
    </style>

    <section class="rguapsh-hero">
        <div class="rguapsh-bg"
            style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('new-web/assets/img/mou/cover.png'); background-size: cover; background-position: center; filter: blur(3px);">
        </div>

        <div class="rguapsh-bg"></div>

        <div class="rguapsh-overlay"></div>

        <div class="rguapsh-inner">
            <h1 class="rguapsh-title">
                Memorandum of Understanding (MOU) and Tie up
            </h1>

            <div class="rguapsh-breadcrumb">
            </div>
        </div>
    </section>


    <style>
        /* ======= RGU Image Navigation ======= */

        .rgumou-gallery {
            padding: 5rem 0;
            background: #fff;
        }

        .rgumou-gallery .container {
            max-width: 1320px;
        }

        .rgumou-gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .rgumou-gallery-item {
            display: block;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .rgumou-gallery-item img {
            width: 100%;

            object-fit: cover;
            display: block;
        }

        @media (max-width:768px) {
            .rgumou-gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="rgumou-gallery">
        <div class="container">

            <div class="rgumou-gallery-grid">

                <a href="/rgu-signs-moU-with-indian-army" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/indian-army.png" alt="">
                </a>

                <a href="/rgu-signs-moU-with-indian-navy" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/indian-navy.png" alt="">
                </a>

                <a href="/rgu-signs-mou-with-crpf" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/crpf.png" alt="">
                </a>

                <a href="https://rgu.ac/rgu-signs-moU-with-ssb" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/SSB.png" alt="">
                </a>

                <a href="https://rgu.ac/rgu-signs-moU-with-assam-police" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/assam-police.png" alt="">
                </a>

                <a href="https://rgu.ac/rgu-signs-moU-with-indian-meghalaya" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/meghalaya-police.png" alt="">
                </a>

                <a href="https://rgu.ac/rgu-sign-mou-with-nagaland-police" class="rgumou-gallery-item">
                    <img src="new-web/assets/img/mou/new-all-mous/nagaland-police.png" alt="">
                </a>

                

            </div>

        </div>
    </section>
@endsection
