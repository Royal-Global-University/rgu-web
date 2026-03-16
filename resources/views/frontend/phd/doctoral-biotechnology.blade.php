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
                                in Biotechnology</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">


                        <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                            Biotechnology is a research oriented science, a combination of Biology and Technology.
                            It covers a wide variety of subjects like Genetics, Biochemistry, Microbiology,
                            Immunology, Virology, Chemistry and Engineering. It also has tight links and
                            relationships with many other subjects like Health and Medicine, Agriculture and Animal
                            Husbandry, Cropping system and Crop Management, Ecology, Cell Biology, Soil Science and
                            Soil Conservation, Biostatistics, Plant Physiology, Seed Technology and the like.
                            Biotechnology is the use of living things, especially cells and bacteria in industrial
                            process. With demand for biotechnologists growing prospects in this industry are
                            increasing. After Ph.D., in this field one can achieve any goal in the field of
                            research, academics as well as corporate.
                        </p>

                    </div>

                </div>
            </div>

            <div class="container pb-3 pt-3" style="background-color: #f0f8ff;">
                <h2 class="mobile-headd2 text-dark">
                    Ph.D. Curriculum
                </h2>

                @include('frontend/components/phddeptmob')
            </div>

        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <!--End Header-->

        <section
            style="background-image: url(mobile-assets/phd-mobile/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mt-3" style="color: #264273; font-weight: 700;">
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Biotechnology</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            Biotechnology is a research oriented science, a combination of Biology and Technology.
                            It covers a wide variety of subjects like Genetics, Biochemistry, Microbiology,
                            Immunology, Virology, Chemistry and Engineering. It also has tight links and
                            relationships with many other subjects like Health and Medicine, Agriculture and Animal
                            Husbandry, Cropping system and Crop Management, Ecology, Cell Biology, Soil Science and
                            Soil Conservation, Biostatistics, Plant Physiology, Seed Technology and the like.
                            Biotechnology is the use of living things, especially cells and bacteria in industrial
                            process. With demand for biotechnologists growing prospects in this industry are
                            increasing. After Ph.D., in this field one can achieve any goal in the field of
                            research, academics as well as corporate.
                        </p>



                    </div>
                </div>
            </div>

        </section>

        <div style="padding: 40px 60px;">

            <p class="para1 text-dark">
                The Ph.D. programme in Biotechnology at The Assam Royal Global University equips
                aspiring doctoral students with the knowledge and expertise, necessary to become leaders in the
                fast-growing
                fields of industrial and academic biotechnology. In addition to its extensive coursework, The Assam
                Royal
                Global University’s doctoral programme will sharpen candidates’ professional and pedagogical skills
                through
                intensive laboratory-based research, teaching, in-house seminars and national and international
                conferences.
            </p>


        </div>

        <div class="container">
            <div class="headd2 fw-bold text-dark kd-title-ani kd-split-text">Ph.D. Curriculum</div>

            @include('frontend/components/phddeptweb')
        </div>
    </div>
@endsection
