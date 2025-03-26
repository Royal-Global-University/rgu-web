@extends('frontend.master')
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
                        <a href="mobile-assets/academic-calendar/ACADEMIC CALENDER (ARGU) 2024-25.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar (2024-2025)
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/academic-calendar/ACADEMIC CALENDER (RSP) 2024-25.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar for RSP (2024-2025)
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center pt-2">
                        <a href="mobile-assets/academic-calendar/RSN Academic Calender 2024-25-min.pdf" target="_blank"
                            class="btn mobile-para1 w-100 d-flex align-items-center justify-content-center text-center"
                            style="background-color: #13223b; color: white; font-weight: bold; padding: 12px 20px; border-radius: 5px; text-decoration: none; min-height: 55px; font-size: 15px; white-space: nowrap;">
                            <i class="fa fa-download" style="margin-right: 8px;"></i> Academic Calendar for RSN (2024-2025)
                        </a>
                    </div>
                </div>

                <div class="container border rounded text-danger bg-white p-3">
                    <p class="mobile-para1 text-danger fw-bold" style="text-align: justify; font-size: 14px; line-height: 1.8;">
                        * Programme having internship will commence after six weeks from the date of end of the Semester-End
                        Examinations (Odd-Term) of their respective programme/s and such has to be approved by the competent
                        authority/s, however programmes where internship is not a part of curriculum will start the subsequent
                        semester as mentioned and approved via Academic Calender.
                    </p>
                </div>

                <div class="pb-4">
                    <div class="container border rounded bg-white p-3 mt-3">
                        <h2 style="color: #27467A;" class="mobile-headd2 text-center">Note:</h2>
                        <ol class="mobile-para1 fw-bold"
                            style="text-align: justify; font-size: 14px; line-height: 1.8; color: #13223b;">
                            <li>No. of Regular Classes/ Teaching and Learning Process days (5 days/week) = 180 days/ year or 90
                                days/ semester</li>
                            <li>No. of Examination days (excluding evaluation days) = 22/ year or 11/semester</li>
                            <li>Examination papers evaluation shall be completed within 7-10 days from the date of completion of
                                the respective examinations.</li>
                            <li>Re-registration form to be issued/submitted as applicable.</li>
                            <li>If any of the Holidays/ Restricted Holidays for festivals notified above does not fall on the
                                date/day notified, necessary modification will be made as per Government notification.</li>
                            <li>Cultural/ sports events, days/weeks will be notified as and when required during the ongoing
                                semester and will be held in the afternoon hour of the day in the month of February/ March.</li>
                            <li>Convocation is tentatively scheduled in November/December, as per the consent of the Chief
                                Guest.</li>
                            <li>Winter/ Summer Break for teaching staff will be notified by the competent authority in due
                                course of time.</li>
                            <li>Any minor modification may be done only with due approval from the Vice-Chancellor, RGU.</li>
                        </ol>

                    </div>
                </div>

            </section>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->

        @include('frontend/components/aheader')
        <!--End Header-->

        <div class="pb-5">
            <img src="mobile-assets/academic-calendar/Calendar1.png" />
            <div class="container text-center mt-4 mb-3">
                <div class="d-flex justify-content-center gap-3">
                    <a target="_blank" href="mobile-assets/academic-calendar/ACADEMIC CALENDER (ARGU) 2024-25.pdf"> <button
                            class="btn btn-primary download-btn fw-bold headd3">
                            <i class="bi bi-download"></i> Academic Calender (2024-25)
                        </button></a>
                    <a target="_blank" href="mobile-assets/academic-calendar/ACADEMIC CALENDER (RSP) 2024-25.pdf"> <button
                            class="btn btn-primary download-btn fw-bold headd3">
                            <i class="bi bi-download"></i> Academic Calender for RSP (2024-25)
                        </button> </a>

                    <a target="_blank" href="mobile-assets/academic-calendar/RSN Academic Calender 2024-25-min.pdf"> <button
                            class="btn btn-primary download-btn fw-bold headd3">
                            <i class="bi bi-download"></i> Academic Calender for RSN (2024-25)
                        </button> </a>
                </div>
            </div>
            <div>
                <img src="mobile-assets/academic-calendar/Calendar2.png" />
            </div>

        </div>
    </div>
@endsection
