@extends('frontend.master')
@section('title', 'RGU Recruitment 2025: Join Our Faculty & Staff Team, Apply Now!')
@section('meta_description', 'Hiring Faculty and Staff for 2025! Explore all current academic & administrative vacancies at RGU, Guwahati. View job details and apply directly through our official portal')
@section('meta_keywords', 'RGU Job portal')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

    <div class="mobile">
      @include('frontend/components/mobileheader')
      <div style="padding-top: 90px;"></div>
      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
        Join The <br><span style="color: #FF9A1E; font-weight: 500;"> Assam Royal Global University</span></h2>

            <style>
      /* Basic Page Styling */
      .section-f {
        padding: 2rem 0;
      }
    </style>

    <div class="section-f">
      <div class="container">

        <p class="mobile-para1 fw-bold" style="color: #24477f; text-align: justify;">
          The Assam Royal Global University, one of India’s premium private universities, has been a leadership platform
          since 2017, connecting industries, entrepreneurs, and youth. RGU fosters an environment where education,
          employment, and entrepreneurship thrive through collaboration with corporates, professionals, and academic
          institutes.
        </p>


        <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
          Explore academic and professional vacancies, view detailed job descriptions, and learn how to apply through
          our portal:
        </p>

        </div>

        <div style="padding: 10px; background-color: #ffe8cd; border-radius: 20px; border: 2px solid #FF9A1E;">

          <div class="row" style="display: flex; flex-direction: row; justify-content: center;">

            <div class="col-lg-12" style="display: flex; flex-direction: column; align-items: center; padding-right: 20px; margin-right: -1px;">
                <h3 class="text-center text-dark fw-bold pb-4">Latest Vacancy</h3>
                <img style="height: 700px" src="/mobile-assets/ads/jobs-2026.jpeg"/>
            </div>

            <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">

                <h3 class="text-center text-dark fw-bold pt-4">Other Vacancies</h3>

                              <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
                To apply/ register, click the link below -
              </p>
              <a class="mobile-headd3 fw-bold" style="color: #FF9A1E;"
                href="https://rgu.renocampus.com/activeOpenings">https://rgu.renocampus.com/activeOpenings</a>

              <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
                Or scan the QR code below -
              </p>

              <img style="width: 40%; border: 2px solid #24477f;" src="https://www.rgu.ac/assets/img/jobs.jpeg" alt="">

            </div>

          </div>

        </div>

      </div>



        {{-- <div class="mt-3">


          <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

            <!-- Header Section -->
            <div class="text-center mb-10 relative">
              <!-- Decorative glow behind title -->
              <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
              </div>

              <span
                class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

              <h1
                class="mobile-headd1 mt-3 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
              </h1>

              <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                Seeking visionary leaders with innovative ideas and a proven track record to join one of the Northeast
                India's fastest-growing private universities for the following roles!
              </p>

              <div class="inline-block">
                <span
                  class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                  LEADERSHIP POSITIONS
                </span>
              </div>
            </div>

            <!-- Content Section -->
            <div class="mb-12 px-1 mt-5">

              <!-- Role: Pro Vice-Chancellor -->
              <div class="mb-6 glass-card p-6 rounded-2xl relative overflow-hidden">
                <!-- Decorative accent -->
                <div class="absolute top-0 right-0 w-16 h-16 bg-orange-500/10 rounded-bl-full -mr-8 -mt-8"></div>

                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Pro Vice-Chancellor <span class="text-white/70 text-sm font-normal ml-2 block md:inline">(CTC upto ₹
                    60 Lacs per annum)</span>
                </h3>
                <p class="mobile-para1 mb-3">
                  Distinguished academician, below 62 years of age (as on 01.01.2025), with a minimum of 15 years of
                  overall academic experience in higher education institutions, including at least 10 years as Professor
                  in a recognized university, and a minimum of 5 years of senior academic administrative experience
                  (Dean/Director/Principal/Head of Institution).
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with a combination of academic excellence, administrative experience and leadership skills
                  will be preferred.
                </p>
              </div>

              <!-- Role: Dean - Research & Innovation -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">Dean –
                  Research & Innovation</h3>
                <p class="mobile-para1 mb-3">
                  Distinguished researcher / academician, below 62 years of age (as on 01.01.2025) with Ph.D. having a
                  minimum of 10 years' academic experience in a recognized university or research institution
                  (preferably as Professor), combined with a strong research record including at least 3-5 years of
                  leadership or administrative experience in research management demonstrating the ability to lead
                  innovation, secure and administer research funding, and foster industry-academic collaboration.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with relevant experience in similar profiles in a private university with strong research
                  background will only be considered.
                </p>
              </div>

              <!-- Role: Dean - Student Affairs -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">Dean –
                  Student Affairs</h3>
                <p class="mobile-para1 mb-3">
                  Distinguished academic / administrator, below 62 years of age (as on 01.01.2025), with a minimum of 10
                  years of teaching experience in a recognized higher education institution (preferably at the rank of
                  Professor), along with at least 3-5 years of administrative experience in student affairs, student
                  welfare, or related leadership roles.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with proven experience in student development, counselling, campus engagement, grievance
                  redressal, co- and extra-curricular program management will be considered.
                </p>
              </div>

              <!-- Role: Director - Placement and Alumni Affairs -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Placement and Alumni Affairs</h3>
                <p class="mobile-para1 mb-3">
                  A Senior Professional having an experience of minimum 10-15 years of experience in Training and
                  Placement in a University, with proven track record and contacts in industry or similar profile.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with hands-on experience in placements, corporate outreach, and alumni interaction will be
                  preferred.
                </p>
              </div>

              <!-- Role: Director - Admissions -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Admissions</h3>
                <p class="mobile-para1 mb-3">
                  A Seasoned administrator with a minimum of 10 years of progressive experience in higher education
                  administration, student recruitment, or related fields, including at least 5 years in senior
                  leadership roles managing admissions, enrolment, marketing, or outreach operations. The candidate must
                  have a strong strategic planning, stakeholder engagement, team leadership, and operational management
                  skills, with a proven ability to implement efficient admission processes and enhance student
                  enrolment.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with expertise in managing admissions, student outreach, and enrolment operations will be
                  preferred.
                </p>
              </div>

              <!-- Role: Director - Hostel Warden -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Hostel Warden (Male and Female)</h3>
                <p class="mobile-para1 mb-3">
                  An Experienced administrator with a minimum of 10-12 years of overall experience in higher education
                  or residential student management, including at least 5 years in a senior leadership role overseeing
                  hostel operations, student welfare, and campus accommodation services. The candidate should
                  demonstrate strong organizational, leadership, and conflict resolution skills, with a proven ability
                  to manage hostel facilities, ensure student safety and discipline, coordinate with academic and
                  administrative departments.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with experience in residential student programs, counselling, and emergency management will
                  be preferred.
                </p>
              </div>

              <!-- Role: Dean for the schools of -->
              <div class="mb-6 glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b]">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-4 border-b border-white/10 pb-2">Dean
                  for the schools of</h3>

                <!-- Grid for Schools List -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-2 gap-x-6 mb-6 mobile-para1 text-sm">
                  <div class="list-grid-item"><span class="list-bullet">a.</span> Applied and Pure Sciences</div>
                  <div class="list-grid-item"><span class="list-bullet">e.</span> Engineering (Computer Science/Civil
                    only)</div>
                  <div class="list-grid-item"><span class="list-bullet">b.</span> Architecture</div>
                  <div class="list-grid-item"><span class="list-bullet">f.</span> Journalism & Mass Communication</div>
                  <div class="list-grid-item"><span class="list-bullet">c.</span> Bioscience</div>
                  <div class="list-grid-item"><span class="list-bullet">g.</span> Life Science</div>
                  <div class="list-grid-item"><span class="list-bullet">d.</span> Environmental and Earth Sciences</div>
                  <div class="list-grid-item"><span class="list-bullet">h.</span> Psychology</div>
                </div>

                <p class="mobile-para1 mb-3">
                  Professor of repute in the specific field, eligible as per norms of UGC/other statutory bodies, with a
                  minimum of 5 years of experience in Academic Administration and below 62 years of age (as on
                  01.01.2025).
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with relevant experience in similar profiles in a private university with strong research
                  background will only be considered.
                </p>
              </div>

            </div>
          </div>

          <div class="text-center" style="margin-top: 40px;">
          <span style="font-size: 30px; font-weight: 800;" class="pill-orange px-8 py-2 rounded-full text-white text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">
            CTC for Deans upto ₹30 Lacs per annum
          </span>
          </div>

          <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

        </div> --}}

{{--
      </div>

      <div style="padding: 20px; background-color: #1d315f; border-radius: 20px; margin: 20px;">

        <div>
          <section-strip>
            <div class="demo-stage-container">
              <!--
            2. HTML STRUCTURE
            - src: Your specific path
            - class 1: Styling class (aurora-ember-strip-xyz987)
            - class 2: JS hook (js-hook-initiator-alpha)
            - onerror: Fallback to a placeholder so you can see the effect if local file is missing
        -->
              <img src="mobile-assets/jobs-vacs/strip.png" alt="Job Vacancies Strip"
                class="aurora-ember-strip-xyz987 js-hook-initiator-alpha"
                onerror="this.src='https://placehold.co/600x100/1a1a1a/FF9A1E?text=Job+Vacancies+Strip'">
            </div>
          </section-strip>
        </div>

        <div class="mt-3">

          <style>
            /* Requested Custom Classes */
            .mobile-headd1 {
              font-family: "Times New Roman", Helvetica, sans-serif !important;
              /* Sizing handled by Tailwind utilities mostly, but ensuring base style */
              line-height: 1.3;
            }

            .fw-bold {
              font-weight: 700;
            }

            .mobile-para1 {
              font-size: 0.95rem;
              line-height: 1.6;
              color: #e2e8f0;
              /* Light gray for readability */
            }

            /* Glassmorphism Utilities */
            .glass-panel {
              background: rgba(255, 255, 255, 0.05);
              backdrop-filter: blur(12px);
              -webkit-backdrop-filter: blur(12px);
              border: 1px solid rgba(255, 255, 255, 0.1);
              box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
              padding: 20px;
              border-radius: 20px;
            }

            .glass-card {
              background: rgba(30, 37, 70, 0.6);
              border: 1px solid rgba(255, 255, 255, 0.05);
              transition: transform 0.2s ease, background 0.2s ease;
              padding: 10px;
            }

            .glass-card:hover {
              background: rgba(40, 50, 90, 0.7);
              transform: translateY(-2px);
            }

            /* Orange Elements */
            .pill-orange {
              background: linear-gradient(135deg, #ff7e35 0%, #f45d0b 100%);
              box-shadow: 0 4px 15px rgba(244, 93, 11, 0.4);
              text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
              padding: 30px;
              border-radius: 10px;
            }

            .bg-orange-bar {
              background: linear-gradient(90deg, #f45d0b 0%, #ff8534 50%, #f45d0b 100%);
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .text-gold {
              /* background: linear-gradient(to bottom, #ffe066, #fdd835); */
              color: #FF9A1E;
              text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            }

            /* List Separator */
            .arrow-sep {
              display: inline-block;
              margin-bottom: 0.25rem;
            }

            .arrow-sep::after {
              content: " ⇒ ";
              color: #f45d0b;
              font-weight: bold;
              margin: 0 6px;
              opacity: 0.8;
            }

            .arrow-sep:last-child::after {
              content: "";
            }
          </style>

          <section>
            <div class="vac-body">
              <!-- Main Glass Container -->
              <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

                <!-- Header Section -->
                <div class="text-center mb-10 relative">
                  <!-- Decorative glow behind title -->
                  <div
                    class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
                  </div>

                  <span
                    class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

                  <h1
                    class="mt-3 mobile-headd1 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                    Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
                  </h1>

                  <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                    Seeking visionary leaders with innovative ideas and a proven track record to join one of the
                    Northeast India's fastest-growing private universities for the following roles!
                  </p>

                  <div class="inline-block">
                    <span
                      class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                      Eligibility Criteria For Faculty
                    </span>
                  </div>
                </div>

                <!-- Section 1: Other than governed by councils -->
                <div class="mb-12">
                  <h2 class="mt-4 mobile-headd1 fw-bold text-gold text-center text-xl md:text-2xl mb-6">Other than
                    governed
                    by councils</h2>

                  <!-- Disciplines List -->
                  <div
                    class="mobile-para1 text-xs md:text-sm leading-relaxed text-justify mb-8 glass-card p-6 rounded-2xl shadow-lg border border-white/5">
                    <span class="arrow-sep">Agriculture</span>
                    <span class="arrow-sep">Animation</span>
                    <span class="arrow-sep">Botany</span>
                    <span class="arrow-sep">Biotechnology</span>
                    <span class="arrow-sep">Business Administration (MBA)</span>
                    <span class="arrow-sep">Chemistry</span>
                    <span class="arrow-sep">Commerce</span>
                    <span class="arrow-sep">English</span>
                    <span class="arrow-sep">Economics</span>
                    <span class="arrow-sep">Fine Arts</span>
                    <span class="arrow-sep">Food Science & Technology</span>
                    <span class="arrow-sep">Forensic Science</span>
                    <span class="arrow-sep">Forestry</span>
                    <span class="arrow-sep">Geography</span>
                    <span class="arrow-sep">Geoinformatics</span>
                    <span class="arrow-sep">Geology</span>
                    <span class="arrow-sep">History</span>
                    <span class="arrow-sep">Indian Knowledge System</span>
                    <span class="arrow-sep">Law</span>
                    <span class="arrow-sep">Library Sciences</span>
                    <span class="arrow-sep">Mathematics</span>
                    <span class="arrow-sep">Microbiology</span>
                    <span class="arrow-sep">Physics</span>
                    <span class="arrow-sep">Public Administration</span>
                    <span class="arrow-sep">Psychology</span>
                    <span class="arrow-sep">Political Science</span>
                    <span class="arrow-sep">Social Work</span>
                    <span class="arrow-sep">Sociology</span>
                    <span class="arrow-sep">Zoology</span>
                    <span class="arrow-sep">Journalism and Mass Communication</span>
                    <span class="arrow-sep">Hotel Management / Travel and Tourism Management</span>
                    <span class="arrow-sep">Design (Communication, Fashion, Graphic, Product)</span>
                  </div>

                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor <span class="text-white/70 text-sm font-normal ml-2">(CTC upto Rs. 24 lacs per
                        annum)</span></h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. Degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 10 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines with a minimum of eight years of experience of teaching and/ or research in an
                      academic/research position equivalent to that of Assistant Professor in a University, College or
                      Accredited Research Institution/industry with a minimum of seven publications in the
                      peer-reviewed or UGC-listed journals and a total research score of Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a Ph.D. Degree in accordance with the University Grants Commission (Minimum
                      Standards and Procedure for Award of M.Phil./Ph.D. Degree) Regulations, 2009 or 2018 and their
                      amendments from time to time.
                    </p>
                  </div>
                </div>

                <!-- Section 2: Medical/Allied Health Header -->
                <!-- Full Screen Width Effect within Container -->
                <div class="-mx-6 md:-mx-10 mb-8">
                  <div
                    class="bg-orange-bar text-white font-bold text-sm md:text-lg py-4 px-6 text-center uppercase tracking-wide shadow-lg fw-bold">
                    Anesthesia & OTT/MLT/Optometry/Radiography & Imaging/Nutrition& Dietetics/ Nursing/ Physiotherapy/
                    Pharmacy
                  </div>
                </div>

                <!-- Section 2 Content -->
                <div class="mb-12 px-1">
                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor</h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 10 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines with a minimum of eight years of experience of teaching and/ or research in an
                      academic/research position equivalent to that of Assistant Professor in a University, College or
                      Accredited Research Institution/Industry with a minimum of seven publications in the
                      peer-reviewed or UGC-listed journals and a total research score of Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a Ph. D. Degree in accordance with the University Grants Commission (Minimum
                      Standards and Procedure for Award of M.Phil./Ph.D. Degree) Regulations, 2009 or 2018 and their
                      amendments from time to time.
                    </p>
                  </div>
                </div>

                <!-- Section 3: Governed by councils Header -->
                <div class="mb-10">
                  <h2 class="mobile-headd1 fw-bold text-gold text-center text-xl md:text-2xl mb-8">Governed by
                    councils</h2>

                  <!-- Grid Container -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Architecture Column -->
                    <div class="glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b] relative overflow-hidden">
                      <div class="absolute top-0 right-0 w-20 h-20 bg-orange-500/10 rounded-bl-full -mr-4 -mt-4">
                      </div>
                      <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-6 uppercase">Architecture</h3>

                      <div class="mb-6">
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Professor</h4>
                        <p class="mobile-para1">
                          Candidates with a Ph.D. Degree with other norms as per Council of Architecture.
                        </p>
                      </div>

                      <div>
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Associate /
                          Assistant Professor</h4>
                        <p class="mobile-para1">
                          As per norms of Council of Architecture.
                        </p>
                      </div>
                    </div>

                    <!-- Clinical Psychology Column -->
                    <div class="glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b] relative overflow-hidden">
                      <div class="absolute top-0 right-0 w-20 h-20 bg-orange-500/10 rounded-bl-full -mr-4 -mt-4">
                      </div>
                      <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-6 uppercase">Clinical
                        Psychology</h3>

                      <div class="mb-6">
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Professor</h4>
                        <p class="mobile-para1">
                          Candidates with a Ph.D. Degree with other norms as per Rehabilitation Council of India.
                        </p>
                      </div>

                      <div>
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Associate /
                          Assistant Professor</h4>
                        <p class="mobile-para1">
                          As per norms of Rehabilitation Council of India.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Section 4: Engineering Header -->
                <!-- Full Width Bar Effect -->
                <div class="-mx-6 md:-mx-10 mb-8 mt-12">
                  <div
                    class="bg-orange-bar text-white font-bold text-sm md:text-lg py-4 px-6 text-center uppercase tracking-wide shadow-lg fw-bold">
                    Engineering (Civil Engineering/Computer Application/Computer Science& Engineering/Information
                    Technology)
                  </div>
                </div>

                <!-- Section 4 Content -->
                <div class="mb-8 px-1">
                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor</h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 8 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines. A Master's Degree with at least 55% marks (or an equivalent grade in a point-scale,
                      wherever the grading system is followed). iii) A minimum of eight years of experience of
                      teaching and/ or research in an academic/research position equivalent to that of Assistant
                      Professor in a University, College or Accredited Research Institution/ industry with a minimum
                      of seven publications in the peer-reviewed or UGC-listed journals and a total research score of
                      Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1 mb-3">
                      Candidates with a Master's Degree with 55% marks (or an equivalent grade in a point-scale
                      wherever the grading system is followed) in a concerned/relevant/allied subject from an Indian
                      University, or an equivalent degree from an accredited foreign university.
                    </p>
                    <p class="mobile-para1 font-semibold italic text-orange-300/90">
                      Candidates with Ph.D. will be given preference.
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

        </div>

      </div>

      <div style="padding: 20px; background-color: #1d315f; border-radius: 20px; margin: 20px;">

        <div>
          <section-strip>
            <div class="demo-stage-container">
              <!--
            2. HTML STRUCTURE
            - src: Your specific path
            - class 1: Styling class (aurora-ember-strip-xyz987)
            - class 2: JS hook (js-hook-initiator-alpha)
            - onerror: Fallback to a placeholder so you can see the effect if local file is missing
        -->
              <img src="mobile-assets/jobs-vacs/strip.png" alt="Job Vacancies Strip"
                class="aurora-ember-strip-xyz987 js-hook-initiator-alpha"
                onerror="this.src='https://placehold.co/600x100/1a1a1a/FF9A1E?text=Job+Vacancies+Strip'">
            </div>
          </section-strip>
        </div>

        <div class="mt-3">

          <style>
            /* Requested Custom Classes */
            .mobile-headd1 {
              font-family: "Times New Roman", Helvetica, sans-serif !important;
              /* Sizing handled by Tailwind utilities mostly, but ensuring base style */
              line-height: 1.3;
            }

            .fw-bold {
              font-weight: 700;
            }

            .mobile-para1 {
              font-size: 0.95rem;
              line-height: 1.6;
              color: #e2e8f0;
              /* Light gray for readability */
            }

            /* Glassmorphism Utilities */
            .glass-panel {
              background: rgba(255, 255, 255, 0.05);
              backdrop-filter: blur(12px);
              -webkit-backdrop-filter: blur(12px);
              border: 1px solid rgba(255, 255, 255, 0.1);
              box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
              padding: 20px;
              border-radius: 20px;
            }

            .glass-card {
              background: rgba(30, 37, 70, 0.6);
              border: 1px solid rgba(255, 255, 255, 0.05);
              transition: transform 0.2s ease, background 0.2s ease;
              padding: 10px;
            }

            .glass-card:hover {
              background: rgba(40, 50, 90, 0.7);
              transform: translateY(-2px);
            }

            /* Orange Elements */
            .pill-orange {
              background: linear-gradient(135deg, #ff7e35 0%, #f45d0b 100%);
              box-shadow: 0 4px 15px rgba(244, 93, 11, 0.4);
              text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
              padding: 30px;
              border-radius: 10px;
            }

            .bg-orange-bar {
              background: linear-gradient(90deg, #f45d0b 0%, #ff8534 50%, #f45d0b 100%);
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .text-gold {
              /* background: linear-gradient(to bottom, #ffe066, #fdd835); */
              color: #FF9A1E;
              text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            }

            /* List Separator */
            .arrow-sep {
              display: inline-block;
              margin-bottom: 0.25rem;
            }

            .arrow-sep::after {
              content: " ⇒ ";
              color: #f45d0b;
              font-weight: bold;
              margin: 0 6px;
              opacity: 0.8;
            }

            .arrow-sep:last-child::after {
              content: "";
            }
          </style>

          <section>

            <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

              <!-- Header Section -->
              <div class="text-center mb-10 relative">
                <!-- Decorative glow behind title -->
                <div
                  class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
                </div>

                <span
                  class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

                <h1
                  class="mt-3 mobile-headd1 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                  Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
                </h1>

                <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                  Seeking talented and dedicated professionals with operational excellence and a proven track record to
                  join one of Northeast India's fastest-growing private universities for the following roles!
                </p>

                <div class="inline-block">
                  <span
                    class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                    NON-ACADEMIC
                  </span>
                </div>
              </div>

              <!-- Content Section -->
              <div class="mb-12 px-1 mt-5">

                <!-- Role: Manager - Regulatory Compliance -->
                <div class="mb-6 glass-card p-6 rounded-2xl relative overflow-hidden">
                  <!-- Decorative accent -->
                  <div class="absolute top-0 right-0 w-16 h-16 bg-orange-500/10 rounded-bl-full -mr-8 -mt-8"></div>

                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Manager – Regulatory Compliance:
                  </h3>
                  <p class="mobile-para1">
                    The candidate should possess a graduate or postgraduate degree in Law, Management, or a related
                    field, with a minimum of 5 years of experience in regulatory compliance in a university or similar
                    organization. Hands-on experience with statutory bodies such as PCI, INC, and UGC is essential. The
                    candidate should demonstrate strong analytical skills, meticulous attention to detail, and the
                    ability to implement and monitor compliance policies effectively.
                  </p>
                </div>

                <!-- Role: Sports Officer -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Sports Officer:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a master’s degree in Physical Education, Sports Science, or an equivalent
                    discipline, with at least 3–5 years of experience in organizing sports events, coaching, and
                    managing sports facilities in higher education institutions. The ideal candidate will possess strong
                    knowledge of both indoor and outdoor games, excellent team coordination skills, and the ability to
                    engage and motivate students effectively.
                  </p>
                </div>

                <!-- Role: NCC Coordinator -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">NCC
                    Coordinator:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a graduate degree and possess a valid NCC ‘C’ certificate. Preference will
                    be given to individuals with experience in cadet training, student leadership, and coordinating NCC
                    programs within educational institutions with strong organizational and mentoring skills to lead and
                    guide students in NCC activities.
                  </p>
                </div>

                <!-- Role: NSS Coordinator -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">NSS
                    Coordinator:</h3>
                  <p class="mobile-para1">
                    Candidate with a graduate or postgraduate degree in Social Work, Humanities, or a related
                    discipline, with experience in coordinating NSS or similar student development programs. The
                    candidate should be adept at planning and organizing events, engaging students in community service
                    initiatives, and fostering a spirit of social responsibility and leadership among participants.
                  </p>
                </div>

                <!-- Role: Executive - Letter Drafting -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Executive – Letter Drafting:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a graduate degree with 2–4 years of experience in administrative or
                    secretarial roles, preferably within higher education institutions. The role requires excellent
                    written communication skills, proficiency in drafting official correspondence and reports, and
                    strong attention to detail to ensure accuracy and professionalism in all communications.
                  </p>
                </div>

                <!-- Role: Graphic Designer -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Graphic Designer:</h3>
                  <p class="mobile-para1">
                    Candidate with a graduate degree or diploma in Graphic Design, Visual Communication, or Multimedia
                    Design, with 2–3 years of professional experience in creating digital graphics, multimedia content,
                    and visual communication materials. The ideal candidate will be proficient in Adobe Creative Suite,
                    video editing software, and other relevant design tools, with the ability to produce engaging
                    content for both online and offline platforms.
                  </p>
                </div>

              </div>
            </div>

          </section>

        </div>

        <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

      </div> --}}

    </div>
    </div>

    <div class="website">
      @include('frontend/components/aheader')
      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
        Join The <span style="color: #FF9A1E; font-weight: 500;"> Assam Royal Global University</span></h2>


            <style>
      /* Basic Page Styling */
      .section-f {
        padding: 2rem 0;
      }
    </style>

    <div class="section-f">
      <div class="container">

        <p class="mobile-para1 fw-bold" style="color: #24477f; text-align: justify;">
          The Assam Royal Global University, one of India’s premium private universities, has been a leadership platform
          since 2017, connecting industries, entrepreneurs, and youth. RGU fosters an environment where education,
          employment, and entrepreneurship thrive through collaboration with corporates, professionals, and academic
          institutes.
        </p>


        <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
          Explore academic and professional vacancies, view detailed job descriptions, and learn how to apply through
          our portal:
        </p>

         <div style="padding: 20px; background-color: #1d315f; border-radius: 20px; margin: 20px;">

        <div>
          <style>
            /* * 1. CSS SETUP
         * Unique class names and variables for the neon effect
         */

            section-strip {
              /* The specific requested color */
              --ember-orange-glow-hex: #FF9A1E;

            }


            /* Container just for presentation/centering */
            .demo-stage-container {
              padding: 2rem;
            }

            /* * THE UNIQUE ANIMATION
         * Uses multiple box-shadow layers to create a realistic neon diffusion
         */
            @keyframes flux-radiance-pulse-z99 {
              0% {
                box-shadow:
                  0 0 2px rgba(255, 255, 255, 0.8),
                  /* White hot core */
                  0 0 8px var(--ember-orange-glow-hex),
                  /* Inner tight glow */
                  0 0 15px var(--ember-orange-glow-hex),
                  /* Middle glow */
                  0 0 20px rgba(255, 154, 30, 0.2);
                /* Outer faint wash */
                filter: brightness(1);
                transform: scale(1);
              }

              50% {
                box-shadow:
                  0 0 4px rgba(255, 255, 255, 1),
                  0 0 12px var(--ember-orange-glow-hex),
                  0 0 25px var(--ember-orange-glow-hex),
                  0 0 40px var(--ember-orange-glow-hex),
                  /* Wide intense spread */
                  0 0 60px rgba(255, 154, 30, 0.6);
                /* Maximum atmosphere */
                filter: brightness(1.15);
                /* Image itself gets brighter */
                transform: scale(1.01);
                /* Subtle "breathing" size increase */
              }

              100% {
                box-shadow:
                  0 0 2px rgba(255, 255, 255, 0.8),
                  0 0 8px var(--ember-orange-glow-hex),
                  0 0 15px var(--ember-orange-glow-hex),
                  0 0 20px rgba(255, 154, 30, 0.2);
                filter: brightness(1);
                transform: scale(1);
              }
            }

            /* * TARGET CLASS
         * Uniquely named style class
         */
            .aurora-ember-strip-xyz987 {
              display: block;
              max-width: 100%;
              height: auto;
              /* Smooths the edges for better shadow rendering */
              border-radius: 8px;
              transition: all 0.3s ease;
              cursor: pointer;
            }

            /* * ACTIVE STATE
         * This class is toggled by the JS to start the loop
         */
            .aurora-ember-strip-xyz987.state-ignited-v2 {
              animation: flux-radiance-pulse-z99 2s infinite ease-in-out;
            }
          </style>

          <section-strip>
            <div class="demo-stage-container">
              <!--
            2. HTML STRUCTURE
            - src: Your specific path
            - class 1: Styling class (aurora-ember-strip-xyz987)
            - class 2: JS hook (js-hook-initiator-alpha)
            - onerror: Fallback to a placeholder so you can see the effect if local file is missing
        -->
              <img src="mobile-assets/jobs-vacs/strip.png" alt="Job Vacancies Strip"
                class="aurora-ember-strip-xyz987 js-hook-initiator-alpha"
                onerror="this.src='https://placehold.co/600x100/1a1a1a/FF9A1E?text=Job+Vacancies+Strip'">
            </div>
          </section-strip>

          <script>
            (function () {
              const initUniqueNeonSequence_v82 = () => {
                // 1. Find element by unique JS hook
                const targetEl = document.querySelector('.js-hook-initiator-alpha');

                if (!targetEl) return;

                // 2. Define the active class name defined in CSS
                const activeClass = 'state-ignited-v2';

                // 3. Add class immediately to start animation
                // (Wrapped in requestAnimationFrame for performance safety)
                requestAnimationFrame(() => {
                  targetEl.classList.add(activeClass);
                });

                // Optional: Pause animation on click, resume on second click
                targetEl.addEventListener('click', () => {
                  if (targetEl.style.animationPlayState === 'paused') {
                    targetEl.style.animationPlayState = 'running';
                  } else {
                    targetEl.style.animationPlayState = 'paused';
                  }
                });
              };

              // Run when DOM is ready
              if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initUniqueNeonSequence_v82);
              } else {
                initUniqueNeonSequence_v82();
              }
            })();
          </script>
        </div>
        </div>

        <div style="padding: 30px; background-color: #ffe8cd; border-radius: 20px; border: 2px solid #FF9A1E;">

          <div class="row" style="display: flex; flex-direction: row; justify-content: center;">

            <div class="col-lg-9" style="display: flex; flex-direction: column; align-items: center; padding-right: 20px; margin-right: -1px;">
                <h2 class="text-center text-dark fw-bold">Latest Vacancie</h2>
                <img style="height: 700px" src="/mobile-assets/ads/jobs-2026.jpeg"/>
            </div>

            <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">

                <h2 class="text-center text-dark fw-bold pt-4">Other Vacancie</h2>

                              <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
                To apply/ register, click the link below -
              </p>
              <a class="mobile-headd3 fw-bold" style="color: #FF9A1E;"
                href="https://rgu.renocampus.com/activeOpenings">https://rgu.renocampus.com/activeOpenings</a>

              <p class="mobile-headd3 fw-bold text-center" style="color: #24477f; padding-top: 15px;">
                Or scan the QR code below -
              </p>

              <img style="width: 40%; border: 2px solid #24477f;" src="https://www.rgu.ac/assets/img/jobs.jpeg" alt="">

            </div>

          </div>

        </div>

      </div>



        {{-- <div class="mt-3">


          <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

            <!-- Header Section -->
            <div class="text-center mb-10 relative">
              <!-- Decorative glow behind title -->
              <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
              </div>

              <span
                class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

              <h1
                class="mobile-headd1 mt-3 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
              </h1>

              <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                Seeking visionary leaders with innovative ideas and a proven track record to join one of the Northeast
                India's fastest-growing private universities for the following roles!
              </p>

              <div class="inline-block">
                <span
                  class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                  LEADERSHIP POSITIONS
                </span>
              </div>
            </div>

            <!-- Content Section -->
            <div class="mb-12 px-1 mt-5">

              <!-- Role: Pro Vice-Chancellor -->
              <div class="mb-6 glass-card p-6 rounded-2xl relative overflow-hidden">
                <!-- Decorative accent -->
                <div class="absolute top-0 right-0 w-16 h-16 bg-orange-500/10 rounded-bl-full -mr-8 -mt-8"></div>

                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Pro Vice-Chancellor <span class="text-white/70 text-sm font-normal ml-2 block md:inline">(CTC upto ₹
                    60 Lacs per annum)</span>
                </h3>
                <p class="mobile-para1 mb-3">
                  Distinguished academician, below 62 years of age (as on 01.01.2025), with a minimum of 15 years of
                  overall academic experience in higher education institutions, including at least 10 years as Professor
                  in a recognized university, and a minimum of 5 years of senior academic administrative experience
                  (Dean/Director/Principal/Head of Institution).
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with a combination of academic excellence, administrative experience and leadership skills
                  will be preferred.
                </p>
              </div>

              <!-- Role: Dean - Research & Innovation -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">Dean –
                  Research & Innovation</h3>
                <p class="mobile-para1 mb-3">
                  Distinguished researcher / academician, below 62 years of age (as on 01.01.2025) with Ph.D. having a
                  minimum of 10 years' academic experience in a recognized university or research institution
                  (preferably as Professor), combined with a strong research record including at least 3-5 years of
                  leadership or administrative experience in research management demonstrating the ability to lead
                  innovation, secure and administer research funding, and foster industry-academic collaboration.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with relevant experience in similar profiles in a private university with strong research
                  background will only be considered.
                </p>
              </div>

              <!-- Role: Dean - Student Affairs -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">Dean –
                  Student Affairs</h3>
                <p class="mobile-para1 mb-3">
                  Distinguished academic / administrator, below 62 years of age (as on 01.01.2025), with a minimum of 10
                  years of teaching experience in a recognized higher education institution (preferably at the rank of
                  Professor), along with at least 3-5 years of administrative experience in student affairs, student
                  welfare, or related leadership roles.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with proven experience in student development, counselling, campus engagement, grievance
                  redressal, co- and extra-curricular program management will be considered.
                </p>
              </div>

              <!-- Role: Director - Placement and Alumni Affairs -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Placement and Alumni Affairs</h3>
                <p class="mobile-para1 mb-3">
                  A Senior Professional having an experience of minimum 10-15 years of experience in Training and
                  Placement in a University, with proven track record and contacts in industry or similar profile.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with hands-on experience in placements, corporate outreach, and alumni interaction will be
                  preferred.
                </p>
              </div>

              <!-- Role: Director - Admissions -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Admissions</h3>
                <p class="mobile-para1 mb-3">
                  A Seasoned administrator with a minimum of 10 years of progressive experience in higher education
                  administration, student recruitment, or related fields, including at least 5 years in senior
                  leadership roles managing admissions, enrolment, marketing, or outreach operations. The candidate must
                  have a strong strategic planning, stakeholder engagement, team leadership, and operational management
                  skills, with a proven ability to implement efficient admission processes and enhance student
                  enrolment.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with expertise in managing admissions, student outreach, and enrolment operations will be
                  preferred.
                </p>
              </div>

              <!-- Role: Director - Hostel Warden -->
              <div class="mb-6 glass-card p-6 rounded-2xl">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                  Director – Hostel Warden (Male and Female)</h3>
                <p class="mobile-para1 mb-3">
                  An Experienced administrator with a minimum of 10-12 years of overall experience in higher education
                  or residential student management, including at least 5 years in a senior leadership role overseeing
                  hostel operations, student welfare, and campus accommodation services. The candidate should
                  demonstrate strong organizational, leadership, and conflict resolution skills, with a proven ability
                  to manage hostel facilities, ensure student safety and discipline, coordinate with academic and
                  administrative departments.
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with experience in residential student programs, counselling, and emergency management will
                  be preferred.
                </p>
              </div>

              <!-- Role: Dean for the schools of -->
              <div class="mb-6 glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b]">
                <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-4 border-b border-white/10 pb-2">Dean
                  for the schools of</h3>

                <!-- Grid for Schools List -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-2 gap-x-6 mb-6 mobile-para1 text-sm">
                  <div class="list-grid-item"><span class="list-bullet">a.</span> Applied and Pure Sciences</div>
                  <div class="list-grid-item"><span class="list-bullet">e.</span> Engineering (Computer Science/Civil
                    only)</div>
                  <div class="list-grid-item"><span class="list-bullet">b.</span> Architecture</div>
                  <div class="list-grid-item"><span class="list-bullet">f.</span> Journalism & Mass Communication</div>
                  <div class="list-grid-item"><span class="list-bullet">c.</span> Bioscience</div>
                  <div class="list-grid-item"><span class="list-bullet">g.</span> Life Science</div>
                  <div class="list-grid-item"><span class="list-bullet">d.</span> Environmental and Earth Sciences</div>
                  <div class="list-grid-item"><span class="list-bullet">h.</span> Psychology</div>
                </div>

                <p class="mobile-para1 mb-3">
                  Professor of repute in the specific field, eligible as per norms of UGC/other statutory bodies, with a
                  minimum of 5 years of experience in Academic Administration and below 62 years of age (as on
                  01.01.2025).
                </p>
                <p class="mobile-para1 font-medium text-orange-200/80 text-sm italic">
                  Candidates with relevant experience in similar profiles in a private university with strong research
                  background will only be considered.
                </p>
              </div>

            </div>
          </div>

          <div class="text-center" style="margin-top: 40px;">
          <span style="font-size: 30px; font-weight: 800;" class="pill-orange px-8 py-2 rounded-full text-white text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">
            CTC for Deans upto ₹30 Lacs per annum
          </span>
          </div>

          <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

        </div> --}}

{{--
      </div>

      <div style="padding: 20px; background-color: #1d315f; border-radius: 20px; margin: 20px;">

        <div>
          <section-strip>
            <div class="demo-stage-container">
              <!--
            2. HTML STRUCTURE
            - src: Your specific path
            - class 1: Styling class (aurora-ember-strip-xyz987)
            - class 2: JS hook (js-hook-initiator-alpha)
            - onerror: Fallback to a placeholder so you can see the effect if local file is missing
        -->
              <img src="mobile-assets/jobs-vacs/strip.png" alt="Job Vacancies Strip"
                class="aurora-ember-strip-xyz987 js-hook-initiator-alpha"
                onerror="this.src='https://placehold.co/600x100/1a1a1a/FF9A1E?text=Job+Vacancies+Strip'">
            </div>
          </section-strip>
        </div>

        <div class="mt-3">

          <style>
            /* Requested Custom Classes */
            .mobile-headd1 {
              font-family: "Times New Roman", Helvetica, sans-serif !important;
              /* Sizing handled by Tailwind utilities mostly, but ensuring base style */
              line-height: 1.3;
            }

            .fw-bold {
              font-weight: 700;
            }

            .mobile-para1 {
              font-size: 0.95rem;
              line-height: 1.6;
              color: #e2e8f0;
              /* Light gray for readability */
            }

            /* Glassmorphism Utilities */
            .glass-panel {
              background: rgba(255, 255, 255, 0.05);
              backdrop-filter: blur(12px);
              -webkit-backdrop-filter: blur(12px);
              border: 1px solid rgba(255, 255, 255, 0.1);
              box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
              padding: 20px;
              border-radius: 20px;
            }

            .glass-card {
              background: rgba(30, 37, 70, 0.6);
              border: 1px solid rgba(255, 255, 255, 0.05);
              transition: transform 0.2s ease, background 0.2s ease;
              padding: 10px;
            }

            .glass-card:hover {
              background: rgba(40, 50, 90, 0.7);
              transform: translateY(-2px);
            }

            /* Orange Elements */
            .pill-orange {
              background: linear-gradient(135deg, #ff7e35 0%, #f45d0b 100%);
              box-shadow: 0 4px 15px rgba(244, 93, 11, 0.4);
              text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
              padding: 30px;
              border-radius: 10px;
            }

            .bg-orange-bar {
              background: linear-gradient(90deg, #f45d0b 0%, #ff8534 50%, #f45d0b 100%);
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .text-gold {
              /* background: linear-gradient(to bottom, #ffe066, #fdd835); */
              color: #FF9A1E;
              text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            }

            /* List Separator */
            .arrow-sep {
              display: inline-block;
              margin-bottom: 0.25rem;
            }

            .arrow-sep::after {
              content: " ⇒ ";
              color: #f45d0b;
              font-weight: bold;
              margin: 0 6px;
              opacity: 0.8;
            }

            .arrow-sep:last-child::after {
              content: "";
            }
          </style>

          <section>
            <div class="vac-body">
              <!-- Main Glass Container -->
              <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

                <!-- Header Section -->
                <div class="text-center mb-10 relative">
                  <!-- Decorative glow behind title -->
                  <div
                    class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
                  </div>

                  <span
                    class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

                  <h1
                    class="mt-3 mobile-headd1 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                    Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
                  </h1>

                  <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                    Seeking visionary leaders with innovative ideas and a proven track record to join one of the
                    Northeast India's fastest-growing private universities for the following roles!
                  </p>

                  <div class="inline-block">
                    <span
                      class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                      Eligibility Criteria For Faculty
                    </span>
                  </div>
                </div>

                <!-- Section 1: Other than governed by councils -->
                <div class="mb-12">
                  <h2 class="mt-4 mobile-headd1 fw-bold text-gold text-center text-xl md:text-2xl mb-6">Other than
                    governed
                    by councils</h2>

                  <!-- Disciplines List -->
                  <div
                    class="mobile-para1 text-xs md:text-sm leading-relaxed text-justify mb-8 glass-card p-6 rounded-2xl shadow-lg border border-white/5">
                    <span class="arrow-sep">Agriculture</span>
                    <span class="arrow-sep">Animation</span>
                    <span class="arrow-sep">Botany</span>
                    <span class="arrow-sep">Biotechnology</span>
                    <span class="arrow-sep">Business Administration (MBA)</span>
                    <span class="arrow-sep">Chemistry</span>
                    <span class="arrow-sep">Commerce</span>
                    <span class="arrow-sep">English</span>
                    <span class="arrow-sep">Economics</span>
                    <span class="arrow-sep">Fine Arts</span>
                    <span class="arrow-sep">Food Science & Technology</span>
                    <span class="arrow-sep">Forensic Science</span>
                    <span class="arrow-sep">Forestry</span>
                    <span class="arrow-sep">Geography</span>
                    <span class="arrow-sep">Geoinformatics</span>
                    <span class="arrow-sep">Geology</span>
                    <span class="arrow-sep">History</span>
                    <span class="arrow-sep">Indian Knowledge System</span>
                    <span class="arrow-sep">Law</span>
                    <span class="arrow-sep">Library Sciences</span>
                    <span class="arrow-sep">Mathematics</span>
                    <span class="arrow-sep">Microbiology</span>
                    <span class="arrow-sep">Physics</span>
                    <span class="arrow-sep">Public Administration</span>
                    <span class="arrow-sep">Psychology</span>
                    <span class="arrow-sep">Political Science</span>
                    <span class="arrow-sep">Social Work</span>
                    <span class="arrow-sep">Sociology</span>
                    <span class="arrow-sep">Zoology</span>
                    <span class="arrow-sep">Journalism and Mass Communication</span>
                    <span class="arrow-sep">Hotel Management / Travel and Tourism Management</span>
                    <span class="arrow-sep">Design (Communication, Fashion, Graphic, Product)</span>
                  </div>

                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor <span class="text-white/70 text-sm font-normal ml-2">(CTC upto Rs. 24 lacs per
                        annum)</span></h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. Degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 10 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines with a minimum of eight years of experience of teaching and/ or research in an
                      academic/research position equivalent to that of Assistant Professor in a University, College or
                      Accredited Research Institution/industry with a minimum of seven publications in the
                      peer-reviewed or UGC-listed journals and a total research score of Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a Ph.D. Degree in accordance with the University Grants Commission (Minimum
                      Standards and Procedure for Award of M.Phil./Ph.D. Degree) Regulations, 2009 or 2018 and their
                      amendments from time to time.
                    </p>
                  </div>
                </div>

                <!-- Section 2: Medical/Allied Health Header -->
                <!-- Full Screen Width Effect within Container -->
                <div class="-mx-6 md:-mx-10 mb-8">
                  <div
                    class="bg-orange-bar text-white font-bold text-sm md:text-lg py-4 px-6 text-center uppercase tracking-wide shadow-lg fw-bold">
                    Anesthesia & OTT/MLT/Optometry/Radiography & Imaging/Nutrition& Dietetics/ Nursing/ Physiotherapy/
                    Pharmacy
                  </div>
                </div>

                <!-- Section 2 Content -->
                <div class="mb-12 px-1">
                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor</h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 10 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines with a minimum of eight years of experience of teaching and/ or research in an
                      academic/research position equivalent to that of Assistant Professor in a University, College or
                      Accredited Research Institution/Industry with a minimum of seven publications in the
                      peer-reviewed or UGC-listed journals and a total research score of Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a Ph. D. Degree in accordance with the University Grants Commission (Minimum
                      Standards and Procedure for Award of M.Phil./Ph.D. Degree) Regulations, 2009 or 2018 and their
                      amendments from time to time.
                    </p>
                  </div>
                </div>

                <!-- Section 3: Governed by councils Header -->
                <div class="mb-10">
                  <h2 class="mobile-headd1 fw-bold text-gold text-center text-xl md:text-2xl mb-8">Governed by
                    councils</h2>

                  <!-- Grid Container -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Architecture Column -->
                    <div class="glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b] relative overflow-hidden">
                      <div class="absolute top-0 right-0 w-20 h-20 bg-orange-500/10 rounded-bl-full -mr-4 -mt-4">
                      </div>
                      <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-6 uppercase">Architecture</h3>

                      <div class="mb-6">
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Professor</h4>
                        <p class="mobile-para1">
                          Candidates with a Ph.D. Degree with other norms as per Council of Architecture.
                        </p>
                      </div>

                      <div>
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Associate /
                          Assistant Professor</h4>
                        <p class="mobile-para1">
                          As per norms of Council of Architecture.
                        </p>
                      </div>
                    </div>

                    <!-- Clinical Psychology Column -->
                    <div class="glass-card p-6 rounded-2xl border-l-4 border-[#f45d0b] relative overflow-hidden">
                      <div class="absolute top-0 right-0 w-20 h-20 bg-orange-500/10 rounded-bl-full -mr-4 -mt-4">
                      </div>
                      <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-6 uppercase">Clinical
                        Psychology</h3>

                      <div class="mb-6">
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Professor</h4>
                        <p class="mobile-para1">
                          Candidates with a Ph.D. Degree with other norms as per Rehabilitation Council of India.
                        </p>
                      </div>

                      <div>
                        <h4 style="color: #FF9A1E;" class="mobile-headd1 fw-bold text-white/90 text-base md:text-lg mb-2">Associate /
                          Assistant Professor</h4>
                        <p class="mobile-para1">
                          As per norms of Rehabilitation Council of India.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Section 4: Engineering Header -->
                <!-- Full Width Bar Effect -->
                <div class="-mx-6 md:-mx-10 mb-8 mt-12">
                  <div
                    class="bg-orange-bar text-white font-bold text-sm md:text-lg py-4 px-6 text-center uppercase tracking-wide shadow-lg fw-bold">
                    Engineering (Civil Engineering/Computer Application/Computer Science& Engineering/Information
                    Technology)
                  </div>
                </div>

                <!-- Section 4 Content -->
                <div class="mb-8 px-1">
                  <!-- Role: Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Professor</h3>
                    <p class="mobile-para1">
                      An eminent scholar having a Ph.D. degree in the concerned/allied/relevant discipline, with a
                      minimum of 10 years of experience in University/ college as Assistant Professor/Associate
                      Professor/Professor and published work of high quality, actively engaged in research with
                      evidence of published work with, a minimum of 8 research publications in the peer-reviewed or
                      UGC-listed journals and a total research score of 120 as per UGC criteria.
                    </p>
                  </div>

                  <!-- Role: Associate Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Associate Professor</h3>
                    <p class="mobile-para1">
                      Candidates with a good academic record, with a Ph.D. Degree in the concerned/allied/relevant
                      disciplines. A Master's Degree with at least 55% marks (or an equivalent grade in a point-scale,
                      wherever the grading system is followed). iii) A minimum of eight years of experience of
                      teaching and/ or research in an academic/research position equivalent to that of Assistant
                      Professor in a University, College or Accredited Research Institution/ industry with a minimum
                      of seven publications in the peer-reviewed or UGC-listed journals and a total research score of
                      Seventy Five (75).
                    </p>
                  </div>

                  <!-- Role: Assistant Professor -->
                  <div class="mb-6 glass-card p-6 rounded-2xl">
                    <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                      Assistant Professor</h3>
                    <p class="mobile-para1 mb-3">
                      Candidates with a Master's Degree with 55% marks (or an equivalent grade in a point-scale
                      wherever the grading system is followed) in a concerned/relevant/allied subject from an Indian
                      University, or an equivalent degree from an accredited foreign university.
                    </p>
                    <p class="mobile-para1 font-semibold italic text-orange-300/90">
                      Candidates with Ph.D. will be given preference.
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

        </div>

      </div>

      <div style="padding: 20px; background-color: #1d315f; border-radius: 20px; margin: 20px;">

        <div>
          <section-strip>
            <div class="demo-stage-container">
              <!--
            2. HTML STRUCTURE
            - src: Your specific path
            - class 1: Styling class (aurora-ember-strip-xyz987)
            - class 2: JS hook (js-hook-initiator-alpha)
            - onerror: Fallback to a placeholder so you can see the effect if local file is missing
        -->
              <img src="mobile-assets/jobs-vacs/strip.png" alt="Job Vacancies Strip"
                class="aurora-ember-strip-xyz987 js-hook-initiator-alpha"
                onerror="this.src='https://placehold.co/600x100/1a1a1a/FF9A1E?text=Job+Vacancies+Strip'">
            </div>
          </section-strip>
        </div>

        <div class="mt-3">

          <style>
            /* Requested Custom Classes */
            .mobile-headd1 {
              font-family: "Times New Roman", Helvetica, sans-serif !important;
              /* Sizing handled by Tailwind utilities mostly, but ensuring base style */
              line-height: 1.3;
            }

            .fw-bold {
              font-weight: 700;
            }

            .mobile-para1 {
              font-size: 0.95rem;
              line-height: 1.6;
              color: #e2e8f0;
              /* Light gray for readability */
            }

            /* Glassmorphism Utilities */
            .glass-panel {
              background: rgba(255, 255, 255, 0.05);
              backdrop-filter: blur(12px);
              -webkit-backdrop-filter: blur(12px);
              border: 1px solid rgba(255, 255, 255, 0.1);
              box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
              padding: 20px;
              border-radius: 20px;
            }

            .glass-card {
              background: rgba(30, 37, 70, 0.6);
              border: 1px solid rgba(255, 255, 255, 0.05);
              transition: transform 0.2s ease, background 0.2s ease;
              padding: 10px;
            }

            .glass-card:hover {
              background: rgba(40, 50, 90, 0.7);
              transform: translateY(-2px);
            }

            /* Orange Elements */
            .pill-orange {
              background: linear-gradient(135deg, #ff7e35 0%, #f45d0b 100%);
              box-shadow: 0 4px 15px rgba(244, 93, 11, 0.4);
              text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
              padding: 30px;
              border-radius: 10px;
            }

            .bg-orange-bar {
              background: linear-gradient(90deg, #f45d0b 0%, #ff8534 50%, #f45d0b 100%);
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .text-gold {
              /* background: linear-gradient(to bottom, #ffe066, #fdd835); */
              color: #FF9A1E;
              text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            }

            /* List Separator */
            .arrow-sep {
              display: inline-block;
              margin-bottom: 0.25rem;
            }

            .arrow-sep::after {
              content: " ⇒ ";
              color: #f45d0b;
              font-weight: bold;
              margin: 0 6px;
              opacity: 0.8;
            }

            .arrow-sep:last-child::after {
              content: "";
            }
          </style>

          <section>

            <div class="max-w-5xl mx-auto glass-panel rounded-3xl overflow-hidden p-6 md:p-10">

              <!-- Header Section -->
              <div class="text-center mb-10 relative">
                <!-- Decorative glow behind title -->
                <div
                  class="absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-20 bg-blue-500/20 blur-3xl -z-10">
                </div>

                <span
                  class="pill-orange px-8 py-2 rounded-full text-white font-bold text-lg inline-block mb-5 uppercase tracking-widest border border-white/20">Vacancies</span>

                <h1
                  class="mt-3 mobile-headd1 fw-bold text-gold text-2xl md:text-4xl mb-4 uppercase tracking-wide drop-shadow-sm">
                  Detailed Recruitment advertisement <br class="hidden md:block"> with eligibility criteria
                </h1>

                <p class="mobile-para1 text-base md:text-lg max-w-3xl mx-auto mb-8 px-4 font-light">
                  Seeking talented and dedicated professionals with operational excellence and a proven track record to
                  join one of Northeast India's fastest-growing private universities for the following roles!
                </p>

                <div class="inline-block">
                  <span
                    class="pill-orange px-8 py-2 rounded-full text-white font-bold text-sm md:text-base inline-block uppercase border border-white/20">
                    NON-ACADEMIC
                  </span>
                </div>
              </div>

              <!-- Content Section -->
              <div class="mb-12 px-1 mt-5">

                <!-- Role: Manager - Regulatory Compliance -->
                <div class="mb-6 glass-card p-6 rounded-2xl relative overflow-hidden">
                  <!-- Decorative accent -->
                  <div class="absolute top-0 right-0 w-16 h-16 bg-orange-500/10 rounded-bl-full -mr-8 -mt-8"></div>

                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Manager – Regulatory Compliance:
                  </h3>
                  <p class="mobile-para1">
                    The candidate should possess a graduate or postgraduate degree in Law, Management, or a related
                    field, with a minimum of 5 years of experience in regulatory compliance in a university or similar
                    organization. Hands-on experience with statutory bodies such as PCI, INC, and UGC is essential. The
                    candidate should demonstrate strong analytical skills, meticulous attention to detail, and the
                    ability to implement and monitor compliance policies effectively.
                  </p>
                </div>

                <!-- Role: Sports Officer -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Sports Officer:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a master’s degree in Physical Education, Sports Science, or an equivalent
                    discipline, with at least 3–5 years of experience in organizing sports events, coaching, and
                    managing sports facilities in higher education institutions. The ideal candidate will possess strong
                    knowledge of both indoor and outdoor games, excellent team coordination skills, and the ability to
                    engage and motivate students effectively.
                  </p>
                </div>

                <!-- Role: NCC Coordinator -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">NCC
                    Coordinator:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a graduate degree and possess a valid NCC ‘C’ certificate. Preference will
                    be given to individuals with experience in cadet training, student leadership, and coordinating NCC
                    programs within educational institutions with strong organizational and mentoring skills to lead and
                    guide students in NCC activities.
                  </p>
                </div>

                <!-- Role: NSS Coordinator -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">NSS
                    Coordinator:</h3>
                  <p class="mobile-para1">
                    Candidate with a graduate or postgraduate degree in Social Work, Humanities, or a related
                    discipline, with experience in coordinating NSS or similar student development programs. The
                    candidate should be adept at planning and organizing events, engaging students in community service
                    initiatives, and fostering a spirit of social responsibility and leadership among participants.
                  </p>
                </div>

                <!-- Role: Executive - Letter Drafting -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Executive – Letter Drafting:</h3>
                  <p class="mobile-para1">
                    The candidate should hold a graduate degree with 2–4 years of experience in administrative or
                    secretarial roles, preferably within higher education institutions. The role requires excellent
                    written communication skills, proficiency in drafting official correspondence and reports, and
                    strong attention to detail to ensure accuracy and professionalism in all communications.
                  </p>
                </div>

                <!-- Role: Graphic Designer -->
                <div class="mb-6 glass-card p-6 rounded-2xl">
                  <h3 class="mobile-headd1 fw-bold text-gold text-lg md:text-xl mb-2 border-b border-white/10 pb-2">
                    Graphic Designer:</h3>
                  <p class="mobile-para1">
                    Candidate with a graduate degree or diploma in Graphic Design, Visual Communication, or Multimedia
                    Design, with 2–3 years of professional experience in creating digital graphics, multimedia content,
                    and visual communication materials. The ideal candidate will be proficient in Adobe Creative Suite,
                    video editing software, and other relevant design tools, with the ability to produce engaging
                    content for both online and offline platforms.
                  </p>
                </div>

              </div>
            </div>

          </section>

        </div>

        <h2 class="mobile-headd3 text-center mt-4 fw-bold" style="color: #FF9A1E;">Candidates with experience in private universities will be given preference. Interested Candidates may apply by scanning the QR code, specifying the position applied for.</h2>

      </div> --}}

    </div>

    </div>



  </div>
@endsection

@push('scripts')
    <script>


        <script type="" application /ld + json"" >
        {
            ""@context"": ""https://schema.org"",
                ""@type"": ""JobPosting"",
                    ""title"": ""Faculty and Staff Recruitment 2025 at Royal Global University"",
                        ""description"": "" < p > Royal Global University(RGU), a top - ranked private university in Guwahati, is hiring qualified academic and administrative staff for the 2025 session.We invite applications for various faculty positions(Professor, Associate Professor, Assistant Professor) and non - teaching roles across 20 + Schools and Departments(Engineering, Law, Management, Humanities, etc.).Competitive salary, benefits, and a modern, eco - friendly campus environment are provided.Apply directly through the official RGU portal.</p > "",
                            ""identifier"": {
            ""@type"": ""PropertyValue"",
                ""name"": ""RGUJobs"",
                    ""value"": ""[RGU-Recruit-2025-26]""
        },
        ""datePosted"": ""[2025-11-15]"",
            ""validThrough"": ""[2025-12-15]"",
                ""employmentType"": [
                    ""FULL_TIME"",
                    ""CONTRACTOR""
                ],
                    ""jobLocation"": {
            ""@type"": ""Place"",
                ""address"": {
                ""@type"": ""PostalAddress"",
                    ""streetAddress"": ""NH - 27, Betkuchi"",
                        ""addressLocality"": ""Guwahati"",
                            ""addressRegion"": ""Assam"",
                                ""postalCode"": ""781035"",
                                    ""addressCountry"": ""IN""
            }
        },
        ""baseSalary"": {
            ""@type"": ""MonetaryAmount"",
                ""currency"": ""INR"",
                    ""value"": {
                ""@type"": ""QuantitativeValue"",
                    ""minValue"": 500000,
                        ""maxValue"": 2000000,
                            ""unitText"": ""YEAR""
            }
        },
        ""hiringOrganization"": {
            ""@type"": ""Organization"",
                ""name"": ""Royal Global University(RGU)"",
                    ""sameAs"": ""https://www.rgu.ac/"",
            ""logo"": ""https://www.rgu.ac/mobile-assets/index/logo-dark.png""
      },
        ""applicantLocationRequirements"": {
            ""@type"": ""Country"",
                ""name"": ""IN""
        },
        ""responsibilities"": ""[Summary of general responsibilities, e.g., Teaching, Research, and Administrative duties.]""
    }
    </script>
@endpush
