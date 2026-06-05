@extends('frontend/new-master')
@section('content')
    <style>
        .top-recruiter-section {
            background: #EBF1FC;
            padding: 70px 0;
            overflow: hidden;
        }

        .top-recruiter-section .container {
            max-width: 1300px;
        }

        .top-recruiter-header {
            text-align: center;
            max-width: 1200px;
            margin: 0 auto 40px;
        }

        .top-recruiter-title {
            font-family: "Playfair Display", serif;
            font-size: 3.4rem;
            font-weight: 700;
            color: #27467a;
            margin-bottom: 15px;
        }

        .top-recruiter-desc {
            font-size: 2rem;
            line-height: 1.8;
            color: #444;
            margin: 0;
        }

        .top-recruiter-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px;
        }

        .top-recruiter-card {
            background: #fff;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            transition: all .3s ease;
        }

        .top-recruiter-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        .top-recruiter-card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 1199px) {
            .top-recruiter-grid {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        @media (max-width: 991px) {

            .top-recruiter-title {
                font-size: 2.8rem;
            }

            .top-recruiter-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 767px) {

            .top-recruiter-section {
                padding: 50px 0;
            }

            .top-recruiter-title {
                font-size: 2.2rem;
            }

            .top-recruiter-desc {
                font-size: 1rem;
            }

            .top-recruiter-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .top-recruiter-card {
                height: 70px;
                padding: 10px;
            }
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/placement-recruiters/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Top Recruiters</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Top Recruiters
            </div>
        </div>

    </section>

    <section class="top-recruiter-section">
        <div class="container">

            <div class="top-recruiter-header">
                <!-- <h2 class="top-recruiter-title">Top Recruiters</h2> -->

                <p class="top-recruiter-desc">
                    On a very positive note, there has been a steady increase in the number of companies recruiting
                    Royalites every year. Besides blessing an academic rigour, students are engaged in immersive
                    sessions with corporates, industrial visits, workshops on inbound skills, research paper
                    presentations and encouraged to participate in management competitions. Regular interactions with
                    alum are arranged to acquaint the students about various career avenues. A plethora of summer and
                    final placements offers jobs to our students in various Government, semi-government and private
                    organizations which is a part of the success our builds.
                </p>
            </div>

            <div class="top-recruiter-grid">

                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/1.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/2.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/3.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/4.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/5.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/6.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/7.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/8.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/9.jpg" alt=""></div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/10.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/11.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/12.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/13.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/14.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/15.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/16.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/17.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/18.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/19.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/20.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/21.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/22.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/23.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/24.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/25.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/26.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/27.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/28.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/29.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/30.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/31.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/32.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/33.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/34.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/35.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/36.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/37.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/38.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/39.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/40.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/41.jpg" alt="">
                </div>
                <div class="top-recruiter-card"><img src="/new-web/assets/img/placement-recruiters/all-logos/42.jpg" alt="">
                </div>

            </div>

        </div>
    </section>
@endsection
