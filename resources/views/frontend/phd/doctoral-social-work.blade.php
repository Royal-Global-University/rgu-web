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
                                in Social Work</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Social Work is a rigorous and advanced academic program designed to prepare
                            individuals for leadership roles in the field of social work. This doctoral degree typically
                            takes several years to complete and involves a combination of coursework, research, and
                            practical experience.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Students pursuing a Ph.D. in Social Work delve deep into the theories, methods, and ethics
                            of social work practice, with a strong emphasis on research and scholarship. They engage in
                            original research projects that contribute to the knowledge base of the field, addressing
                            critical social issues, policy development, and best practices in social work intervention.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. candidates often specialize in areas such as clinical social work, policy analysis, or
                            community development. They develop expertise in designing and conducting research studies,
                            analyzing data, and disseminating findings through publications and presentations. Graduates
                            of Ph.D. programs in social work are prepared for careers in academia, research
                            institutions, government agencies, and leadership positions in social service organizations,
                            where they can shape the future of social work practice and policy through evidence-based
                            approaches. This degree equips professionals with the skills and knowledge needed to make a
                            profound impact on individuals, families, and communities by advancing the field of social
                            work.
                        </p>



                        <h2 class="mobile-headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Guides <span style="color: #FF9A1E; font-weight: 500;">
                                and Research Interests</span> </h2>

                    </div>

                    <div style="display: flex; justify-content: center; align-items: center; padding: 20px;">

                        <div class="row" style="display: flex; align-items: center; justify-content: center;">

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                    <div class="p-3">
                                        <img style="height: 290px; width: 100%;"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-social-work/priyanka.jpeg"
                                            class="img-fluid rounded border" />
                                    </div>

                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 ">
                                            Dr. Priyanka Patowari
                                        </h5>

                                        <p class="para1 fw-bold" style="color: #264273;">
                                            Research Interest
                                        </p>
                                        <p class="para1" style="color: #333; line-height: 1.3;">
                                            Women & Children, Gender Studies, Community Development
                                        </p>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                    <div class="p-3">
                                        <img style="height: 290px; width: 100%;"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-social-work/amlan.jpg"
                                            class="img-fluid rounded border" />
                                    </div>

                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 ">
                                            Dr. Amlan Das
                                        </h5>


                                        <p class="para1 fw-bold" style="color: #264273;">
                                            Research Interest
                                        </p>
                                        <p class="para1" style="color: #333; line-height: 1.3;">
                                            Disability Studies, Rural Development, Family & Child Welfare
                                        </p>

                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--About Section-->
            <section
                style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                                Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Social Work</span>
                            </h2>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                A Ph.D. in Social Work is a rigorous and advanced academic program designed to prepare
                                individuals for leadership roles in the field of social work. This doctoral degree typically
                                takes several years to complete and involves a combination of coursework, research, and
                                practical experience.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                Students pursuing a Ph.D. in Social Work delve deep into the theories, methods, and ethics
                                of social work practice, with a strong emphasis on research and scholarship. They engage in
                                original research projects that contribute to the knowledge base of the field, addressing
                                critical social issues, policy development, and best practices in social work intervention.
                            </p>


                        </div>
                    </div>

                </div>

            </section>

            <div style="padding: 40px 60px;">
                <p class="text-dark para1" style="text-align: justify;">
                    Ph.D. candidates often specialize in areas such as clinical social work, policy analysis, or community
                    development. They develop expertise in designing and conducting research studies, analyzing data, and
                    disseminating findings through publications and presentations. Graduates of Ph.D. programs in social
                    work are prepared for careers in academia, research institutions, government agencies, and leadership
                    positions in social service organizations, where they can shape the future of social work practice and
                    policy through evidence-based approaches. This degree equips professionals with the skills and knowledge
                    needed to make a profound impact on individuals, families, and communities by advancing the field of
                    social work.
                </p>


                <h2 class="headd1 fw-bold pt-4 pb-4" style="color: #264273; font-weight: 700;">Ph.D. Guides and <span
                        style="color: #FF9A1E; font-weight: 500;">Research Interests</span>
                </h2>


                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-social-work/priyanka.jpeg"
                                    class="img-fluid rounded border" />
                            </div>

                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 ">
                                    Dr. Priyanka Patowari
                                </h5>

                                <p class="para1 fw-bold" style="color: #264273;">
                                    Research Interest
                                </p>
                                <p class="para1" style="color: #333; line-height: 1.3;">
                                    Women & Children, Gender Studies, Community Development
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/doctoral-social-work/amlan.jpg"
                                    class="img-fluid rounded border" />
                            </div>

                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 ">
                                    Dr. Amlan Das
                                </h5>


                                <p class="para1 fw-bold" style="color: #264273;">
                                    Research Interest
                                </p>
                                <p class="para1" style="color: #333; line-height: 1.3;">
                                    Disability Studies, Rural Development, Family & Child Welfare
                                </p>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!--End About-->


        </div>


    </div>
@endsection
