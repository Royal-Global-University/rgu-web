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

            <section style="background-image: url(assets/img/all-facilities/covers/about-background.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/all-facilities/std-lounge/2.jpg" alt="">
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
                                            Student Lounge</h1>
                                        <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc" data-splitting
                                            style="text-align: justify;">
                                            <p>
                                                More than just a place to unwind, RGU's student lounge is a haven created to
                                                make life easier for students. The lounge provides a place to relax, get advice,
                                                and connect with friendly faces, bright lighting, and cosy corners. Your peace
                                                of mind matters at RGU, so come in and feel calm amid the bustle of campus life.
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
            <section style="background-color: #f2f2f2;">
                <div class="container-fluid pt-5 pb-5" style="padding: 0px 45px; background-color: #f2f2f2;">
                    <p class="text-dark headd2 text-center kd-title-ani kd-split-text fw-bold">Glimpse of our student lounge
                    </p>

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/std-lounge/3.JPG" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/std-lounge/studentlounge5.jpg" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/std-lounge/4.JPG" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/std-lounge/5.JPG" alt="">
                        </div>
                    </div>

                </div>
            </section>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
