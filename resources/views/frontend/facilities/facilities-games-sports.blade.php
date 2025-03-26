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
        <div class="pb-5">
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <section style="background-image: url(assets/img/all-facilities/games/background.svg); padding-top: 30px;"
                    class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f481aaf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                            data-id="968af55" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                    data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                    <div class="elementor-widget-container">
                                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                            <div style="border: 2px solid #fff;"
                                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                <img decoding="async" src="assets/img/all-facilities/games/headimg.jpg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111"
                            data-id="9b49111" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                    data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="prthalign">
                                            <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text">
                                                Games & Sports</h1>
                                            <p class="para1 text-dark">The University proudly boasts world-class recreation and
                                                wellness programmes for the students, staff, faculty, and community of The Assam
                                                Royal Global University.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <img src="assets/img/all-facilities/games/contact.svg" alt="">


            <section style="background-color: #f2f2f2;">
                <div class="container-fluid" style="padding: 40px 50px; ">
                    <h2 class="text-center headd2 fw-bold kd-title-ani kd-split-text" style="color: #27467A;">Education and
                        Sports are complementary to each other!!
                    </h2>
                    <p class="text-dark para1">There are multiple sport facilities to keep our students engaged and physically
                        fit. Our campus has outdoor game facilities like Cricket, Football, Basketball, tennis, baseball,
                        athletics and so on. Its international standard indoor sports complex <strong>“The Cube”</strong> offers
                        a variety of indoor games including badminton courts, squash, billiards, and table tennis. Fitness
                        conscious students can go for a jog around the scenic university campus or work out at the well-equipped
                        gymnasium available both at the Boys and Girls hostel. The Gymnasium is equipped with various equipment
                        like treadmills, dumbbells & plates, weights, shoulder press, leg-pull, leg extension, incline shoulder,
                        double twisters, etc. Separate Indoor Games facilities like badminton, Table tennis, Chess, carrom etc
                        are also available within the hostel premises of both Girls and Boys.
                    </p>
                    <p class="text-dark para1">Intra-school and inter-University games and sports competitions are organized
                        regularly every year for students. Students are specially trained for participation in Zonal and
                        Inter-Zonal National sports competitions organized by the Association of Indian Universities. RGU has
                        excelled at these events by winning prizes and awards in individual and group events.
                    </p>
                    <p class="text-dark para1"><strong>Sports Clubs:</strong> The RGU Sports Club has been constituted to
                        enhance the student’s university experience and contribute to the student’s overall education and
                        wellness. The club is not only committed to providing a healthy sporting habit among the students and
                        faculty but also to educating them to live in a better way.
                    </p>
                    <p class="text-dark para1">The Sports Club organises intra-university sports events to provide leadership
                        and recreation opportunities to students and faculty to enhance their knowledge and skills in a specific
                        sport of interest while at the same time retaining social, cognitive, and physical experiences.
                    </p>
                    <p class="text-dark fw-bold headd3">The coordinators of the various Clubs are:
                    </p>

                    <table class="table table-bordered table-striped border border-light shadow-sm">
                        <thead style="background-color: #27467A; color: #fff;">
                            <tr>
                                <th>COORDINATOR NAME</th>
                                <th>CLUB</th>
                                <th>CONTACT NUMBER</th>
                            </tr>
                        </thead>

                        <tbody class="para1 text-dark">
                            <tr>
                                <td>Dr. Gitanjal Deka</td>
                                <td>Baseball, Cricket</td>
                                <td>8011778907</td>
                            </tr>
                            <tr>
                                <td>Dr. Y Monojit Singh</td>
                                <td>Badminton, Sepak Takraw</td>
                                <td>8753970668</td>
                            </tr>
                            <tr>
                                <td>Mr. Rishikesh Duarah</td>
                                <td>Football, Volleyball</td>
                                <td>7002948974</td>
                            </tr>
                            <tr>
                                <td>Mr. Pankaj Gogoi</td>
                                <td>Chess, Table Tennis</td>
                                <td>8721015177</td>
                            </tr>
                            <tr>
                                <td>Mr. Tirtharaj Gohain</td>
                                <td>Kabaddi</td>
                                <td>8638556799</td>
                            </tr>
                            <tr>
                                <td>Mr. Sparsh Tiwari</td>
                                <td>Basketball, Athletics</td>
                                <td>7002654952</td>
                            </tr>
                            <tr>
                                <td>Mr. Somiran Buragohain</td>
                                <td>Squash</td>
                                <td>8099389898</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="text-dark para1"><strong>Recreational activities-</strong> To make leisure time more interesting
                        and enjoyable students can choose from several recreational activities- walking, meditation, reading,
                        playing games and dancing to refresh their bodies and mind.
                    </p>

                    <p class="text-dark para1">The major emphasis of the recreational and wellness programmes is on the holistic
                        growth of students ensuring their intellectual, emotional, physical, cultural, and social development
                        and therefore it will not be merely limited to assessment of learner’s academic attainments.
                    </p>

                </div>
            </section>


            <!-- Gallery section  -->
            <section style="background-color: #ffffff;">

                <div class="container-fluid pt-5 pb-5" style="padding: 0px 45px;">
                    <p class="text-dark headd2 text-center kd-title-ani kd-split-text fw-bold">Glimpse of our game moments
                    </p>

                    <div class="row pt-3">

                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/1.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/2.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/3.jpeg" alt="">
                        </div>
                    </div>

                    <div class="row pt-3">

                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/4.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/5.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/6.jpeg" alt="">
                        </div>
                    </div>

                    <div class="row pt-3">

                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/7.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/8.jpeg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img style="width: 100%;" class="rounded border shadow-sm"
                                src="assets/img/all-facilities/games/9.jpeg" alt="">
                        </div>
                    </div>

                </div>
            </section>
            <!-- Gallery section  -->

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
