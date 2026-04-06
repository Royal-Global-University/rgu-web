@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div>

            <section
                style="padding-top: 100px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">
                                Ph.D. Programme in <span style="color: #FF9A1E; font-weight: 500;">
                                    Indian Knowledge Systems (IKS)</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/iks/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                                The Ph.D. programme in Indian Knowledge Systems (IKS) at The Assam Royal Global
                                University is a confluence of ancient wisdom and contemporary scholarship. Rooted in the
                                timeless traditions of Sanskrit texts, indigenous practices, and folk knowledge systems,
                                this course aims to engage with modern disciplines such as cultural studies, folklore,
                                management, commerce, textile, traditional food, culinary arts, ecology, health
                                sciences, vernacular architecture, political theory, archaeology, literature,
                                philosophy, performing art, material culture, and cultural tourism.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                This transdisciplinary doctoral programme is designed to revive, reinterpret, and
                                reimagine Indian knowledge traditions in the context of current global challenges and
                                opportunities. Research here is retrospective and visionary—grounded in heritage, and
                                oriented toward innovation, sustainability, and ethical growth.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                Our program emphasizes both core and applied dimensions of Indian Knowledge Systems,
                                enabling students
                                to contribute to academic, cultural, and policy-based discourses at the national and global
                                levels.
                            </p>

                            <h2 style="color: #333;" class="headd3 fw-bold pt-3 pb-2">
                                Core Research Areas:
                            </h2>

                            <div class="table-responsive">
                                <table class="table table-bordered text-dark bg-white">
                                    <thead class="fw-bold headd3 text-white" style="background-color: #264273;">
                                        <tr>
                                            <th style="width: 100px;">Sl. No.</th>
                                            <th>Knowledge Domain</th>
                                        </tr>
                                    </thead>
                                    <tbody class="para1 text-dark">
                                        <tr>
                                            <td>1</td>
                                            <td>Sanskrit Texts, Folk Tradition & Indigenous Knowledge of Northeast India
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Knowledge Systems, Mathematics & Cosmology</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Health Sciences and Ayurveda</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Natural Science, Technology & Ecology</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Law, Archives & Cultural Property</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Architectural Knowledge Systems</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Food, Culinary Arts & Nutrition</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Travel, Tourism & Cultural Heritage Management</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Management, Commerce & Indigenous Economies</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Archaeology & Heritage Studies</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>History, Political Science & Social Organization</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div>
            <div id="page" class="site site_wrapper">

                <section
                    style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/iks/bgg.svg); background-size: cover; padding: 50px 0px;">
                    <div class="container">
                        <div class="row align-items-center gx-5">
                            <div class="col-lg-6">
                                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                    <div style="border: 2px solid #27467A;"
                                        class="kd-about-3-img img-cover fix kd-img-ani-1">
                                        <img class="rounded" decoding="async"
                                            src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/iks/headimg.jpeg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                                    Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;">in<br/>
                                        Indian Knowledge Systems (IKS)</span>
                                </h2>

                                <p class="para1" style="color: #264273; text-align: justify;">
                                    The Ph.D. programme in Indian Knowledge Systems (IKS) at The Assam Royal Global
                                    University is a confluence of ancient wisdom and contemporary scholarship. Rooted in the
                                    timeless traditions of Sanskrit texts, indigenous practices, and folk knowledge systems,
                                    this course aims to engage with modern disciplines such as cultural studies, folklore,
                                    management, commerce, textile, traditional food, culinary arts, ecology, health
                                    sciences, vernacular architecture, political theory, archaeology, literature,
                                    philosophy, performing art, material culture, and cultural tourism.
                                </p>

                            </div>
                        </div>

                        <!-- Insert mobile PHD Curriculum here  -->


                    </div>

                </section>

            </div>

            <div style="padding: 10px 60px;">

                <p class="para1" style="color: #264273; text-align: justify;">
                    This transdisciplinary doctoral programme is designed to revive, reinterpret, and
                    reimagine Indian knowledge traditions in the context of current global challenges and
                    opportunities. Research here is retrospective and visionary—grounded in heritage, and
                    oriented toward innovation, sustainability, and ethical growth.
                </p>

                <p class="para1" style="color: #264273; text-align: justify;">
                    Our program emphasizes both core and applied dimensions of Indian Knowledge Systems, enabling students
                    to contribute to academic, cultural, and policy-based discourses at the national and global levels.
                </p>

                <h2 style="color: #333;" class="headd2 fw-bold pt-4 pb-2">
                    Core Research Areas:
                </h2>

                <div class="table-responsive">
                    <table class="table table-bordered text-dark bg-white">
                        <thead class="fw-bold headd3 text-white" style="background-color: #264273;">
                            <tr>
                                <th style="width: 100px;">Sl. No.</th>
                                <th>Knowledge Domain</th>
                            </tr>
                        </thead>
                        <tbody class="para1 text-dark">
                            <tr>
                                <td>1</td>
                                <td>Sanskrit Texts, Folk Tradition & Indigenous Knowledge of Northeast India</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Knowledge Systems, Mathematics & Cosmology</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Health Sciences and Ayurveda</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Natural Science, Technology & Ecology</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Law, Archives & Cultural Property</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Architectural Knowledge Systems</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Food, Culinary Arts & Nutrition</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Travel, Tourism & Cultural Heritage Management</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Management, Commerce & Indigenous Economies</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Archaeology & Heritage Studies</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>History, Political Science & Social Organization</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
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
