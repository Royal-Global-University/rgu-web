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
                Royal School of Fine Arts (RSFA)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="HariPrasadAgarwal.html">
                            <img src="assets/img/Faculty/Fine Arts/RSA.015.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Hari Prasad Agarwal
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor & Dean, Royal School of Architecture
                                    (RSA), Royal School of Design (RSD), Royal School of Fashion Design & Technology
                                    (RSFT) and Royal School of Fine Arts (RSFA)
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
                        <a href="Dr.Sumanta_Dutta_Chowdhury.html">
                            <img src="assets/img/Faculty/Fine Arts/fine-art.002.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 180px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Sumanta Dutta Chowdhury
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Coordinator and Assistant Dean, Admission
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 78px;">
                                    <div class="para1 fw-bold text-center text-dark">sdchowdhury@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.Mousumi_Deka.html">
                            <img src="assets/img/Faculty/Fine Arts/fine-art.001.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 180px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Mousumi Deka
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Assistant Dean, Academic Affairs
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 78px;">
                                    <div class="para1 fw-bold text-center text-dark">mdeka@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.Siddhant_Medhi.html">
                            <img src="assets/img/Faculty/Fine Arts/Dr.SiddhantMedhi.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 202px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Siddhant Medhi
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 98px;">
                                    <div class="para1 fw-bold text-center text-dark">smedhi@rgu.ac</div>

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
                        <a href="Mr.Kishan_Bagdi.html">
                            <img src="assets/img/Faculty/Fine Arts/fine-art.004.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Kishan Bagdi
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor and Assistant Director, RCCR & Assistant Dean, Student Affairs
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">kbagdi@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.Sehnaz_Saikia.html">
                            <img src="assets/img/Faculty/Fine Arts/SehnazSaikia.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 134px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Sehnaz Saikia
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 55px;">
                                    <div class="para1 fw-bold text-center text-dark">ssaikia1@rgu.ac</div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.Suman_Saha.html">
                            <img src="assets/img/Faculty/Fine Arts/SumanSaha.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 134px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Suman Saha
                                </h5>
                                <hr>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 55px;">
                                    <div class="para1 fw-bold text-center text-dark">ssaha@rgu.ac</div>
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
