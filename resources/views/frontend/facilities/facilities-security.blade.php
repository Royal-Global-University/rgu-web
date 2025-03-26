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
            <section style="background-image: url(assets/img/all-facilities/security/background.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/all-facilities/security/headimg.png" alt="">
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
                                            Security & Surveillance
                                        </h1>

                                        <div class="para1 text-dark" data-splitting style="text-align: justify;">
                                            <p>
                                                High boundary walls and round-the-clock well trained security guards patrolling
                                                the area 24*7 makes the campus safe and secure. CCTV cameras, fire alarms and
                                                anti-ragging squad further adds to the safety of our students and staff. No one
                                                can enter or leave the campus without proper authorization which is verified at
                                                various levels.
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


        <img src="assets/img/all-facilities/security/contact.svg" alt="">

        <div class="container p-3">
            <img src="assets/img/all-facilities/security/img.jpeg" alt="">
        </div>

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important; font-size: 26px;"
                        class="headd3 fw-bold text-dark pb-2 pt-1 text-center">
                        FAQs
                    </h2>

                    <hr>

                    <div class="row">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button headd3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. What kind of training do campus security officers have?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="para1">All Officers are certified with basic security training and many have
                                            taken advanced security training as well. Security Officers receive training
                                            continuously throughout the day on subject matter such as crisis intervention,
                                            suicide intervention skills training, sexualized violence prevention and response,
                                            medical response including first aid, conflict resolution, anti-racism, and other
                                            courses. This training is ongoing and refreshed when required.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Why do campus security officers wear uniforms?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="para1">Both for safety and security purposes our security officers wear
                                            uniforms as representatives of the University and also so that they are easily
                                            recognizable and identifiable.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. What equipment do campus security officers carry along with them?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="para1">Our Security Officers carry a radio, keys to campus buildings, a
                                            notebook, flashlight, gloves, and a mask for medical emergencies.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        4. Are campus security officers like police officers?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="para1">No, campus security officers are not police officers or constables.
                                            They are specially recruited to safeguard campus property and the university
                                            community.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        5. Why do people call campus security?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="para1">
                                            <li>To access a room or building</li>
                                            <li>Inquire about something that has been lost</li>
                                            <li>Advice on personal safety</li>
                                            <li>Parking-related questions</li>
                                            <li>To report something or someone suspicious</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
