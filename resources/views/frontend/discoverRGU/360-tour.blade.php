@extends('frontend.master')
@section('title', '360o Virtual Tour : The Assam Royal Global University')
@section('meta_description', 'Take a 360° virtual tour of Royal Global University and experience our vibrant campus, modern infrastructure, and state-of-the-art facilities from the comfort of your home.')
@section('meta_keywords', '360o Virtual Tour')
@section('content')
<div id="page" class="site site_wrapper">

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
