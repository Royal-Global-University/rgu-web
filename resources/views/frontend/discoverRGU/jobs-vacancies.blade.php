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

            <div class="container">
                <h1 class="headd1 text-center p-4 fw-bold" style="color: #27467A">Join The Assam Royal Global University</h1>
                <p class="text-dark">The Assam Royal Global University, one of India’s premium private universities, has been a leadership platform since
                2017, connecting industries, entrepreneurs, and youth. RGU fosters an environment where education, employment, and
                entrepreneurship thrive through collaboration with corporates, professionals, and academic institutes.</p>
                <h3 class="headd3 text-dark text-center p-4 fw-bold">Explore academic and professional vacancies, view detailed job descriptions, and learn how to apply through our portal:</h3>
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
                                <a href="https://rgu.renocampus.com/activeOpenings" class="headd3 job-ad-link text-primary fw-bold">https://rgu.renocampus.com/activeOpenings</a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <h1 class="headd3 fw-bold text-center text-danger">Or scan the QR Code below:</h1>
                            <img src="assets/img/jobs.jpeg" style="width: 400px; height:300px"/>
                        </div>

                    <hr>
                    <!-- Bottom Note Section -->
                    <div class="text-center mt-4">
                        <p class="para1 text-danger fw-bold ">
                            Disclaimer: Applications for positions listed on this page are accepted year-round. The HR Department will contact candidates when
                            relevant vacancies arise.
                        </p>
                    </div>
                </div>

            </section>
            <!--End About-->
        </div><!-- #page -->
@endsection
