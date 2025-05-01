@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('mobile-assets/royal-schools-assets/bg.svg');">
            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of Humanities <span style="color: #FF9A1E; font-weight: 500;">and Social Sciences (RSHSS)</span>
            </h2>

            <div style="padding: 20px 30px;">

                <div class="row">



                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_History">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-landmark fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of History</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Political_Science">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-balance-scale fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Political Science</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Public_Administration">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-university fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Public Administrator
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Sociology">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-users fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Sociology</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Social_Work">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-hands-helping fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Social Work</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/royal-schools-assets/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4" style="color: #27467A; font-weight: 900;">
                Royal School of Humanities <span style="color: #FF9A1E; font-weight: 500;">and Social Sciences (RSHSS)</span>
            </h2>


            <div style="padding: 20px 120px;">
                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_History">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-landmark fa-4x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of History</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Political_Science">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-balance-scale fa-4x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Political Science</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Public_Administration">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-university fa-4x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Public Administrator
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Sociology">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-users fa-4x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Sociology</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Social_Work">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-hands-helping fa-4x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 600; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Social Work</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </div>
@endsection
