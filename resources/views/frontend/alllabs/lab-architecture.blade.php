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
            <section
                style="padding-top: 30px; background-image: url(assets/img/all_lab/architecture-design-lab/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/architecture-design-lab/headimg.png"
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
                                            Architecture Design Lab</h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The design lab of the Royal School of Architecture throws a focus on advanced
                                            digital technologies, material systems and design research which strives to shape
                                            the future of the next generation of designers. In an era of smart cities,
                                            sustainable buildings and contemporary interiors, we train our students to become
                                            lateral thinkers by focusing on a critical design approach. The lab is situated in
                                            block- C on the first floor.
                                        </p>
                                        <div class="headd3 text-dark fw-bold pb-3">Available Software Programs:
                                        </div>

                                        <ol class="para1 text-dark text-justify">
                                            <li>AutoCAD
                                            </li>
                                            <li>Revit
                                            </li>
                                            <li>Adobe Photoshop
                                            </li>
                                            <li>ArchiCAD
                                            </li>
                                        </ol>

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

                        <h2 style="color: #0056b3 !important;"
                            class="headd3 fw-bold text-dark text-center pb-2 pt-2 kd-title-ani kd-split-text">Included In The
                            Lab Are:
                        </h2>

                        <hr>
                        <ol>
                            <ol class="para1 text-dark text-justify">
                                <li>Developing architectural design projects, keeping in mind the climatic condition of the site
                                </li>
                                <li>Studying different building technologies and services like plumbing and sanitation
                                </li>
                                <li>Practically observe building materials, their typologies and specifications
                                </li>
                                <li class="text-dark para1">Study electrical wirings, fittings and services </li>
                                <li class="text-dark para1">Exercises related to surveying and
                                    levelling give students hands-on experience and help them understand the characteristics of
                                    the site.</li>
                                <li class="text-dark para1">Learning techniques of testing
                                    compressive and tensile strengths of building materials.</li>
                                <li class="text-dark para1">Making small prototypes of brick
                                    joints, wooden joints etc</li>
                                <li class="text-dark para1">Experiment with various building
                                    materials 
                                </li>
                            </ol>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding: 0px 50px; background-color: #fff;">
                <div class="headd2 kd-title-ani kd-split-text text-dark text-center fw-bold pt-4">Glimpse of Our Lab
                </div>
                <div class="pt-3 pb-4">
                    <img src="assets/img/all_lab/architecture-design-lab/1.png" />
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
