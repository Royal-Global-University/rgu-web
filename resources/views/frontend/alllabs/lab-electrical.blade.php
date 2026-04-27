@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <h2 class="text-dark fw-bold kd-title-ani kd-split-text text-center pt-3" style="font-size: 32px;">
                Electrical Engineering Laboratory
            </h2>
            <img class="p-3" src="mobile-assets/lab-electrical/headimg.JPG" alt="">
            <p class="p-3 text-dark" style="text-align: justify">The Electrical Engineering Laboratory is a modern and
                well-equipped practical facility
                that provides students with hands-on exposure to fundamental and advanced concepts
                of electrical engineering. The laboratory is designed to bridge the gap between theoretical
                learning and real-world applications by enabling students to work with professional-
                grade equipment, electrical machines, measuring instruments, and circuit components
                commonly used in industry and research.</p>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px;"
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
                                            <img decoding="async" src="mobile-assets/lab-electrical/headimg.JPG"
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
                                            Electrical Engineering Laboratory
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Electrical Engineering Laboratory is a modern and well-equipped practical
                                            facility
                                            that provides students with hands-on exposure to fundamental and advanced
                                            concepts
                                            of electrical engineering. The laboratory is designed to bridge the gap between
                                            theoretical
                                            learning and real-world applications by enabling students to work with
                                            professional-
                                            grade equipment, electrical machines, measuring instruments, and circuit
                                            components
                                            commonly used in industry and research.
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
    <div class="container">
        <p class="text-dark para1" style="text-align: justify;">The laboratory offers a safe and interactive environment
            where students learn the
            assembly, operation, testing, and analysis of electrical and electronic circuits. Through
            practical sessions, students develop a clear understanding of circuit behavior,
            component characteristics, measurement techniques, safety practices, and
            troubleshooting methods. The lab plays a significant role in enhancing technical
            competence, analytical thinking, teamwork, and problem-solving skills.</p>

        <p class="text-dark para1" style="text-align: justify;">
            Students are trained to use various laboratory instruments such as Digital Multimeter,
            Digital Storage Oscilloscope, power supplies, function generators, energy meters,
            wattmeters, ammeters, voltmeters, and machine trainer kits. These facilities help
            students gain confidence in handling modern engineering tools and equipment.
        </p>
        <div>
            <p class="fw-bold text-dark" style="font-size: 32px;">Laboratory Activities Include:</p>
            <p class="text-dark">1. Electrical Characteristics of Devices</p>
            <p class="text-dark">2. Verification of Network Theorems</p>
            <p class="text-dark">3. AC Circuit Analysis and Performance Study</p>
            <p class="text-dark">4. Electrical Measurements and Instrumentation</p>
            <p class="text-dark">5. House Wiring Concepts and Practical Experiments</p>
            <p class="text-dark">6. Armature Resistance Measurement</p>
            <p class="text-dark">7. Signal Generation and Measurement Experiments</p>
            <p class="text-dark">8. Digital Logic Gate Verification Using ICs</p>
        </div>
        <p class="text-dark para1 pt-3" style="text-align: justify;">
            The Electrical Engineering Laboratory serves as an integrated platform for innovation,
            experimentation, and skill development. It equips students with practical knowledge
            essential for academic excellence, industrial careers, higher studies, and research in the
            field of electrical and allied engineering disciplines.
        </p>
        <div class="pb-5">
            <h3 class="text-dark text-center">Glimpse of Our Lab</h3>
            <div class="container row">
                <div class="col-lg-6">
                    <div class="p-2 rounded">
                        <img src="/mobile-assets/eel/Calibration Experimental Kit.jpeg"/>
                        <h4 class="text-center pt-3 text-dark">Calibration Experimental Kit</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-2 rounded">
                        <img src="/mobile-assets/eel/Filament Lamp Experiment.jpeg"/>
                        <h4 class="text-center pt-3 text-dark">Filament Lamp Experiment</h4>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-2 rounded">
                        <img src="/mobile-assets/eel/Series RLC Circuit.jpeg"/>
                        <h4 class="text-center pt-3 text-dark">Series RLC Circuit</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-2 rounded">
                        <img src="/mobile-assets/eel/Thevenin Theorem Experiment.jpeg"/>
                        <h4 class="text-center pt-3 text-dark">Thevenin Theorem Experiment</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
