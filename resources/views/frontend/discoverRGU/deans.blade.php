@extends('frontend/new-master')
@section('content')
    <style>
        /* ===== GOVERNING BODY SECTION ===== */

        .board-m-cards-section {
            padding: 60px 20px;
            background: #eef2f8;
        }

        /* ===== GRID BASE ===== */

        .board-m-grid {
            max-width: 1400px;
            margin: auto;
            display: grid;
        }

        /* ===== 4 COLUMN GRID ===== */

        .board-m-grid-4 {
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        /* ===================================================== */
        /* ================== LARGE CARDS ====================== */
        /* ===================================================== */

        .board-m-card {
            display: flex;
            align-items: center;
            gap: 20px;
            background: #fff;
            padding: 18px;
            border-radius: 14px;
            transition: all 0.35s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        .board-m-img {
            width: 400px;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
            background: #163a6b;
            transition: transform 0.35s ease;
        }

        .board-m-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* CONTENT */

        .board-m-content h3 {
            font-size: 25px;
            font-weight: 600;
            color: #1d3557;
            margin-bottom: 4px;
        }

        .board-m-role {
            font-size: 16px;
            color: #6b7a90;
            margin-bottom: 6px;
        }

        .board-m-tag {
            font-size: 18px;
            color: #27467a;
            font-weight: 600;
        }

        /* HOVER */

        .board-m-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            background: #ffffff;
            border-color: rgba(39, 70, 122, 0.2);
        }

        .board-m-card:hover .board-m-img {
            transform: scale(1.05);
        }

        /* ===================================================== */
        /* ================== MINI CARDS ======================= */
        /* ===================================================== */

        .board-m-card-mini {
            background: #fff;
            padding: 18px;
            border-radius: 14px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .board-m-card-mini:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border-color: rgba(39, 70, 122, 0.2);
        }

        /* MINI IMAGE */

        .board-m-mini-img {
            width: 100%;
            aspect-ratio: 1 / 1;
            max-width: 260px;
            margin: 0 auto 16px;
            border-radius: 12px;
            overflow: hidden;
            background: #163a6b;
            transition: transform 0.3s ease;
        }

        .board-m-mini-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .board-m-card-mini:hover .board-m-mini-img {
            transform: scale(1.03);
        }

        /* MINI CONTENT */

        .board-m-card-mini h4 {
            font-size: 22px;
            font-weight: 600;
            color: #1d3557;
            margin-bottom: 10px;
            line-height: 1.35;
        }

        .board-m-card-mini .board-m-role {
            font-size: 16px;
            color: #6b7a90;
            line-height: 1.6;
            margin-bottom: 14px;
            flex-grow: 1;
        }

        .board-m-card-mini span {
            font-size: 17px;
            font-weight: 600;
            color: #27467a;
        }

        /* ===================================================== */
        /* ================== RESPONSIVE ======================= */
        /* ===================================================== */

        @media (max-width: 1199px) {
            .board-m-grid-4 {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 991px) {
            .board-m-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }

            .board-m-card {
                flex-direction: column;
                text-align: center;
            }

            .board-m-img {
                width: 320px;
                height: 320px;
            }
        }

        @media (max-width: 576px) {
            .board-m-grid-4 {
                grid-template-columns: 1fr;
            }

            .board-m-card {
                flex-direction: column;
                text-align: center;
            }

            .board-m-img {
                width: 100%;
                max-width: 280px;
                height: 280px;
            }

            .board-m-mini-img {
                max-width: 240px;
            }

            .board-m-card-mini h4 {
                font-size: 20px;
            }

            .board-m-card-mini .board-m-role {
                font-size: 15px;
            }
        }
    </style>

    <style>
        .board-m-profile-link {
            display: inline-block;
            margin-top: 1.2rem;
            color: #f28c28;
            font-size: 1.4rem;
            font-weight: 700;
            text-decoration: none;
            position: relative;
            transition: all 0.3s ease;
        }


        .board-m-profile-link:hover {
            color: #1f3b75;
        }

        .board-m-profile-link:hover::after {
            width: 5rem;
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-deans-corner/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Deans’ Corner</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Leadership & Governance / Deans’ Corner
            </div>
        </div>

    </section>

    <div class="board-m-cards-section">
        <!-- ===== BOTTOM (4 COLUMN CARDS) ===== -->
        <div class="board-m-grid board-m-grid-4">

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nandana.jpeg" alt="">
                </div>
                <h4>Prof. (Dr.) Nandana Dutta</h4>
                <p class="board-m-role">Dean Academics, Professor of English & I/c Dean, Royal School of Law and
                    Administration</p>
                <a href="https://www.rgu.ac/Dr-Nandana-Dutta" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsa/1.jpeg" alt="">
                </div>
                <h4>Prof. (Dr.) Hari Prasad Agarwal</h4>
                <p class="board-m-role">Dean, Royal School of Architecture; Dean, Royal School of Design; Dean, Royal
                    School of Fashion Design & Technology; Dean, Royal School of Fine Arts</p>
                <a href="https://www.rgu.ac/faculty-hari-prasad-agarwal" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/chatterjee.png" alt="">
                </div>
                <h4>Prof. (Dr.) Aniruddha Chatterjee</h4>
                <p class="board-m-role">Professor & Dean, RSAPS, The Assam Royal Global University</p>
                <a href="https://www.rgu.ac/faculty-aniruddha-chatterjee" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png" alt="">
                </div>
                <h4>Prof. George AP</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Commerce; Professor & Dean, Royal School of
                    Business</p>
                <a href="https://www.rgu.ac/faculty-george-ap" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg" alt="">
                </div>
                <h4>Prof. Prasanta Jyoti Baruah</h4>
                <p class="board-m-role">Distinguished Professor & Dean, RSCOM</p>
                <a href="https://www.rgu.ac/faculty-prasanta-jyoti-baruah" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsbsc/2.jpeg" alt="">
                </div>
                <h4>Prof. Anupam Chatterjee</h4>
                <p class="board-m-role">Dean & Professor, Royal School of Bio-Sciences</p>
                <a href="https://www.rgu.ac/faculty-anupam-chatterjee" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debendra-Kumar-Nayak.png" alt="">
                </div>
                <h4>Prof. Debendra Kumar Nayak</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Environmental & Earth Sciences</p>
                <a href="https://www.rgu.ac/faculty-debendra-kumar-nayak" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/diganta-munshi.jpeg" alt="">
                </div>
                <h4>Prof. Diganta Munshi</h4>
                <p class="board-m-role">Professor & Registrar (Administration); Director, IQAC; Dean, Royal School of
                    Engineering & Technology; Dean, Royal School of Information Technology</p>
                <a href="https://www.rgu.ac/faculty-diganta-munshi" class="board-m-profile-link">View Profile</a>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg" alt="">
                </div>
                <h4>Prof. Nikhil Kumar Chrungo</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Life Sciences; I/c Dean, Royal School of
                    Agriculture</p>
                <!-- <a href="" class="board-m-profile-link">View Profile</a> -->

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/dr-indrani-singh-rai.jpg" alt="">
                </div>
                <h4>Dr. Indrani Singh Rai</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Languages</p>
                <!-- <a href="" class="board-m-profile-link">View Profile</a> -->

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/Abhijit.jpg" alt="">
                </div>
                <h4>Prof. Abhijit Dutta</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Medical & Allied Science</p>
                <!-- <a href="" class="board-m-profile-link">View Profile</a> -->

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Verma.png" alt="">
                </div>
                <h4>Prof. (Dr.) M P Verma</h4>
                <p class="board-m-role">Professor & Dean, Royal School of Hotel Management; Royal School of Travel and
                    Tourism Management</p>
                <!-- <a href="" class="board-m-profile-link">View Profile</a> -->

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/dean-rsp.jpeg" alt="">
                </div>
                <h4>Prof. Yeduru Krishna Reddy</h4>
                <p class="board-m-role">Professor & Dean, RSP</p>
                <!-- <a href="" class="board-m-profile-link">View Profile</a> -->

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Kaberi-Saikia-RSN.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Kaberi Saikia</h4>
                <p class="board-m-role">Professor & Dean, RSN</p>
                <a href="https://www.rgu.ac/faculty-kaberi-saikia" class="board-m-profile-link">View Profile</a>

            </div>


        </div>
    </div>
@endsection
