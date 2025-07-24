@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd2 mb-3 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 110px; position: relative;">
                Royal School of <br><span style="color: #FF9A1E; font-weight: 500;">
                    Agriculture (RSAG)</span></h2>

            <div style="padding: 20px 30px;">


                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Nikhil Kumar Chrungoo</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, Royal School of Life Sciences</p>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">I/C Dean, Royal School of Agriculture</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Anushree Baruah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Mehjebin Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="/faculty-Mehjabin-Rahman">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Agriculture (RSAG)</span></h2>

            <div style="padding: 20px 90px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 570px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Nikhil Kumar Chrungoo</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, Royal School of Life Sciences</p>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">I/C Dean, Royal School of Agriculture</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Anushree Baruah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Mehjebin Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="/faculty-Mehjabin-Rahman">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
