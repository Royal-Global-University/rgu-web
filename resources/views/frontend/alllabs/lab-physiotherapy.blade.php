@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-physio/mobilePhysiotherapyLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-physio/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-physio/headimg.jpg" alt="">
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
                                            Physiotherapy Lab & Clinic
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Physiotherapy lab is equipped with the latest instruments which are used to
                                            rehabilitate a patient. The students through lab practicals would learn how to
                                            treat patients with physical disabilities and injuries in a range of settings
                                            including hospitals, health centres, private practices and sports clubs under
                                            the proper guidance of a specialist. The lab is in block D on the ground floor.
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
                        Facilities Includes:
                    </h2>

                    <hr>
                    <ol>
                        <li class="para1 text-dark">Parallel bars with postural mirror</li>
                        <li class="para1 text-dark">Shoulder wheel</li>
                        <li class="para1 text-dark">Pulley</li>
                        <li class="para1 text-dark">Suspension apparatus</li>
                        <li class="para1 text-dark">Delorme’s table</li>
                        <li class="para1 text-dark">Treadmill</li>
                        <li class="para1 text-dark">Twister</li>
                        <li class="para1 text-dark">Multi-exercise bed</li>
                        <li class="para1 text-dark">Swiss ball</li>
                        <li class="para1 text-dark">Medicine ball</li>
                        <li class="para1 text-dark">Hand rehab unit</li>
                        <li class="para1 text-dark">Walking aids</li>
                        <li class="para1 text-dark">Wrist and hand exerciser</li>
                        <li class="para1 text-dark">Ankle exerciser etc.</li>
                    </ol>
                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Demonstration of different exercise techniques</li>
                        <li class="para1 text-dark">Strength training exercises</li>
                        <li class="para1 text-dark">Balance and posture-related activities</li>
                        <li class="para1 text-dark">Practical movement therapy</li>
                        <li class="para1 text-dark">Mock trials</li>
                    </ol>

                </div>
            </div>
        </div>

        <img src="mobile-assets/lab-physio/PhysiotherapyLab.png" alt="">

    </div>
@endsection
