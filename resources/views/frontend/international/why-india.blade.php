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
        <section style="padding-top: 30px; background-image: url(assets/img/why-india/bg.svg);"
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
                                        <img decoding="async" src="assets/img/why-india/head2.svg" alt="">
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
                                    <h1 class="headd2 fw-bold kd-title-ani kd-split-text"
                                        style="color: #264273; line-height: 1.3;">
                                        Advantages of Studying in India
                                    </h1>
                                    <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                        <p>India has the second largest education system in the world with over 1000
                                            universities and more than 40000 degree colleges. The various privately run and
                                            government run universities in India aim at providing quality education with the
                                            best possible infrastructure and some of them are also at par with universities
                                            in western countries. The Indian education system is evolving which gives
                                            students the space to grow and learn with a strong passion to pursue their
                                            dreams. Furthermore, the Indian economy is one of the fastest growing economies
                                            in the world which makes it a top destination for new businesses that are
                                            looking to hire foreign workers. Experts predict India will be the third largest
                                            economy in the world by 2030.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="container-fluid" style="padding: 0px 80px;">

        <hr>
        <div class="headd3 text-dark fw-bold pb-2">Low Cost of Living
        </div>
        <p class="para1 text-dark">Studying in India allows students to have the all-round experience of quality education
            they deserve, without having to drain their accounts. The low cost of living and education in India is a major
            bargain for students from Africa and other lesser developed countries of Southeast Asia to study in India. The
            average tuition fee for an Indian university is approximately USD 2,200-3,500 (however it may differ across
            different institutes) as compared to USD 39,000 in the United States, USD 11,000 in the United Kingdom, and USD
            23,000 in Australia.
        </p>

        <div style="display: flex; justify-content: center;">
            <div class="row">
                <div class="col-6">
                    <img class="rounded" src="assets/img/why-india/pic3.jpeg" alt="Image 1"
                        style="width: 700px; height: auto;">
                </div>
                <div class="col-6">
                    <img class="rounded" src="assets/img/why-india/pic4.jpg" alt="Image 2"
                        style="width: 700px; height: auto;">
                </div>
            </div>
        </div>
        <hr>
        <br>

        <div style="display: flex; justify-content: center;">
            <div class="row">
                <div class="col-6">

                    <div class="headd3 text-dark fw-bold pb-2 pt-1">Culture & Language
                    </div>
                    <p class="para1 text-dark">Finally, India is synonymous with a land of diverse cultures and heritage.
                        The country is composed of people from all around the world. This gives students endless chances to
                        interact and create long lasting bonds. Considering all these benefits there is a huge flow of
                        students from countries like Bangladesh, Nepal and African countries for higher education in India.
                    </p>

                </div>
                <div class="col-6">
                    <img class="rounded" src="assets/img/why-india/pic5.jpg" alt="Image 2"
                        style="width: 700px; height: auto;">
                </div>
            </div>
        </div>
        <hr>
        <br>

        <div style="display: flex; justify-content: center;">
            <div class="row">

                <div class="col-6">
                    <img class="rounded" src="assets/img/why-india/pic7.JPG" alt="Image 2"
                        style="width: 700px; height: auto;">
                </div>

                <div class="col-6">

                    <div class="headd3 text-dark fw-bold pb-2 pt-1">Tuition Fees & Scholarships
                    </div>
                    <p class="para1 text-dark">Both Indian and foreign students are required to pay their tuition fees. The
                        tuition fees are fairly the same for both foreign and Indian students. However, the university
                        provides up to 100% scholarship to a limited number of International Students.
                    </p>

                </div>

            </div>
        </div>

    </div>

    <div>
        <img class="pt-4" src="assets/img/why-india/contact.svg" alt="">
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
