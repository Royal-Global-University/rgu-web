@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;" style="background-color: #FFF8F0;">
            <img src="mobile-assets/std-gallery/mob1.png" alt="">
            <div class="container">
                <img src="mobile-assets/std-gallery/a.png" alt="">
                <a href="#!"> <img src="mobile-assets/std-gallery/b.png" alt=""></a>
                <a href="#!"> <img src="mobile-assets/std-gallery/c.png" alt=""></a>
                <a href="#!"> <img src="mobile-assets/std-gallery/d.png" alt=""></a>
            </div>
            <img src="mobile-assets/std-gallery/mob2.png" alt="">
        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')

        <img src="mobile-assets/std-gallery/web1.png" alt="">

        <img src="mobile-assets/std-gallery/web2.png" alt="">

    </div>
@endsection
