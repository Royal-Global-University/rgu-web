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

    .faculty-bio-img {
      border: 1px solid #27467A;
      max-width: 100%;
    }

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

    @media (min-width: 1025px) {
      .faculty-bio-main-name {
        font-size: 45px;
      }

      .faculty-bio-designation {
        font-size: 26px;
        color: #27467A;
      }
    }

    @media (max-width: 1024px) {
      .faculty-bio-main-name {
        font-size: 35px;
      }

      .faculty-bio-designation {
        font-size: 20px;
        color: #fff;
      }
    }

    .faculty-bio-underline-effect::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 300px;
      height: 4px;
      background-color: #FF9A1E;
    }

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
              <img class="faculty-bio-img" src="mobile-assets/updated-faculty-img/Jayanta.png" alt="">
            </div>
          </div>

          <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
            <div class="faculty-bio-name-pad">
              <h2 class="faculty-bio-main-name mb-3 pt-5">
                Dr. Jayanta Kumar Das
              </h2>
              <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                DO, DNB, Ph.D.
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
                Dr. Jayanta Kumar Das
              </h2>
              <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                DO, DNB, Ph.D.
              </h2>
            </div>

            <h2 class="faculty-bio-sub-heading">Designation</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Chairman, Netra Jyoti Eye Hospital, Mangaldoi</span></li>
              <li><i class="fa fa-circle"></i> <span>Senior consultant, The Retina Centre Hospital, Guwahati</span>
              </li>
              <li><i class="fa fa-circle"></i> <span>Visiting consultant, The Apollo Hospital, Guwahati</span></li>
              <li><i class="fa fa-circle"></i> <span>Former HOD, Neuro-ophthalmology & senior consultant Oculoplasty
                  Sri Sankaradeva Nethralaya, Guwahati</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Educational Qualification</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Ph.D. – Assam University, Silchar (2010)</span></li>

              <li><i class="fa fa-circle"></i> <span>DNB (Ophthalmology) – National Board of Examination, New Delhi
                  (2003)</span></li>

              <li><i class="fa fa-circle"></i> <span>DO (Ophthalmology) – Assam Medical College, Dibrugarh (1998)</span>
              </li>

              <li><i class="fa fa-circle"></i> <span>MBBS – Assam Medical College, Dibrugarh (1993)</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Research / Training Experience</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Training in Orbit and Oculoplasty – Moorfields Eye Hospital,
                  London, UK.</span>
              </li>

              <li><i class="fa fa-circle"></i> <span>Orbit & Oculoplasty – Sankara Nethralaya,
                  Chennai.</span></li>

              <li><i class="fa fa-circle"></i> <span>Sr. Resident (Department of Ophthalmology) Trainee consultant – Sir
                  Ganga Ram Hospital, New Delhi.</span></li>

              <li><i class="fa fa-circle"></i> <span>Fellowship in General Ophthalmology – Sri Sankaradeva Nethralaya,
                  Guwahati.</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading">Working Experience</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Chairman – Netra Jyoti Eye Hospital, Mangaldoi.</span></li>
              <li><i class="fa fa-circle"></i> <span>Sr consultant Oculoplasty Visiting Consultant – Retina Centre Hospital & Apollo Hospital,
                  Guwahati.</span></li>
              <li><i class="fa fa-circle"></i> <span>HOD, Neuro-ophthalmology Sr consultant Oculoplasty – Sri
                  Sankaradeva Nethralaya.</span></li>
              <li><i class="fa fa-circle"></i> <span>Associate Consultant, Cataract, Orbit and Oculoplasty services –
                  Sri Sankaradeva Nethralaya.</span></li>
              <li><i class="fa fa-circle"></i> <span>Junior consultant, Cataract, Orbit and Oculoplasty services – Sri
                  Sankaradeva Nethralaya.</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading">Awards & Honours</h2>
            <h2 class="faculty-bio-sub-heading" style="color: #fff; font-size: 20px;">International</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Best video award, World Trauma Congress 2019</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading" style="color: #fff; font-size: 20px;">National</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>E.T. Selvam Award at AIOS Conference 2006, Bhopal.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Paper Award, OPAI Mid-term 2019.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Paper Award, OPAI 2019.</span></li>

              <li><i class="fa fa-circle"></i> <span>International Hero Award 2021 by AIOS.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Video Award, Trauma Society of India 2023.</span></li>

              <li><i class="fa fa-circle"></i> <span>Oration Award, 2024 by Tripura State Chapter, ACION, India.</span>
              </li>

              <li><i class="fa fa-circle"></i> <span>AIOS Scientific Achievement Award, 2025, New Delhi.</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading" style="color: #fff; font-size: 20px;">Zonal (East India Zone)</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Best Video Award 2007 (at East Zone & AAOS Conference,
                  Shillong).</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Video Award 2019 (at East Zone).</span></li>

              <li><i class="fa fa-circle"></i> <span>EIZOC States Felicitation Award 2023, Hazaribagh, Jharkhand.</span>
              </li>

            </ul>

            <h2 class="faculty-bio-sub-heading" style="color: #fff; font-size: 20px;">State Award</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Best Video Award, OSA 2018.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Video Award, OSA 2019.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Paper in external and miscellaneous sections, 2006, AAOS
                  Conference.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Paper in external and miscellaneous sections, 2007, AAOS
                  Conference.</span></li>

              <li><i class="fa fa-circle"></i> <span>Best Paper in external diseases, 2008, AAOS Conference.</span></li>


            </ul>

            <h2 class="faculty-bio-sub-heading">Experience of Guideship</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>
                  National Board of Examination: Guide of seven Post Graduate student of Ophthalmology
                  Co-Guide of Ph.D. student: NIMS University, Rajasthan Jaipur
                </span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Organizational Post holding</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Joint Secretary, Ocular Trauma Society of India.</span></li>

              <li><i class="fa fa-circle"></i> <span>Executive Member, Ophthalmic Plastic Association of South East
                  Asia.</span></li>

              <li><i class="fa fa-circle"></i> <span>Immediate Past General Secretary, Ophthalmological Society of
                  Assam.</span></li>

              <li><i class="fa fa-circle"></i> <span>Managing Committee Member, All India Ophthalmic Association.</span>
              </li>

              <li><i class="fa fa-circle"></i> <span>Editor, East India Zonal Ophthalmological Congress.</span></li>

              <li><i class="fa fa-circle"></i> <span>Formerly Council Member, Asia Pacific Society of Ophthalmic Plastic
                  and Reconstructive Society.</span></li>

              <li><i class="fa fa-circle"></i> <span>Treasurer, Oculoplastic Association of India.</span></li>

              <li><i class="fa fa-circle"></i> <span>Treasurer & Assistant General Secretary, Ophthalmological Society
                  of Assam.</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading">Research Specialization (Major scientific fields of interest)</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>
                  Orbit, Oculoplasty, Neuro-ophthalmology and Cataract.
                </span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Publication</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>
                  More than 12 international Publication along with two book chapters.
                </span></li>
            </ul>



          </div>
        </div>
      </div>
    </div>

  </section>

@endsection
