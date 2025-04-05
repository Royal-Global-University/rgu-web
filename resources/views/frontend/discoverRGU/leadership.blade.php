@extends('frontend.master')

@section('content')
        <div id="page" class="site site_wrapper">

           <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="position: relative; padding-top: 90px;">
                <section style="background-image: url('https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/back.webp'); background-size: cover;">
                    <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-2"
                        style="color: #27467A; font-weight: 900;">
                        Leadership <span style="color: #FF9A1E; font-weight: 500;">Team</span></h2>

                    <div class="container pb-5 pt-4">
                        <div class="row">
                            <div class="col-lg-12 pb-5">
                                <a href="leadership-chancellor"><img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/mobile-dr-ak-pansari.png" /></a>
                            </div>
                            <hr>
                            <div class="col-lg-12 pb-5">
                                <a href="leadership-anil-kumar"><img
                                        src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/mobile-sri-anil-kumar-modi.png" /></a>
                            </div>
                            <hr>
                            <div class="col-lg-12">
                                <a href="leadership-ankur-pansari"><img
                                        src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/mobile-sri-ankur-pansari.png" /></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="website">

    <!--Start Header-->
    <section>
        @include('frontend/components/aheader')
    </section>
    <!--End Header-->

    <section style="background-image: url('https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/back.webp'); background-size: cover;">
    <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-2" style="color: #27467A; font-weight: 900; font-size: 50px;">
    Leadership <span style="color: #FF9A1E; font-weight: 500;">Team</span></h2>

    <div class="container pb-5">
       <div class="row">
           <div class="col-lg-12">
               <a href="leadership-chancellor"><img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/1.png" /></a>
           </div>
           <div class="col-lg-12">
               <a href="leadership-anil-kumar"><img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/2.png" /></a>
           </div>
           <div class="col-lg-12">
               <a href="leadership-ankur-pansari"><img src="https://d20cs3cmzywuh.cloudfront.net/mobile-assets/leadership/3.png" /></a>
           </div>
       </div>
    </div>

    </section>
        </div>
        </div><!-- #page -->
@endsection
