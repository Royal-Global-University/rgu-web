@extends('frontend/new-master')
@section('title', 'Organogram and Planning : The Assam Royal Global University')
@section('meta_description', 'Navigate the organizational structure and hierarchy of Royal Global University with our
    comprehensive organogram.')
@section('meta_keywords', 'Organogram and Planning')
@section('content')
    <style>
        /*==================================================
            ORGANIZATION STRUCTURE
    ==================================================*/

        .rgos-section {

            padding: 90px 0;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rgos-section::before {

            content: "";

            position: absolute;

            width: 550px;

            height: 550px;

            border-radius: 50%;

            right: -180px;

            top: -180px;

            background: radial-gradient(rgba(35, 69, 123, .05), transparent 70%);

        }

        .rgos-heading {

            text-align: center;

            max-width: 900px;

            margin: 0 auto 60px;

            position: relative;

            z-index: 2;

        }

        .rgos-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 14px;

        }

        .rgos-heading h2 {

            font-family: "Playfair Display", serif;

            color: #23457b;

            font-size: 58px;

            font-weight: 700;

            margin-bottom: 22px;

        }

        .rgos-heading p {

            color: #66788f;

            font-size: 17px;

            line-height: 1.9;

            margin: 0;

        }

        .rgos-chart {

            background: #fff;

            border-radius: 24px;

            padding: 10px;

            box-shadow:
                0 20px 60px rgba(18, 40, 84, .08);

            transition: .35s;

        }

        .rgos-chart:hover {

            transform: translateY(-6px);

            box-shadow:
                0 28px 70px rgba(18, 40, 84, .12);

        }

        .rgos-chart img {

            width: 100%;

            display: block;

            border-radius: 12px;

        }

        /*========================*/

        @media(max-width:991px) {

            .rgos-section {

                padding: 70px 0;

            }

            .rgos-heading {

                margin-bottom: 45px;

            }

            .rgos-heading h2 {

                font-size: 44px;

            }

            .rgos-chart {

                padding: 18px;

            }

        }

        @media(max-width:767px) {

            .rgos-section {

                padding: 55px 0;

            }

            .rgos-heading h2 {

                font-size: 34px;

                line-height: 1.25;

            }

            .rgos-heading p {

                font-size: 15px;

                line-height: 1.8;

            }

            .rgos-chart {

                padding: 12px;

                border-radius: 16px;

            }

            .rgos-chart img {

                border-radius: 8px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Organogram and Planning</h1>
            <div class="pg-hero-breadcrumb">
                Organogram and Planning
            </div>
        </div>

    </section>

    <section class="rgos-section">

        <div class="container">


            <div class="rgos-chart">

                <img src="/new-web/assets/img/organogram-planning/organogram-planning.png" alt="Organization Structure Of RGU"
                    class="img-fluid">

            </div>

        </div>

    </section>
@endsection
