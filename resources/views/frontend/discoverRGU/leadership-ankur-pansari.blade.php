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
                    <h3 style="color: #27467a;" class="text-center pb-3">Message from Executive Vice President</h3>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7; font-size: 15px; color: #000000;">
                                <h5>Communiqué of the Executive Vice President
                                </h5>
                                <p style="font-size: 16px; color: #000000; letter-spacing: 0.5; text-align: justify;">&quot;
                                    At The Assam Royal Global University, we are dedicated to shaping the future of education through a relentless pursuit of innovation, excellence, and inclusivity. As Executive Vice President, it is my sincere aspiration to create an environment where every student, regardless of their background, is empowered to achieve their fullest potential. Our mission is to open doors to world-class education for students from across the Northeastern states of India, equipping them with the skills and knowledge they need to thrive in a fast-changing, globalized world.
                                    <br><br>

                                    We are at the forefront of educational innovation, continuously introducing cutting-edge laboratories, modern teaching practices, and dynamic learning spaces that inspire creativity and critical thinking. By recruiting the finest educators and industry leaders, we ensure that our students are not just learning but evolving alongside the best in their fields. This commitment is further strengthened by our dedication to providing scholarships for those from economically diverse backgrounds, as well as rewarding our brightest scholars, ensuring that talent and hard work are always recognized and supported.
                                    <br><br>

                                    Our global outlook remains integral to our strategy. By partnering with Centres of Excellence and leading institutions worldwide, we are creating opportunities that extend beyond borders, preparing our students to make an impact on the global stage. I personally oversee every initiative, ensuring that our growth aligns with the best interests of our students and the vision of a transformative education.
                                    <br><br>

                                    The progress of Assam, The Assam Royal Global University is rooted in perseverance, forward-thinking leadership, and a lasting dedication to upholding integrity. As we overcome challenges and seize new opportunities, we remain focused on collaboration and thoughtful decision-making. I invite you to join us in this exciting journey of shaping the future of education in Northeast India, and together, we can create a brighter tomorrow for all.
                                    <br><br>

                                </p>
                                <p>
                                    <span style="color: #FF9A1E; font-weight: bold; font-size: 30px;">Sri Ankur Pansari
                                    </span><br>
                                    <span style="font-weight: bold; font-size: 18px;" class="text-dark">Executive Vice President
                                        <br>
                                        The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img class="rounded" src="assets/img/leadership/ankur-pansari.png" alt="Sri Ankur Pansari">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End About-->
    </div><!-- #page -->
@endsection
