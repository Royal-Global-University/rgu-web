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

                <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Physics</span>
                </h1>

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
                    Applied and Pure Sciences (RSAPS)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="mobile-assets/department-all/dept-physics/head-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Department of Physics gained momentum with full-fledged UG and PG courses in 2017. The
                                department
                                offers Ph.D. programs with a total of 8 full-time faculties. The department is graced with
                                experienced
                                professors and one advisor. All the faculty members are Ph.D. holders with many research
                                papers in
                                reputed journals, and a dedicated laboratory in-charge to help the students individually
                                during the
                                laboratory period. Fully dedicated faculties from 9:00 am to 5:15 pm and all the
                                laboratories are well
                                equipped with all the necessary instruments with four laboratories, including one dark room
                                and one
                                research lab with remedial and guidance classes for different competitive examinations from
                                time to
                                time.
                            </p>

                        </div>
                    </div>
                </div>


                <div class="pt-3">

                    <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                        <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img src="mobile-assets/department-all/dept-physics/vision-mission-mob.png" alt="">
                </div>

            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container">
                <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size: 16px;">M.Sc. - Physics</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-MSc-Physics" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">2 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-MSc-Physics">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

                <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
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

                                    <!-- PG -->
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

                                    <!-- Doctoral -->
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
                                            style="background-color: #f9f9f9; ">

                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="display: flex; align-items: center; padding: 12px;">
                                                    <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                                        style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                    <div>
                                                        <div style="font-weight: bold; color: #27467A; ">
                                                            On 12th February 2018, the event "Student Interaction" was held.
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
                                                            On 27th July 2018, the "Student Development Program" was
                                                            conducted.
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
                                                            On 12th September 2018, the "Freshers’ Social Programme" was
                                                            organized.
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
                                                            On 26th September 2018, a "Visit to Tetelia School" took place.
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
                                                            On 12th October 2018, a field trip to "North Eastern Space
                                                            Applications Centre
                                                            (NESAC)" was organized.
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
                                                            On 15th and 16th November 2018, the "Science Conclave" was held.
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
                                                            On 18th January 2019, the "Re Orientation Programme" was held.
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
                                                            On 28th February 2019, the "National Science Day Celebration"
                                                            was organized.
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
                                                            On 29th April 2019, a "Parents teacher interaction" session took
                                                            place.
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
                                                            On 15th March 2019, an invited talk was delivered by Dr.
                                                            Gauranga Dhar Baruah.
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
                                                            On 6th August 2019, a "Student Development Programme" was
                                                            conducted.
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
                                                            On 18th–19th November 2019, an educational field trip to the
                                                            "Centre of Plasma
                                                            Physics" was organized.
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
                                                            On 14th February 2020, an educational trip to the Regional
                                                            Science Museum, Guwahati
                                                            was organized.
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
                                                            On 28th February 2020, the "National Science Day Celebration"
                                                            was held.
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
                                                            On 13th March 2020, an interactive session with Priyanka Das
                                                            Rajkakati took place.
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
                                                            On 3rd March 2021, the "National Science Day Celebration" was
                                                            held.
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
                                                            On 6th March 2021, a field trip to Umium was organized.
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
                                                            On 15th March 2021, a Parents Teachers Interaction session took
                                                            place.
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
                                                            On 1st and 2nd June 2021, the International Conference (Virtual)
                                                            on Emerging Areas in
                                                            Science &amp; Technology (EAST 2021) was conducted.
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
                                                            On 25th November 2021, an interactive session with Dr. Debashish
                                                            Borah, Department of
                                                            Physics, IIT Guwahati was held.
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
                                                            On 2nd December 2021, the PG 1st Semester Orientation Programme
                                                            was organized.
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
                                                            On 15th December 2021, a field trip to the Bureau of Indian
                                                            Standards (BIS)
                                                            Laboratory, Guwahati was organized.
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
                                                            On 28th February 2022, the "National Science Day" was
                                                            celebrated.
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
                                                            On 23rd April 2022, a field trip to the 7th Indian Industrial
                                                            Fair, UDYAM 2022,
                                                            Khanapara was organized.
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
                                                            On 28th April 2022, an interactive session with an ex-student
                                                            was conducted.
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
                                                            From 27th to 29th April 2022, an Interschool Volleyball
                                                            Tournament was held.
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
                                                            On 1st June 2022, an interactive session with Dr. Angaraj Duara,
                                                            Researcher at the
                                                            Space Research Center, University of Leicester, UK, took place.
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
                                                            On 16th August 2022, a Reorientation Program for the existing
                                                            students was organized.
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
                                                            On 30th August 2022, an interactive session was conducted.
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
                                                            From 9th to 13th September 2022, the Orientation Programme (PG)
                                                            was held.
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
                                                            On 31st October 2022, an interactive session was organized.
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
                                                            On 3rd December 2022, a field trip was conducted.
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
                                                            On 17th December 2022, another field trip was organized.
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
                                                            On 28th February 2023, the "National Science Day Celebration"
                                                            was held.
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
                                                            On 28th February 2023, the departmental magazine was launched.
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
                                                            On 2nd March 2023, a Talk-cum-Interactive Session was conducted.
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
                                                            From 15th to 18th March 2023, a Cricket Tournament was
                                                            organized.
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
                                                            On 24th March 2023, an Outreach Program was conducted.
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
                                                            On 6th and 7th December 2023, an Online Lecture Series was
                                                            organized.
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
                                                            On 10th September 2024, an Outreach Program was organized.
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
                                                            On 16th September 2024, a Career Guidance Program was conducted.
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
                                                            On 26th September 2024, a Badminton Tournament was organized in
                                                            collaboration with
                                                            Arya Vidyapeeth College, Guwahati.
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
                                                            On 28th October 2024, a Webinar on Simulation Technique with
                                                            Python Coding was
                                                            delivered by Dr. Subir Sarkar.
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
                                                            On 29th October 2024, an Invited Talk by Dr. Angaraj Duara was
                                                            held.
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
                                                            On 21st February 2025, a field visit to the Center of Plasma
                                                            Physics – Institute for
                                                            Plasma Research (CPP-IPR), Guwahati was organized.
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
                                                            On 24th February 2025, an invited talk by Dr. Hemen Kumar Kalita
                                                            was conducted.
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
                                                            On 28th February 2025, the "National Science Day Celebration"
                                                            was held.
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
                                                            On 19th March 2025, an invited talk by Dr. Namrata Gogoi took
                                                            place.
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
                                                            On 28th March 2025, an invited talk by Prof. Bipin Kumar Gupta
                                                            was organized.
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
                                                            On 14th May 2025, a one-day seminar on the Centenary Anniversary
                                                            of Quantum Mechanics
                                                            was conducted.
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
                                <a href="department-new-rshss-sociology-events"
                                    style="display: inline-block; padding: 10px 28px;
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
                <!-- mobile events  -->

            </div>
            <!-- events and highlights  -->


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
                <!-- floating button  -->
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
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Physics</span>
                            </h1>

                            <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                                Applied and Pure Sciences (RSAPS)
                            </h2>
                        </div>

                        <div class="container p-4">
                            <div class="row align-items-center gx-5">

                                <div class="col-lg-6 text-center">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div>
                                            <img class="rounded w-60" decoding="async"
                                                src="mobile-assets/department-all/dept-physics/head-img.png"
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
                        </div>


                        <div style="background-color: #fff;">
                            <div class="p-5">
                                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the
                                        Department</span>
                                </h1>

                                <img class="w-100" src="mobile-assets/department-all/dept-physics/vision-mission.png"
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

                                <span style="font-size:22px;">M.Sc. - Physics</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-MSc-Physics" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration:
                                        2 years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-MSc-Physics">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:22px; padding-right: 20px;">B.Sc. - Physics</span> | <span
                                    style="font-size:22px; padding-left: 16px; font-weight: 300px !important;">Honours /
                                    Honours with
                                    Research</span>

                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-b-sc-physics" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration:
                                        4 years as per
                                        NEP</span>
                                    <span>
                                        <a class="para1 fw-bold" target="_blank"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                                            href="programs-b-sc-physics">View Details</a>
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

                                                            <a href="mobile-assets/department-all/dept-physics/updated-syllabus/structure-ug.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                                - Physics
                                                                <i class="fa fa-download ms-2"
                                                                    style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-physics/updated-syllabus/detailed-syllabus-ug.pdf"
                                                                target="_blank" style="color: #27467A;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus -
                                                                Physics
                                                                <i class="fa fa-download ms-2"
                                                                    style="color: #FF9A1E;"></i>
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

                                                            <a href="mobile-assets/department-all/dept-physics/updated-syllabus/structure-pg.pdf"
                                                                target="_blank"
                                                                style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus
                                                                - Physics
                                                                <i class="fa fa-download ms-2"
                                                                    style="color: #FF9A1E;"></i>
                                                            </a>

                                                            <a href="mobile-assets/department-all/dept-physics/updated-syllabus/detailed-syllabus-pg.pdf"
                                                                target="_blank"
                                                                style="color: #27467A; font-weight: 500; text-decoration: none;">
                                                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus -
                                                                Physics
                                                                <i class="fa fa-download ms-2"
                                                                    style="color: #FF9A1E;"></i>
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
                            <div class="col-lg-6">
                                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                                    Events
                                </h2>

                                <div style="max-width: 100%; position: relative;">
                                    <div style="border: 1px solid #ccc;">

                                        <div id="scrollContainer"
                                            style="height: 360px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                                            <table class="table table-borderless mb-0"
                                                style="font-size: 16px; width: 100%;">
                                                <tbody class="para1" id="scrollContent"
                                                    style="background-color: #f9f9f9; ">

                                                    <tr style="border-bottom: 1px solid #ddd;">
                                                        <td style="display: flex; align-items: center; padding: 12px;">
                                                            <img src="mobile-assets/department-all/imgg.jpg"
                                                                alt="Event Image"
                                                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                                            <div>
                                                                <div style="font-weight: bold; color: #27467A; ">
                                                                    On 12th February 2018, the event "Student Interaction"
                                                                    was held.
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
                                                                    On 27th July 2018, the "Student Development Program" was
                                                                    conducted.
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
                                                                    On 12th September 2018, the "Freshers’ Social Programme"
                                                                    was organized.
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
                                                                    On 26th September 2018, a "Visit to Tetelia School" took
                                                                    place.
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
                                                                    On 12th October 2018, a field trip to "North Eastern
                                                                    Space Applications Centre
                                                                    (NESAC)" was organized.
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
                                                                    On 15th and 16th November 2018, the "Science Conclave"
                                                                    was held.
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
                                                                    On 18th January 2019, the "Re Orientation Programme" was
                                                                    held.
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
                                                                    On 28th February 2019, the "National Science Day
                                                                    Celebration" was organized.
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
                                                                    On 29th April 2019, a "Parents teacher interaction"
                                                                    session took place.
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
                                                                    On 15th March 2019, an invited talk was delivered by Dr.
                                                                    Gauranga Dhar Baruah.
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
                                                                    On 6th August 2019, a "Student Development Programme"
                                                                    was conducted.
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
                                                                    On 18th–19th November 2019, an educational field trip to
                                                                    the "Centre of Plasma
                                                                    Physics" was organized.
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
                                                                    On 14th February 2020, an educational trip to the
                                                                    Regional Science Museum, Guwahati
                                                                    was organized.
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
                                                                    On 28th February 2020, the "National Science Day
                                                                    Celebration" was held.
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
                                                                    On 13th March 2020, an interactive session with Priyanka
                                                                    Das Rajkakati took place.
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
                                                                    On 3rd March 2021, the "National Science Day
                                                                    Celebration" was held.
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
                                                                    On 6th March 2021, a field trip to Umium was organized.
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
                                                                    On 15th March 2021, a Parents Teachers Interaction
                                                                    session took place.
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
                                                                    On 1st and 2nd June 2021, the International Conference
                                                                    (Virtual) on Emerging Areas in
                                                                    Science &amp; Technology (EAST 2021) was conducted.
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
                                                                    On 25th November 2021, an interactive session with Dr.
                                                                    Debashish Borah, Department of
                                                                    Physics, IIT Guwahati was held.
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
                                                                    On 2nd December 2021, the PG 1st Semester Orientation
                                                                    Programme was organized.
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
                                                                    On 15th December 2021, a field trip to the Bureau of
                                                                    Indian Standards (BIS)
                                                                    Laboratory, Guwahati was organized.
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
                                                                    On 28th February 2022, the "National Science Day" was
                                                                    celebrated.
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
                                                                    On 23rd April 2022, a field trip to the 7th Indian
                                                                    Industrial Fair, UDYAM 2022,
                                                                    Khanapara was organized.
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
                                                                    On 28th April 2022, an interactive session with an
                                                                    ex-student was conducted.
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
                                                                    From 27th to 29th April 2022, an Interschool Volleyball
                                                                    Tournament was held.
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
                                                                    On 1st June 2022, an interactive session with Dr.
                                                                    Angaraj Duara, Researcher at the
                                                                    Space Research Center, University of Leicester, UK, took
                                                                    place.
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
                                                                    On 16th August 2022, a Reorientation Program for the
                                                                    existing students was organized.
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
                                                                    On 30th August 2022, an interactive session was
                                                                    conducted.
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
                                                                    From 9th to 13th September 2022, the Orientation
                                                                    Programme (PG) was held.
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
                                                                    On 31st October 2022, an interactive session was
                                                                    organized.
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
                                                                    On 3rd December 2022, a field trip was conducted.
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
                                                                    On 17th December 2022, another field trip was organized.
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
                                                                    On 28th February 2023, the "National Science Day
                                                                    Celebration" was held.
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
                                                                    On 28th February 2023, the departmental magazine was
                                                                    launched.
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
                                                                    On 2nd March 2023, a Talk-cum-Interactive Session was
                                                                    conducted.
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
                                                                    From 15th to 18th March 2023, a Cricket Tournament was
                                                                    organized.
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
                                                                    On 24th March 2023, an Outreach Program was conducted.
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
                                                                    On 6th and 7th December 2023, an Online Lecture Series
                                                                    was organized.
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
                                                                    On 10th September 2024, an Outreach Program was
                                                                    organized.
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
                                                                    On 16th September 2024, a Career Guidance Program was
                                                                    conducted.
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
                                                                    On 26th September 2024, a Badminton Tournament was
                                                                    organized in collaboration with
                                                                    Arya Vidyapeeth College, Guwahati.
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
                                                                    On 28th October 2024, a Webinar on Simulation Technique
                                                                    with Python Coding was
                                                                    delivered by Dr. Subir Sarkar.
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
                                                                    On 29th October 2024, an Invited Talk by Dr. Angaraj
                                                                    Duara was held.
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
                                                                    On 21st February 2025, a field visit to the Center of
                                                                    Plasma Physics – Institute for
                                                                    Plasma Research (CPP-IPR), Guwahati was organized.
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
                                                                    On 24th February 2025, an invited talk by Dr. Hemen
                                                                    Kumar Kalita was conducted.
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
                                                                    On 28th February 2025, the "National Science Day
                                                                    Celebration" was held.
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
                                                                    On 19th March 2025, an invited talk by Dr. Namrata Gogoi
                                                                    took place.
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
                                                                    On 28th March 2025, an invited talk by Prof. Bipin Kumar
                                                                    Gupta was organized.
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
                                                                    On 14th May 2025, a one-day seminar on the Centenary
                                                                    Anniversary of Quantum Mechanics
                                                                    was conducted.
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

                            <div class="col-lg-6">
                                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                                    Departmental <span style="color: #FF9A1E; font-weight: 500;">Highlights</span></h2>

                                <!-- Carousel with Popup Image -->

                                <div id="customCarouselDeptPA" class="carousel slide unique-carousel-deptpa"
                                    data-bs-ride="carousel" data-bs-interval="2000"
                                    style="max-width:100%; margin:auto;">

                                    <!-- Indicators -->
                                    <div class="carousel-indicators" style="bottom:5px;">
                                        <button type="button" data-bs-target="#customCarouselDeptPA"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"
                                            style="width:12px;height:12px;border-radius:50%;"></button>

                                    </div>

                                    <!-- Slides -->
                                    <div class="carousel-inner" style="overflow:hidden;">
                                        <div class="carousel-item active">
                                            <img src="mobile-assets/department-all/dept-physics/highlights/achievement1.png"
                                                class="d-block w-100" alt="Slide 1"
                                                style="max-height:500px; object-fit:cover;">
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#customCarouselDeptPA"
                                data-bs-slide="prev" style="width:5%;">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#customCarouselDeptPA"
                                data-bs-slide="next" style="width:5%;">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                <span class="visually-hidden">Next</span>
                              </button> -->

                                </div>

                            </div>

                        </div>
                        <!-- events  -->

                    </div>

                </section>

                <!-- event 1  -->
                <div class="container mt-2">

                    <h3 class="mobile-headd2 fw-bold text-left mt-3" style="color: #243B95;">
                        1. National Conference on Frontiers in Modern Physics, Astrophysics and Cosmology.
                    </h3>

                    <section style="background-color: #fff4e3; padding-bottom: 30px;">

                        <div style="margin-top: 10px;" class="endless-scroll-container">


                            <div class="scroll-track-wrapper" style="padding-top: 0px;">

                                <div class="scroll-content-images unique-set-alpha">

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/dept-physics/events/1.jpeg"
                                            style="height: 340px;" alt="Image 1" class="scroller-image"
                                            onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/dept-physics/events/2.jpeg"
                                            style="height: 340px;" alt="Image 2" class="scroller-image"
                                            onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/dept-physics/events/3.jpeg"
                                            style="height: 340px;" alt="Image 2" class="scroller-image"
                                            onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/dept-physics/events/4.jpeg"
                                            style="height: 340px;" alt="Image 2" class="scroller-image"
                                            onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/dept-physics/events/5.jpeg"
                                            style="height: 340px;" alt="Image 2" class="scroller-image"
                                            onclick="openLightbox(this.src)">
                                    </div>



                                </div>

                                <div class="scroll-content-images unique-set-beta">

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/rset/ce/events/1.jpeg" alt="Image 1"
                                            class="scroller-image" onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/rset/ce/events/2.jpeg" alt="Image 2"
                                            class="scroller-image" onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/rset/ce/events/3.jpeg" alt="Image 2"
                                            class="scroller-image" onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/rset/ce/events/4.jpeg" alt="Image 2"
                                            class="scroller-image" onclick="openLightbox(this.src)">
                                    </div>

                                    <div class="slider-image-frame">
                                        <img src="mobile-assets/department-all/rset/ce/events/5.jpeg" alt="Image 2"
                                            class="scroller-image" onclick="openLightbox(this.src)">
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
                            <span class="close-btn">&times;</span>

                            <div class="lightbox-controls">
                                <button id="zoom-in" title="Zoom In">+</button>
                                <button id="zoom-out" title="Zoom Out">-</button>
                            </div>

                            <img class="lightbox-content" id="lightbox-img" src="" alt="">
                        </div>

                        <style>
                            /*
                * 1. Setup the main container and animation logic (Identical to list version)
                */
                            .endless-scroll-container {
                                margin: auto;
                                width: 97%;
                                overflow: hidden;
                                padding: 10px 0;
                                border-bottom: 2px solid #EF991F;
                            }

                            .scroll-track-wrapper {
                                display: flex;
                                width: fit-content;
                                animation: scroll-movement 60s linear infinite;
                            }

                            .scroll-track-wrapper:hover {
                                animation-play-state: paused;
                            }

                            /*
                * 2. Style the Image Frames and Images
                */
                            .scroll-content-images {
                                display: flex;
                            }

                            /* --- THIS IS THE MODIFIED RULE --- */
                            .slider-image-frame {
                                width: 600px;
                                /* <-- CHANGED from 150px */
                                margin-right: 20px;
                                flex-shrink: 0;
                                overflow: hidden;
                                border: 1px solid #d1d1d1;
                                border-radius: 8px;
                                /* <-- CHANGED from 50px */
                                background-color: #fff;
                            }

                            /* --- END OF MODIFIED RULE --- */

                            .scroller-image {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                display: block;
                                cursor: pointer;
                                transition: opacity 0.3s;
                            }

                            /* Lightbox Styles */
                            .lightbox {
                                display: none;
                                position: fixed;
                                z-index: 1000;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(222, 222, 222, 0.942);
                                overflow: hidden;
                                /* Changed from auto to hidden to prevent scrollbars */
                            }

                            .lightbox-content {
                                margin: auto;
                                display: block;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%) scale(1);
                                /* Initial state */
                                max-width: 90%;
                                max-height: 90%;
                                width: auto;
                                height: auto;
                                object-fit: contain;
                                animation-name: zoom;
                                animation-duration: 0.6s;
                                cursor: grab;
                                /* NEW: Indicate it's grabbable */
                                transition: transform 0.2s ease-out;
                                /* NEW: Smooth transitions for zoom/pan */
                            }

                            .close-btn {
                                position: absolute;
                                top: 20px;
                                right: 35px;
                                color: #fff;
                                font-size: 40px;
                                font-weight: bold;
                                transition: 0.3s;
                                cursor: pointer;
                                z-index: 1002;
                                /* Ensure it's on top of controls */
                            }

                            .close-btn:hover,
                            .close-btn:focus {
                                color: #bbb;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            /* NEW: Styles for Zoom Controls */
                            .lightbox-controls {
                                position: absolute;
                                top: 25px;
                                right: 90px;
                                /* Position next to the close button */
                                z-index: 1001;
                                display: flex;
                                gap: 10px;
                            }

                            .lightbox-controls button {
                                background-color: rgba(30, 30, 30, 0.7);
                                border: 1px solid #fff;
                                color: #fff;
                                font-size: 24px;
                                font-weight: bold;
                                width: 40px;
                                height: 40px;
                                cursor: pointer;
                                border-radius: 5px;
                                transition: background-color 0.3s;
                                line-height: 1;
                            }

                            .lightbox-controls button:hover {
                                background-color: rgba(0, 0, 0, 0.9);
                            }


                            @keyframes zoom {
                                from {
                                    transform: translate(-50%, -50%) scale(0.1);
                                }

                                to {
                                    transform: translate(-50%, -50%) scale(1);
                                }
                            }

                            /*
                * 3. Define the Keyframes for the Movement
                */
                            @keyframes scroll-movement {
                                from {
                                    transform: translateX(0%);
                                }

                                to {
                                    transform: translateX(-50%);
                                }
                            }
                        </style>

                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const setAlpha = document.querySelector('.unique-set-alpha');
                                const trackWrapper = document.querySelector('.scroll-track-wrapper');

                                if (setAlpha && !document.querySelector('.unique-set-beta')) {
                                    const setBeta = setAlpha.cloneNode(true);
                                    setBeta.classList.remove('unique-set-alpha');
                                    setBeta.classList.add('unique-set-beta');
                                    trackWrapper.appendChild(setBeta);
                                    console.log('Image slider duplicated successfully for infinite loop.');
                                }
                            });

                            // --- NEW/UPDATED: Lightbox and Zoom/Pan Logic ---

                            const lightbox = document.getElementById('lightbox');
                            const lightboxImg = document.getElementById('lightbox-img');
                            const zoomInBtn = document.getElementById('zoom-in');
                            const zoomOutBtn = document.getElementById('zoom-out');

                            // State variables
                            let scale = 1;
                            let isDragging = false;
                            let start = {
                                x: 0,
                                y: 0
                            };
                            let pan = {
                                x: 0,
                                y: 0
                            };

                            // Function to apply the current transform to the image
                            function updateImageTransform() {
                                // We use calc() to combine the initial centering (-50%) with the pixel-based panning
                                lightboxImg.style.transform = `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;
                            }

                            function openLightbox(src) {
                                // Reset state every time a new image is opened
                                scale = 1;
                                isDragging = false;
                                pan = {
                                    x: 0,
                                    y: 0
                                };
                                updateImageTransform(); // Apply initial transform

                                lightbox.style.display = 'block';
                                lightboxImg.src = src;
                            }

                            function closeLightbox(event) {
                                if (event.target === lightbox || event.target.classList.contains('close-btn')) {
                                    lightbox.style.display = 'none';
                                }
                            }

                            // --- Event Listeners for Zoom and Pan ---

                            zoomInBtn.addEventListener('click', (e) => {
                                e.stopPropagation(); // Prevent closing lightbox when clicking button
                                scale += 0.2;
                                updateImageTransform();
                            });

                            zoomOutBtn.addEventListener('click', (e) => {
                                e.stopPropagation(); // Prevent closing lightbox when clicking button
                                if (scale > 1) {
                                    scale -= 0.2;
                                    if (scale < 1) {
                                        scale = 1;
                                    }
                                }
                                // If we zoom all the way out, reset the pan to center the image
                                if (scale === 1) {
                                    pan = {
                                        x: 0,
                                        y: 0
                                    };
                                }
                                updateImageTransform();
                            });

                            lightboxImg.addEventListener('mousedown', (e) => {
                                // Panning only works if the image is zoomed in
                                if (scale > 1) {
                                    e.preventDefault();
                                    isDragging = true;
                                    // Record starting point relative to current pan position
                                    start = {
                                        x: e.clientX - pan.x,
                                        y: e.clientY - pan.y
                                    };
                                    lightboxImg.style.cursor = 'grabbing';
                                }
                            });

                            // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
                            window.addEventListener('mousemove', (e) => {
                                if (isDragging) {
                                    e.preventDefault();
                                    pan = {
                                        x: e.clientX - start.x,
                                        y: e.clientY - start.y
                                    };
                                    updateImageTransform();
                                }
                            });

                            window.addEventListener('mouseup', (e) => {
                                if (isDragging) {
                                    isDragging = false;
                                    lightboxImg.style.cursor = 'grab';
                                }
                            });
                        </script>

                    </section>

                </div>
                <!-- event 1  -->

            </section>

        </div>

        <div id="bos" class="container pb-5 pt-5">

            <!-- Container -->
            <div id="drc" style="margin:0 auto;">

                <!-- Row 1 -->
                <style>
@media (min-width: 768px) {
  .colBox {
    flex: 1 1 calc(50% - 8px) !important;
    max-width: calc(50% - 8px) !important;
  }
}
</style>

<div style="display:flex; flex-wrap:wrap; gap:16px; margin-bottom:16px;">

  <!-- ================= BOS ================= -->
  <div class="colBox" style="flex:1 1 100%; max-width:100%; box-sizing:border-box;">
    <div style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">

      <button id="accBtn1" onclick="toggleAcc(1)" style="width:100%; text-align:left; padding:16px 20px; border:0;
      background:linear-gradient(135deg,#24477f,#1a365d);
      color:white; font-weight:600; font-size:18px; cursor:pointer;">
        <i class="fa fa-users me-2"></i> The Board of Studies
        <span id="icon1" style="float:right; font-size:20px;">＋</span>
      </button>

      <div id="accPanel1" style="display:none; padding:20px; background:#f9fbfd;">

        <div class="table-responsive">
          <table style="width:100%; border-collapse:collapse; font-family:Arial;">

            <thead style="background:#27467a; color:#fff;">
              <tr>
                <th style="padding:10px; border:1px solid #ddd;">S.No</th>
                <th style="padding:10px; border:1px solid #ddd;">Name & Profile</th>
                <th style="padding:10px; border:1px solid #ddd;">Category</th>
                <th style="padding:10px; border:1px solid #ddd;">Role</th>
              </tr>
            </thead>

            <tbody style="background:#f9f9f9;" class="text-dark">

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">1</td>
                <td style="padding:10px; border:1px solid #ddd;">
                  Dr. Maidul Islam, Assistant Professor & Co-ordinator
                </td>
                <td style="padding:10px; border:1px solid #ddd;">Ex-Officio</td>
                <td style="padding:10px; border:1px solid #ddd;">Convener</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">2</td>
                <td style="padding:10px; border:1px solid #ddd;">
                  • Prof. (Dr.) Amarendra Rajput <br>
                  • Dr. Devika Phukan <br>
                  • Dr. Sankar Barman <br>
                  • Dr. Bornali Chetia <br>
                  • Dr. Koushik Saikia <br>
                  • Dr. Nitu Borgohain
                </td>
                <td style="padding:10px; border:1px solid #ddd;">Ex-Officio</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td colspan="4" style="text-align:center; padding:10px; font-weight:600;">
                  External Academic Member
                </td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">3</td>
                <td style="padding:10px; border:1px solid #ddd;">
                  Prof. (Dr.) Anurup Gohain Barua, Professor, Department of Physics, Gauhati University.
                </td>
                <td style="padding:10px; border:1px solid #ddd;">Nominated</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td colspan="4" style="text-align:center; padding:10px; font-weight:600;">
                  External Industry Member
                </td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">4</td>
                <td style="padding:10px; border:1px solid #ddd;">
                  Mr. Hemendra Ch. Das
Rtd. Group General Manager, Oil India.
                </td>
                <td style="padding:10px; border:1px solid #ddd;">Nominated</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= DRC ================= -->
  <div class="colBox" style="flex:1 1 100%; max-width:100%; box-sizing:border-box;">
    <div style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">

      <button id="accBtn2" onclick="toggleAcc(2)" style="width:100%; text-align:left; padding:16px 20px; border:0;
      background:linear-gradient(135deg,#24477f,#1a365d);
      color:white; font-weight:600; font-size:18px; cursor:pointer;">
        <i class="fa fa-flask me-2"></i> Departmental Research Committee (DRC)
        <span id="icon2" style="float:right; font-size:20px;">＋</span>
      </button>

      <div id="accPanel2" style="display:none; padding:20px; background:#f9fbfd;">

        <div class="table-responsive">
          <table style="width:100%; border-collapse:collapse;" class="text-dark">

            <thead style="background:#27467a; color:white;">
              <tr>
                <th style="padding:10px; border:1px solid #ddd;">#</th>
                <th style="padding:10px; border:1px solid #ddd;">Content</th>
                <th style="padding:10px; border:1px solid #ddd;">Name</th>
                <th style="padding:10px; border:1px solid #ddd;">Designation</th>
                <th style="padding:10px; border:1px solid #ddd;">Role</th>
              </tr>
            </thead>

            <tbody style="background:#f9f9f9;">

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">1</td>
                <td style="padding:10px; border:1px solid #ddd;">Head of Department</td>
                <td style="padding:10px; border:1px solid #ddd;">Dr. Maidul Islam</td>
                <td style="padding:10px; border:1px solid #ddd;">Assistant Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Chairperson</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">2</td>
                <td style="padding:10px; border:1px solid #ddd;">Two Professors, including the Dean of the School</td>
                <td style="padding:10px; border:1px solid #ddd;">Prof. Amarendra Rajput</td>
                <td style="padding:10px; border:1px solid #ddd;">Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">3</td>
                <td></td>
                <td style="padding:10px; border:1px solid #ddd;">Prof. Aniruddha Chatterjee</td>
                <td style="padding:10px; border:1px solid #ddd;">Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">4</td>
                <td style="padding:10px; border:1px solid #ddd;">Two Associate Professors – one of them will be the member secretary</td>
                <td style="padding:10px; border:1px solid #ddd;">Dr. Sankar Barman</td>
                <td style="padding:10px; border:1px solid #ddd;">Associate Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Member Secretary</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">5</td>
                <td></td>
                <td style="padding:10px; border:1px solid #ddd;">Dr. Devika Phukan</td>
                <td style="padding:10px; border:1px solid #ddd;">Associate Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">6</td>
                <td style="padding:10px; border:1px solid #ddd;">Two Assistant Professors holding Ph.D. degree</td>
                <td style="padding:10px; border:1px solid #ddd;">Dr. Bornali Chetia</td>
                <td style="padding:10px; border:1px solid #ddd;">Assistant Professor</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">7</td>
                <td></td>
                <td style="padding:10px; border:1px solid #ddd;">Dr. Faizuddin Ahmed</td>
                <td style="padding:10px; border:1px solid #ddd;">Assistant Professor (Research)</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
              </tr>

              <tr>
                <td style="padding:10px; border:1px solid #ddd;">8</td>
                <td style="padding:10px; border:1px solid #ddd;">Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC</td>
                <td style="padding:10px; border:1px solid #ddd;">Prof. Anurup Gohain Barua</td>
                <td style="padding:10px; border:1px solid #ddd;">Gauhati University</td>
                <td style="padding:10px; border:1px solid #ddd;">Member</td>
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
                const accPairs = [{
                        btn: 'accBtn1',
                        panel: 'accPanel1'
                    },
                    {
                        btn: 'accBtn2',
                        panel: 'accPanel2'
                    }
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

                    b.addEventListener('click', function() {
                        const isOpen = this.getAttribute('aria-expanded') === 'true';
                        if (isOpen) {
                            panel.style.display = 'none';
                            this.setAttribute('aria-expanded', 'false');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '＋';
                        } else {
                            closeAll();
                            panel.style.display = 'block';
                            this.setAttribute('aria-expanded', 'true');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '−';
                        }
                    });
                });

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') closeAll();
                });
            </script>

        </div>

        <script>
            document.querySelectorAll('a.special-link').forEach(anchor => {
                anchor.addEventListener('mouseover', function() {
                    this.style.width = '200px';
                    this.querySelector('span').style.opacity = '1';
                });
                anchor.addEventListener('mouseout', function() {
                    this.style.width = '42px';
                    this.querySelector('span').style.opacity = '0';
                });
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>

    </div>
@endsection
