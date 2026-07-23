@extends('frontend/new-master')
@section('content')
        <style>

        .rgu-nss-page {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
            gap: 40px;

            max-width: 1600px;

            margin: auto;
            padding: 80px 4%;

            align-items: start;

            background: #f5f1ec;

            font-family: 'Poppins', sans-serif;
            color: #222;

            box-sizing: border-box;
        }

        .rgu-nss-page *,
        .rgu-nss-page *::before,
        .rgu-nss-page *::after {
            box-sizing: border-box;
        }


        /* =========================================
        SIDEBAR
========================================= */

        .rgu-nss-page .rgu-nss-sidebar {
            position: sticky;
            top: 30px;

            background: #fff;

            padding: 35px;

            border-radius: 28px;
            border: 1px solid #ececec;

            overflow: hidden;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .rgu-nss-page .rgu-nss-sidebar h3 {
            font-size: 22px;
            color: #123c30;

            margin: 0 0 25px;
        }

        .rgu-nss-page .rgu-nss-sidebar ul {
            list-style: none;

            margin: 0;
            padding: 0;
        }

        .rgu-nss-page .rgu-nss-sidebar ul li {
            margin-bottom: 10px;
        }

        .rgu-nss-page .rgu-nss-sidebar ul li a {
            display: flex;
            align-items: center;

            padding: 10px;

            border-radius: 10px;

            background: #f5f5f5;
            color: #444;

            font-size: 15px;
            font-weight: 500;

            text-decoration: none;

            transition: all 0.3s ease;

            border: 1px solid transparent;
        }

        .rgu-nss-page .rgu-nss-sidebar ul li a:hover {
            background: #d66a42;
            color: #fff;

            transform: translateX(5px);

            border-color: #d66a42;
        }


        /* ACTIVE SIDEBAR BUTTON */

        .rgu-nss-page .rgu-nss-sidebar ul li a.active {
            background: linear-gradient(135deg, #d66a42, #bf5433);

            color: #fff;

            border-color: #d66a42;

            box-shadow: 0 10px 20px rgba(214, 106, 66, 0.25);

            transform: translateX(6px);
        }


        /* =========================================
        MAIN CONTENT
========================================= */

        .rgu-nss-page .rgu-nss-main {
            min-width: 0;
            width: 100%;
        }

        .rgu-nss-page .rgu-nss-main>.rgu-nss-section {
            margin-bottom: 90px;
        }


        /* =========================================
        SECTION NUMBER / LABEL
========================================= */

        .rgu-nss-page .rgu-nss-section-number {
            color: #d66a42;

            font-size: 14px;
            letter-spacing: 2px;
            font-weight: 600;

            margin-bottom: 12px;
        }


        /* =========================================
        SECTION TITLE
========================================= */

        .rgu-nss-page .rgu-nss-section-title {
            font-size: clamp(25px, 4vw, 35px);
            line-height: 1.1;

            color: #123c30;

            margin: 0 0 24px;

            word-break: break-word;
        }


        /* =========================================
        SECTION TEXT
========================================= */

        .rgu-nss-page .rgu-nss-section-text,
        .rgu-nss-page .rgu-nss-justify {
            color: #555;

            line-height: 1.9;
            font-size: 17px;

            text-align: justify;

            margin-top: 0;
        }


        /* =========================================
        SUBSECTION
========================================= */

        .rgu-nss-page .rgu-nss-subsection {
            margin-top: 50px;

            background: #fff;

            padding: 40px;

            border-radius: 28px;
            border: 1px solid #ececec;

            overflow: hidden;
        }

        .rgu-nss-page .rgu-nss-subsection-number {
            color: #d66a42;

            font-size: 18px;
            font-weight: 600;

            margin-bottom: 10px;
        }

        .rgu-nss-page .rgu-nss-subsection>h3 {
            font-size: clamp(28px, 3vw, 38px);
            line-height: 1.2;

            color: #123c30;

            margin: 0 0 18px;
        }

        .rgu-nss-page .rgu-nss-subsection>p {
            color: #555;

            line-height: 1.9;

            margin: 0 0 15px;
        }


        /* =========================================
        MEMBER GRID
========================================= */

        .rgu-nss-page .rgu-nss-member-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 22px;

            margin-top: 30px;
        }


        /* =========================================
        MEMBER CARD
========================================= */

        .rgu-nss-page .rgu-nss-member-card {
            background: #f7f7f7;

            padding: 25px;

            border-radius: 22px;
        }

        .rgu-nss-page .rgu-nss-member-card h4 {
            color: #123c30;

            margin: 0 0 10px;
        }

        .rgu-nss-page .rgu-nss-member-card p {
            color: #666;

            line-height: 1.7;
            font-size: 14px;

            margin: 0;
        }


        /* =========================================
        TABLE SECTION
========================================= */

        .rgu-nss-page .rgu-nss-table-section {
            margin-top: 30px;
        }

        .rgu-nss-page .rgu-nss-table-section-spaced {
            margin-top: 30px;
        }

        .rgu-nss-page .rgu-nss-table-title {
            color: #123c30;

            margin: 0 0 15px;

            font-size: 18px;
        }


        /* =========================================
        TABLE WRAPPER
========================================= */

        .rgu-nss-page .rgu-nss-table-wrap {
            overflow-x: auto;

            margin-top: 30px;

            border-radius: 20px;
        }


        /* =========================================
        TABLE
========================================= */

        .rgu-nss-page .rgu-nss-table {
            width: 100%;

            border-collapse: collapse;

            min-width: 700px;
        }

        .rgu-nss-page .rgu-nss-table thead {
            background: #123c30;

            color: #fff;
        }

        .rgu-nss-page .rgu-nss-table th,
        .rgu-nss-page .rgu-nss-table td {
            padding: 18px 20px;

            text-align: left;

            border-bottom: 1px solid #ececec;
        }

        .rgu-nss-page .rgu-nss-table tbody tr {
            background: #fff;
        }

        .rgu-nss-page .rgu-nss-table tbody tr:nth-child(even) {
            background: #f8f8f8;
        }


        /* =========================================
        ACTIVITY CONTENT
========================================= */

        /*
   The cleaned HTML uses .rgu-nss-activity for the
   long Recent Activity articles.

   The original page did not add a new card design
   around these articles, so we keep them simple.
*/

        .rgu-nss-page .rgu-nss-activity {
            margin-top: 35px;
        }

        .rgu-nss-page .rgu-nss-activity h3 {
            font-size: clamp(28px, 3vw, 38px);

            line-height: 1.2;

            color: #123c30;

            margin: 0 0 18px;
        }

        .rgu-nss-page .rgu-nss-activity p {
            color: #555;

            line-height: 1.9;

            margin: 0 0 15px;

            text-align: justify;
        }


        /* =========================================
        LINKS INSIDE NSS CONTENT
========================================= */

        .rgu-nss-page a {
            text-decoration: none;
        }

        .rgu-nss-page .rgu-nss-text-link {
            color: #d66a42;

            font-weight: 600;
        }
    </style>

    <style>

        .rgu-nss-page .rgu-nss-dashboard-grid {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 22px;

            margin-top: 35px;
        }

        .rgu-nss-page .rgu-nss-dashboard-card {
            background: linear-gradient(135deg,
                    #d26443,
                    #c45736);

            padding: 35px;

            border-radius: 24px;

            color: #fff;
        }

        .rgu-nss-page .rgu-nss-dashboard-card h3 {
            font-size: 42px;

            margin: 0 0 10px;
        }

        .rgu-nss-page .rgu-nss-dashboard-card p {
            margin: 0;

            color: #fff;
        }


        /* =========================================
        FAQ
========================================= */

        .rgu-nss-page .rgu-nss-faq-item {
            background: #fff;

            padding: 30px;

            border-radius: 24px;

            border: 1px solid #ececec;

            margin-top: 22px;
        }

        .rgu-nss-page .rgu-nss-faq-item h4 {
            color: #123c30;

            margin: 0 0 12px;

            font-size: 22px;
        }

        .rgu-nss-page .rgu-nss-faq-item p {
            color: #555;

            line-height: 1.8;

            margin: 0;
        }


        /* =========================================
        MEDIA GALLERY
========================================= */

        .rgu-nss-page .rgu-nss-marquee {
            overflow: hidden;

            width: 100%;

            margin-top: 40px;

            position: relative;
        }

        .rgu-nss-page .rgu-nss-marquee-track {
            display: flex;

            gap: 22px;

            width: max-content;

            animation:
                rguNssMarquee 250s linear infinite;
        }

        .rgu-nss-page .rgu-nss-marquee-track img {
            width: 420px;
            height: 280px;

            object-fit: cover;

            border-radius: 24px;

            flex-shrink: 0;

            max-width: none;

            display: block;
        }


        /* =========================================
        GALLERY ANIMATION
========================================= */

        @keyframes rguNssMarquee {

            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }

        }

        .rgu-nss-page .rgu-nss-marquee:hover .rgu-nss-marquee-track {
            animation-play-state: paused;
        }


        /* =========================================
        CONTACT
========================================= */

        .rgu-nss-page .rgu-nss-contact-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;

            margin-top: 35px;
        }

        .rgu-nss-page .rgu-nss-contact-card {
            background: #fff;

            padding: 35px;

            border-radius: 24px;

            border: 1px solid #ececec;
        }

        .rgu-nss-page .rgu-nss-contact-card h4 {
            color: #123c30;

            margin: 0 0 12px;
        }

        .rgu-nss-page .rgu-nss-contact-card p {
            color: #555;

            line-height: 1.9;

            margin: 0;
        }

        .rgu-nss-page .rgu-nss-contact-card a {
            color: #d66a42;

            text-decoration: none;
        }


        /* =========================================
        RESPONSIVE - 1200PX
========================================= */

        @media(max-width:1200px) {

            .rgu-nss-page .rgu-nss-dashboard-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

        }


        /* =========================================
        RESPONSIVE - 992PX
========================================= */

        @media(max-width:992px) {

            .rgu-nss-page {
                grid-template-columns: 1fr;
            }

            .rgu-nss-page .rgu-nss-sidebar {
                display: none;
            }

            .rgu-nss-page .rgu-nss-member-grid,
            .rgu-nss-page .rgu-nss-contact-grid {
                grid-template-columns: 1fr;
            }

        }


        /* =========================================
        RESPONSIVE - 768PX
========================================= */

        @media(max-width:768px) {

            .rgu-nss-page .rgu-nss-dashboard-grid {
                grid-template-columns: 1fr;
            }

            .rgu-nss-page {
                padding: 60px 20px;
            }

            .rgu-nss-page .rgu-nss-subsection {
                padding: 28px;
            }

            .rgu-nss-page .rgu-nss-marquee-track img {
                width: 260px;
                height: 180px;
            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/nss/headimg.jpg'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">The National Service Scheme (NSS)</h1>
            <div class="pg-hero-breadcrumb">
                Campus / NCC & NSS / The National Service Scheme (NSS)
            </div>
        </div>

    </section>


    <!-- ================= NSS PAGE CONTENT ================= -->
    <div class="rgu-nss-page">

        <!-- ================= SIDEBAR ================= -->

        <aside class="rgu-nss-sidebar">

            <h3>Contents</h3>

            <ul>
                <li><a href="#nss-about">About NSS Cell</a></li>
                <li><a href="#nss-committee">NSS Committee</a></li>
                <li><a href="#nss-mission">Mission</a></li>
                <li><a href="#nss-framework">Strategic Framework</a></li>
                <li><a href="#nss-activities">Flagship Activities</a></li>
                <li><a href="#nss-volunteer">Volunteer Hub</a></li>
                <li><a href="#nss-faq">FAQs</a></li>
                <li><a href="#nss-gallery">Media Gallery</a></li>
                <li><a href="#nss-contact">Contact</a></li>
            </ul>

        </aside>


        <!-- ================= MAIN CONTENT ================= -->

        <main class="rgu-nss-main">


            <!-- ================= ABOUT NSS ================= -->

            <section id="nss-about" class="rgu-nss-section">

                <div class="rgu-nss-section-number">
                    ABOUT RGU NSS CELL
                </div>

                <p class="rgu-nss-section-text">
                    The National Service Scheme (NSS) Cell at Assam Royal Global University (RGU), comprising ten units,
                    represents a vibrant and transformative platform for experiential learning, youth engagement, and
                    community
                    empowerment. Rooted in the philosophy of “Not Me, But You,” NSS at RGU functions as a dynamic
                    service-learning
                    ecosystem that integrates academic knowledge with meaningful social engagement aligned with national
                    priorities as well as the SDG 2030. The programme nurtures empathy, civic responsibility, teamwork
                    and
                    leadership among students, preparing them to become socially conscious professionals and active
                    contributors
                    to national development.
                    <br><br>

                    As envisioned in the institutional framework of Assam Royal Global University, community engagement
                    serves a
                    core academic and social mandate. NSS at RGU operates at the intersection of education and social
                    responsibility, enabling students to translate classroom learning into practical interventions that
                    address
                    real-world challenges. By fostering a culture of volunteerism and service, the NSS Cell contributes
                    significantly to the holistic development of students while simultaneously strengthening the
                    university’s
                    social footprint in the region.
                </p>


                <!-- ================= NSS COMMITTEE ================= -->

                <div class="rgu-nss-subsection" id="nss-committee">

                    <div class="rgu-nss-subsection-number">
                        RGU NSS CELL
                    </div>

                    <h3>Advisory &amp; Coordination Structure</h3>

                    <p>
                        The NSS Cell functions through a collaborative administrative
                        and academic structure involving university leadership,
                        programme coordinators, faculty programme officers,
                        and student representatives.
                    </p>


                    <!-- TOP DESIGNATION CARDS -->

                    <div class="rgu-nss-member-grid">

                        <div class="rgu-nss-member-card">

                            <h4>Advisor</h4>

                            <p>
                                Shri Ankur Pansari<br>
                                Hon’ble Pro Chancellor
                            </p>

                        </div>


                        <div class="rgu-nss-member-card">

                            <h4>Chairperson</h4>

                            <p>
                                Prof. Alak K. Buragohain<br>
                                Hon’ble Vice-Chancellor
                            </p>

                        </div>


                        <div class="rgu-nss-member-card">

                            <h4>
                                Member Secretary – Programme Coordinator
                            </h4>

                            <p>
                                Dr. Victor Narzary<br>
                                Associate Professor, Department of Social Work,
                                Royal School of Humanities and Social Sciences
                            </p>

                        </div>


                        <div class="rgu-nss-member-card">

                            <h4>Student Representatives</h4>

                            <p>
                                Student leaders representing multiple schools,
                                disciplines, and academic programmes.
                            </p>

                        </div>

                    </div>


                    <!-- ================= MEMBERS ================= -->

                    <div class="rgu-nss-table-section">

                        <h4 class="rgu-nss-table-title">
                            Members
                        </h4>

                        <div class="rgu-nss-table-wrap">

                            <table class="rgu-nss-table">

                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Name</th>
                                        <th>Designation / Affiliation</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Shri D. Carthigueane</td>
                                        <td>
                                            Regional Director, NSS North East Regional Directorate, Guwahati
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Shri N.C. Deori</td>
                                        <td>
                                            Director of Sports and Youth Welfare, Government of Assam
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Prof. D. Munshi</td>
                                        <td>Registrar (Administration)</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Prof. D.N. Singh</td>
                                        <td>Registrar (Academics)</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Deputy Commissioner, Kamrup (M)</td>
                                        <td>Or His/Her Representative</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Banani Das</td>
                                        <td>
                                            Assistant Dean of Students Affairs &amp; Programme Officer
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Dr. Priyanka Patowari</td>
                                        <td>
                                            Assistant Professor &amp; Coordinator, Department of Social Work
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Rupesh Kumar</td>
                                        <td>
                                            Assistant Professor &amp; Coordinator, MLT
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Dr. Tripti Das</td>
                                        <td>
                                            Assistant Professor &amp; Coordinator,
                                            Department of Sociology,
                                            Royal School of Humanities and Social Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Mr. Tinku Mani Das</td>
                                        <td>
                                            Assistant Professor,
                                            Indigenous Knowledge System,
                                            Royal School of Humanities and Social Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Mr. Vijay Sharma</td>
                                        <td>Finance Officer</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!-- ================= PROGRAMME OFFICERS ================= -->

                    <div class="rgu-nss-table-section rgu-nss-table-section-spaced">

                        <h4 class="rgu-nss-table-title">
                            Members – Programme Officers
                        </h4>

                        <div class="rgu-nss-table-wrap">

                            <table class="rgu-nss-table">

                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Name</th>
                                        <th>Designation / Department</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Sampada Tiwari</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Business,
                                            Royal School of Business
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Nilakshi Deka</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Computer Science and Engineering,
                                            Royal School of Engineering and Technology
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Supriyo Sen</td>
                                        <td>
                                            Associate Professor &amp; Coordinator,
                                            Department of Agricultural Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Kuntala Roy Choudhury</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Law,
                                            Royal School of Law and Administration
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Amlan Das</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Social Work,
                                            Royal School of Humanities and Social Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Baiarbha Massar</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Social Work,
                                            Royal School of Humanities and Social Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Dr. Annesha Borah</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Geography and Geoinformatics
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Sushmita Nongmeikapam</td>
                                        <td>
                                            Assistant Professor,
                                            Department of Political Science,
                                            Royal School of Humanities and Social Sciences
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Dr. Sudarshana Borah Khanikor</td>
                                        <td>
                                            Associate Professor,
                                            Royal School of Pharmaceutical Sciences
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!-- ================= STUDENT REPRESENTATIVES ================= -->

                    <div class="rgu-nss-table-section rgu-nss-table-section-spaced">

                        <h4 class="rgu-nss-table-title">
                            Members – Student Representatives
                        </h4>

                        <div class="rgu-nss-table-wrap">

                            <table class="rgu-nss-table">

                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Name</th>
                                        <th>Programme / Semester</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Mr. Afrid Alam Choudhury</td>
                                        <td>
                                            6th Semester,
                                            Bachelor in Medical Laboratory Technology, RSMAS
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Mr. Prabhat Saha</td>
                                        <td>
                                            6th Semester,
                                            B. Pharm, RSP
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Ms. Ujalee Sharma</td>
                                        <td>
                                            2nd Semester,
                                            B.Sc. Nutrition and Dietetics, RSMAS
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Mr. Piyansu Dugar</td>
                                        <td>
                                            2nd Semester,
                                            Bachelor in Physiotherapy, RSMAS
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Ms. Nandini Bayan</td>
                                        <td>
                                            2nd Semester,
                                            B.A. in Travel and Tourism Management, RSTTM
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
                <!-- ================= MISSION ================= -->

                <div class="rgu-nss-subsection" id="nss-mission">

                    <div class="rgu-nss-subsection-number">
                        MISSION
                    </div>

                    <p class="rgu-nss-justify">
                        To establish the NSS Cell of Assam Royal Global University as a premier youth-led hub for
                        service-learning
                        and community transformation, cultivating compassionate, ethical and socially responsible
                        graduates through
                        experiential education, academic excellence, and measurable social impact across Northeast
                        India.
                    </p>

                </div>


                <!-- ================= STRATEGIC FRAMEWORK ================= -->

                <div class="rgu-nss-subsection" id="nss-framework">

                    <div class="rgu-nss-subsection-number">
                        STRATEGIC FRAMEWORK OF NSS AT RGU
                    </div>

                    <p class="rgu-nss-justify">
                        The NSS Cell at Assam Royal Global University operates through a well-defined and structured
                        strategic
                        framework that ensures systematic planning, implementation, and evaluation of community
                        engagement
                        initiatives. This framework integrates multiple components designed to facilitate experiential
                        learning and
                        sustainable community impact.
                        <br><br>

                        The programme begins with orientation and training sessions that introduce students to the
                        philosophy,
                        objectives, and operational modalities of the National Service Scheme. These sessions equip
                        volunteers with
                        essential skills such as communication, teamwork, leadership, and project management, enabling
                        them to
                        participate effectively in community-based initiatives.
                        <br><br>

                        Field immersion experiences constitute a critical component of the NSS framework, providing
                        students with
                        opportunities to engage directly with communities and understand local socio-economic realities.
                        Through
                        village visits, community surveys, and participatory interactions, volunteers develop a nuanced
                        understanding of grassroots challenges and community dynamics.
                        <br><br>

                        Community interventions form the core of NSS activities at RGU, encompassing a wide range of
                        initiatives in
                        health, education, environmental sustainability, disaster response, and social awareness. These
                        interventions are designed to address specific community needs while fostering a sense of social
                        responsibility and service among students.
                        <br><br>

                        Reflective learning processes complement the experiential dimension of NSS activities, enabling
                        students to
                        critically analyze their experiences and derive meaningful insights from their engagement.
                        Through
                        reflection sessions, documentation exercises, and academic integration, volunteers are
                        encouraged to connect
                        theoretical knowledge with practical experiences, thereby enhancing their learning outcomes and
                        personal
                        development.
                        <br><br>

                        This continuum of orientation, immersion, intervention, and reflection ensures a holistic and
                        transformative
                        learning experience that bridges the gap between academia and society.
                    </p>

                </div>

            </section>


            <!-- ================= FLAGSHIP ACTIVITIES ================= -->

            <section id="nss-activities" class="rgu-nss-section">


                <!-- ================= RECENT ACTIVITIES ================= -->

                <div class="rgu-nss-subsection">

                    <div class="rgu-nss-subsection-number">
                        RECENT ACTIVITIES
                    </div>


                    <!-- WORLD HYPERTENSION DAY -->

                    <div class="rgu-nss-activity">

                        <h3>
                            World Hypertension Day 2026
                            (15th May 2026 at RGU Campus)
                        </h3>

                        <p>
                            Observing World Hypertension Day 2026, the National Service Scheme (NSS) Cell of The Assam
                            Royal Global
                            University (RGU), in collaboration with the Cardiological Society of India (CSI) – North
                            East Chapter, and
                            the Cardiological Society of Assam (CSA), organized a Free Cardiac Health Check-up Camp and
                            an expert Panel
                            Discussion on the 15th of May 2026 at the RGU campus to raise awareness on hypertension as a
                            silent yet
                            life-threatening risk factor for cardiovascular disease.
                        </p>

                        <p>
                            The day-long health initiative witnessed robust participation from the faculty, staff, and
                            students of RGU,
                            along with members of neighboring institutions including Royal Global School, and residents
                            from nearby
                            villages. In total, 131 persons benefited from comprehensive screening services conducted by
                            leading heart
                            physicians and clinical teams from CSI-NE and CSA. The vital screening components included
                            Blood Pressure
                            (BP), Blood Sugar, Lipid Profile testing, and ECG, enabling early identification of risk
                            patterns and
                            reinforcing the importance of preventive care. The tests were conducted free of cost, with
                            support from SUN
                            Pharma and IPCA, reflecting a strong convergence of academic institutions, medical
                            professionals, and
                            responsible corporate support for public health outreach.
                        </p>

                        <p>
                            The programme included an interactive Panel Discussion on the theme “Controlling
                            Hypertension Together…
                            Defeat the Silent Killer”, held at the Seminar Hall, D Block, RGU. The discussion brought
                            together
                            distinguished doctors—President of CSI-NE Chapter Dr. D.J. Dutta, Secretary of CSI-NE
                            Chapter Dr. Rituparna
                            Baruah, Dr. B. B. Kukreja, Dr. Dinesh Agrawal, and Dr. M. K. Sutradhar—who shared clinical
                            insights,
                            practical lifestyle guidance, and evidence-based takeaways for the university community.
                        </p>

                        <p>
                            Dr. B. B. Kukreja, who moderated the session, cautioned the audience about the scale and
                            urgency of the
                            challenge. “Prevalence of hypertension in Indian adults is 31% affecting 200 million
                            people,” he warned,
                            emphasizing that hypertension is increasingly becoming a defining public health concern in
                            India. He
                            underlined why India is often described as the emerging “hypertension capital,” pointing to
                            factors such as
                            early onset, gaps in awareness across rural and urban contexts, clustering of cardiovascular
                            risk factors,
                            seasonal variations in BP, and rising average BP trends.
                        </p>

                        <p>
                            Introducing the programme, eminent cardiologist Dr. Rituparna Baruah (Apollo Hospitals,
                            Guwahati) noted that
                            the theme of World Hypertension Day 2026— “Controlling Hypertension Together”—calls for
                            collective action by
                            institutions, families, and communities. He stressed that awareness and regular screening
                            must become
                            routine, especially among young adults, as lifestyle and stress-related risks are
                            increasingly visible in
                            earlier age groups.
                        </p>

                        <p>
                            The experts highlighted hypertension as a “silent killer” affecting people across age groups
                            and discussed
                            how improved longevity must be matched with healthier living to improve quality of life.
                            Preventive guidance
                            emphasized balanced diet, regular physical activity, stress management, avoidance of tobacco
                            and harmful
                            alcohol use, and periodic health check-ups. The panel also addressed genetic predisposition
                            and clarified
                            how uncontrolled hypertension can contribute to organ damage affecting the heart, kidneys,
                            brain, and
                            eyes—encouraging early preventive care, particularly for those with family history.
                        </p>

                        <p>
                            A defining strength of the programme was that it was student-led, with RGU NSS volunteers
                            taking the lead in
                            mobilization, registration flow, facilitation, and coordination across screening stations
                            and the panel
                            discussion. The initiative reflected the NSS ethos of service and youth leadership,
                            transforming the campus
                            into a space of preventive healthcare learning and community responsibility.
                        </p>

                        <p>
                            The organisers reiterated that the programme is aligned with SDG 3: Good Health and
                            Well-Being, and
                            strengthens a culture of preventive health awareness within and beyond campus. RGU’s NSS
                            Cell, together with
                            CSI-NE and CSA, reaffirmed commitment to sustained health promotion initiatives that enable
                            early screening,
                            informed choices, and community-wide sensitization on cardiovascular risk factors.
                        </p>

                    </div>


                    <!-- HEALTH SERVICES CAMP -->

                    <div class="rgu-nss-activity">

                        <h3>
                            RGU Health Services Camp
                            (8th May 2026, Ayushman Aarogya Mandir, Chakarado Village, Guwahati)
                        </h3>

                        <p>
                            In a meaningful step towards strengthening community-based healthcare access, the National
                            Service Scheme
                            (NSS) Cell of Assam Royal Global University (RGU), in collaboration with the Royal School of
                            Medical and
                            Allied Sciences (RSMAS), organised a Health Services Camp on 8th May 2026 at the Ayushman
                            Aarogya Mandir,
                            Chakarado Village, in the vicinity of Guwahati. The programme was conducted in partnership
                            with the Office
                            of the Joint Director of Health Services and the Ayurvedic Medical Organization of Assam,
                            reinforcing a
                            collaborative approach to preventive and primary healthcare at the grassroots.
                        </p>

                        <p>
                            The camp was designed to extend essential, community-based healthcare services and promote
                            preventive
                            health awareness at the grassroots. A set of key services were made available to the local
                            community,
                            including physiotherapy support, laboratory tests, nutritional counselling, and eye check-up
                            services.
                        </p>

                        <p>
                            Throughout the programme, community members—women, men, and children—availed consultations
                            and basic
                            screenings in a structured and supportive environment. In total, 105 beneficiaries attended
                            and received
                            services during the camp, reflecting strong community participation and the relevance of
                            accessible
                            healthcare outreach.
                        </p>

                        <p>
                            A team of five doctors supported the clinical services and counselling, including Dr.
                            Kaushik Roy, Dr.
                            Shalesh Sharma, Dr. Prastuti Das, and Dr. Sajini Punnoose Manta.
                        </p>

                        <p>
                            The academic and technical facilitation was coordinated by the faculty team led by Dr.
                            Rathindra Bhuyan,
                            Hon’ble Advisor to Chancellor, Dr. Abhijit Dutta, Dean of Royal School of Medical and Allied
                            Services, along
                            with Dr. Rupesh Kumar, and Krishanjit Parasar (Faculty – Optometry).
                        </p>

                        <p>
                            The NSS Cell ensured smooth on-ground support through the active involvement of five NSS
                            volunteers—Debasish Bania, Saptarishi Das, Nillotpal Bora, Piyansu Dugar, and Lohit
                            Gogoi—who assisted in
                            coordination and community facilitation.
                        </p>

                        <p>
                            Feedback from beneficiaries highlighted the usefulness of the camp and expressed gratitude
                            to RGU and the
                            NSS team, while the medical team emphasized that the camp aimed to deliver basic services
                            and health
                            awareness to local people.
                        </p>

                        <p>
                            The faculty team noted the value of such programmes in strengthening student learning
                            through community
                            service, and volunteers shared their satisfaction in being able to support people
                            meaningfully.
                        </p>

                    </div>


                    <!-- MEGA BLOOD DONATION CAMP -->

                    <div class="rgu-nss-activity">

                        <h3>
                            RGU Mega Blood Donation Camp
                            (30 April 2026, 6th Floor, DEF Block, RGU Campus)
                        </h3>

                        <p>
                            The NSS Cell of Assam Royal Global University organized the RGU Mega Blood Donation Drive on
                            30 April 2026
                            at the 6th Floor, DEF Block, RGU campus, in partnership with the State-of-the-Art Model
                            Blood Centre,
                            Gauhati Medical College and Hospital (GMCH). The initiative was organized as part of the
                            University’s
                            continuing commitment to voluntary blood donation, youth-led community service, and public
                            health
                            responsibility.
                        </p>

                        <p>
                            The drive recorded an excellent response. A total of 150 individuals registered for the
                            camp, out of which
                            119 came forward to donate blood. After medical screening, 92 eligible donors successfully
                            donated blood,
                            resulting in the collection of 92 units.
                        </p>

                        <p>
                            This achievement reflected both the willingness of the RGU community to contribute to a
                            life-saving cause
                            and the effectiveness of student-led mobilization.
                        </p>

                        <p>
                            The day began with an orientation meeting of NSS core volunteers at the NSS Office, followed
                            by final venue
                            preparations, physical registration of donors, and coordination with the visiting medical
                            team from GMCH.
                        </p>

                        <p>
                            The programme was formally inaugurated at the venue in the presence of university
                            dignitaries, faculty
                            members, NSS Programme Officers, student volunteers, GMCH officials, and invited guests.
                        </p>

                        <p>
                            The event saw enthusiastic participation from students, faculty, staff, and members from
                            neighbouring
                            institutions, including Royal Global School, reflecting the larger community spirit of the
                            initiative.
                        </p>

                        <p>
                            A key highlight of the programme was the presence of Shri Pankaj Kaul, Chairman, Allied
                            Healthcare Council
                            of Assam, who is also known for having donated blood 119 times.
                        </p>

                        <p>
                            Addressing the young donors and volunteers, he emphasized that fear should never become a
                            barrier to saving
                            lives. He encouraged the youth to become regular voluntary blood donors and reminded the
                            gathering that a
                            wider donor base is essential for ensuring safe and sufficient blood availability in the
                            country.
                        </p>

                        <p>
                            The medical and technical procedures of the donation drive were supervised by Dr. Dipankar
                            Baruah,
                            In-charge, Model Blood Centre, GMCH.
                        </p>

                        <p>
                            He highlighted the importance of proper screening, safety protocols, donor eligibility, and
                            post-donation
                            care. Under the supervision of the GMCH team, the camp maintained all required medical
                            standards, including
                            donor registration, pre-donation counselling, eligibility assessment, blood collection,
                            post-donation
                            observation, refreshments, and documentation.
                        </p>

                        <p>
                            The event was marked by strong student leadership. NSS volunteers led the operational
                            arrangements from the
                            front, including donor reception, queue management, guidance at different service points,
                            support to the
                            medical team, donor care, certificate distribution, refreshments, documentation,
                            photography, social media
                            updates, and post-event coordination.
                        </p>

                        <p>
                            Their discipline, empathy, and organizational commitment were widely appreciated by faculty,
                            staff, and the
                            GMCH team.
                        </p>

                        <p>
                            This blood donation drive formed part of RGU’s larger institutional commitment to promoting
                            100 per cent
                            voluntary non-remunerated blood donation, strengthening regular donation culture, and
                            building sustained
                            partnerships with healthcare institutions and civic stakeholders.
                        </p>

                        <p>
                            The RGU Mega Blood Donation Drive concluded successfully with the handing over of records,
                            appreciation to
                            donors and partners, venue clean-up by volunteers, and a final debriefing of NSS Programme
                            Officers and core
                            volunteers.
                        </p>

                        <p>
                            The event stands as a significant milestone in RGU’s journey towards expanding its NSS Cell
                            and positioning
                            it among the best-performing NSS units in the country.
                        </p>

                    </div>


                    <!-- ELECTION AWARENESS CAMP -->

                    <div class="rgu-nss-activity">

                        <h3>
                            Election Awareness Camp
                            (2nd April 2026, Adopted Village: Deuchutal, Guwahati)
                        </h3>

                        <p>
                            An Election Awareness Campaign was successfully held on 2nd April 2026 at Deuchutal Karbi
                            Village, Deepor
                            Beel. The campaign was led by Prof. (Dr.) Shalini Saxena, Head of the Department of
                            Political Science.
                        </p>

                        <p>
                            The main goal of the campaign was to raise awareness about the importance of voting and to
                            emphasize that
                            voting is not just a right but a fundamental duty of every citizen in a democratic country.
                        </p>

                        <p>
                            A total of 39 NSS Volunteers and 4 faculty members actively participated in the campaign.
                            The programme was
                            supervised by Dr. Y. Manjit Singha, in collaboration with Dr. Krishangi Saikia, Dr. Sushmita
                            N. Hoshi, and
                            Akash Singh Thakur.
                        </p>

                        <p>
                            The campaign witnessed the participation of approximately 54 villagers, primarily women and
                            children.
                        </p>

                        <p>
                            To effectively communicate the message, students performed two skits—one in Hindi and the
                            other in
                            Assamese—highlighting the importance of voting and active electoral participation.
                        </p>

                        <p>
                            Additionally, the use of banners, posters, and impactful slogans made the campaign more
                            engaging and
                            accessible to the audience. These visual and performative methods helped simplify the
                            message and ensure
                            better understanding among the villagers.
                        </p>

                        <p>
                            The interaction between students and villagers was lively, interactive, and meaningful. The
                            villagers
                            showed keen interest in the discussions and actively engaged with the students, making the
                            session both
                            informative and participatory.
                        </p>

                        <p>
                            After the awareness programme, students and faculty members went door-to-door for a
                            campaign. They split
                            into four groups, each covering about 5–10 households.
                        </p>

                        <p>
                            This effort boosted community engagement and encouraged villagers to take part responsibly
                            in the electoral
                            process.
                        </p>

                        <p>
                            The campaign was a successful effort in raising electoral awareness among rural communities.
                            It effectively
                            communicated the importance of voting and enhanced villagers' understanding of civic
                            responsibility.
                        </p>

                        <p>
                            Overall, the campaign was a successful, interactive, and impactful initiative that promoted
                            electoral
                            awareness and responsible citizenship within the local community.
                        </p>

                    </div>


                    <!-- REGIONAL DIRECTOR VISIT -->

                    <div class="rgu-nss-activity">

                        <h3>
                            Visit of Regional Director Shri D. Carthigueane and Youth Officer Shri Jangjilong Aier to
                            Assam Royal Global
                            University (2nd April 2026)
                        </h3>

                        <p>
                            Assam Royal Global University had the distinct honour of hosting Shri D. Carthigueane,
                            Regional Director,
                            National Service Scheme (NSS), North East Regional Directorate (Guwahati), and Shri
                            Jangjilong Aier, Youth
                            Officer, NSS, on 2nd April 2026 for a day of strategic engagement and meaningful interaction
                            with the RGU
                            NSS ecosystem.
                        </p>

                        <p>
                            The visit commenced with an interactive session with NSS volunteers at the Seminar Hall, GHI
                            Block, where
                            the dignitaries engaged directly with students on the theme of youth-led nation building.
                        </p>

                        <p>
                            Shri Carthigueane highlighted the transformative power of youth participation, noting that
                            more than forty
                            lakh young volunteers are engaged in NSS activities across India. He encouraged RGU
                            volunteers to move
                            beyond symbolic engagement and strive for sustained societal impact.
                        </p>

                        <p>
                            Shri Jangjilong Aier emphasized skill-building, innovation, and proactive participation
                            aligned with the
                            vision of Viksit Bharat @ 2047, urging students to take ownership of localized yet globally
                            relevant
                            interventions.
                        </p>

                        <p>
                            Earlier, the dignitaries were welcomed to the RGU campus in the presence of Hon’ble
                            Pro-Chancellor of RGU
                            Shri A. Pansari Ji, Hon’ble Vice-Chancellor of RGU Prof. A.K. Buragohain, and Dr. D.N.
                            Singh, Registrar
                            (Academics).
                        </p>

                        <p>
                            Later in the day, a strategic NSS University Advisory Committee Meeting was convened at the
                            Synergy Hall
                            under the chairpersonship of Dr. Banani Das Hazarika, Associate Dean of Students Welfare,
                            RGU.
                        </p>

                        <p>
                            During this session, Dr. Priyanka Patowari, Member of the NSS University Advisory Committee,
                            RGU, presented
                            the comprehensive NSS initiatives since 2024, including environmental campaigns, blood
                            donation drives in
                            collaboration with GMCH and partner organizations, cleanliness drives at ISBT and Dipor
                            Beel, and community
                            outreach programmes in adopted villages.
                        </p>

                        <p>
                            Dr. Victor Narzary, Programme Coordinator of NSS, articulated the University’s ‘Seva Sphere’
                            roadmap—an
                            integrated model combining community participation, teaching-learning processes, research
                            engagement, and
                            social transformation initiatives aligned with Atmanirbhar Assam, Viksit Bharat @ 2047, and
                            the Sustainable
                            Development Goals.
                        </p>

                        <p>
                            In his expert guidance, Shri Carthigueane encouraged the University to empower Programme
                            Officers, expand
                            volunteer participation in national and international NSS camps, strengthen registration on
                            the MY Bharat
                            portal, and explore the possibility of hosting regional or national NSS events at RGU in the
                            coming academic
                            years.
                        </p>

                        <p>
                            Shri Aier further stressed the importance of branding NSS initiatives, institutionalizing
                            recognition
                            mechanisms for volunteers, and fostering leadership ownership among youth.
                        </p>

                        <p>
                            The visit reflected a significant milestone in RGU’s NSS journey. It reaffirmed the
                            University’s commitment
                            to structured youth engagement, institutional collaboration, and sustained civic leadership.
                        </p>

                        <p>
                            The interaction served not only as a significant administrative consultation but also as an
                            inspirational
                            moment leading to the strengthening of confidence, expansion of vision, and reinforcement of
                            the shared
                            resolve to build empowered and socially responsible NSS volunteers.
                        </p>

                    </div>

                </div>


                <!-- ================= BLOOD DONATION ================= -->

                <div class="rgu-nss-subsection">

                    <div class="rgu-nss-subsection-number">
                        RGU NSS Cell’s Commitment to Blood Donation
                    </div>

                    <p>
                        RGU’s NSS Cell remains committed to building a safe and sufficient blood supply by promoting
                        Voluntary
                        Non-Remunerated Blood Donation (VNRBD) as a sustained, campus-led public health movement in
                        relation to SDG
                        3. The table below presents a chronological snapshot of RGU’s key blood donor–related
                        initiatives,
                        reflecting our ongoing efforts to expand awareness, participation, and partnerships for a
                        healthier Assam
                        and India.
                    </p>

                    <div class="rgu-nss-table-wrap">

                        <table class="rgu-nss-table">

                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Date</th>
                                    <th>Activity</th>
                                    <th>Organisers / Partners</th>
                                    <th>Venue</th>
                                    <th>Blood units collected</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>30-Apr-26</td>
                                    <td>RGU Mega Blood Donation Camp</td>
                                    <td>RGU NSS Cell &amp; GMCH</td>
                                    <td>RGU Campus, Guwahati</td>
                                    <td>93</td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>17–23 Sep 2025</td>
                                    <td>
                                        Voluntary Blood Donation Camp
                                        (Seva-hi-Samarpan: Seva Saptah)
                                    </td>
                                    <td>
                                        Management Club, RSMAS, RGU NSS Cell with GMCH &amp; ASBTC
                                        (and support from National Medicos Organisation, Niramoy)
                                    </td>
                                    <td>RGU Campus, Guwahati</td>
                                    <td>75</td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>6-Feb-25</td>
                                    <td>Blood Donation Camp</td>
                                    <td>
                                        Dept. of Social Work (RGU), &amp; Income Tax Department (NER)
                                    </td>
                                    <td>RGU Campus, Guwahati</td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>23-Aug-24</td>
                                    <td>Blood Donation Drive</td>
                                    <td>
                                        RGU NSS, RSET &amp; RSIT (RGU) with NEERAMOY and GMCH
                                    </td>
                                    <td>RGU Campus, Guwahati</td>
                                    <td>76</td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>14-Jun-24</td>
                                    <td>
                                        World Blood Donor Day Awareness Programme
                                        (street play and poster campaign on donor sensitisation)
                                    </td>
                                    <td>Department of Social Work with NSS</td>
                                    <td>
                                        Shankardev Shishu Niketan School, Pub-Boragaon
                                    </td>
                                    <td>Awareness Programme</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>
                <!-- ================= NSS REGULAR ACTIVITIES ================= -->

                <div class="rgu-nss-subsection">

                    <div class="rgu-nss-subsection-number">
                        NSS REGULAR ACTIVITIES
                    </div>

                    <p>
                        NSS volunteers participate in regular community-focused
                        initiatives including cleanliness drives, health awareness
                        campaigns, environmental sustainability activities,
                        educational outreach, and village adoption programmes.
                    </p>

                    <div class="rgu-nss-table-wrap">

                        <table class="rgu-nss-table rgu-nss-wide-table">

                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Date</th>
                                    <th>Event / Activity</th>
                                    <th>Organisers / Partners</th>
                                    <th>Brief Description</th>
                                    <th>Venue</th>
                                    <th>Key Results</th>
                                    <th>SDG Linkage</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>5/3/26</td>
                                    <td>Educational Outreach</td>
                                    <td>RGU NSS &amp; Department of MBA</td>
                                    <td>
                                        Recreational support, hygiene and goal-setting sessions
                                    </td>
                                    <td>Jtejla LP School</td>
                                    <td>
                                        Outreach completed; mentoring &amp; awareness
                                    </td>
                                    <td>SDG 4, SDG 3</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>27/2/26</td>
                                    <td>Community Health Checkup Camp</td>
                                    <td>
                                        RGU NSS, RSMA, &amp; Joint Director of Health Services (Kamrup)
                                    </td>
                                    <td>
                                        Physiotherapy, lab tests, eye screening, nutrition counselling
                                    </td>
                                    <td>Adopted Village</td>
                                    <td>100+ beneficiaries</td>
                                    <td>SDG 3, SDG 17</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>14/11/24</td>
                                    <td>Children’s Day Celebration</td>
                                    <td>RSS &amp; Dept. of Social Work (RSHSS)</td>
                                    <td>
                                        Child-focused engagement and games
                                    </td>
                                    <td>Adopted Village</td>
                                    <td>
                                        Celebration conducted; children engaged
                                    </td>
                                    <td>SDG 4, SDG 5, SDG 16</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>26/9/24</td>
                                    <td>AIDS Awareness Programme</td>
                                    <td>RGU NSS &amp; Royal School of Commerce</td>
                                    <td>
                                        HIV/AIDS awareness; stigma reduction; advocacy and sensitisation
                                    </td>
                                    <td>RGU Campus, Guwahati</td>
                                    <td>
                                        Keynote session; student/faculty participation
                                    </td>
                                    <td>SDG 3, SDG 5</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>05-Jun-24</td>
                                    <td>World Environment Day Celebration</td>
                                    <td>
                                        RGU NSS, Dept. of Social Work, &amp; Shankardev Shishu Niketan
                                    </td>
                                    <td>
                                        Plantation awareness on climate and waste management
                                    </td>
                                    <td>
                                        Shankardev Shishu Niketan School, Pub-Boragaon
                                    </td>
                                    <td>
                                        Saplings planted; environment awareness
                                    </td>
                                    <td>SDG 13, SDG 17</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>02-Apr-24</td>
                                    <td>Community Outreach (Media Literacy)</td>
                                    <td>RGU NSS and RSCOM</td>
                                    <td>
                                        Photography/videography and media literacy sessions;
                                        interactive learning
                                    </td>
                                    <td>Parijat Academy, Pamohi Village</td>
                                    <td>
                                        Outreach completed; student engagement &amp; learning enrichment
                                    </td>
                                    <td>SDG 4, SDG 16</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>08-Mar-24</td>
                                    <td>International Women’s Day Celebration</td>
                                    <td>RGU NSS, Dept. of Social Work (RSHSS)</td>
                                    <td>
                                        Community interaction on women’s dignity, participation,
                                        rights and well-being
                                    </td>
                                    <td>Deuchutal LP School</td>
                                    <td>
                                        Awareness strengthened community relationships
                                    </td>
                                    <td>SDG 4, SDG 5</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- ================= VOLUNTEER HUB ================= -->

            <section id="nss-volunteer" class="rgu-nss-section">

                <div class="rgu-nss-section-number">
                    VOLUNTEER HUB
                </div>

                <h2 class="rgu-nss-section-title">
                    Call to Volunteer
                </h2>

                <p class="rgu-nss-section-text">
                    All Bonafide students of The Assam Royal Global University who are willing to join the NSS programme
                    may
                    enroll themselves via the Online Form:
                    <a href="https://forms.gle/zpAzRKCA3Cc7BFyG7" target="_blank" rel="noopener noreferrer"
                        class="rgu-nss-text-link">
                        Click Here
                    </a>
                </p>


                <!-- VOLUNTEER STATISTICS -->

                <div class="rgu-nss-dashboard-grid">

                    <div class="rgu-nss-dashboard-card">
                        <h3>1000+</h3>
                        <p>Registered Volunteers</p>
                    </div>

                    <div class="rgu-nss-dashboard-card">
                        <h3>300+</h3>
                        <p>Blood Units Collected</p>
                    </div>

                    <div class="rgu-nss-dashboard-card">
                        <h3>19</h3>
                        <p>Adopted Villages</p>
                    </div>

                    <div class="rgu-nss-dashboard-card">
                        <h3>100+</h3>
                        <p>Outreach Events</p>
                    </div>

                </div>

            </section>


            <!-- ================= UPCOMING EVENTS ================= -->

            <section class="rgu-nss-section">

                <div class="rgu-nss-subsection">

                    <div class="rgu-nss-subsection-number">
                        UPCOMING EVENTS
                    </div>

                    <div class="rgu-nss-table-wrap">

                        <table class="rgu-nss-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Upcoming Event</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>22 May 2026</td>
                                    <td>
                                        World Biodiversity Day (Digital Competition)
                                    </td>
                                </tr>

                                <tr>
                                    <td>31 May 2026</td>
                                    <td>
                                        Anti-Tobacco Day Observance (Nasha Mukt Bharat)
                                    </td>
                                </tr>

                                <tr>
                                    <td>03 June 2026</td>
                                    <td>
                                        World Bicycle Day Observance
                                    </td>
                                </tr>

                                <tr>
                                    <td>05 June 2026</td>
                                    <td>
                                        World Environment Day Celebration 2026
                                    </td>
                                </tr>

                                <tr>
                                    <td>21 June 2026</td>
                                    <td>
                                        International Yoga Day Observance
                                    </td>
                                </tr>

                                <tr>
                                    <td>11 July 2026</td>
                                    <td>
                                        Digital Poster Campaign – World Population Day
                                    </td>
                                </tr>

                                <tr>
                                    <td>August 2026</td>
                                    <td>
                                        Diksharambh: Volunteer Capacity Building Programme
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <!-- ================= FIND YOUR SERVICE PATH ================= -->

            <section id="nss-service-path" class="rgu-nss-section">

                <div class="rgu-nss-subsection">

                    <div class="rgu-nss-section-number">
                        FIND YOUR SERVICE PATH
                    </div>

                    <h3>
                        Interest-Based Activity Mentorship &amp; Guidance
                    </h3>

                    <div class="rgu-nss-table-wrap">

                        <table class="rgu-nss-table">

                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Thematic Area</th>
                                    <th>Key Person</th>
                                    <th>Email</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>NSS Programme/Event Coordination</td>
                                    <td>Dr. Victor Narzary</td>
                                    <td>
                                        <a href="mailto:vnarzary@rgu.ac">
                                            vnarzary@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Key National and Global Priority Events</td>
                                    <td>Dr. Banani Das Hazarika</td>
                                    <td>
                                        <a href="mailto:bananidas.hazarika@rgi.edu.in">
                                            bananidas.hazarika@rgi.edu.in
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>AI and Digital Literacy in Community Schools</td>
                                    <td>Dr. Nilakshi Deka</td>
                                    <td>
                                        <a href="mailto:nilakshi.deka@rgi.edu.in">
                                            nilakshi.deka@rgi.edu.in
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>
                                        Cloth-Donation Drive for Persons Living in Institutional Care
                                    </td>
                                    <td>Dr. Sampada Tiwari</td>
                                    <td>
                                        <a href="mailto:stiwari1@rgu.ac">
                                            stiwari1@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>
                                        Poshan Abhiyan Related Social and Behaviour Change Initiative
                                    </td>
                                    <td>Dr. Supriyo Sen</td>
                                    <td>
                                        <a href="mailto:ssen1@rgu.ac">
                                            ssen1@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Community Menstrual Hygiene Programme</td>
                                    <td>Dr. Sushmita Hosie Nongmeikapam</td>
                                    <td>
                                        <a href="mailto:shnongmeikapam@rgu.ac">
                                            shnongmeikapam@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>
                                        WASH Programme and Services for Persons with Disability
                                    </td>
                                    <td>Dr. Amlan Das</td>
                                    <td>
                                        <a href="mailto:adas9@rgu.ac">
                                            adas9@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>
                                        Community Mental Health – Stress Management for Youth
                                    </td>
                                    <td>Dr. Baiarbha Massar</td>
                                    <td>
                                        <a href="mailto:bmassar@rgu.ac">
                                            bmassar@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>
                                        Promoting Holistic Well-being through Nature-Based Wellness
                                        and Mindful Nature Engagement
                                    </td>
                                    <td>Dr. Annesha Borah</td>
                                    <td>
                                        <a href="mailto:aborah1@rgu.ac">
                                            aborah1@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Legal Awareness Programme</td>
                                    <td>Dr. Kuntala Roychoudhury</td>
                                    <td>
                                        <a href="mailto:kroychoudhury@rgu.ac">
                                            kroychoudhury@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11</td>
                                    <td>Social and Preventive Healthcare</td>
                                    <td>Dr. Sudarshana Borah Khanikor</td>
                                    <td>
                                        <a href="mailto:sborah1@rgu.ac">
                                            sborah1@rgu.ac
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>
            <!-- ================= FAQs ================= -->

            <section id="nss-faq" class="rgu-nss-section">

                <div class="rgu-nss-section-number">
                    FAQs
                </div>

                <h2 class="rgu-nss-section-title">
                    Frequently Asked Questions
                </h2>


                <div class="rgu-nss-faq-item">

                    <h4>
                        What is NSS and why should I join?
                    </h4>

                    <p>
                        NSS is India’s largest youth volunteer movement under the Ministry
                        of Youth Affairs and Sports, Government of India. At RGU, it’s your
                        chance to learn beyond classrooms, serve society, and grow into a
                        confident leader.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        Who can enroll as an NSS volunteer at RGU?
                    </h4>

                    <p>
                        Any RGU student who is willing to serve, learn, and commit time
                        regularly can enroll, subject to unit capacity.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        Do I need prior experience in volunteering?
                    </h4>

                    <p>
                        Not at all. NSS is designed for beginners too—orientation and
                        training will guide you step by step.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        What kind of activities will I get to do?
                    </h4>

                    <p>
                        Blood donation drives, health camps, Swachh Bharat activities,
                        POSHAN/nutrition awareness, environmental initiatives, disaster
                        response support, school outreach, and more.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        How much time do I need to commit?
                    </h4>

                    <p>
                        NSS is manageable alongside studies. You’ll have regular activities
                        through the semester and occasional larger events at the
                        regional/national/international levels, and special camps for a
                        7-day period.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        Will NSS help my personal and professional growth?
                    </h4>

                    <p>
                        Yes. You build real skills—teamwork, communication, leadership,
                        problem-solving, event management, and community engagement.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        Is NSS only for Social Work students?
                    </h4>

                    <p>
                        No. NSS is for students from all departments. In fact, diverse
                        teams create the best impact.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        Will I receive certificates or recognition?
                    </h4>

                    <p>
                        Yes. Active volunteers receive participation certificates,
                        leadership opportunities, and recognition for outstanding service.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        What if I’m shy or not confident in public?
                    </h4>

                    <p>
                        Perfect—NSS helps you grow. You can start with behind-the-scenes
                        roles and gradually take on leadership tasks.
                    </p>

                </div>


                <div class="rgu-nss-faq-item">

                    <h4>
                        How do I enroll and whom do I contact?
                    </h4>

                    <p>
                        Enroll through the NSS registration link/desk announced by your
                        department. You can also reach out to the NSS Cell via your
                        Programme Officer or the NSS Coordinator for guidance.
                    </p>

                </div>

            </section>


            <!-- ================= MEDIA GALLERY ================= -->

            <section id="nss-gallery" class="rgu-nss-section">

                <div class="rgu-nss-section-number">
                    MEDIA GALLERY
                </div>

                <h2 class="rgu-nss-section-title">
                    Photos &amp; Highlights
                </h2>


                <div class="rgu-nss-marquee">

                    <div class="rgu-nss-marquee-track">

                        <img src="/new-web/assets/img/nss/1.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/2.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/3.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/4.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/5.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/6.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/7.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/8.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/9.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/10.jpg" alt="RGU NSS Activity">

                        <img src="/new-web/assets/img/nss/11.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/12.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/13.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/14.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/15.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/16.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/17.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/18.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/19.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/20.jpg" alt="RGU NSS Activity">

                        <img src="/new-web/assets/img/nss/21.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/22.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/23.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/24.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/25.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/26.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/27.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/28.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/29.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/30.jpg" alt="RGU NSS Activity">

                        <img src="/new-web/assets/img/nss/31.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/32.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/33.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/34.jpg" alt="RGU NSS Activity">
                        <img src="/new-web/assets/img/nss/35.jpg" alt="RGU NSS Activity">

                    </div>

                </div>

            </section>


            <!-- ================= CONTACT ================= -->

            <section id="nss-contact" class="rgu-nss-section">

                <div class="rgu-nss-section-number">
                    CONTACT US
                </div>

                <h2 class="rgu-nss-section-title">
                    Reach Out to the NSS Cell
                </h2>


                <div class="rgu-nss-contact-grid">

                    <div class="rgu-nss-contact-card">

                        <h4>Office Address</h4>

                        <p>
                            RGU NSS Cell, Room No. H404,<br>
                            GHI Block, The Assam Royal Global University,<br>
                            Betkuchi, NH 27, Guwahati – 781035
                        </p>

                    </div>


                    <div class="rgu-nss-contact-card">

                        <h4>Contact Information</h4>

                        <p>
                            Email:
                            <a href="mailto:nss@rgu.ac">
                                nss@rgu.ac
                            </a>
                            <br>

                            Mon–Fri: 9 AM – 5 PM
                        </p>

                    </div>

                </div>

            </section>


        </main>

    </div>
    <!-- ================= END NSS PAGE ================= -->

    <script>
    document.addEventListener("DOMContentLoaded", function () {

        const nssPage = document.querySelector(".rgu-nss-page");

        if (!nssPage) return;


        /* =========================================
            NSS SIDEBAR NAVIGATION
        ========================================= */

        const sidebarLinks =
            nssPage.querySelectorAll(".rgu-nss-sidebar a");

        const sections = [];

        sidebarLinks.forEach(function (link) {

            const targetId = link.getAttribute("href");

            if (!targetId || !targetId.startsWith("#")) return;

            const section = document.querySelector(targetId);

            if (section) {
                sections.push(section);
            }

        });


        /* =========================================
            SMOOTH SCROLL
        ========================================= */

        sidebarLinks.forEach(function (link) {

            link.addEventListener("click", function (event) {

                const targetId = this.getAttribute("href");

                if (!targetId || !targetId.startsWith("#")) return;

                const target = document.querySelector(targetId);

                if (!target) return;

                event.preventDefault();

                const headerOffset = 110;

                const targetPosition =
                    target.getBoundingClientRect().top +
                    window.pageYOffset -
                    headerOffset;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

            });

        });


        /* =========================================
            ACTIVE SIDEBAR LINK
        ========================================= */

        function updateActiveNssLink() {

            let currentSection = "";

            const scrollPosition =
                window.pageYOffset + 160;

            sections.forEach(function (section) {

                const sectionTop = section.offsetTop;

                const sectionBottom =
                    sectionTop + section.offsetHeight;

                if (
                    scrollPosition >= sectionTop &&
                    scrollPosition < sectionBottom
                ) {

                    currentSection = section.id;

                }

            });


            sidebarLinks.forEach(function (link) {

                link.classList.remove("active");

                if (
                    link.getAttribute("href") ===
                    "#" + currentSection
                ) {

                    link.classList.add("active");

                }

            });

        }


        window.addEventListener(
            "scroll",
            updateActiveNssLink,
            { passive: true }
        );

        updateActiveNssLink();


        /* =========================================
            INFINITE MEDIA GALLERY
        ========================================= */

        const marqueeTrack =
            nssPage.querySelector(".rgu-nss-marquee-track");

        if (
            marqueeTrack &&
            !marqueeTrack.dataset.cloned
        ) {

            const originalImages =
                Array.from(marqueeTrack.children);

            originalImages.forEach(function (image) {

                const clone = image.cloneNode(true);

                clone.setAttribute(
                    "aria-hidden",
                    "true"
                );

                marqueeTrack.appendChild(clone);

            });

            marqueeTrack.dataset.cloned = "true";

        }

    });
</script>
@endsection
