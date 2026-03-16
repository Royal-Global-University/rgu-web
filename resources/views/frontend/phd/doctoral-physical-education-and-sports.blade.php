@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

            <!-- till about dept  -->
            <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px; position: relative;">

                {{-- <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                </h1> --}}

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span> <br>
                    Physical Education and Sports (RSPES)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="home-banner/bpes.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                With the growing focus on sports such as cricket, football, badminton, and kabaddi, where
                                national teams are sponsored by corporates, new opportunities have emerged to view sports as
                                a professional career option. This shift has encouraged many individuals to pursue careers
                                in these fields. To support and guide aspiring athletes, appropriate counselling is
                                essential, which can be effectively provided through well-structured programs.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Royal School of Physical Education (RSPES), a constituent school of The Assam Royal
                                Global University will be offering BPES (H) from academic year 2026, with the objective of
                                nurturing skilled professionals in the fields of sports, fitness, and wellness. It has been
                                established with a vision to promote excellence in physical education and sports sciences in
                                North-East. The programme is designed to combine academic rigor with intensive practical
                                training.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Adopting an interdisciplinary approach, the course integrates sports science, health
                                education, psychology, physiology, biomechanics, and management to provide students with a
                                strong scientific and professional foundation. Special focus areas include Sports Coaching
                                and Training, Sports Psychology, Health and Fitness Management, Sports Management and
                                Administration, and Yoga Education and Wellness.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Emphasizing experiential and practice-oriented learning, the programme incorporates
                                practical training sessions, fieldwork, internships, coaching camps, fitness assessments,
                                performance analysis, and community outreach initiatives. With access to well-equipped
                                sports facilities, gymnasiums, and indoor and outdoor infrastructure, students gain hands-on
                                experience that enhances both technical competence and leadership abilities.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Guided by experienced faculty members and sports professionals, the course aims to prepare
                                graduates for rewarding careers as Physical Education Teachers, Coaches, Fitness and
                                Wellness Consultants, Sports Administrators, Analysts, Researchers, and Entrepreneurs.
                                Through its dedicated Placement and Training Cell, RSPE ensures strong industry linkage and
                                career support, making the programme a gateway to meaningful employment and professional
                                growth in the dynamic field of physical education and sports sciences.
                            </p>

                        </div>
                    </div>
                </div>

            </section>
            <!-- till about dept  -->

        </div>

        <div class="website">

            <section>
                <!--Start Header-->
                @include('frontend/components/aheader')
                <!--End Header-->

                <section id="about">
                    <section style="background-color: #FFF8F0;">
                        <div class="p-5">
                            {{-- <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                            </h1> --}}

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span>
                                Physical Education and Sports (RSPES)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async" src="home-banner/bpes.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The PhD in Physical Education and Sports Programme is designed to promote advanced research and scholarly development in the field of physical education, sports science, and athletic performance. The programme aims to equip scholars with in-depth knowledge of exercise physiology, sports psychology, biomechanics, training methodology, and sports management. Through systematic research and scientific investigation, scholars are encouraged to contribute to the development of innovative practices that enhance physical fitness, sports performance, and overall well-being. The programme also focuses on addressing contemporary challenges in sports and physical education while promoting evidence-based approaches for athlete development, health promotion, and sports participation at various levels of society
                                    </p>

                                </div>

                            </div>
                        </div>

                    </section>
                </section>

            </section>

        </div>

    </div>
@endsection
