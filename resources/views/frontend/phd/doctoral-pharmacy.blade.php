@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Pharmacy</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify; font-size: 18px;">
                            Ph.D. in Pharmacy is an intensive and challenging program that provides students with the
                            skills and knowledge necessary to become leaders in the field of pharmacy research. Some
                            areas of research that students in a Ph.D. in Pharmacy program may focus on include drug
                            discovery and development, pharmacokinetics, pharmacodynamics, toxicology, and drug delivery
                            systems. A Ph.D. in Pharmacy is an advanced degree program that prepares students to conduct
                            original research and make contributions to the field of pharmacy. It develops deep and
                            broad understanding of fundamentals and state of the art of knowledge in the chosen field
                            through courses and self-study, develop ability and skills to carry out independent research
                            and development to face the challenges posed to mankind on specific problems.
                        </p>

                    </div>
                </div>
            </div>
        </section>


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
                                                <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text">
                                                    Pharmacy</h1>
                                                <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                    <p>
                                                        Ph.D. in Pharmacy is an intensive and challenging program that provides students with the skills and knowledge necessary to become leaders in the field of pharmacy research. Some areas of research that students in a Ph.D. in Pharmacy program may focus on include drug discovery and development, pharmacokinetics, pharmacodynamics, toxicology, and drug delivery systems. A Ph.D. in Pharmacy is an advanced degree program that prepares students to conduct original research and make contributions to the field of pharmacy. It develops deep and broad understanding of fundamentals and state of the art of knowledge in the chosen field through courses and self-study, develop ability and skills to carry out independent research and development to face the challenges posed to mankind on specific problems.
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

            <div style="padding: 40px 60px; text-align: justify;">

                <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

                @include('frontend/components/phddeptweb')

                </div>
         </div>
@endsection
