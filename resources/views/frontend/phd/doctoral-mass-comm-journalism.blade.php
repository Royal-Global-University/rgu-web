@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Comunication and Media (RSCOM)</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">


                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Journalism & Mass Communication is a scholarly pursuit that offers individuals
                            the opportunity to explore the dynamic and ever-evolving field of media and communication.
                            Ph.D. candidates embark on a journey of in-depth research and critical analysis of media
                            phenomena, communication theories, and emerging trends. They often conduct extensive
                            fieldwork, surveys, and case studies to contribute original insights to the discipline. The
                            culmination of their efforts is a comprehensive dissertation that adds to the body of
                            knowledge in journalism and mass communication.
                        </p>

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            This programme not only equips individuals with advanced research and analytical skills but
                            also prepares them for careers in academia, media research, policy analysis, and
                            communication consulting. A Ph.D. in Journalism & Mass Communication is a pathway to
                            becoming a thought leader and shaping the future of media and communication practices in the
                            country.

                        </p>

                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class=" fw-bold mt-3" style="color: #264273; font-weight: 700; font-size: 32px;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">in Comunication and
                                Media (RSCOM)</span>
                        </h2>

                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            A Ph.D. in Journalism & Mass Communication is a scholarly pursuit that offers individuals
                            the opportunity to explore the dynamic and ever-evolving field of media and communication.
                            Ph.D. candidates embark on a journey of in-depth research and critical analysis of media
                            phenomena, communication theories, and emerging trends. They often conduct extensive
                            fieldwork, surveys, and case studies to contribute original insights to the discipline. The
                            culmination of their efforts is a comprehensive dissertation that adds to the body of
                            knowledge in journalism and mass communication.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            This programme not only equips individuals with advanced research and analytical skills but
                            also prepares them for careers in academia, media research, policy analysis, and
                            communication consulting. A Ph.D. in Journalism & Mass Communication is a pathway to
                            becoming a thought leader and shaping the future of media and communication practices in the
                            country.
                        </p>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
