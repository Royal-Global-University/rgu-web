@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding: 110px 10px; background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/placement-all/mobile-bg.svg); position: relative;">
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
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">


                        </p>
                        <p class="mobile-para1" style="color: #264273; text-align: justify;">
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
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg"
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

    </div>
@endsection
