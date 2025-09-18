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
                                    src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-tushar-Sarkar-RSEES.png"
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
                                Dr. Tushar Sarkar
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
                                            Ph.D. (2023)- Raiganj University (Thesis: Assessment of Higher Education among
                                            the Scheduled Castes of Jalpaiguri District, West Bengal: A Geographical Study)
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            M.Phil. (2018)- Sikkim University(Topic: Dynamics of India-Bangladesh Trans
                                            Border Mobility: A Case Study of Dhupguri Block, West Bengal)
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            M.A. in Geography (2015)- University of North Bengal
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            B.A. in Geography (2013) - University of North Bengal
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Teaching-related Experience:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Teaching undergraduate and postgraduate courses in Geography (Cartography, RS &
                                            GIS, Human Geography)
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Providing hands-on training in practical geography, RS & GIS software
                                            (ArcGIS,Global Mapper).
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research-related Experience:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Focus areas: Migration and mobility, remote sensing and GIS, educational
                                            inequalities, caste and gender studies
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Published in Scopus-indexed and UGC-listed journals.
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Selected Publications:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T. & Kasemi, N. Status of educational mobility in Lohar caste: a case
                                            study of Dhupguri block, Jalpaiguri district, West Bengal. Punjab Geographer,
                                            15: 23-39 (Scopus).
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T. & Kasemi, N. (2020). Gender inequality in literacy and education
                                            among the educationally backward scheduled castes of West Bengal: a case study
                                            of Maynaguri block, Jalpaiguri district. Punjab Geographer, 16: 63-74 (Scopus).
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T. & Kasemi, N. (2019). Educational inequalities among the scheduled
                                            caste communities in Dhupguri block, Jalpaiguri district, West Bengal. Indian
                                            Journal of Spatial Science, 10(2): 73-79 (UGC).
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T. & Kasemi, N. (2019). Migration of Bangladeshi people to Dhupguri
                                            block of Jalpaiguri district, West Bengal. Indian Geographical Journal, 94(1):
                                            51-64(UGC).
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T. & Kasemi, N. (2019). The socio-economic status of the people from
                                            Bangladesh in Dhupguri block of Jalpaiguri district, West Bengal. Geographical
                                            Review of India, 81(1): 51-63 (UGC).
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            Sarkar, T., Kasemi, N. & Sattar, H. (2020). Child Trafficking in India: nature,
                                            dimension and strategies for prevention. In Child Trafficking: A Social Evil and
                                            Challenges, Wizcraft Publications, pp. 109-123.
                                        </span>
                                    </li>

                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Any Other Achievements/Awards:
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            UGC NET-JRF (twice: April 2016, July 2016)
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            UGC NET (June 2015)
                                        </span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">
                                            SET (WBCSC) (2016)
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
                                src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-tushar-Sarkar-RSEES.png"
                                alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Tushar Sarkar
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
                                        Ph.D. (2023) - Raiganj University(Thesis: Assessment of Higher Education among the
                                        Scheduled Castes of Jalpaiguri District, West Bengal: A Geographical Study)
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        M.Phil. (2018)- Sikkim University (Topic: Dynamics of India-Bangladesh Trans Border
                                        Mobility: A Case Study of Dhupguri Block, West Bengal)
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        M.A. in Geography (2015) - University of North Bengal
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        B.A. in Geography (2013) - University of North Bengal
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Teaching-related Experience:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Teaching undergraduate and postgraduate courses in Geography (Cartography, RS & GIS,
                                        Human Geography).
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Providing hands-on training in practical geography, RS & GIS software (ArcGIS,
                                        Global Mapper).
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Research-related Experience:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Focus areas: Migration and mobility, remote sensing and GIS, educational
                                        inequalities, caste and gender studies
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Published in Scopus-indexed and UGC-listed journals.
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Selected Publications:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T. & Kasemi, N. Status of educational mobility in Lohar caste: a case study
                                        of Dhupguri block, Jalpaiguri district, West Bengal. Punjab Geographer, 15:
                                        23-39(Scopus).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T. & Kasemi, N. (2020). Gender inequality in literacy and education among
                                        the educationally backward scheduled castes of West Bengal: a case study of
                                        Maynaguri block, Jalpaiguri district. Punjab Geographer, 16: 63-74 (Scopus).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T. & Kasemi, N. (2019). Educational inequalities among the scheduled caste
                                        communities in Dhupguri block, Jalpaiguri district, West Bengal. Indian Journal of
                                        Spatial Science, 10(2): 73-79 (UGC).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T. & Kasemi, N. (2019). Migration of Bangladeshi people to Dhupguri block of
                                        Jalpaiguri district, West Bengal. Indian Geographical Journal, 94(1): 51-64(UGC).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T. & Kasemi, N. (2019). The socio-economic status of the people from
                                        Bangladesh in Dhupguri block of Jalpaiguri district, West Bengal. Geographical
                                        Review of India, 81(1): 51-63 (UGC).
                                    </span>
                                </li>

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        Sarkar, T., Kasemi, N. & Sattar, H. (2020). Child Trafficking in India: nature,
                                        dimension and strategies for prevention. In Child Trafficking: A Social Evil and
                                        Challenges, Wizcraft Publications, pp. 109-123.
                                    </span>
                                </li>

                            </ul>

                            <h2 class="headd3 mb-3 fw-bold mt-4"
                                style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                Any Other Achievements/Awards:
                            </h2>

                            <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">

                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        UGC NET-JRF (twice: April 2016, July 2016)
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        UGC NET (June 2015)
                                    </span>
                                </li>
                                <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                    <i class="fa fa-circle"
                                        style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                    <span style="display: block;">
                                        SET (WBCSC) (2016)
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
