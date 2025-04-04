@extends('frontend.master')
@section('content')

    <div>
        <!--About Section-->
        @include('frontend/components/aheader')
        <div>
            <img src="mobile-assets/admission-fee-and-programmee/web-admission-programme.png" alt="">
        </div>

         <section style="background-color: #f2f2f2;" class="pt-5">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-lg-6 pt-4">
                        <h4 class="headd3 fw-bold text-dark">Search By Schools :</h4>
                        <form class="d-flex w-100">
    <!--Copy and replace from here-->
                            <select class="form-control me-2 shadow" id="schoolSelect" aria-label="Search">
                                <option value="nothing">Select Course</option>
                                <option value="nothing1">Royal School of Applied & Pure Sciences (RSAPS)</option>
                                <option value="nothing2">Royal School of Architecture (RSA)</option>
                                <option value="nothing3">Royal School of Behavioral & Allied Sciences (RSBAS)</option>
                                <option value="nothing4">Royal School of Business (RSB)</option>
                                <option value="nothing5">Royal School of Commerce (RSC)</option>
                                <option value="nothing6">Royal School of Communications & Media (RSCOM)</option>
                                <option value="nothing7">Royal School of Design (RSD)</option>
                                <option value="nothing8">Royal School of Engineering & Technology (RSET)</option>
                                <option value="nothing9">Royal School of Environmental & Earth Sciences (RSEES)</option>
                                <option value="nothing10">Royal School of Fashion Design & Technology (RSFT)</option>
                                <option value="nothing11">Royal School of Fine Arts (RSFA)</option>
                                <option value="nothing12">Royal School of Hotel Management (RSHM)</option>
                                <option value="nothing13">Royal School of Humanities &amp; Social Sciences (RSHSS)</option>
                                <option value="nothing14">Royal School of Information Technology (RSIT)</option>
                                <option value="nothing15">Royal School of Languages (RSL)</option>
                                <option value="nothing16">Royal School of Library &amp; Information Sciences (RSLIS)</option>
                                <option value="nothing17">Royal School of Law &amp; Administration(RSLA)</option>
                                <option value="nothing18">Royal School of Life Sciences (RSLSC)</option>
                                <option value="nothing19">Royal School of Medical &amp; Allied Sciences (RSMAS)</option>
                                <option value="nothing20">Royal School of Nursing (RSN)</option>
                                <option value="nothing21">Royal School of Pharmacy (RSP)</option>
                                <option value="nothing22">Royal School of Travel Tourism Management (RSTTM)</option>
                            </select>
    <!--Copy and replace till here-->
                        </form>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <h4 class="headd3 fw-bold text-dark">Search By Courses :</h4>
                        <form class="d-flex w-100"> <!-- Change to w-100 for full width -->
                            <input class="form-control shadow" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion container pt-5 pb-5" id="accordionExample">
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingOne">
                        <button style="font-size: 18px; background-color: #00465d;" class="para1 accordion-button text-white"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Royal School of Applied & Pure Sciences (RSAPS)
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">APPLIED & PURE SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Physics')}}"
                                       class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Physics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Chemistry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Chemistry</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Mathematics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Mathematics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-b-sc-physics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Physics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-chemistry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Chemistry</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-mathematics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Mathematics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Physics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Chemistry</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Mathematics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Physics</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Chemistry</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Mathematics</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header">
                        <button style="font-size: 18px; background-color: #00465d;" class="para1 accordion-button text-white"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Royal School of Architecture (RSA)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">ARCHITECTURE</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-barch')}}"
                                       class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
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
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="para1 accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Royal School of Behavioral & Allied Sciences (RSBAS)
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">BEHAVIOURAL & ALLIED SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Psychology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Psychology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Clinical-Psychology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Clinical Psychology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-Psychology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA Psychology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-Applied-Psychology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA Applied Psychology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Psychology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Applied Psychology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Psychology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Applied Psychology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
                            Royal School of Bio-sciences (RSBSC)
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">BIO-SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Bio-Technology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Bio-technology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Msc-Microbiology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Microbiology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Food-Technology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Food Technology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-b-sc-bio-technology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Bio-technology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-microbiology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Microbiology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-food-technology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Food Technology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Biotechnology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Microbiology</p>
                                            <p class="text-center text-white para1">2 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Food Technology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Biotechnology</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Microbiology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Food Technology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
                            Royal School of Business (RSB)
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">BUSINESS</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA Finance</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA Marketing</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - HRM</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Operations Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Entrepreneurship & Small Business
                                                Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-MBA-Finance')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Business Analytics</p>
                                            <p class="text-center text-white para1">2 Years</p> <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Business Administration</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Business Administration</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BBA')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BBA</p>
                                            <p class="text-center text-white para1">3/4 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Royal School of Commerce (RSC)
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">COMMERCE</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MCom')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Com.</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-bcom')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-bcom-morning-shift')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com (Morning shift)</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-bcom-finance-with-ica')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com - Finance with ICA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-bcom-finance-with-ica')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com with ACCA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p> <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-bcom-finance-with-ica')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com with CMA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Commerce (Morning Shift)</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Commerce (Day Shift)</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Commerce (Morning Shift)
                                            </p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Commerce (Day Shift)</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Royal School of Communications & Media (RSCOM)
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">COMMUNICATIONS & MEDIA</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-J&MC')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA J&MC</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Animation-&-Visual-Effects')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Animation and Visual Effects</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-J&MC')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA J&MC</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-b-sc-animation-visual-effects')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Animation and Visual Effects</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in J& Mc</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Animation and Visual Effects
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in J& Mc</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Animation and Visual
                                                Effects</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingEight">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            Royal School of Design (RSD)
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">DESIGN</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BachelorInterior-DesignBID')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design (BID)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design (BID) Lateral
                                                Entry</p>
                                            <p class="text-center text-white para1">3 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-of-Design-Communication-Design')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Communication Design)
                                                (B.Des. CD)
                                            </p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-of-Design-Graphic-Design')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Graphic Design)
                                                (B.Des. GD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-Bachelor-of-Design-Product-Design')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Product Design)
                                                (B.Des. PD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD) Lateral Entry</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Interior Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Communication Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Graphic Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Product Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Interior Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEPP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Communication Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Graphic Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Product Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingNine">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            Royal School of Engineering & Technology (RSET)
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">ENGINEERING & TECHNOLOGY</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MTech-CSE-in-Artifical-Intelligence')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - Artifical Intelligence</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MTech-CSE-in-Internet-of-Things')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - IOT</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MTech-CAD')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. - CAD
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MTech-CE-in-Water-Resources')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Water Resources Development
                                                & Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-MTech-CE-in-Structural-Engineering')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Structural Engineering</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-cse')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CSE)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-ce')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CE)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-me')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (ME)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-lateral-entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CSE/ME/CE) Lateral Entry</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-mechatronics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. - Mechatronics</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-tech-artifical-intelligence-ai')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. - Artifical Intelligence(AI)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BTechWorking-Professional-CE-CSE')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech for Working Professional (CE & CSE)</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingTen">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            Royal School of Environmental & Earth Sciences (RSEES)
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">ENVIRONMENTAL & EARTH SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-geography')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geography</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Geography')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Geography</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-in-Geoinformatics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. in Geoinformatics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Geology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BSc-Geography')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA Geography</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-geology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Geology
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Geography</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Geology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Geography</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Geology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingEleven">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            Royal School of Fashion Design & Technology (RSFT)
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">FASHION DESIGN & TECHNOLOGY</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Fashion Design</p>
                                            <p class="text-center text-white para1">2 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Fashion Design
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            Royal School of Fine Arts (RSFA)
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">FINE ARTS</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Master-of-Fine-Arts-MFA')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Fine Arts (MFA)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-of-Fine-Arts-BFA')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Fine Arts (BFA)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Fine Arts
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Fine Arts</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThirteen">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                            Royal School of Hotel Management (RSHM)
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">HOTEL MANAGEMENT</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-HotelManagement')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA - Hotel Management</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-in-Culinary-Arts')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Culinary Arts</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Hotel-Management')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Hotel Management/MHM
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-of-Hotel-Management-BHM')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Hotel Management (BHM)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Hotel Management</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Culinary Arts
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Hotel Management</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Culinary Arts
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                            Royal School of Humanities & Social Sciences (RSHSS)
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">HUMANITIES & SOCIAL SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Economics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Economics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Sociology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Sociology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSW')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MSW
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-Public-Administration')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Public Administration</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-MA-Political-Science')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Pol. Science</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-MA-History')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - History</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BA-Economics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Economics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BA-Sociology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Sociology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BSW')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BSW</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BA-Public-Administration')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Public Administration</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BA-Political-Science')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Pol. Science
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BA-History')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - History
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Social Work</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Sociology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Economics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Public Administration</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in History</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Political Science</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Social Work</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Sociology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Economics</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Public Administration</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in History</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Political Science</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                            Royal School of Information Technology (RSIT)
                        </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">INFORMATION TECHNOLOGY</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MCA')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MCA</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-IT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. (IT)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BCA')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BCA
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BSc-IT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. IT</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Computer Application</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Information Technology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Computer Application</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Information Technology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                            Royal School of Languages (RSL)
                        </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">LANGUAGES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MA-English')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - English</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-BA-English')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - English</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in English
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in English</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseseventeen" aria-expanded="true" aria-controls="collapseseventeen">
                            Royal School of Library & Information Sciences (RSLIS)
                        </button>
                    </h2>
                    <div id="collapseseventeen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Master-of-Library&Information-Sciences')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Library & Information Sciences
                                                (M.L.I.Sc.)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseeighteen" aria-expanded="true" aria-controls="collapseeighteen">
                            Royal School of Law & Administration(RSLA)
                        </button>
                    </h2>
                    <div id="collapseeighteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">LAW & ADMINISTRATION</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-LLM-Morning-Shift')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">LLM Morning Shift</p>
                                            <p class="text-center text-white para1">1 Year</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-LLM-Day-Shift')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">LLM Day Shift</p>
                                            <p class="text-center text-white para1">1 Year</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('program-ba-bba-llb-hons')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA/BBA - LLB(Hons.)
                                            </p>
                                            <p class="text-center text-white para1">5 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('program-ba-llb-hons')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
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
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseninteen" aria-expanded="true" aria-controls="collapseninteen">
                            Royal School of Life Sciences (RSLSC)
                        </button>
                    </h2>
                    <div id="collapseninteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">LIFE SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Botany')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Botany</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Zoology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Zoology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Forestry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Forestry
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-ForensicScience')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Forensic Science</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-botany')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Botany</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-zoology')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Zoology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-forensicScience')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Forensic Science</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-forestry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Forestry</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Botany</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Zoology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Forensic Science</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Forestry</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Botany</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Zoology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Forensic Science
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Forestry
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwenty" aria-expanded="true" aria-controls="collapsetwenty">
                            Royal School of Medical & Allied Sciences (RSMAS)
                        </button>
                    </h2>
                    <div id="collapsetwenty" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">MEDICAL & ALLIED SCIENCES</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MasterofPhysiotherapyMPT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Physiotherapy (MPT)</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Medical-Laboratory-MMLT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Medical Laboratory Technology
                                                (MMLT)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-MSc-Nutrition')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Nutrition and Dietetics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-M-Optometry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Optometry</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-Bachelor-of-Physiotherapy-BPT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy (BPT)</p>
                                            <p class="text-center text-white para1">4.6 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BachelorofPhysiotherapy')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy (BPT) Lateral
                                                Entry</p>
                                            <p class="text-center text-white para1">3.6 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-bsc-Medical-technology-bmlt')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Medical Laboratory Technology
                                                (BMLT)</p>
                                            <p class="text-center text-white para1">3+1 Year Internship</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-medicaltechnologybmlt-lateral-entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Medical Laboratory Technology
                                                (BMLT) Lateral Entry
                                            </p>
                                            <p class="text-center text-white para1">2+1 Year Internship</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-dialysis')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Dialysis</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-Technology-OTT')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Operation Theatre Technology (OTT)
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-radiography')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Radiography and Advance Imaging
                                                Technology
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-sc-nutrition&dietetics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Nutrition and Dietetics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-bsc-in-emergency')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. in Emergency & Critical Care
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-optometry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B. Optometry</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-optometry-lateral-entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B. Optometry - Lateral Entry
                                            </p>
                                            <p class="text-center text-white para1">3 Years</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Physiotherapy
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Nutrition and Dietetics
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Optometry

                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Medical Laboratory Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Dialysis Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Operation Theatre Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Radiography & Advance Imaging
                                                Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Emergency & Critical Care
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwentyone" aria-expanded="true" aria-controls="collapsetwentyone">
                            Royal School of Nursing (RSN)
                        </button>
                    </h2>
                    <div id="collapsetwentyone" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">NURSING</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Medical Surgical Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in OBE Nursing</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Child Health Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Mental Health Nursing</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Community Health Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BSc-Nursing')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Nursing</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-General-Nursing-Midwifery')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">General Nursing & Midwifery (GNM)
                                            </p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-BSc-Post-Basic')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Nursing (Post Basic)</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwentytwo" aria-expanded="true" aria-controls="collapseTwentytwo">
                            Royal School of Pharmacy (RSP)
                        </button>
                    </h2>
                    <div id="collapseTwentytwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">PHARMACY</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-D-Pharm')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">D.Pharm.</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-M-Pharm-Pharmacognosy')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. in Pharmacognosy</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-M-Pharm-Pharmaceutics')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. In Pharmaceutics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-M-Pharm-Pharmaceutical')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. in Pharmaceutical Chemistry</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-pharm')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Pharm.</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="{{route('programs-b-pharm-lateral-entry')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Pharm. Lateral Entry</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button style="font-size: 18px; background-color: #00465d;"
                            class="accordion-button collapsed text-white para1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwentythree" aria-expanded="true" aria-controls="collapseTwentythree">
                            Royal School of Travel Tourism Management (RSTTM)
                        </button>
                    </h2>
                    <div id="collapseTwentythree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">TRAVEL & TOURISM MANAGEMENT</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Master-Travel&Tourism')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Travel & Tourism Management
                                                (MTTM)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-Bachelor-Travel')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Travel & Tourism Management
                                                (BTTM)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('programs-b-sc-ba-travel')}}"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA Travel & Tourism Management
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Travel & Tourism Management</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Travel & Tourism Management
                                            </p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>
        <!--End About-->
        <!--this is script 1-->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const searchInput = document.querySelector('input[type="search"]');

                function debounce(func, timeout = 300) {
                    let timer;
                    return (...args) => {
                        clearTimeout(timer);
                        timer = setTimeout(() => func.apply(this, args), timeout);
                    };
                }

                function handleSearch(e) {
                    const searchTerm = e.target.value.trim().toLowerCase();

                    // Reset when search is empty
                    if (!searchTerm) {
                        document.querySelectorAll('.accordion-item').forEach(school => {
                            school.classList.remove('d-none');
                            school.querySelectorAll('.col-lg-3').forEach(program => {
                                program.classList.remove('d-none');
                            });
                            const collapse = school.querySelector('.accordion-collapse');
                            bootstrap.Collapse.getInstance(collapse)?.hide();
                        });
                        return;
                    }

                    document.querySelectorAll('.accordion-item').forEach(school => {
                        let hasMatch = false;
                        const programElements = school.querySelectorAll('.col-lg-3');

                        programElements.forEach(program => {
                            const text = program.textContent.toLowerCase();
                            if (text.includes(searchTerm)) {
                                program.classList.remove('d-none');
                                hasMatch = true;
                            } else {
                                program.classList.add('d-none');
                            }
                        });

                        if (hasMatch) {
                            school.classList.remove('d-none');
                            new bootstrap.Collapse(school.querySelector('.accordion-collapse'), { toggle: false }).show();
                        } else {
                            school.classList.add('d-none');
                            new bootstrap.Collapse(school.querySelector('.accordion-collapse'), { toggle: false }).hide();
                        }
                    });
                }

                searchInput.addEventListener('input', debounce(handleSearch));
            });
        </script>
        <!--this is script 2-->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const schoolSelect = document.getElementById('schoolSelect');

                schoolSelect.addEventListener('change', function () {
                    const selectedText = this.options[this.selectedIndex].text.trim();
                    const accordionItems = document.querySelectorAll('.accordion-item');

                    // If "Select Course" is chosen, show all and collapse all
                    if (selectedText === 'Select Course') {
                        accordionItems.forEach(item => {
                            item.classList.remove('d-none');
                            const collapse = item.querySelector('.accordion-collapse');
                            collapse.classList.remove('show');
                        });
                        return;
                    }

                    // Hide all accordion items first
                    accordionItems.forEach(item => {
                        item.classList.add('d-none');
                        const collapse = item.querySelector('.accordion-collapse');
                        collapse.classList.remove('show');
                    });

                    // Find and show the selected school
                    const accordionButtons = document.querySelectorAll('.accordion-button');
                    accordionButtons.forEach(button => {
                        const buttonText = button.textContent.trim();

                        if (buttonText === selectedText) {
                            const accordionItem = button.closest('.accordion-item');
                            accordionItem.classList.remove('d-none');

                            const targetId = button.getAttribute('data-bs-target');
                            const targetCollapse = document.querySelector(targetId);

                            if (targetCollapse) {
                                targetCollapse.classList.add('show');
                                accordionItem.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            }
                        }
                    });
                });

                // Add click handler for accordion buttons (optional)
                document.querySelectorAll('.accordion-button').forEach(button => {
                    button.addEventListener('click', function () {
                        const targetId = this.getAttribute('data-bs-target');
                        const targetCollapse = document.querySelector(targetId);
                        targetCollapse.classList.toggle('show');
                    });
                });
            });
        </script>
    </div>



@endsection
