@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-forensic/mobileForensicScience.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-forensic/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-forensic/headimg.JPG" alt="">
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
                                            Forensic Science
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Step into the fascinating world of forensic science, where science meets
                                            justice! This lab isn't your typical chemistry or biology classroom. Here, the
                                            microscopes unveil hidden clues, fingerprints whisper stories, and DNA unravels
                                            mysteries.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            From analyzing blood spatter patterns to extracting evidence from a single hair,
                                            we use cutting-edge technology and meticulous techniques to reveal the truth
                                            behind crimes. We're the silent heroes, speaking for the voiceless and ensuring
                                            the scales of justice tip towards the right side.
                                            The Department of Forensic Science provides its students with a broad knowledge
                                            of forensic science and equips them with the tools and drive to conduct original
                                            independent research in the discipline. The lab is in block- D, room no- D307 on
                                            the third floor.
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
                    <div class="custom-column p-4">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">
                            Included In The Lab Are:
                        </h2>
                        <hr>
                        <ol>
                            <li class="para1 text-dark">Fingerprint development kit</li>
                            <li class="para1 text-dark">Crime scene management kit</li>
                            <li class="para1 text-dark">Comparison microscope</li>
                            <li class="para1 text-dark">Stereo-zoom microscope</li>
                            <li class="para1 text-dark">Hot air oven</li>
                            <li class="para1 text-dark">Deep Freezer</li>
                            <li class="para1 text-dark">Colourimeter</li>
                            <li class="para1 text-dark">Disarticulated and articulated human skeleton</li>
                            <li class="para1 text-dark">Models and charts</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div style="padding: 20px 50px; background-color: #fff;">
                <img src="mobile-assets/lab-forensic/ForensicScience.png" alt="">
            </div>

        </div>
    </div>
@endsection
