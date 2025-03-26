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
        <div class="pt-4" style="background-image: url(assets/img/banner_adv/s2-bg-img-1.webp);">
            <div class="text-center">
                <h2 class="text-center headd2 text-dark">MSW</h3>
                    <h3 class="text-center headd3 text-dark">Duration - 02 Years<br>
                        <span class="text-center" style="font-size: 22px;">Royal School of Humanities & Social Sciences
                            (RSHSS)</span>
                    </h3>
            </div>
            <p class="d-flex justify-content-center gap-4 rounded pb-3 pt-3 text-center">
                <button type="button" class="btn p-3 text-white active" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Fee')"
                    style="padding-left: 40px !important; padding-right: 40px !important; font-size: 20px; font-weight: 600; background-color: #004085; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Fee
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Eligibility')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Eligibility
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Brochure')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Brochure
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Scholarship')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Scholarship
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Apply')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    How To Apply
                </button>
            </p>
            <div class="container pb-5">
                <div id="Fee" class="w3-container city card p-5 shadow" style="display:block">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0"> A.) Registration & Admission Fees (To Be Paid Once Only)
                        </p>
                        <p class="text-dark pt-2 m-0">a. Prospectus & Form - 1000.00</p>
                        <p class="text-dark pt-2 m-0">b. Registration(To be paid during the admission for all courses) -
                            10000.00</p>
                        <p class="text-dark pt-2 m-0">c. Admission Fee - 50000.00</p>
                        <p class="text-dark pt-2 m-0">d. Caution Money (Common for all streams) - Refundable 10000.00
                        </p>
                        <p class="text-dark pt-2 fw-bold m-0">B.) Programmes fee to be paid Yearly / semester payment for
                            New
                            Students 2024-25</p>
                        <p class="text-dark pt-2 m-0">Yearly Payment (Rs. - 85000.00)</p>
                        <p class="text-dark pt-2 m-0">Semester Payment (Rs. - 43500.00)</p>
                    </div>
                </div>
                <div id="Eligibility" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Eligibility Criteria</p>
                        <p class="text-dark pt-2 m-0">Bachelor’s Degree in any field from any recognized
                            University/Institution with minimum 50% marks or equivalent grade (5% relaxation to
                            SC/ST/OBC-Non-Creamy Layer)

                        </p>
                        <p class="text-dark pt-2 fw-bold m-0">Selection Process</p>
                        <p class="text-dark pt-2 m-0">Based on overall performance in last examination followed by
                            Personal
                            Interview.</p>
                    </div>
                </div>
                <div id="Brochure" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body text-center">
                        <img class="rounded shadow" src="assets/Files/brochurethumb.png">
                        <p class="text-dark pt-2 fw-bold m-0"><a href="assets/programme-pdf/MSW.pdf">Brochure 2024-25<i
                                    class="fas fa-download ms-2"></i></a>
                        </p>
                    </div>
                </div>
                <div id="Scholarship" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Scholarships</p>
                        <p class="text-dark pt-2 m-0">
                            Royal Global University offers several scholarships to help students pay for their
                            education.
                            Generally, merit scholarships are reserved for students with special qualifications, such as
                            academic performance, athletic or artistic talent and other endowment schemes.</p>

                        <p class="text-dark pt-2 fw-bold m-0">Application Process</p>
                        <p class="text-dark pt-2 m-0">
                            Students seeking Scholarships will have to submit an application as per the category for
                            which
                            the
                            student seeks scholarship.
                            For fresh students seeking admission, if interested for applying scholarship can select the
                            scholarship facility during the online application process.
                            Existing students can seek help from their departmental coordinators to keep themselves
                            updated
                            for
                            the scholarship application deadlines and process.</p>

                        <p class="pt-2 fw-bold" style="color: #FF9A1E;"><a href="scholarship&funding.html">More details, click
                                to view...</a></p>
                    </div>
                </div>
                <div id="Apply" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">How to Apply</p>
                        <p class="text-dark pt-2 m-0">
                            Admission to Royal Global University is highly competitive. You need to meet both admissions
                            &
                            subject requirements before we make an unconditional offer of admission. At RGU you will
                            learn
                            from outstanding teachers, access groundbreaking research and state-of-the-art facilities,
                            and
                            make invaluable contacts and lifelong friends.</p>

                        <p class="pt-2 fw-bold" style="color: #FF9A1E;"><a href="admission-how-to-apply.html"> more details
                                click to view... </a></p><br>

                        <p class="text-dark pt-2 fw-bold m-0">FULLY ONLINE ADMISSION PROCESS</p>

                        </p>
                        <div>
                            <a href="https://admissions.rgu.ac">
                                <button type="button" class="fw-bold text-white rounded p-3"
                                    style="background-color: #27467A; font-size: 16px; width: 30%;">
                                    Apply Now<span>
                                </button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
