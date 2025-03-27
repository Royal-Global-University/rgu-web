@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <img src="mobile-assets/lab-hotel/mobileHotelManagementLab.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-hotel/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-hotel/headimg.JPG" alt="">
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
                                            Hotel Management Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Our Hotel Management Lab meets international standards. Students learn about
                                            different services in a hotel, from baking bread and cooking food items, to
                                            managing a bar or a restaurant. Students who opt for Hotel Management are given
                                            extensive practice in all kinds of hotel-related services.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Hotel Management students are provided with practical training according to
                                            the curriculum through exposure to various departments of a hotel and their
                                            operations like kitchen, front desk, bar, customer service, housekeeping, and
                                            more. The lab is in block- D on the ground floor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">
                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Students are trained on receiving information, billing and maintaining
                            guest relations.</li>
                        <li class="para1 text-dark">House keeping training</li>
                        <li class="para1 text-dark">Operation and management of guest rooms</li>
                        <li class="para1 text-dark">Laundry process and linen exchange process</li>
                        <li class="para1 text-dark">Basic of food & beverages services.</li>
                        <li class="para1 text-dark">Demonstrations on table-service, napkins folds, American service, silver
                            service are also practiced.</li>
                        <li class="para1 text-dark">Practical experience on the use of software programs used in hotel and
                            airline industry so that students know about the working of reservation, front desk, guest
                            services and other modules.</li>
                        <li class="para1 text-dark">Soft skills training through role play and discussion.</li>
                    </ol>
                </div>

                <div class="custom-column">

                    <iframe width="650" height="510" src="https://www.youtube.com/embed/i4O6onhjk_I?si=UMpfbjQWSZL1di8n"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>
        </div>

        <div class="container-fluid" style="padding: 20px 40px; background-color: #fff;">
            <img src="mobile-assets/lab-hotel/HotelManagementLab.png" alt="">
        </div>
    </div>
@endsection
