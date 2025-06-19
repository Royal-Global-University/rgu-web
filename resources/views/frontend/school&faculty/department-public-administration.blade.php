@extends('frontend.master')
@section('content')
    <div style="background-image: url(https://media.rgu.ac/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-public-admin/mob-publicadministration.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                                        <br> Honours / Honours with Research
                                    </p>

                                </td>
                                <td>
                                    4 years as per NEP
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
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
            <img src="https://media.rgu.ac/department-all/dept-public-admin/web-publicadministration.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                                        <br> Honours / Honours with Research
                                    </p>

                                </td>
                                <td>
                                    4 years as per NEP
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
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
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                                    <th class="font-weight-bold text-white">Date</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Dr. D.P. Sharma</td>
                                    <td>
                                        Professor, Department of Political Science, Gauhati University
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                                    </td>
                                    <td>28th March, 2024</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Vikas Tripathi</td>
                                    <td>
                                        Assistant Professor, Department of Political Science, Gauhati
                                        University
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                                    </td>
                                    <td>28th March, 2024</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Mohinder Singh</td>
                                    <td>
                                        Visiting Professor, Department of Political Science and Public
                                        Administration, RIMT University Punjab
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Jayanta Krishna Sharmah</td>
                                    <td>
                                        Dean, Professor and Head, Department of Political Science,
                                        Gauhati University
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May- 3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr. Janak Singh Meena</td>
                                    <td>
                                        Professor and Head, Department of Gandhian Thought and Peace
                                        Studies, Central University of Gujarat
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May- 3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. D.P. Sharma</td>
                                    <td>
                                        Professor, Department of Political Science, Gauhati University
                                    </td>
                                    <td>
                                        "Resource Person‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dr. Vikas Tripathi</td>
                                    <td>
                                        Assistant Professor, Department of Political Science, Gauhati
                                        University
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Shri Dipak Kumar Sharma</td>
                                    <td>
                                        Chairman, Indian Institute of Public Administration, Assam
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Interactive Session on Civic Responsibility For
                                        Good Governance’"
                                    </td>
                                    <td>30th Sep 2024</td>
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
                                        Dr. Meenu Sharma, Head, Department of Public Administration
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Ms. Mabel Aind, Assistant Professor
                                        <hr />
                                        Ms. Nikita Biswakarma,, Teaching Assistant
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Prof. Inderjeet Singh Sodhi, Professor, RGNIYD, TN.
                                        <hr />
                                        Prof. Mamta Mokta, Dean, Social Science, HPU, Shimla
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
                                    <td>Dr. Meenu</td>
                                    <td>Professor</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Monika Kumari</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Upendra Tripathi</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">3.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. Swabera Islam</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Gautam Majumdar</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Shiela Bora</td>
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
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Public Adm/Structure of syllabus - UG (1).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                    YEAR UG PROGRAMME
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Public Adm/Syllabus BA-(H) Public Administration 2025-26.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> COURSE STRUCTURE & SYLLABUS BA in
                                                    PUBLIC ADMINISTRATION (4 YEARS SINGLE MAJOR)
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

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Public Adm/MA Public Administration 2025syllabus .pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - M.A. Public
                                                    Administration
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/17RSHSS/Public Adm/Structure of syllabus - PG (2).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure - M.A. Public
                                                    Administration
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
