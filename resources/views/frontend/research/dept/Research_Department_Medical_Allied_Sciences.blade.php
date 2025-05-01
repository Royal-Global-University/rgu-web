@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('mobile-assets/royal-schools-assets/bg.svg'); background-size: cover;">
            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of Medical <span style="color: #FF9A1E; font-weight: 500;">Allied Sciences (RSMAS)</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">



                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Optometry">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-eye fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Optometry</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_OperationTheatre">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-microscope fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Operation Theatre Tech
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Medical_Lab">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-flask fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Medical Lab Tech</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Deptment_Radiography">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-x-ray fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Radiography and Advance
                                        Imaging Tech</h5>
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
        <div>

            <section style="background-image: url('mobile-assets/royal-schools-assets/bg.svg'); background-size: cover;">
                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4" style="color: #27467A; font-weight: 900;">
                    Royal School of Medical <span style="color: #FF9A1E; font-weight: 500;">Allied Sciences (RSMAS)</span></h2>

                <div style="padding: 20px 120px;">

                    <div class="row">



                        <div class="col-lg-4 mb-4">

                            <a href="Research_Department_Optometry">
                                <div class="p-4 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-eye fa-4x"></i>

                                    </div>
                                    <div class="p-4 card-body ">
                                        <h5 style="font-weight: 600; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Optometry</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <a href="Research_Department_OperationTheatre">
                                <div class="p-4 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-microscope fa-4x"></i>

                                    </div>
                                    <div class="p-4 card-body ">
                                        <h5 style="font-weight: 600; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Operation Theatre Tech
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <a href="Research_Department_Medical_Lab">
                                <div class="p-4 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-flask fa-4x"></i>

                                    </div>
                                    <div class="p-4 card-body ">
                                        <h5 style="font-weight: 600; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Medical Lab Tech</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <a href="Research_Deptment_Radiography">
                                <div class="p-4 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-x-ray fa-4x"></i>

                                    </div>
                                    <div class="p-4 card-body ">
                                        <h5 style="font-weight: 600; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Radiography and Advance
                                            Imaging Tech</h5>
                                    </div>
                                </div>
                            </a>
                        </div>



                    </div>

                </div>

            </section>


        </div>
    </div>
@endsection
