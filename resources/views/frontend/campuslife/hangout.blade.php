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
    <div class="pb-5">
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="background-image: url(assets/img/hangouts/about-bg.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/hangouts/headimg1.jpg" alt="">
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
                                            Hangouts</h1>
                                        <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc"
                                            data-splitting style="text-align: justify;">
                                            <p style="text-align: justify;">The cafeterias at RGU are perfect to refresh
                                                after the hectic class
                                                schedule. It provides the students with the
                                                much-needed platform to ease and revitalise for the subsequent sessions.
                                                Also, it provides a
                                                space for professional
                                                dialogue where they can discuss various areas of interest over a cup of
                                                coffee.</p>

                                            <p class="pt-3" style="text-align: justify;">The university features diverse
                                                dining options, ranging
                                                from traditional eateries to modern coffee shops. There are five
                                                cafeterias and eateries at The Assam Royal Global University. In all five of
                                                them, students can
                                                choose between different
                                                meal deals every day. And the best thing is that the meals served in the
                                                cafeterias are all made
                                                from carefully selected
                                                sustainable and regional products and served by friendly staff members.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container pt-4">

            <div class="pt-5">
                <h2 class="headd2 text-dark fw-bold pb-3 kd-title-ani kd-split-text text-center">
                    Our Hangout Places
                </h2>
                <img src="assets/img/hangouts/gallery.png" alt="">
            </div>

            <h2 class="text-center text-dark fw-bold pt-3 pb-4 headd2">
                Student Views about Hangout Spaces</h2>
            <div class="row">
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/a_jyg3wO8ys"
                        title="Cafeteria at Royal Global University" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/CMUhgGStwJM"
                        title="RGU Cafe Urban Tadka 2" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/YrnvHXiFt-o"
                        title="RGU Cafe Urban Tadka" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/ZfztZNDr2aE"
                        title="RGU Harsha House" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/2AZK2oxVGDI" title="RGU Cafe Bistro"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="400" height="370" src="https://www.youtube.com/embed/w-IHqc1Rvxk" title="RGU Sai Cafe"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
