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
                Royal School of Behavioral & Allied Sciences (RSBAS)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.PrinceC.P.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/PrinceCP.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Prince C.P.
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 37px;">
                                    <div class="para1 fw-bold text-center text-dark">pcpranchu@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.QueenDeka.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.006.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Queen Deka
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor, Coordinator & Assistant Director, RCCR
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">qdeka@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.FarizaSaidin.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.008.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Fariza Saidin
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Assistant Dean, Academic Affairs
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">fsaidin@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.JwmwishreeBoro.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.007.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Jwmwishree Boro
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">jboro@rgu.ac
                                    </div>
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
                        <a href="Dr.MahuyaDeb.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.003.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                                    Dr. Mahuya Deb
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Assistant Dean (Admission)
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">mdeb@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.ShraddhaBasu.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/ShraddhaBasu.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 220px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                                    Dr. Shraddha Basu
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 40px;">
                                    <div class="para1 fw-bold text-center text-dark">sbasu@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.SyedaAnjumAfreen.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.005.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 220px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                                    Dr. Syeda Anjum Afreen
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 40px;">
                                    <div class="para1 fw-bold text-center text-dark">saafreen@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.TaheraHoqueMazumdar.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.004.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 220px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Tahera Hoque Mazumdar
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">thmazumdar@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.JahnabiMahanta.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.001.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Jahnabi Mahanta
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">jmahanta@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.MahimaSinghi.html">
                            <img src="assets/img/Faculty/Behavioral & Allied Sciences/MahimaSinghi.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Mahima Singhi
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">msinghi@rgu.ac</div>
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
