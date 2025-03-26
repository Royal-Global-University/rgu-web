@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">International <span
                                    style="color: #FF9A1E; font-weight: 500;">Student Helpline</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/intern-helpline/headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                style="background-image: url(mobile-assets/intern-helpline/helpline-bg.svg); background-size: cover; padding-bottom: 50px;">

                <section class="container">
                    <h2 class="mobile-headd3 fw-bold pb-3 " style="color: #264273;">
                        The University provides several support services to international students so that their study and stay
                        in India is hassle free.
                    </h2>
                    <ol class="custom-ol mobile-para1 pb-2">
                        <li>Guidance throughout your chosen program of study regarding any financial issues, counselling and
                            documentation support.</li>
                        <li>Specialised advisory services for international students.</li>
                        <li>Referrals to relevant contacts inside and outside the University.</li>
                        <li>Social programs and promotion of activities for international students.</li>
                    </ol>

                    <hr>

                    <h2 class="mobile-headd3 fw-bold pb-3" style="color: #264273;">
                        For any support or guidance, international students (present or future) can connect with:
                    </h2>

                </section>

                <div class="container">
                    <div class="container"
                        style="background: #1f3b6b; color: white; padding: 15px; border-radius: 10px; flex-wrap: wrap; text-align: center;">
                        <p class="mobile-mobile-headd3" style="font-weight: bold;">Contact:</p>
                        <p class="mobile-para1">Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs
                        </p>
                        <p class="mobile-para1"><span style="font-weight: bold;">Ph. no:</span> <a href="tel:+919864049818"
                                style="color: white; text-decoration: none;">+91 9864049818</a></p>
                        <p class="mobile-para1"><span style="font-weight: bold;">Email:</span> <a href="mailto:gkanand@rgu.ac"
                                style="color: white; text-decoration: none;">gkanand@rgu.ac</a></p>
                        <a href="tel:+919864049818" class="mobile-call-btn fw-bold"
                            style="text-decoration: none; background: #FF9A1E; color: white; padding: 8px 20px; border-radius: 5px; font-size: 18px; margin-top: 10px; display: inline-block;">
                            Call Now
                        </a>
                    </div>
                </div>


            </section>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <!--head image Section-->
        <section
            style="background-image: url(mobile-assets/intern-helpline/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/intern-helpline/headimg.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd" style="color: #264273; font-weight: 900;">INTERNATIONAL <br> STUDENT <span
                                style="color: #FF9A1E; font-weight: 500;">HELPLINE</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!--head image Section-->

        <section
            style="background-image: url(mobile-assets/intern-helpline/helpline-bg.svg); background-size: cover; padding-bottom: 50px;">

            <section class="container p-5">
                <h2 class="headd3 fw-bold pb-3 " style="color: #264273;">
                    The University provides several support services to international students so that their study and stay
                    in India is hassle free.
                </h2>
                <ol class="custom-ol para1 pb-5">
                    <li>Guidance throughout your chosen program of study regarding any financial issues, counselling and
                        documentation support.</li>
                    <li>Specialised advisory services for international students.</li>
                    <li>Referrals to relevant contacts inside and outside the University.</li>
                    <li>Social programs and promotion of activities for international students.</li>
                </ol>

                <hr>

                <h2 class="headd3 fw-bold" style="color: #264273;">
                    For any support or guidance, international students (present or future) can connect with:
                </h2>

            </section>

            <section style="border-bottom: 4px solid #1f3b6f;">
                <div class="contact-section">

                    <div class="contact-icon">
                        <img style="width: 120px; height: 100%;" src="mobile-assets/intern-helpline/telephone-call.png"
                            alt="Phone Icon">
                    </div>

                    <div class="contact-info">
                        <div class="contact-title">Contact:</div>
                        <div class="contact-details">
                            Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs
                        </div>
                        <div class="contact-bold">Ph. no: +91 9864049818</div>
                        <div class="contact-bold">Email: gkanand@rgu.ac</div>
                    </div>

                </div>
            </section>

        </section>

    </div>
@endsection
