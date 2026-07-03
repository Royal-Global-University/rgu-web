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
                MoUs & Tie-up
            </h1>

            <div class="rguapsh-breadcrumb">
            </div>
        </div>
    </section>

    <section class="bridge-dept-page">

        <div class="container">

            <div class="bridge-dept-page-grid" id="bridgeDeptGrid">

            </div>

        </div>

    </section>

    <style>
        .bridge-dept-page {

            background: linear-gradient(180deg, #294b84, #081d4f);

            padding: 80px 0;

        }

        .bridge-dept-page-heading {

            text-align: center;

            margin-bottom: 60px;

        }

        .bridge-dept-page-heading h2 {

            font-family: 'Playfair Display', serif;

            font-size: 44px;

            font-weight: 700;

            color: #fff;

        }

        .bridge-dept-page-heading span {

            color: #ea6c3d;

        }

        .bridge-dept-page-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 35px;

        }

        .bridge-dept-card {

            display: block;

            text-decoration: none;

            background: rgba(255, 255, 255, .14);

            padding: 12px;

            border-radius: 10px;

            transition: .35s;

        }

        .bridge-dept-card:hover {

            transform: translateY(-10px);

            background: rgba(255, 255, 255, .20);

            box-shadow: 0 25px 45px rgba(0, 0, 0, .22);

        }

        .bridge-dept-image {

            width: 100%;

            aspect-ratio: 16/10;

            object-fit: cover;

            border-radius: 6px;

            background: #d8dce7;

        }

        .bridge-dept-title {

            margin-top: 15px;

            text-align: center;

            font-family: 'Playfair Display', serif;

            font-size: 22px;

            color: #fff;

            transition: .3s;

        }

        .bridge-dept-card:hover .bridge-dept-title {

            color: #ff8455;

        }

        @media(max-width:991px) {

            .bridge-dept-page {

                padding: 60px 0;

            }

            .bridge-dept-page-heading h2 {

                font-size: 34px;

            }

            .bridge-dept-page-grid {

                grid-template-columns: repeat(2, 1fr);

            }

        }

        @media(max-width:576px) {

            .bridge-dept-page-grid {

                grid-template-columns: 1fr;

            }

            .bridge-dept-page-heading h2 {

                font-size: 28px;

            }

            .bridge-dept-title {

                font-size: 20px;

            }

        }
    </style>

    <script>
        const bridgeDepartments = [

            {

                title: "Indian Army",

                image: "/new-web/assets/img/mou/indian-army/1.jpg",

                url: "/indian-navy-signs-moU"

            },
            {

                title: "Indian Navy",

                image: "https://www.rgu.ac/mobile-assets/media-corner/2026/mou/mou-1.jpeg",

                url: "/indian-navy-signs-moU"

            },

            {

                title: "Central Reserve Police Force (CRPF)",

                image: "https://www.rgu.ac/mobile-assets/media-corner/news10/2.JPG",

                url: "/rgu-signs-mou-with-crpf"

            },
            {

                title: "Sashastra Seema Bal",

                image: "/new-web/assets/img/mou/ssb/2.jfif",

                url: "/rgu-signs-moU-with-ssb"

            },
            {

                title: "Meghalaya Police",

                image: "/new-web/assets/img/mou/mou-meghalaya-police/img2.jpg",

                url: "/rgu-signs-moU-with-indian-meghalaya"

            },
            {

                title: "Nagaland Police",

                image: "https://www.rgu.ac/mobile-assets/ads/5-16/16-1.jpeg",

                url: "/rgu-sign-mou-with-nagaland-police"

            },

        ];
    </script>

    <script>
        function generateDepartmentCards() {

            const grid = document.getElementById("bridgeDeptGrid");

            grid.innerHTML = "";

            bridgeDepartments.forEach(department => {

                grid.innerHTML += `

        <a
            href="${department.url}"
            class="bridge-dept-card">

            <img

                src="${department.image}"

                class="bridge-dept-image"

                alt="${department.title}"

                loading="lazy">

            <div class="bridge-dept-title">

                ${department.title}

            </div>

        </a>

        `;

            });

        }

        generateDepartmentCards();
    </script>
@endsection
