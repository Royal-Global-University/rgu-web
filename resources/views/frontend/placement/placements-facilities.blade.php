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
        <section style="padding-top: 30px; background-image: url(assets/img/placement-facilities/background.svg);"
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
                                        <img decoding="async" src="assets/img/placement-facilities/pic1.jpg" alt="">
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
                                        Facilities Available</h1>
                                    <div class="para1 text-dark pb-3 text-justify">The Assam Royal Global University is
                                        equipped with all necessary state-of-the art facilities for conducting recruitment
                                        events. Some of the facilities include:
                                    </div>

                                    <ol class="para1 text-dark text-justify" style="line-height: 1.8;">
                                        <li>Air-conditioned conference rooms for pre-placement talks.
                                        </li>
                                        <li>Audio-visual equipment.
                                        </li>
                                        <li>Computer labs to enable organizations to conduct entire recruitment process in
                                            an effective manner.
                                        </li>
                                        <li>Room for group discussions, interviews, and video conferencing.
                                        </li>
                                        <li>Student volunteers for prompt assistance.
                                        </li>
                                        <li>Pick up and dropping facilities from airport.
                                        </li>
                                        <li>Guest house with all modern amenities.
                                        </li>
                                    </ol>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr>
    </div>

    <div class="container-fluid" style="padding: 40px 80px;">
        <div class="headd2 text-center fw-bold text-dark pb-4 kd-title-ani kd-split-text">Glimpse of Our Facilities</div>

        <img src="assets/img/placement-facilities/gallery1.png" alt="">

        <div style="display: flex; justify-content: center; align-items: center; margin: 20px 0px;">
            <a href="{{ route('facilities') }}"><img style="height: 75px;" src="assets/img/placement-facilities/btn.svg" alt=""></a>
        </div>

    </div>

    <!--End About-->
</div><!-- #page -->
@endsection
