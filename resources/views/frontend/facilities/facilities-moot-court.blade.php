@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/facilities-moot/mob.png" alt="">
        </div>
            </div>

            <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
    <!--End Header-->

    <!--head image Section-->
    <section style="background-image: url(mobile-assets/facilities-moot/bg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                        <img class="rounded" decoding="async"
                            src="mobile-assets/facilities-moot/headimg.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                    Moot <span style="color: #FF9A1E; font-weight: 500;">Court</span></h2>
                <p style="color: #27467A;" class="para1">
                    A fundamental part of Royal School of Law and Administration, the Moot Court allows students to experience practical aspects of Judiciary in their careers as part of the legal fraternity of India. This experience harbours abilities to present legal arguments in courts, assimilate facts into succint pointers and their critical analytic abilities, engage in Legal Writing and Research.



                    Mooting enables students to develop their confidence, public speaking abilities, work ethics, team building and managing qualities amongst a host of other positive outcomes.
                </p>
            </div>
        </div>
    </div>
    </section>
    <!--head image Section-->

        <!-- about section  -->
    <section style="background-color: #FFF8F0; padding: 50px 0px;">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <h2 class="headd1 fw-bold pb-2" style="color: #27467A; font-weight: 900;">
                        Benefits of <span style="color: #FF9A1E; font-weight: 500;">mooting</span></h2>
                    <p style="color: #27467A;" class="para1 fw-bold">
                        Mooting allows students to develop skills and confidence in
                    </p>
                        <ol class="para1" style="color: #27467A;">
                            <li>Presenting a legal argument in a court setting</li>
                            <li>Advocacy and public speaking</li>
                            <li>Teamwork</li>
                            <li>Organisation</li>
                            <li>Assimilating facts into succinct points and arguments</li>
                            <li>Putting legal issues into context</li>
                            <li>Legal writing and legal research</li>
                            <li>Critical analysis</li>
                        </ol>

                </div>
                <div class="col-lg-6">
                    <iframe class="para1 text-dark rounded" width="100%" height="400px" src="https://www.youtube.com/embed/RtOO4VHR5-U" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- about section  -->

    <!-- Gallery section  -->
    <section style="background-color: #fff; padding: 30px 0px;">
        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-4" style="color: #27467A; font-weight: 900;">
            Glimpse of our <span style="color: #FF9A1E; font-weight: 500;">moot court</span></h2>

            <div class="container">
                <img src="mobile-assets/facilities-moot/gallery.png" alt="">
            </div>
    </section>
    <!-- Gallery section  -->
            </div>
@endsection
