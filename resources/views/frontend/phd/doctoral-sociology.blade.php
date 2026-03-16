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
                                in Sociology</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">


                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            The doctoral programme in Sociology aims to build researchers who are intellectually
                            independent and can generate original research that is theoretically, analytically and
                            empirically robust. The programme is shaped and structured in a way so that the
                            researchers can connect their studies to the world and social environment around them.
                            Apart from this active participation is encouraged in departmental activities and that
                            outside the university so as to help them move beyond rigid boundaries and broaden their
                            perspectives and horizon on their research topics. All these help in encouraging them to
                            have a more inclusive outlook and if possible incorporate the same in their research as
                            well as members of society.
                        </p>

                    </div>

                </div>
            </div>
        </section>
        <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
            <h2 class="mobile-headd2 text-dark">
                Ph.D. Curriculum
            </h2>

            @include('frontend/components/phddeptmob')
        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">
            @include('frontend/components/aheader')
            <section
                style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding: 50px 0px;">
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
                                Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Sociology</span>
                            </h2>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                The doctoral programme in Sociology aims to build researchers who are intellectually
                                independent and can generate original research that is theoretically, analytically and
                                empirically robust. The programme is shaped and structured in a way so that the
                                researchers can connect their studies to the world and social environment around them.
                                Apart from this active participation is encouraged in departmental activities and that
                                outside the university so as to help them move beyond rigid boundaries and broaden their
                                perspectives and horizon on their research topics. All these help in encouraging them to
                                have a more inclusive outlook and if possible incorporate the same in their research as
                                well as members of society.
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
