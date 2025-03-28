

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 90px; position: relative; background-image: url('mobile-assets/royal-schools-assets/bg.svg');">
            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Royal School of Environmental <span style="color: #FF9A1E; font-weight: 500;">and Earth Sciences
                    (RSEES)</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="#">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-globe fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Geography and
                                        Geoinformatics</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="#">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-leaf fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Environmental
                                        Sciences</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="#">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-mountain fa-3x"></i>

                                </div>
                                <div class="card-body ">
                                    <h5 style="font-weight: 800; color: #27467A;"
                                        class="text-center card-title mobile-headd2 pb-2">Department of Geology</h5>
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
                Royal School of Environmental <span style="color: #FF9A1E; font-weight: 500;">and Earth Sciences
                    (RSEES)</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                    <div class="col-lg-4 mb-4">

                        <a href="department-geography-geoinformatics">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-globe fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd2 pb-2">Department of Geography and
                                        Geoinformatics</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="department-environmental-sciences">
                            <div class="p-3 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-4 text-center">
                                    <i style="color: #27467A;" class="fas fa-leaf fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd3 pb-2">Department of Environmental Sciences</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="department-geology">
                            <div class="p-4 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="p-3 text-center">
                                    <i style="color: #27467A;" class="fas fa-mountain fa-4x"></i>

                                </div>
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;"
                                        class="text-center card-title headd2 pb-2">Department of <br> Geology</h5>

                                </div>
                            </div>
                        </a>
                    </div>


                </div>

            </div>

        </section>
    </div>
@endsection
