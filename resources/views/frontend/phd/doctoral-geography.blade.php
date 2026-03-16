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
                                in Geography</span> </h2>
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
                            Ph.D. Geography is an exploration-based doctoral course in geography that is committed to
                            the investigation of the Earth and the planetary bases, elements, habitats, and wonders. A
                            student focuses on geography to understand how the Earth is evolving. They think
                            experimentally and logically as to why it is developing. In this course, students will
                            explore each and every component of the Earth and its field circulation, research regions
                            and places, types of plains, geology, and much more.
                        </p>

                        <p class="mobile-para1" style="color: #264273; text-align: justify; font-size: 18px;">
                            Geology gives knowledge about important contemporary issues, such as globalization and
                            ecological change, with a specific enthusiasm for neighborhood contrasts; Changes in
                            disciplinary interests and practices reflect those issues. In this course, students will
                            explore each and every component of the Earth and its field circulation, research regions
                            and places, types of plains, geology, etc.There are many positions available for Ph.D.
                            Geography researcher. Candidates after this degree can work as researchers, academicians,
                            meteorologist, naturalist, map maker, metropolitan organizer, climatologist, ecological
                            specialist, topographical data framework officers etc.
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
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Geography</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. Geography is an exploration-based doctoral course in geography that is committed to
                            the investigation of the Earth and the planetary bases, elements, habitats, and wonders. A
                            student focuses on geography to understand how the Earth is evolving. They think
                            experimentally and logically as to why it is developing. In this course, students will
                            explore each and every component of the Earth and its field circulation, research regions
                            and places, types of plains, geology, and much more.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <div style="padding: 40px 60px;">

            <p class="para1" style="text-align: justify; color: #264273;">Geology gives knowledge about important
                contemporary issues, such as globalization and ecological change, with a specific enthusiasm for
                neighborhood contrasts; Changes in disciplinary interests and practices reflect those issues. In this
                course, students will explore each and every component of the Earth and its field circulation, research
                regions and places, types of plains, geology, etc.There are many positions available for Ph.D. Geography
                researcher. Candidates after this degree can work as researchers, academicians, meteorologist,
                naturalist, map maker, metropolitan organizer, climatologist, ecological specialist, topographical data
                framework officers etc.
            </p>

        </div>
    </div>
@endsection
