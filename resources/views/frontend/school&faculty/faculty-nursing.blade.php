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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Nursing (RSN)</span></h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/RSN-PIC.015.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Kaberi Saikia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Principal & Professor, <br>
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
                                    src="assets/img/Faculty/Nursing/HemeswariBhuyan.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hemeswari Bhuyan</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Vice
                                    Principal/HoD, <br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Nursing/Dr.PunamDebbarma.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Punam
                                    Debbarma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Associate Dean,
                                    Admission,<br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.003.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Aziza
                                    Begum</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor,<br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/MrsDoliDeori.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Doli
                                    Deori</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor And
                                    Associate Director, RCCR, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/MsMeghaliDeka.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Meghali
                                    Deka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/MonikaKashyap.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Monika
                                    Kashyap</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/MsNabajaniDutta.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Nabajani Dutta</h5>
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
                                    src="assets/img/Faculty/Nursing/Ms.RashmiRekhaBorah.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Rashmi
                                    Rekha Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor And
                                    Associate Dean, Academic Affairs, <br> The Assam Royal Global University</p>
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.013.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Rumi
                                    Talukdar</h5>
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.014.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Yunkhaibam Renubala Devi</h5>
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.005.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Bhanita
                                    Barman</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/RSN-PIC.006.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Juri
                                    Saikia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/RSN-PIC.007.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Kangkana Talukdar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/Ms.SapnaKumari.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sapna
                                    Kumari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="assets/img/Faculty/Nursing/RSN-PIC.016.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. T.
                                    Linda Mawi</h5>
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
                                    src="assets/img/Faculty/Nursing/AnkitaSarma.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. R.
                                    Elizabeth</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor , <br> The
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.004.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Bakor
                                    Kharbudon</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/MsIlawanpyntngenKharsohnoh.jpeg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Ilawanpyntngen Kharsohnoh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.009.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Manisha
                                    Kalita</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor , <br> The
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.010.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Mini
                                    Medhi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor</p>
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
                                    src="assets/img/Faculty/Nursing/RSN-PIC.011.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Momi
                                    Dihingia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/Noksanglila.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Noksanglila Ao</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/Ms.PankhiLahkar.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2"> Ms. Pankhi
                                    Lahkar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/MsPurabiRabha.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Purabi
                                    Rabha</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
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
                                    src="assets/img/Faculty/Nursing/Ms.SimiDasPurkayastha.jpeg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Simi
                                    Das Purkayastha</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Lecturer/Tutor, <br> The
                                    Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- MAIN SECTION  -->

    </div><!-- #page -->
@endsection
