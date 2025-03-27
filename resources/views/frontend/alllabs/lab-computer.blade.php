@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-computer/mobileComputerLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-computer/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-computer/headimg.jpg" alt="">
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
                                            Computer Lab
                                        </h1>

                                        <p class="text-dark para1 fw-bold" style="text-align: justify;">
                                            “The computer was born to solve problems that did not exist before” – Bill Gates
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our university computer lab is equipped with an impressive bandwidth of internet
                                            connectivity. The computers are embellished with hi-tech advanced software.
                                            Besides that, the lab is a fully air-conditioned hall. The ambience enables
                                            students to perform victoriously and with the burgeoning of technology. The lab
                                            is in block- B on the ground floor.
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
                            class="headd3 fw-bold text-dark text-center pb-2 pt-2 kd-title-ani kd-split-text"> Some
                            Highlights And Features Of Our Computer Lab
                        </h2>

                        <hr>
                        <ol>
                            <ol class="para1 text-dark text-justify">
                                <li>All computers are embellished with the latest licensed version software programs like
                                    Visual Studio, Oracle, Java NetBeans, AutoCAD, C, C++, etc.</li>
                                <li>Well-lit room with fluorescent and incandescent lighting with clearly marked controls.
                                </li>
                                <li>Hard table surfaces for easier note-taking.</li>
                                <li>Flip chart, markers, and whiteboard.</li>
                                <li>Ergonomic and comfortable seating.</li>
                                <li>Centralized ACs for continuous cooling.</li>
                                <li>The university provides separate IT services for all installation and maintenance work.
                                </li>
                            </ol>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="container-fluid mt-4 mb-5" style="padding: 0px 50px;">

                <img src="mobile-assets/lab-computer/ComputerLab.png" alt="">
            </div>

        </div>
    </div>

@endsection
