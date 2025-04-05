@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="container-fluid" style="padding-top: 90px; position: relative;">
            <img class="pt-3" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/organogram/orgonogram.png" />
        </div>
    </div>

    <div class="website">
        <div id="page" class="site site_wrapper">

            <div class="scroll-top">
                <div class="scroll-top-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                        data-src="https://d20cs3cmzywuh.cloudfront.net/https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

                <!--About Section-->
                <section>
                    <div class="container-fluid">
                        <img class="pt-3" src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/organogram/orgonogram.png" />
                    </div>
                </section>
                <!--End About-->
            </div>

        </div>
    </div>
@endsection
