@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;"></div>

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* ===============================
                       RESET
                    ================================ */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Times New Roman', serif;
            background: linear-gradient(180deg, #f4efe9, #f7f3ee);
            color: #2c2c2c;
        }

        /* ===============================
                       WRAPPER
                    ================================ */
        .rgu-sf-wrapper {
            max-width: 1250px;
            margin: auto;
            padding: 50px 20px;
        }

        /* ===============================
                       HEADING
                    ================================ */
        .rgu-sf-heading {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #28477b;
        }

        .rgu-sf-heading span {
            color: #f7941d;
        }

        /* ===============================
                       TOP LAYOUT
                    ================================ */
        .rgu-sf-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* ===============================
                       BUTTON GROUP
                    ================================ */
        .rgu-sf-btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .rgu-sf-btn {
            background: #28477b;
            color: #fff;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 22px;
            transition: 0.25s ease;
        }

        .rgu-sf-btn:hover {
            background: #1c3561;
            transform: translateY(-2px);
        }

        /* ===============================
                       RIGHT CONTROLS
                    ================================ */
        .rgu-sf-right {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex: 0 0 600px;
            max-width: 60%;
        }

        .rgu-sf-controls-row {
            display: flex;
            gap: 8px;
            max-width: 300px;
        }

        .rgu-sf-search-wrapper {
            flex: 1;
            position: relative;
            display: flex;
            align-items: center;
        }

        /* ===============================
                       INPUTS
                    ================================ */
        .rgu-sf-select,
        .rgu-sf-search {
            height: 42px;
            padding: 0 14px;
            border-radius: 8px;
            border: 1px solid #d6dbe4;
            font-size: 14px;
            background: #fff;
            outline: none;
            transition: 0.2s ease;
        }

        .rgu-sf-select {
            min-width: 200px;
            appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg fill='%2328477b' height='18' viewBox='0 0 20 20' width='18'><path d='M5.5 7l4.5 5 4.5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
        }

        .rgu-sf-search {
            width: 100%;
            padding: 0 40px 0 14px;
        }

        /* ICON */
        .rgu-sf-search-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        /* FOCUS */
        .rgu-sf-select:focus,
        .rgu-sf-search:focus {
            border-color: #28477b;
            box-shadow: 0 0 0 2px rgba(40, 71, 123, 0.15);
        }

        /* BUTTON */
        .rgu-sf-btn-go {
            height: 42px;
            padding: 0 14px;
            border-radius: 8px;
            border: none;
            background: #28477b;
            color: #fff;
            cursor: pointer;
        }

        .rgu-sf-btn-go:hover {
            background: #1c3561;
        }

        /* ===============================
                       🔥 SEARCH RESULTS (IMPROVED ONLY HERE)
                    ================================ */
        .rgu-sf-results {
            position: absolute;
            top: 48px;
            width: 100%;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e9f2;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
            max-height: 320px;
            overflow-y: auto;
            z-index: 100;
            padding: 6px 0;
            animation: dropdownFade 0.15s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .rgu-sf-results:empty {
            display: none;
        }

        /* ITEM */
        .rgu-sf-result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            transition: all 0.2s ease;
        }

        /* HOVER */
        .rgu-sf-result-item:hover {
            background: #f5f7fb;
            transform: translateX(3px);
        }

        /* TEXT */
        .rgu-sf-result-name {
            font-weight: 600;
            color: #28477b;
            font-size: 14px;
        }

        .rgu-sf-result-dept {
            font-size: 12px;
            color: #777;
        }

        /* VIEW BUTTON */
        .rgu-sf-view-btn {
            background: #28477b;
            color: #fff;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 12px;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .rgu-sf-view-btn:hover {
            background: #f7941d;
        }

        /* SCROLLBAR */
        .rgu-sf-results::-webkit-scrollbar {
            width: 5px;
        }

        .rgu-sf-results::-webkit-scrollbar-thumb {
            background: #d0d6e2;
            border-radius: 10px;
        }

        /* ===============================
                       CARDS (RESTORED EXACT)
                    ================================ */
        .rgu-sf-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            /* ✅ back to original */
            margin-top: 40px;
            align-items: stretch;
        }

        .rgu-sf-card {
            background: #fff;
            border-radius: 14px;
            /* ✅ original */
            padding: 16px;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
            /* ✅ original */
            transition: all 0.3s ease;
        }

        .rgu-sf-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
        }

        .rgu-sf-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
        }

        .rgu-sf-card-title {
            margin: 14px 0 10px;
            font-size: 20px;
            font-weight: 700;
            color: #28477b;
            line-height: 1.3;
            min-height: 48px;
            display: flex;
            align-items: center;
        }

        /* BUTTONS */
        .rgu-sf-card-btns {
            display: flex;
            gap: 10px;
            margin-top: auto;
        }

        .rgu-sf-card-btn {
            flex: 1;
            padding: 11px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-size: 19px;
            font-weight: 600;
            transition: 0.25s ease;
        }

        .rgu-sf-dept {
            background: #28477b;
            color: #fff;
        }

        .rgu-sf-dept:hover {
            background: #1c3561;
        }

        .rgu-sf-faculty {
            background: #f7941d;
            color: #fff;
        }

        .rgu-sf-faculty:hover {
            background: #d97f0f;
        }

        /* MULTI GRID */
        .rgu-sf-multi {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        /* ===============================
                       RESPONSIVE
                    ================================ */
        @media (max-width: 992px) {
            .rgu-sf-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .rgu-sf-right {
                flex: 1 1 100%;
                flex-wrap: wrap;
            }
        }

        /* ===============================
                       MOBILE / SMALL SCREEN FIX
                    ================================ */
        @media (max-width: 768px) {

            /* BUTTON GRID → 2 per row */
            .rgu-sf-btn-group {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .rgu-sf-btn {
                width: 100%;
                text-align: center;
            }

            /* RIGHT SECTION FULL WIDTH */
            .rgu-sf-right {
                width: 100%;
                flex-direction: column;
                gap: 12px;
            }

            /* DROPDOWN + GO BUTTON */
            .rgu-sf-controls-row {
                width: 100%;
                display: grid;
                grid-template-columns: 1fr auto;
                gap: 8px;
            }

            .rgu-sf-select {
                width: 100%;
            }

            .rgu-sf-btn-go {
                min-width: 60px;
            }

            /* SEARCH FULL WIDTH */
            .rgu-sf-search-wrapper {
                width: 100%;
            }

            .rgu-sf-search {
                width: 100%;
            }
        }
    </style>

    <style>
        /* ===============================
                       FIX CARD ALIGNMENT (REAL FIX)
                    ================================ */

        /* Ensure equal card sizing */
        .rgu-sf-cards {
            align-items: stretch;
        }

        .rgu-sf-card {
            width: 100%;
        }

        .rgu-sf-card-title a {
            display: block;
            /* 🔥 fixes alignment */
            width: 100%;
            /* 🔥 full clickable area */
            color: inherit;
            /* 🔥 keeps original blue */
            text-decoration: none;
            /* 🔥 removes underline */
            font: inherit;
            /* 🔥 keeps font size/style */
            line-height: inherit;
        }

        .rgu-sf-card-title a:hover {
            color: #f7941d;
        }

        /* 🔥 MOBILE PERFECT GRID FIX */
        @media (max-width: 768px) {

            .rgu-sf-cards {
                grid-template-columns: 1fr 1fr;
                /* 🔥 FORCE 2 CARDS */
                gap: 16px;
                /* tighter spacing for mobile */
            }

            /* Fix card height consistency */
            .rgu-sf-card {
                height: 100%;
            }

            /* Fix image overflow issue */
            .rgu-sf-card img {
                height: 140px;
            }

            /* Fix text wrapping */
            .rgu-sf-card-title {
                font-size: 15px;
                min-height: 40px;
            }

            /* Buttons spacing */
            .rgu-sf-card-btn {
                font-size: 12px;
                padding: 9px;
            }
        }

        /* 🔥 VERY SMALL SCREEN (optional but clean) */
        @media (max-width: 480px) {
            .rgu-sf-cards {
                grid-template-columns: 1fr;
                /* fallback to 1 */
            }
        }
    </style>

    <div class="rgu-sf-wrapper">

        <div class="rgu-sf-heading">
            Schools and <span>Faculty</span>
        </div>

        <div class="rgu-sf-top">

            <div class="rgu-sf-btn-group">
                <a href="/how-to-apply" class="rgu-sf-btn">How to Apply</a>
                <a href="/placements-process" class="rgu-sf-btn">Placements</a>
                <a href="/programs" class="rgu-sf-btn">Eligibility & Selection Criteria</a>
                <a href="/admission-programs-fees-structure" class="rgu-sf-btn">Fee Structure</a>
            </div>

            <div class="rgu-sf-right">

                <div class="rgu-sf-controls-row">
                    <select id="rguDeptDropdown" class="rgu-sf-select">
                        <option value="">Search Department...</option>
                    </select>
                    <button id="rguDeptBtn" class="rgu-sf-btn-go">Go</button>
                </div>

                <div class="rgu-sf-search-wrapper">
                    <input type="text" class="rgu-sf-search" placeholder="Search faculty...">
                    <span class="rgu-sf-search-icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="#888">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                </div>

            </div>

        </div>

        <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">

        <div class="rgu-sf-cards" id="rguSFContainer"></div>

    </div>

    <script>
        /* ===============================
       DATA (EDIT HERE ONLY)
    ================================ */
        const rguSFData = [

            {
                title: "Integrated Civil Service Programme",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/ias-banner.png",

                deptMainLink: "https://www.rgu.ac/ias-courses",

                departments: [{
                        name: "IAS Course",
                        link: "https://www.rgu.ac/ias-courses"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-applied-purescience"
            },

            {
                title: "Royal School of Agriculture (RSAG)",
                image: "https://www.rgu.ac/mobile-assets/agri.png",

                deptMainLink: "https://www.rgu.ac/department-agriculture",

                departments: [{
                    name: "Department of Agriculture",
                    link: "https://www.rgu.ac/department-agriculture"
                }],
                facultyLink: "https://www.rgu.ac/faculty-agriculture"
            },

            {
                title: "Royal School of Architecture (RSA)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/soa-1.jpg",

                deptMainLink: "https://www.rgu.ac/department-architecture",

                departments: [{
                    name: "Department of Architecture",
                    link: "https://www.rgu.ac/department-architecture"
                }, ],
                facultyLink: "https://www.rgu.ac/faculty-architecture"
            },

            {
                title: "Royal School of Applied & Pure Sciences (RSAPS)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/applied.001.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-applied-pure-science",

                departments: [{
                        name: "Department of Physics",
                        link: "https://www.rgu.ac/department-physics"
                    },
                    {
                        name: "Department of Chemistry",
                        link: "https://www.rgu.ac/department-chemistry"
                    },
                    {
                        name: "Department of Mathematics",
                        link: "https://www.rgu.ac/department-mathematics"
                    },
                ],
                facultyLink: "https://www.rgu.ac/faculty-applied-purescience"
            },

            {
                title: "Royal School of Business (RSB)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/business.jpeg",

                deptMainLink: "https://www.rgu.ac/department-business",

                departments: [{
                        name: "Department of Business",
                        link: "https://www.rgu.ac/department-business"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-business"
            },


            {
                title: "Royal School of Behavioral & Allied Sciences (RSBAS)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/behavioral.jpeg",

                deptMainLink: "https://www.rgu.ac/department-psychology",

                departments: [{
                        name: "Department of Psychology",
                        link: "https://www.rgu.ac/department-psychology"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-allied-sciences"
            },

            {
                title: "Royal School of Bio-sciences (RSBSC)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/rsbsc-school-header.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-bio-science",

                departments: [{
                        name: "Department of Biotechnology",
                        link: "https://www.rgu.ac/department-biotechnology"
                    },
                    {
                        name: "Department of Microbiology",
                        link: "https://www.rgu.ac/department-microbiology"
                    },
                    {
                        name: "Department of Food Technology",
                        link: "https://www.rgu.ac/department-food-technology"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-bio-sciences"
            },

            {
                title: "Royal School of Commerce (RSC)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/commerce.jpeg",

                deptMainLink: "https://www.rgu.ac/department-commerce",

                departments: [{
                        name: "Department of Commerce",
                        link: "https://www.rgu.ac/department-commerce"
                    },



                ],
                facultyLink: "https://www.rgu.ac/faculty-commerce"
            },

            {
                title: "Royal School of Communications & Media (RSCOM)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/media.jpeg",

                deptMainLink: "https://www.rgu.ac/department-communications-media",

                departments: [{
                        name: "Department of Communications & Media",
                        link: "https://www.rgu.ac/department-communications-media"
                    },



                ],
                facultyLink: "https://www.rgu.ac/rscom-faculty"
            },


            {
                title: "Royal School of Design (RSD)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/design.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-design",

                departments: [{
                        name: "Department of Product Design",
                        link: "https://www.rgu.ac/department-product-design"
                    },
                    {
                        name: "Department of Communication Design",
                        link: "https://www.rgu.ac/department-communication-design"
                    },
                    {
                        name: "Department of Interior Design",
                        link: "https://www.rgu.ac/department-interior-design"
                    },
                    {
                        name: "Department of Graphic Design",
                        link: "https://www.rgu.ac/department-graphic-design"
                    },
                    {
                        name: "Department of Fashion Design",
                        link: "https://www.rgu.ac/department-fashion-design"
                    },



                ],
                facultyLink: "https://www.rgu.ac/faculty-design"
            },
            {
                title: "Royal School of Environmental and Earth Sciences (RSEES)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/earth.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-enviroment-science",

                departments: [{
                        name: "Department of Geography & Geoinformatics",
                        link: "https://www.rgu.ac/department-geography-geoinformatics"
                    },
                    {
                        name: "Department of Environmental Sciences",
                        link: "https://www.rgu.ac/department-environmental-sciences"
                    },
                    {
                        name: "Department of Geology",
                        link: "https://www.rgu.ac/department-geology"
                    },




                ],
                facultyLink: "https://www.rgu.ac/faculty-environmental-earth"
            },

            {
                title: "Royal School of Engineering and Technology (RSET)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/soet.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-engineering-technology",

                departments: [{
                        name: "Department of Computer Science and Engineering",
                        link: "https://www.rgu.ac/department-cse"
                    },
                    {
                        name: "Department of Mechanical Engineering",
                        link: "https://www.rgu.ac/department-mechanical-engineering"
                    },
                    {
                        name: "Department of Civil Engineering",
                        link: "https://www.rgu.ac/department-civil-engineering"
                    },
                ],
                facultyLink: "https://www.rgu.ac/faculty-engineeringtechnology"
            },


            {
                title: "Royal School of Fine Arts (RSFA)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/art.jpeg",

                deptMainLink: "https://www.rgu.ac/department-fine-arts",

                departments: [{
                        name: "Department of Fine Arts",
                        link: "https://www.rgu.ac/department-fine-arts"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-finearts"
            },


            {
                title: "Royal School of Fashion Design (RSFT)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/fashion.jpeg",

                deptMainLink: "https://www.rgu.ac/department-fashion-design",

                departments: [{
                        name: "Department of Fashion Design",
                        link: "https://www.rgu.ac/department-fashion-design"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-fashion-design"
            },

            {
                title: "Royal School of Humanities (RSHSS)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/humanities.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-humanities",

                departments: [{
                        name: "Department of Economics",
                        link: "https://www.rgu.ac/department-economics"
                    },
                    {
                        name: "Department of History",
                        link: "https://www.rgu.ac/department-history"
                    },
                    {
                        name: "Department of Political Science & Public Administration",
                        link: "https://www.rgu.ac/department-of-political-science-public-administration"
                    },
                    {
                        name: "Department of Sociology",
                        link: "https://www.rgu.ac/department-sociology"
                    },
                    {
                        name: "Department of Social Work",
                        link: "https://www.rgu.ac/department-social-work"
                    },
                    {
                        name: "Centre for Indian Knowledge Systems (IKS)",
                        link: "https://www.rgu.ac/department-IKS"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-humanities-social"
            },

            {
                title: "Royal School of Hotel Management (RSHM)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/hotel-mgn.jpeg",

                deptMainLink: "https://www.rgu.ac/department-hotel-management",

                departments: [{
                        name: "Department of Hotel Management",
                        link: "https://www.rgu.ac/department-hotel-management"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-hotel-management"
            },

            {
                title: "Royal School of Information Technology (RSIT)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/it-school.jpeg",

                deptMainLink: "https://www.rgu.ac/department-information-technology",

                departments: [{
                        name: "Department of Information Technology",
                        link: "https://www.rgu.ac/department-information-technology"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-information-technology"
            },

            {
                title: "Royal School of Law & Administration (RSLA)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/law.jpeg",

                deptMainLink: "https://www.rgu.ac/department-law",

                departments: [{
                        name: "Department of Law",
                        link: "https://www.rgu.ac/department-law"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-law-administration"
            },

            {
                title: "Royal School of Life Sciences (RSLSC)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/rgu-schools.003.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-life-science",

                departments: [{
                        name: "Department of Botany",
                        link: "https://www.rgu.ac/department-botany"
                    },
                    {
                        name: "Department of Zoology",
                        link: "https://www.rgu.ac/department-zoology"
                    },
                    {
                        name: "Department of Forensic Sciences",
                        link: "https://www.rgu.ac/department-forensic-sciences"
                    },
                    {
                        name: "Department of Forestry",
                        link: "https://www.rgu.ac/department-forestry"
                    },



                ],
                facultyLink: "https://www.rgu.ac/faculty-lifesciences"
            },

            {
                title: "Royal School of Languages (RSL)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/rgu-campus.001.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-school-of-languages",

                departments: [{
                        name: "Department of English",
                        link: "https://www.rgu.ac/department-english"
                    },
                    {
                        name: "Department of Assamese",
                        link: "https://www.rgu.ac/department-assamese"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-languages"
            },

            {
                title: "Royal School of Library & Information Science (RSLISC)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/schools-library.jpeg",

                deptMainLink: "https://www.rgu.ac/department-library-information",

                departments: [{
                        name: "Department of Library & Information Science",
                        link: "https://www.rgu.ac/department-library-information"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-librarysciences"
            },


            {
                title: "Royal School of Medical & Allied Sciences (RSMAS)",
                image: "https://www.rgu.ac/assets/img/school-rgu/medical.jpeg",

                deptMainLink: "https://www.rgu.ac/royal-s-school-of-medical-allied-science",

                departments: [{
                        name: "Department of Physiotherapy",
                        link: "https://www.rgu.ac/department-physiotherapy"
                    },
                    {
                        name: "Department of Optometry",
                        link: "https://www.rgu.ac/department-optometry"
                    },
                    {
                        name: "Department of Anaesthesia and Operation Theatre Technology",
                        link: "https://www.rgu.ac/department-operationtheatre"
                    },
                    {
                        name: "Department of Medical Laboratory Science",
                        link: "https://www.rgu.ac/department-medical-lab"
                    },
                    {
                        name: "Department of Medical Radiography and Imaging Technology",
                        link: "https://www.rgu.ac/department-radiography"
                    },
                    {
                        name: "Department of Food Science & Nutrition",
                        link: "https://www.rgu.ac/department-food-science&nutrition"
                    },



                ],
                facultyLink: "https://www.rgu.ac/faculty-medical&allidesciences"
            },

            {
                title: "Royal School of Nursing (RSN)",
                image: "https://www.rgu.ac/assets/img/school-rgu/nursing.jpeg",

                deptMainLink: "https://www.rgu.ac/department-nursing",

                departments: [{
                        name: "Department of Nursing",
                        link: "https://www.rgu.ac/department-nursing"
                    },

                ],
                facultyLink: "https://www.rgu.ac/faculty-nursing"
            },

            {
                title: "Royal School of Pharmacy (RSP)",
                image: "https://www.rgu.ac/mobile-assets/school-rgu/pharmacy.jpeg",

                deptMainLink: "https://www.rgu.ac/department-pharmacy",

                departments: [{
                        name: "Department of Pharmacy",
                        link: "https://www.rgu.ac/department-pharmacy"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-pharmacy"
            },


            {
                title: "Royal School of Physical Education and Sports (RSPES)",
                image: "https://www.rgu.ac/home-banner/bpes.png",

                deptMainLink: "https://www.rgu.ac/department-physical-education-and-sports",

                departments: [{
                        name: "Royal School of Physical Education and Sports (RSPES)",
                        link: "https://www.rgu.ac/department-physical-education-and-sports"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-physical-education-and-sports"
            },

            {
                title: "Royal School of Pharmaceutical Sciences",
                image: "https://www.rgu.ac/mobile-assets/phar/pic.png",

                deptMainLink: "https://www.rgu.ac/department-pharmaceutical-science",

                departments: [{
                        name: "Royal School of Pharmaceutical Sciences",
                        link: "https://www.rgu.ac/department-pharmaceutical-science"
                    },


                ],
                facultyLink: ""

            },

            {
                title: "Royal School of Travel & Tourism (RSTTM)",
                image: "https://www.rgu.ac/assets/img/school-rgu/travel.jpeg",

                deptMainLink: "https://www.rgu.ac/department-travel",

                departments: [{
                        name: "Department of Travel & Tourism Management",
                        link: "https://www.rgu.ac/department-travel"
                    },


                ],
                facultyLink: "https://www.rgu.ac/faculty-travel-tourism"

            },


            /* 🔥 SPECIAL CASE */
            {
                title: "Indian Knowledge Systems (IKS)",
                image: "https://rgu.ac/mobile-assets/school-rgu/IKS%20LOGO-new.jpeg",

                deptMainLink: "https://rgu.ac/indian-knowledge-system-cell-about",

                buttons: [{
                        text: "About IKS",
                        link: "https://rgu.ac/indian-knowledge-system-cell-about",
                        type: "dept"
                    },
                    {
                        text: "Composition",
                        link: "https://rgu.ac/indian-knowledge-system-cell-composition",
                        type: "faculty"
                    },
                    {
                        text: "Events",
                        link: "https://rgu.ac/indian-knowledge-system-cell-events",
                        type: "dept"
                    },
                    {
                        text: "Syllabus",
                        link: "https://rgu.ac/indian-knowledge-system-cell-syllabus",
                        type: "faculty"
                    }
                ]
            }

        ];

        /* ===============================
           ELEMENTS
        ================================ */
        const container = document.getElementById("rguSFContainer");
        const deptDropdown = document.getElementById("rguDeptDropdown");
        const deptBtn = document.getElementById("rguDeptBtn");

        const input = document.querySelector('.rgu-sf-search');

        const resultsBox = document.createElement('div');
        resultsBox.className = "rgu-sf-results";
        document.querySelector('.rgu-sf-search-wrapper').appendChild(resultsBox);


        /* ===============================
           CACHE (VERY IMPORTANT)
        ================================ */
        const searchCache = {};


        /* ===============================
           NORMALIZE (SMART SEARCH)
        ================================ */
        function normalize(str) {
            return str.toLowerCase().replace(/\./g, "").replace(/\s+/g, "");
        }


        /* ===============================
           RENDER CARDS
        ================================ */
        function renderCards(data) {
            container.innerHTML = "";

            data.forEach(item => {

                let buttonsHTML = "";

                /* SPECIAL CASE */
                if (item.buttons) {
                    buttonsHTML = `
        <div class="rgu-sf-card-btns rgu-sf-multi">
          ${item.buttons.map(btn => `
                <a href="${btn.link}" 
                   class="rgu-sf-card-btn ${btn.type === 'dept' ? 'rgu-sf-dept' : 'rgu-sf-faculty'}">
                   ${btn.text}
                </a>
              `).join("")}
        </div>
      `;
                }

                /* NORMAL CASE */
                else {
                    let buttons = [];

                    if (item.deptMainLink && item.deptMainLink.trim() !== "") {
                        buttons.push(`
          <a href="${item.deptMainLink}" 
             class="rgu-sf-card-btn rgu-sf-dept">
             Department
          </a>
        `);
                    }

                    if (item.facultyLink && item.facultyLink.trim() !== "") {
                        buttons.push(`
          <a href="${item.facultyLink}" 
             class="rgu-sf-card-btn rgu-sf-faculty">
             Faculty
          </a>
        `);
                    }

                    buttonsHTML = buttons.length ?
                        `<div class="rgu-sf-card-btns">${buttons.join("")}</div>` :
                        "";
                }

                container.innerHTML += `
      <div class="rgu-sf-card">
        <img src="${item.image}" alt="${item.title}">

        <div class="rgu-sf-card-title">
          <a href="${item.deptMainLink || item.facultyLink || '#'}">
            ${item.title}
          </a>
        </div>

        ${buttonsHTML}
      </div>
    `;
            });
        }


        /* ===============================
           DROPDOWN
        ================================ */
        function renderDropdown(data) {

            deptDropdown.innerHTML = `<option value="">Search Department...</option>`;

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
           LIVE SEARCH (CORE)
        ================================ */
        async function liveSearch(query) {

            const key = normalize(query);

            /* CACHE HIT */
            if (searchCache[key]) {
                renderResults(searchCache[key], query);
                return;
            }

            resultsBox.innerHTML = `<div style="padding:15px;">Searching...</div>`;
            resultsBox.style.display = "block";

            let results = [];

            for (const item of rguSFData) {

                if (!item.facultyLink) continue;

                try {
                    const proxy = "https://api.allorigins.win/raw?url=" + encodeURIComponent(item.facultyLink);

                    const res = await fetch(proxy);
                    const html = await res.text();

                    const doc = new DOMParser().parseFromString(html, "text/html");
                    const elements = doc.querySelectorAll('.card-name');

                    elements.forEach(el => {
                        const name = el.innerText.trim();

                        if (normalize(name).includes(key)) {
                            results.push({
                                name,
                                parent: item.title,
                                link: item.facultyLink
                            });
                        }
                    });

                    /* LIMIT RESULTS (FAST) */
                    if (results.length > 20) break;

                } catch (err) {
                    console.log("Fetch failed:", item.facultyLink);
                }
            }

            /* SAVE CACHE */
            searchCache[key] = results;

            renderResults(results, query);
        }


        /* ===============================
           INPUT HANDLER (DEBOUNCE)
        ================================ */
        let debounceTimer;

        input.addEventListener("input", () => {

            const q = input.value.trim();

            clearTimeout(debounceTimer);

            if (q.length < 2) {
                resultsBox.innerHTML = "";
                resultsBox.style.display = "none";
                return;
            }

            debounceTimer = setTimeout(() => {
                liveSearch(q);
            }, 300);
        });


        /* ===============================
           RENDER RESULTS
        ================================ */
        function renderResults(data, q) {

            if (!data.length) {
                resultsBox.innerHTML = `<div style="padding:15px;">No results found</div>`;
                resultsBox.style.display = "block";
                return;
            }

            resultsBox.innerHTML = data.map(item => `
    <div class="rgu-sf-result-item">
      <div>
        <div class="rgu-sf-result-name">
          ${highlight(item.name, q)}
        </div>
        <div class="rgu-sf-result-dept">
          ${item.parent}
        </div>
      </div>
      <a href="${item.link}" class="rgu-sf-view-btn">View</a>
    </div>
  `).join("");

            resultsBox.style.display = "block";
        }


        /* ===============================
           HIGHLIGHT
        ================================ */
        function highlight(text, q) {
            return text.replace(
                new RegExp(`(${q})`, "gi"),
                `<span style="color:#f7941d;font-weight:700;">$1</span>`
            );
        }


        /* ===============================
           CLICK OUTSIDE
        ================================ */
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.rgu-sf-search-wrapper')) {
                resultsBox.style.display = "none";
            }
        });


        /* ===============================
           INIT
        ================================ */
        renderCards(rguSFData);
        renderDropdown(rguSFData);
    </script>
@endsection
