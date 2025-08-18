@extends('frontend.master')
@section('content')
    <div class="mobile">
        <!--Start Header-->
        @include('frontend/components/mobileheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/boardofmanagement/bg.svg); background-size: cover;">

            <h2 class="headd2 mb-3 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 110px; position: relative;">
                Royal School of <br><span style="color: #FF9A1E; font-weight: 500;">
                    Engineering & Technology (RSET)</span></h2>


            <div style="padding: 20px 35px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
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

                </div>

            </div>

            <div class="pt-2 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 80px; background-color: #27467A; color: #fff;">
                    <h5 class=" text-center text-white fw-bold ">
                        Department of Computer Science and Engineering
                    </h5>
                </div>
            </div>
            <div style="padding: 20px 35px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rashel-Sarkar-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Rashel Sarkar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-rashel-sarkar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Deepjyoti-Choudhury-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Deepjyoti
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor & HOD, Computer Science & Engineering
                                </p>
                                <a href="faculty-deepjyoti-choudhury">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Anupam-Das-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Anupam Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-anupam-das">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dipankar.jpg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Dipankar
                                    Dutta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor <br>
                                </p>
                                <a href="faculty-dipankar-dutta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Dr-Samarjit-Das-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Samarjit Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-samarjit-das">
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
                                    src="mobile-assets/updated-faculty-img/Afsana-Laskar-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Afsana
                                    Laskar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rset/cse/7.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Akangkhi
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-akangkhi-borah">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Ankita-Goyal-Agarwala-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Ankita
                                    Goyal Agarwala</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-ankita-goyal-agarwala">
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
                                    src="mobile-assets/updated-faculty-img/Nayan-J-Kalita-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Nayan Jyoti
                                    Kalita</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-nayan-jyoti-kalita">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Nilakshi-Deka-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Nilakshi
                                    Deka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-nilakshi-deka">
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
                                    src="mobile-assets/updated-faculty-img/Spandan-Kumar-Barthakur-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Spandan
                                    Kumar Barthakur</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-spandan-barthakur">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Vanita-Agrawal-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Vanita
                                    Agrawal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Head, Laboratory Services
                                </p>
                                <a href="faculty-vanita-agarwal">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rashmi
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant
                                </p>

                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <div class="pt-2 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 80px; background-color: #27467A; color: #fff;">
                    <h5 class=" text-center text-white fw-bold ">
                        Department of Mechanical Engineering
                    </h5>
                </div>
            </div>

            <div style="padding: 20px 35px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
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

                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Bishal-Podder-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Bishal
                                    Podder</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator, Mechanical Engineering
                                </p>
                                <a href="faculty-bishal-podder">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rset/me/2.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Hirak
                                    Ranjan Das</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor <br>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Smrity.PNG"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Smrity Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor <br>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Biswajit-Choudhury-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Biswajit
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>
                                </p>
                                <a href="faculty-biswajit-choudhury">
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
                                    src="mobile-assets/updated-faculty-img/Zunaid-Ahmed-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Zunaid
                                    Ahmed</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>
                                </p>
                                <a href="faculty-zunaid-ahmed">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="pt-2 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 80px; background-color: #27467A; color: #fff;">
                    <h5 class=" text-center text-white fw-bold ">
                        Department of Civil Engineering
                    </h5>
                </div>
            </div>

            <div style="padding: 20px 35px">

                <div class="row">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/civil-engg/1.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Arnab Sarma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal
                                    Global University</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Shwetambara Verma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal
                                    Global University</p>
                                <a href="dr-shwetambara-verma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Abhijeet-Dey-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Abhijeet
                                    Dey</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal
                                Global University</p>
                                <a href="faculty-abhijeet-dey">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr.-Rishikesh-Duarah-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rishikesh
                                    Duarah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                    Coordinator, Civil Engineering and Assistant Dean, Admission</p>
                                    <a href="faculty-rishikesh-duarah">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bonisha-Borah-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Bonisha
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-bonisha-borah">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shehnaz-Ara-Rahman-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Shehnaz Ara
                                    Rahman</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                    <a href="faculty-shehnaz-ara-rahman">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shinjini-Paul-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Shinjini
                                    Paul Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Assistant
                                    Dean, Student Affairs <br></p>
                                    <a href="faculty-shinjini-paul-choudhury">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Antara-Banerjee-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Antara
                                    Banerjee</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Chandra-Upadhyaya-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Chandra
                                    Upadhyaya</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-chandra-upadhyaya">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Jemima-Yasmin.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Jemima
                                    Yasmin</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                    <a href="faculty-jemima-yasmin">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Raisa-Tamsin-Hussain.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Raisa
                                    Tamsin Hussain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rajesh Deb
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </section>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(mobile-assets/boardofmanagement/bg.svg); background-size: cover;">

            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Engineering & Technology (RSET)</span></h2>

            <div style="padding: 20px 70px;">

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

                </div>

            </div>

            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; margin-right: 50%; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Computer Science and Engineering
                    </h4>
                </div>
            </div>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Rashel-Sarkar-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Rashel Sarkar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="faculty-rashel-sarkar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Deepjyoti-Choudhury-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Deepjyoti
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor & HOD, Computer Science & Engineering
                                </p>
                                <a href="faculty-deepjyoti-choudhury">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Anupam-Das-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Anupam Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-anupam-das">
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
                                    src="mobile-assets/updated-faculty-img/Dipankar.jpg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Dipankar
                                    Dutta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor <br>
                                </p>
                                <a href="faculty-dipankar-dutta">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Dr-Samarjit-Das-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Samarjit Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor
                                </p>
                                <a href="faculty-samarjit-das">
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
                                    src="mobile-assets/updated-faculty-img/Afsana-Laskar-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Afsana
                                    Laskar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rset/cse/7.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Akangkhi
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-akangkhi-borah">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Ankita-Goyal-Agarwala-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Ankita
                                    Goyal Agarwala</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-ankita-goyal-agarwala">
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
                                    src="mobile-assets/updated-faculty-img/Nayan-J-Kalita-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Nayan Jyoti
                                    Kalita</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-nayan-jyoti-kalita">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Nilakshi-Deka-RSIT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Nilakshi
                                    Deka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-nilakshi-deka">
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
                                    src="mobile-assets/updated-faculty-img/Spandan-Kumar-Barthakur-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Spandan
                                    Kumar Barthakur</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-spandan-barthakur">
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
                                    src="mobile-assets/updated-faculty-img/Ms-Vanita-Agrawal-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Vanita
                                    Agrawal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Head, Laboratory Services
                                </p>
                                <a href="faculty-vanita-agarwal">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rashmi
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant
                                </p>

                            </div>
                        </div>
                    </div>



                </div>
                <div>
                    <h3 class="text-white text-center fw-bold mb-5 pt-3 pb-3" style="background-color: #27467A">Visiting Faculty</h3>

                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="mobile-assets/updated-faculty-img/RSIT/Mr. Dibyajyoti Deka.jpeg"
                                        class="img-fluid rounded border" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                        Mr. Dibyajyoti Deka
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="mobile-assets/updated-faculty-img/RSIT/Ms. Dubari Sarma.jpg"
                                        class="img-fluid rounded border" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                        Ms. Dubari Sarma
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="mobile-assets/updated-faculty-img/RSIT/Ms. Meghna Dasgupta.jpeg"
                                        class="img-fluid rounded border" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                        Ms. Meghna Dasgupta
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="mobile-assets/updated-faculty-img/RSIT/Ms. Vaishnavi Rajendran.jpeg"
                                        class="img-fluid rounded border" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                        Ms. Vaishnavi Rajendran
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; margin-right: 60%; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Mechanical Engineering
                    </h4>
                </div>
            </div>
            <div class="container">
                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Bishal-Podder-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Bishal
                                    Podder</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator, Mechanical Engineering
                                </p>
                                <a href="faculty-bishal-podder">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rset/me/2.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Hirak
                                    Ranjan Das</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Associate Professor, <br>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Manash.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Manash Protim Boruah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor <br>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Smrity.PNG"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Smrity Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor <br>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-Biswajit-Choudhury-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Biswajit
                                    Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>
                                </p>
                                <a href="faculty-biswajit-choudhury">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Zunaid-Ahmed-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Zunaid
                                    Ahmed</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>
                                </p>
                                <a href="faculty-zunaid-ahmed">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; margin-right: 60%; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Civil Engineering
                    </h4>
                </div>
            </div>

            <div style="padding: 20px 70px">

                <div class="row">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/civil-engg/1.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Arnab Sarma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal
                                    Global University</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Shwetambara Verma</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal
                                    Global University</p>
                                <a href="dr-shwetambara-verma">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Abhijeet-Dey-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Abhijeet
                                    Dey</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal
                                Global University</p>
                                <a href="faculty-abhijeet-dey">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr.-Rishikesh-Duarah-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rishikesh
                                    Duarah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                    Coordinator, Civil Engineering and Assistant Dean, Admission</p>
                                    <a href="faculty-rishikesh-duarah">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bonisha-Borah-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Bonisha
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-bonisha-borah">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shehnaz-Ara-Rahman-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Shehnaz Ara
                                    Rahman</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                    <a href="faculty-shehnaz-ara-rahman">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Shinjini-Paul-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Shinjini
                                    Paul Choudhury</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Assistant
                                    Dean, Student Affairs <br></p>
                                    <a href="faculty-shinjini-paul-choudhury">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Antara-Banerjee-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Antara
                                    Banerjee</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-antara-banerjee">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Chandra-Upadhyaya-RSET.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Chandra
                                    Upadhyaya</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-chandra-upadhyaya">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Jemima-Yasmin.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Jemima
                                    Yasmin</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-jemima-yasmin">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Raisa-Tamsin-Hussain.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Raisa
                                    Tamsin Hussain</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-raisa-tamsin-hussain">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Rajesh Deb
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor <br> The
                                    Assam Royal Global University</p>
                                <a href="faculty-rajesh-deb">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



        </section>
    </div>
@endsection
