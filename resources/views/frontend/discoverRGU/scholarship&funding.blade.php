@extends('frontend/new-master')
@section('title', 'RGU Scholarships 2026-27: Royal Merit, Bhutanese & Merit-Based')
@section('meta_description',
    'Apply for RGU Scholarships 2025-26! Check eligibility for the Royal Merit Scholarship and
    specific schemes for Bhutanese students. Financial aid and national schemes available.')
@section('meta_keywords', 'Scholarship')
@section('content')

<!-- Floating Scholarship Button -->
    <a href="https://rgu.renocampus.com/scholarship/scholarshipForm" class="rgu-floating-scholarship-btn" target="_blank">
        Apply for Scholarship
    </a>

    <style>
        /* Floating Scholarship Button */
        .rgu-floating-scholarship-btn {
            position: fixed;
            right: 25px;
            bottom: 30px;
            z-index: 9999;

            background: linear-gradient(135deg, #d95b28, #f27c2b);
            color: #fff;
            text-decoration: none;

            padding: 15px 24px;
            border-radius: 50px;

            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 700;

            box-shadow: 0 8px 25px rgba(217, 91, 40, 0.35);

            transition: all 0.3s ease;

            animation: rguScholarPulse 2s infinite;
        }

        .rgu-floating-scholarship-btn:hover {
            color: #fff;
            text-decoration: none;

            transform: translateY(-3px);

            box-shadow: 0 12px 30px rgba(217, 91, 40, 0.45);
        }

        @keyframes rguScholarPulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(217, 91, 40, 0.6);
            }

            70% {
                transform: scale(1.03);
                box-shadow: 0 0 0 18px rgba(217, 91, 40, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(217, 91, 40, 0);
            }
        }

        /* Mobile */
        @media (max-width: 768px) {
            .rgu-floating-scholarship-btn {
                right: 15px;
                bottom: 20px;

                padding: 13px 18px;
                font-size: 14px;
            }
        }
    </style>


    <!-- only insert these  -->
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/Admission-Scholarship-Funding-Scholarship/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Scholarship</h1>
            <div class="pg-hero-breadcrumb">
                Admission / Scholarship & Funding / Scholarship
            </div>
        </div>

    </section>


    <!-- ==========================
             SCHOLARSHIP & FUNDING
        ========================== -->

    <section class="rgu-sch-section">
        <div class="container">

            <div class="rgu-sch-accordion">

                <!-- Item 1 -->
                <div class="rgu-sch-item">

                    <button class="rgu-sch-header" type="button">

                        <span>
                            Royal Suraksha: 50% Scholarship For Wards Of Serving & Retired Security Personnel
                            (Military/Paramilitary/North-Eastern Police Forces)
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div class="rgu-sch-content">
                        <div class="rgu-sch-inner">

                            <!-- Table -->

                            <div class="table-responsive">

                                <table class="rgu-sch-table">

                                    <thead>

                                        <tr>
                                            <th rowspan="3">
                                                Scholarship Offered On Course Fee
                                            </th>

                                            <th>
                                                FOR PG PROGRAMMES
                                            </th>

                                            <th>
                                                FOR UG PROGRAMMES
                                            </th>
                                        </tr>

                                        <tr>
                                            <th colspan="2">
                                                PERCENTAGE OF MARKS REQUIRED IN
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                GRADUATION, ANY STREAM
                                            </th>

                                            <th>
                                                10+2 / HS / DIPLOMA (ANY BOARD)
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><strong>50%</strong></td>

                                            <td colspan="2">
                                                As per the required minimum eligibility criteria
                                                of the respective programme/course
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- Eligibility -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Eligibility Criteria
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        The scholarship is applicable to the wards of serving &
                                        retired:

                                        <ol type="a">

                                            <li>
                                                Military (Army/Navy/Air Force)
                                            </li>

                                            <li>
                                                Paramilitary
                                                (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam Rifles/NSG/SFF/SPG)
                                            </li>

                                            <li>
                                                Police Personnel residing in the Northeastern region.
                                            </li>

                                        </ol>
                                    </li>

                                    <li>
                                        A student availing scholarship under Royal Suraksha is
                                        required to pay the one-time Admission Fee, Registration
                                        Fee and Caution Money (refundable) at the time of admission.
                                    </li>

                                    <li>
                                        The scholarship is awarded annually and continuation in the
                                        subsequent year is governed by the norms laid down for the
                                        continuation of Royal Suraksha.
                                    </li>

                                    <li>
                                        In case a student availing Royal Suraksha wishes to avail
                                        hostel/transportation facilities, he/she will have to pay
                                        the full hostel/transportation fees as prescribed for other
                                        students.
                                    </li>

                                    <li>
                                        The scholarship may not be applicable for courses governed
                                        by Regulatory Bodies (AICTE, COA, PCI, INC, ANMHVC,
                                        BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of scholarship for a
                                        particular programme is not allowed. As such, the scholarship
                                        awarded stands cancelled. If the student still wishes to
                                        apply for the scholarship, a fresh application has to be
                                        submitted.
                                    </li>

                                    <li>
                                        Students can avail only one scholarship from any source in
                                        a particular academic year. If a student is found availing
                                        more than one scholarship during the same academic year from
                                        different sources, the scholarship awarded by the University
                                        will stand cancelled for that academic year and the student
                                        will be liable to pay the full course fee.
                                    </li>

                                    <li>
                                        If a student wishes to retain the University's scholarship
                                        and withdraw the scholarship received from other source(s)
                                        for the same academic year, the student must refund the
                                        entire scholarship amount received from the other source(s)
                                        to the University before availing the University's scholarship.

                                        If a student is applying for any other scholarship, the
                                        student needs to submit an undertaking that the RGU
                                        scholarship will be returned if he/she receives any other
                                        scholarship from other sources.
                                    </li>

                                    <li>
                                        Final decision of granting scholarship lies with the
                                        University Scholarship Committee and/or Competent Authority/s.
                                    </li>

                                </ol>

                            </div>


                            <!-- Continuation -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Continuation of Scholarship for subsequent years will be governed as follows:
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Class attendance of the students must be 75% and above
                                        in all the subjects in each semester from the previous
                                        academic year.
                                    </li>

                                    <li>
                                        To continue availing scholarship, a student must clear all
                                        the papers in each semester and should not carry any backlog
                                        in any semester from the previous academic year and must pass
                                        the semester/annual examination for promotion to the next year.
                                    </li>

                                </ol>

                            </div>


                            <!-- Documents -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Documents Required under the above mentioned Scholarship:
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Scanned copies of the marksheets/gradesheets from Class X onwards.
                                    </li>

                                    <li>
                                        Scanned copies of the serving/retired certificate from the
                                        competent authority claiming scholarship under the said category.
                                    </li>

                                </ol>

                            </div>

                        </div>
                    </div>

                </div>


                <!-- Item 2 -->

                <div class="rgu-sch-item">

                    <button class="rgu-sch-header" type="button">

                        <span>
                            Royal Shaurya : Full freeship to the wards of braveheart security personnels (Scholarship
                            offered on course fee)
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div class="rgu-sch-content">

                        <div class="rgu-sch-inner">

                            <!-- Table -->

                            <div class="table-responsive">

                                <table class="rgu-sch-table">

                                    <thead>

                                        <tr>
                                            <th rowspan="3">
                                                Scholarship Offered On Course Fee
                                            </th>

                                            <th>
                                                FOR PG PROGRAMMES
                                            </th>

                                            <th>
                                                FOR UG PROGRAMMES
                                            </th>
                                        </tr>

                                        <tr>
                                            <th colspan="2">
                                                PERCENTAGE OF MARKS REQUIRED IN
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                GRADUATION, ANY STREAM
                                            </th>

                                            <th>
                                                10+2 / HS / DIPLOMA (ANY BOARD)
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><strong>100%</strong></td>

                                            <td colspan="2">
                                                As per the required minimum eligibility criteria
                                                of the respective programme/course
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- Eligibility -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Eligibility Criteria:
                                </h3>

                                <p>
                                    The Scholarship is applicable to the wards of:
                                </p>

                                <ul class="rgu-sch-list">

                                    <li>
                                        Military (Army/Navy/Air Force)
                                    </li>

                                    <li>
                                        Paramilitary
                                        (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam Rifles/NSG/SFF/SPG)
                                    </li>

                                    <li>
                                        Police Personnel residing in the Northeastern region
                                    </li>

                                </ul>

                                <p class="mt-4">
                                    who have:
                                </p>

                                <ul class="rgu-sch-list">

                                    <li>
                                        Laid their lives while fighting against
                                        Militants/Naxalites/Terrorists/Anti-social Elements.
                                    </li>

                                    <li>
                                        Received Gallantry Medals/Awards.
                                    </li>

                                    <li>
                                        Expired while performing bonafide Government duty service.
                                    </li>

                                </ul>

                                <ol class="rgu-sch-ordered-list mt-4">

                                    <li>
                                        A student availing scholarship under Royal Shaurya is
                                        required to pay the one-time Admission Fee, Registration
                                        Fee and Caution Money (refundable) at the time of admission.
                                    </li>

                                    <li>
                                        The scholarship is awarded annually and continuation in the
                                        subsequent year is governed by the norms laid down for the
                                        continuation of Royal Shaurya.
                                    </li>

                                    <li>
                                        In case a student availing Royal Shaurya wishes to avail
                                        hostel/transportation facilities, he/she will have to pay
                                        the full hostel/transportation fees as prescribed for
                                        other students.
                                    </li>

                                    <li>
                                        The scholarship may not be applicable for Courses Governed
                                        by Regulatory Bodies (AICTE, COA, PCI, INC, ANMHVC,
                                        BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of Scholarship for a
                                        particular programme is not allowed. As such the scholarship
                                        awarded stands cancelled. If the student still wishes to
                                        apply for the scholarship, it needs to submit a fresh
                                        application for the same.
                                    </li>

                                    <li>
                                        The students can avail only one scholarship from any source
                                        in a particular academic year. If a student is found availing
                                        more than one scholarship during the same academic year from
                                        different sources, the scholarship awarded by the University
                                        will stand cancelled for that academic year, and the student
                                        will be liable to pay the full course fee for that academic year.
                                    </li>

                                    <li>
                                        However, if a student wishes to retain the University's
                                        scholarship and withdraw the scholarship received from other
                                        source(s) for the same academic year, the student must refund
                                        the full amount received from the other source(s) to the
                                        University before availing the University's scholarship.

                                        The student is also required to submit an undertaking to
                                        this effect.
                                    </li>

                                    <li>
                                        Final decision of granting scholarship lies with the
                                        University Scholarship Committee and/or Competent Authority/s.
                                    </li>

                                </ol>

                            </div>


                            <!-- Continuation -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Continuation of Scholarship for subsequent years will be governed as follows –
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Class attendance of the students must be 75% and above
                                        in all the subjects in each semester from the previous
                                        academic year.
                                    </li>

                                    <li>
                                        To continue availing scholarship, a student must clear all
                                        the papers in each semester and should not carry any backlog
                                        in any semester from the previous academic year and must
                                        pass the semester/annual examination for promotion to the
                                        next year.
                                    </li>

                                </ol>

                            </div>


                            <!-- Documents -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Documents Required under the above mentioned Scholarship:
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Scanned copies of the marksheets/gradesheets from
                                        Class X onwards.
                                    </li>

                                    <li>
                                        Scanned copies of the certificate from the competent
                                        authority claiming scholarship under the said category.
                                    </li>

                                </ol>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Item 3 -->

                <div class="rgu-sch-item">

                    <button class="rgu-sch-header" type="button">

                        <span>
                            Zubeen Garg Scholarship
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div class="rgu-sch-content">

                        <div class="rgu-sch-inner">

                            <!-- Download Brochure -->

                            <a href="/mobile-assets/pdf/Policy%20Promotion%20of%20Extracurricular%20Activities_Final.pdf"
                                target="_blank" style="padding: 15px 25px; font-size: 18px;" class="btn btn-danger mb-4">
                                Download Brochure
                            </a>


                            <!-- Scholarship Table -->

                            <div class="table-responsive">

                                <table class="rgu-sch-table">

                                    <thead>

                                        <tr>

                                            <th rowspan="2">
                                                CATEGORIES
                                            </th>

                                            <th colspan="3">
                                                SCHOLARSHIP OFFERED ON COURSE FEE
                                            </th>

                                            <th rowspan="2">
                                                For PG/UG Programme
                                                <br>
                                                (Percentage of marks in Graduation / 10+2 / Diploma)
                                            </th>

                                        </tr>

                                        <tr>

                                            <th>100%</th>
                                            <th>50%</th>
                                            <th>25%</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <!-- Sports -->

                                        <tr>

                                            <td>
                                                <strong>Sports</strong>
                                                <br>
                                                (including both individual and team sports)
                                            </td>

                                            <td>
                                                International Athlete / Players
                                            </td>

                                            <td>
                                                National Participants / Award winners
                                                <br><br>

                                                First four positions at All India University level (by AIU)
                                            </td>

                                            <td>
                                                Zonal / State Participants
                                                <br><br>

                                                First three positions at Zonal University level (by AIU)
                                            </td>

                                            <td rowspan="3">
                                                As per the required minimum eligibility criteria of the respective
                                                programme/course
                                            </td>

                                        </tr>


                                        <!-- Cultural Activities -->

                                        <tr>

                                            <td>

                                                <strong>Cultural Activities</strong>

                                                <ul class="mt-3 mb-0">

                                                    <li>Dance</li>
                                                    <li>Music</li>
                                                    <li>Theatre</li>
                                                    <li>Fine Arts</li>

                                                </ul>

                                            </td>


                                            <td>

                                                <ol class="mb-0">

                                                    <li>
                                                        First four positions at National Level Festival conducted by
                                                        Ministry of Youth Cultural and Sports Affairs, Govt. of India.
                                                    </li>

                                                    <li>
                                                        First three positions at All India University level (AIU).
                                                    </li>

                                                    <li>
                                                        Overall Winner of National TV Reality Show.
                                                    </li>

                                                </ol>

                                            </td>


                                            <td>

                                                <ol class="mb-0">

                                                    <li>
                                                        Participated in National Youth Fest conducted by Ministry of
                                                        Youth Affairs & Sports, Govt. of India.
                                                    </li>

                                                    <li>
                                                        Graded artist of Government broadcasting media (DD/AIR).
                                                    </li>

                                                    <li>
                                                        First three positions at Zonal Youth Festivals (AIU).
                                                    </li>

                                                </ol>

                                            </td>


                                            <td>

                                                <ol class="mb-0">

                                                    <li>
                                                        Fourth position at Zonal Youth Festivals (AIU).
                                                    </li>

                                                    <li>
                                                        First three positions at Scheduled State Level Event conducted
                                                        by Ministry of Youth Cultural and Sports Affairs or Sangeet
                                                        Natak Academy.
                                                    </li>

                                                    <li>
                                                        First three positions at Inter Zonal Youth Festivals (AIU).
                                                    </li>

                                                    <li>
                                                        Finalist / Semi-finalist / Quarterfinalist at National TV
                                                        Reality Show.
                                                    </li>

                                                </ol>

                                            </td>

                                        </tr>


                                        <!-- Literary -->

                                        <tr>

                                            <td>
                                                <strong>Literary</strong>
                                            </td>

                                            <td>
                                                National Level Debate Recognition
                                            </td>

                                            <td>
                                                University Level Debate Recognition
                                            </td>

                                            <td>
                                                State / Zonal Debate Recognition
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <!-- Eligibility Criteria -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Eligibility Criteria:
                                </h3>

                                <p>
                                    The scholarship is applicable under the following categories and
                                    candidates must have achieved recognition at
                                    <strong>Inter-University, State, National, or International level</strong>
                                    in the respective field.
                                </p>

                            </div>


                            <!-- Categories Table -->

                            <div class="table-responsive mb-5">

                                <table class="rgu-sch-table">

                                    <thead>

                                        <tr>

                                            <th>
                                                CATEGORIES
                                            </th>

                                            <th>
                                                INCLUDES
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        <!-- Sports -->

                                        <tr>

                                            <td>
                                                <strong>Sports</strong>
                                            </td>

                                            <td>
                                                Football, Cricket, Volleyball, Basketball, Tennis,
                                                Badminton, Table Tennis, Taekwondo, Athletics,
                                                Judo, Karate, Boxing, Swimming and other sports
                                                (subject to approval).
                                            </td>

                                        </tr>


                                        <!-- Dance -->

                                        <tr>

                                            <td>
                                                <strong>Dance</strong>
                                            </td>

                                            <td>
                                                Folk / Classical
                                            </td>

                                        </tr>


                                        <!-- Music -->

                                        <tr>

                                            <td>
                                                <strong>Music</strong>
                                            </td>

                                            <td>

                                                <p>
                                                    <strong>Vocal:</strong>
                                                    Classical / Semi Classical Indian / Folk /
                                                    Light Vocal / Western
                                                </p>

                                                <br>

                                                <p>
                                                    <strong>Instrumental:</strong>
                                                </p>

                                                <ol class="mb-4">

                                                    <li>
                                                        <strong>Percussion:</strong>
                                                        Tabla, Khol, Mridangam, Pakhawaj
                                                    </li>

                                                    <li>
                                                        <strong>Non-Percussion:</strong>
                                                        Sitar, Santoor, Sarod, Flute,
                                                        Harmonium, Violin, Sarangi
                                                    </li>

                                                    <li>
                                                        Folk Instruments
                                                    </li>

                                                </ol>

                                                <p class="mb-0">
                                                    <strong>Western Instruments:</strong>
                                                    Keyboard, Guitar, Bass Guitar,
                                                    Drum, Piano etc.
                                                </p>

                                            </td>

                                        </tr>


                                        <!-- Theatre -->

                                        <tr>

                                            <td>
                                                <strong>Theatre</strong>
                                            </td>

                                            <td>
                                                Any Theatre form / Mime
                                            </td>

                                        </tr>


                                        <!-- Fine Arts -->

                                        <tr>

                                            <td>
                                                <strong>Fine Arts</strong>
                                            </td>

                                            <td>
                                                Painting, Terracotta / Clay Modelling /
                                                Installation / Collage / Photography
                                            </td>

                                        </tr>


                                        <!-- Literary -->

                                        <tr>

                                            <td>
                                                <strong>Literary</strong>
                                            </td>

                                            <td>
                                                Debate
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <!-- Additional Eligibility Conditions -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Additional Eligibility Conditions
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        The Scholarship is applicable under the following categories.
                                        The applicant must have achieved recognition at the
                                        Inter-University, State, National, or International level
                                        in the respective field.
                                    </li>

                                    <li>
                                        The scholarship applied under the Music and Dance category
                                        must hold a Visharad or equivalent qualification from a
                                        recognized Board/University.
                                    </li>

                                    <li>
                                        A student availing the Zubeen Garg Scholarship is required
                                        to pay the one-time Admission Fee, Registration Fee, and
                                        Caution Money (refundable) at the time of admission.
                                    </li>

                                    <li>
                                        A total of 20 scholarships will be offered under each category
                                        (i.e., Sports, Music, Dance, Theatre, Literary, Fine Arts)
                                        in selected programmes as decided by the competent authority.
                                        Scholarship/Financial Aid under different categories may not
                                        be offered in all the programmes of the university.
                                    </li>

                                    <li>
                                        The applicant under the Zubeen Garg Scholarship shall be
                                        required to submit an affidavit stating that once admitted
                                        to the university, they would participate/represent only
                                        from RGU.
                                    </li>

                                </ol>

                            </div>


                            <!-- Other Terms and Conditions -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Other Terms and Conditions
                                </h3>

                                <p>
                                    Flexible Examination Schedules: Sportsperson may be allowed
                                    to take examinations at alternative times if the scheduled
                                    examinations coincide with any event/competition (only for
                                    International/National/State level competitions).
                                </p>

                                <p>
                                    Attendance will be considered on the basis of active
                                    participation and submission of proof of participation.
                                </p>

                                <p>
                                    Performance Trials/Audition will be taken before admission.
                                </p>

                                <p>
                                    Original certificates are required for verification.
                                </p>

                                <p>
                                    Only last two-years performance certificates will be considered.
                                </p>

                                <p>
                                    Deficit in the required attendance for students participating
                                    in Zonal/AIU/National/International Competitions from the date
                                    of departure to the date of return at RGU campus shall be
                                    compensated by treating the days of absence from academic
                                    activities on campus as engagement in extracurricular/co-curricular
                                    activities.
                                </p>

                                <p>
                                    Attendance of the Zubeen Garg scholars in training camps within
                                    and outside the campus will be recorded. Zubeen Garg scholars
                                    shall be required to have 90% attendance in such camps.
                                </p>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        In case a student availing the Zubeen Garg Scholarship
                                        wishes to avail hostel or transportation facilities,
                                        he/she will have to pay the full hostel/transportation
                                        fees as prescribed for other students.
                                    </li>

                                    <li>
                                        The Scholarship may not be applicable for courses governed
                                        by regulatory bodies (AICTE, COA, PCI, INC, ANMHVC,
                                        BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of scholarship for a
                                        particular programme is not allowed. In such cases, the
                                        scholarship awarded stands cancelled. If the student still
                                        wishes to apply for the scholarship, he/she must submit
                                        a fresh application.
                                    </li>

                                    <li>
                                        Students can avail only one scholarship from any source
                                        in a particular academic year. If a student is found
                                        availing more than one scholarship during the same academic
                                        year from different sources, the scholarship awarded by the
                                        University will stand cancelled for that academic year,
                                        and the student will be liable to pay the full course fee
                                        for that academic year.
                                    </li>

                                    <li>
                                        However, if a student wishes to retain the University's
                                        scholarship and withdraw the scholarship received from
                                        other source(s) for the same academic year, the student
                                        must refund the full amount received from the other
                                        source(s) to the University before availing the University's
                                        scholarship. The student is also required to submit an
                                        undertaking to this effect.
                                    </li>

                                    <li>
                                        The final decision regarding the granting of the scholarship
                                        lies with the University Scholarship Committee and/or the
                                        competent authority.
                                    </li>

                                </ol>

                            </div>

                            <!-- Discontinuation of Scholarship -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Discontinuation of Scholarship
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        If the student indulges in any act of indiscipline.
                                    </li>

                                    <li>
                                        If the student fails to participate in Zonal / All India
                                        Inter University competitions or represent RGU due to
                                        any reason.
                                    </li>

                                    <li>
                                        If attendance falls short of the required 90% in the
                                        training camps (within and outside the campus).
                                    </li>

                                    <li>
                                        If any student is found positive in doping tests during
                                        any competition or trials.
                                    </li>

                                    <li>
                                        If any student indulges in criminal activities,
                                        he/she can be terminated from the University.
                                    </li>

                                </ol>

                            </div>


                            <!-- Continuation of Scholarship -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Continuation of Scholarship
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Minimum <strong>75% attendance</strong> in all subjects
                                        in each semester.
                                    </li>

                                    <li>
                                        No backlog and must pass examinations for promotion
                                        to next year.
                                    </li>

                                </ol>

                            </div>


                            <!-- Documents Required -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Documents Required
                                </h3>

                                <p>
                                    Scanned copies of the marksheets/gradesheets from
                                    Class X onwards.
                                </p>

                                <p>
                                    The scholarship under the Sports category must furnish
                                    the following documents:
                                </p>

                                <p>
                                    Certificates of participation or awards in recognized
                                    sports events at national or state levels.
                                </p>

                                <p>
                                    Recognition in Sports:
                                </p>

                                <p>
                                    Olympics / World / Asian / Commonwealth /
                                    SAF Games / Paralympics Games.
                                </p>

                                <p>
                                    Championships under International Sports Federation
                                    (IOC/IOA and/or Ministry of Youth Affairs & Sports
                                    recognized/affiliated Games).
                                </p>

                                <p class="mb-0">
                                    The scholarship applied under the Cultural Activities
                                    category must furnish certificates and other forms of
                                    valid evidence showing participation or recognition in
                                    the mentioned domain.
                                </p>

                            </div>

                        </div>


                    </div>

                </div>


                <!-- Item 4 -->

                <div class="rgu-sch-item">

                    <button class="rgu-sch-header" type="button">

                        <span>
                            Royal Merit Scholarship
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div class="rgu-sch-content">

                        <div class="rgu-sch-inner">

                            <div class="table-responsive">

                                <table class="rgu-sch-table">

                                    <thead>

                                        <tr>

                                            <th rowspan="3">
                                                SCHOLARSHIP OFFERED ON COURSE FEE
                                            </th>

                                            <th>
                                                FOR PG PROGRAMMES
                                            </th>

                                            <th colspan="2">
                                                FOR UG PROGRAMMES
                                            </th>

                                        </tr>

                                        <tr>

                                            <th>
                                                PERCENTAGE OF MARKS REQUIRED IN
                                            </th>

                                            <th colspan="2">
                                                PERCENTAGE OF MARKS REQUIRED IN
                                            </th>

                                        </tr>

                                        <tr>

                                            <th>
                                                GRADUATION, IN ANY STREAM
                                            </th>

                                            <th>
                                                10+2 (CBSE / ICSE BOARD)
                                            </th>

                                            <th>
                                                H.S. / DIPLOMA MARKS (AHSEC / OTHER STATE BOARD / COUNCIL / NIOS)
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>
                                                <strong>100%</strong>
                                            </td>

                                            <td>
                                                90% &amp; above in aggregate
                                            </td>

                                            <td>
                                                96% &amp; above in aggregate
                                            </td>

                                            <td>
                                                93% &amp; above in aggregate
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <strong>50%</strong>
                                            </td>

                                            <td>
                                                86% to 89.99%
                                            </td>

                                            <td>
                                                92% to 95.99%
                                            </td>

                                            <td>
                                                89% to 92.99%
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <strong>25%</strong>
                                            </td>

                                            <td>
                                                82% to 85.99%
                                            </td>

                                            <td>
                                                86% to 91.99%
                                            </td>

                                            <td>
                                                83% to 88.99%
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- Eligibility Criteria -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Eligibility Criteria
                                </h3>

                                <ol class="rgu-sch-ordered-list" type="i">

                                    <li>
                                        A student availing scholarship under Royal Merit Scholarship
                                        is required to pay the one-time Admission Fee, Registration
                                        Fee and Caution money (refundable) at the time of admission.
                                    </li>

                                    <li>
                                        The scholarship is awarded annually and continuation in the
                                        subsequent year is governed by the norms laid down for the
                                        continuation of Royal Merit Scholarship.
                                    </li>

                                    <li>
                                        In case a student availing Royal Merit Scholarship wishes
                                        to avail hostel/transportation facilities, he/she will have
                                        to pay the full hostel/transportation fees as prescribed
                                        for other students.
                                    </li>

                                    <li>
                                        The Scholarship may not be applicable for Courses Governed
                                        by Regulatory Bodies (AICTE, COA, PCI, INC, ANMHVC,
                                        BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of Scholarship for a
                                        particular programme is not allowed. As such the scholarship
                                        awarded stands cancelled. If the student still wishes to
                                        apply for the scholarship, it needs to submit a fresh
                                        application for the same.
                                    </li>

                                    <li>
                                        The students can avail only one scholarship from any source
                                        in a particular academic year. If a student is found availing
                                        more than one scholarship during the same academic year from
                                        different sources, the scholarship awarded by the University
                                        will stand cancelled for that particular academic year and
                                        the student will be liable to pay the full course fee for
                                        that academic year.
                                    </li>

                                    <li>
                                        However, if a student wishes to retain the University's
                                        scholarship and withdraw the scholarship received from other
                                        source(s) for the same academic year, the student must refund
                                        the full amount received from the other source(s) to the
                                        University before availing the University's scholarship.

                                        The student is also required to submit an undertaking to
                                        this effect.
                                    </li>

                                    <li>
                                        Final decision of granting scholarship lies with the
                                        University Scholarship Committee and/or Competent Authority/s.
                                    </li>

                                </ol>

                            </div>

                            <!-- Continuation of Scholarship -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Continuation of Scholarship for subsequent years will be governed as follows –
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Class attendance of the students must be 75% and above
                                        in all the subjects in each semester from the previous
                                        academic year.
                                    </li>

                                    <li>
                                        To continue availing scholarship, a student must clear
                                        all the papers in each semester and should not carry
                                        any backlog in any semester from the previous academic
                                        year and must pass the semester/annual examination for
                                        promotion to the next year.
                                    </li>

                                </ol>

                            </div>


                            <!-- Documents Required -->

                            <div class="rgu-sch-block">

                                <h3>
                                    Documents Required under the above mentioned Scholarship:
                                </h3>

                                <ol class="rgu-sch-ordered-list">

                                    <li>
                                        Scanned copies of the marksheets / gradesheets from
                                        Class X onwards.
                                    </li>

                                </ol>

                            </div>








                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <style>
        /*=========================
        SCHOLARSHIP
        =========================*/

        .rgu-sch-section {
            padding: 80px 0;
            background: #e9eef6;
        }

        .rgu-sch-item {
            margin-bottom: 14px;
        }

        .rgu-sch-header {
            width: 100%;
            border: none;
            border-radius: 10px;
            background: #2f4e89;
            color: #fff;

            padding: 16px 24px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.45rem;

            cursor: pointer;
            transition: .3s;
        }

        .rgu-sch-header:hover {
            background: #36599f;
        }

        .rgu-sch-item.active .rgu-sch-header {
            background: #d95b28;
        }

        .rgu-sch-header i {
            font-size: 1.8rem;
            transition: .4s;
        }

        .rgu-sch-item.active .rgu-sch-header i {
            transform: rotate(180deg);
        }

        .rgu-sch-content {
            max-height: 0;
            overflow: hidden;

            opacity: 0;

            transition:
                max-height .7s ease,
                opacity .4s ease;
        }

        .rgu-sch-item.active .rgu-sch-content {
            max-height: 6000px;
            opacity: 1;
        }

        .rgu-sch-inner {
            padding: 35px 0 20px;
        }


        /* Table */

        .rgu-sch-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }

        .rgu-sch-table th {
            background: #2f4e89;
            color: #fff;

            padding: 16px;
            border: 1px solid rgba(255, 255, 255, .15);

            text-align: center;

            font-family: 'Inter', sans-serif;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .rgu-sch-table td {
            background: #dfe7f4;

            padding: 14px;
            border: 1px solid #c9d3e4;

            font-family: 'Inter', sans-serif;
            font-size: 1.35rem;

            color: #5f6675;
        }


        /* Blocks */

        .rgu-sch-block {
            margin-bottom: 45px;
        }

        .rgu-sch-block h3 {
            font-family: 'Playfair Display', serif;
            color: #2f4e89;
            font-size: 3rem;
            margin-bottom: 25px;
        }


        /* Lists */

        .rgu-sch-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .rgu-sch-list li {
            position: relative;

            padding-left: 28px;
            margin-bottom: 20px;

            color: #5f6675;

            font-family: 'Inter', sans-serif;
            font-size: 1.45rem;
            line-height: 1.9;
        }

        .rgu-sch-list li:before {
            content: '';

            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: #d95b28;

            position: absolute;
            left: 0;
            top: 12px;
        }


        /* Mobile */

        @media(max-width:767px) {

            .rgu-sch-section {
                padding: 60px 0;
            }

            .rgu-sch-header {
                font-size: 1.3rem;
                padding: 15px 18px;
            }

            .rgu-sch-block h3 {
                font-size: 2.4rem;
            }

            .rgu-sch-table {
                min-width: 700px;
            }
        }
    </style>

    <style>
        /* Ordered Lists */

        .rgu-sch-ordered-list {
            margin: 0;
            padding-left: 3rem;

            color: #5f6675;

            font-family: 'Inter', sans-serif;
            font-size: 1.45rem;
            line-height: 2;
        }

        .rgu-sch-ordered-list>li {
            margin-bottom: 1.8rem;
        }

        .rgu-sch-ordered-list ol {
            margin-top: 1.5rem;
            padding-left: 2.5rem;
        }

        .rgu-sch-ordered-list ol li {
            margin-bottom: 1rem;
        }

        .rgu-sch-ordered-list li::marker {
            color: #2f4e89;
            font-weight: 600;
        }

        .rgu-sch-table tbody td {
            text-align: center;
        }

        .rgu-sch-table tbody td:nth-child(2) {
            text-align: center;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const accordionItems = document.querySelectorAll(".rgu-sch-item");

            // Ensure all accordions are closed by default
            accordionItems.forEach(item => {
                item.classList.remove("active");
            });

            // Accordion click functionality
            document.querySelectorAll(".rgu-sch-header").forEach(header => {

                header.addEventListener("click", function() {

                    const currentItem = this.closest(".rgu-sch-item");

                    // Close all other accordions
                    accordionItems.forEach(item => {
                        if (item !== currentItem) {
                            item.classList.remove("active");
                        }
                    });

                    // Toggle the clicked accordion
                    currentItem.classList.toggle("active");

                });

            });

        });
    </script>

    <!-- only insert these  -->

@endsection
@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "OfferCatalog",
  "name": "Royal Global University Comprehensive Scholarship List",
  "description": "Details on the Royal Merit, Royal Endowment, Royal Suraksha (Security Personnel), and Hope for Manipur (Violence Affected Families) scholarships.",
  "url": "https://www.rgu.ac/scholarships",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Royal Global University (RGU)",
    "sameAs": "https://www.rgu.ac/"
  },
  "itemListElement": [
    // --- 1. ROYAL MERIT - ON ADMISSION SCHOLARSHIP (Merit-Based) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Merit - On Admission Scholarship (Up to 100% Fee Waiver)"
      },
      "description": "Merit scholarship based on 10+2 or Graduation scores. Requires minimum 96% (CBSE) or 91% (HS/State Board) for 100% waiver, with a refundable Caution Money of Rs. 10000/- only.",
      "category": "Merit-based",
      "eligibleRegion": { "@type": "Country", "name": "IN" },
      "priceCurrency": "INR",
      "minValue": 25,
      "maxValue": 100,
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "Percentage of Annual Fee Waived"
      }
    },
    // --- 2. ROYAL SHAURYA (Security Personnel Wards) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Shaurya: Full Freeship for Wards of Braveheart Security Personnels (Military/Paramilitary/Police Forces)"
      },
      "description": "100% Freeship (Annual, Registration, Admission Fees waived) for wards of Defense/Paramilitary/Police Personnel who laid their lives, received gallantry awards, or expired on duty (N.E. India). Requires Rs. 10000/- refundable Caution Money only.",
      "category": "Special Category - Defense/Security",
      "eligibleRegion": { "@type": "Country", "name": "IN" },
      "priceCurrency": "INR",
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "100% Fee Waiver"
      }
    },
    // --- 3. ROYAL ENDOWMENT (Socio-Economic/Special) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Endowment & Other Scholarship (Socio-Economic/Arts/Sports)"
      },
      "description": "Scholarships offering 25% or 50% on annual fees for special categories: Single Parent Wards, Wards of Teaching Professionals, Sports/Arts Participants (State/National), Differently-abled students, and Wards of Padma/Assam State Awardees.",
      "category": "Socio-Economic / Arts / Sports",
      "eligibleRegion": { "@type": "Country", "name": "IN" }
    },
    // --- 4. HOPE FOR MANIPUR SCHOLARSHIP (Disaster Relief) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Hope for Manipur Scholarship: 100% Admission Fee Waiver"
      },
      "description": "100% Admission Fee Waiver for students from violence affected families of Manipur, conditional on securing admission to UG or PG program.",
      "category": "Special Category - Violence Affected Families",
      "eligibleRegion": { "@type": "State", "name": "Manipur" },
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "100% Admission Fee Waived"
      }
    }
  ]
}
</script>
@endpush
