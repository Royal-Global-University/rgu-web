{{-- @extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

      <style>
    /* BODY */

    body {
      font-family: 'Times New Roman', Times, serif;
      background: #f4f7fb;
      margin: 0;
      padding: 0;
    }


    /* HERO SECTION */

    .rgu-rp-hero {
      position: relative;
      background: url("mobile-assets/conference/bg.jpeg") center/cover no-repeat;
      height: 420px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .rgu-rp-hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.345);
    }

    .rgu-rp-hero-content {
      position: relative;
      z-index: 2;
      max-width: 900px;
    }

    .rgu-rp-hero-title {
      font-size: 60px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .rgu-rp-hero-subtitle {
      font-size: 26px;
      opacity: .9;
    }


    /* MAIN SECTION */

    .rgu-rp-wrapper {
      padding: 60px 20px;
    }

    .rgu-rp-card {
      background: white;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }


    /* PROJECT BOX */

    .rgu-rp-project {
      background: #f1f6ff;
      border-left: 5px solid #24477f;
      padding: 20px;
      border-radius: 6px;
      margin: 25px 0;
    }


    /* SECTION TITLE */

    .rgu-rp-section-title {
      font-size: 24px;
      font-weight: 600;
      color: #24477f;
      margin-bottom: 25px;
    }


    /* JOB CARD */

    .rgu-rp-job-card {
      border: 1px solid #e6e6e6;
      border-radius: 10px;
      padding: 25px;
      margin-bottom: 25px;
      transition: all .25s ease;
      background: #F1F6FF;
    }

    .rgu-rp-job-card h5 {
      font-weight: 800;
    }


    .rgu-rp-job-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
    }


    /* LABEL */

    .rgu-rp-label {
      font-weight: 600;
      color: #24477f;
    }


    /* FIELD WORK */

    .rgu-rp-field-box {
      background: #fafafa;
      padding: 20px;
      border-radius: 8px;
      margin-top: 30px;
    }


    /* PROJECT DIRECTOR */

    .rgu-rp-director {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #e6e6e6;
    }


    /* RESPONSIVE */

    @media(max-width:768px) {

      .rgu-rp-hero {
        height: 300px;
        padding: 20px;
      }

      .rgu-rp-hero-title {
        font-size: 28px;
      }

      .rgu-rp-hero-subtitle {
        font-size: 15px;
      }

      .rgu-rp-card {
        padding: 25px;
      }

    }
  </style>


    <!-- HERO SECTION -->
    <section class="rgu-rp-hero">

        <div class="rgu-rp-hero-overlay"></div>

        <div class="container rgu-rp-hero-content">

            <h1 class="rgu-rp-hero-title">
                ICSSR Project Positions
            </h1>

            <p class="rgu-rp-hero-subtitle">
                at The Assam Royal Global University
            </p>

        </div>

    </section>

    <!-- MAIN CONTENT -->
    <section class="rgu-rp-wrapper">

        <div class="container">

            <div class="rgu-rp-card text-dark">

                <p>
                    Applications are invited from eligible candidates for engagement on a purely temporary and contractual
                    basis
                    for the ICSSR-sponsored research project.
                </p>


                <div class="rgu-rp-project">

                    <strong>Project Title:</strong><br><br>

                    “Negotiating Power and Gendered Citizenship: A Sociological Analysis of Political Participation and
                    Grassroots
                    Leadership among SHG Women in Panchayati Raj Institutions in Selected Districts of Lower Assam.”

                </div>


                <h3 class="rgu-rp-section-title">
                    Positions Available
                </h3>


                <!-- Research Assistant -->

                <div class="rgu-rp-job-card">

                    <h5>Research Assistant – 01 Post</h5>

                    <p>
                        <span class="rgu-rp-label">Duration:</span> One Year
                    </p>

                    <p>
                        <span class="rgu-rp-label">Essential Qualification:</span>
                        Postgraduate in Social Science discipline (Sociology / Anthropology / Social Work or any allied
                        discipline)
                        with minimum 55% marks and preferably NET / M.Phil / Ph.D.
                    </p>

                    <p>
                        Candidates with publications and prior experience of field based research will be preferred.
                    </p>

                    <p>
                        <span class="rgu-rp-label">Honorarium:</span> ₹37,000 per month
                    </p>

                </div>



                <!-- Field Worker -->

                <div class="rgu-rp-job-card">

                    <h5>Field Worker – 02 Posts</h5>

                    <p>
                        <span class="rgu-rp-label">Duration:</span> Three Months
                    </p>

                    <p>
                        <span class="rgu-rp-label">Essential Qualification:</span>
                        Postgraduate in Social Science discipline (Sociology / Anthropology / Social Work or any allied
                        subject)
                        with minimum 55% marks.
                    </p>

                    <p>
                        The candidate should have prior experience of field based research.
                    </p>

                    <p>
                        <span class="rgu-rp-label">Honorarium:</span> ₹20,000 per month
                    </p>

                </div>



                <!-- Field Work -->

                <div class="rgu-rp-field-box">

                    <div class="row">

                        <div class="col-lg-6">
                            <h5 class="rgu-rp-label">
                                Place of Field Work
                            </h5>

                            <p>
                                Kamrup, Nalbari and Barpeta districts of Assam
                            </p>

                            <h5 class="rgu-rp-label">
                                Project Director
                            </h5>

                            <p>

                                Dr. Tripti Das<br>
                                Assistant Professor of Sociology<br>
                                The Assam Royal Global University

                            </p>
                        </div>

                        <div class="col-lg-6">


                            <h5 class="rgu-rp-label">
                                Contact Us:
                            </h5>


                            <p style="font-size: 20px; font-weight: 700;">

                                Call: <a href="tel:8256053293">8256053293</a> <br>
                                Email: <a target="_blank" href="mailto:tdas1@rgu.ac">tdas1@rgu.ac</a> <br>

                                or <br>

                                Visit: <a target="_blank" href="/">www.rgu.ac</a>

                            </p>
                        </div>

                    </div>


                </div>




            </div>

        </div>

    </section>

    <script>
        /* Hover enhancement */

        function rguRpCardEffect() {

            let cards = document.querySelectorAll('.rgu-rp-job-card');

            cards.forEach(function(card) {

                card.addEventListener('mouseenter', function() {

                    this.style.borderColor = "#24477f";

                });

                card.addEventListener('mouseleave', function() {

                    this.style.borderColor = "#e6e6e6";

                });

            });

        }

        document.addEventListener("DOMContentLoaded", rguRpCardEffect);
    </script>
@endsection --}}
