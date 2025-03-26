@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/intern-faq/mob-ban.png" alt="">
        </div>


        <div class="container accordionnew">

            <!-- search  -->
            <div class="search-box pt-2 pb-4">

                <div class="row height d-flex justify-content-center align-items-center">

                    <div class="col-md-6">

                        <div class="form d-flex justify-content-center align-items-center">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control form-input mobile-para1"
                                placeholder="Search anything...">
                            <a style="margin-left: 20px; display: flex; align-items: center; justify-content: center; background-color: #27467A; color: #fff; padding: 10px 20px 10px 20px;"
                                class="btn btn mobile-para1 fw-bold" href="#" role="button">Search</a>
                        </div>

                    </div>

                </div>

            </div>
            <!-- search  -->

            <!-- accordion  -->
            <div class="row">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button mobile-headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q. Can foreign students come to India on Tourist Visa and explore admission in some courses/
                                institutes and later get Student Visa while in India?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">No. In order to explore various options to study in India, he/she
                                    can apply for provisional Student Visa of 6 months duration from Indian Mission abroad
                                    and if he/she gets confirmed admission while in India, then he/she can apply for a
                                    Student Visa by visiting the local FRRO/FRO along with all the necessary documents.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Q. Can Student Visas directly be applied from Indian Missions abroad?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">Yes, they can, provided they show documents confirming their
                                    admission to a course in a reputed/recognized institute in India.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Q. What is the maximum duration of Student Visa?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">The maximum duration of a student visa is 5 years or the duration of
                                    the course whichever is earlier. Students may apply for extension by visiting the FRROs
                                    or the office of Superintendent of Police.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                Q. What are pre-arrival formalities that foreign students should undergo?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">All students having a valid Indian visa of more than 180 days must
                                    obtain a residential permit from the local Foreigner Registration Office (FRO) as per
                                    Indian immigration law.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                                aria-controls="collapsefive">
                                Q. How many courses a foreign student can pursue at a time in India?
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">Student can take only one course.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false"
                                aria-controls="collapsesix">
                                Q. Does foreign students require the approval/ NOC from any Ministry or Department for
                                technical courses?
                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">Students do not require approval/NOC from MHRD for admission to
                                    diploma/degree/post-graduate degree in Architecture & Town Planning, Engineering and
                                    Technology, MBA, Pharmacy, Applied Arts, Hotel Management & Catering Technology and MCA.
                                    However, NOC from the Ministry of Health is required for admission to courses in medical
                                    or para-military courses.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingseven">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false"
                                aria-controls="collapseseven">
                                Q. Can Student Visas be extended for clearing supplementary papers?
                            </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">Yes, he/ she must provide the concerned university/ institute
                                    permits as proof to the local FRRO/ FRO.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed mobile-headd3 " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false"
                                aria-controls="collapse8">
                                Q. How can a foreign student apply for visa extension?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="mobile-para1">Students may apply for extension by visiting the local FRRO or the
                                    office of Superintendent of Police with Bonafede certificate, proof of adequate
                                    financial standing etc.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <!-- contact -->
        <div class="container pt-3 pb-3">
            <div
                style="background: #1f3b6b; color: white; padding: 15px; border-radius: 10px; flex-wrap: wrap; text-align: center;">
                <p class="mobile-headd3" style="font-weight: bold;">Contact:</p>
                <p class="mobile-para1">Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs</p>
                <p class="mobile-para1"><span style="font-weight: bold;">Ph. no:</span> <a href="tel:+919864049818"
                        style="color: white; text-decoration: none;">+91 9864049818</a></p>
                <p class="mobile-para1"><span style="font-weight: bold;">Email:</span> <a href="mailto:gkanand@rgu.ac"
                        style="color: white; text-decoration: none;">gkanand@rgu.ac</a></p>
                <a href="tel:+919864049818" class="mobile-call-btn fw-bold"
                    style="text-decoration: none; background: #FF9A1E; color: white; padding: 8px 30px; border-radius: 5px; font-size: 20px; margin-top: 10px; display: inline-block;">
                    Call Now
                </a>
            </div>
        </div>
        <!-- contact -->

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div>
            <img src="mobile-assets/intern-faq/web-banner.png" alt="">
        </div>

        <div>
            <img src="mobile-assets/intern-faq/contact.svg" alt="">
        </div>
        <!-- header image  -->

        <div class="container-fluid accordionnew">

            <!-- search  -->
            <div class="search-box pt-2 pb-4">

                <div class="row height d-flex justify-content-center align-items-center">

                    <div class="col-md-6">

                        <div class="form d-flex justify-content-center align-items-center">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control form-input para1" placeholder="Search anything...">
                            <a style="margin-left: 20px; display: flex; align-items: center; justify-content: center; background-color: #27467A; color: #fff; padding: 10px 20px 10px 20px;"
                                class="btn btn para1 fw-bold" href="#" role="button">Search</a>
                        </div>

                    </div>

                </div>

            </div>
            <!-- search  -->

            <!-- accordion  -->

            <div class="row">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q. Can foreign students come to India on Tourist Visa and explore admission in some courses/
                                institutes and later get Student Visa while in India?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">No. In order to explore various options to study in India, he/she can apply
                                    for provisional Student Visa of 6 months duration from Indian Mission abroad and if
                                    he/she gets confirmed admission while in India, then he/she can apply for a Student Visa
                                    by visiting the local FRRO/FRO along with all the necessary documents.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q. Can Student Visas directly be applied from Indian Missions abroad?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Yes, they can, provided they show documents confirming their admission to a
                                    course in a reputed/recognized institute in India.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q. What is the maximum duration of Student Visa?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">The maximum duration of a student visa is 5 years or the duration of the
                                    course whichever is earlier. Students may apply for extension by visiting the FRROs or
                                    the office of Superintendent of Police.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Q. What are pre-arrival formalities that foreign students should undergo?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">All students having a valid Indian visa of more than 180 days must obtain a
                                    residential permit from the local Foreigner Registration Office (FRO) as per Indian
                                    immigration law.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q. How many courses a foreign student can pursue at a time in India?
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Student can take only one course.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q. Does foreign students require the approval/ NOC from any Ministry or Department for
                                technical courses?
                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Students do not require approval/NOC from MHRD for admission to
                                    diploma/degree/post-graduate degree in Architecture & Town Planning, Engineering and
                                    Technology, MBA, Pharmacy, Applied Arts, Hotel Management & Catering Technology and MCA.
                                    However, NOC from the Ministry of Health is required for admission to courses in medical
                                    or para-military courses.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="headingseven">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q. Can Student Visas be extended for clearing supplementary papers?
                            </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Yes, he/ she must provide the concerned university/ institute permits as
                                    proof to the local FRRO/ FRO.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed headd3 " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Q. How can a foreign student apply for visa extension?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">Students may apply for extension by visiting the local FRRO or the office
                                    of Superintendent of Police with Bonafede certificate, proof of adequate financial
                                    standing etc.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- accordion  -->

    </div>
@endsection
