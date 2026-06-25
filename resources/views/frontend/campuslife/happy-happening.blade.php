@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/happy-happening/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Happy & Happening Campus</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Student Life & Engagement / Happy & Happening Campus
            </div>
        </div>

    </section>


    <style>
        /* =====================================================
       HAPPY HAPPENING CAMPUS PAGE
       PART 1 + PART 2 + PART 3
    ===================================================== */

        :root {
            --rgu-blue: #29467B;
            --rgu-dark: #03225E;
            --rgu-orange: #E26932;
            --rgu-bg: #EAF0FA;
            --rgu-light: #F5F6F8;
        }

        /* =====================================================
       COMMON
    ===================================================== */

        .happy-campus-sec,
        .campus-events-sec,
        .community-sec,
        .life-beyond-sec {
            background: var(--rgu-bg);
        }

        .happy-campus-container,
        .community-container {
            width: 92%;
            max-width: 1500px;
            margin: auto;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* =====================================================
       PART 1
       LITTLE THINGS THAT MAKE LIFE AT CAMPUS
    ===================================================== */

        .happy-campus-sec {
            padding: 100px 0;
        }

        .happy-campus-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 40px;
            align-items: start;
        }

        .happy-campus-title {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.08;
            color: var(--rgu-blue);
            font-weight: 700;
            margin-bottom: 40px;
            max-width: 850px;
        }

        .happy-campus-main-image {
            border-radius: 28px;
            overflow: hidden;
        }

        .happy-campus-main-image img {
            width: 100%;
            height: 530px;
            object-fit: cover;
            transition: .6s;
        }

        .happy-campus-main-image:hover img {
            transform: scale(1.05);
        }

        .happy-campus-right {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .happy-campus-small-image {
            border-radius: 24px;
            overflow: hidden;
        }

        .happy-campus-small-image img {
            width: 100%;
            height: 308px;
            object-fit: cover;
            transition: .6s;
        }

        .happy-campus-small-image:hover img {
            transform: scale(1.05);
        }

        /* =====================================================
       PART 2
       CAMPUS EVENTS
    ===================================================== */

        .campus-events-sec {
            padding: 20px 0 100px;
        }

        .campus-events-wrapper {
            width: 100%;
            background: var(--rgu-dark);
            border-radius: 80px;
            padding: 80px;
        }

        .campus-events-header {
            text-align: center;
        }

        .campus-events-header h2 {
            color: #fff;
            font-size: 40px;
            font-family: 'Playfair Display', serif;
            margin-bottom: 45px;
        }

        .campus-event-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 50px;
        }

        .event-tab {
            border: none;
            background: rgba(255, 255, 255, .15);
            color: #fff;
            padding: 15px 32px;
            border-radius: 8px;
            cursor: pointer;
            transition: .3s;
            font-size: 15px;
        }

        .event-tab:hover,
        .event-tab.active {
            background: var(--rgu-orange);
        }

        .campus-events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .campus-event-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            transition: .35s;
        }

        .campus-event-card:hover {
            transform: translateY(-8px);
        }

        .campus-event-image {
            overflow: hidden;
        }

        .campus-event-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: .6s;
        }

        .campus-event-card:hover img {
            transform: scale(1.06);
        }

        .campus-event-content {
            padding: 20px;
        }

        .campus-event-content span {
            color: var(--rgu-orange);
            font-size: 13px;
            font-weight: 700;
            display: block;
            margin-bottom: 12px;
        }

        .campus-event-content h3 {
            font-family: 'Playfair Display', serif;
            color: var(--rgu-blue);
            font-size: 25px;
            line-height: 1.2;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .campus-event-content p {
            color: #526480;
            line-height: 1.8;
            margin: 0;
        }

        /* =====================================================
       PART 3
       COMMUNITY
    ===================================================== */

        .community-sec {
            padding: 20px 0 90px;
        }

        .community-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .community-header h2 {
            color: var(--rgu-blue);
            font-family: 'Playfair Display', serif;
            font-size: 40px;
        }

        .community-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .community-card {
            background: #dce8f7;
            border-radius: 8px;
            text-align: center;
            padding: 40px 20px;
            transition: .3s;
        }

        .community-card:hover {
            transform: translateY(-5px);
        }

        .community-card h3 {
            color: var(--rgu-orange);
            font-size: 18px;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .community-card p {
            color: var(--rgu-blue);
            margin: 0;
            font-size: 18px;
        }

        /* =====================================================
       LIFE BEYOND CLASSROOM
    ===================================================== */

        .life-beyond-sec {
            padding: 30px 0 120px;
        }

        .life-beyond-wrapper {
            width: 100%;
            background: var(--rgu-light);
            border-radius: 80px;
            padding: 90px 80px 70px;
        }

        .life-beyond-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .life-beyond-header h2 {
            color: var(--rgu-blue);
            font-size: 40px;
            font-family: 'Playfair Display', serif;
        }

        .life-slider {
            overflow: hidden;
        }

        .life-slider-track {
            display: flex;
            gap: 28px;
            transition: .5s ease;
            will-change: transform;
        }

        .life-card {
            flex: 0 0 calc(33.333% - 19px);
            border: 1px solid #55555541;
            border-radius: 20px;
        }

        @media(max-width:1200px) {

            .life-card {
                flex: 0 0 calc(50% - 14px);
            }

        }

        @media(max-width:768px) {

            .life-card {
                flex: 0 0 100%;
            }

        }

        .life-card:hover {
            transform: translateY(-8px);
        }

        .life-card-image {
            overflow: hidden;
        }

        .life-card-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: .6s;
            border-radius: 20px;
        }

        .life-card:hover img {
            transform: scale(1.05);
        }

        .life-card-content {
            padding: 20px;
        }

        .life-card-content h3 {
            color: var(--rgu-blue);
            font-size: 25px;
            font-family: 'Playfair Display', serif;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .life-card-content p {
            color: #526480;
            line-height: 1.8;
            margin: 0;
        }

        .life-slider-navigation {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 35px;
        }

        .life-prev-btn,
        .life-next-btn {
            width: 46px;
            height: 46px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: .3s;
        }

        .life-prev-btn {
            background: #fff;
            color: var(--rgu-blue);
            border: 1px solid #d8d8d8;
        }

        .life-next-btn {
            background: var(--rgu-orange);
            color: #fff;
        }

        .life-prev-btn:hover,
        .life-next-btn:hover {
            transform: translateY(-2px);
        }

        /* =====================================================
       RESPONSIVE
    ===================================================== */

        @media(max-width:1200px) {

            .happy-campus-title,
            .campus-events-header h2,
            .community-header h2,
            .life-beyond-header h2 {
                font-size: 50px;
            }

            .campus-events-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:991px) {

            .happy-campus-grid {
                grid-template-columns: 1fr;
            }

            .campus-events-wrapper,
            .life-beyond-wrapper {
                padding: 50px 30px;
            }

            .community-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:768px) {

            .happy-campus-sec {
                padding: 60px 0;
            }

            .happy-campus-title,
            .campus-events-header h2,
            .community-header h2,
            .life-beyond-header h2 {
                font-size: 36px;
            }

            .happy-campus-right {
                grid-template-columns: 1fr;
            }

            .campus-events-grid,
            .community-grid {
                grid-template-columns: 1fr;
            }

            .happy-campus-main-image img {
                height: 450px;
            }

            .campus-events-wrapper,
            .life-beyond-wrapper {
                border-radius: 40px;
            }

            .campus-event-content h3,
            .life-card-content h3 {
                font-size: 26px;
            }

        }
    </style>

    <section class="happy-campus-sec">

        <div class="happy-campus-container">

            <div class="happy-campus-grid">

                <!-- LEFT -->

                <div class="happy-campus-left">

                    <h2 class="happy-campus-title">
                        Little Things That Make Life At The Campus Truly Happy
                    </h2>

                    <div class="happy-campus-main-image">
                        <img src="new-web/assets/img/happy-happening/big-img.png" alt="">
                    </div>

                </div>

                <!-- RIGHT -->

                <div class="happy-campus-right">

                    <div class="happy-campus-small-image">
                        <img src="new-web/assets/img/happy-happening/1.png" alt="">
                    </div>

                    <div class="happy-campus-small-image">
                        <img src="new-web/assets/img/happy-happening/2.png" alt="">
                    </div>

                    <div class="happy-campus-small-image">
                        <img src="new-web/assets/img/happy-happening/3.png" alt="">
                    </div>

                    <div class="happy-campus-small-image">
                        <img src="new-web/assets/img/happy-happening/4.png" alt="">
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="campus-events-sec">

        <div class="campus-events-wrapper">

            <div class="campus-events-header">

                <h2>
                    Campus Events And Celebrations
                </h2>

            </div>

            <!-- FILTERS -->

            <div class="campus-event-tabs">

                <button class="event-tab active" data-filter="all">
                    All Events
                </button>

                <button class="event-tab" data-filter="cultural">
                    Cultural
                </button>

                <button class="event-tab" data-filter="technical">
                    Technical
                </button>

                <button class="event-tab" data-filter="sports">
                    Sports
                </button>

                <button class="event-tab" data-filter="academic">
                    Academic
                </button>

                <button class="event-tab" data-filter="social">
                    Social Service
                </button>

            </div>

            <!-- GRID -->

            <div class="campus-events-grid">

                <!-- CARD 1 -->

                <article class="campus-event-card" data-category="cultural">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/cultural.png" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Cultural</span>

                        <h3>
                            Euphoria – Annual Cultural Fest
                        </h3>

                        <p>
                            RGU's flagship cultural night featuring live music,
                            dance battles, fashion and drama on the main stage.
                        </p>

                    </div>

                </article>

                <!-- CARD 2 -->

                <article class="campus-event-card" data-category="technical">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/competetion.png" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Technical</span>

                        <h3>
                            TechNova – Tech Fest
                        </h3>

                        <p>
                            Hackathons, coding challenges, robotics demos and innovation showcases.
                        </p>

                    </div>

                </article>

                <!-- CARD 3 -->

                <article class="campus-event-card" data-category="sports">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/sports.png" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Sports</span>

                        <h3>
                            Royal Sports Meet
                        </h3>

                        <p>
                            Annual athletics championship featuring multiple sports disciplines.
                        </p>

                    </div>

                </article>

                <!-- CARD 4 -->

                <article class="campus-event-card" data-category="academic">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/guest-lecturer.png" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Academic</span>

                        <h3>
                            Guest Lectures And Workshops
                        </h3>

                        <p>
                            Sessions by industry leaders, researchers and academic experts.
                        </p>

                    </div>

                </article>

                <!-- CARD 5 -->

                <article class="campus-event-card" data-category="social">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/nss.png" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Social Service</span>

                        <h3>
                            NSS Community Drives
                        </h3>

                        <p>
                            Plantation drives, blood donation camps and outreach programmes.
                        </p>

                    </div>

                </article>

                <!-- CARD 6 -->

                <article class="campus-event-card" data-category="cultural">

                    <div class="campus-event-image">
                        <img src="new-web/assets/img/happy-happening/campus-events/freshers.jpg" alt="">
                    </div>

                    <div class="campus-event-content">

                        <span>Cultural</span>

                        <h3>
                            Freshers' Welcome
                        </h3>

                        <p>
                            Welcoming new students into the RGU family through performances.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- FIND YOUR COMMUNITY -->

    <section class="community-sec">

        <div class="community-container">

            <div class="community-header">

                <h2>
                    Find Your Community
                </h2>

            </div>

            <div class="community-grid">

                <div class="community-card">
                    <h3>Literary Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Rangmanch Theatre Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Confluence: Cultural Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Sports Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Vittaanta: The History Society</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Astronomy Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Microbiology Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Zoology Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Botanical Society of RGU</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Helping Hands Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>University Peace Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Royal Commerce Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Rotaract Club of RGU</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>MUN Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Optima: Management Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Yoga Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Sansad Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Football Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>AD and Movie Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Photography Club</h3>
                    <p>Arts & Media</p>
                </div>

                <div class="community-card">
                    <h3>Music Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Dance Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Fine Arts Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Quiz Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Eco Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>RGU Chess Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Mathematics Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Health Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Human Rights Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Innovation and Entrepreneurship Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Fashion Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Electronics Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Coding Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>Royal Youth Red Cross Club</h3>
                    <p>Club & Community</p>
                </div>

                <div class="community-card">
                    <h3>RGU Film Society</h3>
                    <p>Club & Community</p>
                </div>

            </div>

        </div>

    </section>



    <!-- LIFE BEYOND THE CLASSROOM -->

    <section class="life-beyond-sec">

        <div class="life-beyond-wrapper">

            <div class="life-beyond-header">

                <h2>
                    Life Beyond The Classroom
                </h2>

            </div>

            <!-- SLIDER CONTAINER -->

            <div class="life-slider">

                <div class="life-slider-track">

                    <!-- CARD 1 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="https://www.rgu.ac/mobile-assets/hostel-life/heyansh.png" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Hostel Life
                            </h3>

                            <p>
                                Separate residential facilities for boys and girls,
                                fostering friendships and independence in a safe environment.
                            </p>

                        </div>

                    </article>

                    <!-- CARD 2 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="https://media.rgu.ac/facilities/Hangouts.jpg" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Dining And Hangouts
                            </h3>

                            <p>
                                On-campus cafeterias, department store, salon and
                                hangout spaces that make daily life comfortable and vibrant.
                            </p>

                        </div>

                    </article>

                    <!-- CARD 3 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="https://www.rgu.ac/mobile-assets/medical-facility/1a.jpeg" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Health & Wellness
                            </h3>

                            <p>
                                On-campus medical facility, counselling cell and equal
                                opportunities support every student's wellbeing.
                            </p>

                        </div>

                    </article>

                    <!-- CARD 4 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="new-web/assets/img/happy-happening/campus-events/clubs.png" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Student Clubs
                            </h3>

                            <p>
                                Explore leadership, creativity and networking opportunities
                                through diverse student clubs.
                            </p>

                        </div>

                    </article>

                    <!-- CARD 5 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="https://media.rgu.ac/facilities/games.jpg" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Sports & Fitness
                            </h3>

                            <p>
                                Stay active with indoor and outdoor sports facilities,
                                fitness activities and tournaments.
                            </p>

                        </div>

                    </article>

                    <!-- CARD 6 -->

                    <article class="life-card">

                        <div class="life-card-image">
                            <img src="new-web/assets/img/happy-happening/campus-events/salon.jpg" alt="">
                        </div>

                        <div class="life-card-content">

                            <h3>
                                Campus Facilities
                            </h3>

                            <p>
                                Banking, laundry, salon, medical services and essential
                                conveniences available within the campus.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

            <!-- CUSTOM NAVIGATION -->

            <div class="life-slider-navigation">

                <button class="life-prev-btn">
                    ←
                </button>

                <button class="life-next-btn">
                    →
                </button>

            </div>

        </div>

    </section>

    <script>
        /* =====================================================
               PART 2
               EVENT FILTERS
            ===================================================== */

        document.addEventListener("DOMContentLoaded", function() {

            const tabs = document.querySelectorAll(".event-tab");
            const cards = document.querySelectorAll(".campus-event-card");

            tabs.forEach(tab => {

                tab.addEventListener("click", function() {

                    tabs.forEach(btn => {
                        btn.classList.remove("active");
                    });

                    this.classList.add("active");

                    const filter = this.getAttribute("data-filter");

                    cards.forEach(card => {

                        const category = card.getAttribute("data-category");

                        if (filter === "all" || category === filter) {

                            card.style.display = "block";

                            setTimeout(() => {
                                card.style.opacity = "1";
                                card.style.transform = "scale(1)";
                            }, 50);

                        } else {

                            card.style.opacity = "0";
                            card.style.transform = "scale(.95)";

                            setTimeout(() => {
                                card.style.display = "none";
                            }, 200);

                        }

                    });

                });

            });

        });


        /* =====================================================
           PART 3
           LIFE BEYOND CLASSROOM SLIDER
        ===================================================== */

        document.addEventListener("DOMContentLoaded", function() {

            const track = document.querySelector(".life-slider-track");
            const nextBtn = document.querySelector(".life-next-btn");
            const prevBtn = document.querySelector(".life-prev-btn");

            if (!track || !nextBtn || !prevBtn) return;

            const cards = document.querySelectorAll(".life-card");

            let currentIndex = 0;

            function getVisibleCards() {

                if (window.innerWidth <= 768) {
                    return 1;
                }

                if (window.innerWidth <= 1200) {
                    return 2;
                }

                return 3;
            }

            function updateSlider() {

                const visibleCards = getVisibleCards();

                const cardWidth = cards[0].offsetWidth + 28;

                track.style.transform =
                    `translateX(-${currentIndex * cardWidth}px)`;

            }

            nextBtn.addEventListener("click", function() {

                const visibleCards = getVisibleCards();

                const maxIndex =
                    cards.length - visibleCards;

                if (currentIndex >= maxIndex) {

                    currentIndex = 0;

                } else {

                    currentIndex++;

                }

                updateSlider();

            });

            prevBtn.addEventListener("click", function() {

                const visibleCards = getVisibleCards();

                const maxIndex =
                    cards.length - visibleCards;

                if (currentIndex <= 0) {

                    currentIndex = maxIndex;

                } else {

                    currentIndex--;

                }

                updateSlider();

            });

            window.addEventListener("resize", updateSlider);

            updateSlider();

        });


        /* =====================================================
           OPTIONAL AUTO PLAY
           REMOVE IF NOT REQUIRED
        ===================================================== */

        document.addEventListener("DOMContentLoaded", function() {

            const nextBtn = document.querySelector(".life-next-btn");

            if (!nextBtn) return;

            setInterval(() => {

                nextBtn.click();

            }, 5000);

        });
    </script>
@endsection
