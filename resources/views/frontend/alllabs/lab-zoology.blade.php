@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text text-center pt-3">
                Zoology Lab
            </h1>
            <img class="p-4 rounded" decoding="async" src="mobile-assets/lab-zoology/headimg.JPG" alt="" />
            <p class="text-dark para1 p-4" style="text-align: justify;">
                The Zoology Laboratory is a premier facility dedicated to the comprehensive
                study of animal life, providing students with an immersive environment to
                explore the vast complexities of the animal kingdom. Equipped with
                high-resolution microscopy and advanced anatomical resources, the laboratory
                bridges the gap between theoretical knowledge and practical discovery, allowing
                for the detailed investigation of animal physiology, morphology, and
                evolutionary biology.
            </p>
            <p class="text-dark para1 p-3" style="text-align: justify;">Through hands-on engagement with diverse biological
                specimens, students develop a profound understanding of comparative anatomy,
                histology, and the ecological roles of different species. The facility is
                designed to sharpen technical and analytical skills, encouraging students to
                apply scientific rigor to the study of genetics, ethology, and conservation. By
                fostering critical thinking and a spirit of inquiry, the Zoology Laboratory
                plays a vital role in preparing students to address modern environmental
                challenges, wildlife management, and the preservation of global biodiversity.</p>
        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/zoology/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-zoology/headimg.JPG"
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
                                            Zoology Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Zoology Laboratory is a premier facility dedicated to the comprehensive
                                            study of animal life, providing students with an immersive environment to
                                            explore the vast complexities of the animal kingdom. Equipped with
                                            high-resolution microscopy and advanced anatomical resources, the laboratory
                                            bridges the gap between theoretical knowledge and practical discovery, allowing
                                            for the detailed investigation of animal physiology, morphology, and
                                            evolutionary biology.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-5 text-dark">Through hands-on engagement with diverse biological
                    specimens, students develop a profound understanding of comparative anatomy,
                    histology, and the ecological roles of different species. The facility is
                    designed to sharpen technical and analytical skills, encouraging students to
                    apply scientific rigor to the study of genetics, ethology, and conservation. By
                    fostering critical thinking and a spirit of inquiry, the Zoology Laboratory
                    plays a vital role in preparing students to address modern environmental
                    challenges, wildlife management, and the preservation of global biodiversity.</p>
            </section>
        </div>

    </div>
    <div>
        <h3 class="text-dark text-center pb-4">List of equipment’s:</h3>
        <div class="container">
            <div class="row" style="padding-left: 50px">

                <div class="col-md-6">
                    <ol class="text-dark ps-3 mb-0">
                        <li>Auto Double Distillation Unit</li>
                        <li>Autoclave Unit</li>
                        <li>Centrifuge with Rotor</li>
                        <li>Chromatography Chamber</li>
                        <li>Compound Light Microscope</li>
                        <li>Desiccator</li>
                        <li>Digital Water Bath</li>
                        <li>Digital Weigh Balance</li>
                        <li>Digital pH meter</li>
                        <li>Digital Photoelectric Colorimeter</li>
                        <li>Digital Nephelo Turbidity Meter</li>
                        <li>Dissecting Microscope</li>
                        <li>Double Door Refrigerator</li>
                        <li>Egg Incubator</li>
                        <li>Handheld GPS</li>
                        <li>Haemocytometer</li>
                    </ol>
                </div>

                <div class="col-md-6">
                    <ol start="17" class="text-dark ps-3 mb-0">
                        <li>Haemoglobinometer</li>
                        <li>Heating Mental</li>
                        <li>Hot Air Oven</li>
                        <li>Magnetic Stirrer with Hot Plate</li>
                        <li>Micro Centrifuge</li>
                        <li>Microtome</li>
                        <li>Refrigerator</li>
                        <li>Simple Microscope</li>
                        <li>Sphygmomanometer</li>
                        <li>Stethoscope</li>
                        <li>Stereo-Microscope</li>
                        <li>UV - Vis Spectrophotometer</li>
                        <li>UV Transilluminator</li>
                        <li>Vertical, Horizontal Electrophoresis with Power supply</li>
                        <li>Vortex</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-dark text-center pb-5">Major Instruments</h3>
        <div class="row pb-5">
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/4.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/5.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/6.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/1.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/2.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/3.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="/mobile-assets/zoology eq/7.jpg"/>
            </div>
        </div>
    </div>
@endsection
