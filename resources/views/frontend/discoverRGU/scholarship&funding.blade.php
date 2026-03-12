@extends('frontend.master')
@section('title', 'RGU Scholarships 2026-27: Royal Merit, Bhutanese & Merit-Based')
@section('meta_description',
    'Apply for RGU Scholarships 2025-26! Check eligibility for the Royal Merit Scholarship and
    specific schemes for Bhutanese students. Financial aid and national schemes available.')
@section('meta_keywords', 'Scholarship')
@section('content')
<div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>
        <style>

        .section-body {
            font-family: 'Times New Roman', Times, serif;
            background: url('mobile-assets/department-all/bg.svg') center/cover no-repeat;
            padding: 3.125rem 0;
        }

        /* accordion */

        .scholarship-item {
            border: none;
            margin-bottom: .75rem;
        }

        .scholarship-btn {
            background: #132b4b;
            color: #fff;
            display: flex;
            align-items: center;
            gap: .9rem;
            padding: 1.1rem 1.25rem;
            font-weight: 500;
        }

        .scholarship-btn:not(.collapsed) {
            background: #132b4b;
            color: #fff;
            box-shadow: none;
        }

        .scholarship-btn:focus {
            box-shadow: none;
        }

        .scholarship-btn::after {
            filter: brightness(0) invert(1);
        }

        .scholarship-label {
            background: #f39c12;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: .35rem;
            font-weight: 700;
            flex-shrink: 0;
        }

        .accordion-body {
            background: #f9f9f9;
            padding: 1.5rem;
        }

        /* tables */

        .scholarship-table thead th {
            background: #132b4b;
            color: #fff;
            padding: 1rem;
            border: 1px solid #e5e5e5;
        }

        .scholarship-table tbody td {
            background: #f2f2f2;
            padding: 1rem;
        }

        .scholarship-table .percent {
            font-weight: 700;
        }

        .scholarship-table .left-head {
            width: 35%;
        }

        .merit-table thead th {
            background: #132b4b;
            color: #fff;
            padding: 1rem;
        }

        .merit-table td {
            padding: 1rem;
        }

        /* headings */

        .section-title {
            color: #132b4b;
            margin-top: 1.5rem;
            margin-bottom: .6rem;
            font-weight: 600;
        }

        /* responsive */

        @media (max-width:1024px) {
            .website {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        @media (min-width:1025px) {
            .website {
                display: block;
            }

            .mobile {
                display: none;
            }
        }
    </style>

        <div class="section-body">

        <!-- mobile banner -->

        <div class="mobile">
            <img src="https://www.rgu.ac/mobile-assets/scholarship/mobile-scholarship.png" width="100%" alt="">
        </div>

        <!-- desktop banner -->

        <div class="website">
            <img src="https://www.rgu.ac/mobile-assets/scholarship/web-scholarship.png" width="100%" alt="">
        </div>

        <div class="container my-5">

            <div class="accordion" id="scholarshipAccordion">


                <!-- ===================== A ===================== -->

                <div class="accordion-item scholarship-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed scholarship-btn" data-bs-toggle="collapse"
                            data-bs-target="#scholarshipA">

                            <span class="scholarship-label">A</span>

                            Royal Suraksha: 50% Scholarship For Wards Of Serving & Retired Security Personnel (Military/Paramilitary/North-Eastern Police Forces)

                        </button>

                    </h2>

                    <div id="scholarshipA" class="accordion-collapse collapse" data-bs-parent="#scholarshipAccordion">

                        <div class="accordion-body">

                            <div class="table-responsive">
                                <table class="table scholarship-table table-bordered text-center align-middle">

                                    <thead>

                                        <tr>
                                            <th rowspan="3" class="left-head">
                                                SCHOLARSHIP OFFERED ON COURSE FEE
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
                                                10+2/ HS/ DIPLOMA (ANY BOARD)
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="percent">50%</td>

                                            <td colspan="2">
                                                As per the required minimum eligibility criteria of the respective
                                                programme/course
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                            <div class="content">

                                <h5><strong>ELIGIBILITY CRITERIA</strong></h5>

                                <ol type="i">

                                    <li>
                                        The Scholarship is applicable to the wards of serving & retired:
                                        <ol type="a">
                                            <li>Military (Army/Navy/Air Force)</li>
                                            <li>Paramilitary (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam Rifles/NSG/SFF/SPG)</li>
                                            <li>Police Personnel residing in the Northeastern region</li>
                                        </ol>
                                    </li>

                                    <li>
                                        A student availing scholarship under Royal Suraksha is required to pay the
                                        one-time
                                        Admission Fee, Registration Fee and Caution money (refundable) at the time of
                                        admission.
                                    </li>

                                    <li>
                                        The scholarship is awarded annually and continuation in the subsequent year is
                                        governed
                                        by the norms laid down for the continuation of Royal Suraksha.
                                    </li>

                                    <li>
                                        In case a student, availing Royal Suraksha, wishes to avail
                                        hostel/transportation
                                        facilities, he/she will have to pay the full hostel/transportation fees as
                                        prescribed
                                        for other students.
                                    </li>

                                    <li>
                                        The Scholarship may not be applicable for Courses Governed by Regulatory Bodies
                                        (AICTE,
                                        COA, PCI, INC, ANMHVC, BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of Scholarship for a particular programme is
                                        not
                                        allowed. As such the scholarship awarded stands cancelled. If the student still
                                        wishes
                                        to apply for the scholarship, it needs to submit a fresh application for the
                                        same.
                                    </li>

                                    <li>
                                        The students can avail only one scholarship from any source in a particular
                                        academic
                                        year. If a student is found availing more than one scholarship during the same
                                        academic
                                        year from different sources, the scholarship awarded by the University will
                                        stand
                                        cancelled for that particular academic year, and the student will be liable to
                                        pay the
                                        full course fee for that academic year.
                                    </li>

                                    <li>
                                        However, if a student wishes to retain the scholarship offered by the University
                                        and
                                        withdraw the scholarship received from other source(s) for the same academic
                                        year, the
                                        student must refund the entire scholarship amount received from the other
                                        source(s) to
                                        the University before availing the University’s scholarship. If a student is
                                        applying
                                        for any other scholarships, the student needs to submit an undertaking that the
                                        RGU
                                        scholarship will be returned if he/she receives any other scholarship from other
                                        sources.
                                    </li>

                                    <li>
                                        Final decision of granting scholarship lies with the University Scholarship
                                        Committee
                                        and/or Competent Authority/s.
                                    </li>

                                </ol>


                                <h5 class="mt-4"><strong>Continuation of Scholarship for subsequent years will be
                                        governed as
                                        follows –</strong></h5>

                                <ol>
                                    <li>
                                        Class attendance of the students must be 75% and above in all the subjects in
                                        each
                                        semester from the previous academic year.
                                    </li>

                                    <li>
                                        To continue availing scholarship, a student must clear all the papers in each
                                        semester
                                        and should not carry any backlog in any semester from the previous academic year
                                        and
                                        must pass the semester/annual examination for promotion to the next year.
                                    </li>
                                </ol>


                                <h5 class="mt-4"><strong>Documents Required under the above mentioned
                                        Scholarship:</strong></h5>

                                <ol>
                                    <li>
                                        Scanned copies of the marksheets/gradesheets from Class X onwards.
                                    </li>

                                    <li>
                                        Scanned copies of the serving/retired certificate from the competent authority
                                        claiming
                                        scholarship under the said category.
                                    </li>
                                </ol>

                            </div>

                        </div>

                    </div>
                </div>



                <!-- ===================== B ===================== -->

                <div class="accordion-item scholarship-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed scholarship-btn" data-bs-toggle="collapse"
                            data-bs-target="#scholarshipB">

                            <span class="scholarship-label">B</span>

                            Royal Shaurya : Full freeship to the wards of braveheart security personnels (Scholarship offered on course fee)

                        </button>

                    </h2>

                    <div id="scholarshipB" class="accordion-collapse collapse" data-bs-parent="#scholarshipAccordion">

                        <div class="accordion-body">

                            <div class="table-responsive">
                                <table class="table scholarship-table table-bordered text-center align-middle">

                                    <thead>

                                        <tr>
                                            <th rowspan="3" class="left-head">
                                                SCHOLARSHIP OFFERED ON COURSE FEE
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
                                                10+2/ HS/ DIPLOMA (ANY BOARD)
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="percent">100%</td>

                                            <td colspan="2">
                                                As per the required minimum eligibility criteria of the respective
                                                programme/course
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                            <div class="content">

                                <h5><strong>ELIGIBILITY CRITERIA:</strong></h5>

                                <p>The Scholarship is applicable to the wards of:</p>

                                <ul>
                                    <li>Military (Army/Navy/Air Force)</li>
                                    <li>Paramilitary (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam Rifles/NSG/SFF/SPG)</li>
                                    <li>Police Personnel residing in the Northeastern region</li>
                                </ul>

                                <p>who have:</p>

                                <ul>
                                    <li>Laid their lives while fighting against
                                        Militants/Naxalites/Terrorists/Anti-social Elements.</li>
                                    <li>Received Gallantry Medals/Awards.</li>
                                    <li>Expired while performing bonafide Govt. duty service.</li>
                                </ul>

                                <ol>

                                    <li>
                                        A student availing scholarship under Royal Shaurya is required to pay the
                                        one-time Admission Fee, Registration Fee and Caution money (refundable) at the
                                        time of admission.
                                    </li>

                                    <li>
                                        The scholarship is awarded annually and continuation in the subsequent year is
                                        governed by the norms laid down for the continuation of Royal Shaurya.
                                    </li>

                                    <li>
                                        In case a student, availing Royal Shaurya, wishes to avail hostel/transportation
                                        facilities, he/she will have to pay the full hostel/transportation fees as
                                        prescribed for other students.
                                    </li>

                                    <li>
                                        The Scholarship may not be applicable for Courses Governed by Regulatory Bodies
                                        (AICTE, COA, PCI, INC, ANMHVC, BCI, etc.).
                                    </li>

                                    <li>
                                        Change of programme after the award of Scholarship for a particular programme is
                                        not allowed. As such the scholarship awarded stands cancelled. If the student
                                        still wishes to apply for the scholarship, it needs to submit a fresh
                                        application for the same.
                                    </li>

                                    <li>
                                        The students can avail only one scholarship from any source in a particular
                                        academic year. If a student is found availing more than one scholarship during
                                        the same academic year from different sources, the scholarship awarded by the
                                        University will stand cancelled for that particular academic year, and the
                                        student will be liable to pay the full course fee for that academic year.
                                    </li>

                                    <li>
                                        However, if a student wishes to retain the University’s scholarship and withdraw
                                        the scholarship received from other source(s) for the same academic year, the
                                        student must refund the full amount received from the other source(s) to the
                                        University before availing the University’s scholarship. The student is also
                                        required to submit an undertaking to this effect.
                                    </li>

                                    <li>
                                        Final decision of granting scholarship lies with the University Scholarship
                                        Committee and/or Competent Authority/s.
                                    </li>

                                </ol>


                                <h5 class="mt-4"><strong>Continuation of Scholarship for subsequent years will be
                                        governed as follows –</strong></h5>

                                <ol>
                                    <li>
                                        Class attendance of the students must be 75% and above in all the subjects in
                                        each semester from the previous academic year.
                                    </li>

                                    <li>
                                        To continue availing scholarship, a student must clear all the papers in each
                                        semester and should not carry any backlog in any semester from the previous
                                        academic year and must pass the semester/annual examination for promotion to the
                                        next year.
                                    </li>
                                </ol>


                                <h5 class="mt-4"><strong>Documents Required under the above mentioned
                                        Scholarship:</strong></h5>

                                <ul>
                                    <li>Scanned copies of the marksheets/gradesheets from Class X onwards.</li>
                                    <li>Scanned copies of the certificate from the competent authority claiming
                                        scholarship under the said category.</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>



                <!-- ===================== C ===================== -->

                <div class="accordion-item scholarship-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed scholarship-btn" data-bs-toggle="collapse"
                            data-bs-target="#scholarshipC">

                            <span class="scholarship-label">C</span>

                            Zubeen Garg Scholarship (Policy for Promotion of Extracurricular Activities)

                        </button>

                    </h2>

                    <div id="scholarshipC" class="accordion-collapse collapse" data-bs-parent="#scholarshipAccordion">

                        <div class="accordion-body">


                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/pdf/Policy%20Promotion%20of%20Extracurricular%20Activities_Final.pdf"
                                class="btn btn-danger mb-3">Download Brochure</a>

                            <div class="table-responsive mb-5">
                                <table class="table table-bordered scholarship-table text-center align-middle">

                                    <thead>
                                        <tr>
                                            <th rowspan="2">CATEGORIES</th>
                                            <th colspan="3">SCHOLARSHIP OFFERED ON COURSE FEE</th>
                                            <th rowspan="2">For PG/UG Programme<br><small>(Percentage of marks in
                                                    Graduation / 10+2 / Diploma)</small></th>
                                        </tr>

                                        <tr>
                                            <th>100%</th>
                                            <th>50%</th>
                                            <th>25%</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><strong>Sports</strong><br><small>(including both individual and team
                                                    sports)</small></td>

                                            <td>International Athlete / Players</td>

                                            <td>
                                                National Participants / Award winners<br>
                                                First four positions at All India University level (by AIU)
                                            </td>

                                            <td>
                                                Zonal / State Participants<br>
                                                First three positions at Zonal University level (by AIU)
                                            </td>

                                            <td rowspan="3">
                                                As per the required minimum eligibility criteria of the respective
                                                programme/course
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <strong>Cultural Activities</strong><br>
                                                • Dance<br>
                                                • Music<br>
                                                • Theatre<br>
                                                • Fine Arts
                                            </td>

                                            <td>
                                                1. First four positions at National Level Festival conducted by Ministry
                                                of Youth Cultural and Sports Affairs, Govt. of India<br>
                                                2. First three positions at All India University level (AIU)<br>
                                                3. Overall Winner of National TV Reality Show
                                            </td>

                                            <td>
                                                1. Participated in National Youth Fest conducted by Ministry of Youth
                                                Affairs & Sports, Govt. of India<br>
                                                2. Graded artist of Government broadcasting media (DD/AIR)<br>
                                                3. First three positions at Zonal Youth Festivals (AIU)
                                            </td>

                                            <td>
                                                1. Fourth position at Zonal Youth Festivals (AIU)<br>
                                                2. First three positions at Scheduled State Level Event conducted by
                                                Ministry of Youth Cultural and Sports Affairs or Sangeet Natak
                                                Academy<br>
                                                3. First three positions at Inter Zonal Youth Festivals (AIU)<br>
                                                4. Finalist / Semi-finalist / Quarterfinalist at National TV reality
                                                show
                                            </td>

                                        </tr>

                                        <tr>

                                            <td><strong>Literary</strong></td>

                                            <td>National Level Debate Recognition</td>

                                            <td>University Level Debate Recognition</td>

                                            <td>State / Zonal Debate Recognition</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                            <h5 class="section-title">Eligibility Criteria:</h5>

                            <p>The scholarship is applicable under the following categories and candidates must have
                                achieved recognition at <strong>Inter-University, State, National, or International
                                    level</strong> in the respective field.</p>


                            <div class="table-responsive mb-5">
                                <table class="table table-bordered scholarship-table">

                                    <thead>
                                        <tr>
                                            <th width="30%">CATEGORIES</th>
                                            <th>INCLUDES</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><strong>Sports</strong></td>
                                            <td>
                                                Football, Cricket, Volleyball, Basketball, Tennis, Badminton, Table
                                                Tennis, Taekwondo, Athletics, Judo, Karate, Boxing, Swimming and other
                                                sports (subject to approval).
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Dance</strong></td>
                                            <td>Folk / Classical</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Music</strong></td>
                                            <td>
                                                <strong>Vocal:</strong> Classical / Semi Classical Indian / Folk / Light
                                                Vocal / Western<br><br>

                                                <strong>Instrumental:</strong><br>
                                                1. <strong>Percussion:</strong> Tabla, Khol, Mridangam, Pakhawaj<br>
                                                2. <strong>Non-Percussion:</strong> Sitar, Santoor, Sarod, Flute,
                                                Harmonium, Violin, Sarangi<br>
                                                3. Folk Instruments<br><br>

                                                <strong>Western Instruments:</strong> Keyboard, Guitar, Bass Guitar,
                                                Drum, Piano etc.
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Theatre</strong></td>
                                            <td>Any Theatre form / Mime</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Fine Arts</strong></td>
                                            <td>Painting, Terracotta / Clay Modelling / Installation / Collage /
                                                Photography</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Literary</strong></td>
                                            <td>Debate</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                            <h5 class="section-title">Additional Eligibility Conditions</h5>

                            <ol>
                                <li>
                                    The Scholarship is applicable under the following categories. The applicant must
                                    have achieved recognition at the Inter-University, State, National, or International
                                    level in the respective field.
                                </li>

                                <li>
                                    The scholarship applied under the Music and Dance category must hold a Visharad or
                                    equivalent qualification from a recognized Board/University.
                                </li>

                                <li>
                                    A student availing the Zubeen Garg Scholarship is required to pay the one-time
                                    Admission Fee, Registration Fee, and Caution Money (refundable) at the time of
                                    admission.
                                </li>

                                <li>
                                    A total of 20 scholarships will be offered under each category (i.e., Sports, Music,
                                    Dance, Theatre, Literary, Fine Arts) in selected programmes as decided by the
                                    competent authority. Scholarship/Financial Aid under different categories may not be
                                    offered in all the programmes of the university.
                                </li>

                                <li>
                                    The applicant under the Zubeen Garg Scholarship shall be required to submit an
                                    affidavit stating that once admitted to the university, they would
                                    participate/represent only from RGU.
                                </li>
                            </ol>


                            <h5 class="section-title">Other Terms and Conditions</h5>

                            <ul>
                                <li>
                                    Flexible Examination Schedules: Sportsperson may be allowed to take examinations at
                                    alternative times if the scheduled examinations coincide with any event/competition
                                    (only for International/National/State level competitions).
                                </li>

                                <li>
                                    Attendance will be considered on the basis of active participation and submission of
                                    proof of participation.
                                </li>

                                <li>
                                    Performance Trials/Audition will be taken before admission.
                                </li>

                                <li>
                                    Original certificates are required for verification.
                                </li>

                                <li>
                                    Only last two-years performance certificates will be considered.
                                </li>

                                <li>
                                    Deficit in the required attendance for students participating in
                                    Zonal/AIU/National/International Competitions from the date of departure to the date
                                    of return at RGU campus shall be compensated by treating the days of absence from
                                    academic activities on campus as engagement in extracurricular/co-curricular
                                    activities.
                                </li>

                                <li>
                                    Attendance of the Zubeen Garg scholars in training camps within and outside the
                                    campus will be recorded. Zubeen Garg scholars shall be required to have 90%
                                    attendance in such camps.
                                </li>
                            </ul>

                            <ol>
                                <li>
                                    In case a student availing the Zubeen Garg Scholarship wishes to avail hostel or
                                    transportation facilities, he/she will have to pay the full hostel/transportation
                                    fees as prescribed for other students.
                                </li>

                                <li>
                                    The Scholarship may not be applicable for courses governed by regulatory bodies
                                    (AICTE, COA, PCI, INC, ANMHVC, BCI, etc.).
                                </li>

                                <li>
                                    Change of programme after the award of scholarship for a particular programme is not
                                    allowed. In such cases, the scholarship awarded stands cancelled. If the student
                                    still wishes to apply for the scholarship, he/she must submit a fresh application.
                                </li>

                                <li>
                                    Students can avail only one scholarship from any source in a particular academic
                                    year. If a student is found availing more than one scholarship during the same
                                    academic year from different sources, the scholarship awarded by the University will
                                    stand cancelled for that academic year, and the student will be liable to pay the
                                    full course fee for that academic year.
                                </li>

                                <li>
                                    However, if a student wishes to retain the University’s scholarship and withdraw the
                                    scholarship received from other source(s) for the same academic year, the student
                                    must refund the full amount received from the other source(s) to the University
                                    before availing the University’s scholarship. The student is also required to submit
                                    an undertaking to this effect.
                                </li>

                                <li>
                                    The final decision regarding the granting of the scholarship lies with the
                                    University Scholarship Committee and/or the competent authority.
                                </li>
                            </ol>


                            <h5 class="section-title">Discontinuation of Scholarship</h5>

                            <ol>
                                <li>
                                    If the student indulges in any act of indiscipline.
                                </li>

                                <li>
                                    If the student fails to participate in Zonal / All India Inter University
                                    competitions or represent RGU due to any reason.
                                </li>

                                <li>
                                    If attendance falls short of the required 90% in the training camps (within and
                                    outside the campus).
                                </li>

                                <li>
                                    If any student is found positive in doping tests during any competition or trials.
                                </li>

                                <li>
                                    If any student indulges in criminal activities, he/she can be terminated from the
                                    University.
                                </li>
                            </ol>


                            <h5 class="section-title">Continuation of Scholarship</h5>

                            <ol>
                                <li>Minimum <strong>75% attendance</strong> in all subjects in each semester.</li>
                                <li>No backlog and must pass examinations for promotion to next year.</li>
                            </ol>


                            <h5 class="section-title">Documents Required</h5>

                            <ul>
                                <li>
                                    Scanned copies of the marksheets/gradesheets from Class X onwards.
                                </li>

                                <li>
                                    The scholarship under the Sports category must furnish the following documents:
                                    <ul>
                                        <li>Certificates of participation or awards in recognized sports events at
                                            national or state levels.</li>
                                        <li>
                                            Recognition in Sports:
                                            <ul>
                                                <li>Olympics / World / Asian / Commonwealth / SAF Games / Paralympics
                                                    Games.</li>
                                                <li>
                                                    Championships under International Sports Federation (IOC/IOA and/or
                                                    Ministry of Youth Affairs & Sports recognized/affiliated Games).
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    The scholarship applied under the Cultural Activities category must furnish
                                    certificates and other forms of valid evidence showing participation or recognition
                                    in the mentioned domain.
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>



                <!-- ===================== D ===================== -->

                <div class="accordion-item scholarship-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed scholarship-btn" data-bs-toggle="collapse"
                            data-bs-target="#scholarshipD">

                            <span class="scholarship-label">D</span>

                            Royal Merit Scholarship

                        </button>

                    </h2>

                    <div id="scholarshipD" class="accordion-collapse collapse" data-bs-parent="#scholarshipAccordion">

                        <div class="accordion-body">


                            <div class="table-responsive mb-4">
                                <table class="table table-bordered merit-table text-center align-middle">

                                    <thead>

                                        <tr>
                                            <th rowspan="3">SCHOLARSHIP OFFERED ON COURSE FEE</th>
                                            <th>FOR PG PROGRAMMES</th>
                                            <th colspan="2">FOR UG PROGRAMMES</th>
                                        </tr>

                                        <tr>
                                            <th>PERCENTAGE OF MARKS REQUIRED IN</th>
                                            <th colspan="2">PERCENTAGE OF MARKS REQUIRED IN</th>
                                        </tr>

                                        <tr>
                                            <th>GRADUATION, IN ANY STREAM</th>
                                            <th>10+2 (CBSE / ICSE BOARD)</th>
                                            <th>H.S. / DIPLOMA MARKS (AHSEC / OTHER STATE BOARD / COUNCIL / NIOS)</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><strong>100%</strong></td>
                                            <td>90% & above in aggregate</td>
                                            <td>96% & above in aggregate</td>
                                            <td>93% & above in aggregate</td>
                                        </tr>

                                        <tr>
                                            <td><strong>50%</strong></td>
                                            <td>86% to 89.99%</td>
                                            <td>92% to 95.99%</td>
                                            <td>89% to 92.99%</td>
                                        </tr>

                                        <tr>
                                            <td><strong>25%</strong></td>
                                            <td>82% to 85.99%</td>
                                            <td>86% to 91.99%</td>
                                            <td>83% to 88.99%</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>


                            <h5 class="section-title">Eligibility Criteria</h5>

                            <ol type="i">

                                <li>
                                    A student availing scholarship under Royal Merit Scholarship is required to pay the
                                    one-time Admission Fee, Registration Fee and Caution money (refundable) at the time
                                    of admission.
                                </li>

                                <li>
                                    The scholarship is awarded annually and continuation in the subsequent year is
                                    governed by the norms laid down for the continuation of Royal Merit Scholarship.
                                </li>

                                <li>
                                    In case a student availing Royal Merit Scholarship wishes to avail
                                    hostel/transportation facilities, he/she will have to pay the full
                                    hostel/transportation fees as prescribed for other students.
                                </li>

                                <li>
                                    The Scholarship may not be applicable for Courses Governed by Regulatory Bodies
                                    (AICTE, COA, PCI, INC, ANMHVC, BCI, etc.).
                                </li>

                                <li>
                                    Change of programme after the award of Scholarship for a particular programme is not
                                    allowed. As such the scholarship awarded stands cancelled. If the student still
                                    wishes to apply for the scholarship, it needs to submit a fresh application for the
                                    same.
                                </li>

                                <li>
                                    The students can avail only one scholarship from any source in a particular academic
                                    year. If a student is found availing more than one scholarship during the same
                                    academic year from different sources, the scholarship awarded by the University will
                                    stand cancelled for that particular academic year and the student will be liable to
                                    pay the full course fee for that academic year.
                                </li>

                                <li>
                                    However, if a student wishes to retain the University's scholarship and withdraw the
                                    scholarship received from other source(s) for the same academic year, the student
                                    must refund the full amount received from the other source(s) to the University
                                    before availing the University's scholarship. The student is also required to submit
                                    an undertaking to this effect.
                                </li>

                                <li>
                                    Final decision of granting scholarship lies with the University Scholarship
                                    Committee and/or Competent Authority/s.
                                </li>

                            </ol>


                            <h5 class="section-title">Continuation of Scholarship for subsequent years will be governed
                                as follows –</h5>

                            <ol>

                                <li>
                                    Class attendance of the students must be 75% and above in all the subjects in each
                                    semester from the previous academic year.
                                </li>

                                <li>
                                    To continue availing scholarship, a student must clear all the papers in each
                                    semester and should not carry any backlog in any semester from the previous academic
                                    year and must pass the semester/annual examination for promotion to the next year.
                                </li>

                            </ol>


                            <h5 class="section-title">Documents Required under the above mentioned Scholarship:</h5>

                            <ol>

                                <li>
                                    Scanned copies of the marksheets / gradesheets from Class X onwards.
                                </li>

                            </ol>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



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
