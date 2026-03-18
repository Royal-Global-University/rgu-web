@extends('frontend.new-master')
@section('title', 'The Assam Royal Global University | Best Private University in Assam, India')
@section('meta_description', 'Discover Royal Global University, the best private university in Assam offering
    world-class education, top-ranked faculty, modern infrastructure & 50+ UG & PG programs.')
@section('meta_keywords', 'Best University in Assam')
@section('content')

    <section class="hero">
        <div class="hero-poster"></div>

        <video autoplay muted loop playsinline preload="auto" class="hero-video" id="heroVideo"
            poster="new-web/assets/img/index/hero/hero-thumbnail.png">
            <source src="https://media.rgu.ac/head-video/v-2.mp4" type="video/mp4">
        </video>

        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Empowering Knowledge.<br>Inspiring Futures</h1>
            <div class="tagline">EXCELLENCE IN EDUCATION, RESEARCH & INNOVATION</div><br>
            <a href="https://rgu.ac/admission-programs-fees-structure" class="explore-btn">
                EXPLORE PROGRAMS <span>↗️</span>
            </a>
        </div>
    </section>

    <section class="about-rgu">
        <picture>
            <!-- Mobile Image -->
            <source media="(max-width:768px)" srcset="new-web/assets/img/index/about/About-mob.png">

            <!-- Desktop Image -->
            <img src="new-web/assets/img/index/about/about-web.png" alt="Trailblazer" style="width:100%; height:auto;">
        </picture>
    </section>

    <section class="rgu-news-section">
        <div class="rgu-news-container">

            <div class="rgu-news-feature">
                <div class="rgu-news-left animate-fade-up">
                    <h2 class="rgu-news-title">News and Media</h2>
                    <div id="dynamicContentWrapper" class="rgu-news-dynamic-content swap-transition">
                        <div id="newsDate" class="rgu-news-date"></div>
                        <h3 id="newsTitle" class="rgu-news-headline"></h3>
                        <p id="newsDesc" class="rgu-news-desc"></p>
                        <a id="newsLink" href="https://rgu.ac/media-corner" class="rgu-news-read">READ MORE +</a>
                    </div>

                </div>

                <div class="rgu-news-right animate-slide-right">
                    <div class="rgu-news-img-wrapper">
                        <img id="newsImage" class="swap-transition" src="" alt="Featured News Image">
                    </div>
                </div>
            </div>


            <div class="rgu-news-cards-wrapper animate-fade-up" style="animation-delay: 0.4s;">
                <div id="newsCardsContainer" class="rgu-news-cards">
                </div>
                <div class="rgu-news-controls">

                    <button class="rgu-news-btn rgu-news-prev"><i class="bi bi-arrow-left"></i></button>
                    <button class="rgu-news-btn rgu-news-next"><i class="bi bi-arrow-right"></i></button>

                    <div class="rgu-news-viewall">
                        <a href="https://rgu.ac/media-corner">View all News +</a>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="rgu-ann-section">
        <div class="rgu-ann-container">
            <h2 class="rgu-ann-title">Important Announcements</h2>
            <div class="rgu-ann-grid">

                <div class="rgu-ann-card active" style="--anim-delay: 0.2s;">
                    <div class="rgu-ann-icon-wrapper"><i class="bi bi-megaphone"></i></div>
                    <a style="text-decoration: none;" href="https://admissions.rgu.ac/">
                        <p>Ph.D. Admission Open (July 2026 - 2027)</p>
                    </a>
                </div>

                <div class="rgu-ann-card " style="--anim-delay: 0.2s;">
                    <div class="rgu-ann-icon-wrapper"><i class="bi bi-megaphone"></i></div>
                    <a id="phdTrackerLink" style="text-decoration: none;" href="javascript:void(0)">
                        <p>Track the status of your Ph.D. thesis</p>
                    </a>
                </div>

            </div>
            <!-- <div class="rgu-ann-viewall">
                    <a href="#">View All <i class="bi bi-arrow-right"></i></a>
                </div> -->
        </div>
    </section>

    <!-- phd modal  -->
    <div id="phdModal" class="phd-modal-overlay">
        <div class="phd-modal-box">
            <h2>TRACK THE STATUS OF YOUR PH.D. THESIS</h2>

            <div class="phd-modal-options">
                <a href="https://rgu.renocampus.com/auth/signin?callbackUrl=https%3A%2F%2Frgu.renocampus.com"
                    class="phd-option-card">
                    <i class="bi bi-person-video3"></i>
                    <p>Login as Guide</p>
                </a>

                <a href="https://rgu.renocampus.com/student" class="phd-option-card">
                    <i class="bi bi-mortarboard"></i>
                    <p>Login as Scholar</p>
                </a>
            </div>

            <span id="phdCloseModal" class="phd-modal-close">Close</span>
        </div>
    </div>

    <section class="rgu-eboard-section">
        <div class="rgu-eboard-container">
            <h2 class="rgu-eboard-title">RGU E-Board</h2>

            <div class="rgu-eboard-slider" id="eboardSlider">
                <div class="rgu-eboard-track" id="eboardTrack"></div>
            </div>

            <div class="rgu-eboard-dots" id="eboardDots"></div>
        </div>
    </section>

    <section class="rgu-next-events">

        <div class="rgu-next-container">

            <h2 class="rgu-next-title">
                What’s Next At Royal Global University
            </h2>


            <!-- ================= MOBILE EVENTS ================= -->

            <div class="rgu-next-mobile">

                <!-- Mobile Date Tabs (Generated by JS) -->
                <div class="rgu-next-tabs" id="mobileTabs"></div>


                <!-- Mobile Event Card -->
                <div class="rgu-next-event-card" id="mobileEventCard">

                    <div class="rgu-next-event-content">

                        <h4></h4>

                        <div class="rgu-next-event-line"></div>

                        <span></span>

                    </div>

                </div>

            </div>



            <!-- ================= DESKTOP EVENTS ================= -->

            <div class="rgu-next-row" id="desktopEvents">

                <!-- JS will inject desktop event cards here -->

            </div>

            <!-- <div class="rgu-next-viewall">
                    <a href="#">DISCOVER ALL UPCOMING EVENTS +</a>
                </div> -->

        </div>

    </section>

    <section class="rgu-legacy-section">
        <div class="rgu-legacy-container">
            <h2 class="rgu-legacy-title">A Legacy of Excellence, <br> a Future of Possibility</h2>

            <div class="legacy-desktop">
                <div class="rgu-legacy-image-wrap">
                    <img src="new-web/assets/img/index/lagecy/lagecy-images.svg" alt="RGU Campus">
                </div>
            </div>

            <div class="legacy-mobile">
                <div class="legacy-carousel-wrapper">
                    <div class="legacy-carousel-track" id="legacyTrack">

                        <div class="legacy-slide">
                            <img src="new-web/assets/img/index/lagecy/mobile-lagecy/mobile-lagecy1.jpg" alt="RGU Campus">
                            <div class="legacy-slide-content">
                                <h3>The Best University in Assam</h3>
                                <p>Empowering future leaders with academic excellence, industry collaboration, and
                                    real-world skills.</p>
                            </div>
                        </div>

                        <div class="legacy-slide">
                            <img src="new-web/assets/img/index/lagecy/mobile-lagecy/mobile-lagecy2.jpg" alt="RGU Library">
                            <div class="legacy-slide-content">
                                <h3>State-of-the-Art Facilities</h3>
                                <p>Experience world-class infrastructure designed to foster innovation, research, and
                                    holistic development.</p>
                            </div>
                        </div>

                        <div class="legacy-slide">
                            <img src="new-web/assets/img/index/lagecy/mobile-lagecy/mobile-lagecy3.jpg" alt="RGU Students">
                            <div class="legacy-slide-content">
                                <h3>Vibrant Campus Life</h3>
                                <p>Join a diverse community of learners and engage in countless clubs, sports, and
                                    cultural events.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="legacy-controls">
                    <button id="legacyPrev" class="legacy-btn prev"><i class="bi bi-arrow-left"></i></button>
                    <button id="legacyNext" class="legacy-btn next"><i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- academic  -->
    <section class="rgu-acad-section">
        <div class="rgu-acad-container">
            <div class="rgu-acad-grid">

                <div class="rgu-acad-left">
                    <h2 class="rgu-acad-title fade-in-up">
                        Academics & Programs
                    </h2>
                    <ul class="rgu-acad-list">
                        <li class="rgu-acad-item active fade-in-up" style="--delay: 0.1s"
                            data-img="https://www.rgu.ac/mobile-assets/laboratories/biochem.png"
                            data-title="Doctoral Programme" data-link="https://rgu.ac/doctoral-programme">
                            <span>Doctoral Programme</span>
                            <i class="bi bi-arrow-up-right"></i>
                        </li>
                        <li class="rgu-acad-item fade-in-up" style="--delay: 0.2s"
                            data-img="https://www.rgu.ac/mobile-assets/laboratories/bioscience.png"
                            data-title="Postgraduate Programmes" data-link="https://rgu.ac/programs">
                            <span>Postgraduate Programmes</span>
                        </li>
                        <li class="rgu-acad-item fade-in-up" style="--delay: 0.3s"
                            data-img="https://www.rgu.ac/mobile-assets/laboratories/biotech.png"
                            data-title="Under Graduate Programmes" data-link="https://rgu.ac/programs">
                            <span>Under Graduate Programmes</span>
                        </li>
                    </ul>
                </div>

                <div class="rgu-acad-right fade-in-up" style="--delay: 0.4s">
                    <a href="https://rgu.ac/doctoral-programme" class="rgu-acad-card" id="acadCard">
                        <div class="rgu-acad-img-wrapper">
                            <img id="acadImage" src="https://www.rgu.ac/mobile-assets/laboratories/biochem.png"
                                alt="Academics">
                        </div>
                        <div class="rgu-acad-overlay">
                            <h3 id="acadTitle">Doctoral Programme</h3>
                            <span class="discover-text">DISCOVER MORE <i class="bi bi-plus"></i></span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="rgu-rd-section">

        <div class="rgu-rd-container">

            <!-- TITLE -->
            <h2 class="rgu-rd-title">Research Insights & Innovation</h2>

            <p class="rgu-rd-subtitle">
                At Royal Global University, research and innovation form the backbone of academic excellence.
                Our scholars and faculty continually push boundaries to create impactful solutions for society.
            </p>


            <div class="rgu-rd-row">

                <!-- LEFT SIDE (GRAPHIC) -->
                <div class="rgu-rd-left">

                    <div class="rgu-rd-image">
                        <img src="new-web/assets/img/index/facts.svg" alt="Research Statistics">
                    </div>

                    <div style="margin-bottom: 20px;" class="rgu-next-viewall">
                        <a href="https://rgu.ac/laboratories">View all Labs +</a>
                    </div>

                </div>


                <!-- RIGHT SIDE (SLIDER) -->
                <div class="rgu-rd-right">


                    <div class="rgu-rd-slider">

                        <div class="rgu-rd-track" id="rdTrack">

                            <!-- JS will inject cards here -->

                        </div>

                    </div>


                    <!-- CONTROLS -->
                    <div class="rgu-rd-controls">

                        <button class="rgu-rd-arrow rgu-rd-prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>

                        <button class="rgu-rd-arrow rgu-rd-next">
                            <i class="fa fa-chevron-right"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="curve-section" style="background-color:#fff;">
        <a href="https://rgu.ac/contact">
            <picture>
                <!-- Mobile Image -->
                <source media="(max-width:768px)" srcset="new-web/assets/img/index/idea1-mobile.svg">

                <!-- Desktop Image -->
                <img src="new-web/assets/img/index/idea1.svg" alt="" style="width:100%; height:auto;">
            </picture>
        </a>
    </section>

    <section class="rgu-maestro-section">
        <div class="rgu-maestro-container">
            <h2 class="rgu-maestro-title">Maestros Who Have Inspired Generations</h2>
            <div class="rgu-maestro-slider">
                <div class="rgu-maestro-track">
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/1.jpg">
                        <h3>Dr APJ Abdul Kalam</h3>
                        <p>The Missile Man Of India <br> Former President Of India</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/2.jpg">
                        <h3>Sri. Jagdeep Dhankhar</h3>
                        <p>14th Vice President of India</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/3.jpg">
                        <h3>Sri. Om Birla</h3>
                        <p>18th Speaker of the Lok Sabha</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/4.jpg">
                        <h3>Sri Nitin Gadkari</h3>
                        <p>40th Union Minister of Road Transport and Highways</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/5.jpg">
                        <h3>Shri Piyush Goyal</h3>
                        <p>Honourable Union Minister of Commerce & Industry</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="new-web/assets/img/index/footprints/6.jpg">
                        <h3>Justice Mr. Ranjan Gogoi</h3>
                        <p>46th Chief Justice of India, Member of Parliament</p>
                    </div>
                </div>
            </div>
            <div class="rgu-maestro-controls">
                <button class="rgu-maestro-prev">←</button>
                <div class="rgu-maestro-progress">
                    <div class="rgu-maestro-bar"></div>
                </div>
                <button class="rgu-maestro-next">→</button>
                <a class="rgu-maestro-more" href="https://rgu.ac/footprints">DISCOVER MORE +</a>
            </div>
        </div>
    </section>

    <section class="trail-blazer">
        <picture>
            <!-- Mobile Image -->
            <source media="(max-width:768px)" srcset="new-web/assets/img/index/trail-blazer/mobile-trailblazer.png">

            <!-- Desktop Image -->
            <img src="new-web/assets/img/index/trail-blazer/1.jpeg" alt="Trailblazer" style="width:100%; height:auto;">
        </picture>
    </section>

    <section class="rgu-test-section">

        <div class="rgu-test-container">

            <!-- HEADER -->
            <div class="rgu-test-header">

                <div>
                    <h2 class="rgu-test-title">Testimonials</h2>
                    <p class="rgu-test-sub">Success Stories From The RGU Community</p>
                </div>

                <div class="rgu-test-controls">
                    <button class="rgu-test-prev">←</button>
                    <button class="rgu-test-next">→</button>
                </div>

            </div>


            <div class="rgu-test-grid">

                <!-- TABS -->
                <div class="rgu-test-tabs">
                    <button class="rgu-test-tab active" data-target="student">STUDENT</button>
                    <!-- <button class="rgu-test-tab" data-target="recruiter">RECRUITERS</button> -->
                </div>


                <!-- CONTENT -->
                <div class="rgu-test-content-area">

                    <!-- STUDENT -->
                    <div class="rgu-test-slider student active">
                        <div class="rgu-test-track"></div>
                    </div>

                    <!-- RECRUITER -->
                    <div class="rgu-test-slider recruiter">
                        <div class="rgu-test-track"></div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Popup Overlay -->
    @include('frontend/components/new-web/popup')
@endsection
