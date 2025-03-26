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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/radiology/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/radiology/headimg.JPG" alt="">
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
                                            Radiography & X-ray Imaging Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            17th June, 2023: A state-of-the-art Radiography Lab was inaugurated at The Assam
                                            Royal Global University on the 16th of June, 2023, by Dr. A.K. Pansari, Honourable
                                            Chancellor of the varsity.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            Well equipped with the latest technology and machinery, it can conduct tests and
                                            offers practical knowledge to Royalites ranging from Postero-anterior and Anterior
                                            oblique of the upper limb to Antero-posterior – supine and Antero-posterior – erect
                                            of the Abdomen and Pelvic Cavity.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container-fluid pt-3 pb-4" style="padding: 0px 45px; background-color: #fff;">
            <p class="text-dark para1" style="text-align: justify;">
                This latest addition is another feather to the laboratories encompassing the Royal School of Medical and Allies
                Sciences. With this, the Department of Radiography can train its students to excel in the usage of latest
                technologies and programs in their respective fields.
            </p>
            <p class="text-dark para1" style="text-align: justify;">
                Royal Global University also has a fully functional Physiotherapy OPD, Royal Diagnostic Lab and Radiography Lab
                in the premises that offer hands-on training, thereby ensuring Royalites excel in their chosen fields.
            </p>
        </div>

        <!--End About-->
    </div><!-- #page -->
@endsection
