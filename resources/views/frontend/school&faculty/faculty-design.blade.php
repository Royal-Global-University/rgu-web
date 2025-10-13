@extends('frontend.master')
@section('content')
    <div class="mobile">
        <!--Start Header-->
        @include('frontend/components/mobileheader')
        <!--End Header-->

        <section
            style="background-image: url(mobile-assets/boardofmanagement/bg.svg); background-size: cover; padding-top: 100px;">
            <h2 class="headd1 mb-5 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Design (RSD)</span></h2>

            <div style="padding: 20px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Dean, <br>
                                    Royal School of Design <br>
                                    Royal School of Architecture <br>
                                    Royal School of Fashion Design & Technology <br>
                                    Royal School of Fine Arts
                                </p>
                                <a href="faculty-hari-prasad-agarwal">
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
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Tikendra.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Tikendra
                                    Kumar
                                    Sahu</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="/faculty-tikendra-Kumar-sahu">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Asif-Iqbal-Mazid-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>

                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Asif Iqbal
                                    Mazid</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator,<br>
                                    Royal School of Fashion Design & Technology<br>

                                </p>
                                <a href="faculty-asif-iqbal-mazid">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Suresh
                                    Goduka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-suresh-goduka">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/2.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Susmita
                                    Nath</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, Graphic & Product Design
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="demo-assets/Dipankar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Dipankar Gogoi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/jintu.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Jintu Mahanta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-jintu-mahanta">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Manas.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Manash Pratim Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                {{-- <a href="faculty-jintu-mahanta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-T-Abhisek.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. T Abhisek
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-Abhisek">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/3.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Varsha Jain
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>
                                </p>
                                <a href="faculty-varsha-jain">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/4.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Zubin Islam
                                </h5>
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Ankit.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankit
                                    Bordoloi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant, <br>

                                </p>
                                <a href="/faculty-ankit-bordoloi">
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
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Interior Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Siddhartha-Deb-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    Siddhartha Deb</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/3.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Bhola Saha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                    Coordinator, RSA</p>
                                <a href="faculty-Bhola-Saha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Kasturi-Borah-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Kasturi
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor</p>
                                <a href="faculty-kasturi-borah">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Barnali-Chakrabarty-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Barnali
                                    Chakrabarty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-barnali-chakraborty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Barsha-Kunda-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Barsha
                                    Kunda</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-barsha-kunda">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Diksha-Dutta-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Diksha
                                    Dutta</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Diksha-Dutta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Jagriti-Pathak-RSA.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Jagriti
                                    Pathak</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor
                                </p>
                                <a href="faculty-jagriti-pathak">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/10.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Jugal
                                    Devanath</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/11.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Mohua
                                    Moitri Mazumdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Pooja-Singh-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Pooja</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-pooja-singh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/13.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Pratyasha
                                    Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-pratyasha-das">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/15.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Rishangi
                                    Bharadwaj</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ritu-Rani-RSD.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Ritu Rani
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-ritu-rani">
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
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/17.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Sanchari
                                    Kar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-sanchari-kar">
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
                                    src="mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Rajesh Deb
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms Anjali Kumar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-anjali-kumar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Pankaj Gogoi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Jahnabi
                                    Mahanta</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-jahnabi-mahanta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Fashion Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Asif-Iqbal-Mazid-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Asif Iqbal
                                    Mazid</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator
                                </p>
                                <a href="faculty-asif-iqbal-mazid">
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
                                    src="mobile-assets/updated-faculty-img/Amarendra.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Thangjam
                                    Roshini</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-thangjam-roshini">
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
                                    src="mobile-assets/updated-faculty-img/Akriti-Mazumdar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Akriti
                                    Mazumdar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-akriti-mazumdar">
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
                                    src="mobile-assets/updated-faculty-img/Gazala-Anjum-Goney-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Gazala
                                    Anjum Goney</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-gazala-anjum-goney">
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
                                    src="mobile-assets/updated-faculty-img/Pubika-Michong-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Pubika
                                    Michong</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-pubika-michong">
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
                                    src="mobile-assets/updated-faculty-img/Sukriti-Baruah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Sukriti
                                    Baruah</h5>
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-T-Abhisek.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. T Abhisek
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-Abhisek">
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
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankit
                                    Bordoloi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant, <br>

                                </p>
                                <a href="/faculty-ankit-bordoloi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Aruniva-Bhagwati.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Aruniva
                                    Bhagwati</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant
                                </p>
                                <a href="faculty-aruniva-bhagawati">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="text-center text-white fw-bold pt-2 pb-2" style="background-color: #27467A">
                    <h3>Visiting Faculty</h3>
                </div>

                <div class="row mt-5" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsc/no-pic.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Ameet Baruah
                                </h5>
                                <a href="faculty-ameet">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4 pt-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rajkumari
                                    Surjabala Devi
                                    Das</h5>
                                {{-- <a href="">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p> --}}
                                </a>
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
                Royal School of <span style="color: #FF9A1E; font-weight: 500;"> Design (RSD)</span></h2>


            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; margin-right: 70%; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Dean, <br>
                                    Royal School of Design <br>
                                    Royal School of Architecture <br>
                                    Royal School of Fashion Design & Technology <br>
                                    Royal School of Fine Arts
                                </p>
                                <a href="faculty-hari-prasad-agarwal">
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Tikendra.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Tikendra
                                    Kumar Sahu</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="/faculty-tikendra-Kumar-sahu">
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Asif-Iqbal-Mazid-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>

                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Asif Iqbal
                                    Mazid</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator,<br>
                                    Royal School of Fashion Design & Technology<br>

                                </p>
                                <a href="faculty-asif-iqbal-mazid">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/suresh.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Suresh
                                    Goduka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-suresh-goduka">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/2.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Susmita
                                    Nath</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, Graphic & Product Design
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="demo-assets/Dipankar.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Dipankar Gogoi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/jintu.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Jintu Mahanta
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-jintu-mahanta">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Manas.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Manash Pratim Borah
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-manash-pratim-borah">
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
                                    src="mobile-assets/updated-faculty-img/Mr-T-Abhisek.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. T Abhisek
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-Abhisek">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/3.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Varsha Jain
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-varsha-jain">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsd/4.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Zubin Islam
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-zubin-islam">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Ankit.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankit
                                    Bordoloi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant, <br>

                                </p>
                                <a href="/faculty-ankit-bordoloi">
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
                        Department of Interior Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px 90px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 610px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad
                                    Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dean
                                    Royal School of Architecture, Royal School of Design, Royal School of Fashion Design &
                                    Technology,
                                    Royal School of Fine Arts</p>

                                <a href="faculty-hari-prasad-agarwal">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 610px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Siddhartha-Deb-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    Siddhartha Deb</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 610px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/3.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Bhola Saha
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor &
                                    Coordinator, RSA</p>
                                <a href="faculty-Bhola-Saha">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 610px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Kasturi-Borah-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Kasturi
                                    Borah</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor</p>
                                <a href="faculty-kasturi-borah">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Barnali-Chakrabarty-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Barnali
                                    Chakrabarty
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-barnali-chakraborty">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Barsha-Kunda-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Barsha
                                    Kunda</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-barsha-kunda">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Diksha-Dutta-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Diksha
                                    Dutta</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-Diksha-Dutta">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Ar-Jagriti-Pathak-RSA.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Jagriti
                                    Pathak</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor
                                </p>
                                <a href="faculty-jagriti-pathak">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/10.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Jugal
                                    Devanath</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/11.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Mohua
                                    Moitri Mazumdar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Pooja-Singh-RSA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Pooja</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-pooja-singh">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/13.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Pratyasha
                                    Das
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-pratyasha-das">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/15.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Rishangi
                                    Bharadwaj</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/16.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Ritu Rani
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-ritu-rani">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;" src="mobile-assets/all-faculty/rsa/17.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Sanchari
                                    Kar
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-sanchari-kar">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 300px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ar. Rajesh Deb
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Mousumi-Deka-RSFA.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Mousumi
                                    Deka</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-mousumi-deka">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Pankaj Gogoi
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsl/Chandni.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ms. Chandni Khaund
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Dr-Fariza-Saidin-RSBAS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Fariza
                                    Saidin</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="faculty-fariza-saidin">
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
                                    src="mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Prasant Mali
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Bisalakshi Sawarni
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/olivia.JPG"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Olivia
                                    Kakati
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor</p>
                                <a href="olivia-kakati">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="text-center text-white fw-bold pt-2 pb-2" style="background-color: #27467A">
                    <h3>Visiting Faculty</h3>
                </div>

                <div class="row mt-5" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Ar%20Madhu.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ar. Madhu Vottery
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/shweta.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Ar. Shweta Das
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="pt-4 pb-4">
                <div
                    style=" display: flex; align-items: center; justify-content: center; height: 60px; background-color: #27467A; color: #fff; margin-right: 60%; border-radius: 0px 60px 60px 0px;">
                    <h4 class=" text-white fw-bold ">
                        Department of Fashion Design
                    </h4>
                </div>
            </div>

            <div style="padding: 20px 70px;">

                <div class="row" style="display: flex; align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsft/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Dean, <br>
                                    Royal School of Fashion Design & Technology <br>
                                    Royal School of Fine Arts <br>
                                    Royal School of Architecture <br>
                                    Royal School of Design
                                </p>
                                <a href="faculty-hari-prasad-agarwal">
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Tikendra.png" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Tikendra
                                    Kumar Sahu</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor
                                </p>
                                <a href="/faculty-tikendra-Kumar-sahu">
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Asif-Iqbal-Mazid-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Asif Iqbal
                                    Mazid</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor & Coordinator
                                </p>
                                <a href="faculty-asif-iqbal-mazid">
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Amarendra.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Thangjam
                                    Roshini</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-thangjam-roshini">
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
                                    src="mobile-assets/updated-faculty-img/Akriti-Mazumdar.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Akriti
                                    Mazumdar</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-akriti-mazumdar">
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
                                    src="mobile-assets/updated-faculty-img/Gazala-Anjum-Goney-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Gazala
                                    Anjum Goney</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-gazala-anjum-goney">
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
                                    src="mobile-assets/updated-faculty-img/Pubika-Michong-RSFT.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Pubika
                                    Michong</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor
                                </p>
                                <a href="faculty-pubika-michong">
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
                                    src="mobile-assets/updated-faculty-img/Sukriti-Baruah.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Sukriti
                                    Baruah</h5>
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
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Mr-T-Abhisek.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. T Abhisek
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Assistant Professor, <br>

                                </p>
                                <a href="faculty-Abhisek">
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
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Ankit.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Ankit
                                    Bordoloi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant, <br>

                                </p>
                                <a href="/faculty-ankit-bordoloi">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 510px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Aruniva-Bhagwati.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Aruniva
                                    Bhagwati</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Teaching Assistant
                                </p>
                                <a href="faculty-aruniva-bhagawati">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="text-center text-white fw-bold pt-2 pb-2" style="background-color: #27467A">
                    <h3>Visiting Faculty</h3>
                </div>

                <div class="row mt-5" style=" align-items: center; justify-content: center;">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Ameet.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Mr. Ameet Baruah
                                </h5>
                            <a href="faculty-ameet">
                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                    Profile</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 490px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rajkumari
                                    Surjabala Devi
                                    Das</h5>
                                {{-- <a href="">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p> --}}
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </section>
    </div>
@endsection
