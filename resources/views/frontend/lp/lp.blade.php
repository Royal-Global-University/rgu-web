@extends('frontend.master')
@section('content')
                                        <div class="mobile">
                                            @php
    $hideFooter = true;
                                            @endphp
                                            <!--head image Section-->
                                            <div >
                                                @include('frontend/components/mobileip')
                                  <div style="padding-top: 90px; position: relative;">
                                      <div class="row">
                                        <div class="col-lg-12 pt-3 pb-3" style="background-color: #5e5c5c">
                                          <div class="npf_wgts" data-height="680px" data-w="30f6f0f5207a8612717c00304293b304"></div>
                                        </div>
                                      </div>
                                  </div>


                                  <section style="padding: 100px 0px;">
                                    <div class="container">
                                    <div class="row align-items-center gx-5">
                                        <div class="col-lg-6">

                                            <h5 class="headd kd-title-ani kd-split lp-half-underline" style="color: #264273; font-weight: 700; font-size: 35px !important;">Why RGU</h5>
                                            <p class="para1 pt-2" style="color: #333; text-align: justify;">
                                             The Assam Royal Global University stands out for its excellent academic programs, experienced faculty, modern facilities, and emphasis on holistic development, making it a top choice for students seeking quality education in various disciplines. It is recognized by the University Grants Commission (UGC) and it holds recognition and accreditation from relevant professional bodies for specific programs, ensuring that the education provided meets high standards and is recognized nationally and internationally.
                                            </p>

                                            <div class="">
                                              <div class="card-box">

                                                <div class="feature-item">
                                                  <div class="feature-icon">
                                                    <i class="fas fa-flask"></i>
                                                  </div>
                                                  <div class="para1 text-dark">
                                                    <strong>Learning</strong><br>
                                                    Experiment +
                                                    Experience
                                                  </div>
                                                </div>
                                                <div class="feature-item">
                                                  <div class="feature-icon">
                                                    <i class="fas fa-users"></i>
                                                  </div>
                                                  <div class="para1 text-dark">
                                                    <strong>Nurturing</strong><br>
                                                    Global Citizens
                                                  </div>
                                                </div>
                                                <div class="feature-item">
                                                  <div class="feature-icon">
                                                    <i class="fas fa-lightbulb"></i>
                                                  </div>
                                                  <div class="para1 text-dark">
                                                    <strong>Ideation &</strong><br>
                                                    Innovation
                                                  </div>
                                                </div>

                                                <!-- <div class="carousel-nav">
                                                  <button><</button>
                                                  <button>></button>
                                                </div> -->

                                              </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                          <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                              <div class="text-center">
                                                  <img class="rounded pt-3" decoding="async"
                                                     style="height: 500px;" src="mobile-assets/lp/pic2.png"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                  </section>

                                  <div class="parallax-section">
                              <div class="overlay"></div>
                              <div class="container content-wrapper">
                                <div class="row">
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="23">0</div>
                                    <div class="stat-label">Years of Legacy<br>in Education</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="24">0</div>
                                    <div class="stat-label">Schools</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="30">0</div>
                                    <div class="stat-label">Acres of Campus</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="500">0</div>
                                    <div class="stat-label">Faculty Members</div>
                                  </div>

                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="100">0</div>
                                    <div class="stat-label">Hi-Tech Labs</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="100">0</div>
                                    <div class="stat-label">Programmes</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="100">0</div>
                                    <div class="stat-label">Top Recruiters</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="2000">0</div>
                                    <div class="stat-label">Research Publications</div>
                                  </div>

                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="100">0</div>
                                    <div class="stat-label">Upto % Scholarship</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="15">0</div>
                                    <div class="stat-label">Lakh sq. ft. built-up area</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="1500">0</div>
                                    <div class="stat-label">Hostel Residency</div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 stat-box">
                                    <div class="stat-number" data-count="8000">0</div>
                                    <div class="stat-label">Students</div>
                                  </div>
                                </div>
                              </div>
                                  </div>

                                  <!-- jQuery & Counter Script -->
                                  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

                                 <script>
                              $(document).ready(function(){
                                let counted = false;
                                $(window).scroll(function() {
                                  let oTop = $('.parallax-section').offset().top - window.innerHeight;
                                  if (!counted && $(window).scrollTop() > oTop) {
                                    $('.stat-number').each(function () {
                                      let $this = $(this);
                                      let countTo = $this.attr('data-count');
                                      $({ countNum: $this.text() }).animate({
                                        countNum: countTo
                                      },
                                      {
                                        duration: 2000,
                                        easing: 'swing',
                                        step: function () {
                                          $this.text(Math.floor(this.countNum));
                                        },
                                        complete: function () {
                                          $this.text(countTo + '+');
                                        }
                                      });
                                    });
                                    counted = true;
                                  }
                                });
                              });
                                  </script>

                                  <div class="pt-4 text-center">
                                    <img src="mobile-assets/lp/mob-gallery1.png" alt="">
                                  </div>

                                  <div style="padding: 0px 10px;">

                                    <div class="container-fluid mt-5 lp-carousel">
                                      <div id="lpCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">

                                        <ol class="carousel-indicators">
                                          <li data-target="#lpCarousel" data-slide-to="0" class="active"></li>
                                          <li data-target="#lpCarousel" data-slide-to="1"></li>
                                        </ol>

                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <img src="mobile-assets/lp/slidepic1.png" class="d-block w-100" alt="Image 1">
                                              </div>

                                            </div>
                                          </div>

                                          <div class="carousel-item">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <img src="mobile-assets/lp/slidepic1.png" class="d-block w-100" alt="Image 3">
                                              </div>

                                            </div>
                                          </div>
                                        </div>

                                        {{-- <a class="carousel-control-prev" href="#lpCarousel" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#lpCarousel" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a> --}}
                                      </div>
                                    </div>

                                  </div>

                                  <!--check-->
                                <div class="container mt-3">
                                    <div class="row lp-course-box">
                                        <!-- Left: Course Buttons -->
                                        <div class="col-md-4 p-0">

                                            <div class="lp-course-btn active" data-target="lp-ug-list">
                                                <span class="lp-course-icon"><i class="fa fa-user"></i></span> UNDER GRADUATE
                                            </div>
                                            <div class="lp-course-btn" data-target="lp-pg-list">
                                                <span class="lp-course-icon"><i class="fa fa-book"></i></span> POST GRADUATE
                                            </div>
                                            <div class="lp-course-btn" data-target="lp-phd-list">
                                                <span class="lp-course-icon"><i class="fa fa-graduation-cap"></i></span> DOCTORATE
                                            </div>
                                        </div>

                                        <!-- Right: Program Lists -->
                                        <div class="col-md-8 lp-program-wrapper">

                                            <div id="lp-ug-list" class="lp-program-box">

                                                <ul>
                                                    <li>B.Sc. - Hotel Management</li>
                                                    <li>BA - Culinary Arts</li>
                                                    <li>BA - Hotel Management</li>
                                                    <li>Bachelor of Hotel Management - BHM</li>
                                                    <li>BA - Economics</li>
                                                    <li>BA - History</li>
                                                    <li>BA - Pol. Science</li>
                                                    <li>BA - Public Administration</li>
                                                    <li>BA - Sociology</li>
                                                    <li>BSW</li>
                                                    <li>B.A Sociology with Integrated Civil Service Program</li>
                                                    <li>B.A Economics with Integrated Civil Service Program</li>
                                                    <li>B.A Public Administration with Integrated Civil Service Program</li>
                                                    <li>B.A Political Science with Integrated Civil Service Program</li>
                                                    <li>B.A History with Integrated Civil Service Program</li>
                                                    <li>B. Optometry **</li>
                                                    <li>B.Sc. - in Medical Laboratory Technology- BMLT **</li>
                                                    <li>B.Sc. - Nutrition and Dietetics</li>
                                                    <li>B.Sc. in Dialysis Technology</li>
                                                    <li>B.Sc. in Emergency & Critical Care</li>
                                                    <li>B.Sc. in Operation Theatre Technology **</li>
                                                    <li>B.Sc. in Radiography & Advance Imaging Technology **</li>
                                                    <li>Bachelor of Physiotherapy - BPT **</li>
                                                    <li>B.Pharm.</li>
                                                    <li>B.Sc. - Travel & Tourism Management</li>
                                                    <li>BA - Travel & Tourism Management</li>
                                                    <li>Bachelor of Travel & Tourism Management - BTTM</li>
                                                    <li>B.Sc Agriculture</li>
                                                    <li>B.Sc. - Chemistry</li>
                                                    <li>B.Sc. - Mathematics</li>
                                                    <li>B.Sc. - Physics</li>
                                                    <li>B.Sc Physics with Integrated Civil Service Program</li>
                                                    <li>B.Sc Chemistry with Integrated Civil Service Program</li>
                                                    <li>B.Sc Mathematics with Integrated Civil Service Program</li>
                                                    <li>B.Arch.</li>
                                                    <li>BA - Applied Psychology</li>
                                                    <li>BA - Psychology</li>
                                                    <li>B.Sc. - Bio-Technology</li>
                                                    <li>B.Sc. - Food Technology</li>
                                                    <li>B.Sc. - Micro-Biology</li>
                                                    <li>BBA</li>
                                                    <li>B.Com - Finance with ICA</li>
                                                    <li>B.Com-(Day Shift)</li>
                                                    <li>B.Com-(Morning Shift)</li>
                                                    <li>B.Sc. - (Animation and Visual Effects)</li>
                                                    <li>BA - (J & MC)</li>
                                                    <li>B.Des - Communication Design</li>
                                                    <li>B.Des - Graphic Design</li>
                                                    <li>B.Des - Product Design</li>
                                                    <li>B.Des (FD)</li>
                                                    <li>Bachelor in Interior Design(BID)</li>
                                                    <li>B.Tech - ME</li>
                                                    <li>B.Tech - CE</li>
                                                    <li>B.Tech - CSE</li>
                                                    <li>B.Tech - ECE</li>
                                                    <li>B.Tech - Artificial Intelligence-AI</li>
                                                    <li>B.Tech Working Professional CE / CSE</li>
                                                    <li>B.Sc. Geography</li>
                                                    <li>B.Sc. Geology</li>
                                                    <li>BA Geography</li>
                                                    <li>B.Sc Geography with Integrated Civil Service Program</li>
                                                    <li>B.Sc Geology with Integrated Civil Service Program</li>
                                                    <li>B.A Geography with Integrated Civil Service Program</li>
                                                    <li>B.Des (FD)</li>
                                                    <li>BFA</li>
                                                    <li>B.Sc. (IT)</li>
                                                    <li>BCA</li>
                                                    <li>BA - English</li>
                                                    <li>B.A English with Integrated Civil Service Program</li>
                                                    <li>BA - LLB (Hons.)</li>
                                                    <li>BBA - LLB (Hons.)*</li>
                                                    <li>B.Sc. - Botany</li>
                                                    <li>B.Sc. - Forestry</li>
                                                    <li>B.Sc. - Zoology</li>
                                                    <li>B.Sc.- Forensic Science</li>
                                                    <li>B.Sc Botany with Integrated Civil Service Program</li>
                                                    <li>B.Sc Zoology with Integrated Civil Service Program</li>
                                                    <li>B.Sc.Nursing</li>
                                                    <li>B.Sc.Nursing - Post Basic *</li>
                                                    <li>General Nursing & Midwifery</li>
                                                </ul>

                                            </div>

                                            <div id="lp-pg-list" class="lp-program-box d-none">
                                                <ul>
                                                    <li>M.Sc. - Hotel Management</li>
                                                    <li>MHM</li>
                                                    <li>MA - Public Administration</li>
                                                    <li>MA Economics</li>
                                                    <li>MA History</li>
                                                    <li>MA Pol. Science</li>
                                                    <li>MA Sociology</li>
                                                    <li>MSW</li>
                                                    <li>M. Optometry **</li>
                                                    <li>M.Sc. - Nutrition and Dietetics</li>
                                                    <li>M.Sc. in Medical Laboratory Technology- MMLT **</li>
                                                    <li>Masters in Physiotherapy - MPT **</li>
                                                    <li>M.Pharm - Pharmaceutics</li>
                                                    <li>M.Pharm - Pharmaceutical Chemistry</li>
                                                    <li>M.Pharm - Pharmacognosy</li>
                                                    <li>Master of Travel & Tourism Management - MTTM</li>
                                                    <li>M.Sc. - Chemistry</li>
                                                    <li>M.Sc. - Mathematics</li>
                                                    <li>M.Sc. - Physics</li>
                                                    <li>MA - Psychology</li>
                                                    <li>M.Sc. Bio-Technology</li>
                                                    <li>M.Sc. Food Technology</li>
                                                    <li>M.Sc. Micro-Biology</li>
                                                    <li>MBA - Entrepreneurship & Small Business Management</li>
                                                    <li>MBA - HRM</li>
                                                    <li>MBA - Operational Management</li>
                                                    <li>MBA - Business Analytics</li>
                                                    <li>MBA - Finance</li>
                                                    <li>MBA - Marketing</li>
                                                    <li>Executive MBA</li>
                                                    <li>M.Com</li>
                                                    <li>M.Sc. (Animation and Visual Effects)</li>
                                                    <li>MA (J & MC)</li>
                                                    <li>M.Tech - AI</li>
                                                    <li>M.Tech - CAD</li>
                                                    <li>M.Tech - IOT</li>
                                                    <li>M.Tech - WRDM</li>
                                                    <li>M.Tech - Structural Eng</li>
                                                    <li>M.Sc. Geography</li>
                                                    <li>M.Sc. Geoinformatics</li>
                                                    <li>M.Sc. Geology</li>
                                                    <li>MA Geography</li>
                                                    <li>MFA</li>
                                                    <li>M.Sc. (IT)</li>
                                                    <li>MCA</li>
                                                    <li>MA - English</li>
                                                    <li>LLB - (Hons.)*</li>
                                                    <li>LLM - Day Shift</li>
                                                    <li>LLM - Morning Shift</li>
                                                    <li>M.L.I.Sc.</li>
                                                    <li>M.Sc. - Forestry</li>
                                                    <li>M.Sc. Botany</li>
                                                    <li>M.Sc. Forensic Science</li>
                                                    <li>M.Sc. Zoology</li>
                                                    <li>M.Sc.Nursing - Medical Surgical Nursing *</li>
                                                    <li>M.Sc.Nursing - Child Health Nursing *</li>
                                                    <li>M.Sc.Nursing - Community Health Nursing *</li>
                                                    <li>M.Sc.Nursing - Mental Health Nursing *</li>
                                                    <li>M.Sc.Nursing - OBE Nursing *</li>
                                                </ul>
                                            </div>

                                            <div id="lp-phd-list" class="lp-program-box d-none">
                                                <ul>
                                                    <li>Architecture</li>
                                                    <li>Bio-Technology</li>
                                                    <li>Botany</li>
                                                    <li>Business Administration/ Management</li>
                                                    <li>Chemistry</li>
                                                    <li>Civil Engineering</li>
                                                    <li>Commerce</li>
                                                    <li>Computer Application</li>
                                                    <li>Information Technology</li>
                                                    <li>Communication Design</li>
                                                    <li>Computer Science & Engineering</li>
                                                    <li>Economics</li>
                                                    <li>English</li>
                                                    <li>Fine Arts</li>
                                                    <li>Food Technology</li>
                                                    <li>Forensic Science</li>
                                                    <li>Forestry</li>
                                                    <li>Geography</li>
                                                    <li>Geoinformatics</li>
                                                    <li>Geology</li>
                                                    <li>History</li>
                                                    <li>Hotel Management</li>
                                                    <li>Indian Knowledge System</li>
                                                    <li>Journalism & Masscommunication</li>
                                                    <li>Law</li>
                                                    <li>Library Science</li>
                                                    <li>Mathematics</li>
                                                    <li>Mechanical Engineering</li>
                                                    <li>Micro-Biology</li>
                                                    <li>Nutrition & Dietetics</li>
                                                    <li>Product Design</li>
                                                    <li>Pharmacy</li>
                                                    <li>Physics</li>
                                                    <li>Physiotherapy</li>
                                                    <li>Political Science</li>
                                                    <li>Psychology</li>
                                                    <li>Public Administration</li>
                                                    <li>Social Work</li>
                                                    <li>Sociology</li>
                                                    <li>Travel & Tourism Management</li>
                                                    <li>Medical Laboratory Technology</li>
                                                    <li>Zoology</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container pt-5 pb-4">
                                    <h2 class="text-center" style="color: #264273; font-weight: 700;">Campus Life @ RGU</h2>
                                </div>

                                <div style="padding: 0px 60px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs justify-content-center mb-4" id="galleryTabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fw-bold" id="photo-mob-tab" data-toggle="tab" href="#photo-mob" role="tab"
                                                aria-controls="photo-mob" aria-selected="true">
                                                Photo Gallery
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold" id="video-mob-tab" data-toggle="tab" href="#video-mob" role="tab" aria-controls="video-mob"
                                                aria-selected="false">
                                                Video Gallery
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab content -->
                                    <div class="tab-content" id="galleryTabsContent">


                                        <!-- Photo Gallery -->
                                        <div class="tab-pane fade show active" id="photo-mob" role="tabpanel" aria-labelledby="photo-mob-tab">
                                            <div class="row ">
                                                <div class="col-lg-12"><img src="mobile-assets/lp/gallery2.png" class="img-fluid rounded" alt="Photo 1">
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Video Gallery -->
                                        <div class="tab-pane fade" id="video-mob" role="tabpanel" aria-labelledby="video-mob-tab">

                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/1.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/2.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/3.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/4.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/5.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>

                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/7.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/8.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/9.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/10.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/11.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <video class="w-100 fixed-video" controls>
                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/12.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>


                                  <div class="container pt-5 pb-4">
                                    <h4 class="text-center" style="color: #264273; font-weight: 700;">RGU Success Stories</h4>
                                  </div>

                                  <div style="padding: 0px 60px;">
                                  <div class="row">
                                    <div class="col-lg-4">
                                      <img src="mobile-assets/lp/t1.png" alt="">
                                    </div>

                                    <div class="col-lg-4">
                                      <img src="mobile-assets/lp/t2.png" alt="">
                                    </div>

                                    <div class="col-lg-4">
                                      <img src="mobile-assets/lp/t3.png" alt="">
                                    </div>
                                  </div>
                                  </div>

                                  <!-- Google tag (gtag.js) -->
                                                <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17044784959"></script>
                                                <script>
                                                    window.dataLayer = window.dataLayer || [];
                                                    function gtag() { dataLayer.push(arguments); }
                                                    gtag('js', new Date());

                                                    gtag('config', 'AW-17044784959');
                                                </script>

                                                <script>
                                                    gtag('event', 'conversion', {
                                                        'send_to': 'AW-17044784959/1T-aCLub8b8aEL-Oy78_',
                                                        'value': 1.0,
                                                        'currency': 'INR'
                                                    });
                                                </script>

                                </div>
                                        </div>
                                        <div class="website">
                                            @php
    $hideFooter = true;
                                            @endphp
                                            <!--head image Section-->
                                            @include('frontend/components/ip')
                                            <div>

                                                <!-- hero section  -->
                                                <div class="hero-section">

                                                    <div class="row">

                                                        <div class="col-lg-7" style="padding: 150px 0px 150px 0px;">
                                                            <div class="hero-text">
                                                                <h1>Leading<br>University in<br>North-East India</h1>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-5 npf_wgts-main rounded" style="z-index: 1000;">
                                                            <div class="npf_wgts"  data-height="670px" data-w="30f6f0f5207a8612717c00304293b304"></div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- hero section  -->

                                                <section id="whyrgu" style="padding: 50px 0px;">
                                                    <div class="container">
                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-lg-6">

                                                                <h2 class="headd kd-title-ani kd-split lp-half-underline"
                                                                    style="color: #264273; font-weight: 700;">Why RGU</h2>
                                                                <p class="headd3 pt-3" style="color: #333; text-align: justify;">
                                                                    The Assam Royal Global University stands out for its excellent academic programs,
                                                                    experienced faculty, modern facilities, and emphasis on holistic development, making it a
                                                                    top choice for students seeking quality education in various disciplines. It is recognized
                                                                    by the University Grants Commission (UGC) and it holds recognition and accreditation from
                                                                    relevant professional bodies for specific programs, ensuring that the education provided
                                                                    meets high standards and is recognized nationally and internationally.
                                                                </p>

                                                                <div class="container my-3">
                                                                    <div class="card-box">

                                                                        <div class="feature-item">
                                                                            <div class="feature-icon">
                                                                                <i class="fas fa-flask"></i>
                                                                            </div>
                                                                            <div class="para1 text-dark">
                                                                                <strong>Learning</strong><br>
                                                                                Experiment +
                                                                                Experience
                                                                            </div>
                                                                        </div>
                                                                        <div class="feature-item">
                                                                            <div class="feature-icon">
                                                                                <i class="fas fa-users"></i>
                                                                            </div>
                                                                            <div class="para1 text-dark">
                                                                                <strong>Nurturing</strong><br>
                                                                                Global Citizens
                                                                            </div>
                                                                        </div>
                                                                        <div class="feature-item">
                                                                            <div class="feature-icon">
                                                                                <i class="fas fa-lightbulb"></i>
                                                                            </div>
                                                                            <div class="para1 text-dark">
                                                                                <strong>Ideation &</strong><br>
                                                                                Innovation
                                                                            </div>
                                                                        </div>

                                                                        <!-- <div class="carousel-nav">
                                                                  <button><</button>
                                                                  <button>></button>
                                                                </div> -->

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                                                    <div>
                                                                        <img class="rounded" decoding="async" style="height: 660px;"
                                                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/pic2.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <div class="parallax-section">
                                                    <div class="overlay"></div>
                                                    <div class="container content-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="23">0</div>
                                                                <div class="stat-label">Years of Legacy<br>in Education</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="24">0</div>
                                                                <div class="stat-label">Schools</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="30">0</div>
                                                                <div class="stat-label">Acres of Campus</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="500">0</div>
                                                                <div class="stat-label">Faculty Members</div>
                                                            </div>

                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="100">0</div>
                                                                <div class="stat-label">Hi-Tech Labs</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="100">0</div>
                                                                <div class="stat-label">Programmes</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="100">0</div>
                                                                <div class="stat-label">Top Recruiters</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="2000">0</div>
                                                                <div class="stat-label">Research Publications</div>
                                                            </div>

                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="100">0</div>
                                                                <div class="stat-label">Upto % Scholarship</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="15">0</div>
                                                                <div class="stat-label">Lakh sq. ft. built-up area</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="1500">0</div>
                                                                <div class="stat-label">Hostel Residency</div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 stat-box">
                                                                <div class="stat-number" data-count="8000">0</div>
                                                                <div class="stat-label">Students</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- jQuery & Counter Script -->
                                                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

                                                <script>
                                                    $(document).ready(function () {
                                                        let counted = false;
                                                        $(window).scroll(function () {
                                                            let oTop = $('.parallax-section').offset().top - window.innerHeight;
                                                            if (!counted && $(window).scrollTop() > oTop) {
                                                                $('.stat-number').each(function () {
                                                                    let $this = $(this);
                                                                    let countTo = $this.attr('data-count');
                                                                    $({ countNum: $this.text() }).animate({
                                                                        countNum: countTo
                                                                    },
                                                                        {
                                                                            duration: 2000,
                                                                            easing: 'swing',
                                                                            step: function () {
                                                                                $this.text(Math.floor(this.countNum));
                                                                            },
                                                                            complete: function () {
                                                                                $this.text(countTo + '+');
                                                                            }
                                                                        });
                                                                });
                                                                counted = true;
                                                            }
                                                        });
                                                    });
                                                </script>

                                                <div id="virtualtour" class="pt-4 text-center">
                                                    <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/gallery1.png" alt="">
                                                </div>

                                                <div style="padding: 0px 60px;">

                                                    <div class="container-fluid mt-5 lp-carousel">
                                                        <div id="lpCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">

                                                            <ol class="carousel-indicators">
                                                                <li data-target="#lpCarousel" data-slide-to="0" class="active"></li>
                                                                <li data-target="#lpCarousel" data-slide-to="1"></li>
                                                            </ol>

                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/slidepic1.png" class="d-block w-100" alt="Image 1">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/slidepic2.png" class="d-block w-100" alt="Image 2">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/slidepic1.png" class="d-block w-100" alt="Image 3">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/slidepic2.png" class="d-block w-100" alt="Image 4">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a class="carousel-control-prev" href="#lpCarousel" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#lpCarousel" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="programme" class="container pt-5">
                                                    <h2 class="text-center" style="color: #264273; font-weight: 700;">Programmes Offered</h2>
                                                </div>

                                                <div class="container mt-3">
                                                    <div class="row lp-course-box">
                                                        <!-- Left: Course Buttons -->
                                                        <div class="col-md-4 p-0">

                                                            <div class="lp-course-btn active" data-target="lp-ugmob-list">
                                                                <span class="lp-course-icon"><i class="fa fa-user"></i></span> UNDER GRADUATE
                                                            </div>
                                                            <div class="lp-course-btn" data-target="lp-pgmob-list">
                                                                <span class="lp-course-icon"><i class="fa fa-book"></i></span> POST GRADUATE
                                                            </div>
                                                            <div class="lp-course-btn" data-target="lp-phdmob-list">
                                                                <span class="lp-course-icon"><i class="fa fa-graduation-cap"></i></span> DOCTORATE
                                                            </div>
                                                        </div>

                                                        <!-- Right: Program Lists -->
                                                        <div class="col-md-8 lp-program-wrapper">

                                                            <div id="lp-ugmob-list" class="lp-program-box">

                                                                <ul>
                                                                    <li class="fw-bold text-dark">B.Sc. - Hotel Management</li>
                                                                    <li class="fw-bold text-dark">BA - Culinary Arts</li>
                                                                    <li class="fw-bold text-dark">BA - Hotel Management</li>
                                                                    <li class="fw-bold text-dark">Bachelor of Hotel Management - BHM</li>
                                                                    <li class="fw-bold text-dark">BA - Economics</li>
                                                                    <li class="fw-bold text-dark">BA - History</li>
                                                                    <li class="fw-bold text-dark">BA - Pol. Science</li>
                                                                    <li class="fw-bold text-dark">BA - Public Administration</li>
                                                                    <li class="fw-bold text-dark">BA - Sociology</li>
                                                                    <li class="fw-bold text-dark">BSW</li>
                                                                    <li class="fw-bold text-dark">B.A Sociology with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.A Economics with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.A Public Administration with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.A Political Science with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.A History with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B. Optometry **</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - in Medical Laboratory Technology- BMLT **</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Nutrition and Dietetics</li>
                                                                    <li class="fw-bold text-dark">B.Sc. in Dialysis Technology</li>
                                                                    <li class="fw-bold text-dark">B.Sc. in Emergency & Critical Care</li>
                                                                    <li class="fw-bold text-dark">B.Sc. in Operation Theatre Technology **</li>
                                                                    <li class="fw-bold text-dark">B.Sc. in Radiography & Advance Imaging Technology **</li>
                                                                    <li class="fw-bold text-dark">Bachelor of Physiotherapy - BPT **</li>
                                                                    <li class="fw-bold text-dark">B.Pharm.</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Travel & Tourism Management</li>
                                                                    <li class="fw-bold text-dark">BA - Travel & Tourism Management</li>
                                                                    <li class="fw-bold text-dark">Bachelor of Travel & Tourism Management - BTTM</li>
                                                                    <li class="fw-bold text-dark">B.Sc Agriculture</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Chemistry</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Mathematics</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Physics</li>
                                                                    <li class="fw-bold text-dark">B.Sc Physics with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Sc Chemistry with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Sc Mathematics with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Arch.</li>
                                                                    <li class="fw-bold text-dark">BA - Applied Psychology</li>
                                                                    <li class="fw-bold text-dark">BA - Psychology</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Bio-Technology</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Food Technology</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Micro-Biology</li>
                                                                    <li class="fw-bold text-dark">BBA</li>
                                                                    <li class="fw-bold text-dark">B.Com - Finance with ICA</li>
                                                                    <li class="fw-bold text-dark">B.Com-(Day Shift)</li>
                                                                    <li class="fw-bold text-dark">B.Com-(Morning Shift)</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - (Animation and Visual Effects)</li>
                                                                    <li class="fw-bold text-dark">BA - (J & MC)</li>
                                                                    <li class="fw-bold text-dark">B.Des - Communication Design</li>
                                                                    <li class="fw-bold text-dark">B.Des - Graphic Design</li>
                                                                    <li class="fw-bold text-dark">B.Des - Product Design</li>
                                                                    <li class="fw-bold text-dark">B.Des (FD)</li>
                                                                    <li class="fw-bold text-dark">Bachelor in Interior Design(BID)</li>
                                                                    <li class="fw-bold text-dark">B.Tech - ME</li>
                                                                    <li class="fw-bold text-dark">B.Tech - CE</li>
                                                                    <li class="fw-bold text-dark">B.Tech - CSE</li>
                                                                    <li class="fw-bold text-dark">B.Tech - ECE</li>
                                                                    <li class="fw-bold text-dark">B.Tech - Artificial Intelligence-AI</li>
                                                                    <li class="fw-bold text-dark">B.Tech Working Professional CE / CSE</li>
                                                                    <li class="fw-bold text-dark">B.Sc. Geography</li>
                                                                    <li class="fw-bold text-dark">B.Sc. Geology</li>
                                                                    <li class="fw-bold text-dark">BA Geography</li>
                                                                    <li class="fw-bold text-dark">B.Sc Geography with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Sc Geology with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.A Geography with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Des (FD)</li>
                                                                    <li class="fw-bold text-dark">BFA</li>
                                                                    <li class="fw-bold text-dark">B.Sc. (IT)</li>
                                                                    <li class="fw-bold text-dark">BCA</li>
                                                                    <li class="fw-bold text-dark">BA - English</li>
                                                                    <li class="fw-bold text-dark">B.A English with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">BA - LLB (Hons.)</li>
                                                                    <li class="fw-bold text-dark">BBA - LLB (Hons.)*</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Botany</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Forestry</li>
                                                                    <li class="fw-bold text-dark">B.Sc. - Zoology</li>
                                                                    <li class="fw-bold text-dark">B.Sc.- Forensic Science</li>
                                                                    <li class="fw-bold text-dark">B.Sc Botany with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Sc Zoology with Integrated Civil Service Program</li>
                                                                    <li class="fw-bold text-dark">B.Sc.Nursing</li>
                                                                    <li class="fw-bold text-dark">B.Sc.Nursing - Post Basic *</li>
                                                                    <li class="fw-bold text-dark">General Nursing & Midwifery</li>
                                                                </ul>

                                                            </div>

                                                            <div id="lp-pgmob-list" class="lp-program-box d-none">
                                                                <ul>
                                                                    <li class="fw-bold text-dark">M.Sc. - Hotel Management</li>
                                                                    <li class="fw-bold text-dark">MHM</li>
                                                                    <li class="fw-bold text-dark">MA - Public Administration</li>
                                                                    <li class="fw-bold text-dark">MA Economics</li>
                                                                    <li class="fw-bold text-dark">MA History</li>
                                                                    <li class="fw-bold text-dark">MA Pol. Science</li>
                                                                    <li class="fw-bold text-dark">MA Sociology</li>
                                                                    <li class="fw-bold text-dark">MSW</li>
                                                                    <li class="fw-bold text-dark">M. Optometry **</li>
                                                                    <li class="fw-bold text-dark">M.Sc. - Nutrition and Dietetics</li>
                                                                    <li class="fw-bold text-dark">M.Sc. in Medical Laboratory Technology- MMLT **</li>
                                                                    <li class="fw-bold text-dark">Masters in Physiotherapy - MPT **</li>
                                                                    <li class="fw-bold text-dark">M.Pharm - Pharmaceutics</li>
                                                                    <li class="fw-bold text-dark">M.Pharm - Pharmaceutical Chemistry</li>
                                                                    <li class="fw-bold text-dark">M.Pharm - Pharmacognosy</li>
                                                                    <li class="fw-bold text-dark">Master of Travel & Tourism Management - MTTM</li>
                                                                    <li class="fw-bold text-dark">M.Sc. - Chemistry</li>
                                                                    <li class="fw-bold text-dark">M.Sc. - Mathematics</li>
                                                                    <li class="fw-bold text-dark">M.Sc. - Physics</li>
                                                                    <li class="fw-bold text-dark">MA - Psychology</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Bio-Technology</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Food Technology</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Micro-Biology</li>
                                                                    <li class="fw-bold text-dark">MBA - Entrepreneurship & Small Business Management</li>
                                                                    <li class="fw-bold text-dark">MBA - HRM</li>
                                                                    <li class="fw-bold text-dark">MBA - Operational Management</li>
                                                                    <li class="fw-bold text-dark">MBA - Business Analytics</li>
                                                                    <li class="fw-bold text-dark">MBA - Finance</li>
                                                                    <li class="fw-bold text-dark">MBA - Marketing</li>
                                                                    <li class="fw-bold text-dark">Executive MBA</li>
                                                                    <li class="fw-bold text-dark">M.Com</li>
                                                                    <li class="fw-bold text-dark">M.Sc. (Animation and Visual Effects)</li>
                                                                    <li class="fw-bold text-dark">MA (J & MC)</li>
                                                                    <li class="fw-bold text-dark">M.Tech - AI</li>
                                                                    <li class="fw-bold text-dark">M.Tech - CAD</li>
                                                                    <li class="fw-bold text-dark">M.Tech - IOT</li>
                                                                    <li class="fw-bold text-dark">M.Tech - WRDM</li>
                                                                    <li class="fw-bold text-dark">M.Tech - Structural Eng</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Geography</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Geoinformatics</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Geology</li>
                                                                    <li class="fw-bold text-dark">MA Geography</li>
                                                                    <li class="fw-bold text-dark">MFA</li>
                                                                    <li class="fw-bold text-dark">M.Sc. (IT)</li>
                                                                    <li class="fw-bold text-dark">MCA</li>
                                                                    <li class="fw-bold text-dark">MA - English</li>
                                                                    <li class="fw-bold text-dark">LLB - (Hons.)*</li>
                                                                    <li class="fw-bold text-dark">LLM - Day Shift</li>
                                                                    <li class="fw-bold text-dark">LLM - Morning Shift</li>
                                                                    <li class="fw-bold text-dark">M.L.I.Sc.</li>
                                                                    <li class="fw-bold text-dark">M.Sc. - Forestry</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Botany</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Forensic Science</li>
                                                                    <li class="fw-bold text-dark">M.Sc. Zoology</li>
                                                                    <li class="fw-bold text-dark">M.Sc.Nursing - Medical Surgical Nursing *</li>
                                                                    <li class="fw-bold text-dark">M.Sc.Nursing - Child Health Nursing *</li>
                                                                    <li class="fw-bold text-dark">M.Sc.Nursing - Community Health Nursing *</li>
                                                                    <li class="fw-bold text-dark">M.Sc.Nursing - Mental Health Nursing *</li>
                                                                    <li class="fw-bold text-dark">M.Sc.Nursing - OBE Nursing *</li>
                                                                </ul>
                                                            </div>

                                                            <div id="lp-phdmob-list" class="lp-program-box d-none">
                                                                <ul>
                                                                    <li class="fw-bold text-dark">Architecture</li>
                                                                    <li class="fw-bold text-dark">Bio-Technology</li>
                                                                    <li class="fw-bold text-dark">Botany</li>
                                                                    <li class="fw-bold text-dark">Business Administration/ Management</li>
                                                                    <li class="fw-bold text-dark">Chemistry</li>
                                                                    <li class="fw-bold text-dark">Civil Engineering</li>
                                                                    <li class="fw-bold text-dark">Commerce</li>
                                                                    <li class="fw-bold text-dark">Computer Application</li>
                                                                    <li class="fw-bold text-dark">Information Technology</li>
                                                                    <li class="fw-bold text-dark">Communication Design</li>
                                                                    <li class="fw-bold text-dark">Computer Science & Engineering</li>
                                                                    <li class="fw-bold text-dark">Economics</li>
                                                                    <li class="fw-bold text-dark">English</li>
                                                                    <li class="fw-bold text-dark">Fine Arts</li>
                                                                    <li class="fw-bold text-dark">Food Technology</li>
                                                                    <li class="fw-bold text-dark">Forensic Science</li>
                                                                    <li class="fw-bold text-dark">Forestry</li>
                                                                    <li class="fw-bold text-dark">Geography</li>
                                                                    <li class="fw-bold text-dark">Geoinformatics</li>
                                                                    <li class="fw-bold text-dark">Geology</li>
                                                                    <li class="fw-bold text-dark">History</li>
                                                                    <li class="fw-bold text-dark">Hotel Management</li>
                                                                    <li class="fw-bold text-dark">Indian Knowledge System</li>
                                                                    <li class="fw-bold text-dark">Journalism & Masscommunication</li>
                                                                    <li class="fw-bold text-dark">Law</li>
                                                                    <li class="fw-bold text-dark">Library Science</li>
                                                                    <li class="fw-bold text-dark">Mathematics</li>
                                                                    <li class="fw-bold text-dark">Mechanical Engineering</li>
                                                                    <li class="fw-bold text-dark">Micro-Biology</li>
                                                                    <li class="fw-bold text-dark">Nutrition & Dietetics</li>
                                                                    <li class="fw-bold text-dark">Product Design</li>
                                                                    <li class="fw-bold text-dark">Pharmacy</li>
                                                                    <li class="fw-bold text-dark">Physics</li>
                                                                    <li class="fw-bold text-dark">Physiotherapy</li>
                                                                    <li class="fw-bold text-dark">Political Science</li>
                                                                    <li class="fw-bold text-dark">Psychology</li>
                                                                    <li class="fw-bold text-dark">Public Administration</li>
                                                                    <li class="fw-bold text-dark">Social Work</li>
                                                                    <li class="fw-bold text-dark">Sociology</li>
                                                                    <li class="fw-bold text-dark">Travel & Tourism Management</li>
                                                                    <li class="fw-bold text-dark">Medical Laboratory Technology</li>
                                                                    <li class="fw-bold text-dark">Zoology</li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="campuslife" class="container pt-5 pb-4">
                                                    <h2 class="text-center" style="color: #264273; font-weight: 700;">Campus Life @ RGU</h2>
                                                </div>

                                                <div style="padding: 0px 60px;">

                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs justify-content-center mb-4" id="galleryTabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active fw-bold" id="photo-tab" data-toggle="tab" href="#photo" role="tab"
                                                                aria-controls="photo" aria-selected="true">
                                                                Photo Gallery
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fw-bold" id="video-tab" data-toggle="tab" href="#video" role="tab"
                                                                aria-controls="video" aria-selected="false">
                                                                Video Gallery
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <!-- Tab content -->
                                                    <div class="tab-content" id="galleryTabsContent">


                                                        <!-- Photo Gallery -->
                                                        <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                                            <div class="row ">
                                                                <div class="col-lg-12"><img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/gallery2.png" class="img-fluid rounded"
                                                                        alt="Photo 1"></div>

                                                            </div>
                                                        </div>

                                                        <!-- Video Gallery -->
                                                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">

                                                            <div class="row">
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/1.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/2.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/3.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/4.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/5.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>

                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/7.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/8.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/9.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/10.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/11.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="col-md-4 mb-4">
                                                                    <video class="w-100 fixed-video" controls>
                                                                        <source src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/12.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>

                                                <div id="success" class="container pt-5 pb-4">
                                                    <h2 class="text-center" style="color: #264273; font-weight: 700;">RGU Success Stories</h2>
                                                </div>

                                                <div style="padding: 0px 60px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/t1.png" alt="">
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/t2.png" alt="">
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/lp/t3.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <script>
                                                    $(document).ready(function () {
                                                        $('.lp-course-btn').click(function () {
                                                            // update button state
                                                            $('.lp-course-btn').removeClass('active');
                                                            $(this).addClass('active');

                                                            const target = $(this).data('target');

                                                            // hide all program lists
                                                            $('.lp-program-box').slideUp(200, function () {
                                                                $('.lp-program-box').addClass('d-none');
                                                                $('#' + target).removeClass('d-none').hide().slideDown(300);
                                                            });
                                                        });
                                                    });
                                                </script>

                                                <!-- Google tag (gtag.js) -->
                                                <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17044784959"></script>
                                                <script>
                                                    window.dataLayer = window.dataLayer || [];
                                                    function gtag() { dataLayer.push(arguments); }
                                                    gtag('js', new Date());

                                                    gtag('config', 'AW-17044784959');
                                                </script>

                                                <script>
                                                    gtag('event', 'conversion', {
                                                        'send_to': 'AW-17044784959/1T-aCLub8b8aEL-Oy78_',
                                                        'value': 1.0,
                                                        'currency': 'INR'
                                                    });
                                                </script>
                                            </div>
                                        </div>
@endsection
