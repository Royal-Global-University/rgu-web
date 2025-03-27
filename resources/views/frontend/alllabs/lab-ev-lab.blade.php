@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <img src="mobile-assets/lab-ev/mobileElectricVehicleCentre.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-ev/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-ev/headimg.jpg" alt="">
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
                                            Electric Vehicle Centre</h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The state-of-the-art Electric Vehicle Centre of Excellence at The Assam Royal
                                            Global University,
                                            established to nurture the next generation of innovators, engineers, and
                                            professionals in the rapidly
                                            advancing field of electric mobility. This premier facility, developed in
                                            collaboration with EV Skill Lab, is
                                            designed to provide advanced, hands-on training in electric vehicle (EV)
                                            technologies, bridging the gap
                                            between theoretical knowledge and real-world applications.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div style="padding: 30px 50px; background-color: #f2f2f2;">
                <div class="headd3 text-dark fw-bold pb-3 mt-4">Key Features of the Facility:
                </div>
                <ol class="para1 text-dark text-justify">
                    <li><span style="font-weight: bold;">4-Wheeler E-Buggy Simulator:</span> A fully functional simulator
                        enabling in-depth understanding of EV systems, including drivetrain, battery integration, and
                        control mechanisms.</li>
                    <li><span style="font-weight: bold;">Electric Vehicle BLDC Motor Drivetrain Module:</span> A
                        comprehensive training setup that offers insights into the functioning and optimization of brushless
                        DC motor drivetrains.</li>
                    <li><span style="font-weight: bold;">Advanced EV Circuit and Wiring Boards:</span> Illuminated,
                        interactive models designed to simplify complex EV wiring systems and enhance practical
                        understanding of component interconnections.</li>
                    <li><span style="font-weight: bold;">Battery Pack Manufacturing Station:</span> A dedicated setup for
                        learning and practicing the assembly, testing, and optimization of EV battery packs, equipping
                        learners with critical skills in energy storage systems.</li>
                    <li><span style="font-weight: bold;">Electric Vehicle Design and Analysis:</span> Advanced tools and
                        software that facilitate the conceptualization, modeling, and simulation of electric vehicle
                        components, enabling learners to develop and test innovative designs.</li>
                    <li><span style="font-weight: bold;">Professional Training Infrastructure:</span> Cutting-edge tools and
                        resources tailored for university students, external learners, and industry professionals, ensuring
                        a versatile and inclusive learning environment.</li>
                </ol>

                <div class="headd3 text-dark fw-bold mt-4">Vision and Mission:
                </div>

                <p class="para1 text-dark text-justify pt-2">The Electric Vehicle Centre of Excellence underscores The Assam
                    Royal Global University’s commitment to
                    fostering innovation and sustainability. The facility aims to:
                </p>

                <ol class="para1 text-dark text-justify">
                    <li><span style="font-weight: bold;">Cultivate a skilled workforce:</span> Equipped to meet the demands
                        of the burgeoning EV industry.</li>
                    <li><span style="font-weight: bold;">Serve as a hub:</span> For research, innovation, and development in
                        sustainable transportation technologies.</li>
                    <li><span style="font-weight: bold;">Provide industry-aligned training:</span> To empower students and
                        professionals with practical expertise in EV design, manufacturing, and maintenance.</li>
                </ol>

            </div>


            <img src="mobile-assets/lab-ev/ElectricVehicleCentre.png" alt="">

        </div>
    </div>
@endsection
