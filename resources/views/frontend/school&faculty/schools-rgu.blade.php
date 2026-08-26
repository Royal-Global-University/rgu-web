@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('assets/img/academics-schools-faculty/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Schools & Faculty</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Academics / Schools & Faculty
            </div>
        </div>

    </section>

    <style>
        .school-directory {
            background: #eef2f8;
            padding: 80px 0;
        }

        /*************************
    Heading
    *************************/

        .school-title {
            text-align: center;
            max-width: 900px;
            margin: auto;
            margin-bottom: 45px;
        }

        .school-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            color: #294b84;
            margin-bottom: 18px;
        }

        .school-title p {
            color: #5d6777;
            line-height: 1.9;
            font-size: 15px;
        }


        /*************************
    Blue Box
    *************************/

        .school-panel {
            background: linear-gradient(180deg, #294b84, #081d4f);
            border-radius: 42px;
            padding: 45px;
        }

        .school-panel h3 {
            color: #fff;
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            margin-bottom: 30px;
        }

        /*************************
    Search
    *************************/

        .department-search {
            display: flex;
            width: 420px;
        }

        .department-dropdown {

            flex: 1;
            position: relative;

        }

        .department-selected {

            height: 48px;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            border-radius: 8px 0 0 8px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 18px;

            cursor: pointer;

            user-select: none;

        }

        .department-selected i {

            transition: .3s;

        }

        .department-selected.active i {

            transform: rotate(180deg);

        }

        .department-menu {

            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;

            background: #fff;

            border-radius: 0 0 12px 12px;

            box-shadow: 0 20px 50px rgba(0, 0, 0, .18);

            display: none;

            max-height: 420px;

            overflow: auto;

            z-index: 999;

        }

        .department-menu.show {

            display: block;

        }

        .school-group {

            border-bottom: 1px solid #ececec;

        }

        .school-header {

            padding: 14px 18px;

            font-weight: 600;

            color: #294b84;

            display: flex;

            justify-content: space-between;

            cursor: pointer;

            transition: .25s;

        }

        .school-header:hover {

            background: #f5f8ff;

        }

        .school-header i {

            transition: .3s;

        }

        .school-group.open .school-header i {

            transform: rotate(180deg);

        }

        .department-items {

            display: none;

            padding: 0 0 10px;

        }

        .school-group.open .department-items {

            display: block;

        }

        .department-item {

            padding: 12px 40px;

            cursor: pointer;

            transition: .25s;

            color: #555;

            font-size: 14px;

        }

        .department-item:hover {

            background: #294b84;

            color: #fff;

        }

        .department-item.selected {

            background: #e6673a;

            color: #fff;

        }

        .school-search-row {

            display: flex;
            justify-content: center;
            gap: 18px;
            margin-bottom: 35px;
            flex-wrap: wrap;

        }

        .department-search,
        .faculty-search {

            display: flex;
            align-items: center;
            width: 370px;

        }

        .department-search select,
        .faculty-search input {

            width: 100%;
            height: 48px;
            border: none;
            outline: none;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            padding: 0 18px;
            font-size: 14px;
            border-radius: 8px 0 0 8px;

        }

        .department-search select {

            cursor: pointer;

        }

        .department-search select option {

            color: #222;

        }

        .faculty-search input::placeholder {

            color: #d9dce4;

        }

        .department-search button,
        .faculty-search button {

            width: 55px;
            height: 48px;
            border: none;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            border-left: 1px solid rgba(255, 255, 255, .15);
            border-radius: 0 8px 8px 0;
            transition: .3s;

        }

        .department-search button:hover,
        .faculty-search button:hover {

            background: #e76638;

        }

        /*=========================================================
             FACULTY SEARCH RESULTS
            =========================================================*/

        .faculty-search {
            position: relative;
        }

        .faculty-search-results {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            right: 0;
            display: none;
            max-height: 420px;
            overflow-y: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 35px rgba(0, 0, 0, .18);
            z-index: 9999;
            text-align: left;
        }

        .faculty-search-results.show {
            display: block;
        }

        .faculty-search-result {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 13px 15px;
            border-bottom: 1px solid #edf0f5;
            transition: .2s ease;
        }

        .faculty-search-result:last-child {
            border-bottom: 0;
        }

        .faculty-search-result:hover {
            background: #f6f8fc;
        }

        .faculty-result-icon {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: 50%;
            background: #20315f;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .faculty-result-content {
            min-width: 0;
            flex: 1;
        }

        .faculty-result-name {
            display: block;
            color: #20315f;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.35;
            margin-bottom: 5px;
        }

        .faculty-result-school {
            display: flex;
            align-items: flex-start;
            gap: 6px;
            color: #68748a;
            font-size: 12px;
            line-height: 1.45;
            text-decoration: none;
            padding: 2px 0;
        }

        .faculty-result-school:hover {
            color: #e76638;
        }

        .faculty-result-school i {
            color: #e76638;
            margin-top: 2px;
        }

        .faculty-search-state {
            padding: 18px;
            color: #68748a;
            font-size: 13px;
            text-align: center;
        }

        @media (max-width: 575px) {
            .faculty-search-results {
                max-height: 360px;
            }
        }


        /*************************
    Cards
    *************************/

        .school-grid {

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;

        }

        .school-card {

            background: #dfe9f8;
            border-radius: 10px;
            overflow: hidden;
            transition: .35s;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .12);

        }

        .school-card:hover {

            transform: translateY(-8px);

        }

        .school-card img {

            width: 100%;
            height: 190px;
            object-fit: cover;

        }

        .school-card-body {

            padding: 18px;

        }

        .school-card h4 {

            font-family: 'Playfair Display', serif;
            font-size: 23px;
            line-height: 1.45;
            color: #233d72;
            margin-bottom: 18px;
            min-height: 95px;

        }

        .school-buttons {

            display: flex;

            gap: 12px;

        }

        .school-buttons a {

            flex: 1;

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 8px;

        }

        .department-btn {

            background: #e6673a;
            color: #fff;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 4px;
            text-decoration: none;
            transition: .3s;

        }

        .department-btn:hover {

            background: #cf5328;
            color: #fff;

        }

        .faculty-btn {

            background: #fff;
            border: 1px solid #bccce6;
            color: #294b84;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 4px;
            text-decoration: none;
            transition: .3s;

        }

        .faculty-btn:hover {

            background: #294b84;
            color: #fff;

        }


        /*************************
    Quick Links
    *************************/

        .quick-access-box {

            margin-top: 35px;
            background: #eef3fb;
            border: 1px solid #cdd9ea;
            border-radius: 10px;
            padding: 18px;
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;

        }

        .quick-access-box a {

            background: #fff;
            border: 1px solid #c9d6ea;
            padding: 12px 20px;
            border-radius: 5px;
            color: #294b84;
            font-size: 13px;
            text-decoration: none;
            transition: .3s;

        }

        .quick-access-box a:hover {

            background: #294b84;
            color: #fff;

        }

        /*************************
    Apply Button
    *************************/

        .apply-btn-rgu {

            background: #e6673a !important;
            color: #fff !important;
            min-width: 210px;
            text-align: center;
            border: none !important;
            animation: pulseApply 1.8s infinite;

        }

        @keyframes pulseApply {

            0% {

                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(230, 103, 58, .45);

            }

            70% {

                transform: scale(1.03);
                box-shadow: 0 0 0 18px rgba(230, 103, 58, 0);

            }

            100% {

                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(230, 103, 58, 0);

            }

        }


        /*************************
    Responsive
    *************************/

        @media(max-width:1199px) {

            .school-grid {

                grid-template-columns: repeat(2, 1fr);

            }

        }

        @media(max-width:991px) {

            .school-directory {

                padding: 60px 0;

            }

            .school-panel {

                padding: 30px;

                border-radius: 28px;

            }

            .school-title h2 {

                font-size: 34px;

            }

            .school-panel h3 {

                font-size: 32px;

            }

            .department-search,
            .faculty-search {

                width: 100%;

            }

            .school-grid {

                grid-template-columns: 1fr;

            }

            .school-card img {

                height: 240px;

            }

            .school-card h4 {

                min-height: auto;

            }

            .quick-access-box {

                justify-content: flex-start;

            }

            .apply-btn-rgu {

                width: 100%;

            }

        }

        @media(max-width:576px) {

            .school-title h2 {

                font-size: 30px;

            }

            .school-panel h3 {

                font-size: 28px;

            }

            .school-card img {

                height: 220px;

            }

            .department-search select,
            .faculty-search input {

                font-size: 13px;

            }

        }
    </style>

    <section class="school-directory">

        <div class="container">
            <!-- Heading -->
            <div class="school-title">
                <h2>Schools At RGU</h2>

                <p>
                    Explore the diverse schools at RGU, each offering industry-focused programmes designed to build
                    practical skills and strong career foundations. With expert faculty, modern facilities,
                    and real-world learning, our schools prepare you to succeed in a dynamic global environment.
                </p>
            </div>

        </div>

        <!-- Blue Section -->

        <div class="school-panel">

            <h3>Academics & Programs</h3>

            <!-- Search -->

            <div class="school-search-row">

                <!-- Department Dropdown -->

                <div class="department-search">

                    <div class="department-dropdown">

                        <div class="department-selected" id="departmentSelected">

                            <span id="selectedDepartment">
                                Search By Department
                            </span>

                            <i class="bi bi-chevron-down" id="departmentArrow"></i>

                        </div>

                        <div class="department-menu" id="departmentMenu">

                        </div>

                    </div>

                    <button id="departmentSearchBtn">
                        <i class="bi bi-search"></i>
                    </button>

                </div>

                <!-- Faculty Search -->

                <div class="faculty-search">

                    <input type="text" placeholder="Search By Faculty" id="facultySearch" autocomplete="off"
                        aria-label="Search By Faculty">

                    <button type="button" id="facultySearchBtn" aria-label="Search faculty">
                        <i class="bi bi-search"></i>
                    </button>

                    <div class="faculty-search-results" id="facultySearchResults" role="listbox"
                        aria-label="Faculty search results"></div>

                </div>

            </div>

            <!-- Cards -->

            <div class="school-grid" id="schoolGrid">

            </div>

        </div>

        <!-- Quick Access -->

        <div class="container">
            <div class="quick-access-box">


                <a href="https://www.rgu.ac/admission-programs-fees-structure">
                    Fee Structure
                </a>

                <a href="https://www.rgu.ac/programs">
                    Eligibility Criteria
                </a>

                <a href="https://www.rgu.ac/phd">
                    Doctoral Programme
                </a>

                <a href="https://www.rgu.ac/scholarship&funding">
                    Scholarships
                </a>

                <a href="https://admissions.rgu.ac/" class="apply-btn-rgu">
                    Apply Now
                </a>

            </div>
        </div>

    </section>

    <script>
        /*=========================================================
         SCHOOL DIRECTORY DATA
        =========================================================*/

        const schools = [


            {
                id: "icsp",

                name: "Integrated Civil Service Programme",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/ias-banner.png",

                departmentPage: "https://www.rgu.ac/ias-courses",

                facultyPage: "",

                departments: [

                    {
                        name: "Integrated Civil Service Programme",
                        url: "https://www.rgu.ac/ias-courses"
                    }

                ]
            },
            {
                id: "rsaf",

                name: "Royal School of Agriculture and Forestry (RSAF)",

                image: "https://www.rgu.ac/mobile-assets/agri.png",

                departmentPage: "https://www.rgu.ac/royal-school-of-agriculture",

                facultyPage: "https://www.rgu.ac/faculty-agriculture",

                departments: [

                    {
                        name: "Royal School of Agriculture and Forestry (RSAF)",
                        url: "https://www.rgu.ac/royal-school-of-agriculture"
                    }

                ]
            },
            {
                id: "rsa",

                name: "Royal School of Architecture (RSA)",

                image: "assets/img/academics-schools-faculty/architecture.png",

                departmentPage: "https://www.rgu.ac/department-architecture",

                facultyPage: "https://www.rgu.ac/faculty-architecture",

                departments: [

                    {
                        name: "Royal School of Architecture (RSA)",
                        url: "https://www.rgu.ac/department-architecture"
                    }

                ]
            },
            {
                id: "rsaps",

                name: "Royal School of Applied & Pure Sciences (RSAPS)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/applied.001.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-applied-pure-science",

                facultyPage: "https://www.rgu.ac/faculty-applied-purescience",

                departments: [

                    {
                        name: "Department of Physics",
                        url: "https://www.rgu.ac/department-physics"
                    },

                    {
                        name: "Department of Chemistry",
                        url: "https://www.rgu.ac/department-chemistry"
                    },

                    {
                        name: "Department of Mathematics",
                        url: "https://www.rgu.ac/department-mathematics"
                    }

                ]
            },
            {
                id: "rsb",

                name: "Royal School of Business (RSB)",

                image: "assets/img/academics-schools-faculty/rsb.png",

                departmentPage: "https://www.rgu.ac/department-business",

                facultyPage: "https://www.rgu.ac/faculty-business",

                departments: [

                    {
                        name: "Royal School of Business (RSB)",
                        url: "https://www.rgu.ac/department-business"
                    }

                ]
            },
            {
                id: "rsbas",

                name: "Royal School of Behavioral & Allied Sciences (RSBAS)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/behavioral.jpeg",

                departmentPage: "https://www.rgu.ac/department-psychology",

                facultyPage: "https://www.rgu.ac/faculty-allied-sciences",

                departments: [

                    {
                        name: "Royal School of Behavioral & Allied Sciences (RSBAS)",
                        url: "https://www.rgu.ac/department-psychology"
                    }

                ]
            },
            {
                id: "rsbsc",

                name: "Royal School of Bio-sciences (RSBSC)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/rsbsc-school-header.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-bio-science",

                facultyPage: "https://www.rgu.ac/faculty-bio-sciences",

                departments: [

                    {
                        name: "Department of Biotechnology",
                        url: "https://www.rgu.ac/department-biotechnology"
                    },

                    {
                        name: "Department of Microbiology",
                        url: "https://www.rgu.ac/department-microbiology"
                    },

                    {
                        name: "Department of Food Technology",
                        url: "https://www.rgu.ac/department-food-technology"
                    }

                ]
            },
            {
                id: "rsc",

                name: "Royal School of Commerce (RSC)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/commerce.jpeg",

                departmentPage: "https://www.rgu.ac/department-commerce",

                facultyPage: "https://www.rgu.ac/faculty-commerce",

                departments: [

                    {
                        name: "Royal School of Commerce (RSC)",
                        url: "https://www.rgu.ac/department-commerce"
                    }
                ]
            },
            {
                id: "rscom",

                name: "Royal School of Communications & Media (RSCOM)",

                image: "assets/img/academics-schools-faculty/rscom.png",

                departmentPage: "https://www.rgu.ac/department-communications-media",

                facultyPage: "https://www.rgu.ac/rscom-faculty",

                departments: [

                    {
                        name: "Royal School of Communications & Media (RSCOM)",
                        url: "https://www.rgu.ac/department-communications-media"
                    }

                ]
            },
            {
                id: "rsd",

                name: "Royal School of Design (RSD)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/design.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-design",

                facultyPage: "https://www.rgu.ac/faculty-design",

                departments: [

                    {
                        name: "Department of Product Design",
                        url: "https://www.rgu.ac/department-product-design"
                    },

                    {
                        name: "Department of Communication Design",
                        url: "https://www.rgu.ac/department-communication-design"
                    },

                    {
                        name: "Department of Interior Design",
                        url: "https://www.rgu.ac/department-interior-design"
                    },

                    {
                        name: "Department of Graphic Design",
                        url: "https://www.rgu.ac/department-graphic-design"
                    },

                    {
                        name: "Department of Fashion Design",
                        url: "https://www.rgu.ac/department-fashion-design"
                    }
                ]
            },
            {
                id: "rsees",

                name: "Royal School of Environmental and Earth Sciences (RSEES)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/earth.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-enviroment-science",

                facultyPage: "https://www.rgu.ac/faculty-environmental-earth",

                departments: [

                    {
                        name: "Department of Geography and Geoinformatics",
                        url: "https://www.rgu.ac/department-geography-geoinformatics"
                    },

                    {
                        name: "Department of Environmental Science",
                        url: "https://www.rgu.ac/department-environmental-sciences"
                    },

                    {
                        name: "Department of Geology",
                        url: "https://www.rgu.ac/department-geology"
                    }

                ]
            },
            {
                id: "rset",

                name: "Royal School of Engineering and Technology (RSET)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/soet.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-engineering-technology",

                facultyPage: "https://www.rgu.ac/faculty-engineeringtechnology",

                departments: [

                    {
                        name: "Department of Computer Science",
                        url: "https://www.rgu.ac/department-cse"
                    },

                    {
                        name: "Department of Mechanical Engineering",
                        url: "https://www.rgu.ac/department-mechanical-engineering"
                    },

                    {
                        name: "Department of Civil Engineering",
                        url: "https://www.rgu.ac/department-civil-engineering"
                    }

                ]
            },
            {
                id: "rsfa",

                name: "Royal School of Fine Arts (RSFA)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/art.jpeg",

                departmentPage: "https://www.rgu.ac/department-fine-arts",

                facultyPage: "https://www.rgu.ac/faculty-finearts",

                departments: [

                    {
                        name: "Royal School of Fine Arts (RSFA)",
                        url: "https://www.rgu.ac/department-fine-arts"
                    }

                ]
            },
            {
                id: "rsfd",

                name: "Royal School of Fashion Design (RSFD)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/fashion.jpeg",

                departmentPage: "https://www.rgu.ac/department-fashion-design",

                facultyPage: "https://www.rgu.ac/faculty-fashion-design",

                departments: [

                    {
                        name: "Royal School of Fashion Design (RSFD)",
                        url: "https://www.rgu.ac/department-fashion-design"
                    }

                ]
            },
            {
                id: "rshss",

                name: "Royal School of Humanities (RSHSS)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/humanities.jpeg",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-humanities",

                facultyPage: "https://www.rgu.ac/faculty-humanities-social",

                departments: [

                    {
                        name: "Department of Economics",
                        url: "https://www.rgu.ac/department-economics"
                    },

                    {
                        name: "Department of History",
                        url: "https://www.rgu.ac/department-history"
                    },

                    {
                        name: "Department of Public Administration",
                        url: "https://www.rgu.ac/department-of-political-science-public-administration"
                    },

                    {
                        name: "Department of Sociology",
                        url: "https://www.rgu.ac/department-sociology"
                    },

                    {
                        name: "Department of Social Work",
                        url: "https://www.rgu.ac/department-social-work"
                    },

                    {
                        name: "Department of IKS",
                        url: "https://www.rgu.ac/department-IKS"
                    }

                ]
            },
            {
                id: "rshm",

                name: "Royal School of Hotel Management (RSHM)",

                image: "assets/img/academics-schools-faculty/hotel.png",

                departmentPage: "https://www.rgu.ac/department-hotel-management",

                facultyPage: "https://www.rgu.ac/faculty-hotel-management",

                departments: [

                    {
                        name: "Royal School of Hotel Management (RSHM)",
                        url: "https://www.rgu.ac/department-hotel-management"
                    }

                ]
            },
            {
                id: "rsit",

                name: "Royal School of Information Technology (RSIT)",

                image: "assets/img/academics-schools-faculty/rsit.png",

                departmentPage: "https://www.rgu.ac/department-information-technology",

                facultyPage: "https://www.rgu.ac/faculty-information-technology",

                departments: [

                    {
                        name: "Royal School of Information Technology (RSIT)",
                        url: "https://www.rgu.ac/department-information-technology"
                    }

                ]
            },
            {
                id: "rsla",

                name: "Royal School of Law & Administration (RSLA)",

                image: "https://www.rgu.ac/mobile-assets/school-rgu/law.jpeg",

                departmentPage: "https://www.rgu.ac/department-law",

                facultyPage: "https://www.rgu.ac/faculty-law-administration",

                departments: [

                    {
                        name: "Royal School of Law & Administration (RSLA)",
                        url: "https://www.rgu.ac/department-law"
                    }

                ]
            },
            {
                id: "rslsc",

                name: "Royal School of Life Sciences (RSLSC)",

                image: "assets/img/academics-schools-faculty/rslsc.png",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-life-science",

                facultyPage: "https://www.rgu.ac/faculty-lifesciences",

                departments: [

                    {
                        name: "Department of Botany",
                        url: "https://www.rgu.ac/department-botany"
                    },

                    {
                        name: "Department of Zoology",
                        url: "https://www.rgu.ac/department-zoology"
                    },

                    {
                        name: "Department of Forensic Science",
                        url: "https://www.rgu.ac/department-forensic-sciences"
                    },

                    {
                        name: "Department of Forestry",
                        url: "https://www.rgu.ac/department-forestry"
                    }

                ]
            },
            {
                id: "rsl",

                name: "Royal School of Languages (RSL)",

                image: "assets/img/academics-schools-faculty/languages.png",

                departmentPage: "https://www.rgu.ac/royal-school-of-languages",

                facultyPage: "https://www.rgu.ac/faculty-languages",

                departments: [

                    {
                        name: "Department of English",
                        url: "https://www.rgu.ac/department-english"
                    },

                    {
                        name: "Department of Assamese",
                        url: "https://www.rgu.ac/department-assamese"
                    }

                ]
            },
            {
                id: "rslisc",

                name: "Royal School of Library & Information Science (RSLISC)",

                image: "assets/img/academics-schools-faculty/library.png",

                departmentPage: "https://www.rgu.ac/department-library-information",

                facultyPage: "https://www.rgu.ac/faculty-librarysciences",

                departments: [

                    {
                        name: "Royal School of Library & Information Science (RSLISC)",
                        url: "https://www.rgu.ac/department-library-information"
                    }
                ]
            },
            {
                id: "rsmas",

                name: "Royal School of Medical & Allied Science (RSMAS)",

                image: "assets/img/academics-schools-faculty/rsmas.png",

                departmentPage: "https://www.rgu.ac/royal-s-school-of-medical-allied-science",

                facultyPage: "https://www.rgu.ac/faculty-medical&allidesciences",

                departments: [

                    {
                        name: "Department of Physiotherapy",
                        url: "https://www.rgu.ac/department-physiotherapy"
                    },

                    {
                        name: "Department of Optometry",
                        url: "https://www.rgu.ac/department-optometry"
                    },

                    {
                        name: "Department of Anaesthesia and Operation Theatre Technology",
                        url: "https://www.rgu.ac/department-operationtheatre"
                    },

                    {
                        name: "Department of Medical Laboratory Sciences",
                        url: "https://www.rgu.ac/department-medical-lab"
                    },

                    {
                        name: "Department of Medical Radiology and Imaging Technology",
                        url: "https://www.rgu.ac/deptment-radiography"
                    },

                    {
                        name: "Department of Food Science & Nutrition",
                        url: "https://www.rgu.ac/departement-food-science&nutrition"
                    }
                ]
            },
            {
                id: "rsn",

                name: "Royal School of Nursing (RSN)",

                image: "assets/img/academics-schools-faculty/nursing.png",

                departmentPage: "https://www.rgu.ac/department-nursing",

                facultyPage: "https://www.rgu.ac/faculty-nursing",

                departments: [

                    {
                        name: "Royal School of Nursing (RSN)",
                        url: "https://www.rgu.ac/department-nursing"
                    }
                ]
            },
            {
                id: "rsp",

                name: "Royal School of Pharmacy (RSP)",

                image: "assets/img/academics-schools-faculty/pharmacy.png",

                departmentPage: "https://www.rgu.ac/department-pharmacy",

                facultyPage: "https://www.rgu.ac/faculty-pharmacy",

                departments: [

                    {
                        name: "Royal School of Pharmacy (RSP)",
                        url: "https://www.rgu.ac/department-pharmacy"
                    }

                ]
            },
            {
                id: "rspes",

                name: "Royal School of Physical Education and Sports (RSPES)",

                image: "assets/img/academics-schools-faculty/sports.png",

                departmentPage: "https://www.rgu.ac/department-physical-education-and-sports",

                facultyPage: "https://www.rgu.ac/faculty-physical-education-and-sports",

                departments: [

                    {
                        name: "Royal School of Physical Education and Sports (RSPES)",
                        url: "https://www.rgu.ac/department-physical-education-and-sports"
                    }

                ]
            },
            {
                id: "rsps",

                name: "Royal School of Pharmaceutical Sciences",

                image: "https://www.rgu.ac/mobile-assets/phar/pic.png",

                departmentPage: "https://www.rgu.ac/department-pharmaceutical-science",

                facultyPage: "",

                departments: [

                    {
                        name: "Royal School of Pharmaceutical Sciences",
                        url: "https://www.rgu.ac/department-pharmaceutical-science"
                    }
                ]
            },
            {
                id: "rsttm",

                name: "Royal School of Travel & Tourism (RSTTM)",

                image: "https://www.rgu.ac/assets/img/school-rgu/travel.jpeg",

                departmentPage: "https://www.rgu.ac/department-travel",

                facultyPage: "https://www.rgu.ac/faculty-travel-tourism",

                departments: [

                    {
                        name: "Royal School of Travel & Tourism (RSTTM)",
                        url: "https://www.rgu.ac/department-travel"
                    }

                ]
            },

            {
                id: "iks",

                name: "Indian Knowledge Systems (IKS)",

                image: "https://rgu.ac/mobile-assets/school-rgu/IKS%20LOGO-new.jpeg",

                departmentPage: "https://rgu.ac/indian-knowledge-system-cell-about",

                facultyPage: "https://rgu.ac/indian-knowledge-system-cell-composition",

                departments: [

                    {
                        name: "Indian Knowledge Systems (IKS)",
                        url: "https://rgu.ac/indian-knowledge-system-cell-about"
                    }

                ]
            }

        ];
    </script>

    <script>
        /*=========================================================
         GLOBAL VARIABLES
        =========================================================*/

        const schoolGrid = document.getElementById("schoolGrid");

        const departmentMenu = document.getElementById("departmentMenu");

        const departmentSelected = document.getElementById("departmentSelected");

        const selectedDepartment = document.getElementById("selectedDepartment");

        const departmentSearchBtn = document.getElementById("departmentSearchBtn");

        const facultySearch = document.getElementById("facultySearch");

        let selectedDepartmentURL = "";

        let selectedDepartmentName = "";
    </script>

    <script>
        /*=========================================================
        GENERATE SCHOOL CARDS
        =========================================================*/

        function generateSchoolCards() {

            schoolGrid.innerHTML = "";

            schools.forEach((school) => {

                let buttons = "";

                /*-------------------------
                Department Button
                -------------------------*/

                if (school.departments && school.departments.length > 0) {

                    buttons += `

                <a
                    href="${school.departmentPage}"
                    class="department-btn">

                    <i class="bi bi-building"></i>

                    Department

                </a>

            `;

                }

                /*-------------------------
                Faculty Button
                -------------------------*/

                if (school.facultyPage && school.facultyPage.trim() !== "") {

                    buttons += `

                <a
                    href="${school.facultyPage}"
                    class="faculty-btn">

                    <i class="bi bi-people"></i>

                    Faculty

                </a>

            `;

                }

                /*-------------------------
                Card
                -------------------------*/

                const card = document.createElement("div");

                card.className = "school-card";

                card.innerHTML = `

            <img
                src="${school.image}"
                alt="${school.name}"
                loading="lazy">

            <div class="school-card-body">

                <h4>${school.name}</h4>

                <div class="school-buttons">

                    ${buttons}

                </div>

            </div>

        `;

                schoolGrid.appendChild(card);

            });

        }
    </script>

    <script>
        /*=========================================================
        GENERATE DEPARTMENT DROPDOWN
        =========================================================*/

        function generateDepartmentDropdown() {

            departmentMenu.innerHTML = "";

            schools.forEach((school) => {

                const schoolGroup = document.createElement("div");

                schoolGroup.className = "school-group";

                /*-------------------------
                School Header
                --------------------------*/

                const schoolHeader = document.createElement("div");

                schoolHeader.className = "school-header";

                schoolHeader.innerHTML = `

            <span>${school.name}</span>

            <i class="bi bi-chevron-down"></i>

        `;

                /*-------------------------
                Department Container
                --------------------------*/

                const departmentItems = document.createElement("div");

                departmentItems.className = "department-items";

                /*-------------------------
                Departments
                --------------------------*/

                school.departments.forEach((department) => {

                    const item = document.createElement("div");

                    item.className = "department-item";

                    item.dataset.name = department.name;

                    item.dataset.url = department.url;

                    item.innerHTML = `

                <i class="bi bi-dot"></i>

                <span>${department.name}</span>

            `;

                    departmentItems.appendChild(item);

                });

                schoolGroup.appendChild(schoolHeader);

                schoolGroup.appendChild(departmentItems);

                departmentMenu.appendChild(schoolGroup);

            });

        }
    </script>

    <script>
        /*=========================================================
     DROPDOWN LOGIC
    =========================================================*/

        function openDepartmentDropdown() {

            departmentMenu.classList.add("show");

            departmentSelected.classList.add("active");

        }

        function closeDepartmentDropdown() {

            departmentMenu.classList.remove("show");

            departmentSelected.classList.remove("active");

        }

        function toggleDepartmentDropdown() {

            departmentMenu.classList.toggle("show");

            departmentSelected.classList.toggle("active");

        }
    </script>

    <script>
        /*=========================================================
         INITIALISE DROPDOWN
        =========================================================*/

        function initialiseDropdown() {

            departmentSelected.addEventListener("click", function(e) {

                e.stopPropagation();

                toggleDepartmentDropdown();

            });

            document.addEventListener("click", function(e) {

                if (!e.target.closest(".department-dropdown")) {

                    closeDepartmentDropdown();

                }

            });

        }
    </script>

    <script>
        /*=========================================================
         INITIALISE ACCORDION
        =========================================================*/

        function initialiseAccordion() {

            const headers = document.querySelectorAll(".school-header");

            headers.forEach((header) => {

                header.addEventListener("click", function() {

                    const currentGroup = this.parentElement;

                    document.querySelectorAll(".school-group").forEach((group) => {

                        if (group !== currentGroup) {

                            group.classList.remove("open");

                        }

                    });

                    currentGroup.classList.toggle("open");

                });

            });

        }
    </script>

    <script>
        /*=========================================================
         INITIALISE DEPARTMENT SELECTION
        =========================================================*/

        function initialiseDepartmentSelection() {

            const items = document.querySelectorAll(".department-item");

            items.forEach((item) => {

                item.addEventListener("click", function() {

                    document.querySelectorAll(".department-item").forEach((i) => {

                        i.classList.remove("selected");

                    });

                    this.classList.add("selected");

                    selectedDepartmentName = this.dataset.name;

                    selectedDepartmentURL = this.dataset.url;

                    selectedDepartment.textContent = selectedDepartmentName;

                    closeDepartmentDropdown();

                });

            });

        }
    </script>

    <script>
        /*=========================================================
         SEARCH
        =========================================================*/

        function initialiseSearch() {

            departmentSearchBtn.addEventListener("click", function() {

                if (!selectedDepartmentURL) {

                    alert("Please select a department.");

                    return;

                }

                window.location.href = selectedDepartmentURL;

            });

        }
    </script>

    <script>
        /*=========================================================
             FACULTY SEARCH - AUTO LOAD FROM FACULTY PAGES

             Faculty names are NOT maintained manually here.
             The existing `schools` array supplies every facultyPage URL.

             This uses same-origin fetch, so the directory page should be
             hosted on rgu.ac along with the faculty pages.
            =========================================================*/

        let facultyDatabase = [];
        let facultyDatabasePromise = null;

        function normaliseFacultyName(name) {
            return String(name || "")
                .toLowerCase()
                .replace(/[\u2018\u2019']/g, "")
                .replace(/[.(),]/g, " ")
                .replace(/\b(professor|prof|doctor|dr|mr|mrs|ms|miss|ar|adv)\b/g, " ")
                .replace(/\s+/g, " ")
                .trim();
        }

        function escapeFacultyHTML(value) {
            return String(value || "")
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        async function fetchFacultyPage(school) {
            try {
                const response = await fetch(school.facultyPage, {
                    method: "GET",
                    credentials: "same-origin",
                    cache: "no-store"
                });

                if (!response.ok) throw new Error(`HTTP ${response.status}`);

                return {
                    school,
                    html: await response.text()
                };

            } catch (error) {
                console.warn(
                    `Faculty page could not be loaded for ${school.name}:`,
                    school.facultyPage,
                    error
                );
                return null;
            }
        }

        function extractFacultyFromPage(html, school) {

            const parser = new DOMParser();
            const doc = parser.parseFromString(html, "text/html");

            /* RGU faculty pages currently use H3 for faculty names. */
            let headings = Array.from(doc.querySelectorAll("h3"));

            /* Fallback if a future faculty page uses H4. */
            if (!headings.length) {
                headings = Array.from(doc.querySelectorAll("h4"));
            }

            const faculty = [];

            headings.forEach((heading) => {

                const name = heading.textContent.replace(/\s+/g, " ").trim();
                if (!name) return;

                const searchName = normaliseFacultyName(name);

                /* Prevent footer/utility headings from becoming faculty. */
                if (!searchName || searchName.split(" ").length < 2) return;

                let profileURL = "";
                let node = heading.parentElement;
                let depth = 0;

                while (node && depth < 5) {

                    const profileLink = Array.from(node.querySelectorAll("a"))
                        .find(link =>
                            link.textContent.trim().toLowerCase() === "view profile"
                        );

                    if (profileLink) {
                        const href = profileLink.getAttribute("href");
                        if (href) {
                            try {
                                profileURL = new URL(href, school.facultyPage).href;
                            } catch (e) {
                                profileURL = "";
                            }
                        }
                        break;
                    }

                    node = node.parentElement;
                    depth++;
                }

                faculty.push({
                    name,
                    searchName,
                    schoolName: school.name,
                    schoolURL: school.facultyPage,
                    profileURL
                });
            });

            return faculty;
        }

        async function loadAllFaculty() {

            if (facultyDatabasePromise) return facultyDatabasePromise;

            facultyDatabasePromise = (async () => {

                const facultySchools = schools.filter(school =>
                    school.facultyPage && school.facultyPage.trim() !== ""
                );

                const pages = await Promise.all(
                    facultySchools.map(fetchFacultyPage)
                );

                const allFaculty = [];

                pages.filter(Boolean).forEach(({
                    html,
                    school
                }) => {
                    allFaculty.push(...extractFacultyFromPage(html, school));
                });

                /*
                 * Same person may appear under several departments on one
                 * faculty page. Remove only same-name/same-school duplicates.
                 * The same person in different schools remains searchable.
                 */
                const unique = new Map();

                allFaculty.forEach(faculty => {
                    const key = `${faculty.searchName}|||${faculty.schoolName}`;
                    if (!unique.has(key)) unique.set(key, faculty);
                });

                facultyDatabase = Array.from(unique.values())
                    .sort((a, b) => a.name.localeCompare(b.name));

                console.log(`Faculty directory loaded: ${facultyDatabase.length} entries.`);

                return facultyDatabase;

            })().catch(error => {
                console.error("Faculty directory loading failed:", error);
                facultyDatabasePromise = null;
                facultyDatabase = [];
                return [];
            });

            return facultyDatabasePromise;
        }

        /* Search NAME ONLY. All query words must occur in the name. */
        function searchFacultyByName(query) {

            const normalisedQuery = normaliseFacultyName(query);
            if (!normalisedQuery) return [];

            const queryWords = normalisedQuery.split(" ");

            return facultyDatabase.filter(faculty =>
                queryWords.every(word => faculty.searchName.includes(word))
            );
        }

        /* Group a person who appears on more than one school's page. */
        function groupFacultyResults(results) {

            const groups = new Map();

            results.forEach(faculty => {

                if (!groups.has(faculty.searchName)) {
                    groups.set(faculty.searchName, {
                        name: faculty.name,
                        schools: []
                    });
                }

                const group = groups.get(faculty.searchName);

                if (!group.schools.some(school =>
                        school.name === faculty.schoolName
                    )) {
                    group.schools.push({
                        name: faculty.schoolName,
                        url: faculty.schoolURL
                    });
                }
            });

            return Array.from(groups.values());
        }

        function renderFacultyResults(query) {

            const resultsBox = document.getElementById("facultySearchResults");
            if (!resultsBox) return;

            const results = searchFacultyByName(query);
            resultsBox.innerHTML = "";

            if (!query.trim()) {
                resultsBox.classList.remove("show");
                return;
            }

            if (!results.length) {
                resultsBox.innerHTML = `
                    <div class="faculty-search-state">
                        No faculty found for <strong>${escapeFacultyHTML(query)}</strong>
                    </div>
                `;
                resultsBox.classList.add("show");
                return;
            }

            const grouped = groupFacultyResults(results);

            grouped.slice(0, 20).forEach(faculty => {

                const result = document.createElement("div");
                result.className = "faculty-search-result";

                const schoolsHTML = faculty.schools.map(school => `
                    <a href="${escapeFacultyHTML(school.url)}"
                       class="faculty-result-school"
                       title="Open faculty page">
                        <i class="bi bi-building"></i>
                        <span>${escapeFacultyHTML(school.name)}</span>
                    </a>
                `).join("");

                result.innerHTML = `
                    <div class="faculty-result-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="faculty-result-content">
                        <span class="faculty-result-name">
                            ${escapeFacultyHTML(faculty.name)}
                        </span>
                        ${schoolsHTML}
                    </div>
                `;

                resultsBox.appendChild(result);
            });

            if (grouped.length > 20) {
                const more = document.createElement("div");
                more.className = "faculty-search-state";
                more.textContent =
                    "Showing first 20 matching faculty. Refine your search for more specific results.";
                resultsBox.appendChild(more);
            }

            resultsBox.classList.add("show");
        }

        function initialiseFacultySearch() {

            if (!facultySearch) return;

            const resultsBox = document.getElementById("facultySearchResults");
            const searchButton = document.getElementById("facultySearchBtn");
            if (!resultsBox) return;

            /* Fetch all faculty pages only when search is first used. */
            facultySearch.addEventListener("focus", async function() {

                if (facultyDatabase.length || facultyDatabasePromise) return;

                resultsBox.innerHTML = `
                    <div class="faculty-search-state">Loading faculty directory...</div>
                `;
                resultsBox.classList.add("show");

                await loadAllFaculty();

                if (facultySearch.value.trim()) {
                    renderFacultyResults(facultySearch.value);
                } else {
                    resultsBox.classList.remove("show");
                }
            });

            /* Live name search. */
            facultySearch.addEventListener("input", async function() {

                const query = this.value.trim();

                if (!query) {
                    resultsBox.classList.remove("show");
                    resultsBox.innerHTML = "";
                    return;
                }

                if (!facultyDatabase.length) {
                    resultsBox.innerHTML = `
                        <div class="faculty-search-state">Loading faculty directory...</div>
                    `;
                    resultsBox.classList.add("show");
                    await loadAllFaculty();
                }

                renderFacultyResults(query);
            });

            if (searchButton) {
                searchButton.addEventListener("click", async function() {

                    const query = facultySearch.value.trim();

                    if (!query) {
                        facultySearch.focus();
                        return;
                    }

                    if (!facultyDatabase.length) {
                        resultsBox.innerHTML = `
                            <div class="faculty-search-state">Loading faculty directory...</div>
                        `;
                        resultsBox.classList.add("show");
                        await loadAllFaculty();
                    }

                    renderFacultyResults(query);
                });
            }

            facultySearch.addEventListener("keydown", function(e) {
                if (e.key === "Enter") {
                    e.preventDefault();
                    if (searchButton) searchButton.click();
                }
            });

            document.addEventListener("click", function(e) {
                if (!e.target.closest(".faculty-search")) {
                    resultsBox.classList.remove("show");
                }
            });
        }
    </script>

    <script>
        /*=========================================================
         INITIALISE PAGE
        =========================================================*/

        function initialiseSchoolDirectory() {

            generateSchoolCards();

            generateDepartmentDropdown();

            initialiseDropdown();

            initialiseAccordion();

            initialiseDepartmentSelection();

            initialiseSearch();

            initialiseFacultySearch();

        }

        document.addEventListener("DOMContentLoaded", function() {

            initialiseSchoolDirectory();

        });
    </script>
@endsection
