@extends('frontend.master')
@push('styles')
        <style>
            .custom-btn {
        overflow: hidden;
        background-color: #27467A;
        color: white;
        font-size: 18px;
        font-weight: 600;
        border: none;
        padding: 15px 35px;
        border-radius: 12px;
        cursor: pointer;
        position: relative;
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.2);
        display: inline-block;
        transition: all 0.3s ease-in-out;
        width: 260px;
    }

    /* Bottom Right Corner Design */
    .custom-btn .corner {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 25px;
        height: 25px;
        background-color: #FF9A1E;
        clip-path: polygon(100% 0, 0 100%, 100% 100%);
    }

    /* Hover Effect */
    .custom-btn:hover {
        background-color: #1d3557;
        box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.3);
    }
        </style>
@endpush
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/infrastructure/mob1.png" alt="">

            <div class="container">
                <h2 class="mobile-headd1 text-center fw-bold text-center pt-2" style="color: #27467A; font-weight: 900;">
                    RGU <span style="color: #FF9A1E; font-weight: 500;">CAMPUS</span></h2>

                <h2 style="color: #27467A; font-weight: 600; font-style: italic;" class="mobile-headd2 text-center">
                    There's <span style="color: #FF9A1E; font-weight: 500; font-style: italic;">Nothing Like It....</span>
                </h2>

                <p class="mobile-para1 text-dark text-center">Explore the state-of-the-art infrastructure and
                    vibrant spaces that define the RGU experience.</p>

                <img src="mobile-assets/infrastructure/mob2.png" alt="">

                <div class="row mt-3 pb-2">
                    <div class="col-lg-12 mb-2">
                        <a href="Learningspaces.html"> <button style="width: 100%;" class="custom-btn">Learning Spaces <span
                                    class="corner"></span></button></a>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <a href="sportingspaces.html"> <button style="width: 100%;" class="custom-btn">Sporting Spaces <span
                                    class="corner"></span></button></a>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <a href="hostel-life.html"> <button style="width: 100%;" class="custom-btn">Accomodation Spaces <span
                                    class="corner"></span></button></a>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <a href="Incubation.html"> <button style="width: 100%;" class="custom-btn">Recreation Spaces <span
                                    class="corner"></span></button></a>
                    </div>
                </div>
            </div>

            <img src="mobile-assets/infrastructure/mob3.png" alt="">

            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-6 pb-3">
                        <iframe class="rounded" src="https://www.youtube.com/embed/jS2XzudoZlk?autoplay=1&mute=1" width="100%"
                            height="200" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe class="rounded" src="https://www.youtube.com/embed/bYDAXsbrQH8?autoplay=1&mute=1" width="100%"
                            height="200" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')

        <img src="mobile-assets/infrastructure/web1.png" alt="">

        <section style="padding: 20px 140px;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 style="color: #27467A; font-weight: 900; font-size: 80px;" class="headd1">RGU <span
                            style="color: #FF9A1E; font-weight: 500;">CAMPUS</span></h2>

                    <h2 style="color: #27467A; font-weight: 600; font-size: 50px; font-style: italic;" class="headd1">
                        There's <span style="color: #FF9A1E; font-weight: 500; font-style: italic;">Nothing Like
                            It....</span>
                    </h2>

                    <p class="text-dark para1 pt-3" style="font-size: 28px;">Explore the state-of-the-art infrastructure and
                        <br> vibrant spaces that define the RGU experience.</p>

                    <div class="row mt-5">
                        <div class="col-lg-6 mb-4">
                            <a href="Learningspaces.html"> <button class="custom-btn">Learning Spaces <span
                                        class="corner"></span></button></a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <a href="sportingspaces.html"> <button class="custom-btn">Sporting Spaces <span
                                        class="corner"></span></button></a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <a href="hostel-life.html"> <button class="custom-btn">Accomodation Spaces <span
                                        class="corner"></span></button></a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <a href="Incubation.html"> <button class="custom-btn">Recreation Spaces <span
                                        class="corner"></span></button></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="mobile-assets/infrastructure/mob2.png" alt="">
                </div>
            </div>
        </section>

        <img src="mobile-assets/infrastructure/web3.png" alt="">

        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.youtube.com/embed/jS2XzudoZlk?autoplay=1&mute=1" width="100%" height="500"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.youtube.com/embed/bYDAXsbrQH8?autoplay=1&mute=1" width="100%" height="500"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Content End AREA -->
    </div>
@endsection
