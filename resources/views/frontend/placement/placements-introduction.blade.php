@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 120px; position: relative; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            About <span style="color: #FF9A1E; font-weight: 500;">
                                Department</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="mobile-assets/placement-all/placement-intro/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">


                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            Royal Centre for Corporate Relations (RCCR) strives to provide employable students with best of
                            opportunities on campus to start their corporate journey with reputed organizations across
                            India. RCCR is an indispensable pillar of the University as it plays a pivotal role in shaping
                            every student’s future.
                        </p>
                        <h2 class="mobile-headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            The Centre is <span style="color: #FF9A1E; font-weight: 500;">
                                Composed of:</span> </h2>

                        <ol class="mobile-para1" style="color: #264273; text-align: left;">
                            <li>Members of the RCCR.</li>
                            <li>One faculty placement coordinator from each Department.</li>
                            <li>Student coordinators from every department.</li>
                            <li>Senior officers of the University (As Advisors/Mentors to the Centre).</li>
                        </ol>
                        <p class="mobile-para1 mt-3" style="color: #264273; text-align: justify;">
                            The centre continuously endeavours to help students in pursuing their career goals by imparting
                            employment-seeking skills and thereby to attain desired employment. This is accomplished through
                            a strong bond created amongst students, alumni, faculty members and the industry. Royal Centre
                            for Corporate Relations mentors students to the effect that they are industry-ready at the end
                            of their final academic session. The centre is unique in nature as it aims at grooming students
                            ethically as well as in terms of attitude and aptitude, through regular training and interactive
                            sessions. The main objective of this Centre is to make the students ready to face the challenges
                            of the corporate world and to help them in getting placed after completing respective courses.
                        </p>

                    </div>
                </div>
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
                                    src="mobile-assets/placement-all/placement-intro/headimg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            About <span style="color: #FF9A1E; font-weight: 500;">
                                Department</span> </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Royal Centre for Corporate Relations (RCCR) strives to provide employable students with best of
                            opportunities on campus to start their corporate journey with reputed organizations across
                            India. RCCR is an indispensable pillar of the University as it plays a pivotal role in shaping
                            every student’s future.
                        </p>

                        <h2 class="headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            The Centre is <span style="color: #FF9A1E; font-weight: 500;">
                                Composed of:</span> </h2>

                        <ol class="para1" style="color: #264273; text-align: left;">
                            <li>Members of the RCCR.</li>
                            <li>One faculty placement coordinator from each Department.</li>
                            <li>Student coordinators from every department.</li>
                            <li>Senior officers of the University (As Advisors/Mentors to the Centre).</li>
                        </ol>

                    </div>
                </div>
            </div>

        </section>

        <div style="background-image: url(mobile-assets/placement-all/bg.svg); background-size: cover; padding: 30px 0px;">
            <div class="container">
                <p style="color: #264273; font-size: 24px; color:#264273; text-align: justify; font-weight: 400;">
                    The centre continuously endeavours to help students in pursuing their career goals by imparting
                    employment-seeking skills and thereby to attain desired employment. This is accomplished through a
                    strong bond created amongst students, alumni, faculty members and the industry. Royal Centre for
                    Corporate Relations mentors students to the effect that they are industry-ready at the end of their
                    final academic session. The centre is unique in nature as it aims at grooming students ethically as well
                    as in terms of attitude and aptitude, through regular training and interactive sessions. The main
                    objective of this Centre is to make the students ready to face the challenges of the corporate world and
                    to help them in getting placed after completing respective courses.
                </p>
            </div>
        </div>

    </div>
@endsection
