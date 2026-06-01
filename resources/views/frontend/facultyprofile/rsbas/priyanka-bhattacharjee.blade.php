@extends('frontend.master')
@section('content')

  <!-- copy this inside the body  -->
  <style>
    /* Mobile (Up to 1024px) - Controls visibility */
    @media only screen and (max-width: 1024px) {
      .faculty-bio-desktop-display {
        display: none !important;
      }

      .faculty-bio-mobile-display {
        display: block !important;
      }
    }

    /* Desktop (1025px+) - Controls visibility */
    @media only screen and (min-width: 1025px) {
      .faculty-bio-desktop-display {
        display: block !important;
      }

      .faculty-bio-mobile-display {
        display: none !important;
      }
    }
  </style>

  <style>
    /* 1. White Section Spacing Logic */
    .faculty-bio-white-section {
      background-color: #fff;
      position: relative;
    }

    @media (min-width: 1025px) {
      .faculty-bio-white-section {
        height: 42vh;
        overflow: visible;
      }

      .faculty-bio-img {
        margin-top: 100px;
        width: 480px;
        margin-left: 45px;
      }

      .faculty-bio-name-pad {
        padding-top: 3rem;
      }
    }

    @media (max-width: 1024px) {
      .faculty-bio-white-section {
        height: 40vh;
        padding-top: 90px;
      }

      .faculty-bio-img {
        margin-top: 70px;
        width: 380px;
      }
    }

    /* 2. Image Border Style (Common) */
    .faculty-bio-img {
      border: 1px solid #27467A;
      max-width: 100%;
      /* Safety for very small screens */
    }

    /* 3. Font Styles (Responsive) */
    .faculty-bio-main-name {
      font-family: 'Times New Roman', Times, serif;
      font-weight: 700;
      color: #FF9A1E;
    }

    .faculty-bio-designation {
      font-family: 'Times New Roman', Times, serif;
      font-weight: 700;
      position: relative;
      display: inline-block;
    }

    /* Desktop Font Sizes */
    @media (min-width: 1025px) {
      .faculty-bio-main-name {
        font-size: 45px;
      }

      .faculty-bio-designation {
        font-size: 26px;
        color: #27467A;
      }
    }

    /* Mobile Font Sizes */
    @media (max-width: 1024px) {
      .faculty-bio-main-name {
        font-size: 35px;
      }

      .faculty-bio-designation {
        font-size: 20px;
        color: #fff;
      }

      /* White title on blue bg */
    }

    /* 4. Underline Style */
    .faculty-bio-underline-effect::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 300px;
      height: 4px;
      background-color: #FF9A1E;
    }

    /* 5. List Styles (Blue Section) */
    .faculty-bio-blue-section {
      background-color: #27467A;
      padding-bottom: 50px;
    }

    @media (max-width: 1024px) {
      .faculty-bio-blue-section {
        padding-top: 190px;
      }
    }

    .faculty-bio-sub-heading {
      font-family: 'Times New Roman', Times, serif;
      font-size: 22px;
      font-weight: 700;
      font-style: italic;
      color: #FF9A1E;
      margin-top: 1.5rem;
      margin-bottom: 1rem;
    }

    .faculty-bio-info-list {
      list-style: none;
      padding-left: 0;
      color: #fff;
      font-family: 'Times New Roman', Times, serif;
      font-size: 18px;
    }

    .faculty-bio-info-list li {
      display: flex;
      align-items: flex-start;
      line-height: 1.8;
      margin-bottom: 8px;
    }

    .faculty-bio-info-list i {
      font-size: 8px;
      margin-right: 10px;
      margin-top: 12px;
      flex-shrink: 0;
    }
  </style>

  <section>

    <div class="mobile">
      @include('frontend/components/mobileheader')
    </div>
    <div class="website">
      @include('frontend/components/aheader')
    </div>

    <div class="faculty-bio-white-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 text-center">
            <div class="text-center">
              <img class="faculty-bio-img" style="height: 400px; width: 400px;" src="/mobile-assets/updated-faculty-img/Ms.%20Priyanka%20Bhattacharjee.jpeg"
                alt="">
            </div>
          </div>

          <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
            <div class="faculty-bio-name-pad">
              <h2 class="faculty-bio-main-name mb-3 pt-5">
                Ms. Priyanka Bhattacharjee
              </h2>
              <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                 Assistant Professor
              </h2>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="faculty-bio-blue-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-5"></div>

          <div class="col-lg-7 pt-4 pb-4">

            <div class="faculty-bio-mobile-display">
              <h2 class="faculty-bio-main-name fw-bold pt-4">
               Ms. Priyanka Bhattacharjee
              </h2>
              <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                Assistant Professor
              </h2>
            </div>

            <p class="text-light" style="text-align: justify">
                "Ms. Priyanka Bhattacharjee is a Consultant Clinical Psychologist and Founder of PsychSpace, a mental health initiative aimed at making psychological services available, accessible and affordable. She is a Gold Medalist in both M.A. and M.Phil. programmes, holding an M.Phil. in Clinical Psychology (RCI) from Amity University, Rajasthan, and an M.A. in Psychology from Gauhati University. She also completed her B.A. (Hons.) in Education from Cotton College, Gauhati University.
            </p>
            <p class="text-light" style="text-align: justify">
                Ms. Bhattacharjee has extensive professional experience in clinical practice, teaching, and mental health services for over 12 years. She has held roles ranging from Clinical Psychologist to Senior Clinical Psychologist across diverse healthcare and academic settings. She is currently working as Consultant Clinical Psychologist at Apollo Hospitals, Guwahati and has previously worked with institutions such as Downtown Hospital, Pratiksha Hospital. Her work includes psycho-diagnostic assessment, psychotherapy, therapy for drug and behavioural de-addiction, therapy for children and adolescents, IVF and infertility counselling, autism intervention, behavioural management, and family and couples’ therapy.
            </p>
            <p class="text-light" style="text-align: justify">
                Her professional contributions extend to research, training, and community engagement. She has presented papers at several national and international conferences. She was the Research Head for the UNODC’s Family United Pilot Study in Guwahati and currently serves as the State President - Assam Mental Health Council, WICCI, as well as the Clinical Director for Special Olympics Bharat.
            </p>
            <p class="text-light" style="text-align: justify">
                Ms. Bhattacharjee’s achievements reflect her strong academic and clinical foundation, along with her continued contributions to mental health practice and community initiatives."
            </p>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- copy this inside the body  -->

@endsection
