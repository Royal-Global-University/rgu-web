@extends('frontend.master')
@section('content')
       <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/phd-mobile/mob-Botany.png" alt="">

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
                                                Botany</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                                <p>
                                                    The field of botany is very diverse, with branches in microbiology, horticulture, economic botany, plant anatomists, physiologists and molecular biologists. Botany is the study of plants and their properties. It is an important part of biology, which provides information about plant growth in various climates. The doctoral degree in botany is the highest level of education in plant science. It is designed for scholars who want to learn more about plant behavior, evolutionary trends, and species. The program requires rigorous training in the fields of quantitative and qualitative data analysis, critical thinking, and data-handling techniques. A Ph.D. in this field can lead to a lucrative career in the public and private sectors. These graduates are in demand in local, state, and national organizations, and can be employed in a number of fields such as molecular biology, plant physiology, microbiology, forensic science, forests, etc
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


            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="row d-flex"> <!-- Add d-flex here -->
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-botany/1.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Prof. (Dr.) Nikhil Kumar Chrungoo</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-botany/2.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Prof. (Dr.) Mina Ram Nath</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-botany/3.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Prof. (Dr.) Dandadhar Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-botany/4.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Anushree Baruah</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-botany/5.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Pratikshya Borah</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        </div>
                </div>
            </div>



            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')

        </div>
     </div>
@endsection
