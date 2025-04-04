@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Economics.png" alt="">

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
                                                Economics</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    Embracing the vision of National Education Policy (NEP), 2020, the Department of Economics, Royal Global University (RGU) is geared up to create a research environment for the faculty members and the students to meet the challenges of fast changing economic dynamics of our nation. At present there are three experienced full-fledged Ph.D guides in the Department to assist and facilitate meaningful empirical research. The department has also engaged a few co-guides from other universities such as Gauhati University and Alliance University, Bangalore. A few more co-guides are likely to be added soon as our Memorandum of Understanding (MoU) with various colleges of the state takes a practical shape. As regards research areas emphasis is given to concentrate on non-theoretical issues that can enhance our understanding about the economies of Assam, North-East as well as India as a whole.
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

            <p class="para1 text-dark" style="text-align: justify;">
                The department is ardently focusing on emerging issues as well as to have a fresh look on studies that appears to be failing to answer new questions that have been thrown up by the evolving economic landscape. The department specializes on international trade, finance, agriculture, micro, small and medium enterprises, physical and social infrastructure, state, and union government sponsored welfare-oriented schemes etc. and to help the government to formulate policies along with issues already under study. The tools and methodologies followed include both traditional and emerging methods that rely extensively on using computer software and computer languages. Efforts will be made to upgrade both the faculties and researchers in this regard.
            </p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="row d-flex"> <!-- Add d-flex here -->
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-economics/1.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Prof. (Dr.) Swabera Islam</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-economics/2.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Prof. (Dr.) Gautam Mazumdar</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="mobile-assets/phd-mobile/doctoral-economics/3.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Mohammed Deluwar Hoque</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark">Research Interest</h2>
                        <p class="para1 text-dark">Rural Development, Rural Poverty, Rural Banking, International Economics</p>
                    </div>
                </div>

            </div>



            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

        </div>
     </div>
@endsection
