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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/nursing/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/nursing/headimg.JPG" alt="">
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
                                            Nursing Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The nursing lab of the Royal School of Nursing simulates a real-life patient care
                                            setting that allows students to think critically and make decisions about a
                                            patient’s care while also communicating and applying skills. The lab is in block- D
                                            on the fourth floor.
                                        </p>

                                        <p class="text-dark para1 fw-bold" style="text-align: justify;">
                                            Lab Activities Includes:
                                        </p>

                                        <ol>
                                            <li class="para1 text-dark">Preliminary training in patient care</li>
                                            <li class="para1 text-dark">Training on maternal and child health</li>
                                            <li class="para1 text-dark">Advanced nursing skills training to provide care for
                                                adult patients suffering from a variety of diseases</li>
                                            <li class="para1 text-dark">Training in nutrition and diet</li>
                                            <li class="para1 text-dark">Computer education</li>
                                            <li class="para1 text-dark">Dummy trials</li>
                                        </ol>

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

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab Activities
                        Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">High-fidelity mannequins</li>
                        <li class="para1 text-dark">Medication administration carts</li>
                        <li class="para1 text-dark">Functioning hospital beds</li>
                        <li class="para1 text-dark">Functioning oxygen and air flowmeters</li>
                        <li class="para1 text-dark">Skilled trainers</li>
                    </ol>

                </div>

                <div class="custom-column p-4">

                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/8d26T2u5By0?si=xEyW37zbKm-6eqtE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div style="padding: 30px 50px; background-color: #fff;">
            <p class="text-dark headd2 fw-bold text-center kd-title-ani kd-split-text p-2">Glimpse of Our Lab
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/img/all_lab/nursing/gallery.png" alt="">
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
