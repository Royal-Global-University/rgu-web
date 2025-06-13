@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-nutrition/mob.png"
                alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Nutrition and Dietetics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-nutrition&dietetics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Nutrition and Dietetics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-nutrition&dietetics"><button type="button"
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
            <img src="https://media.rgu.ac/department-all/dept-nutrition/web.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Nutrition and Dietetics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-nutrition&dietetics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. - Nutrition and Dietetics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Nutrition"><button type="button"
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
                                    <th class="font-weight-bold text-white">Purpose of the visit</th>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Dr. SubbaRao M Gavaravarapu</td>
                                    <td>
                                        Scientist F &amp; Head Nutrition, Communication &amp; Health
                                        Education, ICMR-NIN, Tarnaka, Hyderabad
                                    </td>
                                    <td>Invited talk</td>
                                    <td>9/28/2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Dhruvajyoti Choudhury</td>
                                    <td>
                                        Consultant Nephrologist &amp; Renal Transplant Physician, Apollo
                                        Hospitals, Guwahati
                                    </td>
                                    <td>Invited Talk</td>
                                    <td>3/14/2024</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Jesto George</td>
                                    <td>
                                        Deputy Director &amp; Central Licensing Authority, FSSAi,
                                        Guwahati
                                    </td>
                                    <td>Invited talk</td>
                                    <td>4/8/2024</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ms. Dimi Ingtipi</td>
                                    <td>
                                        Senior Dietician, Department of Digestive Disease and Clinical
                                        Nutrition, Dr. B Barooah Cancer Institute, Guwahati
                                    </td>
                                    <td>Invited talk</td>
                                    <td>9/10/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>
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
                                        Prof (Dr) Pranati Das, HoD, Department of Food Technology &amp;
                                        Convenor for N&amp;D
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Ms. Pallabi Sarkar, Assistant Professor, Department of Nutrition
                                        and Dietetics, RSMAS
                                        <hr />
                                        Ms. Jebin Sultana, Assistant Professor, Department of Nutrition
                                        and Dietetics, RSMAS
                                        <hr />
                                        Mr. Narottamom Ghosh, Teaching Assistant, Department of
                                        Nutrition and Dietetics, RSMAS
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Experts for each Department (Academic)</td>
                                    <td>
                                        Dr. Moloya Gogoi, Associate Professor and HOD, Dept of Food
                                        Science and Nutrition, AAU. Jorhat
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Experts for each Department (Industry)</td>
                                    <td>
                                        Mrs. Mitali Dowerah, HOD and Consultant Dietician, Ayursundra
                                        Hospital, Guwahati
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
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Prof. (Dr.) Pranati Das</td>
                                    <td>Professor &amp; Head, Department of Food Technology</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ms. Pallabi Sarkar</td>
                                    <td>Assistant Professor cum Librarian (I/C)</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ms. Jebin Sultana</td>
                                    <td>
                                        Assistant. Professor, Department of Nutrition &amp; Dietetics
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Hemanta Chutia</td>
                                    <td>
                                        Assistant. Professor, Department of Nutrition &amp; Dietetics
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Prof. (Dr.) Anupam Chatterjee</td>
                                    <td>Dean RSBSC</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Prof. (Dr.) Nikhil Chrungoo</td>
                                    <td>Dean RSLSc, ARGU</td>
                                    <td>Member</td>
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

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/UG-Nutrition-and-Dietetics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - B.Sc. Nutrition and
                                                    Dietetics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/NUTRITION-UG-2025-SYLLABUS.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - B.Sc. Nutrition and Dietetics
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

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/Masters-Nutrition-and-Dietetics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - M.Sc. Nutrition and
                                                    Dietetics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/NUTRITION-PG-2025-SYLLABUS.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - M.Sc. Nutrition and Dietetics
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                </div>          </div>
        </div>

    </div>
@endsection
