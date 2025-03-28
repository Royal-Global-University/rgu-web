@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-zoology/mobileZoologyLab.png" alt="">
        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/zoology/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-zoology/headimg.JPG" alt="">
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
                                            Zoology Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The zoology lab has all the necessary infrastructure and equipment to conduct
                                            various subject related experiments. The practical sessions help students to
                                            comprehend scientific concepts easily. It prepares students to indulge in the
                                            emerging fields of zoology. It also focuses on developing students’ practical
                                            scientific skills and train them in developing expertise in animal science. The
                                            lab is located in block- D in room no- E103 on the second floor.
                                        </p>

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

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Included
                        In The Lab Are:
                    </h2>

                    <hr>
                    <ol>
                        <li class="para1 text-dark">High-resolution compound microscope</li>
                        <li class="para1 text-dark">Dissection microscope</li>
                        <li class="para1 text-dark">Microbial hood</li>
                        <li class="para1 text-dark">Double distillation unit</li>
                        <li class="para1 text-dark">Bacteriological hoods</li>
                        <li class="para1 text-dark">Incubators</li>
                        <li class="para1 text-dark">Calorimeter</li>
                        <li class="para1 text-dark">Microtome etc</li>
                    </ol>
                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Preservation and collection of animal species</li>
                        <li class="para1 text-dark">Dissection of vertebrate and invertebrate animals</li>
                        <li class="para1 text-dark">Studying the general anatomy of animals</li>
                        <li class="para1 text-dark">Identification of embryological slides and embryological stage</li>
                        <li class="para1 text-dark">Application of micro techniques for slide preparation etc</li>
                    </ol>

                </div>

            </div>
        </div>

        <img src="mobile-assets/lab-zoology/ZoologyLab.png" alt="">
    </div>
@endsection
