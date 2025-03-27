@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <img src="mobile-assets/lab-interior/mobile-interiorlab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-interior/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-interior/headimg.png" alt="">
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
                                            Interior Designing Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our interior design lab is a collaborative space that provides student designers
                                            access to resources (fabric – wallpapers – rugs) to support them in implementing
                                            their projects.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            With help of the lab resources, student designers conceptualize, design and
                                            renovate spaces, translating ideas into reality in line with current needs and
                                            preferences. The lab is in block- C on the first floor.
                                        </p>
                                        <p class="text-dark para1 fw-bold">Included in the lab are:</p>
                                        <ol class="text-dark para1">
                                            <li class="para1 text-dark">A collaborative space</li>
                                            <li class="para1 text-dark">Benching stations with drafting tables</li>
                                            <li class="para1 text-dark">A meeting area for lecturing</li>
                                            <li class="para1 text-dark">Storage and workspace</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">
                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Learning various 2-D and 3-D software programs like AutoCAD, Sketchup,
                            3DS MAX, Photoshop, Illustrator, MS Office and more.</li>
                        <li class="para1 text-dark">One on one mentorship from faculty so that students learn different
                            techniques needed to design stunning spaces.</li>
                        <li class="para1 text-dark">Handle power tools and other modern machines</li>
                        <li class="para1 text-dark">Explore various soft and hard building materials</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection
