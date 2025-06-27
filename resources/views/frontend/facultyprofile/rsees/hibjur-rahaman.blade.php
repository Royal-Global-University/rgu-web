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
                                    src="mobile-assets/updated-faculty-img/Hibjur-Rahaman.png"
                                    alt="">
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
                                Dr. Md Hibjur Rahaman
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Assistant Professor, Department of Geography
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                  Member of Advisory Board, The Assam Royal Global University
                </h2> -->

                            <div>
                                <h2 class="headd3 mb-3 fw-bold"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Academic Qualification
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">Ph.D. in Geography, Jamia Millia Islamia, New Delhi
                                            (Thesis title: Climate Variability Assessment and Water Resource Management in
                                            the Lower Thoubal Watershed, Manipur).</span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">M.A. Geography, Aligarh Muslim University,
                                            Aligarh</span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">B.A. (Hons.) Geography, Aligarh Muslim University,
                                            Aligarh</span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Total Experience
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            5+ Years
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research (outside teaching)
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            5 Years
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research Interests
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Climate Change; Watershed Management; Remote Sensing & GIS; Machine Learning
                                            Applications in Environment; Natural Resource Management, and Disaster Risk
                                            Analysis.
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Paper Publications in Journals
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            International: 29 (All listed on personal Website: <a style="color: #ffaa00;"
                                                class="fw-bold" href="https://www.hibjuronline.in/my-publications">
                                                https://www.hibjuronline.in/my-publications)</a>

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
                                            03
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Any Other Achievements/Awards
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2017 — Merit Financial Award by the Aligarh Muslim University, Aligarh.
                                        </span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2018 — North East State Level Eligibility Test (NE-SLET) in Geography.
                                        </span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2018 — National Eligibility Test (NET) in Geography with Junior Research
                                            Fellowship (JRF: 2019-2024).
                                        </span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2023 — Featured in 75 Ideas to Promote LiFE (Lifestyle for Environment) by NITI
                                            Aayog, Govt. of India.
                                        </span>
                                    </li>

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            2023 — International Travel Scheme (ITS) by the Science and Engineering Research
                                            Board (SERB), DST, Govt. of India towards attending the Royal Geographical
                                            Society (with IBG) Annual International Conference 2023, London, United Kingdom.
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
            <div style="background-color: #fff; height: 35vh; overflow: visible;">



                <div class="row">
                    <div class="col-lg-5 text-center">

                        <div class="text-center">
                            <img style="margin-top: 100px; width: 480px; border: 1px solid #27467A; margin-left: 45px;"
                                src="mobile-assets/updated-faculty-img/Hibjur-Rahaman.png"
                                alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Md Hibjur Rahaman
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Assistant Professor, Department of Geography
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

                            <h2 class="headd3 mb-3 fw-bold" style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Academic Qualification
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">Ph.D. in Geography, Jamia Millia Islamia, New Delhi
                                        (Thesis title: Climate Variability Assessment and Water Resource Management in the
                                        Lower Thoubal Watershed, Manipur).</span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">M.A. Geography, Aligarh Muslim University, Aligarh</span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">B.A. (Hons.) Geography, Aligarh Muslim University,
                                        Aligarh</span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Total Experience
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        5+ Years
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Research (outside teaching)
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        5 Years
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Research Interests
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Climate Change; Watershed Management; Remote Sensing & GIS; Machine Learning
                                        Applications in Environment; Natural Resource Management, and Disaster Risk
                                        Analysis.
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Paper Publications in Journals
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        International: 29 (All listed on personal Website: <a style="color: #ffaa00;"
                                            class="fw-bold" href="https://www.hibjuronline.in/my-publications">
                                            https://www.hibjuronline.in/my-publications)</a>

                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Book Chapter Published
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        03
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Any Other Achievements/Awards
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        2017 — Merit Financial Award by the Aligarh Muslim University, Aligarh.
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        2018 — North East State Level Eligibility Test (NE-SLET) in Geography.
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        2018 — National Eligibility Test (NET) in Geography with Junior Research Fellowship
                                        (JRF: 2019-2024).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        2023 — Featured in 75 Ideas to Promote LiFE (Lifestyle for Environment) by NITI
                                        Aayog, Govt. of India.
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        2023 — International Travel Scheme (ITS) by the Science and Engineering Research
                                        Board (SERB), DST, Govt. of India towards attending the Royal Geographical Society
                                        (with IBG) Annual International Conference 2023, London, United Kingdom.
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
