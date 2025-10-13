@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="background-color: #fff; height: 40vh; padding-top: 90px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="text-center">
                                <img style="margin-top: 70px; width: 380px; border: 1px solid #27467A;"
                                    src="mobile-assets/updated-faculty-img/Rupak.jpeg" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-3"></div>

                    </div>
                </div>

            </div>

            <div style="background-color: #27467A; padding-top: 190px; padding-bottom: 50px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 pt-4 pb-4">

                            <h2 class="headd1 fw-bold pt-4" style="color: #FF9A1E; font-weight: 700; font-size: 35px;">
                                Dr. Rupak Kumar Dalai
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Assistant Professor
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                                  Member of Advisory Board, The Assam Royal Global University
                                </h2> -->

                            <div>

                                <h3>Dr. Rupak Kumar Dalai earned his Ph.D. in Mathematics (in Harmonic Analysis) from IIT
                                    Guwahati; holds an M.Sc. in
                                    Mathematics from the University of Hyderabad and a B.Sc. in Mathematics from
                                    the Institute of Mathematics and
                                    Applications, Bhubaneswar; and has qualified CSIR-UGC NET (JRF), GATE, and IIT-JAM.</h3>

                                <h3>Dr. Dalai has worked as a postdoctoral researcher at the IISER Pune and Bhopal, where he
                                    combined his research with
                                    teaching assistantship in courses such as Calculus, Real Analysis, Linear Algebra,
                                    Advanced Linear Algebra, and Measure
                                    Theory.  His research interests centre on Harmonic Analysis and its connections with
                                    Partial Differential Equations
                                    (PDEs), with a focus on problems related to heat equations in metric measure spaces,
                                    modulation spaces, and waveguide
                                    manifolds.</h3>

                                <h3>Dr. Dalai’s research contributions include 07 publications in reputed journals such as
                                    the Journal of Mathematical
                                    Analysis and Applications and the Journal of Pseudo-Differential Operators and
                                    Applications. He has also presented at
                                    international conferences, including ICTS Bangalore (2023), IISER Bhopal, the NCMW
                                    Harmonic Analysis meetings, and the
                                    AIS on Harmonic Analysis at the Kerala School of Mathematics.</h3>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div style="background-color: #fff; height: 35vh; overflow: visible;">

                <div class="row">
                    <div class="col-lg-5 text-center">

                        <div class="text-center">
                            <img style="margin-top: 100px; width: 480px; border: 1px solid #27467A; margin-left: 45px;"
                                src="mobile-assets/updated-faculty-img/Rupak.jpeg" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Rupak Kumar Dalai
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Assistant Professor
                        </h2>

                        <!-- <h2 class="headd3 mb-5 half-underline" style="color: #555; font-style: italic; font-size: 25px;">
                                  Member of Advisory Board, The Assam Royal Global University
                                </h2> -->

                    </div>

                </div>
            </div>

            <div style="background-color: #27467A;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7 pt-4 pb-4">

                            <div>

                                <h5 class="text-white text-justify">Dr. Rupak Kumar Dalai earned his Ph.D. in Mathematics (in Harmonic Analysis) from IIT
                                    Guwahati; holds an M.Sc. in
                                    Mathematics from the University of Hyderabad and a B.Sc. in Mathematics from
                                    the Institute of Mathematics and
                                    Applications, Bhubaneswar; and has qualified CSIR-UGC NET (JRF), GATE, and IIT-JAM.</h5>

                                <h5 class="text-white">Dr. Dalai has worked as a postdoctoral researcher at the IISER Pune and Bhopal, where he
                                    combined his research with
                                    teaching assistantship in courses such as Calculus, Real Analysis, Linear Algebra,
                                    Advanced Linear Algebra, and Measure
                                    Theory.  His research interests centre on Harmonic Analysis and its connections with
                                    Partial Differential Equations
                                    (PDEs), with a focus on problems related to heat equations in metric measure spaces,
                                    modulation spaces, and waveguide
                                    manifolds.</h5>

                                <h5 class="text-white">Dr. Dalai’s research contributions include 07 publications in reputed journals such as
                                    the Journal of Mathematical
                                    Analysis and Applications and the Journal of Pseudo-Differential Operators and
                                    Applications. He has also presented at
                                    international conferences, including ICTS Bangalore (2023), IISER Bhopal, the NCMW
                                    Harmonic Analysis meetings, and the
                                    AIS on Harmonic Analysis at the Kerala School of Mathematics.</h5>

                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
