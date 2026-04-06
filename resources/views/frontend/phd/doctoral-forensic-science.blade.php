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
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Forensic Science</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p class="mobile-para1 pt-5" style="color: #264273; text-align: justify;">
                            The Department of Forensic Science at The Assam Royal Global University is dedicated to
                            advancing interdisciplinary research and academic excellence in the application of scientific
                            principles to criminal investigation, wildlife protection, and justice delivery. The department
                            offers a dynamic doctoral research environment encompassing core domains such as forensic
                            biology, serology, toxicology, forensic chemistry, digital forensics, forensic anthropology, and
                            wildlife forensics, along with emerging areas including computational forensics and molecular
                            modeling.
                        </p>
                        <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify;">
                            The Ph.D. program is structured to promote high-quality, impactful research addressing
                            contemporary challenges in both human and environmental forensic investigations. Special
                            emphasis is placed on advanced research areas such as post-mortem interval estimation,
                            biomolecular degradation, forensic genomics, and the application of bioinformatics and molecular
                            dynamics simulations. In addition, the department actively encourages research in wildlife
                            forensics, focusing on species identification, illegal wildlife trade investigation,
                            biodiversity conservation, and the application of DNA-based techniques to combat wildlife crime.
                        </p>
                        <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify;">
                            Supported by modern laboratory infrastructure and guided by experienced faculty members with
                            diverse research expertise, the department ensures strong integration of theoretical knowledge
                            with practical and analytical skills. The doctoral program fosters collaborative research,
                            encourages publication in peer-reviewed journals, and promotes participation in national and
                            international scientific forums.
                        </p>
                        <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify;">
                            The department places strong emphasis on ethical practices, evidentiary standards, and legal
                            admissibility, ensuring that research outcomes meet judicial requirements and contribute
                            effectively to both criminal justice and wildlife law enforcement systems. Through its doctoral
                            program, the department aims to produce highly skilled researchers, academicians, and forensic
                            professionals capable of addressing complex investigative challenges and contributing to
                            scientific advancement, environmental sustainability, and societal welfare.
                        </p>
                    </div>
                </div>
            </div>
        </section>
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
                                            <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 500;">
                                                Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;">in
                                                    <br/>Forensic Science</span>
                                            </h2>
                                            <div class="para1 text-dark kd-para-1 disc" data-splitting
                                                style="text-align: justify;">
                                                <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify;">
                                                    The Department of Forensic Science at The Assam Royal Global University is dedicated to advancing interdisciplinary research and academic excellence in the application of scientific principles to criminal investigation, wildlife protection, and justice delivery. The department offers a dynamic doctoral research environment encompassing core domains such as forensic biology, serology, toxicology, forensic chemistry, digital forensics, forensic anthropology, and wildlife forensics, along with emerging areas including computational forensics and molecular modeling.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <p class="mobile-para1"
                    style="color: #264273; text-align: justify; padding-top: 20px; padding-left: 50px; padding-right: 50px;">
                    The Ph.D. program is structured to promote high-quality, impactful research addressing contemporary challenges in both human and environmental forensic investigations. Special emphasis is placed on advanced research areas such as post-mortem interval estimation, biomolecular degradation, forensic genomics, and the application of bioinformatics and molecular dynamics simulations. In addition, the department actively encourages research in wildlife forensics, focusing on species identification, illegal wildlife trade investigation, biodiversity conservation, and the application of DNA-based techniques to combat wildlife crime.
                </p>
                <p class="mobile-para1"
                    style="color: #264273; text-align: justify; padding-top: 10px; padding-left: 50px; padding-right: 50px;">
                    Supported by modern laboratory infrastructure and guided by experienced faculty members with diverse research expertise, the department ensures strong integration of theoretical knowledge with practical and analytical skills. The doctoral program fosters collaborative research, encourages publication in peer-reviewed journals, and promotes participation in national and international scientific forums.
                </p>
                <p class="mobile-para1"
                    style="color: #264273; text-align: justify; padding-top: 10px; padding-left: 50px; padding-right: 50px;">
                    The department places strong emphasis on ethical practices, evidentiary standards, and legal admissibility, ensuring that research outcomes meet judicial requirements and contribute effectively to both criminal justice and wildlife law enforcement systems. Through its doctoral program, the department aims to produce highly skilled researchers, academicians, and forensic professionals capable of addressing complex investigative challenges and contributing to scientific advancement, environmental sustainability, and societal welfare.
                </p>
            </div>
            <!--End About-->


        </div>

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
