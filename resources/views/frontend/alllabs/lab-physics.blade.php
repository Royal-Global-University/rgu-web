@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 100px; position: relative;">
            <h3 class="text-center text-dark fw-bold">Physics Lab</h3>
            <img class="p-3 rounded" src="mobile-assets/lab-physics/headimg.JPG" alt="">
            <div class="p-3">
                <p class="text-dark para1" style="text-align: justify;">
                    Our Physics laboratory is well-equipped with modern instruments to help students understand the concepts
                    of Physics through experiments. It is designed to assist and guide students in taking measurements,
                    analyzing data, and drawing inferences during practical work.
                    There are separate laboratories dedicated to B.Sc. and M.Sc. Physics students, equipped with basic to
                    advanced experimental setups according to semester requirements. Students are encouraged to perform
                    hands-on experiments under expert supervision, enabling them to gain detailed practical insights.
                </p>

            </div>
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
                                            <img decoding="async" src="mobile-assets/lab-physics/headimg.JPG"
                                                alt="">
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
                                        <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text">
                                            Physics Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our Physics laboratory is well-equipped with modern instruments to help students
                                            understand the concepts of Physics through experiments. It is designed to assist
                                            and guide students in taking measurements, analyzing data, and drawing
                                            inferences during practical work.
                                            There are separate laboratories dedicated to B.Sc. and M.Sc. Physics students,
                                            equipped with basic to advanced experimental setups according to semester
                                            requirements. Students are encouraged to perform hands-on experiments under
                                            expert supervision, enabling them to gain detailed practical insights.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <div class="custom-container">
        <div class="custom-row">
            <div class="custom-column">
                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                    Instruments Includes:

                </h2>

                <hr>
                <ol>
                    <li class="para1 text-dark">Four Probe Experimental Set-up</li>
                    <li class="para1 text-dark">Hall Effect Set-up</li>
                    <li class="para1 text-dark">Michelson Interferometer</li>
                    <li class="para1 text-dark">Fabry-Perot Interferometer</li>
                    <li class="para1 text-dark">Ultrasonic Velocity Measurements Set-up</li>
                    <li class="para1 text-dark">Thomsons e/m Measurements Set-up</li>
                    <li class="para1 text-dark">Millikan’s Oil Drop Experimental Set-up</li>
                    <li class="para1 text-dark">Geiger-Müller (GM) Counter</li>
                    <li class="para1 text-dark">LED/PIN Photo Detector/ Photo-diode/ Solar-Cell Characteristics Study
                        Set-up</li>
                    <li class="para1 text-dark">Lattice Vibrational Kit</li>
                    <li class="para1 text-dark">Frank and Hertz Experimental Set-up</li>
                    <li class="para1 text-dark">Babinet Compensator</li>
                    <li class="para1 text-dark">Fresnel Biprism</li>
                    <li class="para1 text-dark">Electron Spin Resonance (ESR) Spectrometer</li>
                    <li class="para1 text-dark">BJT/FET/ Zener Diode/ LCR circuit etc.</li>
                </ol>

            </div>
        </div>
    </div>

    <div>
        <h3 class="text-center text-dark pt-3">Glimpse of Our Lab</h3>
        <div class="row p-4">
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/B-H Curve Set Up.jpg"/>
                    <h4 class="text-center pt-3 text-light">B-H Curve</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Dark Room Inside.jpg"/>
                    <h4 class="text-center pt-3 text-light">Dark Room</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Dielectric Constant Set Up.jpg"/>
                    <h4 class="text-center pt-3 text-light">Dielectric Constant</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Distillation unit.jpg"/>
                    <h4 class="text-center pt-3 text-light">Distillation Unit</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/GM Counter.jpg"/>
                    <h4 class="text-center pt-3 text-light">GM Counter</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Hall Effect Set Up.jpg"/>
                    <h4 class="text-center pt-3 text-light">Hall Effect</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Magnetic stirrer.jpg"/>
                    <h4 class="text-center pt-3 text-light">Magnetic Stirrer</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/MI Table and Travelling Microscope.jpg"/>
                    <h4 class="text-center pt-3 text-light">MI Table and Travelling Microscope</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Newtons Ring Set Up.jpg"/>
                    <h4 class="text-center pt-3 text-light">Newtons Ring</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Optical Bench and LASER.jpg"/>
                    <h4 class="text-center pt-3 text-light">Optical Bench and Laser</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Potentiometer.jpg"/>
                    <h4 class="text-center pt-3 text-light">Potentiometer</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Sextant.jpg"/>
                    <h4 class="text-center pt-3 text-light">Sextant</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Spectrometer.jpg"/>
                    <h4 class="text-center pt-3 text-light">Spectrometer</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="p-2 rounded" style="background-color: #4987c9">
                    <img class="rounded" src="/mobile-assets/laboratories/physics-lab/Wave Oscillator.jpg"/>
                    <h4 class="text-center pt-3 text-light">Wave Oscillator</h4>
                </div>
            </div>
        </div>
    </div>

@endsection
