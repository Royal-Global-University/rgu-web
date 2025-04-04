@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Microbiology.png" alt="">

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
                                                Microbiology</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    A Ph.D. in Microbiology in India is an intensive research program designed to explore the fascinating world of microorganisms. The Ph.D. candidates engage in original research, conducting experiments and investigations to expand our understanding of bacteria, viruses, fungi, and other microorganisms. Their findings contribute to advancements in fields like medicine, agriculture, biotechnology, and environmental science. Graduates with a Ph.D. in Microbiology often pursue careers in academia, research institutions, pharmaceutical companies, healthcare, and public health agencies, making significant contributions to science and human welfare.
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
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/1.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">DR. Birson Ingti</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Drug discovery, Antibiotic resistance.
                        </p>
                    </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/2.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Niraj Singh</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Understanding the Virulence dynamics of Ralstonia solanacearum, Bacterial wilt disease, gene cloning, and mutation, Development of Biocontrol for plant protection against wilt disease in tomato, brinjal and other agriculturally important crops.
                        </p>
                        </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/3.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Susmita Paul</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Persistent, adaptive and hardworking investigator having experience working in diverse areas of research like screening of microorganisms for biofuel production potential; endophytic.
                        </p>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/4.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Dipayan Das</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <ol class="para1 text-dark">
                            <li>Proteomic network analysis of principal crops under salinity and temperature stress through solid-matrix priming, SDS-PAGE, 2D-Gel, Native PAGE, LCMS-MS, STRING, Cytoscape, and other networking tools.</li>
                            <li>Solid-state fermentation on husk or cakes of cereal crops for isolation of bio-fertilizer and their application towards crop improvement.</li>
                            <li>Sustainable release of phytosynthesized nano-fertilizer for growth promotion of economically important crops under salinity and temperature stress.</li>
                        </ol>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/5.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Debajit Kalita</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Screening of pgpr microbes and their development for the paddy, antibiosis test against plant pathogens.
                            Environmental microbiology: bioflocculation, biofilm, biodegradation, bioremediation, radionuclide, heavy metals).
                            Nanobioremediation: synthesis and application of nzvi, zn, ni, ag, mg, al and sn nanoparticles in metal remediation and water purification.
                        </p>
                        </div>
              </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-microbiology/6.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Pankaj Losan Sharma</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            My research area is to develop different strategies to control bacterial wilt disease caused by ralstonia solanacearum, the second most dangerous bacterial plant pathogen. The bacterium cause disease in more than 450 different plant species including economically important crops like tomato, potato, brinjal, chilli, etc. I have interest to study plant-bacterial interaction and the role of residential microbes in plant health. My new interest is to control bacterial wilt disease using bacteriophage. I am very interested to study bacterial genomics using bioinformatics tool.                    </p>
                        </div>
              </div>
              </div>

            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

            </div>
     </div>
@endsection
