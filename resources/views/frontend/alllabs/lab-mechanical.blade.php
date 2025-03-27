@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <img src="mobile-assets/lab-mechanical/mobileMechanicalWorkshop.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-mechanical/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-mechanical/headimg.JPG" alt="">
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
                                            Mechanical Workshop
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The mechanical engineering lab is a huge asset of the university. Our mechanical
                                            lab has several hand and power tools. The lab has been extensively used for
                                            several mechanical testing – from research and development to consulting and
                                            failure analysis. The lab is spacious and can seat 40 students at a time.
                                            Students can find the lab in Block- C on the ground floor.
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
                        <li class="para1 text-dark">Material Tester</li>
                        <li class="para1 text-dark">Wind Tunnel</li>
                        <li class="para1 text-dark">Thick Cylinder</li>
                        <li class="para1 text-dark">Thin Cylinder</li>
                        <li class="para1 text-dark">Universal Testing Machine</li>
                        <li class="para1 text-dark">Digital Storage Oscillation</li>
                        <li class="para1 text-dark">Beam Apparatus</li>
                        <li class="para1 text-dark">Universal Test Frame</li>
                        <li class="para1 text-dark">Bending Moment Beam</li>
                        <li class="para1 text-dark">Gyroscope</li>
                        <li class="para1 text-dark">Hardness Tester</li>
                        <li class="para1 text-dark">Multimeter</li>
                        <li class="para1 text-dark">LCD Digital Microscope</li>
                    </ol>

                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Laboratory
                        Work Carried Out In Years 1, 2 And 3 Includes The Following Areas:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Central Workshop comprising machine shop, carpentry shop, fitting shop,
                            foundry shop, welding shop, smithy shop, sheet metal shop, and CNC machines.</li>
                        <li class="para1 text-dark">Thermal Engineering</li>
                        <li class="para1 text-dark">Internal Combustion Engine</li>
                        <li class="para1 text-dark">Heat and Mass Transfer</li>
                        <li class="para1 text-dark">Refrigeration and Air Conditioning</li>
                        <li class="para1 text-dark">Fluid Mechanics</li>
                        <li class="para1 text-dark">Fluid Machinery</li>
                        <li class="para1 text-dark">Strength of Materials</li>
                        <li class="para1 text-dark">Theory of Machines</li>
                        <li class="para1 text-dark">Automobile</li>
                        <li class="para1 text-dark">Mechanical Vibrations</li>
                        <li class="para1 text-dark">CAD</li>
                        <li class="para1 text-dark">Production Engineering</li>
                        <li class="para1 text-dark">Mechatronics</li>
                        <li class="para1 text-dark">Metrology & Measurements</li>
                        <li class="para1 text-dark">Computer Integrated Manufacturing Systems</li>
                    </ol>
                </div>
            </div>
        </div>

        <div style="padding: 30px 50px; background-color: #fff;">
            <img src="mobile-assets/lab-mechanical/MechanicalWorkshop.png" alt="">
        </div>
    </div>
@endsection
