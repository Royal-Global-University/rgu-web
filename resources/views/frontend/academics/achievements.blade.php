@extends('frontend/new-master')
@section('title', 'Achievements : The Assam Royal Global University')
@section('meta_description',
    'Celebrate the remarkable achievements of Royal Global University, a beacon of academic
    excellence. ')
@section('meta_keywords', 'Achievements')
@section('content')
    <style>
        /* ======================================
           STUDENT ACHIEVEMENTS
        ====================================== */

        .student-achievements-section {
            background: #EBF1FC;
            padding: 80px 0;
        }

        .student-achievements-header {
            margin-bottom: 45px;
        }

        .student-achievements-header h2 {
            color: #27467a;
            font-size: 4rem;
            line-height: 1.15;
            font-family: "Playfair Display", serif;
            font-weight: 700;
        }

        /* ======================================
           GRID
        ====================================== */

        .student-achievements-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            align-items: start;
        }

        .student-achievements-card {
            background: #f5f6f8;
            border-radius: 18px;
            padding: 24px;
            transition: .4s ease;
        }

        .student-achievements-card:hover {
            transform: translateY(-8px);
        }

        .student-achievements-card img {
            width: 100%;
            border-radius: 14px;
            display: block;
            margin-bottom: 20px;
        }

        .student-achievements-card h3 {
            color: #f06b2d;
            font-size: 2.5rem;
            line-height: 1.4;
            margin-bottom: 14px;
            font-weight: 700;
        }

        .student-achievements-card p {
            color: #666;
            font-size: 1.5rem;
            line-height: 1.5;
        }

        /* ======================================
           TOP FEATURED CARD
        ====================================== */

        .student-achievements-card-featured {
            grid-column: span 2;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .student-achievements-featured-image {
            width: 38%;
            flex-shrink: 0;
        }

        .student-achievements-featured-image img {
            margin-bottom: 0;
        }

        .student-achievements-featured-content {
            flex: 1;
        }

        .student-achievements-award h3 {
            margin-bottom: 10px;
        }

        .student-achievements-divider {
            height: 1px;
            background: #ddd;
            margin: 28px 0;
        }

        /* ======================================
           BLUE FEATURED CARD
        ====================================== */

        .student-achievements-card-blue {
            grid-column: span 2;
            background: #27467a;
            color: #fff;
            display: flex;
            gap: 30px;
        }

        .student-achievements-blue-image {
            width: 35%;
            flex-shrink: 0;
        }

        .student-achievements-blue-image img {
            margin-bottom: 0;
        }

        .student-achievements-blue-content {
            flex: 1;
        }

        .student-achievements-card-blue h3 {
            color: #fff;
            font-size: 34px;
            margin-bottom: 20px;
        }

        .student-achievements-card-blue p {
            color: rgba(255, 255, 255, .85);
        }

        .student-achievements-card-blue ul {
            margin-top: 20px;
            padding-left: 20px;
        }

        .student-achievements-card-blue li {
            color: #fff;
            margin-bottom: 12px;
            line-height: 1.8;
        }

        /* ======================================
           RESPONSIVE
        ====================================== */

        @media(max-width:1200px) {

            .student-achievements-header h2 {
                font-size: 48px;
            }

            .student-achievements-card h3 {
                font-size: 24px;
            }
        }

        @media(max-width:991px) {

            .student-achievements-grid {
                grid-template-columns: 1fr 1fr;
            }

            .student-achievements-card-featured,
            .student-achievements-card-blue {
                grid-column: span 2;
            }
        }

        @media(max-width:767px) {

            .student-achievements-header h2 {
                font-size: 34px;
            }

            .student-achievements-grid {
                grid-template-columns: 1fr;
            }

            .student-achievements-card-featured,
            .student-achievements-card-blue {
                grid-column: span 1;
                flex-direction: column;
            }

            .student-achievements-featured-image,
            .student-achievements-blue-image {
                width: 100%;
            }

            .student-achievements-card h3 {
                font-size: 22px;
            }

            .student-achievements-card-blue h3 {
                font-size: 26px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Academics-gen-info-std-achievements/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Achievements</h1>
            <div class="pg-hero-breadcrumb">
                Academics / General Information / Achievements
            </div>
        </div>

    </section>


    <section class="student-achievements-section">

        <div class="container">

            <div class="student-achievements-header">
                <h2>Happy Moment For RGU Debating Circle Once Again</h2>
            </div>

            <div class="student-achievements-grid">

                <!-- Large Featured Card -->
                <div class="student-achievements-card student-achievements-card-featured">

                    <div class="student-achievements-featured-image">
                        <img src="/new-web/assets/img/Academics-gen-info-std-achievements/1.png" alt="">
                    </div>

                    <div class="student-achievements-featured-content">

                        <div class="student-achievements-award">
                            <h3>Best Debater</h3>
                            <p>
                                was bagged by Mujahidul Islam of B.A. Journalism and
                                Mass communication, RSCOM, 2nd semester
                            </p>
                        </div>

                        <div class="student-achievements-divider"></div>

                        <div class="student-achievements-award">
                            <h3>3rd Best Debater</h3>
                            <p>
                                Was bagged by Dhiman Chakraborty of BSc.(H) Geology, 4th semester in All Assam Inter
                                college debate competition at
                                Assam Engineering College, Jalukbari on 23rd of February, 2024.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/2.png" alt="">
                    <h3>Happy Moment For RGU Theatrical Circle</h3>
                    <p>
                        Mrigalekha Dutta of B.Sc. Microbiology, 4th semester won the
                        second position in All Assam Inter college mono act competition at
                        Assam Engineering College, Jalukbari on 23rd of February, 2024
                        during Pyrokinesis..
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/3.png" alt="">
                    <h3>Business Pitching Competition At Pyrokinesis</h3>
                    <p>
                        Ojas Sancheti of BBA 2nd sem bagged the 3rd prize in the Business
                        pitching competition at Pyrokinesis organised by Assam Engineering
                        College, Jalukbari.
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/4.png" alt="">
                    <h3>Huge Congratulations To Levister Kromca</h3>
                    <p>
                        Ist semester, 'Royal School of Information and Technology for
                        bagging the Ist Prize in Instrumental (Solo) category at Kaal Rav,
                        the youth fest of Sikkim Manipal Institute of Technology (Manipal)
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/5.png" alt="">
                    <h3>Turning Dreams Into Reality</h3>
                    <p>
                        Rebek Leiri, BFA 6th semester won the first prize in the online Poster
                        making competition, organized by K.K. Handiqui State Open
                        University in the 125th birth celebration of Netaji Subash Chandra
                        Bose which was held on August, 2021.
                    </p>
                </div>

                <!-- Featured Blue Card -->
                <div class="student-achievements-card student-achievements-card-blue">

                    <div class="student-achievements-blue-image">
                        <img src="/new-web/assets/img/Academics-gen-info-std-achievements/6.png" alt="">
                    </div>

                    <div class="student-achievements-blue-content">

                        <h3>
                            Another Feather Added To The Cap Of
                            Laurels By Royalites
                        </h3>

                        <p>
                            Cymatix, an RGU band which participated in the BATTLE OF BANDS at the
                            Youth Festival of Sikkim Manipal Institute of Technology won the lst prize.
                            Huge CONGRATULATIONS to its members:
                        </p>

                        <ul>
                            <li>Hrittim Chelleng, B.Com Finance and Accounting, as the lead vocalist
                            </li>
                            <li>Anuraag Singh Sugandhi, B.A. English as lead guitarist
                            </li>
                            <li>Imran Khan, BBA as drummer
                            </li>
                            <li>Sunit Chetia, Bachelor of Interior Designing, as Bassist
                            </li>
                            <li>Lewister Kro, MCA, as Rhythm Guitarist.</li>
                        </ul>

                    </div>

                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/7.png" alt="">
                    <h3>Winners Always Finds A Way</h3>
                    <p>
                        Ms. Hiyaman Kalita, student of B.Sc. 2nd semester, Chemistry
                        Department (Royal School Of Applied and Pure Sciences) achieved
                        the first prize in all Assam Inter-College Prize Money Article Writing
                        Competition organized jointly by the departments of Sociology and
                        English, NEF College in association with IQAC, NEF College.
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/8.png" alt="">
                    <h3>A Reckonable Recognition For GU</h3>
                    <p>
                        The Assam Royal Global University got reckonable recognition in
                        North-East Research Conclave held at lITG organized by lITG and
                        Technology and Climate Change Dept. & Dept. of Education, Govt. of
                        Assam. Our exhibit "The Green Vehicle" and "Unique Cutter" has
                        received the recognition as Best Categories Exhibitors among the
                        Private University.
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/9.png" alt="">
                    <h3>No One Deserved It More</h3>
                    <p>
                        Arunima Dhar of BSC Biotechnology bagged the third prize in the Dr
                        Bhubaneshwar Baruah Memorial all Assam Inter Institutional-
                        Debate Competition organized by Govt. Ayurvedic Medical College
                        held on 12 November, 2022. The prelims for the same was
                        conducted by Sigma Voice Club on 10th November. Arunima Dhar
                        and Dhiman Chakravarty, members of RGU Literary Club
                        represented the university.
                    </p>
                </div>

                <!-- Card -->
                <div class="student-achievements-card">
                    <img src="/new-web/assets/img/Academics-gen-info-std-achievements/10.png" alt="">
                    <h3>Another Proud Moment For RGU</h3>
                    <p>
                        Dr. Hirak Ranjan Das received the "Best Mentor Award". This event was
                        organized to encourage innovations in products and services of
                        Agriculture/ Horticulture/ Food processing sectors by students of
                        Institutions/ College/ universities on 29 June 2022. A total of 32
                        participants participated from different institutions of Northeast India.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <script>
        /* ======================================
           STUDENT ACHIEVEMENTS
        ====================================== */

        document.addEventListener("DOMContentLoaded", function() {

            const achievementCards = document.querySelectorAll(
                ".student-achievements-card"
            );

            achievementCards.forEach(card => {

                card.addEventListener("mouseenter", () => {
                    card.style.transform = "translateY(-8px)";
                });

                card.addEventListener("mouseleave", () => {
                    card.style.transform = "translateY(0)";
                });

            });

        });
    </script>
@endsection
