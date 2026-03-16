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
                                in Botany</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 1px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/phd-mobile/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-4">

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The field of botany is very diverse, with branches in microbiology, horticulture, economic
                            botany, plant anatomists, physiologists and molecular biologists. Botany is the study of
                            plants and their properties. It is an important part of biology, which provides information
                            about plant growth in various climates. The doctoral degree in botany is the highest level
                            of education in plant science. It is designed for scholars who want to learn more about
                            plant behavior, evolutionary trends, and species. The program requires rigorous training in
                            the fields of quantitative and qualitative data analysis, critical thinking, and
                            data-handling techniques. A Ph.D. in this field can lead to a lucrative career in the public
                            and private sectors. These graduates are in demand in local, state, and national
                            organizations, and can be employed in a number of fields such as molecular biology, plant
                            physiology, microbiology, forensic science, forests, etc
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
                            Ph.D. Programme <span style="color: #FF9A1E; font-weight: 500;"><br>in Botany</span>
                        </h2>

                        <p class="para1" style="color: #264273; text-align: justify;">
                            The field of botany is very diverse, with branches in microbiology, horticulture, economic
                            botany, plant anatomists, physiologists and molecular biologists. Botany is the study of
                            plants and their properties. It is an important part of biology, which provides information
                            about plant growth in various climates. The doctoral degree in botany is the highest level
                            of education in plant science. It is designed for scholars who want to learn more about
                            plant behavior, evolutionary trends, and species. The program requires rigorous training in
                            the fields of quantitative and qualitative data analysis, critical thinking, and
                            data-handling techniques. A Ph.D. in this field can lead to a lucrative career in the public
                            and private sectors. These graduates are in demand in local, state, and national
                            organizations, and can be employed in a number of fields such as molecular biology, plant
                            physiology, microbiology, forensic science, forests, etc
                        </p>


                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
