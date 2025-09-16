@extends('frontend.master')
@section('title', 'Academic Calender : The Assam Royal Global University')
@section('meta_description', 'Stay on track with Royal Global University academic calendar, your roadmap to important dates and events throughout the academic year.')
@section('meta_keywords', 'Academic calender')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section class="container" style="background-image: url('mobile-assets/academic-calendar/bg.svg');">
                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                    style="color: #27467A; font-weight: 900;">
                    Tentative Academic Calendar for the <span style="color: #FF9A1E; font-weight: 500;">Year 2025-2026</span>
                </h2>

                <div style="padding: 20px 0px;">
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/calendar/ACADEMIC-CALENDER.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/academic-calendar/2025/RSP Academic Calender 2025-26.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar for RSP
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/academic-calendar/2025/RSN Academic Calender 2025-26.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar for RSN
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/academic-calendar/2025/RSB Academic Calender 2025-26.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar for RSB
                        </a>
                    </div>

                </div>

                </section>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->

        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/academic-calendar/bg.svg);">
            <div class="pb-5">
                <img src="mobile-assets/academic-calendar/cover1.png" />

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Tentative Academic Calendar for the <span style="color: #FF9A1E; font-weight: 500;">Year 2025-2026</span>
                </h2>


                <div class="container text-center mt-4 mb-3">
                    <div class="d-flex justify-content-center gap-3">
                        <a target="_blank" href="mobile-assets/calendar/ACADEMIC-CALENDER.pdf"> <button
                                style="background-color: #27467A; color: #fff;" class="btn download-btn fw-bold headd3">
                                <i class="bi bi-download"></i> Academic Calender
                            </button></a>
                        <a target="_blank" href="mobile-assets/academic-calendar/2025/RSP Academic Calender 2025-26.pdf"> <button
                                style="background-color: #27467A; color: #fff;" class="btn download-btn fw-bold headd3">
                                <i class="bi bi-download"></i> Academic Calender for RSP
                            </button> </a>

                        <a target="_blank" href="mobile-assets/academic-calendar/2025/RSN Academic Calender 2025-26.pdf"> <button
                                style="background-color: #27467A; color: #fff;" class="btn download-btn fw-bold headd3">
                                <i class="bi bi-download"></i> Academic Calender for RSN
                            </button> </a>

                            <a target="_blank" href="mobile-assets/academic-calendar/2025/RSB Academic Calender 2025-26.pdf"> <button
                                    style="background-color: #27467A; color: #fff;" class="btn download-btn fw-bold headd3">
                                    <i class="bi bi-download"></i> Academic Calender for RSB
                                </button> </a>
                    </div>
                </div>
            </div>
            </section>
    </div>
@endsection
