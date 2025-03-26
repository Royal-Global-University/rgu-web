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
        <img src="assets/img/international-frro-process/frro.svg" alt="">
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
                                        <img decoding="async" src="assets/img/international-frro-process/headpic.jpg"
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
                                        <div class="headd3 text-danger fw-bold pb-4">(Not applicable in case of Nepalese and
                                            Bhutanese students)
                                        </div>

                                        <div class="para1 text-justify">All students having a valid Indian visa of more than
                                            180 days must obtain a residential permit from the local Foreigner Registration
                                            Office (FRO) as per Indian immigration law.
                                        </div>
                                        <br>
                                        <div class="para1 text-justify">The students need to visit the Branding &
                                            Communication Department in the University located at Ground Floor, A-Block and
                                            contact Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International
                                            Affairs Email : gkanand@rgu.ac, Phone : +91 9864049818, to complete the
                                            registration process.
                                        </div>
                                        <br>
                                        <div class="para1 text-justify">As per immigration law, students should complete the
                                            process within 14 days (may vary for different countries) from the date of their
                                            arrival for beyond 14 days penalties will be levied for late registration.
                                        </div>
                                        <br>
                                        <div class="para1 text-justify">To avoid any such hassles, students are advised to
                                            visit the Branding & Communication Department and complete these formalities the
                                            same day of their reporting to the University who will also guide and complete
                                            the process of the student.
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
    <!--End About-->
</div><!-- #page -->
@endsection
