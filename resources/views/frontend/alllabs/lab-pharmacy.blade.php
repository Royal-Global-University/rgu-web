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
        <section style="padding-top: 30px; background-image: url(assets/img/all_lab/pharmacy/background.svg);"
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
                                        <img decoding="async" src="assets/img/all_lab/pharmacy/headimg.JPG" alt="">
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
                                        Pharmacy Lab
                                    </h1>

                                    <p class="text-dark para1" style="text-align: justify;">
                                        The Department of Pharmacy at The Assam Royal Global University has an excellent
                                        laboratory setup to ensure experiential learning for a better grasp of the
                                        theoretical concepts of pharmaceutical sciences.
                                    </p>
                                    <p class="text-dark para1" style="text-align: justify;">
                                        The lab has separate sections for Pharmaceutics, Pharmacology, Medicinal Chemistry,
                                        Biotechnology, Human Anatomy & Physiology and Pharmaceutical Analysis supported by
                                        the latest instruments and well-trained technicians which provides opportunities for
                                        learning by doing. The lab is in block- D on fourth floor.
                                    </p>

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

                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                    Instruments Includes:
                </h2>

                <hr>
                <ol>
                    <li class="para1 text-dark">UV spectrophotometer</li>
                    <li class="para1 text-dark">HPLC</li>
                    <li class="para1 text-dark">Multi-station Franz diffusion cell assembly</li>
                    <li class="para1 text-dark">Brookfield Viscometer</li>
                    <li class="para1 text-dark">12 station Tablet Compression Machine</li>
                    <li class="para1 text-dark">Electro lab</li>
                    <li class="para1 text-dark">Autoclaves</li>
                    <li class="para1 text-dark">BOD Incubators</li>
                    <li class="para1 text-dark">Microtome Blade</li>
                    <li class="para1 text-dark">Laminar Air Flow</li>
                    <li class="para1 text-dark">Rotarod</li>
                    <li class="para1 text-dark">Convulsiometer</li>
                    <li class="para1 text-dark">Analgesiometer etc</li>
                </ol>
            </div>

            <div class="custom-column p-4">

                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab Activities
                    Includes:
                </h2>
                <hr>
                <ol>
                    <li class="para1 text-dark">Practical knowledge of manufacturing operations</li>
                    <li class="para1 text-dark">Preformulating screening test</li>
                    <li class="para1 text-dark">Designing Evaluation and Pharmacokinetic study of solid, liquid, and
                        semisolid dosage forms including Novel Drug Delivery Systems like ocular, nasal, transmucosal, soft
                        palatal drug delivery systems</li>
                    <li class="para1 text-dark">Tissue culture techniques</li>
                    <li class="para1 text-dark">Sterilization techniques including antibiotic assay, microbial screening etc
                    </li>
                    <li class="para1 text-dark">Analyzing the organic and inorganic compounds as per Pharmacopoeial
                        Standards</li>
                </ol>

            </div>
        </div>
    </div>

    <div class="container-fluid pt-3 pb-4" style="padding: 0px 45px; background-color: #fff;">
        <p class="text-dark headd2 fw-bold text-center p-2 kd-title-ani kd-split-text">Glimpse of Our Lab
        </p>

        <div class="row">
            <div class="col-lg-6">
                <img class="rounded border shadow-sm" src="assets/img/all_lab/pharmacy/1.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <iframe class="rounded border shadow-sm" width="100%" height="100%"
                    src="https://www.youtube.com/embed/0X8fUSxyVeE?si=ceLRYNQoOTCcC9ZD" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-lg-6">
                <img class="rounded border shadow-sm" src="assets/img/all_lab/pharmacy/2.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <img class="rounded border shadow-sm" src="assets/img/all_lab/pharmacy/4.jpg" alt="">
            </div>
        </div>

    </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
