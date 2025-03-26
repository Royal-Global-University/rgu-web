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
             <section>
        <div style="background-color: #E2EAF7;">
            <div class="container-fluid">
                <div class="p-4">
                    <h3 style="color: #27467a;" class="text-center pb-3">A Message from the Chancellor</h3>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #fff;">
                                <p style="font-weight: bold; color: #000000; text-align: justify;">Welcome to the world of opportunities</p>
                                <p style="font-size: 18px; color: #000000; text-align: justify;">&quot;<i>Dear Parents and beloved
                                        Students,</i>&quot;<br>
                                    It's my pleasure to share my thoughts with you.<br>
                                    From Galileo, Einstein, to Steve Jobs, men of merit and effort have harped on
                                    inventions and creations
                                    out of inherent urge that drives one to the goal. The Assam Royal Global University has been
                                    the outcome of this urge to which
                                    we are responding so as to bring to the North-East the best academic facilities
                                    possible.<br><br>

                                    I admit, you have been my strength and guide in this endeavor. Courtesy your
                                    support, encouragement & participation,
                                    Royal Knowledge Park, our campus at Betkuchi, has been growing and adding new
                                    feathers to its cap every year since
                                    its inception. It now boasts of having 27 schools offering 130+ UG, PG & Diploma
                                    courses and specialization in
                                    Engineering, Business Management, Commerce, Architecture, Design, Planning, Fashion,
                                    Fine Arts, Pure Sciences,
                                    Information Technology, Life Sciences, Bio-Sciences, Environmental & Earth Sciences,
                                    Communications & Media,
                                    Behavioral & Allied Sciences, Languages, Humanities and Social Sciences, Liberal
                                    Arts, Library Sciences, Law and
                                    Administration, Hotel Management, Travel & Tourism Management, Education, Pharmacy,
                                    Nursing, Medical & Allied
                                    Sciences.<br><br>
                                    And to complete the circle of modern education, we have Royal Global School (RGS)
                                    that promises everything in
                                    primary and secondary levels of education from the tiny-tots to the adolescents. A
                                    child joining RGS at the age of
                                    four, can stay at Royal Knowledge Park for eighteen to twenty five years and come
                                    out with a promising career in
                                    Bachelor’s, Master’s, and Doctoral Degree programs. That’s a complete circle; from
                                    Kindergarten (KG) to
                                    Investigative Research (Ph.D.).<br><br>
                                    We pledge to play our role, with you by our side.&quot;
                                </p>
                                <p>
                                    <span style="color: #FF9A1E; font-weight: bold;">Dr. Ashok Kumar Pansari</span><br>
                                    <span style="font-weight: bold;" class="text-dark">Chancellor <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/ashok-pansari.png" alt="Sri Ashok Kumar Pansari">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
