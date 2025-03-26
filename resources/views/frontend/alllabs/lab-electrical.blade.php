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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/Electrical-Lab/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/Electrical-Lab/headimg.JPG" alt="">
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
                                            Electrical Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Electrical engineering lab is an up-to-date facility designed to provide
                                            students with real-life experience in operating professional standard equipment
                                            employed in industries. The laboratory is equipped with a three-phase variable power
                                            supply, three-phase fixed supply and high voltage variable DC power supply, enabling
                                            students to conduct various projects and experiments safely. The lab is very
                                            spacious and can house 40 students and teaching staff. The lab is in block- B in
                                            room no- B106 on the first floor.
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
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Some Major
                            Equipment Details:
                        </h2>
                        <hr>
                        <ol>
                            <li class="para1 text-dark">Alternator 5 KVA</li>
                            <li class="para1 text-dark">Swinburn’s Test</li>
                            <li class="para1 text-dark">Load characteristics of DC series motor</li>
                            <li class="para1 text-dark">Load test on 3-phase induction motor</li>
                            <li class="para1 text-dark">Load test on 3 phase Slip Ring induction motor</li>
                            <li class="para1 text-dark">Transformer Rectifier Unit</li>
                            <li class="para1 text-dark">Synchronous motor</li>
                            <li class="para1 text-dark">3-phase autotransformer</li>
                            <li class="para1 text-dark">Three phase 12 control lamb bank</li>
                            <li class="para1 text-dark">1 phase Inductive load 230V/ 5A</li>
                            <li class="para1 text-dark">3 phase 415V/ 10A/ Inductive load bank provided with Variable type &
                                insulated terminals are provided under Fabricated & powder coated movable type box. Complete
                                with terminals</li>
                            <li class="para1 text-dark">1 phase Capacitive load: 230V/ 5A</li>
                            <li class="para1 text-dark">3 phase 415V/ 10A/ Capacitive load bank provided with switches &
                                insulated terminals are provided under Fabricated & powder coated movable type box. with
                                terminals & accessories</li>
                            <li class="para1 text-dark">1 phase Loading Rheostat: -230V/ 10A etc</li>

                        </ol>
                    </div>

                    <div class="custom-column">

                        <iframe class="video-frame" width="400" height="600" src="https://www.youtube.com/embed/Jq6h11nEhdE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
