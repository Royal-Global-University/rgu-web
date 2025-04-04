@extends('frontend.master')

@section('content')


    <section class="mobile">

        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/917099028518" class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>


        <!-- Floating Section with Frosted Background -->
        <div class="container">
            <div class="floating-wrapper" style="
                position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
                width: 90%; max-width: 400px; z-index: 800;
                backdrop-filter: blur(30px);
                background: #27467A; /* Frosty effect */
                border-radius: 10px;
                box-shadow: 0 1px 1px #ffffff97;
                border: 1px solid #27467A;
                padding: 15px;">

                <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                    <span class="mobile-para1" style="
                        font-weight: bold; font-size: 18px; line-height: 1.3;
                        color: #fff; flex-grow: 1;">
                        Admission open for 2025 - 2026
                    </span>

                    <a href="https://admissions.rgu.ac" target="_blank" class="btn mobile-para1 pulse-btn" style="
                        background-color: #ffb300; color: #fff;
                        font-weight: bold; padding: 10px 14px; border-radius: 5px;
                        text-decoration: none; white-space: nowrap;">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>


        <!-- menu  -->
        @include('frontend/components/mobileheader')


        <!-- mobile video -->
        <div class="mobile-video" style="position: relative; width: 100%; height: auto;">
            <img src="mob-thumb.png" id="video-thumbnail" alt="Video Thumbnail"
                style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

            <video playsinline autoplay loop muted id="video-bg" oncanplay="showVideo()"
                style="width: 100%; height: auto; display: block;">
                <source src="https://d20cs3cmzywuh.cloudfront.net/Websitemobilevideooo.mp4" type="video/mp4">
            </video>
        </div>
        <!-- mobile video -->

        <!-- slider banners  -->
        <div id="carouselExample" class="carousel slide mobile-image-slider" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/slide2.png" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>
        <!-- slider banners  -->

        <!-- discover rgu -->
        <div>
            <img src="mobile-rgu.png"/>
        </div>
        <!-- discover rgu -->

        <!-- happening at rgu  -->
        <section style="padding: 30px; background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/bg.svg);">

            <h2 class="mobile-headd1 pb-4" style="color: #27467A;">In and Around at <span
                    style="font-weight: 500; color: #EF991F;">RGU</span></h2>

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobile1.png" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobile2.png" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobile3.png" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobile4.png" class="d-block w-100 rounded" alt="...">
                    </div>

                </div>
            </div>
        </section>
        <!-- happening at rgu  -->

        <!-- mobile Notifications -->
        <div class="container mt-3">
            <div class="row mobile-marquee-row align-items-center">
                <!-- Left Side: Marquee -->
                <div class="col-9 overflow-hidden">
                    <div class="mobile-marquee">
                        <span class="mobile-headd3">📢 International Seminar by The Assam Royal Global University in
                            association with ELTAI, September, 2024 | 🎓 Advertisement No. : DST-SERB-01/2024 | 🏆 East Zone
                            Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System (BKS) with Higher
                            Education' </span>
                    </div>
                </div>

                <!-- Right Side: Button -->
                <div class="col-3 text-end">
                    <a href="notifications"> <button class="btn mobile-para1 mobile-btn">View All</button></a>
                </div>
            </div>
        </div>
        <!-- mobile Notifications -->

        <!-- fast facts mobile  -->
        <section style="padding: 0px 30px;"
            class="elementor-section elementor-top-section pt-3  elementor-element elementor-element-943e56e elementor-section-boxed elementor-section-height-default elementor-section-height-default pb-5"
            data-id="943e56e" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-23f6d50"
                    data-id="23f6d50" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6cdc10e elementor-widget elementor-widget-go-s-heading"
                            data-id="6cdc10e" data-element_type="widget" data-widget_type="go-s-heading.default">
                            <div class="elementor-widget-container">
                                <div class="prthalign">

                                    <h6 class="mobile-headd2 kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
                                        <img style="width: 40x; height: 40px;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/cap.svg" alt="">
                                        Info
                                    </h6>
                                    <h2 class="mobile-headd1 elementor-gt-heading kd-title-ani kd-split-text"
                                        style="color: #27467A;">Fast <span
                                            style="font-weight: 600; color: #EF991F;">facts</span></h2>
                                    <div class="mobile-para1 elementor-gt-desc kd-para-1 disc wow" data-splitting>
                                        Transformative and Multidisciplinary Education</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-878c6de"
                    data-id="878c6de" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4923d22 elementor-widget elementor-widget-go-category"
                            data-id="4923d22" data-element_type="widget" data-widget_type="go-category.default">
                            <div class="elementor-widget-container">
                                <div class="kd-pop-cat-1-slider">
                                    <div class="swiper-container fix kd-pop-cat-1-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">22</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a href="" aria-label="name"> Years Of Education </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">8000+</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a aria-label="name"> Students </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">460+</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a aria-label="name"> Faculty Members </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">23</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a aria-label="name"> Schools</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">800+</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a aria-label="name"> Research Publications </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="kd-pop-cat-1-item text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"
                                                        style="background-color: antiquewhite;">
                                                        <h3 class="text-dark fw-bold">100+</h3>
                                                    </div>
                                                    <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                        style="background-color: #27467a;">
                                                        <a aria-label="name"> Hi-Tech Labs </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fast facts mobile  -->

        <!-- explore our courses at rgu  -->
        <section style="padding: 30px;">
            <h2 class="mobile-headd1 pb-4" style="color: #27467A;">Explore Our <span
                    style="font-weight: 500; color: #EF991F;">Courses</span></h2>

            <a href="doctoral-programme">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img fetchpriority="high" decoding="async" width="357" height="220" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c6.svg"
                            class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                    </div>
                </div>
            </a>

            <a href="programs">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img decoding="async" width="357" height="220" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c7.svg"
                            class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                    </div>
                </div>
            </a>

            <a href="programs">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img decoding="async" width="357" height="220" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c8.svg"
                            class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                    </div>
                </div>
            </a>

        </section>
        <!-- explore our courses at rgu  -->

        <!--Labs-->
        <div style="padding: 20px; background-color: #FFF8F0;">
            <h2 class="mobile-headd1 pb-3" style="color: #27467A;">Laboratories <span
                    style="font-weight: 500; color: #EF991F;">and Studio</span></h2>

            <div id="mobile-carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <a href="lab-electrical">
                            <div class="card d-flex flex-column shadow-sm rounded"
                                style="background-color: #fff; height: 450px; border: none;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/electric1.jpg"
                                        class="d-block w-100" alt="..." style="border-radius: 10px;">
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Electrical <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="carousel-item">

                        <a href="lab-architecture">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/architecture1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Architecture <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="carousel-item">

                        <a href="lab-computer">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/computer1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Computer <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="carousel-item">

                        <a href="lab-engineering_drawing">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/engineering1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Engineering <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>



                    <div class="carousel-item">

                        <a href="lab-foodteach">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/foodtech1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Food Tech <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>



                    <div class="carousel-item">

                        <a href="lab-language-lab">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/language1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Language <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="carousel-item">

                        <a href="lab-physics">
                            <div class="card d-flex flex-column shadow-sm"
                                style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/physics1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Physics <span
                                            style="font-weight: 500; color: #27467A;">Lab</span></h2>
                                    <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">
                                        Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                                </div>
                            </div>
                        </a>

                    </div>


                </div>

            </div>
        </div>
        <!--Labs-->

        <!-- new advantage -->
        <section style="padding: 80px 30px 0px 30px; background-color: #13223b;"
            class=" elementor-section elementor-top-section elementor-element elementor-element-5b53581 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="5b53581" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d665cde"
                    data-id="d665cde" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-dbbd17f elementor-widget elementor-widget-go-img--bx"
                            data-id="dbbd17f" data-element_type="widget" data-widget_type="go-img--bx.default">
                            <div class="elementor-widget-container">
                                <div class="kd-about-4-left ">
                                    <div class="mb-5 fix img-cover">
                                        <img decoding="async" class="rounded" style="height: 400px !important;"
                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobileadvpic.png" alt="">
                                    </div>
                                    <div class="kd-about-4-img-2 fix img-cover txxa-add-class">
                                        <img decoding="async" style="height: 600px !important;"
                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobileyellow.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-be85421"
                    data-id="be85421" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f5f1b7b elementor-widget elementor-widget-go-s-heading"
                            data-id="f5f1b7b" data-element_type="widget" data-widget_type="go-s-heading.default">
                            <div class="elementor-widget-container">

                                <div class="prthalign">
                                    <h1 style="font-weight: 700;" class="mobile-headd1 text-light">RGU Advantages</h1>
                                    <div class="elementor-gt-desc kd-para-2 scn-disc"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3c95150 elementor-widget elementor-widget-go-kadu-accordion"
                            data-id="3c95150" data-element_type="widget" data-widget_type="go-kadu-accordion.default">
                            <div class="elementor-widget-container">
                                <div class="kd-about-4-according mb-60" id="accordionExample_449027">
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-a06e874">
                                            <button class="item-title kd-heading-2 kd-font-700 " type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-a06e874"
                                                aria-expanded="false" aria-controls="collapse449027-a06e874">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Affordable</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-a06e874" class="accordion-collapse collapse show"
                                            aria-labelledby="heading449027-a06e874"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Highly affordable
                                                    Fees.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-c4b748f">
                                            <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b748f"
                                                aria-expanded="false" aria-controls="collapse449027-c4b748f">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Hi-Tech and Vibrant Campus</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-c4b748f" class="accordion-collapse collapse "
                                            aria-labelledby="heading449027-c4b748f"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Most Hi-Tech and
                                                    Vibrant Campus with culturally diverse community in the
                                                    North-East with fully air-conditioned built-up area</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-d109252">
                                            <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-d109252"
                                                aria-expanded="false" aria-controls="collapse449027-d109252">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Research</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-d109252" class="accordion-collapse collapse "
                                            aria-labelledby="heading449027-d109252"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Research intensive
                                                    and Updated Curriculum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-c4b7489">
                                            <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7489"
                                                aria-expanded="false" aria-controls="collapse449027-c4b748f">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Worldwide Students</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-c4b7489" class="accordion-collapse collapse "
                                            aria-labelledby="heading449027-c4b7489"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Students from 6
                                                    Countries</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-c4b7486">
                                            <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7486"
                                                aria-expanded="false" aria-controls="collapse449027-c4b748f">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Location</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-c4b7486" class="accordion-collapse collapse "
                                            aria-labelledby="heading449027-c4b7486"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Centrally Located
                                                    in Guwahati City with easy access to all modern amenities.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kd-about-4-according-item mb-20">
                                        <div class="item-header" id="heading449027-c4b7485">
                                            <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7485"
                                                aria-expanded="false" aria-controls="collapse449027-c4b748f">
                                                <span style="background-color:#FF9A1E;" class="icon">
                                                    <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                </span>
                                                <span style="font-weight: 400; font-size: 30px;"
                                                    class="text mobile-para1">Rich Capital</span>
                                            </button>
                                        </div>
                                        <div id="collapse449027-c4b7485" class="accordion-collapse collapse "
                                            aria-labelledby="heading449027-c4b7485"
                                            data-bs-parent="#accordionExample_449027">
                                            <div class="item-body">
                                                <p class="kd-para-2 disc has-para-sm mobile-para1">Rich Intellectual
                                                    Capital with strong distinguished academicians and domain
                                                    experts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new advantage end-->

        <!--Mobile Footprint-->
        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/footprints2.png" alt="">
        <!--Mobile Footprint end  -->

        <!--Mobile Testimonial-->
        <section style="padding: 40px 30px; background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/s2-bg-img-1.webp);">
            <h6 class="mobile-headd3 text-center kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
                <img style="width: 40x; height: 40px;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/cap.svg" alt="">
                RGU Testimonials
            </h6>
            <h2 class="mobile-headd1 pb-4 pt-3" style="color: #27467A;">They Speak <span
                    style="font-weight: 500; color: #EF991F;">About Us</span></h2>

            <div class="row" style="display: flex; flex-direction: column;">
                <a href="success"><img class="pb-3" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/alumni-student.png" /></a>
                <a href="top-recruiters"><img class="pb-3" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/recruiters.png" /></a>
                <a href="footprints"><img class="pb-3" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/dignitaries.png" /></a>
            </div>

        </section>
        <!--Mobile Testimonial end -->

    </section>

    <section class="website">
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
            <section>
                <header>
                    <div>
                        @include('frontend/components/iheader')
                        <div>
                            <!-- Carousel container for 4-image slider -->
                            <div id="imageCarousel" class="carousel slide carousel-container" data-bs-ride="carousel"
                                data-pause="false" data-interval="2000">

                                <!-- admission banner  -->
                                <section class="container border mb-3"
                                    style="background-color: #ffffff41; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.20); border-radius: 20px;  backdrop-filter: blur(20px);">

                                    <div class="row"
                                        style="display: flex; align-items: center; justify-content: center; padding: 20px 25px;">

                                        <div class="col-lg-9">
                                            <h2 style="color: #fff;" class="headd2 fw-bold">
                                                Applications are now open for Admission in 2025 - 2026
                                            </h2>
                                            <p class="para1 text-white">
                                                Explore the full range of graduate courses that are accepting applications
                                            </p>
                                        </div>

                                        <div class="col-lg-3">

                                                <div class="btn-container">
                                                    <a href="https://admissions.rgu.ac/" target="_blank"><div class="btn shiny-button">
                                                        <p class="text-center headd3 fw-bold pt-3">APPLY NOW</p>
                                                    </div>
                                                    </a>
                                                </div>

                                        </div>

                                    </div>
                                </section>
                                <!-- admission banner  -->

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/sl1.png" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/sl2.png" alt="Slide 2">
                                    </div>
                                    <!-- <div class="carousel-item">
                                            <img src="sarang/s3.png" alt="Slide 3">
                                        </div> -->
                                </div>

                            </div>


                            <div class="video-container" style="position: relative; width: 100%; height: auto;">
                                <img src="web-thumb.png" id="video-thumbnail2" alt="Video Thumbnail"
                                    style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

                                <video autoplay loop muted id="video-bg2" oncanplay="showVideo2()"
                                    style="width: 100%; height: auto; display: block;">
                                    <source src="https://d20cs3cmzywuh.cloudfront.net/v-2.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </header>

            </section>
            <!--End Header-->

            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

                <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/n-explore-rgu-15-15.png" alt="">

                <!--Event Section-->
                <section-2 style="padding: 0 !important; margin: 0 !important;"
                    class="pb-4 elementor-section elementor-top-section elementor-element elementor-element-c7aba52 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="c7aba52" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-element elementor-element-b58434b"
                            data-id="b58434b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-faf1a3a elementor-widget elementor-widget-go-team-carousel"
                                    data-id="faf1a3a" data-element_type="widget"
                                    data-widget_type="go-team-carousel.default">
                                    <div class="elementor-widget-container">


                                        <div style="background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/bgnew.svg);"
                                            class=" pb-5 kd-team-4-area p-relative fix">



                                            <div class="kd-team-4-il-1">
                                                <svg width="579" height="878" viewBox="0 0 579 878" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_i_1_2216)">
                                                        <rect width="878" height="878" rx="439" fill="#13223b" />
                                                    </g>
                                                    <defs>
                                                        <filter id="filter0_i_1_2216" x="0" y="0" width="878" height="878"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="BackgroundImageFix" result="shape" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset />
                                                            <feGaussianBlur stdDeviation="50" />
                                                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1"
                                                                k3="1" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.0313726 0 0 0 0 0.835294 0 0 0 0 0.396078 0 0 0 0.1 0" />
                                                            <feBlend mode="normal" in2="shape"
                                                                result="effect1_innerShadow_1_2216" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </div>

                                            <div class="kd-team-4-il-2">
                                                <svg width="225" height="229" viewBox="0 0 225 229" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M212.324 155.642C213.184 157.62 214 159.683 214.817 161.79C215.247 162.907 216.451 163.423 217.569 162.907C218.686 162.391 219.245 161.016 218.815 159.898C218.127 157.963 217.182 155.943 216.236 154.051C218.17 153.234 220.105 152.418 222.039 151.472C223.157 150.956 223.716 149.58 223.286 148.462C222.856 147.345 221.567 146.872 220.492 147.431C218.385 148.419 216.322 149.322 214.258 150.182C213.227 148.204 212.195 146.313 211.12 144.464C210.518 143.476 209.229 143.175 208.24 143.69C207.767 143.948 207.423 144.335 207.251 144.765C207.079 145.281 207.122 145.84 207.423 146.356C208.412 148.076 209.401 149.838 210.346 151.687C208.455 152.418 206.649 153.106 204.629 153.621C204.027 153.793 203.597 154.18 203.339 154.653C203.124 155.083 203.081 155.599 203.253 156.072C203.597 157.147 204.758 157.792 205.876 157.491C208.068 156.975 210.175 156.33 212.324 155.642Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M184.596 193.861C184.553 196.054 184.553 198.461 184.295 200.611C184.166 201.771 185.068 202.803 186.315 202.803C187.605 202.889 188.637 201.814 188.68 200.568C188.809 198.418 188.852 196.269 188.895 194.162C191.001 194.291 193.151 194.42 195.343 194.463C196.547 194.463 197.578 193.388 197.664 192.184C197.75 190.938 196.805 189.992 195.601 190.035C193.323 190.035 191.216 190.121 188.938 189.949C188.938 187.799 188.637 185.478 188.465 183.328C188.336 182.167 187.304 181.351 186.186 181.394C185.67 181.437 185.241 181.652 184.897 181.996C184.553 182.382 184.338 182.941 184.424 183.586C184.553 185.564 184.639 187.541 184.682 189.562C182.618 189.347 180.641 189.132 178.663 188.831C178.061 188.745 177.546 188.917 177.116 189.304C176.772 189.648 176.471 190.035 176.428 190.551C176.256 191.626 177.03 192.743 178.19 192.958C180.297 193.474 182.36 193.603 184.596 193.861Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M143.068 216.388C142.036 218.323 140.962 220.301 139.801 222.278C139.199 223.31 139.543 224.6 140.661 225.115C141.736 225.631 143.154 225.201 143.756 224.17C144.831 222.321 145.82 220.472 146.765 218.667C148.571 219.699 150.42 220.601 152.354 221.547C153.429 222.063 154.847 221.633 155.449 220.558C156.051 219.484 155.621 218.237 154.547 217.721C152.483 216.732 150.462 215.743 148.528 214.669C149.431 212.605 150.248 210.542 150.978 208.521C151.365 207.446 150.806 206.242 149.775 205.813C149.302 205.598 148.786 205.598 148.356 205.77C147.84 205.942 147.41 206.371 147.195 206.93C146.464 208.822 145.734 210.757 144.874 212.648C143.111 211.53 141.392 210.37 139.758 209.252C139.242 208.908 138.684 208.822 138.168 208.951C137.695 209.08 137.308 209.381 137.007 209.811C136.405 210.757 136.62 212.089 137.523 212.734C139.328 213.938 141.177 215.185 143.068 216.388Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M95.8658 218.624C94.1033 220 92.2549 221.418 90.3634 222.579C89.3746 223.224 89.1165 224.514 89.8903 225.546C90.6211 226.577 92.0827 226.792 93.1145 226.061C94.877 224.772 96.5966 223.525 98.2302 222.235C99.4339 223.955 100.681 225.717 102.013 227.437C102.744 228.469 104.249 228.555 105.237 227.867C106.226 227.136 106.398 225.803 105.624 224.901C104.163 223.224 102.83 221.461 101.54 219.57C103.217 218.237 104.851 216.732 106.398 215.099C107.215 214.282 107.258 212.949 106.484 212.132C106.14 211.745 105.667 211.574 105.194 211.531C104.636 211.531 104.077 211.702 103.647 212.089C102.185 213.422 100.681 214.712 99.1331 216.045C98.0153 214.325 96.9407 212.605 95.9519 210.929C95.651 210.413 95.1781 210.112 94.6192 210.026C94.1464 209.897 93.6735 209.983 93.2436 210.241C92.2978 210.8 91.9109 212.089 92.4698 213.121C93.5445 214.97 94.7051 216.775 95.8658 218.624Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M52.404 200.181C50.2545 200.611 48.0191 200.998 45.7407 201.342C44.537 201.513 43.7631 202.588 44.021 203.792C44.279 204.953 45.5257 205.813 46.7294 205.598C48.8359 205.254 50.8993 204.91 52.9198 204.523C53.2208 206.63 53.6936 208.607 54.1664 210.714C54.4244 211.874 55.6711 212.734 56.8748 212.519C58.0785 212.347 58.8093 211.23 58.5084 210.026C57.9925 207.79 57.5196 205.598 57.1327 203.448C59.2822 202.846 61.4318 202.201 63.4523 201.557C64.527 201.213 65.1289 200.009 64.8279 198.934C64.699 198.418 64.398 198.031 63.9681 197.773C63.4952 197.472 62.9363 197.429 62.3345 197.601C60.443 198.203 58.4225 198.848 56.445 199.321C56.23 197.257 56.0581 195.194 55.9291 193.216C55.8862 192.614 55.5853 192.098 55.1554 191.798C54.7685 191.497 54.2955 191.368 53.7797 191.454C52.662 191.583 51.7591 192.571 51.8021 193.689C51.974 195.753 52.189 197.945 52.404 200.181Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M21.1507 164.756C19.0442 164.197 16.9378 163.553 14.7883 162.865C13.6706 162.478 12.4668 163.123 12.2088 164.326C11.9079 165.53 12.6389 166.82 13.7566 167.164C15.6912 167.852 17.8836 168.325 19.9471 168.797C19.3882 170.775 18.8294 172.839 18.3135 174.945C18.0126 176.149 18.7433 177.439 19.861 177.826C21.0647 178.169 22.1823 177.439 22.3973 176.321C22.9561 174.085 23.5151 171.85 24.1169 169.743C26.3094 170.173 28.4158 170.517 30.5223 170.861C31.683 170.99 32.7147 170.173 32.9297 169.055C33.0157 168.54 32.9297 168.024 32.7148 167.637C32.4568 167.164 31.941 166.863 31.3821 166.734C29.4046 166.433 27.4271 166.089 25.4066 165.702C26.0514 163.768 26.6104 161.919 27.4702 160.027C27.7282 159.468 27.6852 158.867 27.4702 158.394C27.2553 157.964 26.9114 157.62 26.3955 157.448C25.3637 157.061 24.117 157.577 23.6441 158.609C22.7413 160.543 21.9245 162.607 21.1507 164.756Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M8.59773 119.186C6.87816 117.767 5.15854 116.262 3.43897 114.715C2.5362 113.898 1.20352 113.941 0.472703 114.887C-0.258114 115.832 -0.129115 117.294 0.773659 118.111C2.36426 119.573 3.95484 120.948 5.58843 122.281C4.16979 123.829 2.62226 125.462 1.37557 127.096C0.644755 128.042 0.773533 129.504 1.7193 130.32C2.62207 131.137 3.95475 131.008 4.68556 130.062C6.06122 128.257 7.48 126.537 8.85566 124.904C10.7042 126.236 12.5526 127.483 14.4012 128.644C15.3899 129.246 16.6796 128.988 17.3244 128.085C17.6253 127.655 17.7114 127.182 17.6684 126.709C17.5824 126.193 17.2814 125.677 16.7655 125.333C15.003 124.216 13.4985 123.012 11.865 121.808C13.3266 120.346 14.788 118.928 16.2497 117.595C16.6796 117.165 16.8946 116.649 16.8516 116.09C16.8086 115.618 16.6366 115.145 16.2497 114.758C15.4329 113.941 14.1002 113.855 13.2834 114.629C11.7358 116.09 10.1453 117.638 8.59773 119.186Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M16.7658 72.6694C15.906 70.6918 15.0894 68.6283 14.2726 66.5217C13.8427 65.4039 12.639 64.888 11.5213 65.4039C10.4035 65.9198 9.84477 67.2955 10.2747 68.4133C10.9625 70.3479 11.9081 72.3685 12.8539 74.2601C10.9194 75.0769 8.98499 75.8937 7.05047 76.8395C5.93275 77.3554 5.37372 78.7312 5.80361 79.8489C6.23351 80.9667 7.52329 81.4396 8.59802 80.8807C10.7045 79.8919 12.768 78.9891 14.8315 78.1293C15.8633 80.1068 16.8949 81.9985 17.9696 83.8471C18.5715 84.8359 19.8611 85.1368 20.8498 84.6209C21.3227 84.3629 21.6668 83.976 21.8388 83.5461C22.0107 83.0302 21.9676 82.4713 21.6667 81.9555C20.6779 80.2358 19.6892 78.4732 18.7434 76.6245C20.6349 75.8937 22.4406 75.2059 24.4611 74.69C25.0629 74.518 25.4927 74.1311 25.7507 73.6582C25.9656 73.2283 26.0087 72.7124 25.8367 72.2395C25.4928 71.1647 24.3319 70.5199 23.2142 70.8208C21.0647 71.2937 18.9153 71.9385 16.7658 72.6694Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M44.5367 34.4504C44.5797 32.2578 44.5797 29.8504 44.8377 27.7008C44.9666 26.5401 44.0637 25.5082 42.817 25.5082C41.5274 25.4223 40.4957 26.4971 40.4527 27.7438C40.3237 29.8933 40.2808 32.0429 40.2378 34.1495C38.1313 34.0205 35.9819 33.8915 33.7894 33.8485C32.5857 33.8485 31.5541 34.9233 31.4681 36.127C31.3821 37.3738 32.3278 38.3196 33.5315 38.2766C35.8099 38.2766 37.9163 38.1906 40.1948 38.3626C40.1948 40.5121 40.4956 42.8336 40.6676 44.9832C40.7965 46.1439 41.8284 46.9608 42.9461 46.9178C43.462 46.8748 43.8918 46.6599 44.2358 46.316C44.5797 45.929 44.7945 45.3701 44.7086 44.7252C44.5796 42.7477 44.4936 40.7701 44.4506 38.7495C46.5141 38.9644 48.4917 39.1794 50.4692 39.4803C51.0711 39.5663 51.6299 39.3943 52.0168 39.0074C52.3607 38.6635 52.6618 38.2766 52.7048 37.7607C52.8767 36.6859 52.1028 35.5682 50.9421 35.3532C48.7926 34.8373 46.7292 34.6653 44.5367 34.4504Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M86.0215 11.9231C87.0532 9.98849 88.128 8.01085 89.2887 6.03327C89.8905 5.00148 89.5466 3.7118 88.4288 3.19591C87.3541 2.68002 85.9353 3.10987 85.3335 4.14165C84.2587 5.99026 83.2699 7.83894 82.3242 9.64456C80.5186 8.61278 78.6701 7.70991 76.7356 6.76411C75.6609 6.24821 74.2424 6.67817 73.6405 7.75295C73.0387 8.82772 73.4684 10.0744 74.5431 10.5903C76.6066 11.5791 78.6272 12.5679 80.5617 13.6427C79.659 15.7063 78.8421 17.7699 78.1113 19.7904C77.7244 20.8652 78.2834 22.0689 79.3151 22.4988C79.788 22.7138 80.3037 22.7138 80.7336 22.5419C81.2495 22.3699 81.6794 21.94 81.8944 21.3811C82.6252 19.4895 83.3559 17.5549 84.2157 15.6633C85.9783 16.781 87.6979 17.9418 89.3314 19.0595C89.8473 19.4035 90.4062 19.4895 90.922 19.3605C91.3949 19.2315 91.7819 18.9306 92.0828 18.5007C92.6847 17.5549 92.4697 16.2221 91.567 15.5773C89.7614 14.3305 87.913 13.1268 86.0215 11.9231Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M133.224 9.68755C134.986 8.31184 136.835 6.89314 138.727 5.73239C139.715 5.08752 139.973 3.79778 139.199 2.76599C138.469 1.73421 137.007 1.51928 135.975 2.25012C134.213 3.53985 132.493 4.78659 130.859 6.07632C129.656 4.35668 128.409 2.59402 127.076 0.874379C126.346 -0.157405 124.841 -0.243348 123.852 0.444508C122.863 1.17536 122.691 2.50802 123.465 3.41083C124.927 5.08748 126.26 6.85014 127.549 8.74174C125.873 10.0745 124.239 11.5791 122.691 13.2128C121.875 14.0296 121.832 15.3623 122.606 16.1792C122.949 16.5661 123.422 16.7381 123.895 16.781C124.454 16.781 125.013 16.6091 125.443 16.2222C126.904 14.8895 128.409 13.5998 129.957 12.267C131.074 13.9867 132.149 15.7063 133.138 17.3829C133.439 17.8988 133.912 18.1998 134.47 18.2858C134.943 18.4147 135.416 18.3287 135.846 18.0708C136.792 17.5119 137.179 16.2222 136.62 15.1904C135.545 13.2988 134.427 11.4932 133.224 9.68755Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M176.686 28.1307C178.835 27.7008 181.07 27.314 183.349 26.97C184.553 26.7981 185.327 25.7233 185.069 24.5195C184.811 23.3588 183.564 22.4989 182.36 22.7139C180.254 23.0578 178.19 23.4018 176.17 23.7887C175.869 21.6821 175.396 19.7045 174.923 17.598C174.665 16.4372 173.419 15.5774 172.215 15.7923C171.011 15.9643 170.28 17.0821 170.581 18.2858C171.097 20.5214 171.57 22.7139 171.957 24.8634C169.807 25.4653 167.658 26.1102 165.637 26.7551C164.563 27.099 163.961 28.3027 164.262 29.4205C164.391 29.9364 164.692 30.3233 165.122 30.5813C165.594 30.8822 166.153 30.9252 166.755 30.7532C168.647 30.1513 170.667 29.5065 172.645 29.0336C172.86 31.0972 173.032 33.1607 173.16 35.1383C173.203 35.7402 173.504 36.2561 173.934 36.557C174.321 36.8579 174.794 36.9869 175.31 36.9009C176.428 36.772 177.331 35.7832 177.288 34.6654C177.116 32.5588 176.944 30.3663 176.686 28.1307Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M207.939 63.5552C210.045 64.1141 212.152 64.759 214.301 65.4469C215.419 65.8338 216.623 65.1889 216.881 63.9852C217.182 62.7814 216.451 61.4917 215.333 61.1478C213.398 60.4599 211.206 59.987 209.142 59.5141C209.701 57.5365 210.26 55.4729 210.776 53.3664C211.077 52.1626 210.346 50.8729 209.229 50.486C208.025 50.1421 206.907 50.8729 206.692 51.9906C206.133 54.2692 205.574 56.4617 204.973 58.5683C202.78 58.1384 200.674 57.7944 198.567 57.4505C197.407 57.3215 196.375 58.1384 196.16 59.2561C196.074 59.772 196.16 60.2879 196.375 60.6748C196.633 61.1477 197.149 61.4486 197.707 61.5776C199.685 61.8786 201.663 62.2225 203.683 62.6094C203.038 64.544 202.479 66.3927 201.619 68.2843C201.361 68.8432 201.404 69.445 201.619 69.9179C201.834 70.3478 202.178 70.6917 202.694 70.8637C203.726 71.2506 204.973 70.7347 205.445 69.7029C206.348 67.7683 207.165 65.7048 207.939 63.5552Z"
                                                        fill="#5887D6" />
                                                    <path
                                                        d="M220.492 109.083C222.211 110.502 223.931 112.006 225.65 113.554C226.553 114.371 227.886 114.328 228.617 113.382C229.348 112.436 229.219 110.974 228.316 110.158C226.725 108.696 225.135 107.32 223.501 105.987C224.92 104.44 226.467 102.806 227.714 101.172C228.445 100.227 228.316 98.765 227.37 97.9482C226.467 97.1313 225.135 97.2603 224.404 98.2061C223.028 100.012 221.609 101.731 220.234 103.365C218.385 102.032 216.537 100.786 214.688 99.6249C213.699 99.023 212.41 99.2808 211.765 100.184C211.464 100.614 211.378 101.086 211.421 101.559C211.507 102.075 211.808 102.591 212.324 102.935C214.086 104.053 215.591 105.257 217.224 106.46C215.763 107.922 214.301 109.341 212.84 110.673C212.41 111.103 212.195 111.619 212.238 112.178C212.281 112.651 212.453 113.124 212.84 113.511C213.657 114.328 214.989 114.414 215.806 113.64C217.397 112.178 218.944 110.673 220.492 109.083Z"
                                                        fill="#5887D6" />

                                                </svg>
                                            </div>

                                            <div class="kd-team-4-il-3">
                                                <svg width="292" height="292" viewBox="0 0 292 292" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.1">
                                                        <path
                                                            d="M273.771 140.815C277.813 136.773 284.341 136.773 288.353 140.815C292.365 144.857 292.395 151.385 288.353 155.397C284.311 159.409 277.783 159.439 273.771 155.397C269.729 151.385 269.729 144.857 273.771 140.815Z"
                                                            fill="white" />
                                                        <path
                                                            d="M247.811 191.687C253.516 191.687 258.141 187.062 258.141 181.357C258.141 175.652 253.516 171.027 247.811 171.027C242.105 171.027 237.48 175.652 237.48 181.357C237.48 187.062 242.105 191.687 247.811 191.687Z"
                                                            fill="white" />
                                                        <path
                                                            d="M207.299 207.288C211.341 203.245 217.868 203.245 221.881 207.288C225.893 211.33 225.923 217.857 221.881 221.869C217.838 225.882 211.311 225.912 207.299 221.869C203.286 217.827 203.257 211.33 207.299 207.288Z"
                                                            fill="white" />
                                                        <path
                                                            d="M174.063 240.523C178.105 236.481 184.633 236.481 188.645 240.523C192.687 244.566 192.687 251.093 188.645 255.105C184.603 259.148 178.075 259.148 174.063 255.105C170.021 251.093 170.021 244.566 174.063 240.523Z"
                                                            fill="white" />
                                                        <path
                                                            d="M148.104 291.396C153.809 291.396 158.434 286.771 158.434 281.066C158.434 275.36 153.809 270.735 148.104 270.735C142.398 270.735 137.773 275.36 137.773 281.066C137.773 286.771 142.398 291.396 148.104 291.396Z"
                                                            fill="white" />
                                                        <path
                                                            d="M239.306 106.352C243.348 102.31 249.876 102.31 253.888 106.352C257.93 110.394 257.93 116.922 253.888 120.934C249.846 124.976 243.318 124.976 239.306 120.934C235.294 116.922 235.294 110.394 239.306 106.352Z"
                                                            fill="white" />
                                                        <path
                                                            d="M213.377 157.224C219.082 157.224 223.707 152.599 223.707 146.894C223.707 141.189 219.082 136.564 213.377 136.564C207.672 136.564 203.047 141.189 203.047 146.894C203.047 152.599 207.672 157.224 213.377 157.224Z"
                                                            fill="white" />
                                                        <path
                                                            d="M172.836 172.824C176.879 168.782 183.406 168.782 187.418 172.824C191.461 176.866 191.461 183.394 187.418 187.406C183.376 191.448 176.849 191.448 172.836 187.406C168.824 183.394 168.824 176.866 172.836 172.824Z"
                                                            fill="white" />
                                                        <path
                                                            d="M146.904 223.696C152.61 223.696 157.235 219.071 157.235 213.366C157.235 207.661 152.61 203.036 146.904 203.036C141.199 203.036 136.574 207.661 136.574 213.366C136.574 219.071 141.199 223.696 146.904 223.696Z"
                                                            fill="white" />
                                                        <path
                                                            d="M120.944 253.908C116.902 257.95 110.375 257.95 106.362 253.908C102.35 249.865 102.32 243.338 106.362 239.326C110.404 235.313 116.932 235.283 120.944 239.326C124.986 243.338 124.986 249.865 120.944 253.908Z"
                                                            fill="white" />
                                                        <path
                                                            d="M204.842 71.9184C208.884 67.8762 215.412 67.8762 219.424 71.9184C223.466 75.9606 223.466 82.4881 219.424 86.5004C215.382 90.5127 208.855 90.5426 204.842 86.5004C200.83 82.4881 200.83 75.9307 204.842 71.9184Z"
                                                            fill="white" />
                                                        <path
                                                            d="M171.608 105.154C175.65 101.112 182.177 101.112 186.19 105.154C190.232 109.196 190.232 115.723 186.19 119.736C182.147 123.778 175.62 123.778 171.608 119.736C167.595 115.723 167.595 109.166 171.608 105.154Z"
                                                            fill="white" />
                                                        <path
                                                            d="M138.372 138.39C142.415 134.348 148.942 134.348 152.954 138.39C156.997 142.432 156.997 148.96 152.954 152.972C148.912 157.014 142.385 157.014 138.372 152.972C134.36 148.96 134.36 142.402 138.372 138.39Z"
                                                            fill="white" />
                                                        <path
                                                            d="M105.135 171.626C109.177 167.584 115.705 167.584 119.717 171.626C123.759 175.668 123.759 182.196 119.717 186.208C115.675 190.25 109.147 190.25 105.135 186.208C101.123 182.166 101.123 175.638 105.135 171.626Z"
                                                            fill="white" />
                                                        <path
                                                            d="M86.5106 219.445C82.4684 223.487 75.9409 223.487 71.9287 219.445C67.9164 215.402 67.8864 208.875 71.9287 204.863C75.9709 200.85 82.4983 200.821 86.5106 204.863C90.5229 208.875 90.5229 215.432 86.5106 219.445Z"
                                                            fill="white" />
                                                        <path
                                                            d="M170.411 37.4545C174.453 33.4123 180.98 33.4123 184.993 37.4545C189.035 41.4967 189.035 48.0242 184.993 52.0365C180.95 56.0787 174.423 56.0787 170.411 52.0365C166.368 48.0242 166.368 41.4967 170.411 37.4545Z"
                                                            fill="white" />
                                                        <path
                                                            d="M144.48 88.326C150.185 88.326 154.81 83.7011 154.81 77.9959C154.81 72.2908 150.185 67.6658 144.48 67.6658C138.775 67.6658 134.15 72.2908 134.15 77.9959C134.15 83.7011 138.775 88.326 144.48 88.326Z"
                                                            fill="white" />
                                                        <path
                                                            d="M111.243 121.562C116.948 121.562 121.573 116.937 121.573 111.232C121.573 105.527 116.948 100.902 111.243 100.902C105.537 100.902 100.912 105.527 100.912 111.232C100.912 116.937 105.537 121.562 111.243 121.562Z"
                                                            fill="white" />
                                                        <path
                                                            d="M70.7006 137.163C74.7428 133.12 81.2703 133.12 85.2826 137.163C89.3248 141.205 89.3248 147.732 85.2826 151.744C81.2403 155.757 74.7129 155.787 70.7006 151.744C66.6584 147.732 66.6584 141.205 70.7006 137.163Z"
                                                            fill="white" />
                                                        <path
                                                            d="M44.7727 188.034C50.4778 188.034 55.1028 183.409 55.1028 177.704C55.1028 171.999 50.4778 167.374 44.7727 167.374C39.0675 167.374 34.4425 171.999 34.4425 177.704C34.4425 183.409 39.0675 188.034 44.7727 188.034Z"
                                                            fill="white" />
                                                        <path
                                                            d="M150.559 3.02045C154.601 7.06268 154.601 13.5901 150.559 17.6024C146.517 21.6446 139.989 21.6446 135.977 17.6024C131.935 13.5602 131.935 7.03273 135.977 3.02045C140.019 -0.991832 146.517 -1.02177 150.559 3.02045Z"
                                                            fill="white" />
                                                        <path
                                                            d="M110.015 53.8629C115.72 53.8629 120.345 49.238 120.345 43.5328C120.345 37.8276 115.72 33.2026 110.015 33.2026C104.31 33.2026 99.6846 37.8276 99.6846 43.5328C99.6846 49.238 104.31 53.8629 110.015 53.8629Z"
                                                            fill="white" />
                                                        <path
                                                            d="M84.0864 84.0746C80.0442 88.1169 73.5167 88.1169 69.5044 84.0746C65.4622 80.0324 65.4622 73.5049 69.5044 69.4926C73.5467 65.4504 80.0741 65.4504 84.0864 69.4926C88.0987 73.5049 88.0987 80.0324 84.0864 84.0746Z"
                                                            fill="white" />
                                                        <path
                                                            d="M50.849 117.31C46.8067 121.353 40.2793 121.353 36.267 117.31C32.2248 113.268 32.2248 106.741 36.267 102.728C40.3092 98.6862 46.8367 98.6862 50.849 102.728C54.8612 106.741 54.8612 113.268 50.849 117.31Z"
                                                            fill="white" />
                                                        <path
                                                            d="M17.6136 150.547C13.5714 154.589 7.04395 154.589 3.03167 150.547C-1.01056 146.504 -1.01056 139.977 3.03167 135.965C7.07389 131.923 13.6013 131.923 17.6136 135.965C21.6259 139.977 21.6259 146.504 17.6136 150.547Z"
                                                            fill="white" />
                                                    </g>
                                                </svg>

                                            </div>

                                            <div class="container kd-container pt-5">
                                                <div class="row">

                                                    <!-- left-side -->
                                                    <div class="col-lg-4">
                                                        <div class="kd-team-4-slide-main bg-dark">
                                                            <div class="swiper-container fix kd-team-4-slide-main-active">
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <div class="kd-team-4-slide-main-item ">
                                                                            <img decoding="async"
                                                                                style="height: 700px; width: 95%;"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/1.png" alt="">

                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <div class="kd-team-4-slide-main-item ">
                                                                            <img decoding="async"
                                                                                style="height: 700px; width: 95%;"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/2.png" alt="">


                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <div class="kd-team-4-slide-main-item ">
                                                                            <img decoding="async"
                                                                                style="height: 700px; width: 95%;"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/3.png" alt="">


                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <div class="kd-team-4-slide-main-item ">
                                                                            <img decoding="async"
                                                                                style="height: 700px; width: 95%;"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/4.png" alt="">


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <!-- right -->
                                                    <div class="col-lg-8">
                                                        <div class="kd-team-4-right">

                                                            <!-- section-title -->
                                                            <div class="kd-team-4-scn-title mb-85">
                                                                <h2 class="headd fw-bold" style="color: #ef991f;">
                                                                    In and Around at RGU</h2>
                                                            </div>

                                                            <!-- slider -->
                                                            <div class="kd-team-4-slide-prview pt-5">
                                                                <div
                                                                    class="swiper-container fix kd-team-4-slide-prview-active">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <div style="border: 1px solid #5887D6;"
                                                                                class="kd-team-4-slide-prview-item fix">
                                                                                <img decoding="async"
                                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/1.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div style="border: 1px solid #5887D6;"
                                                                                class="kd-team-4-slide-prview-item fix">
                                                                                <img decoding="async"
                                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/2.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div style="border: 1px solid #5887D6;"
                                                                                class="kd-team-4-slide-prview-item fix">
                                                                                <img decoding="async"
                                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/3.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div style="border: 1px solid #5887D6;"
                                                                                class="kd-team-4-slide-prview-item fix">
                                                                                <img decoding="async"
                                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/4.png" alt="">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section-2>
                <!--End Event-->

                <!--Notifications-->
                <section>
                    <div>
                        <div class="row" style="background-color: #f2f2f2;">
                            <div class="col-lg-4" style="background-color: #a1d0f9;">
                                <div class="text-center p-5">
                                    <h2 class="headd2 fw-bold text-dark pb-3"> Notifications</h2>
                                    <a href="Announcements" target="_blank" class="bg-danger text-white rounded"
                                        style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">View
                                        All</a>
                                </div>
                            </div>
                            <div class="col-lg-8" style="padding-top: 80px;">
                                <marquee>
                                    <span class="text-dark p-3" style="font-size: 36px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg> International Seminar by The Assam Royal Global University in association
                                        with ELTAI, September, 2024 &nbsp;&nbsp;</span>
                                    <span class="text-dark p-3" style="font-size: 36px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg> Advertisement No. : DST-SERB-01/2024 &nbsp;&nbsp;</span>
                                    <span class="text-dark p-3" style="font-size: 36px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg> Viksit Bharat 2047 &nbsp;&nbsp;</span>
                                    <span class="text-dark p-3" style="font-size: 36px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        East Zone Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System
                                        (BKS) with Higher Education' &nbsp;&nbsp;</span>
                                </marquee>
                            </div>
                        </div>
                    </div>


                </section>
                <!--End Notifications-->

                <!-- fast facts -->
                <section
                    class="elementor-section elementor-top-section pt-5  elementor-element elementor-element-943e56e elementor-section-boxed elementor-section-height-default elementor-section-height-default pb-5"
                    data-id="943e56e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-23f6d50"
                            data-id="23f6d50" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6cdc10e elementor-widget elementor-widget-go-s-heading"
                                    data-id="6cdc10e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="prthalign">
                                            <h6 class="para1 kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
                                                <img style="width: 40x; height: 40px;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/cap.svg"
                                                    alt="">
                                                Info
                                            </h6>
                                            <h1 style="font-weight: 700;"
                                                class="text-dark headd elementor-gt-heading kd-title-ani kd-split-text">
                                                Fast Facts</h1>
                                            <div class="para1 elementor-gt-desc kd-para-1 disc wow" data-splitting>
                                                Transformative and Multidisciplinary Education</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-878c6de"
                            data-id="878c6de" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4923d22 elementor-widget elementor-widget-go-category"
                                    data-id="4923d22" data-element_type="widget" data-widget_type="go-category.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-pop-cat-1-slider">
                                            <div class="swiper-container fix kd-pop-cat-1-active">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <!-- <img decoding="async"
                                                                src="https://themexriver.com/wp/kadu/wp-content/uploads/2024/06/pc-1-shape-1.webp"
                                                                alt="" class="shape"> -->
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">22</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a href="" aria-label="name"> Years Of Education </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">8000+</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a aria-label="name"> Students </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">460+</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a aria-label="name"> Faculty Members </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">23</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a aria-label="name"> Schools</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">800+</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a aria-label="name"> Research Publications </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="kd-pop-cat-1-item text-center">
                                                            <div class="icon d-flex align-items-center justify-content-center"
                                                                style="background-color: antiquewhite;">
                                                                <h3 class="text-dark fw-bold">100+</h3>
                                                            </div>
                                                            <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                                style="background-color: #27467a;">
                                                                <a aria-label="name"> Hi-Tech Labs </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kd-pop-cat-1-slider-btn">
                                                <div class="kd_pop_cat_1_prev">
                                                    <div
                                                        class="kd-slider-btn-1 d-flex align-items-center justify-content-center txaa-fade-right">
                                                        <span class="icon-1">
                                                            <i class="fa-solid fa-arrow-left"></i>
                                                        </span>
                                                        <span class="icon-2">
                                                            <i class="fa-solid fa-arrow-left"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="kd_pop_cat_1_next ">
                                                    <div
                                                        class="kd-slider-btn-1 has-next d-flex align-items-center justify-content-center txaa-fade-left">
                                                        <span class="icon-1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                        <span class="icon-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- fast facts -->

                <!--campus life-->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f03cf62 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="f03cf62" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8bd58a9"
                            data-id="8bd58a9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2d6d76a elementor-widget elementor-widget-go-content-tab"
                                    data-id="2d6d76a" data-element_type="widget" data-widget_type="go-content-tab.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-course-3-area p-relative pt-105 pb-60 fix">
                                            <div class="kd-course-1-bg-img img-cover fix">
                                                <img decoding="async" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/head2.svg" alt="">
                                            </div>
                                            <div class="container kd-container-1 txaa-slide-down-1">
                                                <!-- sectiont-title -->
                                                <div class="kd-course-1-scn-title">
                                                    <div class="left">
                                                        <!-- <h6
                                                                class="kd-subtitle-1 kd-subtitle-ani-1 has-clr-2 elementor-kadu-sub para1">
                                                                <img style="width: 40x; height: 40px;" src="assets/img/cap.svg"
                                                                    alt="">

                                                                RGU Campus
                                                            </h6> -->
                                                        <h1 style="color: #FF9A1E; font-weight: 800;"
                                                            class="elementor-gt-heading kd-section-title-1 kd-title-ani kd-split-text has-clr-white headd1 ">
                                                            Our Campus Life</h1>
                                                    </div>

                                                    <div class="right txaa-fade-right">
                                                        <ul class="kd-course-1-tabs-btn" id="myTab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link active kd-heading-1 para1 fw-bold text-dark"
                                                                    id="home-tab0" data-bs-toggle="tab"
                                                                    data-bs-target="#home0" type="button" role="tab"
                                                                    aria-controls="home0"
                                                                    aria-selected="true">Campus</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab1" data-bs-toggle="tab"
                                                                    data-bs-target="#home1" type="button" role="tab"
                                                                    aria-controls="home1" aria-selected="true">Residence
                                                                    Life</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab2" data-bs-toggle="tab"
                                                                    data-bs-target="#home2" type="button" role="tab"
                                                                    aria-controls="home2" aria-selected="true">Sports &
                                                                    Exercise</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab3" data-bs-toggle="tab"
                                                                    data-bs-target="#home3" type="button" role="tab"
                                                                    aria-controls="home3"
                                                                    aria-selected="true">Amenities</button>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- tabs-content -->
                                                <div class="tab-content kd-course-3-tabs-content-wrap txaa-slide-down-1-item"
                                                    id="myTabContent">

                                                    <div class="tab-pane fade animated fadeInUp show active" id="home0"
                                                        role="tabpanel" aria-labelledby="home-tab0">
                                                        <div class="kd-course-3-tabs-content">
                                                            <div class="left-content">
                                                                <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                    Campus Life</h4>

                                                                <div class="para1 muted" style="text-align: justify;">
                                                                    <p style="color: #323232 !important;">Recognized as
                                                                        the best private university in Assam,
                                                                        The Assam Royal Global University offers a
                                                                        vibrant and dynamic
                                                                        campus life
                                                                        that significantly enhances the educational
                                                                        experience. Our campus is bustling with a
                                                                        variety of
                                                                        extracurricular
                                                                        activities, including cultural festivals,
                                                                        academic
                                                                        clubs, sports teams, and volunteer
                                                                        organizations.
                                                                        These activities
                                                                        provide students with opportunities to develop
                                                                        essential life skills such as leadership,
                                                                        teamwork,
                                                                        and time management,
                                                                        while also allowing them to explore their
                                                                        interests
                                                                        and passions beyond the classroom.</p>
                                                                </div>

                                                            </div>

                                                            <!-- right -->
                                                            <div class="right-content">
                                                                <div class="rounded">
                                                                    <div class="kd-price-4-content">
                                                                        <div id="carouselExampleControls"
                                                                            class="carousel slide" data-bs-ride="carousel">
                                                                            <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                                                                                    <a
                                                                                        href="department-store"><img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/1.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="infrastructure"><img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/5.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="games&sports"> <img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/7.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="clubs"><img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/4.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="hostel-life"> <img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/3.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="Student_Affairs"> <img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/6.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="royal-fests"><img
                                                                                            src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/2.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;"
                                                                                            alt="..."></a>
                                                                                </div>
                                                                            </div>
                                                                            <button class="carousel-control-prev"
                                                                                type="button"
                                                                                data-bs-target="#carouselExampleControls"
                                                                                data-bs-slide="prev">
                                                                                <span class="carousel-control-prev-icon"
                                                                                    aria-hidden="true"></span>
                                                                                <span
                                                                                    class="visually-hidden">Previous</span>
                                                                            </button>
                                                                            <button class="carousel-control-next"
                                                                                type="button"
                                                                                data-bs-target="#carouselExampleControls"
                                                                                data-bs-slide="next">
                                                                                <span class="carousel-control-next-icon"
                                                                                    aria-hidden="true"></span>
                                                                                <span class="visually-hidden">Next</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="kd-course-3-tabs-content-action text-center">
                                                                        <h5
                                                                            class="kd-heading-1 kd-font-700 has-clr-white action-link">
                                                                            get your quality skills certificate from RGU</h5>
                                                                        <a href="#" aria-label="name"
                                                                            class="kd-pr-btn-1 text-uppercase">
                                                                            <span class="text" data-back="get started now"
                                                                                data-front="get started now"></span>
                                                                        </a>
                                                                    </div> -->
                                                                <!-- <div class="kd-course-3-tabs-content-il-1">
                                                                        <img decoding="async"
                                                                            src="https://themexriver.com/wp/kadu/wp-content/uploads/2024/06/course-3-il-1.webp"
                                                                            alt="">
                                                                    </div> -->

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade animated fadeInUp " id="home1" role="tabpanel"
                                                        aria-labelledby="home-tab1">
                                                        <div class="kd-course-3-tabs-content">
                                                            <div class="left-content">
                                                                <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                    Residence Life</h4>

                                                                <div class="para1" style="text-align: justify;">
                                                                    <p>The Assam Royal Global University residence halls
                                                                        aim at
                                                                        enhancing the educational experience of students
                                                                        by
                                                                        providing all the
                                                                        comforts and conveniences they need to succeed.
                                                                        Beautifully situated in the midst of an
                                                                        eco-friendly
                                                                        and green campus,
                                                                        the separate in-house hostels for boys and girls
                                                                        are
                                                                        equipped with adequate facilities for holistic
                                                                        mental and physical
                                                                        growth. The hostel environment will help each
                                                                        boarder get the most out of their time during
                                                                        the
                                                                        period of stay. Close proximity
                                                                        of the hostels to the academic buildings
                                                                        facilitates
                                                                        frequent interactions between studentsand the
                                                                        faculties even during
                                                                        periods of vacation and on holidays.</p>
                                                                </div>
                                                                <div class="">
                                                                    <a href="hostel-life" rel="nofollow"
                                                                        aria-label="name"
                                                                        class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                        <span class="text" data-back="explore"
                                                                            data-front="Explore"></span>
                                                                        <span class="icon">
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                            <!-- right -->
                                                            <div class="right-content">
                                                                <div class="kd-course-3-tabs-content-video img-cover fix">
                                                                    <img decoding="async"
                                                                        src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/residence.jpg" alt="">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade animated fadeInUp " id="home2" role="tabpanel"
                                                        aria-labelledby="home-tab2">
                                                        <div class="kd-course-3-tabs-content">
                                                            <div class="left-content">
                                                                <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                    Games & Sports</h4>

                                                                <div class="para1" style="text-align: justify;">
                                                                    <p>There are multiple sport facilities to keep our
                                                                        students engaged and physically fit. Our campus
                                                                        has
                                                                        outdoor game
                                                                        facilities like Cricket, Football, Basketball,
                                                                        tennis, baseball, athletics and so on. Its
                                                                        international standard indoor
                                                                        sports complex “The Cube” offers a variety of
                                                                        indoor
                                                                        games including badminton courts, squash,
                                                                        billiards,
                                                                        and table
                                                                        tennis. Fitness conscious students can go for a
                                                                        jog
                                                                        around the scenic university campus or work out
                                                                        at
                                                                        the well-equipped
                                                                        gymnasium available both at the Boys and Girls
                                                                        hostel. The Gymnasium is equipped with various
                                                                        equipment like treadmills,
                                                                        dumbbells & plates, weights, shoulder press,
                                                                        leg-pull, leg extension, incline shoulder,
                                                                        double
                                                                        twisters, etc.</p>
                                                                </div>
                                                                <div class="">
                                                                    <a href="games&sports" rel="nofollow" aria-label="name"
                                                                        class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                        <span class="text" data-back="explore"
                                                                            data-front="Explore"></span>
                                                                        <span class="icon">
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <!-- right -->
                                                            <div class="right-content">
                                                                <div class="kd-course-3-tabs-content-video img-cover fix">
                                                                    <img decoding="async"
                                                                        src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/sports.jpg" alt="">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade animated fadeInUp " id="home3" role="tabpanel"
                                                        aria-labelledby="home-tab3">
                                                        <div class="kd-course-3-tabs-content">
                                                            <div class="left-content">
                                                                <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                    Amenities</h4>

                                                                <div class="para1" style="text-align: justify;">
                                                                    <p>A sensational rejuvenation and beauty experience.
                                                                        Kurls and Spykes, Guwahati, is a wellness and
                                                                        beauty
                                                                        lounge for both
                                                                        men and women. It offers an unmatched array of
                                                                        services designed to renew, refresh and
                                                                        replenish
                                                                        one’s soul. As a
                                                                        leading hair studio, Kurls and Spykes offer warm
                                                                        hospitality, an inviting atmosphere and
                                                                        top-notch
                                                                        services to wide and
                                                                        varied client base which also includes business
                                                                        and
                                                                        leisure travellers. It offers non exhaustive
                                                                        range
                                                                        of services
                                                                        including a host of hair services such as
                                                                        haircut,
                                                                        hair colour, creative makeover, keratin and
                                                                        bridal
                                                                        makeup services
                                                                        using some internationally renowned brands.</p>
                                                                </div>

                                                                <div class="">
                                                                    <a href="salon" rel="nofollow"
                                                                        aria-label="name"
                                                                        class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                        <span class="text" data-back="explore"
                                                                            data-front="Explore"></span>
                                                                        <span class="icon">
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                            <!-- right -->
                                                            <div class="right-content">
                                                                <div class="kd-course-3-tabs-content-video img-cover fix">
                                                                    <img decoding="async"
                                                                        src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/amenities.jpg" alt="">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--campus life-->

                <!--Courses-->
                <div data-elementor-type="wp-page" data-elementor-id="2266" class="elementor elementor-2266 m-0 p-0">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-63fb9c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="63fb9c7" data-element_type="section">
                        <div class="elementor-column-gap-default"
                            style="padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aa60b72"
                                data-id="aa60b72" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9b5574a elementor-widget elementor-widget-go-s-heading text-center"
                                        data-id="9b5574a" data-element_type="widget"
                                        data-widget_type="go-s-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="prthalign">
                                                <!-- <h6 class="kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub"
                                                    style="font-family:Georgia, 'Times New Roman', Times, serif !important; font-size: 22px;">
                                                        <img style="width: 40x; height: 40px;" src="assets/img/cap.svg" alt="">

                                                        RGU Programmes
                                                    </h6> -->
                                                <h2 class="headd1 pb-4" style="color: #27467A; font-size: 50px;">Explore Our
                                                    <span style="font-weight: 500; color: #EF991F;">Courses</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
                                        data-id="cbc3c3f" data-element_type="widget"
                                        data-widget_type="go-course-item.default">
                                        <div class="elementor-widget-container">
                                            <div class="row txaa-slide-down-1">

                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="doctoral-programme">
                                                        <div class="kd-course-2-card"
                                                            style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img fetchpriority="high" decoding="async" width="357"
                                                                    height="220" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c6.svg"
                                                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="programs">
                                                        <div class="kd-course-2-card"
                                                            style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img decoding="async" width="357" height="220"
                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c7.svg"
                                                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="programs">
                                                        <div class="kd-course-2-card"
                                                            style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img decoding="async" width="357" height="220"
                                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/c8.svg"
                                                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--End Courses-->

                <!--Labs-->
                <section class="container-fluid"
                    style="background-image: url('https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/lab-new1.png'); background-size: cover;">
                    <div class="elementor-column-gap-default pt-5 pb-5">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-818362c"
                            data-id="818362c" data-element_type="column">
                            <div class="elementor-widget-wrap">


                                <div class="elementor-element elementor-element-bf98367 elementor-widget elementor-widget-go-features"
                                    data-id="bf98367" data-element_type="widget" data-widget_type="go-features.default">
                                    <div class="row">
                                        <div class="col-lg-3">

                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-8 text-center"
                                            style="overflow: hidden; padding: 52px 0px 0px 0px;">
                                            <div class="elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                                                data-id="e22f91b" data-element_type="widget"
                                                data-widget_type="go-s-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="prthalign">
                                                        <h1 style="font-weight: 900; color: #27467A;"
                                                            class="elementor-gt-heading kd-title-ani kd-split-text headd">
                                                            LABORATORIES AND <span
                                                                style="font-weight: 500; color: #EF991F;">STUDIOS</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-widget-container pt-4">
                                                <div class="kd-course-4-slider p-relative">
                                                    <div class="swiper-container kd-course-4-active">
                                                        <div class="swiper-wrapper"
                                                            style="margin-right: 0px !important; padding: 0px !important;">
                                                            <div class="swiper-slide"
                                                                style="margin-right: 0px !important; padding: 0px !important;">
                                                                <div class="kd-course-4-item"
                                                                    style="margin: 0px !important; padding: 0px !important;">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/computer1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                        <span class="item-student kd-heading-1">34,000
                                                                                            students</span> -->
                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-computer"
                                                                                    aria-label="name">Computer Lab</a>
                                                                            </h4>
                                                                            <a href="lab-computer" aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="kd-course-4-item"
                                                                    style="margin-right: 0px !important; padding: 0px !important">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/electric1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                        <span class="item-student kd-heading-1">34,000
                                                                                            students</span> -->

                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-electrical"
                                                                                    aria-label="name">Electrical Lab</a>
                                                                            </h4>
                                                                            <a href="lab-electrical" aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="swiper-slide"
                                                                style="margin-right: 0px !important; padding: 0px !important">
                                                                <div class="kd-course-4-item">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/language1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                        <span class="item-student kd-heading-1">34,000 -->
                                                                            students</span>

                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-language-lab"
                                                                                    aria-label="name">Language Lab</a>
                                                                            </h4>
                                                                            <a href="lab-language-lab"
                                                                                aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="swiper-slide" style="margin-right: 0px !important;">
                                                                <div class="kd-course-4-item">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/physicalchem1.jpg"
                                                                                alt="List">



                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-chemistry"
                                                                                    aria-label="name">Chemistry Lab</a>
                                                                            </h4>
                                                                            <a href="lab-chemistry" aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" style="margin-right: 0px !important;">
                                                                <div class="kd-course-4-item">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/physics1.jpg"
                                                                                alt="List">



                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-physics"
                                                                                    aria-label="name">Physics Lab</a>
                                                                            </h4>
                                                                            <a href="lab-physics" aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="swiper-slide" style="margin-right: 0px !important;">
                                                                <div class="kd-course-4-item">
                                                                    <div style="background-color: #ffffff;"
                                                                        class="kd-course-2-card shadow-sm">
                                                                        <div class="main-img fix img-cover">

                                                                            <img decoding="async"
                                                                                src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/architecture1.jpg"
                                                                                alt="List">
                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4
                                                                                class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-architecture"
                                                                                    aria-label="name">Architecture
                                                                                    Lab</a>
                                                                            </h4>
                                                                            <a href="lab-architecture"
                                                                                aria-label="name"
                                                                                class="item-btn kd-font-pr-1 kd-font-900 text-capitalize">
                                                                                <i class="fa-solid fa-angles-right"></i>
                                                                                Read More </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-de83d2a elementor-widget elementor-widget-ft-btn mt-5"
                                                    data-id="de83d2a" data-element_type="widget"
                                                    data-widget_type="ft-btn.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="prthalign">
                                                            <a href="laboratories" rel="nofollow" aria-label="name"
                                                                class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                <span class="text" data-back="Explore All Labs"
                                                                    data-front="Explore All Labs"></span>
                                                                <span class="icon">
                                                                    <i class="fa-solid fa-arrow-right"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Labs-->

                <!-- new advantage -->
                <section style="padding: 50px 0px 0px 0px; background-color: #13223b;"
                    class=" elementor-section elementor-top-section elementor-element elementor-element-5b53581 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="5b53581" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d665cde"
                            data-id="d665cde" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-dbbd17f elementor-widget elementor-widget-go-img--bx"
                                    data-id="dbbd17f" data-element_type="widget" data-widget_type="go-img--bx.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-about-4-left ">
                                            <div class="mb-5 fix img-cover">
                                                <img decoding="async" style="height: 600px !important;"
                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobileadvpic.png" alt="">
                                            </div>
                                            <div class="kd-about-4-img-2 fix img-cover txxa-add-class">
                                                <img decoding="async" style="height: 600px !important;"
                                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/mobileyellow.png" alt="">

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-be85421"
                            data-id="be85421" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f5f1b7b elementor-widget elementor-widget-go-s-heading"
                                    data-id="f5f1b7b" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">

                                        <div class="prthalign">
                                            <h1 style="font-weight: 700;" class="mobile-headd1 text-light">RGU Advantages
                                            </h1>
                                            <div class="elementor-gt-desc kd-para-2 scn-disc"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3c95150 elementor-widget elementor-widget-go-kadu-accordion"
                                    data-id="3c95150" data-element_type="widget"
                                    data-widget_type="go-kadu-accordion.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-about-4-according mb-60" id="accordionExample_449027">
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-a06e874">
                                                    <button class="item-title kd-heading-2 kd-font-700 " type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-a06e874"
                                                        aria-expanded="false" aria-controls="collapse449027-a06e874">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 25px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Affordable</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-a06e874" class="accordion-collapse collapse show"
                                                    aria-labelledby="heading449027-a06e874"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm mobile-headd3">Highly
                                                            affordable
                                                            Fees.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-c4b748f">
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse449027-c4b748f" aria-expanded="false"
                                                        aria-controls="collapse449027-c4b748f">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 25px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Hi-Tech and Vibrant Campus</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-c4b748f" class="accordion-collapse collapse "
                                                    aria-labelledby="heading449027-c4b748f"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm mobile-headd3">Most Hi-Tech and
                                                            Vibrant Campus with culturally diverse community in the
                                                            North-East with fully air-conditioned built-up area</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-d109252">
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse449027-d109252" aria-expanded="false"
                                                        aria-controls="collapse449027-d109252">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 30px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Research</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-d109252" class="accordion-collapse collapse "
                                                    aria-labelledby="heading449027-d109252"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm headd3">Research intensive
                                                            and Updated Curriculum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-c4b7489">
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse449027-c4b7489" aria-expanded="false"
                                                        aria-controls="collapse449027-c4b748f">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 30px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Worldwide Students</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-c4b7489" class="accordion-collapse collapse "
                                                    aria-labelledby="heading449027-c4b7489"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm headd3">Students from 6
                                                            Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-c4b7486">
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse449027-c4b7486" aria-expanded="false"
                                                        aria-controls="collapse449027-c4b748f">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 30px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Location</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-c4b7486" class="accordion-collapse collapse "
                                                    aria-labelledby="heading449027-c4b7486"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm headd3">Centrally Located
                                                            in Guwahati City with easy access to all modern amenities.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kd-about-4-according-item mb-20">
                                                <div class="item-header" id="heading449027-c4b7485">
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse449027-c4b7485" aria-expanded="false"
                                                        aria-controls="collapse449027-c4b748f">
                                                        <span style="background-color:#FF9A1E;" class="icon">
                                                            <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                        </span>
                                                        <span
                                                            style="font-weight: 400; font-size: 30px; font-family: 'Host Grotesk', sans-serif;"
                                                            class="text">Rich Capital</span>
                                                    </button>
                                                </div>
                                                <div id="collapse449027-c4b7485" class="accordion-collapse collapse "
                                                    aria-labelledby="heading449027-c4b7485"
                                                    data-bs-parent="#accordionExample_449027">
                                                    <div class="item-body">
                                                        <p class="kd-para-2 disc has-para-sm headd3">Rich Intellectual
                                                            Capital with strong distinguished academicians and domain
                                                            experts.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- new advantage end-->

            </div>
            <!--Innovation & Publication end-->

            <!--Footprint-->
            <img src="footprint.png" alt="">
            <!-- footprint end  -->

            <!--Testimonial-->
            <div style="background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/s2-bg-img-1.webp);"
                class="pt-5 elementor-element elementor-element-41f1d73 elementor-widget elementor-widget-go-s-heading"
                data-id="41f1d73" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container" style="padding-left: 50px;">
                    <div class="prthalign text-center">
                        <h6 class=" kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub headd3">
                            <img style="width: 40x; height: 40px;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/cap.svg" alt="">
                            RGU Testimonials
                        </h6>
                        <h1 style="font-weight: 700;"
                            class="elementor-gt-heading text-dark kd-title-ani kd-split-text headd1">
                            They Speak About Us</h1>
                    </div>
                </div>

                <div class="hover01 column row" style="padding-left: 1px;">
                    <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important; ">
                        <figure> <a href="success"><img style="border: 2px solid #fff;"
                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/alumni-student.png" /></a></figure>
                    </div>

                    <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                        <figure><a href="top-recruiters"><img style="border: 2px solid #fff;"
                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/recruiters.png" /></a></figure>

                    </div>
                    <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                        <figure><a href="footprints"><img style="border: 2px solid #fff;"
                                    src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/index/dignitaries.png" /></a></figure>

                    </div>
                </div>
            </div>
            <!-- testimonial end -->

        </div>
    </section>
@endsection
