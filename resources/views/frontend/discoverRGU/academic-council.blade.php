@extends('frontend.master')
@push('styles')
    <style>
        .card {
            position: relative;
            background: white;
            border-radius: 10px;

            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40px;
            /* Adjust size as needed */
            height: 40px;
            background: #E8A015;
            /* Yellow color */
            clip-path: polygon(100% 0, 0 100%, 100% 100%);
        }
    </style>
@endpush
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section style="background-image: url('sarang/bg.svg');">
                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                    style="color: #27467A; font-weight: 900;">
                    Academic <span style="color: #FF9A1E; font-weight: 500;">Council</span></h2>

                <div style="padding: 20px 30px;">

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Y.S.R. Murthy</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The
                                        Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Chairperson</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/2.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Diganta Munshi</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Registrar -
                                        Administration,The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member Secretary</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/3.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Anuradha Devi</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, Royal
                                        School of Applied & Pure sciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/4.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Kaberi Saikia
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor & Principal,
                                        Royal School of Nursing</p>
                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/5.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) N.K. Chrungoo
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Dean, Royal School of Life
                                        Sciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/6.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        George AP
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Dean, Royal School of
                                        Business and Royal School of Commerce
                                    </p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/7.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Sumanta Dutta Chowdhury
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                        Coordinator, Royal School of Fine Arts</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/8.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Aruna Deb Rroy
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HOD,
                                        RSC</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/9.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Pubalee Sarmah
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD,
                                        Chemistry</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/10.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Florence H. Rabha
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &HoD,
                                        Royal School of Communications and Media</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/11.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Debajit Borah
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor and
                                        HoD, Dept. of Biotechnology, Royal School of Bio-Sciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/12.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Ms. Lopa
                                        Das
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor &
                                        Coordinator, Royal Medical & Allied Sciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/13.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        Tushti Sharma
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor & HoD Royal
                                        School of Languages</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/14.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Aneesha Borah
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                        Coordinator, Geography and Geoinformatics, Royal School of Earth and Environmental
                                        Sciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/15.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Prithvi Raj Chakraborty

                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor & Principal/HOD,
                                        Royal School of Pharmacy</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/16.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Ishita Chakraborty
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor &HoD,
                                        Department of Computer Science</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/17.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) A.K Buragohain
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Chairperson Academics, RGU
                                    </p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/18.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Ms.
                                        Chandra Lekha Rawat
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Director, Delhi Public
                                        School, Guwahati</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/19.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Ghanshyam Das Dhanuka
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Managing Director of G R
                                        Dhanuka Group, Guwahati</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/20.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri
                                        Pradeep Purohit
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Chief Operating Officer,
                                        Star Cements Ltd.</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/21.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Mr.
                                        Ankur Pansari
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President,
                                        Gyan Sagar Foundation & Member of Governing Body, The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/22.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Ms.
                                        Sikha M. Pansari
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Member of Governing Body,
                                        The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/23.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri R.S.
                                        Joshi
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Former Chairman, FINER and
                                        Member, Board of Management</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/24.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) L. K. Nath
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor and Dean, Royal
                                        School of Pharmacy</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/25.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) P. J. Mahanta
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor, RSL</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/26.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Pronami Bhattacharyya
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Royal
                                        School of Languages</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/27.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Stuti Goswami
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor, Royal
                                        School of Languages</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/28.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Stithi Parna Dutta
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor,
                                        Biochemistry, Royal School of BioSciences</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/academic-council/29.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                        Arpee Saikia
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Associate Professor, Royal
                                        School of Business & Coordinator, Behavioural Science</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/academic-council/bg.svg); background-size: cover;">

        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            Academic <span style="color: #FF9A1E; font-weight: 500;">Council</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/1.jpg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy</h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairperson</p>
                            </div>
                        </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/2.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Registrar - Administration,The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member Secretary</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/3.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Anuradha Devi</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, Royal School of Applied & Pure sciences</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/4.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A; font-size: 20px;" class="card-title headd2 pb-2">Prof. (Dr.) Kaberi Saikia
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 16px;">Professor & Principal, Royal School of Nursing</p>
                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/5.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) N.K. Chrungoo
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Dean, Royal School of Life Sciences</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/6.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. George AP
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Dean, Royal School of Business and Royal School of Commerce
                            </p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/7.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sumanta Dutta Chowdhury
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, Royal School of Fine Arts</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/8.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Aruna Deb Rroy
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HOD, RSC</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/9.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Pubalee Sarmah
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD, Chemistry</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/10.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Florence H. Rabha
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &HoD, Royal School of Communications and Media</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/11.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Debajit Borah
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor and HoD, Dept. of Biotechnology, Royal School of Bio-Sciences</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/12.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Lopa Das
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & Coordinator, Royal Medical & Allied Sciences</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/13.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. Tushti Sharma
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & HoD Royal School of Languages</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/14.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Aneesha Borah
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, Geography and Geoinformatics, Royal School of Earth and Environmental Sciences</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/15.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Prithvi Raj Chakraborty

                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Principal/HOD, Royal School of Pharmacy</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/16.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Ishita Chakraborty
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor &HoD, Department of Computer Science</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/17.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) A.K Buragohain
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Chairperson Academics, RGU</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/18.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Chandra Lekha Rawat
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Director, Delhi Public School, Guwahati</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/19.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Ghanshyam Das Dhanuka
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Managing Director of G R Dhanuka Group, Guwahati</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/20.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Pradeep Purohit
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Chief Operating Officer, Star Cements Ltd.</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/21.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankur Pansari
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President, Gyan Sagar Foundation & Member of Governing Body, The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/22.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sikha M. Pansari
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Member of Governing Body, The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/23.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri R.S. Joshi
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Former Chairman, FINER and Member, Board of Management</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/24.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) L. K. Nath
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor and Dean, Royal School of Pharmacy</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/25.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) P. J. Mahanta
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, RSL</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/26.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Pronami Bhattacharyya
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Royal School of Languages</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/27.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Stuti Goswami
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, Royal School of Languages</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/28.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Stithi Parna Dutta
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Biochemistry, Royal School of BioSciences</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/academic-council/29.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Arpee Saikia
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, Royal School of Business & Coordinator, Behavioural Science</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                </div>

            </div>

        </section>
    </div>
@endsection
