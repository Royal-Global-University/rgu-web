@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 120px; position: relative; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Placement <span style="color: #FF9A1E; font-weight: 500;">
                                Process</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/placement-all/placement-process/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pt-3">

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            Royal Centre for Corporate Relations (RCCR) shares details of job/internship opportunity with
                            students, arranges Pre-Placement Talks, Campus Visits and coordinates recruitment exercise on
                            campus or through virtual mode.
                            Every organization is requested to conduct a pre-placement talk to provide the students an
                            opportunity to understand the organization, its work culture, job profile offered, remuneration,
                            and other associated details beforehand enabling the candidates to invest their highest
                            potential and upholding transparency.
                            Regular interactive sessions with students conducted by RCCR enable a thorough understanding of
                            the job market for students who opt to seek placement. This centre also acquaints prospective
                            employers in the industrial and corporate sectors regarding talented and industry-ready
                            candidates from The Assam Royal Global University
                        </p>

                    </div>
                </div>
                <img src="mobile-assets/placement-all/placement-process/img1.png" alt="">
            </div>
        </section>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/placement-all/placement-process/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Placement <span style="color: #FF9A1E; font-weight: 500;">
                                Process</span> </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Royal Centre for Corporate Relations (RCCR) shares details of job/internship opportunity with
                            students, arranges Pre-Placement Talks, Campus Visits and coordinates recruitment exercise on
                            campus or through virtual mode.
                            Every organization is requested to conduct a pre-placement talk to provide the students an
                            opportunity to understand the organization, its work culture, job profile offered, remuneration,
                            and other associated details beforehand enabling the candidates to invest their highest
                            potential and upholding transparency.
                            Regular interactive sessions with students conducted by RCCR enable a thorough understanding of
                            the job market for students who opt to seek placement. This centre also acquaints prospective
                            employers in the industrial and corporate sectors regarding talented and industry-ready
                            candidates from The Assam Royal Global University
                        </p>

                    </div>
                </div>
            </div>

        </section>


    </div>

@endsection
