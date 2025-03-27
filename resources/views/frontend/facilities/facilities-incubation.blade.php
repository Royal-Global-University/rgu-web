@extends('frontend.master')
@section('content')
         <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/facilities-incubation/mob-incubation.png" alt="">
            </div>
            </div>

            <div class="website">
         <!--Start Header-->
         @include('frontend/components/aheader')
    <!--End Header-->

     <!--head image Section-->
    <section class="no-bg-mobile" style="background-image: url(mobile-assets/facilities-incubation/bgg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                        <img class="rounded" decoding="async"
                            src="mobile-assets/facilities-incubation/headimg.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                    Incubation <span style="color: #FF9A1E; font-weight: 500;">Centre</span></h2>
                <p style="color: #27467A;" class="para1">
                    The Assam Royal Global University inaugurated the Royal Innovation and Incubation cell on November 8, 2022. The Inauguration was launched under the auspicious presence of Shri S.K. Barua, Managing Director NRL & Chairman Confederation of Indian Industry, Northeast Council India.

                    Other dignitaries present at the event were Royal Global University (RGU) Chancellor Dr. A.K Pansari, Vice Chancellor Prof (Dr.) S.P. Singh, RGU Executive Vice President Ankur Pansari, Principal Advisor Prof. MK Chaudhuri, Chairperson (Academics), Prof. A.K. Buragohain, NERQMAC, NEDFI Director Manoj Kumar Das and invited guests from the NRL, other industries and academicians.
                </p>
            </div>
        </div>
    </div>
    </section>
    <!--head image Section-->

    <section style="padding: 20px 80px;">
        <p style="color: #27467A;" class="para1">
            It has housed various entrepreneurs for their vision to start small / mid cap businesses. The Assam Royal Global University Innovation and Incubation cell has successfully registered various companies and these early start ups have not only received support from national funding sources, But also internationally recognized institutions. The Assam Royal Global University Innovation and Incubation cell has not only helped the students to believe and achieve in their vision to start with their successful careers, but also the Incubation cell has contributed an immense role in the overall development of the society at large as spoken by Shri S.K. Barua during an interactive session. The Assam Royal Global University Innovation and Incubation cell believes in the saying “Creativity is a natural extension of our enthusiasm” and so does the budding innovators of RGU.
        </p>
    </section>

    <!-- Gallery section  -->
    <section style="background-color: #FFF8F0; padding: 50px 0px;">
        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-4" style="color: #27467A; font-weight: 900;">
            Glimpse of our <span style="color: #FF9A1E; font-weight: 500;">Incubation Centre</span></h2>

            <div class="container">
                <img src="mobile-assets/facilities-incubation/gallery.png" alt="">
            </div>
    </section>
    <!-- Gallery section  -->
    </div>
@endsection
