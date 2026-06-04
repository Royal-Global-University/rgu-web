@extends('frontend/new-master')

@section('content')
    <style>
        /* ====================================
       HONORIS CAUSA
    ==================================== */

        .hon-causa-section {
            background: #dfe4ef;
            padding: 80px 0;
        }

        .hon-causa-convocation {
            margin-bottom: 70px;
        }

        .hon-causa-title {
            text-align: center;
            color: #27467A;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 35px;
            font-family: "Playfair Display", serif;
        }

        .hon-causa-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .hon-causa-grid-three {
            max-width: 1150px;
            margin: 0 auto;
            grid-template-columns: repeat(3, 1fr);
        }

        .hon-causa-card {
            background: #f8f8f8;
            border-radius: 8px;
            padding: 10px;
            transition: .3s ease;
        }

        .hon-causa-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .08);
        }

        .hon-causa-image {
            background: #cfe0f3;
            border-radius: 6px;
            overflow: hidden;
            margin-bottom: 12px;
        }

        .hon-causa-image img {
            width: 100%;
            height: 330px;
            object-fit: cover;
            display: block;
        }

        .hon-causa-card h4 {
            color: #d7662f;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .hon-causa-card p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        /* Blue Convocation Section */

        .hon-causa-highlight {
            background: #27467A;
            border-radius: 40px 40px 0 0;
            padding: 50px 40px;
            margin-top: 40px;
        }

        .hon-causa-highlight-title {
            text-align: center;
            color: #fff;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 35px;
            font-family: "Playfair Display", serif;
        }

        .hon-causa-highlight .hon-causa-card {
            background: #ffffff;
        }

        /* Responsive */

        @media(max-width:991px) {

            .hon-causa-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hon-causa-grid-three {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:767px) {

            .hon-causa-title,
            .hon-causa-highlight-title {
                font-size: 32px;
            }

            .hon-causa-grid,
            .hon-causa-grid-three {
                grid-template-columns: 1fr;
            }

            .hon-causa-highlight {
                padding: 35px 20px;
                border-radius: 25px 25px 0 0;
            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/convocation-honouris-causa/cover-img.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Honoris Causa - Hall of Fame</h1>
            <div class="pg-hero-breadcrumb">
                Convocation / Honoris Causa - Hall of Fame
            </div>
        </div>

    </section>

    <section class="hon-causa-section">

        <div class="container">

            <!-- Fourth Convocation -->

            <div class="hon-causa-convocation">

                <h2 class="hon-causa-title">
                    Fourth Convocation
                </h2>

                <div class="hon-causa-grid">

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-1.png" alt="">
                        </div>

                        <h4>Mr. Justice Ranjan Gogoi</h4>

                        <p>
                            Doctor of Laws (LL.D.) - Honoris Causa. Member of Rajya Sabha and Former Chief Justice of
                            India.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-2.png" alt="">
                        </div>

                        <h4>Dr. Raghunath Anant Mashelkar</h4>

                        <p>
                            FTWAS, FNA, FASc, FRS, FREng, FRSC Doctor of Science (D.Sc.) - Honoris Causa. Former
                            Director General, CSIR and Padma Vibhushan recipient.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-4.png" alt="">
                        </div>

                        <h4>Dr. Krisnaswamy Kasturirangan</h4>

                        <p>
                            Doctor of Science (D.Sc.) - Honoris Causa. Former Chairman, ISRO, Chairperson, Drafting
                            Committee, NEP 2020 and Padma Vibhushan recipient.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-3.png" alt="">
                        </div>

                        <h4>Shri Harshvardhan Neotia</h4>

                        <p>
                            Doctor of Letters (D.Litt.) - Honoris Causa, Chairman , Ambuja Neotia Group and Padma Shri
                            recipient.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Third Convocation -->

            <div class="hon-causa-convocation">

                <h2 class="hon-causa-title">
                    Third Convocation
                </h2>

                <div class="hon-causa-grid hon-causa-grid-three">

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-1.png" alt="">
                        </div>

                        <h4>Professor Ajay Kumar Sood</h4>

                        <p>
                            Doctor of Science (D.Sc.) - Honoris Causa. Principal Scientific Advisor to the Government of
                            India.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-2.png" alt="">
                        </div>

                        <h4>Ms. Patricia Mukhim</h4>

                        <p>
                            Doctor of Letters (D.Litt.) - Honoris Causa Journalist and Editor, The Shillong Times and a
                            Social Activist.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-3.png" alt="">
                        </div>

                        <h4>Dr. Ashok Kumar Mittal</h4>

                        <p>
                            Doctor of Letters (D.Litt.) - Honoris Causa Chancellor, Lovely Professinal University and
                            Member of Rajya Sabha.
                        </p>
                    </div>

                </div>

            </div>

            <!-- First Convocation -->

            <div class="hon-causa-highlight">

                <h2 class="hon-causa-highlight-title">
                    First Convocation
                </h2>

                <div class="hon-causa-grid hon-causa-grid-three">

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/Frame%208304.png"
                                alt="">
                        </div>

                        <h4>Professor Nagen Saikia</h4>

                        <p>
                            Doctor of Letters (D.Litt.) - Honoris Causa Former Distinguished Professor of Dibrugarh
                            University, Former President of Assam Sahitya Sabha, Eminent Literator and a Scholar
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/Frame%208305.png"
                                alt="">
                        </div>

                        <h4>Professor Chintamani Nagesa Ramachandra Rao</h4>

                        <p>
                            FNA, FASc, FRS, FTWAS, HonFRSC, MAE, HonFInstP Doctor of Science (D.Sc.) - Honoris Causa. A
                            Bharat Ratna recipient, Linus Pauling Research Professor and Honorary President of
                            Jawaharlal Nehru Centre for Advanced Scientific Research, Bengaluru.
                        </p>
                    </div>

                    <div class="hon-causa-card">
                        <div class="hon-causa-image">
                            <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/Frame%208306.png"
                                alt="">
                        </div>

                        <h4>Shri Sajjan Bhajanka</h4>

                        <p>
                            Doctor of Letters (D.Litt.) - Honoris Causa Eminent Industrialist, Social Worker and
                            Educator, Founder of Century Plyboards (India) Ltd.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
