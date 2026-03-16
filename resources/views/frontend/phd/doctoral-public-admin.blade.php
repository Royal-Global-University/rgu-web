@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Public Administration</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. in public administration is an extensive study of government policies of India and
                            different countries. Research scholars come to learn a collection of primary data and write
                            their thesis as well as present ideas regarding how to make improvements in the general
                            implementation of public policies. Top recruiting areas in which Ph.D. in Public
                            Administration degree holders find employment include Indian Civil Services, Education
                            Institutions, Public Works, Tribal Administration, Revenue department, Corporate Management,
                            etc. This doctoral program is designed to include subjects like Research Methodology and
                            Computer Applications, Public Systems Governance, Public Policy: Theoretical Perspectives,
                            and Public Administration: Theoretical Perspectives in addition to some practical knowledge.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The course imparts theoretical as well as practical knowledge about the subject. Critical
                            thinking, decision makingand innovative suggestions are the key attributes of this course.
                            The Ph.D. in Public Administration course is all about administration. The course imparts
                            the necessary skills to the scholars required for the proper administration of people,
                            towards the betterment of society. Pursuing a research program in this field will help you
                            carve essential skills that you will need for the ideation and formulation of new government
                            programs for the benefit of the general masses. The Department of Public Administration
                            provides research facilities in the areas of Indian Administration, Public Policies, Rural
                            Development, Development of Tribal Areas, Social Welfare, and Prison Administration.
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
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">in Public
                                Administration</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. in public administration is an extensive study of government policies of India and
                            different countries. Research scholars come to learn a collection of primary data and write
                            their thesis as well as present ideas regarding how to make improvements in the general
                            implementation of public policies. Top recruiting areas in which Ph.D. in Public
                            Administration degree holders find employment include Indian Civil Services, Education
                            Institutions, Public Works, Tribal Administration, Revenue department, Corporate Management,
                            etc. This doctoral program is designed to include subjects like Research Methodology and
                            Computer Applications, Public Systems Governance, Public Policy: Theoretical Perspectives,
                            and Public Administration: Theoretical Perspectives in addition to some practical knowledge.


                        </p>


                    </div>
                </div>
            </div>

        </section>

        <div style="padding: 20px 60px;">
            <p class="text-dark para1" style="text-align: justify;">
                The course imparts theoretical as well as practical knowledge about the subject. Critical thinking,
                decision making and innovative suggestions are the key attributes of this course. The Ph.D. in Public
                Administration course is all about administration. The course imparts the necessary skills to the
                scholars required for the proper administration of people, towards the betterment of society. Pursuing a
                research program in this field will help you carve essential skills that you will need for the ideation
                and formulation of new government programs for the benefit of the general masses. The Department of
                Public Administration provides research facilities in the areas of Indian Administration, Public
                Policies, Rural Development, Development of Tribal Areas, Social Welfare, and Prison Administration.
            </p>
        </div>

    </div>
@endsection
