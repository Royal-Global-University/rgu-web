@extends('frontend/new-master')
@section('content')
    <style>
        /* =========================================================
        ================ ASSOCIATIONS & TIEUPS PAGE =================
        ========================================================= */

        .rgu-at-wrap {
            background: #EBF1FC;
            padding: 70px 20px 90px;
            overflow: hidden;
        }

        .rgu-at-container {
            max-width: 1320px;
            margin: auto;
        }

        /* ================= INTRO TEXT ================= */

        .rgu-at-intro {
            max-width: 760px;
            margin: 0 auto 55px;
            text-align: center;
            animation: rguAtFadeUp 1s ease;
        }

        .rgu-at-intro p {
            font-size: 18px;
            line-height: 1.9;
            color: #55657f;
            margin: 0;
        }

        /* ================= FEATURES ================= */

        .rgu-at-feature-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 22px;
            margin-bottom: 70px;
        }

        .rgu-at-feature-card {
            background: #f5f8fd;
            border: 1px solid #d8e1f0;
            border-radius: 16px;
            padding: 28px 22px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            animation: rguAtFadeUp 0.8s ease;
        }

        .rgu-at-feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #f07d23, #ff9c52);
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 0;
        }

        .rgu-at-feature-card>* {
            position: relative;
            z-index: 2;
        }

        .rgu-at-feature-card:hover::before {
            opacity: 1;
        }

        .rgu-at-feature-card:hover {
            transform: translateY(-8px);
            border-color: transparent;
            box-shadow: 0 18px 35px rgba(240, 125, 35, 0.18);
        }

        .rgu-at-feature-card h4 {
            font-size: 15px;
            line-height: 1.7;
            color: #27467a;
            font-weight: 600;
            margin: 0;
            transition: all 0.35s ease;
        }

        .rgu-at-feature-card:hover h4 {
            color: #fff;
        }

        /* ================= FEATURE ICON ================= */

        .rgu-at-feature-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: rgba(39, 70, 122, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
        }

        .rgu-at-feature-icon i {
            font-size: 34px;
            color: #27467a;
            transition: all 0.4s ease;
        }

        .rgu-at-feature-card:hover .rgu-at-feature-icon {
            background: rgba(255, 255, 255, 0.18);
            transform: scale(1.08) rotate(5deg);
        }

        .rgu-at-feature-card:hover .rgu-at-feature-icon i {
            color: #fff;
        }

        /* ================= LOGO MARQUEE ================= */

        .rgu-at-logo-marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-bottom: 75px;
            padding: 10px 0;
        }

        .rgu-at-logo-track {
            display: flex;
            align-items: center;
            gap: 22px;
            width: fit-content;
            animation: rguAtMarquee 35s linear infinite;
        }

        .rgu-at-logo-marquee:hover .rgu-at-logo-track {
            animation-play-state: paused;
        }

        .rgu-at-logo-item {
            width: 200px;
            height: 150px;
            background: #f7f9fd;
            border: 1px solid #d9e2f0;
            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            transition: all 0.35s ease;
        }

        .rgu-at-logo-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 30px rgba(39, 70, 122, 0.12);
            background: #fff;
        }

        .rgu-at-logo-item img {
            max-width: 85%;
            max-height: 150px;
            object-fit: contain;
        }

        /* MARQUEE ANIMATION */

        @keyframes rguAtMarquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-222px * 8));
            }
        }

        /* MOBILE */

        @media (max-width: 768px) {

            .rgu-at-logo-item {
                width: 150px;
                height: 100px;
            }

            .rgu-at-logo-item img {
                max-height: 70px;
            }

            @keyframes rguAtMarquee {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-172px * 8));
                }
            }
        }

        /* ================= TABLE ================= */

        .rgu-at-table-wrap {
            background: #f7f9fd;
            border-radius: 18px;
            overflow-x: auto;
            overflow-y: hidden;
            border: 1px solid #dce4f2;
            animation: rguAtFadeUp 1s ease;
            width: 100%;
        }

        .rgu-at-table-wrap table {
            width: 100%;
            margin-bottom: 0 !important;
            border-collapse: collapse;
            min-width: 100%;
        }

        .rgu-at-table-wrap thead {
            background: #27467a !important;
        }

        .rgu-at-table-wrap thead tr {
            background: #27467a !important;
        }

        .rgu-at-table-wrap thead th {
            background: #27467a !important;
            color: #fff !important;
            font-size: 18px;
            font-weight: 600;
            padding: 18px 20px;
            border-color: #27467a !important;
            vertical-align: middle;
            white-space: nowrap;
        }

        .rgu-at-table-wrap tbody td {
            font-size: 18px;
            color: #55657f;
            padding: 16px 20px;
            border-color: #dde5f1;
            vertical-align: middle;
            background: transparent;
            line-height: 1.7;
        }

        .rgu-at-table-wrap tbody tr {
            transition: all 0.25s ease;
        }

        .rgu-at-table-wrap tbody tr:hover {
            background: rgba(39, 70, 122, 0.05);
        }

        /* ================= PAGINATION ================= */

        .rgu-at-pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 35px;
            flex-wrap: wrap;
        }

        .rgu-at-page-btn {
            min-width: 42px;
            height: 42px;
            border: none;
            border-radius: 10px;
            background: #27467a;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            padding: 0 14px;
            transition: all 0.3s ease;
            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .rgu-at-page-btn:hover {
            background: #1f3965;
            transform: translateY(-2px);
        }

        .rgu-at-page-btn.active {
            background: #f07d23;
        }

        .rgu-at-page-btn.disabled {
            opacity: 0.45;
            pointer-events: none;
        }

        .rgu-at-page-btn.arrow-btn {
            font-size: 18px;
            padding-bottom: 2px;
        }

        /* MOBILE */

        @media (max-width: 768px) {

            .rgu-at-pagination {
                gap: 8px;
            }

            .rgu-at-page-btn {
                min-width: 38px;
                height: 38px;
                font-size: 13px;
                border-radius: 8px;
                padding: 0 12px;
            }

            .rgu-at-page-btn.arrow-btn {
                font-size: 16px;
            }
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1200px) {

            .rgu-at-feature-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {

            .rgu-at-wrap {
                padding: 60px 18px 80px;
            }

            .rgu-at-logo-item {
                width: 180px;
                height: 130px;
            }
        }

        @media (max-width: 768px) {

            .rgu-at-feature-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 18px;
            }

            .rgu-at-intro p {
                font-size: 16px;
                line-height: 1.8;
            }

            .rgu-at-logo-item {
                width: 150px;
                height: 100px;
            }

            .rgu-at-table-wrap table {
                min-width: 650px;
            }

            .rgu-at-pagination {
                gap: 8px;
            }

            .rgu-at-page-btn {
                min-width: 38px;
                height: 38px;
                font-size: 13px;
                border-radius: 8px;
            }
        }

        @media (max-width: 540px) {

            .rgu-at-wrap {
                padding: 50px 14px 70px;
            }

            .rgu-at-feature-grid {
                grid-template-columns: 1fr;
            }

            .rgu-at-feature-card {
                padding: 24px 18px;
            }

            .rgu-at-feature-card h4 {
                font-size: 14px;
            }

            .rgu-at-feature-icon {
                width: 66px;
                height: 66px;
            }

            .rgu-at-feature-icon i {
                font-size: 30px;
            }

            .rgu-at-table-wrap {
                border-radius: 14px;
            }

            .rgu-at-table-wrap table {
                min-width: 620px;
            }

            .rgu-at-table-wrap thead th,
            .rgu-at-table-wrap tbody td {
                padding: 14px 16px;
                font-size: 13px;
            }

            .rgu-at-pagination {
                justify-content: flex-start;
                overflow-x: auto;
                flex-wrap: nowrap;
                padding-bottom: 8px;
                scrollbar-width: none;
            }

            .rgu-at-pagination::-webkit-scrollbar {
                display: none;
            }

            .rgu-at-page-btn {
                min-width: 36px;
                height: 36px;
                font-size: 12px;
            }
        }
    </style>


    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Associations and Tie Ups</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Excellence & Collaboration / Associations and Tie Ups
            </div>
        </div>

    </section>

    <section class="rgu-at-wrap">

        <div class="rgu-at-container">

            <!-- ================= INTRO ================= -->

            <div class="rgu-at-intro">
                <p>
                    The university, since its inception in 2017, has signed around 200 MoUs with renowned institutions
                    and organisations to have a common platform for:
                </p>
            </div>

            <!-- ================= FEATURES ================= -->

            <div class="rgu-at-feature-grid">

                <div class="rgu-at-feature-card">
                    <div class="rgu-at-feature-icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <h4>Research and Innovation</h4>
                </div>

                <div class="rgu-at-feature-card">
                    <div class="rgu-at-feature-icon">
                        <i class="fa fa-exchange"></i>
                    </div>
                    <h4>
                        Exchange of students, scientists, research scholars and faculty members
                    </h4>
                </div>

                <div class="rgu-at-feature-card">
                    <div class="rgu-at-feature-icon">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <h4>
                        Prospects for co-guideship and Internship opportunities
                    </h4>
                </div>

                <div class="rgu-at-feature-card">
                    <div class="rgu-at-feature-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>
                        Running collaborative projects/ joint consultancy/ training programs etc.
                    </h4>
                </div>

                <div class="rgu-at-feature-card">
                    <div class="rgu-at-feature-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h4>
                        Other relevant activities as agreed upon by both the collaborated organizations.
                    </h4>
                </div>

            </div>

            <!-- ================= LOGO MARQUEE ================= -->

            <div class="rgu-at-logo-marquee">

                <div class="rgu-at-logo-track">

                    <!-- SET 1 -->

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/1.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/2.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/3.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/4.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/5.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/6.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/7.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/8.png" alt="">
                    </div>


                    <!-- DUPLICATE FOR INFINITE LOOP -->

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/1.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/2.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/3.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/4.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/5.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/6.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/7.png" alt="">
                    </div>

                    <div class="rgu-at-logo-item">
                        <img src="/mobile-assets/association/new-icon/8.png" alt="">
                    </div>

                </div>

            </div>

            <!-- ================= TABLE ================= -->

            <div class="rgu-at-table-wrap table-responsive">

                <table class="table table-bordered align-middle">

                    <thead>
                        <tr>
                            <th style="width: 90px;">Sl. No.</th>
                            <th>Organization/Institutions Name</th>

                        </tr>
                    </thead>

                    <tbody id="rguAtTableBody"></tbody>

                </table>

            </div>

            <!-- ================= PAGINATION ================= -->

            <div class="rgu-at-pagination" id="rguAtPagination"></div>

        </div>

    </section>

    <script>
        const tableData = [
            ["Mendel University, Brno, Czech Republic"],
            ["Indian Institute of Technology (IIT), Guwahati"],
            ["M/S ICA Edu Skills Pvt.Ltd., Kolkata"],
            ["Institute of Advanced Study in Science & Technology (IASST), Guwahati"],
            ["National Institute of Pharmaceutical Education and Research (NIPER), Guwahati"],
            ["Institute of Chemical Technology (ICT), Mumbai"],
            ["National Law University and Judicial Academy, Assam (NLUJAA), Guwahati"],
            ["The Institute of Company Secretaries of India (ICSI), New Delhi"],
            ["Digboi College, Digboi"],
            ["Federation of Industry & Commerce of North eastern Region (FINER), Guwahati"],
            ["CSIR-North East Institute of Science and Technology (NEIST), Jorhat"],
            ["Sri Sankaradeva Nethralaya, Guwahati"],
            ["Assam Agricultural University (AAU), Jorhat"],
            ["SRISHTIE, Guwahati"],
            ["Pratishruti Cancer and Palliative Trust, Dibrugarh"],
            ["Snehalaya-Child Friendly Guwahati"],
            ["Assam State Museum, Govt. of Assam, Guwahati"],
            ["Dr. Surya Kumar Bhuyan Memorial Trust, North Guwahati"],
            ["Guwahati Biotech Park (GBP), Amingaon"],
            ["The Policy Research Centre, Bangladesh (PRC.bd)"],
            ["Sri Sri Aniruddhadeva Sports University, Chabua"],
            ["Altanostics Labs Private Limited, Guwahati"],
            ["CN Travels, Guwahati"],
            ["Dr. Bhubaneswar Boroaah Cancer Institute (BBCI), Guwahati"],
            ["The Institute of Chartered Accountants of India (ICAI), New Delhi"],
            ["GAPCRUD Private Limited, Kolkata"],
            ["Young Indians (Yi Guwahati Chapter), Guwahati"],
            ["Global Mindset Center for Global Education (Gmindset), Germany"],
            ["DY365, Guwahati"],
            ["Heritage Institute of Technology, Kolkata"],
            ["Assam Academy of Mathematics, Guwahati"],
            ["Sun Moon University, Republic of Korea"],
            ["North Lakhimpur College, North Lakhimpur"],
            ["JB College, Jorhat"],
            ["Nowgaon College, Nagaon"],
            ["Sibsagar College, Sibsagar"],
            ["Arya Vidyapeeth College, Guwahati"],
            ["B. Baruah College, Guwahati"],
            ["Pandu College, Guwahati"],
            ["Jorhat Nakachari College, Jorhat"],
            ["Darrang College, Tezpur"],
            ["Dimoria College, Dimoria"],
            ["Furkating College, Furkating"],
            ["Sonapur College, Sonapur"],
            ["Jagiroad College, Jagiroad"],
            ["Nagaon Girls College, Nagaon"],
            ["Saraighat College, Changsari"],
            ["Sipajhar College, Sipajhar"],
            ["Tangla College, Tangla"],
            ["Mangaldoi College, Mangaldoi"],
            ["B H College, Howly"],
            ["Dibrugarh Hanumanbax Surajmall Kanoi College, Dibrugarh"],
            ["Guwahati Commerce College, Guwahati"],
            ["Kokrajhar Science College, Kokrajhar"],
            ["G C College, Silchar"],
            ["Ramanuj Gupta Degree College, Silchar"],
            ["Sibsagar Commerce College, Sibsagar"],
            ["Kaliabor College, Kaliabor"],
            ["Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Amjonga"],
            ["Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Behali"],
            ["Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Dalgaon"],
            ["Assam Engineering Institute, Guwahati"],
            ["Baksa Polytechnic, Baksa"],
            ["Barpeta Polytechnic, Barpeta"],
            ["Bongaigaon Polytechnic, Bongaigaon"],
            ["Chirang Polytechnic, Bijni"],
            ["Diphu Polytechnic, Diphu"],
            ["Goalpara Polytechnic, Goalpara"],
            ["Kamrup Polytechnic, Baihata Chariali"],
            ["Karimganj Polytechnic, Karimganj"],
            ["Morigaon Polytechnic, Morigaon"],
            ["Nalbari Polytechnic, Nalbari"],
            ["Nowgong Polytechnic, Nagaon"],
            ["Silchar Polytechnic, Silchar"],
            ["Sonitpur Polytechnic, Sonitpur"],
            ["Tinsukia Polytechnic, Tinsukia"],
            ["Udalguri Polytechnic, Udalguri"],
            ["Assam Science Society, Guwahati"],
            ["RV University, Bengaluru"],
            ["O P Jindal Global University, Sonipat, Haryana"],
            ["Omeo Kumar Das Institute of Social Change and Development, Guwahati (OKDISCD), Guwahati"],
            ["English Language Teachers' Association of India (ELTAI), Chennai"],
            ["Swagat Hospitals Pvt.Ltd., Guwahati"],
            ["The Greenwood Hotels & Resorts, Guwahati"],
            ["Bhawanipur Hastinapur Bijni College, Bajali"],
            ["North Kamrup College, Bajali"],
            ["Baosi Banikanta Kakati College, Barpeta"],
            ["Barnagar College, Barpeta"],
            ["Barpeta Bongaigoan College, Barpeta"],
            ["Barpeta Girls’ College, Barpeta"],
            ["Bhawanipur Anchalik College, Barpeta"],
            ["Luitparia College, Barpeta"],
            ["Madhab Choudhury College, Barpeta"],
            ["Madhya Kamrup College, Barpeta"],
            ["Mandia Anchalik College, Barpeta"],
            ["Nabajyoti College, Barpeta"],
            ["Behali Degree College, Biswanath"],
            ["Abhayapuri College, Bongaigaon"],
            ["Birjhora Kanya Mahavidyalaya, Bongaigaon"],
            ["Rajiv Gandhi Memorial College, Bongaigaon"],
            ["Jagannath Singh College, Cachar"],
            ["Janata College, Cachar"],
            ["Madhab Chandra Das College, Cachar"],
            ["Satya Ranjan College, Cachar"],
            ["Borhat B.P.B. Memorial College, Charaideo"],
            ["Basugaon College, Chirang"],
            ["Kharupetia College, Darrang"],
            ["Mangaldai Commerce College, Darrang"],
            ["Bholanath College, Dhubri"],
            ["D.H.S.K. Commerce College, Dibrugarh"],
            ["Dibru College, Dibrugarh"],
            ["Duliajan College, Duliajan"],
            ["Tingkhong College, Dibrugarh"],
            ["Agia College, Goalpara"],
            ["Bikali College, Goalpara"],
            ["Dalgoma Anchalik College, Goalpara"],
            ["Dudhnoi College, Goalpara"],
            ["Habraghat Mahavidyalaya, Goalpara"],
            ["West Goalpara College, Goalpara"],
            ["Sarada Charan Dey College, Hailakandi"],
            ["Srikishan Sarda College, Hailakandi"],
            ["Pandit Deendayal Upadhyaya Govt. Model College, Katlicherra, Hailakandi"],
            ["Murazar College, Hojai"],
            ["Jorhat Kendriya Mahavidyalaya, Jorhat"],
            ["Bahona College, Jorhat"],
            ["Sarbodaya College, Jorhat"],
            ["Dispur College, Kamrup (M)"],
            ["Handique Girls’ College, Kamrup (M)"],
            ["K.R.B. Girls’ College, Kamrup (M)"],
            ["Kanya Mahavidyalaya, Kamrup (M)"],
            ["Karmashree Hiteswar Saikia College, Kamrup (M)"],
            ["B.R.M. Govt. Law College, Kamrup (M)"],
            ["S.B. Deorah College, Kamrup (M)"],
            ["Bamundi Mahavidyalaya, Kamrup(R)"],
            ["Chhamaria Anchalik College, Kamrup(R)"],
            ["Madhya Kampeeth College, Kamrup(R)"],
            ["Pati Darrang College, Kamrup(R)"],
            ["Pub Bongsor College, Kamrup(R)"],
            ["Barbhag College, Nalbari"],
            ["Rampur Anchalik College, Kamrup(R)"],
            ["Rangia College, Kamrup(R)"],
            ["S.B.M.S. College (Sualkuchi Budram Madhab Satradhikar College), Kamrup(R)"],
            ["Suren Das College, Kamrup(R)"],
            ["Vidya Bharati College, Kamrup(R)"],
            ["Pandit Deendayal Upadhyaya Adarsha Mahavidyalaya, Eraligool, Karimganj"],
            ["Harhi College, Lakhimpur"],
            ["Lakhimpur Commerce College, Lakhimpur"],
            ["North Bank College, Lakhimpur"],
            ["Charaibahi College, Morigaon"],
            ["Hatichong College, Nagaon"],
            ["Juria College, Nagaon"],
            ["Khagarijan College, Nagaon"],
            ["Nagaon GNDG Commerce College, Nagaon"],
            ["Swahid Smriti Mahavidyalaya, Nalbari"],
            ["Kamrup College, Nalbari"],
            ["Nalbari College, Nalbari"],
            ["Tihu College, Nalbari"],
            ["Uttar Kampith Mahavidyalaya, Nalbari"],
            ["Amguri College, Sibsagar"],
            ["Dikhowmukh College, Sibsagar"],
            ["Gargaon College, Sibsagar"],
            ["Nazira College, Sibsagar"],
            ["Swahid Peoli Phukan College, Sibsagar"],
            ["Lokapriya Gopinath Bordoloi Girls' College, Sonitpur"],
            ["Rangapara College, Sonitpur"],
            ["Tyagbir Hem Baruah College, Sonitpur"],
            ["Bir Raghab Moran Govt. Model College, Tinsukia"],
            ["Khowang College, Dibrugarh"],
            ["Lakhipur College, Goalpara"],
            ["Tinsukia College, Tinsukia"],
            ["Kalaguru Bishnu Rabha Degree College, Udalguri"],
            ["Kohima Science College, Jotsoma, Nagaland"],
            ["Unity College, Dimapur, Nagaland"],
            ["Indira Gandhi Govt. College, Tezu, Arunachal Pradesh"],
            ["Don Bosco College (Autonomous), Manipur"],
            ["Dhakuakhana College, Dhakuakhana, Lakhimpur"],
            ["Lakhimpur Kendriya Mahavidyalaya, North Lakhimpur"],
            ["Digboi Mahila Mahavidyalaya, Digboi"],
            ["Silchar College, Silchar"],
            ["G.L. Choudhury College, Barpeta"],
            ["People's Choice Education, Kathmandu, Nepal"],
            ["Jubilant College, Kathmandu, Nepal"],
            ["VS International College, Kathmandu, Nepal"],
            ["Himalaya College, Kathmandu, Nepal"],
            ["HRIT Academy, Kathmandu, Nepal"],
            ["Nobel Academy, Kathmandu, Nepal"],
            ["Liverpool College, Kathmandu, Nepal"],
            ["Jaya Multiple Campus, Kathmandu, Nepal"],
            ["Gandhi Institute of Technology and Management (GITAM), Visakhapatnam"],
            ["Shiv Nadar Institution of Eminence, Greater Noida"],
            ["Lovely Professional University, Punjab"],
            ["International Skill Development Corporation (ISDC), Bengaluru"],
            ["National Institute of Electronics and Information Technology (NIELIT), Guwahati"],
            ["Krirk University, Bangkok, Thailand"],
            ["Dhaka International University, Bangladesh"],
            ["TERRE Policy Centre, Pune"],
            ["Mr. Riyan Parag as RGU Brand Ambassador"],
            ["Tour Operators Association of Assam (TOAA), Guwahati"],
            ["The Directorate of Historical and Antiquarian Studies, Assam (DHAS), Guwahati"],
            ["Anandaram Dhekial Phookan College, Nagaon"],
            ["B.B.Kissan College, Jalahghat, Baksa"],
            ["Bapujee College, Sarthebari"],
            ["Biswanath College, Biswanath Chariali"],
            ["Bengtol College, Chirang"],
            ["Bilasipara College, Dhubri"],
            ["Barpathar College, Barpathar"],
            ["Bodofa U.N Brahma College, Dotma"],
            ["Bhuragaon College, Bhoragaon"],
            ["Batadraba Sri Sri Sankardev College, Batadraba"],
            ["Barkhetri College, Mukalmua, Nalbari"],
            ["Dhemaji College, Dhemaji"],
            ["Dhemaji Commerce College, Aradhol"],
            ["D.D.R.College, Chabua"],
            ["Duliajan Girls College, Duliajan"],
            ["Dr. B.K.B. College, Puranigudam"],
            ["Doom Dooma College, Rupaisiding"],
            ["F.A. Ahmed College, Goroimari"],
            ["Govt. Model College, Borkhola"],
            ["Goalpara College, Goalpara"],
            ["Ghana Kanta Borah College, Jorhat"],
            ["Girls' College Kokrajhar, Kokrajhar"],
            ["Harendra Chitra College, Bhaktardoba"],
            ["Haflong Govt. College, Haflong"],
            ["Janapriya College, Geremari"],
            ["Jawaharlal Nehru College, Boko"],
            ["Jengraimukh College, Jengraimukh"],
            ["JNC Pasighat, Arunachal Pradesh"],
            ["Kalabari College, Kalabari"],
            ["Karimganj College, Karimganj"],
            ["Kokrajhar Govt. College, Kokrajhar"],
            ["Khoirabari College, Khoirabari"],
            ["Lakhimpur Girls’ College, Khelmati, North Lakhimpur"],
            ["Ledo College, Ledo"],
            ["Manikpur Anchalik College, Manikpur"],
            ["Moridhal College, Dhemaji"],
            ["Murkong Selek College, Jonai, Dhemaji"],
            ["Mariani College, Mariani"],
            ["Manabendra Sarma Girls' College, Rangia"],
            ["Mayang Anchalik College, Rajamayong"],
            ["Morigaon College, Morigaon"],
            ["Mahendra Narayan Choudhury Balika Mahavidyalaya, Nalbari"],
            ["Mankachar College, Mankachar"],
            ["Margherita College, Margherita"],
            ["Mazbat College, Mazbat"],
            ["Narangi Anchalik Mahavidyalaya, Guwahati"],
            ["Devicharan Baruah Girls’ College, Jorhat"],
            ["West Guwahati Commerce College, Guwahati"],
            ["Kakojan College, Jorhat"],
            ["Ratnapith College, Dhubri"],
            ["Sankaradeva Mahavidyalaya, Pathalipahar"],
            ["Sarupathar College, Sarupathar"],
            ["Silapathar Science College, Silapathar"],
            ["Salbari College, Salbari"],
            ["Ramkrishna Nagar College, Karimganj"],
            ["Rukasen College, Bakalia"],
            ["Radhagovinda Baruah College, Guwahati"],
            ["Presidency College Motbung, Manipur"],
            ["Padmanath Gohain Boruah Govt. Model College, Kakopathar"],
            ["Puthimari College, Soneswar"],
            ["Nehru College, Cachar"],
            ["Pragjyotish College, Guwahati"],
            ["Paschim Barigog Anchalik Mahavidyalaya, Baranghati"],
            ["Global Research and Knowledge Foundation, Ahmedabad"],
            ["SECONE Society, Guwahati"]
        ];

        const rowsPerPage = 20;
        let currentPage = 1;

        const tableBody = document.getElementById("rguAtTableBody");
        const pagination = document.getElementById("rguAtPagination");

        function renderTable(page) {

            tableBody.innerHTML = "";

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            const pageData = tableData.slice(start, end);

            pageData.forEach((item, index) => {

                const row = `
            <tr>
                <td>${start + index + 1}</td>
               <td>${item}</td>
            </tr>
        `;

                tableBody.innerHTML += row;
            });
        }

        function renderPagination() {

            pagination.innerHTML = "";

            const totalPages = Math.ceil(tableData.length / rowsPerPage);

            // PREV BUTTON

            const prevBtn = document.createElement("button");
            prevBtn.innerHTML = "&laquo;";
            prevBtn.className = "rgu-at-page-btn arrow-btn";

            if (currentPage === 1) {
                prevBtn.classList.add("disabled");
            }

            prevBtn.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    updateTable();
                }
            });

            pagination.appendChild(prevBtn);

            // PAGE LOGIC

            let startPage = Math.max(currentPage - 2, 1);
            let endPage = Math.min(startPage + 4, totalPages);

            if (endPage - startPage < 4) {
                startPage = Math.max(endPage - 4, 1);
            }

            for (let i = startPage; i <= endPage; i++) {

                const btn = document.createElement("button");

                btn.innerText = i;
                btn.className = "rgu-at-page-btn";

                if (i === currentPage) {
                    btn.classList.add("active");
                }

                btn.addEventListener("click", () => {
                    currentPage = i;
                    updateTable();
                });

                pagination.appendChild(btn);
            }

            // NEXT BUTTON

            const nextBtn = document.createElement("button");

            nextBtn.innerHTML = "&raquo;";
            nextBtn.className = "rgu-at-page-btn arrow-btn";

            if (currentPage === totalPages) {
                nextBtn.classList.add("disabled");
            }

            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    updateTable();
                }
            });

            pagination.appendChild(nextBtn);
        }

        function updateTable() {
            renderTable(currentPage);
            renderPagination();
        }

        updateTable();
    </script>
@endsection
