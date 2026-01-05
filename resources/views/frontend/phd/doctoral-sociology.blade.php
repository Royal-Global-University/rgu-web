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

                        <h2 class="mobile-headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Guides <span style="color: #FF9A1E; font-weight: 500;">
                                and Research Interests</span> </h2>

                    </div>

                    <div class="pt-3" style="display: flex; justify-content: center; align-items: center;">

                        <div class="row">

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                    <div class="p-3">
                                        <img style="height: 290px; width: 100%;"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/surajit.jpeg"
                                            class="img-fluid rounded border" />
                                    </div>

                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                            Dr. Surajit Mukhopadhyay
                                        </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            Dean, RSHSS
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                    <div class="p-3">
                                        <img style="height: 290px; width: 100%;"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/tripti.jpg"
                                            class="img-fluid rounded border" />
                                    </div>

                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                            Dr. Tripti Das
                                        </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            Assistant Professor
                                        </p>

                                        <p class="para1 fw-bold text-dark">
                                            Research Interest:
                                        </p>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            Sociology of Science, Gender and Technology
                                        </p>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                    <div class="p-3">
                                        <img style="height: 290px; width: 100%;"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/denim.jpg"
                                            class="img-fluid rounded border" />
                                    </div>

                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                            Dr. Denim Deka
                                        </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            Assistant Professor
                                        </p>

                                        <p class="para1 fw-bold text-dark">
                                            Research Interest:
                                        </p>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            Northeast studies, Marginality and Exclusion, waste, urban sociology
                                        </p>

                                    </div>

                                </div>
                            </div>

                        </div>

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

        <div style="padding: 40px 60px;">

            <h2 class="headd1 fw-bold pb-3 pt-4 text-center" style="color: #264273; font-weight: 700;">Ph.D. Guides and <span
                    style="color: #FF9A1E; font-weight: 500;">Research Interests</span>
            </h2>

            <div class="row" style="display: flex; align-items: center; justify-content: center;">
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column"
                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                        <div class="p-3">
                            <img style="height: 290px; width: 100%;"
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/surajit.jpeg"
                                class="img-fluid rounded border" />
                        </div>

                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                Dr. Surajit Mukhopadhyay
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Dean, RSHSS
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            <hr>

            <div class="row p-5">
                <div class="col-lg-2"></div>

                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column"
                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                        <div class="p-3">
                            <img style="height: 290px; width: 100%;"
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/tripti.jpg"
                                class="img-fluid rounded border" />
                        </div>

                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                Dr. Tripti Das
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Assistant Professor
                            </p>

                            <p class="para1 fw-bold text-dark">
                                Research Interest:
                            </p>

                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Sociology of Science, Gender and Technology
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column"
                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                        <div class="p-3">
                            <img style="height: 290px; width: 100%;"
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-sociology/denim.jpg"
                                class="img-fluid rounded border" />
                        </div>

                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-2">
                                Dr. Denim Deka
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Assistant Professor
                            </p>

                            <p class="para1 fw-bold text-dark">
                                Research Interest:
                            </p>

                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Northeast studies, Marginality and Exclusion, waste, urban sociology
                            </p>

                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="container">
            <div class="headd2 fw-bold text-dark kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')
        </div>
    </div>
@endsection
