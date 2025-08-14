@extends('frontend.master')
@section('title', 'The Assam Royal Global University | Best Private University in Assam, India')
@section('meta_description', 'Discover Royal Global University, the best private university in Assam offering world-class education, top-ranked faculty, modern infrastructure & 50+ UG & PG programs.')
@section('meta_keywords', 'Best University in Assam')
@section('content')

            <section class="mobile">

                <!-- Popup -->
                {{-- <div id="popup-mob" class="popup-overlay">
                    <a href="https://admissions.rgu.ac/" target="_blank" class="text-center"><img
                            src="{{ asset('mobile-assets/ads/phd-ads.jpg') }}" style="width: 400px; height: 400px;"
                            class="popup-image" alt="Popup Image"></a>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const popup = document.getElementById('popup-mob');

                        popup.addEventListener('click', function (event) {
                            if (event.target === popup) {
                                popup.style.display = 'none';
                            }
                        });
                    });
                </script> --}}

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
                    <img src="https://media.rgu.ac/head-video/mob-thumb.png" id="video-thumbnail" alt="Video Thumbnail"
                        style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

                    <video playsinline autoplay loop muted id="video-bg" oncanplay="showVideo()"
                        style="width: 100%; height: auto; display: block;">
                        <source src="https://media.rgu.ac/head-video/Websitemobilevideooo.mp4" type="video/mp4">
                    </video>
                </div>
                <!-- mobile video -->

                <!-- slider banners  -->
                <div id="carouselExample" class="carousel slide mobile-image-slider" data-bs-ride="carousel">
                    <div class="carousel-inner">

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
                    <a href=""><img src="https://media.rgu.ac/explore/mob.png"
                            alt="The Assam Royal Global University (RGU), widely regarded as the Best University in Assam, has established itself as a center of academic excellence and innovation. Since its inception in 2017, it has created opportunities for students through strong industry collaboration and modern pedagogy at the Best University in Guwahati.  Recognized as a leading University in Assam, RGU continuously nurtures a learning environment where innovation and entrepreneurship thrive. With its dedicated faculty, global partnerships, and cutting-edge infrastructure, RGU empowers students with the resources, exposure, and skills needed for future success. As the Best University in Assam, it remains committed to developing industry-ready graduates who can excel in a dynamic global landscape." /></a>
                </div>
                <!-- discover rgu -->

                <!-- happening at rgu  -->
                {{-- <section style="padding: 30px; background-image: url(https://media.rgu.ac/index/bg.svg);">

                    <h2 class="headd2 fw-bold pb-3" style="color: #27467A; font-weight: 900; font-size: 40px;">
                        News and<span style="color: #FF9A1E; font-weight: 500;"> Events</span></h2>

                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="mobile-assets/events/adira-mob.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="https://media.rgu.ac/index/prabuddha-mobile-may.jpeg" class="d-block w-100 rounded"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- happening at rgu  -->

                <div id="newsContainer" class="row">
                    @php
    $newsItems = [
        [
            'title' => 'Apply Critical Thinking and Creativity for a Successful Living: IITG Director Prof. Jalihal to students of RGU',
            'summary' => '',
            'date' => '',
            'link' => 'apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu',
            'image' => 'mobile-assets/media-corner/news34/1.JPG',
            'content' => '',
        ],
        [
            'title' => 'SYNTHESIS-2025: Innovative Creations Showcased by RGU Fashion Design & Technology Graduates',
            'summary' => '',
            'date' => '',
            'link' => 'synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates',
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
                                <div class="carousel-item @if($index === 0) active @endif">
                                    <div class="card shadow-sm mx-auto" style="max-width: 900px;">
                                        <div class="row p-3 g-0">
                                            <div class="col-12 col-md-4">
                                                <img class="rounded shadow-sm border" style="width: 100%; height:270px; object-fit: cover;"
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
                                            <img style="height: 300px; width: 100%;" src="https://media.rgu.ac/index/electric1.jpg"
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
                                            <img style="height: 300px; width: 100%;" src="https://media.rgu.ac/index/computer1.jpg"
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
                                            <img style="height: 300px; width: 100%;" src="https://media.rgu.ac/index/foodtech1.jpg"
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
                                            <img style="height: 300px; width: 100%;" src="https://media.rgu.ac/index/language1.jpg"
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
                {{-- <div id="popup-web" class="popup-overlay">
                    <a href="https://admissions.rgu.ac/" target="_blank"><img src="{{ asset('mobile-assets/ads/phd-2025.png') }}"
                            style="width: 550px; height: 550px;" class="popup-image" alt="Popup Image"></a>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const popup = document.getElementById('popup-web');

                        popup.addEventListener('click', function (event) {
                            if (event.target === popup) {
                                popup.style.display = 'none';
                            }
                        });
                    });
                </script> --}}
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

                                        {{-- <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://media.rgu.ac/sports-image/head-web-sport.PNG" alt="Slide 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://media.rgu.ac/index/about-website.png" alt="Slide 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://media.rgu.ac/index/research-website.png" alt="Slide 3">
                                            </div>
                                        </div> --}}

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
                                                    <img src="https://media.rgu.ac/index/research-website.png" class="d-block w-100"
                                                        alt="Slide 3">
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

                                    {{-- <div class="video-container" style="position: relative; width: 100%; height: 95vh;">
                                        <img src="https://media.rgu.ac/head-video/web-thumb.png" id="video-thumbnail2"
                                            alt="Video Thumbnail"
                                            style="width: 100%; height: auto; position: relative; top: 0; left: 0; object-fit: cover;
                                                                                                    z-index: 1; transition: opacity 1s ease; filter: blur(1px) brightness(0.85);">
                                    </div> --}}
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

                        <a href="/preface"><img src="https://media.rgu.ac/explore/web.png"
                                alt="The Assam Royal Global University (RGU), widely regarded as the Best University in Assam, has established itself as a center of academic excellence and innovation. Since its inception in 2017, it has created opportunities for students through strong industry collaboration and modern pedagogy at the Best University in Guwahati.  Recognized as a leading University in Assam, RGU continuously nurtures a learning environment where innovation and entrepreneurship thrive. With its dedicated faculty, global partnerships, and cutting-edge infrastructure, RGU empowers students with the resources, exposure, and skills needed for future success. As the Best University in Assam, it remains committed to developing industry-ready graduates who can excel in a dynamic global landscape."></a>

                        <!--Deekharambh-->
                        <div class="pb-4"
                            style="background-image: url('mobile-assets/events/deeksharam-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="text-center pt-5">
                                <img class="text-center" src="mobile-assets/deekshara/one-logo.png" style="width: 50%" />
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-5" style="display: flex; flex-direction: column; padding-left: 40px;">
                                    <div style="width: 642px; overflow: hidden; margin: auto; position: relative;"
                                        id="custom-carousel-container">
                                        <div id="custom-carousel-track" style="display: flex; transition: transform 0.5s ease;">
                                            <img src="mobile-assets/deekshara/new/2.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/4.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/aug-1.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/5.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/6.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/8.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/9.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/10.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/11.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/13.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/14.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/15.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/17.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/18.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                            <img src="mobile-assets/deekshara/new/21.jpeg"
                                                style="width:400px; height:530px; margin-right:20px; border: 4px solid #160c49; border-radius:10px;">
                                        </div>
                                    </div>

                                    <div style="text-align: center; margin-top: 10px;">
                                        <button onclick="prevCustomSlide()"
                                            style="padding: 5px 10px; background-color: #FEAA4E; color: #fff; border-radius: 3px;">&lt;</button>
                                        <button onclick="nextCustomSlide()"
                                            style="padding: 5px 10px; background-color: #FEAA4E; color: #fff; border-radius: 3px;">&gt;</button>
                                    </div>

                                    <script>
                                        const customTrack = document.getElementById('custom-carousel-track');
                                        const customSlideWidth = 320; // 400 + 20px margin
                                        const customVisibleSlides = 2;
                                        let customIndex = 0;
                                        let customIsSliding = false;

                                        function nextCustomSlide() {
                                            if (customIsSliding) return;
                                            customIsSliding = true;
                                            customIndex++;
                                            customTrack.style.transition = 'transform 0.5s ease';
                                            customTrack.style.transform = `translateX(-${customIndex * customSlideWidth}px)`;

                                            setTimeout(() => {
                                                if (customIndex >= customTrack.children.length - customVisibleSlides) {
                                                    customTrack.style.transition = 'none';
                                                    customIndex = 0;
                                                    customTrack.style.transform = 'translateX(0px)';
                                                }
                                                customIsSliding = false;
                                            }, 500);
                                        }

                                        function prevCustomSlide() {
                                            if (customIsSliding) return;
                                            customIsSliding = true;
                                            if (customIndex <= 0) {
                                                customIndex = customTrack.children.length - customVisibleSlides;
                                                customTrack.style.transition = 'none';
                                                customTrack.style.transform = `translateX(-${customIndex * customSlideWidth}px)`;
                                                setTimeout(() => {
                                                    customIndex--;
                                                    customTrack.style.transition = 'transform 0.5s ease';
                                                    customTrack.style.transform = `translateX(-${customIndex * customSlideWidth}px)`;
                                                    customIsSliding = false;
                                                }, 20);
                                            } else {
                                                customIndex--;
                                                customTrack.style.transition = 'transform 0.5s ease';
                                                customTrack.style.transform = `translateX(-${customIndex * customSlideWidth}px)`;
                                                setTimeout(() => customIsSliding = false, 500);
                                            }
                                        }

                                        setInterval(nextCustomSlide, 3000); // Auto-slide every 3 seconds
                                    </script>
                                </div>
                                <div class="col-lg-1"></div>

                                <div class="col-lg-6">
                                    <style>
                                        #video-container-reel-ads {
                                            position: relative;
                                            width: 100%;
                                            height: 65vh;
                                            overflow: hidden;
                                            background-color: black;
                                        }

                                        #video-reel-main {
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            min-width: 100%;
                                            min-height: 100%;
                                            transform: translate(-50%, -50%);
                                            object-fit: cover;
                                        }

                                        .text-carousel-reel {
                                            display: flex;
                                            overflow-x: auto;
                                            padding: 10px;
                                            scroll-snap-type: x mandatory;
                                        }

                                        .text-carousel-reel button {
                                            flex: 0 0 calc(33.33% - 20px);
                                            /* 3 items in full width with some gap */
                                            margin-right: 10px;
                                            padding: 10px 10px;
                                            background: #fff;
                                            border: 1px solid #ccc;
                                            border-radius: 20px;
                                            font-size: 14px;
                                            cursor: pointer;
                                            scroll-snap-align: start;
                                            transition: background 0.3s;
                                            white-space: nowrap;
                                        }

                                        .text-carousel-reel button:hover {
                                            background: #03203e;
                                            color: white;
                                        }
                                    </style>

                                    <!-- Main Video Container -->
                                    <div id="video-container-reel-ads">
                                        <video autoplay loop muted playsinline id="video-reel-main">
                                            <source src="https://media.rgu.ac/deeksharambh/hd.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>

                                    <!-- Bottom Text Carousel (3 items at a time) -->
                                    {{-- <div class="text-carousel-reel">
                                        <button onclick="changeVideoReel('mobile-assets/first-convo/first-convo.mp4')">
                                            <span>Day 1</span><br><span class="fw-bold">Shri Rakkam A. Sangma</span>
                                        </button>
                                        <button onclick="changeVideoReel('mobile-assets/second-convo/second-convo.mp4')">
                                            <span>Day 2</span><br><span class="fw-bold">Sana</span>
                                        </button>
                                        <button onclick="changeVideoReel('mobile-assets/third-Convo/third-convo.mp4')">
                                            <span>Day 3</span><br><span class="fw-bold">Arjun</span>
                                        </button>
                                        <button onclick="changeVideoReel('mobile-assets/first-convo/first-convo.mp4')">
                                            <span>Day 4</span><br><span class="fw-bold">Riya</span>
                                        </button>
                                        <button onclick="changeVideoReel('https://media.rgu.ac/head-video/v-5.mp4')">
                                            <span>Day 5</span><br><span class="fw-bold">Neha</span>
                                        </button>
                                    </div> --}}

                                    <script>
                                        function changeVideoReel(src) {
                                            const video = document.getElementById('video-reel-main');
                                            const source = video.querySelector('source');

                                            video.pause();                        // Pause current video
                                            source.setAttribute('src', src);     // Update the source src attribute
                                            video.load();                        // Reload the video element
                                            video.play();                        // Play the new video
                                        }
                                    </script>
                                </div>


                            </div>
                        </div>


                        <!--New Events-->
                        <div class="container" style="padding: 30px 0px;">
                            <div class="row pb-5">
                                <div class="col-lg-7" style="display: flex; flex-direction: column;">


                                    <div id="slider" style="width: 620px; overflow: hidden; margin: auto; position: relative;">
                                        <h2 class="headd2 fw-bold pb-3" style="color: #27467A; font-weight: 900; font-size: 40px;">
                                            Events at<span style="color: #FF9A1E; font-weight: 500;"> RGU</span></h2>

                                        <div id="slides" style="display: flex; transition: transform 0.7s ease;">
                                            <img class="zoomable" src="mobile-assets/events/stu-1.png"
                                                style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                            <img class="zoomable" src="mobile-assets/events/stu2.png"
                                                style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                            <img class="zoomable" src="https://media.rgu.ac/index/e04.jpeg"
                                                style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                                            <img class="zoomable" src="mobile-assets/events/model.jpeg"
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
                                            img.style.cssText = 'width:400px; height:530px; margin-right:20px; border:2px solid #e68900; border-radius:10px; cursor:pointer;';
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

                                    <h2 class="headd2 fw-bold pb-2" style="color: #27467A; font-size: 40px;">Media <span
                                            style="color: #FF9A1E; font-weight: 540;"> Corner</span></h2>
                                    <div style="height: 600px; overflow: hidden; position: relative;">
                                        <div class="p-0 rounded">
                                            <div class="row">

                                                <div class="row bg-light p-2 rounded">
                                                    <div class="col-lg-5">
                                                        <img class="rounded" style="height: 130px; width: 100%;"
                                                            src="mobile-assets/media-corner/news34/1.JPG" alt="" />
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p style="color: #27467A; font-style: 10px; line-height: 1;"
                                                            class="pt-2 m-0 fw-bold">Apply Critical Thinking and Creativity for a Successful Living: IITG Director Prof. Jalihal to students of RGU</p>
                                                        <p class="pt-1 p-0 m-0"
                                                            style="font-size: 16px; color: black; line-height: 1.4;">August 14, 2025
                                                        </p>
                                                        <a
                                                            href="/apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu">
                                                            <p class="pt-2 fw-bold m-0"
                                                                style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                                Read More ...</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="row bg-light p-2 rounded mt-3">
                                                    <div class="col-lg-5">
                                                        <img class="rounded" style="height: 130px; width: 100%"
                                                            src="mobile-assets/media-corner/news33/1.jpg" alt="" />
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p style="color: #27467A; font-size: 19px; line-height: 1;"
                                                            class="pt-2 m-0 fw-bold">Innovative Creations Showcased by RGU Fashion
                                                            Design & Technology Graduates
                                                        </p>
                                                        <p class="pt-1 pt-2 m-0"
                                                            style="font-size: 16px; color: black; line-height: 1.4;">August 12, 2025
                                                        </p>
                                                        <a
                                                            href="/synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates">
                                                            <p class="pt-2 fw-bold m-0"
                                                                style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                                Read More ...</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="row bg-light p-2 rounded mt-3">
                                                    <div class="col-lg-5">
                                                        <img class="rounded" style="height: 130px; width: 100%;"
                                                            src="mobile-assets/media-corner/news32/1.jpg" alt="" />
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p style="color: #27467A; font-style: 10px; line-height: 1;"
                                                            class="pt-2 m-0 fw-bold">Royal Global University to Confer Honorary
                                                            D.Sc. Degree upon Dr. Trehan</p>
                                                        <p class="pt-1 p-0 m-0"
                                                            style="font-size: 16px; color: black; line-height: 1.4;">August 9, 2025
                                                        </p>
                                                        <a
                                                            href="/royal-global-university-to-confer-honorary-dsc-degree-upon-dr-trehan">
                                                            <p class="pt-2 fw-bold m-0"
                                                                style="font-size: 16px; color: black; line-height: 1.4; color: #FF9A1E;">
                                                                Read More ...</p>
                                                        </a>
                                                    </div>
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

                <div style="padding: 30px 20px; background-color: #590d22;">
                    <div class="row" style="display: flex; align-items: center;">
                        <div class="col-lg-7" style="display: flex; justify-content: center;">
                            <div style="display: flex; flex-direction: column;">
                                <img src="https://media.rgu.ac/index/lookbook.png" alt="" />
                                <div class="mt-5 text-center">
                                    <a href="https://heyzine.com/flip-book/601e0af13b.html" target="_blank"
                                        class="text-center p-3 rounded bg-light fw-bold text-dark">View LookBook 2025</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5" style="display: flex; justify-content: center;">
                            <video autoplay loop muted playsinline
                                style="width: 100%; height: auto; pointer-events: none; border: 4px solid #fff;">
                                <source src="https://media.rgu.ac/index/lookbook.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    </div>
                </div>
                <!--new code-->
                {{-- <div style="background-color: #13223b;">
                    <section style=" font-family: Arial, sans-serif; padding-left: 30px; padding-top: 20px; padding-bottom: 20px;">
                        <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">

                            <!-- Left: Video -->
                            <div class="col-lg-5">
                                <div class="text-center">
                                    <video id="videoPlayer" autoplay muted loop controlsList="nodownload"
                                        style="width: 100%; height: 100%; border: 3px solid #fff;">
                                        <source id="videoSource" src="https://media.rgu.ac/index/lookbook.mp4" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                            </div>

                            <!-- Right: Image Carousel & Controls -->
                            <div class="col-lg-7 pt-3">
                                <div style="padding: 10px; display: flex; flex-direction: column; align-items: center;">
                                    <!-- Thumbnails -->
                                    <div style="position: relative; width: 100%; overflow: hidden;">
                                        <div id="carousel"
                                            style="display: flex; overflow: hidden; scroll-behavior: smooth; gap: 20px; padding: 10px 40px;">
                                            <img class="thumb" data-video="https://media.rgu.ac/index/lookbook.mp4"
                                                src="mobile-assets/magazine/1.png"
                                                style="height: 360px; width: auto; cursor: pointer; border: 3px solid white;" />
                                            <img class="thumb" data-video="https://media.rgu.ac/museum-vid.mp4"
                                                src="mobile-assets/magazine/2.png"
                                                style="height: 360px; width: auto; cursor: pointer; border: 3px solid white;" />
                                            <img class="thumb" data-video="https://media.rgu.ac/index/lookbook.mp4"
                                                src="mobile-assets/magazine/1.png"
                                                style="height: 360px; width: auto; cursor: pointer; border: 3px solid white;" />
                                            <img class="thumb" data-video="https://media.rgu.ac/museum-vid.mp4"
                                                src="mobile-assets/magazine/2.png"
                                                style="height: 360px; width: auto; cursor: pointer; border: 3px solid white;" />
                                        </div>
                                    </div>

                                    <!-- Controls Row (Arrows + View All) -->
                                    <div class="d-flex justify-content-between align-items-center w-100 mt-3 px-4">
                                        <!-- Arrows (Left) -->
                                        <div>
                                            <button id="scrollLeft"
                                                style="background: #e68900; border: none; padding: 10px 20px; color: white; font-size: 18px; cursor: pointer;">←</button>
                                            <button id="scrollRight"
                                                style="background: #e68900; border: none; padding: 10px 20px; color: white; font-size: 18px; cursor: pointer;">→</button>
                                        </div>

                                        <!-- View All (Right) -->
                                        <div>
                                            <a href="rgu-magazine">
                                                <p style="background-color: #e68900; color: #fff; padding: 10px 16px;"
                                                    class="rounded fw-bold mb-0">View All Magazine</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- JavaScript -->
                    <script>
                        const video = document.getElementById('videoPlayer');
                        const source = document.getElementById('videoSource');
                        const carousel = document.getElementById('carousel');
                        const thumbnails = document.querySelectorAll('.thumb');
                        const scrollLeftBtn = document.getElementById('scrollLeft');
                        const scrollRightBtn = document.getElementById('scrollRight');

                        const visibleItems = 1;
                        const totalItems = thumbnails.length;
                        const totalSlides = Math.ceil(totalItems / visibleItems);
                        let currentSlide = 0;

                        function scrollToSlide(index) {
                            const itemWidth = thumbnails[0].offsetWidth + 20; // image width + gap
                            carousel.scrollTo({
                                left: index * itemWidth * visibleItems,
                                behavior: 'smooth'
                            });
                        }

                        scrollLeftBtn.addEventListener('click', () => {
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                            scrollToSlide(currentSlide);
                        });

                        scrollRightBtn.addEventListener('click', () => {
                            currentSlide = (currentSlide + 1) % totalSlides;
                            scrollToSlide(currentSlide);
                        });

                        // Auto-scroll every 3 seconds
                        // setInterval(() => {
                        //     currentSlide = (currentSlide + 1) % totalSlides;
                        //     scrollToSlide(currentSlide);
                        // }, 3000);

                        // On image click
                        thumbnails.forEach(thumb => {
                            thumb.addEventListener('click', () => {
                                const videoURL = thumb.dataset.video;
                                source.src = videoURL;
                                video.load();
                                video.play();

                                // Move clicked image to front
                                carousel.prepend(thumb);
                                scrollToSlide(0);
                                currentSlide = 0;
                            });
                        });
                    </script>
                </div> --}}

                <!--campus life-->
                <section class=" elementor-section elementor-top-section elementor-element elementor-element-f03cf62
                                                                    elementor-section-full_width elementor-section-height-default
                                                                    elementor-section-height-default" data-id="f03cf62"
                    data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8bd58a9"
                            data-id="8bd58a9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2d6d76a elementor-widget elementor-widget-go-content-tab"
                                    data-id="2d6d76a" data-element_type="widget" data-widget_type="go-content-tab.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-course-3-area p-relative pt-105 pb-60 fix">
                                            <div class="kd-course-1-bg-img img-cover fix">
                                                <img decoding="async" src="https://media.rgu.ac/index/head2.svg" alt="">
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
                                                                <button class="nav-link active kd-heading-1 para1 fw-bold text-dark"
                                                                    id="home-tab0" data-bs-toggle="tab" data-bs-target="#home0"
                                                                    type="button" role="tab" aria-controls="home0"
                                                                    aria-selected="true">Campus</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1"
                                                                    type="button" role="tab" aria-controls="home1"
                                                                    aria-selected="true">Residence
                                                                    Life</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab2" data-bs-toggle="tab" data-bs-target="#home2"
                                                                    type="button" role="tab" aria-controls="home2"
                                                                    aria-selected="true">Sports
                                                                    &
                                                                    Exercise</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                    id="home-tab3" data-bs-toggle="tab" data-bs-target="#home3"
                                                                    type="button" role="tab" aria-controls="home3"
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
                                                                    <p style="color: #323232 !important;">
                                                                        Recognized as
                                                                        the<strong> best private
                                                                            university</strong>
                                                                        in Assam, The Assam
                                                                        Royal Global University
                                                                        provides an enriching
                                                                        campus life
                                                                        that complements
                                                                        academic excellence. As
                                                                        the best
                                                                        <strong>University in
                                                                            Northeast</strong>
                                                                        Assam, we foster
                                                                        holistic development
                                                                        through
                                                                        vibrant cultural
                                                                        festivals, academic
                                                                        clubs, and sports
                                                                        activities. Students
                                                                        thrive in a dynamic
                                                                        atmosphere that nurtures
                                                                        leadership and teamwork.
                                                                        Known as the top
                                                                        <strong>private
                                                                            university in
                                                                            Assam</strong>, we
                                                                        offer platforms for
                                                                        students to explore
                                                                        their
                                                                        interests beyond the
                                                                        classroom. With a
                                                                        reputation as the
                                                                        <strong>best private
                                                                            university in
                                                                            Assam</strong>, our
                                                                        inclusive environment
                                                                        supports both academic
                                                                        growth and personal
                                                                        development for those
                                                                        studying at the
                                                                        <strong>Best University
                                                                            in Guwahati</strong>
                                                                        or the <strong>Best
                                                                            Management College
                                                                            in
                                                                            Guwahati</strong>.
                                                                    </p>
                                                                </div>

                                                            </div>

                                                            <!-- right -->
                                                            <div class="right-content">
                                                                <div class="rounded">
                                                                    <div class="kd-price-4-content">
                                                                        <div id="carouselExampleControls" class="carousel slide"
                                                                            data-bs-ride="carousel">
                                                                            <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                                                                                    <a href="department-store"><img
                                                                                            src="https://media.rgu.ac/index/1.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="infrastructure"><img
                                                                                            src="https://media.rgu.ac/index/5.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="games&sports">
                                                                                        <img src="https://media.rgu.ac/index/7.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="clubs"><img
                                                                                            src="https://media.rgu.ac/index/4.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="hostel-life">
                                                                                        <img src="https://media.rgu.ac/index/3.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="Student_Affairs">
                                                                                        <img src="https://media.rgu.ac/index/6.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                                <div class="carousel-item">
                                                                                    <a href="royal-fests"><img
                                                                                            src="https://media.rgu.ac/index/2.svg"
                                                                                            class="d-block rounded"
                                                                                            style="width: 100%;" alt="..."></a>
                                                                                </div>
                                                                            </div>
                                                                            <button class="carousel-control-prev" type="button"
                                                                                data-bs-target="#carouselExampleControls"
                                                                                data-bs-slide="prev">
                                                                                <span class="carousel-control-prev-icon"
                                                                                    aria-hidden="true"></span>
                                                                                <span class="visually-hidden">Previous</span>
                                                                            </button>
                                                                            <button class="carousel-control-next" type="button"
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
                                                                    <p>The Assam Royal Global
                                                                        University residence
                                                                        halls
                                                                        aim at
                                                                        enhancing the
                                                                        educational experience
                                                                        of students
                                                                        by
                                                                        providing all the
                                                                        comforts and
                                                                        conveniences they need
                                                                        to succeed.
                                                                        Beautifully situated in
                                                                        the midst of an
                                                                        eco-friendly
                                                                        and green campus,
                                                                        the separate in-house
                                                                        hostels for boys and
                                                                        girls
                                                                        are
                                                                        equipped with adequate
                                                                        facilities for holistic
                                                                        mental and physical
                                                                        growth. The hostel
                                                                        environment will help
                                                                        each
                                                                        boarder get the most out
                                                                        of their time during
                                                                        the
                                                                        period of stay. Close
                                                                        proximity
                                                                        of the hostels to the
                                                                        academic buildings
                                                                        facilitates
                                                                        frequent interactions
                                                                        between studentsand the
                                                                        faculties even during
                                                                        periods of vacation and
                                                                        on holidays.</p>
                                                                </div>
                                                                <div class="">
                                                                    <a href="hostel-life" rel="nofollow" aria-label="name"
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
                                                                        src="https://media.rgu.ac/index/residence.jpg" alt="">

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
                                                                    <p>There are multiple sport
                                                                        facilities to keep our
                                                                        students engaged and
                                                                        physically fit. Our
                                                                        campus
                                                                        has
                                                                        outdoor game
                                                                        facilities like Cricket,
                                                                        Football, Basketball,
                                                                        tennis, baseball,
                                                                        athletics and so on. Its
                                                                        international standard
                                                                        indoor
                                                                        sports complex “The
                                                                        Cube” offers a variety
                                                                        of
                                                                        indoor
                                                                        games including
                                                                        badminton courts,
                                                                        squash,
                                                                        billiards,
                                                                        and table
                                                                        tennis. Fitness
                                                                        conscious students can
                                                                        go for a
                                                                        jog
                                                                        around the scenic
                                                                        university campus or
                                                                        work out
                                                                        at
                                                                        the well-equipped
                                                                        gymnasium available both
                                                                        at the Boys and Girls
                                                                        hostel. The Gymnasium is
                                                                        equipped with various
                                                                        equipment like
                                                                        treadmills,
                                                                        dumbbells & plates,
                                                                        weights, shoulder press,
                                                                        leg-pull, leg extension,
                                                                        incline shoulder,
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
                                                                        src="https://media.rgu.ac/index/sports.jpg" alt="">

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
                                                                    <p>A sensational
                                                                        rejuvenation and beauty
                                                                        experience.
                                                                        Kurls and Spykes,
                                                                        Guwahati, is a wellness
                                                                        and
                                                                        beauty
                                                                        lounge for both
                                                                        men and women. It offers
                                                                        an unmatched array of
                                                                        services designed to
                                                                        renew, refresh and
                                                                        replenish
                                                                        one’s soul. As a
                                                                        leading hair studio,
                                                                        Kurls and Spykes offer
                                                                        warm
                                                                        hospitality, an inviting
                                                                        atmosphere and
                                                                        top-notch
                                                                        services to wide and
                                                                        varied client base which
                                                                        also includes business
                                                                        and
                                                                        leisure travellers. It
                                                                        offers non exhaustive
                                                                        range
                                                                        of services
                                                                        including a host of hair
                                                                        services such as
                                                                        haircut,
                                                                        hair colour, creative
                                                                        makeover, keratin and
                                                                        bridal
                                                                        makeup services
                                                                        using some
                                                                        internationally renowned
                                                                        brands.</p>
                                                                </div>

                                                                <div class="">
                                                                    <a href="salon" rel="nofollow" aria-label="name"
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
                                                                        src="https://media.rgu.ac/index/amenities.jpg" alt="">

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
                                        data-id="9b5574a" data-element_type="widget" data-widget_type="go-s-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="prthalign">
                                                <!-- <h6 class="kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub"
                                                                                        style="font-family:Georgia, 'Times New Roman', Times, serif !important; font-size: 22px;">
                                                                                            <img style="width: 40x; height: 40px;" src="assets/img/cap.svg" alt="">

                                                                                            RGU Programmes
                                                                                        </h6> -->
                                                <h1 class="headd1 pb-4" style="color: #27467A; font-size: 50px; font-weight: 800;">
                                                    Explore Our
                                                    <span style="font-weight: 800; color: #EF991F;">Courses</span>
                                                </h1>
                                                <p class="para1 text-center text-dark">At The Assam Royal Global University, we
                                                    offer a diverse range of academic programs designed to shape future leaders
                                                    and
                                                    innovators. Recognized as the Best University in Assam, RGU is committed to
                                                    academic excellence across undergraduate,
                                                    postgraduate, and doctoral levels. As a leading university in Northeast
                                                    Assam, we blend global standards with regional
                                                    values to deliver impactful education.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
                                        data-id="cbc3c3f" data-element_type="widget" data-widget_type="go-course-item.default">
                                        <div class="elementor-widget-container">
                                            <div class="row txaa-slide-down-1">

                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="doctoral-programme">
                                                        <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img fetchpriority="high" decoding="async" width="357" height="220"
                                                                    src="https://media.rgu.ac/index/c6.svg"
                                                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="programs">
                                                        <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img decoding="async" width="357" height="220"
                                                                    src="https://media.rgu.ac/index/c7.svg"
                                                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                    <a href="programs">
                                                        <div class="kd-course-2-card" style="border: solid 2px rgb(225, 225, 225);">
                                                            <div class="main-img fix img-cover">
                                                                <img decoding="async" width="357" height="220"
                                                                    src="https://media.rgu.ac/index/c8.svg"
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
                    style="background-image: url('https://media.rgu.ac/index/lab-new1.png'); background-size: cover;">
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
                                        <div class="col-lg-8 text-center" style="overflow: hidden; padding: 52px 0px 0px 0px;">
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
                                                                                src="https://media.rgu.ac/index/computer1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                                                            <span class="item-student kd-heading-1">34,000
                                                                                                                                students</span> -->
                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-computer" aria-label="name">Computer
                                                                                    Lab</a>
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
                                                                                src="https://media.rgu.ac/index/electric1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                                                            <span class="item-student kd-heading-1">34,000
                                                                                                                                students</span> -->

                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
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
                                                                                src="https://media.rgu.ac/index/language1.jpg"
                                                                                alt="List">

                                                                            <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                                                            <span class="item-student kd-heading-1">34,000 -->
                                                                            students</span>

                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-language-lab"
                                                                                    aria-label="name">Language Lab</a>
                                                                            </h4>
                                                                            <a href="lab-language-lab" aria-label="name"
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
                                                                                src="https://media.rgu.ac/index/physicalchem1.jpg"
                                                                                alt="List">
                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-chemistry" aria-label="name">Chemistry
                                                                                    Lab</a>
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
                                                                                src="https://media.rgu.ac/index/physics1.jpg"
                                                                                alt="List">



                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-physics" aria-label="name">Physics
                                                                                    Lab</a>
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
                                                                                src="https://media.rgu.ac/index/architecture1.jpg"
                                                                                alt="List">
                                                                        </div>

                                                                        <div class="card-content">
                                                                            <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                                <a href="lab-architecture"
                                                                                    aria-label="name">Architecture
                                                                                    Lab</a>
                                                                            </h4>
                                                                            <a href="lab-architecture" aria-label="name"
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
                                                    data-id="de83d2a" data-element_type="widget" data-widget_type="ft-btn.default">
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
                {{-- <section style="padding: 50px 0px 0px 0px; background-color: #13223b;"
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
                                                <img decoding="async" class="rounded" style="height: 600px !important;"
                                                    src="mobile-assets/index/rgu-advantages.png" alt="">
                                            </div>
                                            <div class="kd-about-4-img-2 fix img-cover txxa-add-class">
                                                <img decoding="async" style="height: 600px !important;"
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
                                            <h1 style="font-weight: 700;" class="mobile-headd1 text-light">RGU Advantages
                                            </h1>
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
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b748f"
                                                        aria-expanded="false" aria-controls="collapse449027-c4b748f">
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
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-d109252"
                                                        aria-expanded="false" aria-controls="collapse449027-d109252">
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
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7489"
                                                        aria-expanded="false" aria-controls="collapse449027-c4b748f">
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
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7486"
                                                        aria-expanded="false" aria-controls="collapse449027-c4b748f">
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
                                                    <button class="item-title kd-heading-2 kd-font-700 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse449027-c4b7485"
                                                        aria-expanded="false" aria-controls="collapse449027-c4b748f">
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
                </section> --}}

                <img src="https://media.rgu.ac/sports-image/index-sports.PNG" alt="" />
                <!-- new advantage end-->

                <!--Innovation & Publication end-->

                <!--Footprint-->
                <img src="footprint.png" alt="">
                <!-- footprint end  -->

                <!--Testimonial-->
                <div style="background-image: url(https://media.rgu.ac/index/s2-bg-img-1.webp);"
                    class="pt-5 elementor-element elementor-element-41f1d73 elementor-widget elementor-widget-go-s-heading"
                    data-id="41f1d73" data-element_type="widget" data-widget_type="go-s-heading.default">
                    <div class="elementor-widget-container" style="padding-left: 50px;">
                        <div class="prthalign text-center">
                            <h6 class=" kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub headd3">
                                <img style="width: 40x; height: 40px;" src="https://media.rgu.ac/index/cap.svg" alt="">
                                RGU Testimonials
                            </h6>
                            <h1 style="font-weight: 700;" class="elementor-gt-heading text-dark kd-title-ani kd-split-text headd1">
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
