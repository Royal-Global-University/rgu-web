@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 30px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Political Science</span> </h2>
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
                            Welcome to The Assam Royal Global University’s Ph.D. programme in Political Science. We
                            offer both full time and part time Ph.D. in the field of Political Science. Specially,
                            research scholars are encouraged to work on areas such as international relations, Indian
                            politics, North East politics, human rights, etc. Researchers get a chance to work under the
                            supervision of experienced and highly qualified supervisors. As a part of the programme,
                            scholars need to do a course work for a period of 6 months. Periodical presentations,
                            progress report submissions, doing good quality literature review, etc. are a part of the
                            programme. After completing Ph.D. from here, research scholars get opportunities to pursue
                            their career in academia, research institutes, NGOs, think tanks, etc.
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
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">in Political
                                Science</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Welcome to The Assam Royal Global University’s Ph.D. programme in Political Science. We
                            offer both full time and part time Ph.D. in the field of Political Science. Specially,
                            research scholars are encouraged to work on areas such as international relations, Indian
                            politics, North East politics, human rights, etc. Researchers get a chance to work under the
                            supervision of experienced and highly qualified supervisors. As a part of the programme,
                            scholars need to do a course work for a period of 6 months. Periodical presentations,
                            progress report submissions, doing good quality literature review, etc. are a part of the
                            programme. After completing Ph.D. from here, research scholars get opportunities to pursue
                            their career in academia, research institutes, NGOs, think tanks, etc.
                        </p>



                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
