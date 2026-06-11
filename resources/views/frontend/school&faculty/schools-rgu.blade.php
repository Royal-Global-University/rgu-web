@extends('frontend.master')
@section('content')
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;"></div>

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* =========================================
           RESET
        ========================================= */

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* =========================================
           ROOT
        ========================================= */

        :root {

            --primary: #1f4173;
            --primary-dark: #142d50;

            --accent: #f39a22;

            --bg: #F6F2ED;

            --white: #ffffff;

            --text: #1f2937;

            --muted: #6b7280;

            --border: #dde5f0;

            --shadow-sm:
                0 4px 14px rgba(15, 23, 42, 0.05);

            --shadow-md:
                0 10px 30px rgba(15, 23, 42, 0.08);

            --shadow-lg:
                0 18px 50px rgba(15, 23, 42, 0.12);

        }

        /* =========================================
           BODY
        ========================================= */

        body {

            margin: 0;

            font-family:
                "Times New Roman",
                Times,
                serif;

            background:
                radial-gradient(circle at top left,
                    rgba(243, 154, 34, 0.08),
                    transparent 22%),

                radial-gradient(circle at top right,
                    rgba(31, 65, 115, 0.08),
                    transparent 28%),

                var(--bg);

            color: var(--text);

            overflow-x: hidden;
        }

        /* =========================================
           WRAPPER
        ========================================= */

        .rgu-sf-wrapper {

            max-width: 1450px;

            margin: auto;

            padding:
                70px 24px;
        }

        /* =========================================
           HEADING
        ========================================= */

        .rgu-sf-heading {

            text-align: center;

            font-size:
                clamp(2rem, 4vw, 3.4rem);

            font-weight: 800;

            line-height: 1.1;

            letter-spacing: -1px;

            margin-bottom: 48px;

            color: var(--primary);
        }

        .rgu-sf-heading span {
            color: var(--accent);
        }

        /* =========================================
           TOP PANEL
        ========================================= */

        .rgu-sf-top {

            position: relative;

            z-index: 100;

            background:
                rgba(255, 255, 255, 0.72);

            backdrop-filter: blur(14px);

            border:
                1px solid rgba(255, 255, 255, 0.6);

            border-radius: 32px;

            padding: 28px;

            box-shadow: var(--shadow-md);

            display: flex;

            flex-direction: column;

            gap: 24px;
        }

        /* =========================================
           CONTROLS ROW
        ========================================= */

        .rgu-sf-controls-row {

            display: flex;

            gap: 12px;

            width: 100%;

            height: 56px;
        }

        .rgu-sf-select {

            flex: 1;

            width: 100%;

            min-width: 0;

            height: 100%;
        }

        /* =========================================
           SEARCH WRAPPER
        ========================================= */

        .rgu-unique-search-wrapper {

            width: 100%;

            height: 56px;
        }

        .rgu-unique-search-input {

            width: 100%;

            height: 56px;
        }

        /* =========================================
           SEARCH DROPDOWN
        ========================================= */

        .rgu-sf-cards {
            position: relative;
            z-index: 1;
        }

        .rgu-unique-dropdown {

            display: none;

            position: absolute;

            top: calc(100% + 10px);

            left: 0;

            width: 100%;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            border:
                1px solid var(--border);

            box-shadow: var(--shadow-lg);

            z-index: 999999;

            max-height: 400px;

            overflow-y: auto;
        }

        /* =========================================
           BUTTON GROUP
        ========================================= */

        .rgu-sf-btn-group {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 16px;

            width: 100%;
        }

        .rgu-sf-btn {

            width: 100%;

            text-decoration: none;

            background: white;

            color: var(--primary);

            border: 1px solid var(--border);

            min-height: 58px;

            padding: 0 18px;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            font-size: 15px;

            font-weight: 700;

            transition: 0.3s ease;

            box-shadow: var(--shadow-sm);
        }

        .rgu-sf-btn:hover {

            background: var(--primary);

            color: white;

            border-color: var(--primary);

            transform: translateY(-3px);
        }

        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 1100px) {

            .rgu-sf-btn-group {

                grid-template-columns: repeat(2, 1fr);
            }

            .rgu-sf-right {

                grid-template-columns: 1fr;
            }

        }

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 768px) {

            .rgu-sf-btn-group {

                grid-template-columns: repeat(2, 1fr);

                gap: 12px;
            }

            .rgu-sf-btn {

                min-height: 48px;

                border-radius: 14px;

                font-size: 12px;

                padding: 10px;
            }


        }

        /* =========================================
           SEARCH AREA
        ========================================= */

        .rgu-sf-right {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;

            align-items: stretch;
        }


        /* =========================================
           DEPARTMENT SEARCH
        ========================================= */

        .rgu-sf-controls-row {

            display: flex;

            gap: 12px;

            width: 100%;
        }

        .rgu-sf-select {

            flex: 1;

            width: 100%;

            min-width: 0;

            height: 56px;

            border-radius: 18px;

            border:
                1px solid var(--border);

            background: white;

            padding:
                0 18px;

            font-size: 14px;

            color: var(--text);

            outline: none;

            transition: 0.3s ease;

            appearance: none;

            background-image:
                url("data:image/svg+xml;utf8,<svg fill='%231f4173' height='18' viewBox='0 0 20 20' width='18'><path d='M5.5 7l4.5 5 4.5-5z'/></svg>");

            background-repeat: no-repeat;

            background-position:
                right 18px center;
        }

        .rgu-sf-select:focus {

            border-color: var(--primary);

            box-shadow:
                0 0 0 4px rgba(31, 65, 115, 0.08);
        }

        .rgu-sf-btn-go {

            width: 72px;

            min-width: 72px;

            border: none;

            border-radius: 18px;

            background: var(--primary);

            color: white;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            transition: 0.3s ease;
        }

        .rgu-sf-btn-go:hover {

            background: var(--primary-dark);

            transform: translateY(-2px);
        }

        /* =========================================
           FACULTY SEARCH
        ========================================= */

        .rgu-unique-search-wrapper {

            position: relative;

            width: 100%;
        }

        .rgu-unique-search-input {

            width: 100%;

            height: 56px;

            border-radius: 999px;

            border:
                1px solid var(--border);

            background: white;

            padding:
                0 20px 0 52px;

            font-size: 14px;

            outline: none;

            transition: 0.3s ease;

            box-shadow: var(--shadow-sm);
        }

        .rgu-unique-search-input:focus {

            border-color: var(--primary);

            box-shadow:
                0 0 0 4px rgba(31, 65, 115, 0.08);
        }

        .search-icon-overlay {

            position: absolute;

            left: 18px;

            top: 50%;

            transform: translateY(-50%);

            pointer-events: none;
        }

        .search-icon-overlay svg {

            width: 17px;

            height: 17px;
        }

        #rguUniqueLoadingMsg {

            margin-top: 8px;

            padding-left: 4px;

            font-size: 11px;

            color: var(--muted);
        }

        /* =========================================
           SEARCH DROPDOWN
        ========================================= */

        .rgu-unique-dropdown {

            display: none;

            position: absolute;

            top: calc(100% + 10px);

            left: 0;

            width: 100%;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            border:
                1px solid var(--border);

            box-shadow: var(--shadow-lg);

            z-index: 9999;

            max-height: 400px;

            overflow-y: auto;
        }

        .rgu-unique-result-item {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 14px;

            padding: 16px 18px;

            border-bottom:
                1px solid #edf2f7;

            transition: 0.25s ease;
        }

        .rgu-unique-result-item:hover {
            background: #f8fbff;
        }

        .rgu-unique-result-info strong {

            display: block;

            color: var(--primary);

            font-size: 14px;

            margin-bottom: 4px;
        }

        .rgu-unique-result-info small {

            color: var(--muted);

            font-size: 12px;
        }

        .rgu-unique-view-btn {

            text-decoration: none;

            background: var(--primary);

            color: white;

            border-radius: 12px;

            padding:
                9px 15px;

            font-size: 12px;

            font-weight: 600;

            transition: 0.3s ease;
        }

        .rgu-unique-view-btn:hover {

            background: var(--accent);
        }

        /* =========================================
           DIVIDER
        ========================================= */

        hr {

            margin: 42px 0;

            border: none;

            border-top:
                1px solid #dfe7f1;
        }

        /* =========================================
           CARDS GRID
        ========================================= */

        .rgu-sf-cards {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 28px;
        }

        /* =========================================
           CARD
        ========================================= */

        .rgu-sf-card {

            background:
                rgba(255, 255, 255, 0.78);

            backdrop-filter: blur(10px);

            border:
                1px solid rgba(255, 255, 255, 0.5);

            border-radius: 28px;

            overflow: hidden;

            transition: 0.4s ease;

            box-shadow: var(--shadow-md);

            display: flex;

            flex-direction: column;
        }

        .rgu-sf-card:hover {

            transform:
                translateY(-10px);

            box-shadow:
                0 24px 60px rgba(15, 23, 42, 0.14);
        }

        /* =========================================
           CARD IMAGE
        ========================================= */

        .rgu-sf-card img {

            width: 100%;

            height: 230px;

            object-fit: cover;

            transition: 0.4s ease;
        }

        .rgu-sf-card:hover img {

            transform: scale(1.04);
        }

        /* =========================================
           CARD TITLE
        ========================================= */

        .rgu-sf-card-title {

            padding:
                22px 22px 14px;

            font-size: 1.18rem;

            font-weight: 700;

            line-height: 1.45;

            color: var(--primary);

            flex-grow: 1;
        }

        .rgu-sf-card-title a {

            text-decoration: none;

            color: inherit;

            transition: 0.3s ease;
        }

        .rgu-sf-card-title a:hover {
            color: var(--accent);
        }

        /* =========================================
           CARD BUTTONS
        ========================================= */

        .rgu-sf-card-btns {

            display: flex;

            gap: 12px;

            padding:
                0 22px 22px;
        }

        .rgu-sf-card-btn {

            flex: 1;

            min-height: 48px;

            border-radius: 16px;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 600;

            transition: 0.3s ease;
        }

        .rgu-sf-dept {

            background: var(--primary);

            color: white;
        }

        .rgu-sf-dept:hover {

            background: var(--primary-dark);
        }

        .rgu-sf-faculty {

            background: #d47f11;

            color: #edf3ff;
        }

        .rgu-sf-faculty:hover {

            background: var(--accent);

            color: white;
        }

        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 1100px) {

            .rgu-sf-cards {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .rgu-sf-right {

                grid-template-columns: 1fr;
            }

        }

        /* =========================================
           MOBILE
        ========================================= */

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 768px) {

            .rgu-sf-cards {

                display: grid;

                grid-template-columns: 1fr !important;

                gap: 20px;
            }

            .rgu-sf-card {

                width: 100%;
            }

        }


        /* =========================================
           SMALL MOBILE
        ========================================= */

        @media (max-width: 480px) {

            .rgu-sf-heading {

                font-size: 1.85rem;
            }

            .rgu-sf-btn {

                font-size: 12px;
            }

            .rgu-sf-select,
            .rgu-unique-search-input {

                font-size: 12px;
            }

        }
    </style>

    <style>
        /* =========================================
               IKS 4 BUTTON GRID
            ========================================= */

        .rgu-sf-card-btns.rgu-sf-iks-layout {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 12px;
        }

        /* =========================================
               IKS BUTTON STYLE
            ========================================= */

        .rgu-sf-iks-btn {

            background: #edf3ff;

            color: #1f4173;
        }

        .rgu-sf-iks-btn:hover {

            background: #1f4173;

            color: white;
        }

        /* =========================================
               MOBILE
            ========================================= */

        @media (max-width: 768px) {

            .rgu-sf-card-btns.rgu-sf-iks-layout {

                grid-template-columns: 1fr;
            }

        }
    </style>

    <div class="rgu-sf-wrapper">

        <div class="rgu-sf-heading">
            Schools and <span>Faculty</span>
        </div>

        <div class="rgu-sf-top">

            <div class="rgu-sf-btn-group">
                <a href="https://rgu.ac/how-to-apply" class="rgu-sf-btn">How to Apply</a>

                <a href="https://rgu.ac/placements-process" class="rgu-sf-btn">Placements</a>

                <a href="https://rgu.ac/programs" class="rgu-sf-btn">
                    Eligibility & Selection Criteria
                </a>

                <a href="https://rgu.ac/admission-programs-fees-structure" class="rgu-sf-btn">
                    Fee Structure
                </a>
            </div>

            <div class="rgu-sf-right">

                <div class="rgu-sf-controls-row">

                    <select id="rguDeptDropdown" class="rgu-sf-select">
                        <option value="">Search Department...</option>
                    </select>

                    <button id="rguDeptBtn" class="rgu-sf-btn-go">
                        Go
                    </button>

                </div>

                <div class="rgu-unique-search-wrapper">

                    <span class="search-icon-overlay">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="#28477b">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>

                    <input type="text" id="rguUniqueSearchInput" class="rgu-unique-search-input"
                        placeholder="Search Faculty..." disabled>

                    <div id="rguUniqueLoadingMsg">
                        Loading Faculty...
                    </div>

                    <div id="rguUniqueSearchResults" class="rgu-unique-dropdown"></div>

                </div>

            </div>

        </div>

        <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">

        <div class="rgu-sf-cards" id="rguSFContainer"></div>

    </div>

    <script>
        const rguSFData = [

            {
                title: "Integrated Civil Service Programme",
                image: "/mobile-assets/school-rgu/ias-banner.png",
                deptMainLink: "/ias-courses",
                facultyLink: "/faculty-applied-purescience",
                departments: [{
                    name: "Integrated Civil Service Programme",
                    link: "/ias-courses"
                }]
            },

            {
                title: "Royal School of Agriculture and Forestry (RSAF)",
                image: "/mobile-assets/agri.png",
                deptMainLink: "/royal-school-of-agriculture",
                facultyLink: "/faculty-agriculture",
                departments: [{
                    name: "Department of Agriculture",
                    link: "/department-agriculture"
                }]
            },

            {
                title: "Royal School of Architecture (RSA)",
                image: "/mobile-assets/school-rgu/soa-1.jpg",
                deptMainLink: "/department-architecture",
                facultyLink: "/faculty-architecture",
                departments: [{
                    name: "Department of Architecture",
                    link: "/department-architecture"
                }]
            },

            {
                title: "Royal School of Applied & Pure Sciences (RSAPS)",
                image: "/mobile-assets/school-rgu/applied.001.jpeg",
                deptMainLink: "/royal-s-school-of-applied-pure-science",
                facultyLink: "/faculty-applied-purescience",
                departments: [{
                        name: "Department of Physics",
                        link: "/department-physics"
                    },
                    {
                        name: "Department of Chemistry",
                        link: "/department-chemistry"
                    },
                    {
                        name: "Department of Mathematics",
                        link: "/department-mathematics"
                    }
                ]
            },

            {
                title: "Royal School of Business (RSB)",
                image: "/mobile-assets/school-rgu/business.jpeg",
                deptMainLink: "/department-business",
                facultyLink: "/faculty-business",
                departments: [{
                    name: "Department of Business",
                    link: "/department-business"
                }]
            },

            {
                title: "Royal School of Behavioral & Allied Sciences (RSBAS)",
                image: "/mobile-assets/school-rgu/behavioral.jpeg",
                deptMainLink: "/department-psychology",
                facultyLink: "/faculty-allied-sciences",
                departments: [{
                    name: "Department of Behavioral & Allied Sciences",
                    link: "/department-psychology"
                }]
            },

            {
                title: "Royal School of Bio-sciences (RSBSC)",
                image: "/mobile-assets/school-rgu/rsbsc-school-header.jpeg",
                deptMainLink: "/royal-s-school-of-bio-science",
                facultyLink: "/faculty-bio-sciences",
                departments: [{
                        name: "Department of Biotechnology",
                        link: "/department-biotechnology"
                    },
                    {
                        name: "Department of Microbiology",
                        link: "/department-microbiology"
                    },
                    {
                        name: "Department of Food Technology",
                        link: "/department-food-technology"
                    }
                ]
            },

            {
                title: "Royal School of Commerce (RSC)",
                image: "/mobile-assets/school-rgu/commerce.jpeg",
                deptMainLink: "/department-commerce",
                facultyLink: "/faculty-commerce",
                departments: [{
                    name: "Department of Commerce",
                    link: "/department-commerce"
                }]
            },

            {
                title: "Royal School of Communications & Media (RSCOM)",
                image: "/mobile-assets/school-rgu/media.jpeg",
                deptMainLink: "/department-communications-media",
                facultyLink: "/rscom-faculty",
                departments: [{
                    name: "Department of Communications & Media",
                    link: "/department-communications-media"
                }]
            },

            {
                title: "Royal School of Design (RSD)",
                image: "/mobile-assets/school-rgu/design.jpeg",
                deptMainLink: "/royal-s-school-of-design",
                facultyLink: "/faculty-design",
                departments: [{
                        name: "Department of Product Design",
                        link: "/department-product-design"
                    },
                    {
                        name: "Department of Communication Design",
                        link: "/department-communication-design"
                    },
                    {
                        name: "Department of Interior Design",
                        link: "/department-interior-design"
                    },
                    {
                        name: "Department of Graphic Design",
                        link: "/department-graphic-design"
                    },
                    {
                        name: "Department of Fashion Design",
                        link: "/department-fashion-design"
                    }
                ]
            },

            {
                title: "Royal School of Environmental and Earth Sciences (RSEES)",
                image: "/mobile-assets/school-rgu/earth.jpeg",
                deptMainLink: "/royal-s-school-of-enviroment-science",
                facultyLink: "/faculty-environmental-earth",
                departments: [{
                        name: "Department of Geography and Geoinformatics",
                        link: "/department-geography-geoinformatics"
                    },
                    {
                        name: "Department of Environmental Sciences",
                        link: "/department-environmental-sciences"
                    },
                    {
                        name: "Department of Geology",
                        link: "/department-geology"
                    }

                ]
            },

            {
                title: "Royal School of Engineering and Technology (RSET)",
                image: "/mobile-assets/school-rgu/soet.jpeg",
                deptMainLink: "/royal-s-school-of-engineering-technology",
                facultyLink: "/faculty-engineeringtechnology",
                departments: [{
                        name: "Department of CSE",
                        link: "/department-cse"
                    },
                    {
                        name: "Department of ME",
                        link: "/department-mechanical-engineering"
                    },
                    {
                        name: "Department of CE",
                        link: "/department-civil-engineering"
                    },
                ]
            },

            {
                title: "Royal School of Fine Arts (RSFA)",
                image: "/mobile-assets/school-rgu/art.jpeg",
                deptMainLink: "/department-fine-arts",
                facultyLink: "/faculty-finearts",
                departments: [{
                    name: "Department of Fine Arts",
                    link: "/department-fine-arts"
                }]
            },

            {
                title: "Royal School of Fashion Design (RSFT)",
                image: "/mobile-assets/school-rgu/fashion.jpeg",
                deptMainLink: "/department-fashion-design",
                facultyLink: "/faculty-fashion-design",
                departments: [{
                    name: "Department of Fashion Design",
                    link: "/department-fashion-design"
                }]
            },

            {
                title: "Royal School of Humanities (RSHSS)",
                image: "/mobile-assets/school-rgu/humanities.jpeg",
                deptMainLink: "/royal-s-school-of-humanities",
                facultyLink: "/faculty-humanities-social",
                departments: [{
                        name: "Department of Economics",
                        link: "/department-economics"
                    },
                    {
                        name: "Department of History",
                        link: "/department-history"
                    },
                    {
                        name: "Department of Political Science & Public Administration",
                        link: "/department-public-administration"
                    },
                    {
                        name: "Department of Sociology",
                        link: "/department-sociology"
                    },
                    {
                        name: "Department of Social Work",
                        link: "/department-social-work"
                    },
                    {
                        name: "Centre for Indian Knowledge System (IKS)",
                        link: "/department-IKS"
                    }
                ]
            },

            {
                title: "Royal School of Hotel Management (RSHM)",
                image: "/mobile-assets/school-rgu/hotel-mgn.jpeg",
                deptMainLink: "/department-hotel-management",
                facultyLink: "/faculty-hotel-management",
                departments: [{
                    name: "Department of Hotel Management",
                    link: "/department-hotel-management"
                }]
            },

            {
                title: "Royal School of Information Technology (RSIT)",
                image: "/mobile-assets/school-rgu/it-school.jpeg",
                deptMainLink: "/department-information-technology",
                facultyLink: "/faculty-information-technology",
                departments: [{
                    name: "Department of Information Technology",
                    link: "/department-information-technology"
                }]
            },

            {
                title: "Royal School of Law & Administration (RSLA)",
                image: "/mobile-assets/school-rgu/law.jpeg",
                deptMainLink: "/department-law",
                facultyLink: "/faculty-law-administration",
                departments: [{
                    name: "Department of Law & Administration",
                    link: "/department-law"
                }]
            },

            {
                title: "Royal School of Life Sciences (RSLSC)",
                image: "/mobile-assets/school-rgu/rgu-schools.003.jpeg",
                deptMainLink: "/royal-s-school-of-life-science",
                facultyLink: "/faculty-lifesciences",
                departments: [{
                        name: "Department of Botany",
                        link: "/department-botany"
                    },
                    {
                        name: "Department of Zoology",
                        link: "/department-zoology"
                    },
                    {
                        name: "Department of Forensic Science",
                        link: "/department-forensic-sciences"
                    },
                    {
                        name: "Department of Forestry",
                        link: "/department-forestry"
                    }
                ]
            },

            {
                title: "Royal School of Languages (RSL)",
                image: "/mobile-assets/school-rgu/rgu-campus.001.jpeg",
                deptMainLink: "/royal-school-of-languages",
                facultyLink: "/faculty-languages",
                departments: [{
                    name: "Department of Languages",
                    link: "/royal-school-of-languages"
                }]
            },

            {
                title: "Royal School of Library & Information Science (RSLISC)",
                image: "/mobile-assets/school-rgu/schools-library.jpeg",
                deptMainLink: "/department-library-information",
                facultyLink: "/faculty-librarysciences",
                departments: [{
                    name: "Department of Library & Information Science",
                    link: "/department-library-information"
                }]
            },

            {
                title: "Royal School of Medical & Allied Science (RSMAS)",
                image: "/assets/img/school-rgu/medical.jpeg",
                deptMainLink: "/royal-s-school-of-medical-allied-science",
                facultyLink: "/faculty-medical&allidesciences",
                departments: [{
                        name: "Department of Physiotherapy",
                        link: "/department-physiotherapy"
                    },
                    {
                        name: "Department of Optometry",
                        link: "/department-optometry"
                    },
                    {
                        name: "Department of Anaesthesia and Operation Theatre Technology",
                        link: "/department-operationtheatre"
                    },
                    {
                        name: "Department of Medical Laboratory Sciences",
                        link: "/department-medical-lab"
                    },
                    {
                        name: "Department of Medical Radiology and Imaging Technology",
                        link: "/deptment-radiography"
                    }
                ]
            },

            {
                title: "Royal School of Nursing (RSN)",
                image: "/assets/img/school-rgu/nursing.jpeg",
                deptMainLink: "/department-nursing",
                facultyLink: "/faculty-nursing",
                departments: [{
                    name: "Department of Nursing",
                    link: "/department-nursing"
                }]
            },

            {
                title: "Royal School of Pharmacy (RSP)",
                image: "/mobile-assets/school-rgu/pharmacy.jpeg",
                deptMainLink: "/department-pharmacy",
                facultyLink: "/faculty-pharmacy",
                departments: [{
                    name: "Department of Pharmacy",
                    link: "/department-pharmacy"
                }]
            },

            {
                title: "Royal School of Physical Education and Sports (RSPES)",
                image: "/home-banner/bpes.png",
                deptMainLink: "/department-physical-education-and-sports",
                facultyLink: "/faculty-physical-education-and-sports",
                departments: [{
                    name: "Department of Physical Education and Sports",
                    link: "/department-physical-education-and-sports"
                }]
            },

            {
                title: "Royal School of Pharmaceutical Sciences",
                image: "/mobile-assets/phar/pic.png",
                deptMainLink: "/department-pharmaceutical-science",
                facultyLink: "",
                departments: [{
                    name: "Department of Pharmaceutical Sciences",
                    link: "/department-pharmaceutical-science"
                }]
            },

            {
                title: "Royal School of Travel & Tourism (RSTTM)",
                image: "/assets/img/school-rgu/travel.jpeg",
                deptMainLink: "/department-travel",
                facultyLink: "/faculty-travel-tourism",
                departments: [{
                    name: "Department of Travel & Tourism",
                    link: "/department-travel"
                }]
            },

            {
                title: "Indian Knowledge Systems (IKS)",
                image: "https://rgu.ac/mobile-assets/school-rgu/IKS%20LOGO-new.jpeg",
                deptMainLink: "https://rgu.ac/indian-knowledge-system-cell-about",
                facultyLink: "https://rgu.ac/indian-knowledge-system-cell-composition",
                departments: [{
                    name: "Indian Knowledge Systems",
                    link: "https://rgu.ac/indian-knowledge-system-cell-about"
                }]
            }

        ];

        /* ===============================
           ELEMENTS
        ================================ */

        const container = document.getElementById("rguSFContainer");

        const deptDropdown =
            document.getElementById("rguDeptDropdown");

        const deptBtn =
            document.getElementById("rguDeptBtn");

        /* ===============================
           RENDER CARDS
        ================================ */

        function renderCards(data) {

            container.innerHTML = "";

            data.forEach(item => {

                let buttons = [];

                /* =================================
                   DEPARTMENT BUTTON
                ================================= */

                if (
                    item.deptMainLink &&
                    item.deptMainLink.trim() !== ""
                ) {

                    buttons.push(`
        <a
          href="${item.deptMainLink}"
          class="rgu-sf-card-btn rgu-sf-dept">
          Department
        </a>
      `);
                }

                /* =================================
                   FACULTY BUTTON
                ================================= */

                if (
                    item.facultyLink &&
                    item.facultyLink.trim() !== ""
                ) {

                    buttons.push(`
        <a
          href="${item.facultyLink}"
          class="rgu-sf-card-btn rgu-sf-faculty rgu-faculty-search-link"
          data-school="${item.title}">
          Faculty
        </a>
      `);
                }

                /* =================================
                   IKS EXTRA BUTTONS
                ================================= */

                if (item.title === "Indian Knowledge Systems (IKS)") {

                    buttons.push(`
        <a
          href="https://rgu.ac/indian-knowledge-system-cell-events"
          class="rgu-sf-card-btn rgu-sf-iks-btn">
          Events
        </a>
      `);

                    buttons.push(`
        <a
          href="https://rgu.ac/indian-knowledge-system-cell-syllabus"
          class="rgu-sf-card-btn rgu-sf-iks-btn">
          Syllabus
        </a>
      `);
                }

                /* =================================
                   BUTTON CLASS
                ================================= */

                let btnClass = "rgu-sf-card-btns-1";

                if (buttons.length === 2) {

                    btnClass = "rgu-sf-card-btns-2";

                } else if (buttons.length >= 3) {

                    btnClass = "rgu-sf-card-btns-4";
                }

                /* =================================
                   TITLE LINK
                ================================= */

                const titleHTML =
                    item.deptMainLink &&
                    item.deptMainLink.trim() !== ""

                    ?
                    `
          <a href="${item.deptMainLink}">
            ${item.title}
          </a>
        `

                    :
                    item.title;

                /* =================================
                   CARD HTML
                ================================= */

                container.innerHTML += `

      <div class="rgu-sf-card">

        <img src="${item.image}" alt="${item.title}">

        <div class="rgu-sf-card-title">
          ${titleHTML}
        </div>

        <div class="rgu-sf-card-btns ${btnClass} ${item.title === 'Indian Knowledge Systems (IKS)' ? 'rgu-sf-iks-layout' : ''}">
          ${buttons.join("")}
        </div>

      </div>

    `;
            });
        }

        /* ===============================
           RENDER DROPDOWN
        ================================ */

        function renderDropdown(data) {

            deptDropdown.innerHTML =
                `<option value="">Search Department...</option>`;

            data.forEach(item => {

                if (!item.departments) return;

                const group = document.createElement("optgroup");

                group.label = item.title;

                item.departments.forEach(dept => {

                    const option = document.createElement("option");

                    option.value = dept.link;

                    option.textContent = dept.name;

                    group.appendChild(option);

                });

                deptDropdown.appendChild(group);

            });
        }

        /* ===============================
           GO BUTTON
        ================================ */

        deptBtn.addEventListener('click', () => {

            const url = deptDropdown.value;

            if (url) {
                window.location.href = url;
            } else {
                alert("Please select a department");
            }

        });

        /* ===============================
           FACULTY SEARCH
        ================================ */

        document.addEventListener("DOMContentLoaded", function() {

            const rguAllFacultyDataUnique = [];

            const rguSearchInputUnique =
                document.getElementById('rguUniqueSearchInput');

            const rguLoadingMsgUnique =
                document.getElementById('rguUniqueLoadingMsg');

            const rguResultsContainerUnique =
                document.getElementById('rguUniqueSearchResults');

            async function rguFetchAllFacultyUnique() {

                const schoolLinks =
                    document.querySelectorAll('.rgu-faculty-search-link');

                const promises = Array.from(schoolLinks).map(async (link) => {

                    const url = link.href;

                    if (!url || url === "#") return;

                    const schoolName =
                        link.getAttribute('data-school') ||
                        "Royal Global University";

                    try {

                        const response = await fetch(url, {
                            method: 'GET',
                            credentials: 'same-origin'
                        });

                        if (response.ok) {

                            const text = await response.text();

                            const parser = new DOMParser();

                            const doc =
                                parser.parseFromString(text, 'text/html');

                            const names =
                                doc.querySelectorAll('.card-name');

                            names.forEach(nameElement => {

                                const cleanName =
                                    nameElement.innerText
                                    .replace(/\s+/g, ' ')
                                    .trim();

                                if (cleanName.length > 2) {

                                    rguAllFacultyDataUnique.push({
                                        name: cleanName,
                                        school: schoolName,
                                        link: url
                                    });

                                }

                            });

                        }

                    } catch (error) {

                        console.warn("Could not load:", url);

                    }

                });

                await Promise.all(promises);

                rguLoadingMsgUnique.style.display = 'none';

                rguSearchInputUnique.disabled = false;

                rguSearchInputUnique.placeholder =
                    `Search among ${rguAllFacultyDataUnique.length} Faculty Members...`;
            }

            window.addEventListener("load", () => {
                setTimeout(() => {
                    rguFetchAllFacultyUnique();
                }, 800);
            });

            rguSearchInputUnique.addEventListener('keyup', (e) => {

                const query = e.target.value.toLowerCase();

                rguResultsContainerUnique.innerHTML = '';

                if (query.length < 2) {

                    rguResultsContainerUnique.style.display = 'none';

                    return;

                }

                const filtered =
                    rguAllFacultyDataUnique.filter(person =>
                        person.name.toLowerCase().includes(query)
                    );

                if (filtered.length > 0) {

                    rguResultsContainerUnique.style.display = 'block';

                    filtered.forEach(person => {

                        const div = document.createElement('div');

                        div.className = 'rgu-unique-result-item';

                        div.innerHTML = `

              <div class="rgu-unique-result-info">
                <strong>${person.name}</strong>
                <small>${person.school}</small>
              </div>

              <a
                href="${person.link}"
                class="rgu-unique-view-btn">
                View
              </a>

            `;

                        rguResultsContainerUnique.appendChild(div);

                    });

                } else {

                    rguResultsContainerUnique.style.display = 'block';

                    rguResultsContainerUnique.innerHTML =
                        '<div style="padding:15px;text-align:center;color:#888;">No faculty found.</div>';

                }

            });

            document.addEventListener('click', function(e) {

                if (
                    !document
                    .querySelector('.rgu-unique-search-wrapper')
                    .contains(e.target)
                ) {

                    rguResultsContainerUnique.style.display = 'none';

                }

            });

        });

        /* ===============================
           INIT
        ================================ */

        renderCards(rguSFData);

        renderDropdown(rguSFData);
    </script>
@endsection
