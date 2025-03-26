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
        <section style="background-image: url(assets/img/student-gallery/background.svg); padding-top: 30px;"
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
                                        <img decoding="async" src="assets/img/student-gallery/2.png" alt="">
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
                                        Student Gallery
                                    </h1>

                                    <div class="para1 text-dark" style="text-align: justify;">
                                        <p>
                                            A standard uniform is required for all students enrolled in all courses.
                                            Students of Nursing and Hotel Management are required to wear separate uniform
                                            during their lab work which will enhance professionalism, infection control,
                                            personal safety and role identification.
                                        </p>

                                        <p>
                                            The Student Gallery caters to the uniform requirements of the university
                                            students. The gallery deals with everything required in the university like
                                            uniforms, bags, water bottles, blazers, cardigans and other associated items.
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

    <div class="container-fluid" style="padding: 20px 50px; background-color: #fff;">
        <div class="headd2 kd-title-ani kd-split-text text-dark text-center fw-bold pt-4">Glimpse of The Student Gallery
        </div>

        <div class="row pt-4 pb-3">
            <div class="col-lg-12">
                <img style="width: 100%;" src="assets/img/student-gallery/Frame 1579.png" alt="">
            </div>
        </div>

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark pb-2 pt-1 text-center">
                        Dress Code and Price List :
                    </h2>

                    <hr>
                    <div class="container text-center mt-4 mb-4">
                        <div class="d-flex justify-content-center gap-5">
                            <a>
                                <button class="btn btn-primary download-btn fw-bold headd3">
                                    <i class="fa fa-download"></i> Common Dress Code and Price List
                                </button>
                            </a>
                            <a>
                                <button class="btn btn-primary download-btn fw-bold headd3">
                                    <i class="fa fa-download"></i> Nursing Dress Code and Price List
                                </button>
                            </a>
                            <a>
                                <button class="btn btn-primary download-btn fw-bold headd3">
                                    <i class="fa fa-download"></i> BHM Dress Code and Price List
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--End About-->
</div><!-- #page -->
@endsection
