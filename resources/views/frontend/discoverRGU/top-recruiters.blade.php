@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 80px; position: relative;">
            <img src="mobile-assets/recruiters/mob-recruiters.svg" alt="">

            <div style="padding: 20px 20px;">
                <img style="width: 100%; padding-bottom: 50px;" src="mobile-assets/recruiters/mobile-all-logo.png" alt="Logo image">

                <div style="padding: 10px 30px; background-color: #ECA529; border-radius: 10px; border-bottom: 10px solid #27467A;">
                    <div class="row">

                        <div>
                            <h2 class="mobile-headd2 fw-bold mb-4 mt-3" style="color: #000;">Contact Details</h2>

                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="mobile-headd3 fw-bold text-dark">Ms. Pahi Bhagawati</h2>
                                    <p class="mobile-para1 fw-bold text-dark">Assistant Director, Royal Centre for Corporate
                                        Relations (RCCR)</p>
                                    <p class="mobile-para1 text-dark"><i class="fa fa-phone"></i> +91-8876938540</p>
                                    <p class="mobile-para1 text-dark"><i class="fa fa-envelope"></i> pahib@rgu.ac</p>

                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="col-lg-6">
                                    <h2 class="mobile-headd3 fw-bold text-dark">Ms. Arpita Baruah</h2>
                                    <p class="mobile-para1 text-dark fw-bold">Manager, Royal Centre for Corporate Relations
                                        (RCCR)</p>
                                    <p class="mobile-para1 text-dark"><i class="fa fa-phone"></i> +91-7002931289</p>
                                    <p class="mobile-para1 text-dark"><i class="fa fa-envelope"></i> abaruah2@rgu.ac</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
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

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <img src="mobile-assets/recruiters/web-header.png" alt="">

            <div>

                <img style="width: 100%; padding-bottom: 50px;" src="mobile-assets/recruiters/web-all-logo.svg"
                    alt="Logo image">

                <div class="container pb-4">
                    <div
                        style="padding: 30px 50px; background-color: #ECA529; border-radius: 10px; border-bottom: 10px solid #27467A;">
                        <div class="row">

                            <div>
                                <h2 class="headd2 fw-bold mb-4" style="color: #000;">Contact Details</h2>

                                <div class="row">
                                    <div class="col-lg-5">
                                        <h2 class="headd3 fw-bold text-dark">Ms. Pahi Bhagawati</h2>
                                        <p class="para1 fw-bold text-dark">Assistant Director, Royal Centre for Corporate
                                            Relations (RCCR)</p>
                                        <p class="para1 text-dark"><i class="fa fa-phone"></i> +91-8876938540</p>
                                        <p class="para1 text-dark"><i class="fa fa-envelope"></i> pahib@rgu.ac</p>

                                    </div>

                                    <div class="col-lg-1">
                                        <div style="border-left:2px solid #000;height:200px"></div>
                                    </div>



                                    <div class="col-lg-5">
                                        <h2 class="headd3 fw-bold text-dark">Ms. Arpita Baruah</h2>
                                        <p class="para1 text-dark fw-bold">Manager, Royal Centre for Corporate Relations
                                            (RCCR)</p>
                                        <p class="para1 text-dark"><i class="fa fa-phone"></i> +91-7002931289</p>
                                        <p class="para1 text-dark"><i class="fa fa-envelope"></i> abaruah2@rgu.ac</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
