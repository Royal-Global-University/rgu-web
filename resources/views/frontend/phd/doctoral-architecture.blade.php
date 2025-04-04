@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
            <section style="padding-top: 90px; position: relative; background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center" style="color: #264273; font-weight: 700;">Architecture</h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 2px solid #27467A; height: 320px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                            The Ph.D. programme in Architecture is an advanced degree program that offers scholars an opportunity to undertake original research in specific areas of architecture & allied topics. The program aspires to build up core competencies like research capabilities, critical thinking and writing, preparedness for publishing, and communication through rigorous coursework. This degree program focuses on developing advanced skills and knowledge in architectural research, design theory, sustainability, and technology. It typically prepares individuals for careers in academia, research, and professional practice. It is also designed to promote useful skills in planning for modern urban scenario of high density and diversity of populations, and growing scarcity of water, power, transport and food supply.
                        </p>

                    </div>
                </div>
            </div>
            </section>

            <div class="container pt-4 pb-3" style="background-color: #f0f8ff;">
                <h2 class="mobile-headd2 text-dark">
                    Ph.D. Guides and Research Interests
                </h2>

                <div class="row" style="padding-top: 20px">
                    <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 650px;">
                                <div class="p-3">
                                  <img style="height: 300px; width: 100%;" src="mobile-assets/phd-mobile/doctoral-architecture/faculty1.jpeg" class="img-fluid rounded"/>
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof. (Dr.) Hari Prasad Agarwal
                                </h5>
                                <h5 style="font-weight: 800; color: #333;" class="card-title mobile-headd3">Research Interest
                                </h5>
                                <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Sustainable Development Goals, Sustainable Cities through Urban Farming, Waste Management, Circular Economy, Food-Water-Energy-Waste Nexus.
                                </p>
                                  <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Ph.D.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
                <h2 class="mobile-headd2 text-dark">
                    Ph.D. Curriculum
                </h2>

                @include('frontend/components/phddeptmob')
            </div>
        </div>

        <div class="website">
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
                                            Architecture</h1>
                                        <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                            <p>The Ph.D. programme in Architecture is an advanced degree program that offers scholars an opportunity to undertake original research in specific areas of architecture & allied topics. The program aspires to build up core competencies like research capabilities, critical thinking and writing, preparedness for publishing, and communication through rigorous coursework. This degree program focuses on developing advanced skills and knowledge in architectural research, design theory, sustainability, and technology. It typically prepares individuals for careers in academia, research, and professional practice. It is also designed to promote useful skills in planning for modern urban scenario of high density and diversity of populations, and growing scarcity of water, power, transport and food supply.
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
    <div style="padding: 40px 60px;">

        <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

        <div class="card mt-4 shadow-sm">
            <div class="row p-3">
                <div class="col-lg-2">
                    <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-architecture/faculty1.jpeg" alt="">
                </div>
                <div class="col-lg-9">
                    <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Hari Prasad Agarwal</h2>
                    <p class="para1 text-dark">Ph.D.</p>

                    <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                    <p class="para1 text-dark">Sustainable Development Goals, Sustainable Cities through Urban Farming, Waste Management, Circular Economy, Food-Water-Energy-Waste Nexus.</p>
                </div>
            </div>
          </div>

        <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

        @include('frontend/components/phddeptweb')

    </div>
        </div>

@endsection
