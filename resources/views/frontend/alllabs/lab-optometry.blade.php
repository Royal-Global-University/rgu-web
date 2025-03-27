@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-optometry/mobileOptometryLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-optometry/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-optometry/headimg.jpeg" alt="">
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
                                            Optometry Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Optometry is a health care profession that is concerned especially with
                                            detecting eye disease, measuring eyesight, and prescribing corrective lenses.
                                            The instruments and machines in the optometry lab are all well maintained and
                                            the department is staffed with trained technicians who provide the best training
                                            possible.
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

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Major
                        Instruments Includes:
                    </h2>

                    <hr>
                    <ol>
                        <li class="para1 text-dark">Auto Lensometer</li>
                        <li class="para1 text-dark">Handheld Occluder</li>
                        <li class="para1 text-dark">Snellen Chart</li>
                        <li class="para1 text-dark">Phoropter</li>
                        <li class="para1 text-dark">Trial box</li>
                        <li class="para1 text-dark">Trial Frame</li>
                        <li class="para1 text-dark">Trial Lenses</li>
                        <li class="para1 text-dark">Near Vision Chart</li>
                        <li class="para1 text-dark">Jackson Cross Cylinder</li>
                        <li class="para1 text-dark">Retinoscope</li>
                        <li class="para1 text-dark">Clock and Dial</li>
                        <li class="para1 text-dark">Auto Refractor or Auto Keratometer</li>
                        <li class="para1 text-dark">Slit Lamp etc</li>
                    </ol>

                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Detect power of spectacles</li>
                        <li class="para1 text-dark">Detect refractive status of eye</li>
                        <li class="para1 text-dark">Measure the curvature of cornea</li>
                        <li class="para1 text-dark">Test individual lenses of each eye</li>
                        <li class="para1 text-dark">Determine the axis and magnitude of astigmatism</li>
                        <li class="para1 text-dark">Facilitate practice</li>
                        <li class="para1 text-dark">Offer hands-on working experience etc</li>
                    </ol>

                </div>
            </div>
        </div>

        <img src="mobile-assets/lab-optometry/OptometryLab.png" alt="">

    </div>
@endsection
