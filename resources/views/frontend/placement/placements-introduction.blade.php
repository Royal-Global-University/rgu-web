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
        <section style="padding-top: 30px; background-image: url(assets/img/rccr/background.svg);"
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
                                        <img decoding="async" src="assets/img/rccr/image1.jpeg" alt="">
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
                                        Introduction</h1>
                                    <div class="para1 text-dark pb-3 text-justify">Royal Centre for Corporate Relations
                                        (RCCR) strives to provide employable students with the best of the opportunities on
                                        campus to start their corporate journey with reputed organizations across India.
                                        RCCR is an indispensable pillar of the University as it plays a pivotal role in
                                        shaping every student’s future.
                                    </div>
                                    <div class="headd3 text-dark fw-bold pb-3">The Centre Comprises of:
                                    </div>

                                    <ol class="para1 text-dark">
                                        <li>(a) Members of RCCR
                                        </li>
                                        <li>(b) One faculty placement coordinator from each Department.
                                        </li>
                                        <li>(c) Student coordinators from every department
                                        </li>
                                        <li>(d) Senior officers of the University (As Advisors/Mentors to the Centre)
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


    <div class="container-fluid" style="padding: 20px 80px;">
        <div class="para1 text-dark pb-2 text-justify">The centre continuously endeavors to help students in pursuing their
            career goals by imparting employment-seeking skills and thereby to attain desired employment. This is
            accomplished through a strong bond created amongst students, alumni, faculty members and the industry. Royal
            Centre for Corporate Relations mentors students to the effect that they are industry-ready at the end of their
            final academic session. The centre is unique in nature as it aims at grooming students ethically as well as in
            terms of attitude and aptitude, through regular training and interactive sessions. The main objective of this
            Centre is to make the students ready to face the challenges of the corporate world and to help them in getting
            placed after completing respective courses.
        </div>
    </div>

    <!--End About-->
</div><!-- #page -->
@endsection
