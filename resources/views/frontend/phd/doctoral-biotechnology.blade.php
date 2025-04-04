@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-biotech.png" alt="">

        <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
            <h2 class="mobile-headd2 text-dark">
                Ph.D. Curriculum
            </h2>

            @include('frontend/components/phddeptmob')
        </div>
     </div>

     <div class="website">

        <div id="page" class="site site_wrapper">

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--About Section-->
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <section style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding-top: 30px;" class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f481aaf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55" data-id="968af55" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx" data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                            <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                <img decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111" data-id="9b49111" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading" data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="prthalign">
                                            <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                                Biotechnology</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    Biotechnology is a research oriented science, a combination of Biology and Technology. It covers a wide variety of subjects like Genetics, Biochemistry, Microbiology, Immunology, Virology, Chemistry and Engineering. It also has tight links and relationships with many other subjects like Health and Medicine, Agriculture and Animal Husbandry, Cropping system and Crop Management, Ecology, Cell Biology, Soil Science and Soil Conservation, Biostatistics, Plant Physiology, Seed Technology and the like. Biotechnology is the use of living things, especially cells and bacteria in industrial process. With demand for biotechnologists growing prospects in this industry are increasing. After Ph.D., in this field one can achieve any goal in the field of research, academics as well as corporate.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
            </div>
            <!--End About-->


        </div>

        <div style="padding: 40px 60px;">

            <p class="para1 text-dark">The Ph.D. programme in Biotechnology at The Assam Royal Global University equips aspiring doctoral students with the knowledge and expertise, necessary to become leaders in the fast-growing fields of industrial and academic biotechnology. In addition to its extensive coursework, The Assam Royal Global University’s doctoral programme will sharpen candidates’ professional and pedagogical skills through intensive laboratory-based research, teaching, in-house seminars and national and international conferences.
            </p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="row d-flex"> <!-- Add d-flex here -->
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-biotechnology/1.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Ranjan Dutta Kalita</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Drug discovery from natural products, Cellulose derivatives and their application, Medicinal and aromatic plants</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-biotechnology/2.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Rupesh Kumar</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Genetic and Epigenetic in Cancers, Molecular pathology</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-biotechnology/3.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Debajit Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Microbial bioremediation, Nanobiotechnology</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-biotechnology/4.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Bhaskar Jyoti Gogoi</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Drug discovery from natural resources against metabolic disorders</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-biotechnology/5.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Siddhartha Narayan Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Microbial metabolites, Antimicrobials, bioremediation, Nanobiotechnology</p>
                    </div>
                </div>
            </div>

            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

        </div>
     </div>
@endsection
