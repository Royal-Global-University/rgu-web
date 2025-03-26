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
        <section style="background-image: url(assets/img/saloon/background.svg); padding-top: 30px;"
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
                                        <img decoding="async" src="assets/img/saloon/3.png" alt="">
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
                                        Kurls & Spykes Salon</h1>

                                    <div class="para1 text-dark" data-splitting style="text-align: justify;">
                                        <p>A sensational rejuvenation and beauty experience. Kurls and Spykes,
                                            Guwahati, is a wellness and beauty lounge for both men and women.
                                            It offers an unmatched array of services designed to renew, refresh
                                            and replenish one’s soul. As a leading hair studio, Kurls and Spykes
                                            offer warm hospitality, an inviting atmosphere and top-notch services
                                            to wide and varied client base which also includes business and leisure
                                            travellers. It offers non exhaustive range of services including a host
                                            of hair services such as haircut, hair colour, creative makeover,
                                            keratin and bridal makeup services using some internationally renowned
                                            brands. Owing to the presence of a reliable and experienced beauty
                                            team. Kurls and Spykes offers the best matched services to pamper one’s
                                            senses. It is a vacation that one can take every day.
                                        </p>

                                        <div class="container text-center mt-4 mb-4">
                                            <div class="d-flex justify-content-center gap-3">
                                                <a target="_blank" href="assets/img/saloon/salon.pdf">
                                                    <button class="btn btn-primary download-btn fw-bold headd3">
                                                        <i class="bi bi-download"></i> More About Kurls & Spykes
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div>
        <img src="assets/img/saloon/contact.svg" alt="">
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
