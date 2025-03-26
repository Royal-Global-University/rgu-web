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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/chemistry-lab/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/chemistry-lab/headimg.jpg" alt="">
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
                                            proper ventilation. Students can locate the chemistry lab in the block- B in room
                                            No. B004 on the ground floor.
                                        </p>

                                        <p class="text-dark headd3 fw-bold" style="text-align: justify;">
                                            Work carried out in the laboratory includes:
                                        </p>

                                        <ol class="text-dark para1">
                                            <li>Modern organic and inorganic synthetic techniques.</li>
                                            <li>Chromatographic methods used in the separation and purification of reaction
                                                products.</li>
                                            <li>Spectroscopic techniques - infrared, nuclear magnetic resonance, atomic
                                                absorption spectroscopy, and mass spectrometry used in chemical analysis and in
                                                the study of molecular structure.</li>
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

                <div class="headd2 text-dark fw-bold pb-3 text-center kd-title-ani kd-split-text">Glimpse of Our Lab
                </div>

                <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">

                    <div class="col-lg-6">
                        <img class="rounded border shadow-sm" src="assets/img/all_lab/chemistry-lab/img1.JPG" alt="">
                    </div>

                    <div class="col-lg-6">
                        <img class="rounded border shadow-sm" src="assets/img/all_lab/chemistry-lab/img2.JPG" alt="">
                    </div>
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
