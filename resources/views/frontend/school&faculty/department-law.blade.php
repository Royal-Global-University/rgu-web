@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

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
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-law/mob-law-top.png" alt="">

            <div class="container">
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLB (Hons.)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    3 years
                                </td>
                                <td>
                                    <a target="_blank" href="program-ba-llb-hons"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.A./ BBA - LLB (Hons.)</strong>
                                    </p>

                                </td>
                                <td>
                                    5 years
                                </td>
                                <td>
                                    <a target="_blank" href="program-ba-bba-llb-hons"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLM (Morning Shift)</strong>
                                    </p>

                                </td>
                                <td>
                                    1 Year
                                </td>
                                <td>
                                    <a target="_blank" href="programs-LLM-Morning-Shift"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>4.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLM (Day Shift)</strong>
                                    </p>

                                </td>
                                <td>
                                    1 Year
                                </td>
                                <td>
                                    <a target="_blank" href="programs-LLM-Day-Shift"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-law/mob-law-down.png" alt="">
        </div>

        <div class="website">
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
            <img src="https://media.rgu.ac/department-all/dept-law/web-law-top.png" alt="">

            <div class="container">
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLB (Hons.)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    3 years
                                </td>
                                <td>
                                    <a target="_blank" href="program-ba-llb-hons"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.A./ BBA - LLB (Hons.)</strong>
                                    </p>

                                </td>
                                <td>
                                    5 years
                                </td>
                                <td>
                                    <a target="_blank" href="program-ba-bba-llb-hons"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLM (Morning Shift)</strong>
                                    </p>

                                </td>
                                <td>
                                    1 Year
                                </td>
                                <td>
                                    <a target="_blank" href="programs-LLM-Morning-Shift"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>4.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">LLM (Day Shift)</strong>
                                    </p>

                                </td>
                                <td>
                                    1 Year
                                </td>
                                <td>
                                    <a target="_blank" href="programs-LLM-Day-Shift"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-law/web-law-down.png" alt="">
        </div>

        <div class="container pb-5 pt-3">

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of the visit</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>30.09.2024</td>
                                    <td>Dr. Jupi Gogoi</td>
                                    <td>Assistant Professor, Faculty of Law, University of Delhi</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>"20-21 September, 2024"</td>
                                    <td>Prof. (Dr,) Arpita Gupta</td>
                                    <td>
                                        Professor &amp; Dean of Projects, Grants and Publications, O.P.
                                        Jindal Global University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>"20-21 September, 2024"</td>
                                    <td>Prof. (Dr.) Indranath Gupta</td>
                                    <td>
                                        Professor &amp; Dean of Office of Data Innovation and
                                        Technology, O.P. Jindal Global University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>"20-21 September, 2024"</td>
                                    <td>Prof. (Dr.) Upasana Mahanta</td>
                                    <td>
                                        "Professor &amp; Dean of Admissions and Outreach, O.P. Jindal
                                        Global University"
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>"20-21 September, 2024"</td>
                                    <td>Prof. (Dr.) S. G. Sreejith</td>
                                    <td>
                                        Professor &amp; Executive Dean, Jindal Global Law School, O.P.
                                        Jindal Global University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>20.09.2024</td>
                                    <td>Adv. Bishaldeep Kakati</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>20.09.2024</td>
                                    <td>Adv. Dipak Sharma</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.08.2024</td>
                                    <td>Siddhartha Devnath</td>
                                    <td>IP Professional &amp; Expert</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.08.2024</td>
                                    <td>Dr. Ranjit Barman</td>
                                    <td>
                                        "Former Head, Science &amp; Technology Division and Nodal
                                        Scientist, Pent Information Centre, ASTEC"
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.08.2024</td>
                                    <td>Prof. (Dr.) Prabuddha Ganguli</td>
                                    <td>CEO, Vision IPR</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>08.08.2024</td>
                                    <td>Adv. Nandita Deka</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>25.05.2024</td>
                                    <td>Justice Soumitra Saikia</td>
                                    <td>Judge, Gauhati High Court</td>
                                    <td>Judge, RGU National Moot Court Compettition, 2024</td>
                                </tr>
                                <tr>
                                    <td>25.05.2024</td>
                                    <td>Justice Kaushik Goswami</td>
                                    <td>Judge, Gauhati High Court</td>
                                    <td>Judge, RGU National Moot Court Compettition, 2024</td>
                                </tr>
                                <tr>
                                    <td>25.05.2024</td>
                                    <td>Justice Mridul Kumar Kalita</td>
                                    <td>Judge, Gauhati High Court</td>
                                    <td>Judge, RGU National Moot Court Compettition, 2024</td>
                                </tr>
                                <tr>
                                    <td>25.05.2024</td>
                                    <td>Justice (Retd.) (Dr.) Mukundakam Sharma</td>
                                    <td>Former Judge, Supreme Court of India</td>
                                    <td>Chief Guest, RGU National Moot Court Competiton, 2024</td>
                                </tr>
                                <tr>
                                    <td>23.05.2024</td>
                                    <td>Prof. (Dr.) Ramesh Chandra Borpatragohain</td>
                                    <td>
                                        "Hon’ble Former Advocate General, Assam and Former Dean,
                                        Department of Law, Gauhati University"
                                    </td>
                                    <td>
                                        Guest of Honour, RGU National Moot Court Competition, 2024
                                    </td>
                                </tr>
                                <tr>
                                    <td>23.05.2024</td>
                                    <td>Justice (Retd.) Biplab Kumar Sharma</td>
                                    <td>Hon’ble Former Judge, Gauhati High Court</td>
                                    <td>Chief Guest, RGU National Moot Court Competition, 2024</td>
                                </tr>
                                <tr>
                                    <td>20.05.2024</td>
                                    <td>Prof. Stephen P. Marks</td>
                                    <td>
                                        Dean, Jinal School of Public Health &amp; Human Development
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.05.2024</td>
                                    <td>Dr. Geeta Ravi Kumar</td>
                                    <td>
                                        Associate Professor &amp; Academic Counsellor, School of Law,
                                        Lovely Professional University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.05.2024</td>
                                    <td>Adv. Subhajit Banik</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.04.2024</td>
                                    <td>Adv. Debojit Das</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.04.2024</td>
                                    <td>Adv. Rakhee Sirauthia Chowdhury</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.04.2024</td>
                                    <td>Adv. Mrinmoy Khataniar</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.04.2024</td>
                                    <td>Sri Promod Kalita</td>
                                    <td>Social &amp; Environemntal Activist</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>21.03.2024</td>
                                    <td>Adv. Shantanu Kumar Sarkar</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>05.03.2024</td>
                                    <td>Ms. Sujata Talukdar</td>
                                    <td>Member Secretary, DLSA</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>17.02.2024</td>
                                    <td>Justice V. Ramasubramanian</td>
                                    <td>Former Judge, Supreme Court of India</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>15.02.2024</td>
                                    <td>Justice (Retd.) Ranjan Gogoi</td>
                                    <td>Foremer Chief Justice of India</td>
                                    <td>
                                        Chief Guest, Oration on Education: Empowerment or Emancipation
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.02.2024</td>
                                    <td>Justice V. Ramasubramanian</td>
                                    <td>Former Judge, Supreme Court of India</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>04.12.2023</td>
                                    <td>Prof. (Dr.) S. G. Sreejith</td>
                                    <td>
                                        Executive Dean, Jindal Global Law School, O.P. Jindal Global
                                        University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>14.12.2023</td>
                                    <td>Babloo Loitongbam</td>
                                    <td>
                                        Executive Director, Human Rights Lert, Imphal &amp; Fullbright
                                        Fellow
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>26.11.2023</td>
                                    <td>Prof. Upendra Baxi</td>
                                    <td>
                                        Emeritus Professor of Law, University of Warwick &amp; Delhi
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>11.10.2023</td>
                                    <td>Justice (Retd.) Ranjan Gogoi</td>
                                    <td>Former Chief Justice of India</td>
                                    <td>Chief Guest, Royal Lex Fiesta</td>
                                </tr>
                                <tr>
                                    <td>28.09.2023</td>
                                    <td>Justice (Retd.) Prasanta Kumar Deka</td>
                                    <td>
                                        Judge (Retd.), Gauhati High Court &amp; President, Assam State
                                        Consumer Disputes Redressal Commission
                                    </td>
                                    <td>Keynote Addressee</td>
                                </tr>
                                <tr>
                                    <td>28.09.2023</td>
                                    <td>Dr. Aneesh Pillai</td>
                                    <td>
                                        Faculty of Law, School of Legal Studies, Cochin University of
                                        Science &amp; technology (CUSAT), Kerala
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>22.09.2023</td>
                                    <td>Adv. Anan Kumar Bhuyan</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>08.09.2023</td>
                                    <td>Dr. Pankaj Kumar</td>
                                    <td>DPIIT-IPR, Chair Professor, NLUJAA</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>05.09.2023</td>
                                    <td>Adv. Anghsuman Bora</td>
                                    <td>Senior Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>11.05.2023</td>
                                    <td>Adv. Devarshi Sen Deka</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>24.04.2023</td>
                                    <td>Prof. (Dr.) Ramesh Chandra Borpatragohain</td>
                                    <td>
                                        Hon’ble Former Advocate General, Assam and Former Dean,
                                        Department of Law, Gauhati University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>21.04.2023</td>
                                    <td>Adv. Debasmita Ghose</td>
                                    <td>
                                        Advocate, Gauhati High Court &amp; Director, HRLN, Guwahati
                                        Office
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>21.04.2023</td>
                                    <td>Dr. Samhita Barooah</td>
                                    <td>
                                        Assistant Professor, Department of Social Work, Tezpur
                                        University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>05.04.2023</td>
                                    <td>Adv. Tawhid Alom Laskar</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>22.03.2023</td>
                                    <td>Prof. (Dr.) C. Rajkumar</td>
                                    <td>Vice Chancellor, O.P. Jindal Global University</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.02.2023</td>
                                    <td>Dr. Makiko Kimura</td>
                                    <td>
                                        Associate Professor, Department of International &amp; Cultural
                                        Studies, Tsuda University, Tokyo, Japan
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>09.02.2023</td>
                                    <td>Ms. Anjana B. Sharma</td>
                                    <td>
                                        Chief General Manager (Retd.), Indian Oil, Guwahati Refinery
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>09.02.2023</td>
                                    <td>Dr. Nikita Barooah</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>09.02.2023</td>
                                    <td>Ms. Pallabi Ghosh</td>
                                    <td>Human Rights Activist</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>09.02.2023</td>
                                    <td>Himparna Das</td>
                                    <td>Student Union Member, Cotton University</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>29.11.2022</td>
                                    <td>Adv. Tawhid Alom Laskar</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>26.11.2022</td>
                                    <td>Prof. (Dr.) Amar Pal Singh</td>
                                    <td>
                                        Vice Chancellor, Dr. Ram Manohar Lohiya National Law University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>18.11.2022</td>
                                    <td>Dr. Aparajita Baruah</td>
                                    <td>Head, Department of Law, Gauhati University</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>15.11.2022</td>
                                    <td>Ms. Arshiya Sethi</td>
                                    <td>Former Creative Head of India Habitat Centre &amp; APPAN</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>08.11.2022</td>
                                    <td>Adv. Debojit Das</td>
                                    <td>Advocate, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>26.11.2022</td>
                                    <td>Mr. Ravi Ramaswami</td>
                                    <td>
                                        TO Trainer &amp; Facilittaor, Centre for Community Dialogue
                                        &amp; Change (CCDC
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>21.10.2022</td>
                                    <td>Prof. (Dr.) Ramesh Chandra Borpatragohain</td>
                                    <td>
                                        Hon’ble Former Advocate General, Assam and Former Dean,
                                        Department of Law, Gauhati University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>11.10.2022</td>
                                    <td>Dr. Ruma Bordoloi</td>
                                    <td>Former Principal, NEF Law College, Guwahati</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>02.09.2022</td>
                                    <td>Dr. Debasis Poddar</td>
                                    <td>Professor, NLUJAA</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>10.07.2021</td>
                                    <td>Dr. Jupi Gogoi</td>
                                    <td>Assictant Professor, Faculty of Law, University of Delhi</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>23.06.2022</td>
                                    <td>Mr.Chaturiya Prasad Talukdar</td>
                                    <td>Secretary, DLSA</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>18.06.2021</td>
                                    <td>Justice Kalyan Rai Surana</td>
                                    <td>Judge, Gauhati High Court</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>16.02.2022</td>
                                    <td>Prof. Pragya Parijat Singh</td>
                                    <td>
                                        "Assistant Profesor, Jindal Global Law School, O.P. Jindal
                                        Global University"
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>08.06.2021</td>
                                    <td>Dr. Topi Basar</td>
                                    <td>
                                        Associate Professor, Department of Law, Rajiv Gandhi University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>04.06.2021</td>
                                    <td>Dr. Sangita Laha</td>
                                    <td>Associate Professor &amp; Dean, NUSRL</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>"03 - 08 June, 2019"</td>
                                    <td>Mr. Anjan Choudhury</td>
                                    <td>Senior Empanelled Trainer, IIT Guwahati</td>
                                    <td>Resource Person</td>
                                </tr>
                                <tr>
                                    <td>09.04.2019</td>
                                    <td>Prof. (Dr.) Ramesh Chandra Borpatragohain</td>
                                    <td>
                                        Hon’ble Former Advocate General, Assam and Former Dean,
                                        Department of Law, Gauhati University
                                    </td>
                                    <td>Resource Person</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in S-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Prof. (Dr.) Bhuban Ch Barooah, Dean, Royal School of Law and
                                        Administration
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                                    <td>
                                        Prof. (Dr.) Hiren Ch Nath, HOD, Royal School of Law and
                                        Administration
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Experts for each Department (Academic)</td>
                                    <td>
                                        Dr. Amol Deo Chavhan, Associate Professor, National Law
                                        University and Judicial Academy, Assam (as academic expert)
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Experts for each Department (Industry)</td>
                                    <td>
                                        Prof. (Dr.) Romesh Ch. Borpatragohain, Former Dean Faculty of
                                        Law Gauhati University, Former Advocate General of Assam,
                                        Chairman State Law Commission of Assam, (as industry expert)
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Two Faculty members of the School nominated by the Vice
                                        Chancellor
                                    </td>
                                    <td>
                                        Dr. Pranita Choudhury, Associate Professor, RSLA
                                        <hr />
                                        Mr. Pravek Medhi, Assistant Professors
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Registrar, Member Secretary (Ex-officio)</td>
                                    <td>
                                        Ms. Nabanita Choudhury, Assistant Manager (Academics)
                                        Registrar’s Nominee
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                    </h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1.</td>
                                    <td>Head of the Department</td>
                                    <td>Dr. Ajit Kaushal</td>
                                    <td>Head of the Department</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">Two Professors</td>
                                    <td>Dr. Bhuban Ch. Barooah</td>
                                    <td>Dean, RSLA</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Preeti Gupta</td>
                                    <td>Professor, RSLA</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Associate Professors – one of them will be the member
                                        secretary
                                    </td>
                                    <td>Dr. Pranita Choudhury</td>
                                    <td>Associate Professor</td>
                                    <td>Member Secretary</td>
                                </tr>
                                <tr>
                                    <td>Dr. Anjuman Ara Begum</td>
                                    <td>Associate Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Dr. S.C. Nayak</td>
                                    <td>Deputy Dean and Dean ic, RSCOM</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. George A. P</td>
                                    <td>Dean RSB and RSC</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Sheila Bora</td>
                                    <td>Professor and Advisor RSHSS</td>
                                    <td>External Member</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion para1" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSLA/Structure of syllabus - UG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - B.A. LL.B. (Hons)
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSLA/Syllabus_Compiled[1] (1).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - B.A. LL.B. (Hons)
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSLA/syllabus structure PG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus Structure - LLM
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSLA/LLM syllabus-May 2025 (1).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - LLM
                                                    <i class="fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"><strong>
                                                Doctoral Programme
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a href="phd" class="para1" target="_blank">
                                                <strong>
                                                    Click to View...
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
