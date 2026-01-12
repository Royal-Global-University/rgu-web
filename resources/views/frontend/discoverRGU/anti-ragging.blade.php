@extends('frontend.master')
@section('title', 'Anti-Ragging Commitee : The Assam Royal Global University')
@section('meta_description', 'Royal Global University Anti-Ragging Committee ensures a safe, inclusive, and supportive
    campus environment by strictly enforcing anti-ragging policies in line with UGC regulations.')
@section('meta_keywords', 'Anti-Ragging Commitee')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 120px;"></div>
    </div>
    <div class="website">
        @include('frontend/components/aheader')
    </div>

    <section class="ab-hero-main-wrap">

            <style>
      /* ========== HERO SECTION ========== */
      .ab-hero-main-wrap {
        font-family: "Times New Roman", Times, serif;
        min-height: 90vh;
        background-image: url("mobile-assets/anti-ragging/bgg.svg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
      }

      .ab-hero-inner-overlay {
        width: 100%;
        padding: 60px 20px;
      }

      .ab-hero-row-align {
        min-height: 60vh;
      }

      /* ========== IMAGE STYLING ========== */
      .ab-hero-image-box {
        width: 100%;
        max-width: 550px;
        aspect-ratio: 1 / 1;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        animation: ab-float-animation 4s ease-in-out infinite;
      }

      .ab-hero-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      /* ========== TEXT STYLING ========== */
      .ab-hero-text-wrap h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        animation: ab-fade-up 1s ease forwards;
      }

      .ab-hero-text-wrap p {
        font-size: 18px;
        line-height: 1.6;
        animation: ab-fade-up 1.3s ease forwards;
      }

      /* ========== ANIMATIONS ========== */
      @keyframes ab-float-animation {
        0% {
          transform: translateY(0px);
        }

        50% {
          transform: translateY(-10px);
        }

        100% {
          transform: translateY(0px);
        }
      }

      @keyframes ab-fade-up {
        0% {
          opacity: 0;
          transform: translateY(30px);
        }

        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* ========== MOBILE VERSION ========== */
      @media (max-width: 767px) {
        .ab-hero-main-wrap {
          background-image: none;
          background-color: #fff8f0;
        }

        .ab-hero-text-wrap h1,
        .ab-hero-text-wrap p {
          color: #264273;
          text-align: center;
        }
      }
    </style>

    <style>
      h3 {
        color: #13223b;
        font-weight: 700;
        margin-top: 30px;
      }

      .table-wrapper {
        background: #ffffff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
      }

      .table thead th {
        background: #13223b !important;
        color: #ffffff !important;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 16px;
        letter-spacing: 0.5px;
        vertical-align: middle;
        text-align: center;
        padding: 14px 10px;
      }

      .table tbody td {
        vertical-align: top;
        padding: 12px 12px;
        font-size: 18px;
        line-height: 1.6;
        color: #2b2b2b;
      }

      .table tbody tr:hover {
        background-color: #f0f4ff;
        transition: 0.2s ease-in-out;
      }

      .table-bordered > :not(caption) > * > * {
        border-color: #d8dee9;
      }

      .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #fafbfc;
      }

      .si-col {
        text-align: center;
        font-weight: 600;
        width: 70px;
        white-space: nowrap;
      }

      .name-col {
        font-weight: 600;
        color: #13223b;
        white-space: nowrap;
      }

      .position-col {
        font-weight: 600;
        color: #0d6efd;
        white-space: nowrap;
      }

      .designation-col {
        color: #444;
      }

      @media (max-width: 768px) {
        .table thead {
          font-size: 12px;
        }

        .table tbody td {
          font-size: 13px;
        }

        h3 {
          font-size: 18px;
        }
      }
    </style>

        <div class="container ab-hero-inner-overlay">
            <div class="row ab-hero-row-align align-items-center justify-content-center">
                <!-- Left Column -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                    <div class="ab-hero-image-box">
                        <img src="https://www.rgu.ac/mobile-assets/anti-ragging/headimg.png" alt="Square Image" />
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center text-center">
                    <div class="ab-hero-text-wrap text-center">
                        <h1 class="text-center" style="color: #264273">
                            Anti-Ragging <span style="color: #ff9a1e">Commitee</span>
                        </h1>
                        <p style="text-align: justify; font-size: 24px; color:#2b2b2b;">
                            As per UGC notification related to “Regulations on Curbing the
                            Menace of Ragging in Higher Educational Institutions, 2009”, the
                            Assam Royal Global University (RGU) constituted an Anti-Ragging
                            Committee,2024-25 and an Anti-Ragging Squad 2024-25, as given
                            below
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text-area" style="background-color: #fff8f0">
        <div class="container p-2">
            <section>
                <div class="container-fluid">
                    <div class="container-fluid" style="font-family: 'Times New Roman', Times, serif">
                        <!-- =================== ANTI RAGGING COMMITTEE =================== -->

                        <h3 class="mb-3">ANTI-RAGGING COMMITTEE: 2025-26</h3>

                        <div class="table-wrapper table-responsive mb-5">
                            <table class="table table-striped table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th>SI. No</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="si-col">1.</td>
                                        <td class="name-col">Prof. (Dr.) George AP</td>
                                        <td class="designation-col">
                                            Professor, Dean<br />Mob. No. 9496375685<br />e-mail:
                                            georgep@rgu.ac
                                        </td>
                                        <td class="position-col">Chairperson</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">2.</td>
                                        <td class="name-col">Dr. Kuntala Roy Choudhury</td>
                                        <td class="designation-col">
                                            Assistant Professor, RSLA<br />Mob. No. 9706613147<br />e-mail:
                                            kroychoudhury@rgu.ac
                                        </td>
                                        <td class="position-col">
                                            Member Secretary & Nodal Officer
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">3.</td>
                                        <td class="name-col">Sri Bubul Baishya, ACS</td>
                                        <td class="designation-col">
                                            Circle Officer, Dispur Revenue Circle<br />Mob. No.
                                            8638691168<br />e-mail: dc-kamrupm@nic.in
                                        </td>
                                        <td class="position-col">
                                            Member from Civil Administration
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">4.</td>
                                        <td class="name-col">Mr. Vikram Basumatary</td>
                                        <td class="designation-col">
                                            Officer In-Charge, Garchuk Police Station<br />Mob. No.
                                            9394090044<br />e-mail: cp-guw@assampolice.gov.in
                                        </td>
                                        <td class="position-col">
                                            Member from Police Administration
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">5.</td>
                                        <td class="name-col">Ms. Farhin Farhat</td>
                                        <td class="designation-col">
                                            Project Coordinator, Shishu Sarothi<br />Mob. No.
                                            8811811691<br />e-mail: farhinfarhat10@gmail.com
                                        </td>
                                        <td class="position-col">Member from NGO</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">6.</td>
                                        <td class="name-col">Dr. Rahul Chanda</td>
                                        <td class="designation-col">
                                            Senior Journalist and Bureau Chief G Plus<br />Mob. No.
                                            8486002316<br />e-mail: Rahul.chanda@g-plus.in
                                        </td>
                                        <td class="position-col">Member from Media</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">7.</td>
                                        <td class="name-col">Dr. D.N. Singh</td>
                                        <td class="designation-col">
                                            Registrar Academics, RGU<br />Mob. No. 9800004433<br />e-mail:
                                            registraracademics@rgu.ac
                                        </td>
                                        <td class="position-col">Member</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">8.</td>
                                        <td class="name-col">Prof. (Dr.) Hari Prasad Agarwal</td>
                                        <td class="designation-col">
                                            Dean, RSA, RSD, RSFT, RSFA<br />Mob. No. 9706006112<br />e-mail:
                                            hpagarwal@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">9.</td>
                                        <td class="name-col">
                                            Prof. (Dr.) Prithviraj Chakarborty
                                        </td>
                                        <td class="designation-col">
                                            Professor & Principal/HOD, RSP<br />Mob. No.
                                            8945903763<br />e-mail: pchakraborty@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">10.</td>
                                        <td class="name-col">Prof. (Dr.) Hemeswari Bhuyan</td>
                                        <td class="designation-col">
                                            Professor, RSN<br />Mob. No. 8638231994<br />e-mail:
                                            hbhuyan@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">11.</td>
                                        <td class="name-col">Dr. Arpee Saikia</td>
                                        <td class="designation-col">
                                            Associate Professor, RSB<br />Mob. No. 9706727218<br />e-mail:
                                            arpee.saikia@rgi.edu.in
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">12.</td>
                                        <td class="name-col">Dr. Madhusmita Koch</td>
                                        <td class="designation-col">
                                            Associate Professor, RSMAS<br />Mob. No. 8399985622<br />e-mail:
                                            mkoch@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">13.</td>
                                        <td class="name-col">Dr. Indrajit Dutta</td>
                                        <td class="designation-col">
                                            Associate Professor, RSTTM<br />Mob. No. 9863651421<br />e-mail:
                                            idutta@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">14.</td>
                                        <td class="name-col">Dr. Rani Das</td>
                                        <td class="designation-col">
                                            Assistant Professor, Social Work and Public Relation
                                            Officer
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">15.</td>
                                        <td class="name-col">Ms. Bidisha Goswami</td>
                                        <td class="designation-col">
                                            Assistant Professor, RSET<br />Mob. No. 9101062955<br />e-mail:
                                            bgoswami1@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">16.</td>
                                        <td class="name-col">Ar. Jagriti Pathak</td>
                                        <td class="designation-col">
                                            Assistant Professor, RSA<br />Mob. No. 9101182435<br />e-mail:
                                            jpathak1@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">17.</td>
                                        <td class="name-col">Dr. Rupesh Kumar</td>
                                        <td class="designation-col">
                                            Assistant Professor, MLT<br />Mob. No. 8638492924<br />e-mail:
                                            rkumar@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">18.</td>
                                        <td class="name-col">Dr. Naphisabeth Kharsati</td>
                                        <td class="designation-col">
                                            Assistant Professor, RSBAS<br />Mob. No. 9774915764<br />e-mail:
                                            nkharsati@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Faculty</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">19.</td>
                                        <td class="name-col">Mr. Mridul Phookan</td>
                                        <td class="designation-col">
                                            Chief Warden, RGU<br />Mob. No. 9957722115<br />e-mail:
                                            mphookan@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Admin</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">20.</td>
                                        <td class="name-col">Mr. Ratan Nath</td>
                                        <td class="designation-col">
                                            Chief Security & Vigilance Officer<br />Mob. No.
                                            9859161420<br />e-mail: rnath1@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Admin</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">21.</td>
                                        <td class="name-col">Ms. Moonmoon Ahmed</td>
                                        <td class="designation-col">
                                            Manager, Academic Section<br />Mob. No. 9864059775<br />e-mail:
                                            mmahmed@rgu.ac
                                        </td>
                                        <td class="position-col">Member from Admin</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">22.</td>
                                        <td class="name-col">Divyansh Sood</td>
                                        <td class="designation-col">
                                            BCA, 4th semester, RSIT<br />Mob. No. 7085710046<br />e-mail:
                                            divyanshsood6969@gmail.com
                                        </td>
                                        <td class="position-col">
                                            Member from Hostel Boarder (Boy's)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">23.</td>
                                        <td class="name-col">Adnin Begum</td>
                                        <td class="designation-col">
                                            B. Tech CE, 6th Sem<br />Mob. No. 8638810127<br />e-mail:
                                            adninbegum@gmail.com
                                        </td>
                                        <td class="position-col">
                                            Member from Hostel Boarder (Girl's)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">24.</td>
                                        <td class="name-col">Zubin Islam</td>
                                        <td class="designation-col">
                                            MBA, 3rd Semester, RSB<br />Mob. No. 9619121397<br />e-mail:
                                            zislam@gmail.com
                                        </td>
                                        <td class="position-col">Member from Sr. Students</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">25.</td>
                                        <td class="name-col">Sibani Pattnaik</td>
                                        <td class="designation-col">
                                            BA-LLB, 8th semester, RSLA<br />Mob. No. 7683944202<br />e-mail:
                                            sibanicps@gmail.com
                                        </td>
                                        <td class="position-col">Member from Sr. Students</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">26.</td>
                                        <td class="name-col">Mrs. Itishree Mahapatra</td>
                                        <td class="designation-col">
                                            M/O: Sibani Pattanaik (BA LLB)<br />Mob. No.
                                            948469333/9078906333<br />e-mail:
                                            mahapatraitishree1980@gmail.com
                                        </td>
                                        <td class="position-col">Member from Parents</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">27.</td>
                                        <td class="name-col">Mr. Abdul Zubber</td>
                                        <td class="designation-col">
                                            F/O-Shahil Ahmed (BTech CSE)<br />Mob. No. 9435401183<br />e-mail:
                                            zubberabdul@gmail.com
                                        </td>
                                        <td class="position-col">Member from Parents</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">28.</td>
                                        <td class="name-col">Ms. Pahee Baishya</td>
                                        <td class="designation-col">
                                            BA Political Science, 1st semester, RSHSS<br />Mob. No.
                                            9435086474
                                        </td>
                                        <td class="position-col">Member from Fresher</td>
                                    </tr>

                                    <tr>
                                        <td class="si-col">29.</td>
                                        <td class="name-col">Mr. Asheek Basumatary</td>
                                        <td class="designation-col">
                                            B.Sc. Bio-Technology, 1st semester, RSBSC<br />Mob. No.
                                            8638764563
                                        </td>
                                        <td class="position-col">Member from Fresher</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- =================== ANTI RAGGING SQUAD =================== -->

                        <h3 class="mb-3">
                            ANTI-RAGGING SQUAD: 2025-26 (LIST NOT IN ORDER)
                        </h3>

                        <div class="table-wrapper table-responsive">
                            <table class="table table-striped table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th>SL. NO.</th>
                                        <th>NAME OF THE MEMBER</th>
                                        <th>DESIGNATION</th>
                                        <th>DEPARTMENT</th>
                                        <th>MOBILE NO.</th>
                                        <th>E-MAIL ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="si-col">1.</td>
                                        <td class="name-col">Ms. Rumi Talukdar</td>
                                        <td>Associate Professor</td>
                                        <td>Nursing</td>
                                        <td>9864817225</td>
                                        <td>rtalukdar@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">2.</td>
                                        <td class="name-col">Dr. Syed Sajidul Islam</td>
                                        <td>Associate Professor</td>
                                        <td>TTM</td>
                                        <td>9435702586</td>
                                        <td>ssislam@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">3.</td>
                                        <td class="name-col">Dr. Bapan Kalita</td>
                                        <td>Associate Professor</td>
                                        <td>Mathematics</td>
                                        <td>9854152518</td>
                                        <td>bapan.kalita@rgi.edu.in</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">4.</td>
                                        <td class="name-col">Dr. Biplob Borah</td>
                                        <td>Assistant Professor</td>
                                        <td>Chemistry</td>
                                        <td>7002730472</td>
                                        <td>bborah1@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">5.</td>
                                        <td class="name-col">Dr. Bornali Chetia</td>
                                        <td>Assistant Professor</td>
                                        <td>Physics</td>
                                        <td>8638067347</td>
                                        <td>dchetia@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">6.</td>
                                        <td class="name-col">Dr. Darshana Bhagowati</td>
                                        <td>Assistant Professor</td>
                                        <td>Management</td>
                                        <td>8420707010</td>
                                        <td>dbhagowati@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">7.</td>
                                        <td class="name-col">Dr. Shraddha Basu</td>
                                        <td>Assistant Professor</td>
                                        <td>Psychology</td>
                                        <td>9401539238</td>
                                        <td>sbasu@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">8.</td>
                                        <td class="name-col">Dr. Nilanjana Purkayastha</td>
                                        <td>Assistant Professor</td>
                                        <td>Library Science</td>
                                        <td>7002145936</td>
                                        <td>npurkayastha@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">9.</td>
                                        <td class="name-col">Ms. Baishali Pathak</td>
                                        <td>Assistant Professor</td>
                                        <td>Commerce</td>
                                        <td>9085325944</td>
                                        <td>bpathak1@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">10.</td>
                                        <td class="name-col">Dr. Champa Devi</td>
                                        <td>Assistant Professor</td>
                                        <td>Communication & Media</td>
                                        <td>9436896628</td>
                                        <td>cdevi@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">11.</td>
                                        <td class="name-col">Mr. Dijendra Das</td>
                                        <td>Teaching Assistant</td>
                                        <td>Animation & Visual Effects</td>
                                        <td>9957406256</td>
                                        <td>ddas4@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">12.</td>
                                        <td class="name-col">Ms. Sukriti Baruah</td>
                                        <td>Assistant Professor</td>
                                        <td>Design</td>
                                        <td>9665524257</td>
                                        <td>sbaruah@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">13.</td>
                                        <td class="name-col">Dr. Rajesh Deb</td>
                                        <td>Assistant Professor</td>
                                        <td>Civil Engineering</td>
                                        <td>8753016393</td>
                                        <td>rdeb@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">14.</td>
                                        <td class="name-col">Dr. Sanghamitra Hazarika</td>
                                        <td>Assistant Professor</td>
                                        <td>Economics</td>
                                        <td>7002390144</td>
                                        <td>shazarika1@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">15.</td>
                                        <td class="name-col">Ms. KM Sudha</td>
                                        <td>Assistant Professor</td>
                                        <td>History</td>
                                        <td>8853651505</td>
                                        <td>kmsudha@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">16.</td>
                                        <td class="name-col">Mr. Abhinav Chaliha</td>
                                        <td>Assistant Professor</td>
                                        <td>Political Science</td>
                                        <td>9873068634</td>
                                        <td>achaliha@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">17.</td>
                                        <td class="name-col">Dr. Monika Kumari</td>
                                        <td>Assistant Professor</td>
                                        <td>Public Administration</td>
                                        <td>7042228930</td>
                                        <td>mkumari@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">18.</td>
                                        <td class="name-col">Ms. Adishree Borgohain</td>
                                        <td>Assistant Professor</td>
                                        <td>Sociology</td>
                                        <td>8377885874</td>
                                        <td>aborgohain@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">19.</td>
                                        <td class="name-col">Ms. Joyeeta Bhattacharjee</td>
                                        <td>Assistant Professor</td>
                                        <td>Social Work</td>
                                        <td>7099073361</td>
                                        <td>jbbhattacharjee@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">20.</td>
                                        <td class="name-col">Ms. Sangeeta Biswas</td>
                                        <td>Assistant Professor</td>
                                        <td>Zoology</td>
                                        <td>9612206784</td>
                                        <td>sbiwas1@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">21.</td>
                                        <td class="name-col">Dr. Upashna Chettri</td>
                                        <td>Assistant Professor</td>
                                        <td>Botany</td>
                                        <td>7797875244</td>
                                        <td>uchettri@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">22.</td>
                                        <td class="name-col">Dr. Demsai Reang</td>
                                        <td>Assistant Professor</td>
                                        <td>Forestry</td>
                                        <td>8638026696</td>
                                        <td>dreang@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">23.</td>
                                        <td class="name-col">Ms. Neelakshi Sharma</td>
                                        <td>Assistant Professor</td>
                                        <td>Pharmacy</td>
                                        <td>9613221566</td>
                                        <td>nsharma4@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">24.</td>
                                        <td class="name-col">Mr. Spandan Kumar Barthakur</td>
                                        <td>Assistant Professor</td>
                                        <td>RSIT</td>
                                        <td>7002839151</td>
                                        <td>skborthakur@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">25.</td>
                                        <td class="name-col">Dr. Saswati Bordoloi</td>
                                        <td>Assistant Professor</td>
                                        <td>IKS</td>
                                        <td>8473901735</td>
                                        <td>sbordoloi@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">26.</td>
                                        <td class="name-col">Ar. Barsha Kunda</td>
                                        <td>Assistant Professor</td>
                                        <td>Architecture</td>
                                        <td>9706721765</td>
                                        <td>bkunda@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">27.</td>
                                        <td class="name-col">Ms. Dipanjali Das</td>
                                        <td>Assistant Professor</td>
                                        <td>Food Technology</td>
                                        <td>7016576349</td>
                                        <td>ddas@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">28.</td>
                                        <td class="name-col">Dr. Taranga Jyoti Baruah</td>
                                        <td>Assistant Professor</td>
                                        <td>Microbiology</td>
                                        <td>7308413200</td>
                                        <td>tjbaruah@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">29.</td>
                                        <td class="name-col">Ms. Anudeep Kaur</td>
                                        <td>Assistant Professor</td>
                                        <td>Radiography & AIT</td>
                                        <td>9654861603</td>
                                        <td>akaur@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">30.</td>
                                        <td class="name-col">Ms. Zomuanpuii</td>
                                        <td>Assistant Professor</td>
                                        <td>OTT</td>
                                        <td>8974769870</td>
                                        <td>zomuanpui.i@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">31.</td>
                                        <td class="name-col">Dr. Debjani Das</td>
                                        <td>Assistant Professor</td>
                                        <td>Nutrition & Dietetics</td>
                                        <td>6909436881</td>
                                        <td>ddas5@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">32.</td>
                                        <td class="name-col">Ms. Lipika Kalita</td>
                                        <td>Assistant Professor</td>
                                        <td>Optometry</td>
                                        <td>7002435904</td>
                                        <td>lkalita1@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">33.</td>
                                        <td class="name-col">Dr. Sumanto Dutta Choudhury</td>
                                        <td>Assistant Professor</td>
                                        <td>Fine Arts</td>
                                        <td>9864370028</td>
                                        <td>sdchoudhury@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">34.</td>
                                        <td class="name-col">Ms. Momata Tamuly</td>
                                        <td>Warden</td>
                                        <td>Harsha House</td>
                                        <td>7002144451</td>
                                        <td>mtamuly@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">35.</td>
                                        <td class="name-col">Mr. Kamal Narayan Das</td>
                                        <td>Warden</td>
                                        <td>Aditya House</td>
                                        <td>9854051729</td>
                                        <td>kndas@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">36.</td>
                                        <td class="name-col">Mr. Shamim A Goney</td>
                                        <td>Deputy Registrar</td>
                                        <td>Administration</td>
                                        <td>9864026097</td>
                                        <td>sagoney@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">37.</td>
                                        <td class="name-col">Mr. Manoj Sarma</td>
                                        <td>Sr. Manager</td>
                                        <td>Administration</td>
                                        <td>8811003111</td>
                                        <td>msarma@rgu.ac</td>
                                    </tr>
                                    <tr>
                                        <td class="si-col">38.</td>
                                        <td class="name-col">Mr. Bijoy Kalita</td>
                                        <td>Manager</td>
                                        <td>IT Section</td>
                                        <td>8811026092</td>
                                        <td>bskalita@rgu.ac</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
