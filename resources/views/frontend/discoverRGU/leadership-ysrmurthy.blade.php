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
                        A Message from the Vice Chancellor</h1>
                    <div class="row pt-4">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7;">
                                <p class="headd3" style="font-weight: bold; color: #000000;">VC Communique</p>
                                <p class="para1" style="color: #000000;">&quot;Warm greetings to all members of the academic community of RGU. I took over as the Vice Chancellor, RGU on 5th September 2024. I am delighted to join this esteemed institution with immense potential. In my four decades of rich and varied experience as a civil servant-turned-educator, I have passionately contributed to the building of several top-class institutions.<br><br>

                                    As I begin my journey, I wish to thank our visionary Chancellor, Dr. A.K. Pansari for sowing the seed for high quality education in the North-East Region and for his painstaking efforts to transform the region.
As you can see from the ambitious vision of RGU, we need to create national and internationally integrated opportunities to produce global citizens. To achieve this vision, our mission requires us to strive for, among other things, academic excellence, community service, producing ethical leaders who will make a positive impact on our society and indeed transform the world at large.<br><br>
As an institution, we have set many ambitious goals for ourselves. They include, among others, the aspiration to emerge among the top 100 higher educational institutions in India and also produce at least 50,000 leaders in the next ten years who will transform the face of the North-East and indeed India. These goals requirescrupulous adherence to discipline, commitment to diversity, research-intensive academic culture, environmental sustainability, to mention but a few important aspects. I have taken a solemn resolve to lead, direct and manage RGU and take it to the next level.<br><br>
Each one of us is an important stakeholder. This institution is our own home. Let us see that it is not only kept clean and neat but also shines. I seek your full cooperation. The achievements of students, faculty members and administrative staff play a significant role in this regard. Let us together improve systems and processes and indeed quality assurance. I will make myself accessible to each one of you in the event you have a substantive suggestion for institutional improvement. As RGU’s reputation grows, so will the value of our degree and indeed placement opportunities. Let us together build a top-class institution.&quot;
                                </p>
                                <p>
                                    <span class="headd3" style="color: #FF9A1E; font-weight: bold;">Prof. (Dr.) Y.S.R. Murthy</span><br>
                                    <span  class="text-dark para1">Vice Chancellor <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/officers/details-pic1.png" alt="Prof. (Dr.) Y.S.R. Murthy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
