@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-nursing/s2-bg-img-1.webp);">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" class="pb-3" src="mobile-assets/dept-sociology/mob-sociology.png"
                alt="">

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
                                        <th class="font-weight-bold text-white">S.No.</th>
                                        <th class="font-weight-bold text-white">Name</th>
                                        <th class="font-weight-bold text-white">Designation</th>
                                        <th class="font-weight-bold text-white">
                                            Purpose of the visit
                                        </th>
                                        <th class="font-weight-bold text-white">Date of Visit</th>
                                    </tr>
                                </thead>

                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Sukhdev Singh</td>
                                        <td>
                                            Assistant Professor, Department of Humanities and Social
                                            Sciences, NIT, Patna
                                        </td>
                                        <td>
                                            Webinar on "Plagiarism and its Prevention in Academic
                                            Writing"
                                        </td>
                                        <td>8th June, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Lalhmasai Chuaungo</td>
                                        <td>
                                            Professor, Department of Education and Director, UGC-HRDC,
                                            Mizoram University
                                        </td>
                                        <td>
                                            Webinar on "Higher Education in India: Challenges and
                                            Strategies for Reforms"
                                        </td>
                                        <td>30th June,2020</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr.)Shashwati Goswami</td>
                                        <td>
                                            Professor of Radio Journalism and HOD of
                                            Communication,Research and Outreach Activities at IIMC,New
                                            Delhi
                                        </td>
                                        <td>Webinar on "Fake News in the Time of Pandemic"</td>
                                        <td>7th August,2020</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Sashikanta Dash</td>
                                        <td>Registrar, Pondicherry University</td>
                                        <td>
                                            Seminar on "Ecosystem &amp; Society: Discussion on Social
                                            Accountability on Environment"
                                        </td>
                                        <td>8th December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Prof. Amrinder Ansari and Dr. Rajni Bala</td>
                                        <td>
                                            Professor, JMI &amp; Hon.Director CSSEIP; Associate
                                            Professor and Head, Department of Sociology, BUC College,
                                            Punjab
                                        </td>
                                        <td>
                                            Panel Discussion on "Feminist Epistemology with
                                            Ethnographic Evidence"
                                        </td>
                                        <td>9th December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. D.R. Sahoo</td>
                                        <td>Professor, University of Lucknow</td>
                                        <td>Seminar on "Social Science and Democracy"</td>
                                        <td>22nd December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            Prof.(Dr.) Sheila Bora, Mr.Swapnil Baruah, Dr.Randhir
                                            Gogoi
                                        </td>
                                        <td>
                                            Professor, Deepartment of History,RGU;Retd. IAS
                                            Officer;Assistant Professor, Department of History,RGU
                                        </td>
                                        <td>
                                            Panel Discussion on "Multiculturalism and Identity:
                                            Highlighting the Centrality of Mother Language on Ocassion
                                            of International Mother Language Day"
                                        </td>
                                        <td>21st February, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Maitrayee Deka</td>
                                        <td>Senior Lecturer, University of Essex, UK</td>
                                        <td>
                                            Talk on "Urban Bazaars in the Age of Platform Capitalism"
                                        </td>
                                        <td>4th September,2023</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            Prof. (Retd) Jagadishwar Prasad Chaturvedi, Prof. (Dr.)
                                            P.J. Mahanta
                                        </td>
                                        <td>
                                            Retd Professor, Hindu University, Calcutta; Dean, RSCOM,
                                            RGU
                                        </td>
                                        <td>
                                            Talk on "Understanding IKS: Literary Criticism in Hindi
                                            and Other Languages"
                                        </td>
                                        <td>12th September,2023</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Prof. (Dr.) S.C. Mukhopadhyay</td>
                                        <td>Dean, RSHSS,RGU</td>
                                        <td>Talk on "Why I Do Sociology"</td>
                                        <td>20th December,2023</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Prof. Sambit Mallick</td>
                                        <td>
                                            Professor, Humanities and Social Science,IIT Guwahati
                                        </td>
                                        <td>Talk on "Technology Society Interface"</td>
                                        <td>5th April,2024</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Prof.Stephen P. Marks</td>
                                        <td>
                                            Dean,The Jindal School of Public Health &amp; Human
                                            Development
                                        </td>
                                        <td>
                                            Talk on "Comparative Health Care Systems and Models of
                                            Health Coverage"
                                        </td>
                                        <td>23rd May,2024</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Dr. Sukhdev Singh</td>
                                        <td>
                                            Associate Professor, Department of English,NEHU,Tura
                                            Campus
                                        </td>
                                        <td>
                                            Talk on "Digital Humanities:Meaning,Importance and Scope"
                                        </td>
                                        <td>14th August, 2024</td>
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
                                <a href="#" class="" target="_blank">
                                    Click to view...</a>
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
                                            Dr. Sangeeta Das, Assistant Professor &amp; Co-ordinator
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Dr. Prithibi Pratibha Gogoi, ssistant Professor
                                            <hr />
                                            Dr. Tripti Das, Assistant Professor
                                            <hr />
                                            Ms. Prajna Borah, Assistant Professor
                                            <hr />
                                            Ms. Swagata Chakraborty, Assistant Professor
                                            <hr />
                                            Ms. Lalzikpuii Rajkhowa, Assistant Professor
                                            <hr />
                                            Mr. Adam Timung, Assistant Professor
                                            <hr />
                                            Mr. Kadiguang Panmei, Assistant Professor
                                            <hr />
                                            Ms. Adishree Borgohain, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Uddipan Dutta, Scientific officer, Department of
                                            Sociology, Guwahati University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>External Expert (Industry)</td>
                                        <td>Mr. Nayan Jyoti Bhuyan, Project lead, NE Cluster</td>
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
                                        <td>Prof. (Dr.) Sajal Nag</td>
                                        <td>Dean, RSHSS</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Priyanka Patowari</td>
                                        <td>Assistant Professor, Department of Social Work, RSHSS</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. T Luithuiwung Awungshi</td>
                                        <td>Assistant Professor, Department of Social Work, RSHSS</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">3.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Gautam Mazumder</td>
                                        <td>Professor, Department of Economics, RSHSS, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Swabera Islam</td>
                                        <td>Professor, Department of Economics, RSHSS, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Shiela Bora</td>
                                        <td>
                                            Professor &amp; Advisor, Department of History, RSHSS, RGU
                                        </td>
                                        <td>External Member</td>
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
                                        <td>Prof. Sajal Nag</td>
                                        <td>Professor, Dean RSHSS</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Sangeeta Das</td>
                                        <td>Assistant Professor, Dept of Sociology</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Tripti Das</td>
                                        <td>Assistant Professor, Dept of Sociology</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">3.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Shiela Bora</td>
                                        <td>Professor, Dept of History, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof Gautam Mazumdar</td>
                                        <td>Professor, Dept of Economics, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Swabera Islam</td>
                                        <td>Professor, Dept of Economics, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                            Syllabus -
                        </h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 BA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-2023 BA
                                                        Sociology.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-24 BA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BA
                                                        Sociology.pdf <i class="fa fa-download"></i>
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
                                                    <a href="assets/Departmentalpdf/Old syllabus MA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old syllabus MA
                                                        Sociology.pdf <i class="fa fa-download"></i>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-sociology/web-sociology.png" alt="">

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
                                        <th class="font-weight-bold text-white">S.No.</th>
                                        <th class="font-weight-bold text-white">Name</th>
                                        <th class="font-weight-bold text-white">Designation</th>
                                        <th class="font-weight-bold text-white">
                                            Purpose of the visit
                                        </th>
                                        <th class="font-weight-bold text-white">Date of Visit</th>
                                    </tr>
                                </thead>

                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Sukhdev Singh</td>
                                        <td>
                                            Assistant Professor, Department of Humanities and Social
                                            Sciences, NIT, Patna
                                        </td>
                                        <td>
                                            Webinar on "Plagiarism and its Prevention in Academic
                                            Writing"
                                        </td>
                                        <td>8th June, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Lalhmasai Chuaungo</td>
                                        <td>
                                            Professor, Department of Education and Director, UGC-HRDC,
                                            Mizoram University
                                        </td>
                                        <td>
                                            Webinar on "Higher Education in India: Challenges and
                                            Strategies for Reforms"
                                        </td>
                                        <td>30th June,2020</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr.)Shashwati Goswami</td>
                                        <td>
                                            Professor of Radio Journalism and HOD of
                                            Communication,Research and Outreach Activities at IIMC,New
                                            Delhi
                                        </td>
                                        <td>Webinar on "Fake News in the Time of Pandemic"</td>
                                        <td>7th August,2020</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Sashikanta Dash</td>
                                        <td>Registrar, Pondicherry University</td>
                                        <td>
                                            Seminar on "Ecosystem &amp; Society: Discussion on Social
                                            Accountability on Environment"
                                        </td>
                                        <td>8th December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Prof. Amrinder Ansari and Dr. Rajni Bala</td>
                                        <td>
                                            Professor, JMI &amp; Hon.Director CSSEIP; Associate
                                            Professor and Head, Department of Sociology, BUC College,
                                            Punjab
                                        </td>
                                        <td>
                                            Panel Discussion on "Feminist Epistemology with
                                            Ethnographic Evidence"
                                        </td>
                                        <td>9th December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. D.R. Sahoo</td>
                                        <td>Professor, University of Lucknow</td>
                                        <td>Seminar on "Social Science and Democracy"</td>
                                        <td>22nd December,2022</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            Prof.(Dr.) Sheila Bora, Mr.Swapnil Baruah, Dr.Randhir
                                            Gogoi
                                        </td>
                                        <td>
                                            Professor, Deepartment of History,RGU;Retd. IAS
                                            Officer;Assistant Professor, Department of History,RGU
                                        </td>
                                        <td>
                                            Panel Discussion on "Multiculturalism and Identity:
                                            Highlighting the Centrality of Mother Language on Ocassion
                                            of International Mother Language Day"
                                        </td>
                                        <td>21st February, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Maitrayee Deka</td>
                                        <td>Senior Lecturer, University of Essex, UK</td>
                                        <td>
                                            Talk on "Urban Bazaars in the Age of Platform Capitalism"
                                        </td>
                                        <td>4th September,2023</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            Prof. (Retd) Jagadishwar Prasad Chaturvedi, Prof. (Dr.)
                                            P.J. Mahanta
                                        </td>
                                        <td>
                                            Retd Professor, Hindu University, Calcutta; Dean, RSCOM,
                                            RGU
                                        </td>
                                        <td>
                                            Talk on "Understanding IKS: Literary Criticism in Hindi
                                            and Other Languages"
                                        </td>
                                        <td>12th September,2023</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Prof. (Dr.) S.C. Mukhopadhyay</td>
                                        <td>Dean, RSHSS,RGU</td>
                                        <td>Talk on "Why I Do Sociology"</td>
                                        <td>20th December,2023</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Prof. Sambit Mallick</td>
                                        <td>
                                            Professor, Humanities and Social Science,IIT Guwahati
                                        </td>
                                        <td>Talk on "Technology Society Interface"</td>
                                        <td>5th April,2024</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Prof.Stephen P. Marks</td>
                                        <td>
                                            Dean,The Jindal School of Public Health &amp; Human
                                            Development
                                        </td>
                                        <td>
                                            Talk on "Comparative Health Care Systems and Models of
                                            Health Coverage"
                                        </td>
                                        <td>23rd May,2024</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Dr. Sukhdev Singh</td>
                                        <td>
                                            Associate Professor, Department of English,NEHU,Tura
                                            Campus
                                        </td>
                                        <td>
                                            Talk on "Digital Humanities:Meaning,Importance and Scope"
                                        </td>
                                        <td>14th August, 2024</td>
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
                                <a href="#" class="" target="_blank">
                                    Click to view...</a>
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
                                            Dr. Sangeeta Das, Assistant Professor &amp; Co-ordinator
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Dr. Prithibi Pratibha Gogoi, ssistant Professor
                                            <hr />
                                            Dr. Tripti Das, Assistant Professor
                                            <hr />
                                            Ms. Prajna Borah, Assistant Professor
                                            <hr />
                                            Ms. Swagata Chakraborty, Assistant Professor
                                            <hr />
                                            Ms. Lalzikpuii Rajkhowa, Assistant Professor
                                            <hr />
                                            Mr. Adam Timung, Assistant Professor
                                            <hr />
                                            Mr. Kadiguang Panmei, Assistant Professor
                                            <hr />
                                            Ms. Adishree Borgohain, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Uddipan Dutta, Scientific officer, Department of
                                            Sociology, Guwahati University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>External Expert (Industry)</td>
                                        <td>Mr. Nayan Jyoti Bhuyan, Project lead, NE Cluster</td>
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
                                        <td>Prof. (Dr.) Sajal Nag</td>
                                        <td>Dean, RSHSS</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Priyanka Patowari</td>
                                        <td>Assistant Professor, Department of Social Work, RSHSS</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. T Luithuiwung Awungshi</td>
                                        <td>Assistant Professor, Department of Social Work, RSHSS</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">3.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Gautam Mazumder</td>
                                        <td>Professor, Department of Economics, RSHSS, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Swabera Islam</td>
                                        <td>Professor, Department of Economics, RSHSS, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Shiela Bora</td>
                                        <td>
                                            Professor &amp; Advisor, Department of History, RSHSS, RGU
                                        </td>
                                        <td>External Member</td>
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
                                        <td>Prof. Sajal Nag</td>
                                        <td>Professor, Dean RSHSS</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Sangeeta Das</td>
                                        <td>Assistant Professor, Dept of Sociology</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Tripti Das</td>
                                        <td>Assistant Professor, Dept of Sociology</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">3.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Shiela Bora</td>
                                        <td>Professor, Dept of History, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof Gautam Mazumdar</td>
                                        <td>Professor, Dept of Economics, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Swabera Islam</td>
                                        <td>Professor, Dept of Economics, RSHSS</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                            Syllabus -
                        </h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 BA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-2023 BA
                                                        Sociology.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-24 BA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BA
                                                        Sociology.pdf <i class="fa fa-download"></i>
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
                                                    <a href="assets/Departmentalpdf/Old syllabus MA Sociology.pdf" target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old syllabus MA
                                                        Sociology.pdf <i class="fa fa-download"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
