@extends('frontend/new-master')
@section('title', 'Pictorial Board : The Assam Royal Global University')
@section('meta_description',
    'Explore the innovative insights and visual perspectives curated by the Pictorial Board of
    Royal Global University.')
@section('meta_keywords', 'Pictorial Board')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/Discover-RGU-Statutory-Committees-Proctorial-Board/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Proctorial Board</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / Proctorial Board
            </div>
        </div>

    </section>

    <section class="proctorial-board-section">
        <div class="container">

            <p class="proctorial-board-intro">
                The Proctorial Board / Discipline Committee of The Assam Royal Global University has been
                reconstituted with the following members to look after the discipline of the entire campus:
            </p>

            <!-- Leadership Cards -->
            <div class="proctorial-board-leadership" id="proctorialBoardLeadership"></div>

            <!-- Members List -->
            <div class="proctorial-board-members-card">

                <div class="proctorial-board-members-header">
                    Members
                </div>

                <div class="proctorial-board-members-list" id="proctorialBoardMembers"></div>

            </div>

            <!-- Download Button -->
            <div class="proctorial-board-download">

                <a href="https://www.rgu.ac/mobile-assets/pdf/Proctor%20Manual.pdf" target="_blank"
                    class="proctorial-board-download-btn">

                    <i class="fa fa-download"></i>
                    Download Proctorial Board Manual

                </a>

            </div>

        </div>
    </section>

    <style>
        .proctorial-board-section {
            background: #dde3ee;
            padding: 80px 0;
        }

        .proctorial-board-section .container {
            max-width: 1280px;
        }

        .proctorial-board-intro {
            font-size: 1.8rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        /* Leadership Cards */

        .proctorial-board-leadership {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .proctorial-board-card {
            background: #eef2f7;
            border-radius: 6px;
            overflow: hidden;
            transition: transform .3s ease,
                box-shadow .3s ease;
        }

        .proctorial-board-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }

        .proctorial-board-card-header {
            background: #284b86;
            color: #fff;
            padding: 18px 18px;
            font-size: 1.75rem;
            font-weight: 700;
        }

        .proctorial-board-card-body {
            padding: 18px;
            color: #27467a;
            font-size: 1.8rem;
            line-height: 1.8;
        }

        .proctorial-board-card-body strong {
            font-weight: 700;
        }

        /* Members */

        .proctorial-board-members-card {
            background: #eef2f7;
            border-radius: 6px;
            overflow: hidden;
        }

        .proctorial-board-members-header {
            background: #284b86;
            color: #fff;
            padding: 18px;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .proctorial-board-member-row {
            padding: 18px;
            border-top: 1px solid #cfd8e7;
            font-size: 1.8rem;
            color: #27467a;
            line-height: 1.8;
            transition: background .3s ease;
        }

        .proctorial-board-member-row:hover {
            background: rgba(255, 255, 255, .6);
        }

        .proctorial-board-member-row strong {
            font-weight: 700;
        }

        /* Download */

        .proctorial-board-download {
            text-align: center;
            margin-top: 45px;
        }

        .proctorial-board-download-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            background: #d85b28;
            color: #fff;
            padding: 16px 28px;
            border-radius: 50px;
            font-size: 1.55rem;
            font-weight: 600;
            transition: all .3s ease;
        }

        .proctorial-board-download-btn:hover {
            background: #bf4b1d;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(216, 91, 40, .25);
        }

        /* Responsive */

        @media(max-width: 767px) {

            .proctorial-board-section {
                padding: 50px 0;
            }

            .proctorial-board-leadership {
                grid-template-columns: 1fr;
            }

            .proctorial-board-intro,
            .proctorial-board-card-body,
            .proctorial-board-member-row {
                font-size: 1.4rem;
            }

            .proctorial-board-card-header,
            .proctorial-board-members-header {
                font-size: 1.6rem;
            }

            .proctorial-board-download-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <script>
        const proctorialBoardLeadershipData = [{
                designation: "Chief Proctor",
                name: "Prof. (Dr.) George A.P.",
                details: "Dean RSB & RSC"
            },
            {
                designation: "Deputy Proctor",
                name: "Ms. Angira Mimani",
                details: "Associate Dean, DSW"
            },
            {
                designation: "Joint Deputy Proctor",
                name: "Dr. Indrajit Dutta",
                details: "Associate Professor & HOD RSTTM"
            },
            {
                designation: "Member Secretary",
                name: "Ms. Tanjeela Mehboob",
                details: "Asst. Professor, Dept of Pol Science, RSHSS"
            }
        ];

        const proctorialBoardMembersData = [{
                name: "Prof. (Dr.) Diganta Munshi",
                details: "Registrar-Administration, Director IQAC and Dean RSET/RSIT"
            },
            {
                name: "Dr. Narinder Kumar",
                details: "Controller of Examinations"
            },
            {
                name: "Ms. Vanita Agarwal",
                details: "Head, Laboratory Services"
            },
            {
                name: "Ms. Dipika T. Agarwal",
                details: "Dy Registrar (HR & RC) and Coordinator IQAC"
            },
            {
                name: "Mr. Mridul Phookan",
                details: "Chief Warden"
            },
            {
                name: "Mr. Shamim A Goney",
                details: "Deputy Registrar"
            },
            {
                name: "Ms. K.M. Sudha",
                details: "Asst. Professor, Dept of History, RSHSS"
            },
            {
                name: "Prof. Abhijit Dutta",
                details: "Dean, RSMAS"
            }
        ];

        document.getElementById("proctorialBoardLeadership").innerHTML =
            proctorialBoardLeadershipData.map(item => `
            <div class="proctorial-board-card">

                <div class="proctorial-board-card-header">
                    ${item.designation}
                </div>

                <div class="proctorial-board-card-body">
                    <strong>${item.name}</strong>&nbsp;&nbsp;${item.details}
                </div>

            </div>
        `).join("");

        document.getElementById("proctorialBoardMembers").innerHTML =
            proctorialBoardMembersData.map(item => `
            <div class="proctorial-board-member-row">
                <strong>${item.name}</strong> - ${item.details}
            </div>
        `).join("");
    </script>
@endsection
