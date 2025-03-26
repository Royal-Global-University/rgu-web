@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
            <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                <!-- Video Section Start -->
                <div class="container pt-2">
                <video width="100%" height="650px" controls poster="assets/img/rguanthem/thumb1.jpg">
                    <source src="assets/img/rguanthem/anthem.mp4" type="video/mp4">
                  </video>
                </div>
                <!-- Video Section End -->

            </div>

            <div class="container">
                <div style="margin-top: 40px; margin-bottom: 30px;" class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
        data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
        <div class="elementor-widget-container">
            <div class="prthalign">

                <h2 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">Lyrics</h2>

            </div>
            </div>
        </div>

        <p class="para1 text-center"> By the bank of mighty Brahmaputra <br>
            And under the shelter of Nilachal, <br>
            There stands the temple of wisdom-Royal Global University. <br>
            In the City of Eastern Light <br>
            Colours of blue and orange spread insight <br>
            To dream and walk the way to right <br>
            Soar in the sky to a new height <br>
            Shine on Royalites, shine on! <br>
            Lighting up the young minds <br>
            To lead the world with all might <br>
            Hail Royal Global University! <br>
            Endowing a new sense of curiosity <br>
            And let the excellence prevail on <br>
            Shine on Royalites, shine on! <br>
            As long as the mighty river flows <br>
            Citadel of learning will enlighten the globe, <br>
            History will keep echoing the songs of yore, <br>
            With the marks of lives that remain on the shore. <br>
            Shine on Royalites, shine on, <br>
            Shine on Royalites, shine on, <br>
            Shine on Royalites, shine on, <br>
            Shine on, shine on, shine on! </p>

            </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
