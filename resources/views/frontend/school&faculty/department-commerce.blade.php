@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <!-- floating mob button  -->
            <div>
                <a href="https://admissions.rgu.ac" style="
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
                    <span style="
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
            <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px;">

                <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Commerce</span>
                </h1>

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
                    Commerce (RSC)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="mobile-assets/department-all/dept-commerce/head-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Royal School of Commerce (RSC) under The Royal Global University since its inception in
                                2011
                                (erstwhile Royal Group of Institutions under Gauhati University) has been a leader in
                                providing higher
                                education in the field of Commerce. It offers Undergraduate, Postgraduate and Ph.D.
                                programmes. In order
                                to facilitate the students to prepare for CA/CS/ICWA, the school also runs morning batches.
                                Over these
                                years, RSC has produced many distinguished professionals and entrepreneurs. RSC has eminent
                                faculty who
                                have substantial academic and professional experience.
                            </p>

                        </div>
                    </div>
                </div>

                <div style="background-color: #fff;">
                    <div class="container p-4">
                        <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                            Apart from providing B.Com. with specialisation in Accountancy and Management the School has
                            also tied up
                            with institutes of National and International repute like ISDC and ICA to run specialised
                            courses like
                            B.Com. (Finance). M.Com. with specialization in Accounting, Finance and Management and Ph.D.
                            Programme
                            also come under the umbrella of RSC. All the programmes are embedded with internship
                            opportunities and
                            placement assistance. The school follows interdisciplinary approach and practices, which equip
                            the
                            students for successful entrepreneurial journey and exciting careers both in India and abroad.
                        </p>
                    </div>
                </div>

                <div class="pt-3">

                    <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                        <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img src="mobile-assets/department-all/dept-commerce/vision-mission-mob.png" alt="">
                </div>

                <div class="p-4">
                    <img class="w-100" src="mobile-assets/department-all/dept-commerce/mobile-btm.png" alt="">
                </div>

            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container">
                <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size:18px;">M.Com</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-MCom" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">2 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-MCom">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size:18px; padding-right: 20px;">B.Com. - Finance with ICA</span> | <span
                            style="font-size:16px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours
                            with
                            Research</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-bcom-finance-with-ica" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-bcom-finance-with-ica">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size:18px; padding-right: 20px;">B.Com. (Morning Shift)</span> | <span
                            style="font-size:16px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours
                            with
                            Research</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-bcom-morning-shift" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-bcom-morning-shift">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size:18px; padding-right: 20px;">B.Com. (Day Shift)</span> | <span
                            style="font-size:16px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours
                            with
                            Research</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-bcom" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-bcom">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
            <!-- courses offered  -->

            <!-- syllabus  -->
            <div class="container">
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

                                    <!-- UG -->
                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/course-structure-rsc.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- B.Com
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/course-structure_ug-pg-.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Structure of Syllabus -- B.A
                                                        JMC
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-acca-detailed-syllabus.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Com ACCA
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-cma-detailed-syllabus.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Com CMA
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-detailed-syllabus.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Com
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-finance-detailed-syllabus.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- B.Com
                                                        Finance
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- PG -->
                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-university me-2"></i> Post Graduate
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/m-com-detailed-syllabus.pdf"
                                                        target="_blank"
                                                        style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- M.Com
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/ma-j&m.pdf"
                                                        target="_blank"
                                                        style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- MA J&M
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Doctoral -->
                                    <div class="accordion-item"
                                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed"
                                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-book me-2"></i> Doctoral Programme
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body"
                                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                <a href="phd" class="para1" target="_blank"
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
            </div>
            <!-- syllabus  -->

            <hr>

            <!-- events and highlights  -->
            <div class="container pb-4">

                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-lg-12">
                        <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900; font-size: 28px;">
                            Events
                        </h2>

                        <div style="max-width: 100%; position: relative;">
                            <div style="border: 1px solid #ccc;">

                                <div id="mobileEventScrollContainer"
                                    style="height: 450px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                                    <table class="table table-borderless mb-0" style="font-size: 16px; width: 100%;">
                                        <tbody class="para1" id="mobileEventScrollContent"
                                            style="background-color: #f9f9f9; ">

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            06-03-2025 | An invited talk by Dr. Pulak Kumar Ghosh.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            28-02-2025 | An invited talk by Prof. S. Srinath.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            11-11-2024 | An invited talk by Dr. Sudhir K. Pandey.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            27-09-2024 | An invited talk by Prof. Rajesh Kumar.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            07-09-2024 | An invited talk by Prof. A. Taraphder.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            29-04-2024 | An invited talk by Prof. P. C. Sahu.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            01-04-2024 | An invited talk by Prof. Sudhakar Yarlagadda.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            04-01-2024 | An invited talk by Prof. Bikas K. Chakrabarti.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            29-01-2020 | An invited talk by Prof. Pratip Chakraborty.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            13-03-2020 | Interactive session with Ms. Priyanka Das
                                                            Rajkakati.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            22-04-2019 | An invited talk by Prof. Umesh Waghmare.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            21-03-2019 | An invited talk by Dr. Shyama Pujari.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            12-11-2018 | An invited talk by Prof. S. N. Kaul.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            23-03-2018 | An invited talk by Prof. A. K. Raychaudhuri.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A;">
                                                            08-03-2018 | An invited talk by Prof. Anil Kumar.
                                                        </div>
                                                        <a href="#"
                                                            style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                            More
                                                            ...</a>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>

                            </div>

                            <div style="text-align: center; margin-top: 15px;">
                                <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
                    background: linear-gradient(135deg, #243B95, #151B5B);
                    color: #fff; font-weight: 600; font-size: 16px;
                    border-radius: 25px; text-decoration: none;
                    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                    transition: all 0.3s ease-in-out;">
                                    View All
                                </a>
                            </div>


                        </div>

                        <script>
                            const mobileEventScrollContainer = document.getElementById('mobileEventScrollContainer');
                            const mobileEventScrollContent = document.getElementById('mobileEventScrollContent');

                            // Duplicate content for infinite scroll (mobile)
                            mobileEventScrollContent.innerHTML += mobileEventScrollContent.innerHTML;

                            let mobileEventScrollPos = 0;
                            const mobileEventScrollSpeed = 0.2;

                            function mobileEventScrollStep() {
                                mobileEventScrollPos += mobileEventScrollSpeed;
                                if (mobileEventScrollPos >= mobileEventScrollContent.scrollHeight / 2) {
                                    mobileEventScrollPos = 0;
                                }
                                mobileEventScrollContainer.scrollTop = mobileEventScrollPos;
                                requestAnimationFrame(mobileEventScrollStep);
                            }

                            mobileEventScrollStep();
                        </script>

                    </div>
                </div>


            </div>
            <!-- events and highlights  -->

            <!-- Mobile-Friendly Board of Studies & DRC -->
            <div id="bos-mobile" class="container pb-5">

                <!-- Activites -->
                <div style="margin-bottom:20px;">
                    <button id="mobAccBtn3" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
              background:linear-gradient(135deg,#24477f,#1a365d);
              color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-calendar me-2"></i> Activities
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                    </button>

                    <div id="mobAccPanel3"
                        style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event Title</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>

                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Documentary Viewing – Revisiting The Life And Journey Of The Father Of Our
                                            Nation, Mahatma
                                            Gandhi</td>
                                        <td>01/10/2024</td>
                                        <td>
                                            On 1st October 2024, the Student Forum of Royal School of Commerce, The Assam
                                            Royal Global
                                            University, organized a documentary viewing titled “Revisiting the Life and
                                            Journey of the Father
                                            of Our Nation, Mahatma Gandhi.” This live viewing aimed to honour Gandhi’s
                                            legacy and educate
                                            students on his significant role in India’s freedom struggle, and his philosophy
                                            of non-violence
                                            and truth. The documentary explored Gandhi’s early life, education, return to
                                            India, his
                                            principles of Ahimsa (non-violence), and the lasting impact of his teachings. It
                                            featured
                                            historical footage, interviews, and dramatizations, allowing students to connect
                                            deeply with his
                                            life and struggles.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Internal Faculty Development Programme – “The New Normal Of Education:
                                            Depression, Anxiety, And
                                            Stress And Academic Performance Of Tertiary Students”</td>
                                        <td>15/10/2024</td>
                                        <td>
                                            On 15th October 2024, the Royal School of Commerce organized an Internal Faculty
                                            Development
                                            Programme on the topic “The New Normal of Education: Depression, Anxiety, and
                                            Stress and Academic
                                            Performance of Tertiary Students.” Dr. Prince C.P., Associate Professor from the
                                            Department of
                                            Psychology, Royal School of Behavioural and Allied Sciences, was the keynote
                                            speaker. He shared
                                            insights into how mental health issues—such as depression, anxiety, and
                                            stress—affect the academic
                                            performance of tertiary students in a post-pandemic educational landscape. The
                                            session emphasized
                                            mental well-being as critical to academic success and discussed effective
                                            teaching strategies to
                                            support students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>One-Day Student International Conference On "Innovating For A Circular Future:
                                            Strategies,
                                            Solutions And Sustainability"</td>
                                        <td>18/10/2024</td>
                                        <td>
                                            Royal School of Commerce organized a one-day Student International Conference on
                                            "Innovating for a
                                            Circular Future: Strategies, Solutions and Sustainability" to highlight the
                                            shift from traditional
                                            linear economic models to circular ones, with innovation as a key driver. The
                                            conference helped
                                            students explore strategies, solutions, and sustainable practices essential for
                                            fostering a
                                            circular economy. Multiple sub-themes ensured a comprehensive understanding of
                                            the topic. The
                                            event welcomed UG, PG, and research students from diverse disciplines to present
                                            their work. Dr.
                                            Anuj Kumar, Head of Research, Rushford Business School, Switzerland, delivered
                                            the keynote, and
                                            Mrs. Ranjana Bhajanka, Director, FINER, was the Guest of Honour. They were
                                            joined by Prof. (Dr.)
                                            George A.P., Dean, Royal School of Business and Commerce; Prof. (Dr.) Saket
                                            Jeswani, Dean,
                                            Consultancy, Patent, IPR and MDP; and Dr. Sudip Chakraborty, Deputy Dean, Royal
                                            School of
                                            Commerce.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Visit to the Directorate of Handloom and Handicrafts, Sikkim – Educational
                                            Excursion</td>
                                        <td>21/10/2024</td>
                                        <td>
                                            On 21st October 2024, students from the M.Com 3rd Semester of Royal School of
                                            Commerce visited the
                                            Directorate of Handloom and Handicrafts in Sikkim as part of their educational
                                            excursion. They
                                            observed the intricate process of weaving traditional handicrafts and gained
                                            firsthand knowledge
                                            of the skill and dedication involved. The visit also included discussions on the
                                            business aspects
                                            of the handloom sector, including its economic impact, market potential, and
                                            sustainable
                                            practices. This excursion provided students with both cultural appreciation and
                                            practical insights
                                            into the commercial dynamics of the handloom industry in Sikkim.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Special Talk Session Featuring Prof. Debabrata Mitra, Vice Chancellor of Dakshin
                                            Dinajpur
                                            University</td>
                                        <td>24/10/2024</td>
                                        <td>
                                            On October 24, 2024, a special talk session was held featuring Prof. Debabrata
                                            Mitra, Vice
                                            Chancellor of Dakshin Dinajpur University, West Bengal. Attended by faculty and
                                            M.Com 1st semester
                                            students of the Royal School of Commerce, the session focused on the
                                            intersection of teaching and
                                            administration. Prof. Mitra discussed the need for educators to balance
                                            administrative and
                                            academic responsibilities, emphasizing time management and work-life balance. He
                                            also offered
                                            detailed guidance on preparing for NAAC peer team visits, drawing from his
                                            experience as an
                                            evaluation team member. The interactive session encouraged students to think
                                            about future
                                            leadership roles and develop essential presentation skills. The session
                                            concluded with a strong
                                            focus on NAAC readiness, equipping attendees with actionable strategies for
                                            institutional
                                            evaluations.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Special Talk: "Balancing the Books: Managing Stress for Better Performance" by
                                            Prof. Debabrata
                                            Mitra</td>
                                        <td>25/10/2024</td>
                                        <td>
                                            On October 25, 2024, the Royal School of Commerce hosted a special talk titled
                                            "Balancing the
                                            Books: Managing Stress for Better Performance," led by Prof. Debabrata Mitra.
                                            Aimed at helping
                                            students cope with academic stress, the session featured interactive discussions
                                            where students
                                            shared their stress triggers. Prof. Mitra addressed common issues such as time
                                            constraints and
                                            pressure, offering practical strategies for effective time management and
                                            lifestyle improvement.
                                            He advocated for balanced routines including sleep, diet, and exercise. The
                                            relatable nature of
                                            the discussion and Prof. Mitra's actionable advice left a positive impact, with
                                            students
                                            expressing gratitude. The session concluded with an appreciation from the Head
                                            of Department,
                                            reinforcing a sense of support and community among participants.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Scholarly Works in Commerce</td>
                                        <td>28/10/2024</td>
                                        <td>
                                            Royal School of Commerce held an exhibition showcasing the scholarly works of
                                            its faculty and
                                            students on 28th October 2024. The event served as a platform for sharing
                                            academic research and
                                            innovative projects, encouraging knowledge exchange and scholarly excellence
                                            within the
                                            institution.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Career Counselling Session at Kendriya Vidyalaya, Tinsukia</td>
                                        <td>29/10/2024</td>
                                        <td>
                                            Mr. S. Goenka from Royal School of Commerce, Royal Global University, conducted
                                            a career
                                            counselling session at Kendriya Vidyalaya, Tinsukia on 29th October, 2024. The
                                            session aimed to
                                            guide students in choosing suitable career paths based on their interests and
                                            academic strengths.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Career Counselling Session at Gitanjali Senior Secondary School, Nagaon</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            Dr. Rajdeep Nag from Royal School of Commerce, Royal Global University,
                                            conducted a career
                                            counselling session at Gitanjali Senior Secondary School, Nagaon on 4th
                                            November, 2024. The
                                            session helped students understand various career options and the necessary
                                            academic planning to
                                            achieve their goals.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Career Counselling Session at Senairam HS School, Tinsukia</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Mr. S. Goenka at Senairam HS
                                            School, Tinsukia, on
                                            4th November, 2024. The session offered guidance on future academic and
                                            professional prospects for
                                            the students and encouraged informed decision-making.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Guest Lecture on 'Exploring Career Opportunities in Finance and Accounting'</td>
                                        <td>18/11/2024</td>
                                        <td>
                                            A guest lecture titled 'Exploring Career Opportunities in Finance and
                                            Accounting' was delivered by
                                            CA Kamal Mour, Senior Partner and Branch In-charge of RKP Associates, for
                                            students of Royal School
                                            of Commerce on 18th November, 2024. The session highlighted diverse roles in
                                            finance and
                                            accounting and guided students on building successful careers in the field.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Industrial Visit to Sunrise Biscuit Company Pvt. Ltd.</td>
                                        <td>20/11/2024</td>
                                        <td>
                                            Students of B.Com Finance 1st semester of Royal School of Commerce visited
                                            Sunrise Biscuit Company
                                            Pvt. Ltd., a unit of Britannia located in Boragaon, Guwahati, on 20th November
                                            2024. The visit
                                            provided a practical understanding of manufacturing processes, safety measures,
                                            HR practices, and
                                            waste management. The interactive Q&amp;A session with the HR team added value
                                            to
                                            their academic
                                            learning.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Interactive Session with ICA Edu Skills Pvt. Ltd.</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            An interactive session was conducted on 21st November 2024 with ICA Edu Skills
                                            Pvt. Ltd., Royal
                                            School of Commerce's industry partner. Presided over by Ms. Robina Sarkar,
                                            Placement Coordinator,
                                            the session addressed preparations for internships, employer expectations, and
                                            student concerns
                                            regarding the internship process, selection, and stipends. It was attended by
                                            B.Com F&amp;A 1st and
                                            3rd semester students.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Student Speaker Series 2.0 – Abhijit Saikia</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On 21st November 2024, Royal School of Commerce hosted Student Speaker Series
                                            2.0 featuring
                                            Abhijit Saikia, an M.Com 3rd semester student, who spoke on "Impact of
                                            Globalization." He explored
                                            globalization's role in economic integration, cultural exchange, and
                                            technological advancement,
                                            while also addressing income inequality and environmental concerns. The talk
                                            concluded with an
                                            engaging Q&amp;A session.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Student Speaker Series 2.0 – Montosh Chanda</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On the same day, M.Com 3rd semester student Montosh Chanda delivered a talk
                                            titled "Breaking
                                            Barriers: How Business Can Achieve Sustainable and Inclusive Growth." He
                                            discussed growth
                                            strategies, risk management, and growth indicators. The session ended with an
                                            interactive Q&amp;A,
                                            leaving students inspired.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Student Speaker Series 2.0 – Raja Swargiary and Rahul Dey</td>
                                        <td>22/11/2024</td>
                                        <td>
                                            On 22nd November 2024, the series featured M.Com 3rd semester students Raja
                                            Swargiary and Rahul
                                            Dey. Raja spoke on “Role of Strategists in Strategic Management and Its
                                            Principles of Good
                                            Strategy,” while Rahul explored “Strategic Business Analysis: Exploring SWOT and
                                            PESTEL
                                            Frameworks.” The session offered strategic insights relevant to modern business
                                            challenges.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Career Counselling Session at Dawson HSS, Nagaon</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Dr. Rajdeep Nag, Assistant
                                            Professor, Royal School
                                            of Commerce, at Dawson HSS, Nagaon on 21st November 2024, offering students
                                            valuable guidance on
                                            career planning and higher education options.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Career Counselling Session at Green School International</td>
                                        <td>23/11/2024</td>
                                        <td>
                                            On 23rd November 2024, a career counselling session was conducted at Green
                                            School International by
                                            Prof. George Paul and Dr. Ranjan Dutta Kalita. The session helped senior
                                            students gain insights
                                            into academic pathways and future career prospects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Inauguration Ceremony of Royal School of Commerce - Student Forum</td>
                                        <td>03/12/2024</td>
                                        <td>
                                            The Inauguration Ceremony of the Royal School of Commerce – Student Forum
                                            (2024-25) was held on
                                            3rd December 2024, marking the beginning of student-led initiatives and
                                            collaborative academic and
                                            extracurricular activities for the academic year.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Research Project Viva – UG 5th Semester</td>
                                        <td>04/12/2024</td>
                                        <td>
                                            On 4th December 2024, the Research Project Viva for UG 5th-semester students was
                                            held as part of
                                            their practical examination. External examiners and alumni evaluated student
                                            presentations,
                                            enhancing academic rigor and offering constructive feedback.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Panel Discussion on the Union Budget 2025–2026</td>
                                        <td>07/02/2025</td>
                                        <td>
                                            A panel discussion on the Union Budget 2025–2026 was held on 7th February 2025,
                                            featuring CA
                                            Veekash Kumar Agarwal and CA (Dr.) Ayush Saraf, moderated by CA (Dr.) Swati
                                            Tejawat. Students
                                            engaged in dialogue on tax reforms, support for MSMEs, agriculture investments,
                                            and personal
                                            finance strategies, promoting financial literacy and policy awareness.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Industrial Visit – Sunrise Biscuit Company</td>
                                        <td>14/02/2025</td>
                                        <td>
                                            On 14th February 2025, Royal School of Commerce organized an industrial visit to
                                            Sunrise Biscuit
                                            Company to offer students firsthand exposure to advanced production, lean
                                            manufacturing, and
                                            quality control. The visit aimed to bridge classroom learning with practical
                                            applications in
                                            supply chain and product development.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Workshop on Digital Marketing</td>
                                        <td>17/02/2025</td>
                                        <td>
                                            A workshop on Digital Marketing was organized in collaboration with the Indian
                                            Institute of
                                            Entrepreneurship on 17th February 2025. The session covered traditional vs.
                                            digital marketing and
                                            introduced concepts like content marketing, email, SMS, and WhatsApp marketing
                                            for UG and PG
                                            students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Workshop on Marketing and Selling Strategies</td>
                                        <td>21/02/2025</td>
                                        <td>
                                            On 21st February 2025, Mr. Anuj Kr. Saikia, CEO of Arihant Enterprise, conducted
                                            a workshop
                                            focusing on marketing and selling mushrooms. The session explored marketing
                                            challenges and
                                            strategies specific to the North East, attended by B.Com 2nd semester students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Quiz Competition – Entrepreneurship</td>
                                        <td>24/02/2025</td>
                                        <td>
                                            A quiz competition on entrepreneurship was conducted by the Student Forum of
                                            Royal School of
                                            Commerce on 24th February 2025. The quiz tested students' creativity, business
                                            acumen, and
                                            knowledge of startup strategies.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Outreach Program – Chakardeo ME School</td>
                                        <td>04/03/2025</td>
                                        <td>
                                            On 4th March 2025, students of B.Com 2nd semester organized an outreach program
                                            at Chakardeo Desh
                                            Bhakta Tarun Ram Phukan M.E. School. Volunteers donated sports and food items,
                                            interacted with
                                            students, and conducted a workshop on ‘Good Touch and Bad Touch.’
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Seminar on Understanding &amp; Preventing Sexual Harassment</td>
                                        <td>07/03/2025</td>
                                        <td>
                                            A seminar was held on 7th March 2025 for B.Com students to raise awareness about
                                            sexual
                                            harassment. Dr. Pranita Choudhury and Ms. Kuntala Choudhury discussed legal
                                            aspects, reporting
                                            mechanisms, and preventive measures for ensuring campus safety.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Online Session – Empowering Women: Accelerating Leadership &amp; Economic
                                            Inclusion
                                        </td>
                                        <td>07/03/2025</td>
                                        <td>
                                            In celebration of International Women’s Day 2025, Janitri and RGU organized an
                                            online session on
                                            7th March with expert talks, panel discussions, and lectures highlighting
                                            women's leadership and
                                            economic inclusion.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Seminar – Introduction to the Securities Market</td>
                                        <td>17/03/2025</td>
                                        <td>
                                            On 17th March 2025, a seminar was organized with Mr. Pratyush Bhaskar as keynote
                                            speaker. He
                                            explained the fundamentals of the securities market including stocks, bonds,
                                            SIPs, and market
                                            platforms like NSE and BSE.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Seminar – Awareness Programme on Commodity and Derivatives</td>
                                        <td>18/03/2025</td>
                                        <td>
                                            Mr. Ashutosh Vashisht from MCX delivered a seminar on commodity and derivatives
                                            markets on 18th
                                            March 2025. The session covered futures, options, portfolio diversification, and
                                            commodity market
                                            dynamics using practical examples.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Industrial Visit – GM Plastique</td>
                                        <td>09/04/2025</td>
                                        <td>
                                            On 9th April 2025, students of B.Com F&amp;A visited GM Plastique at Brahmaputra
                                            Industrial Park. The
                                            visit provided hands-on learning about manufacturing, raw materials, and the
                                            company’s zero-waste
                                            practices.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Panel Discussion – Navigating Stock Market Volatility</td>
                                        <td>25/04/2025</td>
                                        <td>
                                            On 25th April 2025, a panel discussion co-organized with the Department of
                                            Economics featured Dr.
                                            Samir Baruah, Mr. Pranab Dutta, and Dr. Gautam Mazumdar. The discussion focused
                                            on stock market
                                            volatility post-COVID, policy implications, and investment strategies.
                                        </td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>

                <!-- Board of Studies -->
                <div style="margin-bottom:20px;">
                    <button id="mobAccBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
              background:linear-gradient(135deg,#24477f,#1a365d);
              color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-users me-2"></i> The Board of Studies
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                    </button>

                    <div id="mobAccPanel1"
                        style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Sl No</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Position in S-BoS</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Name and Designation</th>
                                    </tr>

                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">1</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Chairperson (Ex-Officio)<br>Dean
                                            of School</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) George A.P,<br>Dean,
                                            RSC &amp; RSB</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">2</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">All Heads of the Departments
                                            -<br>Member
                                            (Ex-Officio)</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Aruna Dev Rroy,<br>Associate
                                            Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">3</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Academic)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) Sanjib
                                            Raj,<br>Director, Assam
                                            Institute of Management</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">4</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Industry)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Mr. Subir Ghosh,<br>Owner,
                                            Annapurna Group</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">5</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Two Faculty members of the school
                                            nominated by the
                                            Vice Chancellor</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">
                                            Prof. (Dr.) Sudip Chakraborty,<br>Dy. Dean, RSC<br><br>
                                            Dr. Rajdeep Nag,<br>Assistant Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">6</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Registrar,<br>Member Secretary
                                            (Ex-officio)/
                                            Registrar nominee</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Diganta Munshi,<br>Registrar
                                            (Administration)
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>

                <!-- Departmental Research Committee (DRC) -->
                <div style="margin-bottom:20px;">
                    <button id="mobAccBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
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
                                        <th>Sl No.</th>
                                        <th>Name of the Member</th>
                                        <th>Designation</th>
                                        <th>Designation in the Committee</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr Aruna Dev Rroy</td>
                                        <td>Associate Professor, HOD, RSC</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. (Dr) Sudip Chakraborty</td>
                                        <td>Professor, Dy. Dean, RSC</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr) George A.P.</td>
                                        <td>Professor, RSB<br>Dean, RSB &amp; RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr Rajdeep Nag</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr Niva Kalita</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr) Kamal Debnath</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Prof. (Dr) Anuradha Devi</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Prof. (Dr) Soumitra Sen</td>
                                        <td>Professor, RSHM &amp; RSTTM</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>


            </div>

            <script>
                const mobAccPairs = [
                    { btn: 'mobAccBtn1', panel: 'mobAccPanel1' },
                    { btn: 'mobAccBtn2', panel: 'mobAccPanel2' },
                    { btn: 'mobAccBtn3', panel: 'mobAccPanel3' }
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

                    b.addEventListener('click', function () {
                        const isOpen = this.getAttribute('aria-expanded') === 'true';
                        if (isOpen) {
                            panel.style.display = 'none';
                            this.setAttribute('aria-expanded', 'false');
                            const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
                        } else {
                            closeAllMob();
                            panel.style.display = 'block';
                            this.setAttribute('aria-expanded', 'true');
                            const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
                        }
                    });
                });

                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') closeAllMob();
                });
            </script>
            <!-- Mobile-Friendly Board of Studies & DRC -->

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <!-- floating button  -->
            <div>
                <a href="https://admissions.rgu.ac/" style="
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
            <!-- floating button  -->
            <section>

                <!-- floating buttons  -->
                <div
                    style="position: fixed; top: 50%; left: 10px; transform: translateY(-50%); display: flex; flex-direction: column; gap: 10px; z-index: 1000;">

                    <!-- About -->
                    <a href="#about" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start; color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsl(33, 100%, 56%) 0%, hsla(8, 52%, 50%, 1) 100%); box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-home" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">About</span>
                    </a>

                    <!-- Course -->
                    <a href="#course" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-book" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Courses
                            Offered</span>
                    </a>

                    <!-- Syllabus -->
                    <a href="#syllabus" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-file-text" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Structure
                            &
                            Syllabus</span>
                    </a>

                    <!-- Events -->
                    <a href="#events" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-calendar" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Events &
                            Highlights</span>
                    </a>

                    <!-- Academic Excellence -->
                    <a href="#academic-excellence" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-graduation-cap" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Academic
                            Excellence</span>
                    </a>

                    <!-- BOS -->
                    <a href="#bos" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-users" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Board of
                            Studies</span>
                    </a>

                    <!-- DRC -->
                    <a href="#drc" class="special-link"
                        style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                        <i class="fa fa-university" style="min-width:30px; text-align:center;"></i>
                        <span class="para1"
                            style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">DRC</span>
                    </a>

                </div>
                <!-- floating buttons  -->

                <section id="about">
                    <section style="background-color: #FFF8F0;">
                        <div class="p-5">
                            <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Commerce</span>
                            </h1>

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                                Commerce (RSC)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async"
                                                src="mobile-assets/department-all/dept-commerce/head-img.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The Royal School of Commerce (RSC) under The Royal Global University since its
                                        inception in 2011
                                        (erstwhile Royal Group of Institutions under Gauhati University) has been a leader
                                        in providing
                                        higher education in the field of Commerce. It offers Undergraduate, Postgraduate and
                                        Ph.D.
                                        programmes. In order to facilitate the students to prepare for CA/CS/ICWA, the
                                        school also runs
                                        morning batches. Over these years, RSC has produced many distinguished professionals
                                        and
                                        entrepreneurs. RSC has eminent faculty who have substantial academic and
                                        professional experience.

                                    </p>

                                </div>

                            </div>
                        </div>

                        <div style="background-color: #fff;">
                            <div class="container p-4">
                                <p style="color: #243B95; text-align: justify;" class="para1">
                                    Apart from providing B.Com. with specialisation in Accountancy and Management the School
                                    has also tied
                                    up with institutes of National and International repute like ISDC and ICA to run
                                    specialised courses
                                    like B.Com. (Finance). M.Com. with specialization in Accounting, Finance and Management
                                    and Ph.D.
                                    Programme also come under the umbrella of RSC. All the programmes are embedded with
                                    internship
                                    opportunities and placement assistance. The school follows interdisciplinary approach
                                    and practices,
                                    which equip the students for successful entrepreneurial journey and exciting careers
                                    both in India and
                                    abroad.

                                </p>
                            </div>
                        </div>

                        <div style="background-color: #fff;">
                            <div class="p-5">
                                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                                </h1>

                                <img class="w-100" src="mobile-assets/department-all/dept-commerce/vision-mission-web.png"
                                    alt="">
                            </div>
                        </div>

                        <div class="p-4">
                            <img class="w-100" src="mobile-assets/department-all/dept-commerce/web-btm.png" alt="">
                        </div>

                    </section>
                </section>

                <section id="course">

                    <div class="container">
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                            style="color: #27467A; font-weight: 900; font-size: 35px;">
                            Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px;">M.Com</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-MCom" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 2
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-MCom">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px; padding-right: 20px;">B.Com. - Finance with ICA</span> | <span
                                    style="font-size:22px; padding-left: 16px; font-weight: 300px !important;">Honours /
                                    Honours with
                                    Research</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-bcom-finance-with-ica" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 4
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-bcom-finance-with-ica">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px; padding-right: 20px;">B.Com. (Morning Shift)</span> | <span
                                    style="font-size:22px; padding-left: 16px; font-weight: 300px !important;">Honours /
                                    Honours with
                                    Research</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-bcom-morning-shift" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 4
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-bcom-morning-shift">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px; padding-right: 20px;">B.Com. (Day Shift)</span> | <span
                                    style="font-size:22px; padding-left: 16px; font-weight: 300px !important;">Honours /
                                    Honours with
                                    Research</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-bcom" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 4
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-bcom">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>

                </section>

                <section id="syllabus">
                    <div class="container">
                        <div>
                            <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                                style="color: #27467A; font-weight: 900; font-size: 35px; letter-spacing: 0.5px;">
                                Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
                            </h2>

                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="accordion para1" id="accordionExample"
                                            style="border-radius: 12px; overflow: hidden;">

                                            <!-- UG -->
                                            <div class="accordion-item"
                                                style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed"
                                                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                        <div class="row"
                                                            style="display: flex; flex-direction: column; gap: 12px;">

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/course-structure-rsc.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                                -- B.Com
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/course-structure_ug-pg-.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                                -- B.A JMC
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-acca-detailed-syllabus.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus --
                                                                B.Com ACCA
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-cma-detailed-syllabus.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus --
                                                                B.Com CMA
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-detailed-syllabus.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus --
                                                                B.Com
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/b.com-finance-detailed-syllabus.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus --
                                                                B.Com Finance
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- PG -->
                                            <div class="accordion-item"
                                                style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed"
                                                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        <i class="fa fa-university me-2"></i> Post Graduate
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                        <div class="row"
                                                            style="display: flex; flex-direction: column; gap: 12px;">

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/m-com-detailed-syllabus.pdf"
                                                                target="_blank"
                                                                style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus --
                                                                M.Com
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-commerce/updated-syllabus/ma-j&m.pdf"
                                                                target="_blank"
                                                                style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus -- MA
                                                                J&M
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Doctoral -->
                                            <div class="accordion-item"
                                                style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed"
                                                        style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        <i class="fa fa-book me-2"></i> Doctoral Programme
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                                        <a href="phd" class="para1" target="_blank"
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
                    </div>
                </section>

                <section id="events">
                    <div class="container pb-4">
                        <div class="row" style="display: flex; justify-content: center;">
                            <div class="col-lg-12">
                                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                                    Events
                                </h2>

                                <div style="max-width: 100%; position: relative;">
                                    <div style="border: 1px solid #ccc;">
                                        <div id="scrollContainer"
                                            style="height: 360px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                                            <table class="table table-borderless mb-0"
                                                style="font-size: 16px; width: 100%;">
                                                <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">


                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    06-03-2025 | An invited talk by Dr. Pulak Kumar Ghosh.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    28-02-2025 | An invited talk by Prof. S. Srinath.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    11-11-2024 | An invited talk by Dr. Sudhir K. Pandey.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    27-09-2024 | An invited talk by Prof. Rajesh Kumar.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    07-09-2024 | An invited talk by Prof. A. Taraphder.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    29-04-2024 | An invited talk by Prof. P. C. Sahu.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    01-04-2024 | An invited talk by Prof. Sudhakar
                                                                    Yarlagadda.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    04-01-2024 | An invited talk by Prof. Bikas K.
                                                                    Chakrabarti.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    29-01-2020 | An invited talk by Prof. Pratip
                                                                    Chakraborty.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    13-03-2020 | Interactive session with Ms. Priyanka Das
                                                                    Rajkakati.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    22-04-2019 | An invited talk by Prof. Umesh Waghmare.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    21-03-2019 | An invited talk by Dr. Shyama Pujari.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    12-11-2018 | An invited talk by Prof. S. N. Kaul.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    23-03-2018 | An invited talk by Prof. A. K.
                                                                    Raychaudhuri.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A;">
                                                                    08-03-2018 | An invited talk by Prof. Anil Kumar.
                                                                </div>
                                                                <a href="#"
                                                                    style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read
                                                                    More
                                                                    ...</a>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div style="text-align: center; margin-top: 15px;">
                                        <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
                      background: linear-gradient(135deg, #243B95, #151B5B);
                      color: #fff; font-weight: 600; font-size: 16px;
                      border-radius: 25px; text-decoration: none;
                      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                      transition: all 0.3s ease-in-out;">
                                            View All
                                        </a>
                                    </div>
                                </div>

                                <script>
                                    const scrollContainer = document.getElementById('scrollContainer');
                                    const scrollContent = document.getElementById('scrollContent');

                                    scrollContent.innerHTML += scrollContent.innerHTML;

                                    let scrollPos = 0;
                                    const scrollSpeed = 0.2;

                                    function scrollStep() {
                                        scrollPos += scrollSpeed;
                                        if (scrollPos >= scrollContent.scrollHeight / 2) {
                                            scrollPos = 0;
                                        }
                                        scrollContainer.scrollTop = scrollPos;
                                        requestAnimationFrame(scrollStep);
                                    }

                                    scrollStep();
                                </script>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- <section id="academic-excellence">
                  <section
                    style="background-image: url(mobile-assets/department-all/TRY/bg7a.png); background-size: cover; border: 1px solid #ECA652; height: 100%; padding: 50px;">

                    <h2 class="headd1 fw-bold text-white" style="font-size: 50px; padding-left: 10px;">
                      Academic <span class="headd1" style="color: #FF9A1E; font-size: 50px;">Excellence</span>
                    </h2>

                    <div
                      style="height: 3px; background-color: #FF9A1E; width: 240px; margin: 5px 0px 20px 0px; margin-left: 10px;">
                    </div>

                    <div class="row">

                      <div class="col-lg-6">

                        <h2 class="headd1 fw-bold mb-3" style="font-size: 35px; color: #f8c22f; padding-left: 10px;">SLET
                        </h2>

                        <div
                          style="background-color: rgba(255, 255, 255, 0.2); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.5);">
                          <div style="padding: 30px 20px;">
                            <div class="carousel" mask>
                              <div class="carousel-track">

                                <article class="bg-white text-dark rounded"
                                  style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                                  <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para1 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Yubita Deka<br>
                                        <span class="text-dark" style="font-size: 18px;">Physics</span>
                                      </p>
                                    </div>

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para1 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Susmita Paul<br>
                                        <span class="text-dark" style="font-size: 18px;">M.Sc. Physics</span>
                                      </p>
                                    </div>

                                  </div>

                                  <div class="rounded text-center"
                                    style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                    <p class="para1 fw-bold text-white m-0">Batch: 2018 - 2020</p>
                                  </div>

                                </article>

                                <article class="bg-white text-dark rounded"
                                  style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                                  <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para1 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Bhaskar Jyoti Borah<br>
                                        <span class="text-dark" style="font-size: 18px;">M.Sc. Physics</span>
                                      </p>
                                    </div>

                                  </div>

                                  <div class="rounded text-center"
                                    style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                    <p class="para1 fw-bold text-white m-0">Batch: 2017 - 2019</p>
                                  </div>

                                </article>

                              </div>
                            </div>
                          </div>
                        </div>

                        <style>
                          .carousel {
                            --carousel-width: min(85vw, 650px);
                            --carousel-item-width: 280px;
                            --carousel-item-height: 350px;
                            --carousel-item-gap: 2rem;
                            position: relative;
                            width: var(--carousel-width);
                            overflow: hidden;
                          }

                          .carousel[mask] {
                            mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
                          }

                          .carousel-track {
                            display: flex;
                            gap: var(--carousel-item-gap);
                            animation: marquee var(--carousel-duration) linear infinite;
                          }

                          .carousel article {
                            flex: 0 0 var(--carousel-item-width);
                            height: var(--carousel-item-height);
                            display: grid;
                            grid-template-rows: 200px auto 1fr auto;
                            border-radius: 10px;
                            background: white;
                            color: #314158;
                          }

                          .carousel img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            border-radius: 15px !important;
                          }

                          .carousel article>*:not(img) {
                            padding: 0 1rem;
                          }

                          @keyframes marquee {
                            from {
                              transform: translateX(0);
                            }

                            to {
                              transform: translateX(var(--scroll-distance));
                            }
                          }
                        </style>

                        <script>
                          const track = document.querySelector('.carousel-track');
                          const cards = Array.from(track.children);

                          cards.forEach(card => {
                            track.appendChild(card.cloneNode(true));
                          });

                          const carouselEl = document.querySelector('.carousel');
                          const styles = getComputedStyle(carouselEl);
                          const cardWidth = parseFloat(styles.getPropertyValue('--carousel-item-width'));
                          const cardGap = parseFloat(styles.getPropertyValue('--carousel-item-gap'));
                          const totalCards = track.children.length;
                          const halfTrackWidth = (cardWidth + cardGap) * (totalCards / 2);
                          track.style.setProperty('--scroll-distance', `-${halfTrackWidth}px`);

                          const speed = 80;
                          const duration = halfTrackWidth / speed;
                          track.style.setProperty('--carousel-duration', `${duration}s`);
                        </script>

                      </div>

                      <div class="col-lg-6">

                        <h2 class="headd2 fw-bold mb-3" style="font-size: 35px; color: #fff; padding-left: 10px;">NET
                        </h2>

                        <div
                          style="background-color: rgba(255, 255, 255, 0.2); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.5);">
                          <div style="padding: 30px 20px;">
                            <div class="carousel2" mask>
                              <div class="carousel-track2">

                                <article class="bg-white text-dark rounded"
                                  style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                                  <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para2 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Ritu Sharma<br>
                                        <span class="text-dark" style="font-size: 18px;">Chemistry</span>
                                      </p>
                                    </div>

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para2 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Anil Kumar<br>
                                        <span class="text-dark" style="font-size: 18px;">M.Sc. Chemistry</span>
                                      </p>
                                    </div>

                                  </div>

                                  <div class="rounded text-center"
                                    style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                    <p class="para2 fw-bold text-white m-0">Batch: 2019 - 2021</p>
                                  </div>

                                </article>

                                <article class="bg-white text-dark rounded"
                                  style="width: 300px; height: 350px; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box;">

                                  <div style="flex: 1; display: flex; flex-direction: column; gap: 5px;">

                                    <div class="rounded"
                                      style="background-color: #E6E6E6; padding: 5px 5px; flex: 1; display: flex; align-items: center; justify-content: center;">
                                      <p class="para2 fw-bold m-0 text-center"
                                        style="color: #24477f; font-size: 24px; line-height: 1.2;">
                                        Meera Das<br>
                                        <span class="text-dark" style="font-size: 18px;">M.Sc. Chemistry</span>
                                      </p>
                                    </div>

                                  </div>

                                  <div class="rounded text-center"
                                    style="background-color: #FF9A1E; height: 45px; margin-top: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
                                    <p class="para2 fw-bold text-white m-0">Batch: 2018 - 2020</p>
                                  </div>

                                </article>

                              </div>
                            </div>
                          </div>
                        </div>

                        <style>
                          .carousel2 {
                            --carousel-width: min(85vw, 650px);
                            --carousel-item-width: 280px;
                            --carousel-item-height: 350px;
                            --carousel-item-gap: 2rem;
                            position: relative;
                            width: var(--carousel-width);
                            overflow: hidden;
                          }

                          .carousel2[mask] {
                            mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
                          }

                          .carousel-track2 {
                            display: flex;
                            gap: var(--carousel-item-gap);
                            animation: marquee2 var(--carousel-duration) linear infinite;
                          }

                          .carousel2 article {
                            flex: 0 0 var(--carousel-item-width);
                            height: var(--carousel-item-height);
                            display: grid;
                            grid-template-rows: 200px auto 1fr auto;
                            border-radius: 10px;
                            background: white;
                            color: #314158;
                          }

                          .carousel2 img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            border-radius: 15px !important;
                          }

                          .carousel2 article>*:not(img) {
                            padding: 0 1rem;
                          }

                          @keyframes marquee2 {
                            from {
                              transform: translateX(0);
                            }

                            to {
                              transform: translateX(var(--scroll-distance));
                            }
                          }
                        </style>

                        <script>
                          const track2 = document.querySelector('.carousel-track2');
                          const cards2 = Array.from(track2.children);

                          cards2.forEach(card => {
                            track2.appendChild(card.cloneNode(true));
                          });

                          const carouselEl2 = document.querySelector('.carousel2');
                          const styles2 = getComputedStyle(carouselEl2);
                          const cardWidth2 = parseFloat(styles2.getPropertyValue('--carousel-item-width'));
                          const cardGap2 = parseFloat(styles2.getPropertyValue('--carousel-item-gap'));
                          const totalCards2 = track2.children.length;
                          const halfTrackWidth2 = (cardWidth2 + cardGap2) * (totalCards2 / 2);
                          track2.style.setProperty('--scroll-distance', `-${halfTrackWidth2}px`);

                          const speed2 = 80;
                          const duration2 = halfTrackWidth2 / speed2;
                          track2.style.setProperty('--carousel-duration', `${duration2}s`);
                        </script>

                      </div>

                    </div>

                  </section>
                </section> -->

                <div id="bos" class="container pb-5 pt-5">

                    <!-- Container -->
                    <div id="drc" style="margin:0 auto;">

                        <!-- Row 1 -->
                        <div style="display:flex; flex-wrap:wrap; gap:16px; margin-bottom:16px;">

                            <!-- Activities -->
                            <div style="flex:1 1 calc(100% - 8px); box-sizing:border-box;">
                                <div
                                    style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                                    <button id="accBtn3" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                           background:linear-gradient(135deg,#24477f,#1a365d);
                           color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                                        <i class="fa fa-calendar me-2"></i> Activites
                                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                                    </button>
                                    <div id="accPanel3"
                                        style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                                        <div class="table-responsive">
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                                <thead class="text-white" style="background-color: #27467a">
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <th>Sl. No.</th>
                                                        <th>Event Title</th>
                                                        <th>Date</th>
                                                        <th>Description</th>
                                                    </tr>

                                                </thead>
                                                <tbody class="para1 align-middle"
                                                    style="background-color: #f9f9f9; text-align: start;">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Documentary Viewing – Revisiting The Life And Journey Of The
                                                            Father Of Our
                                                            Nation, Mahatma
                                                            Gandhi</td>
                                                        <td>01/10/2024</td>
                                                        <td>
                                                            On 1st October 2024, the Student Forum of Royal School of
                                                            Commerce, The Assam
                                                            Royal Global
                                                            University, organized a documentary viewing titled “Revisiting
                                                            the Life and
                                                            Journey of the Father
                                                            of Our Nation, Mahatma Gandhi.” This live viewing aimed to
                                                            honour Gandhi’s
                                                            legacy and educate
                                                            students on his significant role in India’s freedom struggle,
                                                            and his philosophy
                                                            of non-violence
                                                            and truth. The documentary explored Gandhi’s early life,
                                                            education, return to
                                                            India, his
                                                            principles of Ahimsa (non-violence), and the lasting impact of
                                                            his teachings. It
                                                            featured
                                                            historical footage, interviews, and dramatizations, allowing
                                                            students to connect
                                                            deeply with his
                                                            life and struggles.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Internal Faculty Development Programme – “The New Normal Of
                                                            Education:
                                                            Depression, Anxiety, And
                                                            Stress And Academic Performance Of Tertiary Students”</td>
                                                        <td>15/10/2024</td>
                                                        <td>
                                                            On 15th October 2024, the Royal School of Commerce organized an
                                                            Internal Faculty
                                                            Development
                                                            Programme on the topic “The New Normal of Education: Depression,
                                                            Anxiety, and
                                                            Stress and Academic
                                                            Performance of Tertiary Students.” Dr. Prince C.P., Associate
                                                            Professor from the
                                                            Department of
                                                            Psychology, Royal School of Behavioural and Allied Sciences, was
                                                            the keynote
                                                            speaker. He shared
                                                            insights into how mental health issues—such as depression,
                                                            anxiety, and
                                                            stress—affect the academic
                                                            performance of tertiary students in a post-pandemic educational
                                                            landscape. The
                                                            session emphasized
                                                            mental well-being as critical to academic success and discussed
                                                            effective
                                                            teaching strategies to
                                                            support students.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>One-Day Student International Conference On "Innovating For A
                                                            Circular Future:
                                                            Strategies,
                                                            Solutions And Sustainability"</td>
                                                        <td>18/10/2024</td>
                                                        <td>
                                                            Royal School of Commerce organized a one-day Student
                                                            International Conference on
                                                            "Innovating for a
                                                            Circular Future: Strategies, Solutions and Sustainability" to
                                                            highlight the
                                                            shift from traditional
                                                            linear economic models to circular ones, with innovation as a
                                                            key driver. The
                                                            conference helped
                                                            students explore strategies, solutions, and sustainable
                                                            practices essential for
                                                            fostering a
                                                            circular economy. Multiple sub-themes ensured a comprehensive
                                                            understanding of
                                                            the topic. The
                                                            event welcomed UG, PG, and research students from diverse
                                                            disciplines to present
                                                            their work. Dr.
                                                            Anuj Kumar, Head of Research, Rushford Business School,
                                                            Switzerland, delivered
                                                            the keynote, and
                                                            Mrs. Ranjana Bhajanka, Director, FINER, was the Guest of Honour.
                                                            They were
                                                            joined by Prof. (Dr.)
                                                            George A.P., Dean, Royal School of Business and Commerce; Prof.
                                                            (Dr.) Saket
                                                            Jeswani, Dean,
                                                            Consultancy, Patent, IPR and MDP; and Dr. Sudip Chakraborty,
                                                            Deputy Dean, Royal
                                                            School of
                                                            Commerce.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Visit to the Directorate of Handloom and Handicrafts, Sikkim –
                                                            Educational
                                                            Excursion</td>
                                                        <td>21/10/2024</td>
                                                        <td>
                                                            On 21st October 2024, students from the M.Com 3rd Semester of
                                                            Royal School of
                                                            Commerce visited the
                                                            Directorate of Handloom and Handicrafts in Sikkim as part of
                                                            their educational
                                                            excursion. They
                                                            observed the intricate process of weaving traditional
                                                            handicrafts and gained
                                                            firsthand knowledge
                                                            of the skill and dedication involved. The visit also included
                                                            discussions on the
                                                            business aspects
                                                            of the handloom sector, including its economic impact, market
                                                            potential, and
                                                            sustainable
                                                            practices. This excursion provided students with both cultural
                                                            appreciation and
                                                            practical insights
                                                            into the commercial dynamics of the handloom industry in Sikkim.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Special Talk Session Featuring Prof. Debabrata Mitra, Vice
                                                            Chancellor of Dakshin
                                                            Dinajpur
                                                            University</td>
                                                        <td>24/10/2024</td>
                                                        <td>
                                                            On October 24, 2024, a special talk session was held featuring
                                                            Prof. Debabrata
                                                            Mitra, Vice
                                                            Chancellor of Dakshin Dinajpur University, West Bengal. Attended
                                                            by faculty and
                                                            M.Com 1st semester
                                                            students of the Royal School of Commerce, the session focused on
                                                            the
                                                            intersection of teaching and
                                                            administration. Prof. Mitra discussed the need for educators to
                                                            balance
                                                            administrative and
                                                            academic responsibilities, emphasizing time management and
                                                            work-life balance. He
                                                            also offered
                                                            detailed guidance on preparing for NAAC peer team visits,
                                                            drawing from his
                                                            experience as an
                                                            evaluation team member. The interactive session encouraged
                                                            students to think
                                                            about future
                                                            leadership roles and develop essential presentation skills. The
                                                            session
                                                            concluded with a strong
                                                            focus on NAAC readiness, equipping attendees with actionable
                                                            strategies for
                                                            institutional
                                                            evaluations.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Special Talk: "Balancing the Books: Managing Stress for Better
                                                            Performance" by
                                                            Prof. Debabrata
                                                            Mitra</td>
                                                        <td>25/10/2024</td>
                                                        <td>
                                                            On October 25, 2024, the Royal School of Commerce hosted a
                                                            special talk titled
                                                            "Balancing the
                                                            Books: Managing Stress for Better Performance," led by Prof.
                                                            Debabrata Mitra.
                                                            Aimed at helping
                                                            students cope with academic stress, the session featured
                                                            interactive discussions
                                                            where students
                                                            shared their stress triggers. Prof. Mitra addressed common
                                                            issues such as time
                                                            constraints and
                                                            pressure, offering practical strategies for effective time
                                                            management and
                                                            lifestyle improvement.
                                                            He advocated for balanced routines including sleep, diet, and
                                                            exercise. The
                                                            relatable nature of
                                                            the discussion and Prof. Mitra's actionable advice left a
                                                            positive impact, with
                                                            students
                                                            expressing gratitude. The session concluded with an appreciation
                                                            from the Head
                                                            of Department,
                                                            reinforcing a sense of support and community among participants.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Scholarly Works in Commerce</td>
                                                        <td>28/10/2024</td>
                                                        <td>
                                                            Royal School of Commerce held an exhibition showcasing the
                                                            scholarly works of
                                                            its faculty and
                                                            students on 28th October 2024. The event served as a platform
                                                            for sharing
                                                            academic research and
                                                            innovative projects, encouraging knowledge exchange and
                                                            scholarly excellence
                                                            within the
                                                            institution.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Career Counselling Session at Kendriya Vidyalaya, Tinsukia</td>
                                                        <td>29/10/2024</td>
                                                        <td>
                                                            Mr. S. Goenka from Royal School of Commerce, Royal Global
                                                            University, conducted
                                                            a career
                                                            counselling session at Kendriya Vidyalaya, Tinsukia on 29th
                                                            October, 2024. The
                                                            session aimed to
                                                            guide students in choosing suitable career paths based on their
                                                            interests and
                                                            academic strengths.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Career Counselling Session at Gitanjali Senior Secondary School,
                                                            Nagaon</td>
                                                        <td>04/11/2024</td>
                                                        <td>
                                                            Dr. Rajdeep Nag from Royal School of Commerce, Royal Global
                                                            University,
                                                            conducted a career
                                                            counselling session at Gitanjali Senior Secondary School, Nagaon
                                                            on 4th
                                                            November, 2024. The
                                                            session helped students understand various career options and
                                                            the necessary
                                                            academic planning to
                                                            achieve their goals.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Career Counselling Session at Senairam HS School, Tinsukia</td>
                                                        <td>04/11/2024</td>
                                                        <td>
                                                            A career counselling session was conducted by Mr. S. Goenka at
                                                            Senairam HS
                                                            School, Tinsukia, on
                                                            4th November, 2024. The session offered guidance on future
                                                            academic and
                                                            professional prospects for
                                                            the students and encouraged informed decision-making.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Guest Lecture on 'Exploring Career Opportunities in Finance and
                                                            Accounting'</td>
                                                        <td>18/11/2024</td>
                                                        <td>
                                                            A guest lecture titled 'Exploring Career Opportunities in
                                                            Finance and
                                                            Accounting' was delivered by
                                                            CA Kamal Mour, Senior Partner and Branch In-charge of RKP
                                                            Associates, for
                                                            students of Royal School
                                                            of Commerce on 18th November, 2024. The session highlighted
                                                            diverse roles in
                                                            finance and
                                                            accounting and guided students on building successful careers in
                                                            the field.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Industrial Visit to Sunrise Biscuit Company Pvt. Ltd.</td>
                                                        <td>20/11/2024</td>
                                                        <td>
                                                            Students of B.Com Finance 1st semester of Royal School of
                                                            Commerce visited
                                                            Sunrise Biscuit Company
                                                            Pvt. Ltd., a unit of Britannia located in Boragaon, Guwahati, on
                                                            20th November
                                                            2024. The visit
                                                            provided a practical understanding of manufacturing processes,
                                                            safety measures,
                                                            HR practices, and
                                                            waste management. The interactive Q&amp;A session with the HR
                                                            team added value to
                                                            their academic
                                                            learning.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Interactive Session with ICA Edu Skills Pvt. Ltd.</td>
                                                        <td>21/11/2024</td>
                                                        <td>
                                                            An interactive session was conducted on 21st November 2024 with
                                                            ICA Edu Skills
                                                            Pvt. Ltd., Royal
                                                            School of Commerce's industry partner. Presided over by Ms.
                                                            Robina Sarkar,
                                                            Placement Coordinator,
                                                            the session addressed preparations for internships, employer
                                                            expectations, and
                                                            student concerns
                                                            regarding the internship process, selection, and stipends. It
                                                            was attended by
                                                            B.Com F&amp;A 1st and
                                                            3rd semester students.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>14</td>
                                                        <td>Student Speaker Series 2.0 – Abhijit Saikia</td>
                                                        <td>21/11/2024</td>
                                                        <td>
                                                            On 21st November 2024, Royal School of Commerce hosted Student
                                                            Speaker Series
                                                            2.0 featuring
                                                            Abhijit Saikia, an M.Com 3rd semester student, who spoke on
                                                            "Impact of
                                                            Globalization." He explored
                                                            globalization's role in economic integration, cultural exchange,
                                                            and
                                                            technological advancement,
                                                            while also addressing income inequality and environmental
                                                            concerns. The talk
                                                            concluded with an
                                                            engaging Q&amp;A session.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Student Speaker Series 2.0 – Montosh Chanda</td>
                                                        <td>21/11/2024</td>
                                                        <td>
                                                            On the same day, M.Com 3rd semester student Montosh Chanda
                                                            delivered a talk
                                                            titled "Breaking
                                                            Barriers: How Business Can Achieve Sustainable and Inclusive
                                                            Growth." He
                                                            discussed growth
                                                            strategies, risk management, and growth indicators. The session
                                                            ended with an
                                                            interactive Q&amp;A,
                                                            leaving students inspired.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Student Speaker Series 2.0 – Raja Swargiary and Rahul Dey</td>
                                                        <td>22/11/2024</td>
                                                        <td>
                                                            On 22nd November 2024, the series featured M.Com 3rd semester
                                                            students Raja
                                                            Swargiary and Rahul
                                                            Dey. Raja spoke on “Role of Strategists in Strategic Management
                                                            and Its
                                                            Principles of Good
                                                            Strategy,” while Rahul explored “Strategic Business Analysis:
                                                            Exploring SWOT and
                                                            PESTEL
                                                            Frameworks.” The session offered strategic insights relevant to
                                                            modern business
                                                            challenges.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Career Counselling Session at Dawson HSS, Nagaon</td>
                                                        <td>21/11/2024</td>
                                                        <td>
                                                            A career counselling session was conducted by Dr. Rajdeep Nag,
                                                            Assistant
                                                            Professor, Royal School
                                                            of Commerce, at Dawson HSS, Nagaon on 21st November 2024,
                                                            offering students
                                                            valuable guidance on
                                                            career planning and higher education options.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Career Counselling Session at Green School International</td>
                                                        <td>23/11/2024</td>
                                                        <td>
                                                            On 23rd November 2024, a career counselling session was
                                                            conducted at Green
                                                            School International by
                                                            Prof. George Paul and Dr. Ranjan Dutta Kalita. The session
                                                            helped senior
                                                            students gain insights
                                                            into academic pathways and future career prospects.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Inauguration Ceremony of Royal School of Commerce - Student
                                                            Forum</td>
                                                        <td>03/12/2024</td>
                                                        <td>
                                                            The Inauguration Ceremony of the Royal School of Commerce –
                                                            Student Forum
                                                            (2024-25) was held on
                                                            3rd December 2024, marking the beginning of student-led
                                                            initiatives and
                                                            collaborative academic and
                                                            extracurricular activities for the academic year.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Research Project Viva – UG 5th Semester</td>
                                                        <td>04/12/2024</td>
                                                        <td>
                                                            On 4th December 2024, the Research Project Viva for UG
                                                            5th-semester students was
                                                            held as part of
                                                            their practical examination. External examiners and alumni
                                                            evaluated student
                                                            presentations,
                                                            enhancing academic rigor and offering constructive feedback.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>Panel Discussion on the Union Budget 2025–2026</td>
                                                        <td>07/02/2025</td>
                                                        <td>
                                                            A panel discussion on the Union Budget 2025–2026 was held on 7th
                                                            February 2025,
                                                            featuring CA
                                                            Veekash Kumar Agarwal and CA (Dr.) Ayush Saraf, moderated by CA
                                                            (Dr.) Swati
                                                            Tejawat. Students
                                                            engaged in dialogue on tax reforms, support for MSMEs,
                                                            agriculture investments,
                                                            and personal
                                                            finance strategies, promoting financial literacy and policy
                                                            awareness.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>22</td>
                                                        <td>Industrial Visit – Sunrise Biscuit Company</td>
                                                        <td>14/02/2025</td>
                                                        <td>
                                                            On 14th February 2025, Royal School of Commerce organized an
                                                            industrial visit to
                                                            Sunrise Biscuit
                                                            Company to offer students firsthand exposure to advanced
                                                            production, lean
                                                            manufacturing, and
                                                            quality control. The visit aimed to bridge classroom learning
                                                            with practical
                                                            applications in
                                                            supply chain and product development.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>Workshop on Digital Marketing</td>
                                                        <td>17/02/2025</td>
                                                        <td>
                                                            A workshop on Digital Marketing was organized in collaboration
                                                            with the Indian
                                                            Institute of
                                                            Entrepreneurship on 17th February 2025. The session covered
                                                            traditional vs.
                                                            digital marketing and
                                                            introduced concepts like content marketing, email, SMS, and
                                                            WhatsApp marketing
                                                            for UG and PG
                                                            students.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>Workshop on Marketing and Selling Strategies</td>
                                                        <td>21/02/2025</td>
                                                        <td>
                                                            On 21st February 2025, Mr. Anuj Kr. Saikia, CEO of Arihant
                                                            Enterprise, conducted
                                                            a workshop
                                                            focusing on marketing and selling mushrooms. The session
                                                            explored marketing
                                                            challenges and
                                                            strategies specific to the North East, attended by B.Com 2nd
                                                            semester students.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>Quiz Competition – Entrepreneurship</td>
                                                        <td>24/02/2025</td>
                                                        <td>
                                                            A quiz competition on entrepreneurship was conducted by the
                                                            Student Forum of
                                                            Royal School of
                                                            Commerce on 24th February 2025. The quiz tested students'
                                                            creativity, business
                                                            acumen, and
                                                            knowledge of startup strategies.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>Outreach Program – Chakardeo ME School</td>
                                                        <td>04/03/2025</td>
                                                        <td>
                                                            On 4th March 2025, students of B.Com 2nd semester organized an
                                                            outreach program
                                                            at Chakardeo Desh
                                                            Bhakta Tarun Ram Phukan M.E. School. Volunteers donated sports
                                                            and food items,
                                                            interacted with
                                                            students, and conducted a workshop on ‘Good Touch and Bad
                                                            Touch.’
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>Seminar on Understanding &amp; Preventing Sexual Harassment</td>
                                                        <td>07/03/2025</td>
                                                        <td>
                                                            A seminar was held on 7th March 2025 for B.Com students to raise
                                                            awareness about
                                                            sexual
                                                            harassment. Dr. Pranita Choudhury and Ms. Kuntala Choudhury
                                                            discussed legal
                                                            aspects, reporting
                                                            mechanisms, and preventive measures for ensuring campus safety.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>Online Session – Empowering Women: Accelerating Leadership &amp;
                                                            Economic Inclusion
                                                        </td>
                                                        <td>07/03/2025</td>
                                                        <td>
                                                            In celebration of International Women’s Day 2025, Janitri and
                                                            RGU organized an
                                                            online session on
                                                            7th March with expert talks, panel discussions, and lectures
                                                            highlighting
                                                            women's leadership and
                                                            economic inclusion.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>Seminar – Introduction to the Securities Market</td>
                                                        <td>17/03/2025</td>
                                                        <td>
                                                            On 17th March 2025, a seminar was organized with Mr. Pratyush
                                                            Bhaskar as keynote
                                                            speaker. He
                                                            explained the fundamentals of the securities market including
                                                            stocks, bonds,
                                                            SIPs, and market
                                                            platforms like NSE and BSE.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>Seminar – Awareness Programme on Commodity and Derivatives</td>
                                                        <td>18/03/2025</td>
                                                        <td>
                                                            Mr. Ashutosh Vashisht from MCX delivered a seminar on commodity
                                                            and derivatives
                                                            markets on 18th
                                                            March 2025. The session covered futures, options, portfolio
                                                            diversification, and
                                                            commodity market
                                                            dynamics using practical examples.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>Industrial Visit – GM Plastique</td>
                                                        <td>09/04/2025</td>
                                                        <td>
                                                            On 9th April 2025, students of B.Com F&amp;A visited GM
                                                            Plastique at Brahmaputra
                                                            Industrial Park. The
                                                            visit provided hands-on learning about manufacturing, raw
                                                            materials, and the
                                                            company’s zero-waste
                                                            practices.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>Panel Discussion – Navigating Stock Market Volatility</td>
                                                        <td>25/04/2025</td>
                                                        <td>
                                                            On 25th April 2025, a panel discussion co-organized with the
                                                            Department of
                                                            Economics featured Dr.
                                                            Samir Baruah, Mr. Pranab Dutta, and Dr. Gautam Mazumdar. The
                                                            discussion focused
                                                            on stock market
                                                            volatility post-COVID, policy implications, and investment
                                                            strategies.
                                                        </td>
                                                    </tr>


                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Board of Studies -->
                            <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                                <div
                                    style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                                    <button id="accBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                           background:linear-gradient(135deg,#24477f,#1a365d);
                           color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                                        <i class="fa fa-users me-2"></i> The Board of Studies
                                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                                    </button>
                                    <div id="accPanel1"
                                        style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                                        <div class="table-responsive">
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                                <thead class="text-white" style="background-color: #27467a">
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <th style="border: 1px solid #ccc; padding: 8px;">Sl No</th>
                                                        <th style="border: 1px solid #ccc; padding: 8px;">Position in S-BoS
                                                        </th>
                                                        <th style="border: 1px solid #ccc; padding: 8px;">Name and
                                                            Designation</th>
                                                    </tr>

                                                </thead>
                                                <tbody class="para1 align-middle"
                                                    style="background-color: #f9f9f9; text-align: start;">
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">1</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Chairperson
                                                            (Ex-Officio)<br>Dean
                                                            of School</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) George
                                                            A.P,<br>Dean,
                                                            RSC &amp; RSB</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">2</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">All Heads of the
                                                            Departments
                                                            -<br>Member
                                                            (Ex-Officio)</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Aruna Dev
                                                            Rroy,<br>Associate
                                                            Professor, RSC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">3</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts
                                                            for each
                                                            Department (Academic)
                                                        </td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) Sanjib
                                                            Raj,<br>Director, Assam
                                                            Institute of Management</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">4</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts
                                                            for each
                                                            Department (Industry)
                                                        </td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Mr. Subir
                                                            Ghosh,<br>Owner,
                                                            Annapurna Group</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">5</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Two Faculty
                                                            members of the school
                                                            nominated by the
                                                            Vice Chancellor</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">
                                                            Prof. (Dr.) Sudip Chakraborty,<br>Dy. Dean, RSC<br><br>
                                                            Dr. Rajdeep Nag,<br>Assistant Professor, RSC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">6</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">
                                                            Registrar,<br>Member Secretary
                                                            (Ex-officio)/
                                                            Registrar nominee</td>
                                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Diganta
                                                            Munshi,<br>Registrar
                                                            (Administration)
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- DRC -->
                            <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                                <div
                                    style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                                    <button id="accBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                           background:linear-gradient(135deg,#24477f,#1a365d);
                           color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                                        <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                                    </button>
                                    <div id="accPanel2"
                                        style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                                        <div class="table-responsive">
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                                <thead class="text-white" style="background-color: #27467a">
                                                    <tr>
                                                        <th>Sl No.</th>
                                                        <th>Name of the Member</th>
                                                        <th>Designation</th>
                                                        <th>Designation in the Committee</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="para1 align-middle"
                                                    style="background-color: #f9f9f9; text-align: start;">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dr Aruna Dev Rroy</td>
                                                        <td>Associate Professor, HOD, RSC</td>
                                                        <td>Chairperson</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Prof. (Dr) Sudip Chakraborty</td>
                                                        <td>Professor, Dy. Dean, RSC</td>
                                                        <td>Member Secretary</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Prof. (Dr) George A.P.</td>
                                                        <td>Professor, RSB<br>Dean, RSB &amp; RSC</td>
                                                        <td>Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Dr Rajdeep Nag</td>
                                                        <td>Assistant Professor, RSC</td>
                                                        <td>Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Dr Niva Kalita</td>
                                                        <td>Assistant Professor, RSC</td>
                                                        <td>Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Prof. (Dr) Kamal Debnath</td>
                                                        <td>Professor, RSAPS</td>
                                                        <td>External Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Prof. (Dr) Anuradha Devi</td>
                                                        <td>Professor, RSAPS</td>
                                                        <td>External Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Prof. (Dr) Soumitra Sen</td>
                                                        <td>Professor, RSHM &amp; RSTTM</td>
                                                        <td>External Member</td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- JS remains same -->
                    <script>

                        const accPairs = [
                            { btn: 'accBtn1', panel: 'accPanel1' },
                            { btn: 'accBtn2', panel: 'accPanel2' },
                            { btn: 'accBtn3', panel: 'accPanel3' }
                        ];

                        function closeAll() {
                            accPairs.forEach(p => {
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

                        accPairs.forEach(p => {
                            const b = document.getElementById(p.btn);
                            const panel = document.getElementById(p.panel);
                            if (!b || !panel) return;

                            b.addEventListener('click', function () {
                                const isOpen = this.getAttribute('aria-expanded') === 'true';
                                if (isOpen) {
                                    panel.style.display = 'none';
                                    this.setAttribute('aria-expanded', 'false');
                                    const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
                                } else {
                                    closeAll();
                                    panel.style.display = 'block';
                                    this.setAttribute('aria-expanded', 'true');
                                    const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
                                }
                            });
                        });

                        document.addEventListener('keydown', function (e) {
                            if (e.key === 'Escape') closeAll();
                        });
                    </script>

                </div>

                <script>
                    document.querySelectorAll('a.special-link').forEach(anchor => {
                        anchor.addEventListener('mouseover', function () {
                            this.style.width = '200px';
                            this.querySelector('span').style.opacity = '1';
                        });
                        anchor.addEventListener('mouseout', function () {
                            this.style.width = '42px';
                            this.querySelector('span').style.opacity = '0';
                        });
                        anchor.addEventListener('click', function (e) {
                            e.preventDefault();
                            document.querySelector(this.getAttribute('href')).scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });

                </script>

            </section>

        </div>

    </div>
@endsection
