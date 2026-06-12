@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-cvo/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Chief Vigilance Officer (CVO)</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Leadership & Governance / Chief Vigilance Officer (CVO)
            </div>
        </div>

    </section>


    <!-- ======================================
         CHIEF VIGILANCE OFFICER
    ====================================== -->

    <section class="rgu-cvo-section">

        <div class="container">

            <div class="row g-5 align-items-start">

                <!-- Profile Card -->

                <div class="col-lg-3">

                    <div class="rgu-cvo-profile">

                        <div class="rgu-cvo-image">

                            <img src="/new-web/assets/img/discover-rgu-cvo/Dr-Diganta-Munshi.png" alt="Prof. Diganta Munshi">

                        </div>

                        <div class="rgu-cvo-details">

                            <h3>
                                Prof. Diganta Munshi
                            </h3>

                            <p class="rgu-cvo-designation">
                                Professor and Registrar, Administration
                            </p>

                            <div class="rgu-cvo-contact">

                                <div class="rgu-cvo-contact-item">

                                    <i class="fa fa-envelope"></i>

                                    <span>
                                        registrar@rgu.ac
                                    </span>

                                </div>


                                <div class="rgu-cvo-contact-item">

                                    <i class="fa fa-phone"></i>

                                    <span>
                                        8158827035
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Message -->

                <div class="col-lg-9">

                    <div class="rgu-cvo-message">

                        <p>
                            The Chief Vigilance Officer (CVO) of The Assam Royal Global University is responsible for
                            promoting transparency, accountability, and integrity across all administrative and academic
                            functions of the University. The CVO advises the University administration on
                            vigilance-related matters, ensures adherence to ethical conduct and statutory rules, and
                            oversees the prevention and detection of any irregularities.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        /*======================================
    CHIEF VIGILANCE OFFICER
    ======================================*/

        .rgu-cvo-section {
            padding: 80px 0;
            background: #e9eef6;
        }

        .rgu-cvo-profile {
            max-width: 260px;
        }

        .rgu-cvo-image {
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .rgu-cvo-image img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .rgu-cvo-details h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2.3rem;
            font-weight: 700;
            color: #4b4b4b;

            margin-bottom: 1rem;
        }

        .rgu-cvo-designation {
            font-size: 1.8rem;
            line-height: 1.7;
            color: #666;

            margin-bottom: 2rem;
        }

        .rgu-cvo-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;

            margin-bottom: 1.4rem;
        }

        .rgu-cvo-contact-item i {
            color: #d95b28;
            font-size: 2rem;
            margin-top: 2px;
        }

        .rgu-cvo-contact-item span {
            color: #666;
            font-size: 2rem;
            line-height: 1.6;
        }

        .rgu-cvo-message {
            background: #ffffff;

            border-radius: 14px;

            padding: 3rem 3.5rem;

            margin-top: 5.5rem;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, .03);
        }

        .rgu-cvo-message p {
            margin: 0;

            color: #666;

            font-size: 1.8rem;
            line-height: 2;

            text-align: justify;
        }

        /*======================================
    RESPONSIVE
    ======================================*/

        @media(max-width:991px) {

            .rgu-cvo-section {
                padding: 60px 0;
            }

            .rgu-cvo-profile {
                max-width: 320px;
                margin: auto;
            }

            .rgu-cvo-message {
                margin-top: 0;
            }

        }

        @media(max-width:767px) {

            .rgu-cvo-message {
                padding: 2.5rem;
            }

            .rgu-cvo-details h3 {
                font-size: 1.9rem;
            }

            .rgu-cvo-message p,
            .rgu-cvo-designation,
            .rgu-cvo-contact-item span {
                font-size: 1.4rem;
            }

        }
    </style>
@endsection
