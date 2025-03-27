@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-botany/mobileBotanyLab.png" alt="">
        </div>
    </div>


    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-botany/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-botany/headimg1.JPG" alt="">
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
                                            students to carry out experiments to study the structure, properties and
                                            biochemical processes of all forms of plant life. The Department of Botany
                                            provides its students with a broad knowledge of botany and equips them with the
                                            tools and drive to conduct original independent research in the discipline of
                                            plant sciences. The lab is in block- D in room no- D201 on the second floor.
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

            <img src="mobile-assets/lab-botany/BotanyLab.png" alt="">

            <div class="container-fluid pb-4" style="padding: 0px 50px;">


                <div class="row pt-3">

                    <div class="col-lg-6">
                        <img class="rounded" src="mobile-assets/lab-botany/41.png" alt="">
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
    </div>
@endsection
