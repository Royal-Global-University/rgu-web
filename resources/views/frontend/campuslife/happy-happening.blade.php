@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div>
        <div style="background-image: url(assets/img/happy-happening/bg2.svg);">
            <div class="container">
                <div class="row" style="padding: 40px 0px;">

                    <div class="col-lg-6">
                        <video class="rounded" width="100%" height="auto" autoplay muted
                            controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                            <source src="assets/img/happy-happening/newgif.mp4" type="video/mp4">
                        </video>
                    </div>


                    <div class="col-lg-6 p-4">

                        <div class="pt-4 elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9b49111"
                            data-id="9b49111" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                    data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="prthalign">
                                            <h1 class="headd3 fw-bold kd-title-ani kd-split-text mb-3"
                                                style="color: #27467A;">
                                                "LITTLE THINGS THAT MAKE LIFE AT THE CAMPUS TRULY HAPPY"</h1>

                                            <h1 class="headd3 text-dark fw-bold kd-title-ani kd-split-text">
                                                Easily Accessible Facilities</h1>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting
                                                style="text-align: justify;">
                                                <p>Every building on the campus has easily accessible facilities.
                                                    Each floor has clean washrooms and clean drinking water
                                                    facilities. The in-campus bank and ATM services not only offer
                                                    the convenience that busy students and employees expect in
                                                    campus banking services but also security measures to give
                                                    customers peace of mind. With shuttle services, students can
                                                    easily move from one part of the campus to another.
                                                </p>
                                            </div>

                                            <h1 class="headd3 text-dark fw-bold kd-title-ani kd-split-text">
                                                Build Relationships</h1>

                                            <div class="para1 text-dark kd-para-1 disc" data-splitting
                                                style="text-align: justify;">
                                                <p>There are several spots where students can hang out and lead a fulfilling
                                                    social life. The university features diverse dining options ranging from
                                                    traditional eateries to modern coffee shops. Students can head to the
                                                    Royal Garden which is the best spot to watch the sunrise in the morning.
                                                    Besides these, students can visit the Cube for a friendly match.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-image: url(assets/img/happy-happening/2.svg);">

        <div class="container" style="padding: 30px 0px;">
            <div class="row">
                <div class="col-lg-8">
                    <img style="width: 100% !important;" class="rounded" src="assets/img/happy-happening/campus1.png"
                        alt="">
                </div>
                <div class="col-lg-4" style="padding: 0px 20px;">
                    <h2 class="headd2 fw-bold text-dark">Attractive Campus</h2>
                    <p class="para1 text-dark pt-2" style="text-align: justify;">Surroundings play a vital role in
                        our emotional well-being. With lush green surroundings capped with pollution-free air, RGU
                        stands tall amongst its contemporaries. There are plants in every few steps and wall art in
                        different corners of the campus that brightens up learning environments and creates a more
                        engaging and interesting space for students to thrive. Apart from this there are several
                        pretty fountains around the campus which serve as a backdrop for photo worthy memories.
                    </p>
                </div>
            </div>
        </div>

        <div class="container" style="padding: 30px 0px;">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px 20px;">
                    <h2 class="headd2 fw-bold text-dark pt-4">Unique Hostel Experience
                    </h2>
                    <p class="para1 text-dark pt-2" style="text-align: justify;">Hostel rooms at RGU are smart,
                        exquisite and classy. The hostel complex is huge and is surrounded by greenery. All hostel
                        rooms have air conditioners, dining hall, high- speed internet facility and study area.
                        Apart from this, indoor games like pool table, caroms, chess, table tennis etc makes the
                        hostel experience fun and unique.
                    </p>
                </div>
                <div class="col-lg-8">
                    <img style="width: 100% !important;" class="rounded" src="assets/img/happy-happening/campus2.jpg"
                        alt="">
                </div>

            </div>
        </div>

        <div class="container" style="padding: 30px 0px;">
            <div class="row">
                <div class="col-lg-7">
                    <img style="width: 100% !important;" class="rounded" src="assets/img/happy-happening/campus4.png"
                        alt="">
                </div>
                <div class="col-lg-5" style="padding: 0px 10px;">
                    <h2 class="headd2 fw-bold text-dark pt-4">13 More Ways to Find Joy
                    </h2>
                    <p class="para1 text-dark pt-2" style="text-align: justify;">Joining a club opens up many
                        opportunities to meet other students and allows a balance between academic life and
                        extra-curricular activities. It is a good way of meeting like-minded people from different
                        disciplines. During the first week of the first term, there will be plenty of structured
                        events to make friends in RGU. Student clubs provide each student with the opportunity to
                        explore their passion outside their regular studies. There are 13 clubs in the university-
                        Sigma Voice, Cultural Club, Sports Club, Royal Commerce Club, Bulls and Bears, Ethnos,
                        Maccokots, Robotics Club, Media Club, Zoology Club, Theater Club, Botanical Club, and
                        Rotaract Club. RGU has a club to match almost every interest.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
