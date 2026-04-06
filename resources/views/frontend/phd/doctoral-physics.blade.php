@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 100px; background-image: url(mobile-assets/placement-all/mobile-bg.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Physics</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Physics is a prestigious and intellectually demanding program that offers
                            aspiring physicists the opportunity to explore the fundamental principles governing the
                            universe.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. candidates delve into advanced topics within physics, engaging in original research
                            and experimentation. They work closely with experienced faculty members and researchers to
                            unravel complex phenomena, develop new theories, or contribute to ongoing scientific
                            inquiries. The program emphasizes critical thinking, problem-solving, and a deep
                            understanding of physics principles.
                        </p>

                        <p class="para1 pb-4" style="color: #264273; text-align: justify;">
                            The culmination of the Ph.D. is a comprehensive thesis, presenting the candidate's original
                            research findings. Graduates often pursue careers in academia, research institutions,
                            government laboratories, and the private sector, where their expertise contributes to
                            advancements in fields like astrophysics, condensed matter physics, particle physics, and
                            more. A Ph.D. in Physics opens doors to a world of discovery and innovation, shaping the
                            future of science and technology.
                        </p>


                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section
            style="background-image: url(mobile-assets/placement-all/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <br><span style="color: #FF9A1E; font-weight: 500;">
                                in Physics</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            A Ph.D. in Physics is a prestigious and intellectually demanding program that offers
                            aspiring physicists the opportunity to explore the fundamental principles governing the
                            universe.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Ph.D. candidates delve into advanced topics within physics, engaging in original research
                            and experimentation. They work closely with experienced faculty members and researchers to
                            unravel complex phenomena, develop new theories, or contribute to ongoing scientific
                            inquiries. The program emphasizes critical thinking, problem-solving, and a deep
                            understanding of physics principles.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <div style="padding: 30px 60px;">

            <p class="para1 pb-4" style="color: #264273; text-align: justify;">
                The culmination of the Ph.D. is a comprehensive thesis, presenting the candidate's original research
                findings. Graduates often pursue careers in academia, research institutions, government laboratories,
                and the private sector, where their expertise contributes to advancements in fields like astrophysics,
                condensed matter physics, particle physics, and more. A Ph.D. in Physics opens doors to a world of
                discovery and innovation, shaping the future of science and technology.
            </p>

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
