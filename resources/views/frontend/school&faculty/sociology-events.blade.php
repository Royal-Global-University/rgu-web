@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 80px; position: relative;">
            <h2 class="headd1 text-center fw-bold pt-5 pb-3" style="color: #27467A;">
                Events
            </h2>

            <div class="container">
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
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <h2 class="headd1 text-center fw-bold pt-5" style="color: #27467A;">
            Events
        </h2>

        <div class="container">
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
@endsection
