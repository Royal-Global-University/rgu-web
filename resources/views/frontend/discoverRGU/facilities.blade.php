@extends('frontend.master')
@push('styles')
        <style>
             .card {
    position: relative;
    background: white;
    border-radius: 10px;

    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    }

    .card::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 40px; /* Adjust size as needed */
    height: 40px;
    background: #E8A015; /* Yellow color */
    clip-path: polygon(100% 0, 0 100%, 100% 100%);
    }
        </style>
@endpush
@section('content')
    <div class="mobile" >
        @include('frontend/components/mobileheader')
       <div style="background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/bg.svg); background-size: cover; position: relative; padding-top: 80px;">
        <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/mob-facilities.svg" alt="">

        <div style="padding: 20px 30px;">
            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="facilities-auditorium">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Auditorium.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Auditorium</h5>

                                <a href="facilities-auditorium">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="banking-services">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/BankingServices.webp"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Banking <span style="font-weight: 600 !important;">Services</span> </h5>

                                <a href="banking-services">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-classroom">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/ClassroomStudio.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Classrooms <span style="font-weight: 600 !important;">and Studios</span> </h5>

                                <a href="facilities-classroom">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-diagnostic">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/DignosticCenter.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Diagnostic <span style="font-weight: 600 !important;">Centre</span> </h5>

                                <a href="facilities-diagnostic">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-fineart">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/FineArtsStudio.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Fine Arts <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-fineart">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-fashion-studio">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/FashionStudio.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Fashion <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-fashion-studio">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="games&sports">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/games.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Games <span style="font-weight: 600 !important;">And Sports</span> </h5>

                                <a href="games&sports">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="hangout">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Hangouts.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Hangout</h5>

                                <a href="hangout">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-incubation">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/IncubationCenter.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Incubation <span style="font-weight: 600 !important;">Centre</span> </h5>

                                <a href="facilities-incubation">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="laboratories">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Laboratories.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Laboratories</h5>

                                <a href="laboratories">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="library-Resources">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Library.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Library</h5>

                                <a href="library-Resources">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-legal-aid">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/LegalAid.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Legal <span style="font-weight: 600 !important;">Aid</span> </h5>

                                <a href="facilities-legal-aid">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="medical-facility">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MedicalFacility.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Medical <span style="font-weight: 600 !important;">Facility</span> </h5>

                                <a href="medical-facility">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-moot-court">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MootCourt.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Moot <span style="font-weight: 600 !important;">Court</span> </h5>


                                <a href="facilities-moot-court">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-mass-com">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MassComStudio-07.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Mass Comm <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-mass-com">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-royal-boutique">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/TheRoyalBoutique.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Royal <span style="font-weight: 600 !important;">Boutique</span> </h5>


                                <a href="facilities-royal-boutique">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="salon-new">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Salon.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Salon</h5>


                                <a href="salon-new">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="stationary-store">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StationaryStore.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Stationary <span style="font-weight: 600 !important;">Store</span> </h5>

                                <a href="stationary-store">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="student-gallery">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StudentGallery.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Student <span style="font-weight: 600 !important;">Gallery</span> </h5>


                                <a href="student-gallery">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-security">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Security.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A; font-size: 28px !important;"
                                    class="card-title mobile-headd2 pb-2">Security <span
                                        style="font-weight: 600 !important;">and Surveillance</span> </h5>


                                <a href="facilities-security">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-seminar-hall">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/SeminarHalls.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Seminar <span style="font-weight: 600 !important;">Halls</span> </h5>

                                <a href="facilities-seminar-hall">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-student-lounge">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StudentLounge.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Student <span style="font-weight: 600 !important;">Lounge</span> </h5>


                                <a href="facilities-student-lounge">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-transportation">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Transportation.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Transportation</h5>


                                <a href="facilities-transportation">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-museum">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/UniversityMuseum.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    University <span style="font-weight: 600 !important;">Museum</span> </h5>

                                <a href="facilities-museum">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
       </div>
    </div>


    <div class="website" style="background-image: url(https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/bg.svg); background-size: cover;">
    <div id="page" class="site site_wrapper">
        @include('frontend/components/aheader')

    <!--End Header-->

    <img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/web-facilities.svg" alt="">

    <div class="row" style="padding: 50px 80px;">

      <div class="col-lg-4 mb-4">

           <a href="facilities-auditorium"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                <div class="p-3">
                  <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Auditorium.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Auditorium</h5>

                  <a href="facilities-auditorium"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                </div>
            </div>
          </a>

      </div>

      <div class="col-lg-4 mb-4">

          <a href="banking-services"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/BankingServices.webp" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Banking <span style="font-weight: 600 !important;">Services</span> </h5>

               <a href="banking-services"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div>
        </a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-classroom"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/ClassroomStudio.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h6 style=" font-weight: 800; color: #27467A; font-size: 32px;" class="card-title headd2 pb-2">Classrooms <span style="font-weight: 600 !important;">and Studios</span> </h6>

             <a href="facilities-classroom"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div>
      </a>

    </div>

    <div class="col-lg-4 mb-4">

        <a href="facilities-diagnostic"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/DignosticCenter.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Diagnostic <span style="font-weight: 600 !important;">Centre</span> </h5>

             <a href="facilities-diagnostic"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-fineart"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/FineArtsStudio.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Fine Arts <span style="font-weight: 600 !important;">Studio</span> </h5>

               <a href="facilities-fineart"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-fashion-studio"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/FashionStudio.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Fashion <span style="font-weight: 600 !important;">Studio</span> </h5>

             <a href="facilities-fashion-studio"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="games&sports"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/games.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Games <span style="font-weight: 600 !important;">And Sports</span> </h5>

             <a href="games&sports"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="hangout"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Hangouts.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Hangout</h5>

               <a href="hangout"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-incubation"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/IncubationCenter.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Incubation <span style="font-weight: 600 !important;">Centre</span> </h5>

             <a href="facilities-incubation"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="laboratories"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Laboratories.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Laboratories</h5>

             <a href="laboratories"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="library-Resources"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Library.png" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Library</h5>

               <a href="library-Resources"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-legal-aid"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/LegalAid.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Legal <span style="font-weight: 600 !important;">Aid</span> </h5>

             <a href="facilities-legal-aid"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="medical-facility"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MedicalFacility.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Medical <span style="font-weight: 600 !important;">Facility</span> </h5>

             <a href="medical-facility"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-moot-court"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MootCourt.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Moot <span style="font-weight: 600 !important;">Court</span> </h5>


               <a href="facilities-moot-court"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-mass-com"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/MassComStudio-07.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mass Comm <span style="font-weight: 600 !important;">Studio</span> </h5>

             <a href="facilities-mass-com"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-royal-boutique"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/TheRoyalBoutique.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Royal <span style="font-weight: 600 !important;">Boutique</span> </h5>


             <a href="facilities-royal-boutique"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="salon"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Salon.JPG" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Salon</h5>


               <a href="salon"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="stationary-store"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StationaryStore.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Stationary <span style="font-weight: 600 !important;">Store</span> </h5>

             <a href="stationary-store"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="student-gallery"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StudentGallery.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Student <span style="font-weight: 600 !important;">Gallery</span> </h5>


             <a href="student-gallery"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-security"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Security.JPG" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A; font-size: 28px !important;" class="card-title headd2 pb-2">Security <span style="font-weight: 600 !important;">and Surveillance</span> </h5>


               <a href="facilities-security"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-seminar-hall"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/SeminarHalls.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Seminar <span style="font-weight: 600 !important;">Halls</span> </h5>

             <a href="facilities-seminar-hall"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-student-lounge"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/StudentLounge.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Student <span style="font-weight: 600 !important;">Lounge</span> </h5>


             <a href="facilities-student-lounge"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-transportation"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/Transportation.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Transportation</h5>


               <a href="facilities-transportation"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-museum"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/facilities/UniversityMuseum.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">University <span style="font-weight: 600 !important;">Museum</span> </h5>

             <a href="facilities-museum"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

    </div>

    </div>
    </div>
@endsection
