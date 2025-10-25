@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="background-color: #fff; height: 40vh; padding-top: 90px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="text-center">
                                <img style="margin-top: 70px; width: 380px; border: 1px solid #27467A;"
                                    src="mobile-assets/Pradeep.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-3"></div>

                    </div>
                </div>

            </div>

            <div style="background-color: #27467A; padding-top: 220px; padding-bottom: 50px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 pt-4 pb-4">

                            <h2 class="headd1 fw-bold pt-4" style="color: #FF9A1E; font-weight: 700; font-size: 35px;">
                                Prof. Pradeep Kumar Jain
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Professor
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                                  Member of Advisory Board, The Assam Royal Global University
                                </h2> -->

                            <div class="">

                                <h4 class="text-white">Dr. Pradeep K. Jain is a distinguished academician and administrator with over
                                    three decades of experience in
                                    management education and institutional leadership. He retired as Dean, Faculty of
                                    Commerce and Management, Gauhati
                                    University, where he served in various academic and administrative capacities since
                                    1987.
                                </h4>
                                <h4 class="text-white pt-5">Beyond academia, Dr. Jain has held several key leadership roles, including Former
                                    Chairman of the Gauhati Stock
                                    Exchange. He is also Working President of the Trust and Governing Body of West Guwahati
                                    College of Education.
                                    An active social reformer, Dr. Jain has been associated with the All India Marwari Yuva
                                    Manch, where he served as
                                    National General Secretary and Provincial President.
                                </h4>
                                <h4 class="text-white pt-5">Dr. Jain’s distinguished career reflects his commitment to education, ethics, and
                                    community service — combining academic
                                    excellence with social responsibility and visionary leadership.
                                </h4>


                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div style="background-color: #fff; height: 35vh; overflow: visible;">

                <div class="row">
                    <div class="col-lg-5 text-center">

                        <div class="text-center">
                            <img style="margin-top: 100px; width: 480px; border: 1px solid #27467A; margin-left: 45px;"
                                src="mobile-assets/Pradeep.png" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Prof. Pradeep Kumar Jain
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Professor
                        </h2>

                        <!-- <h2 class="headd3 mb-5 half-underline" style="color: #555; font-style: italic; font-size: 25px;">
                                  Member of Advisory Board, The Assam Royal Global University
                                </h2> -->

                    </div>

                </div>
            </div>

            <div style="background-color: #27467A;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7 pt-4 pb-4">

                            <h4 class="text-white">Dr. Pradeep K. Jain is a distinguished academician and administrator with over
                                three decades of experience in
                                management education and institutional leadership. He retired as Dean, Faculty of
                                Commerce and Management, Gauhati
                                University, where he served in various academic and administrative capacities since
                                1987.
                            </h4>
                            <h4 class="text-white">Beyond academia, Dr. Jain has held several key leadership roles, including Former
                                Chairman of the Gauhati Stock
                                Exchange. He is also Working President of the Trust and Governing Body of West Guwahati
                                College of Education.
                                An active social reformer, Dr. Jain has been associated with the All India Marwari Yuva
                                Manch, where he served as
                                National General Secretary and Provincial President.
                            </h4>
                            <h4 class="text-white">Dr. Jain’s distinguished career reflects his commitment to education, ethics, and community
                                service — combining
                                academic
                                excellence with social responsibility and visionary leadership.
                            </h4>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
