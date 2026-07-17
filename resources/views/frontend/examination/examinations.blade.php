@extends('frontend/new-master')
@section('content')
    <style>
        /*==================================================
            EXAMINATION CELL
    ==================================================*/

        .rgexam-section {

            position: relative;

            width: 100%;

            padding: 90px 0 0;

            background: #eef3fb;

            overflow: hidden;

        }

        /*=====================================
            Background Decoration
    ======================================*/

        .rgexam-section::before {

            content: "";

            position: absolute;

            width: 550px;

            height: 550px;

            border-radius: 50%;

            top: -250px;

            right: -200px;

            background: rgba(35, 69, 123, .04);

        }

        .rgexam-section::after {

            content: "";

            position: absolute;

            width: 420px;

            height: 420px;

            border-radius: 50%;

            left: -180px;

            bottom: -180px;

            background: rgba(35, 69, 123, .04);

        }

        /*==================================================
            TAB AREA
    ==================================================*/

        .rgexam-tabs {

            width: 100%;

            display: flex;

            justify-content: center;

            align-items: center;

            flex-wrap: wrap;

            gap: 14px;

            margin-bottom: 40px;

            position: relative;

            z-index: 10;

        }

        .rgexam-tab {

            border: 1px solid #ccd5e2;

            background: #ffffff;

            color: #45596f;

            padding: 17px 28px;

            border-radius: 8px;

            cursor: pointer;

            transition: .35s;

            font-size: 15px;

            font-weight: 500;

            outline: none;

            box-shadow: 0 8px 20px rgba(0, 0, 0, .04);

        }

        .rgexam-tab:hover {

            background: #23457b;

            color: #fff;

            border-color: #23457b;

        }

        .rgexam-tab.active {

            background: #df642d;

            color: #fff;

            border-color: #df642d;

            box-shadow:

                0 12px 30px rgba(223, 100, 45, .28);

        }

        /*==================================================
            CONTENT WRAPPER
    ==================================================*/

        .rgexam-contents {

            width: 100%;

            margin: 0;

            padding: 0;

            position: relative;

        }

        /*==================================================
            TAB PANES
    ==================================================*/

        .rgexam-pane {

            display: none;

            width: 100%;

        }

        .rgexam-pane.active {

            display: block;

            animation: rgexamFade .45s ease;

        }

        /*==================================================
            BLUE SECTION
    ==================================================*/

        .rgexam-content {

            width: 100%;

            background: linear-gradient(180deg, #35558f 0%, #10254e 100%);

            padding: 75px 0;

            border-radius: 70px 70px 0 0;

            box-shadow:

                0 -5px 40px rgba(18, 40, 84, .08);

        }

        /*==================================================
            INNER CONTENT
    ==================================================*/

        .rgexam-inner {

            max-width: 1250px;

            margin: auto;

            padding: 0 15px;

        }

        .rgexam-content h2 {

            color: #fff;

            font-family: "Playfair Display", serif;

            font-size: 58px;

            font-weight: 700;

            margin-bottom: 35px;

        }

        .rgexam-content p {

            color: rgba(255, 255, 255, .88);

            font-size: 17px;

            line-height: 2;

            margin-bottom: 22px;

        }

        .rgexam-content p:last-child {

            margin-bottom: 0;

        }

        /*==================================================
            BUTTON
    ==================================================*/

        .rgexam-btn {

            display: inline-block;

            margin-top: 18px;

            background: #df642d;

            color: #fff;

            text-decoration: none;

            padding: 16px 34px;

            border-radius: 8px;

            transition: .35s;

            font-weight: 600;

            letter-spacing: .3px;

        }

        .rgexam-btn:hover {

            background: #f17840;

            color: #fff;

            text-decoration: none;

            transform: translateY(-3px);

        }

        /*==================================================
            EMPTY TAB
    ==================================================*/

        .rgexam-empty {

            text-align: center;

            padding: 80px 20px;

        }

        .rgexam-empty i {

            font-size: 72px;

            color: rgba(255, 255, 255, .22);

            margin-bottom: 20px;

        }

        .rgexam-empty h3 {

            color: #fff;

            font-family: "Playfair Display", serif;

            font-size: 40px;

            margin-bottom: 15px;

        }

        .rgexam-empty p {

            color: rgba(255, 255, 255, .75);

            max-width: 650px;

            margin: auto;

        }

        /*==================================================
            ANIMATION
    ==================================================*/

        @keyframes rgexamFade {

            from {

                opacity: 0;

                transform: translateY(20px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }

        /*==================================================
            TABLET
    ==================================================*/

        @media(max-width:991px) {

            .rgexam-section {

                padding-top: 70px;

            }

            .rgexam-tabs {

                justify-content: flex-start;

                flex-wrap: nowrap;

                overflow-x: auto;

                padding-bottom: 8px;

            }

            .rgexam-tabs::-webkit-scrollbar {

                height: 5px;

            }

            .rgexam-tabs::-webkit-scrollbar-thumb {

                background: #d0d8e5;

                border-radius: 30px;

            }

            .rgexam-tab {

                white-space: nowrap;

                flex-shrink: 0;

            }

            .rgexam-content {

                padding: 60px 0;

                border-radius: 45px 45px 0 0;

            }

            .rgexam-content h2 {

                font-size: 42px;

            }

        }

        /*==================================================
            MOBILE
    ==================================================*/

        @media(max-width:767px) {

            .rgexam-section {

                padding-top: 55px;

            }

            .rgexam-tabs {

                gap: 10px;

                margin-bottom: 25px;

            }

            .rgexam-tab {

                padding: 14px 18px;

                font-size: 14px;

            }

            .rgexam-content {

                padding: 45px 0;

                border-radius: 28px 28px 0 0;

            }

            .rgexam-inner {

                padding: 0 22px;

            }

            .rgexam-content h2 {

                font-size: 32px;

                line-height: 1.3;

                margin-bottom: 18px;

            }

            .rgexam-content p {

                font-size: 15px;

                line-height: 1.9;

            }

            .rgexam-btn {

                display: block;

                width: 100%;

                text-align: center;

            }

            .rgexam-empty {

                padding: 60px 20px;

            }

            .rgexam-empty h3 {

                font-size: 30px;

            }

        }
    </style>

    <style>
        /*==================================================
            CONTROLLER TABLE
    ==================================================*/

        .rgexam-table-wrapper {

            margin-top: 40px;

            overflow-x: auto;

            border-radius: 18px;

            box-shadow:

                0 20px 45px rgba(0, 0, 0, .08);

        }

        .rgexam-table {

            width: 100%;

            border-collapse: collapse;

            min-width: 900px;

            background: #fff;

        }

        /*==============================*/

        .rgexam-table thead {

            background: #35558f;

        }

        .rgexam-table thead th {

            color: #fff;

            font-size: 17px;

            font-weight: 600;

            padding: 22px 18px;

            border-right: 1px solid rgba(255, 255, 255, .25);

            white-space: nowrap;

        }

        .rgexam-table thead th:last-child {

            border-right: none;

        }

        /*==============================*/

        .rgexam-table tbody td {

            padding: 22px 18px;

            color: #4e5f74;

            font-size: 16px;

            border-top: 1px solid #d7e1ef;

            border-right: 1px solid #d7e1ef;

            vertical-align: middle;

        }

        .rgexam-table tbody td:last-child {

            border-right: none;

        }

        /*==============================*/

        .rgexam-table tbody tr {

            transition: .25s;

            background: #ffffff;

        }

        .rgexam-table tbody tr:nth-child(even) {

            background: #fbfcfe;

        }

        .rgexam-table tbody tr:hover {

            background: #eef5ff;

        }

        /*==============================*/

        .rgexam-table tbody td:first-child {

            width: 90px;

            font-weight: 600;

            color: #35558f;

        }

        .rgexam-table tbody td:nth-child(2) {

            font-weight: 500;

            color: #37475d;

        }

        .rgexam-table tbody td:nth-child(3) {

            font-weight: 600;

            color: #23457b;

        }

        .rgexam-table tbody td:nth-child(4) {

            word-break: break-word;

        }

        /*==============================*/

        @media(max-width:991px) {

            .rgexam-table thead th {

                padding: 18px 15px;

                font-size: 15px;

            }

            .rgexam-table tbody td {

                padding: 18px 15px;

                font-size: 14px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/exam-cell/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Examination Cell</h1>
            <div class="pg-hero-breadcrumb">
                Examination Cell
            </div>
        </div>

    </section>


    <section class="rgexam-section">

        <!--=====================================
                TAB NAVIGATION
        ======================================-->

        <div class="container">

            <div class="rgexam-tabs">

                <button type="button" class="rgexam-tab active" data-tab="about">

                    About The Examination Cell

                </button>

                <button type="button" class="rgexam-tab" data-tab="controller">

                    Office Of The Controller Of Examination

                </button>

                <button type="button" class="rgexam-tab" data-tab="committee">

                    Examination Committee

                </button>

                <!-- <button type="button" class="rgexam-tab" data-tab="notice">

                        Notice Board

                    </button> -->

            </div>

        </div>



        <!--=====================================
                TAB CONTENTS
        ======================================-->

        <div class="rgexam-contents">

            <!--=====================================
                    ABOUT TAB
            ======================================-->

            <div class="rgexam-pane active" id="about">

                <div class="rgexam-content">

                    <div class="container">

                        <div class="rgexam-inner">

                            <h2>

                                About The Examination Cell

                            </h2>

                            <p>

                                The Examination Cell serves as a crucial administrative unit responsible for overseeing
                                all aspects related to assessments, examinations and academic evaluations.

                                With a commitment to maintaining the integrity of the University's evaluation process,
                                the Examination Cell plays a pivotal role in ensuring fair and accurate assessment of
                                students' academic performance.

                            </p>

                            <p>

                                Comprising a team of experienced professionals, the Examination Cell meticulously plans,
                                coordinates and executes various examination-related activities.

                                From scheduling and conducting semester examinations to publishing results, maintaining
                                academic records and issuing certificates, the Cell ensures transparency,
                                confidentiality and efficiency throughout the examination process.

                            </p>

                            <p>

                                The office also provides students with support regarding examination schedules, admit
                                cards, result processing, re-evaluation, transcripts, migration certificates and all
                                examination-related academic services.

                            </p>

                        </div>

                    </div>

                </div>

            </div>
            <!--=====================================
                    CONTROLLER TAB
            ======================================-->

            <div class="rgexam-pane" id="controller">

                <div class="rgexam-content">

                    <div class="container">

                        <div class="rgexam-inner">

                            <h2>

                                Office Of The Controller Of Examination

                            </h2>

                            <div class="rgexam-table-wrapper">

                                <table class="rgexam-table">

                                    <thead>

                                        <tr>

                                            <th>Sr. No.</th>

                                            <th>Designation</th>

                                            <th>Name</th>

                                            <th>Email</th>

                                        </tr>

                                    </thead>

                                    <tbody id="rgexamControllerTable">

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!--=====================================
                    EXAMINATION COMMITTEE TAB
            ======================================-->

            <div class="rgexam-pane" id="committee">

                <div class="rgexam-content">

                    <div class="container">

                        <div class="rgexam-inner">

                            <h2>

                                Examination Committee

                            </h2>

                            <div class="rgexam-table-wrapper">

                                <table class="rgexam-table">

                                    <thead>

                                        <tr>

                                            <th>Sr. No.</th>
                                            <th>Member Name</th>
                                            <th>Position</th>
                                            <th>Designation</th>

                                        </tr>

                                    </thead>

                                    <tbody id="rgexamCommitteeTable">

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!--=====================================
                    NOTICE BOARD TAB
            ======================================-->

            <!-- <div class="rgexam-pane" id="notice">

                    <div class="rgexam-content">

                        <div class="container">

                            <div class="rgexam-inner">

                               

                            </div>

                        </div>

                    </div>

                </div> -->

        </div>

    </section>

    <script>
        /*==================================================
            CONTROLLER OF EXAMINATION
    ==================================================*/

        const rgexamControllerData = [

            {
                designation: "Controller of Examinations",
                name: "Dr. Narinder Kumar",
                email: "nkumar@rgu.ac / controller@rgu.ac"
            },

            {
                designation: "Joint Controller of Examinations",
                name: "Dr. Atanu Kumar Bhattacharjee",
                email: "jointcontroller@rgu.ac / abhattacharjee@rgu.ac"
            },

            {
                designation: "Deputy Controller of Examinations",
                name: "Dr. Sanotsh Kumar Anand",
                email: "deputycoe@rgu.ac / skanand@rgu.ac"
            },

            {
                designation: "Assistant Controller of Examinations",
                name: "Mr. Zunaid Ahmed",
                email: "Zunaid.Ahmed@rgi.edu.in"
            },

            {
                designation: "Assistant Controller of Examinations",
                name: "Mr. Jugal Kishore Bhattacharya",
                email: "jkbhattacharyya@rgu.ac"
            },

            {
                designation: "Assistant Controller of Examinations",
                name: "Dr. Bhaskar Jyoti Gogoi",
                email: "bgogoi1@rgu.ac"
            },

            {
                designation: "Manager",
                name: "Mrs. Payel Dasgupta",
                email: "pdasgupta@rgu.ac / coeoffice@rgu.ac"
            },

            {
                designation: "Deputy Manager",
                name: "Raktim Dutta",
                email: "rdutta2@rgu.ac"
            },

            {
                designation: "Assistant Manager 1",
                name: "Dhrubajyoti Kalita",
                email: "djkalita@rgu.ac"
            },

            {
                designation: "Assistant Manager 2",
                name: "Manabjyoti Sarmah",
                email: "mjsarmah@rgu.ac"
            },

            {
                designation: "Senior Executive",
                name: "Rahul Chowdhury",
                email: "rchowdhury@rgu.ac"
            },

            {
                designation: "Executive",
                name: "Madhuri Deb",
                email: "mdeb2@rgu.ac"
            },

            {
                designation: "Executive",
                name: "Jayshree Hazarika",
                email: "jhazarika@rgu.ac"
            },

            {
                designation: "Data Entry Operator",
                name: "Dipankar Lahkar",
                email: "dlahkar@rgu.ac"
            },

            {
                designation: "Office Executive",
                name: "Punam Medhi",
                email: "pmedhi4@rgu.ac"
            },

            {
                designation: "Peon",
                name: "Jogendra Nath Das",
                email: ""
            }

        ];

        /*==================================================
                BUILD TABLE
        ==================================================*/

        const rgexamControllerTable = document.getElementById("rgexamControllerTable");

        if (rgexamControllerTable) {

            rgexamControllerData.forEach((item, index) => {

                rgexamControllerTable.innerHTML += `

        <tr>

            <td>${index + 1}</td>

            <td>${item.designation || ""}</td>

            <td>${item.name || ""}</td>

            <td>${item.email || ""}</td>

        </tr>

        `;

            });

        }
    </script>

    <script>
        /*==================================================
            EXAMINATION COMMITTEE
    ==================================================*/

        const rgexamCommitteeData = [

            {
                member: "Prof. (Dr.) Diganta Munshi",
                position: "Registrar – Administration, Director IQAC, Dean RSET & RSIT",
                designation: "Chairperson"
            },

            {
                member: "Prof. (Dr.) Indrani Singh Rai",
                position: "Professor & Dean, RSL",
                designation: "Member"
            },

            {
                member: "Prof. (Dr.) Kaberi Saikia",
                position: "Professor & Principal, RSN",
                designation: "Member"
            },

            {
                member: "Prof. (Dr.) George AP",
                position: "Dean, RSB & RSC",
                designation: "Member"
            },

            {
                member: "Prof. (Dr.) Abhijit Dutta",
                position: "Professor & Dean, RSMAS",
                designation: "Member"
            },

            {
                member: "Prof. (Dr.) Bhuban Ch. Barooah",
                position: "Professor & Dean, RSLA",
                designation: "Member"
            },

            {
                member: "Prof. (Dr.) Hari Prasad Agarwal",
                position: "Professor & Dean, RSD, RSFD, RSFT, RSFA, RSA",
                designation: "Member"
            },

            {
                member: "Dr. Rupesh Kumar",
                position: "Assistant Professor and Coordinator, Dept. of Medical Lab Technology, RSMAS",
                designation: "Member"
            },

            {
                member: "Dr. Priyanka Patowari",
                position: "Assistant Professor, Dept of Social Work, RSHSS",
                designation: "Member"
            },

            {
                member: "Dr. Narinder Kumar",
                position: "COE",
                designation: "Member Secretary"
            }

        ];

        /*==================================================
                BUILD COMMITTEE TABLE
        ==================================================*/

        const rgexamCommitteeTable = document.getElementById("rgexamCommitteeTable");

        if (rgexamCommitteeTable) {

            rgexamCommitteeData.forEach((item, index) => {

                rgexamCommitteeTable.innerHTML += `

        <tr>

            <td>${index + 1}</td>

            <td>${item.member || ""}</td>

            <td>${item.position || ""}</td>

            <td>${item.designation || ""}</td>

        </tr>

        `;

            });

        }
    </script>

    <script>
        /*==================================================
            EXAMINATION CELL TABS
    ==================================================*/

        document.addEventListener("DOMContentLoaded", function() {

            const tabs = document.querySelectorAll(".rgexam-tab");

            const panes = document.querySelectorAll(".rgexam-pane");

            tabs.forEach(function(tab) {

                tab.addEventListener("click", function() {

                    const target = this.getAttribute("data-tab");

                    /*==============================
                        Remove Active State
                    ==============================*/

                    tabs.forEach(function(item) {

                        item.classList.remove("active");

                    });

                    panes.forEach(function(pane) {

                        pane.classList.remove("active");

                    });

                    /*==============================
                        Activate Selected
                    ==============================*/

                    this.classList.add("active");

                    const activePane = document.getElementById(target);

                    if (activePane) {

                        activePane.classList.add("active");

                    }

                });

            });

        });
    </script>
@endsection
