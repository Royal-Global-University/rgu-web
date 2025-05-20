@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-pol-sc/mob-politicalscience.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.A. Political Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Political-Science"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.A. Political Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Political-Science"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-pol-sc/web-politicalscience.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.A. Political Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Political-Science"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.A. Political Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Political-Science"><button type="button"
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
                                    <th class="font-weight-bold text-white">Date</th>
                                    <th class="font-weight-bold text-white">Invitee</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>10/12/2018</td>
                                    <td>Dr. Shubhrajeet Konwar</td>
                                    <td>
                                        Associate Professor Department of Political Science, Gauhati
                                        University
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>6/3/2019</td>
                                    <td>Dr. Nilima Bhagabati</td>
                                    <td>
                                        Former Professor and Head of the Department of Education,
                                        Gauhati University
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>25/4/2019</td>
                                    <td>Mr. Sumanta Basu</td>
                                    <td>
                                        Senior Programme Officer/Manager, United States-India
                                        Educational Foundation (USIEF), American Centre
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>27/9/2019</td>
                                    <td>Dr. Kiran Keshavamurthy</td>
                                    <td>
                                        Assistant Professor, Department of Humanities and Social
                                        Sciences, IIT Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>2/12/2019</td>
                                    <td>Prof (Dr) Nani Gopal Mahanta</td>
                                    <td>
                                        Professor, Department of Political Science and Director, Centre
                                        for South East Asian Studies, Gauhati University
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>5/3/2020</td>
                                    <td>Prof (Dr) Joydeep Baruah</td>
                                    <td>
                                        Professor, Department of Economics, Omeo Kumar Das Institute of
                                        Social Change and Development
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>6/3/2020</td>
                                    <td>Patricia Mukhim, Mitra Phukan, Teresa Rehman</td>
                                    <td>
                                        Patricia Mukhim: Social activist, writer, journalist and the
                                        editor of Shillong times. <br />
                                        Mitra Phukan: Author, translator and columnist. <br />
                                        Teresa Rehman: Journalist.
                                    </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>8/3/2021</td>
                                    <td>Dr. Samhita barooah, Pomi Baruah, Amrita Kar</td>
                                    <td>
                                        Dr. Samhita Barooah: Assistant Professor, Department of Social
                                        work <br />
                                        Pomi Baruah: ACS Director Directorate of Higher Education
                                        Department <br />Amrita Kar: Senior anchor and editor
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>8/3/2022</td>
                                    <td>Prof (Dr) Vijaylakshmi Brara</td>
                                    <td>
                                        Professor, Department of Sociology, Royal Global University
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>28/11/2022</td>
                                    <td>Prof (Dr) Akhil Ranjan Dutta</td>
                                    <td>
                                        Professor, Department of Political Science, Gauhati University
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>18/10/2023</td>
                                    <td>Geetanjal Deka, Prithvi Gogoi, Saswati Bordoloi</td>
                                    <td>
                                        Geetanjal Deka: Assistant Professor Department of Physics, Royal
                                        Global University <br />
                                        Prithvi Gogoi: Assistant Professor, Department of Sociology,
                                        Royal Global University <br />
                                        Saswati Bordoloi: Assistant Professor, Department of Indian
                                        Knowledge System, Royal Global University
                                    </td>
                                </tr>

                                <tr>
                                    <td>12</td>
                                    <td>24/11/2023</td>
                                    <td>Prof (Dr) Diptimoni Baruah</td>
                                    <td>
                                        Professor, National Law University and Judicial Academy, Assam
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>7/3/2024</td>
                                    <td>Violet Baruah, Suranjana Senapati, Dr. Meghali Senapati</td>
                                    <td>
                                        Violet Baruah: Retired Inspector General of Police
                                        <br />Suranjana Senapati: Director of Elementary Education,
                                        Government of Assam <br />Dr. Meghali Senapati: Associate
                                        Professor School of Social Work, Tata Institute of Social
                                        Sciences
                                    </td>
                                </tr>

                                <tr>
                                    <td>14</td>
                                    <td>11/3/2024</td>
                                    <td>Prof (Dr) R Sudarshan</td>
                                    <td>
                                        Dean of Jindal School of Government &amp; Public Policy, O.P.
                                        Jindal Global University, Sonepat, Haryana
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>14/5/2024</td>
                                    <td>Dr. Jintu Gohain, Breehivorna Talukdar</td>
                                    <td>
                                        Dr. Jintu Gohain: Assistant Professor, Department of Political
                                        Science, Paschim Guwahati Mahavidyalaya <br />
                                        Breehivorna Talukdar: Assistant Professor, Department of
                                        Political Science, Saraighat College
                                    </td>
                                </tr>

                                <tr>
                                    <td>16</td>
                                    <td>7/8/2024</td>
                                    <td>Rajarshi Sarma</td>
                                    <td>Chief Operating Officer, Assam Start Up</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>5/9/2024</td>
                                    <td>Prof (Dr) Sajal Nag</td>
                                    <td>
                                        Professor, Dean of Royal School of Humanities and Social
                                        Sciences
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>20/9/2024</td>
                                    <td>Prof (Dr) Dilip Chandra Nath</td>
                                    <td>Professor Emeritus, Royal Global University</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td></td>
                                    <td>Prof (Dr) Ladu Singh Laishram</td>
                                    <td>Professor Emeritus, Royal Global University</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td></td>
                                    <td>Sattyakee D'Com Bhuyan</td>
                                    <td>
                                        Adjunct Faculty, Royal School of Communications &amp; Media
                                        (RSCOM), Royal Global University
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
                                <th class="text-white">S.NO.</th>
                                <th class="text-white">POSITION IN D-BOS</th>
                                <th class="text-white">NAME AND DESIGNATION</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Dr. Dhiraj Borkotoky, Associate Professor and Co-ordinator
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Dr. Y Monojit Singha, Assistant Professor
                                        <hr />
                                        Dr. Banasmita Sarma, Assistant Professor
                                        <hr />
                                        Dr. Baba Chandra Singha, Assistant Professor, Political Sc.
                                        <hr />
                                        Dr. Abhinav Chaliha, Assistant Professor, Political Sc.
                                        <hr />
                                        Rhitwique Dutta, Assistant Professor
                                        <hr />
                                        Barsha Sharma
                                        <hr />
                                        Tanjeela Meghboob, Assistant Professor
                                        <hr />
                                        Monisha Bordoloi
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Dr. Subhrajeet Konwer, Associate Professor, GU
                                        <hr />
                                        Dr. Dilip Gogoi, Associate Professor, Cotton University
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
                                    <td>Dr. Y Monojit Singha</td>
                                    <td>Assistant Professor</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        Two Associate Professors – one of them will be the member
                                        secretary
                                    </td>
                                    <td>Dr. Dhiraj Kumar Borkotoky</td>
                                    <td>Associate Professor</td>
                                    <td>Member Secretary</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Two Assistant Professors holding Ph.D. degree</td>
                                    <td>Dr. Babachandra Singha</td>
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
                                    <td>Prof. Shiela Bora</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Sajal Nag</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. B.S. Mipun</td>
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
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Pol Sci/B.A. Syllabus FINAL.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> COURSE STRUCTURE & SYLLABUS (BASED
                                                    ON NATIONAL EDUCATION POLICY 2020) For BA in Political Science (4 YEARS
                                                    SINGLE MAJOR)
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Pol Sci/BA Syllabus Structure Final.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                    YEAR UG PROGRAMME
                                                    Science.pdf <i class="fa fa-download"></i>
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
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Pol Sci/MA STRUCTURE.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                    YEAR PG PROGRAMME
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Pol Sci/MA Syllabus FINAL.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> SYLLABUS FOR 2 YEAR PG PROGRAMME
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
