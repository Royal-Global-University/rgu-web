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
       <div style="background-image: url(mobile-assets/facilities/bg.svg); background-size: cover; position: relative; padding-top: 80px;">
        <img src="mobile-assets/facilities/mobile-facilities.png" alt="">

        <div style="padding: 20px 30px;">
            <div class="row">

                <div class="col-lg-12 mb-4">

                    <a href="facilities-auditorium.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Auditorium.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Auditorium</h5>

                                <a href="facilities-auditorium.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="bank.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/BankingServices.webp"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Banking <span style="font-weight: 600 !important;">Services</span> </h5>

                                <a href="bank.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-classroom.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/ClassroomStudio.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Classrooms <span style="font-weight: 600 !important;">and Studios</span> </h5>

                                <a href="facilities-classroom.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="lab-diagnostic.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/DignosticCenter.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Diagnostic <span style="font-weight: 600 !important;">Centre</span> </h5>

                                <a href="lab-diagnostic.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-fineart.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/FineArtsStudio.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Fine Arts <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-fineart.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-fashion-studio.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/FashionStudio.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Fashion <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-fashion-studio.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="campus-life-games-sports.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/games.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Games <span style="font-weight: 600 !important;">And Sports</span> </h5>

                                <a href="campus-life-games-sports.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="hangout.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Hangouts.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Hangout</h5>

                                <a href="hangout.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-incubation.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/IncubationCenter.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Incubation <span style="font-weight: 600 !important;">Centre</span> </h5>

                                <a href="facilities-incubation.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="laboratories.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Laboratories.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Laboratories</h5>

                                <a href="laboratories.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="Library-Resources.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Library.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Library</h5>

                                <a href="Library-Resources.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-legal-aid.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/LegalAid.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Legal <span style="font-weight: 600 !important;">Aid</span> </h5>

                                <a href="facilities-legal-aid.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="Medical_Facility.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/MedicalFacility.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Medical <span style="font-weight: 600 !important;">Facility</span> </h5>

                                <a href="Medical_Facility.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-moot-court.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/MootCourt.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Moot <span style="font-weight: 600 !important;">Court</span> </h5>


                                <a href="facilities-moot-court.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-mass-com.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/MassComStudio-07.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Mass Comm <span style="font-weight: 600 !important;">Studio</span> </h5>

                                <a href="facilities-mass-com.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-royal-boutique.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/TheRoyalBoutique.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Royal <span style="font-weight: 600 !important;">Boutique</span> </h5>


                                <a href="facilities-royal-boutique.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="salon-new.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Salon.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Salon</h5>


                                <a href="salon-new.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="Stationary_Store.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/StationaryStore.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Stationary <span style="font-weight: 600 !important;">Store</span> </h5>

                                <a href="Stationary_Store.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="Student_Gallery.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/StudentGallery.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Student <span style="font-weight: 600 !important;">Gallery</span> </h5>


                                <a href="Student_Gallery.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-security.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Security.JPG"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A; font-size: 28px !important;"
                                    class="card-title mobile-headd2 pb-2">Security <span
                                        style="font-weight: 600 !important;">and Surveillance</span> </h5>


                                <a href="facilities-security.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-seminar-hall.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/SeminarHalls.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Seminar <span style="font-weight: 600 !important;">Halls</span> </h5>

                                <a href="facilities-seminar-hall.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-student-lounge.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/StudentLounge.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Student <span style="font-weight: 600 !important;">Lounge</span> </h5>


                                <a href="facilities-student-lounge.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-transportation.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/Transportation.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    Transportation</h5>


                                <a href="facilities-transportation.html">
                                    <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                        Explore More</p>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-12 mb-4">

                    <a href="facilities-museum.html">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                            <div class="p-3">
                                <img style="height: 180px; width: 100%;" src="mobile-assets/facilities/UniversityMuseum.jpg"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 900 !important; color: #27467A;" class="card-title mobile-headd2 pb-2">
                                    University <span style="font-weight: 600 !important;">Museum</span> </h5>

                                <a href="facilities-museum.html">
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


    <div class="website" style="background-image: url(mobile-assets/facilities/bg.svg); background-size: cover;">
    <div id="page" class="site site_wrapper">
        @include('frontend/components/aheader')

    <!--End Header-->

    <img src="mobile-assets/facilities/web-facilities.png" alt="">

    <div class="row" style="padding: 50px 80px;">

      <div class="col-lg-4 mb-4">

           <a href="facilities-auditorium.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                <div class="p-3">
                  <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Auditorium.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Auditorium</h5>

                  <a href="facilities-auditorium.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                </div>
            </div>
          </a>

      </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-bank.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/BankingServices.webp" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Banking <span style="font-weight: 600 !important;">Services</span> </h5>

               <a href="facilities-bank.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div>
        </a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-classroom.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/ClassroomStudio.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h6 style=" font-weight: 800; color: #27467A; font-size: 32px;" class="card-title headd2 pb-2">Classrooms <span style="font-weight: 600 !important;">and Studios</span> </h6>

             <a href="facilities-classroom.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div>
      </a>

    </div>

    <div class="col-lg-4 mb-4">

        <a href="facilties-diagnostic_lab.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/DignosticCenter.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Diagnostic <span style="font-weight: 600 !important;">Centre</span> </h5>

             <a href="facilties-diagnostic_lab.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-fineart.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/FineArtsStudio.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Fine Arts <span style="font-weight: 600 !important;">Studio</span> </h5>

               <a href="facilities-fineart.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-fashion-studio.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/FashionStudio.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Fashion <span style="font-weight: 600 !important;">Studio</span> </h5>

             <a href="facilities-fashion-studio.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="campus-life-games-sports.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/games.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Games <span style="font-weight: 600 !important;">And Sports</span> </h5>

             <a href="campus-life-games-sports.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="hangout.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Hangouts.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Hangout</h5>

               <a href="hangout.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-incubation.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/IncubationCenter.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Incubation <span style="font-weight: 600 !important;">Centre</span> </h5>

             <a href="facilities-incubation.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="laboratories.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Laboratories.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Laboratories</h5>

             <a href="laboratories.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-library.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Library.png" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Library</h5>

               <a href="facilities-library.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-legal-aid.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/LegalAid.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Legal <span style="font-weight: 600 !important;">Aid</span> </h5>

             <a href="facilities-legal-aid.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="Medical_Facility.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/MedicalFacility.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Medical <span style="font-weight: 600 !important;">Facility</span> </h5>

             <a href="Medical_Facility.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-moot-court.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/MootCourt.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Moot <span style="font-weight: 600 !important;">Court</span> </h5>


               <a href="facilities-moot-court.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-mass-com.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/MassComStudio-07.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mass Comm <span style="font-weight: 600 !important;">Studio</span> </h5>

             <a href="facilities-mass-com.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-royal-boutique.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/TheRoyalBoutique.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Royal <span style="font-weight: 600 !important;">Boutique</span> </h5>


             <a href="facilities-royal-boutique.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-salon.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Salon.JPG" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Salon</h5>


               <a href="facilities-salon.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-Stationary-Store.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/StationaryStore.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Stationary <span style="font-weight: 600 !important;">Store</span> </h5>

             <a href="facilities-Stationary-Store.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-student-gallery.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/StudentGallery.JPG" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Student <span style="font-weight: 600 !important;">Gallery</span> </h5>


             <a href="facilities-student-gallery.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-security.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Security.JPG" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A; font-size: 28px !important;" class="card-title headd2 pb-2">Security <span style="font-weight: 600 !important;">and Surveillance</span> </h5>


               <a href="facilities-security.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-seminar-hall.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/SeminarHalls.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Seminar <span style="font-weight: 600 !important;">Halls</span> </h5>

             <a href="facilities-seminar-hall.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-student-lounge.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/StudentLounge.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Student <span style="font-weight: 600 !important;">Lounge</span> </h5>


             <a href="facilities-student-lounge.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

      <div class="col-lg-4 mb-4">

          <a href="facilities-transportation.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
              <div class="p-3">
                <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/Transportation.jpg" class="img-fluid rounded"/>
              </div>
              <div class="card-body d-flex flex-column flex-grow-1">
                <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Transportation</h5>


               <a href="facilities-transportation.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
              </div>
          </div></a>

      </div>

      <div class="col-lg-4 mb-4">

        <a href="facilities-museum.html"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
            <div class="p-3">
              <img style="height: 230px; width: 100%;" src="mobile-assets/facilities/UniversityMuseum.jpg" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">University <span style="font-weight: 600 !important;">Museum</span> </h5>

             <a href="facilities-museum.html"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
            </div>
        </div></a>

    </div>

    </div>

    </div>
    </div>
@endsection
