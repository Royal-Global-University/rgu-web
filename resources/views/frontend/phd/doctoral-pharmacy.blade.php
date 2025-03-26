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
                                            Pharmacy</h1>
                                        <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                            <p>
                                                Ph.D. in Pharmacy is an intensive and challenging program that provides students
                                                with the skills and knowledge necessary to become leaders in the field of
                                                pharmacy research. Some areas of research that students in a Ph.D. in Pharmacy
                                                program may focus on include drug discovery and development, pharmacokinetics,
                                                pharmacodynamics, toxicology, and drug delivery systems. A Ph.D. in Pharmacy is
                                                an advanced degree program that prepares students to conduct original research
                                                and make contributions to the field of pharmacy. It develops deep and broad
                                                understanding of fundamentals and state of the art of knowledge in the chosen
                                                field through courses and self-study, develop ability and skills to carry out
                                                independent research and development to face the challenges posed to mankind on
                                                specific problems.
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

        <div style="padding: 40px 60px; text-align: justify;">

            <div class="headd2 fw-bold text-dark pt-4 kd-title-ani kd-split-text">Ph.D. Guides and Research Interests</div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-pharmacy/1.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Bipul Nath</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Novel Drug Delivery technologies, Targeted Drug Delivery, Anti-diabetic products, Polyherbal
                            formulations, Extended-release solid dosage forms, Pharmacological evaluation of herbal extracts
                            using animal models.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-pharmacy/2.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. (Dr.) Atanu Bhattacharjee</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Phytochemistry and neuropharmacology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-pharmacy/3.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Pranabesh Sikdar</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="para1 text-dark">
                            Natural Chemistry especially in marine algae and Synthesis of compounds and their biological
                            screening. </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-pharmacy/4.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Prof. Prithiviraj Chakraborty</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="text-dark para1">Drug Delivery, Polymer Sciences, Nanotechnology, Statistical Optimization.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="row p-3">
                    <div class="col-lg-2">
                        <img class="rounded shadow-sm border" src="assets/img/all-phd/doctoral-pharmacy/5.jpeg" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="headd3 fw-bold text-dark">Dr. Debrupa D. Chakraborty</h2>
                        <p class="para1 text-dark">Ph.D.</p>

                        <h2 class="para1 fw-bold text-dark ">Research Interest</h2>
                        <p class="text-dark para1">Nanotechnology, Phytochemistry, Synthetic Chemistry, Analytical Chemistry.
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
