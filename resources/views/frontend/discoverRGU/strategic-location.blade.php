@extends('frontend.master')

@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">Strategic <span
                                    style="color: #FF9A1E; font-weight: 500;">Location</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/location/first.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                The Assam Royal Global University is strategically located in Guwahati, the eastern part of
                                India, also known as the Gateway of Southeast Asia. With a renewed emphasis on the Act East
                                policy, the region has become a hotbed for all developmental activities and an educational
                                destination for many. Despite its small size, it derives considerable attention because of its
                                strategic location and ethnic diversity.
                                <span id="moreText" class="collapse">
                                    The city is easily accessible to the nearby countries of Bhutan, Bangladesh, Myanmar, and
                                    Nepal. Further, Guwahati is well connected by both air and railways with the rest of the
                                    Indian subcontinent and neighboring countries. The Assam Royal Global University is located
                                    in Guwahati, Betkuchi, next to National Highway 37. It is only 22 km from the LGBI Airport,
                                    12 km from both the Guwahati railway station and Kamakhya railway station, and just 500 m
                                    from the Inter-State Bus Terminus (ISBT).
                                </span>
                            </p>
                            <button id="toggleBtn" class="btn btn-sm" type="button" data-bs-toggle="collapse"
                                data-bs-target="#moreText" aria-expanded="false" aria-controls="moreText"
                                style="background-color: #264273; color: #fff; border: none; padding: 8px 16px; border-radius: 5px; font-weight: 500; cursor: pointer;">
                                Read More
                            </button>

                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(mobile-assets/location/s2-bg-img-1.webp);">
                <div>
                    <img src="mobile-assets/location/mobile-location.png" />
                </div>
            </section>

            <section>
                <div style="background-color: #27467A;" class="container-fluid">

                    <h5 class="mobile-headd2 text-light fw-bold kd-title-ani kd-split-text pt-4 pb-3 text-center">
                        Our Location</h5>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.584135364138!2d91.72203897462033!3d26.1124905771332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5c6504d45881%3A0x1029dcdedc3e79db!2sRoyal%20Global%20University!5e0!3m2!1sen!2sin!4v1726739274749!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </section>
        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

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
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--head image Section-->
            <section
                style="background-image: url(mobile-assets/location/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/location/first.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700;">
                                Strategic <span style="color: #FF9A1E; font-weight: 500;">Location</h2>
                            <p class="para1" style="color: #264273; font-size: 20px; text-align: justify;">
                                The Assam Royal Global University is strategically located in Guwahati, the eastern part of
                                India, also known as the Gateway of Southeast Asia. With a renewed emphasis on the Act East
                                policy, the region has become a hotbed for all developmental activities and an educational
                                destination for many. Despite its small size, it derives considerable attention because of
                                its strategic location, the ethnic diversity of its population, and the very fact that it is
                                easily accessible to the nearby countries of Bhutan, Bangladesh, Myanmar, and Nepal.
                                Further, Guwahati is well connected with both air and railways with the rest of the Indian
                                subcontinent and the neighbouring countries. The Assam Royal Global University is located in
                                Guwahati, Betkuchi, next to National Highway 37. It is only 22 km from the LGBI Airport, 12
                                km from both the Guwahati railway station and Kamakhya railway station, and just 500 m from
                                the Inter-State Bus Terminus (ISBT).
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <!--head image Section-->
            <!--About Section-->
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

                <section style=" background-image: url(mobile-assets/location/s2-bg-img-1.webp);">
                    <div>
                        <img src="mobile-assets/location/Strategic Location 1-01.png" />
                        <img src="mobile-assets/location/Strategic Location 2-01.png" />
                        <img src="mobile-assets/location/Strategic Location 3-01.png" />
                        <img src="mobile-assets/location/Strategic Location 4-01.png" />
                        <img src="mobile-assets/location/Strategic Location 5-01.png" />
                    </div>
                </section>

            </div>
            <!--End About-->

            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

                <!--About Section-->
                <section>
                    <div style="background-color: #27467A;" class="container-fluid">
                        <h5 class="headd2 text-light fw-bold kd-title-ani kd-split-text pt-4 pb-4 text-center">
                            Our Location</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.584135364138!2d91.72203897462033!3d26.1124905771332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5c6504d45881%3A0x1029dcdedc3e79db!2sRoyal%20Global%20University!5e0!3m2!1sen!2sin!4v1726739274749!5m2!1sen!2sin"
                            width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </section>
                <!--End About-->
            </div>

        </div>
    </div>
@endsection
