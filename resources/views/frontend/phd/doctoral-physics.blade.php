@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 100px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Physics</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Physics is a prestigious and intellectually demanding program that offers
                            aspiring physicists the opportunity to explore the fundamental principles governing the
                            universe.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. candidates delve into advanced topics within physics, engaging in original research
                            and experimentation. They work closely with experienced faculty members and researchers to
                            unravel complex phenomena, develop new theories, or contribute to ongoing scientific
                            inquiries. The program emphasizes critical thinking, problem-solving, and a deep
                            understanding of physics principles.
                        </p>

                        <p class="para1 pb-4" style="color: #264273; text-align: justify;">
                            The culmination of the Ph.D. is a comprehensive thesis, presenting the candidate's original
                            research findings. Graduates often pursue careers in academia, research institutions,
                            government laboratories, and the private sector, where their expertise contributes to
                            advancements in fields like astrophysics, condensed matter physics, particle physics, and
                            more. A Ph.D. in Physics opens doors to a world of discovery and innovation, shaping the
                            future of science and technology.
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
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Physics</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Physics is a prestigious and intellectually demanding program that offers
                            aspiring physicists the opportunity to explore the fundamental principles governing the
                            universe.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. candidates delve into advanced topics within physics, engaging in original research
                            and experimentation. They work closely with experienced faculty members and researchers to
                            unravel complex phenomena, develop new theories, or contribute to ongoing scientific
                            inquiries. The program emphasizes critical thinking, problem-solving, and a deep
                            understanding of physics principles.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <div style="padding: 30px 60px;">

            <p class="para1 pb-4" style="color: #264273; text-align: justify;">
                The culmination of the Ph.D. is a comprehensive thesis, presenting the candidate's original research
                findings. Graduates often pursue careers in academia, research institutions, government laboratories,
                and the private sector, where their expertise contributes to advancements in fields like astrophysics,
                condensed matter physics, particle physics, and more. A Ph.D. in Physics opens doors to a world of
                discovery and innovation, shaping the future of science and technology.
            </p>

        </div>

    </div>
@endsection
