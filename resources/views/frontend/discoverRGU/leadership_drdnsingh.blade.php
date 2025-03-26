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
                    <h1 class="headd2 elementor-gt-heading kd-section-title-1 kd-title-ani kd-split-text text-center">
                        A Message from the Registrar</h1>
                    <div class="row pt-4">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7;">
                                <p class="headd4" style="font-weight: bold; color: #000000;">Registrar Communique</p>
                                <p class="para1" style="color: #000000;">&quot;Dr. D.N. Singh has 21 years of experience in university academics and academic administration domain. He obtained his Ph.D. from Sikkim Professional University. He also holds an M.Phil., MA in Economics and MBA. He has worked as the founding Registrar and Controller of Examinations for several reputed universities including Manipal University, Symbiosis University and Amity University.<br><br>

                                    It is pertinent for every student to grow and develop as a competent professional whereby domain knowledge, appropriate skill sets and abilities of performing a job is very essential. At The Assam Royal Global University, the teaching learning methodology ensures that our students develop as future leaders to accept challenges in all spheres of life. The academic environment prevailing at the University provides an excellent opportunity for every student to unfold their talents, which are further nurtured to mature their capabilities so that they can contribute in a noteworthy manner towards the growth of the society and nation. He is a firm believer of providing quality education, enabling students with confidence and conviction through sustainable teaching learning system thus providing the required ambience in the university to inculcate excellence in profession.&quot;<br><br>
                                </p>
                                <p>
                                    <span class="headd3" style="color: #FF9A1E; font-weight: bold;">Dr. D.N. Singh</span><br>
                                    <span style="font-weight: bold;" class="para1 text-dark">Registrar <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/officers/details-pic2.png" alt="Prof (Dr.) Alak Kumar Buragohain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--End About-->
    </div><!-- #page -->
@endsection
