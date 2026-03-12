@extends('frontend.master')
@section('content')
    <style>
        /* PAGE */

        .sa-page {
            font-family: "Times New Roman", serif;
            background: #f5f5f5;
            color: #333;
        }

        /* HERO */

        .sa-hero {
            width: 100%;
            overflow: hidden;
        }

        .sa-hero img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ABOUT SECTION */

        .sa-about-section {
            padding: 4rem 0;
        }

        .sa-title {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            font-weight: 700;
            color: #27467A;
            margin-bottom: 1rem;
        }

        .sa-title span {
            color: #f39c12;
        }

        /* LINKS */

        .sa-links-box {
            background: #e7dfd2;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .sa-links-title {
            font-weight: 700;
            margin-bottom: 1rem;
            color: #27467A;
        }

        .sa-links-list {
            padding-left: 1rem;
            margin: 0;
        }

        .sa-links-list li {
            margin-bottom: 0.5rem;
        }

        .sa-links-list a {
            text-decoration: none;
            color: #27467A;
            font-size: 1.0rem;
        }

        /* ABOUT TEXT */

        .sa-about-text {
            font-size: 1.5rem;
            line-height: 1.7;
            color: #555;
            text-align: justify;
        }

        /* FUNCTIONS */

        .sa-functions-section {
            padding: 3rem 0 4rem 0;
        }

        .sa-functions-title {
            text-align: center;
            font-size: clamp(2rem, 4vw, 2.6rem);
            font-weight: 700;
            color: #27467A;
            margin-bottom: 2.5rem;
        }

        .sa-functions-title span {
            color: #f39c12;
        }

        /* CARDS */

        .sa-card {
            background: #e7dfd2;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
            height: 100%;
            position: relative;
        }

        .sa-card-title {
            font-size: 1.7rem;
            font-weight: 700;
            color: #27467A;
            margin-bottom: 0.6rem;
        }

        .sa-card-title span {
            color: #f39c12;
        }

        .sa-card p {
            font-size: 1.0rem;
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        /* CORNER ACCENT */

        .sa-card:after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            border-width: 0 0 1.6rem 1.6rem;
            border-style: solid;
            border-color: transparent transparent #f39c12 transparent;
            border-radius: 0 0 0.4rem 0;
        }

        /* BOTTOM TEXT */

        .sa-bottom-text {
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
            color: #27467A;
            margin-top: 2rem;
        }

        /* MOBILE IMPROVEMENTS */

        @media (max-width:768px) {

            .sa-about-section {
                padding: 2.5rem 0;
            }

            .sa-functions-section {
                padding: 2.5rem 0;
            }

            .sa-links-box {
                margin-bottom: 1rem;
            }



        }
    </style>

    <!-- for mobile query  -->
    <style>
        /* Mobile (Up to 767px) */
        @media only screen and (max-width: 767px) {
            .website {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        /* Tablet (768px - 1024px) */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {

            /* CSS rules for tablets */
            .website {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        /* Laptop (1025px - 1280px) */
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {

            /* CSS rules for laptops */
            .website {
                display: block;
            }

            .mobile {
                display: none;
            }
        }

        /* Desktop (1281px and above) */
        @media only screen and (min-width: 1281px) {

            /* CSS rules for desktops */
            .website {
                display: block;
            }

            .mobile {
                display: none;
            }
        }
    </style>

        <div class="mobile">
            @include('frontend/components/mobileheader')
        <section class="sa-hero" style="padding-top: 100px; position: relative;">

            <!-- insert hero image -->
            <img src="https://www.rgu.ac/mobile-assets/student-affairs/mobb-header.png" alt="Student Affairs">

        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section class="sa-hero">

            <!-- insert hero image -->
            <img src="https://www.rgu.ac/mobile-assets/student-affairs/web-header.png" alt="Student Affairs">

        </section>

    </div>


    <!-- ABOUT -->

    <section class="sa-about-section text-dark">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="sa-links-box">

                        <h5 class="sa-links-title">Related Links</h5>

                        <ul class="sa-links-list">

                            <li><a href="https://www.rgu.ac/clubs ">Clubs</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Student_Council_SOP.pdf ">Students
                                    Council SOP</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/StudentCouncil202223.pdf ">Students
                                    Council 2022 - 2023</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Club-Activities-Report-2022-2023.pdf ">Activity
                                    Report 2022 - 2023</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Club-Activities-Report-2023-2024.pdf ">Activity
                                    Report 2023 - 2024</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Report-of-Cultural-Activities.pdf ">Reports
                                    on Cultural Festivals</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Report-of-Sports-Competitions.pdf ">Reports
                                    on Sports Festivals</a></li>
                            <li><a target="_blank"
                                    href="https://www.rgu.ac/mobile-assets/student-affairs/Reports-of-Technical-Fests.pdf ">Reports
                                    on Technical Fest</a></li>

                        </ul>

                    </div>

                </div>


                <div class="col-lg-8">

                    <h2 class="sa-title">
                        About Student <span>Affairs</span>
                    </h2>

                    <p class="sa-about-text">

                        Department of Student Welfare is an important department of The Assam Royal Global University
                        catering to the student welfare activities and dedicated to enhancing the overall student
                        experience outside the classroom.

                    </p>

                    <p class="sa-about-text">

                        The objectives of DSW includes holistic development, community building, essential support
                        services, skill development, and nurtures leadership qualities and teamwork through various
                        programmes and activities.

                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- FUNCTIONS -->

    <section class="sa-functions-section text-dark">

        <div class="container">

            <h2 class="sa-functions-title">
                Key Functions <span>And Responsibilities</span>
            </h2>


            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Student <span>Support</span></h6>
                        <p><b>Counselling:</b> Providing mental health support, counselling, and therapy.</p>
                        <p><b>Health Services:</b> Offering medical care, health education, and wellness programmes.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Residential <span>Life</span></h6>
                        <p><b>Housing:</b> Managing on-campus housing and assisting with off-campus housing resources.
                        </p>
                        <p><b>Residential programmes:</b> Organizing activities and programs to build community among
                            residents.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Student Activities <span>Organizations</span></h6>
                        <p><b>Clubs:</b> Supporting various student clubs and interest groups.</p>
                        <p><b>Leadership Development:</b> Offering leadership training and development opportunities
                            through departments and Student Council.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Career <span>Guidance</span></h6>
                        <p><b>Career Counselling:</b> Assisting students with career planning and job search
                            strategiesthrough Royal Centre for Corporate Relations.</p>
                        <p><b>Internships:</b> Connecting students with internship and employment opportunities.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Student <span>Support</span></h6>
                        <p><b>Cultural Programmes:</b> Promoting diversity and inclusion through events, fests, and
                            programmes.</p>
                        <p><b>Scholarship Support:</b> Providing resources and support for underrepresented student
                            groups through different scholarships.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Academic <span>Support</span></h6>
                        <p><b>Tutorial and Remedial support:</b> Offering academic assistance through remedial and
                            tutorial classes.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Student Conduct <span>and Discipline</span></h6>
                        <p><b>Code of Conduct:</b> Enforcing the university's code of conduct and handling disciplinary
                            matters.</p>
                        <p><b>Conflict Resolution:</b> Mediating conflicts and providing support for dispute resolution.
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Campus Safety <span>and Security</span></h6>
                        <p><b>Safety Protocols:</b> Implementing safety protocols and emergency response plans.</p>
                        <p><b>Security Services:</b> Ensuring the physical security of the campus with 24X7 campus
                            security in the form of digital and manual surveillance.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="sa-card">
                        <h6 class="sa-card-title">Extra-curricular <span>Activity</span></h6>
                        <p><b>Sports:</b> Offering sports facilities, fitness programs, and intramural sports.</p>
                        <p><b>Outdoor Activities:</b> Organizing outdoor recreational activities, field trips and
                            extension activities.</p>
                        <p><b>Club Services:</b> The 33 Clubs of the University function under the aegis of Student
                            Affairs cater to the different co-curricular and extra-curricular aspects of the University.
                        </p>
                    </div>
                </div>


            </div>


            <p class="sa-bottom-text">
                Student Affairs plays a pivotal role in shaping the university experience, contributing to student
                well-being, academic success, and personal growth.
            </p>


        </div>

    </section>
@endsection
