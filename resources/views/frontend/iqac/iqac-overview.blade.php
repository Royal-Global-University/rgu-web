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
        <section style="padding-top: 30px; background-image: url(assets/img/iqac-about/bg2.svg);"
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
                                        <img decoding="async" src="assets/img/iqac-about/head1.jpeg" alt="">
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
                                    <h1 class="headd2 fw-bold kd-title-ani kd-split-text"
                                        style="color: #264273; line-height: 1.3;">
                                        Internal Quality Assurance Cell (IQAC)
                                    </h1>
                                    <div class="para1 text-dark kd-para-1 disc" data-splitting style="text-align: justify;">
                                        <p>The Internal Quality Assurance Cell (IQAC) is an internal mechanism mandated by
                                            the University Grants Commission (UGC) for higher educational institutions in
                                            India. It is responsible for monitoring, evaluating, and enhancing the quality
                                            of education and the overall performance of the institution.
                                        </p>
                                        <p>The IQAC plays a pivotal role in ensuring continuous improvement in the
                                            institution's functioning. Serving as a nodal agency, it channels efforts toward
                                            quality enhancement and sustenance.
                                        </p>
                                        <p>Established on 24th April 2018, the Internal Quality Assurance Cell (IQAC) at the
                                            Assam Royal Global University plays a pivotal role in enhancing the
                                            institution's academic and administrative quality. Aligned with the guidelines
                                            of the University Grants Commission (UGC) of India, the IQAC focuses on
                                            continuous improvement and quality sustenance in various facets of the
                                            university's operations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


    <section style="padding: 20px 80px; background-color: #f2f2f2;">

        <h2 class="headd2 fw-bold text-dark pt-4">Quick Links</h2>

        <div style="margin-top: 20px;">
            <section class="button-container">

                <div class="button-row">
                    <a href="iqac-about.html" class="button para1">About IQAC</a>
                    <a href="iqac-members.html" class="button para1">Composition of IQAC</a>
                    <a href="iqac-mom.html" class="button para1">Minutes of Meeting</a>
                    <a href="iqac-activities.html" class="button para1">Activities</a>
                    <a href="iqac-report-naac.html" class="button para1">NAAC</a>
                </div>

                <div class="button-row">
                    <a class="button para1">AQAR</a>
                    <a class="button para1">NIRF</a>
                    <a class="button para1">Other Rankings</a>
                    <a href="iqac-report-annual.html" class="button para1">Reports</a>
                    <a href="iqac-feedback-analysis-report.html" class="button para1">Feedback Analysis Report</a>
                </div>

            </section>
        </div>

    </section>

    <div class="container-fluid" style="padding: 20px 80px;">

        <div class="headd2 text-dark fw-bold pb-3 pt-2">Objectives of IQAC
        </div>
        <div class="para1 text-dark fw-bold pb-2">The IQAC's main objectives, as per the UGC guidelines, are:
        </div>
        <ol class="para1 text-dark">
            <li>Establishing and maintaining quality benchmarks: The IQAC sets and upholds quality standards for academic
                and administrative activities within the institution.
            </li>
            <li>Fostering a culture of quality: It promotes a culture of continuous improvement by organizing workshops,
                seminars, and other events to raise awareness among faculty, staff, and students about the importance of
                enhancing quality in higher education.
            </li>
            <li>Documenting and sharing best practices: The IQAC encourages and facilitates the documentation of successful
                practices within the institution, which can then be shared with other institutions as a reference.
            </li>
            <li>Creating a learner-centric environment: It assists in the adoption of teaching methods, curriculum
                development, and assessment practices that prioritize the needs and engagement of students.
            </li>
            <li>Monitoring quality parameters: The IQAC keeps track of various quality indicators such as student
                performance, faculty development, infrastructure, research output, and feedback mechanisms to identify areas
                that require improvement.
            </li>
        </ol>

        <hr>

        <div class="headd2 text-dark fw-bold pb-3">Function of IQAC
        </div>
        <div class="para1 text-dark fw-bold pb-2">The IQAC fulfils several functions to achieve its objectives. Key
            functions, as outlined by the UGC, include:
        </div>


        <ol class="para1 text-dark">
            <li><strong>Establishing and maintaining quality assurance processes:</strong> Developing and implementing
                processes for quality assurance in all aspects of institutional functioning, such as teachinglearning,
                research, governance, and administration.
            </li>
            <li><strong>Preparing Annual Quality Assurance Reports (AQAR):</strong> Compiling a yearly report that
                highlights the institution's quality enhancement activities, progress in implementing quality benchmarks,
                and future plans for improvement.
            </li>
            <li><strong>Coordinating quality-related activities:</strong> Serving as a coordinating body to ensure the
                effective implementation of quality-related initiatives, including accreditation and assessment exercises.
            </li>
            <li><strong>Organizing workshops, seminars, and training programs:</strong> Conducting capacity-building
                programs for faculty, staff, and students to enhance their understanding of quality issues, teaching
                methods, research practices, and administrative procedures.
            </li>
            <li><strong>Collecting and analyzing feedback:</strong> Gathering feedback from stakeholders such as students,
                alumni, employers, and parents to assess program and service quality, and implementing measures for
                improvement.
            </li>
            <li><strong>Institutionalizing best practices:</strong> Facilitating the identification and adoption of best
                practices to enhance educational and administrative quality.
            </li>
            <li><strong>Collaborating and networking:</strong> Promoting collaboration with other institutions, agencies,
                and stakeholders involved in quality assurance to share experiences, learn from each other, and adopt best
                practices.
            </li>
        </ol>

        <div class="para1 text-dark pb-4">These functions collectively contribute to the continuous improvement and
            maintenance of quality in higher education institutions, aligning with UGC guidelines.
        </div>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
