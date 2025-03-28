@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative; background-image: url(mobile-assets/bank/bg.svg);">

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-3"
                style="color: #27467A; font-weight: 900;">
                Banks</h2>

            <div class="container elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
                data-id="cbc3c3f" data-element_type="widget" data-widget_type="go-course-item.default">
                <div class="elementor-widget-container">


                    <div class="row txaa-slide-down-1">

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 500px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/icici.jpg"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="mobile-para1 fw-bold text-dark">ICICI Bank ATM</h2>
                                    <p class="mobile-para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        The ICICI Bank ATM on campus provides convenient access to students and staff for
                                        easy banking services. It is located on the ground floor of the GHI Block. </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 500px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/axis.jpg"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="mobile-para1 fw-bold text-dark">Axis Bank ATM</h2>
                                    <p class="mobile-para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Axis Bank-Royal Global University Branch: Axis Bank-Royal Global University Branch
                                        is located on the Ground Floor of B Block. This modern and equipped branch offers
                                        banking services for students, staff, and the community at large, at their doorstep.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/r8-3.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>
                                <div>
                                    <h2 class="mobile-para1 fw-bold text-dark">HDFC Bank ATM</h2>
                                    <p class="mobile-para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Both students and staff can access HDFC banking facilities in Block-D on the ground
                                        floor. Services include cheque deposits, net banking, ATM access, and more. The HDFC
                                        Smart Banking Lobby offers digital account opening, address updates, cheque book
                                        requests, and passbook printing. An HDFC ATM is also available.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                                <div class="main-img fix img-cover">
                                    <img fetchpriority="high" decoding="async" width="357" height="220"
                                        src="mobile-assets/bank/r8.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>
                                <br>

                                <div>
                                    <h2 class="mobile-para1 fw-bold text-dark">PNB Bank ATM</h2>
                                    <p class="mobile-para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        This 24x7 facility ensures students and staff can smoothly conduct safe financial
                                        transactions round the clock.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/r8-2.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="mobile-para1 fw-bold text-dark">SBI Bank ATM</h2>
                                    <p class="mobile-para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Installed on the ground floor of D Block, this ATM can be used for withdrawing
                                        money, checking bank balance, changing Personal Identification Number etc. The SBI
                                        ATM provides 24*7 access. Due to the proximity of the ATM students and staff can
                                        easily access banking facilities any time.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <!--End Header-->

        <div style="background-image: url(mobile-assets/bank/bg.svg);">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-5"
                style="color: #27467A; font-weight: 900;">
                Banks</h2>

            <div class="container elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
                data-id="cbc3c3f" data-element_type="widget" data-widget_type="go-course-item.default">
                <div class="elementor-widget-container">


                    <div class="row txaa-slide-down-1">

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/icici.jpg"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="para1 fw-bold text-dark">ICICI Bank ATM</h2>
                                    <p class="para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        The ICICI Bank ATM on campus provides convenient access to students and staff for
                                        easy banking services. It is located on the ground floor of the GHI Block.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/axis.jpg"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="para1 fw-bold text-dark">Axis Bank ATM</h2>
                                    <p class="para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Axis Bank-Royal Global University Branch: Axis Bank-Royal Global University Branch
                                        is located on the Ground Floor of B Block. This modern and equipped branch offers
                                        banking services for students, staff, and the community at large, at their doorstep.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/r8-3.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>
                                <div>
                                    <h2 class="para1 fw-bold text-dark">HDFC Bank ATM</h2>
                                    <p class="para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Both students and staff can access HDFC banking facilities in Block-D on the ground
                                        floor. Services include cheque deposits, net banking, ATM access, and more. The HDFC
                                        Smart Banking Lobby offers digital account opening, address updates, cheque book
                                        requests, and passbook printing. An HDFC ATM is also available.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                                <div class="main-img fix img-cover">
                                    <img fetchpriority="high" decoding="async" width="357" height="220"
                                        src="mobile-assets/bank/r8.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>
                                <br>

                                <div>
                                    <h2 class="para1 fw-bold text-dark">PNB Bank ATM</h2>
                                    <p class="para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        This 24x7 facility ensures students and staff can smoothly conduct safe financial
                                        transactions round the clock.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                            <div class="kd-course-2-card bg-white"
                                style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                                <div class="main-img fix img-cover">
                                    <img decoding="async" width="357" height="500" src="mobile-assets/bank/r8-2.png"
                                        class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                                </div>

                                <br>

                                <div>
                                    <h2 class="para1 fw-bold text-dark">SBI Bank ATM</h2>
                                    <p class="para1"
                                        style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                        Installed on the ground floor of D Block, this ATM can be used for withdrawing
                                        money, checking bank balance, changing Personal Identification Number etc. The SBI
                                        ATM provides 24*7 access. Due to the proximity of the ATM students and staff can
                                        easily access banking facilities any time.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
