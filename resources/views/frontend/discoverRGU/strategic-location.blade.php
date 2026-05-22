@extends('frontend/new-master')
@section('title', 'Strategic Location : The Assam Royal Global University')
@section('meta_description',
    'Royal Global University boasts a strategic location in Guwahati, offering excellent
    connectivity, a thriving academic environment, and proximity to major urban and cultural hubs of Northeast India.')
@section('meta_keywords', 'Strategic Location')
@section('content')
    <style>
        /* =========================================================
            ===================== LOCATION SECTION =====================
            ========================================================= */

        .rgu-loc-wrap {
            background: #EBF1FC;
            padding: 80px 20px 100px;
            overflow: hidden;
        }

        .rgu-loc-container {
            max-width: 1320px;
            margin: auto;
        }

        /* ================= TOP TEXT ================= */

        .rgu-loc-top-text {
            max-width: 980px;
            margin: 0 auto 60px;
            text-align: center;
            animation: rguLocFadeUp 1s ease;
        }

        .rgu-loc-top-text p {
            font-size: 15px;
            line-height: 2;
            color: #5d6b82;
            margin: 0;
        }

        /* ================= SHOWCASE SECTION ================= */

        .rgu-loc-showcase {
            background: linear-gradient(135deg, #16396d, #08234d);
            border-radius: 50px;
            padding: 55px 40px 45px;
            position: relative;
            overflow: hidden;
            margin-bottom: 90px;
            box-shadow: 0 30px 70px rgba(14, 43, 91, 0.18);
        }

        .rgu-loc-showcase::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
            top: -250px;
            right: -120px;
        }

        .rgu-loc-main-area {
            position: relative;
            height: 520px;
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 28px;
        }

        .rgu-loc-main-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            visibility: hidden;
            transition: all .5s ease;
        }

        .rgu-loc-main-slide.active {
            opacity: 1;
            visibility: visible;
        }

        .rgu-loc-main-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rgu-loc-overlay-card {
            position: absolute;
            right: 35px;
            bottom: 35px;
            width: 390px;
            background: #f7f8fb;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            animation: rguLocFadeUp .7s ease;
        }

        .rgu-loc-overlay-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: #f07d23;
            margin-bottom: 16px;
            text-transform: uppercase;
        }

        .rgu-loc-overlay-card p {
            font-size: 14px;
            line-height: 1.9;
            color: #4f5f79;
            margin-bottom: 18px;
        }

        .rgu-loc-overlay-card a {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #f07d23;
            text-decoration: none;
            transition: .3s ease;
        }

        .rgu-loc-overlay-card a:hover {
            letter-spacing: 2px;
        }

        /* ================= THUMBNAILS ================= */

        .rgu-loc-thumbs {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            padding-bottom: 5px;
        }

        .rgu-loc-thumbs::-webkit-scrollbar {
            display: none;
        }

        .rgu-loc-thumb {
            width: 180px;
            flex-shrink: 0;
            cursor: pointer;
            transition: .4s ease;
        }

        .rgu-loc-thumb-img {
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 10px;
            border: 3px solid transparent;
            transition: .4s ease;
        }

        .rgu-loc-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .4s ease;
        }

        .rgu-loc-thumb h5 {
            font-size: 15px;
            color: #fff;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: .8px;
        }

        .rgu-loc-thumb.active .rgu-loc-thumb-img {
            border-color: #f07d23;
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(240, 125, 35, .25);
        }

        .rgu-loc-thumb:hover img {
            transform: scale(1.08);
        }

        /* ================= MAP SECTION ================= */

        .rgu-loc-map-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .rgu-loc-map-title h2 {
            font-size: 48px;
            color: #27467a;
            font-weight: 700;
            margin: 0;
            font-family: "Playfair Display", serif;
        }

        .rgu-loc-map-box {
            max-width: 980px;
            margin: auto;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 50px rgba(0, 0, 0, 0.08);
            border: 6px solid rgba(255, 255, 255, .7);
            animation: rguLocFadeUp 1s ease;
        }

        .rgu-loc-map-box iframe {
            width: 100%;
            height: 520px;
            border: 0;
            display: block;
        }

        /* ================= ANIMATION ================= */

        @keyframes rguLocFadeUp {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:991px) {

            .rgu-loc-main-area {
                height: 450px;
            }

            .rgu-loc-overlay-card {
                width: 340px;
            }
        }

        @media(max-width:768px) {

            .rgu-loc-showcase {
                padding: 30px 20px 30px;
                border-radius: 30px;
            }

            .rgu-loc-main-area {
                height: 400px;
            }

            .rgu-loc-overlay-card {
                position: relative;
                width: 100%;
                right: auto;
                bottom: auto;
                margin-top: 20px;
            }

            .rgu-loc-map-title h2 {
                font-size: 38px;
            }
        }

        @media(max-width:540px) {

            .rgu-loc-main-area {
                height: auto;
            }

            .rgu-loc-main-slide img {
                height: 280px;
            }

            .rgu-loc-thumb {
                width: 120px;
            }

            .rgu-loc-thumb-img {
                height: 65px;
            }

            .rgu-loc-map-box iframe {
                height: 380px;
            }

            .rgu-loc-map-title h2 {
                font-size: 32px;
            }
        }
    </style>

    <style>
        /* =========================================================
            ======================== MODAL =============================
            ========================================================= */

        .rgu-loc-modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.65);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: .4s ease;
        }

        .rgu-loc-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .rgu-loc-modal-box {
            width: 100%;
            max-width: 850px;
            background: #fff;
            border-radius: 22px;
            padding: 45px;
            position: relative;
            transform: translateY(40px) scale(.95);
            transition: .4s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .rgu-loc-modal.active .rgu-loc-modal-box {
            transform: translateY(0) scale(1);
        }

        .rgu-loc-modal-close {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 42px;
            height: 42px;
            border: none;
            border-radius: 50%;
            background: #f07d23;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: .3s ease;
        }

        .rgu-loc-modal-close:hover {
            transform: rotate(90deg) scale(1.08);
        }

        .rgu-loc-modal-content h2 {
            font-size: 34px;
            color: #27467a;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .rgu-loc-modal-content p {
            font-size: 16px;
            line-height: 2;
            color: #55657f;
            margin-bottom: 18px;
        }

        @media(max-width:768px) {

            .rgu-loc-modal-box {
                padding: 35px 25px;
            }

            .rgu-loc-modal-content h2 {
                font-size: 28px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Strategic Location</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Campus & Student Life / Strategic Location
            </div>
        </div>

    </section>

    <!-- ================= MODAL ================= -->

    <div class="rgu-loc-modal" id="rguLocModal">

        <div class="rgu-loc-modal-box">

            <!-- CLOSE BUTTON -->

            <button class="rgu-loc-modal-close" id="rguLocModalClose">
                <i class="fa fa-times"></i>
            </button>

            <!-- CONTENT -->

            <div class="rgu-loc-modal-content" id="rguLocModalContent"></div>

        </div>

    </div>

    <section class="rgu-loc-wrap">

        <div class="rgu-loc-container">

            <!-- ================= TOP TEXT ================= -->

            <div class="rgu-loc-top-text">
                <p>
                    The Assam Royal Global University is strategically located in Guwahati, the eastern part of India,
                    also known as the Gateway of Southeast Asia. With a renewed emphasis on the Act East policy, the
                    region has become a hotbed for all developmental activities and an educational destination for many.
                    Despite its small size, it derives considerable attention because of its strategic location, the
                    ethnic diversity of its population, and the very fact that it is easily accessible to the nearby
                    countries of Bhutan, Bangladesh, Myanmar, and Nepal. Further, Guwahati is well connected with both
                    air and railways with the rest of the Indian subcontinent and the neighbouring countries. The Assam
                    Royal Global University is located in Guwahati, Betkuchi, next to National Highway 37. It is only 22
                    km from the LGBI Airport, 12 km from both the Guwahati railway station and Kamakhya railway station,
                    and just 500 m from the Inter-State Bus Terminus (ISBT).
                </p>
            </div>

            <!-- ================= SHOWCASE ================= -->

            <div class="rgu-loc-showcase">

                <!-- MAIN SLIDES -->

                <div class="rgu-loc-main-area">

                    <!-- SLIDE 1 -->

                    <div class="rgu-loc-main-slide active">

                        <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/guwahati.png"
                            alt="">

                        <div class="rgu-loc-overlay-card">
                            <h3>The City of Guwahati</h3>

                            <p>
                                Guwahati, the abode of the Nilachal Hills, the holy Kamakhya temple, the world’s
                                smallest habitat river island, Umananda, and the mighty Brahmaputra, is an emerging city
                                in the State of Assam, the land of the Red Rivers and Blue Hills. In its composition,
                                Guwahati City features all the advantages of an affordable and comfortable lifestyle.
                                The city is youthful and cosmopolitan, with plenty to see and do.
                            </p>

                            <a href="javascript:void(0)" class="rgu-loc-readmore" data-title="The City of Guwahati"
                                data-content=" Guwahati, situated at
                                the gateway to North-East India, is a preferred destination for higher education
                                aspirants. With easy-to-access shopping centres, community markets, multiplexes, a
                                beautiful beach by the river Brahmaputra, a café culture, affordable student
                                accommodation, and friendly residents, Guwahati offers a relaxed lifestyle with all the
                                conveniences of city living. With a robust public transport service and private cab
                                services, commuting in the city from any locality is hassle free for students. The
                                stunning natural beauty of the Deepor Beel Wildlife Sanctuary and Pobitora Wildlife
                                Sanctuary adds further charm to the city.">
                                READ MORE +
                            </a>
                        </div>

                    </div>

                    <!-- SLIDE 2 -->

                    <div class="rgu-loc-main-slide">

                        <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/saraighat-bridge.png"
                            alt="">

                        <div class="rgu-loc-overlay-card">
                            <h3>Saraighat Bridge</h3>

                            <p>
                                It is the first rail-cum-road bridge constructed over the Brahmaputra River in Guwahati.
                                Saraighat is a historical place where a fight between the Mughals and the Ahoms took
                                place and the Ahoms triumphed. The Saraighat bridge is the vital link between North-East
                                region and the rest of the country.
                            </p>

                            <a href="javascript:void(0)" class="rgu-loc-readmore" data-title="Saraighat Bridge"
                                data-content="It is the first rail-cum-road bridge constructed over the Brahmaputra River in Guwahati. Saraighat is a historical place where a fight between the Mughals and the Ahoms took place and the Ahoms triumphed. The Saraighat bridge is the vital link between North-East region and the rest of the country.">
                                READ MORE +
                            </a>
                        </div>

                    </div>

                    <!-- SLIDE 3 -->

                    <div class="rgu-loc-main-slide">

                        <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/brahmaputra.png"
                            alt="">

                        <div class="rgu-loc-overlay-card">
                            <h3>River Brahmaputra</h3>

                            <p>
                                It is one of the major rivers in Asia. The Brahmaputra is an important river for irrigation
                                and transportation. It has a rare male name while most rivers have feminine names.
                            </p>

                            <a href="javascript:void(0)" class="rgu-loc-readmore" data-title="River Brahmaputra"
                                data-content="It is one of the major rivers in Asia. The Brahmaputra is an important river for irrigation and transportation. It has a rare male name while most rivers have feminine names.">
                                READ MORE +
                            </a>
                        </div>

                    </div>

                    <!-- SLIDE 4 -->

                    <div class="rgu-loc-main-slide">

                        <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/deepor-bill.png"
                            alt="">

                        <div class="rgu-loc-overlay-card">
                            <h3>Deepor Beel</h3>

                            <p>
                                It is located to the south-west of Guwahati city, in the Kamrup district of Assam (India).
                                It is a permanent freshwater lake, a former channel of the Brahmaputra River.
                            </p>

                            <a href="javascript:void(0)" class="rgu-loc-readmore" data-title="Deepor Bill"
                                data-content="It is located to the south-west of Guwahati city, in the Kamrup district of Assam (India). It is a permanent freshwater lake, a former channel of the Brahmaputra River. It is also called a wetland. The Deepor Beel is reported to provide direct and indirect natural resources for the livelihood of fourteen indigenous villages (1200 families) located in its precincts.">
                                READ MORE +
                            </a>
                        </div>

                    </div>

                    <!-- SLIDE 5 -->

                    <div class="rgu-loc-main-slide">

                        <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/museum.png"
                            alt="">

                        <div class="rgu-loc-overlay-card">
                            <h3>Museum</h3>

                            <p>
                                The Assam State Museum is located at the southern end of Dighali Pukhuri Pond, which is
                                located at the heart of the city. The exhibits of the museum displayed under different
                                sections, such as epigraphy and sculptures.
                            </p>

                            <a href="javascript:void(0)" class="rgu-loc-readmore" data-title="Museum"
                                data-content="The Assam State Museum is located at the southern end of Dighali Pukhuri Pond, which is located at the heart of the city. The exhibits of the museum displayed under different sections, such as epigraphy and sculptures. The sculptures from the Assam region fall into four principal categories: stone, wood, metal, and terracotta; natural history; crafts; folk art; and arms. The collections that are on display here are exceedingly rare.">
                                READ MORE +
                            </a>
                        </div>

                    </div>

                </div>

                <!-- THUMBNAILS -->

                <div class="rgu-loc-thumbs">

                    <div class="rgu-loc-thumb active">
                        <div class="rgu-loc-thumb-img">
                            <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/guwahati.png"
                                alt="">
                        </div>
                        <h5>THE CITY OF GUWAHATI</h5>
                    </div>

                    <div class="rgu-loc-thumb">
                        <div class="rgu-loc-thumb-img">
                            <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/saraighat-bridge.png"
                                alt="">
                        </div>
                        <h5>SARAIGHAT BRIDGE</h5>
                    </div>

                    <div class="rgu-loc-thumb">
                        <div class="rgu-loc-thumb-img">
                            <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/brahmaputra.png"
                                alt="">
                        </div>
                        <h5>RIVER BRAHMAPUTRA</h5>
                    </div>

                    <div class="rgu-loc-thumb">
                        <div class="rgu-loc-thumb-img">
                            <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/deepor-bill.png"
                                alt="">
                        </div>
                        <h5>DEEPOR BEEL</h5>
                    </div>

                    <div class="rgu-loc-thumb">
                        <div class="rgu-loc-thumb-img">
                            <img src="/new-web/assets/img/Discover RGU  Campus & Student Life  Strategic Location/museum.png"
                                alt="">
                        </div>
                        <h5>MUSEUM</h5>
                    </div>

                </div>

            </div>

            <!-- ================= MAP ================= -->

            <div class="rgu-loc-map-title">
                <h2>Our Location</h2>
            </div>

            <div class="rgu-loc-map-box">

                <iframe src="https://www.google.com/maps?q=The+Assam+Royal+Global+University&output=embed"
                    allowfullscreen="" loading="lazy">
                </iframe>

            </div>

        </div>

    </section>

    <script>
        /* =========================================================
            ===================== LOCATION SLIDER =====================
            ========================================================= */

        const rguLocThumbs = document.querySelectorAll(".rgu-loc-thumb");
        const rguLocSlides = document.querySelectorAll(".rgu-loc-main-slide");

        rguLocThumbs.forEach((thumb, index) => {

            thumb.addEventListener("click", () => {

                rguLocThumbs.forEach(item => item.classList.remove("active"));
                rguLocSlides.forEach(item => item.classList.remove("active"));

                thumb.classList.add("active");
                rguLocSlides[index].classList.add("active");

            });

        });
    </script>

    <script>
        /* =========================================================
        ====================== MODAL SCRIPT =======================
        ========================================================= */

        const rguLocModal = document.getElementById("rguLocModal");
        const rguLocModalContent = document.getElementById("rguLocModalContent");
        const rguLocModalClose = document.getElementById("rguLocModalClose");

        document.querySelectorAll(".rgu-loc-readmore").forEach(btn => {

            btn.addEventListener("click", () => {

                const title = btn.getAttribute("data-title");
                const content = btn.getAttribute("data-content");

                rguLocModalContent.innerHTML = `
            <h2>${title}</h2>
            <p>${content}</p>
        `;

                rguLocModal.classList.add("active");
                document.body.style.overflow = "hidden";
            });

        });

        /* CLOSE BUTTON */

        rguLocModalClose.addEventListener("click", () => {

            rguLocModal.classList.remove("active");
            document.body.style.overflow = "";

        });

        /* CLICK OUTSIDE */

        rguLocModal.addEventListener("click", (e) => {

            if (e.target === rguLocModal) {

                rguLocModal.classList.remove("active");
                document.body.style.overflow = "";

            }

        });

        /* ESC KEY */

        document.addEventListener("keydown", (e) => {

            if (e.key === "Escape") {

                rguLocModal.classList.remove("active");
                document.body.style.overflow = "";

            }

        });
    </script>
@endsection
