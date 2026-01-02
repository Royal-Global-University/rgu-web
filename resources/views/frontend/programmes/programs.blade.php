@extends('frontend.master')
@section('title', 'Eligibility & selection criteria : The Assam Royal Global University')
@section('meta_description',
    'Discover the eligibility requirements and selection criteria for various programs at Royal
    Global University, including academic qualifications, entrance exams, and interview processes for admission.')
@section('meta_keywords', 'Eligibility & selection criteria')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://www.rgu.ac/mobile-assets/admission-fee-and-programmee/web-admission-programme.png"
                alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://www.rgu.ac/mobile-assets/admission-fee-and-programmee/web-admission-programme.png"
                alt="">

        </div>


        <div class="section-f">
            <div class="container">

                <style>
                    /* Custom styles to replace inline styles */
                    . {
                        font-size: 18px;
                        background-color: #00465d !important;
                        /* !important is used to override Bootstrap's default button styles */
                        color: #fff !important;
                    }

                    ..collapsed {
                        background-color: #00465d !important;
                        color: #fff !important;
                    }

                    /* This makes the accordion dropdown icon white so it's visible */
                    .::after {
                        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
                    }

                    .accordion-body-custom {
                        background-color: #fff;
                    }

                    .course-card-custom {
                        background-color: #006A67;
                    }
                </style>

                <section class="pt-2">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-lg-6 pt-4 mobile-headd3">
                                <h4 class="mobile-headd3 fw-bold text-dark">Search By Schools :</h4>
                                <form class="d-flex w-100">
                                    <select class="form-control me-2 shadow" id="schoolSelect" aria-label="Search">
                                        <option value="nothing">Select School to Navigate...</option>
                                        <option value="#collapseOne">Integrated Civil Service Programme</option>
                                        <option value="#collapseTwo">Royal School of Applied & Pure Sciences (RSAPS)
                                        </option>
                                        <option value="#collapseThree">Royal School of Architecture (RSA)</option>
                                        <option value="#collapseFour">Royal School of Behavioral & Allied Sciences (RSBAS)
                                        </option>
                                        <option value="#collapseSix">Royal School of Business (RSB)</option>
                                        <option value="#collapseSeven">Royal School of Commerce (RSC)</option>
                                        <option value="#collapseEight">Royal School of Communications & Media (RSCOM)
                                        </option>
                                        <option value="#collapseNine">Royal School of Design (RSD)</option>
                                        <option value="#collapseTen">Royal School of Engineering & Technology (RSET)
                                        </option>
                                        <option value="#collapseEleven">Royal School of Environmental & Earth Sciences
                                            (RSEES)</option>
                                        <option value="#collapseTwelve">Royal School of Fashion Design & Technology (RSFT)
                                        </option>
                                        <option value="#collapseThirteen">Royal School of Fine Arts (RSFA)</option>
                                        <option value="#collapseFourteen">Royal School of Agriculture (RSAG)</option>
                                        <option value="#collapseFifteen">Royal School of Hotel Management (RSHM)</option>
                                        <option value="#collapseSixteen">Royal School of Humanities & Social Sciences
                                            (RSHSS)</option>
                                        <option value="#collapseSeventeen">Royal School of Information Technology (RSIT)
                                        </option>
                                        <option value="#collapseEighteen">Royal School of Languages (RSL)</option>
                                        <option value="#collapseNineteen">Royal School of Library & Information Sciences
                                            (RSLIS)</option>
                                        <option value="#collapseTwenty">Royal School of Law & Administration(RSLA)</option>
                                        <option value="#collapseTwentyOne">Royal School of Life Sciences (RSLSC)</option>
                                        <option value="#collapseTwentyTwo">Royal School of Medical & Allied Sciences (RSMAS)
                                        </option>
                                        <option value="#collapseTwentyThree">Royal School of Nursing (RSN)</option>
                                        <option value="#collapseTwentyFour">Royal School of Pharmacy (RSP)</option>
                                        <option value="#collapseTwentyFive">Royal School of Travel Tourism Management
                                            (RSTTM)</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-lg-6 pt-4 mobile-headd3">
                                <h4 class="mobile-headd3 fw-bold text-dark">Search By Courses :</h4>
                                <form class="d-flex w-100">
                                    <input class="form-control shadow" type="search" id="courseSearchInput"
                                        placeholder="Type to search courses..." aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="accordion container pt-5 pb-5" id="accordionExample">

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="para1 accordion-button collapsed text-white " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Integrated Civil Service Programme
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold">RGU Programme - Integrated with Civil
                                        Service Programme</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Sociology</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Economics</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Public Administration
                                                    </p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Political Science</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. History</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Physics</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Mathematics</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Chemistry</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Geography</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Geography</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Geology</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A. Psychology</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Botany</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Zoology</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.A English</p>
                                                    <p class="m-0 p-0 text-white fw-bold para1">Integrated with Civil
                                                        Service Programme</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    Royal School of Applied & Pure Sciences (RSAPS)
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">APPLIED & PURE SCIENCES</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Physics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Physics</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Chemistry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Chemistry</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Mathematics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Mathematics</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-physics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Physics</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 mt-2 course-col">
                                            <a href="programs-b-sc-chemistry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Chemistry</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-2 course-col">
                                            <a href="programs-b-sc-mathematics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Mathematics</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-white "
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                    aria-controls="collapseThree">
                                    Royal School of Architecture (RSA)
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">ARCHITECTURE</p>

                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-barch"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Arch.</p>
                                                    <p class="text-center text-white para1">5 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class=" accordion-button collapsed text-white "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="true" aria-controls="collapseFour">
                                    Royal School of Behavioral & Allied Sciences (RSBAS)
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">BEHAVIOURAL & ALLIED SCIENCES</p>

                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MA-Psychology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA Psychology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MA-Clinical-Psychology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA Clinical Psychology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-Psychology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA Psychology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-Applied-Psychology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA Applied Psychology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed text-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="true" aria-controls="collapseFive">
                                    Royal School of Bio-sciences (RSBSC)
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">BIO-SCIENCES</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Bio-Technology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Biotechnology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Msc-Microbiology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Microbiology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Bio-Science</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-bio-technology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Biotechnology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-b-sc-microbiology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Microbiology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Bio-Science</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed text-white  "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="true" aria-controls="collapseSix">
                                    Royal School of Business (RSB)
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">BUSINESS</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA Finance</p>
                                                    <p class="text-center text-white para1">2 Years</p>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA Marketing</p>
                                                    <p class="text-center text-white para1">2 Years</p>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA - HRM</p>
                                                    <p class="text-center text-white para1">2 Years</p>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA - Operations Management
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA - Entrepreneurship &
                                                        Small Business Management</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-MBA-Finance"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MBA - Business Analytics
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BBA"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BBA</p>
                                                    <p class="text-center text-white para1">3/4 Yr as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Executive MBA</p>
                                                    <p class="text-center text-white para1">2 Yr as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed text-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="true" aria-controls="collapseSeven">
                                    Royal School of Commerce (RSC)
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">COMMERCE</p>


                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MCom"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Com</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-bcom-morning-shift"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Com - Morning Shift</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-bcom"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Com - Day Shift</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-bcom-finance-with-ica"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Com - Finance with ICA
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-bcom-finance-with-ica"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Com with ACCA</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-bcom-finance-with-ica"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Com with CMA</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed text-white  "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="true" aria-controls="collapseEight">
                                    Royal School of Communications & Media (RSCOM)
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">COMMUNICATIONS & MEDIA</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MA-J&MC"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA J&MC</p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Animation-&-Visual-Effects"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Animation and Visual
                                                        Effects</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-J&MC"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA J&MC</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-animation-visual-effects"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Animation and Visual
                                                        Effects</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed text-white  "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                    aria-expanded="true" aria-controls="collapseNine">
                                    Royal School of Design (RSD)
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">DESIGN</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design
                                                        (BID)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design
                                                        (BID) Lateral
                                                        Entry</p>
                                                    <p class="text-center text-white para1">3 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design
                                                        (Communication Design)
                                                        (B.Des. CD)
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Graphic
                                                        Design)
                                                        (B.Des. GD)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Product
                                                        Design)
                                                        (B.Des. PD)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion
                                                        Design)
                                                        (B.Des. FD)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion
                                                        Design)
                                                        (B.Des. FD) Lateral Entry</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div style="padding: 10px 0px;">
                                            <hr>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Des. - Fashion Design
                                                        (FD)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Des. - Communication
                                                        Design (CD)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Des. - Graphic Design
                                                        (GD)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="#"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Des. - Product Design
                                                        (PD)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed text-white  "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                    aria-expanded="true" aria-controls="collapseTen">
                                    Royal School of Engineering & Technology (RSET)
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">ENGINEERING & TECHNOLOGY</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MTech-CSE-in-Artifical-Intelligence"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - Artifical
                                                        Intelligence</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MTech-CSE-in-Internet-of-Things"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - IOT</p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MTech-CE-in-Water-Resources"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Water
                                                        Resources Development
                                                        & Management</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MTech-CAD"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        M.Tech CE - CAD
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        M.Tech CE - CDC
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-MTech-CE-in-Structural-Engineering"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Structural
                                                        Engineering</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div style="padding: 10px 0px;">
                                            <hr>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-tech-cse"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CSE)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-tech-ce"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CE)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-tech-me"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (ME)</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-tech-artifical-intelligence-ai"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Tech. - Artifical
                                                        Intelligence (AI)</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-tech-lateral-entry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        B.Tech - (Lateral Entry) - CE/CSE/ME/AI/Data Science
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BTechWorking-Professional-CE-CSE"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        B.Tech for Working Professional (CE, CSE, ME)
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        B.Tech - Data Science
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed text-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                    aria-expanded="true" aria-controls="collapseEleven">
                                    Royal School of Environmental & Earth Sciences (RSEES)
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">ENVIRONMENTAL & EARTH SCIENCES</p>

                                    <div class="row">

                                        <div class="col-lg-3 pb-3 course-col">
                                            <a href="programs-MSc-geography"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geography</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pb-3 course-col">
                                            <a href="programs-MA-Geography"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA Geography</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pb-3 course-col">
                                            <a href="programs-MSc-in-Geoinformatics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. in Geoinformatics
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pb-3 course-col">
                                            <a href="programs-MSc-Geology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BSc-Geography"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA Geography</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-geology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Geology
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed text-white  "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                    aria-expanded="true" aria-controls="collapseTwelve">
                                    Royal School of Fashion Design & Technology (RSFT)
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">FASHION DESIGN & TECHNOLOGY</p>

                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-des-fd-fashion-design"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion
                                                        Design) (B.Des. FD)</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master of Design (Fashion
                                                        Design) (M.Des. FD)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingThirteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                    aria-expanded="true" aria-controls="collapseThirteen">
                                    Royal School of Fine Arts (RSFA)
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse"
                                aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">FINE ARTS</p>

                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Master-of-Fine-Arts-MFA"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master of Fine Arts (MFA)
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Bachelor-of-Fine-Arts-BFA"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Fine Arts (BFA)
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingFourteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                    aria-expanded="true" aria-controls="collapseFourteen">
                                    Royal School of Agriculture (RSAG)
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse"
                                aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">AGRICULTURE</p>

                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Agriculture</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Agriculture</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingFifteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                    aria-expanded="true" aria-controls="collapseFifteen">
                                    Royal School of Hotel Management (RSHM)
                                </button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse"
                                aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">HOTEL MANAGEMENT</p>

                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-HotelManagement"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA - Hotel Management
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-in-Culinary-Arts"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - Culinary Arts</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Hotel-Management"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Hotel Management/MHM
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Bachelor-of-Hotel-Management-BHM"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Hotel
                                                        Management
                                                        (BHM)</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingSixteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                    aria-expanded="true" aria-controls="collapseSixteen">
                                    Royal School of Humanities & Social Sciences (RSHSS)
                                </button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse"
                                aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">HUMANITIES & SOCIAL SCIENCES</p>
                                    <div class="row">

                                        <div class="col-lg-3 mt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - Indian Knowledge
                                                        System (IKS)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-MA-Economics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - Economics</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-MA-Sociology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - Sociology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-MSW"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MSW
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 mt-3 course-col">
                                            <a href="programs-MA-Public-Administration"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - Public Administration
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-MA-Political-Science"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - Pol. Science</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-MA-History"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - History</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BA-Economics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - Economics</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BA-Sociology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - Sociology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BSW"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BSW</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BA-Public-Administration"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - Public Administration
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BA-Political-Science"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - Pol. Science
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BA-History"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - History
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingSeventeen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen"
                                    aria-expanded="true" aria-controls="collapseSeventeen">
                                    Royal School of Information Technology (RSIT)
                                </button>
                            </h2>
                            <div id="collapseSeventeen" class="accordion-collapse collapse"
                                aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">INFORMATION TECHNOLOGY</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MCA"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MCA</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-IT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. (IT)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BCA"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BCA
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BSc-IT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. IT</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingEighteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                    aria-expanded="true" aria-controls="collapseEighteen">
                                    Royal School of Languages (RSL)
                                </button>
                            </h2>
                            <div id="collapseEighteen" class="accordion-collapse collapse"
                                aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">LANGUAGES</p>
                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MA-English"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">MA - English</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-BA-English"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA - English</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingNineteen">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen"
                                    aria-expanded="true" aria-controls="collapseNineteen">
                                    Royal School of Library & Information Sciences (RSLIS)
                                </button>
                            </h2>
                            <div id="collapseNineteen" class="accordion-collapse collapse"
                                aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">LIBRARY & INFORMATION SCIENCES</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Master-of-Library&Information-Sciences"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        Master of Library & Information Sciences (MLISc)
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwenty">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                    aria-expanded="true" aria-controls="collapseTwenty">
                                    Royal School of Law & Administration (RSLA)
                                </button>
                            </h2>
                            <div id="collapseTwenty" class="accordion-collapse collapse"
                                aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">LAW & ADMINISTRATION</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-LLM-Morning-Shift"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">LLM Morning Shift</p>
                                                    <p class="text-center text-white para1">1 Year</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-LLM-Day-Shift"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">LLM Day Shift</p>
                                                    <p class="text-center text-white para1">1 Year</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="program-ba-bba-llb-hons"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">BA/BBA - LLB (Hons.)
                                                    </p>
                                                    <p class="text-center text-white para1">5 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="program-ba-llb-hons"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">LLB - (Hons.)</p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwentyOne">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne"
                                    aria-expanded="true" aria-controls="collapseTwentyOne">
                                    Royal School of Life Sciences (RSLSC)
                                </button>
                            </h2>
                            <div id="collapseTwentyOne" class="accordion-collapse collapse"
                                aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">LIFE SCIENCES</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Botany"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Botany</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Zoology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Zoology</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Forestry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Forestry
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-ForensicScience"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Forensic Science</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-botany"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Botany</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-zoology"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Zoology</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-forensicScience"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Forensic Science</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="https://www.rgu.ac/programs-b-sc-forestry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Forestry</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwentyTwo">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo"
                                    aria-expanded="true" aria-controls="collapseTwentyTwo">
                                    Royal School of Medical & Allied Sciences (RSMAS)
                                </button>
                            </h2>
                            <div id="collapseTwentyTwo" class="accordion-collapse collapse"
                                aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">MEDICAL & ALLIED SCIENCES</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MasterofPhysiotherapyMPT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master of Physiotherapy
                                                        (MPT)</p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Medical-Laboratory-MMLT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Medical Laboratory
                                                        Technology
                                                        (MMLT)</p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-MSc-Nutrition"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Nutrition and
                                                        Dietetics
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-M-Optometry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Optometry</p>
                                                    <p class="text-center text-white para1">2 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-Bachelor-of-Physiotherapy-BPT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy
                                                        (BPT)</p>
                                                    <p class="text-center text-white para1">4.6 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BachelorofPhysiotherapy"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy
                                                        (BPT) Lateral
                                                        Entry</p>
                                                    <p class="text-center text-white para1">3.6 Years</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-bsc-Medical-technology-bmlt"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Medical Laboratory
                                                        Technology
                                                        (BMLT)</p>
                                                    <p class="text-center text-white para1">3+1 Year Internship</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-medicaltechnologybmlt-lateral-entry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Medical Laboratory
                                                        Technology
                                                        (BMLT) Lateral Entry
                                                    </p>
                                                    <p class="text-center text-white para1">2+1 Year Internship</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-dialysis"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Dialysis</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-Technology-OTT"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Operation Theatre
                                                        Technology (OTT)
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-radiography"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Radiography and
                                                        Advance Imaging
                                                        Technology
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-sc-nutrition&dietetics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Nutrition and
                                                        Dietetics</p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-bsc-in-emergency"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. in Emergency &
                                                        Critical Care
                                                    </p>
                                                    <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-optometry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B. Optometry</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-b-optometry-lateral-entry"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B. Optometry - Lateral
                                                        Entry
                                                    </p>
                                                    <p class="text-center text-white para1">3 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - MEDICAL
                                                        RADIOLOGY AND IMAGING TECHNOLOGY
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - ANAESTHESIA AND
                                                        OPERATION THEATRE TECHNOLOGY
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - MEDICAL
                                                        LABORATORY SCIENCE- BMLS
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - Dialysis
                                                        Therapy Technology
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - Emergency Care
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Bachelor - Food Science &
                                                        Technology
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - MEDICAL RADIOLOGY
                                                        AND IMAGING TECHNOLOGY
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - ANAESTHESIA &
                                                        OPERATION THEATRE TECHNOLOGY
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - Dialysis Therapy
                                                        Technology
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - Emergency Care
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - Food Science &
                                                        Technology
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">Master - Medical
                                                        Laboratory Science- MMLS
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>



                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwentyThree">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThree"
                                    aria-expanded="true" aria-controls="collapseTwentyThree">
                                    Royal School of Nursing (RSN)
                                </button>
                            </h2>
                            <div id="collapseTwentyThree" class="accordion-collapse collapse"
                                aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">NURSING</p>
                                    <div class="row">

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-BSc-Nursing"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Nursing</p>
                                                    <p class="text-center text-white para1">4 Years</p><br>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-General-Nursing-Midwifery"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">General Nursing &
                                                        Midwifery
                                                    </p>
                                                    <p class="text-center text-white para1">3.5 Years</p>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwentyFour">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFour"
                                    aria-expanded="true" aria-controls="collapseTwentyFour">
                                    Royal School of Pharmacy (RSP)
                                </button>
                            </h2>
                            <div id="collapseTwentyFour" class="accordion-collapse collapse"
                                aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">PHARMACY</p>
                                    <div class="row">
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-pharm"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">B.Pharm.</p>
                                                    <p class="text-center text-white para1">4 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-D-Pharm"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">D.Pharm.
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-M-Pharm-Pharmaceutical"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. - Pharmaceutical
                                                        Chemistry
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 course-col">
                                            <a href="programs-M-Pharm-Pharmaceutics"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        M.Pharm - Pharmaceutics
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 pt-3 course-col">
                                            <a href="programs-M-Pharm-Pharmacognosy"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        M.Pharm -Pharmacognosy
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwentyFive">
                                <button class="accordion-button collapsed text-white para1 "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFive"
                                    aria-expanded="true" aria-controls="collapseTwentyFive">
                                    Royal School of Travel Tourism Management (RSTTM)
                                </button>
                            </h2>
                            <div id="collapseTwentyFive" class="accordion-collapse collapse"
                                aria-labelledby="headingTwentyFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body-custom">
                                    <p class="m-0 pb-4 text-dark fw-bold para1">TRAVEL & TOURISM MANAGEMENT</p>
                                    <div class="row">

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-b-sc-ba-travel"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        B.Sc./BA Travel & Tourism Management
                                                    </p>
                                                    <p class="text-center text-white para1">4 Years as per NEP</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 course-col">
                                            <a href="programs-Master-Travel&Tourism"
                                                class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                                <div class="border p-2 rounded flex-grow-1 course-card-custom">
                                                    <p class="m-0 p-0 text-white fw-bold para1">
                                                        Master of Travel & Tourism Management - MTTM
                                                    </p>
                                                    <p class="text-center text-white para1">2 Years</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </section>

                <script>
                    // Wait for the full page to load before running the script
                    document.addEventListener('DOMContentLoaded', function() {

                        // --- 1. DROPDOWN NAVIGATION FUNCTIONALITY ---
                        const schoolSelect = document.getElementById('schoolSelect');
                        if (schoolSelect) {
                            schoolSelect.addEventListener('change', function(e) {
                                const targetId = e.target.value;
                                // Check if it's a valid selection and not the placeholder
                                if (targetId && targetId !== 'nothing') {
                                    const targetPanel = document.querySelector(targetId);
                                    const targetButton = document.querySelector(`[data-bs-target="${targetId}"]`);

                                    if (targetPanel && targetButton) {
                                        // Use Bootstrap's JavaScript API to open the panel
                                        const bsCollapse = new bootstrap.Collapse(targetPanel, {
                                            toggle: false // Ensure it just shows, doesn't toggle
                                        });
                                        bsCollapse.show();

                                        // Scroll the page smoothly to the opened section
                                        targetButton.scrollIntoView({
                                            behavior: 'smooth',
                                            block: 'start'
                                        });
                                    }
                                }
                            });
                        }

                        // --- 2. LIVE SEARCH FUNCTIONALITY ---
                        const searchInput = document.getElementById('courseSearchInput');
                        if (searchInput) {
                            searchInput.addEventListener('input', function(e) {
                                // Get the search term, convert to lowercase, and remove extra spaces
                                const searchTerm = e.target.value.toLowerCase().trim();
                                const accordions = document.querySelectorAll('.accordion-item');

                                // Loop over every accordion item (i.e., every school)
                                accordions.forEach(item => {
                                    let accordionHasMatch = false;
                                    // Find all course columns *within this accordion item*
                                    const courseCols = item.querySelectorAll('.course-col');

                                    // Loop over all courses in this school
                                    courseCols.forEach(col => {
                                        const cardText = col.textContent.toLowerCase();

                                        // If course text includes the search term, show it
                                        if (cardText.includes(searchTerm)) {
                                            col.style.display = ''; // Show column
                                            accordionHasMatch =
                                                true; // Mark this school as having a match
                                        } else {
                                            // Otherwise, hide the course
                                            col.style.display = 'none'; // Hide column
                                        }
                                    });

                                    // After checking all courses, decide if we show the *entire school*
                                    if (accordionHasMatch || searchTerm === '') {
                                        item.style.display = ''; // Show school
                                    } else {
                                        item.style.display = 'none'; // Hide school
                                    }
                                });
                            });
                        }
                    });
                </script>

            </div>
        </div>

    </div>
@endsection
