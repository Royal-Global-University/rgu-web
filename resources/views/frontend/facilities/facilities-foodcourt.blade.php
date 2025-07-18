@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="background-image: url(mobile-assets/hangout/mob-bg.png); background-size: cover;">


            <img src="mobile-assets/foodcourt/food-mob.png" alt="">


            <div class="container">

                <section style="background-image: url(mobile-assets/hangout/web-bg.png); background-size: cover;">

                    <!--About Section-->
                    <div>
                        <h2 class="headd3 fw-bold text-center kd-title-ani kd-split-text pb-3 text-center pt-3"
                            style="color: #27467A; font-weight: 900;">
                            Glimpse of our <span style="color: #FF9A1E; font-weight: 500;">Food Court</span></h2>

                        <img style="width: 100%;" src="mobile-assets/foodcourt/gallery1.png" alt="">

                        <!--About Section-->
                        <div class="container pb-4">

                            <h2 class="headd3 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-3"
                                style="color: #27467A; font-weight: 900;">
                                Students words about <span style="color: #FF9A1E; font-weight: 500;">food court </span>
                            </h2>

                            <div class="row">
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/a_jyg3wO8ys"
                                        title="Cafeteria at Royal Global University" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/CMUhgGStwJM"
                                        title="RGU Cafe Urban Tadka 2" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/YrnvHXiFt-o"
                                        title="RGU Cafe Urban Tadka" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/ZfztZNDr2aE"
                                        title="RGU Harsha House" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/2AZK2oxVGDI"
                                        title="RGU Cafe Bistro" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <iframe width="450" height="370" src="https://www.youtube.com/embed/w-IHqc1Rvxk"
                                        title="RGU Sai Cafe" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>


                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/hangout/web-bg.png); background-size: cover;">

            <img src="mobile-assets/foodcourt/food-web.png" alt="">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-4 text-center pt-5"
                style="color: #27467A; font-weight: 900;">
                Glimpse of our <span style="color: #FF9A1E; font-weight: 500;">Food Court</span></h2>

            <img style="width: 100%;" src="mobile-assets/foodcourt/gallery1.png" alt="">

            <!--About Section-->
            <div class="container pb-4">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-3"
                    style="color: #27467A; font-weight: 900;">
                    Students words about <span style="color: #FF9A1E; font-weight: 500;">food court </span>
                </h2>

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

        </section>
    </div>
@endsection
