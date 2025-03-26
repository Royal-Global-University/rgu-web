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
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/language/background.svg);"
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
                                            <img decoding="async" src="assets/img/all_lab/language/headimg.JPG" alt="">
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
                                            Language Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Assam Royal Global University inaugurated a new Language Laboratory,
                                            highlighting the significance of technology in facilitating communication skills and
                                            language training. There are 60 systems with mic and audio headsets and an
                                            interactive screen. A language learning software called Orell Talk has been
                                            installed in the systems.
                                        </p>

                                        <div class="container mt-4 mb-4 g-0">
                                            <div class="justify-content-center gap-3">
                                                <a target="_blank" href="https://rgu.orell.com/">
                                                    <button class="btn btn-primary download-btn fw-bold headd3">
                                                        Login
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
            </section>
        </div>

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">
                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Objectives of
                        the Language Lab
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">The objective of the language laboratory is to develop and refine the
                            language skills of our students.</li>
                        <li class="para1 text-dark">The Language Lab aims to augment LSRW and GV skills (Listening, Speaking,
                            Reading, Writing and Grammar, Vocabulary) through tests, activities, exercises, etc., comprehensive
                            web-based learning and assessment systems.</li>
                        <li class="para1 text-dark">The Language lab offers a variety of resources like audio-video materials,
                            computer-based exercises, and interactive activities that allow students to practice and improve
                            their language skills.</li>
                        <li class="para1 text-dark">The Language lab also offers interactive activities like group discussions
                            and storytelling exercises that help students improve their speaking and listening skills.</li>
                        <li class="para1 text-dark">With the help of internet access, a language lab offers accessibility to
                            various language resources, making the whole learning and interacting process convenient.</li>
                        <li class="para1 text-dark">With the availability of resources and practical learning, students can mark
                            their progression according to their own abilities and potential.</li>
                        <li class="para1 text-dark">The Laboratory classes provide students a first-hand experience with course
                            concepts and the opportunity to explore methods researchers use in their fields.</li>
                    </ol>
                </div>

            </div>
        </div>

        <div style="padding: 20px 50px; background-color: #fff;">
            <p class="text-dark headd2 text-center fw-bold pb-2 kd-title-ani kd-split-text">Glimpse of our lab
            </p>
            <img src="assets/img/all_lab/language/gallery.png" alt="">
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
