@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div style="background-image: url(assets/img/bank/pattern1.svg);">

        <div style="padding-top: 50px;"
            class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
            data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
            <div class="elementor-widget-container">

                <div class="prthalign pb-3">

                    <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                        Bank & ATM Services</h1>
                </div>
            </div>
        </div>

        <div class="container elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
            data-id="cbc3c3f" data-element_type="widget" data-widget_type="go-course-item.default">
            <div class="elementor-widget-container">


                <div class="row txaa-slide-down-1">

                    <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                        <div class="kd-course-2-card bg-white"
                            style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                            <div class="main-img fix img-cover">
                                <img decoding="async" width="357" height="500" src="assets/img/bank/icici.jpg"
                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                            </div>

                            <br>

                            <div>
                                <h2 class="para1 fw-bold text-dark">ICICI Bank ATM</h2>
                                <p class="para1"
                                    style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">The ICICI
                                    Bank branch on campus provides convenient access for students and staff to withdraw
                                    money. Located on the ground floor of Block-GHI, the branch is equipped with an ICICI
                                    ATM nearby for easy cash withdrawals.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                        <div class="kd-course-2-card bg-white"
                            style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                            <div class="main-img fix img-cover">
                                <img decoding="async" width="357" height="500" src="assets/img/bank/axis.jpg"
                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                            </div>

                            <br>

                            <div>
                                <h2 class="para1 fw-bold text-dark">Axis Bank ATM</h2>
                                <p class="para1"
                                    style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">Axis Bank
                                    offers convenient cash withdrawal services for students and staff at The Assam Royal
                                    Global University. The branch is located near the main gate of the university and is
                                    equipped with an ATM for quick and easy access to funds.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                        <div class="kd-course-2-card bg-white"
                            style="border: solid 2px rgb(225, 225, 225); min-height: 560px;">
                            <div class="main-img fix img-cover">
                                <img decoding="async" width="357" height="500" src="assets/img/bank/r8-3.png"
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
                                    requests, and passbook printing. An HDFC ATM is located next to the bank. </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                        <div class="kd-course-2-card bg-white"
                            style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                            <div class="main-img fix img-cover">
                                <img fetchpriority="high" decoding="async" width="357" height="220"
                                    src="assets/img/bank/r8.png"
                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                            </div>
                            <br>

                            <div>
                                <h2 class="para1 fw-bold text-dark">PNB Bank ATM</h2>
                                <p class="para1"
                                    style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                    For the convenience of students and staff of The Assam Royal Global University a PNB ATM
                                    has been installed inside the campus. The ATM is located near the RGU main gate. The ATM
                                    provides round-the-clock banking services. The ATM is fully air conditioned and is well
                                    guarded.
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                        <div class="kd-course-2-card bg-white"
                            style="border: solid 2px rgb(225, 225, 225); min-height: 550px;">
                            <div class="main-img fix img-cover">
                                <img decoding="async" width="357" height="500" src="assets/img/bank/r8-2.png"
                                    class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image" alt="" />
                            </div>

                            <br>

                            <div>
                                <h2 class="para1 fw-bold text-dark">SBI Bank ATM</h2>
                                <p class="para1"
                                    style="font-size: 16px; color: #333; line-height: 1.8; text-align: justify;">
                                    The SBI ATM is in Block- D on the ground floor. The ATM can be used for withdrawing
                                    money, checking bank balance, changing Personal Identification Number etc. The SBI ATM
                                    provides 24*7 access. Due to the proximity of the ATM students and staff can easily
                                    access banking facilities any time they need.
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
