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
    <div>
        <img src="assets/img/NAAC/naac.svg" alt="">
    </div>

    <div class="container-fluid" style="padding: 0px 80px;">

        <hr>

        <div class="headd2 text-dark fw-bold pt-2" style="line-height: 1.3;">Reports
        </div>
        <div class="main-container container">
            <section class="button-container">
                <div class="button-row">
                    <a href="assets/img/naac-docs/Self Study Report.pdf" target="_blank" class="button para1">
                        <i class="fa fa-download p-2"></i>Self Study Report
                    </a>

                    <a href="assets/img/naac-docs/IIQA+Report_RGU.pdf" target="_blank" class="button para1">
                        <i class="fa fa-download p-2"></i>Institutional Information for Quality Assessment (IIQA) Report
                    </a>
                </div>
            </section>
        </div>

        <hr>

        <div class="headd2 text-dark fw-bold pt-2" style="line-height: 1.3;">Criterion
        </div>

        <div class="container mt-4 mb-5"
            style="border: 2px solid #9999993b; padding: 30px; border-radius: 10px; background-color: #f0f8ff;">
            <div style="display: flex; justify-content: space-around; align-items: center; padding: 30px 10px;">
                <a href="iqac-report-naac-c1.html">
                    <img src="assets/img/NAAC/criterion1.svg" alt="Image 1" style="width: 250px; height: auto;">
                </a>
                <a href="iqac-report-naac-c2.html">
                    <img src="assets/img/NAAC/criterion2.svg" alt="Image 2" style="width: 250px; height: auto;">
                </a>
                <a href="iqac-report-naac-c3.html">
                    <img src="assets/img/NAAC/criterion3.svg" alt="Image 3" style="width: 250px; height: auto;">
                </a>
                <a href="iqac-report-naac-c4.html">
                    <img src="assets/img/NAAC/criterion4.svg" alt="Image 4" style="width: 250px; height: auto;">
                </a>
            </div>
            <div style="display: flex; justify-content: space-around; align-items: center; padding: 30px 10px;">
                <a href="iqac-report-naac-c5.html">
                    <img src="assets/img/NAAC/criterion5.svg" alt="Image 5" style="width: 250px; height: auto;">
                </a>
                <a href="iqac-report-naac-c6.html">
                    <img src="assets/img/NAAC/criterion6.svg" alt="Image 6" style="width: 250px; height: auto;">
                </a>
                <a href="iqac-report-naac-c7.html">
                    <img src="assets/img/NAAC/criterion7.svg" alt="Image 7" style="width: 250px; height: auto;">
                </a>
            </div>

        </div>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
