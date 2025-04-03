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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Commerce (RSC)</span></h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Commerce/rsb-dean-new.jpeg" class="img-fluid rounded" />
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
                                    src="assets/img/Faculty/Commerce/blank_407X407_new.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Dinesh Kumar Pandiya</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor,<br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Commerce/Dr.SudipChakraborty.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sudip Chakraborty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate
                                    Professor & Deputy Dean i/c
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-1.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Aruna Dev Rroy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD, RSC, Associate Dean, Admission <br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Commerce/niva-kalita.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Niva Kalita</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor,<br> The
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-2.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Rajdeep Nag</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
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
                                    src="assets/img/Faculty/Commerce/AnanyaBanik.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Ananya Banik</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
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
                                    src="assets/img/Faculty/Commerce/BaishaliPathak.jpeg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Baishali Pathak</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-7.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Jimpy Saud</h5>
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-8.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Richika Kedia</h5>
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-4.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Rikh Roy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                    Professor and Assistant Director, RCCR, <br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-9.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Ritishna Sarma</h5>
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
                                    src="assets/img/Faculty/Commerce/RituparnaBaruah.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                    Ms. Rituparna Baruah</h5>
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
                                    src="assets/img/Faculty/Commerce/roshni-agrawal-rsc.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Roshni Agarwal</h5>
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
                                    src="assets/img/Faculty/Commerce/rsc-faculty-5.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Srawan Kumar Goenka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- MAIN SECTION  -->

    </div><!-- #page -->
@endsection
