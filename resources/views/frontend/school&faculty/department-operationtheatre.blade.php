@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-operation/s2-bg-img-1.webp);">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-operation/mob-opt.png" alt="">


            <div class="container pb-5 pt-3">

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th class="font-weight-bold text-white">S.No</th>
                                        <th class="font-weight-bold text-white">Name of the guest</th>
                                        <th class="font-weight-bold text-white">Date of Visit</th>
                                        <th class="font-weight-bold text-white">Purpose</th>
                                    </tr>
                                </thead>

                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Ms.Sarita Devi Chettri</td>
                                        <td>31-03-2023</td>
                                        <td>"Webinar on Surgical Instrumentation"</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>"Prof(Dr.) Bibhuti Bhushan Borthakur"</td>
                                        <td>06-04-2023</td>
                                        <td>"Guest lecture on World Health Day"</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Dashwa Langhbang</td>
                                        <td>12-05-2023</td>
                                        <td>"Guest lecture on infection control"</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Daisy Gogoi</td>
                                        <td>16-10-2023</td>
                                        <td>"Guest lecture on World Anaesthesia day"</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mr.Rickystar Syiemlieh</td>
                                        <td>01-04-2024</td>
                                        <td>"Webinar on Laparoscopic Instrumentation"</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mr. Chinmoy Thakuria</td>
                                        <td>09-08-2024</td>
                                        <td>"Guest lecture on Student induction Programme"</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Ms. Sarita Chettri</td>
                                        <td>18-09-2024</td>
                                        <td>"Guest lecture on Student"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                <a href="#"> Click More</a>
                            </h3>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
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
                                            Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                            Dept. of OTT
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                            Dept. of OTT
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Ms. Haka-i-juh Bamon, Assistant Professor and, Course
                                            coordinator, Dept. Of Trauma and Critical Care, Pratiksha
                                            Institute of Health Sciences, Guwahati
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>External Expert (Industry)</td>
                                        <td>
                                            Mr. Chinmoy Thakuria, Operation Theatre Technologist, Apollo
                                            Excelcare, Guwahati
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
                    </div>
                </div>


                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 Bsc OTT.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-2023 Bsc OTT.pdf
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-2024 B.Sc OTT.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-2024 B.Sc OTT.pdf
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
                                            <div class="accordion-body"></div>
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
            <img src="mobile-assets/dept-operation/web-opt.png" alt="">

            <div class="container pb-5 pt-3">

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th class="font-weight-bold text-white">S.No</th>
                                        <th class="font-weight-bold text-white">Name of the guest</th>
                                        <th class="font-weight-bold text-white">Date of Visit</th>
                                        <th class="font-weight-bold text-white">Purpose</th>
                                    </tr>
                                </thead>

                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Ms.Sarita Devi Chettri</td>
                                        <td>31-03-2023</td>
                                        <td>"Webinar on Surgical Instrumentation"</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>"Prof(Dr.) Bibhuti Bhushan Borthakur"</td>
                                        <td>06-04-2023</td>
                                        <td>"Guest lecture on World Health Day"</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Dashwa Langhbang</td>
                                        <td>12-05-2023</td>
                                        <td>"Guest lecture on infection control"</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Daisy Gogoi</td>
                                        <td>16-10-2023</td>
                                        <td>"Guest lecture on World Anaesthesia day"</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mr.Rickystar Syiemlieh</td>
                                        <td>01-04-2024</td>
                                        <td>"Webinar on Laparoscopic Instrumentation"</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mr. Chinmoy Thakuria</td>
                                        <td>09-08-2024</td>
                                        <td>"Guest lecture on Student induction Programme"</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Ms. Sarita Chettri</td>
                                        <td>18-09-2024</td>
                                        <td>"Guest lecture on Student"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                <a href="#"> Click More</a>
                            </h3>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
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
                                            Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                            Dept. of OTT
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                            Dept. of OTT
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Ms. Haka-i-juh Bamon, Assistant Professor and, Course
                                            coordinator, Dept. Of Trauma and Critical Care, Pratiksha
                                            Institute of Health Sciences, Guwahati
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>External Expert (Industry)</td>
                                        <td>
                                            Mr. Chinmoy Thakuria, Operation Theatre Technologist, Apollo
                                            Excelcare, Guwahati
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
                    </div>
                </div>


                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 Bsc OTT.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-2023 Bsc OTT.pdf
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-2024 B.Sc OTT.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-2024 B.Sc OTT.pdf
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
                                            <div class="accordion-body"></div>
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
