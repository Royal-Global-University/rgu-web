@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">Anti-Ragging <span
                                    style="color: #FF9A1E; font-weight: 500;">Committee</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/anti-ragging/headimg.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="d-flex align-items-center rounded mt-3 border"
                                style="gap: 0px; padding: 20px; background-color: #ffdcdc;">
                                <span class="mobile-para1"
                                    style="font-weight: bold; color: #7a2727; font-size: 20px; line-height: 1.3;">Safe Campus
                                    Begins with you!</span>
                                {{-- <a href="https://www.rgu.ac/complaint-page3.php" target="_blank" class="btn mobile-para1"
                                    style="background-color: #cf3030; color: white; font-weight: bold; padding: 10px 16px; border-radius: 5px; text-decoration: none; line-height: 1.3;">
                                    Register Complaint
                                </a> --}}
                            </div>

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                As per UGC notification related to “Regulations on Curbing the Menace of Ragging in Higher
                                Educational Institutions, 2009”, the Assam Royal Global University (RGU) constituted an
                                Anti-Ragging Committee, 2024-25 and an Anti-Ragging Squad 2024-25, as given below
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container" style="padding: 30px 0px;">
                <h3 style="text-align: start; font-weight: bold;" class="text-dark mobile-headd2 pt-3 text-center">Anti-Ragging
                    Commitee <br> 2024-25</h3>

                <div style="padding: 0px 20px;">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <table id="example"
                                    class=" overflow-hidden table table-striped table-bordered text-wrap border-top mb-0"
                                    style="width:100%">
                                    <thead class="bg-blue">
                                        <tr>
                                            <th class="font-weight-bold text-white">Sl.No</th>
                                            <th class="font-weight-bold text-white"> Name</th>
                                            <th class="font-weight-bold text-white">Designation</th>
                                            <th class="font-weight-bold text-white">position</th>

                                        </tr>
                                    </thead>
                                    <tbody class=" para1">
                                        <tr>
                                            <td>1</td>
                                            <td>Mr. Srawan Kr. Goenka</td>
                                            <td>Assistant Professor, RSC, RGU
                                                <br>
                                                Mob. No. 9435597358
                                                <br>
                                                e-mail: Srawan.goenka@rgi.edu.in
                                            <td>Chairperson</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dr. Indrajit Dutta</td>
                                            <td>Assistant Professor, RSTTM
                                                <br>
                                                Mob. No. . 9863651421
                                                <br>
                                                e-mail: idutta@rgu.ac
                                            <td>Member Secretary & Nodal Officer</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sri Papu Gogoi, ACS
                                                Circle Officer
                                            </td>
                                            <td>Office of the Circle Officer, Dispur
                                                <br>
                                                Revenue Circle, Guwahati 781028
                                                <br>
                                                Mob. No. 7086669301
                                                <br>
                                                e-mail:dc-kamrupm@nic.in
                                            <td>Member from Civil Administration</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td> Mr. Dharani Gogoi
                                                Officer In-Charge
                                            </td>
                                            <td>Garchuk Police Station, Guwahati
                                                <br>
                                                781035, Assam
                                                <br>
                                                Mob. No.. 6001390890
                                                <br>
                                                e-mail:cp-guw@assampolice.gov.in
                                            <td>Member from Police Administration</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ms. Moonmee Baruah</td>
                                            <td>Project Supervisor, Udayachal
                                                <br>
                                                A Unit of Jadav Chandra Bhuyan Memorial Trust
                                                <br>
                                                Mob. No. 9132845179
                                                <br>
                                                e-mail:moonmeebaruah97@gmail.com
                                            <td>Member from NGO</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Dr. Rahul Chanda</td>
                                            <td>Senior Journalist and Bureau Chief G Plus
                                                <br>
                                                Mob. No. 8486002316
                                                <br>
                                                e-mail: Rahul.chanda@g-plus.in
                                            <td>Member from Media</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Dr. D N Singh</td>
                                            <td>Registrar, RGU
                                                <br>
                                                Mob. No. 9800004433
                                                <br>
                                                e-mail: registar@rgu.ac
                                            <td>Member </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Prof. (Dr.) B.S. Mipun</td>
                                            <td>Dean, RSEES & DSW
                                                <br>
                                                Mob. No.. 9436102075
                                                <br>
                                                e-mail: bsmipun@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Prof. (Dr.) Bhuban Chandra Barooah</td>
                                            <td>Dean, RSLA
                                                <br>
                                                Mob. No.9864061717
                                                <br>
                                                e-mail: bcbarooah@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Prof. (Dr.) Sajal Nag</td>
                                            <td>Dean, RSHSS
                                                <br>
                                                Mob. No.9435175378
                                                <br>
                                                e-mail: snag@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Prof. (Dr.) Nikhil Kumar Chrungoo</td>
                                            <td>Dean, RSLSC
                                                <br>
                                                Mob. No.9436101651
                                                <br>
                                                e-mail:nkchrungoo@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Prof. (Dr.) Hemeswari Bhuyan</td>
                                            <td>Professor, RSN
                                                <br>
                                                Mob. No.9706006112
                                                <br>
                                                e-mail: hbhuyan@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Dr. Bitopi Gogoi</td>
                                            <td>Associate Professor, RSB
                                                <br>
                                                Mob. 9854707825
                                                <br>
                                                e-mail: bitopi.gogoi@rgi.edu.in
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Prof. (Dr.). Hari Prasad Agarwal</td>
                                            <td>Dean, RSA, RGU
                                                <br>
                                                Mob. No.7896832054
                                                <br>
                                                e-mail: hpagarwal@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Dr. Suresh Chandra Nayak</td>
                                            <td>Dean, RSCOM
                                                <br>
                                                Mob. No.8010235517
                                                <br>
                                                e-mail:scnayak@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Pranabesh Sikdar </td>
                                            <td>Associate Professor, RSP
                                                <br>
                                                Mob. No.8106289078
                                                <br>
                                                e-mail:psikdar@rgu.ac
                                            <td>Member from Faculty </td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Mr. Shamim A Goney</td>
                                            <td>Deputy Registrar, RGU
                                                <br>
                                                Mob. No.9864026097
                                                <br>
                                                e-mail: bcbarooah@rgu.ac
                                            <td>Member from Admin </td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Mr. Harmohan Saikia</td>
                                            <td>Chief Warden, Boys’ Hostels, RGU
                                                <br>
                                                Mob. No.8811003152
                                                <br>
                                                e-mail: harmohan.saikia@rgi.edu.in
                                            <td>Member from Admin </td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Ms. Jasmin</td>
                                            <td>Warden, Girls’ Hostels, RGU
                                                <br>
                                                Mob. No.8811003132
                                                <br>
                                                e-mail: jpm@rgu.ac
                                            <td>Member from Admin </td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Rajan Ray</td>
                                            <td>BBA,4th semester, RSB
                                                <br>
                                                Mob. No. 9693938607
                                                <br>
                                                e-mail: rayrajan456@gmail.com
                                            <td>Member from Hostel Boarder (Boy’s) </td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>M.A. English, 3rd semester, RSL</td>
                                            <td>Warden, Girls’ Hostels, RGU
                                                <br>
                                                Mob. No.939582250/ 6900591224
                                                <br>
                                                e-mail:bharali172@gmail.com
                                            <td>Member from Hostel Boarder (Girl’s)</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Dev Shah</td>
                                            <td>BTech CSE, 7th semester, RSET
                                                <br>
                                                Mob. No.9864141410
                                                <br>
                                                e-mail: devshahghy@gmail.com
                                            <td>Member from Sr. Students </td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Sibani Pattnaik</td>
                                            <td>BA-LL. B(H), 7th semester, RSLA
                                                <br>
                                                Mob. No.7683944202
                                                <br>
                                                e-mail: sibanicps@gmail.com
                                            <td>Member from Sr. Students</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Mrs. Itishree Mahapatra</td>
                                            <td>M/O: Sibani Pattanaik (BALLB)
                                                <br>
                                                Mob. No. 948469333/9078906333
                                                <br>
                                                e-mail: mahapatraitishree1980@gmail.com
                                            <td>Member from Parents</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Mr. Gopal Bharali</td>
                                            <td>F/O: Priyanka Bharali (MA English)
                                                <br>
                                                Mob. No.8011891810
                                                <br>
                                                e-mail: gopalbharali552@gmail.com
                                            <td>Member from Parents </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                    <h3 style="text-align: start; font-weight: bold;" class="text-dark mobile-headd2 pt-5 text-center">
                        Anti-Ragging
                        Commitee <br> 2024-25</h3>
                    <div class="table-responsive">
                        <div>
                            <div class="col-xl-12 col-md-12">
                                <table id="example2"
                                    class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                                    <thead>
                                        <tr>
                                            <th class=" text-white">
                                                Sl.No.</th>
                                            <th class=" text-white">
                                                Member Name</th>
                                            <th class=" text-white">
                                                Designation</th>
                                            <th class=" text-white">
                                                Department</th>
                                            <th class=" text-white">
                                                Mobile</th>
                                            <th class=" text-white">Email
                                                ID</th>
                                        </tr>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1</td>
                                            <td>Dr. Deluwar Hoque</td>
                                            <td>Assistant Professor</td>
                                            <td>Economics</td>
                                            <td>7002842884</td>
                                            <td>mdhoquee@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Dr. Meenu Sarmah</td>
                                            <td>Associate Professor</td>
                                            <td>Public Administration</td>
                                            <td>9813117298</td>
                                            <td>m.sarmah@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td> Ms. Kristi Saikia</td>
                                            <td>Assistant Professor</td>
                                            <td>Social Work</td>
                                            <td>7086525745</td>
                                            <td>ksaikia@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td> Dr. Rashmi Sarmah</td>
                                            <td>Assistant Professor</td>
                                            <td>Journalism and Mass Communication</td>
                                            <td>9864206061</td>
                                            <td>rsarmah@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td> Dr. Fariza Saidin</td>
                                            <td>Assistant Professor</td>
                                            <td>Psychology</td>
                                            <td>9085667858</td>
                                            <td>farizasaidin@gmail.com</td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Ms. Mahima Singhi</td>
                                            <td>Assistant Professor</td>
                                            <td>Psychology</td>
                                            <td>6000812526</td>
                                            <td>msinghi@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>Dr. Darshana Bhagowati</td>
                                            <td>Assistant Professor</td>
                                            <td>Business administration</td>
                                            <td>8420707010</td>
                                            <td>dbhagowati@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>Dr. Anushree Baruah</td>
                                            <td>Assistant Professor</td>
                                            <td>Botany</td>
                                            <td>9864072177</td>
                                            <td>abaruah@rgu.ac</td>
                                        </tr>



                                        <tr>
                                            <td>9</td>
                                            <td>Dr. Pratikshya Borah</td>
                                            <td>Assistant Professor</td>
                                            <td>Botany</td>
                                            <td>9873062585</td>
                                            <td>pborah3@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>Ms. Sangeeta Biswas</td>
                                            <td>Assistant Professor</td>
                                            <td>Zoology</td>
                                            <td>9612206784</td>
                                            <td>sbiwas1@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>Dr. Annu Kumari</td>
                                            <td>Assistant Professor</td>
                                            <td>Zoology</td>
                                            <td>8837287612</td>
                                            <td>akumari@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>Dr. Demsai Reang</td>
                                            <td>Assistant Professor</td>
                                            <td>Environmental Science</td>
                                            <td>8638026696</td>
                                            <td>dreang@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>Mr. Amarjyoti Borah</td>
                                            <td>Assistant Professor</td>
                                            <td>Geology</td>
                                            <td>9864943490</td>
                                            <td>aborah2@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td>Dr. Rupshikha Patowary Hazarika</td>
                                            <td>Assistant Professor</td>
                                            <td>Biotechnology</td>
                                            <td>9401659899</td>
                                            <td>rpatowary1@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td>Dr. Dipayan Das</td>
                                            <td>Assistant Professor</td>
                                            <td>Microbiology</td>
                                            <td>7679293696</td>
                                            <td>ddas2@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>Ms. Pradipta Shyam</td>
                                            <td>Teaching Assistant/Lecturer</td>
                                            <td>Forensic Science</td>
                                            <td>8105695296</td>
                                            <td>pshyam@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td>Narottamom Ghosh</td>
                                            <td>Teaching Assistant/Lecturer</td>
                                            <td>Nutrition and Dietetics</td>
                                            <td>6003709757</td>
                                            <td>nghosh@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>Ms. Pallabi Sarkar</td>
                                            <td>Assistant Professor</td>
                                            <td>Nutrition and Dietetics</td>
                                            <td>8402824275</td>
                                            <td>psarkar1@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>Ms. Jebin Sultana</td>
                                            <td>Assistant Professor</td>
                                            <td>Nutrition and dietetics</td>
                                            <td>8011109061</td>
                                            <td>xebin22@gmail.com</td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td>Ms. Nilakshi Deka</td>
                                            <td>Assistant Professor</td>
                                            <td>Computer Science & Engineering</td>
                                            <td>8876624301</td>
                                            <td>nilakshi.deka@rgu.edu.in</td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>Ms. Sayesta Taskeen Rahman</td>
                                            <td>Teaching Assistant/Lecturer</td>
                                            <td>Law</td>
                                            <td>8133910542</td>
                                            <td>strahman@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td>Ms. Mayuri Ojha</td>
                                            <td>Assistant Professor</td>
                                            <td>Radiography & AIT</td>
                                            <td>6002177397</td>
                                            <td>mojah@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>Ms. Ekajolly Das</td>
                                            <td>Assistant Professor</td>
                                            <td>Hotel Management</td>
                                            <td>8638652209</td>
                                            <td>edas@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>24</td>
                                            <td>Ms. Rituparna Baruah</td>
                                            <td>Assistant Professor</td>
                                            <td>Commerce</td>
                                            <td>9706982458</td>
                                            <td>rbaruah@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>25</td>
                                            <td>Ms. Madhumita Das</td>
                                            <td>Assistant Professor</td>
                                            <td>Physiotherapy</td>
                                            <td>9678325465</td>
                                            <td>mdas5@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>26</td>
                                            <td>Mr. Rajkamal Gogoi</td>
                                            <td>others</td>
                                            <td>Royal School of Bio-Sciences</td>
                                            <td>8402908604</td>
                                            <td>rajkamaltgogoi@gmail.com</td>
                                        </tr>

                                        <tr>
                                            <td>27</td>
                                            <td>Mr. Manabendra Das</td>
                                            <td>Graphic Designer</td>
                                            <td>Administration</td>
                                            <td>7575901069</td>
                                            <td>mdas1@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>28</td>
                                            <td>Ms. Narinder Kaur Kohli</td>
                                            <td>Assistant Manager</td>
                                            <td>Academics</td>
                                            <td>8133956421</td>
                                            <td>nkkohli@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>29</td>
                                            <td>Mr. Abhishek Bhowmick</td>
                                            <td>Others</td>
                                            <td>Academics</td>
                                            <td>9678863875</td>
                                            <td>abhibhow95@gmail.com</td>
                                        </tr>

                                        <tr>
                                            <td>30</td>
                                            <td>Mr. Naren Sarma</td>
                                            <td>Assistant Warden</td>
                                            <td>Hiyansh House</td>
                                            <td>9864080192</td>
                                            <td>nsharma1@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>31</td>
                                            <td>Ms. Mamata Tamuli</td>
                                            <td>Assistant Warden</td>
                                            <td>Harsha House</td>
                                            <td>7002144451</td>
                                            <td>mtamuly@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>32</td>
                                            <td>Mr. Kamal Narayan Das</td>
                                            <td>Warden</td>
                                            <td>Aditya House </td>
                                            <td>9854051729</td>
                                            <td>kndas@rgu.ac</td>
                                        </tr>

                                        <tr>
                                            <td>33</td>
                                            <td>Ms. Anita Boruah</td>
                                            <td>Warden</td>
                                            <td>Samaya House </td>
                                            <td>9957293391\7099021577</td>
                                            <td>anitasoham2007@gmail.com</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <h2 style="text-align: start; font-weight: bold;" class="text-dark mobile-headd2 pt-5 pb-2">Roles and
                        Responsibilities of Anti Ragging Committee</h2>

                    <ol class="mobile-para1 text-dark" style="text-align: justify;">
                        <li>Any act of Indiscipline, Teasing or Handling with Rudeness.</li>
                        <li>Any act that Prevents, Disrupts the Regular Academic Activity.</li>
                        <li>Any activity which is likely to cause Annoyance, hardship, Psychological Harm or creates Fear or
                            Apprehension.</li>
                        <li>Any Act of Financial Extortion or Forceful Expenditure.</li>
                        <li>Any Act of Physical Abuse causing Assault, Harm or danger to Health.</li>
                        <li>Any Act of abuse by spoken words, emails, SMS or public insult etc.</li>
                        <li>Any Act of Wrongful Confinement, Kidnapping, molesting or committing unnatural offences, use of
                            criminal forces, trespass or intimidation.</li>
                        <li>Any unlawful assembly or conspiracy to ragging.</li>
                        <li>Anti-Ragging Committee responsible for inculcating Culture of Ragging Free Environment in the
                            Campus. The Anti-Ragging Squad office bearers will work under the supervision of Anti Ragging
                            Committee and to engage in the works of checking places like Hostels, Buses, Canteens, Classrooms,
                            and other places of student congregation.</li>
                        <li>Anti-Ragging Committee will be involved in designing strategies and action plan for curbing the
                            Menace of Ragging in the university by adopting array of activities. The Committee also would
                            conduct awareness programmes from time-to-time in the campus.</li>
                        <li>Anti-Ragging Squad will be working under the Monitoring of Anti Ragging Committee and will seek
                            advice from the Anti-Ragging Committee.</li>
                        <li>The functions of Anti-Ragging Squad will be to keep a vigil and stop the incidences of Ragging, if
                            any, happening/ reported in the places of Student aggregation including Classrooms, Canteens, Buses,
                            Grounds, Hostels etc.</li>
                        <li>The Squad will also educate the students at large by adopting various means about the menace of
                            Ragging and related Punishments thereto.</li>
                        <li>A gamut of positive reinforcement activities are adopted by Anti-Ragging Squad for orienting
                            students and moulding their personality for a better cause. They shall work in Consonance and
                            Guidance of Anti Ragging Committee.</li>
                    </ol>

                    <h2 style="text-align: start; font-weight: bold;" class="text-dark mobile-headd2 pt-2 pb-1">Meeting
                        Frequency
                    </h2>

                    <p class="mobile-para1 text-dark" style="text-align: justify;">Anti-ragging committee should meet atleast
                        once in every quarter (preferably before and after the beginning of a semester) with two-thirds of the
                        total number of members.
                    </p>

                </div>
            </div>
        </div>
    </div>

        <div class="website">


            <!--Start Header-->
            @include('frontend/components/aheader')
        <!--End Header-->


        <div style="background-image: url(mobile-assets/anti-ragging/bgg.svg); background-size: cover; height: 100vh; justify-content: center; align-items: center; display: flex;">
            <div class="row d-flex align-items-center p-5">

                <div class="col-lg-6">
                  <img style="border: 1px solid #264273; border-radius: 20px; width: 650px;" src="mobile-assets/anti-ragging/headimg.png" alt="image">
                </div>

                <div class="col-lg-6" style="color: #264273; text-align: justify;">
                    <h2 class="headd1" style="color: #264273; font-weight: 700;">Anti-Ragging <span style="color: #FF9A1E; font-weight: 500;">Commitee</h2>
                    <p class="para1">
                        As per UGC notification related to “Regulations on Curbing the Menace of Ragging in Higher Educational Institutions, 2009”, the Assam Royal Global University (RGU) constituted an Anti-Ragging Committee,2024-25 and an Anti-Ragging Squad 2024-25, as given below
                    </p>
                    {{-- <div>
                        <a href="https://www.rgu.ac/complaint-page3.php"> <button type="button" class="btn-danger bg-danger btn btn-sm custom-details-btn p-2 ps-4 pe-4">Register
                             Complaint</button></a>
                     </div> --}}
                </div>

            </div>
        </div>

            <div>
                <div style="padding-top: 20px;"
                    class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                    data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                    <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

                        <!--About Section-->
                        <section>
                            <div class="container">

                                <h3 style="text-align: start; font-weight: bold;" class="text-dark headd2 pt-3 text-center">Anti-Ragging
                                    Commitee 2024-25</h3>
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <table id="example"
                                                class=" overflow-hidden table table-striped table-bordered text-wrap border-top mb-0"
                                                style="width:100%">
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="font-weight-bold text-white">Sl.No</th>
                                                        <th class="font-weight-bold text-white"> Name</th>
                                                        <th class="font-weight-bold text-white">Designation</th>
                                                        <th class="font-weight-bold text-white">position</th>

                                                    </tr>
                                                </thead>
                                                <tbody class=" para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mr. Srawan Kr. Goenka</td>
                                                        <td>Assistant Professor, RSC, RGU
                                                            <br>
                                                            Mob. No. 9435597358
                                                            <br>
                                                            e-mail: Srawan.goenka@rgi.edu.in
                                                        <td>Chairperson</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Dr. Indrajit Dutta</td>
                                                        <td>Assistant Professor, RSTTM
                                                            <br>
                                                            Mob. No. . 9863651421
                                                            <br>
                                                            e-mail: idutta@rgu.ac
                                                        <td>Member Secretary & Nodal Officer</td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Sri Papu Gogoi, ACS
                                                            Circle Officer
                                                        </td>
                                                        <td>Office of the Circle Officer, Dispur
                                                            <br>
                                                            Revenue Circle, Guwahati 781028
                                                            <br>
                                                            Mob. No. 7086669301
                                                            <br>
                                                            e-mail:dc-kamrupm@nic.in
                                                        <td>Member from Civil Administration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td> Mr. Dharani Gogoi
                                                            Officer In-Charge
                                                        </td>
                                                        <td>Garchuk Police Station, Guwahati
                                                            <br>
                                                            781035, Assam
                                                            <br>
                                                            Mob. No.. 6001390890
                                                            <br>
                                                            e-mail:cp-guw@assampolice.gov.in
                                                        <td>Member from Police Administration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Ms. Moonmee Baruah</td>
                                                        <td>Project Supervisor, Udayachal
                                                            <br>
                                                            A Unit of Jadav Chandra Bhuyan Memorial Trust
                                                            <br>
                                                            Mob. No. 9132845179
                                                            <br>
                                                            e-mail:moonmeebaruah97@gmail.com
                                                        <td>Member from NGO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Dr. Rahul Chanda</td>
                                                        <td>Senior Journalist and Bureau Chief G Plus
                                                            <br>
                                                            Mob. No. 8486002316
                                                            <br>
                                                            e-mail: Rahul.chanda@g-plus.in
                                                        <td>Member from Media</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Dr. D N Singh</td>
                                                        <td>Registrar, RGU
                                                            <br>
                                                            Mob. No. 9800004433
                                                            <br>
                                                            e-mail: registar@rgu.ac
                                                        <td>Member </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Prof. (Dr.) B.S. Mipun</td>
                                                        <td>Dean, RSEES & DSW
                                                            <br>
                                                            Mob. No.. 9436102075
                                                            <br>
                                                            e-mail: bsmipun@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Prof. (Dr.) Bhuban Chandra Barooah</td>
                                                        <td>Dean, RSLA
                                                            <br>
                                                            Mob. No.9864061717
                                                            <br>
                                                            e-mail: bcbarooah@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Prof. (Dr.) Sajal Nag</td>
                                                        <td>Dean, RSHSS
                                                            <br>
                                                            Mob. No.9435175378
                                                            <br>
                                                            e-mail: snag@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Prof. (Dr.) Nikhil Kumar Chrungoo</td>
                                                        <td>Dean, RSLSC
                                                            <br>
                                                            Mob. No.9436101651
                                                            <br>
                                                            e-mail:nkchrungoo@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Prof. (Dr.) Hemeswari Bhuyan</td>
                                                        <td>Professor, RSN
                                                            <br>
                                                            Mob. No.9706006112
                                                            <br>
                                                            e-mail: hbhuyan@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Dr. Bitopi Gogoi</td>
                                                        <td>Associate Professor, RSB
                                                            <br>
                                                            Mob. 9854707825
                                                            <br>
                                                            e-mail: bitopi.gogoi@rgi.edu.in
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Prof. (Dr.). Hari Prasad Agarwal</td>
                                                        <td>Dean, RSA, RGU
                                                            <br>
                                                            Mob. No.7896832054
                                                            <br>
                                                            e-mail: hpagarwal@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Dr. Suresh Chandra Nayak</td>
                                                        <td>Dean, RSCOM
                                                            <br>
                                                            Mob. No.8010235517
                                                            <br>
                                                            e-mail:scnayak@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Pranabesh Sikdar </td>
                                                        <td>Associate Professor, RSP
                                                            <br>
                                                            Mob. No.8106289078
                                                            <br>
                                                            e-mail:psikdar@rgu.ac
                                                        <td>Member from Faculty </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Mr. Shamim A Goney</td>
                                                        <td>Deputy Registrar, RGU
                                                            <br>
                                                            Mob. No.9864026097
                                                            <br>
                                                            e-mail: bcbarooah@rgu.ac
                                                        <td>Member from Admin </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Mr. Harmohan Saikia</td>
                                                        <td>Chief Warden, Boys’ Hostels, RGU
                                                            <br>
                                                            Mob. No.8811003152
                                                            <br>
                                                            e-mail: harmohan.saikia@rgi.edu.in
                                                        <td>Member from Admin </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Ms. Jasmin</td>
                                                        <td>Warden, Girls’ Hostels, RGU
                                                            <br>
                                                            Mob. No.8811003132
                                                            <br>
                                                            e-mail: jpm@rgu.ac
                                                        <td>Member from Admin </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Rajan Ray</td>
                                                        <td>BBA,4th semester, RSB
                                                            <br>
                                                            Mob. No. 9693938607
                                                            <br>
                                                            e-mail: rayrajan456@gmail.com
                                                        <td>Member from Hostel Boarder (Boy’s) </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>M.A. English, 3rd semester, RSL</td>
                                                        <td>Warden, Girls’ Hostels, RGU
                                                            <br>
                                                            Mob. No.939582250/ 6900591224
                                                            <br>
                                                            e-mail:bharali172@gmail.com
                                                        <td>Member from Hostel Boarder (Girl’s)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>Dev Shah</td>
                                                        <td>BTech CSE, 7th semester, RSET
                                                            <br>
                                                            Mob. No.9864141410
                                                            <br>
                                                            e-mail: devshahghy@gmail.com
                                                        <td>Member from Sr. Students </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>Sibani Pattnaik</td>
                                                        <td>BA-LL. B(H), 7th semester, RSLA
                                                            <br>
                                                            Mob. No.7683944202
                                                            <br>
                                                            e-mail: sibanicps@gmail.com
                                                        <td>Member from Sr. Students</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>Mrs. Itishree Mahapatra</td>
                                                        <td>M/O: Sibani Pattanaik (BALLB)
                                                            <br>
                                                            Mob. No. 948469333/9078906333
                                                            <br>
                                                            e-mail: mahapatraitishree1980@gmail.com
                                                        <td>Member from Parents</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>Mr. Gopal Bharali</td>
                                                        <td>F/O: Priyanka Bharali (MA English)
                                                            <br>
                                                            Mob. No.8011891810
                                                            <br>
                                                            e-mail: gopalbharali552@gmail.com
                                                        <td>Member from Parents </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <h3 style="text-align: start; font-weight: bold;" class="text-dark headd2 pt-2">Anti-Ragging
                                    Commitee 2024-25</h3>
                                <div class="table-responsive">
                                    <div>
                                        <div class="col-xl-12 col-md-12">
                                            <table id="example2"
                                                class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class=" text-white">
                                                            Sl.No.</th>
                                                        <th class=" text-white">
                                                            Member Name</th>
                                                        <th class=" text-white">
                                                            Designation</th>
                                                        <th class=" text-white">
                                                            Department</th>
                                                        <th class=" text-white">
                                                            Mobile</th>
                                                        <th class=" text-white">Email
                                                            ID</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dr. Deluwar Hoque</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Economics</td>
                                                        <td>7002842884</td>
                                                        <td>mdhoquee@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Dr. Meenu Sarmah</td>
                                                        <td>Associate Professor</td>
                                                        <td>Public Administration</td>
                                                        <td>9813117298</td>
                                                        <td>m.sarmah@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td> Ms. Kristi Saikia</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Social Work</td>
                                                        <td>7086525745</td>
                                                        <td>ksaikia@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td> Dr. Rashmi Sarmah</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Journalism and Mass Communication</td>
                                                        <td>9864206061</td>
                                                        <td>rsarmah@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td> Dr. Fariza Saidin</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Psychology</td>
                                                        <td>9085667858</td>
                                                        <td>farizasaidin@gmail.com</td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Ms. Mahima Singhi</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Psychology</td>
                                                        <td>6000812526</td>
                                                        <td>msinghi@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Dr. Darshana Bhagowati</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Business administration</td>
                                                        <td>8420707010</td>
                                                        <td>dbhagowati@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>8</td>
                                                        <td>Dr. Anushree Baruah</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Botany</td>
                                                        <td>9864072177</td>
                                                        <td>abaruah@rgu.ac</td>
                                                    </tr>



                                                    <tr>
                                                        <td>9</td>
                                                        <td>Dr. Pratikshya Borah</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Botany</td>
                                                        <td>9873062585</td>
                                                        <td>pborah3@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Ms. Sangeeta Biswas</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Zoology</td>
                                                        <td>9612206784</td>
                                                        <td>sbiwas1@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>11</td>
                                                        <td>Dr. Annu Kumari</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Zoology</td>
                                                        <td>8837287612</td>
                                                        <td>akumari@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>12</td>
                                                        <td>Dr. Demsai Reang</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Environmental Science</td>
                                                        <td>8638026696</td>
                                                        <td>dreang@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>13</td>
                                                        <td>Mr. Amarjyoti Borah</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Geology</td>
                                                        <td>9864943490</td>
                                                        <td>aborah2@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>14</td>
                                                        <td>Dr. Rupshikha Patowary Hazarika</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Biotechnology</td>
                                                        <td>9401659899</td>
                                                        <td>rpatowary1@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>15</td>
                                                        <td>Dr. Dipayan Das</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Microbiology</td>
                                                        <td>7679293696</td>
                                                        <td>ddas2@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>16</td>
                                                        <td>Ms. Pradipta Shyam</td>
                                                        <td>Teaching Assistant/Lecturer</td>
                                                        <td>Forensic Science</td>
                                                        <td>8105695296</td>
                                                        <td>pshyam@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>17</td>
                                                        <td>Narottamom Ghosh</td>
                                                        <td>Teaching Assistant/Lecturer</td>
                                                        <td>Nutrition and Dietetics</td>
                                                        <td>6003709757</td>
                                                        <td>nghosh@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>18</td>
                                                        <td>Ms. Pallabi Sarkar</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Nutrition and Dietetics</td>
                                                        <td>8402824275</td>
                                                        <td>psarkar1@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>19</td>
                                                        <td>Ms. Jebin Sultana</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Nutrition and dietetics</td>
                                                        <td>8011109061</td>
                                                        <td>xebin22@gmail.com</td>
                                                    </tr>

                                                    <tr>
                                                        <td>20</td>
                                                        <td>Ms. Nilakshi Deka</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Computer Science & Engineering</td>
                                                        <td>8876624301</td>
                                                        <td>nilakshi.deka@rgu.edu.in</td>
                                                    </tr>

                                                    <tr>
                                                        <td>21</td>
                                                        <td>Ms. Sayesta Taskeen Rahman</td>
                                                        <td>Teaching Assistant/Lecturer</td>
                                                        <td>Law</td>
                                                        <td>8133910542</td>
                                                        <td>strahman@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>22</td>
                                                        <td>Ms. Mayuri Ojha</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Radiography & AIT</td>
                                                        <td>6002177397</td>
                                                        <td>mojah@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>23</td>
                                                        <td>Ms. Ekajolly Das</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Hotel Management</td>
                                                        <td>8638652209</td>
                                                        <td>edas@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>24</td>
                                                        <td>Ms. Rituparna Baruah</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Commerce</td>
                                                        <td>9706982458</td>
                                                        <td>rbaruah@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>25</td>
                                                        <td>Ms. Madhumita Das</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Physiotherapy</td>
                                                        <td>9678325465</td>
                                                        <td>mdas5@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>26</td>
                                                        <td>Mr. Rajkamal Gogoi</td>
                                                        <td>others</td>
                                                        <td>Royal School of Bio-Sciences</td>
                                                        <td>8402908604</td>
                                                        <td>rajkamaltgogoi@gmail.com</td>
                                                    </tr>

                                                    <tr>
                                                        <td>27</td>
                                                        <td>Mr. Manabendra Das</td>
                                                        <td>Graphic Designer</td>
                                                        <td>Administration</td>
                                                        <td>7575901069</td>
                                                        <td>mdas1@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>28</td>
                                                        <td>Ms. Narinder Kaur Kohli</td>
                                                        <td>Assistant Manager</td>
                                                        <td>Academics</td>
                                                        <td>8133956421</td>
                                                        <td>nkkohli@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>29</td>
                                                        <td>Mr. Abhishek Bhowmick</td>
                                                        <td>Others</td>
                                                        <td>Academics</td>
                                                        <td>9678863875</td>
                                                        <td>abhibhow95@gmail.com</td>
                                                    </tr>

                                                    <tr>
                                                        <td>30</td>
                                                        <td>Mr. Naren Sarma</td>
                                                        <td>Assistant Warden</td>
                                                        <td>Hiyansh House</td>
                                                        <td>9864080192</td>
                                                        <td>nsharma1@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>31</td>
                                                        <td>Ms. Mamata Tamuli</td>
                                                        <td>Assistant Warden</td>
                                                        <td>Harsha House</td>
                                                        <td>7002144451</td>
                                                        <td>mtamuly@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>32</td>
                                                        <td>Mr. Kamal Narayan Das</td>
                                                        <td>Warden</td>
                                                        <td>Aditya House </td>
                                                        <td>9854051729</td>
                                                        <td>kndas@rgu.ac</td>
                                                    </tr>

                                                    <tr>
                                                        <td>33</td>
                                                        <td>Ms. Anita Boruah</td>
                                                        <td>Warden</td>
                                                        <td>Samaya House </td>
                                                        <td>9957293391\7099021577</td>
                                                        <td>anitasoham2007@gmail.com</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container pt-3" style="text-align: justify;">
                                    <h3 style="text-align: start; font-weight: bold;" class="text-dark headd2 pt-2">Roles and Responsibilities of Anti Ragging Committee</h3>
                                <p class="fs-16">
                                <ol class="list-style2 fs-16 px-6 para1 text-dark" style="text-align: start;">
                                    <li>Anti-Ragging Committee to ensure compliance with the provisions of Regulations
                                        as well as the
                                        provisions of any law for the time being in force concerning ragging; and to
                                        monitor and oversee
                                        the
                                        performance of the Anti-Ragging Squad in prevention of ragging in the
                                        institution. As per the
                                        order
                                        of Supreme Court of India and subsequent Notification from University Grants
                                        Commission (UGC),
                                        ragging constitutes one 0r more of any intention by any student or group of
                                        students on:
                                        <ul class="list-style3 fs-16 px-6">
                                            <li>Any act of Indiscipline, Teasing or Handling with Rudeness.</li>
                                            <li>Any act that Prevents, Disrupts the Regular Academic Activity.</li>
                                            <li>Any activity which is likely to cause Annoyance, hardship, Psychological
                                                Harm or creates
                                                Fear or Apprehension.</li>
                                            <li>Any Act of Financial Extortion or Forceful Expenditure.</li>
                                            <li>Any Act of Physical Abuse causing Assault, Harm or danger to Health.
                                            </li>
                                            <li>Any Act of abuse by spoken words, emails, SMS or public insult etc.</li>
                                            <li>Any Act of Wrongful Confinement, Kidnapping, molesting or committing
                                                unnatural offences, use of criminal forces, trespass or intimidation.
                                            </li>
                                            <li>Any unlawful assembly or conspiracy to ragging.</li>
                                        </ul>
                                    </li>
                                    <li>Anti-Ragging Committee responsible for inculcating Culture of Ragging Free
                                        Environment in the
                                        Campus. The Anti-Ragging Squad office bearers will work under the supervision of
                                        Anti Ragging
                                        Committee and to engage in the works of checking places like Hostels, Buses,
                                        Canteens,
                                        Classrooms,
                                        and other places of student congregation.</li>
                                    <li>Anti-Ragging Committee will be involved in designing strategies and action plan
                                        for curbing the
                                        Menace of Ragging in the university by adopting array of activities. The
                                        Committee also would
                                        conduct awareness programmes from time-to-time in the campus.</li>
                                    <li>Anti-Ragging Squad will be working under the Monitoring of Anti Ragging
                                        Committee and will seek
                                        advice from the Anti-Ragging Committee..</li>
                                    <li>The functions of Anti-Ragging Squad will be to keep a vigil and stop the
                                        incidences of Ragging,
                                        if
                                        any, happening/ reported in the places of Student aggregation including
                                        Classrooms, Canteens,
                                        Buses,
                                        Grounds, Hostels etc.</li>
                                    <li>The Squad will also educate the students at large by adopting various means
                                        about the menace of
                                        Ragging and related Punishments there to.</li>
                                    <li>A gamut of positive reinforcement activities are adopted by Anti-Ragging Squad
                                        for orienting
                                        students and moulding their personality for a better cause. They shall work in
                                        Consonance and
                                        Guidance of Anti Ragging Committee.</li>
                                </ol>
                                </p>
                            </div>
                            <div class="container">
                                    <h3 style="text-align: start; font-weight: bold;" class="text-dark headd2 pt-2">Meeting Frequency</h3>

                                <p class="para1 text-dark" style="text-align: start;">
                                 Anti-ragging committee should meet atleast once in every quarter (preferably
                                        before and after
                                        the
                                        beginning of a semester) with two-thirds of the total number of members.

                                </p>
                            </div>
                        </section>
                    </div>
                    <!--End About-->
                </div>
            </div>

        </div>
@endsection
