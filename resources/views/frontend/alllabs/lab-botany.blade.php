@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text text-center">
                Botany Lab</h1>
            <img class="p-3 rounded" src="/mobile-assets/new-labs/botany/botany-img.jpeg" alt="">
            <p class="text-dark para1 p-4" style="text-align: justify;">The Botany Laboratory is a well-established facility
                designed to support both foundational learning and advanced research in plant sciences. It provides a
                structured and hands-on environment where students gain practical expertise in plant morphology, anatomy,
                physiology, taxonomy, and molecular aspects of plant biology. Equipped with essential instruments and
                experimental setups, the laboratory supports studies in key areas such as plant molecular biology, plant
                microbiology, plant pathology, mycology (mushroom studies), phytochemistry, ecology, and environmental
                botany</p>
            <p class="text-dark para1 p-4" style="text-align: justify;">By integrating classical botanical knowledge with modern molecular and microbiological approaches, the
                laboratory promotes critical thinking and research ability. Overall, the Botany Laboratory plays a vital
                role in preparing students to address challenges related to plant health, sustainable agriculture,
                biodiversity conservation, and emerging innovations in plant-based sciences.</p>
        </div>
    </div>


    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px;"
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
                                            <img decoding="async" src="/mobile-assets/new-labs/botany/botany-img.jpeg"
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
                                        <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text text-center">
                                            Botany Lab</h1>

                                        <p class="text-dark" style="text-align: justify;">
                                            The Botany Laboratory is a well-established facility designed to support both
                                            foundational learning and advanced research in plant sciences. It provides a
                                            structured and hands-on environment where students gain practical expertise in
                                            plant morphology, anatomy, physiology, taxonomy, and molecular aspects of plant
                                            biology. Equipped with essential instruments and experimental setups, the
                                            laboratory supports studies in key areas such as plant molecular biology, plant
                                            microbiology, plant pathology, mycology (mushroom studies), phytochemistry,
                                            ecology, and environmental botany.
                                        </p>
                                        <p class="text-dark" style="text-align: justify;">
                                            By integrating classical botanical knowledge with modern molecular and
                                            microbiological approaches, the laboratory promotes critical thinking and
                                            research ability. Overall, the Botany Laboratory plays a vital role in preparing
                                            students to address challenges related to plant health, sustainable agriculture,
                                            biodiversity conservation, and emerging innovations in plant-based sciences.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="text-dark fw-bold text-center pt-4 pb-4" style="font-size: 32px;">List of instruments:
    </div>

    <div class="container text-dark">
        <ol class="equipment-list">
            <li>Autoclave</li>
            <li>Bench Top Centrifuge</li>
            <li>BOD Incubator</li>
            <li>Centrifuge</li>
            <li>Chest Freezer (-20°C)</li>
            <li>Digital Colorimeter</li>
            <li>Digital Colony Counter</li>
            <li>Digital Hot Air Oven</li>
            <li>Digital pH Meter</li>
            <li>Digital Water Bath</li>
            <li>Double Distillation Unit 5L</li>
            <li>Gel Documentation System</li>
            <li>Heating Mantle</li>
            <li>Hot Plate with Magnetic Stirrer</li>
            <li>Incubator</li>
            <li>Kjeldahl Digestion and Distillation Unit</li>
            <li>Laminar Air Flow</li>
            <li>Microwave Oven</li>
            <li>Microscopes</li>
            <li>Mini Sub System with Power Supply</li>
            <li>Muffle Furnace</li>
            <li>Orbital Shaking Incubator</li>
            <li>Refrigerator</li>
            <li>Rotary Microtome with Accessories</li>
            <li>Thermal Cycler / PCR Machine</li>
            <li>Ultra Deep Freezer (-80°C)</li>
            <li>UV Spectrophotometer</li>
            <li>Vertical Mini Gel System with Power Supply</li>
        </ol>
    </div>

        <div class="container">
        <div class="row">
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/21.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/22.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/23.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/24.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/25.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/26.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/27.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/28.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/29.jpg"/>
            </div>
            <div class="col-lg-4 p-3">
                <img src="/mobile-assets/botany/30.jpg"/>
            </div>
        </div>
    </div>

    <style>
        .equipment-list {
            column-count: 2;
            column-gap: 40px;
            padding-left: 120px;
            margin: 0;
        }

        .equipment-list li {
            margin-bottom: 8px;
            break-inside: avoid;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .equipment-list {
                column-count: 1;
                padding-left: 25px;
                column-gap: 0;
            }

            .equipment-list li {
                font-size: 14px;
                margin-bottom: 6px;
            }
        }
    </style>


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


@endsection
