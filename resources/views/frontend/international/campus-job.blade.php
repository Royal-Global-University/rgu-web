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
                                style="color: #264273; font-weight: 700;">On-Campus <span
                                    style="color: #FF9A1E; font-weight: 500;">Job</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/intern-oncaampus-job/headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                style="background-image: url(mobile-assets/intern-oncaampus-job/bg.svg); background-size: cover; padding-bottom: 50px;">

                <section class="container">
                    <h2 class="mobile-headd3 fw-bold pb-3 " style="color: #264273;">
                        Types of on-campus jobs available to Students
                    </h2>
                    <ol class="custom-ol mobile-para1 pb-2">
                        <li>Students can work as student guides and assist juniors or weaker students.</li>
                        <li>Students can work as call centre assistants and assist students in their admission.
                        </li>
                        <li>Students can work as library assistants and help in the day-to-day working of the library.
                        </li>
                        <li>Students can work as front office assistants and guide visitors.
                        </li>
                    </ol>

                    <h2 class="mobile-headd3 fw-bold pb-3 " style="color: #264273;">
                        Eligibility
                    </h2>
                    <ol class="custom-ol mobile-para1 pb-2">
                        <li>The intending student will have to approach the Department of Branding & Communication, seeking
                            their work interest.</li>
                        <li>Upon checking their profile and skill areas, they might have to appear for an interview with the
                            Senior Management.</li>
                        <li>Students may be asked to submit additional documents during the application review.</li>
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
            style="background-image: url(mobile-assets/intern-oncaampus-job/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/intern-oncaampus-job/headimg.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd" style="color: #264273; font-weight: 800;">ON-CAMPUS <br> <span
                                style="color: #FF9A1E; font-weight: 500;">JOB</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!--head image Section-->

        <section
            style="background-image: url(mobile-assets/intern-oncaampus-job/bg.svg); background-size: cover; padding-bottom: 50px;">

            <section class="container p-5">
                <h2 class="headd2 fw-bold pb-3 kd-title-ani kd-split-text" style="color: #264273; font-weight: 800;">
                    Types of on-campus jobs available to <span style="color: #FF9A1E; font-weight: 500;">Students</span>
                </h2>
                <ol class="custom-ol para1 pb-3">
                    <li>Students can work as student guides and assist juniors or weaker students.</li>
                    <li>Students can work as call centre assistants and assist students in their admission.</li>
                    <li>Students can work as library assistants and help in the day-to-day working of the library.</li>
                    <li>Students can work as front office assistants and guide visitors.</li>
                </ol>

                <h2 class="headd2 fw-bold" style="color: #264273; font-weight: 800;">
                    Eligibility
                </h2>
                <ol class="custom-ol para1 pb-4">
                    <li>The intending student will have to approach the Department of Branding & Communication, seeking
                        their work interest.</li>
                    <li>Upon checking their profile and skill areas, they might have to appear for an interview with the
                        Senior Management.</li>
                    <li>Students may be asked to submit additional documents during the application review.</li>
                </ol>

                <hr>

                <h2 class="headd3 fw-bold" style="color: #264273;">
                    For any support or guidance, international students (present or future) can connect with:
                </h2>

            </section>

            <section style="border-bottom: 4px solid #1f3b6f;">
                <div class="contact-section">

                    <div class="contact-icon">
                        <img style="width: 120px; height: 100%;" src="mobile-assets/intern-oncaampus-job/telephone-call.png"
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
