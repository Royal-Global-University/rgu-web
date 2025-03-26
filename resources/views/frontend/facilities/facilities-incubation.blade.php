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
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <section style="background-image: url(assets/img/all-facilities/incubation/background.svg); padding-top: 30px;"
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
                                            <div style="border: 2px solid #fff;"
                                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                <img decoding="async" src="assets/img/all-facilities/incubation/headimg.png"
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
                                            <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text">
                                                Incubation Centre</h1>
                                            <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc"
                                                data-splitting style="text-align: justify;">
                                                <p style="text-align: justify;">The Assam Royal Global University inaugurated
                                                    the Royal Innovation and Incubation cell on November 8, 2022. The
                                                    Inauguration was launched under the auspicious presence of Shri S.K. Barua,
                                                    Managing Director NRL & Chairman Confederation of Indian Industry, Northeast
                                                    Council India.</p>
                                                <p class="pt-3" style="text-align: justify;">Other dignitaries present at the
                                                    event were Royal Global University (RGU) Chancellor Dr. A.K Pansari, Vice
                                                    Chancellor Prof (Dr.) S.P. Singh, RGU Executive Vice President Ankur
                                                    Pansari, Principal Advisor Prof. MK Chaudhuri, Chairperson (Academics),
                                                    Prof. A.K. Buragohain, NERQMAC, NEDFI Director Manoj Kumar Das and invited
                                                    guests from the NRL, other industries and academicians.</p>
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

            <div class="container-fluid" style="padding: 20px 50px;">
                <p class="text-dark para1">
                    It has housed various entrepreneurs for their vision to start small / mid cap businesses. The Assam Royal
                    Global University Innovation and Incubation cell has successfully registered various companies and these
                    early start ups have not only received support from national funding sources, But also internationally
                    recognized institutions.
                    The Assam Royal Global University Innovation and Incubation cell has not only helped the students to believe
                    and achieve in their vision to start with their successful careers, but also the Incubation cell has
                    contributed an immense role in the overall development of the society at large as spoken by Shri S.K. Barua
                    during an interactive session.
                    The Assam Royal Global University Innovation and Incubation cell believes in the saying <strong>“Creativity
                        is a natural extension of our enthusiasm”</strong> and so does the budding innovators of RGU.
                </p>
            </div>


            <section style="background-color: #f2f2f2;">
                <div class="container-fluid pt-2" style="padding: 0px 50px;">
                    <div class="pt-3">
                        <h2 class="headd2 text-dark fw-bold pb-3 text-center kd-title-ani kd-split-text">
                            Glimpse of Our Incubation Centre
                        </h2>
                        <div class="row pb-4 para1 text-dark">
                            <div class="col-lg-4">
                                <div>
                                    <img src="assets/img/all-facilities/incubation/a.png" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <img src="assets/img/all-facilities/incubation/c.png" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <img src="assets/img/all-facilities/incubation/b.png" />
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
