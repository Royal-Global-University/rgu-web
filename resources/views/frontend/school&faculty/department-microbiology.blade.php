@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile" >
            @include('frontend/components/mobileheader')
            <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-microbio/mobile-up.png" alt="">


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
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Microbiology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-microbiology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. - Microbiology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-Msc-Microbiology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-microbio/mobile-down.png" alt="">

            <!--About Section-->

            <div class="container pb-5 pt-3">

                <div>
                    <div>
                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">S.No.</th>
                                    <th class="text-white">Name of Alumni</th>
                                    <th class="text-white">Guest</th>
                                    <th class="text-white">National/ International</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>12/30/2021</td>
                                        <td>Department</td>
                                        <td>
                                            Dr. Bhaskar Thakuria, Additional Professor and Head, Department
                                            of Microbiology, AIIMS, Patna
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>10/13/2022</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Piyush Pandey, Department of Microbiology,
                                            Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>5/30/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Suvendra Kumar Ray, Department of
                                            Molecular Biology &amp; Biotechnology, Tezpur University, Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>6/6/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Interactive session by Shri Srishendu Sekhar Das, Founder of The
                                            Midway Journey on the topic “Waste Management”
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>9/2/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Suvendra Kumar Ray, Department of
                                            Molecular Biology &amp; Biotechnology, Tezpur University, Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>9/15/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Mojibur R. Khan, IASST, Ghy as a part of
                                            International Microorganisms Day celebration
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>3/5/2024</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Dr. Sheo Shankar Pandey, Ramalinga swami faculty
                                            fellow, IASST, Ghy on host-pathogen interactions
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>4/3/2024</td>
                                        <td>Department</td>
                                        <td>
                                            "Prof. Aravind Madhavrao Deshmukh, president, Microbiologist
                                            society, India (MBSI) delivered a talk on recent trends and
                                            career opportunities in Biotechnology and Microbiology"
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>10/1/2024</td>
                                        <td>Department</td>
                                        <td>
                                            Dr. Mrigankya Chakravarty, Associate editor, Scientific reports
                                            delivered a talk on “Editorial job prospects on academic and
                                            scientific journals”.
                                        </td>
                                        <td>National</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                        <td>Prof. Anupam Chatterjee, Dean , RSBSC</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="justify-align-center">
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Prof. Anupam Chatterjee, Dean , RSBSC
                                            <hr />
                                            Dr. Birson Ingti Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Susmita Paul, Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Debajit Kalita, Assistant Professor, Microbiology
                                            <hr />
                                            Prof. Saranga Ranjan Patgiri, Professor, Microbiology
                                            <hr />
                                            Dr. Pankaj Losan Sharma
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Mojibur R. Khan Associate Professor, IASST, Guwahati
                                            <hr />
                                            Prof. Suvendra Kumar Ray, Department of MBBT, Tezpur University
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                        <td>Dr. Birson Ingti</td>
                                        <td>Assistant Professor and Departmental coordinator</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">Two Professors</td>
                                        <td>Prof. (Dr.) Anupam Chatterjee</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Saranga Ranjan Patgiri</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Amlan Das</td>
                                        <td>Associate Professor</td>
                                        <td>Member secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Niraj Singh</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Pankaj Losan Sharma</td>
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
                                        <td>Prof. (Dr.) Pranati Das</td>
                                        <td>Professor, Department of Food Technology, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Bipul Nath</td>
                                        <td>Professor, Royal School of Pharmacy, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                        <td>Professor, Royal School of Pharmacy, RGU</td>
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
                                                aria-expanded="false" aria-controls="collapseOne"><strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/NEP based Bsc Microbiology syllabus( 1st-8th Semester) April-2025.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Course Structure and Syllabus
                                                        Based on National Education Policy -2020 FOR B.Sc. Microbiology 4
                                                        Year Single Major

                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/Structure of syllabus - UG.pdf"
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
                                                <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/NEP based MSC Microbiology syllabus April 2025.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure and Syllabus Based
                                                    on National Education Policy -2020 FOR M.Sc. Microbiology 2 Year Single
                                                    Major
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/Structure of syllabus - PG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                    YEAR PG PROGRAMME
                                                    <i class="fa fa-download"></i>
                                                </a>
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
                                                <a href="doctoral-programme.html" class="para1" target="_blank">
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

        <div class="website">
            @include('frontend/components/aheader')
            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-microbio/web-up.png" alt="">
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
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Microbiology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-microbiology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. - Microbiology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-Msc-Microbiology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-microbio/web-down.png" alt="">

            <!--About Section-->

            <div class="container pb-5 pt-3">

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">S.No.</th>
                                    <th class="text-white">Name of Alumni</th>
                                    <th class="text-white">Guest</th>
                                    <th class="text-white">National/ International</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>12/30/2021</td>
                                        <td>Department</td>
                                        <td>
                                            Dr. Bhaskar Thakuria, Additional Professor and Head, Department
                                            of Microbiology, AIIMS, Patna
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>10/13/2022</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Piyush Pandey, Department of Microbiology,
                                            Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>5/30/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Suvendra Kumar Ray, Department of
                                            Molecular Biology &amp; Biotechnology, Tezpur University, Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>6/6/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Interactive session by Shri Srishendu Sekhar Das, Founder of The
                                            Midway Journey on the topic “Waste Management”
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>9/2/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Suvendra Kumar Ray, Department of
                                            Molecular Biology &amp; Biotechnology, Tezpur University, Assam
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>9/15/2023</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Prof. Mojibur R. Khan, IASST, Ghy as a part of
                                            International Microorganisms Day celebration
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>3/5/2024</td>
                                        <td>Department</td>
                                        <td>
                                            Invited talk by Dr. Sheo Shankar Pandey, Ramalinga swami faculty
                                            fellow, IASST, Ghy on host-pathogen interactions
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>4/3/2024</td>
                                        <td>Department</td>
                                        <td>
                                            "Prof. Aravind Madhavrao Deshmukh, president, Microbiologist
                                            society, India (MBSI) delivered a talk on recent trends and
                                            career opportunities in Biotechnology and Microbiology"
                                        </td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>10/1/2024</td>
                                        <td>Department</td>
                                        <td>
                                            Dr. Mrigankya Chakravarty, Associate editor, Scientific reports
                                            delivered a talk on “Editorial job prospects on academic and
                                            scientific journals”.
                                        </td>
                                        <td>National</td>
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
                                        <td>Prof. Anupam Chatterjee, Dean , RSBSC</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="justify-align-center">
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Prof. Anupam Chatterjee, Dean , RSBSC
                                            <hr />
                                            Dr. Birson Ingti Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Susmita Paul, Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Debajit Kalita, Assistant Professor, Microbiology
                                            <hr />
                                            Prof. Saranga Ranjan Patgiri, Professor, Microbiology
                                            <hr />
                                            Dr. Pankaj Losan Sharma
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Mojibur R. Khan Associate Professor, IASST, Guwahati
                                            <hr />
                                            Prof. Suvendra Kumar Ray, Department of MBBT, Tezpur University
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
                                        <td>Dr. Birson Ingti</td>
                                        <td>Assistant Professor and Departmental coordinator</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">Two Professors</td>
                                        <td>Prof. (Dr.) Anupam Chatterjee</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Saranga Ranjan Patgiri</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Amlan Das</td>
                                        <td>Associate Professor</td>
                                        <td>Member secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Niraj Singh</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Pankaj Losan Sharma</td>
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
                                        <td>Prof. (Dr.) Pranati Das</td>
                                        <td>Professor, Department of Food Technology, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Bipul Nath</td>
                                        <td>Professor, Royal School of Pharmacy, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                        <td>Professor, Royal School of Pharmacy, RGU</td>
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
                                                aria-expanded="false" aria-controls="collapseOne"><strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/NEP based Bsc Microbiology syllabus( 1st-8th Semester) April-2025.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Course Structure and Syllabus
                                                        Based on National Education Policy -2020 FOR B.Sc. Microbiology 4
                                                        Year Single Major

                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/Structure of syllabus - UG.pdf"
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
                                                <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/NEP based MSC Microbiology syllabus April 2025.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure and Syllabus Based
                                                    on National Education Policy -2020 FOR M.Sc. Microbiology 2 Year Single
                                                    Major
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Microbiology/Structure of syllabus - PG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                    YEAR PG PROGRAMME
                                                    <i class="fa fa-download"></i>
                                                </a>
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
                                                <a href="doctoral-programme.html" class="para1" target="_blank">
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

    </div>
@endsection
