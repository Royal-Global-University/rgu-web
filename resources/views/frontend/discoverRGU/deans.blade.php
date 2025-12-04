@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('mobile-assets/boardofmanagement/bg.svg');">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                style="color: #27467A; font-weight: 900;">
                Deans’ Corner</h2>

            <div style="padding: 20px 30px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Nandana.jpeg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Nandana Dutta</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dean Academic and Professor of
                                    English, The Assam
                                    Royal Global University</p>

                                <a href="faculty-hari-prasad-agarwal" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsa/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad Agarwal</h5>

                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Dean, Royal School of Architecture</li>
                                    <li>• Dean, Royal School of Design</li>
                                    <li>• Dean, Royal School of Fashion Design & Technology</li>
                                    <li>• Dean, Royal School of Fine Arts</li>
                                </ul>


                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Anuradhadevi-RSAPS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    Anuradha Devi</h5>
                                <p class="para1 pb-3" style="color: #27467A; line-height: 1.3;">Professor & Dean,
                                    RSAPS<br>
                                    The Assam Royal Global University</p>

                                <a href="faculty-anuradha-devi" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    George AP</h5>
                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Commerce</li>
                                    <li>• Professor & Dean, Royal School of Business</li>
                                    <li>• The Assam Royal Global University</li>
                                </ul>

                                <a href="faculty-george-ap" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. D.N.
                                    Singh</h5>
                                <p>Professor & Registrar Academic and I/C Dean, Royal School of Communication & Media</p>

                                <a href="Prof-dn-singh" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsbas/surajit.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Surajit Mukhopadhyay
                                </h5>
                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Humanities & Social Sciences</li>
                                    <li>• Professor & Dean, Royal School of Behavioural & Allied Sciences</li>
                                    <li>• Director, Centre for Inter-Disciplinary Research</li>
                                </ul>

                                <a href="faculty-surajit-c-mukhopadhyay">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/all-faculty/rsaps/15.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Rama
                                    Ranjan
                                    Bhattacharjee,<br> Royal School of Applied & Pure Sciences (RSAPS)
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dean - Research & Innovation</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsbsc/2.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Anupam Chatterjee
                                </h5>
                                <p class="para1 pb-3" style="color: #27467A; line-height: 1.3;">
                                    Dean & Professor, Royal School of Bio-Sciences
                                </p>

                                <a href="faculty-anupam-chatterjee" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Debendra-Kumar-Nayak.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Debendra Kumar Nayak
                                </h5>
                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>Professor & Dean, Royal School of Environmental & Earth Sciences</li>
                                </ul>
                                <a href="/faculty-debendra-kumar-nayak">
                                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                        Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Diganta Munshi
                                </h5>
                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Registrar, Administration</li>
                                    <li>• Director, IQAC</li>
                                    <li>• Dean, Royal School of Engineering & Technology</li>
                                    <li>• Dean, Royal School of Information Technology</li>
                                </ul>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rsla/Prof-Bhuban-Ch-Barooah.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Bhuban Ch Barooah
                                </h5>
                                <p class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean,
                                    Royal School of Law & Administration
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Nikhil Kumar Chrungoo
                                </h5>
                                <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Life Sciences</li>
                                    <li>• I/C Dean, Royal School of Agriculture</li>
                                </ul>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rsl/dr-indrani-singh-rai.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Indrani Singh Rai
                                </h5>
                                <p class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean, Royal School of Languages
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsmas/Abhijit.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Abhijit Dutta
                                </h5>
                                <p class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean, Royal School of Medical & Allied Sciences
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Verma.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. (Dr.) M P Verma, Royal School of Hotel Management, Royal School of Travel and
                                    Tourism Management
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Dean
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsp/Rao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. (Dr.) Chennu Maruthi Malya Prasada Rao
                                </h5>
                                <p class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor and Dean, Royal School of Pharmacy
                                </p>

                                <a href="ch-m-m-prasad-rao" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/deans/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Deans’ Corner </h2>

            <div style="padding: 20px 80px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 610px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Nandana.jpeg" class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Nandana Dutta</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Dean Academic and Professor of
                                    English, The Assam Royal Global University</p>

                                <a href="Dr-Nandana-Dutta" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsa/1.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.)
                                    Hari Prasad Agarwal</h5>

                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Dean, Royal School of Architecture</li>
                                    <li>• Dean, Royal School of Design</li>
                                    <li>• Dean, Royal School of Fashion Design & Technology</li>
                                    <li>• Dean, Royal School of Fine Arts</li>
                                </ul>


                                <a href="faculty-hari-prasad-agarwal" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Anuradhadevi-RSAPS.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    Anuradha Devi</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, RSAPS<br>
                                    The Assam Royal Global University</p>

                                <a href="faculty-anuradha-devi" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof.
                                    George AP</h5>
                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Commerce</li>
                                    <li>• Professor & Dean, Royal School of Business</li>
                                    <li>• The Assam Royal Global University</li>
                                </ul>

                                <a href="faculty-george-ap" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/2.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. D.N.
                                    Singh</h5>
                                <p>Professor & Registrar Academic and I/C Dean, Royal School of Communication & Media</p>

                                <a href="Prof-dn-singh" style="position: absolute; bottom: 20px;">
                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsbas/surajit.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Surajit Mukhopadhyay
                                </h5>
                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Humanities & Social Sciences</li>
                                    <li>• Professor & Dean, Royal School of Behavioural & Allied Sciences</li>
                                    <li>• Director, Centre for Inter-Disciplinary Research</li>
                                </ul>
                                <a href="faculty-surajit-c-mukhopadhyay">
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
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsbsc/2.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Anupam Chatterjee
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Dean & Professor, Royal School of Bio-Sciences
                                </p>

                                <a href="faculty-anupam-chatterjee" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/updated-faculty-img/Debendra-Kumar-Nayak.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Debendra Kumar Nayak
                                </h5>
                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>Professor & Dean, Royal School of Environmental & Earth Sciences</li>
                                </ul>
                                <a href="/faculty-debendra-kumar-nayak">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Diganta Munshi
                                </h5>
                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Registrar, Administration</li>
                                    <li>• Director, IQAC</li>
                                    <li>• Dean, Royal School of Engineering & Technology</li>
                                    <li>• Dean, Royal School of Information Technology</li>
                                </ul>

                                <a href="faculty-diganta-munshi" style="position: absolute; bottom: 20px;">
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
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rsla/Prof-Bhuban-Ch-Barooah.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Bhuban Ch Barooah
                                </h5>
                                <p class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean,
                                    Royal School of Law & Administration
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 630px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Nikhil Kumar Chrungoo
                                </h5>
                                <ul class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>• Professor & Dean, Royal School of Life Sciences</li>
                                    <li>• I/C Dean, Royal School of Agriculture</li>
                                </ul>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;"
                                    src="mobile-assets/all-faculty/rsl/dr-indrani-singh-rai.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Dr. Indrani Singh Rai
                                </h5>
                                <p class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean, Royal School of Languages
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsmas/Abhijit.jpg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Abhijit Dutta
                                </h5>
                                <p class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor & Dean, Royal School of Medical & Allied Sciences
                                </p>

                                <!-- <a href="" style="position: absolute; bottom: 20px;">
                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Verma.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. (Dr.) M P Verma
                                </h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">
                                    Professor & Dean, Royal School of Hotel Management, Royal School of Travel and Tourism
                                    Management
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rsp/Rao.png"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1"
                                style="position: relative; padding-bottom: 50px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. (Dr.) Chennu Maruthi Malya Prasada Rao
                                </h5>
                                <p class="para1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    Professor and Dean, Royal School of Pharmacy
                                </p>

                                <a href="ch-m-m-prasad-rao" style="position: absolute; bottom: 20px;">
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
