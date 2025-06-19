@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" class="pb-3" src="https://media.rgu.ac/department-all/dept-economics/mob-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.A. Economics</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Economics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.A. Economics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Economics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-economics/mob-btm.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-economics/web-economics.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.A. Economics</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Economics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.A. Economics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Economics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

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
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                    <th class="font-weight-bold text-white">NAME</th>
                                    <th class="font-weight-bold text-white">
                                        UNIVERSITY/ INSTITUTE/ OTHER PLACES OF IMPORTANCE
                                    </th>
                                    <th class="font-weight-bold text-white">STATE/ UT</th>
                                    <th class="font-weight-bold text-white">
                                        DESIGNATION- VICE CHANCELLOR/ DIRECTOR/ OTHERS
                                    </th>
                                    <!-- <th class="font-weight-bold text-white">EMAIL ID/ PHONE NO</th> -->
                                    <th class="font-weight-bold text-white">ADDRESS</th>
                                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>5/18/2018</td>
                                    <td>Dr. Gautam Majumder</td>
                                    <td>Cotton University</td>
                                    <td>Assam</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>gautammaz@gmail.com, ph no. 8473880817</td> -->
                                    <td>Cotton University, Guwahati.</td>
                                    <td>Board of Studies, Department of Economics</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>4/17/2020</td>
                                    <td>Dr. M.P Bezbaruah</td>
                                    <td>Gauhati University</td>
                                    <td>Assam</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>mpb@gauhati.ac.ph no.9864055485</td> -->
                                    <td>Gauhati University</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>6/26/2020</td>
                                    <td>Dr. Debarshi Das</td>
                                    <td>IITG</td>
                                    <td>Assam</td>
                                    <td>Professor</td>
                                    <!-- <td>debarshidas@iitg.ac.in</td> -->
                                    <td>IITG</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>6/26/2020</td>
                                    <td>Dr. Rituparna Basu</td>
                                    <td>IMI, Kolkata</td>
                                    <td>Kolkata</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>r.basu@imi-k.edu.in,ph no 9748062883</td> -->
                                    <td>IMI, Kolkata.</td>
                                    <td>Invited talk</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>2018</td>
                                    <td>Dr. Rabin Khataniar</td>
                                    <td>B.H College</td>
                                    <td>Assam</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>rabinkhataniar@gmail.com, ph no.8011068292</td> -->
                                    <td>B.H college, Assam</td>
                                    <td>Discussion with Ph.D Scholars</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>3/12/2020</td>
                                    <td>Dr. Manoj Talukdar</td>
                                    <td>Cotton University</td>
                                    <td>Assam</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>manojtalukdar@rediffmail.com</td> -->
                                    <td>Cotton University</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>6/12/2020</td>
                                    <td>Dr. Binod Khadria</td>
                                    <td>Rtd. JNU</td>
                                    <td>Delhi</td>
                                    <td>Professor ( Retired)</td>
                                    <!-- <td>bkhadria@gmail.com ph no. 9810784513</td> -->
                                    <td>Delhi</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>2020</td>
                                    <td>Prof . Gautam Baruah</td>
                                    <td>IIITG</td>
                                    <td>Assam</td>
                                    <td>Director</td>
                                    <!-- <td>gb@iiitg.ac.in ph no.0361-260015</td> -->
                                    <td>Guwahati</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>8/13/2018</td>
                                    <td>Prof. Nivedita Goswami</td>
                                    <td>Gauhati University</td>
                                    <td>Assam</td>
                                    <td>Professor</td>
                                    <!-- <td>nivedita@gauhati.ac.in</td> -->
                                    <td>Guwahati</td>
                                    <td>Invited talk</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>9/9/2023</td>
                                    <td>Prof. Joydeep Baruah</td>
                                    <td>K.K.H.S.O.U.</td>
                                    <td>Assam</td>
                                    <td>Professor</td>
                                    <!-- <td>joydeep.baruah@gmail.comMobile No.9435115889</td> -->
                                    <td>Guwahati</td>
                                    <td>Board of Studies, Department of Economics</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>5/16/2024</td>
                                    <td>Dr. Rituparna Basu</td>
                                    <td>IMI, Kolkata</td>
                                    <td>Kolkata</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>r.basu@imi-k.edu.in,ph no 9748062883</td> -->
                                    <td>IMI, Kolkata.</td>
                                    <td>Talk on Research Methodology</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>5/22/2024</td>
                                    <td>Dr. Parag Dutta</td>
                                    <td>Associate Professor, Department of Economics, KKHSOU</td>
                                    <td>Assam</td>
                                    <td>Associate Professor</td>
                                    <!-- <td>7002923870</td> -->
                                    <td>Guwahati</td>
                                    <td>Hands on Training Programme on SPSS</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>9/9/2023</td>
                                    <td>Dr. Sriparna Barua</td>
                                    <td>
                                        Advisor, Livelihood and Entrepreneurhsip, North Eastern Handloom
                                        and Handicrafts Corporation
                                    </td>
                                    <td>Assam</td>
                                    <td>Retd. Director, IIE, Guwahati</td>
                                    <!-- <td>9864034294</td> -->
                                    <td>Guwahati</td>
                                    <td>Board of Studies, Department of Economics</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>9/25/2024</td>
                                    <td>Prof. Nivedita Goswami</td>
                                    <td>
                                        Professor, Department of Economics, Gauhati University,
                                        Jalukbari-781014
                                    </td>
                                    <td>Assam</td>
                                    <td>Professor, Department of Economics, GU</td>
                                    <!-- <td>9435344716</td> -->
                                    <td>Guwahati</td>
                                    <td>Board of Studies, Department of Economics</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>9/25/2024</td>
                                    <td>Dr. Smita Khaund</td>
                                    <td>Deputy General Manager, NEDFi</td>
                                    <td>Assam</td>
                                    <td>Deputy General Manager, NEDFi, Guwahati</td>
                                    <!-- <td>9854028234</td> -->
                                    <td>Guwahati</td>
                                    <td>Board of Studies, Department of Economics</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>10/4/2024</td>
                                    <td>Dr. Mousumi Borah</td>
                                    <td>
                                        Associate Professor &amp; HOD, Department of Economics,Arya
                                        Vidyapith College, Guwahati
                                    </td>
                                    <td>Assam</td>
                                    <td>
                                        Associate Professor &amp; HOD, Department of Economics,Arya
                                        Vidyapith College
                                    </td>
                                    <!-- <td>9864102760</td> -->
                                    <td>Guwahati</td>
                                    <td>
                                        Invited talk on "Assam's Economy and Its Current Scenario"
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
                                        Dr. Durba Dutta, Assistant Professor and Co-ordinator, Economics
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Prof. (Dr.) Swabera Islam, Senior and Visiting faculty,
                                        Economics
                                        <hr />
                                        Prof. (Dr.) Gautam Mazumdar, Senior and Visiting faculty,
                                        Economics
                                        <hr />
                                        Mr. Jugal Kishor Bhattacharya, Assistant Professor
                                        <hr />
                                        Dr. Deluwar Haque, Assistant Professor
                                        <hr />
                                        Miss Smita Lahkar, Assistant Professor
                                        <hr />
                                        Miss Bifuwada Nashibah, Assistant Professor
                                        <hr />
                                        Mr. Ashim Nath, Assistant Professor
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Prof (Dr) Nivedita Goswami, Professor, Department of Economics,
                                        Gauhati University
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Expert (Industry)</td>
                                    <td>
                                        Dr. Sriparna Baruah, Retd Deputy Director, IIE Advisor, NEHHDC
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
                                    <td>Dr. Md. Deluwar Hoque</td>
                                    <td>Associate Professor &amp; HOD</td>
                                    <td>Chairperson/Ex-officio</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">Two Professors</td>
                                    <td>Prof. Swabera Islam</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Gautam Mazumdar</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        Two Associate Professors – one of them will be the member
                                        secretary
                                    </td>
                                    <td>Dr. Durba Dutta</td>
                                    <td>Associate Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">4.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Smita Lahkar</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Sanghamitra Hazarika</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">5.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. George A Paul</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Laishram Ladu Singh</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Ankur Ganguly</td>
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

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Economics/BA Economics_ 4 Years Program_NEP 2020_Complete Syllabus (2).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> COURSE STRUCTURE & SYLLABUS (BASED
                                                    ON NATIONAL EDUCATION POLICY 2020) FOR B.A. IN ECONOMICS (4 YEARS SINGLE
                                                    MAJOR)

                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Economics/Structure of syllabus - UG  (BA in Economics).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                    YEAR UG PROGRAMME

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
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Economics/RSHSS - MA Economics - NEP (2).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Curriculum Framework for
                                                    Post-Graduate programme based on NEP 2020 MA in Economics w.e.f. AY -
                                                    2025-26
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Economics/Structure of syllabus - PG_MA_Economics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                    YEAR PG PROGRAMME
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
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a href="phd" class="para1" target="_blank"><strong>Click to
                                                    View...</strong></a>
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
