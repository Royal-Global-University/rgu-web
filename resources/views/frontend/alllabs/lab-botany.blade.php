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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/Botany/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/Botany/headimg1.JPG" alt="">
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
                                            Botany Lab</h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The botany lab is equipped with all the necessary infrastructure required by
                                            students to carry out experiments to study the structure, properties and biochemical
                                            processes of all forms of plant life. The Department of Botany provides its students
                                            with a broad knowledge of botany and equips them with the tools and drive to conduct
                                            original independent research in the discipline of plant sciences. The lab is in
                                            block- D in room no- D201 on the second floor.
                                        </p>
                                        <div class="headd3 text-dark fw-bold pb-3">Included In The Lab Are:
                                        </div>

                                        <ol class="para1 text-dark text-justify">
                                            <li>Biosafety cabinets
                                            </li>
                                            <li>Spectrophotometer
                                            </li>
                                            <li>Incubator Shakers
                                            </li>
                                            <li>Deep Freezer
                                            </li>
                                            <li>Centrifuge
                                            </li>
                                            <li>Autoclave
                                            </li>
                                            <li>Colourimeter
                                            </li>
                                            <li>Models and charts
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

            <div class="container-fluid pb-4" style="padding: 0px 50px;">
                <div class="headd2 text-dark fw-bold mt-4 kd-title-ani kd-split-text text-center">Glimpse of Our Lab
                </div>

                <div class="row pt-3">

                    <div class="col-lg-6">
                        <img class="rounded" src="assets/img/all_lab/Botany/41.png" alt="">
                    </div>

                    <div class="col-lg-6">

                        <iframe class="rounded" width="100%" height="100%"
                            src="https://www.youtube.com/embed/nIl9b5RE6K8?autoplay=1&loop=1&playlist=nIl9b5RE6K8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>

                    </div>
                </div>

            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
