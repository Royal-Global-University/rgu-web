@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 120px;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Business (RSB)</span></h2>

            <div style="padding: 20px">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 535px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. George AP
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Dean, <br>
                                    Royal School of Commerce <br>
                                    Royal School of Business
                                </p>
                                <a href="faculty-george-ap">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 535px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/3.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. S.P.
                                    Singh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/Pradeep.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Pradeep Kumar Jain</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/prof-dr-Pradeep" class="profile-link">View Profile</a>
                        </div>
                    </div>
                </div>


                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Diganta
                                    Munshi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Registrar, Administration <br>
                                    Director, IQAC <br>
                                    Dean, Royal School of Engineering & Technology <br>
                                    Royal School of Information Technology
                                </p>
                                <a href="faculty-diganta-munshi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/2.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. D.N.
                                    Singh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Registrar Academic and I/C Dean, Royal School of Communication & Media</p>
                                <a href="/Prof-dn-singh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Sudip-Chakraborty.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Sudip
                                    Chakraborty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & I/C Dy. Dean
                                </p>
                                <a href="faculty-sudip-chakraborty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Arpee
                                    Saikia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD</p>
                                <a href="faculty-arpee-saikia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsc/3.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Aruna Dev
                                    Rroy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor & HoD
                                </p>
                                <a href="faculty-dr-aruna-dev-roy">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rishi-Chakravarty-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Rishi
                                    Chakravarty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor</p>
                                <a href="faculty-rishi-chakravarty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Darshana-Bhagowati.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Darshana
                                    Bhagowati</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-darshana-bhagowati">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Niva-Kalita-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Niva Kalita
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-niva-kalita">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Padum-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Padum
                                    Chetry</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-padum-chetry">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rajdeep-Nag.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Rajdeep Nag
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-rajdeep-nag">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Sampada.jpeg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Sampada
                                    Tiwari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-sampada">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Santosh-K-Anand-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Santosh K.
                                    Anand</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Deputy
                                    Controller of
                                    Examination</p>
                                <a href="faculty-santosh-kumar-anand">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Suman-Agarwal-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Suman
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-suman-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Dipak Jain
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Dipak-jain">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Nibir-Pratim-Choudhury.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Nibir
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Nibir-Pratim">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Richika
                                    Kedia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-richika-kedia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rikh-Roy.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rikh Roy
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-rikh-roy">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ritishna-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Ritishna
                                    Sarma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-ritishna-sarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Roshni-Agarwal.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Roshni
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-roshni-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Srawan-goenka-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Srawan Kr.
                                    Goenka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Kalyani-Gohain.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Kalyani
                                    Gohain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Teaching Assistant</p>
                                <a href="faculty-kalyani-gohain">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Neha-Tiwari.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Neha Tiwari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Teaching Assistant</p>
                                <a href="faculty-neha-tiwari">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 460px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/Jayshree Talukdar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Jayshree Talukdar</h5>
                                <a href="faculty-jayshree-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4 mt-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 460px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/CA Kuldip Agarwal.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">CA Kuldip
                                    Agarwal</h5>
                                <a href="faculty-kuldip-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4 mt-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 460px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/Manas Pratim Gogoi.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Manas
                                    Pratim Gogoi</h5>
                                <a href="faculty-manas-pratim">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Business (RSB)</span></h2>

            <div style="padding: 20px 90px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 535px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. George AP
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Dean, <br>
                                    Royal School of Commerce <br>
                                    Royal School of Business
                                </p>
                                <a href="faculty-george-ap">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 535px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/3.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. S.P.
                                    Singh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 535px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="/mobile-assets/Pradeep.png" alt="Profile image ">
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Pradeep Kumar Jain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor</p>
                                <a href="/prof-dr-Pradeep">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Diganta
                                    Munshi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Registrar, Administration <br>
                                    Director, IQAC <br>
                                    Dean, Royal School of Engineering & Technology <br>
                                    Royal School of Information Technology
                                </p>
                                <a href="faculty-diganta-munshi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/2.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. D.N.
                                    Singh</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Registrar Academic and I/C Dean, Royal School of Communication & Media</p>
                                <a href="/Prof-dn-singh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Sudip-Chakraborty.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Sudip Chakraborty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & I/C Dy. Dean
                                </p>
                                <a href="faculty-sudip-chakraborty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Arpee
                                    Saikia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HoD</p>
                                <a href="faculty-arpee-saikia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsc/3.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Aruna Dev
                                    Rroy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor & HoD
                                </p>
                                <a href="faculty-dr-aruna-dev-roy">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rishi-Chakravarty-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Rishi
                                    Chakravarty</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor</p>
                                <a href="faculty-rishi-chakravarty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Darshana-Bhagowati.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Darshana
                                    Bhagowati</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-darshana-bhagowati">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Niva-Kalita-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Niva Kalita
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-niva-kalita">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Padum-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Padum
                                    Chetry</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-padum-chetry">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rajdeep-Nag.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Rajdeep Nag
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-dr-rajdeep-nag">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Sampada.jpeg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Sampada
                                    Tiwari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-sampada">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Santosh-K-Anand-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Santosh K.
                                    Anand</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Deputy
                                    Controller of
                                    Examination</p>
                                <a href="faculty-santosh-kumar-anand">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Suman-Agarwal-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Suman
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-suman-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Dipak Jain
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Dipak-jain">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Nibir-Pratim-Choudhury.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Nibir
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Nibir-Pratim">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Richika
                                    Kedia</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-richika-kedia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rikh-Roy.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rikh Roy
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-rikh-roy">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ritishna-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Ritishna
                                    Sarma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-ritishna-sarma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Roshni-Agarwal.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Roshni
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-roshni-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Srawan-goenka-RSC.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Srawan Kr.
                                    Goenka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Kalyani-Gohain.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Kalyani
                                    Gohain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Teaching Assistant</p>
                                <a href="faculty-kalyani-gohain">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Neha-Tiwari.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Neha Tiwari
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Teaching Assistant</p>
                                <a href="faculty-neha-tiwari">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4 ">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/Jayshree Talukdar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms.
                                    Jayshree Talukdar</h5>
                                <a href="faculty-jayshree-talukdar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/CA Kuldip Agarwal.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">CA Kuldip
                                    Agarwal</h5>
                                <a href="faculty-kuldip-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Visiting Faculty/Manas Pratim Gogoi.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Manas
                                    Pratim Gogoi</h5>
                                <a href="faculty-manas-pratim">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/roshni.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Roshni Saikia</h5>
                                <a href="faculty-roshni-saikia">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
