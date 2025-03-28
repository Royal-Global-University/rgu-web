
@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 90px; position: relative; background-image: url('mobile-assets/royal-schools-assets/bg.svg');">
            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;">Design</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="department-product-design.html">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-dna fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Product Design</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="department-communication-design.html">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-comments fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Communication Design
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="department-interior-design.html">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-couch fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Interior Design</h5>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-4">

                        <a href="department-graphic-design.html">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-palette fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Graphic Design</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/royal-schools-assets/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;">Design</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">

                        <a href="department-product-design.html">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-dna fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd2 pb-2">Department of <br> Product Design</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="department-communication-design.html">
                            <div class="p-3 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-4 text-center">
                                    <i style="color: #27467A;" class="fas fa-comments fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd3 pb-2">Department of Communication Design</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="department-interior-design.html">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-couch fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd2 pb-2">Department of <br> Interior Design</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="department-graphic-design.html">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-palette fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd2 pb-2">Department of <br> Graphic Design</h5>

                                </div>
                            </div>
                        </a>
                    </div>



                </div>

            </div>

        </section>
    </div>
@endsection
