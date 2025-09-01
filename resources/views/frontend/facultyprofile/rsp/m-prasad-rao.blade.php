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
                                    src="mobile-assets/all-faculty/rsp/Rao.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-3"></div>

                    </div>
                </div>

            </div>

            <div style="background-color: #27467A; padding-top: 190px; padding-bottom: 50px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 pt-4 pb-4">

                            <h2 class="headd1 fw-bold pt-4" style="color: #FF9A1E; font-weight: 700; font-size: 35px;">
                                Prof. (Dr.) Chennu Maruthi Malya Prasada Rao
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Professor & Dean
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                  Member of Advisory Board, The Assam Royal Global University
                </h2> -->

                            <div>

                                <p style="color: #fff; text-align: justify; font-size: 22px; line-height: 2.1;">Prof. (Dr.) Chennu Maruthi Malya Prasada
                                    Rao has earned his Ph.D. in Pharmaceutical Sciences from JNTU-Kakinada, M.Pharm. in Pharmaceutical
                                    Chemistry from Annamalai University, and B.Pharm. from Acharya Nagarjuna University. With over 18 years of teaching
                                    and
                                    research experience, Pro. Rao has served as Research Director at Raffles University prior to joining RGU, and played
                                    a
                                    key role in the NAAC activities. He has 64+ publications, 5 patents, 2 book chapters, and several MOUs to his
                                    credit,
                                    and also authored and co-authored books in pharmacy and Allied Sciences. He has guided 25 M.Pharm. and 4 Ph.D.
                                    scholars,
                                    and actively contributed through conferences, guest lectures, professional associations and has been recognized with
                                    awards such as the Best Researcher Award (2020) and Global Teacher Role Model Award (2020). His research interests
                                    span
                                    drug synthesis, novel drug delivery systems, QbD/DoE, analytical method development, and pharmacological screening
                                    of
                                    plant extracts.
                                </p>


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
                                src="mobile-assets/all-faculty/rsp/Rao.png" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Prof. (Dr.) Chennu Maruthi Malya Prasada Rao
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Professor & Dean
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

                            <p style="color: #fff; text-align: justify; font-size: 22px; line-height: 2.1;">Prof. (Dr.) Chennu Maruthi Malya Prasada Rao has earned his Ph.D. in Pharmaceutical Sciences from JNTU-Kakinada, M.Pharm. in Pharmaceutical
                            Chemistry from Annamalai University, and B.Pharm. from Acharya Nagarjuna University. With over 18 years of teaching and
                            research experience, Pro. Rao has served as Research Director at Raffles University prior to joining RGU, and played a
                            key role in the NAAC activities. He has 64+ publications, 5 patents, 2 book chapters, and several MOUs to his credit,
                            and also authored and co-authored books in pharmacy and Allied Sciences. He has guided 25 M.Pharm. and 4 Ph.D. scholars,
                            and actively contributed through conferences, guest lectures, professional associations and has been recognized with
                            awards such as the Best Researcher Award (2020) and Global Teacher Role Model Award (2020). His research interests span
                            drug synthesis, novel drug delivery systems, QbD/DoE, analytical method development, and pharmacological screening of
                            plant extracts.</p>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
