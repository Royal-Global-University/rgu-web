@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">

            @include('frontend/components/mobileheader')

            <h2 class="headd2 mb-3 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 110px; position: relative;">
                Royal School of <br><span style="color: #FF9A1E; font-weight: 500;">
                    Pharmacy (RSP)</span></h2>

            <div style="padding: 20px 35px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsp/Rao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Ch. M M Prasad Rao
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor and Dean, Royal School of Pharmacy
                                </p>
                                <a href="/ch-m-m-prasad-rao">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/faculty-profile/Rathindra.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Rathindra Bhuyan
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Senior Professor & Advisor
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
                                    src="mobile-assets/updated-faculty-img/Prof-Prithviraj-Chakraborty-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Prithviraj Chakraborty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Principal/HoD
                                </p>
                                <a href="faculty-prithviraj-chakraborty">
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
                                    src="mobile-assets/updated-faculty-img/atanu-bhattacharjee-rsp.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Atanu Bhattacharjee
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Joint Controller of Examination
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-Bipul-Nath-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Bipul Nath
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Debarupa-Dutta-Chakraborty-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Debarupa Dutta Chakraborty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-debapurba">
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
                                    src="mobile-assets/updated-faculty-img/Pranabesh-Sikdar-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Pranabesh Sikdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Sudarshana Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-sudarshana">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Anju-Das-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Anju Das
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                    <a href="faculty-anju-das">
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
                                    src="mobile-assets/updated-faculty-img/Ayesha-Aktar-Khanam-Choudhury.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Ayesha Aktar Khanam Choudhury
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-ayesha-aktar-khanam">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Kamal-Deka-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Kamal Deka
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;"
                                                        src="mobile-assets/updated-faculty-img/Dr-Moidul-Islam-Judder-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Moidul Islam Judder
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                    <a href="moidul-islam">
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
                                    src="mobile-assets/updated-faculty-img/Dr-Mukta-Agrawal.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Mukta Agrawal
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-mukta-agarwal">
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
                                    src="mobile-assets/updated-faculty-img/Dr-Syed-Nazrin-Ruhina-Rahman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Syed Nazrin Ruhina Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Aitilaris-Nongsiej-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Aitilaris Nongsiej
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-aitilaris">
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
                                    src="mobile-assets/updated-faculty-img/Bhaskar-Jyoti-Pathak-RSHSS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Bhaskar Jyoti Pathak
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-bhaskar-jyoti-pathak">
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
                                    src="mobile-assets/updated-faculty-img/Hadiuz-Zaman.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Hadiuz Zaman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-hadiuz-zaman">
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
                                    src="mobile-assets/updated-faculty-img/Mr-Himanta-Biswa-Saikia-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Himanta Biswa Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="himanta-saikia">
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
                                    src="mobile-assets/updated-faculty-img/Madhusmita-Gogoi-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Madhusmita Gogoi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="madhusmita-gogoi">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Mevareen-Rynjah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Mevareen Rynjah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="mevareen">
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
                                    src="mobile-assets/updated-faculty-img/Neelakshi-Sharma-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Neelakshi Sharma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-neelakshi-sharma">
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
                                    src="mobile-assets/updated-faculty-img/Nilutpal-Hazarika-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Nilutpal Hazarika
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-nilutpal-hazarika">
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
                                    src="mobile-assets/updated-faculty-img/Pallab-Kumar-Nath-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Pallab Kumar Nath
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/PAYAL-DASGUPTA-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Payal Dasgupta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="payal-dasgupta">
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
                                    src="mobile-assets/updated-faculty-img/Rakibur-Rahman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Rakibur Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="rakibur-rahman">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Sabnam-Nargis-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sabnam Nargis
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="sabnam-nargis">
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
                                    src="mobile-assets/updated-faculty-img/Shiny-Ahmed-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Shiny Ahmed
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Sumi-Barman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sumi Barman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="sumi-barman">
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
                                    src="mobile-assets/updated-faculty-img/Mr-Tanmay-Sarma-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Tanmay Sarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-tanmay-sarma">
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
                                    src="mobile-assets/updated-faculty-img/Miss-Tina-Bania-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Tina Bania
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-tina-bania">
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
                Royal School of<span style="color: #FF9A1E; font-weight: 500;"> Pharmacy (RSP)</span></h2>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsp/Rao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Ch. M M Prasad Rao
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor and Dean, Royal School of Pharmacy
                                </p>
                                <a href="/ch-m-m-prasad-rao">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/faculty-profile/Rathindra.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Rathindra Bhuyan
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Senior Professor & Advisor
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-Prithviraj-Chakraborty-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Prithviraj Chakraborty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Principal/HoD
                                </p>
                                <a href="faculty-prithviraj-chakraborty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/atanu-bhattacharjee-rsp.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Atanu Bhattacharjee
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Joint Controller of Examination
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-Bipul-Nath-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Bipul Nath
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Debarupa-Dutta-Chakraborty-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Debarupa Dutta Chakraborty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-debapurba">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Pranabesh-Sikdar-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Pranabesh Sikdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Sudarshana Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-sudarshana">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Anju-Das-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Anju Das
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                    <a href="faculty-anju-das">
                                                        <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ayesha-Aktar-Khanam-Choudhury.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Ayesha Aktar Khanam Choudhury
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-ayesha-aktar-khanam">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Kamal-Deka-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Kamal Deka
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;"
                                                        src="mobile-assets/updated-faculty-img/Dr-Moidul-Islam-Judder-RSP.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Moidul Islam Judder
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                    <a href="moidul-islam">
                                                        <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Mukta-Agrawal.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Mukta Agrawal
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-mukta-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                                        <div class="col-lg-3 mb-4">
                                            <div class="card rounded d-flex flex-column"
                                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                                <div class="p-3">
                                                    <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Mr-Suman-Kumar.png"
                                                        class="img-fluid rounded border" />
                                                </div>
                                                <div class="card-body d-flex flex-column flex-grow-1">
                                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                        Dr. Suman Kumar
                                                    </h5>
                                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                                        Assistant Professor
                                                    </p>
                                                    <a href="faculty-dr-suman-kumar">
                                                        <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Syed-Nazrin-Ruhina-Rahman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Syed Nazrin Ruhina Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Aitilaris-Nongsiej-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Aitilaris Nongsiej
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-aitilaris">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bhaskar-Jyoti-Pathak-RSHSS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Bhaskar Jyoti Pathak
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-bhaskar-jyoti-pathak">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Hadiuz-Zaman.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Hadiuz Zaman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-hadiuz-zaman">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Himanta-Biswa-Saikia-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Himanta Biswa Saikia
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="himanta-saikia">
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
                                    src="mobile-assets/updated-faculty-img/Madhusmita-Gogoi-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Madhusmita Gogoi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="madhusmita-gogoi">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Mevareen-Rynjah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Mevareen Rynjah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="mevareen">
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
                                    src="mobile-assets/updated-faculty-img/Neelakshi-Sharma-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Neelakshi Sharma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-neelakshi-sharma">
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
                                    src="mobile-assets/updated-faculty-img/Nilutpal-Hazarika-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Nilutpal Hazarika
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-nilutpal-hazarika">
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
                                    src="mobile-assets/updated-faculty-img/Pallab-Kumar-Nath-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Pallab Kumar Nath
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/PAYAL-DASGUPTA-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Payal Dasgupta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="payal-dasgupta">
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
                                    src="mobile-assets/updated-faculty-img/Rakibur-Rahman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Rakibur Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="rakibur-rahman">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Sabnam-Nargis-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sabnam Nargis
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="sabnam-nargis">
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
                                    src="mobile-assets/updated-faculty-img/Shiny-Ahmed-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Shiny Ahmed
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Suman-Kumar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Suman Kumar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-suman-kumar">
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
                                    src="mobile-assets/updated-faculty-img/Sumi-Barman-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Sumi Barman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="sumi-barman">
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
                                    src="mobile-assets/updated-faculty-img/Mr-Tanmay-Sarma-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Tanmay Sarma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-tanmay-sarma">
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
                                    src="mobile-assets/updated-faculty-img/Miss-Tina-Bania-RSP.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Tina Bania
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-tina-bania">
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
