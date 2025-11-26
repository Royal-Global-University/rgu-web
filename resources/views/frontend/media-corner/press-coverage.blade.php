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

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">November, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyNine">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyNine" aria-expanded="false"
                                aria-controls="collapseThirtyNine">
                                Draw inspiration from Dr. Ambedkar’s vision: Chief Justice Ashutosh Kumar
                            </button>
                        </h2>
                        <div id="collapseThirtyNine" class="accordion-collapse collapse" aria-labelledby="headingThirtyNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion7/1.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.theassamrising.com/chief-justice-ashutosh-kumar-unveils-bust-of-dr-b-r-ambedkar-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion7/2.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/11/24/draw-inspiration-from-dr-ambedkars-vision-chief-justice-ashutosh-kumar/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion7/3.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61556391557537/videos/%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9A-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%AE%E0%A7%81%E0%A6%96%E0%A7%8D%E0%A6%AF-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%A7%E0%A7%80%E0%A6%B6%E0%A7%87-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%A4-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%AE%E0%A7%8B%E0%A6%9A%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A6%A1%E0%A7%A6-%E0%A6%86/1433293044890435/?rdid=DayVaPyAVvCZWrti"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion7/4.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion7/5.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyEight">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyEight" aria-expanded="false"
                                aria-controls="collapseThirtyEight">
                                RGU professor bakes his way into history: 2,041 millet cookies in record-breaking solo
                                marathon
                            </button>
                        </h2>
                        <div id="collapseThirtyEight" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion6/3.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/NattirthaSamayAssam/videos/%E0%A7%A8%E0%A7%A6%E0%A7%AA%E0%A7%A7%E0%A6%9F%E0%A6%BE-%E0%A6%8F%E0%A6%9B%E0%A7%B0%E0%A7%8D%E0%A6%9F%E0%A7%87%E0%A6%A1-%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A7%81%E0%A6%9F-%E0%A6%8F%E0%A6%95%E0%A7%87%E0%A7%B0%E0%A6%BE%E0%A6%B9%E0%A7%87-%E0%A6%AC%E0%A6%A8%E0%A6%BE%E0%A6%87-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%85%E0%A6%A7%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AA%E0%A6%95%E0%A7%B0/1778697442831086/?rdid=tqPocSU0KjVTGHyc"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion6/4.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/rgu-professor-bakes-his-way-into-history-2041-millet-cookies-in-record-breaking-solo-marathon/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion6/5.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://x.com/assamtribuneoff/status/1988904727715942423"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion6/1.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion6/2.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtySeven">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtySeven" aria-expanded="false"
                                aria-controls="collapseThirtySeven">
                                Royal Anna Seva marks five years of service: Assam CS inaugurated new phase of RGU's
                                flagship community initiatve
                            </button>
                        </h2>
                        <div id="collapseThirtySeven" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtySeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/1.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/100083153239613/videos/%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A8-%E0%A6%B8%E0%A7%87%E0%A7%B1%E0%A6%BE%E0%A6%87-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A7%82%E0%A7%B0%E0%A7%8D%E0%A6%A3-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A7%AB%E0%A6%9F%E0%A6%BE-%E0%A6%97%E0%A7%8C%E0%A7%B0%E0%A7%B1%E0%A6%AE%E0%A6%AF%E0%A6%BC-%E0%A6%AC%E0%A6%9B%E0%A7%B0%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%9F%E0%A7%80%E0%A6%A4-%E0%A6%AC%E0%A7%B0%E0%A7%8D%E0%A6%B7%E0%A6%AA%E0%A7%82/1163288058689488/?rdid=xjtnteTO0DbdyZAB"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/2.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61553435684904/videos/-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A8-%E0%A6%B8%E0%A7%87%E0%A7%B1%E0%A6%BE%E0%A6%87-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A7%82%E0%A7%B0%E0%A7%8D%E0%A6%A3-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A6%AA%E0%A6%BE%E0%A6%81%E0%A6%9A-%E0%A6%AC%E0%A6%9B%E0%A7%B0-%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8-%E0%A6%AA%E0%A7%B0%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AC%E0%A7%8B%E0%A6%A7%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A6%AE%E0%A7%81%E0%A6%96%E0%A7%8D%E0%A6%AF-%E0%A6%B8%E0%A6%9A%E0%A6%BF%E0%A6%AC/1374223727449693/?rdid=wM9ad0GzBMHzUgUQ"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/3.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/contactNTime/videos/%E0%A6%85%E0%A6%B8%E0%A6%AE-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A7%B0-%E0%A6%8F%E0%A6%95-%E0%A6%B8%E0%A6%BE%E0%A6%AE%E0%A7%82%E0%A6%B9%E0%A6%BF%E0%A6%95-%E0%A6%B8%E0%A7%87%E0%A7%B1%E0%A6%BE%E0%A7%B0-%E0%A6%AA%E0%A6%A6%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A7%87%E0%A6%AA-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A8-%E0%A6%B8%E0%A7%87%E0%A7%B1%E0%A6%BE%E0%A6%87-%E0%A6%86%E0%A6%9C%E0%A6%BF-%E0%A6%AA%E0%A6%BE%E0%A6%81/842815038120826/?rdid=7rf2lc4ru9mwTjoB"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/4.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61556391557537/videos/%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A8-%E0%A6%B8%E0%A7%87%E0%A7%B1%E0%A6%BE%E0%A6%87-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A7%82%E0%A7%B0%E0%A7%8D%E0%A6%A3-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A6%AA%E0%A6%BE%E0%A6%81%E0%A6%9A-%E0%A6%AC%E0%A6%9B%E0%A7%B0-%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8-%E0%A6%AA%E0%A7%B0%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AC%E0%A7%8B%E0%A6%A7%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A6%BF%E0%A6%B2%E0%A7%87-%E0%A6%AE%E0%A7%81%E0%A6%96%E0%A7%8D%E0%A6%AF-%E0%A6%B8%E0%A6%9A%E0%A6%BF%E0%A6%AC-/672643789059158/?rdid=h1SBLsCWiA1D5sDY"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/5.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://chanakyamantra.com/2025/11/12/royal-anna-seva-completes-5-glorious-years/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/6.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/royal-anna-seva-marks-five-years-of-service-assam-cs-inaugurates-new-phase-of-rgus-flagship-community-initiative/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/7.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.assam.awazthevoice.in/india-news/royal-anna-seva-completes-glorious-years-new-phase-inaugurated-by-chief-secretary-dr-ravi-kota-16840.html"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/8.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/7.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/9.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/10.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/11.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion5/12.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtySix">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtySix" aria-expanded="false"
                                aria-controls="collapseThirtySix">
                                Curtain-raiser workshops of Assam Physiocon 2025 held at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseThirtySix" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtySix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion4/1.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61560089875956/videos/%E0%A6%86%E0%A6%9B%E0%A6%BE%E0%A6%AE-%E0%A6%AB%E0%A6%BF%E0%A6%9C%E0%A6%BF%E0%A6%85%E0%A6%95%E0%A6%A8-%E0%A7%A8%E0%A7%A6%E0%A7%A8%E0%A7%AB%E0%A7%B0-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%BF-%E0%A6%95%E0%A6%A8%E0%A6%AB%E0%A6%BE%E0%A7%B0%E0%A7%87%E0%A6%9E%E0%A7%8D%E0%A6%9A-%E0%A7%B1%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%95%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AA-%E0%A6%B8%E0%A6%AB%E0%A6%B2%E0%A6%AD%E0%A6%BE%E0%A7%B1%E0%A7%87-%E0%A6%86%E0%A7%9F%E0%A7%8B%E0%A6%9C%E0%A6%BF%E0%A6%A4-%E0%A7%B0%E0%A7%9F%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D/1425378585595119/?rdid=1vYtvtcnbmjyVlXo"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion4/2.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/11/07/curtain-raiser-workshops-of-assam-physiocon-2025-held-at-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyFive">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyFive" aria-expanded="false"
                                aria-controls="collapseThirtyFive">
                                RGU Student Represents India at 4th India-Bhutan Youth Summit!
                            </button>
                        </h2>
                        <div id="collapseThirtyFive" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion3/1.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyFour">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyFour" aria-expanded="false"
                                aria-controls="collapseThirtyFour">
                                RGU remembers Bhupen Hazarika with musical tribute, oration series
                            </button>
                        </h2>
                        <div id="collapseThirtyFour" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion2/1.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion2/2.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion2/3.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion2/4.jpg"
                                                    class="carousel-desktop-img">

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyThree">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyThree" aria-expanded="false"
                                aria-controls="collapseThirtyThree">
                                Royal Global University Marks Milestone: Degrees Conferred to 1,967 Scholars
                            </button>
                        </h2>
                        <div id="collapseThirtyThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion1/1.jpg"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/november/accordion1/2.jpg"
                                                    class="carousel-desktop-img">

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">October, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyTwo">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyTwo" aria-expanded="false"
                                aria-controls="collapseThirtyTwo">
                                Fourth India-Bhutan Youth Summit 2025 concludes at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseThirtyTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/october/accordion2/1.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/10/29/fourth-india-bhutan-youth-summit-2025-concludes-at-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirtyOne">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirtyOne" aria-expanded="false"
                                aria-controls="collapseThirtyOne">
                                ISRO reseach grant awarded to RGU faculty member
                            </button>
                        </h2>
                        <div id="collapseThirtyOne" class="accordion-collapse collapse"
                            aria-labelledby="headingThirtyOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/october/accordion1/2.jpg"
                                                    class="carousel-desktop-img">

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">September, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirty">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                                Bhutan delegation attends training on academic, administrative governance at RGU
                            </button>
                        </h2>
                        <div id="collapseThirty" class="accordion-collapse collapse" aria-labelledby="headingThirty"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion31/1.jpg"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/09/20/bhutan-delegation-attends-training-on-academic-administrative-governance-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirty">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                                RGU Hosts National Conference on Sustainability
                            </button>
                        </h2>
                        <div id="collapseThirty" class="accordion-collapse collapse" aria-labelledby="headingThirty"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion30/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion30/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://assamtimes.org/node/23584"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyNine">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyNine" aria-expanded="false"
                                aria-controls="collapseTwentyNine">
                                Two day long National Conference under AICTE-VAANI held in RGU
                            </button>
                        </h2>
                        <div id="collapseTwentyNine" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyNine" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion29/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion29/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.theassamrising.com/two-day-long-national-conference-under-aicte-vaani-held-in-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion29/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://assamtimes.org/node/23584"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion29/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/09/RGU-holds-AICTE-VAANI-National-Conference-in-Assamese-Language.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyEight">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyEight" aria-expanded="false"
                                aria-controls="collapseTwentyEight">
                                Leadership conclave at RGU sparks conversations on ethics and the future of work
                            </button>
                        </h2>
                        <div id="collapseTwentyEight" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion27/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/leadership-conclave-at-rgu-sparks-conversations-on-ethics-and-the-future-of-work/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion27/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/09/Raise-Children-as-Help-Givers-Not-Help-Seekers-Prof.-Alaka-Sarma-at-RGUs-Leadership-%20Conclave-2025.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentySeven">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentySeven" aria-expanded="false"
                                aria-controls="collapseTwentySeven">
                                Raise children as help givers, not help seekers: Prof. Alaka Sarma at RGU
                            </button>
                        </h2>
                        <div id="collapseTwentySeven" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentySeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion26/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/09/11/raise-children-as-help-givers-not-help-seekers-prof-alaka-sarma-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion26/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://x.com/guwahatinews_/status/1966095211681251391"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentySix">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentySix" aria-expanded="false"
                                aria-controls="collapseTwentySix">
                                Industry Stalwarts Ravi Kant Rajesh Srivastava address session at RGU
                            </button>
                        </h2>
                        <div id="collapseTwentySix" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentySix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion25/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/09/09/industry-stalwarts-ravi-kant-rajesh-srivastava-address-session-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyFive">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyFive" aria-expanded="false"
                                aria-controls="collapseTwentyFive">
                                Ice between India-China relations melting: Chinese diplomats in RGU
                            </button>
                        </h2>
                        <div id="collapseTwentyFive" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion28/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/08/29/ice-between-india-china-relations-melting-chinese-diplomats-in-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion28/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://meghalayapost.news/news/accident/chinese-diplomats-visit-royal-global-university-for-educational-collaboration-1008242.html"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion28/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/08/Chinese-Diplomats-visit-Royal-Global-University-for-Educational-Collaboration.html?m=1"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyFour">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyFour" aria-expanded="false"
                                aria-controls="collapseTwentyFour">
                                Sudhakantha Museum inaugurated at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseTwentyFour" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://eastmojo.com/news/2025/09/06/sudhakantha-museum-to-be-inaugurated-at-royal-global-university/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/aipllive24X7/videos/%E0%A6%B8%E0%A7%81%E0%A6%A7%E0%A6%BE%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0-%E0%A6%A1%E0%A6%83-%E0%A6%AD%E0%A7%82%E0%A6%AA%E0%A7%87%E0%A6%A8-%E0%A6%B9%E0%A6%BE%E0%A6%9C%E0%A7%B0%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A7%B0-%E0%A6%9C%E0%A6%A8%E0%A7%8D%E0%A6%AE-%E0%A6%B6%E0%A6%A4%E0%A6%AC%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%B7%E0%A6%BF%E0%A6%95%E0%A7%80-%E0%A6%AA%E0%A6%BE%E0%A6%B2%E0%A6%A8-%E0%A6%86%E0%A7%B0-%E0%A6%9C%E0%A6%BF-%E0%A6%87%E0%A6%89%E0%A6%A4/762212203233170/?rdid=F8n3NTzuk2Jv7Uom"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/DemocraticASSAM/videos/%E0%A6%B6%E0%A7%81%E0%A6%AD-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AC%E0%A7%8B%E0%A6%A7%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A7%87-%E0%A6%85%E0%A6%B8%E0%A6%AE-%E0%A6%9A%E0%A7%B0%E0%A6%95%E0%A6%BE%E0%A7%B0%E0%A7%B0-%E0%A6%B8%E0%A6%BE%E0%A6%82%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A7%83%E0%A6%A4%E0%A6%BF%E0%A6%95-%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%97%E0%A7%B0-%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A7%B0%E0%A7%80-%E0%A6%AC%E0%A6%BF%E0%A6%AE%E0%A6%B2-%E0%A6%AC%E0%A7%9C%E0%A6%BE%E0%A6%87/631601119745128/?rdid=jX9MSwb6ZoSnOGmQ"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61576234091042/videos/%E0%A7%A7%E0%A7%A6%E0%A7%A6-%E0%A6%B8%E0%A6%82%E0%A6%96%E0%A7%8D%E0%A6%AF%E0%A6%95-%E0%A6%9C%E0%A6%A8%E0%A7%8D%E0%A6%AE-%E0%A6%9C%E0%A6%AF%E0%A6%BC%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%80-%E0%A6%89%E0%A6%AA%E0%A6%B2%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A7%87-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC%E0%A6%A4-%E0%A6%B8%E0%A7%81%E0%A6%A7%E0%A6%BE%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0-%E0%A6%97%E0%A7%B0%E0%A6%BE%E0%A6%95%E0%A7%80%E0%A7%B0-%E0%A6%B8%E0%A6%82%E0%A6%97/1212064987345380/?rdid=TNdOigihcTJkI3lb"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61556391557537/videos/%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC%E0%A6%A4-%E0%A6%B8%E0%A7%81%E0%A6%A7%E0%A6%BE%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0-%E0%A6%B8%E0%A6%82%E0%A6%97%E0%A7%8D%E0%A7%B0%E0%A6%B9%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AC%E0%A7%8B%E0%A6%A7%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A7%87-%E0%A6%B8%E0%A6%BE%E0%A6%82%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A7%83%E0%A6%A4%E0%A6%BF%E0%A6%95-%E0%A6%AA%E0%A7%B0%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A7%B0%E0%A6%AE%E0%A6%BE/2920537251477772/?mibextid=wwXIfr&rdid=ZKVxkuXjpEDU53Pw"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/newsishan/videos/%E0%A6%AE%E0%A6%B9%E0%A6%BE%E0%A6%A8%E0%A6%97%E0%A7%B0%E0%A7%80%E0%A7%B0-%E0%A6%AC%E0%A7%87%E0%A6%A4%E0%A6%95%E0%A7%81%E0%A6%9B%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A6%BF%E0%A6%A4-%E0%A7%B0%E0%A7%9F%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A7%8B%E0%A7%B1%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%9F%E0%A7%B0-%E0%A6%9A%E0%A7%8C%E0%A6%B9%E0%A6%A6%E0%A6%A4-%E0%A6%AE%E0%A7%81%E0%A6%95%E0%A6%B2%E0%A6%BF-%E0%A6%95%E0%A7%B0%E0%A6%BE-%E0%A6%B9%E0%A7%9F-%E0%A6%B8%E0%A7%81%E0%A6%A7%E0%A6%BE%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0-%E0%A6%B8%E0%A6%82/1330533338406808/?rdid=iCwKp0YsXrncrOGM"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/7.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/StarAssamNews/videos/%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC%E0%A6%A4-%E0%A6%B8%E0%A7%81%E0%A6%A7%E0%A6%BE%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0-%E0%A6%B8%E0%A6%82%E0%A6%97%E0%A7%8D%E0%A7%B0%E0%A6%B9%E0%A6%BE%E0%A6%B2%E0%A6%AF%E0%A6%BC-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AC%E0%A7%8B%E0%A6%A7%E0%A6%A8-%E0%A6%95%E0%A7%B0%E0%A7%87-%E0%A6%B8%E0%A6%BE%E0%A6%82%E0%A6%B8%E0%A7%8D%E0%A6%95%E0%A7%83%E0%A6%A4%E0%A6%BF%E0%A6%95-%E0%A6%AA%E0%A7%B0%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A7%B0%E0%A6%AE%E0%A6%BE/791499906578394/?rdid=s5cbhOds6joyfGiH"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion24/8.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/TheTruthIndiaNews/videos/-%E0%A6%86%E0%A6%9C%E0%A6%BF-%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A6%A4%E0%A7%B0%E0%A6%A4%E0%A7%8D%E0%A6%A8-%E0%A6%A1%E0%A7%A6-%E0%A6%AD%E0%A7%82%E0%A6%AA%E0%A7%87%E0%A6%A8-%E0%A6%B9%E0%A6%BE%E0%A6%9C%E0%A7%B0%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A7%B0-%E0%A6%9C%E0%A6%A8%E0%A7%8D%E0%A6%AE-%E0%A6%B6%E0%A6%A4%E0%A6%AC%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%B7%E0%A6%BF%E0%A6%95%E0%A7%80-%E0%A6%AE%E0%A6%B9%E0%A6%BE%E0%A6%A8%E0%A6%97%E0%A7%B0%E0%A7%80%E0%A7%B0-%E0%A7%B0%E0%A7%9F%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE/1206038221540280/?rdid=Zp8COKP6dz0SqtpD"
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

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">August, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyThree">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyThree" aria-expanded="false"
                                aria-controls="collapseTwentyThree">
                                India needs a comprehensive cybercrime law: SC Judge at RGU
                            </button>
                        </h2>
                        <div id="collapseTwentyThree" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23a/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/08/30/india-needs-a-comprehensive-cybercrime-law-sc-judge-at-rgu/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23a/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23a/3.png"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyTwo">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyTwo" aria-expanded="false"
                                aria-controls="collapseTwentyTwo">
                                Supreme Court Judge unveils one of India’s largest Gavels at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseTwentyTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://nenow.in/north-east-news/assam/assam-supreme-court-judge-unveils-one-of-indias-largest-gavels-at-royal-global-university.html"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/08/Supreme-Court-Judge-unveils-one-of-Indias-largest-Gavels-at-Royal-Global-University.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/story.php?story_fbid=881030374683148&id=100083285803377&rdid=4LtLtzxZIRglyCMI#"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61560953620781/videos/-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A7%80%E0%A6%95-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%A7%E0%A7%80%E0%A6%B6%E0%A7%B0-%E0%A6%B9%E0%A6%BE%E0%A6%A4%E0%A7%81%E0%A7%B0%E0%A7%80%E0%A7%B0-%E0%A6%AC%E0%A7%83%E0%A6%B9%E0%A7%8E-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A6%BF%E0%A6%95%E0%A7%80-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%AE%E0%A7%8B%E0%A6%9A%E0%A6%A8-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF/2025217571342143/?rdid=2SACkNxw2w5aanEA"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/61556391557537/videos/%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A7%80%E0%A6%95-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%A7%E0%A7%80%E0%A6%B6%E0%A7%B0-%E0%A6%B9%E0%A6%BE%E0%A6%A4%E0%A7%81%E0%A7%B0%E0%A7%80%E0%A7%B0-%E0%A6%AC%E0%A7%83%E0%A6%B9%E0%A7%8E-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A6%BF%E0%A6%95%E0%A7%80-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%AE%E0%A7%8B%E0%A6%9A%E0%A6%A8-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%9F/1865887683961485/?rdid=32D6Og4WmOCtPpzC"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/StarAssamNews/videos/%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A7%B0-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A7%80%E0%A6%95-%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%A7%E0%A7%80%E0%A6%B6%E0%A7%B0-%E0%A6%B9%E0%A6%BE%E0%A6%A4%E0%A7%81%E0%A7%B0%E0%A7%80%E0%A7%B0-%E0%A6%AC%E0%A7%83%E0%A6%B9%E0%A7%8E-%E0%A6%AA%E0%A7%8D%E0%A7%B0%E0%A6%A4%E0%A6%BF%E0%A6%95%E0%A7%80-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%AE%E0%A7%8B%E0%A6%9A%E0%A6%A8-%E0%A7%B0%E0%A6%AF%E0%A6%BC%E0%A7%87%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B2%E0%A6%AC%E0%A7%87%E0%A6%B2-%E0%A6%87%E0%A6%89%E0%A6%A8%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A7%B0%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%9F/1112318346994099/?rdid=y3lgNAtWLvjnPVP2"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion23/7.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="https://www.facebook.com/reel/1466642931326178"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwentyOne">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwentyOne" aria-expanded="false"
                                aria-controls="collapseTwentyOne">
                                Royal Global University to Confer Honorary D.Sc. Degree upon Dr. Trehan
                            </button>
                        </h2>
                        <div id="collapseTwentyOne" class="accordion-collapse collapse"
                            aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion21/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion21/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion21/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/08/09/royal-global-university-to-confer-honorary-d-sc-upon-dr-trehan/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion21/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://meghalayapost.news/news/accident/royal-global-university-to-confer-honorary-d-sc-degree-upon-dr-trehan-1007875.html"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwenty">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                RGU Students Gain Learning Exposure at INTI International University
                            </button>
                        </h2>
                        <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion22/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion22/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/08/09/rgu-students-gain-learning-exposure-at-inti-international-university-malaysia/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion22/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.thereveal.co.in/2025/08/rgu-students-gain-learning-exposure-at.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion22/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/rgu-commerce-students-complete-international-immersion-at-inti-university-malaysia/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion22/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/08/RGU-Students-Gain-Learning-Exposure-at-INTI-International-University-Malaysia.html?m=1"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingNineteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseNineteen" aria-expanded="false"
                                aria-controls="collapseNineteen">
                                RGU student receives CERN funding grant
                            </button>
                        </h2>
                        <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="mobile-assets/media-corner/accordion20/11.pdf"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank" href="mobile-assets/media-corner/accordion20/12.pdf"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/08/RGU-Student-Awarded-Funding-Grant-by-CERN-Geneva.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion20/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/royal-global-student-bags-cern-grant-for-elite-physics-training-in-spain/"
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

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">July, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingEighteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseEighteen" aria-expanded="false"
                                aria-controls="collapseEighteen">
                                Minister Bora addresses RGU Deeksharambh
                            </button>
                        </h2>
                        <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/1.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/2.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/3.png"
                                                    class="carousel-desktop-img">

                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/4.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://edune.in/2025/07/30/rgu-launches-21-day-deeksharambh-2025-induction-programme-with-emphasis-on-purpose-inclusion-and-innovation/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.facebook.com/story.php?story_fbid=3099683926873525&id=100004958445214&rdid=FrcbNhOG7g0x7w2e#"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/30/fuel-your-motivation-with-curiosity-and-purpose-minister-bora-addresses-rgu-deeksharambh/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion19/7.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.pratidintime.com/guwahati-news-breaking-latest/royal-global-university-inaugurates-deeksharambh-to-welcome-new-students-9608176"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingEighteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseEighteen" aria-expanded="false"
                                aria-controls="collapseEighteen">
                                Develop Assam’s typography: Rupee symbol designer Dr. Dharmalingam urges students
                            </button>
                        </h2>
                        <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion18/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/07/Develop-Assams-Typography-Rupee-Symbol-%20Designer-Dr.-Dharmalingam-urges-students.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion18/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://edune.in/2025/07/28/designing-identity-indian-rupee-symbol-creator-inspires-assams-youth-to-shape-regional-typography/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion18/3.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/28/develop-assams-typography-rupee-symbol-designer-dr-dharmalingam-urges-students/"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSeventeen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseSeventeen" aria-expanded="false"
                                aria-controls="collapseSeventeen">
                                Union Education Minister Dharmendra Pradhan to Grace RGU’s 5th Convocation
                            </button>
                        </h2>
                        <div id="collapseSeventeen" class="accordion-collapse collapse"
                            aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion17/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/07/Union-Education-Minister-Dharmendra-Pradhan-to-Grace-RGUs-5th-Convocation.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion17/2.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/25/union-education-minister-dharmendra-pradhan-to-grace-rgus-5th-convocation/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion17/3.png"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSixteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseSixteen" aria-expanded="false"
                                aria-controls="collapseSixteen">
                                ICMR awards 3 start-up grants worth over Rs 1 crore to RGU faculty members
                            </button>
                        </h2>
                        <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel16">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/1.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/2.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/3.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/4.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/5.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.hashiyesebahar.com/2025/07/ICMR-Awards-3-Start-up-Grants-worth-over-1%20Crore-to-RGU-Faculty.html?m=1"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/6.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://aguli.in/index.php/2025/07/18/icmr-awards-3-start-up-grants-worth-over-1-crore-to-rgu-faculty/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/7.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://www.syllad.com/rgu-researchers-win-rs-1-crore-in-icmr-funding-for-high-impact-health-studies/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/8.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://eastmojo.com/free-digest/2025/07/19/assams-rgu-recognised-with-three-icmr-start-up-grants/"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion16/9.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theshillongtimes.com/2025/07/18/icmr-awards-3-start-up-grants-worth-over-rs-1-crore-to-rgu-faculty-members/"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseFifteen" aria-expanded="false"
                                aria-controls="collapseFifteen">
                                The Assam Royal Global University has introduced two dedicated categories of academic
                                scholarships
                            </button>
                        </h2>
                        <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel15">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion15/4a.png"
                                                    class="carousel-desktop-img">
                                                <a download href="mobile-assets/media-corner/accordion15/4.pdf"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>


                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion15/3.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingForteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseForteen" aria-expanded="false"
                                aria-controls="collapseForteen">
                                A Living Call to Memory: The Bhupen Hazarika Museum Beckons
                            </button>
                        </h2>
                        <div id="collapseForteen" class="accordion-collapse collapse" aria-labelledby="headingForteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel14">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/1.png"
                                                    class="carousel-desktop-img">
                                                <a target="_blank"
                                                    href="https://theassamrising.com/amp/assam/rgu-to-establish-living-museum-honouring-bhupen-hazarikas-centenary-1513098"
                                                    class="carousel-desktop-btn para1">View News</a>
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/2.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/3.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/4.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/5.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion14/6.png"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                RGU Outreach: Awareness on Conservation of Salamander Habitat
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="custom-carousel-container container" id="carousel13">
                                    <div class="carousel-desktop-wrapper">
                                        <div class="carousel-desktop-track"
                                            style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion13/1.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                            <div class="carousel-desktop-item"><img
                                                    src="mobile-assets/media-corner/accordion13/2.png"
                                                    class="carousel-desktop-img">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                ‘Sugandhi Pokhilar Kobi’ Hiren Bhattacharyya Remembered at Royal Global University
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed para1 fw-bold" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="color: #27467A; padding: 20px 0px;" class="headd2 fw-bold">June, 2025</h2>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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
                                        <button class="carousel-desktop-prev">&#8592;</button>
                                        <button class="carousel-desktop-next">&#8594;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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
                                                    class="carousel-desktop-btn para1">View
                                                    News</a>
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed para1 fw-bold" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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

                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-bold para1" type="button"
                                data-bs-toggle="collapse" style="background-color: #264273; color: #fff;"
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
