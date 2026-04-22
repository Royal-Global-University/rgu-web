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
    .underline-text {
  text-decoration: underline;
}
  </style>

  <section>

    <div class="mobile">
      @include('frontend/components/mobileheader')
      <div style="padding-top: 90px;"></div>
    </div>
    <div class="website">
      @include('frontend/components/aheader')
    </div>

    <div class="faculty-bio-white-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 text-center">
            <div class="text-center">
              <img class="faculty-bio-img" style="height: 400px; width: 400px;" src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                alt="">
            </div>
          </div>

          <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
            <div class="faculty-bio-name-pad">
              <h2 class="faculty-bio-main-name mb-3 pt-5">
                 Dr. Shwetambara Verma
              </h2>
              <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
               Professor
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
               Dr. Shwetambara Verma
              </h2>
              <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
               Professor
              </h2>
            </div>

            <h2 class="faculty-bio-sub-heading">Academic Qualification</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Ph.D. from Birla Institute of Technology, Mesra</span></li>
              <li><i class="fa fa-circle"></i> <span>M.E Structural Engineering from Birla Institute of Technology, Mesra</span></li>
              <li><i class="fa fa-circle"></i> <span>B.E Civil Engineering from Kavikulguru Institute of Technology and Science, Ramtek</span></li>

            </ul>

            <h2 class="faculty-bio-sub-heading">Experience:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Academic Experience: 12 years</span></li>
              <li><i class="fa fa-circle"></i> <span>Research Experience: 4 years</span></li>
               <li><i class="fa fa-circle"></i> <span>Industrial Experience: 3 years</span></li>

            </ul>


            <h2 class="faculty-bio-sub-heading">Worked In:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Professor and Director Student Welfare - The Assam Kaziranga University</span></li>
              <li><i class="fa fa-circle"></i> <span>PricewaterhouseCoopers Private Limited • ECBC Cell, Jharkhand Renewable Energy Development Agency, Govt. of Jharkhand</span></li>
              <li><i class="fa fa-circle"></i> <span>Amity University, Noida</span></li>
              <li><i class="fa fa-circle"></i> <span>Infrastructure Expert • SKIPA, Government of Jharkhand</span></li>
              <li><i class="fa fa-circle"></i> <span>Birla Institute of Technology, Mesra, Ranchi, India</span></li>
              <li><i class="fa fa-circle"></i> <span>Birla Institute of Technology, Patna, India</span></li>
              <li><i class="fa fa-circle"></i> <span>Cambridge Institute of Technology, Ranchi University, Ranchi India</span></li>

            </ul>



            <h2 class="faculty-bio-sub-heading">Research Interests:</h2>

            <h5 class="text-white">Paper Publications in Journals:</h5>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>International: 9</span></li>
              <li><i class="fa fa-circle"></i> <span>National Conference: 7</span></li>
              <li><i class="fa fa-circle"></i> <span>Patent Granted: 1</span></li>
              <li><i class="fa fa-circle"></i> <span>Patent Published: 2</span></li>
              <li><i class="fa fa-circle"></i> <span>Book Chapter Published:4</span></li>
              <li><i class="fa fa-circle"></i> <span>Book Published:1</span></li>


            </ul>

            <h2 class="faculty-bio-sub-heading">Projects</h2>

            <h5 class="text-white">Grant Received</h5>

            <h5 class="text-white underline-text">FY 2023-2024:</h5>
            <p class="text-white">
               A total grant of Rs. 350000/- for conducting of Face to Face Faculty Development Programme under AICTE Training and Learning (ATAL) Academy during the financial year 2023-2024
            </p>

           <h5 class="text-white underline-text">FY 2021-2022:</h5>

            <h5 class="text-white">Research Promotion Scheme</h5>
            <ul class="faculty-bio-info-list">
            <li>
                <i class="fa fa-circle"></i>
                <span>
                A total grant of Rs. 903570/- for conduct of project under Research Promotion Scheme for the North East Region (RPS-NER) during the financial year 2021-2022.
                </span>
            </li>
            <li>
                <i class="fa fa-circle"></i>
                <span>
                Title of the Project: Development of smart concrete composites using carbon fiber and modified admixture for high strength/high performance concrete structures under different loading conditions specific to North-eastern region.
                </span>
            </li>
            </ul>


            <h5 class="text-white">MODROB-NER</h5>
            <ul class="faculty-bio-info-list">
            <li>
                <i class="fa fa-circle"></i>
                <span>
                Rs.711604/- under the scheme (MODROB-NER) during the current financial year 2021-2022- reg.
                </span>
            </li>
            <li>
                <i class="fa fa-circle"></i>
                <span>
                Title of the Project: Upgradation of Civil laboratory equipments
                </span>
            </li>
            </ul>

            <h5 class="text-white">Mentor-Mentee Program for IIC Institutions</h5>
            <ul class="faculty-bio-info-list">
            <li>
                <i class="fa fa-circle"></i>
                <span>
                Rs. 2,25,000/-(Rupees Two Lakh Twenty-Five Thousand only) being the Grant-in-Aid under the Mentor- Mentee Program for IIC institutions 2021-22, MIC payable during the current financial year 2021-22- reg.
                </span>
            </li>
            <li>
                <i class="fa fa-circle"></i>
                <span>
                A total grant received: 2,190,174/-
                </span>
            </li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Any other achievements</h2>
                <ul class="faculty-bio-info-list">
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Certified IGBC Accredited Professional of The Indian Green Building Council (IGBCAP240394, 20th July 2024, list available in the IGBC
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Awarded with InRes Vivekananda Prize 2023 from the Institute of Researchers (InRes) for outstanding research contributions in the field of civil engineering.
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Reviewer of the International Journal X-Ray Spectrometry, Wiley
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Reviewer of the International Journal Structures, ELSEVIER
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Member of the editorial board (2013-2014) of ABACUS, A bi-annually internationally refereed journal on architecture, conservation, and studies. ISSN: 0973-8339.
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Established the first Students’ Chapter of IEI in Civil Engineering, School of Engineering and Technology at Kaziranga University
                    </span>
                </li>
                </ul>

                <h2 class="faculty-bio-sub-heading">Membership</h2>
                <ul class="faculty-bio-info-list">
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Life member of the Indian Society for Technical Education (ISTE) LM 90312.
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Member of the Institution of Engineers (IEI). Membership No. M-1729467
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Life member of UNESCO
                    </span>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <span>
                    Life member of Institute of Researchers (InRes) LM042306
                    </span>
                </li>
                </ul>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- copy this inside the body  -->
@endsection
