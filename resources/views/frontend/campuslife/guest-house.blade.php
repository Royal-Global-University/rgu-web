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
    <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
        <section style="background-image: url(assets/img/guest-house/background.svg); padding-top: 30px;"
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
                                    <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                        <img decoding="async" src="assets/img/guest-house/headimg.jpg" alt="">
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
                                    <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                        Guest House
                                    </h1>

                                    <div class="para1 text-dark" style="text-align: justify;">
                                        <p>
                                            Currently The Assam Royal Global University has two (2) Guest houses with in the
                                            campus for University Guests and its staff members. The main Guest House is for
                                            the VVIP who visits the University on different purposes. It which has a total
                                            of six (6) well-furnished rooms including two suite rooms with all the modern
                                            amenities attached to it. Another Guest House namely “Royal Kutir” which has
                                            been recently inaugurated has 14 well-furnished roomsfor both double and single
                                            occupancy, this guest house is for general guest coming to the university on
                                            different occasions. Both the Guest houses have safe and clean surroundings and
                                            is managed by helpful staff who attend to our guests at all hours.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr>
    </div>

    <div class="custom-container">
        <div class="custom-row">
            <div class="custom-column p-4">

                <h2 style="color: #0056b3 !important; line-height: 1.4;"
                    class="para1 fw-bold text-dark pb-2 pt-1 text-left">
                    Booking of room(s) in the guest house is subjected to availability of rooms and approval by the Vice
                    Chancellor/ Executive Vice President/ Registrar or any other competent authority. The allotment of rooms
                    shall be generally on the “first-come, first-served” basis.
                </h2>

                <hr>

                <p class="text-dark para1">The Guest House accommodation is available under the following categories:</p>
                <ol class="text-dark para1">
                    <li>University Guests</li>
                    <li>Resource person & Visiting Faculty</li>
                    <li>New Joining Faculty</li>
                    <li>Participants come for different seminars and workshops</li>
                    <li>Any other guests as approved by the Competent Authority</li>
                </ol>

            </div>

            <div class="custom-column p-4">

                <img src="assets/img/guest-house/2.jpg" alt="">


            </div>
        </div>
    </div>

    <!--End About-->
</div><!-- #page -->
@endsection
