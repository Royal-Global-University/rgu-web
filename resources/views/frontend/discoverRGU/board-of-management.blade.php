@extends('frontend/new-master')
@section('title', 'Board of Management : The Assam Royal Global University')
@section('meta_description',
    'Meet the powerhouse behind Royal Global University strategic vision and operational excellence - our Board of
    Management.')
@section('meta_keywords', 'Board of Management')
@section('content')
    <style>
        /* ===== GOVERNING BODY SECTION ===== */

        .board-m-cards-section {
            padding: 60px 20px;
            background: #eef2f8;
        }

        /* ===== GRID BASE ===== */
        .board-m-grid {
            max-width: 1300px;
            margin: auto;
            display: grid;
        }



        /* ===== BOTTOM GRID (4 COLUMN) ===== */
        .board-m-grid-4 {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
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

        /* IMAGE */
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
        /* ================== MINI CARDS ======================== */
        /* ===================================================== */

        .board-m-card-mini {
            background: #fff;
            padding: 18px 12px;
            border-radius: 12px;
            text-align: left;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        /* MINI IMAGE */
        .board-m-mini-img {
            width: 350px;
            height: 350px;
            margin: 0 auto 12px;
            border-radius: 10px;
            overflow: hidden;
            background: #163a6b;
            transition: transform 0.3s ease;
        }

        .board-m-mini-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* MINI CONTENT */
        .board-m-card-mini h4 {
            font-size: 22px;
            font-weight: 600;
            color: #1d3557;
            margin-bottom: 4px;
        }

        .board-m-card-mini span {
            font-size: 18px;
            color: #27467a;
        }

        /* MINI HOVER */
        .board-m-card-mini:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            background: #ffffff;
            border-color: rgba(39, 70, 122, 0.2);
        }

        .board-m-card-mini:hover .board-m-mini-img {
            transform: scale(1.05);
        }

        /* ===================================================== */
        /* ================== RESPONSIVE ======================== */
        /* ===================================================== */

        @media (max-width: 1024px) {
            .board-m-grid-2 {
                grid-template-columns: 1fr;
            }

            .board-m-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .board-m-card {
                flex-direction: column;
                text-align: center;
            }

            .board-m-img {
                width: 300px;
                height: 300px;
            }

            .board-m-grid-4 {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Board of Management</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Leadership & Governance / Board of Management
            </div>
        </div>

    </section>

    <div class="board-m-cards-section">
        <!-- ===== BOTTOM (4 COLUMN CARDS) ===== -->
        <div class="board-m-grid board-m-grid-4">

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/3.png"
                        alt="">
                </div>
                <h4>Sri Ankur Pansari</h4>
                <p class="board-m-role">Pro-Chancellor, RGU & Member Governing Body</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/akb.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Alak Kumar Buragohain</h4>
                <p class="board-m-role">Vice-Chancellor (Interim), The Assam Royal Global University</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Chairman</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/gautam-barua.jpg"
                        alt="">
                </div>
                <h4>Prof. Gautam Barua</h4>
                <p class="board-m-role">Former Director of Indian Institute of Technology (IIT) Guwahati</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/2.jpg"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Pradeep K. Jain</h4>
                <p class="board-m-role">Professor, Royal School of Business and Royal School of Commerce</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/5.png"
                        alt="">
                </div>
                <h4>Sri R. S. Joshi</h4>
                <p class="board-m-role">Former Chairman, FINER, CMD, Buildworth Real Estate, Guwahati</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/6.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) George AP</h4>
                <p class="board-m-role">Dean, RSB & RSC, The Assam Royal Global University</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Amrit.jpeg" alt="">
                </div>
                <h4>Prof. Amit Pal Singh</h4>
                <p class="board-m-role">Professor, Royal School of Commerce</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/Angira.jpeg"
                        alt="">
                </div>
                <h4>Ms. Angira Mimani</h4>
                <p class="board-m-role">Associate Professor, RSB and Associate Dean, Student Affairs, The Assam Royal
                    Global University</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/Abhijit.jpg"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Abhijit Dutta</h4>
                <p class="board-m-role">Dean, Royal School of Medical Health Sciences, The Assam Royal Global University
                </p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/10.jpeg"
                        alt="">
                </div>
                <h4>Mr. Jugal Kishore Bhattacherjee</h4>
                <p class="board-m-role">Assistant Professor, Dept of Economics, RSHSS, The Assam Royal Global University
                </p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Member</span>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/diganta-munshi.jpeg"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Diganta Munshi</h4>
                <p class="board-m-role">Registrar - Administration, The Assam Royal Global University</p>
                <span style="background-color: darkorange" class="p-2 rounded text-white">Registrar</span>
            </div>


        </div>
    </div>
@endsection
