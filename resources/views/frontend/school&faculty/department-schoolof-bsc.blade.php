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

                <!-- floating button  -->
                <div>
                    <a href="https://admissions.rgu.ac/" style="
                                                                                                                    position: fixed;
                                                                                                                    bottom: 35px;
                                                                                                                    right: 50px;
                                                                                                                    background-color: #ef991f;
                                                                                                                    color: #fff;
                                                                                                                    padding: 12px 20px;
                                                                                                                    font-size: 18px;
                                                                                                                    font-weight: bold;
                                                                                                                    text-decoration: none;
                                                                                                                    border-radius: 20px;
                                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                    z-index: 1000;
                                                                                                                    overflow: hidden;
                                                                                                                    animation: pulse 2s infinite;
                                                                                                                    ">
                        <span style="
                                                                                                                    position: absolute;
                                                                                                                    top: 0;
                                                                                                                    left: -75%;
                                                                                                                    width: 50%;
                                                                                                                    height: 100%;
                                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                    transform: skewX(-25deg);
                                                                                                                    animation: shine 2s infinite;
                                                                                                                    "></span>
                        Admission Open - Apply Now
                    </a>
                    <style>
                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }

                            50% {
                                transform: scale(1.05);
                                box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                            }

                            100% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }
                        }

                        @keyframes shine {
                            0% {
                                left: -75%;
                            }

                            100% {
                                left: 125%;
                            }
                        }
                    </style>
                </div>
                <!-- floating button  -->

        <!--About Section-->
        <div class="pt-4">
            <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text text-center">
                Royal School of Bio-Sciences (RSBSC)</h1><br>
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <a href="Department-Biotechnology">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-dna"></i>
                            </div>
                            <h3 class="heading">Department of Bio-Technology</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Department-Microbiology">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-bacterium"></i>
                            </div>
                            <h3 class="heading">Department of Microbiology <br><br></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Department-Food-Technology">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3 class="heading">Department of Food Technology</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
