@extends('frontend.master')
@section('title', 'Anti-Ragging Commitee : The Assam Royal Global University')
@section('meta_description', 'Royal Global University Anti-Ragging Committee ensures a safe, inclusive, and supportive campus environment by strictly enforcing anti-ragging policies in line with UGC regulations.')
@section('meta_keywords', 'Anti-Ragging Commitee')
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
                                    <img class="rounded" decoding="async" src="mobile-assets/anti-ragging/headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="d-flex align-items-center rounded mt-3 border"
                                style="gap: 0px; padding: 20px; background-color: #ffdcdc;">
                                <span class="mobile-para1"
                                    style="font-weight: bold; color: #7a2727; font-size: 20px; line-height: 1.3;">Safe
                                    Campus
                                    Begins with you!</span>
                                {{-- <a href="https://www.rgu.ac/complaint-page3.php" target="_blank"
                                    class="btn mobile-para1"
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
        </div>
    </div>

    <div class="website">


        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <div
            style="background-image: url(mobile-assets/anti-ragging/bgg.svg); background-size: cover; height: 100vh; justify-content: center; align-items: center; display: flex;">
            <div class="row d-flex align-items-center p-5">

                <div class="col-lg-6">
                    <img style="border: 1px solid #264273; border-radius: 20px; width: 650px;"
                        src="mobile-assets/anti-ragging/headimg.png" alt="image">
                </div>

                <div class="col-lg-6" style="color: #264273; text-align: justify;">
                    <h2 class="headd1" style="color: #264273; font-weight: 700;">Anti-Ragging <span
                            style="color: #FF9A1E; font-weight: 500;">Commitee</h2>
                    <p class="para1">
                        As per UGC notification related to “Regulations on Curbing the Menace of Ragging in Higher
                        Educational Institutions, 2009”, the Assam Royal Global University (RGU) constituted an Anti-Ragging
                        Committee,2024-25 and an Anti-Ragging Squad 2024-25, as given below
                    </p>
                    {{-- <div>
                        <a href="https://www.rgu.ac/complaint-page3.php"> <button type="button"
                                class="btn-danger bg-danger btn btn-sm custom-details-btn p-2 ps-4 pe-4">Register
                                Complaint</button></a>
                    </div> --}}
                </div>

            </div>
        </div>


    </div>

     <div class="container mb-4">
    <h2 class="headd2 fw-bold text-dark text-center pt-4 pb-3">
        Anti-Ragging Committee (2025-26)
    </h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped para1">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Position</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Prof. (Dr.) B. S. Mipun</td>
                    <td>Dean, RSEES & Students Welfare</td>
                    <td>Chairperson</td>
                    <td>9436102015</td>
                    <td>bsmipun@rgu.ac</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dr. Kuntala Roy Choudhury</td>
                    <td>Assistant Professor, RSLA</td>
                    <td>Member Secretary & Nodal Officer</td>
                    <td>9706613147</td>
                    <td>kroychoudhury@rgu.ac</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sri Bubul Baishya, ACS</td>
                    <td>Circle Officer, Dispur Revenue Circle</td>
                    <td>Civil Admin Member</td>
                    <td>8638691168</td>
                    <td>dc-kamrupm@nic.in</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mr. Vikram Basumatary</td>
                    <td>Officer In-Charge, Garchuk PS</td>
                    <td>Police Member</td>
                    <td>9394090044</td>
                    <td>cp-guw@assampolice.gov.in</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ms. Farhin Farhat</td>
                    <td>Project Coordinator, Shishu Sarothi</td>
                    <td>NGO Member</td>
                    <td>8811811691</td>
                    <td>farhinfarhat10@gmail.com</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dr. Rahul Chanda</td>
                    <td>Senior Journalist, G Plus</td>
                    <td>Media Member</td>
                    <td>8486002316</td>
                    <td>Rahul.chanda@g-plus.in</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Dr. D.N. Singh</td>
                    <td>Registrar Academics, RGU</td>
                    <td>Member</td>
                    <td>9800004433</td>
                    <td>registraracademics@rgu.ac</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                    <td>Dean, RSA, RSD, RSFT, RSFA</td>
                    <td>Faculty Member</td>
                    <td>9706006112</td>
                    <td>hpagarwal@rgu.ac</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Prof. (Dr.) Prithviraj Chakarborty</td>
                    <td>Professor & Principal/HoD, RSP</td>
                    <td>Faculty Member</td>
                    <td>8945903763</td>
                    <td>pchakraborty@rgu.ac</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Prof. (Dr.) Hemeswari Bhuyan</td>
                    <td>Professor, RSN</td>
                    <td>Faculty Member</td>
                    <td>9706006112</td>
                    <td>hbhuyan@rgu.ac</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Dr. Arpee Saikia</td>
                    <td>Associate Professor, RSB</td>
                    <td>Faculty Member</td>
                    <td>9706727218</td>
                    <td>arpee.saikia@rgi.edu.in</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Dr. Lopa Das</td>
                    <td>Associate Professor, RSMAS</td>
                    <td>Faculty Member</td>
                    <td>9435552421</td>
                    <td>ldas@rgu.ac</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Dr. Indrajit Dutta</td>
                    <td>Associate Professor, RSTTM</td>
                    <td>Faculty Member</td>
                    <td>9863651421</td>
                    <td>idtxta@rgu.ac</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Dr. Rani Das</td>
                    <td>Assistant Professor, Social Work & PRO</td>
                    <td>Faculty Member</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Mr. Sourabh Sutradhar</td>
                    <td>Assistant Professor, RSET</td>
                    <td>Faculty Member</td>
                    <td>9864889295</td>
                    <td>sourabh.sutradhar@rgi.edu.in</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Ar. Jagriti Pathak</td>
                    <td>Assistant Professor, RSA</td>
                    <td>Faculty Member</td>
                    <td>9101182435</td>
                    <td>jpathak1@rgt.ac</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dr. Rupesh Kumar</td>
                    <td>Assistant Professor, MLT</td>
                    <td>Faculty Member</td>
                    <td>8638492924</td>
                    <td>rkumar@rgu.ac</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Dr. Queen Deka</td>
                    <td>Assistant Professor, RSBAS</td>
                    <td>Faculty Member</td>
                    <td>9706189927</td>
                    <td>qdeka@rgu.ac</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Mr. Mridul Phookan</td>
                    <td>Chief Warden, RGU</td>
                    <td>Admin Member</td>
                    <td>9957722115</td>
                    <td>mphookan@rgu.ac</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Mr. Ratan Nath</td>
                    <td>Chief Security & Vigilance Officer</td>
                    <td>Admin Member</td>
                    <td>9859161420</td>
                    <td>mathl@rgu.ac</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Ms. Moonmoon Ahmed</td>
                    <td>Manager, Academic Section</td>
                    <td>Admin Member</td>
                    <td>9864059775</td>
                    <td>mmahmed@rgu.ac</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Divyansh Sood</td>
                    <td>Student, BCA 4th Sem</td>
                    <td>Hostel Boarder (Boy)</td>
                    <td>7085710046</td>
                    <td>divyanshsood6969@gmail.com</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Adnin Begum</td>
                    <td>Student, BTech CE 6th Sem</td>
                    <td>Hostel Boarder (Girl)</td>
                    <td>8638810127</td>
                    <td>adninbegum@gmail.com</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Zubin Islam</td>
                    <td>MBA, 3rd Sem, RSB</td>
                    <td>Senior Student</td>
                    <td>9619121397</td>
                    <td>zislam@gmail.com</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Sibani Pattnaik</td>
                    <td>BA-LLB, 8th Sem, RSLA</td>
                    <td>Senior Student</td>
                    <td>7683944202</td>
                    <td>sibanicps@gmail.com</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Mrs. Itishree Mahapatra</td>
                    <td>Mother of Sibani Pattnaik</td>
                    <td>Parent Member</td>
                    <td>9484693331 / 9078906333</td>
                    <td>mahapatraitishree1980@gmail.com</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Mr. Abdul Zubber</td>
                    <td>Father of Shahil Ahmed (BTech CSE)</td>
                    <td>Parent Member</td>
                    <td>9435401183</td>
                    <td>zubberabdul@gmail.com</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>To be appointed</td>
                    <td>-</td>
                    <td>Fresher Member</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>To be appointed</td>
                    <td>-</td>
                    <td>Fresher Member</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="headd2 fw-bold text-dark text-center pt-4 pb-3">
        Anti-Ragging Squad Members (2025-26)
    </h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped para1">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ms. Rumi Talukdar</td>
                    <td>Associate Professor</td>
                    <td>Nursing</td>
                    <td>9864817225</td>
                    <td>rtalukdar@rgu.ac</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dr. Syed Sajidul Islam</td>
                    <td>Associate Professor</td>
                    <td>TTM</td>
                    <td>9435702586</td>
                    <td>ssislam@rgu.ac</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dr. Bapan Kalita</td>
                    <td>Associate Professor</td>
                    <td>Mathematics</td>
                    <td>9854152518</td>
                    <td>bapan.kalita@rgi.edu.in</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dr. Biplob Borah</td>
                    <td>Assistant Professor</td>
                    <td>Chemistry</td>
                    <td>7002730472</td>
                    <td>bborahl@rgu.ac</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dr. Bornali Chetia</td>
                    <td>Assistant Professor</td>
                    <td>Physics</td>
                    <td>8638067347</td>
                    <td>dchetia@rgu.ac</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dr. Darshana Bhagowati</td>
                    <td>Assistant Professor</td>
                    <td>Management</td>
                    <td>8420707010</td>
                    <td>dbhagowati@rgu.ac</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Dr. Shraddha Basu</td>
                    <td>Assistant Professor</td>
                    <td>Psychology</td>
                    <td>9401539238</td>
                    <td>sbasu@rgu.ac</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dr. Nilanjana Purkayastha</td>
                    <td>Assistant Professor</td>
                    <td>Library Science</td>
                    <td>7002145936</td>
                    <td>npurkayastha@rgu.ac</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ms. Baishali Pathak</td>
                    <td>Assistant Professor</td>
                    <td>Commerce</td>
                    <td>9085325944</td>
                    <td>bpathak1@rgu.ac</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Dr. Champa Devi</td>
                    <td>Assistant Professor</td>
                    <td>Communication & Media</td>
                    <td>9436896628</td>
                    <td>cdevi@rgu.ac</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Mr. Dhurbajyoti S. Choudhury</td>
                    <td>Assistant Professor</td>
                    <td>Animation & Visual Effects</td>
                    <td>7002057842</td>
                    <td>dschoudhury@rgu.ac</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Ar. Jagriti Pathak</td>
                    <td>Assistant Professor</td>
                    <td>Architecture</td>
                    <td>9101182435</td>
                    <td>jpathak1@rgu.ac</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Dr. Rajesh Deb</td>
                    <td>Assistant Professor</td>
                    <td>Civil Engineering</td>
                    <td>8753016393</td>
                    <td>rdeb@rgu.ac</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Dr. Sanghamitra Hazarika</td>
                    <td>Assistant Professor</td>
                    <td>Economics</td>
                    <td>7002390144</td>
                    <td>shazarikal@rgu.ac</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Ms. K M Sudha</td>
                    <td>Assistant Professor</td>
                    <td>History</td>
                    <td>8853651505</td>
                    <td>kmsudha@rgu.ac</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Mr. Abhinav Chaliha</td>
                    <td>Assistant Professor</td>
                    <td>Political Science</td>
                    <td>9873068634</td>
                    <td>achaliha@rgu.ac</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dr. Monika Kumari</td>
                    <td>Assistant Professor</td>
                    <td>Public Administration</td>
                    <td>7042228930</td>
                    <td>mkumari@rgu.ac</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Ms. Swagata Chakraborty</td>
                    <td>Assistant Professor</td>
                    <td>Sociology</td>
                    <td>8929160461</td>
                    <td>schakraborty@rgu.ac</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Ms. Joyeeta Bhattacharjee</td>
                    <td>Assistant Professor</td>
                    <td>Social Work</td>
                    <td>7099073361</td>
                    <td>jbbhattacharjee@rgu.ac</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Ms. Sangeeta Biswas</td>
                    <td>Assistant Professor</td>
                    <td>Zoology</td>
                    <td>9612206784</td>
                    <td>sbiwas1@rgu.ac</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Dr. Upashna Chettri</td>
                    <td>Assistant Professor</td>
                    <td>Botany</td>
                    <td>7797875244</td>
                    <td>uchettri@rgu.ac</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Dr. Demsai Reang</td>
                    <td>Assistant Professor</td>
                    <td>Forestry</td>
                    <td>8638026696</td>
                    <td>dreang@rgu.ac</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Ms. Neelakshi Sharma</td>
                    <td>Assistant Professor</td>
                    <td>Pharmacy</td>
                    <td>9613221566</td>
                    <td>nsharma4@rgu.ac</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Ms. Sanu Kumari</td>
                    <td>Assistant Professor and Warden</td>
                    <td>RSIT & Girls' Hostels</td>
                    <td>9864412773</td>
                    <td>skumari1@rgu.ac</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Dr. Saswati Bordoloi</td>
                    <td>Assistant Professor</td>
                    <td>IKS</td>
                    <td>8473901735</td>
                    <td>sbordoloi@rgu.ac</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Ar. Barsha Kunda</td>
                    <td>Assistant Professor</td>
                    <td>Architecture</td>
                    <td>9706721765</td>
                    <td>bkunda@rgu.ac</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Ms. Dipanjali Das</td>
                    <td>Assistant Professor</td>
                    <td>Food Technology</td>
                    <td>7016576349</td>
                    <td>ddas@rgu.ac</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Dr. Taranga Jyoti Baruah</td>
                    <td>Assistant Professor</td>
                    <td>Microbiology</td>
                    <td>7308413200</td>
                    <td>tjbaruah@rgu.ac</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Ms. Anudeep Kaur</td>
                    <td>Assistant Professor</td>
                    <td>Radiography & AIT</td>
                    <td>9654861603</td>
                    <td>akaur@rgu.ac</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Mr. Junaid Nabi Pala</td>
                    <td>Assistant Professor</td>
                    <td>OTT</td>
                    <td>7006397790</td>
                    <td>jnpala@rgu.ac</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Mr. Narottamom Ghosh</td>
                    <td>Assistant Professor</td>
                    <td>Nutrition & Dietetics</td>
                    <td>6003709757</td>
                    <td>nghosh@rgu.ac</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Ms. Priyankita Priyam Thakuria</td>
                    <td>Assistant Professor</td>
                    <td>Optometry</td>
                    <td>7086543848</td>
                    <td>ppthakuria@rgu.ac</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Dr. Sumanto Dutta Choudhury</td>
                    <td>Assistant Professor</td>
                    <td>Fine Arts</td>
                    <td>9864370028</td>
                    <td>sdchoudhury@rgu.ac</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Ms. Jasmine</td>
                    <td>Warden</td>
                    <td>Harsha House</td>
                    <td>8811003132</td>
                    <td>jpm@rgu.ac</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Mr. Kamal Narayan Das</td>
                    <td>Warden</td>
                    <td>Aditya House</td>
                    <td>9854051729</td>
                    <td>kndas@rgu.ac</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Mr. Shamim A Goney</td>
                    <td>Deputy Registrar</td>
                    <td>Administration</td>
                    <td>9864026097</td>
                    <td>sagoney@rgu.ac</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Mr. Manoj Sarma</td>
                    <td>Sr. Manager</td>
                    <td>Administration</td>
                    <td>8811003111</td>
                    <td>msarma@rgu.ac</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Mr. Bijoy Kalita</td>
                    <td>Manager</td>
                    <td>IT Section</td>
                    <td>8811026092</td>
                    <td>bskalita@rgu.ac</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection
