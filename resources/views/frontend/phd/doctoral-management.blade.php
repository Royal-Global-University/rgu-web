@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Management.png" alt="">

        <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
            <h2 class="mobile-headd2 text-dark">
                Ph.D. Curriculum
            </h2>

            @include('frontend/components/phddeptmob')
        </div>
     </div>

     <div class="website">
        <div id="page" class="site site_wrapper">

            <div class="scroll-top">
                <div class="scroll-top-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg" data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--About Section-->
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <section style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding-top: 30px;" class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f481aaf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55" data-id="968af55" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx" data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                            <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                <img decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111" data-id="9b49111" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading" data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="prthalign">
                                            <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                                Management</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    The last couple of decades of technological progress has seen a massive disruption in our way of life. The fusion of digital, physical, and biological is blurring the boundaries between what was earlier separate domains. The exponential pace of growth of technological adoption requires that the entire edifice of traditional systems of production, management, and governance must be revamped to meet the demands of the new reality. This requires a breed of research scholars who bring fresh ideas and create efficient systems to manage the new situation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
            </div>
            <!--End About-->


        </div>

        <div style="padding: 40px 60px;">

            <p class="text-dark para1" style="text-align: justify;">The Ph.D. program in Management shall be unique for the interdisciplinary and contemporary focus it brings to research in management disciplines. The program seeks to train productive research scholars who can make an impact in an increasingly competitive and challenging business world. The interdisciplinary approach is strengthened by it being situated in a pioneering liberal education university enabling collaboration cutting across disciplines outside of the conventional streams of management to provide different perspectives and a wider breadth of research opportunities. Research in management is supported by an accomplished set of faculties with wide-ranging industry and academic experience with an ecosystem opportunities exist for research scholars to learn and employ cutting edge tools and techniques, including data science/ analytics, in their research work.</p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/1.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) George AP</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Consumer Behaviour, Branding, Services Marketing, Marketing Communication, Sales and Distribution, Human Resource Management, Psychological Contract, Tourism Management, etc.
                        </p>
                    </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/2.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Payel Chaudhuri</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Marketing Management, Consumer Behaviour, Digital Marketing, Brand Management, Services Marketing.
                        </p>
                        </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/3.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Arpee Saikia</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Ph.D. in Womens’ Studies from Gauhati University Womens’ studies
                        </p>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/4.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Bitopi Gogoi</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Innovative Work Behaviour, Innovation & Creativity, Psychological Capital.
                        </p>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/5.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Ashutosh Bajpai</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-management/6.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Souren Koner</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Purchase Intension, Loyalty, Green Marketing.
                        </p>
                        </div>
              </div>
              </div>

            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

            </div>
     </div>

@endsection
