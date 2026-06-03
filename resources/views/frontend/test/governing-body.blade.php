@extends('frontend/new-master')
@section('content')
    <style>
        /* ===== GOVERNING BODY SECTION ===== */

        .gb-cards-section {
            padding: 60px 20px;
            background: #eef2f8;
        }

        /* ===== GRID BASE ===== */
        .gb-grid {
            max-width: 1300px;
            margin: auto;
            display: grid;
        }

        /* ===== TOP GRID (2 COLUMN) ===== */
        .gb-grid-2 {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        /* ===== BOTTOM GRID (4 COLUMN) ===== */
        .gb-grid-4 {
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        /* ===================================================== */
        /* ================== LARGE CARDS ====================== */
        /* ===================================================== */

        .gb-card {
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
        .gb-img {
            width: 300px;
            height: 300px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
            background: #163a6b;
            transition: transform 0.35s ease;
        }

        .gb-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* CONTENT */
        .gb-content h3 {
            font-size: 25px;
            font-weight: 600;
            color: #1d3557;
            margin-bottom: 4px;
        }

        .gb-role {
            font-size: 16px;
            color: #6b7a90;
            margin-bottom: 6px;
        }

        .gb-tag {
            font-size: 18px;
            color: #27467a;
            font-weight: 600;
        }

        /* HOVER */
        .gb-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            background: #ffffff;
            border-color: rgba(39, 70, 122, 0.2);
        }

        .gb-card:hover .gb-img {
            transform: scale(1.05);
        }

        /* ===================================================== */
        /* ================== MINI CARDS ======================== */
        /* ===================================================== */

        .gb-card-mini {
            background: #fff;
            padding: 18px 12px;
            border-radius: 12px;
            text-align: left;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        /* MINI IMAGE */
        .gb-mini-img {
            width: 100%;
            height: 300px;
            margin: 0 auto 12px;
            border-radius: 10px;
            overflow: hidden;
            background: #163a6b;
            transition: transform 0.3s ease;
        }

        .gb-mini-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* MINI CONTENT */
        .gb-card-mini h4 {
            font-size: 22px;
            font-weight: 600;
            color: #1d3557;
            margin-bottom: 4px;
        }

        .gb-card-mini span {
            font-size: 18px;
            color: #27467a;
        }

        /* MINI HOVER */
        .gb-card-mini:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            background: #ffffff;
            border-color: rgba(39, 70, 122, 0.2);
        }

        .gb-card-mini:hover .gb-mini-img {
            transform: scale(1.05);
        }

        /* ===================================================== */
        /* ================== RESPONSIVE ======================== */
        /* ===================================================== */

        @media (max-width: 1024px) {
            .gb-grid-2 {
                grid-template-columns: 1fr;
            }

            .gb-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .gb-card {
                flex-direction: column;
                text-align: center;
            }

            .gb-img {
                width: 300px;
                height: 300px;
            }

            .gb-grid-4 {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Governing Body</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Leadership & Governance / Governing Body
            </div>
        </div>

    </section>

    <div class="gb-cards-section">
        <div class="gb-grid gb-grid-2">

            <!-- CARD -->
            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/ashok-kumar-pansari.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Dr. A.K. Pansari</h3>
                    <p class="gb-role">Chancellor, <br>
                        The Assam Royal Global University</p>
                    <span class="gb-tag">Chairman</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/anil-kumar-modi.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Sri Anil Kumar Modi</h3>
                    <p class="gb-role">Pro-Chancellor, <br>
                        The Assam Royal Global University</p>
                    <span class="gb-tag">Member</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/ankur-pansari.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Sri Ankur Pansari</h3>
                    <p class="gb-role">Pro-Chancellor, <br>
                        The Assam Royal Global University</p>
                    <span class="gb-tag">Member</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/ranjit-borthakur.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Sri Ranjit Barthakur</h3>
                    <p class="gb-role">Executive Chairman, Royal Multisport Pvt. Ltd, Guwahati, Assam</p>
                    <span class="gb-tag">Advisor, Governing Body</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/chief-advisor-pic.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Prof. (Dr.) Dhruba Jyoti Borah</h3>
                    <p class="gb-role">Chief Advisor to the Chancellor and Author in Residence</p>
                    <span class="gb-tag">Two Eminent Educationists nominated by Gyan Sagar Foundation</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/ak-buragohain.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Prof. (Dr.) A.K. Buragohain</h3>
                    <p class="gb-role">Vice-Chancellor (Interim), The Assam Royal Global University; Former Chancellor,
                        Girijananda Chowdhury University; Former Vice-Chancellor, Dibrugarh University</p>
                    <span class="gb-tag">Member</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://media.rgu.ac/advisor-leadership/Amarjyoti.jpeg" alt="">
                </div>
                <div class="gb-content">
                    <h3>Prof. (Dr) Amarjyoti Choudhury</h3>
                    <p class="gb-role">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre for Creativity
                    </p>
                    <span class="gb-tag">Two Eminent Educationists nominated by Gyan Sagar Foundation</span>
                </div>
            </div>

            <div class="gb-card">
                <div class="gb-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/Subramanian-Ramadorai.png" alt="">
                </div>
                <div class="gb-content">
                    <h3>Sri Subramanian Ramadorai</h3>
                    <p class="gb-role">Former CEO & MD of Tata Consultancy Services and Former Chairperson of NSDC and
                        NSDA</p>
                    <span class="gb-tag">Member</span>
                </div>
            </div>

            <!-- Repeat same structure -->

        </div>

        <!-- ===== BOTTOM (4 COLUMN CARDS) ===== -->
        <div class="gb-grid gb-grid-4">

            <div class="gb-card-mini">
                <div class="gb-mini-img">
                    <img src="https://rgu.ac/mobile-assets/governing-body/angshuman-bora.png" alt="">
                </div>
                <h4>Sr. Adv. Angshuman Bora</h4>
                <p class="gb-role">Sr. Advocate, <br> Gauhati High Court Guwahati</p>
                <span>Member</span>
            </div>

            <div class="gb-card-mini">
                <div class="gb-mini-img">
                    <img src="https://media.rgu.ac/governing-body/Harsha.jpeg" alt="">
                </div>
                <h4>Ms. Harsha Pansari</h4>
                <p class="gb-role">Member of Gyan Sagar Foundation</p>
                <span>Member</span>
            </div>

            <div class="gb-card-mini">
                <div class="gb-mini-img">
                    <img src="https://media.rgu.ac/governing-body/Sikha.jpg" alt="">
                </div>
                <h4>Ms. Sikha Modi Pansari</h4>
                <p class="gb-role">Member of Gyan Sagar Foundation</p>
                <span>Member</span>
            </div>

            <div class="gb-card-mini">
                <div class="gb-mini-img">
                    <img src="https://media.rgu.ac/governing-body/12.png" alt="">
                </div>
                <h4>Dr. Diganta Munshi</h4>
                <p class="gb-role">Registrar – Administration Director IQAC and Dean RSET & RSIT The Assam Royal Global
                    University, Guwahati</p>
                <span>Member Secretary</span>
            </div>


        </div>
    </div>
@endsection
