@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Consultancy <span style="color: #FF9A1E; font-weight: 500;">Projects</span></h2>

                <div class="table-responsive">
                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-5 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-white">#</th>
                            <th class="text-white">Name of the faculty consultant or trainter</th>
                            <th class="text-white">Organization to which consultancy or corportate training provided</th>
                            <th class="text-white">Dates/duration of consultancy</th>
                            <th class="text-white">Amount generated in INR</th>
                        </thead>
                        <tbody class="para1 text-center" style="background-color: #fff !important; ">
                            <tr>
                                <td>1</td>
                                <td>Ar. Siddhartha Deb </td>
                                <td>Assam Police
                                </td>
                                <td>28-02-2020</td>
                                <td>10,000/-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ar. Syed Gufik Hussain</td>
                                <td>Assam Police
                                </td>
                                <td>25-10-2020</td>
                                <td>10,000/-</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ar. Gautam Sharma,
                                    <hr> Ar. Siddhartha Deb,
                                    <hr>Ar. Shweta Das
                                </td>
                                <td>Ritu Enterprises
                                </td>
                                <td>28-01-2021</td>
                                <td>100,000/-</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ar. Vikram Kalita
                                    <hr> Ar.Syed Gufik Hussain
                                </td>
                                <td>Ritu Enterprises
                                </td>
                                <td>28-01-2021</td>
                                <td>100,000/-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ar. Gautam Sharma,
                                    <hr>Ar. Vikram Kalita
                                    <hr>Ar.Syed Gufik Hussain
                                </td>
                                <td>Mandala Construction Pvt.Ltd.(Hotel Norphel, Dirang, Arunachal Pradesh)
                                </td>
                                <td>Feb, 2021- Sep, 2021</td>
                                <td>50,000/-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ar. Siddhartha Deb,
                                    <hr> Ar. Amrita Sabhapandit
                                    <hr> Ar. Pooja Singh
                                </td>
                                <td>INTACH
                                </td>
                                <td>March, 2021- June, 2022</td>
                                <td>30,000/-</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Ar. Gautam Sharma,
                                    <hr> Ar. Jugal K Debnath,
                                    <hr>Ar. Partho Gope
                                    <hr> Ar.Priyanka Saikia,
                                    <hr>Ar. Kakoli talukdar
                                </td>
                                <td>INTACH
                                </td>
                                <td>21-04-2021</td>
                                <td>40,000/-</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ar. Shweta Das </td>
                                <td>QREEW, Guwahati
                                </td>
                                <td>05-06-2021</td>
                                <td>25,000/-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>The Assam Royal Global University </td>
                                <td>Grant in-aid Institution Innovation Council Regional Meet Training Program
                                </td>
                                <td>4th August to 4th August, 2022</td>
                                <td>2800000/-</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dr. Hirak Ranjan Das</td>
                                <td>M/S Sanjib Barman Govt. Regd. Civil Contractor Class 1(A) PWD (Building , Roads),N.H.; and
                                    GMC
                                </td>
                                <td>13 April 2023 to 31 May 2023</td>
                                <td>100,000/-</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Hirak Ranjan Das of RGU in collaboration with National Cheng Kung University Hospital,
                                    Taiwan</td>
                                <td>The Assam Royal Global University, National Cheng Kung University Hospital, Taiwan & North
                                    Eastern Hill
                                    University, NEHU
                                </td>
                                <td>12th to 16th October, 2020</td>
                                <td>1,08,400/-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Mousumi Deka</td>
                                <td>The Assam Royal Global University
                                </td>
                                <td>2021 to 2023</td>
                                <td>3,30,860/-</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Priyanka Patowari</td>
                                <td>The Assam Royal Global University & Grant Thornton Bharat LLP</td>
                                <td>30-05-24 to 31-07-24</td>
                                <td>1,00,000/-</td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <div class="container">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Consultancy <span style="color: #FF9A1E; font-weight: 500;">Projects</span></h2>

                <div class="table-responsive">
                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-5 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-white">#</th>
                            <th class="text-white">Name of the faculty consultant or trainter</th>
                            <th class="text-white">Organization to which consultancy or corportate training provided</th>
                            <th class="text-white">Dates/duration of consultancy</th>
                            <th class="text-white">Amount generated in INR</th>
                        </thead>
                        <tbody class="para1 text-center" style="background-color: #fff !important; ">
                            <tr>
                                <td>1</td>
                                <td>Ar. Siddhartha Deb </td>
                                <td>Assam Police
                                </td>
                                <td>28-02-2020</td>
                                <td>10,000/-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ar. Syed Gufik Hussain</td>
                                <td>Assam Police
                                </td>
                                <td>25-10-2020</td>
                                <td>10,000/-</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ar. Gautam Sharma,
                                    <hr> Ar. Siddhartha Deb,
                                    <hr>Ar. Shweta Das
                                </td>
                                <td>Ritu Enterprises
                                </td>
                                <td>28-01-2021</td>
                                <td>100,000/-</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ar. Vikram Kalita
                                    <hr> Ar.Syed Gufik Hussain
                                </td>
                                <td>Ritu Enterprises
                                </td>
                                <td>28-01-2021</td>
                                <td>100,000/-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ar. Gautam Sharma,
                                    <hr>Ar. Vikram Kalita
                                    <hr>Ar.Syed Gufik Hussain
                                </td>
                                <td>Mandala Construction Pvt.Ltd.(Hotel Norphel, Dirang, Arunachal Pradesh)
                                </td>
                                <td>Feb, 2021- Sep, 2021</td>
                                <td>50,000/-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ar. Siddhartha Deb,
                                    <hr> Ar. Amrita Sabhapandit
                                    <hr> Ar. Pooja Singh
                                </td>
                                <td>INTACH
                                </td>
                                <td>March, 2021- June, 2022</td>
                                <td>30,000/-</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Ar. Gautam Sharma,
                                    <hr> Ar. Jugal K Debnath,
                                    <hr>Ar. Partho Gope
                                    <hr> Ar.Priyanka Saikia,
                                    <hr>Ar. Kakoli talukdar
                                </td>
                                <td>INTACH
                                </td>
                                <td>21-04-2021</td>
                                <td>40,000/-</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ar. Shweta Das </td>
                                <td>QREEW, Guwahati
                                </td>
                                <td>05-06-2021</td>
                                <td>25,000/-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>The Assam Royal Global University </td>
                                <td>Grant in-aid Institution Innovation Council Regional Meet Training Program
                                </td>
                                <td>4th August to 4th August, 2022</td>
                                <td>2800000/-</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dr. Hirak Ranjan Das</td>
                                <td>M/S Sanjib Barman Govt. Regd. Civil Contractor Class 1(A) PWD (Building , Roads),N.H.; and
                                    GMC
                                </td>
                                <td>13 April 2023 to 31 May 2023</td>
                                <td>100,000/-</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Hirak Ranjan Das of RGU in collaboration with National Cheng Kung University Hospital,
                                    Taiwan</td>
                                <td>The Assam Royal Global University, National Cheng Kung University Hospital, Taiwan & North
                                    Eastern Hill
                                    University, NEHU
                                </td>
                                <td>12th to 16th October, 2020</td>
                                <td>1,08,400/-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Mousumi Deka</td>
                                <td>The Assam Royal Global University
                                </td>
                                <td>2021 to 2023</td>
                                <td>3,30,860/-</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Priyanka Patowari</td>
                                <td>The Assam Royal Global University & Grant Thornton Bharat LLP</td>
                                <td>30-05-24 to 31-07-24</td>
                                <td>1,00,000/-</td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </section>
    </div>
@endsection
