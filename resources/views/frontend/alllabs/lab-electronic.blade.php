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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/Electronic-Lab/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/Electronic-Lab/45.png" alt="">
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
                                            Electronics Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Electronic Engineering Lab is a high-end hardware design and simulation
                                            platform. The lab technologies give hands on experience in the assembly and testing
                                            of electronic circuits, testing and understanding of the functions of various
                                            electronic components, handling and usage procedure of DC power supply, Digital
                                            Multimeter, Function Generator and CRO. The lab is in block- B in room No. B107 on
                                            the first floor.
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
                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Major Lab
                            Instruments Includes:
                        </h2>
                        <hr>
                        <ol>
                            <li class="para1 text-dark">Single-phase Transformer</li>
                            <li class="para1 text-dark">Resistive and inductive load</li>
                            <li class="para1 text-dark">Single-phase autotransformer</li>
                            <li class="para1 text-dark">Wattmeter, ammeter, and voltmeter with various rating</li>
                            <li class="para1 text-dark">Single-phase Induction motor</li>
                            <li class="para1 text-dark">Function generator, CRO, DSO</li>
                            <li class="para1 text-dark">DC and AC supply systems with various rating</li>
                            <li class="para1 text-dark">RLC and logic gate kit</li>
                            <li class="para1 text-dark">Analog and digital energy meter testing panel</li>
                        </ol>
                    </div>

                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Simulation
                            Software Programs:
                        </h2>
                        <hr>
                        <ol>
                            <div class="text-center pt-3">
                                <img class="border border-success rounded shadow-sm" style="width: 300px;"
                                    src="assets/img/all_lab/Electronic-Lab/MATLAB-Logo.png" alt="">
                                <p class="para1 fw-bold text-center text-dark">MATLAB</p>
                            </div>

                            <div class="text-center pt-4">
                                <img class="border border-success rounded shadow-sm" style="width: 300px;"
                                    src="assets/img/all_lab/Electronic-Lab/pspice.jpg" alt="">
                                <p class="para1 fw-bold text-center text-dark">PSpice</p>
                            </div>

                        </ol>
                    </div>

                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Safety
                            Measures To Follow In The Lab:
                        </h2>
                        <hr>
                        <ol>
                            <li class="para1 text-dark">The test leads and rotary switch must be kept in the correct position
                                for the desired measurement.</li>
                            <li class="para1 text-dark">The meter should not be used if the meter or the test leads look
                                damaged.</li>
                            <li class="para1 text-dark">Resistance should be measured in a circuit only when power is not
                                applied.</li>
                            <li class="para1 text-dark">The probes to a voltage source should always be avoided when a test lead
                                is plugged into the 10 A or 300 mA input jack.</li>
                            <li class="para1 text-dark">Never use the meter on circuits that exceed 4800 watts.</li>
                            <li class="para1 text-dark">To avoid injury never apply more than the rated voltage between any
                                input jack and earth ground.</li>
                            <li class="para1 text-dark">One must be careful when working with voltages above 60 V DC or 30 V AC
                                RMS. Such voltages pose a shock hazard.</li>
                            <li class="para1 text-dark">Keep your fingers behind the finger guards on the test probes when
                                making measurements.</li>
                            <li class="para1 text-dark">Replace the battery as soon as the battery indicator appears to avoid
                                false readings, which could lead to possible electric shock or personal injury.</li>

                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
