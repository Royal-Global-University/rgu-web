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
        <img src="assets/img/international-on-campus-job/job.svg" alt="">
    </div>

    <div>
        <img src="assets/img/international-on-campus-job/contact.svg" alt="">
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
                                        <img decoding="async" src="assets/img/international-on-campus-job/pic1.jpg" alt="">
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
                                        <div class="headd3 text-dark fw-bold pb-4">Types of on-campus jobs available to
                                            students
                                        </div>
                                        <ol>
                                            <li>Students can work as student guides and assist juniors or weaker students.
                                            </li>
                                            <li>Students can work as call centre assistant and assist students in their
                                                admission.</li>
                                            <li>Student can work as library assistant and help in the day to day working of
                                                the library.</li>
                                            <li>Students can work as front office assistant and guide visitors.</li>
                                        </ol>

                                        <div class="head3 text-dark fw-bold pb-2">Eligibility
                                        </div>

                                        <ol>
                                            <li>The intending student will have to approach in the Department of Branding &
                                                Communication seeking their work interest.</li>
                                            <li>Upon checking their profile and skill areas they might have to appear an
                                                interview with the Senior Management.</li>
                                            <li>Students may be asked to submit additional documents during the application
                                                review.</li>
                                        </ol>

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
