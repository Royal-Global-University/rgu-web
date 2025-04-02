@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img style="padding-top: 90px; position: relative;" src="mobile-assets/student-affairs/mobb-header.png" alt="">

        <section style="background-image: url(mobile-assets/student-affairs/mob-bg.png); background-size: cover;">

            <div class="container">

                <h2 class="mobile-headd2 text-center fw-bold kd-title-ani kd-split-text pt-3"
                    style="color: #27467A; font-weight: 900;">
                    About Student <span style="color: #FF9A1E; font-weight: 500;">Affairs</span></h2>

                <p class="mobile-para1" style="color: #264273; text-align: justify;">Department of Student Welfare is an
                    important department of The Assam Royal Global University catering to the student welfare activities and
                    dedicated to enhancing the overall student experience outside the classroom. The objectives of DSW includes
                    holistic development, community building, essential support services, skill development, and nurtures
                    leadership qualities and teamwork through various programmes and activities.
                </p>

                <div>
                    <img class="rounded" src="mobile-assets/student-affairs/mob-pic1.png" alt="">
                </div>

                <div class="card p-4 mt-4 mb-3"
                    style="background-color: #fdf7ed; box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.20);">
                    <h2 class="headd3" style="color: #264273; font-weight: 800;">Related Links</h2>
                    <hr>

                    <ul class="headd3" style="list-style-type: disc; list-style-position: inside;">
                        <li class="pt-1 para1" style="color: #264273;">
                            <a href="clubs.html" style="text-decoration: none; color: inherit;">
                                Clubs</i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Student_Council_SOP.pdf"
                                style="text-decoration: none; color: inherit;">
                                Students Council SOP <i class="fa fa-file-pdf-o" style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/StudentCouncil202223.pdf"
                                style="text-decoration: none; color: inherit;">
                                Students Council 2022 - 2023 <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Club-Activities-Report-2022-2023.pdf"
                                style="text-decoration: none; color: inherit;">
                                Activity Report 2022 - 2023 <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Club-Activities-Report-2023-2024.pdf"
                                style="text-decoration: none; color: inherit;">
                                Activity Report 2023 - 2024 <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Report-of-Cultural-Activities.pdf"
                                style="text-decoration: none; color: inherit;">
                                Reports on Cultural Festivals <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Report-of-Sports-Competitions.pdf"
                                style="text-decoration: none; color: inherit;">
                                Reports on Sports Festivals <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                        <li class="pt-1 para1" style="color: #264273;">
                            <a target="_blank" href="mobile-assets/student-affairs/Reports-of-Technical-Fests.pdf"
                                style="text-decoration: none; color: inherit;">
                                Reports on Technical Fest <i class="fa fa-file-pdf-o"
                                    style="color: #b30000; margin-right: 5px;"></i>
                            </a>
                        </li>
                    </ul>

                </div>

                <h2 class="mobile-headd2 text-center fw-bold kd-title-ani kd-split-text pt-3"
                    style="color: #27467A; font-weight: 900;">
                    Key Functions <br><span style="color: #FF9A1E; font-weight: 500;">and Responsibilities</span></h2>

                <div style="padding: 10px 0px;">

                    <div class="row">

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 250px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Student <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Counselling:</strong> Providing mental health support, counselling, and therapy.
                                        <br><br>
                                        <strong>Health Services:</strong> Offering medical care, health education, and wellness
                                        programmes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Residential <span style="color: #FF9A1E; font-weight: 500;">Life:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Housing and Accomodation:</strong> Managing on-campus housing and assisting with
                                        off-campus housing resources.
                                        <br><br>
                                        <strong>Residential programmes:</strong> Organizing activities and programs to build
                                        community among residents.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Student Activities <span style="color: #FF9A1E; font-weight: 500;">Organizations:</span>
                                    </h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Clubs:</strong> Supporting various student clubs and interest groups.
                                        <br><br>
                                        <strong>Leadership Development:</strong> Offering leadership training and development
                                        opportunities through departments and Student Council.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Career <span style="color: #FF9A1E; font-weight: 500;">Guidance:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Career Counselling:</strong> Assisting students with career planning and job
                                        search strategiesthrough Royal Centre for Corporate Relations.
                                        <br><br>
                                        <strong>Internships and Job Placements:</strong> Connecting students with internship and
                                        employment opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Student <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Cultural Programmes:</strong> Promoting diversity and inclusion through events,
                                        fests, and programmes.
                                        <br><br>
                                        <strong>Support for Marginalized Groups:</strong> Providing resources and support for
                                        underrepresented student groups through different scholarships.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 200px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Academic <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Tutorial and Remedial support:</strong> Offering academic assistance through
                                        remedial and tutorial classes.

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Student Conduct <span style="color: #FF9A1E; font-weight: 500;">and Discipline:</span>
                                    </h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Code of Conduct:</strong> Enforcing the university's code of conduct and
                                        handling disciplinary matters.
                                        <br><br>
                                        <strong>Conflict Resolution:</strong> Mediating conflicts and providing support for
                                        dispute resolution.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Campus Safety <span style="color: #FF9A1E; font-weight: 500;">and Security:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Safety:</strong> Implementing safety protocols and emergency response plans.
                                        <br><br>
                                        <strong>Security Services:</strong> Ensuring the physical security of the campus with
                                        24X7 campus security in the form of digital and manual surveillance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">

                                <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                    <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                        Extra-curricular <span style="color: #FF9A1E; font-weight: 500;">Activity:</span></h2>

                                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                                        <strong>Sports and Fitness:</strong> Offering sports facilities, fitness programs, and
                                        intramural sports.
                                        <br><br>
                                        <strong>Outdoor Activities:</strong> Organizing outdoor recreational activities, field
                                        trips and extension activities.
                                        <br><br>
                                        <strong>Club Services:</strong> The 33 Clubs of the University function under the aegis
                                        of Student Affairs cater to the different co-curricular and extra-curricular aspects of
                                        the University.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <h2 class="mobile-para1 fw-bold text-center pb-4" style="color: #27467A; ">
                    Student Affairs plays a pivotal role in shaping the university experience, contributing to student
                    well-being, academic success, and personal growth.
                </h2>

            </div>

        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <img src="mobile-assets/student-affairs/web-header.png" alt="">

        <section style="background-image: url(mobile-assets/student-affairs/web-bg.png); background-size: cover;">

            <div class="container pb-5 pt-5">
                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-5">

                        <div class="card p-4" style="background-color: #fdf7ed; box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.20);">
                            <h2 class="headd3" style="color: #264273; font-weight: 800;">Related Links</h2>
                            <hr>

                            <ul class="headd3" style="list-style-type: disc; list-style-position: inside;">

                                <li class="pt-1 para1" style="color: #264273;">
                                    <a href="clubs" style="text-decoration: none; color: inherit;">
                                        Clubs</i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Student_Council_SOP.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Students Council SOP <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/StudentCouncil202223.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Students Council 2022 - 2023 <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Club-Activities-Report-2022-2023.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Activity Report 2022 - 2023 <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Club-Activities-Report-2023-2024.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Activity Report 2023 - 2024 <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Report-of-Cultural-Activities.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Reports on Cultural Festivals <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Report-of-Sports-Competitions.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Reports on Sports Festivals <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                                <li class="pt-1 para1" style="color: #264273;">
                                    <a target="_blank" href="mobile-assets/student-affairs/Reports-of-Technical-Fests.pdf"
                                        style="text-decoration: none; color: inherit;">
                                        Reports on Technical Fest <i class="fa fa-file-pdf-o"
                                            style="color: #b30000; margin-right: 5px;"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-7">
                        <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-4"
                            style="color: #27467A; font-weight: 900; font-size: 50px; ">
                            About Student <span style="color: #FF9A1E; font-weight: 500;">Affairs</span></h2>

                        <p class="mobile-para1" style="color: #264273; text-align: justify;">Department of Student Welfare is an
                            important department of The Assam Royal Global University catering to the student welfare activities
                            and dedicated to enhancing the overall student experience outside the classroom. The objectives of
                            DSW includes holistic development, community building, essential support services, skill
                            development, and nurtures leadership qualities and teamwork through various programmes and
                            activities.
                        </p>

                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <h2 class="mobile-headd1 text-center fw-bold kd-title-ani kd-split-text pt-3"
                        style="color: #27467A; font-weight: 900; font-size: 50px; ">
                        Key Functions <span style="color: #FF9A1E; font-weight: 500;">and Responsibilities</span></h2>

                    <div style="padding: 40px 0px;">

                        <div class="row">

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Student <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Counselling:</strong> Providing mental health support, counselling, and
                                            therapy.
                                            <br><br>
                                            <strong>Health Services:</strong> Offering medical care, health education, and
                                            wellness programmes.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Residential <span style="color: #FF9A1E; font-weight: 500;">Life:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Housing and Accomodation:</strong> Managing on-campus housing and assisting
                                            with off-campus housing resources.
                                            <br><br>
                                            <strong>Residential programmes:</strong> Organizing activities and programs to build
                                            community among residents.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Student Activities <span
                                                style="color: #FF9A1E; font-weight: 500;">Organizations:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Clubs:</strong> Supporting various student clubs and interest groups.
                                            <br><br>
                                            <strong>Leadership Development:</strong> Offering leadership training and
                                            development opportunities through departments and Student Council.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Career <span style="color: #FF9A1E; font-weight: 500;">Guidance:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Career Counselling:</strong> Assisting students with career planning and job
                                            search strategiesthrough Royal Centre for Corporate Relations.
                                            <br><br>
                                            <strong>Internships and Job Placements:</strong> Connecting students with internship
                                            and employment opportunities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Student <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Cultural Programmes:</strong> Promoting diversity and inclusion through
                                            events, fests, and programmes.
                                            <br><br>
                                            <strong>Support for Marginalized Groups:</strong> Providing resources and support
                                            for underrepresented student groups through different scholarships.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 300px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Academic <span style="color: #FF9A1E; font-weight: 500;">Support:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Tutorial and Remedial support:</strong> Offering academic assistance through
                                            remedial and tutorial classes.

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Student Conduct <span style="color: #FF9A1E; font-weight: 500;">and
                                                Discipline:</span></h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Code of Conduct:</strong> Enforcing the university's code of conduct and
                                            handling disciplinary matters.
                                            <br><br>
                                            <strong>Conflict Resolution:</strong> Mediating conflicts and providing support for
                                            dispute resolution.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Campus Safety <span style="color: #FF9A1E; font-weight: 500;">and Security:</span>
                                        </h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Safety:</strong> Implementing safety protocols and emergency response plans.
                                            <br><br>
                                            <strong>Security Services:</strong> Ensuring the physical security of the campus
                                            with 24X7 campus security in the form of digital and manual surveillance.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fffeee; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 360px;">

                                    <div class="card-body d-flex flex-column flex-grow-1 p-4">

                                        <h2 class="mobile-headd2 pb-3" style="color: #27467A; font-weight: 700;">
                                            Extra-curricular <span style="color: #FF9A1E; font-weight: 500;">Activity:</span>
                                        </h2>

                                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                                            <strong>Sports and Fitness:</strong> Offering sports facilities, fitness programs,
                                            and intramural sports.
                                            <br><br>
                                            <strong>Outdoor Activities:</strong> Organizing outdoor recreational activities,
                                            field trips and extension activities.
                                            <br><br>
                                            <strong>Club Services:</strong> The 33 Clubs of the University function under the
                                            aegis of Student Affairs cater to the different co-curricular and extra-curricular
                                            aspects of the University.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h2 class="mobile-headd2 text-center pt-1 pb-4" style="color: #27467A; font-weight: 600; ">
                        Student Affairs plays a pivotal role in shaping the university experience, contributing to student
                        well-being, academic success, and personal growth.
                    </h2>
                </div>
            </section>

        </section>

    </div>
@endsection
