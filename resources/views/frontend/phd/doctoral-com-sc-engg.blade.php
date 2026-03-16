@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Infomation Technology</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The Assam Royal Global University (RGU) stands at the forefront of education and research in
                            the ever-evolving field of IT. It is dedicated to building a strong foundation in computing
                            principles, system design, and emerging technologies, while also fostering critical thinking
                            and problem-solving skills.


                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            At the doctoral level, a research-intensive Ph.D. program is offered aiming at developing
                            thought leaders and innovators in the IT domain. The program encourages exploration in
                            frontier areas like IoT, blockchain, intelligent systems, data science, and digital
                            transformation. With access to cutting-edge infrastructure, cross-disciplinary research
                            collaborations, and industry partnerships, doctoral scholars are empowered to produce
                            impactful research with real-world applications. The idea is to nurture scholars who
                            contribute to academic advancement, technological progress, and societal development through
                            high-quality research and innovation.

                        </p>

                        <h2 class="headd3 fw-bold text-dark">Computer Applications</h2>
                        <p class="para1" style="color: #264273; text-align: justify;">
                            With a strong focus on interdisciplinary learning and cutting-edge technology, the Ph.D.
                            program is
                            committed to nurturing skilled professionals and researchers who can contribute meaningfully
                            to the
                            rapidly evolving digital landscape.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            At the doctoral level, the Department of Computer Applications fosters a culture of deep
                            inquiry and
                            innovation. The Ph.D. program is designed to address real-world challenges through advanced
                            research in
                            areas such as machine learning, big data analytics, cloud computing, and human-computer
                            interaction.
                            Scholars benefit from access to rich academic resources, interdisciplinary research
                            opportunities, and
                            strong industry linkages. With a focus on originality, ethical perspectives, and societal
                            impact, the
                            department prepares its doctoral candidates for careers in academia, high-end research, and
                            leadership
                            roles in the tech industry.
                        </p>


                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">in Information
                                Technology</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The Assam Royal Global University (RGU) stands at the forefront of education and research in
                            the ever-evolving field of IT. It is dedicated to building a strong foundation in computing
                            principles, system design, and emerging technologies, while also fostering critical thinking
                            and problem-solving skills.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            At the doctoral level, a research-intensive Ph.D. program is offered aiming at developing
                            thought leaders and innovators in the IT domain. The program encourages exploration in
                            frontier areas like IoT, blockchain, intelligent systems, data science, and digital
                            transformation. With access to cutting-edge infrastructure, cross-disciplinary research
                            collaborations, and industry partnerships, doctoral scholars are empowered to produce
                            impactful research with real-world applications. The idea is to nurture scholars who
                            contribute to academic advancement, technological progress, and societal development through
                            high-quality research and innovation.
                        </p>

                    </div>
                </div>
            </div>

        </section>

        <div style="padding: 30px 60px;">
            <h2 class="headd1 fw-bold text-dark">Computer Applications</h2>
            <p class="para1" style="color: #264273;">
                With a strong focus on interdisciplinary learning and cutting-edge technology, the Ph.D. program is
                committed to nurturing skilled professionals and researchers who can contribute meaningfully to the
                rapidly evolving digital landscape.
            </p>

            <p class="para1" style="color: #264273;">
                At the doctoral level, the Department of Computer Applications fosters a culture of deep inquiry and
                innovation. The Ph.D. program is designed to address real-world challenges through advanced research in
                areas such as machine learning, big data analytics, cloud computing, and human-computer interaction.
                Scholars benefit from access to rich academic resources, interdisciplinary research opportunities, and
                strong industry linkages. With a focus on originality, ethical perspectives, and societal impact, the
                department prepares its doctoral candidates for careers in academia, high-end research, and leadership
                roles in the tech industry.
            </p>
        </div>

    </div>
@endsection
