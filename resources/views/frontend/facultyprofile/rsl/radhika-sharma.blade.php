@extends('frontend.master')
@section('content')
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
              <img class="faculty-bio-img" src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Radhika.jpeg"
                alt="">
            </div>
          </div>

          <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
            <div class="faculty-bio-name-pad">
              <h2 class="faculty-bio-main-name mb-3 pt-5">
               Dr. Radhika Sharma
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
                Dr. Radhika Sharma
              </h2>
              <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                Assistant Professor
              </h2>
            </div>

            <h2 class="faculty-bio-sub-heading">Qualifications</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Ph.D.  - Banasthali Vidyapith</span></li>
              <li><i class="fa fa-circle"></i> <span>M.Phil (ELT) - Banasthali Vidyapith</span></li>
              <li><i class="fa fa-circle"></i> <span>M.A.(English) - Banasthali Vidyapith</span></li>
              <li><i class="fa fa-circle"></i> <span>B.A. (English Literature, Drawing and painting and Textile Designing) - Banasthali Vidyapith</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>3 months</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>3 months</span></li>
            </ul>
            <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Medical and Health Humanities, Modern Literature, psychoanalysis, Trauma Studies</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Paper Publication in Journals:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>National: 3</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading">Books Chapters Published:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>1</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Projects Undertaken:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>News article published in Eastern chronicle newspaper and editing team member of departmental magazine “Voices”. Co-ordinator roles and managerial roles in departmental seminars and conferences</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Any Other Achievements/Awards:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Diploma from Pracheen Kala Kendra in Vocal Classical</span></li>
              <li><i class="fa fa-circle"></i> <span>Represented Bihar in Mini National Volleyball game</span></li>
              <li><i class="fa fa-circle"></i> <span>Participated in music competitions and volleyball tournaments in school</span></li>


            </ul>


          </div>
        </div>
      </div>
    </div>

  </section>
@endsection
