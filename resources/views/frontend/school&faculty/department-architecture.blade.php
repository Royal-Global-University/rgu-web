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
            <section style="background-color: #fff8f0; padding: 120px 10px 0px 10px; position: relative;">

                <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Architecture</span>
                </h1>

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
                    Architecture (RSA)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="mobile-assets/department-all/dept-arch/head-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Architecture Department is a dynamic hub of innovation and creativity, boasting a
                                diverse array of
                                strengths and competencies. With a strong emphasis on sustainable design practices, digital
                                fabrication
                                techniques, and interdisciplinary collaboration, graduates emerge equipped to tackle the
                                complex
                                challenges facing the built environment. The department's thrust areas encompass urban
                                revitalization,
                                resilient infrastructure, and adaptive reuse, reflecting a commitment to addressing pressing
                                societal
                                needs while embracing technological advancements. Graduates possess a unique blend of
                                artistic vision,
                                technical expertise, and critical thinking skills, positioning them for success in a variety
                                of career
                                paths. Whether pursuing roles in architectural firms, urban planning agencies, or academia,
                                alumni are
                                well-prepared to make meaningful contributions to shaping the future of our cities and
                                communities.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="pt-3">

                    <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                        <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img src="mobile-assets/department-all/dept-arch/vision-mission-mob.png" alt="">
                </div>


            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container pt-3">
                <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size: 18px;">B.Arch</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-barch" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">5 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-barch">View Details</a>
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

                                                    <a href="mobile-assets/department-all/dept-arch/updated-syllabus/structure-b.arch.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                        <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/dept-arch/updated-syllabus/detailed-syllabus.pdf"
                                                        target="_blank" style="color: #27467A;">
                                                        <i class="fa fa-file-text px-2"></i> Detailed Syllabus - B.Arch
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
                                                <a href="doctoral-programme" class="para1" target="_blank"
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

            <!-- events and highlights  -->
            <div class="container pb-4">

                <!-- mobile events  -->
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
                                            style="background-color: #f9f9f9;">

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.09.2024, Er. JN Khatanair, Chief Consultant Engineer
                                                            Shrishtie Guwahati,
                                                            Chairperson Northeast Chapter Indian Green Building Council IGBC
                                                            Hyderabad, attended a
                                                            Technical Lecture on “Sustainable Building for Warm and Humid
                                                            Climatic Zone,” on the
                                                            occasion of Engineer’s Day.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.09.2024, Ms. Faye Fernandes, Country Director of Torrens
                                                            University, Australia,
                                                            attended an interactive session on "Career Opportunity for
                                                            Designers," organized by
                                                            Royal School of Architecture and Royal School of Design.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            From 31.07.2024 to 10.08.2024, Er. Rajesh Dutta (Engineering
                                                            Consultant in ASDMA)
                                                            attended a Session on Disaster Management and Mitigation
                                                            organized by Royal School of
                                                            Architecture and Royal School of Design.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 23.07.2024, Ar. Anuj Bhajanka attended a Re-orientation
                                                            program for the upcoming
                                                            semester organized by Royal School of Architecture and Royal
                                                            School of Design.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.05.2024, Ar. Ronojoy Sen joined Panel Discussions
                                                            organised as part of Day 3 of
                                                            Knoxis Design Fest.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 28.08.2023, Ar. Farha Shermin attended an Interactive Session
                                                            as part of the
                                                            Students Induction Program of B.Arch and BID/DID 1st Sem.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.05.2023, Ar. Gita Balakrishnana joined Panel Discussions
                                                            organised as part of
                                                            Day 3 of Knoxis Design Fest.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.05.2023, Ar. Ashish Agarwal joined Panel Discussions
                                                            organised as part of Day 3
                                                            of Knoxis Design Fest.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.05.2023, Mahan J Dutta conducted Workshops organised as
                                                            part of Day 3 of Knoxis
                                                            Design Fest.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 18.05.2023, Asutosh Kashyap conducted Workshops organised as
                                                            part of Day 3 of
                                                            Knoxis Design Fest.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 05.04.2023, Dr. Anunaya Chaubey held an Interactive session
                                                            regarding Anant
                                                            University's flagship program, Anant Fellowship.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 28.10.2022, Debabrata Rajkumar conducted an Interactive
                                                            Session on Climate Change
                                                            and Waste Management.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 11.10.2022, Mr. Ashish Agarwal, Entrepreneur, conducted an
                                                            Interactive session.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            From 20.08.2019 to 21.08.2019, Ar. Pragati Goyal led the
                                                            Orientation Programme for
                                                            Freshers of RSA, RSFT, RSD, RSFA.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 16.08.2019, Nilakshi More led the Orientation Programme for
                                                            Freshers of RSA and
                                                            RSD.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            From 6 to 8.03.2019, Prof. Abhijit Shirodkar held an Interactive
                                                            session.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            From 24 to 25.01.2019, Trailokya Hazarika coordinated Birla
                                                            White Cement Competitions:
                                                            1. Yuvaratna, 2. Yuvaratna Nxt.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            From 21 to 23.01.2019, Asoke Sengupta, Gaurav Dalmia, Pragyan
                                                            Dowerah, and Parijit
                                                            Phukan hosted a Meditation Workshop by Heartfulness Foundation.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 7.08.2018, Ashish Batliwala conducted a 3D Printing Workshop.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 30.07.2018, Pankaj Bhattacharjee from Greenlam conducted a
                                                            Workshop on Laminates.

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
                                                        <div style="font-weight: bold; color: #27467A; ">

                                                            On 5.02.2018, Dr. Repaul Kanji from IIT Roorkee conducted a
                                                            Workshop on ‘Awareness of
                                                            Disaster Mitigation & Management’.

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
                            const mobileEventScrollSpeed = 0.6;

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
                <!-- mobile events  -->

            </div>
            <!-- events and highlights  -->

            <!-- Mobile-Friendly Board of Studies & DRC -->
            <div id="bos-mobile" class="container pb-5">

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
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-2"
                                style="font-size: 16px;">
                                <thead class="text-white" style="background-color: #27467a;">
                                    <tr>
                                        <th class="text-white">S.No.</th>
                                        <th class="text-white">Position In S-BOS</th>
                                        <th class="text-white">Name And Designation</th>
                                    </tr>
                                </thead>
                                <tbody class="mobile-para1 align-middle"
                                    style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Chairperson (Ex-Officio) Dean of School</td>
                                        <td>Prof. (Dr.) Hari Prasad Agarwal, Principal, RSA</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Professors of the School Members (Ex-Officio)</td>
                                        <td>Ar. Siddhartha Deb, Professor</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Experts for each Department (Academic)</td>
                                        <td>Prof. (Dr.) Abhijit Shirodkar, Dean, School of Architecture &amp; Planning,
                                            Woxsen
                                            University, Kamkole,
                                            Sadasivpet, District Sangareddy, Telangana 502345</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>External Experts for each Department (Industry)</td>
                                        <td>Ar. Ranel Kumar Das, Founder &amp; Principal Architect of Ranel Associates
                                            Architects,
                                            B. Baruah Road,
                                            Ullubari, Guwahati-07</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Two Faculty members of the School nominated by the Vice Chancellor</td>
                                        <td>Ar. Kasturi Borah, Associate Professor, RSA</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Registrar, Member Secretary (Ex-officio)</td>
                                        <td>Dr. Dip Narayain Singh or his nominee</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- Departmental Research Committee (DRC) -->
                <div>
                    <button id="mobAccBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
              background:linear-gradient(135deg,#24477f,#1a365d);
              color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                    </button>

                    <div id="mobAccPanel2"
                        style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-2"
                                style="font-size: 16px;">
                                <thead class="text-white align-middle" style="background-color: #27467a;">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Content</th>
                                        <th class="text-white">Name of the Member</th>
                                        <th class="text-white">Designation</th>
                                        <th class="text-white">Designation in the committee</th>
                                    </tr>
                                </thead>
                                <tbody class="mobile-para1 align-middle"
                                    style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Head of the Department</td>
                                        <td>Dr. Hari Prasad Agarwal, RSA</td>
                                        <td>Professor</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td rowspan="2">Two Professors</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td rowspan="2">
                                            Two Associate Professors – one of them will be the member secretary
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td rowspan="2">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">5</td>
                                        <td rowspan="3">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. (Dr.) Shila Bora</td>
                                        <td>Professor, RSHSS, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Krishna Barua</td>
                                        <td>Professor, RSL, RGU</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Suresh Chandra Nayak</td>
                                        <td>Professor, RSCOM</td>
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
                    { btn: 'mobAccBtn3', panel: 'mobAccPanel3' },
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

            <section>

                @include('frontend/components/aheader')
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
                <!-- floating button  -->
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
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Architecture</span>
                            </h1>

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                                Architecture (RSA)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async"
                                                src="mobile-assets/department-all/dept-arch/head-img.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                                    <p class="mobile-para1 pt-3"
                                        style="color: #264273; text-align: justify; line-height: 1.5;">
                                        The Architecture Department is a dynamic hub of innovation and creativity, boasting
                                        a diverse array
                                        of strengths and competencies. With a strong emphasis on sustainable design
                                        practices, digital
                                        fabrication techniques, and interdisciplinary collaboration, graduates emerge
                                        equipped to tackle the
                                        complex challenges facing the built environment. The department's thrust areas
                                        encompass urban
                                        revitalization, resilient infrastructure, and adaptive reuse, reflecting a
                                        commitment to addressing
                                        pressing societal needs while embracing technological advancements. Graduates
                                        possess a unique blend
                                        of artistic vision, technical expertise, and critical thinking skills, positioning
                                        them for success
                                        in a variety of career paths. Whether pursuing roles in architectural firms, urban
                                        planning
                                        agencies, or academia, alumni are well-prepared to make meaningful contributions to
                                        shaping the
                                        future of our cities and communities.


                                    </p>

                                </div>

                            </div>
                        </div>


                        <div style="background-color: #fff;">
                            <div class="p-5">
                                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                                </h1>

                                <img class="w-100" src="mobile-assets/department-all/dept-arch/vision-mission-web.png"
                                    alt="">
                            </div>
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

                                <span style="font-size:22px;">B.Arch</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-barch" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 5
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-barch">View Details</a>
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

                                                            <a href="mobile-assets/department-all/dept-arch/updated-syllabus/structure-b.arch.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-arch/updated-syllabus/detailed-syllabus.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus -
                                                                B.Arch
                                                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- PG -->


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
                                                        <a href="doctoral-programme" class="para1" target="_blank"
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

                        <!-- events  -->
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
                                                <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9; ">


                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.09.2024, Er. JN Khatanair, Chief Consultant
                                                                    Engineer Shrishtie Guwahati,
                                                                    Chairperson Northeast Chapter Indian Green Building
                                                                    Council IGBC Hyderabad, attended a
                                                                    Technical Lecture on “Sustainable Building for Warm and
                                                                    Humid Climatic Zone,” on the
                                                                    occasion of Engineer’s Day.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.09.2024, Ms. Faye Fernandes, Country Director of
                                                                    Torrens University, Australia,
                                                                    attended an interactive session on "Career Opportunity
                                                                    for Designers," organized by
                                                                    Royal School of Architecture and Royal School of Design.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    From 31.07.2024 to 10.08.2024, Er. Rajesh Dutta
                                                                    (Engineering Consultant in ASDMA)
                                                                    attended a Session on Disaster Management and Mitigation
                                                                    organized by Royal School of
                                                                    Architecture and Royal School of Design.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 23.07.2024, Ar. Anuj Bhajanka attended a
                                                                    Re-orientation program for the upcoming
                                                                    semester organized by Royal School of Architecture and
                                                                    Royal School of Design.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.05.2024, Ar. Ronojoy Sen joined Panel Discussions
                                                                    organised as part of Day 3 of
                                                                    Knoxis Design Fest.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 28.08.2023, Ar. Farha Shermin attended an Interactive
                                                                    Session as part of the
                                                                    Students Induction Program of B.Arch and BID/DID 1st
                                                                    Sem.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.05.2023, Ar. Gita Balakrishnana joined Panel
                                                                    Discussions organised as part of
                                                                    Day 3 of Knoxis Design Fest.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.05.2023, Ar. Ashish Agarwal joined Panel
                                                                    Discussions organised as part of Day 3
                                                                    of Knoxis Design Fest.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.05.2023, Mahan J Dutta conducted Workshops
                                                                    organised as part of Day 3 of Knoxis
                                                                    Design Fest.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 18.05.2023, Asutosh Kashyap conducted Workshops
                                                                    organised as part of Day 3 of
                                                                    Knoxis Design Fest.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 05.04.2023, Dr. Anunaya Chaubey held an Interactive
                                                                    session regarding Anant
                                                                    University's flagship program, Anant Fellowship.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 28.10.2022, Debabrata Rajkumar conducted an
                                                                    Interactive Session on Climate Change
                                                                    and Waste Management.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 11.10.2022, Mr. Ashish Agarwal, Entrepreneur,
                                                                    conducted an Interactive session.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    From 20.08.2019 to 21.08.2019, Ar. Pragati Goyal led the
                                                                    Orientation Programme for
                                                                    Freshers of RSA, RSFT, RSD, RSFA.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 16.08.2019, Nilakshi More led the Orientation
                                                                    Programme for Freshers of RSA and
                                                                    RSD.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    From 6 to 8.03.2019, Prof. Abhijit Shirodkar held an
                                                                    Interactive session.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    From 24 to 25.01.2019, Trailokya Hazarika coordinated
                                                                    Birla White Cement Competitions:
                                                                    1. Yuvaratna, 2. Yuvaratna Nxt.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    From 21 to 23.01.2019, Asoke Sengupta, Gaurav Dalmia,
                                                                    Pragyan Dowerah, and Parijit
                                                                    Phukan hosted a Meditation Workshop by Heartfulness
                                                                    Foundation.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 7.08.2018, Ashish Batliwala conducted a 3D Printing
                                                                    Workshop.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 30.07.2018, Pankaj Bhattacharjee from Greenlam
                                                                    conducted a Workshop on Laminates.

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
                                                                <div style="font-weight: bold; color: #27467A; ">

                                                                    On 5.02.2018, Dr. Repaul Kanji from IIT Roorkee
                                                                    conducted a Workshop on ‘Awareness of
                                                                    Disaster Mitigation & Management’.

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

                                    // Duplicate content for infinite scroll
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
                        <!-- events  -->

                    </div>

                </section>

                <section id="academic-excellence">

                    <section
                        style="background-image: url(mobile-assets/department-all/TRY/bg7a.png); background-size: cover; border: 1px solid #ECA652; height: 95vh; padding: 50px;">

                        <h2 class="headd1 fw-bold text-white" style="font-size: 50px; padding-left: 10px;">
                            Academic <span class="headd1" style="color: #FF9A1E; font-size: 50px;">Excellence</span>
                        </h2>

                        <div
                            style="height: 3px; background-color: #FF9A1E; width: 240px; margin: 5px 0px 20px 0px; margin-left: 10px;">
                        </div>

                        <div class="row">

                            <div class="col-lg-12">

                                <h2 class="headd1 fw-bold mb-3"
                                    style="font-size: 35px; color: #f8c22f; padding-left: 10px;">APSC 2023
                                </h2>

                                <div style="display: flex; justify-content: center;">
                                    <div style="padding: 30px 20px;">
                                        <div class="carousel" mask>
                                            <div class="carousel-track">

                                                <!-- Example cards -->
                                                <article class="bg-white text-dark rounded"
                                                    style="width: 300px; height: 340px; display: flex; flex-direction: column;">

                                                    <div class="rounded"
                                                        style="background-color: #E6E6E6; padding: 5px 20px; margin: 10px 10px;">
                                                        <p class="para1 fw-bold pt-1"
                                                            style="color: #24477f; font-size: 26px;">Nilakshi Chakravarty
                                                            <br>
                                                            <span class="text-dark"
                                                                style="font-size: 18px;">Architecture</span>

                                                        </p>
                                                    </div>

                                                    <div class="rounded"
                                                        style="background-color: #E6E6E6; padding: 5px 20px; margin: 5px 10px;">
                                                        <p class="para1 fw-bold pt-1"
                                                            style="color: #24477f; font-size: 26px;">Priyanka Saikia
                                                            <br>
                                                            <span class="text-dark"
                                                                style="font-size: 18px;">Architecture</span>

                                                        </p>
                                                    </div>

                                                    <div class="rounded text-center"
                                                        style="background-color: #FF9A1E; height: 45px; margin-top: auto;">
                                                        <p class="para1 fw-bold text-white pt-2">Batch: 2011 - 15</p>
                                                    </div>
                                                </article>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .carousel {
                                        --carousel-width: min(85vw, 880px);
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
                                        justify-content: center;
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

                                <!-- <script>
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
                        </script> -->

                            </div>

                        </div>

                    </section>

                </section>

                <div id="bos" class="container pb-5 pt-5">

                    <!-- Container -->
                    <div id="drc" style="margin:0 auto;">

                        <!-- Row 1 -->
                        <div style="display:flex; flex-wrap:wrap; gap:16px; margin-bottom:16px;">

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
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-2"
                                                style="font-size: 16px;">
                                                <thead class="text-white" style="background-color: #27467a;">
                                                    <tr>
                                                        <th class="text-white">S.No.</th>
                                                        <th class="text-white">Position In S-BOS</th>
                                                        <th class="text-white">Name And Designation</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="mobile-para1 align-middle"
                                                    style="background-color: #f9f9f9; text-align: start;">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Chairperson (Ex-Officio) Dean of School</td>
                                                        <td>Prof. (Dr.) Hari Prasad Agarwal, Principal, RSA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Professors of the School Members (Ex-Officio)</td>
                                                        <td>Ar. Siddhartha Deb, Professor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>External Experts for each Department (Academic)</td>
                                                        <td>Prof. (Dr.) Abhijit Shirodkar, Dean, School of Architecture
                                                            &amp; Planning, Woxsen
                                                            University, Kamkole,
                                                            Sadasivpet, District Sangareddy, Telangana 502345</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>External Experts for each Department (Industry)</td>
                                                        <td>Ar. Ranel Kumar Das, Founder &amp; Principal Architect of Ranel
                                                            Associates Architects,
                                                            B. Baruah Road,
                                                            Ullubari, Guwahati-07</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Two Faculty members of the School nominated by the Vice
                                                            Chancellor</td>
                                                        <td>Ar. Kasturi Borah, Associate Professor, RSA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Registrar, Member Secretary (Ex-officio)</td>
                                                        <td>Dr. Dip Narayain Singh or his nominee</td>
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
                                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-2"
                                                style="font-size: 16px;">
                                                <thead class="text-white align-middle" style="background-color: #27467a;">
                                                    <tr>
                                                        <th class="text-white">#</th>
                                                        <th class="text-white">Content</th>
                                                        <th class="text-white">Name of the Member</th>
                                                        <th class="text-white">Designation</th>
                                                        <th class="text-white">Designation in the committee</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="mobile-para1 align-middle"
                                                    style="background-color: #f9f9f9; text-align: start;">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Head of the Department</td>
                                                        <td>Dr. Hari Prasad Agarwal, RSA</td>
                                                        <td>Professor</td>
                                                        <td>Chairperson</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">Two Professors</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">3</td>
                                                        <td rowspan="2">
                                                            Two Associate Professors – one of them will be the member
                                                            secretary
                                                        </td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">
                                                            Two Assistant Professors holding Ph.D. degree
                                                        </td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3">5</td>
                                                        <td rowspan="3">
                                                            Three external members not below the rank of Professors,
                                                            including members from an allied department, who will be
                                                            nominated by the URC
                                                        </td>
                                                        <td>Prof. (Dr.) Shila Bora</td>
                                                        <td>Professor, RSHSS, RGU</td>
                                                        <td>External Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prof. (Dr.) Krishna Barua</td>
                                                        <td>Professor, RSL, RGU</td>
                                                        <td>External Member</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prof. (Dr.) Suresh Chandra Nayak</td>
                                                        <td>Professor, RSCOM</td>
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
