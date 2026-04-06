@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

            <!-- till about dept  -->
            <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px; position: relative;">

                {{-- <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                </h1> --}}

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span> <br>
                    Assamese
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Doctoral Programme of the Department of Assamese is designed to foster rigorous
                                scholarly inquiry and original research in Assamese language and literature. The programme
                                encourages interdisciplinary research that explores the intersections of language, culture,
                                history, and folklore of Assam and Northeast India. Research areas include Ethnic Studies,
                                Oral Traditions, World Literatures, Environmental Humanities, and Translation Studies,
                                situating Assamese literature within a broader global literary context.
                            </p>

                        </div>
                    </div>
                </div>

            </section>
            <!-- till about dept  -->

        </div>

        <div class="website">

            <section>
                <!--Start Header-->
                @include('frontend/components/aheader')
                <!--End Header-->

                <section id="about">
                    <section style="background-color: #FFF8F0;">
                        <div class="p-5">
                            {{-- <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                            </h1> --}}

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Ph.D. Programme in</span>
                                Assamese
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async" style="height: 450px"
                                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/doctoral-programmee/headimg.jpeg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The Doctoral Programme of the Department of Assamese is designed to foster rigorous
                                        scholarly inquiry and original research in Assamese language and literature. The
                                        programme encourages interdisciplinary research that explores the intersections of
                                        language, culture, history, and folklore of Assam and Northeast India. Research
                                        areas include Ethnic Studies, Oral Traditions, World Literatures, Environmental
                                        Humanities, and Translation Studies, situating Assamese literature within a broader
                                        global literary context.
                                    </p>

                                </div>

                            </div>
                        </div>

                    </section>
                </section>

            </section>

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

    </div>
@endsection
