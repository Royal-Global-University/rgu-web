@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-bioscience/mobileBio-sciencesResearchLab.png" alt="">
        </div>
    </div>


    <div class="website">


        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-bioscience/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-bioscience/headimg.jpg" alt="">
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
                                            Bio-sciences Research Lab</h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Eminent Scientist and noted academician Prof. Probodh Borah, Head, Dept. of
                                            Animal Biotechnology, College of Veterinary Sciences, Assam Agricultural
                                            University, Khanapara inaugurated the “Biosciences Research Laboratory, The
                                            Assam Royal Global University, Guwahati” on 13th Jan 2023. The facilities
                                            created in the lab have been partially funded by a project sanctioned to Dr.
                                            Debajit Borah, Associate Professor, Department of Biotechnology, under the ALSBT
                                            Hub Scheme, Department of Biotechnology, Govt. of India.
                                        </p>
                                        <p class="text-dark para1" style="text-align: justify;">
                                            The event was graced by Prof. S.P. Singh, Hon’ble Vice Chancellor, The Assam
                                            Royal Global University, Deans of the Royal School of Biosciences, Life
                                            Sciences, and Applied and Physical Sciences alongside other senior faculty
                                            members and research scholars.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div class="container-fluid" style="padding: 0px 50px;">


                <div class="pt-3 pb-4">
                    <img src="mobile-assets/lab-bioscience/Bio-sciencesResearchLab.png" />
                </div>
            </div>

        </div>


    </div>
@endsection
