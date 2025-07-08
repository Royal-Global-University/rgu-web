@extends('frontend.master')
@push('styles')
    <!-- media corner css  -->
    <style>
        /* Desktop carousel styles */
        .carousel-desktop-wrapper {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            padding: 30px;
            display: block;
        }

        .carousel-desktop-item {
            flex: 0 0 33.3333%;
            box-sizing: border-box;
            text-align: center;
        }

        .carousel-desktop-img {
            height: 550px;
            border: 2px solid #333;
        }

        .carousel-desktop-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 15px;
            background: #27467A;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .carousel-desktop-prev,
        .carousel-desktop-next {
            position: absolute;
            top: 50%;
            background: #27467A;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            transform: translateY(-50%);
        }

        .carousel-desktop-prev {
            left: 10px;
        }

        .carousel-desktop-next {
            right: 10px;
        }

        /* Mobile carousel styles */
        .carousel-mobile-wrapper {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            padding: 30px;
            display: none;
        }

        .carousel-mobile-item {
            flex: 0 0 100%;
            box-sizing: border-box;
            text-align: center;
        }

        .carousel-mobile-img {
            height: 550px;
            border: 2px solid #333;
        }

        .carousel-mobile-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 15px;
            background: #27467A;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .carousel-mobile-prev,
        .carousel-mobile-next {
            position: absolute;
            top: 50%;
            background: #27467A;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            transform: translateY(-50%);
        }

        .carousel-mobile-prev {
            left: 10px;
        }

        .carousel-mobile-next {
            right: 10px;
        }

    </style>
    <!-- media corner css  -->
@endpush
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')

            <img src="mobile-assets/media-corner/media-corner-mob.png" alt="">


        </div>

        <div class="website">
            @include('frontend/components/aheader')

            <img src="mobile-assets/media-corner/media-corner-web.png" alt="">


        </div>

        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-lg-4 mt-4">
                    <a href="media-corner"> <button class="btn btn-block headd3 shadow"
                            style="background-color:#6c757d; color:white; height: 60px; width: 100%;">RGU News</button> </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="press-coverage"> <button class="btn btn-block headd3 shadow"
                            style="background-color:#264273; color:white; height: 60px; width: 100%;">Press
                            Coverage</button>
                    </a>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <a href=""> <button class="btn btn-block headd3 shadow"
                            style="background-color:#6c757d; color:white; height: 60px; width: 100%;">Video</button> </a>
                </div>
            </div>

        </div>
        <hr>

        <!-- Accordion Container -->
        <div class="container" style="padding: 30px 20px;">
            <div class="row" style="text-align: justify;">
                <div class="accordion" id="accordionExample">

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">July, 2025</h2>

                    <!-- Accordion 11 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                Zimbabwe Education Delegation Explores Collaboration with Royal Global University
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel11">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61560089875956/videos/2183680332131421/?mibextid=D5vuiz&rdid=2J1tfzbehmQWzZG2#"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/07/zimbabwe-education-delegation-explores-collaboration-with-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://eastmojo.com/free-digest/2025/07/07/zimbabwe-delegation-visits-rgu-to-explore-academic-partnership/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion11/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/from-harare-to-guwahati-zimbabwe-eyes-academic-revolution-with-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 12 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsTwelve" aria-expanded="false" aria-controls="collapsTwelve">
                                ‘Sugandhi Pokhilar Kobi’ Hiren Bhattacharyya Remembered at Royal Global University
                            </button>
                        </h2>
                        <div id="collapsTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel12">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theassamrising.com/assam/assamese-poet-hiren-bhattacharyya-remembered-at-rgu-1500592"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/04/sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.thereveal.co.in/2025/07/assamese-poet-hiren-bhattacharyya.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion12/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/07/Sugandhi-Pokhilar-Kobi-Hiren-Bhattacharyya-Remembered-at-RGU.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 6 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Week-long FDP on Indigenous Knowledge Systems held at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel6">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion6/1.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion6/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/rgu-hosts-intensive-week-long-faculty-programme-on-integrating-indigenous-knowledge-in-nep-2020-framework/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion6/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/03/week-long-fdp-on-indigenous-knowledge-systems-held-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 7 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                RGU Faculty Awarded at ICPPS South Korea
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel7">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion7/1.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion7/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/03/rgu-faculty-awarded-at-icpps-south-korea/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion7/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/07/RGU-Faculty-Awarded-at-ICPPS-South-Korea.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">June, 2025</h2>

                    <!-- Accordion 9 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Electric Vehicle Laboratory Skill Development Centre Inaugurated at RGU
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel9">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion9/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion9/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion9/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/06/Electric-Vehicle-Laboratory-Skill-Development-Centre-Inaugurated-at-RGU.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion9/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/royal-global-university-launches-ev-skill-lab-to-power-indias-green-mobility-workforce/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 10 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Memories and Melodies Echo as Doyens Recall Personal Moments with Kalaguru
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel10">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion10/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion10/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion10/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/06/20/kalaguru-was-an-extraordinary-teacher-prof-amarjyoti-choudhury/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 5 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Prof. Amarjyoti Choudhury to Lead Dr Bhupen Hazarika Centre for Creativity at Royal Global
                                University

                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel5">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/1.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/2.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/3.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/4.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/5.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/6.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/7.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61567948572673/videos/714437541075782/?mibextid=oUAKdULthQSeje3Y"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/8.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1AGdKwd5qU/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/9.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1AeXUfFgbJ/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/10.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/1BZKNZtx1d/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/11.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/15xEeXX4Zy/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/12.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1CBwvs9aUt/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/13.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1AbCE85YbQ/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/14.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/16SmDi5VPw/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/15.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/16YsPUuHXY/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/16.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/14JFYphGK3P/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/17.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1BSU4kD1PK/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/18.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/14DMA7TrkWc/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/19.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/share/v/1C9N1gCCB8/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/21.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://youtu.be/9_wFFo2lgLs"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/22.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://meghalayapost.news/news/accident/prof-amarjyoti-choudhury-to-lead-dr-bhupen-hazarika-centre-for-creativity-at-royal-global-university-1006301.html"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/23.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/prof-amarjyoti-choudhury-to-head-bhupen-hazarika-creativity-centre-at-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/24.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://thehillstimes.in/assam/prof-amarjyoti-choudhury-to-lead-dr-bhupen-hazarika-centre-for-creativity-at-royal-global-university"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/25.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/06/03/prof-amarjyoti-choudhury-to-head-rgus-bhupen-hazarika-centre-for-creativity/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/26.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.pratidintime.com/education/a-new-era-of-creative-education-begins-at-rgu-with-prof-amarjyoti-choudhury-at-the-helm-9331878"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion5/27.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.asomiyapratidin.in/education/royal-global-university-dr-amarjyoti-choudhury-9332148"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">May, 2025</h2>

                    <!-- Accordion 4 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                RGU Awarded Most Eminent Private University of North East 2025
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel4">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/05/RGU-Awarded-Most-Eminent-Private-University-of-North-East-2025.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/05/26/rgu-awarded-most-eminent-private-university-of-north-east-2025/#:~:text=organised%20by%20News18%20Assam%20North%20East%20in%20association%20with%20the%20Lions%20Club.&text=dignitaries%20and%20participants%2C%20according%20to,on%20behalf%20of%20the%20University"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://chanakyamantra.com/2025/05/26/assam-royal-global-university-has-received-the-best-private-university-in-the-northeast-award/"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/4.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/5.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/6.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/7.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/8.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/9.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion4/10.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 3 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Discipline and Dedication Keys to Success: Lt Col Singh at RGU Scholarship Ceremony
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel3">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://aguli.in/index.php/2025/05/22/129-students-honoured-at-rgus-monthly-scholarship-ceremony-for-academic-excellence/"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://meghalayapost.news/guwahati-2/discipline-and-dedication-keys-to-success-lt-col-singh-at-rgu-scholarship-1006066.html"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/05/22/discipline-and-dedication-keys-to-success-lt-col-singh-at-rgu-scholarship-ceremony/"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/discipline-not-just-grades-defines-success-lt-col-singh-at-rgu-as-129-students-win-scholarships/"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/05/Discipline-and-Dedication-Keys-to-Success-Lt-%20Col-Singh-at-RGU-Scholarship-Ceremony.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion3/6.png"
                                                    class="carousel-desktop-img">

                                            </div>
                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 2 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                RGU Celebrates Commendation Day for Placed Graduating Students
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel2">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion2/1.png"
                                                    class="carousel-desktop-img">
                                                <!-- <a target="_blank" href="YOUR_NEWS_LINK" class="carousel-desktop-btn">View News</a> -->

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion2/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/05/RGU-Celebrates-Commendation-Day-for-Placed-Graduating-Students.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion2/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://meghalayapost.news/guwahati-2/rgu-celebrates-commendation-day-for-placed-graduating-students-1006036.html"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion2/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/05/21/rgu-celebrates-commendation-day-for-placed-graduating-students/"
                                                    class="carousel-desktop-btn para1">View News</a>

                                            </div>
                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion 1 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                RGU Launches Integrated BA and B.Sc. Programs with Civil Services Coaching by SPM IAS
                                Academy

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel1">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://assamtribune.com/article/royal-global-university-launches-integrated-ba-and-bsc-programs-with-coaching-for-civil-services-by-spm-ias-academy-1577724"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s1.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s2.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s3.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s4.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s6.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s7.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s8.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s9.png"
                                                    class="carousel-desktop-img"></div>
                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/news1/s10.png"
                                                    class="carousel-desktop-img"></div>
                                        </div>
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            function initCarousel(carouselId, visibleCount = 3, intervalTime = 3000) {
                const container = document.getElementById(carouselId);
                const track = container.querySelector('.carousel-desktop-track');
                const items = container.querySelectorAll('.carousel-desktop-item');
                const prevBtn = container.querySelector('.carousel-desktop-prev');
                const nextBtn = container.querySelector('.carousel-desktop-next');

                let index = 0;

                function update() {
                    const offset = index * (100 / visibleCount);
                    track.style.transform = `translateX(-${offset}%)`;
                }

                function move(dir) {
                    index += dir;
                    if (index > items.length - visibleCount) index = 0;
                    if (index < 0) index = items.length - visibleCount;
                    update();
                }

                prevBtn.addEventListener('click', () => move(-1));
                nextBtn.addEventListener('click', () => move(1));
                setInterval(() => move(1), intervalTime);

                // Initialize once
                update();
            }

            // Initialize both carousels
            initCarousel('carousel1');
            initCarousel('carousel2');
            initCarousel('carousel3');
            initCarousel('carousel4');
            initCarousel('carousel5');
            initCarousel('carousel6');
            initCarousel('carousel7');
            initCarousel('carousel9');
            initCarousel('carousel10');
            initCarousel('carousel11');
            initCarousel('carousel12');
        </script>
    </section>

@endsection
