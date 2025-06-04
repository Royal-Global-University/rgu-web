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
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsaps/sankar-barman.jpeg" alt="">
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

                            <h2 class="headd1 fw-bold pt-5" style="color: #FF9A1E; font-weight: 700; font-size: 35px;">
                                Dr. Sankar Barman
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold faculty-underline" style="color: #fff; font-weight: 700;">
                                Associate Professor, The Assam Royal Global University
                            </h2>

                            <!-- <h2 class="para1 mb-5 faculty-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                      Member of Advisory Board, The Assam Royal Global University
                    </h2> -->

                            <div>
                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Qualifications
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Ph.D.: Energy and Environment: Malaviya National Institute of Technology, Jaipur
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            M.Tech.: Energy Studies: Indian Institute of Technology, Delhi
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            M.Sc.: Physics (Nuclear and High Energy Physics): Gauhati University
                                        </span>
                                    </li>


                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Academic Experience
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                7 Years
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Industry Experience
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                3.5 Years
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Research
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                Research (outside teaching): 3 Years
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Research Interest
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                Development of Environmentally Sustainable product
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Paper Publication in Journals:
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                National: 10
                                            </span>
                                        </li>

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                International: 4
                                            </span>
                                        </li>

                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Patent Published
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                2
                                            </span>
                                        </li>
                                    </ul>


                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Book Chapter Published
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                1
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Projects
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                2
                                            </span>
                                        </li>
                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Any Other Achievement/ Award
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                Renewable energy products transferred to the market: 3 NOS
                                            </span>
                                        </li>

                                    </ul>

                                    <h2 class="headd3 mb-3 fw-bold mt-4"
                                        style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                        Patented product transferred to the market
                                    </h2>

                                    <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                        <li
                                            style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                            <i class="fa fa-circle"
                                                style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                            <span style="display: block;">
                                                1 NOS
                                            </span>
                                        </li>

                                    </ul>



                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div style="background-color: #fff; height: 40vh; overflow: visible;">

                <div class="row">
                    <div class="col-lg-5 text-center">

                        <div class="text-center">
                            <img style="margin-top: 100px; width: 480px; border: 1px solid #27467A; margin-left: 45px;"
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsaps/sankar-barman.jpeg" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Sankar Barman
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold faculty-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Associate Professor, The Assam Royal Global University
                        </h2>

                        <!-- <h2 class="headd3 mb-5 faculty-underline" style="color: #555; font-style: italic; font-size: 25px;">
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

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Qualifications
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Ph.D.: Energy and Environment: Malaviya National Institute of Technology, Jaipur
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        M.Tech.: Energy Studies: Indian Institute of Technology, Delhi
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        M.Sc.: Physics (Nuclear and High Energy Physics): Gauhati University
                                    </span>
                                </li>


                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Academic Experience
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            7 Years
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Industry Experience
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            3.5 Years
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Research (outside teaching): 3 Years
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research Interest
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Development of Environmentally Sustainable product
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Paper Publication in Journals:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            National: 10
                                        </span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            International: 4
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Patent Published
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Book Chapter Published
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            1
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Projects
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2
                                        </span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Any Other Achievement/ Award
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Renewable energy products transferred to the market: 3 NOS
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Patented product transferred to the market
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            1 NOS
                                        </span>
                                    </li>

                                </ul>



                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
