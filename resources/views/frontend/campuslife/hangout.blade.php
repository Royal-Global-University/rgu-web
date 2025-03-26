@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="background-image: url(mobile-assets/hangout/mob-bg.png); background-size: cover; padding-top: 90px; position: relative;">

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3"
                style="color: #27467A; font-weight: 900;">
                Hangout</h2>


            <img src="mobile-assets/hangout/mob-banner.png" alt="">


            <div class="container">
                <p class="mobile-para1 pt-3" style="color: #27467A; text-align: justify;">The cafeterias at RGU are perfect to
                    refresh after the hectic class schedule. It provides the students with the much-needed platform to ease and
                    revitalise for the subsequent sessions. Also, it provides a space for professional dialogue where they can
                    discuss various areas of interest over a cup of coffee.
                    The university features diverse dining options, ranging from traditional eateries to modern coffee shops.
                    There are five cafeterias and eateries at The Assam Royal Global University. In all five of them, students
                    can choose between different meal deals every day. And the best thing is that the meals served in the
                    cafeterias are all made from carefully selected sustainable and regional products and served by friendly
                    staff members.
                </p>

                <section style="background-image: url(mobile-assets/hangout/web-bg.png); background-size: cover;">

                    <!--About Section-->
                    <div class="container">

                        <div class="pt-5">
                            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pb-4"
                                style="color: #27467A; font-weight: 900;">
                                Glimpse of our Hangout <span style="color: #FF9A1E; font-weight: 500;">Spaces</span></h2>

                            <img src="mobile-assets/hangout/gallery.png" alt="">
                        </div>

                        <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-3"
                            style="color: #27467A; font-weight: 900;">
                            Students words about <span style="color: #FF9A1E; font-weight: 500;">their hangout spaces</span>
                        </h2>

                        <div class="row">
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/a_jyg3wO8ys"
                                    title="Cafeteria at Royal Global University" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/CMUhgGStwJM"
                                    title="RGU Cafe Urban Tadka 2" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/YrnvHXiFt-o"
                                    title="RGU Cafe Urban Tadka" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/ZfztZNDr2aE"
                                    title="RGU Harsha House" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/2AZK2oxVGDI"
                                    title="RGU Cafe Bistro" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-12">
                                <iframe width="100%" height="370" src="https://www.youtube.com/embed/w-IHqc1Rvxk"
                                    title="RGU Sai Cafe" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>


                    </div>

                </section>
            </div>

        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/hangout/web-bg.png); background-size: cover;">

            <img src="mobile-assets/hangout/web-banner.png" alt="">

            <!--About Section-->
            <div class="container">

                <div class="pt-5">
                    <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-4"
                        style="color: #27467A; font-weight: 900;">
                        Glimpse of our Hangout <span style="color: #FF9A1E; font-weight: 500;">Spaces</span></h2>

                    <img src="mobile-assets/hangout/gallery.png" alt="">
                </div>

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-3"
                    style="color: #27467A; font-weight: 900;">
                    Students words about <span style="color: #FF9A1E; font-weight: 500;">their hangout spaces</span></h2>

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
                        <iframe width="400" height="370" src="https://www.youtube.com/embed/2AZK2oxVGDI"
                            title="RGU Cafe Bistro" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="400" height="370" src="https://www.youtube.com/embed/w-IHqc1Rvxk"
                            title="RGU Sai Cafe" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>


            </div>

        </section>
        <!--End Section-->

    </div>
@endsection
