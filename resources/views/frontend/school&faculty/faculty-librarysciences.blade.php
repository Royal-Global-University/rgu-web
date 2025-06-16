@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">


        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd2 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of <br><span style="color: #FF9A1E; font-weight: 500; padding-top: 110px; position: relative;">
                    Library & Information Sciences (RSLISC)</span></h2>

            <div style="padding: 20px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslisc/HirakHazarika.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Hirak Jyoti Hazarika
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & HOD
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslisc/MukutorRahman.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Md. Mukutor Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor cum Incharge Librarian
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rslisc/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Nilanjana Purkayastha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
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
                Royal School of<span style="color: #FF9A1E; font-weight: 500;"> Library & Information Sciences
                    (RSLISC)</span></h2>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslisc/HirakHazarika.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Hirak Jyoti Hazarika
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & HOD
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslisc/MukutorRahman.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Md. Mukutor Rahman
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor cum Incharge Librarian
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rslisc/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Nilanjana Purkayastha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
