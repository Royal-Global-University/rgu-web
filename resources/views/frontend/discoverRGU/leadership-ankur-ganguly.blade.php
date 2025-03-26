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
                        A Message from the Dean Academics</h1>
                    <div class="row pt-4">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7;">
                                <p class="para1" style="color: #000000;">&quot;<i>Dear Students</i>&quot;<br>
                                    At the heart of science is an essential balance between two seemingly contradictory attitudes - openness to new ideas, no matter how bizarre or counterintuitive they may be, and the most ruthless skeptical scrutiny of all ideas, old and new. This is how deep truths are winnowed from deep nonsense.” - Carl Sagan. I strive for that.<br>

                                    India today stands as world’s third largest economic power; its economy is growing at around 8%, Indian Entrepreneurs emerging as global entrepreneurs, Indians figuring increasingly in the list of the richest persons in the world, India’s knowledge power making India as a preferred destination for outsourcing knowledge services from India. India is fast emerging as a destination for world class R&D Centers and Innovation hub. This mindset is well incorporated into the mind of our students so that we can envision the signs of even a brighter tomorrow for India and its people.<br>

                                    In line, the University Grants Commission (UGC) has been constantly focusing on Learning Outcome Based Curriculum Framework (LOCF) focusing on the National Education Policy 2020, to cop up with the Global needs. Following LOCF the real learning outcomes of students are measured in an objective manner, mainly to ensure that our higher education system is more accountable and quality oriented. Also, the Choice Based Credit System (CBCS) adds the 4th dimension to academics for the students. The students can take up courses across disciplines and develop on their credits at the same time. To cater to the Global requirements, The Assam Royal Global University has taken up the initiative to implement LOCF & CBCS structures from 2022 for all students of the University in line with NEP 2020.<br><br>

                                    <b>"A desire can change nothing, a decision can change something, but a determination can change everything"</b><br><br>

                                    The Global Pandemic has given us a life lesson that as responsible global citizen you have to emerge with solutions in your respective domains with strong innovative ideas and scientific knowledge. Your commitment to become a successful citizen of the country as well as the globe, while graduating from the University by devoting to your academic journey in RGU will be fruitful and enjoyable in every aspect and the experience you gain from here and the moments you spend here will be cherished by you throughout your life. Hope you extract the best honey out of the hive…&quot;
                                </p>
                                <p>
                                    <span class="headd3" style="color: #FF9A1E; font-weight: bold;">Prof. (Dr.) Ankur Ganguly</span><br>
                                    <span style="font-weight: bold;" class="para1 text-dark">Dean Academics & Dean RSET <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/officers/details-pic3.png" alt="Prof (Dr.) Alak Kumar Buragohain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
        <!--End About-->
    </div><!-- #page -->
@endsection
