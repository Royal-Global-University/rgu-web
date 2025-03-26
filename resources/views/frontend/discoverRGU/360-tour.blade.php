@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div style="margin-top: 40px;"
        class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
        data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
        <div class="elementor-widget-container">
            <div class="prthalign">

                <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                    360o Virtual Tour</h1>

            </div>
        </div>
    </div>

    <div>

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

            <!--About Section-->

            <section>
                <div style="padding-top: 30px;" class="container pb-5">
                    <iframe src="https://tourmkr.com/F1frQvpkMz/" width="100%" height="600" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <!--End About-->
        </div>

    </div>
    </div><!-- #page -->
    <!--End About-->
</div><!-- #page -->
@endsection
