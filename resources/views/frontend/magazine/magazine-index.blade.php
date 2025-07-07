@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('mobile-assets/boardofmanagement/bg.svg');">
            <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                RGU <span style="color: #FF9A1E; font-weight: 500;">Magazine</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/magazine/1.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Look
                                    Book 2025</h5>

                                <a target="_blank" class="text-center rounded para1 fw-bold"
                                    style="padding: 8px 12px; background-color: #E8A015; color: #fff; width: 180px;"
                                    href="https://heyzine.com/flip-book/601e0af13b.html">View Magazine</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 mb-4">


                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/magazine/2.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Museum
                                    Book</h5>

                                <a target="_blank" class="text-center rounded para1 fw-bold"
                                    style="padding: 8px 12px; background-color: #E8A015; color: #fff; width: 180px;"
                                    href="https://heyzine.com/flip-book/e6222067e7.html">View Magazine</a>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </section>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/boardofmanagement/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                RGU <span style="color: #FF9A1E; font-weight: 500;">Magazine</span></h2>

            <div style="padding: 30px 80px;">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 370px; width: 100%;" src="mobile-assets/magazine/1.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1 ">
                                <div class="text-center">
                                    <h4 style="font-weight: 600; color: #27467A;" class="card-title pb-2">Look
                                        Book 2025</h4>

                                    <a target="_blank" class="text-center rounded para1 fw-bold"
                                        style="padding: 8px 12px; background-color: #E8A015; color: #fff; width: 180px;"
                                        href="https://heyzine.com/flip-book/601e0af13b.html">View Magazine</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 370px; width: 100%;" src="mobile-assets/magazine/2.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <div class="text-center">
                                    <h4 style="font-weight: 600; color: #27467A;" class="card-title pb-2">Museum
                                        Book</h4>

                                    <a target="_blank" class="text-center rounded para1 fw-bold"
                                        style="padding: 8px 12px; background-color: #E8A015; color: #fff; width: 180px;"
                                        href="https://heyzine.com/flip-book/e6222067e7.html">View Magazine</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection
