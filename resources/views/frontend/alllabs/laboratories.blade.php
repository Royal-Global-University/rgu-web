@extends('frontend.master')
@section('content')
         <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/laboratories/mobile-lab-banner.png" alt="">

                <div style="padding: 20px 20px;">
                    <div class="row">

                        <div class="col-lg-12 mb-4">

                            <a href="{{ route('lab-architecture') }}">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/architecture.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Architecture <span style="font-weight: 600 !important;">Design Lab</span> </h5>

                                        <a href="{{ route('lab-architecture') }}">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-bio-chemistry">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/biochem.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Bio
                                            Chemistry <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-bio-chemistry">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-bioscience-research">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/bioscience.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Bio
                                            Sciences <span style="font-weight: 600 !important;">Research Lab</span> </h5>

                                        <a href="lab-bioscience-research">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-botany">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/botany.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Botany
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-botany">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-biotech">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/biotech.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Biotechnology <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-biotech">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-computer">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/comp.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Computer
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-computer">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-civilengineering">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/civil.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Civil
                                            Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-civilengineering">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-chemistry">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/chemistry.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Chemistry <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-chemistry">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-diagnostic">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/diagnostic.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Diagnostic <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-diagnostic">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-engineering_drawing">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;"
                                            src="mobile-assets/laboratories/engineeringdrawing.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Engineering Drawing <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-engineering_drawing">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-electronic">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/electronic.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Electronic Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-electronic">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-electrical">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/electrical.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Electrical Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-electrical">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-foodteach">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/foodtech.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Foodtech
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-foodteach">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-forensic-lab">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/forensic.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Forensic
                                            Science <span style="font-weight: 600 !important;">Lab</span> </h5>


                                        <a href="lab-forensic-lab">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-hotelmanagement">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;"
                                            src="mobile-assets/laboratories/hotelmanagement.png" class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Hotel
                                            Management <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-hotelmanagement">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-interior">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/interior.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Interior
                                            Designing <span style="font-weight: 600 !important;">Lab</span> </h5>


                                        <a href="lab-interior">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-language-lab">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/language.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Language
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>


                                        <a href="lab-language-lab">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-mechanical">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/mechanical.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Mechanical Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-mechanical">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-microbiology">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/micro.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Microbiology <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-microbiology">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-nursing">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/nursing.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Nursing
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>


                                        <a href="lab-nursing">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-optometry">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/opto.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Optometry <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-optometry">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-operation_theater">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/operation.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Operation Theatre <span style="font-weight: 600 !important;">Lab</span> </h5>


                                        <a href="lab-operation_theater">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-physics">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/physics.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Physics
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-physics">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-pharmacy">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/pharmacy.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Pharmacutical <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-pharmacy">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-physiotherapy">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/physiotherapy.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Physiotherapy <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-physiotherapy">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-radiography">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/radiology.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                            Radiology <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-radiography">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-zoology">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/zoology.png"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Zoology
                                            <span style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-zoology">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-ev-lab">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/ev.jpeg"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">EV <span
                                                style="font-weight: 600 !important;">Lab</span> </h5>

                                        <a href="lab-ev-lab">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-12 mb-4">

                            <a href="lab-astronomy">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                    <div class="p-3">
                                        <img style="height: 180px; width: 100%;" src="mobile-assets/laboratories/observe.jpeg"
                                            class="img-fluid rounded" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Royal
                                            <span style="font-weight: 600 !important;">Observatory</span> </h5>

                                        <a href="lab-astronomy">
                                            <p class="card-text mobile-para1 fw-bold half-underline mt-auto"
                                                style="color: #FF9A1E;">Explore More</p>
                                        </a>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
         </div>

            <div class="website">
            <!--Start Header-->
                @include('frontend/components/aheader')
            <!--End Header-->

    <img src="mobile-assets/laboratories/web-lab-banner.png" alt="">


    <div style="padding: 40px 120px; background-color: #fffbf6;">

    <div>

        <div class="row">

            <div class="col-lg-4 mb-4">

                 <a href="{{ route('lab-architecture') }}"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                      <div class="p-3">
                        <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/architecture.png" class="img-fluid rounded"/>
                      </div>
                      <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Architecture <span style="font-weight: 600 !important;">Design Lab</span> </h5>

                        <a href="{{ route('lab-architecture') }}"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                      </div>
                  </div>
                </a>

            </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-bio-chemistry"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/biochem.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Bio Chemistry <span style="font-weight: 600 !important;">Lab</span> </h5>

                     <a href="lab-bio-chemistry"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-bioscience-research"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/bioscience.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Bio Sciences <span style="font-weight: 600 !important;">Research Lab</span> </h5>

                   <a href="lab-bioscience-research"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div>
            </a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-botany"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/botany.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Botany <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-botany"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-biotech"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/biotech.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Biotechnology <span style="font-weight: 600 !important;">Lab</span> </h5>

                     <a href="lab-biotech"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-computer"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/comp.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Computer <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-computer"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-civilengineering"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/civil.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Civil Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-civilengineering"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-chemistry"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/chemistry.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Chemistry <span style="font-weight: 600 !important;">Lab</span> </h5>

                     <a href="lab-chemistry"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-diagnostic"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/diagnostic.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Diagnostic <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-diagnostic"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-engineering_drawing"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/engineeringdrawing.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Engineering Drawing <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-engineering_drawing"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-electronic"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/electronic.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Electronic Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                     <a href="lab-electronic"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-electrical"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/electrical.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Electrical Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-electrical"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-foodteach"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/foodtech.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Foodtech <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-foodteach"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-forensic-lab"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/forensic.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Forensic Science <span style="font-weight: 600 !important;">Lab</span> </h5>


                     <a href="lab-forensic-lab"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-hotelmanagement"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/hotelmanagement.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Hotel Management <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-hotelmanagement"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-interior"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/interior.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Interior Designing <span style="font-weight: 600 !important;">Lab</span> </h5>


                   <a href="lab-interior"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-language-lab"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/language.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Language <span style="font-weight: 600 !important;">Lab</span> </h5>


                     <a href="lab-language-lab"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-mechanical"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/mechanical.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mechanical Engineering <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-mechanical"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-microbiology"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/micro.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Microbiology <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-microbiology"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-nursing"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/nursing.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Nursing <span style="font-weight: 600 !important;">Lab</span> </h5>


                     <a href="lab-nursing"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-optometry"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/opto.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Optometry <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-optometry"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-operation_theater"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/operation.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Operation Theatre <span style="font-weight: 600 !important;">Lab</span> </h5>


                   <a href="lab-operation_theater"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

            <div class="col-lg-4 mb-4">

                <a href="lab-physics"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                    <div class="p-3">
                      <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/physics.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Physics <span style="font-weight: 600 !important;">Lab</span> </h5>

                     <a href="lab-physics"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-4">

              <a href="lab-pharmacy"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/pharmacy.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Pharmacutical <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-pharmacy"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-physiotherapy"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/physiotherapy.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Physiotherapy <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-physiotherapy"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-radiography"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/radiology.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Radiology <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-radiography"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-zoology"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/zoology.png" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Zoology <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-zoology"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-ev-lab"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/ev.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">EV <span style="font-weight: 600 !important;">Lab</span> </h5>

                   <a href="lab-ev-lab"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

          <div class="col-lg-4 mb-4">

              <a href="lab-astronomy"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 380px;">
                  <div class="p-3">
                    <img style="height: 230px; width: 100%;" src="mobile-assets/laboratories/observe.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Royal <span style="font-weight: 600 !important;">Observatory</span> </h5>

                   <a href="lab-astronomy"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                  </div>
              </div></a>

          </div>

        </div>

    </div>

    </div>
            </div>
@endsection
