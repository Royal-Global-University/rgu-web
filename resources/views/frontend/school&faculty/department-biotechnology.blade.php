@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
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
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" class="pb-3"
                src="https://media.rgu.ac/department-all/dept-biotech/mobile-top.png" alt="">


            <div class="container">

                <!-- courses section web  -->
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">

                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Bio-Technology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-bio-technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. Bio-Technology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MSc-Bio-Technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-biotech/mobile-down.png" alt="">

            <!--About Section-->

            <div class="container pb-5 pt-3">

                <div>


                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">

                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">

                                <th class="text-white">Date</th>
                                <th class="text-white">Name of the
                                    Conference/Seminar/Workshop</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>4-Mar-19</td>
                                    <td>Study tour to Sikkim</td>
                                </tr>
                                <tr>
                                    <td>March 29, 2019</td>
                                    <td>Invited talk on hepatic stellate cells and hepatocellular carcinoma
                                        by Dr. Dola Das, Scientist at Cleveland Clinic Foundation, Ohio</td>
                                </tr>
                                <tr>
                                    <td>May 6, 2019</td>
                                    <td>Study tour to ICAR Research Complex Barapani, Meghalaya</td>
                                </tr>
                                <tr>
                                    <td>September 24, 2019</td>
                                    <td>Invited talk by eminent scientist Prof. Santosh Kar</td>
                                </tr>
                                <tr>
                                    <td>November 28, 2019</td>
                                    <td>Student visit to IASST</td>
                                </tr>

                                <tr>
                                    <td>June 4, 2020</td>
                                    <td>Webinar organized on the occasion of World Environment Day by RSBSC
                                        in collaboration with RSLSC on ‘Time for Nature’</td>
                                </tr>
                                <tr>
                                    <td>June 12, 2020</td>
                                    <td>Webinar on 'Bioprospecting Microorganisms for Bioactive Metabolites'
                                    </td>
                                </tr>
                                <tr>
                                    <td>June 12, 2020</td>
                                    <td>Webinar on 'Advances in Animal Sciences'</td>
                                </tr>
                                <tr>
                                    <td>June 16-23, 2020</td>
                                    <td>7-day E-FDP programme on 'Importance of Cross-Disciplinary research
                                        in the post covid-19 scenario: Social perspectives'</td>
                                </tr>
                                <tr>
                                    <td>July 21, 2020</td>
                                    <td>Webinar on 'The spread of SARD-CoV2 and the role of environment'
                                    </td>
                                </tr>

                                <tr>
                                    <td>28/12/2024</td>
                                    <td>"Invited lecture on ""Silicon intelligence in managing gap for new
                                        drug entities"" by Dr. Saurov Mahanta, Scientist- NEILIT, Guwahati
                                        "</td>
                                </tr>
                                <tr>
                                    <td>30/12/2021</td>
                                    <td>"Invited lecture on ""Bacterial drug resistance"" by Dr. Bhaskar
                                        Thakuria, Additional Professor, AIIMS-Patna
                                        "</td>
                                </tr>
                                <tr>
                                    <td>31/05/2021</td>
                                    <td>Invited lecture on "" by Prof. SR Joshi, Dept. of Biotechnology,
                                        NEHU </td>
                                </tr>
                                <tr>
                                    <td>13/07/2021</td>
                                    <td>"Invited lecture on ""Fungal invasion of microbes through the airway
                                        of epithelial cells"" by Dr. Nausaba Hasin, Research Supervisor,
                                        University of Maryland, Baltimore
                                        "</td>
                                </tr>
                                <tr>
                                    <td>6/7/2021</td>
                                    <td>Invited talk on "" by Dr. B. N. Dubey University of Düsseldorf,
                                        Germany</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>"Invited talk on ""Genome of cancer: a bouquet of stories"" by Prof.
                                        P. P. Majumder NIBMG, Kalyani, WB
                                        "</td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td>Invited talk on ''" by Dr. R. S. Kumar, NICPR, Noida</td>
                                </tr>
                                <tr>
                                    <td>1/7/2021</td>
                                    <td>Invited talk on ''" by Prof. Piyush Pandey, Dept. of Biotechnology,
                                        Assam University</td>
                                </tr>

                                <tr>
                                    <td>May 6, 2022</td>
                                    <td>Awareness programme on ‘Harmful effects of tobacco and how it cause
                                        cancer’</td>
                                </tr>
                                <tr>
                                    <td>May 6, 2022</td>
                                    <td>Guest lecture by Dr. Mojibur Rohman Khan, Associate Professor at
                                        IASST</td>
                                </tr>
                                <tr>
                                    <td>May 27, 2022</td>
                                    <td>Lecture by Dr. Amitabh Arya, Additional Professor in the Department
                                        of Nuclear medicine at SGPGIMS Lucknow</td>
                                </tr>
                                <tr>
                                    <td>October 28, 2022</td>
                                    <td>Invited talk by Dr. Ranjan Tamuli, Professor in the Department of
                                        Biosciences and Bioengineering, IITG</td>
                                </tr>
                                <tr>
                                    <td>October 29, 2022</td>
                                    <td>Cancer Awareness Programme in the Deuchutal community</td>
                                </tr>
                                <tr>
                                    <td>November 23, 2023</td>
                                    <td>Invited talk by Dr. Gaurav Das, Professor of Surgical Oncology at
                                        BBCI</td>
                                </tr>
                                <tr>
                                    <td>December 7, 2023</td>
                                    <td>Invited talk on ‘Caring for Chronic Diseases Through Modern Biology’
                                        by Prof. Subash Chandra Gupta, HoD Biochemistry at AIIMS Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>March 15, 2024</td>
                                    <td>Outreach programme to Deuchutal community near RGU</td>
                                </tr>
                                <tr>
                                    <td>1/2/2024</td>
                                    <td>Invited talk on "Surfaces and interfaces at nanoscale" by Prof. SG.
                                        Verma, Dept. of Nanotechnology, Punjab University</td>
                                </tr>
                                <tr>
                                    <td>April 22, 2024</td>
                                    <td>Invited talk by Prof. Partha Pratim Majumdar on Genomics of Cancer
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div>
                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>
                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">
                                <th class="text-white">#</th>
                                <th class="text-white">Position in D-BoS</th>
                                <th class="text-white">Name and Designation</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>Dr. Ranjan Dutta Kalita,
                                        Associate Professor and HoD, Dept of Biotechnology, RSBSC

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="justify-align-center">All Faculty members of the Department Members
                                        (Ex-Officio)</td>
                                    <td>Dr. Debajit Borah,
                                        Associate Professor, Dept of Biotechnology,RSBSC
                                        <hr>
                                        Dr. Rupesh Kumar,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr. Bhaskarjyoti Gogoi,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr. Siddhartha Narayan Borah,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr.Rupsikha Patowary,
                                        Assistant Professor, Dept of Biotechnology,RSBSC

                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert</td>
                                    <td>Prof. Probodh Borah,
                                        Professor and Head of Dept, Dept. Of Animal Biotechnology, College of
                                        Vererinary
                                        Sciences, Assam Agricultural University, Khanapara, Guwahati
                                        <hr>Dr.Hridip Kr Sarma,
                                        Associate Professor, Dept of Biotechnology, Gauhati University

                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee
                                (DRC)</span></h2>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department </td>
                                        <td>Dr. Debajit Borah</td>
                                        <td>Associate Prof. and Head, Dept. of Biotechnology </td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">Two Professors</td>
                                        <td>Prof. Anupam Chaterjee, </td>
                                        <td>Prof. and Dean, RSBSC </td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Ranjan Dutta Kalita</td>
                                        <td>Professor, Dept. of Biotechnology </td>
                                        <td>Member </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D.
                                            degree
                                        </td>
                                        <td>Dr. Bhaskarjyoti Gogoi </td>
                                        <td>Asst. Prof., Dept. of Biotechnology</td>
                                        <td>Member </td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Siddhartha Narayan Borah </td>
                                        <td>Asst. Prof., Dept. of Biotechnology</td>
                                        <td>Member&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">Three external members not below the rank
                                            of
                                            Professors, including members from an allied department, who will be
                                            nominated
                                            by
                                            the URC </td>
                                        <td>Prof. Amlan Das </td>
                                        <td>Professor, Dept. of Microbiology </td>
                                        <td>External Member </td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Minaram Nath</td>
                                        <td>Professor, Dept. of Botany </td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Bipul Nath </td>
                                        <td>Professor, Royal School of Pharmacy</td>
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/STRUCTURE_BSc BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Outline of the syllabus for
                                                        B.Sc. in Biotechnology <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/SYLLABUS_BSc BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE AND
                                                        SYLLABUS FOR B.SC. IN BIOTECHNOLOGY (4 YEARS SINGLE MAJOR) <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/STRUCTURE_PG BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Proposed outline of the
                                                        syllabus for M.Sc. in Biotechnology (As per NEP 2020) <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/SYLLABUS_PG BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Curriculum and Credit
                                                        Framework for Postgraduate Programmes in Biotechnology <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class=" para1" target="_blank"><strong>Click to
                                                        View...</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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
            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-biotech/web-top.png" alt="">


            <div class="container">

                <!-- courses section web  -->
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">

                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Bio-Technology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-bio-technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. Bio-Technology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MSc-Bio-Technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-biotech/web-down.png" alt="">

            <!--About Section-->

            <div class="container pb-5 pt-3">

                <div>


                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">

                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">

                                <th class="text-white">Date</th>
                                <th class="text-white">Name of the
                                    Conference/Seminar/Workshop</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>4-Mar-19</td>
                                    <td>Study tour to Sikkim</td>
                                </tr>
                                <tr>
                                    <td>March 29, 2019</td>
                                    <td>Invited talk on hepatic stellate cells and hepatocellular carcinoma
                                        by Dr. Dola Das, Scientist at Cleveland Clinic Foundation, Ohio</td>
                                </tr>
                                <tr>
                                    <td>May 6, 2019</td>
                                    <td>Study tour to ICAR Research Complex Barapani, Meghalaya</td>
                                </tr>
                                <tr>
                                    <td>September 24, 2019</td>
                                    <td>Invited talk by eminent scientist Prof. Santosh Kar</td>
                                </tr>
                                <tr>
                                    <td>November 28, 2019</td>
                                    <td>Student visit to IASST</td>
                                </tr>

                                <tr>
                                    <td>June 4, 2020</td>
                                    <td>Webinar organized on the occasion of World Environment Day by RSBSC
                                        in collaboration with RSLSC on ‘Time for Nature’</td>
                                </tr>
                                <tr>
                                    <td>June 12, 2020</td>
                                    <td>Webinar on 'Bioprospecting Microorganisms for Bioactive Metabolites'
                                    </td>
                                </tr>
                                <tr>
                                    <td>June 12, 2020</td>
                                    <td>Webinar on 'Advances in Animal Sciences'</td>
                                </tr>
                                <tr>
                                    <td>June 16-23, 2020</td>
                                    <td>7-day E-FDP programme on 'Importance of Cross-Disciplinary research
                                        in the post covid-19 scenario: Social perspectives'</td>
                                </tr>
                                <tr>
                                    <td>July 21, 2020</td>
                                    <td>Webinar on 'The spread of SARD-CoV2 and the role of environment'
                                    </td>
                                </tr>

                                <tr>
                                    <td>28/12/2024</td>
                                    <td>"Invited lecture on ""Silicon intelligence in managing gap for new
                                        drug entities"" by Dr. Saurov Mahanta, Scientist- NEILIT, Guwahati
                                        "</td>
                                </tr>
                                <tr>
                                    <td>30/12/2021</td>
                                    <td>"Invited lecture on ""Bacterial drug resistance"" by Dr. Bhaskar
                                        Thakuria, Additional Professor, AIIMS-Patna
                                        "</td>
                                </tr>
                                <tr>
                                    <td>31/05/2021</td>
                                    <td>Invited lecture on "" by Prof. SR Joshi, Dept. of Biotechnology,
                                        NEHU </td>
                                </tr>
                                <tr>
                                    <td>13/07/2021</td>
                                    <td>"Invited lecture on ""Fungal invasion of microbes through the airway
                                        of epithelial cells"" by Dr. Nausaba Hasin, Research Supervisor,
                                        University of Maryland, Baltimore
                                        "</td>
                                </tr>
                                <tr>
                                    <td>6/7/2021</td>
                                    <td>Invited talk on "" by Dr. B. N. Dubey University of Düsseldorf,
                                        Germany</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>"Invited talk on ""Genome of cancer: a bouquet of stories"" by Prof.
                                        P. P. Majumder NIBMG, Kalyani, WB
                                        "</td>
                                </tr>
                                <tr>
                                    <td>15/06/2021</td>
                                    <td>Invited talk on ''" by Dr. R. S. Kumar, NICPR, Noida</td>
                                </tr>
                                <tr>
                                    <td>1/7/2021</td>
                                    <td>Invited talk on ''" by Prof. Piyush Pandey, Dept. of Biotechnology,
                                        Assam University</td>
                                </tr>

                                <tr>
                                    <td>May 6, 2022</td>
                                    <td>Awareness programme on ‘Harmful effects of tobacco and how it cause
                                        cancer’</td>
                                </tr>
                                <tr>
                                    <td>May 6, 2022</td>
                                    <td>Guest lecture by Dr. Mojibur Rohman Khan, Associate Professor at
                                        IASST</td>
                                </tr>
                                <tr>
                                    <td>May 27, 2022</td>
                                    <td>Lecture by Dr. Amitabh Arya, Additional Professor in the Department
                                        of Nuclear medicine at SGPGIMS Lucknow</td>
                                </tr>
                                <tr>
                                    <td>October 28, 2022</td>
                                    <td>Invited talk by Dr. Ranjan Tamuli, Professor in the Department of
                                        Biosciences and Bioengineering, IITG</td>
                                </tr>
                                <tr>
                                    <td>October 29, 2022</td>
                                    <td>Cancer Awareness Programme in the Deuchutal community</td>
                                </tr>
                                <tr>
                                    <td>November 23, 2023</td>
                                    <td>Invited talk by Dr. Gaurav Das, Professor of Surgical Oncology at
                                        BBCI</td>
                                </tr>
                                <tr>
                                    <td>December 7, 2023</td>
                                    <td>Invited talk on ‘Caring for Chronic Diseases Through Modern Biology’
                                        by Prof. Subash Chandra Gupta, HoD Biochemistry at AIIMS Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>March 15, 2024</td>
                                    <td>Outreach programme to Deuchutal community near RGU</td>
                                </tr>
                                <tr>
                                    <td>1/2/2024</td>
                                    <td>Invited talk on "Surfaces and interfaces at nanoscale" by Prof. SG.
                                        Verma, Dept. of Nanotechnology, Punjab University</td>
                                </tr>
                                <tr>
                                    <td>April 22, 2024</td>
                                    <td>Invited talk by Prof. Partha Pratim Majumdar on Genomics of Cancer
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div>
                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>
                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">
                                <th class="text-white">#</th>
                                <th class="text-white">Position in D-BoS</th>
                                <th class="text-white">Name and Designation</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>Dr. Ranjan Dutta Kalita,
                                        Associate Professor and HoD, Dept of Biotechnology, RSBSC

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="justify-align-center">All Faculty members of the Department Members
                                        (Ex-Officio)</td>
                                    <td>Dr. Debajit Borah,
                                        Associate Professor, Dept of Biotechnology,RSBSC
                                        <hr>
                                        Dr. Rupesh Kumar,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr. Bhaskarjyoti Gogoi,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr. Siddhartha Narayan Borah,
                                        Assistant Professor, Dept of Biotechnology,RSBSC
                                        <hr>Dr.Rupsikha Patowary,
                                        Assistant Professor, Dept of Biotechnology,RSBSC

                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert</td>
                                    <td>Prof. Probodh Borah,
                                        Professor and Head of Dept, Dept. Of Animal Biotechnology, College of
                                        Vererinary
                                        Sciences, Assam Agricultural University, Khanapara, Guwahati
                                        <hr>Dr.Hridip Kr Sarma,
                                        Associate Professor, Dept of Biotechnology, Gauhati University

                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee
                                (DRC)</span></h2>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department </td>
                                        <td>Dr. Debajit Borah</td>
                                        <td>Associate Prof. and Head, Dept. of Biotechnology </td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">Two Professors</td>
                                        <td>Prof. Anupam Chaterjee, </td>
                                        <td>Prof. and Dean, RSBSC </td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Ranjan Dutta Kalita</td>
                                        <td>Professor, Dept. of Biotechnology </td>
                                        <td>Member </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D.
                                            degree
                                        </td>
                                        <td>Dr. Bhaskarjyoti Gogoi </td>
                                        <td>Asst. Prof., Dept. of Biotechnology</td>
                                        <td>Member </td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Siddhartha Narayan Borah </td>
                                        <td>Asst. Prof., Dept. of Biotechnology</td>
                                        <td>Member&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">Three external members not below the rank
                                            of
                                            Professors, including members from an allied department, who will be
                                            nominated
                                            by
                                            the URC </td>
                                        <td>Prof. Amlan Das </td>
                                        <td>Professor, Dept. of Microbiology </td>
                                        <td>External Member </td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Minaram Nath</td>
                                        <td>Professor, Dept. of Botany </td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Bipul Nath </td>
                                        <td>Professor, Royal School of Pharmacy</td>
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/STRUCTURE_BSc BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Outline of the syllabus for
                                                        B.Sc. in Biotechnology <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/SYLLABUS_BSc BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE AND
                                                        SYLLABUS FOR B.SC. IN BIOTECHNOLOGY (4 YEARS SINGLE MAJOR) <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/STRUCTURE_PG BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Proposed outline of the
                                                        syllabus for M.Sc. in Biotechnology (As per NEP 2020) <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Biotechnology/SYLLABUS_PG BIOTECHNOLOGY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Curriculum and Credit
                                                        Framework for Postgraduate Programmes in Biotechnology <i
                                                            class="fa fa-download"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class=" para1" target="_blank"><strong>Click to
                                                        View...</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
