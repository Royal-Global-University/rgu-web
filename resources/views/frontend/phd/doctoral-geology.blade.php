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
                                in Geology</span> </h2>
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
                            The Department of Geology at The Assam Royal Global University boasts a team of accomplished
                            faculty members specializing in various geological fields, including Igneous Petrology,
                            Metamorphic Petrology, Sedimentology, Structural Geology, Geochemistry, Fluvial
                            Geomorphology, and Economic Geology.
                        </p>


                        <h2 class="mobile-headd3 fw-bold mt-4 pb-3" style="color: #264273; font-weight: 700;">
                            Our department is actively involved in <span style="color: #FF9A1E; font-weight: 500;">
                                the following significant research areas:</span> </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered bg-white">
                                <thead class="para1" style="background-color: #264273; color: #fff;">
                                    <tr>
                                        <th style="width: 10%;">Sl. No.</th>
                                        <th>Research Area</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody class="para1">
                                    <tr>
                                        <td>1</td>
                                        <td>Critical Minerals Exploration</td>
                                        <td>Our department is conducting research on critical minerals exploration. This
                                            ongoing
                                            study aims to enhance our understanding of this crucial mineral resource and
                                            its
                                            economic potential.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sedimentology, Igneous, and Metamorphic Studies in North East India</td>
                                        <td>Our department is actively engaged in studying the geological processes that
                                            have shaped
                                            North East India. Ongoing research in sedimentology, as well as igneous and
                                            metamorphic
                                            studies, aims to provide deeper insights into the geological history of the
                                            region.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            These ongoing research endeavours exemplify our commitment to advancing geological knowledge
                            and contributing to the scientific community's understanding of our natural world. Our
                            department remains dedicated to nurturing a passion for exploration and discovery among both
                            our faculty and students, with the ultimate goal of enriching geological science.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;">in Geology</span>
                        </h2>

                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            The Department of Geology at The Assam Royal Global University boasts a team of
                            accomplished faculty members specializing in various geological fields, including
                            Igneous Petrology, Metamorphic Petrology, Sedimentology, Structural Geology,
                            Geochemistry, Fluvial Geomorphology, and Economic Geology.
                        </p>

                    </div>
                </div>
            </div>


        </section>
        <h2 class="mobile-headd3 fw-bold mt-4 p-3" style="color: #264273; font-weight: 700;">
            Our department is actively involved in <span style="color: #FF9A1E; font-weight: 500;">
                the following significant research areas:</span> </h2>

        <div class="table-responsive p-3">
            <table class="table table-bordered bg-white">
                <thead class="para1" style="background-color: #264273; color: #fff;">
                    <tr>
                        <th style="width: 10%;">Sl. No.</th>
                        <th>Research Area</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="para1">
                    <tr>
                        <td>1</td>
                        <td>Critical Minerals Exploration</td>
                        <td>Our department is conducting research on critical minerals exploration. This
                            ongoing
                            study aims to enhance our understanding of this crucial mineral resource and
                            its
                            economic potential.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sedimentology, Igneous, and Metamorphic Studies in North East India</td>
                        <td>Our department is actively engaged in studying the geological processes that
                            have shaped
                            North East India. Ongoing research in sedimentology, as well as igneous and
                            metamorphic
                            studies, aims to provide deeper insights into the geological history of the
                            region.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="mobile-para1 p-3" style="color: #264273; text-align: justify;">
            These ongoing research endeavours exemplify our commitment to advancing geological knowledge
            and contributing to the scientific community's understanding of our natural world. Our
            department remains dedicated to nurturing a passion for exploration and discovery among both
            our faculty and students, with the ultimate goal of enriching geological science.
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
