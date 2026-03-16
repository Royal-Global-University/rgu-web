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
                            About <span style="color: #FF9A1E; font-weight: 500;">
                                Department</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/hotel/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            The Ph.D. programme in Design offers a rigorous and interdisciplinary program aimed at advancing knowledge and innovation in design research, practice, and theory. The program provides a platform for scholars to explore complex design problems across domains such as product design, communication design, sustainability, and social innovation.
                        </p>

                        <p class="para1" style="color: #264273; text-align: justify;">
                           Ph.D. candidates are encouraged to engage in original research that contributes to the academic body of knowledge while addressing real-world challenges. The department supports a research-driven environment with access to state-of-the-art facilities, experienced faculty, and a collaborative culture that spans across design, technology, and the humanities.
                        </p>

                        <h2 style="color: #333;" class="headd3 fw-bold pt-3 pb-2">
                            Key research areas include:
                        </h2>

                        <div class="table-responsive">
                <table class="table table-bordered text-dark bg-white">
                    <thead class="fw-bold headd3 text-white" style="background-color: #264273;">
                        <tr>
                            <th style="width: 100px;">Sl. No.</th>
                            <th>Research <Area></Area></th>
                        </tr>
                    </thead>
                    <tbody class="para1 text-dark">

                        <tr>
                            <td>1</td>
                            <td>Sustainable and inclusive design</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Design for social innovation</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Design theory and methodology</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Design education and practice</td>
                        </tr>

                    </tbody>
                </table>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">
            @include('frontend/components/aheader')
            <section
                style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/iks/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/hotel/headimg.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd2 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                                About <span style="color: #FF9A1E; font-weight: 500;">
                                    Department</span> </h2>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                The Ph.D. programme in Design offers a rigorous and interdisciplinary program aimed at
                                advancing knowledge and innovation in design research, practice, and theory. The program
                                provides a platform for scholars to explore complex design problems across domains such
                                as product design, communication design, sustainability, and social innovation.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                Ph.D. candidates are encouraged to engage in original research that contributes to the
                                academic body of knowledge while addressing real-world challenges. The department
                                supports a research-driven environment with access to state-of-the-art facilities,
                                experienced faculty, and a collaborative culture that spans across design, technology,
                                and the humanities.
                            </p>

                        </div>
                    </div>

                </div>

            </section>

        </div>


        <div style="padding: 40px 60px;">

            <h2 style="color: #333;" class="headd2 fw-bold pt-4 pb-2">
                Key research areas include:
            </h2>

            <div class="table-responsive">
                <table class="table table-bordered text-dark bg-white">
                    <thead class="fw-bold headd3 text-white" style="background-color: #264273;">
                        <tr>
                            <th style="width: 100px;">Sl. No.</th>
                            <th>Research <Area></Area></th>
                        </tr>
                    </thead>
                    <tbody class="para1 text-dark">

                        <tr>
                            <td>1</td>
                            <td>Sustainable and inclusive design</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Design for social innovation</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Design theory and methodology</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Design education and practice</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <p class="para1" style="color: #264273; text-align: justify;">
                The program is ideal for candidates with a background in design or related
                fields who are passionate about shaping the future of design through research, scholarship, and teaching.
            </p>
            <!-- Insert PHD Curriculum here  -->
        </div>
    </div>
@endsection
