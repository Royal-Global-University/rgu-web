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
                Admission Open - Apply Now
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
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/department-all/agriculture/mob-agri.png"
            alt="" />
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
                Admission Open - Apply Now
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
        <img src="mobile-assets/department-all/agriculture/web-agri.png" alt="" />
    </div>
@endsection
