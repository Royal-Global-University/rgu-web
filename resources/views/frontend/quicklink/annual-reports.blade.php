@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/mom/bg.svg); background-size: cover; padding-top: 120px; position: relative;">

            <h2 class="headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Annual & Audit<span style="color: #FF9A1E; font-weight: 500;">Reports</span></h2>

            <div style="padding: 20px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202022-23-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2022 - 2023
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202021-22-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2021 - 2022
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202020-21-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2020 - 2021
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202019-20-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2019 - 2020
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202018-19-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2018 - 2019
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202017-18-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2017 - 2018
                                    </h5>
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
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/mom/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Annual & Audit <span style="color: #FF9A1E; font-weight: 500;">Reports</span></h2>

            <div style="padding: 50px 80px;">
                <h4 class="pb-3 text-dark fw-bold">Annual Report</h4>
                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202022-23-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2022 - 2023
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202021-22-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2021 - 2022
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202020-21-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2020 - 2021
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202019-20-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2019 - 2020
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202018-19-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2018 - 2019
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202017-18-min.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Annual Report 2017 - 2018
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
            <div style="padding: 0px 80px;">
                <h4 class="pb-3 text-dark fw-bold">Audit Report</h4>
                <div class="row pb-5" style="display: flex; align-items: center;">

                    <div class="col-lg-4 mb-4">

                        <a target="_blank"
                            href="mobile-assets/Policy/Audit%20Report.pdf">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">

                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title para1"><i
                                            style="color: #27467A;" class="fas fa-download"></i> Audit Report 2022 - 2025
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection
