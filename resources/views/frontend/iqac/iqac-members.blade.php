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
                <img src="assets/img/members/members.svg" alt="">
            </div>

            <div class="container my-4">
                <div class="row">

                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/pic5.png" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Y.S.R. Murthy
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Vice-Chancellor, <br> The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Chairperson</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/pic9.png" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Ankur Pansari
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Executive
                                    Vice President, <br> GSF
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member from Management</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/pic11.jpg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Dip Narayain Singh
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Registrar, The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/pic16.png" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Ankur Ganguly
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Vice-Chancellor, The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Second Row of Cards -->
                <div class="row mt-5">

                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc1.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) L.K. Nath
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Dean, RSP
                                    <br> The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc2.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Kaberi Saikia
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Professor
                                    & Principal, <br> Royal School of Nursing
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc3.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Bimalendu Kalita
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Assoc.
                                    Professor, RSAPS, <br> The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc4.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. J.K. Bhattacharyya
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Professor, <br> Dept. of Economics, RSHSS
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Third Row of Cards -->
                <div class="row mt-5">

                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc5.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Niraj Singh
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Professor, <br> Dept. of Microbiology, RSBSC
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc6.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Anup Malakar
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Professor, <br> Dept. of Chemistry, RSAPS
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc7.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 style="font-size: 20px;" class="card-title headd3 fw-bold text-dark">Ms. Joyeeta Bhattacharjee
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Assoc.
                                    Professor, RSAPS, <br> The Assam Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc8.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Stuti Goswami
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Professor, <br> Dept. of English, RSL
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- forth Row of Cards -->
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                            <img src="assets/img/members/picc9.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 style="font-size: 19px;" class="card-title headd3 fw-bold text-dark">Ms. Dipika Tulshyan Agarwal
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Deputy
                                    Registrar, <br> HR & Regulatory Compliance
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc10.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. Arup Kr. Mishra
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Chairman,
                                    <br> Pollution Control, Board, Guwahati
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member from Local Society</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc11.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 style="font-size: 20px;" class="card-title headd3 fw-bold text-dark">Mr. Tanzin Jamba
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">BA 1st
                                    Sem, <br> Public Administration
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Student Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc12.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Ms. Prajoyeeta Kashyap
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Manager, <br> PR & Content Writer
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Alumni Member</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- fifth Row of Cards -->
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                            <img src="assets/img/members/picc13.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. Utpal Sarma
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Tech
                                    Variable Pvt. Ltd., <br> Guwahati
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member from Employers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc14.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Mr. R. S. Joshi
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Former
                                    President, FINER, <br> Guwahati
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member from Industrialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc15.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 style="font-size: 20px;" class="card-title headd3 fw-bold text-dark">Dr. Ranumoni Choudhury
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Insurrance Medical, Officer, ESIS, <br> Narengi, Guwahati
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Member from Parents</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc16.png" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Anuradha Devi
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Dean,
                                    RSAPS <br> The Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Director, IQAC</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">

                            <img src="assets/img/members/picc17.jpg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Prof. (Dr.) Bipul Nath
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">
                                    Professor, RSP, <br> The Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Co-ordinator, IQAC</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"
                            style="box-shadow: 0px 1px 1px rgba(3, 7, 18, 0.08), 0px 5px 4px rgba(3, 7, 18, 0.06), 0px 12px 9px rgba(3, 7, 18, 0.05), 0px 21px 15px rgba(3, 7, 18, 0.03), 0px 33px 24px rgba(3, 7, 18, 0.02);">
                            <img src="assets/img/members/picc18.jpeg" class="card-img-top p-2" style="border-radius: 10px;"
                                alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title headd3 fw-bold text-dark">Dr. N. Seema Devi
                                </h5>
                                <p style="font-size: 15px !important; line-height: 1.4;" class="card-text para1 text-dark">Asst.
                                    Professor, RSLSC <br> The Royal Global University
                                </p>
                                <hr>
                                <div style="background-color: #e2edff; padding: 10px; border-radius: 10px;">
                                    <div class="para1 fw-bold text-center text-dark">Co-ordinator, IQAC</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    <!--End About-->
</div><!-- #page -->
@endsection
