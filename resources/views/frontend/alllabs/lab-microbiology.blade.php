@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-microbio/mobileMicrobiologyLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-microbio/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-microbio/headimg.JPG" alt="">
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
                                            Microbiology Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Microbiology lab is one of the many labs at Royal Global University. The
                                            laboratory caters to both undergraduate and postgraduate students of the
                                            department. The microbiology laboratory is devoted to the culturing,
                                            examination, and identification of microorganisms including bacteria, fungi,
                                            yeasts, etc. The lab is supervised by experts with proper educational
                                            qualifications and training. The lab is in block- D in room No. D202 on the
                                            second floor.
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
                        <li class="para1 text-dark">Laminar air flow horizontal</li>
                        <li class="para1 text-dark">Laminar air flow vertical</li>
                        <li class="para1 text-dark">Hot air oven</li>
                        <li class="para1 text-dark">Autoclave vertical</li>
                        <li class="para1 text-dark">UV Vis spectrophotometer</li>
                        <li class="para1 text-dark">PH Meter</li>
                        <li class="para1 text-dark">BOD cooling incubator</li>
                        <li class="para1 text-dark">Shaker Incubator</li>
                        <li class="para1 text-dark">Uni Bloc ATx224 lab balance</li>
                        <li class="para1 text-dark">Refrigerator</li>
                        <li class="para1 text-dark">Cooling high-speed centrifuge</li>
                        <li class="para1 text-dark">Magnetic Stirrer</li>
                        <li class="para1 text-dark">Double distillation unit with cut off</li>
                        <li class="para1 text-dark">Microbiological shaker</li>
                        <li class="para1 text-dark">Water bath</li>
                        <li class="para1 text-dark">Mini Centrifuge Fixed Speed</li>
                        <li class="para1 text-dark">Compound microscope</li>
                        <li class="para1 text-dark">Cell Disruptor</li>
                        <li class="para1 text-dark">Analytical weighing balance</li>
                        <li class="para1 text-dark">Refractometer</li>
                        <li class="para1 text-dark">Ultrafiltration cell unit etc</li>
                    </ol>

                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Isolation and identification of industrially important microorganisms
                        </li>
                        <li class="para1 text-dark">Effect of various parameters on the growth curve of bacteria and yeast
                        </li>
                        <li class="para1 text-dark">Application of replica plate and gradient plate technique on the
                            isolation of antibiotic-resistant mutants</li>
                        <li class="para1 text-dark">Microbiological quality of processed food like milk, dehydrated food and
                            spoiled food</li>
                        <li class="para1 text-dark">Batch fermentation in shake flakes, alcohol production from fruits,
                            enzyme immobilization techniques etc</li>
                    </ol>
                </div>
            </div>

        </div>


        <img src="mobile-assets/lab-microbio/MicrobiologyLab.png" alt="">
    </div>
@endsection
