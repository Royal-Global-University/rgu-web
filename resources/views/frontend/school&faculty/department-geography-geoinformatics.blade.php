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
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-geography/mobile-geography-geoinformatics.png" alt="">

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
            <img src="https://media.rgu.ac/department-all/dept-geography/web-geography.png" alt="">
            <!--About Section-->

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
                                    <th class="text-white">S.No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Purpose of the visit</th>
                                    <th class="text-white">Date of Visit</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Prof. Vishwambhar Prasad Sati</td>
                                    <td>
                                        Senior Professor, Department of Geography and Resource
                                        Management, Mizoram University
                                    </td>
                                    <td>Invited talk</td>
                                    <td>4/11/2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Prof. D.K. Nayak</td>
                                    <td>
                                        Professor, Deparment of Geography, North-East Hill University
                                    </td>
                                    <td>Invited talk</td>
                                    <td>5/15/2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Prof. (Dr.) Sunando Bandhyopadhyay</td>
                                    <td>Department of Geography, University of Calcutta</td>
                                    <td>Guest Lecture</td>
                                    <td>9/22/2023</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Hirak Ranjan Das</td>
                                    <td>
                                        Deputy Director, Innovation Incubatio and Entrepreneurship , The
                                        Assam Royal Global University
                                    </td>
                                    <td>Guest Lecture</td>
                                    <td>11/2/2023</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Prof. Milap Chand Sharma</td>
                                    <td>CSRD, JNU, New Delhi</td>
                                    <td>Invited talk</td>
                                    <td>11/21/2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Prof. Sachidanand Sinha</td>
                                    <td>FormerChairperson, CSRD, JNU, New Delhi</td>
                                    <td>Invited talk</td>
                                    <td>4/22/2024</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Prof. Kushal Kumar Baruah</td>
                                    <td>
                                        Professor and Dean of Academic Affairs at Auniati University,
                                        Assam
                                    </td>
                                    <td>Invited talk</td>
                                    <td>6/5/2024</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Prof. Bindhy Wasini Pandey,</td>
                                    <td>
                                        Professor, Department of Geography,Delhi School of Economics,
                                        University of Delhi
                                    </td>
                                    <td>Invited talk</td>
                                    <td>6/8/2024</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Sri Atul chandrakant Kulkarni</td>
                                    <td>
                                        Chairman, Amazing Namaste Foundation, member, board of governor,
                                        IIM, Shillong.
                                    </td>
                                    <td>Invited talk</td>
                                    <td>8/20/2024</td>
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
                                        Dr. Annesha Borah, Coordinator and Assistant Professor,
                                        Department of Geography
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Prof. B S Mipun, Senior Professor, Department of Geography
                                        <hr />
                                        Dr. Saurav Kumar, Assistant Professor, Department of Geography
                                        <hr />
                                        Dr. Tushar Sarkar, Assistant Professor, Department of Geography
                                        <hr />
                                        Dr.Takhellabam Prameshwari Devi, Assistant Professor, Department
                                        of Geography
                                        <hr />
                                        Dr. Trishna Changkakoti, Assistant Professor, Department of
                                        Geography
                                        <hr />
                                        Ms. Jubilee Goswami, Assistant Professor, Department of
                                        Geography
                                        <hr />
                                        Miss Deepanjali Reang, Assistant Professor, Department of
                                        Geography
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>External Experts</td>
                                    <td>
                                        Prof. Bimal Kumar Kar, Professor, Department of Geography,
                                        Gauhati University
                                        <hr />
                                        Prof. D K Nayak, Professor, Department of Geography, North
                                        Eastern Hill University
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
                                    <td>Dr. Annesha Borah</td>
                                    <td>
                                        Coordinator and Assistant Professor, Department of Geography and
                                        Geoinformatics
                                    </td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Two Professors</td>
                                    <td>Prof. B S Mipun</td>
                                    <td>Dean RSEES and DSW</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Trishna Changkakati</td>
                                    <td>
                                        Assistant Professor, Department of Geography and Geoinformatics
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Saurav Kumar</td>
                                    <td>
                                        Assistant Professor, Department of Geography and Geoinformatics
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. Soumitra Sen</td>
                                    <td>Senior Professor, RSTTM and RSHM</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Sajal Nag</td>
                                    <td>Professor and Dean, RSHSS, RGU</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Hemangi Deka Sarma</td>
                                    <td>Prof. Department of Geology, RGU</td>
                                    <td>External Member</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>

                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="accordion para1" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            style="background-color: #27467a; color: #fff;" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne"><strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row para1">
                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/Course_Structure_PG_Geoinformatics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- Geoinformatics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/MSc_Geoinformatics_Syllabus.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- Geoinformatics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <hr>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/Course_Structure_UG_Geography.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- Geography
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/UG_Syllabus_Geography.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- Geology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            style="background-color: #27467a; color: #fff;" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row para1">

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/Course_Structure_PG_Geoinformatics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - Geoinformatics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/MSc_Geoinformatics_Syllabus.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Detailed Syllabus - Geoinformatics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <hr>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/Course_Structure_PG_Geography.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - Geology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/rsses/geography-geoinformatics/PG_syllabus_Geography.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Detailed Syllabus - Geology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            style="background-color: #27467a; color: #fff;" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <strong>
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
