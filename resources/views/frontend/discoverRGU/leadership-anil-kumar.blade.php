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
                    <h3 style="color: #27467a;" class="text-center pb-3">A Message from the Pro-Chancellor</h3>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7; font-size: 15px; color: #000000;">
                                <p style="font-size: 16px; color: #000000; letter-spacing: 0.5; text-align: justify;">&quot;
                                        It’s really a moment of joy for the people of North-East to welcome RGI`s latest contribution,
                                        The Assam Royal Global University. Over the years, RGI has grown both in size and stature.
                                        Starting with Engineering and Business Schools in the year 2009, we now have 27 schools in
                                        different disciplines like Engineering, Business Management, Commerce, Architecture, Fine Arts,
                                        Fashion Designing and Technology, Applied and Pure Sciences, Information Technology, Life Sciences,
                                        Bio- Sciences, Environmental & Earth Sciences, Nursing, Communications and Media, Behavioral and
                                        Allied Sciences, Languages, Performing Arts, Humanities & Social Sciences, Law and Administration,
                                        Hotel Management & Catering Technology & Education.<br><br>

                                        In addition, a world class learning house for the kids of the region, in the name of Royal
                                        Global School, was launched by us in 2012. The vast campus encompassing all these looks like
                                        an educational hub, and we call it `Royal Knowledge Park'.<br><br>

                                        Dear Parents, this has been possible because of your love and unﬂinching support.<br><br>

                                        Imparting education is a task that God entrusts very few people with. No doubt interesting,
                                        the task is challenging too. In order to promote education, one has to have vision, patience,
                                        dedication and selﬂessness. We are blessed; things have gone our way. We want to make Royal
                                        Global University a benchmark to be reckoned with, which others will not only envy but will
                                        copy too. The exodus of our students to other parts of the country has to be curbed and the
                                        reverse has to be set on. We wait for the day when students from the rest of the country will
                                        migrate to The Assam Royal Global University for higher education. And I believe, God permitting, that day is not too far.
                                        Dear Parents, this has been possible because of your love and unﬂinching support.
                                        <br><br>
                                        All the Best!
                                </p>
                                <p>
                                    <span style="color: #FF9A1E; font-weight: bold;">Sri Anil Kumar Modi</span><br>
                                    <span style="font-weight: bold;" class="text-dark">Pro - Chancellor
                                        <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/leadership/anil-kumar-modi.png" alt="Sri Anil Kumar Modi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
