@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 110px; position: relative;"></div>
        <h1 class="headd2 text-dark fw-bold text-center">
            Anesthesia & Operation Theatre Technology
        </h1>
        <div class="rounded p-3">
            <img decoding="async" src="mobile-assets/lab-operation/headimg.JPG" alt="">
        </div>
        <div class="p-4">
            <p class="text-dark para1" style="text-align: justify;">
                The University has established an action learning laboratory for Anesthesia &
                Operation Theatre (AOT) techniques. This facility is equipped with a modern
                operating theatre that includes an anesthesia machine, surgical table, OT
                lighting, patient monitoring systems, electrosurgical cautery, suction
                apparatus, etc. along with advanced mannequins. These resources provide students
                with immersive, hands-on training and practice-oriented learning, enabling them
                to confidently operate essential tools used in surgical environments.
            </p>
            <p class="text-dark para1" style="text-align: justify;">
                The primary objective of the laboratory is to help students develop a
                comprehensive and in-depth understanding of surgical procedures. By mastering
                both the theoretical and practical aspects of anesthesia and OT technology,
                students will be prepared to enhance the quality of patient care during surgical
                interventions.
            </p>
        </div>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-operation/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-operation/headimg.JPG"
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
                                        <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                            Anesthesia & Operation Theatre Technology
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The University has established an action learning laboratory for Anesthesia &
                                            Operation Theatre (AOT) techniques. This facility is equipped with a modern
                                            operating theatre that includes an anesthesia machine, surgical table, OT
                                            lighting, patient monitoring systems, electrosurgical cautery, suction
                                            apparatus, etc. along with advanced mannequins. These resources provide students
                                            with immersive, hands-on training and practice-oriented learning, enabling them
                                            to confidently operate essential tools used in surgical environments.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The primary objective of the laboratory is to help students develop a
                                            comprehensive and in-depth understanding of surgical procedures. By mastering
                                            both the theoretical and practical aspects of anesthesia and OT technology,
                                            students will be prepared to enhance the quality of patient care during surgical
                                            interventions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
        </div>

        <img src="mobile-assets/lab-operation/OperationTheatre.png" alt="">
    </div>
@endsection
