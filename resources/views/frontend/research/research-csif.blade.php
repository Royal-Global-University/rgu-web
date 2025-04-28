@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="mobile-headd2 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">
                    Central Sophisticated Instrumentation <span style="color: #FF9A1E; font-weight: 500;">Facility (CSIF)</span>
                </h2>

                <p class="text-dark para1 pt-3 pb-3" style="text-align: justify;">
                    To support research and innovation across various departments, and to provide faculty members and research
                    scholars with easy access to cutting-edge technology for their scientific investigations, the university has
                    established a Central Sophisticated Instrumentation Facility featuring advanced instruments such as GC-MS,
                    FTIR, UV-Visible Spectrophotometer, Real-Time PCR, and Milli-Q® Elix® Essential Water Purification System.
                </p>

                <img src="mobile-assets/research/mob.png" alt="">

            </div>
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="headd1 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">Central
                    Sophisticated Instrumentation <span style="color: #FF9A1E; font-weight: 500;">Facility (CSIF)</span> </h2>

                <p class="text-dark para1 pt-3 pb-3" style="text-align: justify;">
                    To support research and innovation across various departments, and to provide faculty members and research
                    scholars with easy access to cutting-edge technology for their scientific investigations, the university has
                    established a Central Sophisticated Instrumentation Facility featuring advanced instruments such as GC-MS,
                    FTIR, UV-Visible Spectrophotometer, Real-Time PCR, and Milli-Q® Elix® Essential Water Purification System.
                </p>

                <img src="mobile-assets/research/web.png" alt="">

            </div>
        </section>
    </div>
@endsection
