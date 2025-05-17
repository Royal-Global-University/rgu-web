@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/bg.svg'); background-size: cover; padding-top: 90px; position: relative;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Advisory <span style="color: #FF9A1E; font-weight: 500;">Leadership</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">


                    <div class="col-lg-3 mb-4">

                        <a href="advisory-prof-prabuddha-ganguli">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/Professor-Dr-Prabuddha-Ganguli.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Prabuddha
                                        Ganguli</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">Global Voice in
                                        IPR | National Champion of Innovation, <br> Emeritus Professor and Adviser, Royal School
                                        of Law and Administration</p>

                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="#!">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/sri-subramanian-ramadorai.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Subramanian
                                        Ramadorai</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 16px;">Former CEO & MD
                                        of Tata Consultancy Services and Former Chairperson of NSDC and NSDA</p>

                                    <!-- <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="#!">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/Sri-Ranjit-Barthakur.png" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Ranjit
                                        Barthakur</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara
                                        Foundation, and Chairperson</p>

                                    <!-- <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p> -->
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4"
                style="color: #27467A; font-weight: 900;">
                Advisory <span style="color: #FF9A1E; font-weight: 500;">Leadership</span></h2>

            <div style="padding: 20px 60px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center; gap: 40px;">

                    <div class="col-lg-3 mb-4">

                        <a href="advisory-prof-prabuddha-ganguli">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/Professor-Dr-Prabuddha-Ganguli.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Prabuddha
                                        Ganguli</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">Global Voice in
                                        IPR | National Champion of Innovation, <br> Emeritus Professor and Adviser, Royal School
                                        of Law and Administration</p>

                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="#!">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/sri-subramanian-ramadorai.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Subramanian
                                        Ramadorai</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 16px;">Former CEO & MD
                                        of Tata Consultancy Services and Former Chairperson of NSDC and NSDA</p>

                                    <!-- <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="#!">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 290px; width: 100%; border: 1px solid #99999984;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/advisor-leadership/Sri-Ranjit-Barthakur.png" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Ranjit
                                        Barthakur</h5>
                                    <p class="para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara
                                        Foundation, and Chairperson</p>

                                    <!-- <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p> -->
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
