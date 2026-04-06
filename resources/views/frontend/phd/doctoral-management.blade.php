@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Management</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify; font-size: 18px;">
                            The last couple of decades of technological progress has seen a massive disruption in our
                            way of life. The fusion of digital, physical, and biological is blurring the boundaries
                            between what was earlier separate domains. The exponential pace of growth of technological
                            adoption requires that the entire edifice of traditional systems of production, management,
                            and governance must be revamped to meet the demands of the new reality. This requires a
                            breed of research scholars who bring fresh ideas and create efficient systems to manage the
                            new situation.
                        </p>

                        <p class="mobile-para1" style="color: #264273; text-align: justify; font-size: 18px;">
                            The Ph.D. program in Management shall be unique for the interdisciplinary and contemporary
                            focus it brings to research in management disciplines. The program seeks to train productive
                            research scholars who can make an impact in an increasingly competitive and challenging
                            business world. The interdisciplinary approach is strengthened by it being situated in a
                            pioneering liberal education university enabling collaboration cutting across disciplines
                            outside of the conventional streams of management to provide different perspectives and a
                            wider breadth of research opportunities. Research in management is supported by an
                            accomplished set of faculties with wide-ranging industry and academic experience with an
                            ecosystem opportunities exist for research scholars to learn and employ cutting edge tools
                            and techniques, including data science/ analytics, in their research work.
                        </p>

                    </div>
                </div>
            </div>

        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
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

        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Management</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The last couple of decades of technological progress has seen a massive disruption in our
                            way of life. The fusion of digital, physical, and biological is blurring the boundaries
                            between what was earlier separate domains. The exponential pace of growth of technological
                            adoption requires that the entire edifice of traditional systems of production, management,
                            and governance must be revamped to meet the demands of the new reality. This requires a
                            breed of research scholars who bring fresh ideas and create efficient systems to manage the
                            new situation.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <div style="padding: 40px 60px 0px 60px;">

            <p class="para1" style="text-align: justify; color: #264273;">The Ph.D. program in Management shall be
                unique for
                the interdisciplinary and contemporary focus it brings to research in management disciplines. The
                program seeks to train productive research scholars who can make an impact in an increasingly
                competitive and challenging business world. The interdisciplinary approach is strengthened by it being
                situated in a pioneering liberal education university enabling collaboration cutting across disciplines
                outside of the conventional streams of management to provide different perspectives and a wider breadth
                of research opportunities. Research in management is supported by an accomplished set of faculties with
                wide-ranging industry and academic experience with an ecosystem opportunities exist for research
                scholars to learn and employ cutting edge tools and techniques, including data science/ analytics, in
                their research work.</p>

        </div>

        <!-- PHD Curriculum  -->

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
