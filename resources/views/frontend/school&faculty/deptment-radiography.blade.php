@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-radiography/s2-bg-img-1.webp);">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-radiography/mob.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-radiography/web.png" alt="">
        </div>
    </div>


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
                                <th class="font-weight-bold text-white">Date of Visit</th>
                                <th class="font-weight-bold text-white">Name</th>
                                <th class="font-weight-bold text-white">Designation</th>
                                <th class="font-weight-bold text-white">Purpose of the visit</th>
                            </tr>
                        </thead>

                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>4/24/2023</td>
                                <td>Mrs Anamika Bhuyan</td>
                                <td>Principal, NEPNI College of Nursing</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2/4/2023</td>
                                <td>Dr. Bibhuti Bhusan Borthakur</td>
                                <td>Director, BBCI</td>
                                <td>Guest Lecture</td>
                            </tr>
                            <tr>
                                <td>12/04/23</td>
                                <td>Dr. Sunil Kumar S, Mr. Shreekumar R Chandra</td>
                                <td>National Governing Body Member, ISRT</td>
                                <td>Training</td>
                            </tr>
                            <tr>
                                <td>5/23/2024</td>
                                <td>Ms Preeti Singh</td>
                                <td>
                                    RSO/NABH Co-ordinator, Dept of Nuclear Medicine, GDRC, New Delhi
                                </td>
                                <td>Guest lecture</td>
                            </tr>
                            <tr>
                                <td>5/29/2023</td>
                                <td>Dr. P Mansa</td>
                                <td>Senior Resident, Radiation Oncology, SCI, Guwahati</td>
                                <td>Seminar</td>
                            </tr>
                            <tr>
                                <td>11/8/2023</td>
                                <td>Ms Sushmeeta Saha</td>
                                <td>Senior Radiographer, BF Railways, Guwahati</td>
                                <td>Guest Lecture</td>
                            </tr>
                            <tr>
                                <td>27/02/24</td>
                                <td>Ms Mamta Panda</td>
                                <td>Assistant Professor, Rayat Bahar University</td>
                                <td>Guest Lecture</td>
                            </tr>
                            <tr>
                                <td>18/03/24</td>
                                <td>Mr Manna Debnath</td>
                                <td>
                                    Assistant Professor, Charter University of Science &amp;
                                    technology
                                </td>
                                <td>Guest Lecture</td>
                            </tr>
                            <tr>
                                <td>03/05/24</td>
                                <td>Dr Hemen Kumar Kalita</td>
                                <td>Assistant Professor, Dept of Physics, Gauhati University</td>
                                <td>Seminar</td>
                            </tr>
                            <tr>
                                <td>09/05/24</td>
                                <td>Ms Marsida Choudhury</td>
                                <td>Radiology Technologist, Narayana Superspeciality Hospital</td>
                                <td>Workshop</td>
                            </tr>
                            <tr>
                                <td>22/07/24</td>
                                <td>Ms Sushmeeta Saha</td>
                                <td>Senior Radiographer, BF Railways, Guwahati</td>
                                <td>Career Counselling</td>
                            </tr>
                            <tr>
                                <td>05/08/24</td>
                                <td>Mr Atal Mahanta</td>
                                <td>RSO, Apollo Hospitals</td>
                                <td>Training on Radiation Safety</td>
                            </tr>
                            <tr>
                                <td>22/07/24</td>
                                <td>Ms Linda T Mawi</td>
                                <td>Assistant Professor, RSN</td>
                                <td>Workshop</td>
                            </tr>
                            <tr>
                                <td>07/08/24</td>
                                <td>Dr Sashwati Bordoloi</td>
                                <td>Assistant Professor, IKS</td>
                                <td>Guest lecture</td>
                            </tr>
                            <tr>
                                <td>08/08/24</td>
                                <td>Ms Ifullness Kharmynda</td>
                                <td>Laboratory Instructor, BOTT, RSMAS</td>
                                <td>Workshop</td>
                            </tr>
                            <tr>
                                <td>09/08/24</td>
                                <td>Prof (Dr.) Ankur Ganguly</td>
                                <td>Dean of Academics, RGU</td>
                                <td>Guest lecture</td>
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
                        <a href="research-and-development-rsmas-radiology.php" class="" target="_blank">Click to view...</a>
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
                                    Ms Mayuri Ojah, Head of the Department, Assistant Professor
                                    &amp; Co-Coordinator, Radiography &amp; AIT
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    All Faculty members of the Department Members (Ex-Officio)
                                </td>
                                <td>
                                    Ms Meghna Guha,Assistant Professor, Dept of RIT
                                    <hr />
                                    Ms Priyanka Kumari, Assistant Professor, Dept of RIT
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>External Expert (Academic)</td>
                                <td>
                                    Dr Hemen Kalita, Assistant Professor (Grade II), Dept of
                                    Physics, Gauhati University
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>External Expert (Industry)</td>
                                <td>
                                    Ms Sushmeeta Saha, Senior Radiographer, NF Railways, Maligaon,
                                    Guwahati
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
                                            <a href="assets/Departmentalpdf/AY 2022-23 Radiography and Advance Imaging Technology.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i> AY 2022-23 Radiography and
                                                Advance Imaging Technology.pdf
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <a href="assets/Departmentalpdf/AY 2023-24 Radiography and Advance Imaging Technology.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i> AY 2023-24 Radiography and
                                                Advance Imaging Technology.pdf
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <a href="assets/Departmentalpdf/Old Syllabus Radiography and Advance Imaging Technology.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i> Old Syllabus Radiography
                                                and Advance Imaging Technology.pdf
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
                                    <div class="accordion-body"></div>
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
@endsection
