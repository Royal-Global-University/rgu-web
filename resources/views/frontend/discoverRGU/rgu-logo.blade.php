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
             <div>
                <div style="background-image: url(assets/img/logo_page/bg1.svg); box-shadow: 1px 1px 2px #00000006;"  class="container-fluid p-5">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="rounded" style="height: 400px; background-color: #ffffff; align-items: center; justify-content: center; display: flex; border: 2px solid #27467A;">
                            <img  src="assets/img/logo_page/head-img.png" height="250px" />
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="headd2" style="color: rgb(30, 30, 30); font-weight: 500;">Iconography</h3>
                            <p class="m-0 text-dark para1" style="text-align: justify;">The Assam Royal Global University’s
                                logo
                                represents positivity and
                                encouragement for success with wisdom and
                                creativity.
                                A combination of the globe, and students who are represented by the optimistic
                                colours-Blue and
                                Orange, a
                                reflection of
                                the university’s innovative and progressive mindset fuelled by determination to impart
                                the best
                                and
                                rise above
                                the rest,
                                thus creating a transformative educational experience for the students.
                            <br><br>

                                Six hands of the students, reaching
                                beyond
                                the globe, represent
                                ‘transcending boundaries’,
                                symbolizing wisdom,
                                confidence, intelligence, creativity, determination, and honesty by engaging with
                                partners
                                outside
                                the
                                traditional
                                borders of the university campus.</p>
                        </div>
                    </div>

                </div>


                    <div class="container pt-5">
                        <h3 class="headd2" style="color: rgb(30, 30, 30);">Colours</h3>
                        <p class="para1 text-danger">Our logo Colours are Deep Blue (HEX=#27467A), Pumpkin Orange (HEX=#D5582A) and White (HEX=#FFFFFF). No
                            other Logo Colours are acceptable.</p>
                        <div class="row pt-4">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img style="height: 130px;" src="assets/img/logo_page/color1.png" />
                                    </div>
                                    <div class="col-lg-8" style="justify-content: center;">
                                        <h4 style="color: rgb(30, 30, 30);">DEEP BLUE</h4>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 39 G = 70 B = 122</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 96% M = 80% Y = 26% K = 11%</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">HEX = #27467A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img style="height: 130px;" src="assets/img/logo_page/color2.png" />
                                    </div>
                                    <div class="col-lg-7">
                                        <h4 style="color: rgb(30, 30, 30);">PUMPKIN ORANGE</h4>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 213 G = 88 B = 42</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 11% M = 79% Y = 98% K = 2%</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">HEX = #D5582A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img style="height: 130px;" src="assets/img/logo_page/color3.png" />
                                    </div>
                                    <div class="col-lg-7">
                                        <h4 style="color: rgb(30, 30, 30);">WHITE</h4>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 255 G = 255 B = 255</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">R = 0% M = 0% Y = 0% K = 0%</p>
                                        <p style="font-size: 17px; font-weight: 500;" class="m-0 text-dark">HEX = #FFFFFF</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <div class="mt-4" style="background-color: rgba(255, 251, 251, 0.899);">
                <div class="container pt-4 pb-5">
                    <h3 class="headd2" style="color: rgb(30, 30, 30);">Clear Space</h3>
                    <p class="para1 text-dark">Clear space is the area surrounding the logo that must be kept free of
                        competing text
                        or graphic elements.
                        Leaving space
                        around the logo ensures that it will stand out appropriately and that other words or graphics
                        will not
                        appear to be part
                        of, or “locked up” with, the logo. No additional text or graphic element should encroach on this
                        space.
                        The logo files available for download at rgu.ac include the minimum clear space. Maintain clear
                        space
                        when
                        placing the
                        logo near the edges, or any other design element.</p>
                    <div class="pt-4">
                        <div class="row" style="justify-content: center; align-items: center;">
                            <!-- <div class="col-lg-1"></div> -->
                            <div class="col-lg-5">
                                <img style="border: solid 2px; border-radius: 10px; padding: 42px; background-color: #fff;" src="assets/img/logo_page/clearspace1.png" />
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5">
                                <img style="border: solid 2px; border-radius: 10px; padding: 20px; background-color: #fff;" src="assets/img/logo_page/clearspace2.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4" style="background-color: #f1f1f1;">
                <div class="container pt-3">
                    <h3 class="headd2" style="color: rgb(30, 30, 30);">Incorrect Usage</h3>
                    <p style="text-align: justify;" class="m-0 para1 text-dark">Maintaining the integrity of the Royal Global University logo is key to
                        building a
                        strong identity. It must
                        be
                        presented
                        in a consistent and legible manner. Do not alter the logo in any way by changing or adding
                        elements or
                        using
                        only
                        portions of it. Never change the logo’s colour or warp or distort it. Do not create a custom
                        logo for
                        specific
                        purposes.
                        This dilutes our identity. Use only the University-approved Logo file available for download in
                        our
                        website
                        rgu.ac.
                    </p>
                    <div class="pt-3">
                        <li class="para1 m-0 text-dark">Do not change the colours of the Logo.</li>

                        <li class="para1 m-0 text-dark">Do not change the proportions of the Logo elements.</li>

                        <li class="para1 m-0 text-dark">Do not change the fonts and sizes of the Text in the Logo.</li>

                        <li class="para1 m-0 text-dark">Text in the Logo is in English only, no other language other than
                            English
                            should be used.</li>


                        <li class="para1 m-0 text-dark">Do not reduce the clear space when using the logo.</li>
                    </div>
                    <div class="pt-4 pb-5 container">
                        <div class="row">
                            <div  class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/1.png" /></div>
                            <div class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/2.png" /></div>
                            <div class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/3.png" /></div>
                            <div class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/4.png" /></div>
                            <div class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/5.png" /></div>
                            <div class="col-lg-4 p-3"><img style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);" src="assets/img/logo_page/6.png" /></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
