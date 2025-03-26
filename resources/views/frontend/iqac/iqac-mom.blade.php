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
        <img src="assets/img/mom-docs/mom.svg" alt="">
    </div>

    <div class="main-container container">
        <section class="button-container">
            <div class="button-row">
                <a href="assets/img/mom-docs/12th IQAC meeting.pdf" target="_blank" class="button para1">
                    <i class="fa fa-download p-2"></i> 12th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/11th IQAC meeting.pdf" target="_blank" class="button para1">
                    <i class="fa fa-download p-2"></i> 11th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/10th IQAC meeting.pdf" target="_blank" class="button para1">
                    <i class="fa fa-download p-2"></i> 10th Minutes of Meeting
                </a>
            </div>

            <div class="button-row">
                <a href="assets/img/mom-docs/9th IQAC meeting.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 9th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom8.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 8th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom7.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 7th Minutes of Meeting
                </a>
            </div>

            <div class="button-row">
                <a href="assets/img/mom-docs/mom6.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 6th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom5.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 5th Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom4.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 4th Minutes of Meeting
                </a>
            </div>

            <div class="button-row">
                <a href="assets/img/mom-docs/mom3.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 3rd Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom2.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 2nd Minutes of Meeting
                </a>
                <a href="assets/img/mom-docs/mom1.pdf" target="_blank" style="font-size: 16px !important;"
                    class="button para1">
                    <i class="fa fa-download p-2"></i> 1st Minutes of Meeting
                </a>
            </div>

        </section>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection
