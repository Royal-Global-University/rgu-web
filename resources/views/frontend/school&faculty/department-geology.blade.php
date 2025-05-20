@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-geology/mob-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">M.Sc. - Geology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Geology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Geology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-geology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-geology/mob-btm.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-geology/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">M.Sc. - Geology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Geology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Geology</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-geology"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-geology/web-btm.png" alt="">

        </div>

        <div class="container pb-5">

            <div>
                <div>
                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (BoS)</span></h2>

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
                                    <td>Mr. Rajdeep Deb, Co-ordinator, Department of Geology</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Prof. Hemangi D. Sarma, Senior Professor, Department of
                                        Geology
                                        <hr />
                                        Mr. Amarjyoti Borah, Assistant Professor, Department of
                                        Geology
                                        <hr />
                                        Dr. Roshmi Boruah, Assistant Professor, Department of Geology
                                        <hr />
                                        Dr. Neeta Moni Sharma, Assistant Professor, Department of
                                        Geology
                                        <hr />
                                        Dr. Abhijit Gogoi, Assistant Professor, Department of Geology
                                        <hr />
                                        Dr. Nishanta Saharia, Assistant Professor, Department of
                                        Geology
                                        <hr />
                                        Dr. Pritom Borah, Assistant Professor, Department of Geology
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>External Experts</td>
                                    <td>
                                        Dr. Jayanta Jivan Laskar,
                                        AssociateProfessor,DepartmentofGeologicalSciences, Gauhati
                                        University
                                        <hr />
                                        Prof. Shantanu Sharma, Professor, Department of Geology,
                                        Cotton University
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
                                    <td>Dr. Roshmi Boruah</td>
                                    <td>Assistant Professor&amp; Coordinator</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">Two Professors</td>
                                    <td>Prof. (Dr.) Hemangi Deka Sarma</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) B.S. Mipun</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        Two Associate Professors – one of them will be the member
                                        secretary
                                    </td>
                                    <td>Dr. Biswajit Sharma</td>
                                    <td>Associate Professor, Department of Physics (RSAPS)</td>
                                    <td>Member Secretary</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">4.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Abhijit Gogoi</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Nishanta Sahariah</td>
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
                                    <td>Prof. (Dr.) Amarendra Rajput</td>
                                    <td>Professor, Department of Physics (RSAPS)</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) Parag Phukan</td>
                                    <td>
                                        Professor, Department of Geological Sciences, Gauhati
                                        University
                                    </td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) Santanu Sarma</td>
                                    <td>Professor, Department of Geology, Cotton University</td>
                                    <td>External Member</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

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
                                                <a href="assets/Departmentalpdf/AY 2022-23 B.Sc Geology.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>AY 2022-23 B.Sc
                                                    Geology.pdf <i class="fa fa-download"></i>
                                                </a>
                                                <a href="assets/Departmentalpdf/AY 2023-24 B.Sc Geology.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>AY 2023-24 B.Sc
                                                    Geology.pdf <i class="fa fa-download"></i>
                                                </a>
                                                <a href="assets/Departmentalpdf/Old Syllabus B.Sc Geology.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>Old Syllabus B.Sc
                                                    Geology.pdf
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
                                                <a href="assets/Departmentalpdf/AY 2023-24 M.Sc Geology Syllabus.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>AY 2023-24 M.Sc Geology
                                                    Syllabus.pdf <i class="fa fa-download"></i>
                                                </a>
                                                <a href="assets/Departmentalpdf/AY 2021-22 M.Sc Geology.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> AY 2021-22 M.Sc
                                                    Geology.pdf <i class="fa fa-download"></i>
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
