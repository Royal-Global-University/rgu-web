@extends('frontend.master')
@section('content')
         <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Environmental-Science.png" alt="">

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
                                                Environmental Science</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    The Department of Environmental Science at Assam Royal Global University is at the forefront of cutting-edge research in a wide spectrum of critical areas. One of the prime concerns is understanding and addressing environmental stress, which encompasses a range of factors impacting ecosystems. Additionally, the department places a strong emphasis on the significant issue of greenhouse gas emissions and their mitigation within the Agriculture sector. This area of research holds great potential for sustainable agricultural practices that can contribute to a greener and healthier planet. Furthermore, the exploration of Carbon Sequestration in terrestrial ecosystems is central to combatting climate change. The department is committed to finding innovative methods to enhance carbon storage in natural environments.
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

            <p class="text-dark para1">Pollution, both in soil and water, is a critical concern that the department tackles head-on. Research in this area aims to identify and implement effective strategies for pollution control and remediation. Heavy Metal Pollution, a persistent environmental challenge, is another pivotal area of focus. The department is actively engaged in studying its impact and developing techniques for mitigation. The application of Phytoremediation, an eco-friendly approach, is a significant aspect of this research.
            </p>

            <p class="text-dark para1">
                Understanding and preserving forest ecosystems form a vital part of the department's objectives. This research provides essential insights into maintaining the delicate balance of biodiversity within these crucial habitats. Moreover, the utilization of remote sensing techniques is employed to monitor and manage natural resources. This cutting-edge technology is instrumental in the conservation and sustainable management of vital environmental assets. In essence, the Department of Environmental Science at Assam Royal Global University stands at the forefront of research and innovation in addressing pressing environmental challenges. Through a multidisciplinary approach and a dedicated team of PhD guides, the department is poised to make substantial contributions to sustainable environmental management and conservation. The future holds promise for groundbreaking research that will have a positive impact on our planet's well-being.        </p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-environmental-sc/1.jpg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Kushal Kumar Baruah</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Environmental stress, Green house gas emission and mitigation from Agriculture Sector and Carbon Sequestration of terrestrial ecosystem.
                        </p>
                    </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-environmental-sc/2.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark" style="text-transform: capitalize;">Dr. Pallabi Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Soil Chemistry; Soil Pollution; Water Pollution; Heavy Metal Pollution; Noise Pollution; Phytoremediation
                        </p>
                    </div>
                </div>
              </div>

              <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-environmental-sc/3.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Demsai Reang</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Agroecology; Conservation biology; Environmental Sustainability; Forest Ecology; Landscape and natural resource management; Remote sensing and GIS; Socio-economic vulnerability.                    </p>
                    </div>
                </div>
              </div>

            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

        </div>
     </div>
@endsection
