@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-physics/mobilePhysicslab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-physics/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-physics/headimg.JPG" alt="">
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
                                            students learn the concepts of Physics with experiments. It is designed to aid
                                            and guide students in taking measurements, analysing data and draw inferences
                                            while experimenting.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The lab is quite spacious and very well-ventilated with lots of light. The
                                            laboratory can accommodate 40 students at a time. The lab is in block- B in room
                                            No. B108 on the first floor.
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

        <img src="mobile-assets/lab-physics/Physicslab.png" alt="">

    </div>
@endsection
