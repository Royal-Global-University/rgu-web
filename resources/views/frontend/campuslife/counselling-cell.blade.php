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
        <section style="padding-top: 30px; background-image: url(assets/img/councelling-cell/background.svg);"
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
                                        <img decoding="async" src="assets/img/councelling-cell/head2.jpg" alt="">
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
                                        Counselling Cell</h1>

                                    <div style="text-align: justify;" class="para1 text-dark pb-2">Mental health as a
                                        concept is gaining prominence in the Indian context rapidly. Till the past decade
                                        this was an area of prejudice and stigma, but open dialogue, conversations, and
                                        narratives on the holistic domains of health (of which mental health is a major
                                        part) have taken over the discursive space. This is reflected in several fields
                                        ranging from academic curriculum to popular culture portrayals (movies, novels, web
                                        series, documentaries, and the likes).
                                    </div>
                                    <div style="text-align: justify;" class="para1 text-danger pb-3 fw-bold">The Counselling
                                        Cell is located in Block- A, first floor, The Assam Royal Global University</div>

                                </div>

                                <div class="container text-center mt-4 mb-4">
                                    <div class="d-flex justify-content-center">

                                        <a target="_blank" onclick="openGmail()">

                                            <button class="btn btn-success download-btn fw-bold headd3">
                                                <i class="fa fa-envelope" aria-hidden="true"></i> Book an Appointment
                                            </button>
                                        </a>
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


    <div class="container-fluid" style="padding: 20px 80px; text-align: justify;">

        <div class="para1 text-dark pb-3">In the context of university settings, students are caught up in multiple
            pressures from academic progression, career uncertainty, peer, parental and societal expectations and so on. All
            of these have a profound effect on their mental, physical, and emotional health. Over and above these, the
            COVID-19 pandemic has brought in its wake many changes which eventually affect the students’ performance and
            overall well-being. Against this background and considering the advice of the Hon’ble Chancellor, an
            institutional mechanism is operationalized to address these critical issues affecting the students through the
            formation of the ‘Royal Centre for Wellbeing’ (RCFW).
        </div>

        <div class="para1 text-dark pb-3">RCI certified and Licensed consultant professionals are available in the cell. The
            Clinical Psychologist provides face to face individual sessions with the students seeking help. This unit is
            exclusively for RGU studentsand can also be accessed by faculty members if need be. The Clinical Psychologist is
            professionally qualified and competent to handle general issues (Ex- anxiety, stress, depression, body-image
            related, eating disorders, social isolation, anger-management, sexuality, career, identity, self-esteem based,
            and so on) as well as specific issues (mental health conditions that students would seek help for such as
            family, peer-group, or romantic relationships).
        </div>

        <div class="para1 text-dark pb-3">In addition to the services of the external professional, in-house counseling is
            also provided by faculty members from the Department of Psychology with a commitment to helping students to
            prioritize their mental health, seek help when necessary, and begin on a path to greater resilience, growth, and
            fulfilment. The idea is to empower students by allowing them to reach their full academic and personal
            potential.
        </div>

        <div class="para1 text-dark pb-3">The sessions are scheduled for students upon receiving a request from faculty
            mentors (through the mentor-mentee system in the university) from respective departments. Students may also
            write individually to <a class="text-primary" href="counselling@rgu.ac">counselling@rgu.ac</a> for appointments.
            All the above are conducted once students voluntarily seek support/ help regarding mental health.
        </div>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
