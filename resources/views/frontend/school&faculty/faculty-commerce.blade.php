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
        <div class="prthalign pt-4">
            <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text text-center">
                Royal School of Commerce (RSC)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Prof.(Dr.)GeorgeAP.html">
                            <img src="assets/img/Faculty/Commerce/rsb-dean-new.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="padding-bottom: 38px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. George A.P.
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Dean
                                    RSB
                                    & RSC
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> georgep@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Prof.(Dr.)DineshKumarPandiya.html">
                            <img src="assets/img/Faculty/Commerce/blank_407X407_new.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="padding-bottom: 38px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Dinesh Kumar Pandiya
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> dkpandiya@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.SudipChakraborty.html">
                            <img src="assets/img/Faculty/Commerce/Dr.SudipChakraborty.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="padding-bottom: 38px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Sudip
                                    Chakraborty
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate
                                    Professor & Deputy Dean i/c
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> sudip.chakraborty@rgi.edu.i</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.ArunaDevRroy.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-1.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Aruna Dev Rroy
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate
                                    Professor & Associate Dean, Admission
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> aruna.roy@rgi.edu.in</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Second Row of Cards -->
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.NivaKalita.html">
                            <img src="assets/img/Faculty/Commerce/niva-kalita.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Niva Kalita
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark"> nkalita@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.PinakDeb.html">
                            <img src="assets/img/Faculty/Commerce/PinakDeb.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Pinak Deb
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor and Assistant Dean, Academic Affairs
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> pdeb@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.RajdeepNag.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-2.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Rajdeep Nag
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark"> rajdeep.nag@rgi.edu.in</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.AnanyaBanik.html">
                            <img src="assets/img/Faculty/Commerce/AnanyaBanik.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Ananya Banik
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Teaching Assistant
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark"> abanik@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Third Row of Cards -->
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.BaishaliPathak.html">
                            <img src="assets/img/Faculty/Commerce/BaishaliPathak.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Baishali Pathak
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark"> bpathak1@rgu.ac</div>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.JimpySaud.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-7.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">
                                    Ms. Jimpy Saud
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Teaching
                                    Assistant
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark"> jsaud@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.RichikaKedia.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-8.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Richika Kedia
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">rkedia@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.RikhRoy.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-4.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Rikh Roy
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor and Assistant Director, RCCR
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> rikh.roy@rgi.edu.in</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- forth Row of Cards -->
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.RitishnaSarma.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-9.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 90px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ms. Ritishna Sarma
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> rsarma@rgu.ac</div>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.RituparnaBaruah.html">
                            <img src="assets/img/Faculty/Commerce/RituparnaBaruah.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 90px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ms. Rituparna
                                    Baruah
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> rbaruah@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.RoshniAgarwal.html">
                            <img src="assets/img/Faculty/Commerce/roshni-agrawal-rsc.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 90px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ms. Roshni Agarwal
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> ragarwal@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.SrawanKumarGoenka.html">
                            <img src="assets/img/Faculty/Commerce/rsc-faculty-5.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Srawan Kumar Goenka
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor & Coordinator
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> srawan.goenka@rgi.edu.in</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- fifth Row of Cards -->
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.SushnataGoswami.html">
                            <img src="assets/img/Faculty/Commerce/SushnataGoswami.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 style="font-size: 20px;" class="card-title headd3 fw-bold text-dark">Ms. Sushnata Goswami
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark"> sgoswami1@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
