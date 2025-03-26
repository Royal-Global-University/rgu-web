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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/Bio-Sciences/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/Bio-Sciences/headimg.jpg" alt="">
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
                                            Bio-sciences Research Lab</h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Eminent Scientist and noted academician Prof. Probodh Borah, Head, Dept. of Animal
                                            Biotechnology, College of Veterinary Sciences, Assam Agricultural University,
                                            Khanapara inaugurated the “Biosciences Research Laboratory, The Assam Royal Global
                                            University, Guwahati” on 13th Jan 2023. The facilities created in the lab have been
                                            partially funded by a project sanctioned to Dr. Debajit Borah, Associate Professor,
                                            Department of Biotechnology, under the ALSBT Hub Scheme, Department of
                                            Biotechnology, Govt. of India.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The event was graced by Prof. S.P. Singh, Hon’ble Vice Chancellor, The Assam Royal
                                            Global University, Deans of the Royal School of Biosciences, Life Sciences, and
                                            Applied and Physical Sciences alongside other senior faculty members and research
                                            scholars.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div class="container-fluid" style="padding: 0px 50px;">

                <div class="headd2 text-dark fw-bold mt-4 kd-title-ani kd-split-text text-center">Glimpse of Our Lab
                </div>
                <div class="pt-3 pb-4">
                    <img src="assets/img/all_lab/Bio-Sciences/1.png" />
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
