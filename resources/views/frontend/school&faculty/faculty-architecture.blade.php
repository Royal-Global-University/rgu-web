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
                Royal School of Architecture (RSA)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="HariPrasadAgarwal.html">
                            <img src="assets/img/Faculty/allhere/RSA.015.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">
                                    Prof. (Dr.) Hari Prasad Agarwal
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor & Principal, Royal School of Architecture and Dean, Royal School of
                                    Design/Royal School of Fashion Design & Technology/Royal School of Fine Arts
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">hpagarwal@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar.Siddhartha_Deb.html">
                            <img src="assets/img/Faculty/allhere/RSA.013.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 270px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">
                                    Ar. Siddhartha Deb
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 80px;">
                                    <div class="para1 fw-bold text-center text-dark">siddhartha.deb@rgi.edu.in</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar. Kasturi Borah.html">

                            <img src="assets/img/Faculty/allhere/RSA.005.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 270px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">
                                    Ar. Kasturi Borah
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 80px;">
                                    <div class="para1 fw-bold text-center text-dark">kborah@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar.Bhola_Saha.html">
                            <img src="assets/img/Faculty/allhere/RSA.003.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 270px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">
                                    Ar. Bhola Saha
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor and Coordinator and Assistant Dean, Admission
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 60px;">
                                    <div class="para1 fw-bold text-center text-dark">bsaha@rgu.ac</div>
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
                        <a href="Ar.AmritaSabhapandit.html">
                            <img src="assets/img/Faculty/allhere/RSA.001.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">
                                    Ar. Amrita Sabhapandit
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">asabhapandit@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar.BarshaKunda.html">
                            <img src="assets/img/Faculty/allhere/RSA.002.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ar. Barsha Kunda
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">bkunda@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar.DikshaDutta.html">

                            <img src="assets/img/Faculty/allhere/RSA.017.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ar. Diksha Dutta
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">ddutta1@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ar.JagritiPathak.html">
                            <img src="assets/img/Faculty/allhere/Ar. Jagriti Pathak.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">
                                    Ar. Jagriti Pathak
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">jpathak1@rgu.ac</div>
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
