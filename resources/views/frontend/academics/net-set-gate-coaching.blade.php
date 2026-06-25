@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Academics-Student-Support&Development-NETSETGATE Coaching/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> NET/SET/GATE Coaching</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Student Support & Development / NET/SET/GATE Coaching
            </div>
        </div>

    </section>


    <section class="netgate-benefits-section">
        <div class="container">

            <p class="netgate-intro">
                The university's coaching program for NET, SET, and GATE is tailored to assist students and
                research scholars in preparing for the National Eligibility Test (NET), State Eligibility Test (SET),
                and Graduate Aptitude Test in Engineering (GATE). These exams are pivotal for pursuing careers
                in academia, research, and engineering.
            </p>

            <div class="netgate-benefits-box">
                <h2 class="netgate-heading">Benefits</h2>

                <div class="netgate-benefits-grid">

                    <div class="netgate-card">
                        <h4>Enhanced Exam Success</h4>
                        <p>
                            The program fosters a strong grasp of subjects and sharpens problem-solving abilities.
                        </p>
                    </div>

                    <div class="netgate-card">
                        <h4>Career Advancement</h4>
                        <p>
                            Clearing NET/SET/GATE unlocks pathways to rewarding careers in research, teaching,
                            and engineering.
                        </p>
                    </div>

                    <div class="netgate-card">
                        <h4>Increased Confidence</h4>
                        <p>
                            The structured coaching boosts students' self-assurance and drive, helping them excel
                            in these competitive exams.
                        </p>
                    </div>

                    <div class="netgate-card">
                        <h4>Progressive Skill Development</h4>
                        <p>
                            Comprehensive preparation strengthens conceptual understanding and analytical skills
                            essential for success.
                        </p>
                    </div>

                    <div class="netgate-card">
                        <h4>Implementation</h4>
                        <p>
                            NET/SET/GATE coaching provides focused guidance, regular assessments,
                            and expert mentorship.
                        </p>
                    </div>

                </div>
            </div>

            <div class="netgate-beneficiaries">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <h2 class="netgate-heading">Who can benefit:</h2>

                        <ul class="netgate-list">
                            <li>Research Scholars</li>
                            <li>Postgraduate Students</li>
                            <li>Engineering Students</li>
                        </ul>

                        <p class="netgate-desc">
                            The university's NET/SET/GATE coaching program is an essential resource for
                            students and research scholars seeking to succeed in these competitive exams
                            and advance their professional aspirations.
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <img src="new-web/assets/img/Academics-Student-Support&Development-NETSETGATE Coaching/img1.png"
                            alt="NET SET GATE Coaching" class="img-fluid netgate-image">
                    </div>

                </div>
            </div>

        </div>
    </section>

    <style>
        .netgate-benefits-section {
            background: #eef1f7;
            padding: 80px 0;
        }

        .netgate-intro {
            max-width: 1000px;
            margin: 0 auto 40px;
            text-align: center;
            color: #4b5563;
            font-size: 15px;
            line-height: 1.8;
        }

        .netgate-benefits-box {
            background: linear-gradient(135deg, #284b87 0%, #001c52 100%);
            border-radius: 50px;
            padding: 60px 40px;
            margin-bottom: 70px;
        }

        .netgate-heading {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 35px;
        }

        .netgate-benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .netgate-card {
            background: #f5f5f5;
            border-radius: 12px;
            padding: 24px;
            min-height: 150px;
        }

        .netgate-card h4 {
            color: #ef6c3e;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .netgate-card p {
            font-size: 13px;
            line-height: 1.7;
            color: #555;
            margin: 0;
        }

        .netgate-beneficiaries {
            padding-top: 10px;
        }

        .netgate-beneficiaries .netgate-heading {
            color: #27477f;
            margin-bottom: 25px;
        }

        .netgate-list {
            list-style: none;
            padding: 0;
            margin: 0 0 30px;
        }

        .netgate-list li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 14px;
            color: #4b5563;
            font-size: 15px;
        }

        .netgate-list li::before {
            content: "";
            width: 6px;
            height: 6px;
            background: #ef6c3e;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 9px;
        }

        .netgate-desc {
            color: #5d6470;
            line-height: 1.9;
            font-size: 15px;
            max-width: 520px;
        }

        .netgate-image {
            width: 100%;
            border-radius: 30px;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        @media(max-width:991px) {

            .netgate-benefits-section {
                padding: 60px 0;
            }

            .netgate-benefits-box {
                padding: 40px 25px;
                border-radius: 30px;
            }

            .netgate-benefits-grid {
                grid-template-columns: 1fr;
            }

            .netgate-heading {
                font-size: 32px;
            }

            .netgate-image {
                margin-top: 30px;
            }
        }
    </style>
@endsection
