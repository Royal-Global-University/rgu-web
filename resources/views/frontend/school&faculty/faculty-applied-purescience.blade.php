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
                Royal School of Applied & Pure Sciences (RSAPS)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Prof.(Dr.)AnuradhaDevi.html">

                            <img src="assets/img/Faculty/Applied & Pure Sciences/Deans.012.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">
                                    Prof. (Dr.) Anuradha Devi
                                </h5>
                                <hr>
                            <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                Professor & Dean
                            </p>
                            <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                <div class="para1 fw-bold text-center text-dark">anuradha.devi@rgi.edu.in</div>
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
                <a href="Prof.(Dr.)DilipChandraNath.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dilip.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Dilip Chandra Nath
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Emeritus
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">dcnath@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)LaduSinghLaishram.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Laishuram.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Ladu Singh Laishram
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Emeritus
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">llsingh@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)AmarendraRajput.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/amarendra-singh.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Amarendra Rajput
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor & Advisor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">arajput@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)RitaChoudhury.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/ritachoudhuryrsaps.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body"  style="min-height: 112px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Prof. (Dr.) Rita Choudhury
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">rchoudhury1@rgu.ac</div>
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
                <a href="Dr.DevikaPhukan.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/DevikaPhukan.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Devika Phukan
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor and Dy. Dean, RSAPS
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">devika.phukan@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark"> DEPARTMENT OF PHYSICS</h2>
    <hr>
    <!-- Third Row of Cards -->
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)AmarendraRajput.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/amarendra-singh.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 220px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Amarendra Rajput
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor & Advisor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">arajput@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.DevikaPhukan.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/DevikaPhukan.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 220px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Devika Phukan
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor and Dy. Dean, RSAPS
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">devika.phukan@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.IsrafilHussain.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Israfil.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 220px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Israfil Hussain
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">israfil.hussain@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.SujataDeb.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/DrSujata.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 220px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Sujata Deb
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor, Associate Dean, Admission (Physics)
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">sujata.deb@rgi.edu.in</div>
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
                <a href="Dr.SanchitaRoy.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/sanchita-physics.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Sanchita Roy
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">sroy1@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BornaliChetia.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.BornaliChetiaPhoto.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Bornali Chetia
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor, Assistant Director, RCCR (Physics)
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">bchetia@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.MaidulIslam.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/photo11.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Maidul Islam
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">mislam@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.RajuKalita.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Raju.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Raju Kalita
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">rkalita1@rgu.ac</div>
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
                <a href="Dr.SumiKankanaDewan.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/SumiKankana.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Sumi Kankana Dewan
                        </h5>
                        <hr>
                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">sumi.dewan@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.SankarBarman.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/DrSankar.png" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Sankar Barman
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">sbarman@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.GitanjalDeka.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/GitanjalPhoto.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Gitanjal Deka
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor & Coordinator Physics
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">gdeka@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Ms.NilakshiDeka.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/NilakshiDeka.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Ms. Nilakshi Deka
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">nilakshi.deka@rgi.edu.in</div>
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
                <a href="Ms.VanitaAgrawal.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/blank_407X407_new.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Ms. Vanita Agrawal
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">vanita.agrawal@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- fifth Row of Cards -->
    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark"> DEPARTMENT OF CHEMISTRY</h2>
    <hr>

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)RamaRanjanBhattacharjee.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/deans-rama.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 242px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Rama Ranjan Bhattacharjee
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor & Dean, Research & Development
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">ramaranjanb89@gmail.com</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.PubaleeSarmah.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Pubalee.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Pubalee Sarmah
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor & HOD, Associate Dean, Admission, Deputy Dean, Student Affairs
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">pubalee.sarmah@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BiswajitSarma.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Biswajit.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 242px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Biswajit Sarma
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-5">
                        <div class="para1 fw-bold text-center text-dark">biswajit.sarma@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.AnupMalakar.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/DrAnupMalakar.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 242px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Anup Malakar
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor, Assistant Director, RCCR (Chemistry)
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-4">
                        <div class="para1 fw-bold text-center text-dark">anup.malakar@rgi.edu.in</div>
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
                <a href="Dr.BinoyarghaDam.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.BinoygrahDam.png" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 242px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Binoyargha Dam
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor, Assistant Dean, Academic Affairs, RSAPS
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-4">
                        <div class="para1 fw-bold text-center text-dark">bdam@rgu.ac</div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BiplobBorah.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/BiplobBora.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Biplob Borah
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor & Assistant Dean, Admission & Assistant Dean, Student Affairs
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">bborah1@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.DebojitSahu.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Debojit.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 242px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Debojit Sahu
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-5">
                        <div class="para1 fw-bold text-center text-dark">dsahu@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.MullahMuhaiminulIslam.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/MullahMuhaiminul.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 242px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Mullah Muhaiminul Islam
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-5">
                        <div class="para1 fw-bold text-center text-dark">mmislam@rgu.ac</div>
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
                <a href="Dr.RajkumarImochaSingh.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/RajkumarImocha.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Rajkumar Imocha Singh
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">risingh@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF MATHEMATICS</h2>
    <hr>

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)AnuradhaDevi.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Deans.012.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Prof. (Dr.) Anuradha Devi
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor & Dean
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">anuradha.devi@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)DilipChandraNath.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dilip.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Dilip Chandra Nath
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Emeritus
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">dcnath@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)LaduSinghLaishram.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Laishuram.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Prof. (Dr.) Ladu Singh Laishram
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Emeritus
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">llsingh@rgu.ac</div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Prof.(Dr.)RitaChoudhury.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/ritachoudhuryrsaps.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Prof. (Dr.) Rita Choudhury
                        </h5>
                        <hr>

                        <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">rchoudhury1@rgu.ac</div>
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
                <a href="Dr.KamalDebnath.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.KamalDebnath.png" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Kamal Debnath
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor Mathematics,Associate Dean, Admission (Mathematics)
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">kamal.debnath@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BimalenduKalita.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/BimalenduKalita-rsaps.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Bimalendu Kalita
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor & HoD, Mathematics
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-4">
                        <div class="para1 fw-bold text-center text-dark">bimalendu.kalita@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.AnujaSinha.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.AnjuSinha.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Anuja Sinha
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-5">
                        <div class="para1 fw-bold text-center text-dark">asinha@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BikramBir.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Mr.BikramPhoto.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Bikram Bir
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-5">
                        <div class="para1 fw-bold text-center text-dark"><i class="fa-solid fa-envelope"></i></div>
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
                <a href="Dr.ChayanikaBoruah.html">

                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.ChayanikaBoruahPhoto.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                        <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Chayanika Boruah
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-4">
                        <div class="para1 fw-bold text-center text-dark">cboruah1@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.DhimanDutta.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.DhimanDutta.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Dhiman Dutta
                        </h5>
                        <hr>
                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Professor Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;" class="mt-4">
                        <div class="para1 fw-bold text-center text-dark">ddutta@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.BapanKalita.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.BapanKalita.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 200px;">
                            <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 20px;">
                            Dr. Bapan Kalita
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor, Associate Director, RCCR (Mathematics)
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">bapan.kalita@rgi.edu.in</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Dr.MarbarishaMKharkongor.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.MarbarishaPhoto.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                        <div class="card-body" style="min-height: 222px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Marbarisha M Kharkongor
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Assistant Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">mmkharkongor@rgu.ac</div>
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
                <a href="Dr.ParismitaPhukan.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/Dr.ParishmitaPhukanPhoto.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Dr. Parismita Phukan
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">pphukan@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Mr.H.ImoManiSingha.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/imo-mani-rsaps.jpeg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Mr. H. Imo Mani Singha
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">hmsingha@rgu.ac</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"
                style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                <a href="Mr.NeelavSarma.html">
                    <img src="assets/img/Faculty/Applied & Pure Sciences/neelav-sarma.jpg" class="card-img-top p-2"
                        style="border-radius: 10px;" alt="Card Image">
                    <div class="card-body" style="min-height: 200px;">
                        <h5 class="card-title headd3 fw-bold text-dark">
                            Mr. Neelav Sarma
                        </h5>
                        <hr>

                    <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                        Associate Professor
                    </p>
                    <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                        <div class="para1 fw-bold text-center text-dark">nsarma@rgu.ac</div>
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
