@extends('frontend/new-master')
@section('title', 'Academic Council : The Assam Royal Global University')
@section('meta_description',
    'Experience academic excellence shaped by the guidance of our esteemed Academic Council at
    Royal Global University.')
@section('meta_keywords', 'Academic Council')
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

        .board-m-member-designation {
            margin: 0 0 10px;
            font-size: 20px;
            font-weight: 600;
            color: #1d3557;
            font-family: "Times New Roman", serif;
            line-height: 1.2;
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Discover-RGU-Leadership-&-Governance-Academic-Council/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Academic Council</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Leadership & Governance / Academic Council
            </div>
        </div>

    </section>

    <div class="board-m-cards-section">
        <!-- ===== BOTTOM (4 COLUMN CARDS) ===== -->
        <div class="board-m-grid board-m-grid-4">

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/17.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) A.K. Buragohain</h4>
                <p class="board-m-role">Vice-Chancellor (Interim), RGU</p>
                <p class="board-m-member-designation">
                    Chairman
                </p>
                <!--  -->
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/2.jpeg"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Diganta Munshi</h4>
                <p class="board-m-role">Registrar – Administration, The Assam Royal Global University (Member Secretary)</p>
                <p class="board-m-member-designation">
                    Member Secretary
                </p>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/4.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) Kaberi Saikia</h4>
                <p class="board-m-role">Professor (Principal), Royal School of Nursing</p>
                <p class="board-m-member-designation">
                    Member
                </p>

            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/5.png"
                        alt="">
                </div>
                <h4>Prof. (Dr.) N.K. Chrungoo</h4>
                <p class="board-m-role">Dean, Royal School of Life Sciences</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/6.png"
                        alt="">
                </div>
                <h4>Prof. George AP</h4>
                <p class="board-m-role">Dean, Royal School of Business and Royal School of Commerce</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Abhijit.jpeg" alt="">
                </div>
                <h4>Prof. (Dr.) Abhijit Dutta</h4>
                <p class="board-m-role">Professor & Dean, RSMAS</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg" alt="">
                </div>
                <h4>Prof. Prasanta Jyoti Baruah</h4>
                <p class="board-m-role">Distinguished Professor & Dean, RSCOM</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/chatterjee.png" alt="">
                </div>
                <h4>Prof. (Dr.) Aniruddha Chatterjee</h4>
                <p class="board-m-role">Professor & Dean, Royal School Applied & Pure Sciences</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png" alt="">
                </div>
                <h4>Dr. Sumanta Dutta Chowdhury</h4>
                <p class="board-m-role">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/all-faculty/rsc/3.jpg" alt="">
                </div>
                <h4>Dr. Aruna Dev Rroy</h4>
                <p class="board-m-role">Associate Professor & HOD, RSC</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Debajit-Borah-RSBSC.png" alt="">
                </div>
                <h4>Dr. Debajit Borah</h4>
                <p class="board-m-role">Associate Professor & HOD, Biotechnology</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/14.jpeg"
                        alt="">
                </div>
                <h4>Dr. Aneesha Borah</h4>
                <p class="board-m-role">Assistant Professor and Coordinator, Geography and Geoinformatics, Royal School
                    of Earth and Environmental Sciences</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/deepjyoti.jpg" alt="">
                </div>
                <h4>Dr. Deepjyoti Choudhury</h4>
                <p class="board-m-role">Associate Professor & HOD, Department of CSE, RSET</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png" alt="">
                </div>
                <h4>Dr. Pronami Bhattacharyya</h4>
                <p class="board-m-role">Associate Professor</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/supriyo.png" alt="">
                </div>
                <h4>Dr. Supriyo Sen</h4>
                <p class="board-m-role">Associate Professor & HoD</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Indrajit.jpeg" alt="">
                </div>
                <h4>Dr. Indrajit Dutta</h4>
                <p class="board-m-role">Associate Professor & HOD, RSTM</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/chief-advisor-pic.png" alt="">
                </div>
                <h4>Prof. (Dr.) Dhruba Jyoti Borah</h4>
                <p class="board-m-role">Chief Advisor to the Chancellor and Author-in-residence.</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Shiela-Bora-RSHSS.png" alt="">
                </div>
                <h4>Prof. (Dr.) Sheila Bora</h4>
                <p class="board-m-role">Professor & Advisor, Department of History, RSHSS</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/18.jpg"
                        alt="">
                </div>
                <h4>Ms. Chandralekha Rawat</h4>
                <p class="board-m-role">Director, Delhi Public School, Guwahati</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/19.jpg"
                        alt="">
                </div>
                <h4>Dr. Ghanshyam Das Dhanuka</h4>
                <p class="board-m-role">Managing Director of G R Dhanuka Group, Guwahati</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/20.jpg"
                        alt="">
                </div>
                <h4>Sri Pradeep Purohit</h4>
                <p class="board-m-role">Chief Operating Officer, Star Cements Ltd.</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/no-pic.png" alt="">
                </div>
                <h4>Sri Anupam Deka</h4>
                <p class="board-m-role">Director, Repose Foods Pvt. Ltd., Guwahati</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/no-pic.png" alt="">
                </div>
                <h4>Shri S. K. Baruah</h4>
                <p class="board-m-role">CEO, North East Gas Distribution Company Ltd.; Former Managing Director,
                    Numaligarh Refinery Ltd. & Former Chairman, CII – NE Council, India</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/21.png"
                        alt="">
                </div>
                <h4>Mr. Ankur Pansari</h4>
                <p class="board-m-role">Pro-Chancellor and Member of Governing Body, The Assam Royal Global University
                </p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://media.rgu.ac/governing-body/Sikha.jpg" alt="">
                </div>
                <h4>Ms. Sikha M. Pansari</h4>
                <p class="board-m-role">Member of Governing Body, The Assam Royal Global University</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/23.jpeg"
                        alt="">
                </div>
                <h4>Sri R. S. Joshi</h4>
                <p class="board-m-role">CMD, Buildworth Real Estate, Guwahati</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/Angira.jpeg"
                        alt="">
                </div>
                <h4>Ms. Angira Mimani</h4>
                <p class="board-m-role">Associate Professor, RSB & Associate Dean, Student Affairs, RGU</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Pradip-Jyoti-Mahanta-RSL.png" alt="">
                </div>
                <h4>Prof. (Dr.) P. J. Mahanta</h4>
                <p class="board-m-role">Professor, RSL</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/faculty-profile/Rathindra.jpeg" alt="">
                </div>
                <h4>Dr. Rathindra Bhuyan</h4>
                <p class="board-m-role">Senior Professor & Advisor</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png" alt="">
                </div>
                <h4>Dr. Stuti Goswami</h4>
                <p class="board-m-role">Associate Professor, Royal School of Languages</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Dr-Sthiti-Porna-Dutta.jpeg" alt="">
                </div>
                <h4>Dr. Stithi Parna Dutta</h4>
                <p class="board-m-role">Assistant Professor, Biochemistry, Royal School of BioSciences</p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>

            <div class="board-m-card-mini">
                <div class="board-m-mini-img">
                    <img src="/mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png" alt="">
                </div>
                <h4>Dr. Arpee Saikia</h4>
                <p class="board-m-role">Associate Professor, Royal School of Business & Coordinator, Behavioural Science
                </p>
                <p class="board-m-member-designation">
                    Member
                </p>
            </div>


        </div>
    </div>
@endsection
