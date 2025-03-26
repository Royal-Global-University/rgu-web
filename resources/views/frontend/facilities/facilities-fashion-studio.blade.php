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
            <section style="background-image: url(assets/img/all-facilities/covers/about-background.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/all-facilities/fashion/headimg.JPG" alt="">
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
                                        <h2 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                            Fashion Studio</h2>
                                        <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc" data-splitting
                                            style="text-align: justify;">
                                            <p>
                                                At our fashion studio, students are taught to nurture their design expressions.
                                                It allows students to discover their innate qualities related to fashion and
                                                designing and take their passion for fashion to the next level. The studio is
                                                stocked with varied fabrics and textiles that students can use to create
                                                wearable garments and accessories. The studio is well equipped with fashion
                                                tools that help students bring their ides to life.
                                            </p>
                                        </div>
                                        <p class="fw-bold text-dark para1">Included In The Fashion Amenities are:</p>
                                        <ol class="para1 text-dark">
                                            <li>Styling Closet
                                            </li>
                                            <li>Sewing Machines
                                            </li>
                                            <li>Design Software
                                            </li>
                                            <li>Photography
                                            </li>
                                        </ol>
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

                    <div>
                        <div style="align-items: center;" class="d-flex"><img style="width: 60px;"
                                src="assets/img/all-facilities/fashion/cloth.svg" alt="">
                            <p class="text-dark fw-bold pt-3 headd3" style="padding-left: 15px;">Styling Closet
                            </p><br>
                        </div>
                        <p class="text-dark p-2 para1" style="font-size: 16px; line-height: 1.7;">The styling closet includes
                            800 garments, accessories, and props designed and created by our students. Samples of the latest
                            fashion accessories and collections are also added from time to time to complete the styling
                            projects. New pieces are added to the inventory each semester to ensure students are kept up with
                            the latest trends.
                        </p>
                    </div>

                    <div>
                        <div style="align-items: center;" class="d-flex"><img style="width: 60px;"
                                src="assets/img/all-facilities/fashion/sewingmachine.svg" alt="">
                            <p class="text-dark fw-bold pt-3 headd3" style="padding-left: 15px;">Sewing Machines
                            </p><br>
                        </div>
                        <p class="text-dark p-2 para1" style="font-size: 16px; line-height: 1.7;">Modern sewing machines are
                            available in the Fashion Studio for students to practice, create and attain perfection as a part of
                            their curriculum.
                        </p>
                    </div>

                    <div>
                        <div style="align-items: center;" class="d-flex"><img style="width: 60px;"
                                src="assets/img/all-facilities/fashion/software.svg" alt="">
                            <p class="text-dark fw-bold pt-3 headd3" style="padding-left: 15px;">Design Software
                            </p><br>
                        </div>
                        <p class="text-dark p-2 para1" style="font-size: 16px; line-height: 1.7;">Learning the Designing
                            Software is an important part of Fashion Design Curriculum. Software like Adobe Illustrator and
                            Adobe Photoshop is taught to the students to enhance their computer oriented designing skills.
                        </p>
                    </div>

                    <div>
                        <div style="align-items: center;" class="d-flex"><img style="width: 60px;"
                                src="assets/img/all-facilities/fashion/photography.svg" alt="">
                            <p class="text-dark fw-bold pt-3 headd3" style="padding-left: 15px;">Photography
                            </p><br>
                        </div>
                        <p class="text-dark p-2 para1" style="font-size: 16px; line-height: 1.7;">Learning Photography is an
                            important aspect of designing process. The students are given both theory and practical exposure to
                            handle photography in the fashion industry.
                        </p>
                    </div>

                </div>

                <div class="custom-column p-4">

                    <iframe width="650" height="670" src="https://www.youtube.com/embed/jS2XzudoZlk" title="RGU Fshion Studio"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
        </div>

        <section style="background-color: #f2f2f2;">

            <div class="container-fluid pt-5 pb-5" style="padding: 0px 45px;">
                <p class="text-dark headd2 text-center kd-title-ani kd-split-text fw-bold">Glimpse of our fashion studio
                </p>

                <div class="row pt-3">

                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/a.JPG"
                            alt="">
                    </div>
                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/b.JPG"
                            alt="">
                    </div>
                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/c.JPG"
                            alt="">
                    </div>
                </div>

                <div class="row pt-3">

                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/d.JPG"
                            alt="">
                    </div>
                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/e.JPG"
                            alt="">
                    </div>
                    <div class="col-lg-4">
                        <img style="width: 100%;" class="rounded border shadow-sm" src="assets/img/all-facilities/fashion/f.JPG"
                            alt="">
                    </div>
                </div>

            </div>
        </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
