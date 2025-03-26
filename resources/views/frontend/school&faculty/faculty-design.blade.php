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
                Royal School of Design (RSD)</h1>
        </div>

<div class="container my-4">
            <!-- First Row of Cards -->
    <div class="row">
                <div class="col-md-3">
                    <a href="HariPrasadAgarwal.html">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

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
                    </div>
                </a>
                </div>
            <div class="col-md-3">
                <a href="Ar.Siddhartha_Deb.html">
                <div class="card"
                    style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <img src="assets/img/Faculty/allhere/RSA.013.jpeg" class="card-img-top p-2"
                            style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 180px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ar. Siddhartha Deb
                            </h5>
                            <hr>
                            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                Professor
                            </p>
                            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 80px;">
                        <div class="para1 fw-bold text-center text-dark">siddhartha.deb@rgi.edu.in
                        </div>
                    </div>
                </div>
                </div>
            </a>
            </div>

        <div class="col-md-3">
            <a href="Ar. Kasturi Borah.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                    <img src="assets/img/Faculty/allhere/RSA.005.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 180px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ar. Kasturi Borah</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Associate Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 80px;">
                    <div class="para1 fw-bold text-center text-dark">kborah@rgu.ac
                    </div>
                </div>
                </div>
            </div>
            </a>
        </div>
    <div class="col-md-3">
        <a href="Ar.Bhola_Saha.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/RSA.003.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                    <div class="card-body" style="min-height: 160px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ar. Bhola Saha</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor and Coordinator and Assistant Dean, Admission
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 60px;">
                <div class="para1 fw-bold text-center text-dark">bsaha@rgu.ac
                </div>
            </div>
        </div>
        </div>
    </a>
    </div>

    </div>

    <!-- Second Row of Cards -->
    <div class="row mt-5">

        <div class="col-md-3">
            <a href="Ar.AmritaSabhapandit.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                    <img src="assets/img/Faculty/allhere/RSA.001.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">Ar. Amrita Sabhapandit</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                    <div class="para1 fw-bold text-center text-dark">asabhapandit@rgu.ac
                    </div>
                </div>
            </div>
        </div>
        </a>
        </div>
    <div class="col-md-3">
        <a href="Ar.BarshaKunda.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/RSA.002.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Barsha Kunda</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">bkunda@rgu.ac
                </div>
            </div>
        </div>
    </div>
    </a>
    </div>
    <div class="col-md-3">
        <a href="Ar.DikshaDutta.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/RSA.017.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Diksha Dutta</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">ddutta1@rgu.ac
                </div>
            </div>
        </div>
    </div>
    </a>
    </div>
    <div class="col-md-3">
        <a href="Ar.JagritiPathak.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <img src="assets/img/Faculty/allhere/ArJagrit.jpeg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Jagriti Pathak</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">jpathak1@rgu.ac</div>
            </div>
        </div>
    </div>
    </a>
    </div>
    </div>

    <!-- Third Row of Cards -->
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Ar.JugalKishoreDebnath.html">
                    <img src="assets/img/Faculty/allhere/RSA.004.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">Ar. Jugal Kishore Devanath</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                    <div class="para1 fw-bold text-center text-dark">jkdebnath@rgu.ac</div>
                </div>
            </div>
            </a>
        </div>
        </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.MohuaMoitriMazumdar.html">
                <img src="assets/img/Faculty/allhere/RSA.014.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Mohua Moitri Mazumdar</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">mmmazumdar@rgu.ac</div>
            </div>
        </div>
        </a>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.PoojaSingh.html">
                <img src="assets/img/Faculty/allhere/RSA.006.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                    <div class="card-body" >
                    <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ar. Pooja Singh</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">psingh@rgu.ac</div>
            </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.PratyashaDas.html">
                <img src="assets/img/Faculty/allhere/RSA.008.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ar. Pratyasha Das</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">pdas@rgu.ac</div>
            </div>
        </div>
        </a>
    </div>
    </div>
    </div>

    <!-- forth Row of Cards -->
    <div class="row mb-4 mt-5">
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Ar.RishangiBharadwaj.html">

                    <img src="assets/img/Faculty/allhere/RSA.012.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 92px;">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Ar. Rishangi
                            Bharadwaj</h5>
                            <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 20px;">
                    <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.RituRani.html">
                <img src="assets/img/Faculty/allhere/ArRani.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Ritu Rani</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">rrani@rgu.ac</div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.SanchariKar.html">
                <img src="assets/img/Faculty/allhere/RSA.009.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Sanchari Kar</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">skar@rgu.ac</div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
            <a href="Ar.SumaiyahBegum.html">
                <img src="assets/img/Faculty/allhere/Sumaiyah.jpg" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ar. Sumaiyah Begum</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">sbegum1@rgu.ac</div>
                </div>
            </div>
            </a>
        </div>
    </div>
    </div>

    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF FASHION DESIGN
    </h2>
    <hr>

    <div class="row mt-5">
        <div class="col-md-3">
            <a href="Ms.AkritiMazumdar.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">


                    <img src="assets/img/Faculty/allhere/RSFT.002.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 122px;">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Ms. Akriti Mazumdar</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 52px;">
                    <div class="para1 fw-bold text-center text-dark">amazumdar@rgu.ac</div>
                </div>
                </div>
            </div>
            </a>
        </div>
    <div class="col-md-3">
        <a href="Ms.KuwaliChowdhury.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <img src="assets/img/Faculty/allhere/RSFT.004.jpeg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Ms. Kuwali Chowdhury</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor & Coordinator
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">kuwalichowdhury108@gmail.com</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="Ms.PubikaMichong.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/RSFT.005.jpeg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 122px;">
                    <h5 class="card-title headd3 fw-bold text-dark">Ms. Pubika Michong</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 50px;">
                <div class="para1 fw-bold text-center text-dark">apixsaw124@gmail.com</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="Mr.AsifMazid.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/RSFT.001.jpeg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 122px;">
                    <h5 class="card-title headd3 fw-bold text-dark">Mr. Asif Mazid</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 52px;">
                <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    </div>

    <div class="row mb-4 mt-5">
        <div class="col-md-3">
            <a href="Ms.GazalaAnjumGoney.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                    <img src="assets/img/Faculty/allhere/RSFT.003.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Ms. Gazala Anjum Goney</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                    <div class="para1 fw-bold text-center text-dark">gazala_202@yahoo.co.in</div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    <div class="col-md-3">
        <a href="#">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                <img src="assets/img/Faculty/allhere/blank_407x407.jpg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark">Mr. Jitumani Das</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                </div>
            </div>
        </div>
        </a>
    </div>

    </div>

    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF COMMUNICATION DESIGN, GRAPHIC DESIGN & PRODUCT
        DESIGN
    </h2>
    <hr>

    <div class="row mt-5">
    <div class="col-md-3">
            <a href="HariPrasadAgarwal.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                    <img src="assets/img/Faculty/allhere/RSA.015.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 138px;">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Hari Prasad
                            Agarwal</h5>
                            <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Dean and Principal
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 42px;">
                    <div class="para1 fw-bold text-center text-dark">hpagarwal@rgu.ac</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="Dr.SusmitaBanerjee_design.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <img src="assets/img/Faculty/allhere/Susmita.png" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Sushmita Nath</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor, Coordinator & Assistant Director, RCCR </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="Mr.ZubinIslam.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <img src="assets/img/Faculty/allhere/Zubin.png" class="card-img-top p-2" style="border-radius: 10px;"
                    alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Mr. Zubin Islam</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor & Assistant Dean, Admission
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="Mr.SanjayKrishnaKutum.html">
        <div class="card"
            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <img src="assets/img/Faculty/allhere/Mr.SanjayKrishna.jpeg" class="card-img-top p-2"
                    style="border-radius: 10px;" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Mr. Sanjay Krishna</h5>
                    <hr>
            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                Assistant Professor & Departmental Representative, Academic Affairs
            </p>
            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                <div class="para1 fw-bold text-center text-dark">skkutum@rgu.ac</div>
            </div>
            </div>
        </div>
    </a>
    </div>
    </div>

    <div class="row mb-4 mt-5">
        <div class="col-md-3">
            <a href="Ms.VarshaJain.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                    <img src="assets/img/Faculty/allhere/Varsha.png" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Ms. Varsha Jain</h5>
                        <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Assistant Professor
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                    <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">ADJUNCT FACULTY
    </h2>
    <hr>

    <div class="row mt-5">
        <div class="col-md-3">
        <a href="Mr.SattyakeeD'comBhuyan.html">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                    <img src="assets/img/Faculty/allhere/sattyake-rsd.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Mr. Sattyakee D'com
                            Bhuyan</h5>
                            <hr>
                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                    Adjunct Faculty
                </p>
                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                    <div class="para1 fw-bold text-center text-dark">sattyakee.dcom.bhuyan@gmail.com</div>
                </div>
        </div>
            </div>
        </a>
    </div>
    </div>
    </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
