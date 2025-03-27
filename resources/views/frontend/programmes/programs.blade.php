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
        <div>
            <img src="sarang/admission/programmes.png" alt="">
        </div>

        <section style="background-color: #f2f2f2;" class="pt-5">

            <div class="container">
                <div class="row pt-3">
                    <div class="col-lg-6 d-flex">
                        <h4 class="headd3 fw-bold text-dark">Search By Schools :</h4>
                    </div>
                    <div class="col-lg-6 d-flex" style="padding-left: 25px;">
                        <h4 class="headd3 fw-bold text-dark">Search By Courses :</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-lg-6 d-flex">
                        <form class="d-flex w-100">
                            <select class="form-control me-2 shadow" aria-label="Search">
                                <option value="nothing">Select Course</option>
                                <option value="volvo">Royal School of Applied & Pure Sciences (RSAPS)</option>
                                <option value="saab">Royal School of Architecture (RSA)</option>
                                <option value="opel">Royal School of Behavioral & Allied Sciences (RSBAS)</option>
                                <option value="audi">Royal School of Bio-sciences (RSBSC)</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <form class="d-flex w-100" style="margin-left: 15px;"> <!-- Change to w-100 for full width -->
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
                                    <a href="programs-M.Sc-Physics"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Physics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Chemistry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Chemistry</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Mathematics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Mathematics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Sc-Physics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Physics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc-Chemistry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Chemistry</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc-Mathematics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Mathematics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Physics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Chemistry</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Mathematics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Physics</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Chemistry</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseTwo">
                            Royal School of Architecture (RSA)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">ARCHITECTURE</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="programs-B.Arch.html"
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
                                    <a href="programs-MA-Psychology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Psychology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MA-Clinical Psychology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Clinical Psychology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-BA-Psychology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA Psychology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.BA-Applied Psychology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA Applied Psychology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Psychology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Applied Psychology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Psychology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
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
                                    <a href="programs.M.Sc.Bio-Technology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Bio-technology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.M.Sc.Microbiology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Microbiology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.M.Sc.-Food-Technology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Food Technology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Sc.-Bio-Technology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Bio-technology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.-Microbiology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Microbiology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.-Food-Technology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Food Technology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Biotechnology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Microbiology</p>
                                            <p class="text-center text-white para1">2 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Food Technology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Biotechnology</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Microbiology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
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
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA Finance</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA Marketing</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - HRM</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                            <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Operations Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Entrepreneurship & Small Business
                                                Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-MBA-Finance.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MBA - Business Analytics</p>
                                            <p class="text-center text-white para1">2 Years</p> <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Business Administration</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Business Administration
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BBA.html"
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
                                    <a href="programs-M.Com.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Com.</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Com.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Com(Morning shift).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com (Morning shift)</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Com-Finance-with-ICA.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com - Finance with ICA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Com-Finance-with-ICA.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com with ACCA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p> <br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Com-Finance-with-ICA.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Com with CMA</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Commerce (Morning Shift)</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Commerce (Day Shift)</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Commerce (Morning Shift)
                                            </p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-MA-J&MC.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA J&MC</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Animation-&-Visual-Effects.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Animation and Visual Effects</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-BA-J&MC.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA J&MC</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Sc-Animation-Visual-Effects.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Animation and Visual Effects</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in J& Mc</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Animation and Visual Effects
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in J& Mc</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-BachelorInterior-Design(BID).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design (BID)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Interior Design (BID)
                                                Lateral
                                                Entry</p>
                                            <p class="text-center text-white para1">3 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-of-Design-(Communication-Design).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Communication
                                                Design)
                                                (B.Des. CD)
                                            </p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-of-Design-(Graphic-Design).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Graphic Design)
                                                (B.Des. GD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-Bachelor-of-Design-(Product-Design).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Product Design)
                                                (B.Des. PD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Des-FD(Fashion-Design).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-Bachelor-of-Design-(Fashion-Design)Lateral-Entry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD) Lateral Entry</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Interior Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Communication Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Graphic Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Product Design</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Interior Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEPP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Communication Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Graphic Design</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-M.Tech.CSE-in-Artifical-Intelligence.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - Artifical Intelligence</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Tech.CSE-in-Internet-of-Things.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CSE - IOT</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Tech. - CAD.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. - CAD
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Tech.CE-in-Water-Resources.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Water Resources
                                                Development
                                                & Management</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-M.Tech.CE in-Structural-Engineering.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Tech. CE in Structural Engineering</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.(CSE).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CSE)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.(CE).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CE)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.(ME).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (ME)</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.(Lateral Entry).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. (CSE/ME/CE) Lateral Entry</p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech-Mechatronics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. - Mechatronics</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.-Artifical-Intelligence-AI.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech. - Artifical Intelligence(AI)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Tech.-Artifical-Intelligence-AI.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Tech for Working Professional (CE &
                                                CSE)</p>
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
                                    <a href="programs-M.Sc.Geography.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geography</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MA-Geography.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA Geography</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-in-Geoinformatics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. in Geoinformatics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.Geology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Geology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.Geography.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA Geography</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.Geology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Geology
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Geography</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Geology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Geography</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-B.Des-FD(Fashion-Design).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Design (Fashion Design)
                                                (B.Des. FD)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Fashion Design</p>
                                            <p class="text-center text-white para1">2 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
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
                                    <a href="programs.Master-of-Fine-Arts(MFA).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Fine Arts (MFA)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-of-Fine-Arts(BFA).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Fine Arts (BFA)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Fine Arts
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
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
                                    <a href="programs-BA-HotelManagement.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA - Hotel Management</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.BA-in-Culinary-Arts.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Culinary Arts</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.Hotel-Management.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Hotel Management/MHM
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-of-Hotel-Management-(BHM).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Hotel Management (BHM)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Hotel Management</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Culinary Arts
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Hotel Management</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href=""
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
                                    <a href="programs-MA-Economics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Economics</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MA-Sociology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Sociology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MSW.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MSW
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-MA-Public-Administration.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Public Administration</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-MA-Political-Science.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - Pol. Science</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-MA-History.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - History</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BA-Economics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Economics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BA-Sociology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Sociology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BSW.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BSW</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BA-Public-Administration.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Public Administration</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BA-Political-Science.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - Pol. Science
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BA-History.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - History
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Social Work</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Sociology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Economics</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Public Administration</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in History</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Political Science</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Social Work</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Sociology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Economics</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Public Administration</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in History</p>
                                            <p class="text-center text-white para1">1 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-MCA.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MCA</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc. (IT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. (IT)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-BCA.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BCA
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.B.Sc.(IT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. IT</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Computer Application</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Information Technology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Computer Application</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Information Technology
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
                                    <a href="programs-MA - English.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">MA - English</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs.BA - English.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA - English</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in English
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
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
                                    <a href="programs.Master of Library & Information Sciences.html"
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
                                    <a href="programs-LLM Morning Shift.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">LLM Morning Shift</p>
                                            <p class="text-center text-white para1">1 Year</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-LLM Day Shift.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">LLM Day Shift</p>
                                            <p class="text-center text-white para1">1 Year</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programBA-BBA-LLB(Hons).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">BA/BBA - LLB(Hons.)
                                            </p>
                                            <p class="text-center text-white para1">5 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programLLB.html"
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
                                    <a href="programs-M.Sc.Botany.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Botany</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.Zoology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Zoology</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.-Forestry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Forestry
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.ForensicScience.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Forensic Science</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.Botany.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Botany</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.Zoology.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Zoology</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.ForensicScience.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Forensic Science</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc.-Forestry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Forestry</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Botany</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Zoology</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Forensic Science</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Forestry</p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Botany</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Zoology</p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Forensic Science
                                            </p>
                                            <p class="text-center text-white para1">1 Yr as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="programs-MasterofPhysiotherapy(MPT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Physiotherapy (MPT)</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.-MedicalLaboratory(MMLT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Medical Laboratory Technology
                                                (MMLT)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc.-Nutrition.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. - Nutrition and Dietetics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Optometry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Optometry</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-BachelorofPhysiotherapy.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy (BPT)</p>
                                            <p class="text-center text-white para1">4.6 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-Bachelor_of_Physiotherapy_(BPT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Physiotherapy (BPT) Lateral
                                                Entry</p>
                                            <p class="text-center text-white para1">3.6 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.ScMedical_Technology_BMLT.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Medical Laboratory Technology
                                                (BMLT)</p>
                                            <p class="text-center text-white para1">3+1 Year Internship</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc-MedicalTechnology(BMLT).html"
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
                                    <a href="programs-B.Sc-Dialysis.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Dialysis</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-Technology(OTT).html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Operation Theatre Technology
                                                (OTT)
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc-Radiography.html"
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
                                    <a href="programs-B.Sc.-Nutrition.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. - Nutrition and Dietetics</p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Sc_in_Emergency.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. in Emergency & Critical Care
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Optometry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B. Optometry</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Optometry-Lateral-Entry.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B. Optometry - Lateral Entry
                                            </p>
                                            <p class="text-center text-white para1">3 Years</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Physiotherapy
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Nutrition and Dietetics
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Optometry

                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Medical Laboratory Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Dialysis Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p><br>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Operation Theatre Technology
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 pt-3">
                                    <a href="#"
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
                                    <a href="#"
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
                                    <a href="programs-M.Sc-Nursing-Surgical-Nursing.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Medical Surgical
                                                Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Nursing-OBE-Nursing.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in OBE Nursing</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Nursing_Child.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Child Health Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Sc-Nursing-Mental.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Mental Health Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="program-M.Sc.Nursing_Comm_Mental.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Sc. Nursing in Community Health
                                                Nursing
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programsB.Sc-Nursing.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc. Nursing</p>
                                            <p class="text-center text-white para1">4 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-General_Nursing_Midwifery.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">General Nursing & Midwifery (GNM)
                                            </p>
                                            <p class="text-center text-white para1">3 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programsB.Sc-Post-Basic.html"
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
                                    <a href="programs-D.Pharm.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">D.Pharm.</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Pharm-Pharmacognosy.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. in Pharmacognosy</p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Pharm.Pharmaceutics.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. In Pharmaceutics
                                            </p>
                                            <p class="text-center text-white para1">2 Years</p><br>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-M.Pharm.Pharmaceutical.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">M.Pharm. in Pharmaceutical Chemistry</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Pharm.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Pharm.</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="programs-B.Pharm.Lateral_Entry.html"
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
                            Royal School of Travel & Tourism Management (RSTTM)
                        </button>
                    </h2>
                    <div id="collapseTwentythree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #fff;">
                            <p class="m-0 pb-4 text-dark fw-bold para1">TRAVEL & TOURISM MANAGEMENT</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="programs-Master-Travel&Tourism.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Master of Travel & Tourism Management
                                                (MTTM)</p>
                                            <p class="text-center text-white para1">2 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-Bachelor-Travel.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Bachelor of Travel & Tourism Management
                                                (BTTM)</p>
                                            <p class="text-center text-white para1">4 Years</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="programs-B.Sc.BA-Travel.html"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">B.Sc./BA Travel & Tourism Management
                                            </p>
                                            <p class="text-center text-white para1">3/4 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Diploma in Travel & Tourism Management
                                            </p>
                                            <p class="text-center text-white para1">2 Yrs as per NEP</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 pt-3">
                                    <a href="#"
                                        class="text-center text-dark fw-bold d-flex align-items-center justify-content-center">
                                        <div class="border p-2 rounded flex-grow-1" style="background-color: #006A67;">
                                            <p class="m-0 p-0 text-white fw-bold para1">Certificate in Travel & Tourism
                                                Management
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
    </div><!-- #page -->
@endsection
