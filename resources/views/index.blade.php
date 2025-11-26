@extends('frontend.master')
@section('title', 'Best Private University in Assam, India')
@section('meta_description', 'Discover top-ranked Royal Global University (RGU) in Guwahati. Explore 50+ UG & PG
    programs, world-class faculty, modern campus, and excellent placement record. Apply Now!')
@section('meta_keywords', 'Best University in Assam')
@section('content')

    <section class="mobile">

        <!-- Popup -->
        {{-- <div id="popup-mob" class="popup-overlay">
            <a target="_blank" class="text-center"><img src="{{ asset('/mobile-assets/convo-slider/popup.jpg') }}"
                    style="width: 400px; height: 400px;" class="popup-image" alt="Popup Image"></a>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('popup-mob');

                popup.addEventListener('click', function(event) {
                    if (event.target === popup) {
                        popup.style.display = 'none';
                    }
                });
            });
        </script> --}}

        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/917099028518" class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
        </a>


        <!-- Floating Section with Frosted Background -->
        <div class="container">
            <div class="floating-wrapper"
                style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                width: 90%; max-width: 400px; z-index: 800;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                backdrop-filter: blur(30px);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                background: #27467A; /* Frosty effect */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                border-radius: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                box-shadow: 0 1px 1px #ffffff97;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                border: 1px solid #27467A;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 15px;">

                <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                    <span class="mobile-para1"
                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        font-weight: bold; font-size: 18px; line-height: 1.3;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        color: #fff; flex-grow: 1;">
                        Admission open for 2025 - 2026
                    </span>

                    <a href="https://admissions.rgu.ac/" target="_blank" class="btn mobile-para1 pulse-btn"
                        style="
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
            <img src="https://media.rgu.ac/head-video/mob-thumb.png" id="video-thumbnail" alt="Video Thumbnail"
                style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

            <video playsinline autoplay loop muted id="video-bg" oncanplay="showVideo()"
                style="width: 100%; height: auto; display: block;">
                <source src="https://media.rgu.ac/head-video/Websitemobilevideooo.mp4" type="video/mp4">
            </video>
        </div>
        <!-- mobile video -->


        <!-- slider banners  -->
        <div id="carouselExample" class="carousel slide mobile-image-slider text-center" data-bs-ride="carousel">
            {{-- <a style="background-color: #ffb300; font-size: 20px; padding: 20px 10px;"
                class="mb-3 text-center text-white rounded fw-bold">Registration for 5th Convocation</a> --}}
            <div class="carousel-inner mt-4">

                <div class="carousel-item active">
                    <img src="https://media.rgu.ac/index/about-mobile.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.rgu.ac/index/research-mobile.png" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>
        <!-- slider banners  -->

        <!-- discover rgu -->
        <div>
            <a href="https://forms.gle/t7dhtshNKYwcHumq7"><img src="https://media.rgu.ac/explore/mob.png"
                    alt="The Assam Royal Global University (RGU), widely regarded as the Best University in Assam, has established itself as a center of academic excellence and innovation. Since its inception in 2017, it has created opportunities for students through strong industry collaboration and modern pedagogy at the Best University in Guwahati.  Recognized as a leading University in Assam, RGU continuously nurtures a learning environment where innovation and entrepreneurship thrive. With its dedicated faculty, global partnerships, and cutting-edge infrastructure, RGU empowers students with the resources, exposure, and skills needed for future success. As the Best University in Assam, it remains committed to developing industry-ready graduates who can excel in a dynamic global landscape." /></a>
        </div>
        <!-- discover rgu -->



        <!-- happening at rgu  -->

        <h2 class="mobile-headd1 pb-4 text-center pt-4" style="color: #27467A;">Media<span
                style="font-weight: 500; color: #EF991F;"> Corner</span></h2>

        <div id="newsContainer" class="row">
            @php
                $newsItems = [
                    [
                        'title' => 'Royal Global University Celebrates 79th Independence-Day',
                        'summary' => '',
                        'date' => '',
                        'link' => 'royal-global-university-celebrates-79th-independence-day',
                        'image' => 'mobile-assets/media-corner/news35/1.JPG',
                        'content' => '',
                    ],
                    [
                        'title' => 'Apply Critical Thinking and Creativity for a Successful Living: IITG Director Prof. Jalihal to
                                                                                                                                                                                                                                students of RGU',
                        'summary' => '',
                        'date' => '',
                        'link' =>
                            'apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu',
                        'image' => 'mobile-assets/media-corner/news34/1.JPG',
                        'content' => '',
                    ],
                    [
                        'title' =>
                            'SYNTHESIS-2025: Innovative Creations Showcased by RGU Fashion Design & Technology Graduates',
                        'summary' => '',
                        'date' => '',
                        'link' =>
                            'synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates',
                        'image' => 'mobile-assets/media-corner/news33/1.jpg',
                        'content' => '',
                    ],
                    [
                        'title' => 'Royal Global University to Confer Honorary D.Sc. Degree upon Dr. Trehan',
                        'summary' => '',
                        'date' => '',
                        'link' => 'royal-global-university-to-confer-honorary-dsc-degree-upon-dr-trehan',
                        'image' => 'mobile-assets/media-corner/news32/1.jpg',
                        'content' => '',
                    ],
                ];
            @endphp

            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @foreach ($newsItems as $index => $news)
                        <div class="carousel-item @if ($index === 0) active @endif">
                            <div class="card shadow-sm mx-auto" style="max-width: 900px;">
                                <div class="row p-3 g-0">
                                    <div class="col-12 col-md-4">
                                        <img class="rounded shadow-sm border"
                                            style="width: 100%; height:270px; object-fit: cover;"
                                            src="{{ asset($news['image']) }}" alt="">
                                    </div>
                                    <div class="col-12 col-md-8 ps-md-3 pt-3 pt-md-0">
                                        <h2 class="fw-bold" style="color: #264273; font-size: 23px;">
                                            {{ $news['title'] }}
                                        </h2>
                                        @if ($news['summary'])
                                            <p class="fw-bold text-dark" style="font-size: 20px !important;">
                                                {{ $news['summary'] }}
                                            </p>
                                        @endif
                                        <p class="text-dark para1" style="text-align: justify">
                                            <strong class="fw-bold">{{ $news['date'] }}</strong>
                                            {{ $news['content'] }}
                                        </p>
                                        <a href="{{ $news['link'] }}"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 5px 10px;">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Optional navigation controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>



        <!-- explore our courses at rgu  -->
        <section style="padding: 30px;">
            <h2 class="mobile-headd1 pb-4" style="color: #27467A;">Explore Our <span
                    style="font-weight: 500; color: #EF991F;">Courses</span></h2>

            <a href="doctoral-programme">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img fetchpriority="high" decoding="async" width="357" height="220"
                            src="https://media.rgu.ac/index/c6.svg"
                            class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                    </div>
                </div>
            </a>

            <a href="programs">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img decoding="async" width="357" height="220" src="https://media.rgu.ac/index/c7.svg"
                            class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                    </div>
                </div>
            </a>

            <a href="programs">
                <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                    <div class="main-img fix img-cover">
                        <img decoding="async" width="357" height="220" src="https://media.rgu.ac/index/c8.svg"
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/electric1.jpg" class="d-block w-100"
                                        alt="..." style="border-radius: 10px;">
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/architecture1.jpg" class="img-fluid rounded" />
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/computer1.jpg" class="img-fluid rounded" />
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/engineering1.jpg" class="img-fluid rounded" />
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/foodtech1.jpg" class="img-fluid rounded" />
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
                                    <img style="height: 300px; width: 100%;"
                                        src="https://media.rgu.ac/index/language1.jpg" class="img-fluid rounded" />
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
                                    <img style="height: 300px; width: 100%;" src="https://media.rgu.ac/index/physics1.jpg"
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
        {{-- <section style="padding: 80px 30px 0px 30px; background-color: #13223b;"
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
                                                                                                                                                                                                                                                                src="https://media.rgu.ac/index/rgu-building-square.webp" alt="">
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="kd-about-4-img-2 fix img-cover txxa-add-class">
                                                                                                                                                                                                                                                            <img decoding="async" class="rounded" style="height: 600px !important;"
                                                                                                                                                                                                                                                                src="https://media.rgu.ac/index/mobileyellow.png" alt="">
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
                                                                                                                                                                                                                            </section> --}}

        <img src="https://media.rgu.ac/sports-image/index-mobsports.PNG" alt="" />
        <!-- new advantage end-->

        <!--Mobile Footprint-->
        <img src="https://media.rgu.ac/index/footprints2.png" alt="">
        <!--Mobile Footprint end  -->

        <!--Mobile Testimonial-->
        <section style="padding: 40px 30px; background-image: url(https://media.rgu.ac/index/s2-bg-img-1.webp);">
            <h6 class="mobile-headd3 text-center kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
                <img style="width: 40x; height: 40px;"
                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/index/cap.svg" alt="">
                RGU Testimonials
            </h6>
            <h2 class="mobile-headd1 pb-4 pt-3" style="color: #27467A;">They Speak <span
                    style="font-weight: 500; color: #EF991F;">About Us</span></h2>

            <div class="row" style="display: flex; flex-direction: column;">
                <a href="success"><img class="pb-3"
                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/index/alumni-student.png" /></a>
                <a href="top-recruiters"><img class="pb-3"
                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/index/recruiters.png" /></a>
                <a href="footprints"><img class="pb-3"
                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/index/dignitaries.png" /></a>
            </div>

        </section>
        <!--Mobile Testimonial end -->

    </section>

    <section class="website">
        <!-- Popup -->
        {{-- <div id="popup-web" class="popup-overlay"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); display: flex; justify-content: center; align-items: center; z-index: 9999;">

            <div style="position: relative; display: inline-block;">
                <!-- Close Button -->
                <span id="close-popup"
                    style="position: absolute; top: -10px; right: -10px;
                                                                                                                                                                             background: #fff; color: #000; border-radius: 50%;
                                                                                                                                                                             width: 30px; height: 30px; text-align: center;
                                                                                                                                                                             line-height: 30px; font-size: 20px; cursor: pointer;
                                                                                                                                                                             box-shadow: 0px 2px 6px rgba(0,0,0,0.3);">
                    &times;
                </span>

                <!-- Popup Image -->
                <a>
                    <img src="{{ asset('/mobile-assets/convo-slider/popup.jpg') }}"
                        style="width: 700px; height: 550px; border-radius: 8px;" class="popup-image" alt="Popup Image">
                </a>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('popup-web');
                const closeBtn = document.getElementById('close-popup');

                // Close when clicking outside the image
                popup.addEventListener('click', function(event) {
                    if (event.target === popup) {
                        popup.style.display = 'none';
                    }
                });

                // Close when clicking the X button
                closeBtn.addEventListener('click', function() {
                    popup.style.display = 'none';
                });
            });
        </script> --}}

        <!-- floating button  -->
        {{-- <div>
            <div class="convocation-btn-wrapper">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf2JNy7yB12L4Yvj1qkMc40uP1vFhJUvPhHF1f3oYe8YC2EnQ/viewform"
                    class="convocation-btn">
                    <span class="convocation-btn-shine"></span>
                    Registration for Alumni Meet
                </a>
            </div>

            <style>
                /* Button wrapper */
                .convocation-btn-wrapper {
                    position: fixed;
                    bottom: 35px;
                    right: 20px;
                    z-index: 1000;
                }

                /* Main button */
                .convocation-btn {
                    position: relative;
                    background-color: orange;
                    color: #fff;
                    padding: 12px 20px;
                    font-size: 18px;
                    font-weight: bold;
                    text-decoration: none;
                    border-radius: 20px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                    overflow: hidden;
                    display: inline-block;
                    animation: convocation-pulse 2s infinite;
                }

                /* Shine effect */
                .convocation-btn-shine {
                    position: absolute;
                    top: 0;
                    left: -75%;
                    width: 50%;
                    height: 100%;
                    background: linear-gradient(120deg, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0));
                    transform: skewX(-25deg);
                    animation: convocation-shine 2s infinite;
                }

                /* Unique animations */
                @keyframes convocation-pulse {
                    0% {
                        transform: scale(1);
                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                    }

                    50% {
                        transform: scale(1.05);
                        box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                    }

                    100% {
                        transform: scale(1);
                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                    }
                }

                @keyframes convocation-shine {
                    0% {
                        left: -75%;
                    }

                    100% {
                        left: 125%;
                    }
                }
            </style>
        </div> --}}
        <!-- floating button  -->
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

                                            <a href="https://admissions.rgu.ac/" target="_blank">
                                                <div class="btn-container">
                                                    <div class="btn shiny-button">
                                                        <p class="text-center headd3 fw-bold pt-3">APPLY NOW </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </section>
                                <!-- admission banner  -->

                                <style>
                                    .carousel-control-prev,
                                    .carousel-control-next {
                                        top: 50%;
                                        transform: translateY(-50%);
                                        width: 50px;
                                        height: 50px;
                                        background-color: #f0f0f0;
                                        /* Light background */
                                        border-radius: 50%;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        z-index: 2;
                                        border: none;
                                    }

                                    .carousel-control-prev {
                                        left: -60px;
                                    }

                                    .carousel-control-next {
                                        right: -60px;
                                    }

                                    .carousel-control-prev svg,
                                    .carousel-control-next svg {
                                        width: 20px;
                                        height: 20px;
                                        fill: #222;
                                        /* Bold dark arrow */
                                    }

                                    @media (max-width: 768px) {
                                        .carousel-control-prev {
                                            left: 10px;
                                        }

                                        .carousel-control-next {
                                            right: 10px;
                                        }
                                    }
                                </style>

                                <div id="rguCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://media.rgu.ac/index/about-website.png" class="d-block w-100"
                                                alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://media.rgu.ac/index/research-website.png"
                                                class="d-block w-100" alt="Slide 3">
                                        </div>
                                    </div>

                                    <!-- Left Arrow -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#rguCarousel"
                                        data-bs-slide="prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                            <path
                                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <!-- Right Arrow -->
                                    <button class="carousel-control-next" type="button" data-bs-target="#rguCarousel"
                                        data-bs-slide="next">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>

                            {{-- <div class="video-container" style="position: relative; width: 100%; height: 95vh;">                                                                                                                                                                                                                   </div> --}}
                            <div class="video-container" style="position: relative; width: 100%; height: auto;">
                                <img src="https://media.rgu.ac/head-video/web-thumb.png" id="video-thumbnail2"
                                    alt="Video Thumbnail"
                                    style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

                                <video autoplay loop muted playsinline id="video-bg2" oncanplay="showVideo2()"
                                    style="width: 100%; height: auto; display: block;">
                                    <source src="https://media.rgu.ac/head-video/v-2.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </header>

            </section>
            <!--End Header-->

            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                {{-- zubeen --}}
                {{-- <img src="https://media.rgu.ac/zubeen/zubeen2.jpg" style="height: 85vh; width: 100%"/> --}}

                <a href="/preface"><img src="https://media.rgu.ac/explore/web.png"
                        alt="The Assam Royal Global University (RGU), widely regarded as the Best University in Assam, has established itself as a center of academic excellence and innovation. Since its inception in 2017, it has created opportunities for students through strong industry collaboration and modern pedagogy at the Best University in Guwahati.  Recognized as a leading University in Assam, RGU continuously nurtures a learning environment where innovation and entrepreneurship thrive. With its dedicated faculty, global partnerships, and cutting-edge infrastructure, RGU empowers students with the resources, exposure, and skills needed for future success. As the Best University in Assam, it remains committed to developing industry-ready graduates who can excel in a dynamic global landscape.">
                </a>


                <!-- Convocation-slider -->
                {{-- <div id="heroCarousel_FADE_888" class="carousel slide carousel-fade full-screen-carousel"
                    data-bs-ride="carousel" data-bs-interval="3000" style="background-color: #000;">

                    <div class="carousel-inner full-screen-carousel">

                        <div class="carousel-item active">
                            <img src="/mobile-assets/convo-slider/1st-convo.jpg" class="d-block w-100"
                                alt="Slide 1 Image">
                        </div>

                        <div class="carousel-item">
                            <img src="mobile-assets/convo-slider/honoris-causa-1.jpg" class="d-block w-100"
                                alt="Slide 1 Image">
                        </div>

                        <div class="carousel-item">
                            <img src="mobile-assets/convo-slider/convo.gif" class="d-block w-100" alt="Slide 2 Image">
                        </div>

                        <div class="carousel-item">
                            <img src="/mobile-assets/convo-slider/convo-jubin.jpg" class="d-block w-100"
                                alt="Slide 2 Image">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel_FADE_888"
                        data-bs-slide="prev" style="width: 10%;">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel_FADE_888"
                        data-bs-slide="next" style="width: 10%;">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div> --}}

                <!-- Conferense CSS -->
                {{-- <section>

                    <style>
                        .myImageSlider {
                            position: relative;
                            padding-bottom: 60px;
                        }

                        .myImageSlider .swiper-button-next,
                        .myImageSlider .swiper-button-prev {
                            top: auto;
                            transform: none;
                            bottom: 5px;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            background-color: #8c9bbd;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: #fff;
                            outline: none;
                        }

                        .myImageSlider .swiper-button-next::after,
                        .myImageSlider .swiper-button-prev::after {
                            font-size: 16px;
                        }
                        .myImageSlider .swiper-button-prev {
                            left: 50%;
                            transform: translateX(calc(-100% - 10px));

                        }

                        .myImageSlider .swiper-button-next {
                            left: 50%;
                            transform: translateX(10px);
                        }

                        .myImageSlider .swiper-button-next:hover,
                        .myImageSlider .swiper-button-prev:hover {
                            background-color: #a4b4d6;
                            cursor: pointer;
                        }
                    </style>

                    <section style="padding: 30px; background-color: #101d34;">
                        <div class="swiper myImageSlider" style="max-width:1800px; margin:auto;">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <a href="bioe3-conference">
                                        <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                            src="demo-assets/big-events/1.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="climate-change-and-livelihood-in-northeast-india">
                                        <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                            src="demo-assets/big-events/3.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="synergy-for-energy-challenges-and-opportunities-in-north-east-india">
                                        <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                            src="demo-assets/big-events/4.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="/mobile-assets/convo-slider/ICSSSM 2025_Brochure.pdf">
                                        <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                            src="/mobile-assets/convo-slider/international-2.jpg" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="swiper-button-next slider-next"></div>
                            <div class="swiper-button-prev slider-prev"></div>
                        </div>
                    </section>

                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                    <script>
                        const myImageSlider = new Swiper('.myImageSlider', {
                            slidesPerView: 3,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            loop: true,
                            autoplay: {
                                delay: 2500,
                                disableOnInteraction: false,
                            },
                            navigation: {
                                nextEl: '.slider-next',
                                prevEl: '.slider-prev',
                            },
                            breakpoints: {
                                0: {
                                    slidesPerView: 1
                                },
                                768: {
                                    slidesPerView: 2
                                },
                                1024: {
                                    slidesPerView: 3
                                }
                            }
                        });
                    </script>

                </section> --}}

                <section>
                    <div class="row p-3">
                        <div class="col-lg-6">
                            <a href="bioe3-conference"><img style="border: 1px solid black"
                                    src="/mobile-assets/TRY/sq-1.jpg" /></a>
                        </div>
                        <div class="col-lg-6">
                            <a href="https://www.rgu.ac/ncmpac-2026"><img style="border: 1px solid black"
                                    src="/mobile-assets/TRY/sq-2.jpg" /></a>
                        </div>
                    </div>

                </section>

                <!--New Events-->
                <div class="container" style="padding: 30px 0px;">
                    <div class="row pb-5">
                        <div class="col-lg-7" style="display: flex; flex-direction: column;">
                            <div id="slider" style="width: 620px; overflow: hidden; margin: auto; position: relative;">
                                <h2 class="headd2 fw-bold pb-3"
                                    style="color: #27467A; font-weight: 900; font-size: 40px; padding-left: 20px;">
                                    RGU E-Board
                                </h2>

                                <div id="slides" style="display: flex; transition: transform 0.7s ease;">
                                    <img class="zoomable" src="/mobile-assets/events/25-nov.jpg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="/mobile-assets/events/251.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    {{-- <img class="zoomable" src="mobile-assets/events/nov172.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;"> --}}
                                    <img class="zoomable" src="mobile-assets/events/techer.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/spot12.png"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/sep-15.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/stu-3.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/stu-1.1.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/stu2.png"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="mobile-assets/events/11nov.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                    <img class="zoomable" src="https://media.rgu.ac/index/e04.jpeg"
                                        style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                </div>
                            </div>

                            <div style="text-align:center; margin-top:10px;">
                                <button onclick="prevSlide()"
                                    style="padding:5px 10px; background-color: #27467A; color: #fff; border-radius: 3px;">
                                    < </button>
                                        <button onclick="nextSlide()"
                                            style="padding:5px 10px; background-color: #27467A; color: #fff; border-radius: 3px;">></button>
                            </div>

                            <div id="lightbox"
                                style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); justify-content:center; align-items:center; z-index:1000;">
                                <img id="lightbox-img" style="max-width:90%; max-height:90%; border-radius:10px;">
                            </div>

                            <script>
                                const zoomableImages = document.querySelectorAll('.zoomable');
                                const lightbox = document.getElementById('lightbox');
                                const lightboxImg = document.getElementById('lightbox-img');

                                zoomableImages.forEach(img => {
                                    img.style.cssText =
                                        'width:400px; height:530px; margin-right:20px; border:2px solid #e68900; border-radius:10px; cursor:pointer;';
                                    img.addEventListener('click', () => {
                                        lightbox.style.display = 'flex';
                                        lightboxImg.src = img.src;
                                    });
                                });

                                lightbox.addEventListener('click', () => {
                                    lightbox.style.display = 'none';
                                });
                            </script>

                            <script>
                                const slideWidth = 320; // 300px image + 20px margin
                                const slider = document.getElementById("slider");
                                const slides = document.getElementById("slides");
                                let index = 0;
                                let isTransitioning = false;

                                // Clone first few slides and append
                                const cloneSlides = () => {
                                    const children = slides.children;
                                    for (let i = 0; i < 2; i++) {
                                        const clone = children[i].cloneNode(true);
                                        slides.appendChild(clone);
                                    }
                                };

                                cloneSlides();

                                function nextSlide() {
                                    if (isTransitioning) return;
                                    isTransitioning = true;
                                    index++;
                                    slides.style.transition = "transform 0.5s ease";
                                    slides.style.transform = `translateX(-${index * slideWidth}px)`;

                                    setTimeout(() => {
                                        if (index >= slides.children.length - 2) {
                                            slides.style.transition = "none";
                                            index = 0;
                                            slides.style.transform = `translateX(0px)`;
                                        }
                                        isTransitioning = false;
                                    }, 600);
                                }

                                function prevSlide() {
                                    if (isTransitioning) return;
                                    isTransitioning = true;
                                    if (index <= 0) {
                                        index = slides.children.length - 3;
                                        slides.style.transition = "none";
                                        slides.style.transform = `translateX(-${(index + 1) * slideWidth}px)`;
                                        setTimeout(() => {
                                            slides.style.transition = "transform 0.5s ease";
                                            prevSlide();
                                        }, 20);
                                        return;
                                    }
                                    index--;
                                    slides.style.transition = "transform 0.5s ease";
                                    slides.style.transform = `translateX(-${index * slideWidth}px)`;
                                    setTimeout(() => isTransitioning = false, 600);
                                }

                                setInterval(nextSlide, 3000); // Auto-slide
                            </script>
                        </div>

                        <div class="col-lg-5">

                            <h2 class="headd2 fw-bold pb-2" style="color: #27467A; font-size: 40px; padding-left: 20px;">
                                Media <span style="color: #FF9A1E; font-weight: 540;"> Corner</span></h2>
                            <div style="height: 600px; overflow: hidden; position: relative;">
                                <div class="p-0 rounded">
                                    <div class="row">
                                        {{-- media-corner-news-1 --}}
                                        <div class="row bg-light p-2 rounded">
                                            <div class="col-lg-5">
                                                <img class="rounded" style="height: 130px; width: 100%;"
                                                    src="/mobile-assets/media-corner/news74/3.jpeg" alt="" />
                                            </div>
                                            <div class="col-lg-7">
                                                <p style="color: #27467A; font-style: 10px; line-height: 1; font-size: 17px;"
                                                    class="pt-2 m-0 fw-bold">Cyber Security Awareness Workshop held at RGU</p>
                                                <p class="pt-1 p-0 m-0"
                                                    style="font-size: 16px; color: black; line-height: 1.4;">November 26,
                                                    2025
                                                </p>
                                                <a
                                                    href="/cyber-security-awareness-workshop-held-at-rgu">
                                                    <p class="pt-2 fw-bold m-0"
                                                        style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                        Read More ...</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row bg-light p-2 rounded">
                                            <div class="col-lg-5">
                                                <img class="rounded" style="height: 130px; width: 100%;"
                                                    src="/mobile-assets/media-corner/news65/1.jpeg" alt="" />
                                            </div>
                                            <div class="col-lg-7">
                                                <p style="color: #27467A; font-style: 10px; line-height: 1; font-size: 17px;"
                                                    class="pt-2 m-0 fw-bold">
                                                    Chief Justice Ashutosh Kumar unveils Dr Ambedkar's bust at Royal Global University</p>
                                                <p class="pt-1 p-0 m-0"
                                                    style="font-size: 16px; color: black; line-height: 1.4;">November 24,
                                                    2025
                                                </p>
                                                <a
                                                    href="/chief-justice-ashutosh-kumar-unveils-dr-ambedkar-bust-at-royal-global-university">
                                                    <p class="pt-2 fw-bold m-0"
                                                        style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                        Read More ...</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row bg-light p-2 rounded">
                                            <div class="col-lg-5">
                                                <img class="rounded" style="height: 130px; width: 100%;"
                                                    src="/mobile-assets/media-corner/news64/241.jpeg" alt="" />
                                            </div>
                                            <div class="col-lg-7">
                                                <p style="color: #27467A; font-style: 10px; line-height: 1; font-size: 17px;"
                                                    class="pt-2 m-0 fw-bold">Central Tibetan Administration President Delivers Tibet Awareness Talk at RGU</p>
                                                <p class="pt-1 p-0 m-0"
                                                    style="font-size: 16px; color: black; line-height: 1.4;">November 21,
                                                    2025
                                                </p>
                                                <a
                                                    href="/central-tibetan-administration-president-delivers-tibet-awareness-talk-at-rgu">
                                                    <p class="pt-2 fw-bold m-0"
                                                        style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                        Read More ...</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align:center; margin-top:20px;">
                                        <a href="media-corner"><button
                                                style="padding:2px 10px; background-color: #27467A; color: #fff; border-radius: 3px;">View
                                                All</button></a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <style>
                        @keyframes scrollUp {
                            0% {
                                top: 100%;
                            }

                            100% {
                                top: -100%;
                            }
                        }

                        /* Pause the animation when hovering over the notification-wrapper */
                        .notification-wrapper:hover {
                            animation-play-state: paused;
                        }

                        /* Add hover effect for links */
                        .notification-item a:hover {
                            text-decoration: underline;
                        }
                    </style>

                </div>
            </div>
            <!--End Events-->



            <!--campus life-->
            <!-- campus life New -->
            <style>
                /* Import the Yellowtail font from Google Fonts */
                @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');

                /* This container holds both the image and the button. */
                .image-wrapper {
                    position: relative;
                    display: inline-block;
                }

                /* Makes sure the image is responsive */
                .image-wrapper img {
                    display: block;
                    width: 100%;
                    height: auto;
                    max-width: 100%;
                }

                /* This is the button that sits on top. */
                .view-button {
                    position: absolute;
                    top: 88%;
                    left: 78%;
                    transform: translate(-50%, -50%);

                    /* --- Font Styling --- */
                    font-family: 'Yellowtail', cursive;
                    font-weight: 400;
                    font-size: 25px;

                    /* --- Button Styling --- */
                    padding: 15px 40px;
                    color: rgba(255, 255, 255, 0.673);
                    background-color: #e68a0068;
                    border: 2px solid white;
                    border-radius: 30px;
                    cursor: pointer;
                    transition: all 0.3s ease;

                    /* --- NEW: Added for shine effect --- */
                    overflow: hidden;
                    /* This hides the shine effect outside the button's boundaries */

                    /* --- NEW: Apply the pulse animation --- */
                    /* 'pulse' is the animation name, '2s' is the duration, 'infinite' makes it loop forever */
                    animation: pulse 2s infinite;
                }

                /* A simple hover effect */
                .view-button:hover {
                    background-color: #EF991F;
                    color: #fff;
                    transform: translate(-50%, -50%) scale(1.1);
                    /* Slightly larger scale on hover */

                    /* --- NEW: Pause the animation on hover for a smoother experience --- */
                    animation-play-state: paused;
                }

                /* --- NEW: SHINE EFFECT --- */
                /* Create a pseudo-element that will be our 'shine' */
                .view-button::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    /* Start off-screen to the left */
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(120deg,
                            rgba(255, 255, 255, 0) 20%,
                            rgba(255, 255, 255, 0.8) 50%,
                            rgba(255, 255, 255, 0) 80%);
                    /* Apply the shine animation */
                    animation: shine 5s infinite linear;
                    /* '5s' duration, 'linear' speed, loops forever */
                }

                /* --- NEW: PULSE ANIMATION KEYFRAMES --- */
                /* This defines the steps of the 'pulse' animation */
                @keyframes pulse {
                    0% {
                        transform: translate(-50%, -50%) scale(1);
                        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
                    }

                    70% {
                        transform: translate(-50%, -50%) scale(1.05);
                        box-shadow: 0 0 10px 15px rgba(255, 255, 255, 0);
                    }

                    100% {
                        transform: translate(-50%, -50%) scale(1);
                        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
                    }
                }

                /* --- NEW: SHINE ANIMATION KEYFRAMES --- */
                /* This defines the steps of the 'shine' animation */
                @keyframes shine {
                    0% {
                        left: -100%;
                        /* Starts off-screen left */
                    }

                    100% {
                        left: 100%;
                        /* Ends off-screen right */
                    }
                }
            </style>

            <div class="image-wrapper">
                <img src="demo-assets/campus-life/bg2.png" alt="Scenic Landscape">
                <a href="/360-tour" class="view-button headd1">
                    Click for 360&deg; View
                </a>
            </div>
            <!-- campus life New -->


            <!--Courses-->
            <section style="padding: 50px; text-align: center;">
                <div style="max-width: 1800px; margin: 0 auto;">
                    <h2 style="color: #27467A; font-size: 50px; font-weight: 700; margin-bottom: 10px; margin-top: 0;">
                        Explore Our <span style="font-weight: 500; color: #EF991F;">Courses</span>
                    </h2>

                    <p class="para1 mb-5" style="color: #27467A;">
                        At The Assam Royal Global University, we offer a diverse range of academic programs designed to
                        shape
                        future leaders and innovators. Recognized as the Best University in Assam, RGU is committed to
                        academic
                        excellence across undergraduate, postgraduate, and doctoral levels. As a leading university in
                        Northeast
                        Assam, we blend global standards with regional values to deliver impactful education.
                    </p>

                    <div style="display: flex; flex-wrap: wrap; gap: 50px; justify-content: center;">

                        <a href="/doctoral-programme" class="gph-zoom-container"
                            style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                            <img style="border-radius: 20px;" src="mobile-assets/index/c6.svg" alt="Course Image">
                        </a>

                        <a href="/programs" class="gph-zoom-container"
                            style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                            <img style="border-radius: 20px;" src="mobile-assets/index/c7.svg" alt="Course Image">
                        </a>

                        <a href="/programs" class="gph-zoom-container"
                            style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                            <img style="border-radius: 20px;" src="mobile-assets/index/c8.svg" alt="Course Image">
                        </a>

                    </div>
                </div>
            </section>
            <!--End Courses-->

            <!--Labs-->
            <section class="container-fluid"
                style="background-image: url('demo-assets/labs/lab-bg.png'); background-size: cover;">
                <div class="elementor-column-gap-default pt-2 pb-4">
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
                                        style="overflow: hidden; padding: 45px 0px 0px 0px;">
                                        <div class="elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                                            data-id="e22f91b" data-element_type="widget"
                                            data-widget_type="go-s-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="prthalign">
                                                    <h1 style="font-weight: 700; color: #27467A;"
                                                        class="elementor-gt-heading kd-title-ani kd-split-text headd1">
                                                        Laboratories And <span
                                                            style="font-weight: 500; color: #EF991F;">Studios</span>
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
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="https://www.rgu.ac/mobile-assets/laboratories/ev.jpeg"
                                                                            alt="List">

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">EV <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide"
                                                            style="margin-right: 0px !important; padding: 0px !important;">
                                                            <div class="kd-course-4-item"
                                                                style="margin: 0px !important; padding: 0px !important;">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="https://www.rgu.ac/mobile-assets/laboratories/observe.jpeg"
                                                                            alt="List">

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 17px !important; color: #27467A;"
                                                                                aria-label="name">Royal <span
                                                                                    style="color: #e68900;">Observatory</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide"
                                                            style="margin-right: 0px !important; padding: 0px !important;">
                                                            <div class="kd-course-4-item"
                                                                style="margin: 0px !important; padding: 0px !important;">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/mac-lab.jpg" alt="List">

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href="#"
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Mac <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="#" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide"
                                                            style="margin-right: 0px !important; padding: 0px !important;">
                                                            <div class="kd-course-4-item"
                                                                style="margin: 0px !important; padding: 0px !important;">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/computer1.jpg"
                                                                            alt="List">

                                                                        <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                                                                                                                                                                                                                                                                        <span class="item-student kd-heading-1">34,000
                                                                                                                                                                                                                                                                                                                                            students</span> -->
                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Computer <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <div class="kd-course-4-item"
                                                                style="margin-right: 0px !important; padding: 0px !important">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/electric1.jpg"
                                                                            alt="List">

                                                                        <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                                                                                                                                                                                                                                                                        <span class="item-student kd-heading-1">34,000
                                                                                                                                                                                                                                                                                                                                            students</span> -->

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Electrical <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide"
                                                            style="margin-right: 0px !important; padding: 0px !important">
                                                            <div class="kd-course-4-item">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/language1.jpg"
                                                                            alt="List">


                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Language <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide" style="margin-right: 0px !important;">
                                                            <div class="kd-course-4-item">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/chem1.jpg"
                                                                            alt="List">

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Chemistry <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide" style="margin-right: 0px !important;">
                                                            <div class="kd-course-4-item">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/physics1.jpg"
                                                                            alt="List">

                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Physics <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
                                                                            <i class="fa-solid fa-angles-right"></i>
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide" style="margin-right: 0px !important;">
                                                            <div class="kd-course-4-item">
                                                                <div style="background-color: #ffdcac;"
                                                                    class="kd-course-2-card shadow-sm">
                                                                    <div class="main-img fix img-cover">

                                                                        <img decoding="async"
                                                                            src="demo-assets/labs/architecture1.jpg"
                                                                            alt="List">
                                                                    </div>

                                                                    <div class="card-content">
                                                                        <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                            <a href=""
                                                                                style="font-size: 20px !important; color: #27467A;"
                                                                                aria-label="name">Architecture <span
                                                                                    style="color: #e68900;">Lab</span></a>
                                                                        </h4>
                                                                        <a href="" aria-label="name"
                                                                            class="item-btn para1 text-capitalize">
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
                                                        <a href="" rel="nofollow" aria-label="name"
                                                            class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                            <span class="text para1" style="font-size: 15px;"
                                                                data-back="Explore All Labs"
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

            <section
                style="background-image: url(demo-assets/trail-blazer/bg3.png); background-size: cover; background-position: center; height: 100vh;">

                <div class="row" style="padding: 10px 60px; height: 100%; display: flex; align-items: center;">

                    <div class="col-lg-4" style="display: flex; align-items: center; justify-content: center;">
                        <h2 class="headd1 fw-bold" style="font-size: 50px; color: #fff;">
                            <span style="font-size: 60px; color: #EF991F; letter-spacing: 1px;"> Sports </span> <br>
                            Trailblazers as Students of RGU
                        </h2>
                    </div>

                    <div class="col-lg-8" style="display: flex; align-items: center; justify-content: center;">

                        <div class="mt-5" style="position: relative;">
                            <div class="trailblazer-carousel-scene"
                                style="width: 60vw; max-width: 700px; height: 500px; perspective: 1200px; margin-bottom: 80px; position: relative; display: flex; justify-content: center; align-items: center;">
                                <div class="trailblazer-carousel-container"
                                    style="width: 100%; height: 100%; position: absolute; transform-style: preserve-3d; transition: transform 0.7s cubic-bezier(0.77, 0, 0.175, 1);">

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/riyan-final.png" alt="Carousel Image 1"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/hima-final.png" alt="Carousel Image 2"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/jayanta-final.png" alt="Carousel Image 3"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/lovlina-final.png" alt="Carousel Image 1"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/ashmita-final.png" alt="Carousel Image 2"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                    <div class="trailblazer-carousel-item"
                                        style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                        <img src="demo-assets/trail-blazer/final/shivangi-final.png"
                                            alt="Carousel Image 3"
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const carouselContainer = document.querySelector('.trailblazer-carousel-container');
                    const carouselItems = document.querySelectorAll('.trailblazer-carousel-item');
                    const scene = document.querySelector('.trailblazer-carousel-scene');

                    if (!carouselContainer || carouselItems.length === 0) {
                        console.error("Trailblazer Carousel elements not found.");
                        return;
                    }

                    const cellCount = carouselItems.length;
                    const theta = 360 / cellCount;
                    let selectedIndex = 0;
                    const carouselWidth = scene.offsetWidth * 0.9;
                    const radius = Math.round((carouselWidth / 2.3) / Math.tan(Math.PI / cellCount)) + 100;
                    let autoSlideInterval;

                    function setupCarousel() {
                        carouselItems.forEach((cell, i) => {
                            const cellAngle = theta * i;
                            cell.style.transform = `rotateY(${cellAngle}deg) translateZ(${radius}px)`;
                            const img = cell.querySelector('img');
                            if (img && !cell.querySelector('.trailblazer-carousel-reflection')) {
                                const reflection = document.createElement('div');
                                reflection.className = 'trailblazer-carousel-reflection';
                                Object.assign(reflection.style, {
                                    position: 'absolute',
                                    top: '100%',
                                    left: '0',
                                    width: '100%',
                                    height: '100%',
                                    backgroundImage: `url(${img.src})`,
                                    backgroundSize: 'cover',
                                    backgroundPosition: 'center top',
                                    transform: 'scaleY(-1)',
                                    transformOrigin: 'center top',
                                    opacity: '0.3',
                                    maskImage: 'linear-gradient(to bottom, transparent 30%, black 100%)',
                                    WebkitMaskImage: 'linear-gradient(to bottom, transparent 30%, black 100%)',
                                    zIndex: '0',
                                    pointerEvents: 'none',
                                    marginTop: '5px',
                                    borderRadius: '7px'
                                });
                                img.parentNode.appendChild(reflection);
                            }
                        });
                    }

                    function rotateCarousel() {
                        const angle = theta * selectedIndex * -1;
                        carouselContainer.style.transform = `translateZ(-${radius}px) rotateY(${angle}deg)`;
                    }

                    function startAutoSlide() {
                        clearInterval(autoSlideInterval);
                        autoSlideInterval = setInterval(() => {
                            selectedIndex++;
                            rotateCarousel();
                        }, 2500);
                    }

                    setupCarousel();
                    rotateCarousel();
                    startAutoSlide();
                });
            </script>
            <!-- new advantage end-->

            <!--Innovation & Publication end-->

            <!--Footprint-->
            <img src="footprint.png" alt="">
            <!-- footprint end  -->

            <!-- Fashion Museum  -->
            <section>

                <h2 class="headd1 text-center mt-4"
                    style="color:#e68900; font-weight: 700; margin:0; letter-spacing: 0px; font-size: 45px;">
                    The Digital <span style="color: #27467A; font-weight: 700; margin:0; font-size: 45px;">Coffee
                        Table</span>
                </h2>

                <main id="bgc-gallery-wrapper"
                    style="background-color: #fff; margin: 0px; padding: 2rem; display: flex; justify-content: center; align-items: center; min-height: 85vh; transition: background-color 0.5s ease-in-out 0s;">
                    <section class="bgc-gallery-content"
                        style="display: flex; gap: 2rem; width: 100%; max-width: 1800px; background: #27467A; padding: 2rem; border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.08) 0px 6px 20px; height: 90vh; box-sizing: border-box;">

                        <div class="bgc-gallery-left"
                            style="flex-basis: 20%; display: flex; flex-direction: column; justify-content: center; gap: 1.5rem;">


                            <button data-set="museum" class="bgc-gallery-selector-btn"
                                style="border: 4px solid transparent; padding: 0px; background: none; cursor: pointer; border-radius: 8px; overflow: hidden; transition: border-color 0.3s ease 0s, transform 0.3s ease 0s;"
                                onmouseover="this.style.transform='scale(1.05)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <img src="demo-assets/switcher/museum/headimg.jpg" alt="Selector 2"
                                    style="width: 100%; display: block; aspect-ratio: 1 / 1; object-fit: cover;">
                            </button>

                            <button data-set="lookbook" class="bgc-gallery-selector-btn"
                                style="border: 4px solid transparent; padding: 0px; background: none; cursor: pointer; border-radius: 8px; overflow: hidden; transition: border-color 0.3s ease 0s, transform 0.3s ease 0s;"
                                onmouseover="this.style.transform='scale(1.05)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <img src="demo-assets/switcher/lookbook/headimg.png" alt="Selector 1"
                                    style="width: 100%; display: block; aspect-ratio: 1 / 1; object-fit: cover;">
                            </button>


                        </div>

                        <div id="flipbook-background" class="bgc-gallery-right"
                            style="flex-basis: 80%; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-size: cover; background-position: center center; transition: background-image 0.5s ease-in-out 0s;">
                            <div class="flipbook-container"
                                style="font-family: Georgia, serif; color: rgb(62, 39, 35); display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; width: 100%;">
                                <div class="flipbook-wrapper"
                                    style="position: relative; height: 80%; aspect-ratio: 2 / 1; margin: auto;">

                                    <div id="flipbook-book" class="flipbook-book"
                                        style="position: absolute; top: 0px; width: 50%; height: 100%; perspective: 2500px; transform-style: preserve-3d; transition: transform 0.8s ease-in-out 0s, right 0.8s ease-in-out 0s; right: 25%; transform: rotateY(-15deg) scale(0.9);">
                                    </div>

                                    <div class="flipbook-controls"
                                        style="position: absolute; top: 50%; width: calc(100% + 100px); left: -50px; transform: translateY(-50%); z-index: 1000; display: flex; justify-content: space-between; padding: 0px; pointer-events: none;">
                                        <button id="flipbook-prevBtn"
                                            style="pointer-events: all; background: rgba(255, 255, 255, 0.4); color: rgb(51, 51, 51); border: none; width: 35px; height: 35px; border-radius: 50%; font-size: 22px; line-height: 1; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0px; transition: background 0.2s ease 0s;"
                                            onmouseover="this.style.background='rgba(255, 255, 255, 0.7)'"
                                            onmouseout="this.style.background='rgba(255, 255, 255, 0.4)'">❮</button>
                                        <button id="flipbook-nextBtn"
                                            style="pointer-events: all; background: rgba(255, 255, 255, 0.4); color: rgb(51, 51, 51); border: none; width: 35px; height: 35px; border-radius: 50%; font-size: 22px; line-height: 1; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0px; transition: background 0.2s ease 0s;"
                                            onmouseover="this.style.background='rgba(255, 255, 255, 0.7)'"
                                            onmouseout="this.style.background='rgba(255, 255, 255, 0.4)'">❯</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </main>

                <div id="imageModal"
                    style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.85); align-items: center; justify-content: center;">
                    <span id="closeModal"
                        style="position: absolute; top: 20px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; transition: 0.3s; cursor: pointer;">&times;</span>
                    <img id="modalImage"
                        style="margin: auto; display: block; max-width: 85%; max-height: 85%; object-fit: contain;">
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const prevBtn = document.querySelector("#flipbook-prevBtn");
                        const nextBtn = document.querySelector("#flipbook-nextBtn");
                        const selectorBtns = document.querySelectorAll(".bgc-gallery-selector-btn");
                        const backgroundContainer = document.getElementById('flipbook-background');
                        const book = document.getElementById('flipbook-book');

                        // START: Added variables for modal functionality
                        const modal = document.getElementById('imageModal');
                        const modalImg = document.getElementById('modalImage');
                        const closeModalSpan = document.getElementById('closeModal');
                        // END: Added variables for modal functionality

                        let papers = [];
                        let currentLocation = 0;
                        let maxLocation = 0;
                        let isBookOpen = false;

                        const flipbookContent = {
                            lookbook: [{
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/headimg.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/1.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/2.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/3.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/4.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/5.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/6.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/7.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/8.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/9.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/10.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/11.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/12.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/13.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/14.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/15.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/16.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/17.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/18.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/19.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/20.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/21.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/22.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/23.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/24.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/25.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/26.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/27.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/28.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/29.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/30.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/31.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/32.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/33.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/34.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/35.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/36.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/37.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/38.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/39.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/40.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/41.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/42.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/43.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/44.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/45.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/46.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/47.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/48.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/49.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/50.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/51.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/52.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/53.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/54.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/55.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/56.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/57.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/58.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/59.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/60.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/61.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/62.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/63.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/64.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/65.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/66.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/67.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/68.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/69.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/70.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/71.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/72.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/73.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/74.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/75.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/76.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/77.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/78.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/79.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/80.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/81.png'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/lookbook/82.png'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/lookbook/83.png'
                                    }
                                }
                            ],
                            museum: [{
                                    front: {
                                        image: 'demo-assets/switcher/museum/headimg.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/1.jpg'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/museum/indi/2.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/3.jpg'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/museum/indi/4.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/5.jpg'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/museum/indi/6.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/7.jpg'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/museum/indi/8.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/9.jpg'
                                    }
                                },
                                {
                                    front: {
                                        image: 'demo-assets/switcher/museum/indi/10.jpg'
                                    },
                                    back: {
                                        image: 'demo-assets/switcher/museum/indi/end.jpg'
                                    }
                                },
                                // TO ADD MORE, JUST COPY THE LINE ABOVE AND CHANGE THE IMAGE PATHS
                                // { front: { image: 'path/to/front11.jpg' }, back: { image: 'path/to/back12.jpg' } },
                            ]
                        };

                        const backgroundImages = {
                            lookbook: 'url("demo-assets/switcher/lookbook/fashion-bg.jpeg")',
                            museum: 'url("demo-assets/switcher/museum/bgg2.jpeg")'
                        };

                        function openBook() {
                            if (isBookOpen || papers.length === 0) return;
                            book.style.right = '0px';
                            book.style.transform = 'rotateY(0deg) scale(1)';
                            isBookOpen = true;
                        }

                        function goNextPage() {
                            if (!isBookOpen) {
                                openBook();
                                return;
                            }
                            if (currentLocation < maxLocation) {
                                papers[currentLocation].style.transform = 'rotateY(-180deg)';
                                papers[currentLocation].style.zIndex = currentLocation + 2;
                                currentLocation++;
                            }
                        }

                        function goPrevPage() {
                            if (!isBookOpen) return;
                            if (currentLocation > 0) {
                                currentLocation--;
                                papers[currentLocation].style.transform = 'rotateY(0deg)';
                                papers[currentLocation].style.zIndex = maxLocation - currentLocation + 1;
                            }
                        }

                        function updateFlipbook(setName) {
                            selectorBtns.forEach(btn => {
                                btn.style.borderColor = 'transparent';
                                btn.style.boxShadow = 'none';
                            });
                            const activeBtn = document.querySelector(`[data-set=${setName}]`);
                            activeBtn.style.borderColor = '#FF9A1E';
                            activeBtn.style.boxShadow = '0 0 10px rgba(255, 154, 30, 0.5)';

                            backgroundContainer.style.backgroundImage = backgroundImages[setName];

                            const content = flipbookContent[setName];
                            maxLocation = content.length;
                            book.innerHTML = '';

                            let pagesHTML = '';
                            content.forEach((pageData, index) => {
                                const zIndex = content.length - index;
                                pagesHTML +=
                                    `
                                                                                                                                                                                                                                                    <div id="flipbook-p${index + 1}" class="flipbook-paper" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; transform-origin: left center 0px; transition: transform 1s ease-in-out 0s; transform-style: preserve-3d; cursor: pointer; z-index: ${zIndex};">
                                                                                                                                                                                                                                                        <div class="flipbook-front" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(253, 246, 227); padding: 0px; backface-visibility: hidden; border: 1px solid rgb(201, 184, 155); overflow: hidden; z-index: 1;">
                                                                                                                                                                                                                                                            <div class="flipbook-front-content" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                                                                                                                                                                                                                                                                <img src="${pageData.front.image}" alt="Page ${index * 2 + 1}" style="width: 100%; height: 100%; object-fit: cover;">
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="flipbook-back" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(253, 246, 227); padding: 0px; backface-visibility: hidden; border: 1px solid rgb(201, 184, 155); overflow: hidden; transform: rotateY(180deg); z-index: 0;">
                                                                                                                                                                                                                                                            <div class="flipbook-back-content" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                                                                                                                                                                                                                                                                <img src="${pageData.back.image}" alt="Page ${index * 2 + 2}" style="width: 100%; height: 100%; object-fit: cover;">
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    `;
                            });
                            book.innerHTML = pagesHTML;
                            papers = book.querySelectorAll('.flipbook-paper');

                            if (papers.length > 0) {
                                papers[0].addEventListener('click', () => {
                                    if (!isBookOpen) openBook();
                                });
                            }

                            currentLocation = 0;
                            book.style.right = '25%';
                            book.style.transform = 'rotateY(-15deg) scale(0.9)';
                            isBookOpen = false;
                        }

                        // Main event listeners
                        prevBtn.addEventListener("click", goPrevPage);
                        nextBtn.addEventListener("click", goNextPage);

                        selectorBtns.forEach(btn => {
                            btn.addEventListener('click', () => {
                                const setName = btn.dataset.set;
                                updateFlipbook(setName);
                            });
                        });

                        // START: Added event listeners for modal
                        // Use event delegation to listen for clicks on images inside the book
                        book.addEventListener('click', (e) => {
                            // Check if the clicked element is an image
                            if (e.target && e.target.tagName === 'IMG') {
                                modal.style.display = 'flex';
                                modalImg.src = e.target.src;
                            }
                        });

                        // Function to close the modal
                        function closeModal() {
                            modal.style.display = "none";
                        }

                        // Close when clicking the 'x'
                        closeModalSpan.onclick = closeModal;

                        // Close when clicking the background overlay
                        modal.addEventListener('click', (e) => {
                            if (e.target === modal) {
                                closeModal();
                            }
                        });
                        // END: Added event listeners for modal

                        // Initialize with the 'museum' flipbook
                        updateFlipbook('museum');
                    });
                </script>

            </section>
            <!-- Fashion Museum  -->

            <!--Testimonial-->
            <div style="background-image: url(https://media.rgu.ac/index/s2-bg-img-1.webp);"
                class="pt-5 elementor-element elementor-element-41f1d73 elementor-widget elementor-widget-go-s-heading"
                data-id="41f1d73" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container" style="padding-left: 50px;">
                    <div class="prthalign text-center">
                        <h6 class=" kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub headd3">
                            <img style="width: 40x; height: 40px;" src="https://media.rgu.ac/index/cap.svg"
                                alt="">
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
                                    src="https://media.rgu.ac/index/alumni-student.png" /></a></figure>
                    </div>

                    <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                        <figure><a href="top-recruiters"><img style="border: 2px solid #fff;"
                                    src="https://media.rgu.ac/index/recruiters.png" /></a></figure>

                    </div>
                    <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                        <figure><a href="footprints"><img style="border: 2px solid #fff;"
                                    src="https://media.rgu.ac/index/dignitaries.png" /></a></figure>

                    </div>
                </div>
            </div>
            <!-- testimonial end -->


    </section>
@endsection
