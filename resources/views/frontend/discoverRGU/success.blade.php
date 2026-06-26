@extends('frontend/new-master')
@section('title', 'Sucess Stories : The Assam Royal Global University')
@section('meta_description', 'Explore inspiring success stories from Royal Global University, where students, alumni, and faculty share their journeys of achievement, innovation, and personal growth.')
@section('meta_keywords', 'Sucess Stories')
@section('content')

    <style>
        .success-story-section {
            background: #d8dee8;
            padding: 70px 0;
        }

        .success-story-tabs {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 45px;
        }

        .success-story-tab {
            min-width: 120px;
            height: 42px;
            border: 1px solid #cfd5df;
            background: #fff;
            color: #666;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: .3s;
        }

        .success-story-tab.active {
            background: #e9743a;
            border-color: #e9743a;
            color: #fff;
        }

        .success-story-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .success-story-card {
            background: #f3f3f3;
            border-radius: 8px;
            overflow: hidden;
            transition: .35s;
        }

        .success-story-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .08);
        }

        .success-story-img {
            height: 250px;
            background: #cfdbea;
            overflow: hidden;
        }

        .success-story-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .success-story-content {
            padding: 22px;
        }

        .success-story-text {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            min-height: 170px;
            position: relative;
            padding-bottom: 30px;
        }

        .success-story-text::after {
            content: "❞";
            position: absolute;
            right: 0;
            bottom: -10px;
            color: #e9743a;
            font-size: 40px;
            font-weight: bold;
        }

        .success-story-readmore {
            display: inline-block;
            margin: 12px 0 18px;
            color: #27467a;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
        }

        .success-story-author h4 {
            font-size: 20px;
            color: #e9743a;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .success-story-author span {
            display: block;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .success-story-card.hide {
            display: none;
        }

        @media(max-width:991px) {
            .success-story-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:767px) {

            .success-story-section {
                padding: 50px 0;
            }

            .success-story-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .success-story-tabs {
                flex-wrap: wrap;
            }

            .success-story-tab {
                min-width: 100px;
            }

            .success-story-img {
                height: 220px;
            }
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/testimonial/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Success Stories</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Campus & Student Life / Success Stories
            </div>
        </div>

    </section>

    <section class="success-story-section">
        <div class="container">

            <!-- Tabs -->

            <!-- Cards Grid -->
            <div class="success-story-grid">

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/1.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            I take Immense pride in Identifying Assam Royal debar university as my alma motet I
                            completed my bachelor of science in behavioral and Allied sciences at the Royal School of
                            Biosciences, graduating in 2023. After this achievement. I chose to advance my education in
                            the vibrant field of business, moving to the capital to enhance my knowledge in behavioral
                            and Allied Sciences. Currently, serve as a Research Analyst at Georgian College in Ontario,
                            Canada.
                        </p>


                        <div class="success-story-author">
                            <h4>Maibam Noonny Khuman</h4>
                            <span>Royal School of Biosciences</span>
                        </div>

                    </div>
                </div>

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/2.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            On a very positive note, there has been a steady increase in the number of companies
                            recruiting Royalites every year. Besides
                            focusing on academic rigor, students are engaged in interactive sessions with corporates,
                            industrial visits, workshops on
                            in-demand skills, research paper presentations and are encouraged to participate in
                            management competitions.
                        </p>



                        <div class="success-story-author">
                            <h4>Upasana Kashyap</h4>
                            <span>RSET</span>
                        </div>

                    </div>
                </div>

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/3.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            An alumnus of the Royal Group of Institutions, now recognized as The Royal Global University
                            in Guwahati, Assam. It is my pleasure to share my professional journey with you. Presently,
                            I hold the position of Research Scientist in the Research and Development department at
                            Siemens Technology and Services Private Limited. I earned my Ph.D. from IIT Kharagpur after
                            completing my undergraduate studies at The Assam Royal Global University.
                        </p>



                        <div class="success-story-author">
                            <h4>Dr. Pallab Kumar Das</h4>
                            <span>RSET</span>
                        </div>

                    </div>
                </div>

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/4.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            A distinguished alumnus of the Royal Group of Institutions (The Assam Royal Global
                            University) in Guwahati, where I have made notable advancements in my professional
                            career. I commenced my studies at the university in 2010 and completed my degree
                            between 2010 and 2014. 2.
                        </p>



                        <div class="success-story-author">
                            <h4>Vishal More</h4>
                            <span>Founder & CEO of Arsaviva Technology Private Limited</span>
                        </div>

                    </div>
                </div>

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/5.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            My experience at The Royal Global Institute was both unique and transformative, profoundly
                            influencing my academic and personal
                            development. The university's diverse curriculum, with a strong focus on practical
                            application, enabled me to immerse myself in my field while also
                            exploring interdisciplinary topics.
                        </p>



                        <div class="success-story-author">
                            <h4>Ripunjit Borah</h4>
                            <span>Royal School of Business</span>
                        </div>

                    </div>
                </div>

                <!-- CARD -->
                <div class="success-story-card" data-category="student">
                    <div class="success-story-img">
                        <img src="/new-web/assets/img/testimonial/6.png" alt="">
                    </div>

                    <div class="success-story-content">

                        <p class="success-story-text">
                            I take great pride in being an alumnus of The Assam Royal Global University in Guwahati,
                            where / achieved significant career milestones. My association with the university
                            commenced in 2017 when I enrolled in the Royal Group of Institutions, culminating in the
                            successful completion of my graduation in Fashion design & Technology studies in 2020.

                        </p>



                        <div class="success-story-author">
                            <h4>Shivangi Agarwal</h4>
                            <span>Royal School of Fashion Design & Technology</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <script>
    const successStoryTabs = document.querySelectorAll(".success-story-tab");
    const successStoryCards = document.querySelectorAll(".success-story-card");

    successStoryTabs.forEach(tab => {

        tab.addEventListener("click", () => {

            successStoryTabs.forEach(btn =>
                btn.classList.remove("active")
            );

            tab.classList.add("active");

            const filter = tab.dataset.filter;

            successStoryCards.forEach(card => {

                if (
                    filter === "all" ||
                    card.dataset.category === filter
                ) {
                    card.classList.remove("hide");
                } else {
                    card.classList.add("hide");
                }

            });

        });

    });
</script>

@endsection
