@extends('frontend.master')
@section('content')
       <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-radiology/mobileRadiographyLab.png" alt="">
        </div>
        </div>

            <div class="website">
    <!--Start Header-->
    @include('frontend/components/aheader')
    <!--End Header-->


    <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
    <section
    style="padding-top: 30px; background-image: url(mobile-assets/lab-radiology/background.svg);"  class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
                                <img  decoding="async"
                                    src="mobile-assets/lab-radiology/headimg.JPG"
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
                    data-id="c8de01e" data-element_type="widget"
                    data-widget_type="go-s-heading.default">
                    <div class="elementor-widget-container">
                        <div class="prthalign">
                        <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                            Radiography & X-ray Imaging Lab
                        </h1>

                        <p class="text-dark para1" style="text-align: justify;">
                            17th June, 2023: A state-of-the-art Radiography Lab was inaugurated at The Assam Royal Global University on the 16th of June, 2023, by Dr. A.K. Pansari, Honourable Chancellor of the varsity.
                        </p>
                        <p class="text-dark para1" style="text-align: justify;">
                            Well equipped with the latest technology and machinery, it can conduct tests and offers practical knowledge to Royalites ranging from Postero-anterior and Anterior oblique of the upper limb to Antero-posterior – supine and Antero-posterior – erect of the Abdomen and Pelvic Cavity.
                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>

    <img src="mobile-assets/lab-radiology/RadiographyLab.png" alt="">

    </div>
@endsection
