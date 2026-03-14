@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <!-- floating mob button  -->
            <div>
                <a href="https://admissions.rgu.ac"
                    style="
                                                                                                        position: fixed;
                                                                                                        bottom: 25px;
                                                                                                        right: 75px;
                                                                                                        background-color: #ef991f;
                                                                                                        color: #fff;
                                                                                                        padding: 12px 20px;
                                                                                                        font-size: 16px;
                                                                                                        font-weight: bold;
                                                                                                        text-decoration: none;
                                                                                                        border-radius: 20px;
                                                                                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                        z-index: 1000;
                                                                                                        overflow: hidden;
                                                                                                        animation: pulse 2s infinite;
                                                                                                        ">
                    <span
                        style="
                                                                                                        position: absolute;
                                                                                                        top: 0;
                                                                                                        left: -75%;
                                                                                                        width: 50%;
                                                                                                        height: 100%;
                                                                                                        background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                        transform: skewX(-25deg);
                                                                                                        animation: shine 2s infinite;
                                                                                                        "></span>
                    Admission Open - Apply Now
                </a>
                <style>
                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }

                        50% {
                            transform: scale(1.05);
                            box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                        }

                        100% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }
                    }

                    @keyframes shine {
                        0% {
                            left: -75%;
                        }

                        100% {
                            left: 125%;
                        }
                    }
                </style>
            </div>
            <!-- floating button  -->
            <!-- till about dept  -->
            <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px; position: relative;">

                {{-- <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                </h1> --}}

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
                    Physical Education and Sports (RSPES)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="home-banner/bpes.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                With the growing focus on sports such as cricket, football, badminton, and kabaddi, where
                                national teams are sponsored by corporates, new opportunities have emerged to view sports as
                                a professional career option. This shift has encouraged many individuals to pursue careers
                                in these fields. To support and guide aspiring athletes, appropriate counselling is
                                essential, which can be effectively provided through well-structured programs.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Royal School of Physical Education (RSPES), a constituent school of The Assam Royal Global University will be offering BPES (H) from academic year 2026, with the objective of nurturing skilled professionals in the fields of sports, fitness, and wellness. It has been established with a vision to promote excellence in physical education and sports sciences in North-East. The programme is designed to combine academic rigor with intensive practical training.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Adopting an interdisciplinary approach, the course integrates sports science, health education, psychology, physiology, biomechanics, and management to provide students with a strong scientific and professional foundation. Special focus areas include Sports Coaching and Training, Sports Psychology, Health and Fitness Management, Sports Management and Administration, and Yoga Education and Wellness.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Emphasizing experiential and practice-oriented learning, the programme incorporates practical training sessions, fieldwork, internships, coaching camps, fitness assessments, performance analysis, and community outreach initiatives. With access to well-equipped sports facilities, gymnasiums, and indoor and outdoor infrastructure, students gain hands-on experience that enhances both technical competence and leadership abilities.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Guided by experienced faculty members and sports professionals, the course aims to prepare graduates for rewarding careers as Physical Education Teachers, Coaches, Fitness and Wellness Consultants, Sports Administrators, Analysts, Researchers, and Entrepreneurs. Through its dedicated Placement and Training Cell, RSPE ensures strong industry linkage and career support, making the programme a gateway to meaningful employment and professional growth in the dynamic field of physical education and sports sciences.
                            </p>

                        </div>
                    </div>
                </div>


                {{-- <div class="pt-3">

                    <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                        <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img src="mobile-assets/department-all/dept-physics/vision-mission-mob.png" alt="">
                </div> --}}

            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container pb-5">
                <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size: 16px;">Bachelor of Physical Education and Sports (BPES)</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programme-rspes-bpes" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">4 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programme-rspes-bpes">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

                {{-- <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size: 16px; padding-right: 10px; line-height: 1.3;">B.Sc. - Physics</span> |
                        <span
                            style="font-size: 13px; padding-left: 16px; font-weight: 300px !important; line-height: 1.3;">Honours
                            / Honours with Research
                        </span>

                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-b-sc-physics" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">4 years as per
                                NEP</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-b-sc-physics">View Details</a>
                            </span>
                        </div>
                    </a>
                </div> --}}

            </div>
            <!-- courses offered  -->

            <!-- syllabus  -->
            {{-- <div class="container">
                <div>
                    <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                        style="color: #27467A; font-weight: 900; font-size: 25px; letter-spacing: 0.5px;">
                        Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
                    </h2>

                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion para1" id="mobileAccordionCourses"
                                    style="border-radius: 12px; overflow: hidden;">

                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="mobileHeadingOne">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapseOne"
                                                aria-expanded="false" aria-controls="mobileCollapseOne">
                                                <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                                            </button>
                                        </h2>
                                        <div id="mobileCollapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="mobileHeadingOne" data-bs-parent="#mobileAccordionCourses">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <div class="row"
                                                    style="display: flex; flex-direction: column; gap: 12px;">

                                                    <a href="mobile-assets/department-all/dept-physics/updated-syllabus/structure-ug.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Structure of Syllabus - Physics
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-physics/updated-syllabus/detailed-syllabus-ug.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus - Physics
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="mobileHeadingTwo">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#mobileCollapseTwo" aria-expanded="false"
                                                aria-controls="mobileCollapseTwo">
                                                <i class="fa fa-university me-2"></i> Post Graduate
                                            </button>
                                        </h2>
                                        <div id="mobileCollapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="mobileHeadingTwo" data-bs-parent="#mobileAccordionCourses">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <div class="row"
                                                    style="display: flex; flex-direction: column; gap: 12px;">
                                                    <a href="mobile-assets/department-all/dept-physics/updated-syllabus/structure-pg.pdf"
                                                        target="_blank"
                                                        style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                        <i class="fa fa-file-text px-2"></i> Structure of Syllabus -
                                                        Physics
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-physics/updated-syllabus/detailed-syllabus-pg.pdf"
                                                        target="_blank"
                                                        style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus - Physics
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="mobileHeadingThree">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#mobileCollapseThree" aria-expanded="false"
                                                aria-controls="mobileCollapseThree">
                                                <i class="fa fa-book me-2"></i> Doctoral Programme
                                            </button>
                                        </h2>
                                        <div id="mobileCollapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="mobileHeadingThree" data-bs-parent="#mobileAccordionCourses">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <a href="doctoral-programme-mobile" class="para1" target="_blank"
                                                    style="color: #27467A; font-weight: 600; text-decoration: none;">
                                                    <i class="fa fa-external-link me-2"></i> Click to View...
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
            <!-- syllabus  -->


            <!-- Mobile-Friendly Board of Studies & DRC -->
            {{-- <div id="bos-mobile" class="container pb-5">


                <div style="margin-bottom:20px;">
                    <button id="mobAccBtn1" aria-expanded="false" class="para1"
                        style="width:100%; text-align:left; padding:14px 18px; border:0;
          background:linear-gradient(135deg,#24477f,#1a365d);
          color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-users me-2"></i> The Board of Studies
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                    </button>

                    <div id="mobAccPanel1"
                        style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                        <div class="table-responsive">
                            <table class="table table-bordered text-center align-middle mb-5"
                                style="
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
                    <button id="mobAccBtn2" aria-expanded="false" class="para1"
                        style="width:100%; text-align:left; padding:14px 18px; border:0;
          background:linear-gradient(135deg,#24477f,#1a365d);
          color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                    </button>

                    <div id="mobAccPanel2"
                        style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

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
            </div>

            <script>
                const mobAccPairs = [{
                        btn: 'mobAccBtn1',
                        panel: 'mobAccPanel1'
                    },
                    {
                        btn: 'mobAccBtn2',
                        panel: 'mobAccPanel2'
                    }
                ];

                function closeAllMob() {
                    mobAccPairs.forEach(p => {
                        const b = document.getElementById(p.btn);
                        const panel = document.getElementById(p.panel);
                        if (panel) panel.style.display = 'none';
                        if (b) {
                            b.setAttribute('aria-expanded', 'false');
                            const sp = b.querySelector('span');
                            if (sp) sp.textContent = '＋';
                        }
                    });
                }

                mobAccPairs.forEach(p => {
                    const b = document.getElementById(p.btn);
                    const panel = document.getElementById(p.panel);
                    if (!b || !panel) return;

                    b.addEventListener('click', function() {
                        const isOpen = this.getAttribute('aria-expanded') === 'true';
                        if (isOpen) {
                            panel.style.display = 'none';
                            this.setAttribute('aria-expanded', 'false');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '＋';
                        } else {
                            closeAllMob();
                            panel.style.display = 'block';
                            this.setAttribute('aria-expanded', 'true');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '−';
                        }
                    });
                });

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') closeAllMob();
                });
            </script> --}}
            <!-- Mobile-Friendly Board of Studies & DRC -->

        </div>

        <div class="website">

            <section>
                <!--Start Header-->
                @include('frontend/components/aheader')
                <!--End Header-->
                <!-- floating button  -->
                <div>
                    <a href="https://admissions.rgu.ac/"
                        style="
                                                                                                                    position: fixed;
                                                                                                                    bottom: 35px;
                                                                                                                    right: 50px;
                                                                                                                    background-color: #ef991f;
                                                                                                                    color: #fff;
                                                                                                                    padding: 12px 20px;
                                                                                                                    font-size: 18px;
                                                                                                                    font-weight: bold;
                                                                                                                    text-decoration: none;
                                                                                                                    border-radius: 20px;
                                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                    z-index: 1000;
                                                                                                                    overflow: hidden;
                                                                                                                    animation: pulse 2s infinite;
                                                                                                                    ">
                        <span
                            style="
                                                                                                                    position: absolute;
                                                                                                                    top: 0;
                                                                                                                    left: -75%;
                                                                                                                    width: 50%;
                                                                                                                    height: 100%;
                                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                    transform: skewX(-25deg);
                                                                                                                    animation: shine 2s infinite;
                                                                                                                    "></span>
                        Admission Open - Apply Now
                    </a>
                    <style>
                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }

                            50% {
                                transform: scale(1.05);
                                box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                            }

                            100% {
                                transform: scale(1);
                                box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                            }
                        }

                        @keyframes shine {
                            0% {
                                left: -75%;
                            }

                            100% {
                                left: 125%;
                            }
                        }
                    </style>
                </div>


                <section id="about">
                    <section style="background-color: #FFF8F0;">
                        <div class="p-5">
                            {{-- <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Physical Education and Sports</span>
                            </h1> --}}

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                                Physical Education and Sports (RSPES)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async"
                                                src="home-banner/bpes.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The Department of Physics gained momentum with full-fledged UG and PG courses in
                                        2017. The
                                        department offers Ph.D. programs with a total of 8 full-time faculties. The
                                        department is graced
                                        with experienced professors and one advisor. All the faculty members are Ph.D.
                                        holders with many
                                        research papers in reputed journals, and a dedicated laboratory in-charge to help
                                        the students
                                        individually during the laboratory period. Fully dedicated faculties from 9:00 am to
                                        5:15 pm and all
                                        the laboratories are well equipped with all the necessary instruments with four
                                        laboratories,
                                        including one dark room and one research lab with remedial and guidance classes for
                                        different
                                        competitive examinations from time to time.
                                    </p>

                                </div>

                            </div>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Royal School of Physical Education (RSPES), a constituent school of The Assam Royal Global University will be offering BPES (H) from academic year 2026, with the objective of nurturing skilled professionals in the fields of sports, fitness, and wellness. It has been established with a vision to promote excellence in physical education and sports sciences in North-East. The programme is designed to combine academic rigor with intensive practical training.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Adopting an interdisciplinary approach, the course integrates sports science, health education, psychology, physiology, biomechanics, and management to provide students with a strong scientific and professional foundation. Special focus areas include Sports Coaching and Training, Sports Psychology, Health and Fitness Management, Sports Management and Administration, and Yoga Education and Wellness.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Emphasizing experiential and practice-oriented learning, the programme incorporates practical training sessions, fieldwork, internships, coaching camps, fitness assessments, performance analysis, and community outreach initiatives. With access to well-equipped sports facilities, gymnasiums, and indoor and outdoor infrastructure, students gain hands-on experience that enhances both technical competence and leadership abilities.
                            </p>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                Guided by experienced faculty members and sports professionals, the course aims to prepare graduates for rewarding careers as Physical Education Teachers, Coaches, Fitness and Wellness Consultants, Sports Administrators, Analysts, Researchers, and Entrepreneurs. Through its dedicated Placement and Training Cell, RSPE ensures strong industry linkage and career support, making the programme a gateway to meaningful employment and professional growth in the dynamic field of physical education and sports sciences.
                            </p>
                        </div>


                        {{-- <div style="background-color: #fff;">
                            <div class="p-5">
                                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the
                                        Department</span>
                                </h1>

                                <img class="w-100" src="mobile-assets/department-all/dept-physics/vision-mission.png"
                                    alt="">
                            </div>
                        </div> --}}

                    </section>
                </section>

                <section id="course">

                    <div class="container pb-5">
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                            style="color: #27467A; font-weight: 900; font-size: 35px;">
                            Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px;">Bachelor of Physical Education and Sports (BPES)</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="/programme-rspes-bpes" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration:
                                        4 years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="/programme-rspes-bpes">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>

                </section>

            </section>

        </div>

    </div>
@endsection
