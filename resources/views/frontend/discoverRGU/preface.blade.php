@extends('frontend.master')
@section('content')
    <div id="page" class="site site_wrapper">

            <div class="mobile">
                @include('frontend/components/mobileheader')
                <div style="position: relative; padding-top: 90px;">
                    <img src="mobile-assets/preface/preface-cover-mobile.jpeg" alt="">

                    <section style="background-image: url(mobile-assets/preface/bg3.png); background-size: cover;">
                        <div style="padding: 80px 30px;">

                            <a href="vision-mission">
                                <div class="card rounded d-flex flex-column position-relative"
                                    style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                    <div class="position-absolute start-50 translate-middle">
                                        <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                            <img style="width: 70px;" src="mobile-assets/preface/target-01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                        <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Vision and <span
                                                style="font-weight: 500;">Mission</span></h5>
                                    </div>
                                </div>
                            </a>

                            <div style="margin-top: 80px;">
                                <a href="recognition-accreditation">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/certificate-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Recognition and
                                                <br><span style="font-weight: 500;">Accreditation</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="leadership-chancellor">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/emerging-industries-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">World of <span
                                                    style="font-weight: 500;">Opportunities</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="facilities">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/facilities.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Facilities</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="strategic-location">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/maps-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Strategic <span
                                                    style="font-weight: 500;">Location</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="award">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/trophy-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Awards and <span
                                                    style="font-weight: 500;">Honours</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="leadership">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/team-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Leadership <span
                                                    style="font-weight: 500;">Team</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="scholarship&funding">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/donation-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Scholarship and
                                                <span style="font-weight: 500;">Funding</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="#!">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/graduate-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Alumni</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="jobs-vacancies">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/new-job-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Jobs and <span
                                                    style="font-weight: 500;">Vacancy</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="social-outreach">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/care-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Philanthropy</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="knowledge">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/book.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Knowledge <span
                                                    style="font-weight: 500;">Base</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="privacy-security">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <img style="width: 70px;" src="mobile-assets/preface/settings-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Privacy and
                                                <br><span style="font-weight: 500;">Data Protection</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="Research&publication">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <i style="color: #27467A;" class="fa-light fa-graduation-cap fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Research and
                                                <br><span style="font-weight: 500;">Publication</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div style="margin-top: 80px;">
                                <a href="association-tieup">
                                    <div class="card rounded d-flex flex-column position-relative"
                                        style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 170px;">
                                        <div class="position-absolute start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 110px; height: 110px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                                <i style="color: #27467A;" class="fa-light fa-award fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 75px;">
                                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Tie Ups and
                                                <br><span style="font-weight: 500;">Association</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </section>
                </div>
    </div>

    <div class="website">
    <div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <img src="mobile-assets/preface/preface-cover-web.png" alt="">

        <div style="padding: 130px 120px; background-image: url(mobile-assets/preface/bg3.png); background-size: cover;">

            <div class="row">


            <div class="col-lg-4 mb-3">

               <a href="vision-mission"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                    <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                        <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                            <img style="width: 100px;" src="mobile-assets/preface/target-01.png" alt="">
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                        <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Vision and <span style="font-weight: 500;">Mission</span></h5>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-3">

              <a href="recognition-accreditation"><div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                    <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                        <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                            <img style="width: 100px;" src="mobile-assets/preface/certificate-01.png" alt="">
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                        <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Recognition and <br><span style="font-weight: 500;">Accreditation</span></h5>
                    </div>
                </div></a>

            </div>

            <div class="col-lg-4 mb-3">

              <a href="leadership-chancellor">  <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                    <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                        <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                            <img style="width: 100px;" src="mobile-assets/preface/emerging-industries-01.png" alt="">
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                        <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">World of <span style="font-weight: 500;">Opportunities</span></h5>
                    </div>
                </div></a>

            </div>


            </div>

            <div class="row" style="margin-top: 110px;">


                <div class="col-lg-4 mb-3">

                   <a href="facilities"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/facilities.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Facilities</h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                  <a href="strategic-location">  <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/maps-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Strategic <span style="font-weight: 500;">Location</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                  <a href="award">  <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/trophy-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Awards and <span style="font-weight: 500;">Honors</span></h5>
                        </div>
                    </div></a>

                </div>

            </div>

            <div class="row" style="margin-top: 110px;">


                <div class="col-lg-4 mb-3">

                  <a href="leadership"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/team-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Leadership <span style="font-weight: 500;">Team</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                   <a href="scholarship&funding"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/donation-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Scholarship and <span style="font-weight: 500;">Funding</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                  <a href="#!"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/graduate-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Alumni</h5>
                        </div>
                    </div></a>

                </div>

            </div>

            <div class="row" style="margin-top: 110px;">


                <div class="col-lg-4 mb-3">

                  <a href="jobs-vacancies">  <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/new-job-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Jobs and <span style="font-weight: 500;">Vacancy</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                   <a href="social-outreach"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/care-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Philanthropy</h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                   <a href="knowledge"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/book.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Knowledge <span style="font-weight: 500;">Base</span></h5>
                        </div>
                    </div></a>

                </div>

            </div>

            <div class="row" style="margin-top: 110px;">


                <div class="col-lg-4 mb-3">

                   <a href="privacy-security"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <img style="width: 100px;" src="mobile-assets/preface/settings-01.png" alt="">
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Privacy and <br><span style="font-weight: 500;">Data Protection</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                   <a href="library-Resources"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <i style="color: #27467A;" class="fa-light fa-graduation-cap fa-4x"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Research and <br><span style="font-weight: 500;">Publication</span></h5>
                        </div>
                    </div></a>

                </div>

                <div class="col-lg-4 mb-3">

                   <a href="association-tieup"> <div class="card rounded d-flex flex-column position-relative" style="background-color: #FFF8F0; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">
                        <div class="position-absolute start-50 translate-middle" style="top: -10px;">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
                                <i style="color: #27467A;" class="fa-light fa-award fa-4x"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1 text-center" style="padding-top: 120px;">
                            <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Tie Ups and <br><span style="font-weight: 500;">Association</span></h5>
                        </div>
                    </div></a>

                </div>

            </div>

        </div>

    </div>
    </div>

    </div><!-- #page -->
@endsection
