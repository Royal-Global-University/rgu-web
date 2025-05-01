@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of Applied <span style="color: #FF9A1E; font-weight: 500;">and Pure Sciences (RSAPS)</span></h2>

            <div style="padding: 20px;">

                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Physics">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-atom fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Physics</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Chemistry">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-flask fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Chemistry</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Mathematics">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-square-root-alt fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Mathematics</h5>

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
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4" style="color: #27467A; font-weight: 900;">
                Royal School of Applied <span style="color: #FF9A1E; font-weight: 500;">and Pure Sciences (RSAPS)</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Physics">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-atom fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Physics</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Chemistry">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-flask fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Chemistry</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="Research_Department_Mathematics">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-square-root-alt fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd2 pb-2">
                                        Department of Mathematics</h5>

                                </div>
                            </div>
                        </a>
                    </div>


                </div>

            </div>

        </section>
    </div>
@endsection
