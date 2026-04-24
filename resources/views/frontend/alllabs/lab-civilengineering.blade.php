@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-engineering/mobileCivilEngineeringLab.png" alt="">
        </div>
    </div>


    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-engineering/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-engineering/headimg.png"
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
                                        <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text">
                                            Civil Engineering Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Civil Engineering Lab at our university covers a wide range of cement, rock,
                                            soil, marble, tiles, asphalt and other construction materials. The lab is
                                            equipped with the latest engineering instruments which are extensively used by
                                            students to design, analyse and simulate physical and environmental systems. The
                                            laboratory is in Block- C on the ground floor.
                                        </p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <h2 style="color: #0056b3 !important;"
                class="headd1 fw-bold text-dark text-center pb-4 pt-4 kd-title-ani kd-split-text">Lab Activities
                Includes
            </h2>

            <div class="custom-container">
                <div class="custom-row">
                    <div class="custom-column p-4">
                        <ol class="text-dark para1" style="column-count: 2; column-gap: 40px;">
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
                                </ol>
                            </li>
                            <li>Lightweight pieces, shell content, clay lumps & friable particles in the aggregate sample
                            </li>
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

        </div>
    </div>

    <h2 style="color: #0056b3 !important;"
        class="headd1 fw-bold text-dark text-center pb-4 pt-4 kd-title-ani kd-split-text">Lab Equipments
    </h2>

    <div class="container p-3">
        <div class="row">
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/18.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/19.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/20.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/21.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/22.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/23.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/24.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/25.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/26.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/27.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/28.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/29.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/30.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/31.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/32.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/33.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/34.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/35.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/36.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/37.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/38.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/39.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/40.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/41.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/42.jpg" />
            </div>
            <div class="col-lg-4">
                <img class="p-2 rounded" src="/mobile-assets/laboratories/Civil Engg Lab Machines/43.jpg" />
            </div>
        </div>
    </div>
@endsection
