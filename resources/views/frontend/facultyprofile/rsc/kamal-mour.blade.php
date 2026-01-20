@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
    </div>
    <div class="website">
        @include('frontend/components/aheader')
    </div>

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

    <div class="faculty-bio-white-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 text-center">
                    <div class="text-center">
                        <img class="faculty-bio-img" src="mobile-assets/updated-faculty-img/ca-kamal-mour.png" alt="">
                    </div>
                </div>

                <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                    <div class="faculty-bio-name-pad">
                        <h2 class="faculty-bio-main-name mb-3 pt-5">
                            Dr. Kamal Mour
                        </h2>
                        <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                            Visiting Faculty
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
                            CA. (Dr.) Kamal Mour
                        </h2>
                        <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                            Visiting Faculty
                        </h2>
                    </div>

                    <h2 class="faculty-bio-sub-heading">About</h2>
                    <ul class="faculty-bio-info-list">

                        <p style="text-align: justify;">
                            Kamal Mour is a Chartered Accountant by Profession and is into active practice since 15 Years.
                            He had
                            been actively engaged in Public speaking and various seminars of professional interests at
                            different
                            forums. He has also completed various courses conducted by ICAI viz. DISA, DIRM, Ind AS,
                            Forensic Audit
                            & Fraud Prevention, Business Responsibility & Sustainability Reporting, GST & Concurrent Audit
                            of Banks,
                            New Age Auditor Master Class of ICAI. He is also a qualified Peer Reviewer of ICAI. He has also
                            completed his Ph.D. from The Assam Royal Global University.
                        </p>

                    </ul>

                    <h2 class="faculty-bio-sub-heading">Academic Achievement</h2>
                    <ul class="faculty-bio-info-list">
                        <li><i class="fa fa-circle"></i> <span>Secured 3rd Rank in Accountancy (Hons.) in Gauhati University
                                in
                                2005.</span></li>
                    </ul>

                    <h2 class="faculty-bio-sub-heading">Academic & Teaching Experience:</h2>
                    <ul class="faculty-bio-info-list">
                        <li><i class="fa fa-circle"></i> <span>Adjunct Faculty at Royal School of Commerce & Royal School of
                                Business, constituent schools under The Assam Royal Global University.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Visiting Faculty at Tezpur University, Gauhati University,
                                Assam
                                Institute of Management, North Eastern Regional Institute of Management.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Former Member of Governing Body of Indian Institute of
                                Technology,
                                IIT Guwahati – Technology Incubation Centre and also member of Technology Development Board
                                Management
                                Committee of IIT, Guwahati.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Addressed numerous Sessions of Orientation, GMCS, GMCS-I &
                                GMCS-II
                                at Gauhati & across different Branches of Eastern India including Kolkata, Cuttack &
                                Siliguri
                                conducted by ICAI.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Addressed Training Programs for PSU executives of North
                                Eastern
                                States.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Addressed Students of ICSI for EDP, SIP, and TOP & MSOP
                                Program
                                since 2009.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Published Research Papers in UGC Care Journal and
                                International
                                Conference.</span></li>

                    </ul>

                    <h2 class="faculty-bio-sub-heading">Professional Experience</h2>
                    <h2 class="faculty-bio-sub-heading" style="color: #fff; font-size: 20px;">Post Qualification</h2>
                    <ul class="faculty-bio-info-list">
                        <li><i class="fa fa-circle"></i> <span>Working as Senior Partner & Branch In charge of Guwahati
                                Branch of
                                RKP Associates, Chartered Accountants since last 16 years.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Exposure in handling Audit Assignments in various PSUs,
                                Banks,
                                Insurance Companies, Government Organizations & Internal Audits of large Corporates
                                etc.</span></li>
                    </ul>

                    <h2 class="faculty-bio-sub-heading">Association with various Organizations</h2>
                    <ul class="faculty-bio-info-list">
                        <li><i class="fa fa-circle"></i> <span>Past Chairman of Guwahati Branch of Eastern India Regional
                                Council
                                of ICAI for 2021–2022.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Co-opted as a Member of Study Group for the Project of
                                Standards on
                                Auditing (SAs) for Audits of LLPs in the year 2025 by Auditing & Assurance Standards Board
                                of
                                ICAI.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Co-opted Member of Continuing Professional Education
                                Committee of
                                ICAI, New Delhi for 2022–2023.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Member of Career Counselling Committee of ICAI, New Delhi for
                                the
                                year 2015–2016.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Life Member of Direct Tax Professionals Association (DTPA),
                                Kolkata.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Life Member of Tax Bar Association, Guwahati.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Life Member of Indian Commerce Association.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Life Member of Indian Accounting Association.</span></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
