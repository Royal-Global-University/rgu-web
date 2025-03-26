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
    <div>
        <img src="assets/img/international-how-to-apply/apply.svg" alt="">
    </div>

    <div>
        <img src="assets/img/international-how-to-apply/contact.svg" alt="">
    </div>

    <div>
        <img src="assets/img/international-how-to-apply/doc.svg" alt="">
    </div>

    <div>
        <img src="assets/img/international-how-to-apply/steps.svg" alt="">
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
