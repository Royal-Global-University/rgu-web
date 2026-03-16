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
                                in Mathematics</span> </h2>
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
                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            The Department of Mathematics, The Assam Royal Global University is happy to offer a
                            Doctoral (Ph.D.) Programme in line with the goals of the National Education Policy (NEP)
                            2020. We aim to create a strong research culture for both students and faculty members,
                            helping them grow as researchers and contribute to the field of mathematics and beyond. </p>

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
                            At present, our department has four approved Ph.D. supervisors who guide research scholars
                            in various important areas. We support both pure and applied mathematics research, with a
                            focus on solving real-world problems through mathematics. </p>


                        <h2 class="mobile-headd3 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Research Areas <span style="color: #FF9A1E; font-weight: 500;">
                                Include:</span> </h2>


                        <table class="table table-bordered para1 text-dark bg-white">
                            <thead style="background-color: #264273; color: #fff;">
                                <tr>
                                    <th style="width: 100px;">Sl. No.</th>
                                    <th>Research Areas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fluid Dynamics</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mathematical Modelling</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Functional Analysis</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Fuzzy Mathematics</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Integro-Differential Equations</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mathematics Education</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Statistical and Data Analysis</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Multi-disciplinary Research</td>
                                </tr>
                            </tbody>
                        </table>


                        <p class="mobile-para1 mt-3" style="color: #264273; text-align: justify;">
                            The Ph.D. programme provides a platform for motivated students to explore advanced topics,
                            develop critical thinking skills, and contribute original work to the academic community. We
                            encourage collaborative research and aim to connect mathematics with other disciplines,
                            including science, technology, and education.
                        </p>

                        <p class="mobile-para1 mt-3" style="color: #264273; text-align: justify;">
                            Our department provides a friendly and supportive research environment with guidance from
                            experienced faculty members. We welcome students with a passion for mathematics and a desire
                            to pursue research to join our programme and be part of a growing academic community.
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

            <section
                style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                                Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Mathematics</span>
                            </h2>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                The Department of Mathematics, The Assam Royal Global University is
                                happy to offer a Doctoral (Ph.D.) Programme in line with the goals
                                of the National Education Policy (NEP) 2020. We aim to create a
                                strong research culture for both students and faculty members,
                                helping them grow as researchers and contribute to the field of
                                mathematics and beyond.
                            </p>

                            <p class="para1" style="color: #264273; text-align: justify;">
                                At present, our department has four approved Ph.D. supervisors who
                                guide research scholars in various important areas. We support both
                                pure and applied mathematics research, with a focus on solving
                                real-world problems through mathematics.
                            </p>

                        </div>
                    </div>
                </div>

            </section>


        </div>
    </div>
@endsection
