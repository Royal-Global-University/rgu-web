@extends('frontend.master')
@section('content')
    <div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/physics/background.svg);"
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
                                        <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                            <img decoding="async" src="assets/img/all_lab/physics/headimg.JPG" alt="">
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
                                            Physics Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our Physics laboratory is well stocked with all the modern equipment to help the
                                            students learn the concepts of Physics with experiments. It is designed to aid and
                                            guide students in taking measurements, analysing data and draw inferences while
                                            experimenting.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The lab is quite spacious and very well-ventilated with lots of light. The
                                            laboratory can accommodate 40 students at a time. The lab is in block- B in room No.
                                            B108 on the first floor.
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
                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Instruments Includes:

                    </h2>

                    <hr>
                    <ol>
                        <li class="para1 text-dark">X-Ray Diffractometer (XRD)</li>
                        <li class="para1 text-dark">Telescope 14" (Celestron CGE Pro)</li>
                        <li class="para1 text-dark">Automated Research Microscope</li>
                        <li class="para1 text-dark">Closed Cycle Optical Cryostat</li>
                        <li class="para1 text-dark">HF LCR Meter</li>
                        <li class="para1 text-dark">Fourier Transform Infrared (FTIR) Spectrometer</li>
                        <li class="para1 text-dark">UV/Vis/NIR Spectrometer</li>
                        <li class="para1 text-dark">Monochromator with ICCD Camera</li>
                        <li class="para1 text-dark">Q-Switched Nd: Yag Laser</li>
                        <li class="para1 text-dark">Cyclone Plus Phosho Imager (Scanner)</li>
                        <li class="para1 text-dark">Grating Spectrograph</li>
                        <li class="para1 text-dark">Four-Channel Gas Dryer Mixer with 4 Channel Flow Divider</li>
                    </ol>

                </div>
            </div>
        </div>

        <div style="padding: 30px 50px; background-color: #fff;">
            <p class="text-dark headd2 fw-bold text-center p-2 kd-title-ani kd-split-text">Glimpse of Our Lab
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <img class="rounded" src="assets/img/all_lab/physics/1.JPG" alt="">
                </div>
                <div class="col-lg-6">
                    <img class="rounded" src="assets/img/all_lab/physics/2.JPG" alt="">
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
