@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Chemistry</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify; font-size: 18px;">
                            Being a central science, chemistry is used in every aspect of a person's life from the food,
                            pharmaceutical, biomedical, cosmetic, agricultural to consumable products. Chemistry plays
                            an important role towards the development and growth of different types of industries.
                            Majority of the research in the department of chemistry are highly interdisciplinary,
                            significantly contributing to the advancement of sciences at the intersection of variety of
                            fields.The doctoral program in chemistry is designed to create research opportunities in a
                            wide range of interest from traditional physical, inorganic, organic chemistry to new
                            frontiers of chemical biology, material sciences, nanoscience, drug-designing, chemistry for
                            energy and sustainability.
                        </p>

                    </div>
                </div>
            </div>

        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        <!--Start Header-->

        <!--End Header-->

        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Chemistry</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Being a central science, chemistry is used in every aspect of a person's life from the food,
                            pharmaceutical, biomedical, cosmetic, agricultural to consumable products. Chemistry plays
                            an important role towards the development and growth of different types of industries.
                            Majority of the research in the department of chemistry are highly interdisciplinary,
                            significantly contributing to the advancement of sciences at the intersection of variety of
                            fields.The doctoral program in chemistry is designed to create research opportunities in a
                            wide range of interest from traditional physical, inorganic, organic chemistry to new
                            frontiers of chemical biology, material sciences, nanoscience, drug-designing, chemistry for
                            energy and sustainability.
                        </p>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
