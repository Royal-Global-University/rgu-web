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
                                    src="mobile-assets/updated-faculty-img/Dr-Tania-Begum.png" alt="">
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
                                Dr. Tania Begum
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Assistant Professor
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
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
                                            U.G. – Cotton College, Guwahati
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            P.G. (History) – Gauhati University
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Ph.D. (History) – North Eastern Hill University
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Total Experience:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            9.5 years
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Academic Experience:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            1.5 years
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research (Outside):
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            8 Years
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research Interest:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            My research interests lie at the intersection of cultural, religious, and social
                                            histories of
                                            Northeast India, with a particular focus on Assam and Arunachal Pradesh. My work
                                            explores the making
                                            of Muslim society in Assam through historical processes involving migration,
                                            Sufism, and cultural
                                            assimilation. I have extensively studied the role of Sufi traditions in shaping
                                            Assamese society and
                                            is equally engaged in understanding indigenous knowledge systems. My interests
                                            also span religious
                                            and ritual practices, as reflected in the previous research work
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Paper Publications in journals:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            9
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Book Chapters published:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            5
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
                                src="mobile-assets/updated-faculty-img/Dr-Tania-Begum.png" alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Tania Begum
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

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Qualifications
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        U.G. – Cotton College, Guwahati
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        P.G. (History) – Gauhati University
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Ph.D. (History) – North Eastern Hill University
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Total Experience:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        9.5 years
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Academic Experience:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        1.5 years
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Research (Outside):
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        8 Years
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Research Interest:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        My research interests lie at the intersection of cultural, religious, and social
                                        histories of
                                        Northeast India, with a particular focus on Assam and Arunachal Pradesh. My work
                                        explores the making
                                        of Muslim society in Assam through historical processes involving migration, Sufism,
                                        and cultural
                                        assimilation. I have extensively studied the role of Sufi traditions in shaping
                                        Assamese society and
                                        is equally engaged in understanding indigenous knowledge systems. My interests also
                                        span religious
                                        and ritual practices, as reflected in the previous research work
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Paper Publications in journals:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        9
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Book Chapters published:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        5
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
