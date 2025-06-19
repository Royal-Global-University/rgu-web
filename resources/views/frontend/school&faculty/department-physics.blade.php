@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;"
                src="https://media.rgu.ac/department-all/dept-physics/mob-top.png"
                alt="">

            <div class="container">
                <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                        <strong style="color: #023e8a;" class="#">M.Sc. - Physics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Physics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Physics</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-physics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-physics/mob-btm.png"
                alt="">

            <div class="container pb-5 pt-3">

                <!-- link buttons mobile  -->
                <div>
                    <div class="container" style="background-color: #fff; padding: 80px 10px;">

                        <h2 class="headd3 fw-bold text-center pb-5" style="color: #27467A; font-weight: 900;">
                            Quick <span style="color: #FF9A1E; font-weight: 500;">Links</span></h2>

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <a style="width: 100%; background-color: #27467a; color: #fff; height: 50px;"
                                    class="btn para1 fw-bold d-flex justify-content-center align-items-center" href="#"
                                    role="button">Explore Department Lab</a>
                            </div>
                            <div class="col-lg-12 pt-4">
                                <a style="width: 100%; background-color: #FF9A1E; color: #fff; height: 50px;"
                                    class="btn para1 fw-bold d-flex justify-content-center align-items-center" href="#"
                                    role="button">Explore Research Lab</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- link buttons mobile  -->

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div>
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">YEAR: 2018</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>12th February 2018</td>
                                            <td>Student Interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>27-Jul-18</td>
                                            <td>Student Development Program</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>12th September, 2018</td>
                                            <td>Freshers’ Social Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>26-Sep-18</td>
                                            <td>Visit to Tetelia School</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>12th OCT, 2018</td>
                                            <td>
                                                Field trip to North Eastern Space Applications Centre(NESAC)
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>15-11-2018 And 16-11-2018</td>
                                            <td>Science Conclave</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2019</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>18-01-2019</td>
                                            <td>Re Orientation Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28-02-2019</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>29-04-2019</td>
                                            <td>Parents teacher interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>15-03-2019</td>
                                            <td>Invited Talk by Dr. Gauranga Dhar Baruah</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>06-08-2019</td>
                                            <td>Student development programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>18th -19th November , 2019</td>
                                            <td>An Educational field trip to Centre of Plasma Physics</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2020</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>14-02-2020</td>
                                            <td>
                                                An educational trip to regional Science museum, Guwahati
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28-02-2020</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>13-03-2020</td>
                                            <td>Interactive Session Priyanka Das Rajkakati</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2021</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>03-03-2021</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>6th March 2021</td>
                                            <td>Field Trip to Umium</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>15th March 2021</td>
                                            <td>Parents Teachers Interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>1st and 2nd June 2021</td>
                                            <td>
                                                International Conference (Virtual) Emerging Areas in Science &
                                                Technology, (EAST 2021)
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>25th November 2021</td>
                                            <td>
                                                Interactive Session with<br />
                                                Dr. Debashish Borah, Department of Physics ,IITG
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>2nd December 2021</td>
                                            <td>PG 1st Semester Orientation Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>7</td>
                                            <td>15th December 2021</td>
                                            <td>
                                                2021 Field trip to the Bureau of Indian Standard (BIS)
                                                Laboratory -Guwahati
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2022</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>28th February 2022</td>
                                            <td>National Science Day</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>23rd April 2022</td>
                                            <td>
                                                Field Trip to 7th Indian Industrial Fair , UDYAM 2022 ,
                                                Khanapara
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>28th April 2022</td>
                                            <td>Interactive Session with ex student</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>27th to 29th April 2022</td>
                                            <td>Interschool Volleyball Tournament</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>1st June May 2022</td>
                                            <td>
                                                Interactive Session Dr. Angaraj Duara Researcher at Space
                                                Research Center, University of Leicester, UK.
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>16th August 2022</td>
                                            <td>Reorentation Program for the existing student</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>7</td>
                                            <td>30th August 2022</td>
                                            <td>Interactive Session</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>8</td>
                                            <td>9th to 13 Setp 2022</td>
                                            <td>Orientation Programme (PG)</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>9</td>
                                            <td>31st October 2022</td>
                                            <td>Interactive session</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>10</td>
                                            <td>3rd December 2022</td>
                                            <td>Field trip</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>11</td>
                                            <td>17th December 2022</td>
                                            <td>Field trip</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2023</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>28th February 2023</td>
                                            <td>National Science Day Celebration:</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28th February 2023</td>
                                            <td>Launching of departmental megazine</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>2nd March 2023</td>
                                            <td>Talk cum Interactive Session:</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>15th March 2023-18th March 2023</td>
                                            <td>Cricket Tournament organized</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>24th March 2023</td>
                                            <td>Outreach program</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>6th December 2023 – 7th December 2023</td>
                                            <td>Online Lecture Series</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2024</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th>S.NO.</th>
                                        <th>DATE OF EVENT</th>
                                        <th>NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr>
                                            <td>1</td>
                                            <td>10th September 2024</td>
                                            <td>Outreach program</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>16th September 2024</td>
                                            <td>Career guidance program</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>26th September 2024</td>
                                            <td>Organized Badminton tournament with Arya Vidyapeeth College Guwahati</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>28th October 2024</td>
                                            <td>Webinar on Simulation Technique with Python Coding by Dr. Subir Sarkar</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>29th October 2024</td>
                                            <td>Invited talk by Dr. Angaraj Duara</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2025</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th>S.NO.</th>
                                        <th>DATE OF EVENT</th>
                                        <th>NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

                                    </tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>21st February 2025</td>
                                        <td>Field visit to Center of Plasma Physics – Institute for Plasma Research (CPP-IPR) Guwahati
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>24th February 2025</td>
                                        <td>Invited Talk by Dr. Hemen Kumar Kalita</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>28th February 2025</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>19th March 2025</td>
                                        <td>Invited Talk by Dr. Namrata Gogoi</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>28th March 2025</td>
                                        <td>Invited Talk by Prof. Bipin Kumar Gupta</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>14th May 2025</td>
                                        <td>One day Seminar on Centenary Anniversary of Quantum Mechanics</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>    </div>

                <div>
                    <div>
                        <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

                        <div>
                            <table class="table table-bordered text-center align-middle mb-5" style="
                            border-collapse: collapse;
                            width: 100%;
                            font-family: Arial, sans-serif;
                          ">
                                <thead style="background-color: #27467a; color: #fff">
                                    <tr>
                                        <th style="padding: 10px; font-size: 1rem">S.NO.</th>
                                        <th style="padding: 10px; font-size: 1rem">POSITION IN D-BOS</th>
                                        <th style="padding: 10px; font-size: 1rem">
                                            NAME AND DESIGNATION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="padding: 10px">1</td>
                                        <td style="padding: 10px">
                                            Convener (Ex-Officio)- Head of the Department
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Devika Phukan Dy. Dean, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" style="padding: 10px; vertical-align: middle">
                                            2
                                        </td>
                                        <td rowspan="7" style="padding: 10px; vertical-align: middle">
                                            All Faculty Members of the Department (Ex-Officio)
                                        </td>
                                        <td style="padding: 10px">
                                            Prof (Dr.) Amarendra Rajput, Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sujata Deb, Associate Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sankar Barman, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Maidul Islam, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Gitanjal Deka, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Bornali Chetia, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sanchita Roy, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">3</td>
                                        <td style="padding: 10px">External Expert (Academic)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Anurup Gohain Baruah, Dept. of Physics, Gauhati
                                            University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">4</td>
                                        <td style="padding: 10px">External Expert (Industry)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Joyanti Chutia, Emeritus Scientist, IASST, Former
                                            Director, IASST
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental Research <span style="color: #FF9A1E; font-weight: 500;">Committee (DRC)</span>
                        </h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Head of the Department Chairperson</td>
                                        <td>Dr. Devika Phukan</td>
                                        <td>Associate Professor</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Two Professors</td>
                                        <td>Prof. (Dr. ) Amarendra Rajput</td>
                                        <td>Professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Sujata Deb</td>
                                        <td>Associate Professor, Dept. of Physics</td>
                                        <td>Member secretary</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Sankar Barman</td>
                                        <td>Associate Professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Gitanjal Deka</td>
                                        <td>Assistant professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Bornali Chetia</td>
                                        <td>Assistant professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">5</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. (Dr.) Ankur Ganguly</td>
                                        <td>Dean, Academics, Dean (i/c), RSET/RSIT</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof.(Dr.) Anuradha Devi</td>
                                        <td>Dean, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Rita Choudhury</td>
                                        <td>Professor, Dept. Of Mathematics</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

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
                                                <a href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Course Structure and Syllabus UG Physics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> COURSE STRUCTURE & SYLLABUS (BASED
                                                    ON NATIONAL
                                                    EDUCATION POLICY 2020)
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <br />

                                                <a href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Structure of syllabus - UG_PHYSICS.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                    YEAR UG
                                                    PROGRAMME
                                                    <i class="fa fa-download"></i> </a><br />
                                                <!-- <a
                                                href="mobile-assets/department-all/Departmentalpdf/Old Syllabus B.Sc. Physics.pdf"
                                                target="_blank"
                                              >
                                                <i class="fa fa-file-text px-2"></i> Old Syllabus B.Sc.
                                                Physics.pdf
                                                <i class="fa fa-download"></i>
                                              </a> -->
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
                                                <a
                                                    href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Structure of syllabus - PG_PHYSICS.pdf">
                                                    STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG PROGRAMME
                                                    <i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
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

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <img src="https://media.rgu.ac/department-all/dept-physics/web-top.png"
                alt="">

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
                                        <strong style="color: #023e8a;" class="#">M.Sc. - Physics</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Physics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. - Physics</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-physics"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-physics/web-btm.png"
                alt="">

            <!--About Section-->

            <div class="container pb-5 pt-3">


                <!-- link buttons mobile  -->
                <div class="quick-links-container">
                    <div class="quick-links-tooltip">Quick Links</div>

                    <div class="quick-links-panel">
                        <button class="quick-link-button d-flex justify-content-center align-items-center">
                            <p class="para1 fw-bold text-white mb-0 text-center">Explore Department Lab</p>
                        </button>

                        <button style="background-color: #FF9A1E;"
                            class="quick-link-button d-flex justify-content-center align-items-center">
                            <p class="para1 fw-bold text-white mb-0 text-center">Explore Research Lab</p>
                        </button>
                    </div>

                </div>
                <!-- link buttons mobile  -->

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div>
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">YEAR: 2018</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2 bg-white">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>12th February 2018</td>
                                            <td>Student Interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>27-Jul-18</td>
                                            <td>Student Development Program</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>12th September, 2018</td>
                                            <td>Freshers’ Social Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>26-Sep-18</td>
                                            <td>Visit to Tetelia School</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>12th OCT, 2018</td>
                                            <td>
                                                Field trip to North Eastern Space Applications Centre(NESAC)
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>15-11-2018 And 16-11-2018</td>
                                            <td>Science Conclave</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2019</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>18-01-2019</td>
                                            <td>Re Orientation Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28-02-2019</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>29-04-2019</td>
                                            <td>Parents teacher interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>15-03-2019</td>
                                            <td>Invited Talk by Dr. Gauranga Dhar Baruah</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>06-08-2019</td>
                                            <td>Student development programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>18th -19th November , 2019</td>
                                            <td>An Educational field trip to Centre of Plasma Physics</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2020</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>14-02-2020</td>
                                            <td>
                                                An educational trip to regional Science museum, Guwahati
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28-02-2020</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>13-03-2020</td>
                                            <td>Interactive Session Priyanka Das Rajkakati</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2021</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>03-03-2021</td>
                                            <td>National Science Day Celebration</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>6th March 2021</td>
                                            <td>Field Trip to Umium</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>15th March 2021</td>
                                            <td>Parents Teachers Interaction</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>1st and 2nd June 2021</td>
                                            <td>
                                                International Conference (Virtual) Emerging Areas in Science &
                                                Technology, (EAST 2021)
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>25th November 2021</td>
                                            <td>
                                                Interactive Session with<br />
                                                Dr. Debashish Borah, Department of Physics ,IITG
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>2nd December 2021</td>
                                            <td>PG 1st Semester Orientation Programme</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>7</td>
                                            <td>15th December 2021</td>
                                            <td>
                                                2021 Field trip to the Bureau of Indian Standard (BIS)
                                                Laboratory -Guwahati
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2022</h3>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>28th February 2022</td>
                                            <td>National Science Day</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>23rd April 2022</td>
                                            <td>
                                                Field Trip to 7th Indian Industrial Fair , UDYAM 2022 ,
                                                Khanapara
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>28th April 2022</td>
                                            <td>Interactive Session with ex student</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>27th to 29th April 2022</td>
                                            <td>Interschool Volleyball Tournament</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>1st June May 2022</td>
                                            <td>
                                                Interactive Session Dr. Angaraj Duara Researcher at Space
                                                Research Center, University of Leicester, UK.
                                            </td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>16th August 2022</td>
                                            <td>Reorentation Program for the existing student</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>7</td>
                                            <td>30th August 2022</td>
                                            <td>Interactive Session</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>8</td>
                                            <td>9th to 13 Setp 2022</td>
                                            <td>Orientation Programme (PG)</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>9</td>
                                            <td>31st October 2022</td>
                                            <td>Interactive session</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>10</td>
                                            <td>3rd December 2022</td>
                                            <td>Field trip</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>11</td>
                                            <td>17th December 2022</td>
                                            <td>Field trip</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2023</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">DATE OF EVENT</th>
                                        <th class="text-white">NAME OF EVENT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>28th February 2023</td>
                                            <td>National Science Day Celebration:</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>28th February 2023</td>
                                            <td>Launching of departmental megazine</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>2nd March 2023</td>
                                            <td>Talk cum Interactive Session:</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>15th March 2023-18th March 2023</td>
                                            <td>Cricket Tournament organized</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>24th March 2023</td>
                                            <td>Outreach program</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>6th December 2023 – 7th December 2023</td>
                                            <td>Online Lecture Series</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2024</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2 bg-white">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th>S.NO.</th>
                                        <th>DATE OF EVENT</th>
                                        <th>NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr>
                                            <td>1</td>
                                            <td>10th September 2024</td>
                                            <td>Outreach program</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>16th September 2024</td>
                                            <td>Career guidance program</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>26th September 2024</td>
                                            <td>Organized Badminton tournament with Arya Vidyapeeth College Guwahati</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>28th October 2024</td>
                                            <td>Webinar on Simulation Technique with Python Coding by Dr. Subir Sarkar</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>29th October 2024</td>
                                            <td>Invited talk by Dr. Angaraj Duara</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="headd3 text-dark fw-bold kd-split-text">YEAR: 2025</h3>
                            <div>
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2 bg-white">
                                    <thead class="text-white" style="background-color: #27467a">
                                        <th>S.NO.</th>
                                        <th>DATE OF EVENT</th>
                                        <th>NAME OF EVENT</th>
                                    </thead>

                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

                                    </tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>21st February 2025</td>
                                        <td>Field visit to Center of Plasma Physics – Institute for Plasma Research (CPP-IPR) Guwahati
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>24th February 2025</td>
                                        <td>Invited Talk by Dr. Hemen Kumar Kalita</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>28th February 2025</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>19th March 2025</td>
                                        <td>Invited Talk by Dr. Namrata Gogoi</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>28th March 2025</td>
                                        <td>Invited Talk by Prof. Bipin Kumar Gupta</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>14th May 2025</td>
                                        <td>One day Seminar on Centenary Anniversary of Quantum Mechanics</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>    </div>

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

                        <div>
                            <table class="table table-bordered text-center align-middle mb-5" style="
                            border-collapse: collapse;
                            width: 100%;
                            font-family: Arial, sans-serif;
                          ">
                                <thead style="background-color: #27467a; color: #fff">
                                    <tr>
                                        <th style="padding: 10px; font-size: 1rem">S.NO.</th>
                                        <th style="padding: 10px; font-size: 1rem">POSITION IN D-BOS</th>
                                        <th style="padding: 10px; font-size: 1rem">
                                            NAME AND DESIGNATION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="padding: 10px">1</td>
                                        <td style="padding: 10px">
                                            Convener (Ex-Officio)- Head of the Department
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Devika Phukan Dy. Dean, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" style="padding: 10px; vertical-align: middle">
                                            2
                                        </td>
                                        <td rowspan="7" style="padding: 10px; vertical-align: middle">
                                            All Faculty Members of the Department (Ex-Officio)
                                        </td>
                                        <td style="padding: 10px">
                                            Prof (Dr.) Amarendra Rajput, Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sujata Deb, Associate Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sankar Barman, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Maidul Islam, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Gitanjal Deka, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Bornali Chetia, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Sanchita Roy, Assistant Professor, Dept. of Physics, RSAPS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">3</td>
                                        <td style="padding: 10px">External Expert (Academic)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Anurup Gohain Baruah, Dept. of Physics, Gauhati
                                            University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">4</td>
                                        <td style="padding: 10px">External Expert (Industry)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Joyanti Chutia, Emeritus Scientist, IASST, Former
                                            Director, IASST
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
                            The Departmental Research <span style="color: #FF9A1E; font-weight: 500;">Committee (DRC)</span>
                        </h2>

                        <div>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Head of the Department Chairperson</td>
                                        <td>Dr. Devika Phukan</td>
                                        <td>Associate Professor</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Two Professors</td>
                                        <td>Prof. (Dr. ) Amarendra Rajput</td>
                                        <td>Professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Sujata Deb</td>
                                        <td>Associate Professor, Dept. of Physics</td>
                                        <td>Member secretary</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Sankar Barman</td>
                                        <td>Associate Professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Gitanjal Deka</td>
                                        <td>Assistant professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Bornali Chetia</td>
                                        <td>Assistant professor, Dept. of Physics</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">5</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. (Dr.) Ankur Ganguly</td>
                                        <td>Dean, Academics, Dean (i/c), RSET/RSIT</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof.(Dr.) Anuradha Devi</td>
                                        <td>Dean, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Rita Choudhury</td>
                                        <td>Professor, Dept. Of Mathematics</td>
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
                                                <a href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Course Structure and Syllabus UG Physics.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> COURSE STRUCTURE & SYLLABUS (BASED
                                                    ON NATIONAL EDUCATION POLICY 2020)
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <br />

                                                <a href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Structure of syllabus - UG_PHYSICS.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                    YEAR UG PROGRAMME
                                                    <i class="fa fa-download"></i> </a><br />
                                                <!-- <a
                                    href="mobile-assets/department-all/Departmentalpdf/Old Syllabus B.Sc. Physics.pdf"
                                    target="_blank"
                                  >
                                    <i class="fa fa-file-text px-2"></i> Old Syllabus B.Sc.
                                    Physics.pdf
                                    <i class="fa fa-download"></i>
                                  </a> -->
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
                                                <a
                                                    href="mobile-assets/department-all/syllabus-new/1RSAPS/Physics/Structure of syllabus - PG_PHYSICS.pdf">
                                                    STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG PROGRAMME
                                                    <i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
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

            <!--End Section-->
        </div>
    </div>
@endsection
