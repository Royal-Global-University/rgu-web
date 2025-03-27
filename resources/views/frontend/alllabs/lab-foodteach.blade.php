@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <img src="mobile-assets/lab-foodtech/mobileFood-TechLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-foodtech/background.svg);"
                class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f481aaf" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                        data-id="968af55" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                <div class="elementor-widget-container">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div style="border: 2px solid #fff;"
                                            class="kd-about-3-img img-cover fix kd-img-ani-1">
                                            <img decoding="async" src="mobile-assets/lab-foodtech/headimg.JPG" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111"
                        data-id="9b49111" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="prthalign">
                                        <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                            Food-Tech Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Food processing and food analysis are two very important components of Food
                                            Technology under graduate and post graduate programmes. Students under these two
                                            programmes learn about the processing technologies of different foods and
                                            evaluate them in raw or processed forms for their quality. The students also
                                            learn about development of different innovative food products which has market
                                            potentiality. Such products needs to be evaluated for its quality including
                                            nutritional parameters.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div style="padding: 20px 50px;">

                <p class="text-dark para1" style="text-align: justify;">
                    The department of Food Technology has a laboratory with modern equipment to analyse all the
                    macronutrients present in food and determine its quality. This laboratory with state of facility is
                    created with the objective, so that students have experience on food analysis through their courses as
                    well as research. This can also extend help to food entrepreneurs in detailing the nutrient profile of
                    their product.
                </p>

            </div>

            <img src="mobile-assets/lab-foodtech/Food-TechLab.png" alt="">
        </div>
    </div>
    </div>
@endsection
