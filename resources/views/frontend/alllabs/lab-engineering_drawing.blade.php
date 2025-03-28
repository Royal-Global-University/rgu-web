@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-engg-drawing/mobileenggdrawing.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-engg-drawing/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-engg-drawing/headimg.png" alt="">
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
                                            Engineering Drawing Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Engineering Drawing and Design is a core subject in any engineering curriculum.
                                            The Engineering Drawing and Design Lab aims at preparing students with
                                            appropriate knowledge of drawings and designs of objects, geometrical patterns
                                            and 3-D structures. The Engineering Drawing Lab guides and helps the students to
                                            learn how technical drawings can be drawn using different methods. The lab is in
                                            Block- B on the third floor.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div class="custom-container">
                <div class="custom-row">
                    <div class="custom-column p-4">

                        <h2 style="color: #0056b3 !important;"
                            class="headd3 fw-bold text-dark text-center pb-2 pt-2 kd-title-ani kd-split-text">The Following
                            Topics Are Taught In The Lab
                        </h2>

                        <hr>
                        <ol>
                            <ol class="para1 text-dark text-justify">
                                <li class="para1 text-dark">Introductions and Instruments for engineering drawing</li>
                                <li class="para1 text-dark">Lining and Lettering</li>
                                <li class="para1 text-dark">Geometrical construction drawings</li>
                                <li class="para1 text-dark">Orthographic Projection, Dimensions and Scales</li>
                                <li class="para1 text-dark">Descriptive geometry and theory of projection</li>
                                <li class="para1 text-dark">Multi-view drawings</li>
                                <li class="para1 text-dark">Isometric Sectional views</li>
                                <li class="para1 text-dark">Free-hand sketching of objects</li>
                                <li class="para1 text-dark">True Length and Shapes, Projection of objects</li>
                            </ol>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
