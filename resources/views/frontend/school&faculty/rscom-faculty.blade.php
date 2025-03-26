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
                Royal School of Communications & Media (RSCOM)</h1>
        </div>

        <div class="container my-4">
            <!-- First Row of Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Prof.(Dr.)SureshChandraNayak.html">
                            <img src="assets/img/Faculty/Communications & Media/SureshChandra.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Suresh Chandra Nayak
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Dy.
                                    Dean and Dean ic, Royal School of
                                    Communication & Media (RSCOM)
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">scnayak@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.FlorenceHandiqueRabha.html">
                            <img src="assets/img/Faculty/Communications & Media/FloranceHandiquePhoto.jpg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Florence Handique Rabha
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & HOD, Asstt. Director, RCCR
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">fhrabha@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.AnkitaAgarwal.html">
                            <img src="assets/img/Faculty/Communications & Media/ankita.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 140px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Ankita Agarwal
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">aagarwaldc@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.ChampaDevi.html">
                            <img src="assets/img/Faculty/Communications & Media/DrChampa.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 140px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Dr. Champa Devi
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">cdevi@rgu.ac</div>
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
                        <a href="Dr.EshaChakraborty.html">
                            <img src="assets/img/Faculty/Communications & Media/EshaChakrabortyPhoto.jpeg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Esha Chakraborty
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Assistant Dean, Academic Affairs, RSCOM
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">echakraborty@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.HaoginlenChongloi.html">
                            <img src="assets/img/Faculty/Communications & Media/HaoginlenChongloi.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Haoginlen Chongloi
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">hchongloi@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.RashmiSarmah.html">
                            <img src="assets/img/Faculty/Communications & Media/RashmiSarmah.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Rashmi Sarmah
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">rsarmah@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Dr.SailendraDas.html">
                            <img src="assets/img/Faculty/Communications & Media/Dr.SailendraDas.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 112px;">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Sailendra Das
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">sdas7@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mb-4 mt-5">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.TirtharajGohain.html">
                            <img src="assets/img/Faculty/Communications & Media/TirtharajGohain.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 140px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Mr. Tirtharaj
                                    Gohain
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">tgohain@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.SatyakeeD’ComBhuyan.html">
                            <img src="assets/img/Faculty/Communications & Media/satyakee.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Satyakee D’Com Bhuyan
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor, Deputy Dean, Student Affairs
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">tgohain@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.JitumoniDas.html">
                            <img src="https://resource.rgu.ac/assets/images/faculty-photo/blank_407X407_new.jpg"
                                class="card-img-top p-2" style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body" style="min-height: 140px;">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Mr. Jitumoni Das
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Creative Director
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px; margin-top: 35px;">
                                    <div class="para1 fw-bold text-center text-dark">jkalita@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <hr>
            <h2 style="text-align: start;" class="headd2 text-dark"> DEPARTMENT OF ANIMATION</h2>
            <hr>

            <!-- Third Row of Cards -->
            <div class="row mt-4 mb-4">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.DhurbajyotiSinghChoudhury.html">
                            <img src="assets/img/Faculty/Communications & Media/Dhurbajyoti.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Dhurbajyoti Singh Choudhury
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">dschoudhury@rgu.ac
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.BijayataDutta.html">
                            <img src="assets/img/Faculty/Communications & Media/Bijayata.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Ms. Bijayata Dutta
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">dbdutta@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Mr.DijendraDas.html">
                            <img src="assets/img/Faculty/Communications & Media/Dijendra.jpeg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark" style="padding-bottom: 25px;">Mr. Dijendra Das
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Associate
                                    Professor
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">ddas4@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <hr>
            <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF FILM & TELEVISION PRODUCTION
            </h2>
            <hr>

            <!-- Third Row of Cards -->
            <div class="row mt-4 mb-4">
                <div class="col-md-3">
                    <div class="card"
                        style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                        <a href="Ms.SharmistaPradhan.html">
                            <img src="assets/img/Faculty/Communications & Media/SharmishthaPradhan.jpg" class="card-img-top p-2"
                                style="border-radius: 10px;" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Sharmista Pradhan
                                </h5>
                                <hr>

                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Assistant Professor & Coordinator
                                </p>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">spradhan@rgu.ac</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <hr>
            <h2 style="text-align: start;" class="headd2 text-dark">ADJUNCT FACULTY</h2>
            <hr>

            <p class="para1 text-dark fw-bold">Mr. Satyakee D’Com Bhuyan, Faculty, Deputy Dean, Student Affairs <br>
                Mr. Kanjan Kishore Nath, Adjunct Faculty, FTP</p>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
