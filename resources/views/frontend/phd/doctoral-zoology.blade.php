@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Zoology.png" alt="">

            <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
                <h2 class="mobile-headd2 text-dark">
                    Ph.D. Curriculum
                </h2>

                @include('frontend/components/phddeptmob')
            </div>
        </div>

        <div class="website">
            <div id="page" class="site site_wrapper">

            <div class="scroll-top">
                <div class="scroll-top-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg" data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                        </path>
                    </svg>
                </div>
            </div>

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
                                                Zoology</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    A Ph.D. in Zoology is an advanced degree program that provides students with in-depth knowledge and research experience in the study of animal life. Zoology is a branch of biology that focuses on the structure, function, behavior, evolution, and ecology of animals, from the smallest invertebrates to the largest mammals.
                                                </p>
                                                <p>
                                                    During a Ph.D. program in Zoology, students typically undertake advanced coursework in areas such as ecology, evolution, genetics, animal behavior, physiology, and anatomy, as well as statistics and research methods. They also engage in independent research under the guidance of a faculty advisor, and typically write and defend a thesis based on their research findings.The program aims to provide students with a deep understanding of animal life and prepare them for careers in academia, research, science communication, or conservation work.
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

        <div style="padding: 40px 60px; text-align: justify;">

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/1.png" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Jashodeep Arjun</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Environmental Toxicology, Wild-Life Biology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/2.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Dharmeswar Barhoi</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Molecular Cell Biology, Genetic Toxicology, Environmental Toxicology, Medicinal Plant Research, Cancer Biology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/3.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Utsab Singha</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Environmental Toxicology, Wildlife Biology and Ecology, Molecular Biology, Nanotechnology.                   </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/4.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Parimal Chandra Ray</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Ecology And Wildlife Biology, In Situ And Ex-Situ Conservation Biology, Behavioural Biology.
                        </p>
                        </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/5.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Abesh Chakraborty</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Taxonomy, Biosystematics, Entomology, Biodiversity and Climate Change.
                        </p>
                        </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-zoology/6.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Annu Kumari</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Biochemical Adaptation, Genetics, Fisheries, Toxicology and Molecular Biology.
                        </p>
                        </div>
                </div>
            </div>


            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

            </div>
        </div>
@endsection
