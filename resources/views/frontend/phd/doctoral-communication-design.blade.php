@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section
            style="padding-top: 110px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme in<br><span style="color: #FF9A1E; font-weight: 500;">
                                Communication Design</span>
                        </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--About Section-->
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <section
                    style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding-top: 30px;"
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
                                            <div style="border: 2px solid #fff;"
                                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                <img decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
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
                                            <h2 class="headd1 kd-title-ani kd-split mb-4 text-center"
                                                style="color: #264273; font-weight: 700;">
                                                Ph.D. Programme in<br><span style="color: #FF9A1E; font-weight: 500;">
                                                    Communication Design</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <hr>
            </div>
            <!--End About-->


        </div>


    </div>

    <div class="container pt-4" style="text-align: justify; color: #27467A;">

        <p>
            The department  of Design offers a Ph.D. in Design for scholars dedicated to advanced doctoral research. Ph.D. candidates engage in rigorous, in-depth studies across various design disciplines, contributing to the expansion of academic knowledge. The program empowers students to investigate complex design challenges and pioneer innovative, research-driven solutions. Our instructional programs are built on a clear objective: preparing students to tackle design problems through analytical and methodical frameworks. The curriculum seamlessly integrates a diverse range of interdisciplinary subjects, including: Culture studies, aesthetics, and socio-economic factors, Human factors, cognitive psychology, and consumer behaviour, Design management and industry-standard methodologies. This holistic approach ensures that graduates are well-rounded professionals with a comprehensive understanding of how design impacts both society and global industry. A hallmark of our department is the integration of cutting-edge production and prototyping technology. By emphasizing hands-on experience with modern tools, we ensure our students are industry-ready and capable of excelling in contemporary work environments where technology is central to the creative process.The Department of Design at The Assam Royal Global University offers a diverse and robust academic portfolio. We equip students with the technical skills, theoretical knowledge, and creative vision necessary to lead the field and make meaningful contributions to the world.
        </p>

    </div>

    <div class="container">
        <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">A. Registration & Admission Fees</h3>

        <div class="table-responsive mb-3">
            <table class="table border table-responsive table-striped  vertical-scroll">

                <thead class="text-light  para1" style="font-size: 14px;">
                    <th class="text-light  font-weight-bold">SL. NO.</th>
                    <th class="text-light  font-weight-bold"></th>
                    <th class="text-light  font-weight-bold">AMOUNT (Rs)</th>
                </thead>
                <tbody class="para1">
                    <tr>
                        <td>A.</td>
                        <td>Prospectus & Form</td>
                        <td>1500.00</td>
                    </tr>
                    <tr>
                        <td>B.</td>
                        <td>Registration</td>
                        <td>10000.00</td>
                    </tr>
                    <tr>
                        <td>C.</td>
                        <td>Caution Money (Common for all streams) - Refundable</td>
                        <td>10000.00</td>
                    </tr>
                    <tr>
                        <td>D.</td>
                        <td>Yearly Pay</td>
                        <td>125000.00</td>
                    </tr>
                    <tr>
                        <td>E.</td>
                        <td>Semester Pay</td>
                        <td>64500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="https://admissions.rgu.ac/" class="text-white rounded fw-bold"
            style="background-color: #f39f21; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">Apply
            Now</a>
    </div>

    <div class="container">
        <p class="para1 text-dark pt-5" style="text-align: justify;">
            In particular, RGU doctoral programme aims to train the researchers who extend the boundaries of current
            knowledge and are also able to create new knowledge, are adept in the use of traditional methodologies and
            latest tools and build on these to develop new techniques to answer questions that transcend disciplinary
            boundaries, can communicate clearly and effectively to the expert and the public at large the insights
            gleaned from the research, can apply the skills and knowledge in practical contexts.
        </p>

        <div class="headd3 fw-bold text-dark">RGU’s APPROACH</div>

        <p class="para1 text-dark" style="text-align: justify;">
            RGU aspires to be recognized for the quality and impact of its research output on the current state of
            knowledge. Towards this goal, it will strive to provide an environment where cutting-edge research is done
            by a community of scholars where the focus is placed on conceptual clarity and the utilization and
            development of new methodologies that are employed not only to illuminate the issue under study but also in
            a wide range of contexts. Ph.D. scholars will work, through collaborations and joint projects, on real-world
            issues in close association with outside organizations/industries and apply appropriate and innovative
            methodologies to address their problems.
        </p>
        <p class="para1 text-dark" style="text-align: justify;">
            The structure of the Ph.D. programme includes a mandatory coursework and candidates are encouraged to take
            up
            a wide variety of courses to cultivate a cross-disciplinary outlook. The topic of research is expected to be
            inter-disciplinary with emphasis on practical impact that is inspired by real world problems or sponsored by
            industry. The output is expected to address a gap or add something new to the existing corpus of literature.
            A Ph.D. scholar is not only preparing to be a researcher but also a teacher as teaching is integral to
            effective learning.
        </p>
        <p class="para1 text-dark">
            With the spirit of liberal inquiry governing every aspect of academic life, accomplished faculty, emphasis
            on work-life balance, a close and supportive environment, and access to world-class facilities, being a
            research scholar at RGU will be an enriching, and productive experience.
        </p>

        <hr>
    </div>
@endsection
