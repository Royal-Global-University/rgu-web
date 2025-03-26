@extends('frontend.master')

@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-color: #fff8f0; padding: 110px 10px 20px 10px; position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">Footprints <span
                                style="color: #FF9A1E; font-weight: 500;">at RGU</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/footprints/headimg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <p class="mobile-headd3 mt-4" style="color: #333; text-align: justify;">
                            "We want that education by which character is formed, strength of mind is increased, the
                            intellect is expanded, and by which one can stand on one's own feet."
                            <br>
                            <strong style="font-size: 20px;">- Swami Vivekananda</strong>
                        </p>

                    </div>
                </div>
            </div>
        </section>


        <img src="mobile-assets/footprints/f1.png" alt="">
        <img src="mobile-assets/footprints/f2.png" alt="">
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">
            @include('frontend/components/aheader')
            <!--head image Section-->
            <section
                style="background-image: url(mobile-assets/footprints/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/footprints/headimg.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd kd-title-ani kd-split" style="color: #264273; font-weight: 700;">Footprints
                                <span style="color: #FF9A1E; font-weight: 500;">at RGU</span> </h2>
                            <p class="headd3" style="color: #333;">
                                "We want that education by which character is formed, strength of mind is increased, the
                                intellect is expanded, and by which one can stand on one's own feet."
                                <br>
                                <strong style="font-size: 30px;">- Swami Vivekananda</strong>
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <!--head image Section-->


            <img src="mobile-assets/footprints/all-footprint.png" alt="">

        </div>
    </div>
@endsection
