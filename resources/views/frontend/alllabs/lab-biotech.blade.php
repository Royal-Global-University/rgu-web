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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/Bio-Tech/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/Bio-Tech/headimg.jpg" alt="">
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
                                            Bio-Tech Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The overall aim of the bachelor’s degree programme in biotechnology is to provide
                                            students with learning experiences that help in instilling deep interest in learning
                                            biotechnology; develop broad and balanced knowledge and understanding of
                                            biomolecules, key biochemical concepts, principles and theories related to
                                            biochemistry; and equip students with appropriate tools of analysis and with
                                            theoretical, technical and analytical skills to tackle issues and problems in the
                                            field of biotechnology. The state of art biotechnology lab is equipped with the most
                                            advanced instruments for advanced practical and research work. With the help of lab
                                            resources students familiarize themselves with the usage of living organisms and bio
                                            processes in the field of medicine, technology, engineering and other bio products.
                                            The lab is in block- D in room No. E202 on the third floor.
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

                        <h2 style="color: #0056b3 !important;"
                            class="headd3 fw-bold text-dark text-center pb-2 pt-2 kd-title-ani kd-split-text">Included In The
                            Lab Are:
                        </h2>

                        <hr>
                        <ol>
                            <ol class="para1 text-dark text-justify">
                                <li>Recombinant DNA Technology
                                </li>
                                <li>Spectrophotometer
                                </li>
                                <li>Gradient Thermal Cyclers
                                </li>
                                <li>Type-I Water Systems
                                </li>
                                <li>Animal Cell Culture
                                </li>
                                <li>High-Speed Centrifuges
                                </li>
                                <li>o -86 C Refrigerators
                                </li>
                                <li>Media Filtration Systems
                                </li>
                                <li>CO Incubator
                                </li>
                                <li>Toxicology
                                </li>
                                <li>Microbial technology etc.
                                </li>
                            </ol>
                        </ol>
                    </div>

                    <div class="custom-column p-4">

                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lEg08gsxUA4?si=AsdM-bLuFJXqaAEG"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
            <div class="container-fluid mt-4 mb-5" style="padding: 0px 50px;">

                <div class="headd2 text-dark fw-bold pb-3 text-center kd-title-ani kd-split-text">Glimpse of Our Lab
                </div>

                <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">

                    <div class="col-lg-6">
                        <img class="rounded border shadow-sm" src="assets/img/all_lab/Bio-Tech/img3.JPG" alt="">
                    </div>

                    <div class="col-lg-6">
                        <img class="rounded border shadow-sm" src="assets/img/all_lab/Bio-Tech/img2.JPG" alt="">
                    </div>
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
