@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd2 mb-3 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 110px; position: relative;">
                Royal School of <br><span style="color: #FF9A1E; font-weight: 500;">
                    Nursing (RSN)</span></h2>

            <div style="padding: 20px 35px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Kaberi-Saikia-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Kaberi Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Principal, Royal School of Nursing
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof.-Hemeswari-Bhuyan.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Hemeswari Bhuyan
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-hemeswari-bhuyan">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-Punam-Debbarma-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Punam Debbarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-punam-debbarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/aziza.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Aziza Begum
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-aziza-begum">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Doli-Deori-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Doli Deori
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Meghali.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Meghali Deka
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-meghali-deka">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Monika-Kashyap-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Monika Kashyap
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-monika-kashyap">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/MS-Nabajani-Dutta-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Nabajani Dutta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-nabajani-dutta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rashmi-Rekha-Borah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Rashmi Rekha Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-rashmi-rekha-borah">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rumi-Talukdar-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Rumi Talukdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-rumi-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Yumkhaibam-Renubala-rsn.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Yumkhaibam Renubala Devi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-yumkhaibam">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bhanita-Barman.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Bhanita Barman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-bhanita-barman">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Juri.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Juri Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-juri-saikia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Kangkana-Talukdar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Kangkana Talukdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-kangkana-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Sapna-Kumari-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sapna Kumari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-sapna-kumari">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Linda-Mawi-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. T. Linda Mawi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-linda-mawi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ankita-Sarma.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Ankita Sarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-ankita-sarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Bakor.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Bakor Kharbudon
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-bakor-kharbudon">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Manisha-Kalita.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Manisha Kalita
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-manisha-kalita">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Mini-Medhi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Mini Medhi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-mini-medhi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Momi-Dehingia.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Momi Dehingia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Noksanglila-Ao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Noksanglila Ao
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-noksanglila">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Pankhi-Lahkar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Pankhi Lahkar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-pankhi-lahkar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Purabi-Rabha.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Purabi Rabha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-purabi-rabha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ilawanpyntngen-Kharsohnoh-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Ilawanpyntngen Kharsohnoh
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Tutor
                                </p>
                                <a href="faculty-ilawanpyntngen-kharsohnoh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Simi-Das-Purkayastha-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Simi Das Purkayastha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Tutor
                                </p>
                                <a href="faculty-simi-das-purkayastha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of<span style="color: #FF9A1E; font-weight: 500;"> Nursing (RSN)</span></h2>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Kaberi-Saikia-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Kaberi Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Principal, Royal School of Nursing
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof.-Hemeswari-Bhuyan.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Hemeswari Bhuyan
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-hemeswari-bhuyan">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-Punam-Debbarma-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Punam Debbarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-punam-debbarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/aziza.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Aziza Begum
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-aziza-begum">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Doli-Deori-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Doli Deori
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Meghali.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Meghali Deka
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-meghali-deka">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Monika-Kashyap-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Monika Kashyap
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-monika-kashyap">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/MS-Nabajani-Dutta-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Nabajani Dutta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-nabajani-dutta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rashmi-Rekha-Borah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Rashmi Rekha Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-rashmi-rekha-borah">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rumi-Talukdar-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Rumi Talukdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-rumi-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Yumkhaibam-Renubala-rsn.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Yumkhaibam Renubala Devi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-yumkhaibam">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bhanita-Barman.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Bhanita Barman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-bhanita-barman">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Juri.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Juri Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-juri-saikia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Kangkana-Talukdar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Kangkana Talukdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-kangkana-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Sapna-Kumari-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sapna Kumari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-sapna-kumari">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Linda-Mawi-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. T. Linda Mawi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-linda-mawi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ankita-Sarma.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Ankita Sarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-ankita-sarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Bakor.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Bakor Kharbudon
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-bakor-kharbudon">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Manisha-Kalita.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Manisha Kalita
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-manisha-kalita">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsn/Mini-Medhi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Mini Medhi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-mini-medhi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Momi-Dehingia.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Momi Dehingia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Noksanglila-Ao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Noksanglila Ao
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-noksanglila">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Pankhi-Lahkar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Pankhi Lahkar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-pankhi-lahkar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Purabi-Rabha.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Purabi Rabha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Lecturer/Tutor
                                </p>
                                <a href="faculty-purabi-rabha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ilawanpyntngen-Kharsohnoh-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Ilawanpyntngen Kharsohnoh
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Tutor
                                </p>
                                <a href="faculty-ilawanpyntngen-kharsohnoh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Simi-Das-Purkayastha-RSN.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Simi Das Purkayastha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Tutor
                                </p>
                                <a href="faculty-simi-das-purkayastha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
