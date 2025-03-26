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
    <div style="background-color: #13223b; " class="container-fluid pt-4 mb-2">

        <a href="{{ route('convocation-third') }}"> <img style="height: 60px;" src="assets/img/convocation/convocation3/back-btn2.svg"
                alt=""></a>

        <h1 class="headd2 fw-bold pb-3 pt-3 text-center" style="color: #fff; ">Image gallery of third convocation</h1>

        <img style="padding: 0px 80px;" src="assets/img/convocation/convocation3/in-gallery.svg" alt="">

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
