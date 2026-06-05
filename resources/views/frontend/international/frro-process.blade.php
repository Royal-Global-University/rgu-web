@extends('frontend/new-master')
@section('content')

    <style>
        .frro-process-section {
            background: #dde3ee;
            padding: 70px 0;
            overflow: hidden;
        }

        .frro-process-section .container {
            max-width: 1200px;
        }

        .frro-process-title {
            font-family: "Playfair Display", serif;
            font-size: 4.8rem;
            font-weight: 700;
            color: #27467a;
            margin-bottom: 40px;
            line-height: 1.1;
        }

        .frro-process-content p {
            font-size: 1.8rem;
            line-height: 2;
            color: #5f5f5f;
            margin-bottom: 28px;
        }

        .frro-process-content strong {
            color: #444;
            font-weight: 700;
        }

        .frro-process-note {
            margin-top: 25px;
            font-family: "Playfair Display", serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: #e46d3b;
            line-height: 1.4;
        }

        @media (max-width: 991px) {

            .frro-process-title {
                font-size: 3.8rem;
            }

            .frro-process-note {
                font-size: 2.3rem;
            }
        }

        @media (max-width: 767px) {

            .frro-process-section {
                padding: 50px 0;
            }

            .frro-process-title {
                font-size: 2.8rem;
                margin-bottom: 25px;
            }

            .frro-process-content p {
                font-size: 1.4rem;
                line-height: 1.9;
                margin-bottom: 20px;
            }

            .frro-process-note {
                font-size: 1.9rem;
                line-height: 1.5;
            }
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/frro-process/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Frro Process</h1>
            <div class="pg-hero-breadcrumb">
                International / Frro Process
            </div>
        </div>

    </section>


    <section class="frro-process-section">
        <div class="container">

            <div class="frro-process-wrapper">

                <h2 class="frro-process-title">
                    Frro Process
                </h2>

                <div class="frro-process-content">

                    <p>
                        All students having a valid Indian visa of more than 180 days must obtain a residential
                        permit from the local <strong>Foreigner Registration Office (FRO)</strong> as per Indian
                        immigration law.
                    </p>

                    <p>
                        The students need to visit the Branding & Communication Department in the University
                        located at Ground Floor, A-Block and contact
                        <strong>Ms. Gurpreet Kaur Anand, Deputy Director</strong>,
                        The Office of International Affairs Email : gkanand@rgu.ac,
                        Phone : +91 9864049818, to complete the registration process.
                    </p>

                    <p>
                        As per immigration law, students should complete the process within 14 days
                        (may vary for different countries) from the date of their arrival for beyond
                        14 days penalties will be levied for late registration.
                    </p>

                    <p>
                        To avoid any such hassles, students are advised to visit the Branding &
                        Communication Department and complete these formalities the same day of
                        their reporting to the University who will also guide and complete the
                        process of the student.
                    </p>

                    <div class="frro-process-note">
                        Not Applicable In Case Of Nepalese And Bhutanese Students
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
