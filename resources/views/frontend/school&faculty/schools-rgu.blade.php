@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/academics-schools-faculty/cover.png'); filter: blur(2px);">
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
            padding: 10px 18px;
            font-size: 19px;
            font-weight: 600;
            border-radius: 8px;
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
            padding: 10px 18px;
            font-size: 19px;
            font-weight: 600;
            border-radius: 8px;
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

                    <input type="text" placeholder="Search By Faculty" id="facultySearch">

                    <button>
                        <i class="bi bi-search"></i>
                    </button>

                </div>

            </div>

            <!-- Cards -->

            <div class="school-grid" id="schoolGrid">

            </div>

        </div>

        <!-- Quick Access -->

        <div class="container">
            <div class="quick-access-box">


                <a href="/admission-programs-fees-structure">
                    Fee Structure
                </a>

                <a href="/programs">
                    Eligibility Criteria
                </a>

                <a href="/phd">
                    Doctoral Programme
                </a>

                <a href="/scholarship&funding">
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

                image: "/mobile-assets/school-rgu/ias-banner.png",

                departmentPage: "/ias-courses",

                facultyPage: "",

                departments: [

                    {
                        name: "Integrated Civil Service Programme",
                        url: "/ias-courses"
                    }

                ]
            },
            {
                id: "rsaf",

                name: "Royal School of Agriculture and Forestry (RSAF)",

                image: "/mobile-assets/agri.png",

                departmentPage: "/royal-school-of-agriculture",

                facultyPage: "/faculty-agriculture",

                departments: [

                    {
                        name: "Royal School of Agriculture and Forestry (RSAF)",
                        url: "/royal-school-of-agriculture"
                    }

                ]
            },
            {
                id: "rsa",

                name: "Royal School of Architecture (RSA)",

                image: "/new-web/assets/academics-schools-faculty/architecture.png",

                departmentPage: "/department-architecture",

                facultyPage: "/faculty-architecture",

                departments: [

                    {
                        name: "Royal School of Architecture (RSA)",
                        url: "/department-architecture"
                    }

                ]
            },
            {
                id: "rsaps",

                name: "Royal School of Applied & Pure Sciences (RSAPS)",

                image: "/mobile-assets/school-rgu/applied.001.jpeg",

                departmentPage: "/royal-s-school-of-applied-pure-science",

                facultyPage: "/faculty-applied-purescience",

                departments: [

                    {
                        name: "Department of Physics",
                        url: "/department-physics"
                    },

                    {
                        name: "Department of Chemistry",
                        url: "/department-chemistry"
                    },

                    {
                        name: "Department of Mathematics",
                        url: "/department-mathematics"
                    }

                ]
            },
            {
                id: "rsb",

                name: "Royal School of Business (RSB)",

                image: "/new-web/assets/academics-schools-faculty/rsb.png",

                departmentPage: "/department-business",

                facultyPage: "/faculty-business",

                departments: [

                    {
                        name: "Royal School of Business (RSB)",
                        url: "/department-business"
                    }

                ]
            },
            {
                id: "rsbas",

                name: "Royal School of Behavioral & Allied Sciences (RSBAS)",

                image: "/mobile-assets/school-rgu/behavioral.jpeg",

                departmentPage: "/department-psychology",

                facultyPage: "/faculty-allied-sciences",

                departments: [

                    {
                        name: "Royal School of Behavioral & Allied Sciences (RSBAS)",
                        url: "/department-psychology"
                    }

                ]
            },
            {
                id: "rsbsc",

                name: "Royal School of Bio-sciences (RSBSC)",

                image: "/mobile-assets/school-rgu/rsbsc-school-header.jpeg",

                departmentPage: "/royal-s-school-of-bio-science",

                facultyPage: "/faculty-bio-sciences",

                departments: [

                    {
                        name: "Department of Biotechnology",
                        url: "/department-biotechnology"
                    },

                    {
                        name: "Department of Microbiology",
                        url: "/department-microbiology"
                    },

                    {
                        name: "Department of Food Technology",
                        url: "/department-food-technology"
                    }

                ]
            },
            {
                id: "rsc",

                name: "Royal School of Commerce (RSC)",

                image: "/mobile-assets/school-rgu/commerce.jpeg",

                departmentPage: "/department-commerce",

                facultyPage: "/faculty-commerce",

                departments: [

                    {
                        name: "Royal School of Commerce (RSC)",
                        url: "/department-commerce"
                    }
                ]
            },
            {
                id: "rscom",

                name: "Royal School of Communications & Media (RSCOM)",

                image: "/new-web/assets/academics-schools-faculty/rscom.png",

                departmentPage: "/department-communications-media",

                facultyPage: "/rscom-faculty",

                departments: [

                    {
                        name: "Royal School of Communications & Media (RSCOM)",
                        url: "/department-communications-media"
                    }

                ]
            },
            {
                id: "rsd",

                name: "Royal School of Design (RSD)",

                image: "/mobile-assets/school-rgu/design.jpeg",

                departmentPage: "/royal-s-school-of-design",

                facultyPage: "/faculty-design",

                departments: [

                    {
                        name: "Department of Product Design",
                        url: "/department-product-design"
                    },

                    {
                        name: "Department of Communication Design",
                        url: "/department-communication-design"
                    },

                    {
                        name: "Department of Interior Design",
                        url: "/department-interior-design"
                    },

                    {
                        name: "Department of Graphic Design",
                        url: "/department-graphic-design"
                    },

                    {
                        name: "Department of Fashion Design",
                        url: "/department-fashion-design"
                    }
                ]
            },
            {
                id: "rsees",

                name: "Royal School of Environmental and Earth Sciences (RSEES)",

                image: "/mobile-assets/school-rgu/earth.jpeg",

                departmentPage: "/royal-s-school-of-enviroment-science",

                facultyPage: "/faculty-environmental-earth",

                departments: [

                    {
                        name: "Department of Geography and Geoinformatics",
                        url: "/department-geography-geoinformatics"
                    },

                    {
                        name: "Department of Environmental Science",
                        url: "/department-environmental-sciences"
                    },

                    {
                        name: "Department of Geology",
                        url: "/department-geology"
                    }

                ]
            },
            {
                id: "rset",

                name: "Royal School of Engineering and Technology (RSET)",

                image: "/mobile-assets/school-rgu/soet.jpeg",

                departmentPage: "/royal-s-school-of-engineering-technology",

                facultyPage: "/faculty-engineeringtechnology",

                departments: [

                    {
                        name: "Department of Computer Science",
                        url: "/department-cse"
                    },

                    {
                        name: "Department of Mechanical Engineering",
                        url: "/department-mechanical-engineering"
                    },

                    {
                        name: "Department of Civil Engineering",
                        url: "/department-civil-engineering"
                    }

                ]
            },
            {
                id: "rsfa",

                name: "Royal School of Fine Arts (RSFA)",

                image: "/mobile-assets/school-rgu/art.jpeg",

                departmentPage: "/department-fine-arts",

                facultyPage: "/faculty-finearts",

                departments: [

                    {
                        name: "Royal School of Fine Arts (RSFA)",
                        url: "/department-fine-arts"
                    }

                ]
            },
            {
                id: "rsfd",

                name: "Royal School of Fashion Design (RSFD)",

                image: "/mobile-assets/school-rgu/fashion.jpeg",

                departmentPage: "/department-fashion-design",

                facultyPage: "/faculty-fashion-design",

                departments: [

                    {
                        name: "Royal School of Fashion Design (RSFD)",
                        url: "/department-fashion-design"
                    }

                ]
            },
            {
                id: "rshss",

                name: "Royal School of Humanities (RSHSS)",

                image: "/mobile-assets/school-rgu/humanities.jpeg",

                departmentPage: "/royal-s-school-of-humanities",

                facultyPage: "/faculty-humanities-social",

                departments: [

                    {
                        name: "Department of Economics",
                        url: "/department-economics"
                    },

                    {
                        name: "Department of History",
                        url: "/department-history"
                    },

                    {
                        name: "Department of Public Administration",
                        url: "/department-of-political-science-public-administration"
                    },

                    {
                        name: "Department of Sociology",
                        url: "/department-sociology"
                    },

                    {
                        name: "Department of Social Work",
                        url: "/department-social-work"
                    },

                    {
                        name: "Department of IKS",
                        url: "/department-IKS"
                    }

                ]
            },
            {
                id: "rshm",

                name: "Royal School of Hotel Management (RSHM)",

                image: "/new-web/assets/academics-schools-faculty/hotel.png",

                departmentPage: "/department-hotel-management",

                facultyPage: "/faculty-hotel-management",

                departments: [

                    {
                        name: "Royal School of Hotel Management (RSHM)",
                        url: "/department-hotel-management"
                    }

                ]
            },
            {
                id: "rsit",

                name: "Royal School of Information Technology (RSIT)",

                image: "/new-web/assets/academics-schools-faculty/rsit.png",

                departmentPage: "/department-information-technology",

                facultyPage: "/faculty-information-technology",

                departments: [

                    {
                        name: "Royal School of Information Technology (RSIT)",
                        url: "/department-information-technology"
                    }

                ]
            },
            {
                id: "rsla",

                name: "Royal School of Law & Administration (RSLA)",

                image: "/mobile-assets/school-rgu/law.jpeg",

                departmentPage: "/department-law",

                facultyPage: "/faculty-law-administration",

                departments: [

                    {
                        name: "Royal School of Law & Administration (RSLA)",
                        url: "/department-law"
                    }

                ]
            },
            {
                id: "rslsc",

                name: "Royal School of Life Sciences (RSLSC)",

                image: "/new-web/assets/academics-schools-faculty/rslsc.png",

                departmentPage: "/royal-s-school-of-life-science",

                facultyPage: "/faculty-lifesciences",

                departments: [

                    {
                        name: "Department of Botany",
                        url: "/department-botany"
                    },

                    {
                        name: "Department of Zoology",
                        url: "/department-zoology"
                    },

                    {
                        name: "Department of Forensic Science",
                        url: "/department-forensic-sciences"
                    },

                    {
                        name: "Department of Forestry",
                        url: "/department-forestry"
                    }

                ]
            },
            {
                id: "rsl",

                name: "Royal School of Languages (RSL)",

                image: "/new-web/assets/academics-schools-faculty/languages.png",

                departmentPage: "/royal-school-of-languages",

                facultyPage: "/faculty-languages",

                departments: [

                    {
                        name: "Department of English",
                        url: "/department-english"
                    },

                    {
                        name: "Department of Assamese",
                        url: "/department-assamese"
                    }

                ]
            },
            {
                id: "rslisc",

                name: "Royal School of Library & Information Science (RSLISC)",

                image: "/new-web/assets/academics-schools-faculty/library.png",

                departmentPage: "/department-library-information",

                facultyPage: "/faculty-librarysciences",

                departments: [

                    {
                        name: "Royal School of Library & Information Science (RSLISC)",
                        url: "/department-library-information"
                    }
                ]
            },
            {
                id: "rsmas",

                name: "Royal School of Medical & Allied Science (RSMAS)",

                image: "/new-web/assets/academics-schools-faculty/rsmas.png",

                departmentPage: "/royal-s-school-of-medical-allied-science",

                facultyPage: "/faculty-medical&allidesciences",

                departments: [

                    {
                        name: "Department of Physiotherapy",
                        url: "/department-physiotherapy"
                    },

                    {
                        name: "Department of Optometry",
                        url: "/department-optometry"
                    },

                    {
                        name: "Department of Anaesthesia and Operation Theatre Technology",
                        url: "/department-operationtheatre"
                    },

                    {
                        name: "Department of Medical Laboratory Sciences",
                        url: "/department-medical-lab"
                    },

                    {
                        name: "Department of Medical Radiology and Imaging Technology",
                        url: "/deptment-radiography"
                    },

                    {
                        name: "Department of Food Science & Nutrition",
                        url: "/departement-food-science&nutrition"
                    }
                ]
            },
            {
                id: "rsn",

                name: "Royal School of Nursing (RSN)",

                image: "/new-web/assets/academics-schools-faculty/nursing.png",

                departmentPage: "/department-nursing",

                facultyPage: "/faculty-nursing",

                departments: [

                    {
                        name: "Royal School of Nursing (RSN)",
                        url: "/department-nursing"
                    }
                ]
            },
            {
                id: "rsp",

                name: "Royal School of Pharmacy (RSP)",

                image: "/new-web/assets/academics-schools-faculty/pharmacy.png",

                departmentPage: "/department-pharmacy",

                facultyPage: "/faculty-pharmacy",

                departments: [

                    {
                        name: "Royal School of Pharmacy (RSP)",
                        url: "/department-pharmacy"
                    }

                ]
            },
            {
                id: "rspes",

                name: "Royal School of Physical Education and Sports (RSPES)",

                image: "/new-web/assets/academics-schools-faculty/sports.png",

                departmentPage: "/department-physical-education-and-sports",

                facultyPage: "/faculty-physical-education-and-sports",

                departments: [

                    {
                        name: "Royal School of Physical Education and Sports (RSPES)",
                        url: "/department-physical-education-and-sports"
                    }

                ]
            },
            {
                id: "rsps",

                name: "Royal School of Pharmaceutical Sciences",

                image: "/mobile-assets/phar/pic.png",

                departmentPage: "/department-pharmaceutical-science",

                facultyPage: "",

                departments: [

                    {
                        name: "Royal School of Pharmaceutical Sciences",
                        url: "/department-pharmaceutical-science"
                    }
                ]
            },
            {
                id: "rsttm",

                name: "Royal School of Travel & Tourism (RSTTM)",

                image: "//new-web/assets/school-rgu/travel.jpeg",

                departmentPage: "/department-travel",

                facultyPage: "/faculty-travel-tourism",

                departments: [

                    {
                        name: "Royal School of Travel & Tourism (RSTTM)",
                        url: "/department-travel"
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
         FACULTY SEARCH
        =========================================================*/

        function initialiseFacultySearch() {

            if (!facultySearch) return;

            facultySearch.addEventListener("keypress", function(e) {

                if (e.key === "Enter") {

                    console.log("Faculty Search:", this.value);

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
