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
                <section style="background-image: url('mobile-assets/finance-committee/bg.svg');">
                    <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                        style="color: #27467A; font-weight: 900;">
                        Finance <span style="color: #FF9A1E; font-weight: 500;">Committee</span></h2>

                    <div style="padding: 20px 30px;">
                        <div class="row">

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/ak.pansari.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr. A.K.
                                            Pansari</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Chancellor, The Assam
                                            Royal Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Chairperson</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/anilkumarmodi.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri Anil
                                            Kumar Modi</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, The Assam
                                            Royal Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member (Ex-officio)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;" src="mobile-assets/finance-committee/ysr.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                            (Dr.) Y.S.R. Murthy</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Vice Chancellor, The Assam
                                            Royal Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member (Ex-officio)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/digantamunshi.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                            Diganta Munshi</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Registrar, The Assam Royal
                                            Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member (Ex-officio)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/vijayksahrma.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri
                                            Vijay K. Sharma</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Sr. Manager, Finance &
                                            Accounts</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member-Secretary (Ex-officio)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;" src="mobile-assets/finance-committee/blank.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Ms.
                                            Sikha M. Pansari</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Member, Gyan Sagar
                                            Foundation & Member, Governing Body, Royal Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/ankurpansari.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Mr.
                                            Ankur Pansari</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President,
                                            Gyan Sagar Foundation & Member, Board of Management, Royal Global University</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;" src="mobile-assets/finance-committee/jain.jpeg"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                            (Dr.) Manoj K. Jain</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Dy. Dean, Royal School of
                                            Business</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;" src="mobile-assets/finance-committee/sudeep.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr.
                                            Sudip Chakraborty</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">i/c Dy. Dean, Royal School
                                            of Commerce</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/manojpatwari.jpeg" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Mr.
                                            Manoj Patwari</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Chief Estate Manager, Gyan
                                            Sagar Foundation</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/shyampandit.jpeg" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Mr.
                                            Shyam Pandit</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Accounts Officer, Gyan
                                            Sagar Foundation</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/mlagarwal.jpeg" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">CA M.L.
                                            Agarwal</h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & HoD,
                                            Royal School of Communications and Media</p>
                                        <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                            Member</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                    <div class="p-3">
                                        <img style="height: 300px; width: 100%;"
                                            src="mobile-assets/finance-committee/slagarwal.jpeg" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">CA. S.L.
                                            Agarwal
                                        </h5>
                                        <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Expert in Finance/
                                            Accounts/ Audit
                                        </p>
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

    <section style="background-image: url(mobile-assets/finance-committee/bg.svg); background-size: cover;">

        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            Finance <span style="color: #FF9A1E; font-weight: 500;">Committee</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/ak.pansari.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. A.K. Pansari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Chancellor, The Assam Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairperson</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/anilkumarmodi.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Anil Kumar Modi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, The Assam Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member (Ex-officio)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/ysr.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice Chancellor, The Assam Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member (Ex-officio)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/digantamunshi.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Registrar, The Assam Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member (Ex-officio)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/vijayksahrma.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Vijay K. Sharma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Sr. Manager, Finance & Accounts</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member-Secretary (Ex-officio)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/blank.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sikha M. Pansari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Member, Gyan Sagar Foundation & Member, Governing Body, Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/ankurpansari.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankur Pansari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President, Gyan Sagar Foundation & Member, Board of Management, Royal Global University</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/jain.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Manoj K. Jain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dy. Dean, Royal School of Business</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/sudeep.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sudip Chakraborty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">i/c Dy. Dean, Royal School of Commerce</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/manojpatwari.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Manoj Patwari</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Chief Estate Manager, Gyan Sagar Foundation</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/shyampandit.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Shyam Pandit</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Accounts Officer, Gyan Sagar Foundation</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/mlagarwal.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">CA M.L. Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & HoD, Royal School of Communications and Media</p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/finance-committee/slagarwal.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">CA. S.L. Agarwal
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Expert in Finance/ Accounts/ Audit
                                </p>
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
        </div>
@endsection
