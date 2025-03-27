@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-chemistry/mobileChemistryLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-chemistry/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-chemistry/headimg.jpg" alt="">
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
                                            Chemistry Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The university boasts of a well-stocked chemistry lab with various regents,
                                            chemicals and other apparatuses required by students to perform experiments and
                                            bring concepts to life. The chemistry lab has all the latest equipment and has
                                            proper ventilation. Students can locate the chemistry lab in the block- B in
                                            room No. B004 on the ground floor.
                                        </p>

                                        <p class="text-dark headd3 fw-bold" style="text-align: justify;">
                                            Work carried out in the laboratory includes:
                                        </p>

                                        <ol class="text-dark para1">
                                            <li>Modern organic and inorganic synthetic techniques.</li>
                                            <li>Chromatographic methods used in the separation and purification of reaction
                                                products.</li>
                                            <li>Spectroscopic techniques - infrared, nuclear magnetic resonance, atomic
                                                absorption spectroscopy, and mass spectrometry used in chemical analysis and
                                                in the study of molecular structure.</li>
                                            <li>Kinetic and thermodynamic studies.</li>
                                            <li>Some study of reaction mechanics and intermediates.</li>
                                        </ol>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <hr>


            <div class="container-fluid mt-4 mb-5" style="padding: 0px 50px;">

                <img src="mobile-assets/lab-chemistry/ChemistryLab.png" alt="">
            </div>

        </div>

    </div>

@endsection
