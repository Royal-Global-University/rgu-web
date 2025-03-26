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
            <section style="background-image: url(assets/img/all-facilities/stationary/bg1.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/all-facilities/stationary/headimg.png" alt="">
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
                                            Stationary Store
                                        </h1>

                                        <div class="para1 text-dark" data-splitting style="text-align: justify;">
                                            <p>
                                                <span class="fw-bold">Location:</span> Stationary stores are located in ground
                                                floor of Block-D and Block-B, The Assam Royal Global University
                                            </p>

                                            <p>
                                                <span class="fw-bold">Time:</span> The stores are open from Monday to Friday,
                                                10:30 PM to 5:00 PM
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

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important; font-size: 19px;"
                        class="headd3 fw-bold text-dark pb-2 pt-1 text-center">
                        Visit our stationary store and explore awide range of items from pens to crafts. The stationary shop at
                        RGU has got it all. Below are some of the products which are available at the store:
                    </h2>

                    <hr>
                    <ol>
                        <ol class="para1 text-dark text-justify">
                            <li>Painting canvas</li>
                            <li>Various stickers to decorate your room non-permanently</li>
                            <li>Pencil tubes</li>
                            <li>Notebooks</li>
                            <li>Calendars</li>
                            <li>Designer journals</li>
                            <li>Paint products</li>
                            <li>Designer pen and many more</li>
                        </ol>
                    </ol>
                </div>

                <div class="custom-column">
                    <img style="height: 430px;" src="assets/img/all-facilities/stationary/3.png" alt="">
                </div>
            </div>
        </div>


        <div class="container-fluid" style="padding: 20px 50px; background-color: #fff;">
            <div class="headd2 kd-title-ani kd-split-text text-dark text-center fw-bold pt-4">Glimpse of Our Stationary Stores
            </div>

            <div class="row pt-4 pb-3">
                <div class="col-lg-6">
                    <div>
                        <img style="width: 100%;" class="rounded shadow-sm border"
                            src="assets/img/all-facilities/stationary/pic1.jpg" alt="">
                        <h2 class="headd3 fw-bold text-dark text-center pt-3">Stationary Store B Block</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img style="width: 100%;" class="rounded shadow-sm border"
                            src="assets/img/all-facilities/stationary/pic2.jpg" alt="">
                        <h2 class="headd3 fw-bold text-dark text-center pt-3">Stationary Store D Block</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--End About-->
    </div><!-- #page -->
@endsection
