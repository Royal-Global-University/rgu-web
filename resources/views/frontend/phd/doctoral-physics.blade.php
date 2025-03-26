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
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section
                style="background-image: url(assets/img/all-phd/1main-doctoral-programme/background.svg); padding-top: 30px;"
                class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f481aaf" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                        data-id="968af55" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                <div class="elementor-widget-container">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                            <img decoding="async" src="assets/img/all-phd/1main-doctoral-programme/headimg.jpeg"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111"
                        data-id="9b49111" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="prthalign">
                                        <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                            Physics</h1>
                                        <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                            <p>
                                                A Ph.D. in Physics is a prestigious and intellectually demanding program that
                                                offers aspiring physicists the opportunity to explore the fundamental principles
                                                governing the universe.
                                            </p>
                                            <p>
                                                Ph.D. candidates delve into advanced topics within physics, engaging in original
                                                research and experimentation. They work closely with experienced faculty members
                                                and researchers to unravel complex phenomena, develop new theories, or
                                                contribute to ongoing scientific inquiries. The program emphasizes critical
                                                thinking, problem-solving, and a deep understanding of physics principles.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
        </div>

        <div style="padding: 40px 60px;">

            <p class="para1 text-dark" style="text-align: justify;">
                The culmination of the Ph.D. is a comprehensive thesis, presenting the candidate's original research findings.
                Graduates often pursue careers in academia, research institutions, government laboratories, and the private
                sector, where their expertise contributes to advancements in fields like astrophysics, condensed matter physics,
                particle physics, and more. A Ph.D. in Physics opens doors to a world of discovery and innovation, shaping the
                future of science and technology.
            </p>

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="row d-flex"> <!-- Add d-flex here -->
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/1.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Devika Phukan</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Optical Communication, Photonics.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/2.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Sujata Deb</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Materials Science And Nanotechnology.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/3.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Sankar Barman</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Semiconductor And Its Application; Renewable Energy System Modelling And Product Development.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/4.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Bornali Chetia</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Atmospheric And Space Physics.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/5.jpg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Gitanjal Deka</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Optical Microscopy, Imaging and Nanoparticle Snthesis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/6.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Maidul Islam</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Terahertz Photonics.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex"> <!-- Add d-flex to columns -->
                    <div class="card mt-4 shadow-sm p-3 flex-fill"> <!-- Add flex-fill to cards -->
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-physics/7.jpeg" alt="">
                        <h2 class="pt-2 headd3 fw-bold text-dark">Dr. Sanchita Roy</h2>
                        <p class="para1 text-dark">Ph.D.</p>
                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Optoelectronics And Photonics, Laser Physics, Nanoscience And Nanotechnology.
                        </p>
                    </div>
                </div>

            </div>



            <div class="headd2 fw-bold text-dark pt-5 kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            <div class="main-container" style="margin: 20px 0px 30px 0px;">
                <section class="button-container">
                    <div class="button-row">
                        <a href="ARCHITECTURE.html" class="button para1">Architecture</a>
                        <a href="BIO_CHEMISTRY.html" class="button para1">Bio-Chemistry</a>
                        <a href="BIO_TECHNOLOGY.html" class="button para1">Bio-Technology</a>
                        <a href="BOTANY.html" class="button para1">Botany</a>
                        <a href="CHEMISTRY.html" class="button para1">Chemistry</a>
                        <a href="#" class="button para1">Commerce</a>
                        <a href="COMPUTER-SCIENCE.html" class="button para1">Computer Science <br> & Engineering</a>
                        <a href="CIVIL-ENGINEERING.html" class="button para1">Civil Engineering</a>
                    </div>
                    <div class="button-row">
                        <a href="DESIGN.html" class="button para1">Design</a>
                        <a href="ECONOMICS.html" class="button para1">Economics</a>
                        <a href="ENGLISH.html" class="button para1">English</a>
                        <a href="ENVIRONMENTAL.html" class="button para1">Environmental Science</a>
                        <a href="FINE_&_ART.html" class="button para1">Fine Arts</a>
                        <a href="GEOGRAPHY.html" class="button para1">Geography</a>
                        <a href="GEOLOGY.html" class="button para1">Geology</a>
                        <a href="HISTORY.html" class="button para1">History</a>
                    </div>
                    <div class="button-row">
                        <a href="#" class="button para1">Computer Technology & IT</a>
                        <a href="JOURNALISM.html" class="button para1">Journalism & Mass Comm</a>
                        <a href="LIBRARY-SCIENCE.html" class="button para1">Library Science</a>
                        <a href="LAW.html" class="button para1">Law</a>
                        <a href="MANAGEMENT.html" class="button para1">Management</a>
                        <a href="MICROBIOLOGY.html" class="button para1">Microbiology</a>
                        <a href="PHARMACY.html" class="button para1">Pharmacy</a>
                        <a href="PHYSICS.html" class="button para1">Physics</a>
                    </div>
                    <div class="button-row">
                        <a href="POLITICAL-SCIENCE.html" class="button para1">Political Science</a>
                        <a href="PSYCHOLOGY.html" class="button para1">Psychology</a>
                        <a href="PUBLIC-ADMINISTRATION.html" class="button para1">Public Administration</a>
                        <a href="SOCIAL-WORK.html" class="button para1">Social Work</a>
                        <a href="SOCIOLOGY.html" class="button para1">Sociology</a>
                        <a href="TRAVEL.html" class="button para1">Travel & Tourism Management</a>
                        <a href="ZOOLOGY.html" class="button para1">Zoology</a>
                    </div>
                </section>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
