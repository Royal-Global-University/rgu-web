@extends('frontend.master')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/facilities-security/mob.png" alt="">

                <div class="container p-3">
                    <div class="row">
                        <div class="column p-3">

                            <h2 style="color: #0056b3 !important; font-size: 20px;"
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
                                                <p class="para1">All Officers are certified with basic security training and many
                                                    have taken advanced security training as well. Security Officers receive
                                                    training continuously throughout the day on subject matter such as crisis
                                                    intervention, suicide intervention skills training, sexualized violence
                                                    prevention and response, medical response including first aid, conflict
                                                    resolution, anti-racism, and other courses. This training is ongoing and
                                                    refreshed when required.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mt-2">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed headd3" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
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
                                            <button class="accordion-button collapsed headd3" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
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
                                            <button class="accordion-button collapsed headd3" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
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
                                            <button class="accordion-button collapsed headd3" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
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
            </div>
        </div>

            <div class="website">
             <!--Start Header-->
             @include('frontend/components/aheader')
     <!--End Header-->

       <!--head image Section-->
    <section class="no-bg-mobile" style="background-image: url(mobile-assets/facilities-security/bgg.svg); background-size: cover; padding: 50px 0px;">
        <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                        <img class="rounded" decoding="async"
                            src="mobile-assets/facilities-security/headimg.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                    Security and <span style="color: #FF9A1E; font-weight: 500;">Surveillance</span></h2>
                <p style="color: #27467A;" class="para1">
                    High boundary walls and round-the-clock well trained security guards patrolling the area 24*7 makes the campus safe and secure. CCTV cameras, fire alarms and anti-ragging squad further adds to the safety of our students and staff. No one can enter or leave the campus without proper authorization which is verified at various levels.
                </p>
            </div>
        </div>
    </div>
    </section>
    <!--head image Section-->

    <div style="padding: 30px 80px; background-color: #FFF8F0;">
        <div class="row">
            <div class="col-lg-6">
                <img src="mobile-assets/facilities-security/left.png" alt="">
            </div>

            <div class="col-lg-6">
                <img src="mobile-assets/facilities-security/right.png" alt="">
            </div>
        </div>
    </div>

    <div class="custom-container">
        <div class="custom-row">
          <div class="custom-column p-3">

            <h2 style="color: #0056b3 !important; font-size: 26px;" class="headd3 fw-bold text-dark pb-2 pt-1 text-center">
                FAQs
            </h2>

            <hr>

            <div class="row">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. What kind of training do campus security officers have?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">All Officers are certified with basic security training and many have taken advanced security training as well. Security Officers receive training continuously throughout the day on subject matter such as crisis intervention, suicide intervention skills training, sexualized violence prevention and response, medical response including first aid, conflict resolution, anti-racism, and other courses. This training is ongoing and refreshed when required.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Why do campus security officers wear uniforms?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Both for safety and security purposes our security officers wear uniforms as representatives of the University and also so that they are easily recognizable and identifiable.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. What equipment do campus security officers carry along with them?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Our Security Officers carry a radio, keys to campus buildings, a notebook, flashlight, gloves, and a mask for medical emergencies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. Are campus security officers like police officers?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">No, campus security officers are not police officers or constables. They are specially recruited to safeguard campus property and the university community.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. Why do people call campus security?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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

    <img src="mobile-assets/facilities-security/contact.svg" alt="">
            </div>
@endsection
