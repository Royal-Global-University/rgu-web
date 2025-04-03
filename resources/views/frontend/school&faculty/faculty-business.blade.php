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

                <!-- MAIN SECTION  -->
                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
            style="color: #27467A; font-weight: 900;">
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Business (RSB)</span></h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/rsb-dean-new.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) George AP</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dean RSB & RSC, <br>
                                    The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/dr-dip-rgu.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Dip Narayain Singh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Registrar
                                    <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/rsb-faculty-1.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Arpee Saikia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD and Coordinator, Behavioural Sciences,<br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/RishiChakravarty.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Rishi Chakravarty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/DarshanaBhagowati.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Darshana Bhagowatii</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                    Professor And Assistant Dean, Academic Affairs, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/santosh-rsb.jpeg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                    Dr. Santosh Kr. Anand</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Deputy Controller of Examination, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/SumanAgarwalPhoto.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                    Dr. Suman Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/rsb-faculty-8.png" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Dipak Jain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/rsb-faculty-10.png" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Kalyani Gohain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/rsb-faculty-11.png" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Neha Tiwari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor cum Academic Coordinator <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/PratimChoudhury.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                    Mr. Nibir Pratim Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/RahulTiwary.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Rahul Tiwary</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/TanishaMukherjee.png" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Tanisha Mukherjee</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/DrManimoy-Paul1.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Manimoy Paul</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Honorary Adjunct Professor <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Business/Mr-Pankaj-Banka.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Pankaj Banka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Honorary Adjunct Professor <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- MAIN SECTION  -->


    </div><!-- #page -->
@endsection
