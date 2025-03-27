@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/facilities-legal-aid/mob.png" alt="">
            </div>
            </div>


            <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
    <!--End Header-->

    <!--head image Section-->
    <section class="no-bg-mobile"
        style="background-image: url(mobile-assets/facilities-legal-aid/bgg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                        <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                            <img class="rounded" decoding="async" src="mobile-assets/facilities-legal-aid/headimg.jpeg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                        legal <span style="color: #FF9A1E; font-weight: 500;">Aid</span></h2>
                    <p style="color: #27467A;" class="para1">
                        A <strong>"Legal Aid Clinic"</strong> has been constituted by the Royal School of Law and
                        Administration which looks after the day-to-day operations of the clinic. Along with physical
                        accessibility, an online legal aid service has also been initiated by the clinic. The clinic
                        provides free legal assistance not only to the students, faculties and staffs of the University but
                        also to the community at large. The clinicprovides free legal advice to people normally deprived of
                        such a service.

                        The clinic is supported by a professional, dynamic and dedicated team of eminent practicing lawyers.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--head image Section-->
            </div>
@endsection
