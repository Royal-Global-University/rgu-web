@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Economics</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Embracing the vision of National Education Policy (NEP), 2020, the Department of Economics,
                            Royal Global University (RGU) is geared up to create a research environment for the faculty
                            members and the students to meet the challenges of fast changing economic dynamics of our
                            nation. At present there are three experienced full-fledged Ph.D guides in the Department to
                            assist and facilitate meaningful empirical research. The department has also engaged a few
                            co-guides from other universities such as Gauhati University and Alliance University,
                            Bangalore. A few more co-guides are likely to be added soon as our Memorandum of
                            Understanding (MoU) with various colleges of the state takes a practical shape. As regards
                            research areas emphasis is given to concentrate on non-theoretical issues that can enhance
                            our understanding about the economies of Assam, North-East as well as India as a whole.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The department is ardently focusing on emerging issues as well as to have a fresh look on
                            studies that appears to be failing to answer new questions that have been thrown up by the
                            evolving economic landscape. The department specializes on international trade, finance,
                            agriculture, micro, small and medium enterprises, physical and social infrastructure, state,
                            and union government sponsored welfare-oriented schemes etc. and to help the government to
                            formulate policies along with issues already under study. The tools and methodologies
                            followed include both traditional and emerging methods that rely extensively on using
                            computer software and computer languages. Efforts will be made to upgrade both the faculties
                            and researchers in this regard.
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
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Economics</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Embracing the vision of National Education Policy (NEP), 2020, the Department of Economics,
                            Royal Global University (RGU) is geared up to create a research environment for the faculty
                            members and the students to meet the challenges of fast changing economic dynamics of our
                            nation. At present there are three experienced full-fledged Ph.D guides in the Department to
                            assist and facilitate meaningful empirical research. The department has also engaged a few
                            co-guides from other universities such as Gauhati University and Alliance University,
                            Bangalore. A few more co-guides are likely to be added soon as our Memorandum of
                            Understanding (MoU) with various colleges of the state takes a practical shape. As regards
                            research areas emphasis is given to concentrate on non-theoretical issues that can enhance
                            our understanding about the economies of Assam, North-East as well as India as a whole.
                        </p>


                    </div>
                </div>

            </div>

        </section>

        <div style="padding: 20px 60px;">
            <p class="para1" style="color: #333; text-align: justify;">
                The department is ardently focusing on emerging issues as well as to have a fresh look on studies that
                appears to be failing to answer new questions that have been thrown up by the evolving economic
                landscape. The department specializes on international trade, finance, agriculture, micro, small and
                medium enterprises, physical and social infrastructure, state, and union government sponsored
                welfare-oriented schemes etc. and to help the government to formulate policies along with issues already
                under study. The tools and methodologies followed include both traditional and emerging methods that
                rely extensively on using computer software and computer languages. Efforts will be made to upgrade both
                the faculties and researchers in this regard.
            </p>

        </div>
    </div>
@endsection
