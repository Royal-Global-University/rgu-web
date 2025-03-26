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
                <h2 class="text-center headd2 text-dark">M.Sc. Nursing</h2>
                <h3 class="text-center headd3 text-dark">(Medical Surgical Nursing/OBE Nursing/Child Health
                    Nursing/Mental Health Nursing/Community Health Nursing)<br>
                    <span class="text-center">Duration - 02 Years <br>Royal School of Nursing (RSN)
                        (RSA)</span>
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
                        <p class="text-dark pt-2 m-0">c. Admission Fee - 60000.00</p>
                        <p class="text-dark pt-2 m-0">d. Caution Money (Common for all streams) - Refundable 10000.00
                        </p>
                        <p class="text-dark pt-2 fw-bold m-0">B.) Programmes fee to be paid Yearly / semester payment for
                            New
                            Students 2024-25</p>
                        <p class="text-dark pt-2 m-0">Yearly Payment (Rs. - 160000.00)</p>
                        <p class="text-dark pt-2 m-0">Semester Payment (Rs. - 81500.00)</p>
                    </div>
                </div>
                <div id="Eligibility" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Eligibility Criteria</p>
                        <p class="text-dark pt-2 m-0">
                        <ol class="para1 text-dark">

                            <li>The minimum educational requirements shall be the passing of BSc. Nursing / BSc. Hons.
                                Nursing/Post Basic BSc. Nursing with minimum of 55% marks in aggregate. 5% relaxation of
                                marks for SC/ST/OBC candidates will be given.</li>
                            <li>The candidate should have undergone BSc. Nursing / BSc. Hons. Nursing / Post Basic BSc.
                                Nursing in an institution which is recognized by Indian Nursing Council.</li>
                            <li>The candidate should be a Registered Nurse and Registered Midwife or equivalent with any
                                State Nursing Registration Council.</li>
                            <li>BSc. Nursing graduate should have minimum one year of experience in a hospital or in a
                                College or in a School of Nursing or in Community Health Program after registration in
                                State Nursing Council on the day of admission.</li>
                            <li>Post Basic BSc. Nursing graduate should have minimum one year of work experience prior
                                or after in a hospital or in a College or in a School of Nursing or in Community Health
                                Program after registration in State Nursing Council on the day of admission.</li>
                            <li>The candidate registered as “Registered Nurse”(& not Midwife) will not be eligible for
                                specialization in “ Obstetrics &Gynaecology Nursing”</li>
                            <li>Candidate shall be medically fit. The candidate, selected for admission in MSc. Nursing
                                course shall have to submit a medical fitness certificate from a physician during the
                                admission.</li>
                            <li>Candidates who have obtained degree qualification of distance mode will not be eligible
                                for admission
                        </ol>
                        </p>
                        <p class="text-dark pt-2 fw-bold m-0">Selection Process</p>
                        <p class="text-dark pt-2 m-0">Based on overall performance in last examination followed by
                            Personal Interview.</p>
                    </div>
                </div>
                <div id="Brochure" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body text-center">
                        <img class="rounded shadow" src="assets/Files/brochurethumb.png">
                        <p class="text-dark pt-2 fw-bold m-0"><a
                                href="assets/programme-pdf/brochure for web_compressed-min.pdf">Brochure 2024-25<i
                                    class="fas fa-download ms-2"></i></a>
                        </p>
                    </div>
                </div>
                <div id="Scholarship" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Scholarships</p>
                        <p class="text-dark pt-2 m-0">
                            Royal Global University offers several scholarships to help students pay for their
                            education.<br>
                            Generally, merit scholarships are reserved for students with special qualifications, such as
                            academic performance, athletic or artistic talent and other endowment schemes.</p>

                        <p class="text-dark pt-2 fw-bold m-0">Application Process</p>
                        <p class="text-dark pt-2 m-0">
                            Students seeking Scholarships will have to submit an application as per the category for
                            which the student seeks scholarship.<br>
                            For fresh students seeking admission, if interested for applying scholarship can select the
                            scholarship facility during the online application process.<br>
                            Existing students can seek help from their departmental coordinators to keep themselves
                            updated for the scholarship application deadlines and process.</p>

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
