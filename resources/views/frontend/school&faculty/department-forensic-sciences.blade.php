@extends('frontend.master')
@section('content')
      <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

    <div class="mobile" >
                  @include('frontend/components/mobileheader')
                    <!-- floating mob button  -->
                    <div>
                        <a href="https://admissions.rgu.ac" style="
                                                                                                    position: fixed;
                                                                                                    bottom: 25px;
                                                                                                    right: 75px;
                                                                                                    background-color: #ef991f;
                                                                                                    color: #fff;
                                                                                                    padding: 12px 20px;
                                                                                                    font-size: 16px;
                                                                                                    font-weight: bold;
                                                                                                    text-decoration: none;
                                                                                                    border-radius: 20px;
                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                    z-index: 1000;
                                                                                                    overflow: hidden;
                                                                                                    animation: pulse 2s infinite;
                                                                                                    ">
                            <span style="
                                                                                                    position: absolute;
                                                                                                    top: 0;
                                                                                                    left: -75%;
                                                                                                    width: 50%;
                                                                                                    height: 100%;
                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                    transform: skewX(-25deg);
                                                                                                    animation: shine 2s infinite;
                                                                                                    "></span>
                            Admission Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
      <!-- till about dept  -->
      <section style="padding-top: 130px; position: relative;">

        <img src="mobile-assets/department-all/rslsc/forensic/mobile-top.png" alt="">

      </section>
      <!-- till about dept  -->

      <!-- courses offered  -->
      <div class="container">
        <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
          Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
          <!-- Heading Section -->
          <div
            style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

            <span style="font-size:18px;">M.Sc. Forensic Science</span>
            <span
              style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
          </div>

          <!-- Statute Items -->
          <a target="_blank" href="programs-MSc-ForensicScience" style="text-decoration:none;">
            <div
              style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

              <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">2 years</span>
              <span>
                <a class="para1 fw-bold"
                  style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                  href="programs-MSc-ForensicScience">View Details</a>
              </span>
            </div>
          </a>
        </div>

        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
          <!-- Heading Section -->
          <div
            style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

            <span style="font-size:18px; padding-right: 20px;">B.Sc. Forensic Science</span> |
            <span style="font-size:16px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours with
              Research</span>

            <span
              style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
          </div>

          <!-- Statute Items -->
          <a target="_blank" href="programs-b-sc-forensicScience" style="text-decoration:none;">
            <div
              style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

              <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
              <span>
                <a class="para1 fw-bold"
                  style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                  href="programs-b-sc-forensicScience">View Details</a>
              </span>
            </div>
          </a>
        </div>

      </div>
      <!-- courses offered  -->

      <!-- syllabus  -->
      <div class="container">
        <div>
          <h2 class="headd1 fw-bold text-center pt-4 pb-3"
            style="color: #27467A; font-weight: 900; font-size: 25px; letter-spacing: 0.5px;">
            Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
          </h2>

          <div>
            <div class="row">
              <div class="col-lg-12">
                <div class="accordion para1" id="mobileAccordionCourses" style="border-radius: 12px; overflow: hidden;">

                  <!-- UG -->
                  <div class="accordion-item"
                    style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed"
                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body"
                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                        <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                          <a href="mobile-assets/department-all/rslsc/forensic/updated-syllabus/Course-structure_Forensic-Science.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                          <a href="/mobile-assets/syllabus/RSLSC/B.Sc. (H) Forensic Science Detailed Syllabus.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Sc. Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- PG -->
                  <div class="accordion-item"
                    style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed"
                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <i class="fa fa-graduation-cap me-2"></i> Post Graduate
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body"
                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                        <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                          <a href="/mobile-assets/syllabus/RSLSC/MSc Forensic Science Detailed Syllabus.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- M.Sc. Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Doctoral -->
                  <div class="accordion-item"
                    style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed"
                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <i class="fa fa-book me-2"></i> Doctoral Programme
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body"
                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                        <a href="phd" class="para1" target="_blank"
                          style="color: #27467A; font-weight: 600; text-decoration: none;">
                          <i class="fa fa-external-link me-2"></i> Click to View...
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- syllabus  -->

      <hr>

      <!-- events and highlights  -->
      <div class="container pb-4">

        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-lg-12">
            <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900; font-size: 28px;">
              Events
            </h2>

            <div style="max-width: 100%; position: relative;">
              <div style="border: 1px solid #ccc;">

                <div id="mobileEventScrollContainer"
                  style="height: 450px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                  <table class="table table-borderless mb-0" style="font-size: 16px; width: 100%;">
                    <tbody class="para1" id="mobileEventScrollContent" style="background-color: #f9f9f9; ">

                      <tr style="border-bottom: 1px solid #ddd;">
                        <td style="display: flex; align-items: flex-start; padding: 12px;">
                          <img src="mobile-assets/department-all/imgg.jpg" alt="Speaker Image"
                            style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                          <div style="color: #27467A; font-weight: bold;">
                            On 14th December 2023, Shri Harmeet Singh (IPS, Special DGP of Assam) graced the
                            Inauguration of the Department of Forensic Science as the Guest of Honour.
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom: 1px solid #ddd;">
                        <td style="display: flex; align-items: flex-start; padding: 12px;">
                          <img src="mobile-assets/department-all/imgg.jpg" alt="Speaker Image"
                            style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                          <div style="color: #27467A; font-weight: bold;">
                            On 24th May 2024, Mr. Keerthan Reddy, Cyber Security Engineer at VISA, delivered a Guest
                            Lecture.
                          </div>
                        </td>
                      </tr>

                    </tbody>

                  </table>
                </div>

              </div>

              <div style="text-align: center; margin-top: 15px;">
                <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
            background: linear-gradient(135deg, #243B95, #151B5B);
            color: #fff; font-weight: 600; font-size: 16px;
            border-radius: 25px; text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: all 0.3s ease-in-out;">
                  View All
                </a>
              </div>


            </div>

            <script>
              const mobileEventScrollContainer = document.getElementById('mobileEventScrollContainer');
              const mobileEventScrollContent = document.getElementById('mobileEventScrollContent');

              // Duplicate content for infinite scroll (mobile)
              mobileEventScrollContent.innerHTML += mobileEventScrollContent.innerHTML;

              let mobileEventScrollPos = 0;
              const mobileEventScrollSpeed = 0.2;

              function mobileEventScrollStep() {
                mobileEventScrollPos += mobileEventScrollSpeed;
                if (mobileEventScrollPos >= mobileEventScrollContent.scrollHeight / 2) {
                  mobileEventScrollPos = 0;
                }
                mobileEventScrollContainer.scrollTop = mobileEventScrollPos;
                requestAnimationFrame(mobileEventScrollStep);
              }

              mobileEventScrollStep();
            </script>

          </div>
        </div>


      </div>
      <!-- events and highlights  -->

      <!-- Mobile-Friendly Board of Studies & DRC -->
      <div id="bos-mobile" class="container pb-5">

        <!-- Board of Studies -->
        <div style="margin-bottom:20px;">
          <button id="mobAccBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
      background:linear-gradient(135deg,#24477f,#1a365d);
      color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
            <i class="fa fa-users me-2"></i> The Board of Studies
            <span style="float:right; font-weight:700; font-size:20px;">＋</span>
          </button>

          <div id="mobAccPanel1"
            style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

            <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Position in D-BoS</th>
                                <th class="text-white">Name and Designation</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1</td>
                                <td>Convener (Ex-Officio)- Head of the Department</td>
                                <td>Dr. Pundarikaksha Das, Assistant Professor and Coordinator, Department of Forensic
                                    Science</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>All Faculty members of the Department Members (Ex-Officio)</td>
                                <td>
                                    Ms. Pradipta Shyam, Assistant Professor, Forensic Sc.
                                    <hr>
                                    Ms Meghna Bordoloi, Assistant Professor
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>

          </div>
        </div>

        <!-- Departmental Research Committee (DRC) -->
        <div style="margin-bottom:20px;">
          <button id="mobAccBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
      background:linear-gradient(135deg,#24477f,#1a365d);
      color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
            <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
            <span style="float:right; font-weight:700; font-size:20px;">＋</span>
          </button>

          <div id="mobAccPanel2"
            style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

            <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Content</th>
                                <th class="text-white">Name of the Member</th>
                                <th class="text-white">Designation</th>
                                <th class="text-white">Designation in the committee</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1.</td>
                                <td>Head of the Department</td>
                                <td>Prof. (Dr.) N. K. Chrungoo</td>
                                <td>Dean, RSLSC</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td rowspan="2">2.</td>
                                <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                                <td>Dr. Pundarikaksha Das</td>
                                <td>Coordinator and Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>Dr. Sthiti Porna Dutta</td>
                                <td>Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

          </div>
        </div>


      </div>

      <script>
        const mobAccPairs = [
          { btn: 'mobAccBtn1', panel: 'mobAccPanel1' },
          { btn: 'mobAccBtn2', panel: 'mobAccPanel2' },
        ];

        function closeAllMob() {
          mobAccPairs.forEach(p => {
            const b = document.getElementById(p.btn);
            const panel = document.getElementById(p.panel);
            if (panel) panel.style.display = 'none';
            if (b) {
              b.setAttribute('aria-expanded', 'false');
              const sp = b.querySelector('span');
              if (sp) sp.textContent = '＋';
            }
          });
        }

        mobAccPairs.forEach(p => {
          const b = document.getElementById(p.btn);
          const panel = document.getElementById(p.panel);
          if (!b || !panel) return;

          b.addEventListener('click', function () {
            const isOpen = this.getAttribute('aria-expanded') === 'true';
            if (isOpen) {
              panel.style.display = 'none';
              this.setAttribute('aria-expanded', 'false');
              const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
            } else {
              closeAllMob();
              panel.style.display = 'block';
              this.setAttribute('aria-expanded', 'true');
              const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
            }
          });
        });

        document.addEventListener('keydown', function (e) {
          if (e.key === 'Escape') closeAllMob();
        });
      </script>
      <!-- Mobile-Friendly Board of Studies & DRC -->

    </div>

    <div class="website">
                  @include('frontend/components/aheader')
                    <!-- floating button  -->
                    <div>
                        <a href="https://admissions.rgu.ac/" style="
                                                                                                                position: fixed;
                                                                                                                bottom: 35px;
                                                                                                                right: 50px;
                                                                                                                background-color: #ef991f;
                                                                                                                color: #fff;
                                                                                                                padding: 12px 20px;
                                                                                                                font-size: 18px;
                                                                                                                font-weight: bold;
                                                                                                                text-decoration: none;
                                                                                                                border-radius: 20px;
                                                                                                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                z-index: 1000;
                                                                                                                overflow: hidden;
                                                                                                                animation: pulse 2s infinite;
                                                                                                                ">
                            <span style="
                                                                                                                position: absolute;
                                                                                                                top: 0;
                                                                                                                left: -75%;
                                                                                                                width: 50%;
                                                                                                                height: 100%;
                                                                                                                background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                transform: skewX(-25deg);
                                                                                                                animation: shine 2s infinite;
                                                                                                                "></span>
                            Admission Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
      <section>

        <!-- floating buttons  -->
        <div
          style="position: fixed; top: 50%; left: 10px; transform: translateY(-50%); display: flex; flex-direction: column; gap: 10px; z-index: 1000;">

          <!-- About -->
          <a href="#about" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start; color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsl(33, 100%, 56%) 0%, hsla(8, 52%, 50%, 1) 100%); box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-home" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">About</span>
          </a>

          <!-- Course -->
          <a href="#course" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-book" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Courses
              Offered</span>
          </a>

          <!-- Syllabus -->
          <a href="#syllabus" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-file-text" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Structure &
              Syllabus</span>
          </a>

          <!-- Events -->
          <a href="#events" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-calendar" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Events &
              Highlights</span>
          </a>

          <!-- Academic Excellence -->
          <a href="#academic-excellence" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-graduation-cap" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Academic
              Excellence</span>
          </a>

          <!-- BOS -->
          <a href="#bos" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-users" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Board of
              Studies</span>
          </a>

          <!-- DRC -->
          <a href="#drc" class="special-link"
            style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
            <i class="fa fa-university" style="min-width:30px; text-align:center;"></i>
            <span class="para1"
              style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">DRC</span>
          </a>

        </div>
        <!-- floating buttons  -->

        <section id="about">
          <section style="background-color: #FFF8F0;">

            <img src="mobile-assets/department-all/rslsc/forensic/web-top.png" alt="">

          </section>
        </section>

        <section id="course">

          <div class="container">
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900; font-size: 35px;">
              Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

            <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
          <!-- Heading Section -->
          <div
            style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

            <span style="font-size:18px;">M.Sc. Forensic Science</span>
            <span
              style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
          </div>

          <!-- Statute Items -->
          <a target="_blank" href="programs-MSc-ForensicScience" style="text-decoration:none;">
            <div
              style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

              <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">2 years</span>
              <span>
                <a class="para1 fw-bold"
                  style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                  href="programs-MSc-ForensicScience">View Details</a>
              </span>
            </div>
          </a>
        </div>

        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
          <!-- Heading Section -->
          <div
            style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

            <span style="font-size:18px; padding-right: 20px;">B.Sc. Forensic Science</span> |
            <span style="font-size:16px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours with
              Research</span>

            <span
              style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
          </div>

          <!-- Statute Items -->
          <a target="_blank" href="programs-b-sc-forensicScience" style="text-decoration:none;">
            <div
              style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

              <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
              <span>
                <a class="para1 fw-bold"
                  style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                  href="programs-b-sc-forensicScience">View Details</a>
              </span>
            </div>
          </a>
        </div>

          </div>

        </section>

        <section id="syllabus">
          <div class="container">
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                style="color: #27467A; font-weight: 900; font-size: 35px; letter-spacing: 0.5px;">
                Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
              </h2>

              <div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion para1" id="accordionExample" style="border-radius: 12px; overflow: hidden;">

                       <!-- UG -->
                  <div class="accordion-item"
                    style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed"
                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body"
                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                        <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                          <a href="mobile-assets/department-all/rslsc/forensic/updated-syllabus/Course-structure_Forensic-Science.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                          <a href="/mobile-assets/syllabus/RSLSC/B.Sc. (H) Forensic Science Detailed Syllabus.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Sc. Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- PG -->
                  <div class="accordion-item"
                    style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed"
                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <i class="fa fa-graduation-cap me-2"></i> Post Graduate
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body"
                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                        <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                          <a href="/mobile-assets/syllabus/RSLSC/MSc Forensic Science Detailed Syllabus.pdf"
                            target="_blank" style="color: #27467A;">
                            <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- M.Sc. Forensic Science
                            <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>

                      <!-- Doctoral -->
                      <div class="accordion-item"
                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed"
                            style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-book me-2"></i> Doctoral Programme
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body"
                            style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                            <a href="phd" class="para1" target="_blank"
                              style="color: #27467A; font-weight: 600; text-decoration: none;">
                              <i class="fa fa-external-link me-2"></i> Click to View...
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <section id="events">
          <div class="container pb-4">
            <div class="row" style="display: flex; justify-content: center;">
              <div class="col-lg-12">
                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Events
                </h2>

                <div style="max-width: 100%; position: relative;">
                  <div style="border: 1px solid #ccc;">
                    <div id="scrollContainer"
                      style="height: 360px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                      <table class="table table-borderless mb-0" style="font-size: 16px; width: 100%;">
                        <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">

                         <tr style="border-bottom: 1px solid #ddd;">
                        <td style="display: flex; align-items: flex-start; padding: 12px;">
                          <img src="mobile-assets/department-all/imgg.jpg" alt="Speaker Image"
                            style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                          <div style="color: #27467A; font-weight: bold;">
                            On 14th December 2023, Shri Harmeet Singh (IPS, Special DGP of Assam) graced the
                            Inauguration of the Department of Forensic Science as the Guest of Honour.
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom: 1px solid #ddd;">
                        <td style="display: flex; align-items: flex-start; padding: 12px;">
                          <img src="mobile-assets/department-all/imgg.jpg" alt="Speaker Image"
                            style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                          <div style="color: #27467A; font-weight: bold;">
                            On 24th May 2024, Mr. Keerthan Reddy, Cyber Security Engineer at VISA, delivered a Guest
                            Lecture.
                          </div>
                        </td>
                      </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div style="text-align: center; margin-top: 15px;">
                    <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
              background: linear-gradient(135deg, #243B95, #151B5B);
              color: #fff; font-weight: 600; font-size: 16px;
              border-radius: 25px; text-decoration: none;
              box-shadow: 0 4px 10px rgba(0,0,0,0.2);
              transition: all 0.3s ease-in-out;">
                      View All
                    </a>
                  </div>
                </div>

                <script>
                  const scrollContainer = document.getElementById('scrollContainer');
                  const scrollContent = document.getElementById('scrollContent');

                  scrollContent.innerHTML += scrollContent.innerHTML;

                  let scrollPos = 0;
                  const scrollSpeed = 0.2;

                  function scrollStep() {
                    scrollPos += scrollSpeed;
                    if (scrollPos >= scrollContent.scrollHeight / 2) {
                      scrollPos = 0;
                    }
                    scrollContainer.scrollTop = scrollPos;
                    requestAnimationFrame(scrollStep);
                  }

                  scrollStep();
                </script>
              </div>
            </div>
          </div>
        </section>

        <!-- <section id="academic-excellence">
          <section
            style="background-image: url(mobile-assets/department-all/TRY/bg7a.png); background-size: cover; border: 1px solid #ECA652; height: 100%; padding: 50px;">

            <h2 class="headd1 fw-bold text-white" style="font-size: 50px; padding-left: 10px;">
              Academic <span class="headd1" style="color: #FF9A1E; font-size: 50px;">Excellence</span>
            </h2>

            <div
              style="height: 3px; background-color: #FF9A1E; width: 240px; margin: 5px 0px 20px 0px; margin-left: 10px;">
            </div>

            <div class="row">

              <div class="col-lg-6">

                <h2 class="headd1 fw-bold mb-3" style="font-size: 35px; color: #f8c22f; padding-left: 10px;">SLET
                </h2>

                <div
                  style="background-color: rgba(255, 255, 255, 0.2); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.5);">
                  <div style="padding: 30px 20px;">
                    <div class="carousel" mask>
                      <div class="carousel-track">

                        <article class="bg-white text-dark rounded"
                          style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                          <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para1 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Yubita Deka<br>
                                <span class="text-dark" style="font-size: 18px;">Physics</span>
                              </p>
                            </div>

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para1 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Susmita Paul<br>
                                <span class="text-dark" style="font-size: 18px;">M.Sc. Physics</span>
                              </p>
                            </div>

                          </div>

                          <div class="rounded text-center"
                            style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                            <p class="para1 fw-bold text-white m-0">Batch: 2018 - 2020</p>
                          </div>

                        </article>

                        <article class="bg-white text-dark rounded"
                          style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                          <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para1 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Bhaskar Jyoti Borah<br>
                                <span class="text-dark" style="font-size: 18px;">M.Sc. Physics</span>
                              </p>
                            </div>

                          </div>

                          <div class="rounded text-center"
                            style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                            <p class="para1 fw-bold text-white m-0">Batch: 2017 - 2019</p>
                          </div>

                        </article>

                      </div>
                    </div>
                  </div>
                </div>

                <style>
                  .carousel {
                    --carousel-width: min(85vw, 650px);
                    --carousel-item-width: 280px;
                    --carousel-item-height: 350px;
                    --carousel-item-gap: 2rem;
                    position: relative;
                    width: var(--carousel-width);
                    overflow: hidden;
                  }

                  .carousel[mask] {
                    mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
                  }

                  .carousel-track {
                    display: flex;
                    gap: var(--carousel-item-gap);
                    animation: marquee var(--carousel-duration) linear infinite;
                  }

                  .carousel article {
                    flex: 0 0 var(--carousel-item-width);
                    height: var(--carousel-item-height);
                    display: grid;
                    grid-template-rows: 200px auto 1fr auto;
                    border-radius: 10px;
                    background: white;
                    color: #314158;
                  }

                  .carousel img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 15px !important;
                  }

                  .carousel article>*:not(img) {
                    padding: 0 1rem;
                  }

                  @keyframes marquee {
                    from {
                      transform: translateX(0);
                    }

                    to {
                      transform: translateX(var(--scroll-distance));
                    }
                  }
                </style>

                <script>
                  const track = document.querySelector('.carousel-track');
                  const cards = Array.from(track.children);

                  cards.forEach(card => {
                    track.appendChild(card.cloneNode(true));
                  });

                  const carouselEl = document.querySelector('.carousel');
                  const styles = getComputedStyle(carouselEl);
                  const cardWidth = parseFloat(styles.getPropertyValue('--carousel-item-width'));
                  const cardGap = parseFloat(styles.getPropertyValue('--carousel-item-gap'));
                  const totalCards = track.children.length;
                  const halfTrackWidth = (cardWidth + cardGap) * (totalCards / 2);
                  track.style.setProperty('--scroll-distance', `-${halfTrackWidth}px`);

                  const speed = 80;
                  const duration = halfTrackWidth / speed;
                  track.style.setProperty('--carousel-duration', `${duration}s`);
                </script>

              </div>

              <div class="col-lg-6">

                <h2 class="headd2 fw-bold mb-3" style="font-size: 35px; color: #fff; padding-left: 10px;">NET
                </h2>

                <div
                  style="background-color: rgba(255, 255, 255, 0.2); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.5);">
                  <div style="padding: 30px 20px;">
                    <div class="carousel2" mask>
                      <div class="carousel-track2">

                        <article class="bg-white text-dark rounded"
                          style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                          <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para2 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Ritu Sharma<br>
                                <span class="text-dark" style="font-size: 18px;">Chemistry</span>
                              </p>
                            </div>

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para2 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Anil Kumar<br>
                                <span class="text-dark" style="font-size: 18px;">M.Sc. Chemistry</span>
                              </p>
                            </div>

                          </div>

                          <div class="rounded text-center"
                            style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                            <p class="para2 fw-bold text-white m-0">Batch: 2019 - 2021</p>
                          </div>

                        </article>

                        <article class="bg-white text-dark rounded"
                          style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                          <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                            <div class="rounded"
                              style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                              <p class="para2 fw-bold m-0 text-center"
                                style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                Meera Das<br>
                                <span class="text-dark" style="font-size: 18px;">M.Sc. Chemistry</span>
                              </p>
                            </div>

                          </div>

                          <div class="rounded text-center"
                            style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                            <p class="para2 fw-bold text-white m-0">Batch: 2018 - 2020</p>
                          </div>

                        </article>

                      </div>
                    </div>
                  </div>
                </div>

                <style>
                  .carousel2 {
                    --carousel-width: min(85vw, 650px);
                    --carousel-item-width: 280px;
                    --carousel-item-height: 350px;
                    --carousel-item-gap: 2rem;
                    position: relative;
                    width: var(--carousel-width);
                    overflow: hidden;
                  }

                  .carousel2[mask] {
                    mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
                  }

                  .carousel-track2 {
                    display: flex;
                    gap: var(--carousel-item-gap);
                    animation: marquee2 var(--carousel-duration) linear infinite;
                  }

                  .carousel2 article {
                    flex: 0 0 var(--carousel-item-width);
                    height: var(--carousel-item-height);
                    display: grid;
                    grid-template-rows: 200px auto 1fr auto;
                    border-radius: 10px;
                    background: white;
                    color: #314158;
                  }

                  .carousel2 img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 15px !important;
                  }

                  .carousel2 article>*:not(img) {
                    padding: 0 1rem;
                  }

                  @keyframes marquee2 {
                    from {
                      transform: translateX(0);
                    }

                    to {
                      transform: translateX(var(--scroll-distance));
                    }
                  }
                </style>

                <script>
                  const track2 = document.querySelector('.carousel-track2');
                  const cards2 = Array.from(track2.children);

                  cards2.forEach(card => {
                    track2.appendChild(card.cloneNode(true));
                  });

                  const carouselEl2 = document.querySelector('.carousel2');
                  const styles2 = getComputedStyle(carouselEl2);
                  const cardWidth2 = parseFloat(styles2.getPropertyValue('--carousel-item-width'));
                  const cardGap2 = parseFloat(styles2.getPropertyValue('--carousel-item-gap'));
                  const totalCards2 = track2.children.length;
                  const halfTrackWidth2 = (cardWidth2 + cardGap2) * (totalCards2 / 2);
                  track2.style.setProperty('--scroll-distance', `-${halfTrackWidth2}px`);

                  const speed2 = 80;
                  const duration2 = halfTrackWidth2 / speed2;
                  track2.style.setProperty('--carousel-duration', `${duration2}s`);
                </script>

              </div>

            </div>

          </section>
        </section> -->

        <div id="bos" class="container pb-5 pt-5">

          <!-- Container -->
          <div id="drc" style="margin:0 auto;">

            <!-- Row 1 -->
            <div style="display:flex; flex-wrap:wrap; gap:16px; margin-bottom:16px;">

              <!-- Board of Studies -->
              <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                <div
                  style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                  <button id="accBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                   background:linear-gradient(135deg,#24477f,#1a365d);
                   color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                    <i class="fa fa-users me-2"></i> The Board of Studies
                    <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                  </button>
                  <div id="accPanel1"
                    style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                    <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Position in D-BoS</th>
                                <th class="text-white">Name and Designation</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1</td>
                                <td>Convener (Ex-Officio)- Head of the Department</td>
                                <td>Dr. Pundarikaksha Das, Assistant Professor and Coordinator, Department of Forensic
                                    Science</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>All Faculty members of the Department Members (Ex-Officio)</td>
                                <td>
                                    Ms. Pradipta Shyam, Assistant Professor, Forensic Sc.
                                    <hr>
                                    Ms Meghna Bordoloi, Assistant Professor
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>

                  </div>
                </div>
              </div>

              <!-- DRC -->
              <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                <div
                  style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                  <button id="accBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                   background:linear-gradient(135deg,#24477f,#1a365d);
                   color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                    <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                    <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                  </button>
                  <div id="accPanel2"
                    style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                    <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Content</th>
                                <th class="text-white">Name of the Member</th>
                                <th class="text-white">Designation</th>
                                <th class="text-white">Designation in the committee</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1.</td>
                                <td>Head of the Department</td>
                                <td>Prof. (Dr.) N. K. Chrungoo</td>
                                <td>Dean, RSLSC</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td rowspan="2">2.</td>
                                <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                                <td>Dr. Pundarikaksha Das</td>
                                <td>Coordinator and Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>Dr. Sthiti Porna Dutta</td>
                                <td>Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

                  </div>
                </div>
              </div>

            </div>

          </div>

          <!-- JS remains same -->
          <script>

            const accPairs = [
              { btn: 'accBtn1', panel: 'accPanel1' },
              { btn: 'accBtn2', panel: 'accPanel2' }
            ];

            function closeAll() {
              accPairs.forEach(p => {
                const b = document.getElementById(p.btn);
                const panel = document.getElementById(p.panel);
                if (panel) panel.style.display = 'none';
                if (b) {
                  b.setAttribute('aria-expanded', 'false');
                  const sp = b.querySelector('span');
                  if (sp) sp.textContent = '＋';
                }
              });
            }

            accPairs.forEach(p => {
              const b = document.getElementById(p.btn);
              const panel = document.getElementById(p.panel);
              if (!b || !panel) return;

              b.addEventListener('click', function () {
                const isOpen = this.getAttribute('aria-expanded') === 'true';
                if (isOpen) {
                  panel.style.display = 'none';
                  this.setAttribute('aria-expanded', 'false');
                  const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
                } else {
                  closeAll();
                  panel.style.display = 'block';
                  this.setAttribute('aria-expanded', 'true');
                  const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
                }
              });
            });

            document.addEventListener('keydown', function (e) {
              if (e.key === 'Escape') closeAll();
            });
          </script>

        </div>

        <script>
          document.querySelectorAll('a.special-link').forEach(anchor => {
            anchor.addEventListener('mouseover', function () {
              this.style.width = '200px';
              this.querySelector('span').style.opacity = '1';
            });
            anchor.addEventListener('mouseout', function () {
              this.style.width = '42px';
              this.querySelector('span').style.opacity = '0';
            });
            anchor.addEventListener('click', function (e) {
              e.preventDefault();
              document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
              });
            });
          });

        </script>

      </section>

    </div>

  </div>
@endsection
