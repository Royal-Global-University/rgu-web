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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/civil/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/civil/headimg.png" alt="">
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
                                            Civil Engineering Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Civil Engineering Lab at our university covers a wide range of cement, rock,
                                            soil, marble, tiles, asphalt and other construction materials. The lab is equipped
                                            with the latest engineering instruments which are extensively used by students to
                                            design, analyse and simulate physical and environmental systems. The laboratory is
                                            in Block- C on the ground floor.
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
                            class="headd3 fw-bold text-dark text-center pb-2 pt-2 kd-title-ani kd-split-text">Lab Activities
                            Includes
                        </h2>

                        <hr>
                        <ol class="text-dark para1">
                            <li>Fresh concrete, soil, aggregate, rock, cement, water & asphalt sampling</li>
                            <li>Testing of concrete repair</li>
                            <li>
                                Concrete durability tests:
                                <ol type="a">
                                    <li>Water absorption</li>
                                    <li>Water penetration under pressure</li>
                                    <li>Initial surface absorption</li>
                                    <li>Rapid chloride permeability</li>
                                    <li>Chloride migration coefficient</li>
                                </ol>
                            </li>
                            <li>Particle size distribution by wet/dry sieve analysis</li>
                            <li>Chloride & sulphate content in the soil, aggregate, concrete & water</li>
                            <li>Particle size distribution by hydrometer analysis</li>
                            <li>Cover meter survey</li>
                            <li>Cement testing (physical & chemical testing)</li>
                            <li>Aggregate resistance to abrasion & impact</li>
                            <li>Concrete & asphalt mix design & laboratory trial mix</li>
                            <li>Relative density & water absorption of aggregate & rock samples</li>
                            <li>
                                Asphalt testing:
                                <ol type="a">
                                    <li>Core density & asphalt field compaction</li>
                                    <li>Marshal density, stability & flow</li>
                                    <li>Maximum theoretical density</li>
                                    <li>Voids in marshal & field sample</li>
                                    <li>Voids filled with asphalt</li>
                                </ol>
                            </li>
                            <li>Lightweight pieces, shell content, clay lumps & friable particles in the aggregate sample</li>
                            <li>
                                Soil testing:
                                <ol type="a">
                                    <li>Shrinkage limit</li>
                                    <li>Plastic limit</li>
                                    <li>Liquid limit and plasticity index</li>
                                    <li>Loss of ignition</li>
                                    <li>Soil shear strength parameters by using a direct shear test</li>
                                    <li>Water permeability of granular soil & clays/silt</li>
                                    <li>Free swell of soil</li>
                                </ol>
                            </li>
                            <li>Rock grading and weight classification, breakage index, L/D ratio</li>
                            <li>Rock resistance to weathering</li>
                            <li>Fresh concrete testing</li>
                            <li>Point load index</li>
                            <li>Bulk density of lightweight aggregate</li>
                            <li>Water absorption of concrete blocks, channels & flags</li>
                            <li>Compressive strength of concrete cubes, cylindrical specimens, precast blocks & tiles</li>
                            <li>Unconfined compressive strength of rock & soil</li>
                            <li>Obtaining & testing of drilled concrete core</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container mt-4">

                <p class="text-dark headd3 fw-bold" style="text-align: justify;">
                </p>
                <ol class="text-dark para1">


            </div>

            <div class="container-fluid mt-4 mb-5" style="padding: 0px 50px;">

                <div class="headd2 text-dark fw-bold pb-3 text-center kd-title-ani kd-split-text">Glimpse of Our Lab
                </div>

                <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">

                    <iframe width="800" height="600" src="https://www.youtube.com/embed/pCSQDyoTbvc?si=HQ6WO5_uHgVTR_Lq"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
