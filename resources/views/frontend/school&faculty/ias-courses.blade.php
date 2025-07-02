@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
                <!-- floating mob button  -->
                <div>
                    <a href="https://admissions.rgu.ac" style="
                                                                                                        position: fixed;
                                                                                                        bottom: 25px;
                                                                                                        right: 75px;
                                                                                                        background-color: #ef991f;
                                                                                                        color: #fff;
                                                                                                        padding: 12px 20px;
                                                                                                        font-size: 16px;
                                                                                                        font-weight: bold;
                                                                                                        text-decoration: none;
                                                                                                        border-radius: 20px;
                                                                                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                        z-index: 1000;
                                                                                                        overflow: hidden;
                                                                                                        animation: pulse 2s infinite;
                                                                                                        ">
                        <span style="
                                                                                                        position: absolute;
                                                                                                        top: 0;
                                                                                                        left: -75%;
                                                                                                        width: 50%;
                                                                                                        height: 100%;
                                                                                                        background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                        transform: skewX(-25deg);
                                                                                                        animation: shine 2s infinite;
                                                                                                        "></span>
                        Admisssion Open - Apply Now
                    </a>
                    <style>
                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }

                            50% {
                                transform: scale(1.05);
                                box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                            }

                            100% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }
                        }

                        @keyframes shine {
                            0% {
                                left: -75%;
                            }

                            100% {
                                left: 125%;
                            }
                        }
                    </style>
                </div>
                <!-- floating button  -->
        <div style="padding-top: 90px; position: relative;">
            <div>
                <img src="mobile-assets/school-rgu/ias-mob.png" alt="">
            </div>

            <section style="background-image: url(mobile-assets/school-rgu/bg.svg); background-size: cover;">

                <h2 class="headd3 fw-bold text-center  pt-4" style="color: #27467A; font-weight: 900;">
                    Royal School of Humanities <span style="color: #FF9A1E; font-weight: 500;">and Social Sciences</span></h2>

                <div style="padding: 20px;">

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="ba-sociology">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Sociology </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="ba-Economics">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Economics </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="ba-Public-Administration">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Public Administration </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="ba-Political-Science">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Political Science </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="ba-History">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> History </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                    <hr>

                    <h2 class="headd3 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Royal School of Applied <span style="color: #FF9A1E; font-weight: 500;">and Pure Science</span></h2>

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Physics">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Physics </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Mathematics">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Mathematics </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Chemistry">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Chemistry </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr>

                    <h2 class="headd3 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Royal School of Environmental <span style="color: #FF9A1E; font-weight: 500;">and Earth Sciences</span>
                    </h2>

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Geography">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Geography </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Geology">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Geology </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="ba-Geography">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Geography </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>


                    </div>

                    <hr>

                    <h2 class="headd3 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Royal School of Behavioral <span style="color: #FF9A1E; font-weight: 500;">and Allied Sciences</span>
                    </h2>

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="ba-Psychology">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> Psychology </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                    <hr>

                    <h2 class="headd3 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Royal School of Life <span style="color: #FF9A1E; font-weight: 500;">Sciences</span></h2>

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Botany">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Botany </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <a href="bsc-Zoology">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.Sc. <br> Zoology </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                    <hr>

                    <h2 class="headd3 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Royal School of <span style="color: #FF9A1E; font-weight: 500;">Languages</span></h2>

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <a href="ba-English">
                                <div class="p-2 card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                    <div class="card-body">
                                        <h5 style="font-weight: 700; color: #27467A;"
                                            class="text-center card-title headd3 pb-1">B.A. <br> English </h5>
                                        <p class="para1 fw-bold text-center" style="color: #27467A;">03 years</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                </div>

            </section>

        </div>
        <!-- table part  -->
        <div class="container" style="padding: 30px 20px;">

            <h2 class="headd2 fw-bold pt-3 pb-3" style="color: #27467A;">
                Details of the Number of Class and Hours Required
            </h2>

            <div class="table-responsive">
                <table class="para1 shadow-sm" style="width: 100%; font-size: 16px; border-collapse: collapse; color: #333;">

                    <tr style="background-color: #f57c00; color: white; font-weight: bold;">
                        <td style="padding: 10px; border: 1px solid white;" colspan="2">Total Credit</td>
                        <td style="padding: 10px; text-align: center; border: 1px solid white;">41</td>
                    </tr>

                    <!-- Indian History -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; color: #27467A; font-weight: bold;">Indian History</td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 9</td>
                        <td class="text-center"
                            style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Hours</td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Ancient
                        </td>
                        <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">24
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Mediaeval
                        </td>
                        <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">12
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Modern
                        </td>
                        <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">40
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Art and
                            Culture</td>
                        <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">30
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Indian
                            Society</td>
                        <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">30
                        </td>
                    </tr>

                    <!-- Political Science -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Political Science
                        </td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 12</td>
                        <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Indian
                            Polity</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">60
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                            Governance and social justice</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">30
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                            International Relation</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">70
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Internal
                            security</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">20
                        </td>
                    </tr>

                    <!-- Geography -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Geography</td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 6</td>
                        <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; border: 1px solid white;"></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Physical
                            and Human Geography</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">92
                        </td>
                    </tr>

                    <!-- Environmental and General Science -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white; ">Environmental
                            and General Science</td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 5</td>
                        <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                            Environment and Ecology</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">50
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">General
                            Science</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">20
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Disaster
                            Management</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">8
                        </td>
                    </tr>

                    <!-- Economics -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; font-weight: bold; color: #27467A;  ">Economics</td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 4</td>
                        <td style="background-color: #ffe8da; border: 1px solid white; "></td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                            Fundamentals of Indian Economy</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">48
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; "></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                            Agriculture Economy</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">12
                        </td>
                    </tr>

                    <!-- Ethics and Integrity -->
                    <tr style="background-color: #e3f2fd;">
                        <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Ethics and
                            Integrity and Aptitude</td>
                        <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 5</td>
                        <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                        <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Ethics
                            and Integrity</td>
                        <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">76
                        </td>
                    </tr>
                </table>
            </div>


        </div>
        <!-- table part  -->
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
                <!-- floating button  -->
                <div>
                    <a href="https://admissions.rgu.ac/" style="
                                                                                                                    position: fixed;
                                                                                                                    bottom: 35px;
                                                                                                                    right: 50px;
                                                                                                                    background-color: #ef991f;
                                                                                                                    color: #fff;
                                                                                                                    padding: 12px 20px;
                                                                                                                    font-size: 18px;
                                                                                                                    font-weight: bold;
                                                                                                                    text-decoration: none;
                                                                                                                    border-radius: 20px;
                                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                    z-index: 1000;
                                                                                                                    overflow: hidden;
                                                                                                                    animation: pulse 2s infinite;
                                                                                                                    ">
                        <span style="
                                                                                                                    position: absolute;
                                                                                                                    top: 0;
                                                                                                                    left: -75%;
                                                                                                                    width: 50%;
                                                                                                                    height: 100%;
                                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                    transform: skewX(-25deg);
                                                                                                                    animation: shine 2s infinite;
                                                                                                                    "></span>
                        Admisssion Open - Apply Now
                    </a>
                    <style>
                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }

                            50% {
                                transform: scale(1.05);
                                box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                            }

                            100% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }
                        }

                        @keyframes shine {
                            0% {
                                left: -75%;
                            }

                            100% {
                                left: 125%;
                            }
                        }
                    </style>
                </div>
                <!-- floating button  -->
        <div>
            <img src="mobile-assets/school-rgu/ias-web.png" alt="">
        </div>

        <section style="background-image: url(mobile-assets/school-rgu/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center  pt-4" style="color: #27467A; font-weight: 900;">
                Royal School of Humanities <span style="color: #FF9A1E; font-weight: 500;">and Social Sciences</span></h2>

            <div style="padding: 20px 80px;">

                <div class="row text-center">
                    <div class="col-lg-1 mb-4">
                    </div>
                    <div class="col-lg-3 mb-4">

                        <a href="ba-sociology">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         Sociology </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="ba-Economics">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         Economics </h5>
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-4 mb-4">

                        <a href="ba-Public-Administration">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         Public Administration </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-1 mb-4">

                    </div>
                    <div class="col-lg-3 mb-4">

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="ba-Political-Science">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         Political Science </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="ba-History">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         History </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <hr>

                <h2 class="headd1 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Royal School of Applied <span style="color: #FF9A1E; font-weight: 500;">and Pure Science</span></h2>

                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Physics">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Physics </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Mathematics">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Mathematics </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Chemistry">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Chemistry </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <hr>

                <h2 class="headd1 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Royal School of Environmental <span style="color: #FF9A1E; font-weight: 500;">and Earth Sciences</span></h2>

                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Geography">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Geography </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Geology">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Geology </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="ba-Geography">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                        Geography </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>

                <hr>

                <h2 class="headd1 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Royal School of Behavioral <span style="color: #FF9A1E; font-weight: 500;">and Allied Sciences</span></h2>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 mb-4">

                        <a href="ba-Psychology">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         Psychology </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <hr>

                <h2 class="headd1 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Royal School of Life <span style="color: #FF9A1E; font-weight: 500;">Sciences</span></h2>

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Botany">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Botany </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <a href="bsc-Zoology">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">
                                        B.Sc. Zoology </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <hr>

                <h2 class="headd1 fw-bold text-center  pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Royal School of <span style="color: #FF9A1E; font-weight: 500;">Languages</span></h2>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 mb-4">

                        <a href="ba-English">
                            <div class="p-2 card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                                <div class="card-body">
                                    <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">B.A.
                                         English </h5>
                                        <h5 style="font-weight: 700; color: #27467A;" class="text-center card-title headd3 pb-1">Integrated with Civil Service
                                            Programme</h5>
                                    <p class="headd3 fw-bold text-center" style="color: #27467A;">03 years</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

        </section>
        <div>
            <!-- table part  -->
            <div class="container" style="padding: 30px 0px;">

                <h2 class="text-center fw-bold pt-3 pb-3" style="color: #27467A; font-size: 30px;">
                    Details of the Number of Class and Hours Required
                </h2>

                <div class="table-responsive">
                    <table class="para1 shadow-sm" style="width: 100%; font-size: 19px; border-collapse: collapse; color: #333;">

                        <tr style="background-color: #f57c00; color: white; font-weight: bold;">
                            <td style="padding: 10px; border: 1px solid white;" colspan="2">Total Credit</td>
                            <td style="padding: 10px; text-align: center; border: 1px solid white;">41</td>
                        </tr>

                        <!-- Indian History -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; color: #27467A; font-weight: bold;">Indian History</td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 9</td>
                            <td class="text-center"
                                style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Hours</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Ancient
                            </td>
                            <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">24
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Mediaeval
                            </td>
                            <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">12
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Modern
                            </td>
                            <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">40
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Art and
                                Culture</td>
                            <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">30
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Indian
                                Society</td>
                            <td style="padding: 10px; text-align: center;  background-color: #ffe8da; border: 1px solid white;">30
                            </td>
                        </tr>

                        <!-- Political Science -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Political Science
                            </td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 12</td>
                            <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Indian
                                Polity</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">60
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                                Governance and social justice</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">30
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                                International Relation</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">70
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Internal
                                security</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">20
                            </td>
                        </tr>

                        <!-- Geography -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Geography</td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white;">Credit : 6</td>
                            <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; border: 1px solid white;"></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Physical
                                and Human Geography</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white;">92
                            </td>
                        </tr>

                        <!-- Environmental and General Science -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white; ">Environmental
                                and General Science</td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 5</td>
                            <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                                Environment and Ecology</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">50
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">General
                                Science</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">20
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Disaster
                                Management</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">8
                            </td>
                        </tr>

                        <!-- Economics -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; font-weight: bold; color: #27467A;  ">Economics</td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 4</td>
                            <td style="background-color: #ffe8da; border: 1px solid white; "></td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                                Fundamentals of Indian Economy</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">48
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; "></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">
                                Agriculture Economy</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">12
                            </td>
                        </tr>

                        <!-- Ethics and Integrity -->
                        <tr style="background-color: #e3f2fd;">
                            <td style="padding: 10px; font-weight: bold; color: #27467A; border: 1px solid white;">Ethics and
                                Integrity and Aptitude</td>
                            <td style="padding: 10px; font-weight: bold; border: 1px solid white; ">Credit : 5</td>
                            <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe8da; border: 1px solid white;"></td>
                            <td style="padding: 10px; color: #27467A; background-color: #ffe8da; border: 1px solid white;">Ethics
                                and Integrity</td>
                            <td style="padding: 10px; text-align: center; background-color: #ffe8da; border: 1px solid white; ">76
                            </td>
                        </tr>
                    </table>
                </div>


            </div>
            <!-- table part  -->
        </div>
    </div>
@endsection

