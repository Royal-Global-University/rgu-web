@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;"
                src="https://media.rgu.ac/department-all/dept-zoology/mobile-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. Zoology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-zoology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Zoology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Zoology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-zoology/mobile-down.png" alt="">

        </div>


        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://media.rgu.ac/department-all/dept-zoology/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. Zoology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-zoology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Zoology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Zoology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-zoology/web-btm.png" alt="">

        </div>


        <div class="container pb-5 pt-3">

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 para1">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of the visit</th>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>DR. DOLA DAS</td>
                                    <td>SCIENTIST FROM CLEVELAND CLINIC FOUNDATION OHIO</td>
                                    <td>INVITED TALK</td>
                                    <td>29/05/2019</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr JAYADITYA PURKAYASTHA</td>
                                    <td>GERERAL SECRETORY HELP EARTH</td>
                                    <td>INVITED TALK</td>
                                    <td>08/10/2021</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Dr. A.K BURAGOHAIN, PROF. MINARAM NATH, PROF DANDATHAR BORA,
                                        PROF MAMTA GOSWAMI
                                    </td>
                                    <td>SENIOR PROFESSOR OF RSLSC</td>
                                    <td>INVITED TALK</td>
                                    <td>05/02/2021</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>DR. JOYDEEP PURAKAYASTHA, DR JAYANTIMALA CHAKRABARTY</td>
                                    <td>PROF OF SURGICAL ONCOLOGY,FOUNDER OF NGO RODALI</td>
                                    <td>INVITED TALK</td>
                                    <td>06/05/2022</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr.S. RAHMAN</td>
                                    <td>ASSIST PROF DCB COLLEGE</td>
                                    <td>INVITED TALK</td>
                                    <td>18/05/2022</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. RAJIB RUDRA TARING</td>
                                    <td>HERPETOLOGIST AND ASSISTANT PROF DIGBOI COLLEGE</td>
                                    <td>INVITED TALK</td>
                                    <td>04/08/2022</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>DR TARALI KALITA</td>
                                    <td>ASSIST PROF COTTON UNIVERSITY</td>
                                    <td>INVITED TALK</td>
                                    <td>30/08/22</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>MR. SAGAR, T PAUL DAS</td>
                                    <td>MANAGAR BIONEST,IASST</td>
                                    <td>INVITED TALK</td>
                                    <td>15/09/22</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>PROF HARI S SHARMA</td>
                                    <td>
                                        SCIENTIST FROM DEPART OF PATHOLOGY , CLINICAL BIOINFORMATICS,
                                        UNIVERSITY OF MEDICAL CENTRE NETHERLAND
                                    </td>
                                    <td>INVITED TALK</td>
                                    <td>23/09/22</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>DR. PRANAB J. PATAR</td>
                                    <td>
                                        CHIEF EXECUTIVE OF THE GLOBAL FOUNDATION OF ENVIRONMENT AND
                                        HUMAN WELFARE
                                    </td>
                                    <td>INVITED TALK</td>
                                    <td>30/03/23</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MR. S. RANADE</td>
                                    <td>ASSISTANT DIRECTOR OF BOTANY NATURAL HISTORY SOCIETY</td>
                                    <td>INVITED TALK</td>
                                    <td>30/05/23</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>PROF D. KUMAR SHARMA</td>
                                    <td>PROF USTM</td>
                                    <td>INVITED TALK</td>
                                    <td>15/09/23</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>DR. LOPAMUDRA DAS ROY</td>
                                    <td>FOUNDER AND PRESIDENT OF BREAST CANCER HUB</td>
                                    <td>INVITED TALK</td>
                                    <td>28/11/23</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>MS. RADHIKA MORAL</td>
                                    <td>DCTORAL SCHOLAR DEPT OF ANTHROPOLOGY BROWN UNIVERSITY USA</td>
                                    <td>INVITED TALK</td>
                                    <td>21/03/24</td>
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
                                    <th class="text-white">Position in D-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Dr. Dharmeswar Barhoi, Coordinator and Assistant Professor,
                                        Dept. Of Zoology
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Prof. J. Arjun, Professor, Department of Zoology
                                        <hr />
                                        Dr. Utsab Singha, Assistant Professor, Dept. Of Zoology
                                        <hr />
                                        Dr. Annu Kumari, Assistant Professor, Dept. Of Zoology
                                        <hr />
                                        Dr. Parimal C Ray, Assistant Professor, Dept. Of Zoology
                                        <hr />
                                        Dr. Abesh Chakraborty, Assistant Professor, Dept. Of Zoology
                                        <hr />
                                        Ms. Sangeeta Biswas, Assistant Professor, Dept. Of Zoology
                                        <hr />
                                        Mr. Anurudha Chakraborty, Teaching Assistant, Department of
                                        Zoology
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Dr. Rezina Ahmed, Associate Professor, Department of Zoology,
                                        Cotton University
                                        <hr />
                                        Prof. Mamata Goswami, Retd. HoD, Department of Zoology, Cotton
                                        University.
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
                                    <td>Dr. Dharmeswar Barhoi</td>
                                    <td>Assistant Professor</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Two Professors</td>
                                    <td>Prof. Jashodeb Arjun</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Utsab Singha</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Annu Kumari</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. Anupam Chatterjee</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Nikhil Kr. Chrungoo</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Rezina Ahmed</td>
                                    <td>Professor</td>
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
                                            data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne"><strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Zoology/Structure of syllabus - UG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - B.Sc. Zoology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"><strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Zoology/Structure of syllabus - PG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - M.Sc. Zoology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Zoology/M.Sc_Syllabus_CR_SBoS_2025.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure of 2-Year PG
                                                    Programme
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
                                            aria-controls="collapseThree">
                                            <strong>
                                                Doctoral Programme
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
