@extends('frontend.new-master')
@section('title', 'The Assam Royal Global University | Best Private University in Assam, India')
@section('meta_description',
    'Discover Royal Global University, the best private university in Assam offering
    world-class education, top-ranked faculty, modern infrastructure & 50+ UG & PG programs.')
@section('meta_keywords', 'Best University in Assam')
@section('content')
    <section class="hero">
        <div class="hero-poster"></div>

        <video autoplay muted loop playsinline preload="auto" class="hero-video" id="heroVideo"
            poster="/new-web/assets/index/hero/hero-thumbnail.png">
            <source src="https://media.rgu.ac/head-video/v-2.mp4" type="video/mp4">
        </video>

        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Empowering Knowledge<br>Inspiring Futures</h1>
            <div class="tagline">EXCELLENCE IN EDUCATION, RESEARCH & INNOVATION</div><br>
            <a href="https://rgu.ac/admission-programs-fees-structure" class="explore-btn">
                EXPLORE PROGRAMS <span>↗</span>
            </a>
        </div>
    </section>

    <section class="about-rgu">
        <picture>
            <!-- Mobile Image -->
            <source media="(max-width:768px)" srcset="/new-web/assets/index/about/About-mob.png">

            <!-- Desktop Image -->
            <img src="/new-web/assets/index/about/about-web.png" alt="Trailblazer"
                style="width:100%; height:auto;">
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
                        <a href="/media-corner">View all News +</a>
                    </div>

                </div>

            </div>

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

    <section class="int-news-section">
        <div class="int-news-container">

            <h2 class="int-news-main-title">Global Connect</h2>

            <!-- ================= SLIDER ================= -->

            <h3 class="int-news-title">International Highlights</h3>

            <div class="int-news-slider">
                <div class="int-slider-track">

                    <!-- SLIDE 1 -->
                    <div class="int-slide">

                        <div class="int-card">

                            <div class="int-card-slider">
                                <img src="/new-web/assets/img/index/international-news/news1/pic1.jpg" class="active">
                                <img src="/new-web/assets/img/index/international-news/news1/pic2.jpg">
                                <img src="/new-web/assets/img/index/international-news/news1/pic3.jpg">
                                <img src="/new-web/assets/img/index/international-news/news1/pic4.jpg">
                            </div>

                            <div class="int-card-content">
                                <h4>Report on Visit to INTI International University, Malaysia</h4>
                                <p>The 7-day international immersion program from 28th July, 2025 to 3rd August 2025 was
                                    organized by INTI International University, Malaysia, commenced on a vibrant note
                                    with a warm welcome extended to the students of the Royal School of Commerce, The
                                    Assam Royal Global University. Professor Dr. Ashokan Vasudevan, Director of the
                                    International Relations and Collaboration Centre (IRCC), officially inaugurated the
                                    program, emphasizing the significance of international collaboration and sustainable
                                    business innovation. </p>

                            </div>

                        </div>

                        <div class="int-card">

                            <div class="int-card-slider">
                                <img src="/new-web/assets/img/index/international-news/news2/1.jpg" class="active">
                                <img src="/new-web/assets/img/index/international-news/news2/2.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/3.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/4.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/5.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/6.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/7.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/8.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/9.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/10.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/11.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/12.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/13.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/14.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/15.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/16.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/17.jpg">
                                <img src="/new-web/assets/img/index/international-news/news2/18.jpg">
                            </div>

                            <div class="int-card-content">
                                <h4>Report on Visit to Krirk University, Bangkok, Thailand</h4>
                                <p>A curated team of students from the Royal School of Business, The Assam Royal Global
                                    University led by Dr. Arpee Saikia, Associate Professor, HOD and Mr. Nibir Pratim
                                    Choudhury,
                                    Assistant Professor, India, went on an Academic exchange program at Krirk
                                    University,
                                    Bangkok from the 23rd – 25th June 2025. The team from the Assam Royal Global
                                    University
                                    was welcomed by the officials from the Office of International Affairs and the
                                    British
                                    International College, Krirk University.</p>

                            </div>

                        </div>

                    </div>



                    <!-- SLIDE 2 -->
                    <!-- <div class="int-slide">

                            <div class="int-card">
                                <img src="assets/img/index/international-news/news3/1.jpg">
                                <div class="int-card-content">
                                    <h4>UK Collaboration</h4>
                                    <p>International research tie-up</p>
                                    <a href="#" class="int-readmore">Read More →</a>
                                </div>
                            </div>

                            <div class="int-card">
                                <img src="assets/img/index/international-news/news4/1.jpg">
                                <div class="int-card-content">
                                    <h4>Global Conference</h4>
                                    <p>Student participation abroad</p>
                                    <a href="#" class="int-readmore">Read More →</a>
                                </div>
                            </div>

                        </div> -->

                </div>
            </div>

            <!-- ================= MARQUEE ================= -->

            <h3 class="int-news-title" style="margin-top:60px;">
                International Associations
            </h3>

            <div class="int-marquee">
                <div class="int-marquee-track">

                    <img src="/new-web/assets/img/index/international-news/association-logos/1.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/2.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/3.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/4.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/5.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/6.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/7.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/8.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/9.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/10.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/11.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/12.jpg">


                    <!-- duplicate -->
                    <img src="/new-web/assets/img/index/international-news/association-logos/1.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/2.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/3.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/4.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/5.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/6.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/7.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/8.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/9.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/10.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/11.jpg">
                    <img src="/new-web/assets/img/index/international-news/association-logos/12.jpg">

                </div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll(".int-card-slider").forEach(slider => {

                const images = slider.querySelectorAll("img");

                // Skip if only one image
                if (images.length <= 1) return;

                let index = 0;
                let interval;

                // Activate first image
                images[index].classList.add("active");

                function startSlider() {
                    interval = setInterval(() => {

                        images[index].classList.remove("active");

                        index = (index + 1) % images.length;

                        images[index].classList.add("active");

                    }, 4000); // sync with CSS animation
                }

                function stopSlider() {
                    clearInterval(interval);
                }

                // Start initially
                startSlider();

                // Pause on hover (desktop UX)
                slider.addEventListener("mouseenter", stopSlider);
                slider.addEventListener("mouseleave", startSlider);

            });

        });
    </script>

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


        </div>

    </section>

    <section class="rgu-legacy-section">
        <div class="rgu-legacy-container">
            <h2 class="rgu-legacy-title">A Legacy of Excellence, a Future of Possibility</h2>

            <div class="legacy-desktop">
                <div class="rgu-legacy-grid">

                    <a href="https://rgu.ac/infrastructure" class="rgu-legacy-card">
                        <div class="rgu-legacy-card-img">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy1.jpg"
                                alt="RGU Campus">
                        </div>
                        <div class="rgu-legacy-card-content">
                            <h3>The Best University in Assam</h3>
                            <p>Empowering future leaders with academic excellence, industry collaboration and real-world
                                skills.</p>
                        </div>
                    </a>

                    <a href="/schools-rgu" class="rgu-legacy-card">
                        <div class="rgu-legacy-card-img">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy2.jpg"
                                alt="RGU Classroom">
                        </div>
                        <div class="rgu-legacy-card-content">
                            <h3>Discover Your Potential at RGU</h3>
                            <p>Where diverse programs, modern infrastructure, and dedicated faculty guide your success
                                journey.</p>
                        </div>
                    </a>

                    <a href="https://rgu.ac/admission-programs-fees-structure" class="rgu-legacy-card">
                        <div class="rgu-legacy-card-img">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy3.jpg"
                                alt="RGU Students">
                        </div>
                        <div class="rgu-legacy-card-content">
                            <h3>Educating with Purpose, Inspiring with Vision</h3>
                            <p>A transformative learning experience designed to shape confident, creative and socially
                                responsible graduates.</p>
                        </div>
                    </a>

                </div>
            </div>

            <div class="legacy-mobile">
                <div class="legacy-carousel-wrapper">
                    <div class="legacy-carousel-track" id="legacyTrack">

                        <div class="legacy-slide">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy1.jpg"
                                alt="RGU Campus">
                            <div class="legacy-slide-content">
                                <h3>The Best University in Assam</h3>
                                <p>Empowering future leaders with academic excellence, industry collaboration, and
                                    real-world skills.</p>
                            </div>
                        </div>

                        <div class="legacy-slide">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy2.jpg"
                                alt="RGU Library">
                            <div class="legacy-slide-content">
                                <h3>State-of-the-Art Facilities</h3>
                                <p>Experience world-class infrastructure designed to foster innovation, research, and
                                    holistic development.</p>
                            </div>
                        </div>

                        <div class="legacy-slide">
                            <img src="/new-web/assets/index/lagecy/mobile-lagecy/mobile-lagecy3.jpg"
                                alt="RGU Students">
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
                            data-img="/new-web/assets/index/labs/biochem.png"
                            data-title="Doctoral Programme" data-link="https://rgu.ac/doctoral-programme">
                            <span>Doctoral Programme</span>
                            <i class="bi bi-arrow-up-right"></i>
                        </li>
                        <li class="rgu-acad-item fade-in-up" style="--delay: 0.2s"
                            data-img="/new-web/assets/index/labs/bioscience-research-lab.png"
                            data-title="Postgraduate Programmes" data-link="https://rgu.ac/programs">
                            <span>Postgraduate Programmes</span>
                        </li>
                        <li class="rgu-acad-item fade-in-up" style="--delay: 0.3s"
                            data-img="/new-web/assets/index/labs/biotech-lab.png"
                            data-title="Under Graduate Programmes" data-link="https://rgu.ac/programs">
                            <span>Under Graduate Programmes</span>
                        </li>
                    </ul>
                </div>

                <div class="rgu-acad-right fade-in-up" style="--delay: 0.4s">
                    <a href="https://rgu.ac/doctoral-programme" class="rgu-acad-card" id="acadCard">
                        <div class="rgu-acad-img-wrapper">
                            <img id="acadImage" src="/new-web/assets/index/labs/biochem.png"
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

    <section class="rgu-lab-section">

        <div class="rgu-lab-container">

            <!-- TITLE -->
            <h2 class="rgu-lab-title">Explore Labs, Workshop & Studio</h2>

            <div class="rgu-lab-row">


                <!-- RIGHT SIDE (SLIDER) -->
                <div class="rgu-lab-right">


                    <div class="rgu-lab-slider">

                        <div class="rgu-lab-track" id="rdTrack">

                            <!-- JS will inject cards here -->

                        </div>

                    </div>


                    <!-- CONTROLS -->
                    <div class="rgu-lab-controls">

                        <!-- LEFT: ARROWS -->
                        <div class="rgu-lab-arrows">
                            <button class="rgu-lab-arrow rgu-lab-prev">
                                <i class="fa fa-chevron-left"></i>
                            </button>

                            <button class="rgu-lab-arrow rgu-lab-next">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- RIGHT: EXPLORE ALL -->
                        <div class="rgu-lab-explore">
                            <a href="https://rgu.ac/laboratories" class="rgu-lab-explore-btn">
                                Explore All
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="rgu-research-section">

        <div class="rgu-research-container">

            <!-- TITLE -->
            <h2 class="rgu-research-title">Research & Development</h2>

            <p class="rgu-research-subtitle">
                Discover cutting-edge research, innovation, and interdisciplinary exploration shaping the future across
                domains.
            </p>

            <!-- TOP 2 IMAGES -->
            <div class="rgu-research-top">
                <div class="rgu-research-img">
                    <img src="/new-web/assets/img/index/research/new-research-facts.svg" alt="">
                </div>
                <div class="rgu-research-img">
                    <img src="mobile-assets/research-development-new/ecosystem/center.png" alt="">
                </div>
            </div>

            <h4 class="rgu-research-sub-title">Few High-Impact Scopus Q1–Q2 Publications (2024–2025)</h4>
            <!-- INFINITE SCROLL -->
            <div class="rgu-research-slider">
                <div class="rgu-research-track">

                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s5.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s1.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s2.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s3.jpg"
                        class="rgu-research-item">

                    <!-- duplicate for infinite effect -->
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s5.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s1.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s2.jpg"
                        class="rgu-research-item">
                    <img src="https://rgu.ac/mobile-assets/research-development-new/new-scopus/s3.jpg"
                        class="rgu-research-item">

                </div>
            </div>

        </div>

        <!-- LIGHTBOX -->
        <div class="rgu-lightbox" id="researchLightbox">
            <span class="rgu-lightbox-close">&times;</span>
            <img id="lightboxImg">
        </div>

    </section>

    <section class="curve-section">
        <a href="https://rgu.ac/contact">
            <picture>
                <!-- Mobile Image -->
                <source media="(max-width:768px)" srcset="/new-web/assets/index/idea1-mobile.svg">

                <!-- Desktop Image -->
                <img src="/new-web/assets/index/idea1.svg" alt=""
                    style="width:100%; height:auto;">
            </picture>
        </a>
    </section>

    <section class="rgu-maestro-section">
        <div class="rgu-maestro-container">
            <h2 class="rgu-maestro-title">Maestros at RGU Campus Who Have Inspired Generations</h2>
            <div class="rgu-maestro-slider">
                <div class="rgu-maestro-track">
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/1.png">
                        <h3>Dr APJ Abdul Kalam</h3>
                        <p>The Missile Man Of India <br> Former President Of India</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/2.png">
                        <h3>Sri Jagdeep Dhankhar</h3>
                        <p>14th Vice President of India</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/3.png">
                        <h3>Sri Om Birla</h3>
                        <p>18th Speaker of the Lok Sabha</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/4.png">
                        <h3>Sri Nitin Gadkari</h3>
                        <p>40th Union Minister of Road Transport and Highways</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/5.png">
                        <h3>Sri Piyush Goyal</h3>
                        <p>Honourable Union Minister of Commerce & Industry</p>
                    </div>
                    <div class="rgu-maestro-card">
                        <img src="/new-web/assets/index/footprints/6.png">
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
            <source media="(max-width:768px)"
                srcset="/new-web/assets/index/trail-blazer/mobile-trailblazer.png">

            <!-- Desktop Image -->
            <img src="/new-web/assets/index/trail-blazer/1.jpeg" alt="Trailblazer"
                style="width:100%; height:auto;">
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



                </div>

            </div>

        </div>

    </section>

    {{-- All array script --}}

    {{-- whats next at RGU --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const events = [
                // {
                //     day: "10<sup>th</sup>",
                //     month: "Mar 2026",
                //     img: "https://rgu.ac/mobile-assets/conference/bg.jpeg",
                //     title: "ICSSR Project Positions at The Assam Royal Global University",
                //     sub: "Project Title: Negotiating Power and Gendered Citizenship: A Sociological Analysis of Political Participation and Grassroots Leadership among SHG Women in Panchayati Raj Institutions in Selected Districts of Lower Assam.",
                //     link: "https://rgu.ac/icssr-project-positions-at-rgu",
                // },
                // {
                //     day: "16<sup>th</sup> - 20<sup>th</sup>",
                //     month: "March 2026",
                //     img: "https://rgu.ac/five-days-conference/hero-img.jpg",
                //     title: "Five-Day International Workshop",
                //     sub: "Developing Emotional Intelligence, Academic Research and Teaching",
                //     link: "https://rgu.ac/developing-emotional-intelligence-academic-research-and-teaching",
                // },
                {
                    day: "13<sup>th</sup> - 14<sup>th</sup>",
                    month: "Nov 2026",
                    img: "https://rgu.ac/mobile-assets/conference/bg2.png",
                    title: "The International Conference on Emerging Trends and Innovations in Engineering and Data Science (ICETIEDS–2026)",
                    sub: "Flagship global event hosted by the Royal School of Engineering and Technology, The Assam Royal Global University",
                    link: "https://rgu.ac/ICETIEDS%E2%80%932026",
                },
            ];

            const desktopContainer = document.getElementById("desktopEvents");
            const mobileTabs = document.getElementById("mobileTabs");
            const mobileCard = document.getElementById("mobileEventCard");



            /* ================= DESKTOP ================= */

            events.forEach((e, i) => {

                const card = document.createElement("a");

                card.className = "rgu-next-card";
                if (i === 0) card.classList.add("is-active");

                card.href = e.link;

                card.innerHTML = `
        <div class="rgu-next-bg" style="background-image:url('${e.img}')"></div>

        <div class="rgu-next-overlay"></div>

        <div class="rgu-next-orange">
            <h3>${e.day}</h3>
            <p>${e.month}</p>
        </div>

        <div class="rgu-next-content">
            <h4>${e.title}</h4>
            <div class="rgu-next-line"></div>
            <span>${e.sub}</span>
        </div>

        <div class="rgu-next-small-date">
            <span>${e.day}</span>
            <p>${e.month}</p>
        </div>
        `;

                desktopContainer.appendChild(card);

            });


            /* DESKTOP HOVER */

            const desktopCards = document.querySelectorAll(".rgu-next-card");

            desktopCards.forEach(card => {
                card.addEventListener("mouseenter", function() {
                    desktopCards.forEach(c => c.classList.remove("is-active"));
                    this.classList.add("is-active");
                });
            });



            /* ================= MOBILE ================= */

            events.forEach((e, i) => {

                const tab = document.createElement("div");

                tab.className = "rgu-next-tab";
                if (i === 0) tab.classList.add("active");

                tab.dataset.event = i;

                tab.innerHTML = `
        <span>${e.day}</span>
        <small>${e.month}</small>
        `;

                mobileTabs.appendChild(tab);

            });


            /* INITIAL MOBILE CARD */

            mobileCard.style.backgroundImage = `url(${events[0].img})`;

            mobileCard.innerHTML = `
        <a href="${events[0].link}" style="text-decoration:none;color:white;">
            <div class="rgu-next-event-content">
                <h4>${events[0].title}</h4>
                <div class="rgu-next-event-line"></div>
                <span>${events[0].sub}</span>
            </div>
        </a>
        `;



            /* MOBILE TAB SWITCH */

            document.querySelectorAll(".rgu-next-tab").forEach(tab => {

                tab.onclick = () => {

                    document.querySelectorAll(".rgu-next-tab").forEach(t => t.classList.remove(
                        "active"));

                    tab.classList.add("active");

                    const e = events[tab.dataset.event];

                    mobileCard.style.backgroundImage = `url(${e.img})`;

                    mobileCard.innerHTML = `
<a href="${e.link}" style="text-decoration:none;color:white;">
<div class="rgu-next-event-content">
<h4>${e.title}</h4>
<div class="rgu-next-event-line"></div>
<span>${e.sub}</span>
</div>
</a>
`;

                };

            });

        });

        /* ================= 5. WHAT'S NEXT EVENTS TABBING ================= */
        const eventCards = document.querySelectorAll(".rgu-next-card");
        eventCards.forEach(card => {
            card.addEventListener("mouseenter", function() {
                eventCards.forEach(c => c.classList.remove("is-active"));
                this.classList.add("is-active");
            });
        });
    </script>


    <!-- Popup Overlay -->
    @include('frontend/components/new-web/popup')
@endsection
