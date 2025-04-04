@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Geography.png" alt="">

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
                                                Geography</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    Ph.D. Geography is an exploration-based doctoral course in geography that is committed to the investigation of the Earth and the planetary bases, elements, habitats, and wonders. A student focuses on geography to understand how the Earth is evolving. They think experimentally and logically as to why it is developing. In this course, students will explore each and every component of the Earth and its field circulation, research regions and places, types of plains, geology, and much more.                                            </p>
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

            <p class="text-dark para1" style="text-align: justify;">Geology gives knowledge about important contemporary issues, such as globalization and ecological change, with a specific enthusiasm for neighborhood contrasts; Changes in disciplinary interests and practices reflect those issues. In this course, students will explore each and every component of the Earth and its field circulation, research regions and places, types of plains, geology, etc.There are many positions available for Ph.D. Geography researcher. Candidates after this degree can work as researchers, academicians, meteorologist, naturalist, map maker, metropolitan organizer, climatologist, ecological specialist, topographical data framework officers etc.
            </p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-geography/1.webp" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Bijay Singh Mipun</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                                <ol class="para1 text-dark">
                                    <li>Agricultural Geography</li>
                                    <li>Aerial Photo and Satellite Imagery Interpretation</li>
                                    <li>Geographical Information System</li>
                                    <li>Cartographic Techniques</li>
                                </ol>
                    </div>
                </div>
              </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-geography/2.webp" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Annesha Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Geography of tourism, Cultural Geography, , Developmental studies
                        </p>
                    </div>
                </div>
              </div>

            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

        </div>
     </div>
@endsection
