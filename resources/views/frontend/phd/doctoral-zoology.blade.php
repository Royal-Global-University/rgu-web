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
                                in Zoology</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">


                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Zoology is an advanced degree programme that provides students with in-depth
                            knowledge and research experience in the study of animal life. Zoology is a branch of
                            biology that focuses on the structure, function, behavior, evolution, and ecology of
                            animals, from the smallest invertebrates to the largest mammals.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            During a Ph.D. programme in Zoology, students typically undertake advanced
                            coursework in areas such as ecology, evolution, genetics, animal
                            behavior, physiology, and anatomy, as well as statistics and research
                            methods. They also engage in independent research under the guidance of
                            a faculty advisor, and typically write and defend a thesis based on
                            their research findings.The programme aims to provide students with a deep
                            understanding of animal life and prepare them for careers in academia,
                            research, science communication, or conservation work.
                        </p>

                    </div>

                </div>
            </div>
        </section>

    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

            @include('frontend/components/aheader')
            <section
                style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
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

                            <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                                Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Zoology</span>
                            </h2>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                A Ph.D. in Zoology is an advanced degree programme that provides students with in-depth
                                knowledge and research experience in the study of animal life. Zoology is a branch of
                                biology that focuses on the structure, function, behavior, evolution, and ecology of
                                animals, from the smallest invertebrates to the largest mammals.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                During a Ph.D. programme in Zoology, students typically undertake advanced
                                coursework in areas such as ecology, evolution, genetics, animal
                                behavior, physiology, and anatomy, as well as statistics and research
                                methods. They also engage in independent research under the guidance of
                                a faculty advisor, and typically write and defend a thesis based on
                                their research findings.The programme aims to provide students with a deep
                                understanding of animal life and prepare them for careers in academia,
                                research, science communication, or conservation work.
                            </p>

                        </div>
                    </div>
                </div>

            </section>


        </div>

        <div class="container">
            <div class="headd2 fw-bold text-dark kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')
        </div>
    </div>
@endsection
