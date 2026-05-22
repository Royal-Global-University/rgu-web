@extends('frontend/new-master')
@section('title', 'Labrotary : The Assam Royal Global University')
@section('meta_description',
    'Royal Global University is known for its world class infrastructure. The state-of-the-art
    laboratories are well equipped with the latest software and technology.')
@section('meta_keywords', 'Labrotary')
@section('content')

    <style>
        .labs-all-section {
            padding: 80px 20px;
            background: #eef2f8;
        }

        /* =========================
                       TOP
                    ========================== */
        .labs-top {
            max-width: 1300px;
            margin: auto;
            text-align: center;
        }

        .labs-intro {
            max-width: 900px;
            margin: auto;
            font-size: 20px;
            line-height: 1.9;
            color: #5d6470;
        }

        .labs-stats {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            margin-top: 45px;
        }

        .labs-stat-card {
            position: relative;
            padding-right: 50px;
        }

        .labs-stat-card:not(:last-child)::after {
            content: "";
            width: 1px;
            height: 45px;
            background: #d1d8e4;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .labs-stat-card h3 {
            margin: 0;
            color: #f26b2d;
            font-size: 50px;
            font-weight: 700;
            line-height: 1;
            font-family: 'Times New Roman', Times, serif;
        }

        .labs-stat-card span {
            display: block;
            margin-top: 10px;
            font-size: 18px;
            color: #5d6470;
        }

        /* =========================
                       MAIN WRAPPER
                    ========================== */
        .labs-wrapper {
            margin-top: 80px;
            background: linear-gradient(135deg, #16356f, #06204c);
            border-radius: 40px;
            padding: 50px;
        }

        .labs-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 35px;
        }

        .labs-title {
            color: #fff;
            font-size: 42px;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
        }

        .labs-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        /* SEARCH */
        .labs-search {
            position: relative;
            width: 280px;
        }

        .labs-search i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #8894a8;
            font-size: 13px;
        }

        .labs-search input {
            width: 100%;
            height: 46px;
            border: none;
            border-radius: 6px;
            padding: 0 16px 0 38px;
            outline: none;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            backdrop-filter: blur(10px);
        }

        .labs-search input::placeholder {
            color: #d6dce7;
        }

        /* SELECT */
        .labs-select {
            min-width: 260px;
            height: 46px;
            border: none;
            border-radius: 6px;
            padding: 0 15px;
            outline: none;
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }

        .labs-select option {
            color: #000;
        }

        /* =========================
                       GRID
                    ========================== */
        .labs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .labs-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            transition: 0.35s ease;
            display: flex;
            flex-direction: column;
        }

        .labs-card:hover {
            transform: translateY(-6px);
        }

        .labs-image {
            height: 300px;
            overflow: hidden;
        }

        .labs-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s ease;
        }

        .labs-card:hover img {
            transform: scale(1.05);
        }

        .labs-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 50%;
        }

        .labs-school {
            font-size: 14px;
            font-weight: 700;
            color: #f26b2d;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .labs-name {
            font-size: 26px;
            color: #17376f;
            line-height: 1.3;
            margin-bottom: 10px;
            font-weight: 800;
            font-family: 'Times New Roman', Times, serif;
        }

        .labs-btn {
            margin-top: auto;
            display: inline-flex;
            width: fit-content;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            background: #f26b2d;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            border-radius: 4px;
            transition: 0.3s ease;
        }

        .labs-btn:hover {
            background: #d8571c;
            color: #fff;
        }

        /* =========================
                       EMPTY
                    ========================== */
        .labs-empty {
            grid-column: 1/-1;
            text-align: center;
            padding: 80px 20px;
            color: #fff;
            font-size: 18px;
        }

        /* =========================
                       RESPONSIVE
                    ========================== */
        @media (max-width: 1100px) {

            .labs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .labs-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .labs-controls {
                width: 100%;
                flex-wrap: wrap;
            }

            .labs-search,
            .labs-select {
                width: 100%;
            }
        }

        @media (max-width: 768px) {

            .labs-all-section {
                padding: 60px 15px;
            }

            .labs-wrapper {
                padding: 25px;
                border-radius: 25px;
            }

            .labs-grid {
                grid-template-columns: 1fr;
            }

            .labs-title {
                font-size: 32px;
            }

            .labs-stats {
                gap: 30px;
            }

            .labs-stat-card {
                padding-right: 0;
            }

            .labs-stat-card::after {
                display: none;
            }

            .labs-image {
                height: 200px;
            }
        }
    </style>

    <style>
        /* =========================
                   CARD ANIMATION
                ========================= */

        .labs-card {
            opacity: 0;
            transform: translateY(50px);
            animation: cardReveal 0.7s ease forwards;
        }

        @keyframes cardReveal {

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        /* IMAGE ZOOM */

        .labs-image {
            overflow: hidden;
        }

        .labs-image img {
            transition: 0.5s ease;
        }

        .labs-card:hover .labs-image img {
            transform: scale(1.08);
        }

        /* BUTTON */

        .labs-btn {
            position: relative;
            overflow: hidden;
        }

        .labs-btn::before {
            content: "";
            position: absolute;
            width: 0%;
            height: 100%;
            background: rgba(255, 255, 255, 0.15);
            left: 0;
            top: 0;
            transition: 0.4s ease;
        }

        .labs-btn:hover::before {
            width: 100%;
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/laboratories.jpeg');">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Laboratories</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Research and Innovation / Laboratories
            </div>
        </div>

    </section>

    <section class="labs-all-section">

        <!-- TOP CONTENT -->
        <div class="labs-top">
            <p class="labs-intro">
                The Assam Royal Global University is known for its world class infrastructure.
                The state-of-the-art laboratories are well equipped with the latest software and
                technology along with 24×7 power backup facilities. Furthermore, the entire campus
                of The Assam Royal Global University is fully Wi-Fi enabled which enables students
                to access the internet any time they want. The laboratories at RGU are well stocked
                with various certified equipment as per the University guidelines.
            </p>
        </div>

        <!-- LAB SECTION -->
        <div class="labs-wrapper">

            <div class="labs-head">

                <h2 class="labs-title">School Of RGU</h2>

                <!-- =========================
                 FILTERS
            ========================= -->

                <div class="labs-controls">

                    <!-- SEARCH -->
                    <div class="labs-search">
                        <i class="fa fa-search"></i>
                        <input type="text" id="labsSearch" placeholder="Search laboratories...">
                    </div>

                    <!-- SCHOOL -->
                    <select id="labsSchoolFilter" class="labs-select">
                        <option value="all">All Schools</option>
                    </select>

                </div>

            </div>

            <!-- CARDS -->
            <div class="labs-grid" id="labsGrid"></div>

        </div>

    </section>

    <script>
        /* =========================
               DATA
            ========================= */

        const labsData = [

            {
                school: "Royal School of Architecture (RSA)",
                title: "Architecture Design Studios",
                image: "/mobile-assets/laboratories/architecture.png",
                link: "/lab-architecture"
            },

            {
                school: "Royal School of Applied & Pure Sciences (RSAPS)",
                title: "Physics Laboratory",
                image: "/mobile-assets/laboratories/physics.png",
                link: "/lab-physics"
            },

            {
                school: "Royal School of Applied & Pure Sciences (RSAPS)",
                title: "Chemistry Laboratory",
                image: "/mobile-assets/laboratories/chemistry.png",
                link: "/lab-chemistry"
            },

            {
                school: "Royal School of Behavioural & Allied Sciences (RSBAS)",
                title: "Psychological Laboratory",
                image: "/mobile-assets/Psychological/Picture1.png",
                link: "/lab-psychology"
            },

            {
                school: "Royal School of Bio-sciences (RSBSC)",
                title: "Biotechnology Laboratory",
                image: "/mobile-assets/laboratories/biotech.png",
                link: "/lab-biotech"
            },

            {
                school: "Royal School of Bio-sciences (RSBSC)",
                title: "Food Technology Laboratory",
                image: "/mobile-assets/laboratories/foodtech.png",
                link: "/lab-foodteach"
            },

            {
                school: "Royal School of Bio-sciences (RSBSC)",
                title: "Microbiology Laboratory",
                image: "/mobile-assets/laboratories/micro.png",
                link: "/lab-microbiology"
            },

            {
                school: "Royal School of Communications & Media (RSCOM)",
                title: "Media Studio",
                image: "/mobile-assets/new-labs/studio-media-studio/ms1.jpg",
                link: "/media-studio"
            },

            {
                school: "Royal School of Communications & Media (RSCOM)",
                title: "Multimedia Laboratory",
                image: "/mobile-assets/new-labs/lab-multimedia/1.jpeg",
                link: "/lab-multimedia"
            },

            {
                school: "Royal School of Design (RSD)",
                title: "Interior Design Studios",
                image: "/mobile-assets/laboratories/interior.png",
                link: "/lab-interior"
            },

            {
                school: "Royal School of Design (RSD)",
                title: "AR/VR Design Lab (Product Design Lab)",
                image: "/mobile-assets/new-labs/lab-ar-vr-product-design/AR:VR/1000595884.jpg",
                link: "/lab-ar-vr"
            },

            {
                school: "Royal School of Design (RSD)",
                title: "Royal Boutique",
                image: "/mobile-assets/studio/boutique/royal%20boutique%204.jpeg",
                link: "/facilities-royal-boutique"
            },

            {
                school: "Royal School of Design (RSD)",
                title: "The Drape Studio",
                image: "/mobile-assets/studio/drape/drape%20studio%20pic%202.jpeg",
                link: "/arts-drape-studio"
            },

            {
                school: "Royal School of Design (RSD)",
                title: "The Fashion Studio",
                image: "/mobile-assets/studio/fashion-studio/fashion%20studio%20pic%201.jpeg",
                link: "/facilities-fashion-studio"
            },

            {
                school: "Royal School of Environmental and Earth Sciences (RSEES)",
                title: "Cartography Laboratory",
                image: "/mobile-assets/laboratories/Cartography/Photo%203.jpeg",
                link: "/lab-cartography"
            },

            {
                school: "Royal School of Environmental and Earth Sciences (RSEES)",
                title: "Geology Laboratory",
                image: "/mobile-assets/laboratories/new-lab-geology/4.jpg",
                link: "/lab-geology"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Computer Laboratory",
                image: "/mobile-assets/laboratories/comp.png",
                link: "/lab-computer"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Civil Engineering Laboratory",
                image: "/mobile-assets/laboratories/civil.png",
                link: "/lab-civilengineering"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Mechanical Engineering Laboratory",
                image: "/mobile-assets/laboratories/mechanical.png",
                link: "/lab-mechanical"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Electronics Laboratory",
                image: "/mobile-assets/laboratories/electronic.png",
                link: "/lab-electronic"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Electrical Engineering Laboratory",
                image: "/mobile-assets/laboratories/electrical.png",
                link: "/lab-electrical"
            },

            {
                school: "Royal School of Engineering and Technology (RSET)",
                title: "Electronics Engineering Laboratory",
                image: "/mobile-assets/Electronics/Experiment%20on%20Flip%20Flop.jpeg",
                link: "/lab-electronics"
            },

            {
                school: "Royal School of Fine Arts (RSFA)",
                title: "Art Studio Cum Gallery",
                image: "/mobile-assets/new-labs/lab-fine-arts-new/headimg.jpeg",
                link: "/arts-studio"
            },

            {
                school: "Royal School of Hotel Management (RSHM)",
                title: "Hotel Management Laboratory",
                image: "/mobile-assets/laboratories/hotelmanagement.png",
                link: "/lab-hotelmanagement"
            },

            {
                school: "Royal School of Information Technology (RSIT)",
                title: "Computer Laboratory",
                image: "/mobile-assets/laboratories/comp.png",
                link: "/lab-computer"
            },

            {
                school: "Royal School of Life Sciences (RSLSC)",
                title: "Botany Laboratory",
                image: "/mobile-assets/botany-head.png",
                link: "/lab-botany"
            },

            {
                school: "Royal School of Life Sciences (RSLSC)",
                title: "Zoology Laboratory",
                image: "/mobile-assets/laboratories/zoology.png",
                link: "/lab-zoology"
            },

            {
                school: "Royal School of Life Sciences (RSLSC)",
                title: "Forensic Science Laboratory",
                image: "/mobile-assets/laboratories/forensic.png",
                link: "/lab-forensic-lab"
            },

            {
                school: "Royal School of Life Sciences (RSLSC)",
                title: "Forestry and Environmental Science Laboratory",
                image: "/mobile-assets/lab-forestry/f11.png",
                link: "/lab-forestry-environmental-science"
            },

            {
                school: "Royal School of Languages (RSL)",
                title: "Language Laboratory",
                image: "/mobile-assets/laboratories/language.png",
                link: "/lab-language-lab"
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                title: "Diagnostic Laboratory",
                image: "/mobile-assets/laboratories/diagnostic.png",
                link: "/lab-diagnostic"
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                title: "Optometry Laboratory",
                image: "/mobile-assets/laboratories/opto.png",
                link: "/lab-optometry"
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                title: "Anesthesia & Operation Theatre Technology",
                image: "/mobile-assets/laboratories/operation.png",
                link: "/lab-operation_theater"
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                title: "Physiotherapy Laboratory",
                image: "/mobile-assets/laboratories/physiotherapy.png",
                link: "/lab-physiotherapy"
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                title: "Radiology Laboratory",
                image: "/mobile-assets/laboratories/radiology.png",
                link: "/lab-radiography"
            },

            {
                school: "Royal School of Nursing (RSN)",
                title: "Nursing Laboratory",
                image: "/mobile-assets/laboratories/nursing.png",
                link: "/lab-nursing"
            },

            {
                school: "Royal School of Pharmacy (RSP)",
                title: "Pharmacutical Laboratory",
                image: "/mobile-assets/laboratories/pharmacy.png",
                link: "/lab-pharmacy"
            },

            {
                school: "EV",
                title: "EV Laboratory",
                image: "/mobile-assets/laboratories/ev.jpeg",
                link: "/lab-ev-lab"
            },

            {
                school: "Observatory",
                title: "Royal Observatory",
                image: "/mobile-assets/laboratories/observe.jpeg",
                link: "/lab-astronomy"
            }
        ];

        /* =========================
           ELEMENTS
        ========================= */

        const labsGrid = document.getElementById("labsGrid");
        const labsSearch = document.getElementById("labsSearch");
        const labsSchoolFilter = document.getElementById("labsSchoolFilter");

        /* =========================
           SCHOOL DROPDOWN
        ========================= */

        const schools = [...new Set(labsData.map(item => item.school))];

        schools.forEach(school => {

            const option = document.createElement("option");

            option.value = school;
            option.textContent = school;

            labsSchoolFilter.appendChild(option);

        });



        /* =========================
           RENDER
        ========================= */

        function renderLabs(data) {

            if (!data.length) {

                labsGrid.innerHTML = `

            <div class="labs-empty">
                No Laboratories Found
            </div>

        `;

                return;

            }

            labsGrid.innerHTML = data.map((item, index) => `

        <div class="labs-card" style="animation-delay:${index * 0.08}s">

            <div class="labs-image">
                <img src="${item.image}" alt="${item.title}">
            </div>

            <div class="labs-content">

                <div class="labs-school">
                    ${item.school}
                </div>

                <div class="labs-name">
                    ${item.title}
                </div>


                <a href="${item.link}" class="labs-btn">
                    DISCOVER MORE
                </a>

            </div>

        </div>

    `).join('');

        }

        function filterLabs() {

            const searchValue = labsSearch.value.toLowerCase();

            const schoolValue = labsSchoolFilter.value;

            const filtered = labsData.filter(item => {

                const matchSearch =
                    item.title.toLowerCase().includes(searchValue) ||
                    item.school.toLowerCase().includes(searchValue);

                const matchSchool =
                    schoolValue === "all" ||
                    item.school === schoolValue;

                return matchSearch && matchSchool;

            });

            renderLabs(filtered);

        }
        /* =========================
           EVENTS
        ========================= */

        labsSearch.addEventListener("input", filterLabs);

        labsSchoolFilter.addEventListener("change", filterLabs);


        /* =========================
           INITIAL
        ========================= */

        renderLabs(labsData);
    </script>

@endsection
