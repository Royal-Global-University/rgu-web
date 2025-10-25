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
                                    src="mobile-assets/updated-faculty-img/Utpal.jpeg" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-3"></div>

                    </div>
                </div>

            </div>

            <div style="background-color: #27467A; padding-top: 250px; padding-bottom: 50px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7 pt-4 pb-4">

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        Prof. Utpal Dutta has over three decades of teaching, research, and leadership experience. He
                                        taught Zoology (1989-2015)
                                        at Handique Girls’ College and later served as Principal (2015–2022) of the same. He was also
                                        the Deputy Director and
                                        Reader at the UGC–Academic Staff College, Gauhati University (2002–2007), where he contributed
                                        towards faculty training
                                        and academic development.
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        His has a Ph.D. from Gauhati University and his research interests span Animal Physiology and
                                        Biochemistry. He has
                                        undertaken lot of research initiatives including a UGC Minor Research Project on microvascular
                                        changes and insulin
                                        resistance, Coordinator of the DBT–Institutional Biotech Hub, and PI of the DST–CURIE Project at
                                        Handique Girls’
                                        College. He has been a NABET-accredited Functional Area Expert for Ecology and Biodiversity in
                                        the context of petroleum
                                        and oil exploration. Presently he is mentoring a DBT-sponsored project on neural plasticity and
                                        epilepsy.
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        Beyond academics, he is a trained mountaineer who participated in IMF-approved Himalayan
                                        expeditions and continues to
                                        nurture an active interest in trekking.
                                    </span>
                                </li>
                            </ul>

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
                                src="mobile-assets/updated-faculty-img/Utpal.jpeg" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Prof. (Dr.) Utpal Dutta
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Professor and Director, Finishing School
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

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        Prof. Utpal Dutta has over three decades of teaching, research, and leadership experience. He taught Zoology (1989-2015)
                                        at Handique Girls’ College and later served as Principal (2015–2022) of the same. He was also the Deputy Director and
                                        Reader at the UGC–Academic Staff College, Gauhati University (2002–2007), where he contributed towards faculty training
                                        and academic development.
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        His has a Ph.D. from Gauhati University and his research interests span Animal Physiology and Biochemistry. He has
                                        undertaken lot of research initiatives including a UGC Minor Research Project on microvascular changes and insulin
                                        resistance, Coordinator of the DBT–Institutional Biotech Hub, and PI of the DST–CURIE Project at Handique Girls’
                                        College. He has been a NABET-accredited Functional Area Expert for Ecology and Biodiversity in the context of petroleum
                                        and oil exploration. Presently he is mentoring a DBT-sponsored project on neural plasticity and epilepsy.
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <span style="display: block;">
                                        Beyond academics, he is a trained mountaineer who participated in IMF-approved Himalayan expeditions and continues to
                                        nurture an active interest in trekking.
                                    </span>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
