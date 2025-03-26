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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/biochem/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/biochem/headimg.png" alt="">
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
                                            Bio Chemistry Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our Biochemistry lab is well-equipped with the latest equipment that allows students
                                            to conduct experiments with high precision and accuracy. Students get hands-on
                                            experience with these state-of-the-art tools required to excel in their field. The
                                            lab is in Block- D in room No. E202 on the third floor.
                                        </p>
                                        <div class="headd3 text-dark fw-bold pb-1">Lab Instruments Includes:
                                        </div>

                                        <ol class="para1 text-dark text-justify">
                                            <li>Electrophoresis
                                            </li>
                                            <li>Immunoassay autoanalyzer
                                            </li>
                                            <li>ABG analyzer
                                            </li>
                                            <li>Electrolyte analyzer
                                            </li>
                                            <li>HPLC
                                            </li>
                                            <li>Autoanalyzer
                                            </li>
                                            <li>Analyzer
                                            </li>
                                            <li>Nephelometer
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
                                <li>Routine biochemical investigations
                                </li>
                                <li>Studying different building technologies and services like plumbing and sanitation
                                </li>
                                <li>Detection of viruses, mutations and gene expression studies
                                </li>
                                <li class="text-dark para1">RT-PCR work
                                </li>
                                <li class="text-dark para1">
                                    Clinical sample preparation
                                </li>
                                <li class="text-dark para1">Studying components like proteins, lipids and organelles etc
                                </li>
                            </ol>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
