@extends('frontend.master')
@section('content')
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

        <!--About Section-->
            <div>
            <img src="assets/img/jobs/head2.svg" alt="">
        </div>

        <div>
            <h1 class="headd3 text-dark text-center p-4 fw-bold">Join The Assam Royal Global University, a top ranked state Private University
                located in Guwahati, Assam. You can search for academic and professional services job
                vacancies, find out how to apply and get information on the Job Description.</h1>
        </div>

        <section class="job-advertisement-section py-4">
            <div class="ad-items container">
                <!-- Main Content: QR Code and Advertisement -->
                <div class="row align-items-center">
                    <!-- QR Code Section -->
                    <div class="col-lg-6 text-center">
                        <!-- Top Text Section -->
                <div class="text-center mb-4">
                    <h1 class="headd3 fw-bold">To apply/register, click below link -</h1>
                    <a href="https://rgu.renocampus.com/activeOpenings" class="job-ad-link">https://rgu.renocampus.com/activeOpenings</a>
                    <h6 class="mt-3 para1 fw-bold text-dark">Or Scan The QR Code</h6>
                </div>
                        <img style="height: 500px;" src="assets/img/jobs/lpic.svg" alt="QR Code" class="job-ad-qr">
                    </div>

                    <div class="col-lg-1">
                        <div class="">
                            <img style="height: 680px;" src="assets/img/jobs/line.svg" alt="">
                        </div>
                    </div>

                    <!-- Advertisement Section -->
                    <div class="col-lg-5 text-center">
                        <!-- Top Text Section -->
                <div class="text-center mb-4">
                    <h1 class="headd3 fw-bold">Advertisement No.: SERB CRG -01/2024</h1>
                    <i class="fas fa-download job-ad-download-icon text-primary"></i>  <a href="assets/img/jobs/download-ad.png" download class="job-ad-link">Click to download full advertisement</a>
                </div>
                        <img style="height: 550px;" src="assets/img/jobs/rpic.svg" alt="Advertisement" class="job-ad-image">
                    </div>
                </div>


                <hr>
                <!-- Bottom Note Section -->
                <div class="text-center mt-4">
                    <p class="headd3 text-danger fw-bold ">
                        NOTE: Please note that once the applications are submitted for any vacant position listed on this page,
                        the HR Department will directly communicate with the applicant if it meets the criteria.
                    </p>
                </div>
            </div>

        </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
