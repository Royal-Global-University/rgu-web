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
    <div>
        <img src="assets/img/international-student-helpline/helpline.svg" alt="">
    </div>

    <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
        <section style="padding-top: 30px;"
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
                                        <img decoding="async" src="assets/img/international-student-helpline/headimg.png"
                                            alt="">
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
                                    <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                        <div class="headd3 text-dark fw-bold pb-4">The University provides several support
                                            services to international students so that their study and stay in India is
                                            hassle free.
                                        </div>
                                        <ol>
                                            <li>Guidance throughout your chosen program of study regarding any financial
                                                issues, counselling and documentation support.</li>
                                            <li>Specialised advisory services for international students.</li>
                                            <li>Referrals to relevant contacts inside and outside the University.</li>
                                            <li>Social programs and promotion of activities for international students.</li>
                                        </ol>

                                        <div class="para1 text-dark fw-bold pb-3">For any support or guidance, international
                                            students (present or future) can connect with:</div>
                                    </div>

                                    <div class="para1 text-dark"> Ms. Gurpreet Kaur Anand, Deputy Director, The Office of
                                        International Affairs <br>
                                        <strong>Email:</strong> gkanand@rgu.ac <br>
                                        <strong>Phone:</strong>+91 9864049818
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
